<?php
$this->breadcrumbs=array(
	Yii::t('common', '欢迎使用易票客服系统'),
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
    为了更好的服务广大客户，我们开发了这套系统。
    In order to streamline support requests and better serve you, we utilize a support ticket system.
    Every support request is assigned a unique ticket number which you can use to track the progress and responses online.
    For your reference we provide complete archives and history of all your support requests. 
    A valid email address is required.
</div>

<br />

<div>
    <a href="<?= Yii::app()->createUrl('ticket/list') ?>">我的易票<?= $msg_info ?></a>
    <a href="<?= Yii::app()->createUrl('ticket/create') ?>">新开易票</a>
</div>
