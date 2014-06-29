<?php
class UploadComponentsTest extends CTestCase
{
    public $_uploadComponent=null;
    
    public function uploadComponent()
    {
        if($this->_uploadComponent==null)
            $this->_uploadComponent=Yii::app()->upload;
        
        return $this->_uploadComponent;
    }
    
    public function testFieldName()
    {
        $upload=$this->uploadComponent();
        
        $this->assertEmpty($upload->fieldname);
        
        $upload->fieldname='profile';
        
        //expected,actual
        $this->assertEquals('profile',$upload->fieldname); 
    }
    public function testModel()
    {
        $upload=$this->uploadComponent();
        
        $this->assertFalse($upload->setModel('new'));
        
        $this->assertTrue($upload->setModel($upload));
        
    }
    
    public function testCheckUpload()
    {
        $upload=$this->uploadComponent();
        
        $this->assertFalse($upload->isFileUploaded);
    }
    
    public function testSaveAs()
    {
        $upload=$this->uploadComponent();
        
        $this->assertFalse($upload->saveAs('new.jpg'));
    }
    
    public function testName()
    {
        $upload=$this->uploadComponent();
        
        $this->assertEquals(null,$upload->name);
    }
    public function testIsFileUploaded()
    {
        $upload=$this->uploadComponent();
        
        $this->assertFalse($upload->isFileUploaded);
    }
}