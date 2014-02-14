
<?php
$this->pageTitle='Логін';
$this->breadcrumbs=array(
  'Логін',
);
?>
<h1>Логін</h1>
<p>Будь-ласка заповніть форму:</p>
<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
  'id'=>'login-form',
    'enableAjaxValidation'=>true,
)); ?>
  <p class="note">Поля з  <span class="required">*</span> обов*язкові для заповнення.</p>
  <div class="row">
    <?php echo $form->labelEx($model,'username'); ?>
    <?php echo $form->textField($model,'username'); ?>
    <?php echo $form->error($model,'username'); ?>
  </div>
  <div class="row">
    <?php echo $form->labelEx($model,'password'); ?>
    <?php echo $form->passwordField($model,'password'); ?>
    <?php echo $form->error($model,'password'); ?>
    
  </div>
  <div class="row rememberMe">
    <?php echo $form->checkBox($model,'rememberMe'); ?>
    <?php echo $form->label($model,'rememberMe'); ?>
    <?php echo $form->error($model,'rememberMe'); ?>
      </div>
  <div class="row buttons">
    <?php echo CHtml::submitButton('Ввійти'); ?>
  </div>
<?php $this->endWidget(); ?>
</div><!-- form -->
