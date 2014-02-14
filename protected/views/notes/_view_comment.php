<div>
	<ul>
	<li>
		<h5>Author: <?php echo $data->comment_author; ?></h5>
		<h3>Text: <?php echo $data->comment_text; ?></h3>
		<h3>Time: <?php echo $data->time_comment; ?></h3>
		<p><a href="<?=$this->createUrl('comment/delete', array('id'=>$data->id, 'current_id'=>$current_id));?>">delete comment</a></p>
	</li>
	</ul>
</div>
