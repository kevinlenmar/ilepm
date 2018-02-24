<?php
defined('BASEPATH') OR exit('No direct script access allowed');



$route['dashboard'] = 'ilepm/dashboard';


/* 				Consumables					 */

$route['consumables/new-consumables-category'] = 'consumable/consumable_new_category';

$route['consumables/new-consumables-unit']	=	'consumable/consumable_new_unit';

$route['consumables/list-of-consumables'] = 'consumable/consumable_list';

$route['consumables/list-of-consumables-year'] = 'consumable/consumable_year';

$route['consumables/list-of-consumables-year-create'] = 'consumable/consumable_create_year';

$route['consumables/csv'] = 'consumable/consumable_csv';

$route['consumables/add-consumables-csv'] = 'consumable/addConsumablesCSV';

$route['consumables/list-edit-of-consumables'] = 'consumable/getConsumableTableListById';

/* 				Equipments					 */

$route['equipments/new-equipments-category'] = 'equipment/equipment_new_category';

$route['equipments/new-equipments-unit'] = 'equipment/equipment_new_unit';

$route['equipments/list-of-equipments'] = 'equipment/equipment_list';

$route['equipments/list-of-equipments-year'] = 'equipment/equipment_year';

$route['equipments/list-of-equipments-year-create'] = 'equipment/equipment_create_year';

$route['equipments/csv'] = 'equipment/equipment_csv';

$route['equipments/add-equipments-csv'] = 'equipment/addEquipmentCSV';

/* 				Users					 */

$route['users/new'] = 'ilepm/users_new';

$route['users/manage'] = 'ilepm/users_manage';

$route['login'] = 'login/home';

$route['signout'] = 'login/signout';

$route['profile'] = 'ilepm/profile';

$route['default_controller'] = 'login/home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
