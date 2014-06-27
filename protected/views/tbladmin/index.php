<?php
/* @var $this TbladminController */

$this->breadcrumbs=array(
	'Manage User',
);
?>
        <!-- DATA TABLES -->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/files/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />

    <div class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/index" class="logo" style="height: 65px;">
	           <img src="<?php echo Yii::app()->request->baseUrl; ?>/files/img/musicstore.png" style="padding-top:10px; padding-left:20px; position:absolute; z-index:99999;">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
            </a>
            <!--   Include Top header Menus Starts-->
            <?php echo $this->renderPartial('../site/top_header'); ?>
            <!--   Include Top header Menus Ends-->
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">

            <!--   Include Left side MenuBar Starts-->
            <?php echo $this->renderPartial('../site/sidebar_menu'); ?>
            <!--   Include Left side MenuBar Ends-->

            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Music eStore
                        <small>Manage Songs</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Manage Songs</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'profile-form',
	'enableAjaxValidation'=>false,
)); ?> 

		<div class="box">
                                <div class="box-header">
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">


		<div class="box-body">
                                        <div class="form-group">
                                        </div>
                                        <div class="form-group">
				<?php echo $form->labelEx($model,'user_name'); ?>
				<?php echo $form->textField($model,'user_name',array('size'=>60,'maxlength'=>250)); ?>
				<?php echo $form->error($model,'user_name'); ?>
                                        </div>
                                        <div class="form-group">
				<?php echo $form->labelEx($model,'user_password'); ?>
				<?php echo $form->textField($model,'user_password'); ?>
				<?php echo $form->error($model,'user_password'); ?>
                                        </div>

                                        <div class="form-group">
				<?php echo $form->labelEx($model,'user_thumb'); ?>
				<?php echo $form->fileField($model,'user_thumb'); ?>
				<?php echo $form->error($model,'user_thumb'); ?>
                                        </div>
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary')); ?>

                                    </div><!-- /.box-body -->

<?php $this->endWidget(); ?>

                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                            </tbody>
                         </table>
                        </div>
                       </div>
                      </section>
                    </aside>
                  </div>
                </div>               

