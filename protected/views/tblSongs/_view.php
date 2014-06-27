<?php
	$song_category = TblAlbumCategory::model()->findAll();
?>
                <tr>
                    <td><?php echo CHtml::link(CHtml::encode($data->song_id), array('view', 'id'=>$data->song_id)); ?></td>
                    <td><?php echo CHtml::encode($data->song_title); ?></td>
                    <td><?php 
		foreach ($song_category as $category) {
			if($category->album_category_id == $data->song_category)
	                    		echo CHtml::encode($category->album_category_name); 
		}                    		
                    ?></td>
                    <td> <?php echo CHtml::encode($data->song_description); ?></td>
                    <td><?php echo CHtml::encode($data->cong_created_on); ?></td>
                </tr>
