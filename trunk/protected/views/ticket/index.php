<?php
$this->breadcrumbs=array(
	'Tickets',
);

//$this->menu=array(
//	array('label'=>'Create Ticket', 'url'=>array('create')),
//	array('label'=>'Manage Ticket', 'url'=>array('admin')),
//);
?>

<h1>Welome to EasyTickets System</h1>

<!--
<table>
    <tbody>
        <?php
        $this->widget('zii.widgets.CListView', array(
            'dataProvider' => $dataProvider,
            'itemView' => '_view',
        ));
        ?>
    </tbody>
</table>
-->

<div>
    In order to streamline support requests and better serve you, we utilize a support ticket system.
    Every support request is assigned a unique ticket number which you can use to track the progress and responses online.
    For your reference we provide complete archives and history of all your support requests. 
    A valid email address is required.
</div>

<p><form action="<?= Yii::app()->createUrl('ticket/create') ?>" method="POST">
    <input type="submit" value="Open New Ticket" />
</form></p>