<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'FirstpageController/index';

$route['dashboard'] = 'Admin/DashboardController/index';
$route['getmodal'] = 'Admin/DashboardController/getModal';
$route['savemodal'] = 'Admin/DashboardController/saveModal';

$route['adminfirst'] = 'Admin/FirstpageController/index';
$route['adminfirstSave'] = 'Admin/FirstpageController/saveData';
$route['adminfirstUpload'] = 'Admin/FirstpageController/imageUpload';

$route['adminlanding'] = 'Admin/LandingpageController/index';
$route['adminlandingSave'] = 'Admin/LandingpageController/saveData';
$route['adminlandingUpload'] = 'Admin/LandingpageController/imageUpload';

$route['first'] = 'FirstpageController/index';

$route['landing'] = 'LandingpageController/index';
$route['saveCustomer'] = 'LandingpageController/saveData';

$route['login'] = 'Admin/AuthController/index';
$route['loginmatch'] = 'Admin/AuthController/match';
$route['profile'] = 'Admin/AuthController/getProfile';
$route['saveprofile'] = 'Admin/AuthController/saveProfile';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
