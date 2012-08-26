<style>
    .t-answered {
        font-weight: bold;
    }
</style>

<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$this->breadcrumbs=array(
	Yii::t('common','我的易票'),
);

$this->menu=array(
	//array('label'=>Yii::t('common','服务票列表'), 'url'=>array('list')),
	//array('label'=>'新开易票', 'url'=>array('create')),
	//array('label'=>'Update Ticket', 'url'=>array('update', 'id'=>$model->ticket_id)),
	//array('label'=>'删除', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ticket_id),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage Ticket', 'url'=>array('admin')),
);

$this->widget('zii.widgets.grid.CGridView',array(
    'dataProvider'=>$dataProvider,
    'columns'=>array(
        //'ticket_id',
        array(
            'header'=>'主题',
            'name'=>'subject',
            'value'=>'CHtml::link($data->subject ,array("ticket/view","id"=>$data->ticket_id), array("class"=>$data->is_answered==1?"t-answered":""))', 
            'type'=>'raw',           
        ),
        array('header'=>'状态', 'name'=>'status'),
        array('header'=>'创建时间', 'name'=>'create_time'),
        array(
            'header'=>'最后回复时间',
            'name'=>'lastreply_time',
            'value'=>'strtotime($data->lastreply_time) == "" ? "":$data->lastreply_time',            
        )        
    ),
    
    'cssFile'=>false
    
));

echo strtotime('0000-00-00 00:00:00');
?>
