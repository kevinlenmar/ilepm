<?php
defined('BASEPATH') OR exit('No direct script access allowed');



$route['dashboard'] = 'ilepm/dashboard';


/* 				Consumables					 */

$route['consumables/new-consumables-category'] = 'ilepm/consumable_new_category';

$route['consumables/new-consumables-unit']	=	'ilepm/consumable_new_unit';

$route['consumables/list-of-consumables'] = 'ilepm/consumable_list';

$route['consumables/csv'] = 'ilepm/consumable_csv';

$route['consumables/add-consumables-csv'] = 'ilepm/addConsumablesCSV';

/* 				Modal Consumable					 */

$route['consumables/add-quantity-modal'] = 'ilepm/addQuantityModal';


/* 				Equipments					 */

$route['equipments/csv'] = 'ilepm/equipment_csv';

$route['equipments/add-equipments-csv'] = 'ilepm/addEquipmentCSV';

$route['equipments/new-equipments'] = 'ilepm/equipment_new';

$route['equipments/new-equipment-unit'] = 'ilepm/equipment_new_unit';

$route['equipments/manage'] = 'ilepm/equipment_manage';

/* 				Users					 */

$route['users/new'] = 'ilepm/users_new';

$route['users/manage'] = 'ilepm/users_manage';

$route['login'] = 'ilepm/login';

$route['signout'] = 'ilepm/signout';

$route['profile'] = 'ilepm/profile';

$route['default_controller'] = 'ilepm/login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
