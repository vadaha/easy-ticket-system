<?php
$this->breadcrumbs=array(
	'Ticket Messages'=>array('index'),
	$model->msg_id=>array('view','id'=>$model->msg_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TicketMessage', 'url'=>array('index')),
	array('label'=>'Create TicketMessage', 'url'=>array('create')),
	array('label'=>'View TicketMessage', 'url'=>array('view', 'id'=>$model->msg_id)),
	array('label'=>'Manage TicketMessage', 'url'=>array('admin')),
);
?>

<h1>Update TicketMessage <?php echo $model->msg_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>