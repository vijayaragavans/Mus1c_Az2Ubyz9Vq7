<?php
/* @var $this TblAlbumCategoryController */
/* @var $model TblAlbumCategory */
 
$this->breadcrumbs=array(
	'Tbl Album Categories'=>array('index'),
	$model->album_category_id=>array('view','id'=>$model->album_category_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TblAlbumCategory', 'url'=>array('index')),
	array('label'=>'Create TblAlbumCategory', 'url'=>array('create')),
	array('label'=>'View TblAlbumCategory', 'url'=>array('view', 'id'=>$model->album_category_id)),
	array('label'=>'Manage TblAlbumCategory', 'url'=>array('admin')),
);
?>

<h1>Update TblAlbumCategory <?php echo $model->album_category_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
