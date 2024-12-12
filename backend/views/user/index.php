<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Users',
);

$this->menu=array(
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h1>Users</h1>

<?php 
// $this->widget('zii.widgets.CListView', array(
	// 'dataProvider'=>$dataProvider,
	// 'itemView'=>'_view',
// )); ?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'dataProvider'=>$dataProvider,
	'columns'=>array
    (
	array(
        'name'  => 'memberid',
        'value' => 'CHtml::link($data->memberid, Yii::app()->createUrl("user/view/".$data->primaryKey))',
		'type'  => 'raw',
		),
		'firstname',
		'lastname',
		'usertype',
		'email',
		//'username',
		'signed_up',
		'status', 
	),
)); ?>