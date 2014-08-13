<?php
/* @var $this TblAlbumCategoryController */
/* @var $model TblAlbumCategory */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'album-categories-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

        <div class="form-box" id="login-box" style="margin:0px auto 0">
            <div class="header">Manage Album Page Category</div>
                <div class="body bg-gray">
                    <div class="form-group">
		<?php echo $form->labelEx($model,'album_page_category'); ?>
		<?php echo $form->textField($model,'album_page_category',array('size'=>50,'maxlength'=>50, 'class'=> 'form-control')); ?>
		<?php echo $form->error($model,'album_page_category'); ?>
	</div>

                    <div class="form-group">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn bg-olive btn-block' )); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->