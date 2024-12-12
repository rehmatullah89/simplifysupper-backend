<?php
/* @var $this IngredientController */
/* @var $data Ingredient */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('barcode')); ?>:</b>
	<?php echo CHtml::encode($data->barcode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ingredient')); ?>:</b>
	<?php echo CHtml::encode($data->ingredient); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pantry')); ?>:</b>
	<?php echo CHtml::encode($data->pantry); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('catid')); ?>:</b>
	<?php echo CHtml::encode($data->catid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('measure_unit')); ?>:</b>
	<?php echo CHtml::encode($data->measure_unit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ingweight')); ?>:</b>
	<?php echo CHtml::encode($data->ingweight); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('weight')); ?>:</b>
	<?php echo CHtml::encode($data->weight); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('water')); ?>:</b>
	<?php echo CHtml::encode($data->water); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kcal')); ?>:</b>
	<?php echo CHtml::encode($data->kcal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('protein')); ?>:</b>
	<?php echo CHtml::encode($data->protein); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fat')); ?>:</b>
	<?php echo CHtml::encode($data->fat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sat_fat')); ?>:</b>
	<?php echo CHtml::encode($data->sat_fat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mono_unsat_fat')); ?>:</b>
	<?php echo CHtml::encode($data->mono_unsat_fat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('poly_unsat_fat')); ?>:</b>
	<?php echo CHtml::encode($data->poly_unsat_fat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cholesterol')); ?>:</b>
	<?php echo CHtml::encode($data->cholesterol); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('carbohydrate')); ?>:</b>
	<?php echo CHtml::encode($data->carbohydrate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dietry_fiber')); ?>:</b>
	<?php echo CHtml::encode($data->dietry_fiber); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calcium')); ?>:</b>
	<?php echo CHtml::encode($data->calcium); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iron')); ?>:</b>
	<?php echo CHtml::encode($data->iron); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('potassium')); ?>:</b>
	<?php echo CHtml::encode($data->potassium); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sodium')); ?>:</b>
	<?php echo CHtml::encode($data->sodium); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('suger')); ?>:</b>
	<?php echo CHtml::encode($data->suger); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vit_a_iu')); ?>:</b>
	<?php echo CHtml::encode($data->vit_a_iu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vit_a_re')); ?>:</b>
	<?php echo CHtml::encode($data->vit_a_re); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('thiamin')); ?>:</b>
	<?php echo CHtml::encode($data->thiamin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('flavin')); ?>:</b>
	<?php echo CHtml::encode($data->flavin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('niacin')); ?>:</b>
	<?php echo CHtml::encode($data->niacin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vit_c')); ?>:</b>
	<?php echo CHtml::encode($data->vit_c); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vit_e')); ?>:</b>
	<?php echo CHtml::encode($data->vit_e); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('refuse_pct')); ?>:</b>
	<?php echo CHtml::encode($data->refuse_pct); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_by')); ?>:</b>
	<?php echo CHtml::encode($data->updated_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />

	*/ ?>

</div>