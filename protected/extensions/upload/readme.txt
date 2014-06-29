Upload a validator used to validate file upload
 
  <code>
  //In config
  'components'=>array(
 		
  		'upload'=>array(
 			'class'=>'ext.upload.components.UploadComponents'
           ),
 		),
  </code>
 
  <code>
  //In model
  // $file and $file_status are available properties
  // where file is the property needs uploaded file and
  // file_status holds the status of file upload for $file
   public function rules()
   {
       return array(
           .......
 			array('file','ext.upload.Upload','statusVar'=>'file_status','allowEmpty'=>false,'savePath'=>'images/')
           //statusVar assign the upload status to model's $file_status property so this property is must
 			.......
       );
   }
  </code>
  <code>
  //In Controller
  /**
   * just call the status property who holds the status for the file upload
   * like   $file=$model->file_status; and assign the file name like $model->file=$file->name;
   * save the file like $file->save();
   * you can also save the file with your favourite name like $file->saveAs('newname.jpg');
   */
  public function actionUpload()
  {
  
       $model=new XYZ;
  
       if(isset($_POST['XYZ']))
       {
           $model->attributes=$_POST['XYZ'];
       
           $model->validate();
       	//Note $model->file_status is the available property to hold status of file upload
           $file=$model->file_status;
 
 			$model->file=$file->name;
  
           $file->save();
 
 			//$model->file='newname.jpg';
  
           //$file->saveAs('newname.jpg');
       }
       $this->render('upload',array('model'=>$model));
  
  }
  </code>
 