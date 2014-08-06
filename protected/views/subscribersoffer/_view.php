<?php
/* @var $this SubscribersOfferController */
/* @var $model SubscribersOffer */
?>

	<tr>
		<td><?php echo CHtml::link(CHtml::encode($data->offer_id), array('view', 'id'=>$data->offer_id)); ?></td>
		<td><?php echo CHtml::encode($data->offer_time_frame); ?></td>
		<td><?php echo CHtml::encode($data->offers); ?></td>
		<td><?php echo CHtml::encode($data->offer_is_active); ?></td>
		<td><?php echo CHtml::encode($data->offers_created_on); ?></td>
		<td><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/subscribersoffer/update/<?php echo $data->offer_id; ?>">Edit</a></td>
		<td><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/subscribersoffer/delete/<?php echo $data->offer_id; ?>">Delete</a></td>
	</tr>
