<?php
/* @var $this CategoryController */
/* @var $model Category */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'category-form',
	'enableAjaxValidation'=>false,
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

        <div class="row">
		<?php echo $form->labelEx($model,'cat_type'); ?>
		<?php echo $form->dropDownList($model,'cat_type', $model->getCatTypeOptions()); ?>
		<?php echo $form->error($model,'cat_type'); ?>
	</div>
        
	<div class="row">
		<?php echo $form->labelEx($model,'cat_name'); ?>
		<?php echo $form->textField($model,'cat_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'cat_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cat_desc'); ?>
		<?php echo $form->textArea($model,'cat_desc',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'cat_desc'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'parent'); ?>
		<?php //echo $form->textField($model,'parent'); ?>
		<?php //echo $form->error($model,'parent'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'photo'); ?>
		<?php echo CHtml::activeFileField($model, 'photo'); ?>  
		<?php echo $form->error($model,'photo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'video'); ?>
		<?php echo $form->textArea($model,'video',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'video'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->dropDownList($model,'status', $model->getCatStatusOptions()); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seo_url'); ?>
		<?php echo $form->textArea($model,'seo_url',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'seo_url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'meta_keyword'); ?>
		<?php echo $form->textArea($model,'meta_keyword',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'meta_keyword'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'meta_title'); ?>
		<?php echo $form->textArea($model,'meta_title',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'meta_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'meta_desc'); ?>
		<?php echo $form->textArea($model,'meta_desc',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'meta_desc'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'rating'); ?>
		<?php //echo $form->textField($model,'rating'); ?>
		<?php //echo $form->error($model,'rating'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'rater'); ?>
		<?php //echo $form->textField($model,'rater',array('size'=>20,'maxlength'=>20)); ?>
		<?php //echo $form->error($model,'rater'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'viewed'); ?>
		<?php //echo $form->textField($model,'viewed',array('size'=>20,'maxlength'=>20)); ?>
		<?php //echo $form->error($model,'viewed'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'created_by'); ?>
		<?php //echo $form->textField($model,'created_by',array('size'=>20,'maxlength'=>20)); ?>
                <?php echo $form->hiddenField($model,'created_by',array('value'=>'0')); ?>
		<?php //echo $form->error($model,'created_by'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'created_at'); ?>
		<?php //echo $form->textField($model,'created_at'); ?>
		<?php //echo $form->error($model,'created_at'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'modified_at'); ?>
		<?php //echo $form->textField($model,'modified_at'); ?>
		<?php //echo $form->error($model,'modified_at'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'modified_by'); ?>
		<?php //echo $form->textField($model,'modified_by',array('size'=>20,'maxlength'=>20)); ?>
		<?php //echo $form->error($model,'modified_by'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class' => 'btn btn-secondary')); ?>
            <?php echo CHtml::submitButton('Cancel', array('submit' => array('/category/index/' . Yii::app()->user->getState('__userid')), 'class' => 'btn btn-secondary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->