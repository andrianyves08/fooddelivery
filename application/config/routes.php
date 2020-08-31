<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['forbidden'] = 'pages/forbidden';
$route['food_details'] = 'pages/food_details';
$route['food_details/(:any)'] = 'pages/food_details/$1';

$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
