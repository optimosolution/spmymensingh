<?php
/* @var $this VideoController */
/* @var $data Video */
?>
<div class="view">
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="margin: 0px 10px;">
        <iframe class="span11" src="//www.youtube.com/embed/<?php echo $data->youtube_id; ?>" frameborder="0" allowfullscreen></iframe>
    </div>    
</div>