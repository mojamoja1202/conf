<?php
/*
聲明：
1.本程式為新民智障生設計製作
2.本系統主要是用來協助高師大工教系研討會收件用
3.需在群組設定1管理員2註冊會員3訪客4管理人員5審核人員
開始撰寫時間：2019/07/17
完成撰寫時間：
程式設計者：葉大炮
系統架設：xoops
*/
//-----引入區-----
include "../../mainfile.php";
include "../../header.php";
//include_once XOOPS_ROOT_PATH . "/modules/tadtools/tad_function.php";
//-----函數區-----
//訪客頁面
function show(){
	$main="這是訪客的頁面";
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
		$main=checkUser();
}
//-----顯示區-----
echo $main;
include "../../footer.php";
?>