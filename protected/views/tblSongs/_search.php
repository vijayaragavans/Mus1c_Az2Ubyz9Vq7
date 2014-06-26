<?php
/* @var $this TblSongsController */
/* @var $model TblSongs */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'song_id'); ?>
		<?php echo $form->textField($model,'song_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'song_title'); ?>
		<?php echo $form->textField($model,'song_title',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'song_category'); ?>
		<?php echo $form->textField($model,'song_category'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'song_description'); ?>
		<?php echo $form->textArea($model,'song_description',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cong_created_on'); ?>
		<?php echo $form->textField($model,'cong_created_on'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->