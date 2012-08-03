<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ticket-form',
	'enableAjaxValidation'=>false,
    'enableClientValidation'=>true
)); ?>

	<p class="note"><span class="required">*</span> 标记项为必填.</p>

	<?php echo $form->errorSummary($model); ?>
                      
         <div class="row">
            <?= $form->labelEx($model, 'user_name') ?>
            <?php if (Yii::app()->user->getState('user_name') == null): ?>            
                <?= $form->textField($model, 'user_name')?>
                <?= $form->error($model, 'user_name') ?>
             <?php else: ?>
                <?= Yii::app()->user->getState('user_name') ?>
                <?= $form->hiddenField($model, 'user_name', array(
                    'value'=>Yii::app()->user->getState('user_name')
                )) ?>
             <?php endif; ?>
        </div>
        
         <div class="row">
            <?= $form->labelEx($model, 'user_email') ?>
            <?php if(Yii::app()->user->getState('user_email') == null): ?>            
                <?= $form->textField($model, 'user_email') ?>
                <?= $form->error($model, 'user_email') ?>
            <?php else: ?>
                <?= Yii::app()->user->getState('user_email') ?>
                <?= $form->hiddenField($model, 'user_email', array(
                    'value'=>Yii::app()->user->getState('user_email')
                ))?>
            <?php endif; ?>
        </div>
        
        <div>
            <?= $form->labelEx($model, 'help_topic') ?>
            <?= $form->dropDownlist($model,'help_topic',
                array('1'=>'Add Money','2'=>'Order')
            ) ?>
        </div>
        
        <div class="row">
            <?= $form->labelEx($model, 'subject') ?>
            <?= $form->textField($model, 'subject') ?>
            <?= $form->error($model, 'subject') ?>
        </div>
               
        
        <div class="row">
            <?= $form->labelEx($model, 'msg_content') ?>
            <?= $form->textArea($model, 'msg_content') ?>
            <?= $form->error($model, 'msg_content') ?>
        </div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : '提交'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->