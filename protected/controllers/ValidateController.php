<?php

class ValidateController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

	public function user_validate()
	{
		if(Yii::app()->user->name == 'Guest')
		{
			$this->redirect('/musicstore/site/login');
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