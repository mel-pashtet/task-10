
<div class="form" align='center'>
<?php $form = $this->beginWidget('CActiveForm', array(
    
    'enableAjaxValidation'=>true,
    'enableClientValidation'=>true,
    
)); ?>
 
    <?php echo $form->errorSummary($model); ?>
 
    <div class="row">
        <?php echo $form->label($model,'notes_name'); ?>
        <?php echo $form->textField($model,'notes_name') ?>

    </div>
 
    <div class="row">
        <?php echo $form->label($model,'notes_value'); ?>
        <?php echo $form->textArea($model,'notes_value') ?>
        
    </div>
    
    <div class="row">
        
        <?php echo $form->hiddenField($model,'notes_author') ?>
    </div>
    <div class="row">
       
        <?php echo $form->hiddenField($model,'author_id') ?>
    </div>

     
    <div class="row submit">
        <?php echo CHtml::submitButton('save'); ?>
    </div>
 
<?php $this->endWidget(); ?>
</div>