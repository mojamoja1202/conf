/*
目前先做投稿者及稿件的表單，有需要的再另加了…
*/


/*
投稿者：
0.sn
1.年度
2.姓名
3.身份別
4.流程控管
5.聯絡電話
6.繳費明細
7.填寫時間
8.是否參加研討會
*/
CREATE TABLE `submission_assigner` (
  `assigner_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '報名者id',
  `assigner_year` smallint(5) NOT NULL COMMENT '投稿者年度',
  `assigner_name` varchar(255) NOT NULL COMMENT '投稿者姓名',
  `assigner_type` varchar(255) NOT NULL COMMENT '投稿者身份別',
  `assigner_name` varchar(255) NOT NULL COMMENT '',
  `assigner_flow` varchar(255) NOT NULL COMMENT '投稿者流程',
  `assigner_phone` varchar(255) NOT NULL COMMENT '投稿者電話',
  `assigner_money` smallint(5) NOT NULL COMMENT '繳費明細',
  `assigner_type` date NOT NULL COMMENT '',
  `assigner_join` varchar(255) NOT NULL COMMENT '是否參加研討會',
  `assigner_datetime` datetime NOT NULL COMMENT '填寫資料時間',
  `uid` smallint(5) unsigned NOT NULL COMMENT '發布者編號',
  PRIMARY KEY (`action_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



/*
投稿文章：
0.sn
1.年度
2.投稿類型
3.標題
4.投稿摘要
5.全文連結(需至上傳時間才開啟功能)
6.抄襲比對連結(需至上傳時間才開啟功能)
7.評語(需至上傳時間才開啟功能)
8.狀態(需至上傳時間才開啟功能)
9.投稿姓名
*/
CREATE TABLE `submission_paper` (
  `paper_id` mediumint(9) unsigned NOT NULL COMMENT '使用者編號',
  `paper_year` varchar(255) NOT NULL COMMENT '活動名稱',
  `signup_date` datetime NOT NULL COMMENT '報名日期',
  PRIMARY KEY (`uid`,`action_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

