<?php if($wikiTagsRepons): ?>
    <?php $i = 0;?>
	<?php foreach($wikiTagsRepons as $key => $tags) :?>
    <?php if($i <= 10):?>
	<?php if ($tags == 'ȫ��'):?>
	<li><h3><a href="javascript:void(0);" <?php if($mytag=="ȫ��" || $mytag=="" ):?>  class="there" <?php endif;?>  onclick="listForm('tag','ȫ��');">ȫ��</a></h3></li>
  	<?php else: ?>
  	<li><a href="javascript:void(0);"  <?php  if($mytag==$tags):?> class="there" <?php endif;?>  onclick="listForm('tag','<?php echo $tags?>');"><?php echo $tags;?></a></li>
  	<?php endif;?>
    <?php endif;?> 
    <?php $i++;?>               
 	<?php endforeach;?>
<?php endif; ?>