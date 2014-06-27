<?php

class TbladminController extends Controller
{
	public function user_validate(){
		if(Yii::app()->user->name == 'Guest')
		{
			$this->redirect('/musicstore/index.php/site/login');
		}else{
			return true;
		}
	}
	public function actionIndex()
	{
		$model = new TblAdmins();
		$current_user_id = Yii::app()->session['user_id'];
		if(isset($_POST['ajax']) && $_POST['ajax']==='profile-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		if($this->user_validate()){

			if(isset($_POST['TblAdmins']))
			{
			              $model = TblAdmins::model()->findByAttributes(array("user_id"=>$current_user_id));
			              ( $_POST['TblAdmins']['user_name'] != '' ) ? $model->user_name = $_POST['TblAdmins']['user_name'] : '';
			              ( $_POST['TblAdmins']['user_password']  !='' ) ? $model->user_password = md5( $_POST['TblAdmins']['user_password'] ) :'';
			              //$user->user_privilages = md5( $_POST['TblAdmins']['user_privilages'] );
				if($model->save())
					$this->redirect('/musicstore/index.php/site/dashboard');			
			}
			$this->render('index', array('model' => $model));			
		}
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/

}