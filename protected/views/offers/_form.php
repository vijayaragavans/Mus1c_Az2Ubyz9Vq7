<?php
/* @var $this TblAlbumCategoryController */
/* @var $model TblAlbumCategory */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'offers-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

        <div class="form-box" id="login-box" style="margin:0px auto 0">
            <div class="header">Manage Subscribers Offer</div>
                <div class="body bg-gray">
                    <div class="form-group">
		<?php echo $form->labelEx($model,'offers_for'); ?>
		<?php echo $form->textField($model,'offers_for',array('size'=>60,'maxlength'=>250, 'class'=> 'form-control')); ?>
		<?php echo $form->error($model,'offers_for'); ?>
	</div>

                    <div class="form-group">
		<?php echo $form->labelEx($model,'offers'); ?>
		<?php echo $form->textArea($model,'offers',array('size'=>60,'maxlength'=>250, 'class'=> 'form-control')); ?>
		<?php echo $form->error($model,'offers'); ?>
	</div>

                    <div class="form-group">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',  array('class' => 'btn bg-olive btn-block' )); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->