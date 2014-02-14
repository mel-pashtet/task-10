<h1>Add comment</h1>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'comment-form',
	'enableAjaxValidation'=>false,
	'enableClientValidation'=>true,
	'clientOptions'=>array(
            'validateOnSubmit'=>true,
        ),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model_comment); ?>

	<div class="row">
		<?php echo $form->labelEx($model_comment,'comment_author'); ?>
		<?php echo $form->textField($model_comment,'comment_author'); ?>
		<?php echo $form->error($model_comment,'comment_author'); ?>
	</div>

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
	<?php if(CCaptcha::checkRequirements()): ?>
	<div class="row">
		<?php echo $form->labelEx($model_comment,'verifyCode'); ?>
		<div>
		<?php $this->widget('CCaptcha'); ?>
		<?php echo $form->textField($model_comment,'verifyCode'); ?>
		</div>
		<div class="hint">Please enter the letters as they are shown in the image above.
		<br/>Letters are not case-sensitive.</div>
		<?php echo $form->error($model_comment,'verifyCode'); ?>
	</div>
	<?php endif; ?>

	



	<div class="row buttons">
		<?php echo CHtml::submitButton('Save'); ?>
	</div>

<?php $this->endWidget(); ?>


</div><!-- form -->