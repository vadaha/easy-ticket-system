<?php /*

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ticket_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ticket_id), array('view', 'id'=>$data->ticket_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dept_id')); ?>:</b>
	<?php echo CHtml::encode($data->dept_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('topic_id')); ?>:</b>
	<?php echo CHtml::encode($data->topic_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('guest_id')); ?>:</b>
	<?php echo CHtml::encode($data->guest_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gust_email')); ?>:</b>
	<?php echo CHtml::encode($data->gust_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br />

	<?php        
      
        /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('update_time')); ?>:</b>
	<?php echo CHtml::encode($data->update_time); ?>
	<br />

	
</div>
*/ ?>

<tr class="even">
    <td><?= CHtml::link($data->ticket_id, array('view','id'=>$data->ticket_id), array('target'=>'_blank')); ?></td>
    <td><?= $data->help_topic->topic ?></td>
    <td><?= $data->subject ?></td>   
    <td><?= $data->user_email ?></td>
    <td><?= $data->create_time ?></td>
</tr>

<pre>
<?php

//print_r($data->help_topic->topic);
?>
</pre>