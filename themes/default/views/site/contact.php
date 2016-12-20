<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form TbActiveForm */

$this->pageTitle = Yii::app()->name . ' - Contact Us';
$this->breadcrumbs = array(
    'Contact',
);
?>
<?php if (Yii::app()->user->hasFlash('contact')): ?>
    <?php
    $this->widget('bootstrap.widgets.TbAlert', array(
        'alerts' => array('contact'),
    ));
    ?>
<?php else: ?>
    <div class="row">
        <div class="col-md-8">
            <section>
                <h2 class="section-title">Send Message</h2>
                <p> If you have inquiries or other questions, please fill out the following form to contact us. Thank you. </p>                
                <?php
                $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
                    'id' => 'contact-form',
                    'enableClientValidation' => true,
                    'clientOptions' => array(
                        'validateOnSubmit' => true,
                    ),
                ));
                ?>
                <p><?php echo $form->errorSummary($model); ?></p>
                <div class="form-group">
                    <label for="InputName">Name</label>
                    <?php echo $form->textField($model, 'name', array('class' => 'form-control', 'placeholder' => 'Enter name')); ?>
                </div>
                <div class="form-group">
                    <label for="InputEmail1">Email address</label>
                    <?php echo $form->textField($model, 'email', array('class' => 'form-control', 'placeholder' => 'Enter email')); ?>
                </div>
                <div class="form-group">
                    <label for="InputSubject">Subject</label>
                    <?php echo $form->textField($model, 'subject', array('class' => 'form-control', 'placeholder' => 'Enter subject')); ?>
                </div>
                <div class="form-group">
                    <label for="InputMessage">Mesagge</label>
                    <?php echo $form->textArea($model, 'body', array('rows' => 3, 'class' => 'form-control', 'placeholder' => 'Enter message')); ?>
                </div>
                <div class="form-group capcha">
                    <?php if (CCaptcha::checkRequirements()): ?>
                        <div class="row">
                            <?php //echo $form->labelEx($model, 'verifyCode'); ?>
                            <div>
                                <?php $this->widget('CCaptcha'); ?>
                                <?php echo $form->textField($model, 'verifyCode'); ?>
                            </div>
                            <div class="hint">Please enter the letters as they are shown in the image above. Letters are not case-sensitive.</div>
                            <?php echo $form->error($model, 'verifyCode'); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <?php echo CHtml::submitButton('Send request', array('class' => 'btn btn-primary pull-right')); ?>
                <div class="clearfix"></div>
                <?php $this->endWidget(); ?>
            </section>
        </div>

        <div class="col-md-4">
            <section>
                <div class="panel panel-primary">
                    <div class="panel-heading"><i class="fa fa-envelope-o"></i> Additional Information</div>
                    <div class="panel-body">
                        <h4 class="section-title">Contacts</h4>
                        <address>
                            <strong>Mymensingh Police Supper</strong><br>
                            Mymensingh-2200<br />
                            <abbr title="Phone">P:</abbr> 091-65760 <br>
                            <abbr title="Mobile">M:</abbr> +880 1713 374555 <br>
                            Mail: <a href="mailto:mymensingh@police.gov.bd">mymensingh@police.gov.bd</a>
                        </address>
                    </div>
                </div>				
            </section>
        </div>
    </div>
<?php endif; ?>