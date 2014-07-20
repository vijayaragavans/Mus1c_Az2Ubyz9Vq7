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

        <div class="form-box" id="login-box" style="margin:0px auto 0">
            <div class="header">Manage Songs Categories</div>
                <div class="body bg-gray">
                    <div class="form-group">
		<?php echo $form->labelEx($model,'album_category_name'); ?>
		<?php echo $form->textField($model,'album_category_name',array('size'=>60,'maxlength'=>250, 'class'=> 'form-control')); ?>
		<?php echo $form->error($model,'album_category_name'); ?>
		</div>

                    <div class="form-group">
		<?php echo $form->labelEx($model,'album_category_is_active'); ?>
		<?php echo $form->textField($model,'album_category_is_active',array('size'=>1,'maxlength'=>1, 'class'=> 'form-control')); ?>
		<?php echo $form->error($model,'album_category_is_active'); ?>
	</div>

                    <div class="form-group">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn bg-olive btn-block' )); ?>
	</div>
	</div>
      </div>
<?php $this->endWidget(); ?>

</div><!-- form -->