<?php
/* @var $this ContentController */
/* @var $dataProvider CActiveDataProvider */
$this->pageTitle = ContentCategory::getCategoryName($_REQUEST['id']) . ' - ' . Yii::app()->name;
$this->breadcrumbs = array(
    ContentCategory::getCategoryName($_REQUEST['id']),
);
?>
<h1><?php echo ContentCategory::getCategoryName($_REQUEST['id']); ?></h1>
<div class="row">
    <div class="col-md-12 col-lg-12">
        <?php
        $this->widget('zii.widgets.CListView', array(
            'pager' => array(
                'htmlOptions' => array(
                    'class' => 'pagination',
                ),
                'header' => '',
                'selectedPageCssClass' => 'active',
            ),
            'pagerCssClass' => 'dt-row dt-bottom-row',
            'dataProvider' => $dataProvider,
            'itemView' => '_view',
        ));
        ?>
    </div> <!-- col-md-8 -->
</div>