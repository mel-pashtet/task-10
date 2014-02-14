<div>
  <h1>Ласкаво просимо в <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>
<?php if(!Yii::app()->user->isGuest):?>
<p>
   "<?= Yii::app()->user->name; ?>" востаннє входив: <?php echo date( 'Y-m-d h:i:s',Yii::app()->user->lastLoginTime ); ?> 
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
    <p><?php echo Chtml::link('ДОБАВИТЬ ЗАПИСЬ', array('notes/create')); ?></p>
</div>
<div align="center">

    <form align="center"action="search" method="get" name="searchform">
 
      <h1><label for="search"> введите слово для поиска </label></h1>
      <p><input type="text" id="search" name="search" size="50" placeholder = "ведите слово для поиска"
      <p><input type="submit" value="искать"></p><br>
      
    </form>

</div>
