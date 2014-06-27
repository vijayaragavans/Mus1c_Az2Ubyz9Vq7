<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

?>


<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); 

?>

        <div class="form-box" id="login-box">
            <div class="header">Sign In</div>
                <div class="body bg-gray">
                    <div class="form-group">
		<?php echo $form->textField($model,'username', array('class'=> 'form-control', 'placeholder' => 'User Name') ); ?>
		<?php echo $form->error($model,'username'); ?>
                    </div>
                    <div class="form-group">
		<?php echo $form->passwordField($model,'password', array('class'=> 'form-control', 'placeholder' => 'Password')  ); ?>
		<?php echo $form->error($model,'password'); ?>
                    </div>          
                    <div class="form-group">
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
                    </div>
                </div>
                <div class="footer">
            		<?php echo CHtml::submitButton('Login', array('class' => 'btn bg-olive btn-block' ) ); ?>
                    
                    <p><a href="#">I forgot my password</a></p>
                    
                    <a href="register.html" class="text-center">Register a new membership</a>
                </div>

        </div>




<?php $this->endWidget(); ?>
</div><!-- form -->

        <link href="<?php echo Yii::app()->request->baseUrl; ?>/files/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/files/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/files/css/AdminLTE.css" rel="stylesheet" type="text/css" />


        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/files/js/bootstrap.min.js" type="text/javascript"></script>        
