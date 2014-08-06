<?php
/* @var $this SubscribersController */
/* @var $model Subscribers */

$this->breadcrumbs=array(
	'Subscribers'=>array('index'),
	$model->subscribe_id=>array('view','id'=>$model->subscribe_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Subscribers', 'url'=>array('index')),
	array('label'=>'Create Subscribers', 'url'=>array('create')),
	array('label'=>'View Subscribers', 'url'=>array('view', 'id'=>$model->subscribe_id)),
	array('label'=>'Manage Subscribers', 'url'=>array('admin')),
);
?>

<h1>Update Subscribers <?php echo $model->subscribe_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>