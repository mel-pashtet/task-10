<div>
  <h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>
<?php if(!Yii::app()->user->isGuest):?>
<p>
   "<?= Yii::app()->user->name; ?>" last logged in: <?php echo date( 'Y-m-d h:i:s',Yii::app()->user->lastLoginTime ); ?> 
</p>
<?php endif;?>
</div>

<?
$this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'ajaxUpdate'=>false,            //щоб після перегрузки сторінки зберігався номер сторінки
    'itemView'=>'_view',
    'pager'=>array(
    'class'=>'CLinkPager',
    'header'=>false,
    'maxButtonCount'=>'5',

     ),
));
?>
<div>
    <p><?php echo Chtml::link('Add notes', array('notes/create')); ?></p>
</div>
<div align="center">

    <form align="center"action="search" method="get" name="searchform">
 
      <h1><label for="search"> word for search </label></h1>
      <p><input type="text" id="search" name="search" size="50" placeholder = "word for search"
      <p><input type="submit" value="search"></p><br>
      
    </form>

</div>
