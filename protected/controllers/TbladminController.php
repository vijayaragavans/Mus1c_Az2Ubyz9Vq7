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
			              $file_name = $_FILES['TblAdmins']['name']['user_thumb'];		// Getting Uploaded Image Name
			              $file_temp_name = $_FILES['TblAdmins']['tmp_name']['user_thumb'];		// Getting Uploaded Image Temp  Name
			              $user_thumb = $this->Uploader( $file_name, $file_temp_name, $type = 'image', Yii::app()->params['img_thumb_url']);	// Uploading Files from Uploader Function
			              ( $_POST['TblAdmins']['user_name'] != '' ) ? $model->user_name = Yii::app()->session['user_name']  = $_POST['TblAdmins']['user_name']  : '';
			              ( $_POST['TblAdmins']['user_password']  !='' ) ? $model->user_password = md5( $_POST['TblAdmins']['user_password'] ) :'';
			        //Note $model->file_status is the available property to hold status of file upload
			              ( $user_thumb != '' ) ? $model->user_thumb = Yii::app()->session['user_thumb']  = $user_thumb : '';
			              //$user->user_privilages = md5( $_POST['TblAdmins']['user_privilages'] );
				if($model->save())

					$this->redirect('/musicstore/index.php/site/dashboard');			
			}
			$this->render('index', array('model' => $model));			
		}
	}

	public function actionTest(){
		return ' Welcome Test';
	}

	public function Uploader( $thumb_name, $temp_name, $type, $Url ){
		 $errors=0;		 
		 $image =  $thumb_name;
		 $uploadedfile = $temp_name;
		  if ($image) 
		  {
			  $filename = stripslashes( $thumb_name );
			  $extension = TbladminController::getExtension($filename);
			  $extension = strtolower($extension);
			 if (TbladminController::ValidateExtension( $type, $extension ) == false) 
			  {
				$errors=1;
				die("Extension Error");
				return $errors;
			  }
			 else
			{
/*			   $size=filesize( $temp_name );
				 
				if ($size > 400*1024)
				{
					 echo "You have exceeded the size limit";
					 $errors=2;	
					 return $errors;
				}
*/
				 $image_name=time().$thumb_name;
				 $new_file = $Url.$image_name;
				move_uploaded_file($temp_name, $new_file ) or die( 'Error in Moving Files');
			}
		}
		 if(!$errors) 
		 {
		 	return $image_name;
		 }	
	}

	public function ValidateExtension( $type, $extension )
	{
		if($type == 'image'){
			if( ($extension == "jpg") || ($extension == "jpeg") || ($extension == "JPEG")|| ($extension == "png") || ($extension == "gif") ){
				return true;
			}else{
				return false;
			}			
		}elseif($type == 'music'){
			if( ($extension == "mp3") || ($extension == "aac") || ($extension == "wmp") || ($extension == "amr") ){
				return true;
			}else{
				return false;
			}			
		}
	}

	public function getExtension($str) {
	         $i = strrpos($str,".");
	         if (!$i) { return ""; } 
	         $l = strlen($str) - $i;
	         $ext = substr($str,$i+1,$l);
	         return $ext;
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