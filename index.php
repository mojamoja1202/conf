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
//check登入者的群組是哪一個
function checkUser(){
	global $xoopsUser;
	//如果是訪客就直接踢到訪客頁
	if (!$xoopsUser){redirect_header("guest_index.php",3,"歡迎訪客蒞臨");}
	$g=$xoopsUser->groups();
	if(in_array("1", $g)){
		redirect_header("admin_index.php",3,"歡迎超級管理員登入");
	}
	if(in_array("4", $g)){
		redirect_header("normaladmin_index.php",3,"歡迎管理人員登入");
	}
	if(in_array("5", $g)){
		redirect_header("reviewer_index.php",3,"歡迎審核人員登入");
	}
	if(in_array("2", $g)){
		redirect_header("register_index.php",3,"歡迎參與線上投稿");
	}
	if(in_array("3", $g)){
		redirect_header("guest_index.php",3,"歡迎蒞臨！！！");
	}
	//這邊要顯示訪客的內容，可以選擇各年度投稿資料及優選文章
	//redirect_header("guest_index.php",3,"歡迎訪客蒞臨");
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