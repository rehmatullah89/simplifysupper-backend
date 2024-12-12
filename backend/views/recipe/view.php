<?php
/* @var $this RecipeController */
/* @var $model Recipe */

$this->breadcrumbs=array(
	'Recipes'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Recipe', 'url'=>array('index')),
	array('label'=>'Create Recipe', 'url'=>array('create')),
	array('label'=>'Update Recipe', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Recipe', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Recipe', 'url'=>array('admin')),
);
?>

<h1>View Recipe #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'meal_for_breakfast',
		'meal_for_lunch',
		'meal_for_dinner',
		'photo',
		'description',
		'directions',
		'nutritions',
		'recipe_type',
		'meta_keywords',
		'meta_title',
		'meta_desc',
		'sidedish',
		'serving_size',
		'video',
		'videourl',
		'status',
		//'photos',
		'featured',
		'rating',
		'viewed',
		'owner_type',
		'created_by',
		'created_at',
		'modified_at',
		'modified_by',
		'approved_by',
		'approved_on',
	),
)); ?>
