<?php include_partial("wiki/screenshots"); ?>
<script type="text/javascript">
function adddate()
{
	$('#adForm').submit();return;
}
</script>
  <div id="content">
        <div class="content_inner">
			<header>
				<h2 class="content"><?php echo $pageTitle?></h2>
				<nav class="utility">
				  <li class="save"><a href="#" onclick="adddate();">保存</a></li>
				  <li class="back"><a href="<?php echo "/nextweek_program/list?date=".$nextweek_programs->getDate() ?>">返回列表</a></li>
				</nav>
			</header>
			<?php include_partial('global/flashes')?>
			
            <form method="POST" id="adForm" name="adForm" action="">
            
            <div  width:65%;">
              <div class="widget">
                <h3>基本资料</h3>
				<div class="widget-body">
				  <ul class="wiki-meta">
				     <input type='hidden' name='id' value='<?php echo $id; ?>' >
					 <li><label>节目名称：</label><input type='text' name='program_name' value='<?php echo $nextweek_programs->getProgramName(); ?>'></li>
					 <li><label>频道号：</label><?php echo $nextweek_programs->getChannelCode(); ?></li>
					 <li><label>播放日期：</label><?php echo $nextweek_programs->getDate(); ?></li>
					 <li><label>播放时间：</label><?php echo $nextweek_programs->getStartTime()->format("H:i"); ?></li>
					 <li><label>结束时间：</label><?php echo $nextweek_programs->getEndTime()->format("H:i"); ?></li>
					 <li><label>维基ID：</label><?php echo $nextweek_programs->getWikiId()?$nextweek_programs->getWikiId():'&nbsp'; ?></li>
					 <li><label>标签：</label><?php if($nextweek_programs->getTags()):?><?php foreach($nextweek_programs->getTags() as $tag): ?><?php echo $tag; ?>,<?php endforeach; ?><?php endif;?></li>
					 <li><label>推荐语：</label><textarea name ='aspect' rows="1" cols="3" ><?php echo $nextweek_programs->getAspect(); ?></textarea></li>
					 <li><label>排序（数字）：</label><input type='text' name='sort' value='<?php echo $nextweek_programs->getSort(); ?>' onkeyup="value=value.replace(/[^\d]/g,'') " onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d.]/g,''))"></li>
					 <li><label>状态：</label>
					 发布 :<input type='radio' name='state' value='1' <?php if($nextweek_programs->getState() == '1') echo 'checked' ;?> > &nbsp;&nbsp;&nbsp;&nbsp;
					 未发布 :<input type='radio' name='state' value='0' <?php if($nextweek_programs->getState() == '0') echo 'checked' ;?> >
					 </li>
					 <li><label>图片大小：</label>
						 <select name="style" id="style" >
						 <?php foreach($style as $k =>$v):?>
						 <option value="<?php echo $k?>" <?php if($k == $nextweek_programs->getStyle()){echo "selected=\"selected\""; }?>><?php echo $v?></option>
						 <?php endforeach;?>
						 </select>
					 </li>
					 <li><label>节目图片:</label></li> 
					 <li id="right">
					 <?php if($nextweek_programs->getPoster()):?>
						<input  name="poster" value="<?php echo $nextweek_programs->getPoster();?>" type="hidden" />			
						<img style=""  src="<?php echo file_url($nextweek_programs->getPoster());?>" alt="加载中"> 					    
					 <?php endif;?>	
					 </li>
					 <li>
					 <?php if($nextweek_programs->getPoster()):?>
					 	<a id="file-uploads" class="button" href="<?php echo url_for('media/link'); ?>?function_name=programscreenshotAdds">更改剧照</a>
					 <?php else:?>
					 	<a id="file-uploads" class="button" href="<?php echo url_for('media/link'); ?>?function_name=programscreenshotAdds">上传剧照</a>
					 <?php endif;?>
					 </li>
					 <li><label>创建作者：</label><?php $names = $nextweek_programs->getAuthor();echo $names['user_name']; ?></li>
					 <li><label>最后更新时间：</label><?php echo $nextweek_programs->getUpdatedAt()?$nextweek_programs->getUpdatedAt()->format("Y-m-d H:i:s"):$nextweek_programs->getCreatedAt()->format("Y-m-d H:i:s"); ?></li>
				  </ul>
				</div>
              </div>
            </div> 
			</form>
        </div>
      </div>