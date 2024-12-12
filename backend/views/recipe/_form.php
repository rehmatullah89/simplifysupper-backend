<?php
/* @var $this RecipeController */
/* @var $model Recipe */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'recipe-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); 
?>

<?php
function myfunc($category){

$var = "<select name='element'>";
foreach($category as $row)
        {
            /*** create the options ***/
            $var .= '<option value="'.$row.'"> '.$row.' </option>';
        }
    
$var .= "</select>";
return $var;
}

$abc = myfunc($category);
// echo $abc;
?>

		<script type="text/javascript">
		$(document).ready(function(){		
				
				$('.del').live('click',function(){
					$(this).parent().parent().remove();
				});
				
				$('.add').live('click',function(){
					$(this).val('Delete');
					$(this).attr('class','del');
					var appendTxt = "<tr><td><?php echo $abc;?></td> <td><input type='text' name='input_box_two[]' /></td> <td><input type='button' class='add' value='Add More' /></td></tr>";
					$("tr:last").after(appendTxt);			
				});        
			});
		</script>
	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
 <?php 
//echo "<pre>"; 
 // print_r($category);
// exit;
?>
	<div class="row">
	<?php echo $form->labelEx($model,'Categories'); ?>
		<?php 
$this->widget(
'bootstrap.widgets.TbSelect2',
array(
'asDropDownList' => false,
'name' => 'cat_names',
'options' => array(
'tags' => $category,
'placeholder' => 'Select categories for the recipe!',
'width' => '28%',
'tokenSeparators' => array(',', ' '),
'active' => array('selected' => true,)
            
)
)
);
		?>
	</div></br>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div></br>

	<div class="row">
		<div class="span1">
		<?php echo $form->checkBox($model,'meal_for_breakfast'); ?>
		<?php echo $form->labelEx($model,'meal_for_breakfast'); ?>
		<?php echo $form->error($model,'meal_for_breakfast'); ?>
		</div>
		
		<div class="span1">
		<?php echo $form->checkBox($model,'meal_for_lunch'); ?>
		<?php echo $form->labelEx($model,'meal_for_lunch'); ?>
		<?php echo $form->error($model,'meal_for_lunch'); ?>
		</div>
		
		<div class="span1">
		<?php echo $form->checkBox($model,'meal_for_dinner'); ?>
		<?php echo $form->labelEx($model,'meal_for_dinner'); ?>
		<?php echo $form->error($model,'meal_for_dinner'); ?>
		</div>
	</div></br>

	<div class="row">
		<?php echo $form->labelEx($model,'photo'); ?>
		<?php echo CHtml::activeFileField($model, 'photo'); ?>  
		<?php echo $form->error($model,'photo'); ?>
	</div></br>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'directions'); ?>
		<?php echo $form->textArea($model,'directions',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'directions'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nutritions'); ?>
		<?php echo $form->textArea($model,'nutritions',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'nutritions'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'recipe_type'); ?>
		<?php echo $form->dropDownList($model,'recipe_type', $model->getRecipeTypeOptions()); ?>
		<?php echo $form->error($model,'recipe_type'); ?>
	</div>

	
	<div class="row">
		<?php echo $form->checkBox($model,'sidedish'); ?>
		<?php echo $form->labelEx($model,'sidedish'); ?>
		<?php echo $form->error($model,'sidedish'); ?>
	</div></br>

	<div class="row">
		<?php echo $form->labelEx($model,'serving_size'); ?>
		<?php echo $form->textField($model,'serving_size'); ?>
		<?php echo $form->error($model,'serving_size'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->dropDownList($model,'status', $model->getRecipeStatusOptions()); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'videourl'); ?>
		<?php echo $form->textField($model,'videourl',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'videourl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'video'); ?>
		<?php echo $form->textArea($model,'video',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'video'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'meta_title'); ?>
		<?php echo $form->textField($model,'meta_title',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'meta_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'meta_keywords'); ?>
		<?php echo $form->textArea($model,'meta_keywords',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'meta_keywords'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'meta_desc'); ?>
		<?php echo $form->textArea($model,'meta_desc',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'meta_desc'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'owner_type'); ?>
		<?php echo $form->hiddenField($model,'owner_type',array('size'=>6,'maxlength'=>6)); ?>
		<?php //echo $form->error($model,'owner_type'); ?>
	</div>	
	
	<div class="row">
	<table id="options-table">					
			<tr>
				<td>Input-Box-One</td>
				<td>Input-Box-Two</td>
				<td>&nbsp;</td>
			</tr>                 
			<tr>
				<td><input type='text' name='input_box_one[]' /></td>
				<td><input type='text' name='input_box_two[]' /></td>
				<td><input type="button" class="add" value="Add More" /></td>
			</tr>
		</table>	
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
