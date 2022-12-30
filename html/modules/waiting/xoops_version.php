<?php

// Manifesto
$modversion['dirname']          = "waiting";
$modversion['name']             = _MI_WAITING_NAME;
$modversion['version']          = '2.31';
$modversion['detailed_version'] = '2.31.1';
$modversion['description']      = _MI_WAITING_DESC;
$modversion['author']           = "Ryuji AMANO, GIJOE";
$modversion['credits']          = "@nao-pon Naoki Sawada, @gigamaster (XCL7)";
$modversion['license']          = "GPL see LICENSE";
$modversion['image']            = "images/waiting_slogo.png";
$modversion['icon']             = 'images/module_icon.svg';
$modversion['help']             = "";
$modversion['official']         = 0;

// Admin
$modversion['hasAdmin'] = 0;
$modversion['adminindex'] = "admin/index.php";

// Templates

// Blocks
$modversion['blocks'][1]['file'] = "waiting_waiting.php";
$modversion['blocks'][1]['name'] = _MI_WAITING_BNAME1;
$modversion['blocks'][1]['description'] = "Shows contents waiting for approval";
$modversion['blocks'][1]['show_func'] = "b_waiting_waiting_show";
$modversion['blocks'][1]['edit_func'] = "b_waiting_waiting_edit";
$modversion['blocks'][1]['template'] = 'waiting_block_waiting.html';
$modversion['blocks'][1]['options'] = '1|5';

// On Update
if( ! empty( $_POST['fct'] ) && ! empty( $_POST['op'] ) && $_POST['fct'] == 'modulesadmin' && $_POST['op'] == 'update_ok' && $_POST['dirname'] == $modversion['dirname'] ) {
	include dirname( __FILE__ ) . "/include/updateblock.inc.php" ;
}
