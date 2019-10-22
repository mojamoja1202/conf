CREATE TABLE `conf_assigner` (
  `assigner_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `assigner_year` smallint(5) NOT NULL COMMENT '年度',
  `assigner_name` varchar(255) NOT NULL COMMENT '姓名',
  `assigner_type` varchar(255) NOT NULL COMMENT '身份別',
  `assigner_flow` varchar(255) NOT NULL COMMENT '目前流程',
  `assigner_phone` varchar(255) NOT NULL COMMENT '電話',
  `assigner_money` smallint(5) NOT NULL COMMENT '繳費金額',
  `assigner_join` varchar(255) NOT NULL COMMENT '是否參與現場演說',
  `assigner_datetime` datetime NOT NULL COMMENT '填寫時間',
  `uid` smallint(5) unsigned NOT NULL COMMENT 'uid',
  PRIMARY KEY (`assigner_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `conf_paper` (
  `paper_id` mediumint(9) unsigned NOT NULL COMMENT '稿件id',
  `paper_year` varchar(255) NOT NULL COMMENT '上傳年度',
  `paper_teacher` varchar(255) NOT NULL COMMENT '指導老師',
  `paper_student` varchar(255) NOT NULL COMMENT '學生',
  `paper_title` varchar(255) NOT NULL COMMENT '標題',
  `paper_type` varchar(255) NOT NULL COMMENT '類型',
  `paper_state` varchar(255) NOT NULL COMMENT '審核狀態',
  `paper_fileLink` varchar(255) NOT NULL COMMENT '上傳連結',
  `paper_file2Link` varchar(255) NOT NULL COMMENT '上傳連結',
  `paper_auditor` varchar(255) NOT NULL COMMENT '評審',
  `paper_suggest` varchar(1500) NOT NULL COMMENT '評語',
  `paper_score` varchar(255) NOT NULL COMMENT '分數',
  `paper_updateTime` datetime NOT NULL COMMENT '上傳時間',
  PRIMARY KEY (`paper_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `conf_flow` (
  `flow_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `flow_item` varchar(255) NOT NULL COMMENT '項目',
  `flow_startTime` datetime NOT NULL COMMENT '開始時間',
  `flow_endTime` datetime NOT NULL COMMENT '結束時間',
  `flow_updateTime` datetime NOT NULL COMMENT '最後修改時間',
  `flow_uid` smallint(5) unsigned NOT NULL COMMENT 'uid',
  PRIMARY KEY (`flow_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;