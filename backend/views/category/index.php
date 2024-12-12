<?php
/* @var $this CategoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Categories',
);

$this->menu=array(
	array('label'=>'Create Category', 'url'=>array('create')),
	array('label'=>'Manage Category', 'url'=>array('admin')),
);
?>

<h1>Categories</h1>

<?php // $this->widget('zii.widgets.CListView', array(
//	'dataProvider'=>$dataProvider,
//	'itemView'=>'_view',
//)); ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'dataProvider'=>$dataProvider,
	'columns'=>array
    (
	array(
        'name'  => 'id',
        'value' => 'CHtml::link($data->id, Yii::app()->createUrl("category/view/".$data->primaryKey))',
		'type'  => 'raw',
		),
		'cat_name',
		'cat_desc',
		'cat_type',
		'status',
		'parent',
		'created_at',
		'created_by', 
	),
)); ?>