<div align='center'>
	<h1>ИМЯ</h1>
	<i><h3><?=$model->notes_name;?></h3></i>
	<h1>СОДЕРЖИМОЕ</h1>
	<i><h3><?=$model->notes_value;?></h3></i>
	<h1>АВТОР</h1>
	<i><h3><a href="<?=$this->createUrl('notes/search', array('notes_author'=>$model->notes_author));?>"><?=$model->notes_author; ?></a></h3></i>
	<h1>ДАТА ПОСЛЕДНЕГО ОБНОВЛЕНИЯ</h1>
	<i><h3><?=$model->notes_update;?></h3></i>
</div>
<div align='left'>
	<p><a href="<?=$this->createUrl('notes/update', array('id'=>$model->id));?>">РЕДАКТИРОВАТЬ</a></p>
	<p><a href="<?=$this->createUrl('notes/delete', array('id'=>$model->id));?>">УДАЛИТЬ</a></p>
	
</div>

<?php if(Yii::app()->user->hasFlash('commentSubmitted') || Yii::app()->user->hasFlash('commentDelete') ): ?>
    <div class="flash-success" align='center'>
      <?php echo Yii::app()->user->getFlash('commentSubmitted'); ?>
      <?php echo Yii::app()->user->getFlash('commentDelete'); ?>
      
    </div>
  <?php endif; ?>

<div>
	<h1>Список коментарів</h1>
</div>

<div class="form">
<?

$this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$commentsDataProvider,
    'ajaxUpdate'=>false,
    'viewData'=>array(
            'current_id'=>$model->id
        ),
    'itemView'=>'_view_comment',
    'pager'=>array(
    'class'=>'CLinkPager',
    'header'=>false,
    'maxButtonCount'=>'5',
       

     ),
));

?>
<div>	 
  <?php $this->renderpartial('_form', array('model_comment'=>$model_comment)); ?>
</div>





