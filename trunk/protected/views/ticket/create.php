<?php
$this->breadcrumbs=array(
	'Tickets'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ticket', 'url'=>array('list')),
	array('label'=>'Manage Ticket', 'url'=>array('admin')),
);
?>


<?php if(Yii::app()->user->hasFlash('contact')): ?>

<h1>Thank you</h1>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>

<h1>Create Ticket</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

<?php endif; ?>