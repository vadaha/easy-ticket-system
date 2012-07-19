<?php
$this->breadcrumbs=array(
	'Tickets'=>array('index'),
	$model->ticket_id,
);

$this->menu=array(
	array('label'=>'List Ticket', 'url'=>array('index')),
	array('label'=>'Create Ticket', 'url'=>array('create')),
	array('label'=>'Update Ticket', 'url'=>array('update', 'id'=>$model->ticket_id)),
	array('label'=>'Delete Ticket', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ticket_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ticket', 'url'=>array('admin')),
);
?>

<h1>View Ticket #<?php echo $model->ticket_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ticket_id',
		'dept_id',
		'topic_id',
		'user_id',
		'user_email',
		'status',
                'is_answered',
		'create_time',
		'update_time',
	),
)); ?>


<?php
//消息列表

$dataProvider=new CActiveDataProvider('TicketMessage', array(
    'criteria'=>array(
        'condition'=>'ticket_id='.$model->ticket_id,
        'order'=>'create_time DESC'
    ),
    'pagination'=>array(
        'pageSize'=>5,
    ),
));

$this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_message_list',   // refers to the partial view named '_post'
    'sortableAttributes'=>array(
        'msg_content',        
    ),
));
?>

<!-- 消息回复 -->
<p>Add Comments</p>
<form action="<?= Yii::app()->createUrl('TicketMessage/reply') ?>" method="post">
    <input type="hidden" name="TicketMessage[ticket_id]" value="<?= $model->ticket_id ?>" />
    <input type="hidden" name="TicketMessage[staff_id]" value="22" />
    <input type="hidden" name="TicketMessage[ip_address]" value="0" />
    <input type="hidden" name="TicketMessage[create_time]" value="<?= date('Y-m-d H:i:s') ?>" />
    <input type="hidden" name="TicketMessage[update_time]" value="<?= date('Y-m-d H:i:s') ?>" />
    <textarea name="TicketMessage[msg_content]"></textarea>
    <input type="submit" value="Post" />
</form>
