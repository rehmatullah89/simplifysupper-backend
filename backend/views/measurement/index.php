<?php
/* @var $this MeasurementController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Measurements',
);

$this->menu=array(
	array('label'=>'Create Measurement', 'url'=>array('create')),
	array('label'=>'Manage Measurement', 'url'=>array('admin')),
);
?>

<h1>Measurements</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'dataProvider'=>$dataProvider,
	'columns'=>array
    (
	array(
        'name'  => 'id',
        'value' => 'CHtml::link($data->id, Yii::app()->createUrl("measurement/view/".$data->primaryKey))',
		'type'  => 'raw',
		),
		'measurement',
		'weight',
		'unit',
	),
)); ?>