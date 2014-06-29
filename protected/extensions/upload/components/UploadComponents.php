<?php
/**
 * UploadComponents manages uploaded files
 *
 * @author Ahamed Rifaudeen
 */
class UploadComponents extends CApplicationComponent {
    /**
     * @var string name of the file field
     */
    private $_fieldName;
    /**
     * model belong to file upload
     */
    private $_model;
    /**
     * CUploadedFile instance
     */
    private $_upload_instance;
    /**
     * upload status
     * @var boolean
     */
    private $_isFileUploaded;

    //public $errorMessage=" cannot be empty";
    /**
     * @var string the path to save uploaded file
     */
    public $savePath;
    /**
     * set the name of the file field
     * @param string $name the name of file field
     */
    public function setFieldName($name)
    {
        $this->_fieldName=$name;
    }
    /**
     * get the name of the file field
     * @return string
     */
    public function getFieldName()
    {
        return $this->_fieldName;
    }
    /**
     * @return CUploadedFile instance
     */
    public function getUploadInstance()
    {
        return $this->_upload_instance;
    }
    /**
     * returns true when $model is an object
     * @param ar/form model object $model
     * @return boolean
     */
    public function setModel($model)
    {
        if(is_object($model)){
            $this->_model=$model;
            return true;
        }
        else
            return false;
    }
    /**
     * checks whether the the file is uploaded or not
     * the upload status can be tracked using {@link getIsFileUploaded()}
     */
    public function checkUpload()
    {
        $this->_upload_instance = CUploadedFile::getInstance($this->_model, $this->fieldName);
        
        $this->_isFileUploaded= $this->_upload_instance!=null;
        
    }
    /**
     * @return boolean whether the file is uploaded or not
     */
    public function getIsFileUploaded()
    {
        return $this->_isFileUploaded!=null;
    }
    /**
     * @return string the name of the uploaded file, if file not uploaded null is returned
     */
    public function getName()
    {
        if($this->isFileUploaded)
            return $this->_upload_instance->name;
        else
            return null;
    }
    /**
     * save the uploaded file without changing the filename
     * @return boolean
     */
    public function save()
    {
        $filename=$this->savePath;
        $filename.=$this->getName();
        if($this->_isFileUploaded)
            return $this->_upload_instance->saveAs($filename);
        else
            return false;
    }
    /**
     * @param string $name the file name to save
     * @return boolean
     */
    public function saveAs($name=null)
    {
        $filename=$this->savePath.$name;
        if($this->_isFileUploaded)
            return $this->_upload_instance->saveAs($filename);
        else
            return false;
    }
}