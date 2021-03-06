<?php sfContext::getInstance()->getConfiguration()->loadHelpers('GetFileUrl');?>
<div class="wapper" id="wapper">
	<div class="bg">
		<div class="nav">
			<h1>江苏有线云媒体电视</h1>
            <div class="navh">
                <ul id="navul">
                    <li><a href="/default/index" class="there">智能门户</a></li>
                    <li><a href="/vod/index">影片库</a></li>
                    <li><a href="/channel/index">一周节目</a></li>
                    <li><a href="/user/cliplist">我的片单</a></li>
                    <li><a href="/search">搜索</a></li>
                </ul>
            </div>
		</div>		
		<div class="liststy playnow">
			<div class="hlist">
				<ul class="clr" id="livelist">
                    <?php include_component('default','liveList');?>
				</ul>
			</div>
		</div>		
		<div class="liststy youlike">
			<div class="hlist">
				<ul class="clr" id="recommend">
                <!--推荐内容-->
				</ul>
			</div>
		</div>		
		<div class="liststy playnow commant">
			<div class="hlist">
				<ul id="theme">
                    <?php 
                          foreach($themes as $theme):
                    ?>                  
					<li>
						<a href="<?php echo url_for('theme/show?tid='.$theme->getId()) ?>">
							<img src="<?php echo  thumb_url($theme->getImg(), 220, 125);?>" alt="" />
							<span><b><?php echo $theme->getTitle();?></b></span>
						</a>
					</li>
            		<?php
                          endforeach;
                    ?>
				</ul>
			</div>
		</div>		
		<div class="help">
			<ul>
				<li><img src="/img/fx.jpg" alt="选择"/>选择</li>
				<li><img src="/img/ok.jpg" alt="选择"/>进入</li>
				<li><img src="/img/cd.jpg" alt="选择"/>云媒体首页</li>
				<li><img src="/img/pd.jpg" alt="选择"/>帮助</li>
			</ul>
		</div>
	</div>
</div>
<script type="text/javascript">
    function initPage() {
    	publicInit();	
        playVideoReturn();
        //加载推荐内容
        recommend();       
        //导航滚动    
        $("#navul").animateNav({speed: 10, step: 75, width: 150});
        //图层滚动
        $("#livelist").animateNav({speed:10, step:122, width:244});
        $("#recommend").animateNav({speed:10, step:83, width:165}); 
        $("#theme").animateNav({speed:10, step:122, width:244}); 
        //文字滚动 
        $("#livelist").scroll("big",8); 
        $("#recommend").scroll("b",4);
        $("#theme").scroll("b",8); 
        //设置默认焦点
        $('#navul').find('a')[0].focus();
        //重新定义默认键值
        try{
            //Utility.ioctlWrite("motoKey2Dvb", "");	
        	Utility.ioctlWrite("JsAddKeyState","Y");  
        }catch(error){}
    }
    function showIndexPage() {
        showPlayPage(); 
    }  
    function goChannel(name) {
        showTip('正在跳转到该频道');
        setTimeout(function(){goChannelByName(name);},2000); //隔2秒再跳转
        return true;
    }
    function recommend(){
        $.ajax({
            url: '<?php echo url_for('default/recommend')?>',
            type: 'post',
            data: {'cardId': SmartCardNumber,'stbId': StbNumber},
            success: function(data){
                $("#recommend").html(data);    
                $("#recommend").animateNav({speed:10, step:83, width:165});   
                $("#recommend").scroll("b",4);
                //重新定义默认键值
                Utility.ioctlWrite("JsAddKeyState","Y");  
            }       
        });
    }
</script>