<?php
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'action' => Yii::app()->createUrl($this->route),
    'method' => 'get',
        ));
?>
<div class="alert alert-block">
    <?php echo $form->dropDownListControlGroup($model, 'country_id', CHtml::listData(Country::model()->findAll(array('condition' => 'published=1', "order" => "country_name")), 'id', 'country_name'), array('empty' => '--please select--', 'class' => 'span5')); ?>
    <?php echo $form->dropDownListControlGroup($model, 'state_id', CHtml::listData(State::model()->findAll(array('condition' => 'published=1', "order" => "state_name")), 'id', 'state_name'), array('empty' => '--please select--', 'class' => 'span5')); ?>
    <?php echo $form->textFieldControlGroup($model, 'city_name', array('class' => 'span5', 'maxlength' => 255)); ?>
    <?php echo $form->textFieldControlGroup($model, 'city_3_code', array('class' => 'span5', 'maxlength' => 9)); ?>
    <?php echo $form->textFieldControlGroup($model, 'city_2_code', array('class' => 'span5', 'maxlength' => 6)); ?>

    <?php echo $form->dropDownListControlGroup($model, 'published', array('1' => 'Yes', '0' => 'No'), array('class' => 'span5')); ?>
</div>
<div class="form-actions">
    <?php echo TbHtml::submitButton('Search', array('color' => TbHtml::BUTTON_COLOR_PRIMARY)); ?>
    <?php echo TbHtml::resetButton('Reset', array('color' => TbHtml::BUTTON_COLOR_INFO)); ?>
</div>

<?php $this->endWidget(); ?>
