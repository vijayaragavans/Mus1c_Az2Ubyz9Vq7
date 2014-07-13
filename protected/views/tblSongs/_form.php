
<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tbl-songs-form',
	'enableAjaxValidation'=>false,
    'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); 
	//$model = new TblAlbumCategory();
	    $data=  TblAlbumCategory::model()->findAll();
?>

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
				<select name="TblSongs[song_category]" id="TblSongs_song_category">
				<?php  foreach ($data as $value) {  ?>
	 				<option value="<?php echo $value->album_category_id; ?>"><?php echo $value->album_category_name; ?></option>	
				<?php } ?>
				</select>
				<?php echo $form->error($model,'song_category'); ?>
                                        </div>
                                        <div class="form-group">
				<?php echo $form->labelEx($model,'song_description'); ?>
				<?php echo $form->textArea($model,'song_description',array('rows'=>6, 'cols'=>50)); ?>
				<?php echo $form->error($model,'song_description'); ?>
                                        </div>
                                        <div class="form-group">
				<?php echo $form->labelEx($model,'song_img_url'); ?>
				<?php echo $form->fileField($model,'song_img_url'); ?>
				<?php echo $form->error($model,'song_img_url'); ?>
                                        </div>
                                        <div class="form-group">
				<?php echo $form->labelEx($model,'song_url'); ?>
				<?php echo $form->fileField($model,'song_url'); ?>
				<?php echo $form->error($model,'song_url'); ?>
                                        </div>
                                        <div class="form-group">
				<?php echo $form->labelEx($model,'song_tags'); ?>
				<?php echo $form->textField($model,'song_tags'); ?>
				<?php echo $form->error($model,'song_tags'); ?>
                                        </div>
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary')); ?>

                                    </div><!-- /.box-body -->

<?php $this->endWidget(); ?>

</div><!-- form -->