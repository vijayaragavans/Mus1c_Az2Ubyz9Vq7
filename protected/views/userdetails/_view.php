<?php
/* @var $this UserDetailsController */
/* @var $model UserDetails */
	$response = Users::model()->findByAttributes(array('user_id' => $data->user_id));
?>

                <tr>
		<td><?php echo CHtml::link(CHtml::encode($data->user_detail_id), array('view', 'id'=>$data->user_detail_id)); ?></td>

		<td><?php echo CHtml::encode($data->user_id); ?></td>

		<td><?php echo CHtml::encode($data->user_fb_id); ?></td>

		<td><?php echo CHtml::encode($response->user_first_name); ?></td>

		<td><?php echo CHtml::encode($response->user_last_name); ?></td>

		<td><?php echo CHtml::encode($response->user_email); ?></td>

		<td><?php echo CHtml::encode($data->user_gender); ?></td>

		<td><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/userdetails/update/<?php echo $data->user_detail_id; ?>">Edit</a></td>
	<?php /*
	<td><?php echo CHtml::encode($data->getAttributeLabel('user_source')); ?>:</td>
	<?php echo CHtml::encode($data->user_source); ?>
	<br />

	<td><?php echo CHtml::encode($data->getAttributeLabel('user_detail_updated_on')); ?>:</td>
	<?php echo CHtml::encode($data->user_detail_updated_on); ?>
	<br />

	*/ ?>

</tr>