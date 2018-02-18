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
			);

		return $this->db->insert('equipment', $data);
	}

	public function add_equipments_category($param){
		$consumable_category = array(
			'category_name'			=>	$param['category'],
			);

		return $this->db->insert('equipment_category', $consumable_category);
	}

	public function getEquipmentCategory(){

		$this->db->from('equipment_category');
		$this->db->order_by('category_name', 'asc');

		$query = $this->db->get();

		return $query->result();
	}

	public function getEquipmentTable(){

		$this->db->select('eq.id, eq.ctrl_no, eq.product_name, eq.serial_no, eq.procedures, eq.standard_criteria, qs.first, qs.second, qs.summer');
		$this->db->from('equipment eq');
		$this->db->join('quantityperequipmentunit qs', 'qs.idEquipmentUnit = eq.id ', 'left');

		$query = $this->db->get();

		return $query->result();
	}

	public function getEquipmentTableByCategory($param){
		$this->db->select('eq.id, eq.ctrl_no, eq.product_name, eq.serial_no, eq.procedures, eq.standard_criteria, qs.first, qs.second, qs.summer');
		$this->db->from('equipment eq');
		$this->db->join('quantityperequipmentunit qs', 'qs.idEquipmentUnit = eq.id ', 'left');
		$this->db->where('eq.category', $param['category']);

		$query = $this->db->get();

		return $query->result();
	}

	public function getEquipmentTableByCategoryByYear($param){
		$this->db->select('eq.id, eq.ctrl_no, eq.product_name, eq.serial_no, eq.procedures, eq.standard_criteria, qs.first, qs.second, qs.summer');
		$this->db->from('equipment eq');
		$this->db->join('quantityperequipmentunit qs', 'qs.idEquipmentUnit = eq.id ', 'left');
		$this->db->where('eq.category', $param['category']);
		$this->db->where('qs.year', $param['year']);

		$query = $this->db->get();

		return $query->result();
	}

	public function createEquipmentTableByYear($param){

		$query = $this->db->select('id');

		$query = $this->db->get('equipment');

		foreach ($query->result() as $item) {
			$quantityperequipmentunit = array(
				'idEquipmentUnit'	=>	$item->id,
				'first'				=>	0,
				'second'			=>	0,
				'summer'			=>	0,
				'year'				=>	$param['year'],
				);

			$this->db->insert('quantityperequipmentunit', $quantityperequipmentunit);
		}

		return $this->db->trans_complete();
	}
}