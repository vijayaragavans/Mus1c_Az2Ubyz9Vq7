<?php
/* @var $this SubscribersOfferController */
/* @var $model SubscribersOffer */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'offer_id'); ?>
		<?php echo $form->textField($model,'offer_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'offer_time_frame'); ?>
		<?php echo $form->textField($model,'offer_time_frame',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'offers'); ?>
		<?php echo $form->textField($model,'offers',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'offer_is_active'); ?>
		<?php echo $form->textField($model,'offer_is_active',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'offers_created_on'); ?>
		<?php echo $form->textField($model,'offers_created_on'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->