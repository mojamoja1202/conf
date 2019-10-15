<?php
/*
管理人員頁面：
1.設定時程
2.下載所有摘要為excel
3.下載所有全文檔案
4.指定審核人員
*/
//-----引入區-----
include "../../mainfile.php";
include "../../header.php";
//include_once XOOPS_ROOT_PATH . "/modules/tadtools/tad_function.php";
//-----函數區-----
//顯示管理員頁面
function show(){
	$main="這是管理員的頁面";
	return $main;
}




//-----判斷區-----
$op=(empty($_REQUEST['op']))?"":$_REQUEST['op'];
$sn=(empty($_REQUEST['sn']))?"":$_REQUEST['sn'];
switch ($op) {
	case 'save':
		save();
		redirect_header("index.php",3,"領取成功");
		break;
	
	default:
		$main=show();
}
//-----顯示區-----
echo $main;
include "../../footer.php";
?>