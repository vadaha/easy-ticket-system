<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ticket-form',
	'enableAjaxValidation'=>true,
        'enableClientValidation'=>true
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
        
        <?php /*
	<div class="row">
		<?php echo $form->labelEx($model,'dept_id'); ?>
		<?php echo $form->textField($model,'dept_id'); ?>
		<?php echo $form->error($model,'dept_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'topic_id'); ?>
		<?php echo $form->textField($model,'topic_id'); ?>
		<?php echo $form->error($model,'topic_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_email'); ?>
		<?php echo $form->textField($model,'user_email',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'user_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_time'); ?>
		<?php echo $form->textField($model,'create_time'); ?>
		<?php echo $form->error($model,'create_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'update_time'); ?>
		<?php echo $form->textField($model,'update_time'); ?>
		<?php echo $form->error($model,'update_time'); ?>
	</div>
        
         */ ?>
        
         <div class="row">
            <?= $form->labelEx($model, 'user_name') ?>
            <?= $form->textField($model, 'user_name') ?>
            <?= $form->error($model, 'user_name') ?>
        </div>
        
         <div class="row">
            <?= $form->labelEx($model, 'user_email') ?>
            <?= $form->textField($model, 'user_email') ?>
            <?= $form->error($model, 'user_email') ?>
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
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->