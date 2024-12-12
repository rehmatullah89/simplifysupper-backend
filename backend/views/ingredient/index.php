<?php
/* @var $this IngredientController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ingredients',
);

$this->menu=array(
	array('label'=>'Create Ingredient', 'url'=>array('create')),
	array('label'=>'Manage Ingredient', 'url'=>array('admin')),
);
?>

<h1>Ingredients</h1>

<?php //$this->widget('zii.widgets.CListView', array(
	//'dataProvider'=>$dataProvider,
	//'itemView'=>'_view',
//)); ?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'dataProvider'=>$dataProvider,
	'columns'=>array
    (
	array(
        'name'  => 'id',
        'value' => 'CHtml::link($data->id, Yii::app()->createUrl("ingredient/view/".$data->primaryKey))',
		'type'  => 'raw',
		),
		'ingredient',
		'measure_unit',
		'catid',
		'ingweight',
		//'parent',
		'created_at',
		'created_by', 
	),
)); ?>