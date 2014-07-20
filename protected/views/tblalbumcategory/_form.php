<?php
/* @var $this TblAlbumCategoryController */
/* @var $model TblAlbumCategory */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tbl-album-category-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'album_category_name'); ?>
		<?php echo $form->textField($model,'album_category_name',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'album_category_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'album_category_created_by'); ?>
		<?php echo $form->textField($model,'album_category_created_by'); ?>
		<?php echo $form->error($model,'album_category_created_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'album_category_is_active'); ?>
		<?php echo $form->textField($model,'album_category_is_active',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'album_category_is_active'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'album_category_created_on'); ?>
		<?php echo $form->textField($model,'album_category_created_on'); ?>
		<?php echo $form->error($model,'album_category_created_on'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->