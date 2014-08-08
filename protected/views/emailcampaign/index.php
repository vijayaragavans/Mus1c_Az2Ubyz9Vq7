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
                        <small>Manage Email Content</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Manage Email Content</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
		  <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/emailcampaign/create">Create</a>
		<div class="box">
                                <div class="box-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Email Campaign Id</th>
                                                <th>Campaign Title</th>
                                                <th>Campaign Description</th>
                                                <th>Campaign Status</th>
                                                <th>Campaign Created On</th>
                                            </tr>
                                        </thead>
                                        <tbody>

			<?php
			/* @var $this TblSongsController */
			/* @var $dataProvider CActiveDataProvider */
			?>

			<?php $this->widget('zii.widgets.CListView', array(
				'dataProvider'=>$dataProvider,
				'itemView'=>'_view',
			)); ?>

                                        </tfoot>
                                    </table>
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
        <!-- DATA TABES SCRIPT -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/files/js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/files/js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/files/js/AdminLTE/app.js" type="text/javascript"></script>

        <!-- page script -->
        <script type="text/javascript">
            $(function() {
                $("#example1").dataTable();
                $('#example2').dataTable({
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": false
                });
            });
        </script>

