<?php
/* @var $this SubscribersController */
/* @var $model Subscribers */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'subscribe_id'); ?>
		<?php echo $form->textField($model,'subscribe_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'subscribe_name'); ?>
		<?php echo $form->textField($model,'subscribe_name',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'subscribe_email'); ?>
		<?php echo $form->textField($model,'subscribe_email',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'utm_source'); ?>
		<?php echo $form->textField($model,'utm_source',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'utm_medium'); ?>
		<?php echo $form->textField($model,'utm_medium',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'utm_term'); ?>
		<?php echo $form->textField($model,'utm_term',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'utm_content'); ?>
		<?php echo $form->textField($model,'utm_content',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'utm_campaign'); ?>
		<?php echo $form->textField($model,'utm_campaign',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'subscribed_on'); ?>
		<?php echo $form->textField($model,'subscribed_on'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->