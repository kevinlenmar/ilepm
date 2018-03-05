<?php

/**
* 
*/
class Equipment_Model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
		
	}

	public function add_equipments_unit($param){
		$data = array(
			'ctrl_no'			=>	$param['ctrl_no'],
			'product_name'		=>	$param['prod_name'],
			'serial_no'			=>	$param['serial_no'],
			'procedures'		=>	$param['procedure'],
			'standard_criteria'	=>	$param['criteria'],
			'category'			=>	$param['category'],
			'flag'				=>	0,
			);

		return $this->db->insert('equipment', $data);
	}

	public function add_equipments_category($param){
		$consumable_category = array(
			'category_name'			=>	$param['category'],
			);

		return $this->db->insert('equipment_category', $consumable_category);
	}

	public function createEquipmentTableByYear($param){

		$query = $this->db->select('id');

		$query = $this->db->get('equipment');

		foreach ($query->result() as $items) {
			$data = array(
				'idEquipmentUnit'	=>	$items->id,
				'firstremark'		=>	NULL,
				'secondremark'		=>	NULL,
				'summerremark'		=>	NULL,
				'year'				=>	$param['year'],
				);

			$this->db->insert('remarkperequipmentunit', $data);
		}
		
		return $this->db->trans_complete();
	}

	public function duplicateEquipmentsTableByYear($param){

		$query = $this->db->select('rs.idEquipmentUnit, rs.firstremark, rs.secondremark, rs.summerremark');
		$query = $this->db->from('remarkperequipmentunit rs');
		$query = $this->db->where('rs.year', $param['year']);
		$query = $this->db->get();

		foreach ($query->result() as $items) {
			$remarkperequipmentunit = array(
				'idEquipmentUnit'	=>	$items->idEquipmentUnit,
				'firstremark'		=>	$items->firstremark,
				'secondremark'		=>	$items->secondremark,
				'summerremark'		=>	$items->summerremark,
				'year'				=>	$param['yearone'],
			);

			$this->db->insert('remarkperequipmentunit', $remarkperequipmentunit);
		}

		return $this->db->trans_complete();
	}

	public function getEquipmentCategory(){

		$this->db->from('equipment_category');
		$this->db->order_by('category_name', 'asc');

		$query = $this->db->get();

		return $query->result();
	}

	public function getEquipmentTable(){

		$this->db->select('eq.id, eq.ctrl_no, eq.product_name, eq.serial_no, eq.procedures, eq.standard_criteria, eq.flag, rs.firstremark, rs.secondremark, rs.summerremark');
		$this->db->from('equipment eq');
		$this->db->join('remarkperequipmentunit rs', 'rs.idEquipmentUnit = eq.id ', 'left');
		$this->db->where('flag', 0);

		$query = $this->db->get();

		return $query->result();
	}

	public function getEquipmentYear(){
		$this->db->select('year');
		$this->db->from('remarkperequipmentunit');
		$this->db->group_by('year');

		$query = $this->db->get();

		return $query->result();
	}

	public function getEquipmentTableByCategoryByYear($param){
		if($param['category'] == 'all'){
			if($param['filter'] == 'all'){
				$this->db->select('eq.id, eq.ctrl_no, eq.product_name, eq.serial_no, eq.procedures, eq.standard_criteria, eq.flag, rs.firstremark, rs.secondremark, rs.summerremark');
				$this->db->from('equipment eq');
				$this->db->join('remarkperequipmentunit rs', 'rs.idEquipmentUnit = eq.id ', 'left');
				$this->db->where('rs.year', $param['year']);
				$this->db->group_by('eq.ctrl_no');
			}else if($param['filter'] == 'hide'){
				$this->db->select('eq.id, eq.ctrl_no, eq.product_name, eq.serial_no, eq.procedures, eq.standard_criteria, eq.flag, rs.firstremark, rs.secondremark, rs.summerremark');
				$this->db->from('equipment eq');
				$this->db->join('remarkperequipmentunit rs', 'rs.idEquipmentUnit = eq.id ', 'left');
				$this->db->where('rs.year', $param['year']);
				$this->db->where('flag', 1);
				$this->db->group_by('eq.ctrl_no');
			}else if($param['filter'] == 'unhide'){
				$this->db->select('eq.id, eq.ctrl_no, eq.product_name, eq.serial_no, eq.procedures, eq.standard_criteria, eq.flag, rs.firstremark, rs.secondremark, rs.summerremark');
				$this->db->from('equipment eq');
				$this->db->join('remarkperequipmentunit rs', 'rs.idEquipmentUnit = eq.id ', 'left');
				$this->db->where('rs.year', $param['year']);
				$this->db->where('flag', 0);
				$this->db->group_by('eq.ctrl_no');
			}
		}else{

			if($param['filter'] == 'all'){
				$this->db->select('eq.id, eq.ctrl_no, eq.product_name, eq.serial_no, eq.procedures, eq.standard_criteria, eq.flag, rs.firstremark, rs.secondremark, rs.summerremark');
				$this->db->from('equipment eq');
				$this->db->join('remarkperequipmentunit rs', 'rs.idEquipmentUnit = eq.id ', 'left');
				$this->db->where('eq.category', $param['category']);
				$this->db->where('rs.year', $param['year']);
				$this->db->group_by('eq.ctrl_no');

			}else if($param['filter'] == 'hide'){
				$this->db->select('eq.id, eq.ctrl_no, eq.product_name, eq.serial_no, eq.procedures, eq.standard_criteria, eq.flag, rs.firstremark, rs.secondremark, rs.summerremark');
				$this->db->from('equipment eq');
				$this->db->join('remarkperequipmentunit rs', 'rs.idEquipmentUnit = eq.id ', 'left');
				$this->db->where('eq.category', $param['category']);
				$this->db->where('rs.year', $param['year']);
				$this->db->where('flag', 1);
				$this->db->group_by('eq.ctrl_no');
			}else if($param['filter'] == 'unhide'){
				$this->db->select('eq.id, eq.ctrl_no, eq.product_name, eq.serial_no, eq.procedures, eq.standard_criteria, eq.flag, rs.firstremark, rs.secondremark, rs.summerremark');
				$this->db->from('equipment eq');
				$this->db->join('remarkperequipmentunit rs', 'rs.idEquipmentUnit = eq.id ', 'left');
				$this->db->where('eq.category', $param['category']);
				$this->db->where('rs.year', $param['year']);
				$this->db->where('flag', 0);
				$this->db->group_by('eq.ctrl_no');
			}
		}

		$query = $this->db->get();

		return $query->result();
	}

	public function getEquipmentTableByYear($param){

		$this->db->select('eq.id, eq.ctrl_no, eq.product_name, eq.serial_no, eq.procedures, eq.standard_criteria, eq.flag, rs.firstremark, rs.secondremark, rs.summerremark');
		$this->db->from('equipment eq');
		$this->db->join('remarkperequipmentunit rs', 'rs.idEquipmentUnit = eq.id ', 'left');
		$this->db->where('rs.year', $param['year']);
		$this->db->group_by('eq.ctrl_no');

		$query = $this->db->get();

		return $query->result();
	}

	public function getEquipmentTableByFilter($param){
		if($param['category'] == 'all'){
			if($param['filter'] == 'all'){
				$this->db->select('eq.id, eq.ctrl_no, eq.product_name, eq.serial_no, eq.procedures, eq.standard_criteria, eq.flag, rs.firstremark, rs.secondremark, rs.summerremark');
				$this->db->from('equipment eq');
				$this->db->join('remarkperequipmentunit rs', 'rs.idEquipmentUnit = eq.id ', 'left');
				$this->db->where('rs.year', $param['year']);
				$this->db->group_by('eq.ctrl_no');
			}else if($param['filter'] == 'hide'){
				$this->db->select('eq.id, eq.ctrl_no, eq.product_name, eq.serial_no, eq.procedures, eq.standard_criteria, eq.flag, rs.firstremark, rs.secondremark, rs.summerremark');
				$this->db->from('equipment eq');
				$this->db->join('remarkperequipmentunit rs', 'rs.idEquipmentUnit = eq.id ', 'left');
				$this->db->where('rs.year', $param['year']);
				$this->db->where('flag', 1);
				$this->db->group_by('eq.ctrl_no');
			}else if($param['filter'] == 'unhide'){
				$this->db->select('eq.id, eq.ctrl_no, eq.product_name, eq.serial_no, eq.procedures, eq.standard_criteria, eq.flag, rs.firstremark, rs.secondremark, rs.summerremark');
				$this->db->from('equipment eq');
				$this->db->join('remarkperequipmentunit rs', 'rs.idEquipmentUnit = eq.id ', 'left');
				$this->db->where('rs.year', $param['year']);
				$this->db->where('flag', 0);
				$this->db->group_by('eq.ctrl_no');
			}
		}else{

			if($param['filter'] == 'all'){
				$this->db->select('eq.id, eq.ctrl_no, eq.product_name, eq.serial_no, eq.procedures, eq.standard_criteria, eq.flag, rs.firstremark, rs.secondremark, rs.summerremark');
				$this->db->from('equipment eq');
				$this->db->join('remarkperequipmentunit rs', 'rs.idEquipmentUnit = eq.id ', 'left');
				$this->db->where('eq.category', $param['category']);
				$this->db->where('rs.year', $param['year']);
				$this->db->group_by('eq.ctrl_no');

			}else if($param['filter'] == 'hide'){
				$this->db->select('eq.id, eq.ctrl_no, eq.product_name, eq.serial_no, eq.procedures, eq.standard_criteria, eq.flag, rs.firstremark, rs.secondremark, rs.summerremark');
				$this->db->from('equipment eq');
				$this->db->join('remarkperequipmentunit rs', 'rs.idEquipmentUnit = eq.id ', 'left');
				$this->db->where('eq.category', $param['category']);
				$this->db->where('rs.year', $param['year']);
				$this->db->where('flag', 1);
				$this->db->group_by('eq.ctrl_no');
			}else if($param['filter'] == 'unhide'){
				$this->db->select('eq.id, eq.ctrl_no, eq.product_name, eq.serial_no, eq.procedures, eq.standard_criteria, eq.flag, rs.firstremark, rs.secondremark, rs.summerremark');
				$this->db->from('equipment eq');
				$this->db->join('remarkperequipmentunit rs', 'rs.idEquipmentUnit = eq.id ', 'left');
				$this->db->where('eq.category', $param['category']);
				$this->db->where('rs.year', $param['year']);
				$this->db->where('flag', 0);
				$this->db->group_by('eq.ctrl_no');
			}
		}

		$query = $this->db->get();

		return $query->result();
	}

	public function getEquipmentTableById($param){
		$this->db->select('eq.id, eq.ctrl_no, eq.product_name, eq.serial_no, eq.procedures, eq.standard_criteria, eq.flag, rs.firstremark, rs.secondremark, rs.summerremark, rs.year');
		$this->db->from('equipment eq');
		$this->db->join('remarkperequipmentunit rs', 'rs.idEquipmentUnit = eq.id ', 'left');
		$this->db->where_in('eq.id', $param['id']);
		$this->db->where('rs.year', $param['year']);

		$query = $this->db->get();

		return $query;
	}

	public function updateFlag($id){

		$this->db->set('flag', 1);
		$this->db->where('id', $id);

		return $this->db->update('equipment');
	}

	public function updateUnflag($id){

		$this->db->set('flag', 0);
		$this->db->where('id', $id);

		return $this->db->update('equipment');
	}

	public function updateEquipmentTableEquipment($param){

		if(isset($param['ctrl_no'])){

			$temp = 'ctrl_no';
			$value = $param['ctrl_no'];

		}if(isset($param['product_name'])){

			$temp = 'product_name';
			$value = $param['product_name'];

		}if(isset($param['serial_no'])){

			$temp = 'serial_no';
			$value = $param['serial_no'];

		}if(isset($param['procedures'])){

			$temp = 'procedures';
			$value = $param['procedures'];

		}if(isset($param['standard_criteria'])){

			$temp = 'standard_criteria';
			$value = $param['standard_criteria'];

		}

		$equipmentTable = array(
			$temp => $value,
			);

		$this->db->where('id', $param['id']);
		$this->db->update('equipment', $equipmentTable);
	}

	public function updateEquipmentTableQuantity($param){
		if(isset($param['first'])){

			$temp = 'firstremark';
			$value = $param['first'];

		}if(isset($param['second'])){

			$temp = 'secondremark';
			$value = $param['second'];

		}if(isset($param['summer'])){

			$temp = 'summerremark';
			$value = $param['summer'];

		}

		$remarkperequipmentunit = array(
			$temp => $value,
		);

		$this->db->where('idEquipmentUnit', $param['id']);
		$this->db->where('year', $param['yearone']);	
		$this->db->update('remarkperequipmentunit', $remarkperequipmentunit);
	}
}