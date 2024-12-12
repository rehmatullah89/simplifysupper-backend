<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'firstname'); ?>
		<?php echo $form->textField($model,'firstname',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'firstname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lastname'); ?>
		<?php echo $form->textField($model,'lastname',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'lastname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'username'); ?>
		<?php //echo $form->textField($model,'username',array('size'=>30,'maxlength'=>30)); ?>
		<?php //echo $form->error($model,'username'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'usertype'); ?>
		<?php //echo $form->dropDownList($model, 'classification_levels_id', CHtml::dropDownList('usertype', $model, array('user' => 'Member','admin' => 'Admin'));?>
		<?php echo $form->dropDownList($model,'usertype',array('member'=>'Member','admin'=>'Admin')); ?>
		<?php echo $form->error($model,'usertype'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>66)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>
	
	<div class="row">
		<?php //echo $form->labelEx($model,'repeat_password'); ?>
		<?php //echo $form->passwordField($model,'repeat_password',array('size'=>60,'maxlength'=>66)); ?>
		<?php //echo $form->error($model,'repeat_password'); ?>
	</div>
	
	<?php echo $form->hiddenField($model,'status',array('value'=>'inactive')); ?>
	
	<div class="row">
        <?php echo $form->labelEx($model,'photo'); ?>
        <?php echo CHtml::activeFileField($model, 'photo'); ?>  
        <?php echo $form->error($model,'photo'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'about'); ?>
		<?php echo $form->textArea($model,'about',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'about'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'address'); ?>
		<?php //echo $form->textField($model,'address',array('size'=>60,'maxlength'=>255)); ?>
		<?php // echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'city'); ?>
		<?php //echo $form->textField($model,'city',array('size'=>60,'maxlength'=>100)); ?>
		<?php // echo $form->error($model,'city'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'state'); ?>
		<?php //echo $form->textField($model,'state',array('size'=>60,'maxlength'=>100)); ?>
		<?php //echo $form->error($model,'state'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'zip'); ?>
		<?php //echo $form->textField($model,'zip',array('size'=>10,'maxlength'=>10)); ?>
		<?php //echo $form->error($model,'zip'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'country'); ?>
		<?php //echo $form->textField($model,'country',array('size'=>60,'maxlength'=>100)); ?>
		<?php //echo $form->error($model,'country'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'phone'); ?>
		<?php //echo $form->textField($model,'phone',array('size'=>30,'maxlength'=>30)); ?>
		<?php //echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'dob'); ?>
		<?php //echo $form->textField($model,'dob'); ?>
		<?php //echo $form->error($model,'dob'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'age'); ?>
		<?php //echo $form->textField($model,'age'); ?>
		<?php //echo $form->error($model,'age'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'gender'); ?>
		<?php //echo $form->textField($model,'gender',array('size'=>21,'maxlength'=>21)); ?>
		<?php //echo $form->error($model,'gender'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'status'); ?>
		<?php //echo $form->textField($model,'status',array('size'=>8,'maxlength'=>8)); ?>
		<?php //echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'signed_up'); ?>
		<?php //echo $form->textField($model,'signed_up'); ?>
		<?php //echo $form->error($model,'signed_up'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'recipes'); ?>
		<?php //echo $form->textField($model,'recipes',array('size'=>20,'maxlength'=>20)); ?>
		<?php //echo $form->error($model,'recipes'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'articles'); ?>
		<?php //echo $form->textField($model,'articles',array('size'=>20,'maxlength'=>20)); ?>
		<?php //echo $form->error($model,'articles'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'photos'); ?>
		<?php //echo $form->textField($model,'photos',array('size'=>20,'maxlength'=>20)); ?>
		<?php //echo $form->error($model,'photos'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'videos'); ?>
		<?php //echo $form->textField($model,'videos',array('size'=>20,'maxlength'=>20)); ?>
		<?php //echo $form->error($model,'videos'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'testimonials'); ?>
		<?php //echo $form->textField($model,'testimonials',array('size'=>20,'maxlength'=>20)); ?>
		<?php //echo $form->error($model,'testimonials'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'friends'); ?>
		<?php //echo $form->textField($model,'friends'); ?>
		<?php //echo $form->error($model,'friends'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'viewed'); ?>
		<?php //echo $form->textField($model,'viewed',array('size'=>20,'maxlength'=>20)); ?>
		<?php //echo $form->error($model,'viewed'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'spclicks'); ?>
		<?php //echo $form->textField($model,'spclicks',array('size'=>20,'maxlength'=>20)); ?>
		<?php //echo $form->error($model,'spclicks'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'spviews'); ?>
		<?php //echo $form->textField($model,'spviews',array('size'=>20,'maxlength'=>20)); ?>
		<?php //echo $form->error($model,'spviews'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'howto'); ?>
		<?php //echo $form->textField($model,'howto',array('size'=>3,'maxlength'=>3)); ?>
		<?php //echo $form->error($model,'howto'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'meta_keywords'); ?>
		<?php //echo $form->textArea($model,'meta_keywords',array('rows'=>6, 'cols'=>50)); ?>
		<?php //echo $form->error($model,'meta_keywords'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'meta_title'); ?>
		<?php //echo $form->textArea($model,'meta_title',array('rows'=>6, 'cols'=>50)); ?>
		<?php //echo $form->error($model,'meta_title'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'meta_desc'); ?>
		<?php //echo $form->textArea($model,'meta_desc',array('rows'=>6, 'cols'=>50)); ?>
		<?php //echo $form->error($model,'meta_desc'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class' => 'btn btn-secondary')); ?>
		 <?php echo CHtml::submitButton('Cancel', array('submit' => array('/user/index/' . Yii::app()->user->getState('__userid')), 'class' => 'btn btn-secondary')); ?>
	</div>


<?php $this->endWidget(); ?>

</div><!-- form -->