<?
class ClearcommCommand extends CConsoleCommand
{
    public function actionIndex()
    {
        foreach (Yii::app()->params['words'] as $word)
        {
            $model = Comment::model()->deleteAll('comment_text LIKE :some', array(':some'=>'%'."$word".'%'));
               
        }
        
        if ($model !== 0)
        {
           
            echo "The comment is cleared";
            Yii::log(' The comment is cleared ', 'info');
                
        }
        else
        {
            echo "no comment for clear";
            Yii::log(' no comment for clear ', 'info');
        
        }
                            
        
    }
}
?>