<?php
/* @var $this OffersController */
/* @var $model Offers */
?>

	<tr>
		<td><?php echo CHtml::link(CHtml::encode($data->offer_id), array('view', 'id'=>$data->offer_id)); ?></td>
		<td><?php echo CHtml::encode($data->offers_for); ?></td>
		<td><?php echo CHtml::encode($data->offers); ?></td>
		<td><?php echo CHtml::encode($data->is_active); ?></td>
		<td><?php echo CHtml::encode($data->offer_created_on); ?></td>
	</tr>