<ul>
	
  <?php foreach($this->getRecentComments() as $comment): ?>  
    <div>
    	<li>
    		<p>
		      "<?php echo $comment->comment_author; ?>" добавив коментар: <?php echo Yii::app()->dateFormatter->format('EEEE, dd-MMMM-yyyy HH:mm:ss', $comment->time_comment); ?><br>
		       Текст: <?php echo $comment->comment_text; ?><br>
		       <?php
		       
		       if ($comment->author_id === Yii::app()->user->id)
		       {
		       		echo CHtml::link('видалити коментар', array('comment/delete', 'id'=>$comment->id, 'current_id'=>$comment->notes_id));

		       }


		       ?>
       		</p>
		</li>    
    </div>
  <?php endforeach; ?>
  
</ul>