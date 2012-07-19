<?php
$this->breadcrumbs=array(
	'Ticket Messages'=>array('index'),
	$model->msg_id,
);

$this->menu=array(
	array('label'=>'List TicketMessage', 'url'=>array('index')),
	array('label'=>'Create TicketMessage', 'url'=>array('create')),
	array('label'=>'Update TicketMessage', 'url'=>array('update', 'id'=>$model->msg_id)),
	array('label'=>'Delete TicketMessage', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->msg_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TicketMessage', 'url'=>array('admin')),
);
?>

<h1>View TicketMessage #<?php echo $model->msg_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'msg_id',
		'ticket_id',
		'staff_id',
		'msg_content',
		'ip_address',
		'create_time',
		'update_time',
	),
)); ?>
