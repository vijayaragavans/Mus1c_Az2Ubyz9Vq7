<?php
/* @var $this TblAlbumCategoryController */
/* @var $model TblAlbumCategory */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'email-campaign-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

        <div class="form-box" id="email-campaign-box" style="margin:0px auto 0">
            <div class="header">Manage Subscribers Offer</div>
                <div class="body bg-gray">
                    <div class="form-group">
		<?php echo $form->labelEx($model,'campaign_for'); ?>
			<select name='EmailCampaign[campaign_for]' id='EmailCampaign[campaign_for]'>
				<option>Registration</option>
				<option>Subscription</option>
			</select>
		<?php echo $form->error($model,'campaign_title'); ?>
	</div>

                    <div class="form-group">
		<?php echo $form->labelEx($model,'campaign_title'); ?>
		<?php echo $form->textField($model,'campaign_title',array('size'=>60,'maxlength'=>250, 'class'=> 'form-control')); ?>
		<?php echo $form->error($model,'campaign_title'); ?>
	</div>

                    <div class="form-group">
		<?php echo $form->labelEx($model,'campaign_description'); ?>
		<?php echo $form->textArea($model,'campaign_description',array('rows'=>6, 'cols'=>50, 'class'=> 'form-control')); ?>
		<?php echo $form->error($model,'campaign_description'); ?>
	</div>

                    <div class="form-group">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',  array('class' => 'btn bg-olive btn-block' )); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->