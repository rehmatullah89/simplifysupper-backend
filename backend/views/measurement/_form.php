<?php
/* @var $this MeasurementController */
/* @var $model Measurement */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'measurement-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'measurement'); ?>
		<?php echo $form->textField($model,'measurement',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'measurement'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'weight'); ?>
		<?php echo $form->textField($model,'weight'); ?>
		<?php echo $form->error($model,'weight'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'unit'); ?>
		<?php //echo $form->textField($model,'unit',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->dropDownList($model,'unit', $model->getWeightTypeOptions()); ?>
		<?php echo $form->error($model,'unit'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->