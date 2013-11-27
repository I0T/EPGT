<div class="wapper" id="wapper">
	<div class="bg">
		<span class="week" title="按一返回智能门户"></span>
		
		<h1 class="titbg"><?php echo $wiki->getTitle()?></h1>

		<div class="tv clr">
			<div class="tvl">
				<div class="tvinfo">
					<ul>
						<li class="hides">主持人：
                        <?php if($hosts = $wiki->getHost()): $i = 0 ?>
                        <?php foreach($hosts as $host){$i++;
                                if($i<5){echo ($i > 1) ? ' /' : ''; echo $host;}
                              }
                              endif; 
                        ?>  
                        </li>
						<li class="hides">国家：<?php echo $wiki->getCountry()?>
                            <span class='movieyear'>播出频道：<?php echo mb_strcut($wiki->getChannel(),0,21,'utf-8');?></span>
                        </li>
						<li>简介：<?php echo $wiki->getHtmlCache(100, ESC_RAW); ?>...
                        <a href="#" onclick="showTip('<?php echo $wiki->getContent();?>',6000,'big')" id="showall">查看详情</a>
                        </li>
					</ul>
					<img src="<?php echo thumb_url($wiki->getCover(),150,200)?>" alt=""/>
				</div>
				<?php if ($playList = $wiki->getPlayList()) :?>
				<div class="playlibrary">
					<div class="itemchoice">
						<ul class="clr" id="myrefer">
						    <li><a href="#" onmouseover="this.className='there';showVideos(0,'<?php echo (string)$wiki->getId();?>')" onmouseout="this.className=''"><img src="/img/dbk.png" alt=""/></a></li>
							<li><a href="#" onmouseover="this.className='there';showVideos(1,'<?php echo (string)$wiki->getId();?>')" onmouseout="this.className=''"><img src="/img/pptv.png" alt=""/></a></li>
							<li><a href="#" onmouseover="this.className='there';showVideos(2,'<?php echo (string)$wiki->getId();?>')" onmouseout="this.className=''"><img src="/img/m1905.png" alt=""/></a></li>
						</ul>
					</div>
					
					<div class="itemnum" id="myvideo">
						<div class="hidenum">
							<ul class="clr longlist" id='playlist_part'>
                            <?php 
                                  $playlist=$wiki->getPlayList('yang.com');
                                  if($playlist):
                                      $videos = $playlist[0]->getVideos();
                                	  $totalVideos = count($videos);
                                	  $j = 1;
                                	  foreach($videos as $video):
                                      $title=$video->getTitle();
                                      $config=$video->getConfig();
                                      $asset_id=$config['asset_id'];
                           ?>
									<li class="videohs <?php echo ceil($j/2); ?>" id="<?php echo $j; ?>" value="<?php echo ceil($j/6); ?>"><a href="#"  onclick="playvideo('<?php echo $asset_id;?>','<?php echo $video->getReferer()?>');"><span><big><?php echo $title;?></big></span></a></li>
                            <?php
                                	  $j++;
                                	  endforeach;
                                  endif;
                            ?>
							</ul>
						</div>
					</div>
				</div>
                <?php else:  $dianbo_scroll=1;?>                
				<div class="notv">
					<h3>暂无点播资源，向您推荐以下内容</h3>
					<ul class="clr" id="dianbo">
						<?php include_component('wiki', 'related_movies')?>
					</ul>
				</div>
                <?php endif;?>
			</div>
			
			<div class="tvr">
				<?php include_partial('program_guide', array('count_programs' => $count_programs,'hot_programs'=>$hot_programs,'played_programs'=>$played_programs,'unplayed_programs'=>$unplayed_programs))?>
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
    try{
        //playVideo();
        //------播放当前视频
        var curSer=getCurrentService(); 
        //playVideoByLocation(curSer.getLocation());  //用这种方法从其他应用返回来不播放 
        var modulation = 16 * Math.pow(2, curSer.modulation - 1);
    	deliver = "deliver://"+curSer.frequency+"000."+curSer.symbolRate+"."+modulation+"."+curSer.serviceId;
        playVideoByLocation(deliver);
    }catch(err){
        
    }
    //------播放当前视频  
    $("#hotplays").scroll("big",10,8); 
    <?php if($dianbo_scroll==1): //防止滚动错误?>
    $("#dianbo").scroll1("big",4);
    <?php endif;?> 
    nextpageorg();
    //$("#playlist_part").scroll("big",10,8); 
    //$("#backview_dn").scroll("big",10); 
    //$("#bochuyugao").scroll("big",10); 
    //$("#huikan").scroll("big",10); 
    //$("#yugao").scroll("big",8); 
}

function orderAdd(channelname,programsName,starttime,channelCode){
    try {
        //starttime.replace("-","/");
        starttime=new Date(starttime);
        //alert(starttime);
		for(var i = 0; i < SerList.length; i++) {
			    var ser = SerList.getAt(i);				
				if(ser.name ==channelname){
                    programs=ser.getPrograms(0);
                    //alert(programs.length);
                    for(var j = 0; j < programs.length; j++) {
            				//if(programs[j].name ==programsName){
            				//alert(programs[j].startTime);
            				if(starttime>=programs[j].startTime && starttime<programs[j].endTime){
                                var location = programs[j].getLocation();
                            	var order = new Order(location);                         	
                            	var or=Orders.add(order);
                                Orders.save();
                                if(or==0){
                                    orderAjax(channelCode,programsName,starttime,channelname)
                                    showTip('预约成功');
                                }else if(or==-5){
                                    showTip('已经预约过该节目');
                                }else{
                                    showTip('预约失败');
                                }
            				}
            		}
				}
		}     
	}catch(err) {
		showTip("没有发现中间件！");
	}   
}
function orderAjax(channel_code,programsName,starttime,channelname){
    var userId=hardware.smartCard.serialNumber;
    $.ajax({
        url: '<?php echo url_for('wiki/orderAdd')?>',
        type: 'post',
        data: {'user_id': userId,'channel_code': channel_code,'program_name':programsName,'start_time':starttime,'channel_name':channelname},
        success: function(data){
            /*
            if (data == 1) {
                alert('预约成功');
            }
            */
        }       
    });
}
function showVideos(num,wiki_id){
    if(num==1){
        $("#myvideo").addClass('itemnum2');
        $("#myvideo").removeClass('itemnum3');
    }else if(num==2){
        $("#myvideo").addClass('itemnum3');
        $("#myvideo").removeClass('itemnum2');
    }else{
        $("#myvideo").removeClass('itemnum2');
        $("#myvideo").removeClass('itemnum3');
    }
    /*
    $("#myrefer").find("a").each(function(){
        $(this).removeClass('there');
    });
    $("#myrefer").find("a").eq(num).addClass('there');
    */
    $.ajax({
        url: '<?php echo url_for('wiki/videos')?>',
        type: 'post',
        data: {'num': num,'wiki_id':wiki_id,'model':'television'},
        success: function(data){
            $("#playlist_part").html(data);    
            nextpageorg();
            $("#playlist_part").scroll("big",10,8); 
        }       
    });
}
function tclSave(wikiid,url) {
    /*
    user_id=hardware.smartCard.serialNumber;
    $.ajax({
        url: '<?php echo url_for('wiki/tclSave')?>',
        type: 'post',
        dataType: 'text',
        data: {uid: user_id,wiki_id: wikiid},
        success: function(data){
            if(data==1)
                showTip('成功保存用户数据');
            else
                showTip('保存用户数据失败');    
        }
    });
    */
    location.href=url;
}

function nextpageorg(){
    var pagesize=arguments[0]?arguments[0]:6; //每页个数
    var linesize=arguments[1]?arguments[1]:3; //每页行数
	$('.videohs').each(function(){
		if($(this).attr('value')!=1){
			$(this).addClass("disforli");
		}
	});
	var count = $('.videohs').size();
	//if(count<=30){return false;}
	var pz	  = Math.ceil(count/pagesize);
	var p     = 1;
	
	$('.videohs').each(function(){
		var id = $(this).attr('id');
		var hang = this.className.split(' ');
		var ischange = (hang[1]%linesize == 0);
		this.onmouseover=function(){
			onkeydown=function(event){
				var p = Math.ceil(id/pagesize);
				//alert(event.keyCode);
				//alert(ischange);
				if(event.keyCode == 40 && ischange){
					$('.videohs').each(function(){
						var hangson = this.className.split(' ');
						if(this.className!='videohs '+hangson[1]+' disforli'){
							value = $(this).attr('value');
							//alert(value);
						}
					});
					if(value>=pz){
						showTip('已至最后一页');
						return false;
					}
					var newvalue = value+1; 
					$('.videohs').each(function(i){
						if($(this).attr('value')==newvalue){
							$(this).removeClass("disforli");
						}else if($(this).attr('value') == value){
							$(this).addClass("disforli");
						}
					});
					
					if(p < pz){
						p = p+1;
					}
					if(p > 1){
						var focusid = pagesize*(p-1)+1;
					}
					$('#'+focusid).find('a')[0].focus();
				}else if(event.keyCode == 38 && p>1 && hang[1] == (p*3-2)){//测试用p*1,其他p*3-2
					$('.videohs').each(function(){
						var hangson = this.className.split(' ');
						if(this.className!='videohs '+hangson[1]+' disforli'){
							value = $(this).attr('value');
						}
					});
					if(value<=1){
						showTip('已至第一页');
						return false;
					}
					var newvalue = value-1; 
					$('.videohs').each(function(){
						if($(this).attr('value')==newvalue){
							$(this).removeClass("disforli");
						}else if($(this).attr('value') == value){
							$(this).addClass("disforli");
						}
					});
					var focusid = 1;
					if(p <= pz && p >1){
						p = p-1;
						focusid = pagesize*p;
					}
					$('#'+focusid).find('a')[0].focus();
				}
			}
		}
	})
	
}
function playvideo(asset_id,sp_code) {
    location.href='/wiki/play/asset_id/'+asset_id+'/sp_code/'+sp_code+'/user_id/'+SmartCardNumber;
}
function played(contentid){
    url='/cpg/show/contented/'+contentid+'/clientid/'+StbNumber;
    location.href=url;
}
</script>