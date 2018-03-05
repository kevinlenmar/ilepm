<?php
defined('BASEPATH') OR exit('No direct script access allowed');



$route['dashboard'] = 'ilepm/dashboard';

$route['dashboard/consumable-data'] = 'ilepm/getDashboardYear';

$route['dashboard/equipment-data'] = 'ilepm/getEDashboardYear';


/* 				Consumables					 */

$route['consumables/new-consumables-category'] = 'consumable/consumable_new_category';

$route['consumables/new-consumables-unit']	=	'consumable/consumable_new_unit';

$route['consumables/list-of-consumables'] = 'consumable/consumable_list';

$route['consumables/list-of-consumables-year'] = 'consumable/consumable_year';

$route['consumables/show-consumables'] = 'consumable/get_consumable';

$route['consumables/create-consumables-button'] = 'consumable/get_consumable_year_show';

$route['consumables/list-of-consumables-year-create'] = 'consumable/consumable_create_year';

$route['consumables/duplicate-table']	= 'consumable/consumable_duplicate_table';

$route['consumables/csv'] = 'consumable/consumable_csv';

$route['consumables/add-consumables-csv'] = 'consumable/addConsumablesCSV';

$route['consumables/list-display-of-consumables'] = 'consumable/getConsumableTableListById';

$route['consumables/edit-consumables'] = 'consumable/editConsumableTable';

$route['consumables/edited-consumables'] = 'consumable/editConsumableTableQuantity';

$route['consumables/get-consumable-by-year'] = 'consumable/get_consumable_year';

$route['consumables/flag'] = 'consumable/flag';

$route['consumables/unflag'] = 'consumable/unflag';

$route['filter-consumables'] = 'consumable/filter';


/* 				Equipments					 */

$route['equipments/new-equipments-category'] = 'equipment/equipment_new_category';

$route['equipments/new-equipments-unit'] = 'equipment/equipment_new_unit';

$route['equipments/list-of-equipments'] = 'equipment/equipment_list';

$route['equipments/list-of-equipments-year'] = 'equipment/equipment_year';

$route['equipments/list-of-equipments-year-create'] = 'equipment/equipment_create_year';

$route['equipments/csv'] = 'equipment/equipment_csv';

$route['equipments/add-equipments-csv'] = 'equipment/addEquipmentCSV';

$route['equipments/create-equipments-button'] = 'equipment/get_equipment_year_show';

$route['equipments/duplicate-table']	= 'equipment/equipment_duplicate_table';

$route['equipments/show-equipments'] = 'equipment/get_equipment';

$route['equipments/list-of-equipments-create'] = 'equipment/create_list_equipment';

$route['equipments/filter-equipments'] = 'equipment/filter';

$route['equipments/flag'] = 'equipment/flag';

$route['equipments/unflag'] = 'equipment/unflag';

$route['equipments/list-display-of-equipments'] = 'equipment/getEquipmentTableListById';

$route['equipments/edit-equipments'] = 'equipment/editEquipmentTable';

$route['equipments/edited-equipments'] = 'equipment/editEquipmentTableQuantity';
/* 				Users					 */

$route['users/new'] = 'user/users_new';

$route['users/manage'] = 'user/users_manage';

$route['login'] = 'login/home';

$route['signout'] = 'login/signout';

$route['profile'] = 'ilepm/profile';

$route['default_controller'] = 'login/home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
