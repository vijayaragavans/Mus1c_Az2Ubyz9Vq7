<?php
/* @var $this AlbumCategoriesController */
/* @var $model AlbumCategories */
?>

        <tr>
	<td><?php echo CHtml::link(CHtml::encode($data->album_page_category_id), array('view', 'id'=>$data->album_page_category_id)); ?></td>
	<td><?php echo CHtml::encode($data->album_page_category); ?></td>
	<td><?php echo CHtml::encode($data->album_page_category_is_active); ?></td>
	<td><?php echo CHtml::encode($data->album_page_category_created_on); ?></td>
        </tr>
