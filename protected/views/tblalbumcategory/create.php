<?php
/* @var $this TblAlbumCategoryController */
/* @var $model TblAlbumCategory */

$this->breadcrumbs=array(
	'Tbl Album Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TblAlbumCategory', 'url'=>array('index')),
	array('label'=>'Manage TblAlbumCategory', 'url'=>array('admin')),
);
?>

<h1>Create TblAlbumCategory</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>