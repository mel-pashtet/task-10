<div>
  <h1>Ласкаво просимо в <i><?php echo CHtml::encode(Yii::t('default',Yii::app()->name)); ?></i></h1>
<?php if(!Yii::app()->user->isGuest):?>
<p>
   "<?= Yii::app()->user->name; ?>" востаннє входив: <?php echo Yii::app()->dateFormatter->format('EEEE, dd-MMMM-yyyy HH:mm:ss', Yii::app()->user->lastLoginTime); ?> 
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
    <p><?php echo Chtml::link('ДОБАВИТИ ЗАМІТКУ', array('notes/create')); ?></p>
</div>
<div align="center">

    <form align="center"action="search" method="get" name="searchform">
 
      <h1><i><label for="search"> введіть слово для пошуку </label></i></h1>
      <p><input type="text" id="search" name="search" size="50" placeholder = "введіть слово для пошуку"
      <p><input type="submit" value="пошук"></p><br>
      
    </form>

</div>
