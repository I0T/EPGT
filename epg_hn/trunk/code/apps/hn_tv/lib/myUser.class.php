<?php

class myUser extends sfBasicSecurityUser
{
    protected $user;
    protected $commnets = array();
    
    /**
     * ��ȡ��ǰ�û���������
     * @author zhigang
     */
    public function getUserCity() {
        $city = $this->getAttribute("user_city");
        if (!$city) {
            $this->initUserCityProvinceByIP();
            $city = $this->getAttribute("user_city");
        }
        
        return $city;
    }

    /**
     * ��ȡ��ǰ�û�ʡ��
     * @author zhigang
     */
    public function getUserProvince() {
        $province = $this->getAttribute("province");
        if (!$province) {
            $this->initUserCityProvinceByIP();
            $province = $this->getAttribute("province");
        }

        return $province;
    }

    /**
     * ����IP��ʼ���û�����ʡ�������
     */
    protected function initUserCityProvinceByIP() {
        $ip = Common::get_remote_ip();
        $city_info = Doctrine::getTable('Ip')->getCity($ip);
        $city = $city_info->getCity();
        $province = $city_info->getProvince();
        $this->setAttribute("user_city", $city);
        $this->setAttribute("province", $province);
    }

    /**
     * �������ͻ�ȡ�û���ά��������״̬
     * @param <string> $type like / dislike / watched
     * @param <string> $wiki_id
     * @return <type>
     * @author luren
     */
    public function getStatusByType($wiki_id, $type) {
        if (!isset($this->commnets[$type])) {
            $mongo = sfContext::getInstance()->getMondongo();
            $CommentRepository = $mongo->getRepository('Comment');
            $this->commnets[$type] = $CommentRepository->getOneComment($this->getAttribute('user_id'), $wiki_id, $type);
        }

        return $this->commnets[$type];
    }

    /**
     * ��ȡ�û���Ϣ
     * @author luren
     */
    public function getUserInfo() {
        if (!isset($this->user)) {
            $mongo = sfContext::getInstance()->getMondongo();
            $UserRepository = $mongo->getRepository('User');
            $this->user = $UserRepository->findOneById(new MongoId($this->getAttribute('user_id')));
        }

        return $this->user;
    }
    /**
     * ��ȡ�û���ǩ
     * @return <type>
     * @author luren
     */
    public function getUserTags() {
        if ($this->getUserInfo()) {
            return $this->getUserInfo()->getTags();
        }
        return null;
    }
    
    /**
     * weibo ��ȫ������
     * @author lizhi
     * @return array
     */
    public function getWeibo() {
        $arr = array();
        $Qqt_api_config = sfConfig::get("app_weibo_Qqt");
        $QqtWeibo = new QqtWeiboOAuth($Qqt_api_config['akey'], $Qqt_api_config['skey'], NULL, NULL);
        $url = $Qqt_api_config['callback_url'].'connect_save?type=Qqt';
        $Qqtkey = $QqtWeibo->getRequestToken($url);
        $this->setAttribute('Qqt_oauth_token',  $Qqtkey['oauth_token']);
        $this->setAttribute('Qqt_oauth_token_secret',  $Qqtkey['oauth_token_secret']);
        $aurl = $QqtWeibo->getAuthorizeURL($this->getAttribute('Qqt_oauth_token') ,false , '');
        $this->Qqt = $aurl;
        $arr['Qqt'] = $this->Qqt;
        //sina
        $Sina_api_config = sfConfig::get("app_weibo_Sina");
        $SinaWeibo = new SinaWeiboOAuth($Sina_api_config['akey'], $Sina_api_config['skey'], NULL, NULL);
        $Sinakey = $SinaWeibo->getRequestToken();
        $this->setAttribute('Sina_oauth_token',  $Sinakey['oauth_token']);
        $this->setAttribute('Sina_oauth_token_secret',  $Sinakey['oauth_token_secret']);
        $url = $Sina_api_config['callback_url'].'connect_save?type=Sina';
        $aurl = $SinaWeibo->getAuthorizeURL($this->getAttribute('Sina_oauth_token') ,false , $url);
        $this->Sina = $aurl; 
        $arr['Sina'] = $this->Sina;
        return $arr;
    }
    
    /**
     * ����û��Ƿ�Ϊ�Լ�
     * @package uid string �û�ID
     * @return boolean
     * @author lizhi
     */
    public function checkMe($uid) {
        $user_id = $this->getAttribute('user_id');
        if($user_id==$uid){
            return true;
        }
        if($uid=="" && $user_id != ""){
            return false;
        }
        return true;
    }

}
