<?php
$this->breadcrumbs=array(
	'Ticket Messages'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TicketMessage', 'url'=>array('index')),
	array('label'=>'Manage TicketMessage', 'url'=>array('admin')),
);
?>

<h1>Create TicketMessage</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>