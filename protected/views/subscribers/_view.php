<?php
/* @var $this SubscribersController */
/* @var $model Subscribers */
?>

	<tr>
		<td><?php echo CHtml::link(CHtml::encode($data->subscribe_id), array('view', 'id'=>$data->subscribe_id)); ?></td>
		<td><?php echo CHtml::encode($data->subscribe_name); ?></td>
		<td><?php echo CHtml::encode($data->subscribe_email); ?></td>
		<td><?php echo CHtml::encode($data->utm_source); ?></td>
		<td><?php echo CHtml::encode($data->utm_medium); ?></td>
		<td><?php echo CHtml::encode($data->utm_term); ?></td>
		<td><?php echo CHtml::encode($data->utm_content); ?></td>
		<td><?php echo CHtml::encode($data->utm_campaign); ?></td>
		<td><?php echo CHtml::encode($data->subscribed_on); ?></td>
	</tr>

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('utm_campaign')); ?>:</b>
	<?php echo CHtml::encode($data->utm_campaign); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subscribed_on')); ?>:</b>
	<?php echo CHtml::encode($data->subscribed_on); ?>
	<br />

	*/ ?>

</div>