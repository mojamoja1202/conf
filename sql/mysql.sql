CREATE TABLE `submission_assigner` (
  `assigner_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '報名者id',
  `assigner_year` smallint(5) NOT NULL COMMENT '投稿者年度',
  `assigner_name` varchar(255) NOT NULL COMMENT '投稿者姓名',
  `assigner_type` varchar(255) NOT NULL COMMENT '投稿者身份別',
  `assigner_flow` varchar(255) NOT NULL COMMENT '投稿者流程',
  `assigner_phone` varchar(255) NOT NULL COMMENT '投稿者電話',
  `assigner_money` smallint(5) NOT NULL COMMENT '繳費明細',
  `assigner_join` varchar(255) NOT NULL COMMENT '是否參加研討會',
  `assigner_datetime` datetime NOT NULL COMMENT '填寫資料時間',
  `uid` smallint(5) unsigned NOT NULL COMMENT '發布者編號',
  PRIMARY KEY (`assigner_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



CREATE TABLE `submission_paper` (
  `paper_id` mediumint(9) unsigned NOT NULL COMMENT '使用者編號',
  `paper_year` varchar(255) NOT NULL COMMENT '活動名稱',
  `signup_date` datetime NOT NULL COMMENT '報名日期',
  PRIMARY KEY (`paper_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

