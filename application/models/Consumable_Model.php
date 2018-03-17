<?php

/**
* 
*/
class Consumable_Model extends CI_Model
{
	
	public function __construct()
	{
		$this->load->database();
		
	}

	public function add_consumables_unit($param){

		$consumable = array(
			'part_number'		=>	$param['part_no'],
			'description'		=>	$param['description'],
			'category'			=>	$param['category'],
			'flag'				=>	0,
			);

		return $this->db->insert('consumable', $consumable);
	}

	public function add_consumables_category($param){
		$consumable_category = array(
			'category_name'			=>	$param['category'],
			);

		return $this->db->insert('consumable_category', $consumable_category);
	}

	public function createConsumablesTableByYear($param){

		$query = $this->db->select('id');
		$query = $this->db->from('consumable');
		$query = $this->db->get();

		foreach ($query->result() as $item) {
			$quantityperconsumableunit = array(
				'idConsumableUnit'	=>	$item->id,
				'first'				=>	0,
				'second'			=>	0,
				'summer'			=>	0,
				'year'				=>	$param['year'],
				);

			$this->db->insert('quantityperconsumableunit', $quantityperconsumableunit);
		}

		return $this->db->trans_complete();
	}

	public function duplicateConsumablesTableByYear($param){
		$query = $this->db->select('qs.idConsumableUnit, qs.first, qs.second, qs.summer');
		$query = $this->db->from('quantityperconsumableunit qs');
		$query = $this->db->where('qs.year', $param['year']);
		$query = $this->db->get();

		foreach ($query->result() as $item) {
			$quantityperconsumableunit = array(
				'idConsumableUnit'	=>	$item->idConsumableUnit,
				'first'				=>	$item->first,
				'second'			=>	$item->second,
				'summer'			=>	$item->summer,
				'year'				=>	$param['yearone'],
			);

			$this->db->insert('quantityperconsumableunit', $quantityperconsumableunit);
		}

		return $this->db->trans_complete();
	}

	public function getConsumablesCategory(){

		$this->db->from('consumable_category');
		$this->db->order_by('category_name', 'asc');

		$query = $this->db->get();

		return $query->result();
	}

	public function getConsumablesTable(){		

		$this->db->select('cs.id, cs.part_number, cs.description, qs.first, qs.second, qs.summer, cs.flag');
		$this->db->from('consumable cs');
		$this->db->join('quantityperconsumableunit qs', 'qs.idConsumableUnit = cs.id ', 'inner');
		$this->db->where('year', NULL);

		$query = $this->db->get();

		return $query->result();	

	}

	public function getConsumablesTableByCategory($param){

		$this->db->select('cs.id, cs.part_number, cs.description, qs.first, qs.second, qs.summer, cs.flag');
		$this->db->from('consumable cs');
		$this->db->join('quantityperconsumableunit qs', 'qs.idConsumableUnit = cs.id ', 'left');
		$this->db->where('cs.category', $param['category']);
		$this->db->group_by('cs.part_number');

		$query = $this->db->get();

		return $query->result();
	}

	public function getConsumablesTableByCategoryByYear($param){

		if($param['category'] == 'all'){
			if($param['filter'] == 'all'){
				$this->db->select('cs.id, cs.part_number, cs.description, qs.first, qs.second, qs.summer, cs.flag');
				$this->db->from('consumable cs');
				$this->db->join('quantityperconsumableunit qs', 'qs.idConsumableUnit = cs.id ', 'left');
				$this->db->where('qs.year', $param['year']);
				$this->db->group_by('cs.part_number');
			}else if($param['filter'] == 'hide'){
				$this->db->select('cs.id, cs.part_number, cs.description, qs.first, qs.second, qs.summer, cs.flag');
				$this->db->from('consumable cs');
				$this->db->join('quantityperconsumableunit qs', 'qs.idConsumableUnit = cs.id ', 'left');
				$this->db->where('qs.year', $param['year']);
				$this->db->where('flag', 1);
				$this->db->group_by('cs.part_number');
			}else if($param['filter'] == 'unhide'){
				$this->db->select('cs.id, cs.part_number, cs.description, qs.first, qs.second, qs.summer, cs.flag');
				$this->db->from('consumable cs');
				$this->db->join('quantityperconsumableunit qs', 'qs.idConsumableUnit = cs.id ', 'left');
				$this->db->where('qs.year', $param['year']);
				$this->db->where('flag', 0);
				$this->db->group_by('cs.part_number');
			}
		}else{

			if($param['filter'] == 'all'){
				$this->db->select('cs.id, cs.part_number, cs.description, qs.first, qs.second, qs.summer, cs.flag');
				$this->db->from('consumable cs');
				$this->db->join('quantityperconsumableunit qs', 'qs.idConsumableUnit = cs.id ', 'left');
				$this->db->where('cs.category', $param['category']);
				$this->db->where('qs.year', $param['year']);
				$this->db->group_by('cs.part_number');
			}else if($param['filter'] == 'hide'){
				$this->db->select('cs.id, cs.part_number, cs.description, qs.first, qs.second, qs.summer, cs.flag');
				$this->db->from('consumable cs');
				$this->db->join('quantityperconsumableunit qs', 'qs.idConsumableUnit = cs.id ', 'left');
				$this->db->where('cs.category', $param['category']);
				$this->db->where('qs.year', $param['year']);
				$this->db->where('flag', 1);
				$this->db->group_by('cs.part_number');
			}else if($param['filter'] == 'unhide'){
				$this->db->select('cs.id, cs.part_number, cs.description, qs.first, qs.second, qs.summer, cs.flag');
				$this->db->from('consumable cs');
				$this->db->join('quantityperconsumableunit qs', 'qs.idConsumableUnit = cs.id ', 'left');
				$this->db->where('cs.category', $param['category']);
				$this->db->where('qs.year', $param['year']);
				$this->db->where('flag', 0);
				$this->db->group_by('cs.part_number');
			}
		}

		$query = $this->db->get();

		return $query->result();
	}

	public function getConsumablesTableByYear($param){

		$this->db->select('cs.id, cs.part_number, cs.description, qs.first, qs.second, qs.summer, cs.flag');
		$this->db->from('consumable cs');
		$this->db->join('quantityperconsumableunit qs', 'qs.idConsumableUnit = cs.id ', 'left');
		$this->db->where('qs.year', $param['year']);
		$this->db->group_by('cs.part_number');

		$query = $this->db->get();

		return $query->result();
	}

	public function getConsumableTableById($param){	

		$this->db->select('cs.id, cs.part_number, cs.description, qs.first, qs.second, qs.summer, qs.year, cs.flag');
		$this->db->from('consumable cs');
		$this->db->join('quantityperconsumableunit qs', 'qs.idConsumableUnit = cs.id ', 'left');
		$this->db->where_in('cs.id', $param['id']);
		$this->db->where('qs.year', $param['year']);

		$query = $this->db->get();

		return $query;
	}

	public function getConsumablesTableByFilter($param){

		if($param['category'] == 'all'){
			if($param['filter'] == 'all'){
				$this->db->select('cs.id, cs.part_number, cs.description, qs.first, qs.second, qs.summer, qs.year, cs.flag');
				$this->db->from('consumable cs');
				$this->db->join('quantityperconsumableunit qs', 'qs.idConsumableUnit = cs.id ', 'left');
				$this->db->where('qs.year', $param['year']);
				$this->db->group_by('cs.part_number');

			}else if($param['filter'] == 'hide'){
				$this->db->select('cs.id, cs.part_number, cs.description, qs.first, qs.second, qs.summer, qs.year, cs.flag');
				$this->db->from('consumable cs');
				$this->db->join('quantityperconsumableunit qs', 'qs.idConsumableUnit = cs.id ', 'left');
				$this->db->where('qs.year', $param['year']);
				$this->db->where('flag', 1);
				$this->db->group_by('cs.part_number');

			}else if($param['filter'] == 'unhide'){
				$this->db->select('cs.id, cs.part_number, cs.description, qs.first, qs.second, qs.summer, qs.year, cs.flag');
				$this->db->from('consumable cs');
				$this->db->join('quantityperconsumableunit qs', 'qs.idConsumableUnit = cs.id ', 'left');
				$this->db->where('qs.year', $param['year']);
				$this->db->where('flag', 0);
				$this->db->group_by('cs.part_number');
			}
		}else{
			if($param['filter'] == 'all'){
				$this->db->select('cs.id, cs.part_number, cs.description, qs.first, qs.second, qs.summer, qs.year, cs.flag');
				$this->db->from('consumable cs');
				$this->db->join('quantityperconsumableunit qs', 'qs.idConsumableUnit = cs.id ', 'left');
				$this->db->where('cs.category', $param['category']);
				$this->db->where('qs.year', $param['year']);
				$this->db->group_by('cs.part_number');

			}else if($param['filter'] == 'hide'){
				$this->db->select('cs.id, cs.part_number, cs.description, qs.first, qs.second, qs.summer, qs.year, cs.flag');
				$this->db->from('consumable cs');
				$this->db->join('quantityperconsumableunit qs', 'qs.idConsumableUnit = cs.id ', 'left');
				$this->db->where('cs.category', $param['category']);
				$this->db->where('qs.year', $param['year']);
				$this->db->where('flag', 1);
				$this->db->group_by('cs.part_number');

			}else if($param['filter'] == 'unhide'){
				$this->db->select('cs.id, cs.part_number, cs.description, qs.first, qs.second, qs.summer, qs.year, cs.flag');
				$this->db->from('consumable cs');
				$this->db->join('quantityperconsumableunit qs', 'qs.idConsumableUnit = cs.id ', 'left');
				$this->db->where('cs.category', $param['category']);
				$this->db->where('qs.year', $param['year']);
				$this->db->where('flag', 0);
				$this->db->group_by('cs.part_number');
			}
		}

		$query = $this->db->get();

		return $query->result();
	}

	public function getConsumablesYear(){
		$this->db->select('year');
		$this->db->from('quantityperconsumableunit');
		$this->db->group_by('year');

		$query = $this->db->get();

		return $query->result();
	}

	public function updateConsumableTableConsumable($param){

		if(isset($param['part_number'])){
			$temp = 'part_number';
			$value = $param['part_number'];
		} if(isset($param['description'])){
			$temp = 'description';
			$value = $param['description'];
		}

		$consumableTable = array(
			$temp	=> $value,
			);

		$this->db->where('id', $param['id']);
		$this->db->update('consumable', $consumableTable);
	}

	public function updateConsumableTableQuantity($param){

		if(isset($param['first'])){
			$temp = 'first';
			$value = $param['first'];
		} if(isset($param['second'])){
			$temp = 'second';
			$value = $param['second'];
		} if(isset($param['summer'])){
			$temp = 'summer';
			$value = $param['summer'];
		}

		$quantityperconsumableunit = array(
			$temp	=>	$value,
			);

		$this->db->where('idConsumableUnit', $param['id']);
		$this->db->where('year', $param['yearone']);	
		$this->db->update('quantityperconsumableunit', $quantityperconsumableunit);
	}

	public function updateFlag($id){

		$this->db->set('flag', 1);
		$this->db->where('id', $id);

		return $this->db->update('consumable');
	}

	public function getConsumableTableByFlag($param){
		$this->db->select('cs.id, cs.part_number, cs.description, qs.first, qs.second, qs.summer, cs.flag');
		$this->db->from('consumable cs');
		$this->db->join('quantityperconsumableunit qs', 'qs.idConsumableUnit = cs.id ', 'left');
		$this->db->where('qs.flag', 1);


		$query = $this->db->get();

		return $query;
	}

	public function updateUnflag($id){
		$this->db->set('flag', 0);
		$this->db->where('id', $id);

		return $this->db->update('consumable');
	}
}