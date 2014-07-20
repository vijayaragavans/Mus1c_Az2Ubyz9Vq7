<?php
/* @var $this UserDetailsController */
/* @var $model UserDetails */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-details-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="box-body">
                                         <div class="form-group">
				<?php echo $form->labelEx($model,'user_id'); ?>
				<?php echo $form->textField($model,'user_id'); ?>
				<?php echo $form->error($model,'user_id'); ?>
			</div>

                                         <div class="form-group">
				<?php echo $form->labelEx($model,'user_fb_id'); ?>
				<?php echo $form->textField($model,'user_fb_id',array('size'=>20,'maxlength'=>20)); ?>
				<?php echo $form->error($model,'user_fb_id'); ?>
			</div>

                                         <div class="form-group">
				<?php echo $form->labelEx($model,'user_profile_name'); ?>
				<?php echo $form->textField($model,'user_profile_name',array('size'=>60,'maxlength'=>250)); ?>
				<?php echo $form->error($model,'user_profile_name'); ?>
			</div>

                                         <div class="form-group">
				<?php echo $form->labelEx($model,'user_link'); ?>
				<?php echo $form->textField($model,'user_link',array('size'=>60,'maxlength'=>250)); ?>
				<?php echo $form->error($model,'user_link'); ?>
			</div>

                                         <div class="form-group">
				<?php echo $form->labelEx($model,'user_gender'); ?>
				<?php echo $form->textField($model,'user_gender',array('size'=>50,'maxlength'=>50)); ?>
				<?php echo $form->error($model,'user_gender'); ?>
			</div>

                                         <div class="form-group">
				<?php echo $form->labelEx($model,'user_avatar'); ?>
				<?php echo $form->textField($model,'user_avatar',array('size'=>60,'maxlength'=>250)); ?>
				<?php echo $form->error($model,'user_avatar'); ?>
			</div>

                                         <div class="form-group">
				<?php echo $form->labelEx($model,'user_source'); ?>
				<?php echo $form->textField($model,'user_source',array('size'=>50,'maxlength'=>50)); ?>
				<?php echo $form->error($model,'user_source'); ?>
			</div>

                                         <div class="form-group">
				<?php echo $form->labelEx($model,'user_detail_updated_on'); ?>
				<?php echo $form->textField($model,'user_detail_updated_on'); ?>
				<?php echo $form->error($model,'user_detail_updated_on'); ?>
			</div>

		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary')); ?>

<?php $this->endWidget(); ?>

</div><!-- form -->