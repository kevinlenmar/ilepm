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
			);

		return $this->db->insert('consumable', $consumable);
	}

	public function add_consumables_category($param){
		$consumable_category = array(
			'category_name'			=>	$param['category'],
			);

		return $this->db->insert('consumable_category', $consumable_category);
	}

	public function add_consumable_quantity($param){
		

		$quantityperconsumableunit = array(
			'idConsumableUnit'	=>	$idConsumable,
			'first'				=>	$param['quantity'],
			'second'			=>	13,
			'summer'			=>	14,
			'year'				=>	$param['year'],
			);

		return $this->db->insert('quantityperconsumableunit', $quantityperconsumableunit);
	}

	public function createConsumablesTableByYear($param){

		$query = $this->db->select('id');

		$query = $this->db->get('consumable');

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

	public function getConsumablesCategory(){

		$this->db->from('consumable_category');
		$this->db->order_by('category_name', 'asc');

		$query = $this->db->get();

		return $query->result();
	}

	public function getConsumablesTable(){		

		$this->db->select('cs.id, cs.part_number, cs.description, qs.first, qs.second, qs.summer');
		$this->db->from('consumable cs');
		$this->db->join('quantityperconsumableunit qs', 'qs.idConsumableUnit = cs.id ', 'left');
		$this->db->group_by('cs.part_number');

		$query = $this->db->get();

		return $query->result();	

	}

	public function getConsumablesTableByCategory($param){

		$this->db->select('cs.id, cs.part_number, cs.description, qs.first, qs.second, qs.summer');
		$this->db->from('consumable cs');
		$this->db->join('quantityperconsumableunit qs', 'qs.idConsumableUnit = cs.id ', 'left');
		$this->db->where('cs.category', $param['category']);
		$this->db->group_by('cs.part_number');

		$query = $this->db->get();

		return $query->result();
	}

	public function getConsumablesTableByCategoryByYear($param){
		$this->db->select('cs.id, cs.part_number, cs.description, qs.first, qs.second, qs.summer');
		$this->db->from('consumable cs');
		$this->db->join('quantityperconsumableunit qs', 'qs.idConsumableUnit = cs.id ', 'left');
		$this->db->where('cs.category', $param['category']);
		$this->db->where('qs.year', $param['year']);
		$this->db->group_by('cs.part_number');

		$query = $this->db->get();

		return $query->result();
	}

	public function getConsumablesTableByYear($param){
		$this->db->select('cs.id, cs.part_number, cs.description, qs.first, qs.second, qs.summer');
		$this->db->from('consumable cs');
		$this->db->join('quantityperconsumableunit qs', 'qs.idConsumableUnit = cs.id ', 'left');
		$this->db->where('qs.year', $param['year']);
		$this->db->group_by('cs.part_number');

		$query = $this->db->get();

		return $query->result();
	}

	public function getConsumableTableById($param){	

		$this->db->select('cs.id, cs.part_number, cs.description, qs.first, qs.second, qs.summer');
		$this->db->from('consumable cs');
		$this->db->join('quantityperconsumableunit qs', 'qs.idConsumableUnit = cs.id ', 'left');
		$this->db->where_in('cs.id', $param['id']);
		$this->db->where('qs.year', $param['year']);
		

		$query = $this->db->get();

		return $query;
	}
}