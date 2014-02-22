<ul>
	
  <?php foreach($this->getRecentComments() as $comment): ?>  
    <div>
	    <li>
	    	<p>
		      "<?php echo $comment->comment_author; ?>" added a comment at <?php echo Yii::app()->dateFormatter->format('EEEE, dd-MMMM-yyyy HH:mm:ss', $comment->time_comment); ?><br>
		       TEXT: <?php echo $comment->comment_text; ?><br>
		       

		       <?php
		       if ($comment->author_id === Yii::app()->user->id)
		       {
		       		echo CHtml::link('delete comment', array('comment/delete', 'id'=>$comment->id, 'current_id'=>$comment->notes_id));

		       }
	       


		       ?>
	   		</b>
		</li>    
    </div>
  <?php endforeach; ?>
  
</ul>