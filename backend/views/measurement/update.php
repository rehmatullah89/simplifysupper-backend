<?php
/* @var $this MeasurementController */
/* @var $model Measurement */

$this->breadcrumbs=array(
	'Measurements'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Measurement', 'url'=>array('index')),
	array('label'=>'Create Measurement', 'url'=>array('create')),
	array('label'=>'View Measurement', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Measurement', 'url'=>array('admin')),
);
?>

<h1>Update Measurement <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>