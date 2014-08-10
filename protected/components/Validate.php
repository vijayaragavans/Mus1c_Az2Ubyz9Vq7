<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Validate extends CController
{
		if(Yii::app()->user->name == 'Guest')
		{
			$this->redirect('/musicstore/site/login');
		}		

}