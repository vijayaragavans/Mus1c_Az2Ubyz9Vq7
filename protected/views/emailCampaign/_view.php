<?php
/* @var $this EmailCampaignController */
/* @var $model EmailCampaign */
?>
	<tr>
		<td><?php echo CHtml::link(CHtml::encode($data->campaign_id), array('view', 'id'=>$data->campaign_id)); ?></td>
		<td><?php echo CHtml::encode($data->campaign_for); ?></td>
		<td><?php echo CHtml::encode($data->campaign_title); ?></td>
		<td><?php echo CHtml::encode($data->campaign_description); ?></td>
		<td><?php echo CHtml::encode($data->campaign_is_active); ?></td>
		<td><?php echo CHtml::encode($data->campaign_created_on); ?></td>
		<td><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/emailcampaign/update/<?php echo $data->campaign_id; ?>">Edit</a></td>
		<td><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/emailcampaign/delete/<?php echo $data->campaign_id; ?>">Delete</a></td>
	</tr>
