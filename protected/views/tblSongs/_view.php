
                <tr>
                    <td><?php echo CHtml::link(CHtml::encode($data->song_id), array('view', 'id'=>$data->song_id)); ?></td>
                    <td><?php echo CHtml::encode($data->song_title); ?></td>
                    <td><?php echo CHtml::encode($data->song_category); ?></td>
                    <td> <?php echo CHtml::encode($data->song_description); ?></td>
                    <td><?php echo CHtml::encode($data->cong_created_on); ?></td>
                </tr>
