<?php
/* @var $this IngredientController */
/* @var $model Ingredient */

$this->breadcrumbs=array(
	'Ingredients'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Ingredient', 'url'=>array('index')),
	array('label'=>'Create Ingredient', 'url'=>array('create')),
	array('label'=>'Update Ingredient', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Ingredient', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ingredient', 'url'=>array('admin')),
);
?>

<h1>View Ingredient #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'barcode',
		'ingredient',
		'pantry',
		'catid',
		'measure_unit',
		'ingweight',
		'weight',
		'water',
		'kcal',
		'protein',
		'fat',
		'sat_fat',
		'mono_unsat_fat',
		'poly_unsat_fat',
		'cholesterol',
		'carbohydrate',
		'dietry_fiber',
		'calcium',
		'iron',
		'potassium',
		'sodium',
		'suger',
		'vit_a_iu',
		'vit_a_re',
		'thiamin',
		'flavin',
		'niacin',
		'vit_c',
		'vit_e',
		'refuse_pct',
		'updated_by',
		'created_at',
		'created_by',
		'updated_at',
	),
)); ?>
