<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['dashboard'] = 'ilepm/dashboard';
$route['consumables/new-consumables'] = 'ilepm/consumable_new';
$route['consumables/new-consumables-unit'] = 'ilepm/consumable_new_unit';
$route['consumables/manage'] = 'ilepm/consumable_manage';
$route['consumables/csv'] = 'ilepm/consumable_csv';
$route['equipments/csv'] = 'ilepm/equipment_csv';
$route['consumables/add-consumables-csv'] = 'ilepm/addConsumablesCSV';
$route['equipments/add-equipments-csv'] = 'ilepm/addEquipmentCSV';
$route['equipments/new-equipments'] = 'ilepm/equipment_new';
$route['equipments/new-equipment-unit'] = 'ilepm/equipment_new_unit';
$route['equipments/manage'] = 'ilepm/equipment_manage';
$route['users/new'] = 'ilepm/users_new';
$route['users/manage'] = 'ilepm/users_manage';
$route['login'] = 'ilepm/login';
$route['signout'] = 'ilepm/signout';
$route['profile'] = 'ilepm/profile';
$route['default_controller'] = 'ilepm/login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
