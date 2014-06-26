<?php
/* @var $this TblSongsController */
/* @var $model TblSongs */

$this->breadcrumbs=array(
	'Tbl Songs'=>array('index'),
	$model->song_id=>array('view','id'=>$model->song_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TblSongs', 'url'=>array('index')),
	array('label'=>'Create TblSongs', 'url'=>array('create')),
	array('label'=>'View TblSongs', 'url'=>array('view', 'id'=>$model->song_id)),
	array('label'=>'Manage TblSongs', 'url'=>array('admin')),
);
?>

<h1>Update TblSongs <?php echo $model->song_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>