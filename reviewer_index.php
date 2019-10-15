<?php
/*
審核人員頁面：
1.可以看到相對應的摘要
2.可以看到摘要內容及下載全文
3.可以撰寫評語及評分
*/
//-----引入區-----
include "../../mainfile.php";
include "../../header.php";
//include_once XOOPS_ROOT_PATH . "/modules/tadtools/tad_function.php";
//-----函數區-----
//顯示審核人員頁面
function show(){
	$main="這是審核人員的頁面";
	return $main;
}


//重新導入不同的首頁
function redirect(){
	global $xoopsUser;
	
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