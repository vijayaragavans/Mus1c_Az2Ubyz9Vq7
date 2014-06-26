<?php
/* @var $this TblSongsController */
/* @var $model TblSongs */

$this->breadcrumbs=array(
	'Tbl Songs'=>array('index'),
	$model->song_id,
);

$this->menu=array(
	array('label'=>'List TblSongs', 'url'=>array('index')),
	array('label'=>'Create TblSongs', 'url'=>array('create')),
	array('label'=>'Update TblSongs', 'url'=>array('update', 'id'=>$model->song_id)),
	array('label'=>'Delete TblSongs', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->song_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TblSongs', 'url'=>array('admin')),
);
?>

<h1>View TblSongs #<?php echo $model->song_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'song_id',
		'song_title',
		'song_category',
		'song_description',
		'cong_created_on',
	),
)); ?>
