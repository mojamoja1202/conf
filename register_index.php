<?php
/*
報名者頁面：
1.顯示流程圖
2.時間到才開連結頁面
3.報名資料填寫
4.上傳摘要
5.上傳全文
6.可以觀看評語及審核狀態
*/
//-----引入區-----
include "../../mainfile.php";
include "../../header.php";
//include_once XOOPS_ROOT_PATH . "/modules/tadtools/tad_function.php";
//-----函數區-----
//顯示報名人員頁面
function show(){
	$main="這是報名者頁面";
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