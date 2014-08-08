<?php
/* @var $this EmailCampaignController */
/* @var $model EmailCampaign */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'campaign_id'); ?>
		<?php echo $form->textField($model,'campaign_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'campaign_title'); ?>
		<?php echo $form->textField($model,'campaign_title',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'campaign_description'); ?>
		<?php echo $form->textArea($model,'campaign_description',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'campaign_is_active'); ?>
		<?php echo $form->textField($model,'campaign_is_active',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'campaign_created_on'); ?>
		<?php echo $form->textField($model,'campaign_created_on'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->