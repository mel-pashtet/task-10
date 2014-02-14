<?php

class CommentController extends Controller
{
  public function filters()
  {
    return array(
      'accessControl', // perform access control for CRUD operations
      
    );
  }

  /**
   * Specifies the access control rules.
   * This method is used by the 'accessControl' filter.
   * @return array access control rules
   */
  public function accessRules()
  {
    return array(
      array('allow',  // allow all users to perform 'index' and 'view' actions
        'actions'=>array('create'),
        'users'=>array('*'),
      ),
      array('allow', // allow authenticated user to perform 'create' and 'update' actions
        'actions'=>array('delete'),
        'users'=>array('@'),
      ),
      
      array('deny',  // deny all users
        'users'=>array('*'),
      ),
    );
  }
  public function actionDelete()
  {
    $id = '';

    if (isset($_GET['id']))
    {
      $id = $_GET['id'];

    }
    if (isset($_GET['current_id']))
    {
      $current_id = $_GET['current_id'];

    }

    $model=Comment::model()->findByPk($id);
    if ($model->author_id === Yii::app()->user->id)
    {
      
        if (isset($model))
        {
          $model->delete();
          Yii::app()->user->setFlash('commentDelete',"коментарій видалений" );
          Yii::log(' коментарій видалений ', 'info');
          $this->redirect($this->createUrl('notes/read', array('id'=>$current_id)));
          
        }
        else
          throw new CHttpException(404,'Указанная запись не найдена');
    }
    else
      throw new CHttpException(404,'ця дія доступна тільки для автора замітки');  
      
    
    
  }
		
}
