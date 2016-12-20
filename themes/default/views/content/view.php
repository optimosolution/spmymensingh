<?php
$this->pageTitle = $model->title . ' - ' . Yii::app()->name;
$this->breadcrumbs = array(
    $model->title,
);
?>
<div class="row">
    <div class="col-md-8">
        <section>
            <h2 class="post-title"><?php echo $model->title; ?></h2>
            <p>
                <?php
                $this->widget('application.extensions.SocialShareButton.SocialShareButton', array(
                    'style' => 'horizontal',
                    'networks' => array('facebook', 'googleplus', 'linkedin', 'twitter'),
                    'data_via' => '', //twitter username (for twitter only, if exists else leave empty)
                ));
                ?>
            </p>
            <?php echo Content::get_picture($model->id); ?>
            <?php echo $model->introtext; ?>
        </section>
    </div>
    <div class="col-md-4">
        <aside class="sidebar">
            <div class="block">
                <ul class="nav nav-tabs" id="myTab2">
                    <li class="active"><a href="#fav" data-toggle="tab"><i class="fa fa-star"></i></a></li>
                    <li><a href="#categories" data-toggle="tab"><i class="fa fa-folder-open"></i></a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="fav">
                        <h3 class="post-title">Related Post</h3>
                        <?php $this->get_latest_updates($model->catid); ?>
                    </div>
                    <div class="tab-pane" id="categories">
                        <h3 class="post-title">Related Category</h3>
                        <?php $this->get_content_subcategory_list($model->catid); ?>
                    </div>
                </div> <!-- tab-content -->				
            </div>
        </aside> <!-- Sidebar -->
    </div>
</div>
