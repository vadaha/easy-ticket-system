<?php
$this->breadcrumbs=array(
	'Ticket Messages',
);

$this->menu=array(
	array('label'=>'Create TicketMessage', 'url'=>array('create')),
	array('label'=>'Manage TicketMessage', 'url'=>array('admin')),
);
?>

<h1>Ticket Messages</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
