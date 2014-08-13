<?php
/* @var $this AlbumCategoriesController */
/* @var $model AlbumCategories */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'album_category_id'); ?>
		<?php echo $form->textField($model,'album_category_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'album_page_category'); ?>
		<?php echo $form->textField($model,'album_page_category',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'album_category_is_active'); ?>
		<?php echo $form->textField($model,'album_category_is_active',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'album_category_created_on'); ?>
		<?php echo $form->textField($model,'album_category_created_on'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->