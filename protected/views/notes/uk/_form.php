<? 
$name = Yii::app()->user->name;
?>
<h1>"<?= Yii::t('default', "$name") ; ?>" залиште коментар</h1>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'comment-form',
	
	
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'enableClientValidation'=>true,
	'clientOptions'=>array(
            'validateOnSubmit'=>true,
        ),
)); ?>

	<p class="note">Поля з  <span class="required">*</span> повинні бути заповнені.</p>

	<?php echo $form->errorSummary($model_comment); ?>

	<?php if(Yii::app()->user->isGuest): ?>
	<div class="row">
		<?php echo $form->labelEx($model_comment,'comment_author'); ?>
		<?php echo $form->textField($model_comment,'comment_author'); ?>
		<?php echo $form->error($model_comment,'comment_author'); ?>
	</div>
	<? endif ?>


	<div class="row">
		<?php echo $form->labelEx($model_comment,'comment_text'); ?>
		<?php echo $form->textArea($model_comment,'comment_text'); ?>
		<?php echo $form->error($model_comment,'comment_text'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->hiddenField($model_comment,'notes_id'); ?>
		<?php echo $form->error($model_comment,'notes_id'); ?>
	</div>
	<div class="row">
		<?php echo $form->hiddenField($model_comment,'author_id'); ?>
		<?php echo $form->error($model_comment,'author_id'); ?>
	</div>
	<?php if(CCaptcha::checkRequirements() && Yii::app()->user->isGuest): ?>
	<div class="row">
		<?php echo $form->labelEx($model_comment,'verifyCode'); ?>
		<div>
		<?php $this->widget('CCaptcha'); ?>
		<?php echo $form->textField($model_comment,'verifyCode'); ?>
		</div>
		<div class="hint">будь-ласка, введіть літери, як ви їх бачите</div>
		<?php echo $form->error($model_comment,'verifyCode'); ?>
	</div>
	<?php endif; ?>

	



	<div class="row buttons">
		<?php echo CHtml::submitButton('відправити'); ?>
	</div>

<?php $this->endWidget(); ?>


</div><!-- form -->