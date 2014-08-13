<?php
/* @var $this UserDetailsController */
/* @var $model UserDetails */
/* @var $form CActiveForm */
?>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>

<div class="form">

<?php
	$songs_category =TblAlbumCategory::model()->findAll();
?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'songs-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>
	<?php echo $form->errorSummary($model); ?>
<script type='text/javascript'>
	$(document).ready(function() {
		$("#_validate").val(1);
		var MaxInputs       = 8; //maximum input boxes allowed
		var InputsWrapper   = $("#InputsWrapper"); //Input boxes wrapper ID
		var AddButton       = $("#AddMoreFileBox"); //Add button ID

		var x = InputsWrapper.length; //initlal text box count
		var FieldCount=1; //to keep track of text box added

		$(AddButton).click(function (e)  //on add input button click
		{
		        if(x <= MaxInputs) //max input box allowed
		        {
		            FieldCount++; //text box added increment
		            //add input box
		            $(InputsWrapper).append('<div class="form-group"><?php echo $form->labelEx($songs,"song_url"); ?><?php echo $form->fileField($songs,"song_url[]", array("id" =>"song_url[]")); ?><?php echo $form->error($songs,"song_url[]"); ?><a href="#" class="removeclass">&times;</a></div>');
		            x++; //text box increment
		        }
		return false;
		});

		$("body").on("click",".removeclass", function(e){ //user click on remove text
		        if( x > 1 ) {
		                $(this).parent('div').remove(); //remove text box
		                x--; //decrement textbox
		        }
		return false;
		}) 

	});
</script>

		        <div class="form-box" id="login-box" style="margin:0px auto 0">
		            <div class="header">Manage Songs Categories</div>
		                <div class="body bg-gray">
		                    <div class="form-group">
				<?php echo $form->labelEx($model,'song_title'); ?>
				<?php echo $form->textField($model,'song_title',array('size'=>60, 'class'=> 'form-control')); ?>
				<?php echo $form->error($model,'song_title'); ?>
			</div>

                                         <div class="form-group">
				<?php echo $form->labelEx($model,'song_album_page_category_id'); ?> :
				<?php echo $form->dropDownList($model,'song_album_page_category_id', CHtml::listData(Albumpagecategories::model()->findAll(), 'album_page_category_id', 'album_page_category'));?>
				<?php echo $form->error($model,'song_album_page_category_id'); ?>
			</div>

                                         <div class="form-group">
				<?php echo $form->labelEx($model,'song_category'); ?>
				<?php echo $form->dropDownList($model,'song_category', CHtml::listData(TblAlbumCategory::model()->findAll(), 'album_category_id', 'album_category_name'));?>
				<?php echo $form->error($model,'song_category'); ?>
			</div>
                                         <div class="form-group">
				<?php echo $form->labelEx($model,'song_img_url'); ?>
				<?php echo $form->FileField($model,'song_img_url'); ?>
				<?php echo $form->error($model,'song_img_url'); ?>
			</div>

                                         <div class="form-group">
				<a href="#" id="AddMoreFileBox" class="btn btn-info">Add More Files</a>
			</div>
			<div id='InputsWrapper'>
			</div>

                                         <div class="form-group">
				<?php echo $form->labelEx($model,'song_description'); ?>
				<?php echo $form->textArea($model,'song_description',array( 'class'=> 'form-control')); ?>
				<?php echo $form->error($model,'song_description'); ?>
			</div>

                                         <div class="form-group">
				<?php echo $form->labelEx($model,'song_tags'); ?>
				<?php echo $form->textField($model,'song_tags',array('size'=>50, 'class'=> 'form-control' )); ?>
				<?php echo $form->error($model,'song_tags'); ?>
				<input type="hidden" name='_validate' id='_validate'>
			</div>

		<?php echo CHtml::submitButton( 'Save', array('class' => 'btn bg-olive btn-block' )); ?>
		</div><!-- form -->
	</div>
      </div>
<?php $this->endWidget(); ?>

</div><!-- form -->