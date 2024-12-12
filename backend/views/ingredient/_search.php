<?php
/* @var $this IngredientController */
/* @var $model Ingredient */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'barcode'); ?>
		<?php echo $form->textField($model,'barcode',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ingredient'); ?>
		<?php echo $form->textField($model,'ingredient',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pantry'); ?>
		<?php echo $form->textField($model,'pantry'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'catid'); ?>
		<?php echo $form->textField($model,'catid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'measure_unit'); ?>
		<?php echo $form->textField($model,'measure_unit',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ingweight'); ?>
		<?php echo $form->textField($model,'ingweight'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'weight'); ?>
		<?php echo $form->textField($model,'weight'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'water'); ?>
		<?php echo $form->textField($model,'water'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kcal'); ?>
		<?php echo $form->textField($model,'kcal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'protein'); ?>
		<?php echo $form->textField($model,'protein'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fat'); ?>
		<?php echo $form->textField($model,'fat'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sat_fat'); ?>
		<?php echo $form->textField($model,'sat_fat'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mono_unsat_fat'); ?>
		<?php echo $form->textField($model,'mono_unsat_fat'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'poly_unsat_fat'); ?>
		<?php echo $form->textField($model,'poly_unsat_fat'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cholesterol'); ?>
		<?php echo $form->textField($model,'cholesterol'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'carbohydrate'); ?>
		<?php echo $form->textField($model,'carbohydrate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dietry_fiber'); ?>
		<?php echo $form->textField($model,'dietry_fiber'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calcium'); ?>
		<?php echo $form->textField($model,'calcium'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'iron'); ?>
		<?php echo $form->textField($model,'iron'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'potassium'); ?>
		<?php echo $form->textField($model,'potassium',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sodium'); ?>
		<?php echo $form->textField($model,'sodium',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'suger'); ?>
		<?php echo $form->textField($model,'suger'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vit_a_iu'); ?>
		<?php echo $form->textField($model,'vit_a_iu'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vit_a_re'); ?>
		<?php echo $form->textField($model,'vit_a_re'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'thiamin'); ?>
		<?php echo $form->textField($model,'thiamin'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'flavin'); ?>
		<?php echo $form->textField($model,'flavin'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'niacin'); ?>
		<?php echo $form->textField($model,'niacin'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vit_c'); ?>
		<?php echo $form->textField($model,'vit_c'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vit_e'); ?>
		<?php echo $form->textField($model,'vit_e'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'refuse_pct'); ?>
		<?php echo $form->textField($model,'refuse_pct'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updated_by'); ?>
		<?php echo $form->textField($model,'updated_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_at'); ?>
		<?php echo $form->textField($model,'created_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_by'); ?>
		<?php echo $form->textField($model,'created_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updated_at'); ?>
		<?php echo $form->textField($model,'updated_at'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->