<?php
/* @var $this TblAlbumCategoryController */
/* @var $model TblAlbumCategory */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'subscribers-offer-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

        <div class="form-box" id="login-box" style="margin:0px auto 0">
            <div class="header">Manage Subscribers Offer</div>
                <div class="body bg-gray">
                    <div class="form-group">
		<?php echo $form->labelEx($model,'offer_time_frame'); ?>
			<select name='SubscribersOffer[offer_time_frame]' id='SubscribersOffer[offer_time_frame]'>
				<option>Daily</option>
				<option>Weekly</option>
				<option>Monthly</option>
			</select>
		<?php echo $form->error($model,'offer_time_frame'); ?>
	      </div>

                    <div class="form-group">
		<?php echo $form->labelEx($model,'offers'); ?>
		<?php echo $form->textField($model,'offers',array('size'=>50,'maxlength'=>50, 'class'=> 'form-control')); ?>
		<?php echo $form->error($model,'offers'); ?>
	</div>

                    <div class="form-group">
		<?php echo $form->labelEx($model,'offer_is_active'); ?>
		<?php echo $form->textField($model,'offer_is_active',array('size'=>1,'maxlength'=>1, 'class'=> 'form-control')); ?>
		<?php echo $form->error($model,'offer_is_active'); ?>
	</div>

                    <div class="form-group">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn bg-olive btn-block' )); ?>
		</div>
	</div>
	</div>
<?php $this->endWidget(); ?>

</div><!-- form -->