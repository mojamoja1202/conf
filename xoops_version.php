<?php
$modversion = array();

//---模組基本資訊---//
$modversion['name']        = "投稿系統";
$modversion['version']     = '1.3';
$modversion['description'] = "高師大工教系投稿統整用";
$modversion['author']      = "炮管很大的大炮";
$modversion['credits']     = "當然屬於大炮";
$modversion['help']        = 'page=help';
$modversion['license']     = 'GPL see LICENSE';
$modversion['image']       = "images/logo.png";
$modversion['dirname']     = basename(__DIR__);

//---模組狀態資訊---//
$modversion['status_version']      = '1.0';
$modversion['release_date']        = '2019-04-30';
$modversion['module_website_url']  = 'http://localhost';
$modversion['module_website_name'] = "投稿系統";
$modversion['module_status']       = 'release';
$modversion['author_website_url']  = 'http://localhost';
$modversion['author_website_name'] = "投稿系統";
$modversion['min_php']             = '5.4';
$modversion['min_xoops']           = '2.5';

//---啟動後台管理界面選單---//
$modversion['system_menu'] = 1;

//---資料表架構---//
$modversion['sqlfile']['mysql'] = "sql/mysql.sql";
$modversion['tables'][]         = "conf_assigner";
$modversion['tables'][]         = "conf_paper";
$modversion['tables'][]         = "conf_flow";