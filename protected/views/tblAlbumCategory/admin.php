<?php
/* @var $this TblAlbumCategoryController */
/* @var $model TblAlbumCategory */

$this->breadcrumbs=array(
	'Tbl Album Categories'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TblAlbumCategory', 'url'=>array('index')),
	array('label'=>'Create TblAlbumCategory', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('tbl-album-category-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Tbl Album Categories</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tbl-album-category-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'album_category_id',
		'album_category_name',
		'album_category_created_by',
		'album_category_is_active',
		'album_category_created_on',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
