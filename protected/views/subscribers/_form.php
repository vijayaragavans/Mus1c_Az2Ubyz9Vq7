<?php
/* @var $this SubscribersController */
/* @var $model Subscribers */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'subscribers-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'subscribe_name'); ?>
		<?php echo $form->textField($model,'subscribe_name',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'subscribe_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subscribe_email'); ?>
		<?php echo $form->textField($model,'subscribe_email',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'subscribe_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'utm_source'); ?>
		<?php echo $form->textField($model,'utm_source',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'utm_source'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'utm_medium'); ?>
		<?php echo $form->textField($model,'utm_medium',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'utm_medium'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'utm_term'); ?>
		<?php echo $form->textField($model,'utm_term',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'utm_term'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'utm_content'); ?>
		<?php echo $form->textField($model,'utm_content',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'utm_content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'utm_campaign'); ?>
		<?php echo $form->textField($model,'utm_campaign',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'utm_campaign'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subscribed_on'); ?>
		<?php echo $form->textField($model,'subscribed_on'); ?>
		<?php echo $form->error($model,'subscribed_on'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->