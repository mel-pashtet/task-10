<div align='center'>
	<h1>name</h1>
	<i><h3><?=$model->notes_name;?></h3></i>
	<h1>value</h1>
	<i><h3><?=$model->notes_value;?></h3></i>
	<h1>author</h1>
	<i><h3><a href="<?=$this->createUrl('notes/search', array('notes_author'=>$model->notes_author));?>"><?=$model->notes_author; ?></a></h3></i>
	<h1>last update</h1>
	<i><h3><?=$model->notes_update;?></h3></i>
</div>
<div align='left'>
<? if ($model->author_id === Yii::app()->user->id): ?>
    
    	
  <p><a href="<?=$this->createUrl('notes/update', array('id'=>$model->id));?>">update</a></p>
	<p><a href="<?=$this->createUrl('notes/delete', array('id'=>$model->id));?>">delete</a></p>
<? endif ?>	

  
</div>

<?php if(Yii::app()->user->hasFlash('commentSubmitted') || Yii::app()->user->hasFlash('commentDelete') ): ?>
    <div class="flash-success" align='center'>
      <?
      $success_add =  Yii::app()->user->getFlash('commentSubmitted');
      $success_delete = Yii::app()->user->getFlash('commentDelete');

      ?>
      <?php echo Yii::t('default', "$success_add"); ?>
      <?php echo Yii::t('default', "$success_delete"); ?>
      
    </div>
<?php endif; ?>
<div>
	<?php $this->beginWidget('zii.widgets.CPortlet', array(
  'title'=>'Recent Comments',
  ));  
    $this->widget('RecentComments', array('notesID'=>$model->id));
    
  $this->endWidget(); ?>


</div>

<div>	 
  <?php $this->renderpartial('_form', array('model_comment'=>$model_comment)); ?>
</div>






