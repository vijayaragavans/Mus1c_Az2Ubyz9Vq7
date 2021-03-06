<?php

class TblSongsController extends Controller
{

	private $current_date;
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';
	public function init()
	{
		$user_validate = Yii::app()->createController('validate');		//returns array containing controller instance and action index.
		$user_validate[0]->user_validate();
	}
	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
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
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('*'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('*'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new TblSongs;
		$songs_url = new TblSongsUrl;
		$this->current_date = date('Y-m-d H:i:s');
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		if(isset($_POST['_validate']) )
		{
			$model->attributes=$_POST['TblSongs'];
			/*
			*	Purpose: Upload Song Thumb Image
			*/
			//print_r($_FILES['TblSongs']['name']['song_urlss'][0]);

		              $song_img_name = $_FILES['TblSongs']['name']['song_img_url'];		// Getting Uploaded Image Name
		              $song_img_temp_name = $_FILES['TblSongs']['tmp_name']['song_img_url'];		// Getting Uploaded Image Temp  Name
			$song_img_url = TbladminController::Uploader( $song_img_name, $song_img_temp_name, $type = 'image', Yii::app()->params['song_thumb_url']);
			/*
			*	Purpose: Upload Songs
			*/
			$model->song_img_url = "$song_img_url";
			$model->cong_created_on = "$this->current_date";
/*			echo $model->song_category. ' ' .$model->song_title. ' ' .$model->song_description. ' ' . $song_img_url. ' ' .$model->song_tags;
			die;
*/			if($model->save()){
				$file_count = sizeof($_FILES['TblSongsUrl']['name']['song_url'] );
				for($i=0; $i < $file_count; $i++ ){
					$songs_url->song_id = $model->song_id;
				              $song_name = $_FILES['TblSongsUrl']['name']['song_url'][$i];		// Getting Uploaded Image Name
				              $song_temp_name = $_FILES['TblSongsUrl']['tmp_name']['song_url'][$i];		// Getting Uploaded Image Temp  Name
					$song_url = TbladminController::Uploader( $song_name, $song_temp_name, $type = 'music', Yii::app()->params['song_url']);
					$songs_url->song_url = "$song_url";
					$songs_url->song_created_on = "$this->current_date";
					$songs_url->setPrimaryKey(NULL);
					 $songs_url->isNewRecord = true;
					$songs_url->save();				
				}
				$this->redirect(array('view','id'=>$model->song_id));
			}else{
				Yii::app()->user->setFlash('error', "File format is mismatching. Try Again");				
			}
		}

		$this->render('create',array(
			'model'=>$model, 'songs'=>$songs_url,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['TblSongs']))
		{
			$model->attributes=$_POST['TblSongs'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->song_id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('TblSongs');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new TblSongs('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['TblSongs']))
			$model->attributes=$_GET['TblSongs'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/** 
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=TblSongs::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='tbl-songs-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
