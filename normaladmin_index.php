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
//顯示管理員進入後的第一個頁面
//顯示目前投稿的數量
function show(){
	$main="這是管理人員的頁面<br><br>";
	$main.="<a href='admin_index.php'>主選單</a> | <a href='admin_index.php?op=process'>時程管理</a> | <a href='admin_index.php?op=abstract'>稿件狀態</a> | <a href='admin_index.php?op=content'>預留</a><br><br>";
	return $main;
}


//計算目前所有的稿件數目，通過的件數及未通過的件數
function abNum(){
	$main="目前稿件數目：" . abstractNum . "件<br>";
	$main.="目前通過件數：" . abstractNum . "件<br>";
	$main.="未繳交件數：" . abstractNum . "件<br>";
	$main.="通過件數：" . abstractNum . "件<br>";
	$main.="未審核件數：" . abstractNum . "件<br><br>";
	return $main;
}


//顯示流程頁面
function process(){
	$main="<table border='1'>";
	$main.="<tr align='center'>";
	$main.="<td>項目</td><td>開始時間</td><td>結束時間</td><td>管理</td>";
	$main.="</tr>";
	$main.="</table><br>";
	return $main;
}


//顯示所有的稿件資訊
function paper(){
	$main="<table border='1'>";
	$main.="<tr align='center'>";
	$main.="<td width='150'>指導老師</td><td>學生</td><td>標題</td><td>類型</td><td width='100'>審核狀態</td><td>管理</td>";
	$main.="</tr>";
	$main.="</table><br>";
	return $main;
}



//-----判斷區-----
$op=(empty($_REQUEST['op']))?"":$_REQUEST['op'];
$sn=(empty($_REQUEST['sn']))?"":$_REQUEST['sn'];
switch ($op) {
	case 'process':
		$main=show();
		$main.=process();
		break;
	

	case 'abstract':
		$main=show();
		$main.=paper();
		break;


	case 'content':
		save();
		redirect_header("index.php",3,"領取成功");
		break;


	default:
		$main=show();
		$main.=abNum();
}
//-----顯示區-----
echo $main;
include "../../footer.php";
?>