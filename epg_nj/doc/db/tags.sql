﻿/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE */;
/*!40101 SET SQL_MODE='' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES */;
/*!40103 SET SQL_NOTES='ON' */;

CREATE TABLE `tags` (
  `id` bigint(20) NOT NULL auto_increment,
  `name` varchar(100) default NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=237 DEFAULT CHARSET=utf8;

INSERT INTO `tags` VALUES (23,'娱乐','2010-09-10 16:01:43','2010-09-10 16:01:43');
INSERT INTO `tags` VALUES (24,'音乐','2010-09-10 16:01:43','2010-09-10 16:01:43');
INSERT INTO `tags` VALUES (25,'访谈','2010-09-10 16:01:44','2010-09-10 16:01:44');
INSERT INTO `tags` VALUES (26,'影视','2010-09-10 16:01:45','2010-09-10 16:01:45');
INSERT INTO `tags` VALUES (27,'电影','2010-09-10 16:01:45','2010-09-10 16:01:45');
INSERT INTO `tags` VALUES (28,'科教','2010-09-10 16:01:45','2010-09-10 16:01:45');
INSERT INTO `tags` VALUES (29,'外语','2010-09-10 16:01:45','2010-09-10 16:01:45');
INSERT INTO `tags` VALUES (30,'英语','2010-09-10 16:01:45','2010-09-10 16:01:45');
INSERT INTO `tags` VALUES (31,'生活','2010-09-10 16:01:45','2010-09-10 16:01:45');
INSERT INTO `tags` VALUES (32,'综合','2010-09-10 16:01:45','2010-09-10 16:01:45');
INSERT INTO `tags` VALUES (33,'电视剧','2010-09-10 16:01:45','2010-09-10 16:01:45');
INSERT INTO `tags` VALUES (34,'香港','2010-09-10 16:01:45','2010-09-10 16:01:45');
INSERT INTO `tags` VALUES (35,'魔幻奇异','2010-09-10 16:01:45','2010-09-10 16:01:45');
INSERT INTO `tags` VALUES (36,'自然','2010-09-10 16:01:45','2010-09-10 16:01:45');
INSERT INTO `tags` VALUES (37,'大陆','2010-09-10 16:01:45','2010-09-10 16:01:45');
INSERT INTO `tags` VALUES (38,'欧美','2010-09-10 16:01:45','2010-09-10 16:01:45');
INSERT INTO `tags` VALUES (39,'体育','2010-09-10 16:01:45','2010-09-10 16:01:45');
INSERT INTO `tags` VALUES (40,'古装正剧','2010-09-10 16:01:46','2010-09-10 16:01:46');
INSERT INTO `tags` VALUES (41,'文艺剧情','2010-09-10 16:01:46','2010-09-10 16:01:46');
INSERT INTO `tags` VALUES (42,'篮球','2010-09-10 16:01:46','2010-09-10 16:01:46');
INSERT INTO `tags` VALUES (43,'历史人物','2010-09-10 16:01:46','2010-09-10 16:01:46');
INSERT INTO `tags` VALUES (44,'人文历史','2010-09-10 16:01:46','2010-09-10 16:01:46');
INSERT INTO `tags` VALUES (45,'家庭伦理','2010-09-10 16:01:46','2010-09-10 16:01:46');
INSERT INTO `tags` VALUES (46,'喜剧搞笑','2010-09-10 16:01:46','2010-09-10 16:01:46');
INSERT INTO `tags` VALUES (47,'专题','2010-09-10 16:01:46','2010-09-10 16:01:46');
INSERT INTO `tags` VALUES (48,'农业','2010-09-10 16:01:46','2010-09-10 16:01:46');
INSERT INTO `tags` VALUES (49,'战争军事','2010-09-10 16:01:46','2010-09-10 16:01:46');
INSERT INTO `tags` VALUES (50,'少儿','2010-09-10 16:01:46','2010-09-10 16:01:46');
INSERT INTO `tags` VALUES (51,'动漫','2010-09-10 16:01:46','2010-09-10 16:01:46');
INSERT INTO `tags` VALUES (52,'惊悚鬼怪','2010-09-10 16:01:46','2010-09-10 16:01:46');
INSERT INTO `tags` VALUES (53,'科技','2010-09-10 16:01:46','2010-09-10 16:01:46');
INSERT INTO `tags` VALUES (54,'教育','2010-09-10 16:01:46','2010-09-10 16:01:46');
INSERT INTO `tags` VALUES (55,'网球','2010-09-10 16:01:46','2010-09-10 16:01:46');
INSERT INTO `tags` VALUES (56,'综艺','2010-09-10 16:01:46','2010-09-10 16:01:46');
INSERT INTO `tags` VALUES (57,'商界传奇','2010-09-10 16:01:47','2010-09-10 16:01:47');
INSERT INTO `tags` VALUES (58,'古装戏说','2010-09-10 16:01:47','2010-09-10 16:01:47');
INSERT INTO `tags` VALUES (59,'法制','2010-09-10 16:01:47','2010-09-10 16:01:47');
INSERT INTO `tags` VALUES (60,'戏曲','2010-09-10 16:01:47','2010-09-10 16:01:47');
INSERT INTO `tags` VALUES (61,'美食','2010-09-10 16:01:47','2010-09-10 16:01:47');
INSERT INTO `tags` VALUES (62,'都市生活','2010-09-10 16:01:47','2010-09-10 16:01:47');
INSERT INTO `tags` VALUES (63,'武侠功夫','2010-09-10 16:01:47','2010-09-10 16:01:47');
INSERT INTO `tags` VALUES (64,'纪录写实','2010-09-10 16:01:47','2010-09-10 16:01:47');
INSERT INTO `tags` VALUES (65,'普通话','2010-09-10 16:01:48','2010-09-10 16:01:48');
INSERT INTO `tags` VALUES (66,'动作冒险','2010-09-10 16:01:48','2010-09-10 16:01:48');
INSERT INTO `tags` VALUES (67,'侦探悬疑','2010-09-10 16:01:48','2010-09-10 16:01:48');
INSERT INTO `tags` VALUES (68,'健康','2010-09-10 16:01:48','2010-09-10 16:01:48');
INSERT INTO `tags` VALUES (69,'乡村生活','2010-09-10 16:01:48','2010-09-10 16:01:48');
INSERT INTO `tags` VALUES (70,'重点','2010-09-10 16:01:48','2010-09-10 16:01:48');
INSERT INTO `tags` VALUES (71,'纪实','2010-09-10 16:01:48','2010-09-10 16:01:48');
INSERT INTO `tags` VALUES (72,'台湾','2010-09-10 16:01:48','2010-09-10 16:01:48');
INSERT INTO `tags` VALUES (73,'言情','2010-09-10 16:01:49','2010-09-10 16:01:49');
INSERT INTO `tags` VALUES (74,'韩国','2010-09-10 16:01:49','2010-09-10 16:01:49');
INSERT INTO `tags` VALUES (75,'足球','2010-09-10 16:01:50','2010-09-10 16:01:50');
INSERT INTO `tags` VALUES (76,'财经','2010-09-10 16:01:50','2010-09-10 16:01:50');
INSERT INTO `tags` VALUES (77,'青春偶像','2010-09-10 16:01:50','2010-09-10 16:01:50');
INSERT INTO `tags` VALUES (78,'变味婚姻','2010-09-10 16:01:53','2010-09-10 16:01:53');
INSERT INTO `tags` VALUES (79,'职场','2010-09-10 16:02:01','2010-09-10 16:02:01');
INSERT INTO `tags` VALUES (80,'企业','2010-09-10 16:02:01','2010-09-10 16:02:01');
INSERT INTO `tags` VALUES (81,'少儿教育','2010-09-10 16:02:02','2010-09-10 16:02:02');
INSERT INTO `tags` VALUES (82,'赛车','2010-09-10 16:02:02','2010-09-10 16:02:02');
INSERT INTO `tags` VALUES (83,'羽毛球','2010-09-10 16:02:07','2010-09-10 16:02:07');
INSERT INTO `tags` VALUES (84,'经典重拍','2010-09-10 16:02:08','2010-09-10 16:02:08');
INSERT INTO `tags` VALUES (85,'房产','2010-09-10 16:02:09','2010-09-10 16:02:09');
INSERT INTO `tags` VALUES (86,'科幻未来','2010-09-10 16:02:10','2010-09-10 16:02:10');
INSERT INTO `tags` VALUES (87,'名作改编','2010-09-10 16:02:16','2010-09-10 16:02:16');
INSERT INTO `tags` VALUES (88,'警匪反腐','2010-09-10 16:02:21','2010-09-10 16:02:21');
INSERT INTO `tags` VALUES (89,'举重','2010-09-10 16:02:22','2010-09-10 16:02:22');
INSERT INTO `tags` VALUES (90,'老年','2010-09-10 16:02:23','2010-09-10 16:02:23');
INSERT INTO `tags` VALUES (91,'日本','2010-09-10 16:02:34','2010-09-10 16:02:34');
INSERT INTO `tags` VALUES (92,'旅游','2010-09-10 16:02:41','2010-09-10 16:02:41');
INSERT INTO `tags` VALUES (93,'凶杀情仇','2010-09-10 16:02:42','2010-09-10 16:02:42');
INSERT INTO `tags` VALUES (94,'地方','2010-09-10 16:02:45','2010-09-10 16:02:45');
INSERT INTO `tags` VALUES (95,'音乐歌舞','2010-09-10 16:02:46','2010-09-10 16:02:46');
INSERT INTO `tags` VALUES (96,'粤语','2010-09-10 16:03:08','2010-09-10 16:03:08');
INSERT INTO `tags` VALUES (97,'舞蹈','2010-09-10 16:03:16','2010-09-10 16:03:16');
INSERT INTO `tags` VALUES (98,'豪门恩怨','2010-09-10 16:03:28','2010-09-10 16:03:28');
INSERT INTO `tags` VALUES (99,'恋爱言情','2010-09-10 16:03:28','2010-09-10 16:03:28');
INSERT INTO `tags` VALUES (100,'证券','2010-09-10 16:03:31','2010-09-10 16:03:31');
INSERT INTO `tags` VALUES (101,'时尚','2010-09-10 16:03:36','2010-09-10 16:03:36');
INSERT INTO `tags` VALUES (102,'马术','2010-09-10 16:03:37','2010-09-10 16:03:37');
INSERT INTO `tags` VALUES (103,'汽车','2010-09-10 16:03:50','2010-09-10 16:03:50');
INSERT INTO `tags` VALUES (104,'新加坡','2010-09-10 16:03:58','2010-09-10 16:03:58');
INSERT INTO `tags` VALUES (105,'高尔夫','2010-09-10 16:04:57','2010-09-10 16:04:57');
INSERT INTO `tags` VALUES (106,'健身','2010-09-10 16:04:58','2010-09-10 16:04:58');
INSERT INTO `tags` VALUES (107,'女性','2010-09-10 16:09:56','2010-09-10 16:09:56');
INSERT INTO `tags` VALUES (108,'育儿','2010-09-10 16:11:16','2010-09-10 16:11:16');
INSERT INTO `tags` VALUES (109,'保险','2010-09-10 16:12:09','2010-09-10 16:12:09');
INSERT INTO `tags` VALUES (110,'新闻','2010-09-10 16:12:26','2010-09-10 16:12:26');
INSERT INTO `tags` VALUES (111,'动画片','2010-09-10 16:12:32','2010-09-10 16:12:32');
INSERT INTO `tags` VALUES (112,'拳击','2010-09-10 16:14:21','2010-09-10 16:14:21');
INSERT INTO `tags` VALUES (113,'摔跤','2010-09-10 16:14:22','2010-09-10 16:14:22');
INSERT INTO `tags` VALUES (114,'军事','2010-09-10 16:14:49','2010-09-10 16:14:49');
INSERT INTO `tags` VALUES (115,'纪录片','2010-09-10 16:15:42','2010-09-10 16:15:42');
INSERT INTO `tags` VALUES (116,'闽南话','2010-09-10 16:18:37','2010-09-10 16:18:37');
INSERT INTO `tags` VALUES (117,'数码','2010-09-10 16:21:25','2010-09-10 16:21:25');
INSERT INTO `tags` VALUES (118,'棒球','2010-09-10 16:22:02','2010-09-10 16:22:02');
INSERT INTO `tags` VALUES (119,'柔道','2010-09-10 16:23:02','2010-09-10 16:23:02');
INSERT INTO `tags` VALUES (120,'田径','2010-09-10 16:23:09','2010-09-10 16:23:09');
INSERT INTO `tags` VALUES (121,'自行车','2010-09-10 16:23:11','2010-09-10 16:23:11');
INSERT INTO `tags` VALUES (122,'赌坛风云','2010-09-10 16:26:12','2010-09-10 16:26:12');
INSERT INTO `tags` VALUES (123,'铁人三项','2010-09-10 16:27:12','2010-09-10 16:27:12');
INSERT INTO `tags` VALUES (124,'排球','2010-09-10 16:28:55','2010-09-10 16:28:55');
INSERT INTO `tags` VALUES (125,'游泳','2010-09-10 16:28:58','2010-09-10 16:28:58');
INSERT INTO `tags` VALUES (126,'乒乓球','2010-09-13 10:40:16','2010-09-13 10:40:16');
INSERT INTO `tags` VALUES (127,'皮划艇','2010-09-13 11:04:15','2010-09-13 11:04:15');
INSERT INTO `tags` VALUES (128,'现代五项','2010-09-17 11:39:11','2010-09-17 11:39:11');
INSERT INTO `tags` VALUES (129,'家庭伦理 / 历史人物','2010-09-19 16:33:01','2010-09-19 16:33:01');
INSERT INTO `tags` VALUES (130,'名作改编 / 经典重拍','2010-09-19 16:34:20','2010-09-19 16:34:20');
INSERT INTO `tags` VALUES (131,'言情剧 偶像剧 悬疑剧','2010-09-19 16:44:46','2010-09-19 16:44:46');
INSERT INTO `tags` VALUES (132,'言情 / 都市生活','2010-09-19 16:47:21','2010-09-19 16:47:21');
INSERT INTO `tags` VALUES (133,'言情 / 文艺剧情','2010-09-19 16:49:40','2010-09-19 16:49:40');
INSERT INTO `tags` VALUES (134,'言情 / 家庭伦理 / 都市生活','2010-09-19 16:51:21','2010-09-19 16:51:21');
INSERT INTO `tags` VALUES (135,'古装戏剧','2010-09-19 16:57:32','2010-09-19 16:57:32');
INSERT INTO `tags` VALUES (136,'文艺剧情 / 战争军事','2010-09-19 16:59:41','2010-09-19 16:59:41');
INSERT INTO `tags` VALUES (137,'侦探悬疑 / 警匪反腐','2010-09-19 17:13:40','2010-09-19 17:13:40');
INSERT INTO `tags` VALUES (138,'文艺剧情 / 武侠功夫','2010-09-19 17:17:10','2010-09-19 17:17:10');
INSERT INTO `tags` VALUES (139,'古装戏说 / 历史人物','2010-09-19 17:18:49','2010-09-19 17:18:49');
INSERT INTO `tags` VALUES (140,'战争','2010-09-19 17:25:34','2010-09-19 17:25:34');
INSERT INTO `tags` VALUES (141,'青春','2010-09-19 17:25:53','2010-09-19 17:25:53');
INSERT INTO `tags` VALUES (142,'偶像','2010-09-19 17:25:53','2010-09-19 17:25:53');
INSERT INTO `tags` VALUES (143,'悬疑','2010-09-19 17:26:29','2010-09-19 17:26:29');
INSERT INTO `tags` VALUES (144,'武侠','2010-09-19 17:28:51','2010-09-19 17:28:51');
INSERT INTO `tags` VALUES (145,'功夫','2010-09-19 17:28:51','2010-09-19 17:28:51');
INSERT INTO `tags` VALUES (146,'文艺','2010-09-19 17:29:53','2010-09-19 17:29:53');
INSERT INTO `tags` VALUES (147,'剧情','2010-09-19 17:29:54','2010-09-19 17:29:54');
INSERT INTO `tags` VALUES (148,'侦探','2010-09-19 17:30:54','2010-09-19 17:30:54');
INSERT INTO `tags` VALUES (149,'警匪','2010-09-19 17:30:54','2010-09-19 17:30:54');
INSERT INTO `tags` VALUES (150,'反腐','2010-09-19 17:30:54','2010-09-19 17:30:54');
INSERT INTO `tags` VALUES (151,'古装','2010-09-19 17:32:35','2010-09-19 17:32:35');
INSERT INTO `tags` VALUES (152,'戏说','2010-09-19 17:32:35','2010-09-19 17:32:35');
INSERT INTO `tags` VALUES (153,'历史','2010-09-19 17:32:35','2010-09-19 17:32:35');
INSERT INTO `tags` VALUES (154,'人物','2010-09-19 17:32:35','2010-09-19 17:32:35');
INSERT INTO `tags` VALUES (155,'家庭','2010-09-19 17:32:52','2010-09-19 17:32:52');
INSERT INTO `tags` VALUES (156,'伦理','2010-09-19 17:32:52','2010-09-19 17:32:52');
INSERT INTO `tags` VALUES (157,'港片','2010-09-21 16:32:25','2010-09-21 16:32:25');
INSERT INTO `tags` VALUES (158,'黑帮','2010-09-21 16:32:25','2010-09-21 16:32:25');
INSERT INTO `tags` VALUES (159,'都市','2010-09-27 15:14:04','2010-09-27 15:14:04');
INSERT INTO `tags` VALUES (160,'家庭伦理 / 都市生活','2010-09-29 10:10:33','2010-09-29 10:10:33');
INSERT INTO `tags` VALUES (161,'豪门','2010-09-29 10:19:18','2010-09-29 10:19:18');
INSERT INTO `tags` VALUES (162,'恩怨','2010-09-29 10:19:18','2010-09-29 10:19:18');
INSERT INTO `tags` VALUES (163,'婚姻','2010-09-29 10:43:52','2010-09-29 10:43:52');
INSERT INTO `tags` VALUES (164,'','2010-10-08 09:52:15','2010-10-08 09:52:15');
INSERT INTO `tags` VALUES (165,'恋爱','2010-10-08 10:37:25','2010-10-08 10:37:25');
INSERT INTO `tags` VALUES (166,'涉案','2010-10-12 13:36:19','2010-10-12 13:36:19');
INSERT INTO `tags` VALUES (167,'体操','2010-10-13 12:35:42','2010-10-13 12:35:42');
INSERT INTO `tags` VALUES (168,'神话戏说','2010-10-13 16:52:31','2010-10-13 16:52:31');
INSERT INTO `tags` VALUES (169,'爱情','2010-10-14 11:35:52','2010-10-14 11:35:52');
INSERT INTO `tags` VALUES (170,'都市题材','2010-10-14 11:35:52','2010-10-14 11:35:52');
INSERT INTO `tags` VALUES (171,'偶像剧','2010-10-14 11:49:36','2010-10-14 11:49:36');
INSERT INTO `tags` VALUES (172,'神话','2010-10-15 10:21:49','2010-10-15 10:21:49');
INSERT INTO `tags` VALUES (173,'科幻','2010-10-15 10:36:51','2010-10-15 10:36:51');
INSERT INTO `tags` VALUES (174,'喜剧','2010-10-15 11:13:44','2010-10-15 11:13:44');
INSERT INTO `tags` VALUES (175,'魔幻','2010-10-15 11:26:56','2010-10-15 11:26:56');
INSERT INTO `tags` VALUES (176,'搞笑','2010-10-15 11:36:54','2010-10-15 11:36:54');
INSERT INTO `tags` VALUES (177,'谍战','2010-10-15 14:14:22','2010-10-15 14:14:22');
INSERT INTO `tags` VALUES (178,'悲剧','2010-10-15 14:50:47','2010-10-15 14:50:47');
INSERT INTO `tags` VALUES (179,'明星访谈','2010-10-30 15:21:02','2010-10-30 15:21:02');
INSERT INTO `tags` VALUES (180,'击剑','2010-10-30 15:39:13','2010-10-30 15:39:13');
INSERT INTO `tags` VALUES (181,'高端','2010-10-30 15:42:54','2010-10-30 15:42:54');
INSERT INTO `tags` VALUES (182,'惊悚','2010-10-30 18:17:46','2010-10-30 18:17:46');
INSERT INTO `tags` VALUES (183,'动作','2010-10-30 18:17:46','2010-10-30 18:17:46');
INSERT INTO `tags` VALUES (184,'播报','2010-10-30 19:01:04','2010-10-30 19:01:04');
INSERT INTO `tags` VALUES (185,'资讯','2010-10-30 19:01:04','2010-10-30 19:01:04');
INSERT INTO `tags` VALUES (186,'楼市','2010-10-30 19:01:04','2010-10-30 19:01:04');
INSERT INTO `tags` VALUES (187,'明星','2010-10-31 20:56:07','2010-10-31 20:56:07');
INSERT INTO `tags` VALUES (188,'歌唱','2010-10-31 21:00:21','2010-10-31 21:00:21');
INSERT INTO `tags` VALUES (189,'选秀','2010-10-31 21:00:21','2010-10-31 21:00:21');
INSERT INTO `tags` VALUES (190,'相亲','2010-10-31 21:51:09','2010-10-31 21:51:09');
INSERT INTO `tags` VALUES (191,'婚恋','2010-10-31 21:51:09','2010-10-31 21:51:09');
INSERT INTO `tags` VALUES (192,'人文','2010-10-31 22:29:15','2010-10-31 22:29:15');
INSERT INTO `tags` VALUES (193,'动物','2010-10-31 23:32:40','2010-10-31 23:32:40');
INSERT INTO `tags` VALUES (194,'经济','2010-11-01 01:01:18','2010-11-01 01:01:18');
INSERT INTO `tags` VALUES (195,'理财','2010-11-01 01:24:48','2010-11-01 01:24:48');
INSERT INTO `tags` VALUES (196,'股市','2010-11-01 01:44:53','2010-11-01 01:44:53');
INSERT INTO `tags` VALUES (197,'射击','2010-11-08 10:14:55','2010-11-08 10:14:55');
INSERT INTO `tags` VALUES (198,'射箭','2010-11-08 10:38:53','2010-11-08 10:38:53');
INSERT INTO `tags` VALUES (199,'跆拳道','2010-11-08 10:39:20','2010-11-08 10:39:20');
INSERT INTO `tags` VALUES (200,'电视剧影视','2010-11-10 10:58:21','2010-11-10 10:58:21');
INSERT INTO `tags` VALUES (201,'电视剧、影视','2010-11-10 10:58:34','2010-11-10 10:58:34');
INSERT INTO `tags` VALUES (202,'港台','2010-11-10 11:45:06','2010-11-10 11:45:06');
INSERT INTO `tags` VALUES (203,'影视专题','2010-11-10 11:53:39','2010-11-10 11:53:39');
INSERT INTO `tags` VALUES (204,'日韩','2010-11-10 12:03:54','2010-11-10 12:03:54');
INSERT INTO `tags` VALUES (205,'传奇','2010-11-10 12:39:52','2010-11-10 12:39:52');
INSERT INTO `tags` VALUES (206,'传记','2010-11-10 12:59:34','2010-11-10 12:59:34');
INSERT INTO `tags` VALUES (207,'主旋律','2010-11-10 13:20:33','2010-11-10 13:20:33');
INSERT INTO `tags` VALUES (208,'青春偶像x','2010-11-10 14:46:35','2010-11-10 14:46:35');
INSERT INTO `tags` VALUES (209,'影视x','2010-11-10 14:46:35','2010-11-10 14:46:35');
INSERT INTO `tags` VALUES (210,'文艺剧情x','2010-11-10 14:46:35','2010-11-10 14:46:35');
INSERT INTO `tags` VALUES (211,'音乐歌舞x','2010-11-10 14:46:35','2010-11-10 14:46:35');
INSERT INTO `tags` VALUES (212,'手球','2010-11-15 10:29:48','2010-11-15 10:29:48');
INSERT INTO `tags` VALUES (213,'赛艇','2010-11-15 10:54:24','2010-11-15 10:54:24');
INSERT INTO `tags` VALUES (214,'亚运会','2010-11-17 11:22:39','2010-11-17 11:22:39');
INSERT INTO `tags` VALUES (215,'情感','2010-11-18 19:09:03','2010-11-18 19:09:03');
INSERT INTO `tags` VALUES (216,'影视x电视剧','2010-11-18 21:11:28','2010-11-18 21:11:28');
INSERT INTO `tags` VALUES (217,'影视x电视剧大陆','2010-11-18 21:22:31','2010-11-18 21:22:31');
INSERT INTO `tags` VALUES (218,'影视 电视剧','2010-11-18 21:22:52','2010-11-18 21:22:52');
INSERT INTO `tags` VALUES (219,'影视x电视剧x大陆','2010-11-18 21:23:25','2010-11-18 21:23:25');
INSERT INTO `tags` VALUES (220,'曲棍球','2010-11-22 10:18:46','2010-11-22 10:18:46');
INSERT INTO `tags` VALUES (221,'垒球','2010-11-22 10:19:18','2010-11-22 10:19:18');
INSERT INTO `tags` VALUES (222,'港台 言情剧 偶像剧','2010-11-22 15:05:04','2010-11-22 15:05:04');
INSERT INTO `tags` VALUES (223,'名著','2010-11-22 16:49:01','2010-11-22 16:49:01');
INSERT INTO `tags` VALUES (224,'美式足球','2010-11-22 16:57:20','2010-11-22 16:57:20');
INSERT INTO `tags` VALUES (225,'橄榄球','2010-11-22 16:57:20','2010-11-22 16:57:20');
INSERT INTO `tags` VALUES (226,'时装喜剧','2010-11-23 13:35:05','2010-11-23 13:35:05');
INSERT INTO `tags` VALUES (227,'情景剧','2010-11-23 18:24:41','2010-11-23 18:24:41');
INSERT INTO `tags` VALUES (228,'栏目','2010-12-02 09:43:49','2010-12-02 09:43:49');
INSERT INTO `tags` VALUES (229,'电视','2010-12-06 16:03:47','2010-12-06 16:03:47');
INSERT INTO `tags` VALUES (230,'农业','2011-04-26 14:54:56','2011-04-26 14:54:56');

/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;