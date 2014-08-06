<?php
/* @var $this SubscribersController */
/* @var $model Subscribers */

$this->breadcrumbs=array(
	'Subscribers'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Subscribers', 'url'=>array('index')),
	array('label'=>'Create Subscribers', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('subscribers-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Subscribers</h1>

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
	'id'=>'subscribers-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'subscribe_id',
		'subscribe_name',
		'subscribe_email',
		'utm_source',
		'utm_medium',
		'utm_term',
		/*
		'utm_content',
		'utm_campaign',
		'subscribed_on',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
