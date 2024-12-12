<?php
/* @var $this IngredientController */
/* @var $model Ingredient */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ingredient-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'barcode'); ?>
		<?php echo $form->textField($model,'barcode',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'barcode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ingredient'); ?>
		<?php echo $form->textField($model,'ingredient',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ingredient'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pantry'); ?>
		<?php echo $form->checkBox($model,'pantry'); ?>
		<?php echo $form->error($model,'pantry'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'catid'); ?>
		<?php echo $form->dropDownList($model,'catid', CHtml::listData(Category::model()->findAll('cat_type = "Ingredient"'), 'id', 'cat_name'), array('empty'=>'select Type')); ?>
		<?php echo $form->error($model,'catid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'measure_unit'); ?>
		<?php echo $form->dropDownList($model,'measure_unit', $model->getWeightTypeOptions()); ?>
		<?php echo $form->error($model,'measure_unit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ingweight'); ?>
		<?php echo $form->textField($model,'ingweight'); ?>
		<?php echo $form->error($model,'ingweight'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'weight'); ?>
		<?php echo $form->textField($model,'weight'); ?>
		<?php echo $form->error($model,'weight'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'water'); ?>
		<?php echo $form->textField($model,'water'); ?>
		<?php echo $form->error($model,'water'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kcal'); ?>
		<?php echo $form->textField($model,'kcal'); ?>
		<?php echo $form->error($model,'kcal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'protein'); ?>
		<?php echo $form->textField($model,'protein'); ?>
		<?php echo $form->error($model,'protein'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fat'); ?>
		<?php echo $form->textField($model,'fat'); ?>
		<?php echo $form->error($model,'fat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sat_fat'); ?>
		<?php echo $form->textField($model,'sat_fat'); ?>
		<?php echo $form->error($model,'sat_fat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mono_unsat_fat'); ?>
		<?php echo $form->textField($model,'mono_unsat_fat'); ?>
		<?php echo $form->error($model,'mono_unsat_fat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'poly_unsat_fat'); ?>
		<?php echo $form->textField($model,'poly_unsat_fat'); ?>
		<?php echo $form->error($model,'poly_unsat_fat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cholesterol'); ?>
		<?php echo $form->textField($model,'cholesterol'); ?>
		<?php echo $form->error($model,'cholesterol'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'carbohydrate'); ?>
		<?php echo $form->textField($model,'carbohydrate'); ?>
		<?php echo $form->error($model,'carbohydrate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dietry_fiber'); ?>
		<?php echo $form->textField($model,'dietry_fiber'); ?>
		<?php echo $form->error($model,'dietry_fiber'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calcium'); ?>
		<?php echo $form->textField($model,'calcium'); ?>
		<?php echo $form->error($model,'calcium'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'iron'); ?>
		<?php echo $form->textField($model,'iron'); ?>
		<?php echo $form->error($model,'iron'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'potassium'); ?>
		<?php echo $form->textField($model,'potassium',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'potassium'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sodium'); ?>
		<?php echo $form->textField($model,'sodium',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'sodium'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'suger'); ?>
		<?php echo $form->textField($model,'suger'); ?>
		<?php echo $form->error($model,'suger'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vit_a_iu'); ?>
		<?php echo $form->textField($model,'vit_a_iu'); ?>
		<?php echo $form->error($model,'vit_a_iu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vit_a_re'); ?>
		<?php echo $form->textField($model,'vit_a_re'); ?>
		<?php echo $form->error($model,'vit_a_re'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'thiamin'); ?>
		<?php echo $form->textField($model,'thiamin'); ?>
		<?php echo $form->error($model,'thiamin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'flavin'); ?>
		<?php echo $form->textField($model,'flavin'); ?>
		<?php echo $form->error($model,'flavin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'niacin'); ?>
		<?php echo $form->textField($model,'niacin'); ?>
		<?php echo $form->error($model,'niacin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vit_c'); ?>
		<?php echo $form->textField($model,'vit_c'); ?>
		<?php echo $form->error($model,'vit_c'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vit_e'); ?>
		<?php echo $form->textField($model,'vit_e'); ?>
		<?php echo $form->error($model,'vit_e'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'refuse_pct'); ?>
		<?php echo $form->textField($model,'refuse_pct'); ?>
		<?php echo $form->error($model,'refuse_pct'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'updated_by'); ?>
		<?php //echo $form->textField($model,'updated_by'); ?>
		<?php //echo $form->error($model,'updated_by'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'created_at'); ?>
		<?php //echo $form->textField($model,'created_at'); ?>
		<?php //echo $form->error($model,'created_at'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'created_by'); ?>
		<?php //echo $form->textField($model,'created_by'); ?>
		<?php //echo $form->error($model,'created_by'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'updated_at'); ?>
		<?php //echo $form->textField($model,'updated_at'); ?>
		<?php //echo $form->error($model,'updated_at'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->