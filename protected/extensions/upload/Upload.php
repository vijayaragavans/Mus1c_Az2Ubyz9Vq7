<?php
/**
 * Upload a validator used to validate file upload
 *
 * <code>
 * //In config
 * 'components'=>array(
 *		************
 * 		'upload'=>array(
 *			'class'=>'ext.upload.components.UploadComponents'
 *          ),
 *		),
 * </code>
 *
 * <code>
 * //In model
 * // $file and $file_status are available properties
 * // where file is the property needs uploaded file and
 * // file_status holds the status of file upload for $file
 *  public function rules()
 *  {
 *      return array(
 *          .......
 *			array('file','ext.upload.Upload','statusVar'=>'file_status','allowEmpty'=>false,'savePath'=>'images/')
 *          //statusVar assign the upload status to model's $file_status property so this property is must
 *			.......
 *      );
 *  }
 * </code>
 * <code>
 * //In Controller
 * public function actionUpload()
 * {
 * 
 *      $model=new XYZ;
 * 
 *      if(isset($_POST['XYZ']))
 *      {
 *          $model->attributes=$_POST['XYZ'];
 *      
 *          $model->validate();
 *      	//Note $model->file_status is the available property to hold status of file upload
 *          $file=$model->file_status;
 *
 *			$model->file=$file->name;
 * 
 *          $file->save();
 *
 *			//$model->file='newname.jpg';
 * 
 *          //$file->saveAs('newname.jpg');
 *      }
 *      $this->render('upload',array('model'=>$model));
 * 
 * }
 * </code>
 */
class Upload extends CValidator
{
    /**
     * @var string the variable to maintain the file upload status this arrtibute is must in Model
     */
    public $statusVar;
    /**
     * @var boolean allow empty uploads. Defaults to false
     */
    public $allowEmpty=false;
    /**
     * the path to save file
     *
     *  <code>
     * //Example :
     *      $savePath='images/';
     *  </code>
     * <pre>
     * Note:
     *      trailing slash is must
     * </pre>
     * 
     * @var string
     */
    public $savePath;
    /**
     * validate the file upload and stores the upload status to $statusVar and this can be tracked in the Model using $statusVar
     * @param type $object AR object
     * @param type $attribute AR attribute
     */
    public function validateAttribute($object, $attribute)
    {
        $value=$object->$attribute;
        $uploader=$this->checkUpload($object, $attribute);
        if(!$uploader->isFileUploaded && !$this->allowEmpty)
            $object->addError($attribute,"$attribute cannot be empty");
        $object->{$this->statusVar}=$uploader;
    }
    /**
     * check the file upload and returns {@link CUploadedFile}
     * @param CModel $model AR object
     * @param string $field File field name
     * @return UploadComponents object
     */
     protected function checkUpload($model,$field)
     {
        $uploader = Yii::app()->upload;
        $uploader->fieldName = $field;
        $uploader->savePath=  $this->savePath;
        $uploader->model = $model;
        $uploader->checkUpload();

        return $uploader;
     }
}