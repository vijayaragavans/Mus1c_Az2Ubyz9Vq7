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
                        <small>Manage Songs Categories</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Manage Songs Categories</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

		<div class="box">
                                <div class="box-header">
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
			<?php
			/* @var $this TblSongsController */
			/* @var $dataProvider CActiveDataProvider */
			?>
				<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
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


<?php
/* @var $this TblSongsController */
/* @var $model TblSongs */
/*$this->menu=array(
	array('label'=>'List TblSongs', 'url'=>array('index')),
	array('label'=>'Create TblSongs', 'url'=>array('create')),
	array('label'=>'View TblSongs', 'url'=>array('view', 'id'=>$model->song_id)),
	array('label'=>'Manage TblSongs', 'url'=>array('admin')),
);
*/?>

