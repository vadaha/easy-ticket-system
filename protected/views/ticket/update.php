<?php
$this->breadcrumbs=array(
	'Tickets'=>array('index'),
	$model->ticket_id=>array('view','id'=>$model->ticket_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ticket', 'url'=>array('index')),
	array('label'=>'Create Ticket', 'url'=>array('create')),
	array('label'=>'View Ticket', 'url'=>array('view', 'id'=>$model->ticket_id)),
	array('label'=>'Manage Ticket', 'url'=>array('admin')),
);
?>

<h1>Update Ticket <?php echo $model->ticket_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>