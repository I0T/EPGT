/*��ַд��˵��:

��ַд����Ҫע��һ��: ��ЩӦ��ǰ���Ǳ���ģ�����Ҫ���и߱��������Ӧ��������Ա���Ӧ�õĵ�ַд��:ui://loading.htm?+��Ӧ��Ӧ�õĵ�ַ

*/
var stb_id = hardware.STB.serialNumber;



/*vod�㲥��������ĵ㲥ģʽ,�㲥ģʽ��һ������Ӧ��˫����ҳ��ַ��һ��*/
var vod_type = iPanel.misc.getGlobal("vod_type");
if (typeof(vod_type) == "undefined" || vod_type == null || vod_type=="")
{
	vod_type = "family";
}

/*������ҳ*/
var index_url = "http://xinjianghdtv-stbepg.wasu.cn:8080/tvportal/jump/jump_xjlmu.jsp?stbid=" + stb_id + "&xjurl=ui://index.htm";

/********������********/
var tstv_url = "http://xinjianghdtv-stbepg.wasu.cn:8080/tvportal/jump/jump_xjlmu.jsp?code=huifang&stbid=" + stb_id + "&type=mpeg4";
//"http://xinjiang-timeshift.wasu.cn:7080/timeShift/xinjiangcolour/index.jsp?stbid=" + stb_id + "&type=mpeg4";
/********��������********/
/*��ʱ���*/
var xsmf_index = "http://xinjianghdtv-stbepg.wasu.cn:8080/tvportal/jump/jump_xjlmu.jsp?code=xsmf&stbid=" + stb_id;
/*����Ԥ��*/
var jcyg_index = "http://xinjianghdtv-stbepg.wasu.cn:8080/tvportal/jump/jump_xjlmu.jsp?code=jcyg&stbid=" + stb_id;
/*Ӱ���ײ�*/
var yingshi_index = "http://xinjianghdtv-stbepg.wasu.cn:8080/tvportal/jump/jump_xjlmu.jsp?code=yssb&stbid=" + stb_id;
/*����㲥*/
var huashu_sd_index = "http://xinjiang-stbepg.wasu.cn:8080/tvportal/jump/jump_xj120e.jsp?stbid=" + stb_id + "&xjurl=ui://index.htm";
/*����㲥*/
var gqdb_index = "http://xinjianghdtv-stbepg.wasu.cn:8080/tvportal/jump/jump_xj120egq.jsp?stbid=" + stb_id;
/*����㲥*/
var cqdb_index = "http://xinjianghdtv-stbepg.wasu.cn:8080/tvportal/jump/jump_xjlmu.jsp?code=wggq&stbid=" + stb_id + "&xjurl=ui://index.htm";
/*3d�㲥*/
var threeD_index = "http://xinjianghdtv-stbepg.wasu.cn:8080/tvportal/jump/jump_xjlmu.jsp?code=3ddb&stbid=" + stb_id;
/*����ר��*/
var jkzq_index = "http://10.26.7.45:81/Health/JK_index.html";
/*��ͯר��*/
var etzq_index = "http://10.26.7.45:81/HappyChildren/HappyChildren.html";
/*����ר��*/
var jyzq_index = "http://10.26.7.45:81/Education/Edu_index.html";
/*����ר��*/
var tyzq_index = "http://xinjianghdtv-stbepg.wasu.cn:8080/tvportal/jump/jump_xjlmu.jsp?code=nba&stbid=" + stb_id;

/********ά��㲥********/
/*ά�ĵ㲥*/
var index_weiwen_url ="http://xinjianghdtv-stbepg.wasu.cn:8080/tvportal/jump/jump_xjlmu.jsp?code=weiyu&stbid="+stb_id;
/*��Ƭ��ӳ*/
var weiwen_xpry_index = "http://xinjianghdtv-stbepg.wasu.cn:8080/tvportal/jump/jump_xjlmu.jsp?code=wydd&stbid=" + stb_id;
/*ά�ĵ��Ӿ�*/
var weiwen_dsj_index = "http://xinjianghdtv-stbepg.wasu.cn:8080/tvportal/jump/jump_xjlmu.jsp?code=wyser&stbid=" + stb_id;
/*ά�ĵ�Ӱ*/
var weiwen_dy_index = "http://xinjianghdtv-stbepg.wasu.cn:8080/tvportal/jump/jump_xjlmu.jsp?code=wymov&stbid=" + stb_id;
/*ά���ٶ�*/
var weiwen_shaoer_index = "http://xinjianghdtv-stbepg.wasu.cn:8080/tvportal/jump/jump_xjlmu.jsp?code=wysr&stbid=" + stb_id;
/*ά������*/
var weiwen_xw_index = "http://xinjianghdtv-stbepg.wasu.cn:8080/tvportal/jump/jump_xjlmu.jsp?code=wynews&stbid=" + stb_id;
/*ά������*/
var weiwen_wenyi_index = "http://xinjianghdtv-stbepg.wasu.cn:8080/tvportal/jump/jump_xjlmu.jsp?code=wywy&stbid=" + stb_id;

/********����㲥********/
/*���ﻥ���㲥*/
var hayu_index = "http://xinjianghdtv-stbepg.wasu.cn:8080/tvportal/jump/jump_xjlmu.jsp?code=hayu&stbid=" + stb_id;
/*���Ӿ�*/
var hayu_dianshiju = "http://xinjianghdtv-stbepg.wasu.cn:8080/tvportal/jump/jump_xjlmu.jsp?code=hyser&stbid=" + stb_id;
/*��Ӱ*/
var hayu_dianying = "http://xinjianghdtv-stbepg.wasu.cn:8080/tvportal/jump/jump_xjlmu.jsp?code=hymov&stbid=" + stb_id;
/*����*/
var hayu_xinwen = "http://xinjianghdtv-stbepg.wasu.cn:8080/tvportal/jump/jump_xjlmu.jsp?code=hynews&stbid=" + stb_id;
/*����*/
var hayu_wenyi = "http://xinjianghdtv-stbepg.wasu.cn:8080/tvportal/jump/jump_xjlmu.jsp?code=hyzy&stbid=" + stb_id;


/********ȫ���½�********/
/*�����½�*/
var dmxj_index = "http://10.26.7.45:81/Beautiful_XJ/index.html";
/*�߽��½�*/
var zjxj_index = "http://xinjianghdtv-stbepg.wasu.cn:8080/tvportal/jump/jump_xjlmu.jsp?code=zjxj&stbid=" + stb_id;
/*�½�ũҵ*/
var xjny_index = "http://xinjianghdtv-stbepg.wasu.cn:8080/tvportal/jump/jump_xjlmu.jsp?code=xjny&stbid=" + stb_id;
/*�½��߷���*/
var xjqfj_index = "http://xinjianghdtv-stbepg.wasu.cn:8080/tvportal/jump/jump_xjlmu.jsp?code=wdlyy&stbid=" + stb_id;
/*��ɽ�Ķ�*/
var tsyd_index = "http://10.60.6.212/tvshow";
/*��ɽ�黭Ժ*/
var tsshy_index = "http://10.26.7.45:81/TSSHY/index.html";
/*��ɽ����*/
var hswz_index = "http://xinjianghdtv-stbepg.wasu.cn:8080/tvportal/jump/jump_xjlmu.jsp?code=hswz&stbid=" + stb_id;
/*��ʳ�½�*/
var msxj_index = "http://xinjianghdtv-stbepg.wasu.cn:8080/tvportal/jump/jump_xjlmu.jsp?code=msxj&stbid=" + stb_id;

/********���̳�*******/
var dssc_index = "http://10.60.6.220:8080/iptvhd/index.html";


/********������*******/
/*ʢ����Ϸ*/
var sdyx_index = "ui://loading.htm?http://10.48.179.113/gate_xj/login?stbId=" + stb_id + "&returnUrl=ui://index.htm"
/*ϣ����Ϸ*/
var xwyx_index = "http://10.26.100.80:8089/seewoser/index.jsp?stbid=" + stb_id ;
/*3D��Ϸ*/
var tgyx_index = "http://10.60.6.205:8881/gp3-tv2A/index.html";
var tmpVersion = iPanel.misc.revision;
tmpVersion = tmpVersion.substring(0,tmpVersion.indexOf("."));
if(tmpVersion == "20432") tgyx_index = "http://10.60.6.205:8881/gp3-tv2C/index.html";
/*�ų���Ϸ*/
var jiuc_index = "ui://loading.htm?http://10.26.7.60/hw720p/Default.aspx";
/*�ųǶ���*/
var jcdm_index="ui://loading.htm?http://10.26.7.60/IPTVRead/default_direct.aspx?stbid=" + stb_id;
/*����OK*/
var kalaok_index = "http://125.210.177.63:8080/gq30/portal.jsp?stbid=" + stb_id;
/*�ʺ�����*/
var caihong_index = "http://xinjianghdtv-stbepg.wasu.cn:8080/tvportal/jump/jump_xjlmu.jsp?code=chyy&stbid=" + stb_id;

/********�ǻ��½�********/
/*�߿���ѯ*/
var gkcx_index = "http://10.26.7.45:81/other/score/index.action";
/*ʢ����ѧ*/
var sdwx_index = "http://10.60.6.215/mybook/TVBook/Start?stbid=" + stb_id + "&returnUrl=ui://index.htm";
/*��ͨΥ��*/
var jtwz_index="http://10.26.7.45:81/other/car/index.html";
/*��������*/
var jzfw_index = "http://10.26.7.45:81/other/jiazheng/index.html";
/*�����ѯ*/
var hbcx_index="http://10.26.7.45:81/other/air_index.jsp";
/*��Ƹ��Ϣ*/
var zpxx_index = "http://10.26.7.45:81/other/pserson.action";
/*������Ϣ*/
var bmxx_index="http://10.26.7.45:81/other/yxfood.action?start=0&limit=5";
/*��Ʊ��ַ*/
var stock_index = "ui://loading.htm?dvb://65535.65535.951/";
/*��Ʊ����*/
var cpzx_index="http://10.60.6.214/lottery/";
/*����Ԥ��*/
var weather_index = "http://10.60.6.250/itime_weather/html/index.htm";
/*ͷ������*/
var sinatvnews_index = "http://10.60.6.250/itime_sinatvnews/html/index.htm";
/*��������¼*/
var mingren_index = "http://10.60.6.250/wisdom/html/index.htm";
/*��ʷ�ϵĽ���*/
var lishi_index = "http://10.60.6.250/itime_history_today/html/index.htm";
/*�ٻ���*/
var baihua_url = "http://10.60.6.250/flowers/html/index.htm";
/*��ͥ����*/
var jiating_url = "http://10.60.6.250/potting/html/index.htm";
/*��ͳ������Դ*/
var chuantong_url = "http://10.60.6.250/festivalsource/html/index.htm";
/*56�������*/
var mingzhu_url = "http://10.60.6.250/56ethnic_customs/html/index.htm";
/*�й���������*/
var minghua_url = "http://10.60.6.250/itime_chinamastergallery/html/index.htm";
/*ħ�ó���*/
var magickitchen_index = "http://10.60.6.204:8080/magickitchen/html/index.htm";
/*24����*/
var ershisijieqi_index = "http://10.60.6.204:8080/itime_24solarterm/html/index.htm";
/*����һ��ͨ*/
var gegu_index = "ui://loading.htm?http://218.108.247.81/dapan.php?code=&userID=&cityID=&ordertype=&product=&cjIndexPage=http://125.210.229.35:80/lwms-tv/finance.jsp?ext=1&vflag=29&stbid=" + stb_id;
/*��Ѷ�Ż�*/
var zxmh_index="http://10.60.6.214:7070/xinjiangweb/";
var cfxj_index="http://125.210.229.35/lwms-tv/finance.jsp?ext=1&vflag=503&grouptype=1&stbid=&cache=nocache";


/********��Ӧ��********/
/*���мҾ�����*/
var zhonghang_index = "ui://loading.htm?http://10.60.6.213/";
/*Ӧ���̵�*/
var yysd_index = "http:// 10.26.7.47:8080/btopinterface_ott/app/iptv/appShop/base";
/*����ת��*/
var jiliangzhuanhuan_index = "http://10.60.6.204:8080/unit_converter/html/index.htm";
/*�����ֵ�*/
var hanyuzidian_index = "http://10.60.6.204:8080/dict/html/index.htm";
/*�����ȫ*/
var chebiao_index = "http://10.60.6.250/itime_vehiclelogo_club/html/index.htm";
/*��������*/
var calendar_index = "http://10.60.6.250/i_calendar/html/index.htm";
/*��ѧ������*/
var kexuejisuanqi_index = "http://10.60.6.250/calc/html/index.htm";

/********Ӫҵ��********/
/*����Ӫҵ��*/
var dianshi_cx="http://10.60.6.211:8080/payment/index.htm?1&0";
/*���ӽɷ�*/
var dianshi_jf="http://10.60.6.211:8080/payment/index.htm?2&0";
/*ͨѶ�ѽ���*/
var txf_jn="http://10.60.6.211:8080/payment/index.htm?2&2";
/*���ÿ�����*/
var xyk_hk="http://10.60.6.211:8080/payment/index.htm?2&3";
/*��Ʒ����*/
var dianshi_dg="http://10.60.6.211:8080/payment/index.htm";


/*�����Ƽ�*/
/*pic : ��Ӧ��ͼ������� ; url : ��Ӧ���Ƽ��ĵ�ַ ; name : ��Ӧ��Ӧ������ ; type : ��Ӧ��Ӧ�õ�����*/
var recommend = [{"pic":"app_ico1.png","url":xwyx_index,"name":"������Ϸ","lockPos":10,"type":"DTVM-H"},
					{"pic":"app_ico2.png","url":jyzq_index,"name":"����ר��","lockPos":7,"type":"DTVM-H"},
					{"pic":"app_ico3.png","url":etzq_index,"name":"��ͯר��","lockPos":6,"type":"DTVM-H"},
					{"pic":"app_ico4.png","url":sdwx_index,"name":"ʢ����ѧ","lockPos":11,"type":"DTVM-H"},
					{"pic":"app_ico5.png","url":"ui://system/epg.htm","name":"��Ŀָ��","type":"DTVM-H"}
				];



/*һ���˵�*/
/*��������һ���˵�����*/
/*
Ĭ�ϴ���:
	��������� : ����ֱ��
	�����������/ά��㲥/����㲥 : ��������˵��ĵ�һ��Ӧ��
	���� : ��������˵�
*/
var mainMenu_content = ["������","��������","ά��㲥","����㲥","ȫ���½�","���̳�","������","����Ѷ","��Ӧ��","Ӫҵ��"];
/*Ĭ�ϵ�һ���˵���ͼ��*/
var mainMenu = ["mianMenu0_1.png","mianMenu0_2.png","mianMenu0_3.png","mianMenu0_4.png","mianMenu0_5.png","mianMenu0_6.png","mianMenu0_7.png","mianMenu0_8.png","mianMenu0_9.png","mianMenu0_10.png"];
/*��ĳ��һ���˵�Ϊ����ʱ��ͼ��*/
var mainMenu_focus = ["mianMenu1_1.png","mianMenu1_2.png","mianMenu1_3.png","mianMenu1_4.png","mianMenu1_5.png","mianMenu1_6.png","mianMenu1_7.png","mianMenu1_8.png","mianMenu1_9.png","mianMenu1_10.png"];
/*�������һ���˵��ƶ��������˵�ʱ,��Ӧһ���˵���ͼ��*/
var mainMenu_blur = ["mianMenu2_1.png","mianMenu2_2.png","mianMenu2_3.png","mianMenu2_4.png","mianMenu2_5.png","mianMenu2_6.png","mianMenu2_7.png","mianMenu2_8.png","mianMenu2_9.png","mianMenu2_10.png"];



/*�����˵�*/
/*�����˵���һ���˵���Ӧ��ÿ��һ���˵���Ӧһϵ���Ӳ˵�*/
/*pic : ��Ӧ��ͼ������� ; url : ��Ӧ���Ƽ��ĵ�ַ ; name : ��Ӧ��Ӧ������ ; type : ��Ӧ��Ӧ�õ�����*/
var subMenu = [
	[/*������*/
		{"url":"ui://play_kanba.html?0","pic":"icon_gqkb.png","name":"���忴��","type":"DTVM-H"},				/*���忴��*/
		{"url":"ui://play_tuwen.html","pic":"icon_twpd.png","name":"ͼ��Ƶ��","type":"DTVM-H"},							                /*ͼ��Ƶ��*/
		{"url":tstv_url,"pic":"icon_dshf.png","name":"���ӻط�","type":"DTVM-H"},							          /*���ӻط�*/
		{"url":"ui://mosaic/mosaic.htm?2","pic":"icon_tydsq.png","name":"��������ǽ","type":"DTVM-H"},	/*��������ǽ*/
		{"url":"ui://mosaic/mosaic.htm?1","pic":"icon_etdsq.png","name":"��ͯ����ǽ","type":"DTVM-H"},	/*��ͯ����ǽ*/
		{"url":"ui://mosaic/mosaic.htm?0","pic":"icon_dydsq.png","name":"��Ӱ����ǽ","type":"DTVM-H"},	/*��Ӱ����ǽ*/
		{"url":"ui://3D","pic":"icon_3Dzb.png","name":"3Dֱ��","type":"DTVM-H"},								        /*3Dֱ��*/
		{"url":"ui://music","pic":"icon_gbdt.png","name":"�㲥��̨","type":"DTVM-H"}							    	/*�㲥��̨*/
	],
	
	[/*��������*/
		{"url":xsmf_index,"pic":"icon_xsmf.png","name":"��ʱ���","type":"DTVM-H"},											/*��ʱ���*/
		{"url":jcyg_index,"pic":"icon_jcyg.png","name":"����Ԥ��","type":"DTVM-H"},											/*����Ԥ��*/
		{"url":yingshi_index,"pic":"icon_yssb.png","name":"Ӱ���ײ�","lockPos":1,"type":"DTVM-H"},			/*Ӱ���ײ�*/
		{"url":huashu_sd_index,"pic":"icon_bqdb.png","name":"����㲥","type":"DTVM-H"},						  	/*����㲥*/
		{"url":gqdb_index,"pic":"icon_gqdb.png","name":"����㲥","lockPos":2,"type":"DTVM-H"},					/*����㲥*/
		{"url":cqdb_index,"pic":"icon_cqdb.png","name":"����㲥","lockPos":3,"type":"DTVM-H"},	        /*����㲥*/
		{"url":threeD_index,"pic":"icon_3Ddb.png","name":"3D�㲥","lockPos":4,"type":"DTVM-H"},					/*3D�㲥*/
		{"url":jkzq_index,"pic":"icon_jkzq.png","name":"����ר��","lockPos":5,"type":"DTVM-H"},	        /*����ר��*/
		{"url":etzq_index,"pic":"icon_etzq.png","name":"��ͯר��","lockPos":6,"type":"DTVM-H"},	         /*��ͯר��*/
		{"url":jyzq_index,"pic":"icon_jyzq.png","name":"����ר��","lockPos":7,"type":"DTVM-H"},          /*����ר��*/
		{"url":tyzq_index,"pic":"icon_tyzq.png","name":"����ר��","lockPos":8,"type":"DTVM-H"}							/*����ר��*/
	],

	[/*ά��㲥*/
		{"url":index_weiwen_url,"pic":"icon_wyhddb.png","name":"ά��㲥","type":"DTVM-H"},					/*ά��㲥*/
		{"url":weiwen_xpry_index,"pic":"icon_sfzq.png","name":"��Ƭ��ӳ","type":"DTVM-H"},							/*��Ƭ��ӳ*/
		{"url":weiwen_dsj_index,"pic":"icon_dsglm.png","name":"���Ӿ���Ŀ","type":"DTVM-H"},					  /*���Ӿ���Ŀ*/
		{"url":weiwen_dy_index,"pic":"icon_dylm.png","name":"��Ӱ��Ŀ","type":"DTVM-H"},							  /*��Ӱ��Ŀ*/
		{"url":weiwen_shaoer_index,"pic":"icon_selm.png","name":"�ٶ���Ŀ","type":"DTVM-H"},				   	/*�ٶ���Ŀ*/
		{"url":weiwen_xw_index,"pic":"icon_xwlm.png","name":"������Ŀ","type":"DTVM-H"},						    /*������Ŀ*/
		{"url":weiwen_wenyi_index,"pic":"icon_wylm.png","name":"������Ŀ","type":"DTVM-H"}					  	/*������Ŀ*/
	],

	[/*����㲥*/
		{"url":hayu_index,"pic":"icon_hydb.png","name":"����㲥","type":"DTVM-H"},								      /*����㲥*/
		{"url":hayu_dianshiju,"pic":"icon_hydsj.png","name":"���Ӿ�","type":"DTVM-H"},						    	/*���Ӿ�*/
		{"url":hayu_dianying,"pic":"icon_hydy.png","name":"��Ӱ","type":"DTVM-H"},							      	/*��Ӱ*/
		{"url":hayu_xinwen,"pic":"icon_hyxw.png","name":"����","type":"DTVM-H"},								        /*����*/
		{"url":hayu_wenyi,"pic":"icon_hyzy.png","name":"����","type":"DTVM-H"}								        	/*����*/
	],

	[/*ȫ���½�*/
		{"url":dmxj_index,"pic":"icon_dmxj.png","name":"�����½�","type":"DTVM-H"},							        /*�����½�*/
		{"url":zjxj_index,"pic":"icon_zjxj.png","name":"�߽��½�","type":"DTVM-H"},								       /*�߽��½�*/										
		{"url":xjny_index,"pic":"icon_xjny.png","name":"�½�ũҵ","type":"DTVM-H"},							        /*�½�ũҵ*/
		{"url":xjqfj_index,"pic":"icon_xjqfj.png","name":"�½��߷���","type":"DTVM-H"},							    /*�½��߷���*/							
		{"url":tsyd_index,"pic":"icon_tsyd.png","name":"��ɽ�Ķ�","type":"DTVM-H"},								      /*��ɽ�Ķ�*/										
		{"url":tsshy_index,"pic":"icon_tsshy.png","name":"��ɽ�黭Ժ","type":"DTVM-H"},							    /*��ɽ�黭Ժ*/
		{"url":hswz_index,"pic":"icon_hswz.png","name":"��ɽ����","type":"DTVM-H"},								      /*��ɽ����*/						
		{"url":msxj_index,"pic":"icon_msxj.png","name":"��ʳ�½�","type":"DTVM-H"}							        /*��ʳ�½�*/							
	],

	[/*�ǻ��½�*/
		{"url":zxmh_index,"pic":"icon_zxmh.png","name":"��Ѷ�Ż�","type":"DTVM-H"},						/*��Ѷ�Ż�*/
		{"url":cfxj_index,"pic":"icon_cfxj.png","name":"�Ƹ��½�","type":"DTVM-H"},					          	/*�Ƹ��½�*/
		{"url":gkcx_index,"pic":"icon_gkcx.png","name":"�߿���ѯ","type":"DTVM-H"},					          	/*�߿���ѯ*/
		{"url":sdwx_index,"pic":"icon_sdwx.png","name":"ʢ����ѧ","lockPos":11,"type":"DTVM-H"},	      /*ʢ����ѧ*/	
		{"url":jtwz_index,"pic":"icon_wzcx.png","name":"Υ�²�ѯ","type":"DTVM-H"},											/*Υ�²�ѯ*/
		{"url":jzfw_index,"pic":"icon_jzxx.png","name":"��������","type":"DTVM-H"},									    /*��������*/
		{"url":hbcx_index,"pic":"icon_hbcx.png","name":"�����ѯ","type":"DTVM-H"},				          		/*�����ѯ*/
		{"url":zpxx_index,"pic":"icon_zpxx.png","name":"��Ƹ��Ϣ","type":"DTVM-H"},						      		/*��Ƹ��Ϣ*/
		{"url":bmxx_index,"pic":"icon_bmxx.png","name":"������Ϣ","type":"DTVM-H"},								      /*������Ϣ*/
		{"url":stock_index,"pic":"icon_dpzs.png","name":"��������","type":"DTVM-H"},              			/*��������*/
		{"url":cpzx_index,"pic":"icon_cpzx.png","name":"��Ʊ����","type":"DTVM-H"},		                	/*��Ʊ����*/	
		{"url":weather_index,"pic":"icon_tqyb.png","name":"����Ԥ��","type":"DTVM-H"},					    		/*����Ԥ��*/
		{"url":sinatvnews_index,"pic":"icon_ttxw.png","name":"ͷ������","type":"DTVM-H"},			  				/*ͷ������*/
		{"url":gegu_index,"pic":"icon_ggydt.png","name":"����һ��ͨ","type":"DTVM-H"},					    	/*����һ��ͨ*/
		{"url":mingren_index,"pic":"icon_mrmy.png","name":"��������¼","type":"DTVM-H"},								/*��������¼*/	
		{"url":lishi_index,"pic":"icon_ls.png","name":"��ʷ�ϵĽ���","type":"DTVM-H"},					 			/*��ʷ�ϵĽ���*/	
		{"url":minghua_url,"pic":"icon_zgmhxs.png","name":"�й���������","type":"DTVM-H"},								/*�й���������*/	
		{"url":ershisijieqi_index,"pic":"icon_essjq.png","name":"24����","type":"DTVM-H"}		/*24����*/
		
	],
	[/*���̳�*/ 
		{"url":"","pic":"icon_dssc.png","name":"�����̳�","type":"DTVM-H"},										            /*�����̳�*/
		{"url":"","pic":"icon_shenghuo.png","name":"����","type":"DTVM-H"},											          /*����*/
		{"url":"","pic":"icon_shishang.png","name":"ʱ��","type":"DTVM-H"},											  	      /*ʱ��*/
		{"url":"","pic":"icon_jiadian.png","name":"�ҵ�","type":"DTVM-H"},												        /*�ҵ�*/
		{"url":"","pic":"icon_muying.png","name":"ĸӤ","type":"DTVM-H"},												          /*ĸӤ*/
		{"url":"","pic":"icon_zonghe.png","name":"�ۺ�","type":"DTVM-H"},										              /*�ۺ�*/
        {"url":"","pic":"icon_zkzq.png","name":"�ۿ�ר��","type":"DTVM-H"} 												      	/*�ۿ�ר��*/
	],

	[/*������*/
		{"url":sdyx_index,"pic":"icon_sdyx.png","name":"ʢ����Ϸ","lockPos":9,"type":"DTVM-H"},						 /*ʢ����Ϸ*/
		{"url":xwyx_index,"pic":"icon_xwyx.png","name":"ϣ����Ϸ","lockPos":10,"type":"DTVM-H"},           /*ϣ����Ϸ*/
		{"url":tgyx_index,"pic":"icon_dgyx.png","name":"������Ϸ","type":"DTVM-H"},									       /*������Ϸ*/
		{"url":jiuc_index,"pic":"icon_jcyx.png","name":"�ų���Ϸ","type":"DTVM-H"},								        /*�ų���Ϸ*/
		{"url":jcdm_index,"pic":"icon_jcdm.png","name":"�ųǶ���","type":"DTVM-H"},					    	  		  /*�ųǶ���*/	
  	{"url":kalaok_index,"pic":"icon_klok.png","name":"����OK","type":"DTVM-H"},								       	/*����OK*/
		{"url":caihong_index,"pic":"icon_chyx.png","name":"�ʺ�����","type":"DTVM-H"}						  		   /*�ʺ�����*/
	],

		
	
	[/*��Ӧ��*/
		{"url":zhonghang_index,"pic":"icon_jgyh.png","name":"���мҾ�����","type":"DTVM-H"},						/*���мҾ�����*/
		{"url":yysd_index,"pic":"icon_yysd.png","name":"Ӧ���̵�","type":"DTVM-H"},							  	    /*Ӧ���̵�*/
		{"url":"ui://localDisk.htm","pic":"icon_USBbf.png","name":"USB����","type":"DTVM-H"},						/*USB����*/
		{"url":jiliangzhuanhuan_index,"pic":"icon_jlzh.png","name":"����ת��","type":"DTVM-H"},					/*����ת��*/	
		{"url":hanyuzidian_index,"pic":"icon_hyzd.png","name":"�����ֵ�","type":"DTVM-H"},							/*�����ֵ�*/					
		{"url":chebiao_index,"pic":"icon_cbdq.png","name":"�����ȫ","type":"DTVM-H"},									/*�����ȫ*/
		{"url":calendar_index,"pic":"icon_dsrl.png","name":"��������","type":"DTVM-H"},					  			/*��������*/
		{"url":kexuejisuanqi_index,"pic":"icon_jsq.png","name":"������","type":"DTVM-H"}						        	/*������*/	
	],
	
	[/*Ӫҵ��*/
		{"url":"ui://system/systemSetIndex.htm","pic":"icon_xtsz.png","name":"ϵͳ����","type":"DTVM-H"},/*ϵͳ����*/
		{"url":"ui://system/channelManager.htm","pic":"icon_pdsz.png","name":"Ƶ������","type":"DTVM-H"},/*Ƶ������*/
		{"url":"ui://system/epg.htm","pic":"icon_jmzn.png","name":"��Ŀָ��","type":"DTVM-H"},					 /*��Ŀָ��*/
		{"url":"ui://emailList.htm","pic":"icon_smxx.png","name":"��������","type":"DTVM-H"},						/*��������*/
		{"url":dianshi_cx,"pic":"icon_dsyyt.png","name":"����Ӫҵ��","type":"DTVM-H"},			       		         	/*����Ӫҵ��*/
		{"url":dianshi_jf,"pic":"icon_dsjf.png","name":"���ӽɷ�","type":"DTVM-H"},				     			   	/*���ӽɷ�*/
		{"url":txf_jn,"pic":"icon_hfjn.png","name":"ͨѶ�ѽ���","type":"DTVM-H"},								        /*ͨѶ�ѽ���*/
		{"url":xyk_hk,"pic":"icon_xykhd.png","name":"���ÿ�����","type":"DTVM-H"},								    	/*���ÿ�����*/  
		
		{"url":dianshi_dg,"pic":"icon_cpdg.png","name":"��Ʒ����","type":"DTVM-H"},							       	/*��Ʒ����*/
		{"url":"ui://system/kidsLock.htm","pic":"icon_ets.png","name":"��ͯ��","type":"DTVM-H"}				   /*��ͯ��*/
	]
];