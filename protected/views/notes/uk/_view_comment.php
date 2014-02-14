<ul>
<li>
	<h5>Автор: <?php echo $data->comment_author; ?></h5>
	<h3>Текст: <?php echo $data->comment_text; ?></h3>
	<h3>Час створення: <?php echo $data->time_comment; ?></h3>
	<p><a href="<?=$this->createUrl('comment/delete', array('id'=>$data->id, 'current_id'=>$current_id));?>">видалити коментар</a></p>
</li>
</ul>