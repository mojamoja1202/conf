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
$modversion['tables'][]         = "submission_reginfo";
$modversion['tables'][]         = "submission_paperinfo";
$modversion['tables'][]         = "kw_club_place";
$modversion['tables'][]         = "kw_club_teacher";
$modversion['tables'][]         = "kw_club_class";
$modversion['tables'][]         = "kw_club_reg";
$modversion['tables'][]         = "kw_club_files_center";

//---管理介面設定---//
$modversion['hasAdmin']   = 1;
$modversion['adminindex'] = "admin/index.php";
$modversion['adminmenu']  = "admin/menu.php";

//---前台主選單設定---//
$modversion['hasMain'] = 1;
$i                     = 0;
$i++;
$modversion['sub'][$i]['name'] = _MI_KWCLUB_SMNAME2;
$modversion['sub'][$i]['url']  = "index.php?op=teacher";
$i++;
$modversion['sub'][$i]['name'] = _MI_KWCLUB_SMNAME3;
$modversion['sub'][$i]['url']  = "index.php?op=myclass";
// $i++;
// $modversion['sub'][$i]['name'] = _MI_KWCLUB_SMNAME4;
// $modversion['sub'][$i]['url']  = "index.php?op=statistic";

//---樣板設定---//
$modversion['templates']                    = array();
$i                                          = 1;
$modversion['templates'][$i]['file']        = 'kw_club_config.tpl';
$modversion['templates'][$i]['description'] = 'kw_club_config.tpl';

$i++;
$modversion['templates'][$i]['file']        = 'kw_club_register.tpl';
$modversion['templates'][$i]['description'] = 'kw_club_register.tpl';

$i++;
$modversion['templates'][$i]['file']        = 'kw_club_index.tpl';
$modversion['templates'][$i]['description'] = 'kw_club_index.tpl';

$i++;
$modversion['templates'][$i]['file']        = 'kw_club_club.tpl';
$modversion['templates'][$i]['description'] = 'kw_club_club.tpl';

$i++;
$modversion['templates'][$i]['file']        = 'kw_club_cate.tpl';
$modversion['templates'][$i]['description'] = 'kw_club_cate.tpl';

$i++;
$modversion['templates'][$i]['file']        = 'kw_club_adm_main.tpl';
$modversion['templates'][$i]['description'] = 'kw_club_adm_main.tpl';