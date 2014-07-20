<?php
/* @var $this TblAlbumCategoryController */
/* @var $model TblAlbumCategory */
?>

              <tr>
	<td><?php echo CHtml::link(CHtml::encode($data->album_category_id), array('view', 'id'=>$data->album_category_id)); ?></td>
	<td><?php echo CHtml::encode($data->album_category_name); ?></td>
	<td><?php echo CHtml::encode($data->album_category_is_active); ?></td>
	<td><?php echo CHtml::encode($data->album_category_created_on); ?></td>
	<td><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/TblAlbumCategory/update/<?php echo $data->album_category_id; ?>">Edit</a>	</td>
	<td><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/TblAlbumCategory/delete/<?php echo $data->album_category_id; ?>">Delete</a>	</td>
	</tr>
