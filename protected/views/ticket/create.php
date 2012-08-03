<?php
$this->breadcrumbs=array(
	'服务票'=>array('index'),
	'开票',
);

$this->menu=array(
	array('label'=>'服务票列表', 'url'=>array('list')),
	//array('label'=>'Manage Ticket', 'url'=>array('admin')),
);
?>


<?php if(Yii::app()->user->hasFlash('contact')): ?>

<h1>Thank you</h1>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>

<h1>新开服务票</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

<?php endif; ?>