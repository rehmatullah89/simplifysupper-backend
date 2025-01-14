<?php
/* @var $this RecipeController */
/* @var $model Recipe */

$this->breadcrumbs=array(
	'Recipes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Recipe', 'url'=>array('index')),
	array('label'=>'Create Recipe', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('recipe-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Recipes</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'recipe-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'title',
		'meal_for_breakfast',
		'meal_for_lunch',
		'meal_for_dinner',
		'photo',
		/*
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
		'photos',
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
