<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tbl-songs-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="box-body">
                                        <div class="form-group">
				<?php echo $form->labelEx($model,'song_title'); ?>
				<?php echo $form->textField($model,'song_title',array('size'=>60,'maxlength'=>250)); ?>
				<?php echo $form->error($model,'song_title'); ?>
                                        </div>
                                        <div class="form-group">
				<?php echo $form->labelEx($model,'song_category'); ?>
				<?php echo $form->textField($model,'song_category'); ?>
				<?php echo $form->error($model,'song_category'); ?>
                                        </div>
                                        <div class="form-group">
				<?php echo $form->labelEx($model,'song_description'); ?>
				<?php echo $form->textArea($model,'song_description',array('rows'=>6, 'cols'=>50)); ?>
				<?php echo $form->error($model,'song_description'); ?>
                                        </div>
                                        <div class="form-group">
				<?php echo $form->labelEx($model,'cong_created_on'); ?>
				<?php echo $form->textField($model,'cong_created_on'); ?>
				<?php echo $form->error($model,'cong_created_on'); ?>
                                        </div>
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary')); ?>

                                    </div><!-- /.box-body -->

<?php $this->endWidget(); ?>

</div><!-- form -->