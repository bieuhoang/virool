<div id="player"></div>
<div class="description" style="width: <?php echo $width;?>px; ">
    <div class="descrition-content">
    	<?php if ( !empty($videotpl->video_link_title) ) : ?>
    	<div class="link-title">
    		<a href="<?php echo $videotpl->video_link_title;?>" title="">Find out more</a>
    	</div>
    	<?php endif ?>
            <?php echo !empty($videotpl->video_caption) ? $videotpl->video_caption : $videotpl->video_title?>
    </div>
	<div class="logo"><a href=""><span class="spanCls-Logo"></span></a></div>
</div>