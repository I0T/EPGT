<?php include_partial("controller") ?>

<div class="epg-details">
      <div class="left-col">
        <div class="cover"><img src="<?php echo $wiki->getCoverUrl(); ?>" width="" height="" alt=""></div>
        <ul>
          <li class="col-2">主持人: <strong>
                                    <?php
                                        function show($item,$key)
                                        {
                                            if($key != 0 )
                                            {
                                                echo ' / <span class="no-warp">'.$item.'</span>';
                                            }else{
                                                echo '<span class="no-warp">'.$item.'</span>';
                                            }
                                        }
                                        $hosts = $sf_data->getRaw("wiki")->getHost();
                                        //$hosts = explode(",",$hosts);
                                        array_walk($hosts,'show');
                                    ?>
                                    </strong></li>
          <li>播出频道: <strong><span class="no-warp"><?php echo trim($wiki->getChannel()); ?></span></strong></li>
          <li>首播时间: <strong><span class="no-warp"><?php echo trim($wiki->getPlayTime()) ?></span></strong></li>

        </ul>
      </div>
      <div class="right-col">
        <div class="title"><?php echo $wiki->getTitle()?></div>
        <div class="summary">
            <div class="content-slide" style="top:0;">
                <?php echo $wiki->getHtmlCache(ESC_RAW); ?>
            </div>
        </div>
        <div class="stills">
          <ul>
             <?php
                $dramatis = $sf_data->getRaw("wiki")->getScreenshots();
                $photo_count = count($dramatis) -1 ;
                for($i=0;$i<3;$i++):
                if(($photo_count >= $i) && ($photo_count > 0) ):
              ?>
                  <li <?php echo ( $i == 2 ) ? 'class="last"' : 'class=""' ?>><img src="<?php echo file_url($dramatis[$i]) ?>" /></li>
              <?php else: ?>
                   <li <?php echo ( $i == 2 ) ? 'class="last"' : 'class=""' ?> ><img src="<?php echo image_path('details_no_still.png') ?>" width="" height="" alt=""></li>
              <?php endif ?>
              <?php endfor ?>
          </ul>
        </div>
           <div class="pagenator"><span>00</span>/<span rel="1">00</span></div>
      </div>
 <!--          <div class="player">
   <span>[江苏卫视] 正在直播 第10集</span>
        <span class="time">03:00/05:00</span>
        <div class="progress">
             <div class="track" style="width:75%"></div>
        </div>
      </div>
 -->
    </div>
 <?php include_partial('footer') ?>