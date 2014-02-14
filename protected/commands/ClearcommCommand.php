<?
class ClearcommCommand extends CConsoleCommand
{
    public function actionIndex()
    {
    	    $model = Comment::model()->deleteAll('comment_text LIKE :some 
                OR comment_text LIKE :some_one OR comment_text LIKE :some_two 
                OR comment_text LIKE :some_three OR comment_text LIKE :some_four',
                array(
                    ':some'=>'%'.'100% satisfied'.'%',
                    ':some_one'=>'%'.'Buy direct'.'%',
                    ':some_two'=>'%'.'Click to remove'.'%',
                    ':some_three'=>'%'.'Dear friend'.'%',
                    ':some_four'=>'%'.'Free membership'.'%',

                )
            );
        
            if ($model !== 0)
            {
                
                echo "The comment is cleared";
                Yii::log(' The comment is cleared ', 'info');
                return 0;
            }
            else
                echo "no comment for clear";
                Yii::log(' no comment for clear ', 'info');
                return 1;
    }

    

    public function actionClear($clear)
    {
        $model = Comment::model()->deleteAll('comment_text LIKE :some', array(':some'=>'%'.$clear.'%'));
        
            if ($model !== 0)
            {
                
                echo "The comment is cleared";
                Yii::log(' The comment is cleared ', 'info');
                return 0;
            }
            else
                echo "no comment for clear";
                Yii::log(' no comment for clear ', 'info');
                return 1;
    }
        
        
}
?>