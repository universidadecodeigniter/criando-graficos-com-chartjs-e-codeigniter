<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Base';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['donnutchart'] = "Base";
$route['piechart'] = "Base";
$route['linechart'] = "Base";
$route['barchart'] = "Base";

$route['donnutchart/data'] = "Base/Donnutchart";
$route['piechart/data'] = "Base/Piechart";
$route['linechart/data'] = "Base/Linechart";
$route['barchart/data'] = "Base/Barchart";