<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->memberid,
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'Update User', 'url'=>array('update', 'id'=>$model->memberid)),
	array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->memberid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h1>View User #<?php echo $model->memberid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'memberid',
		'firstname',
		'lastname',
		'email',
		'username',
		'password',
		'about',
		'photo',
		'address',
		'city',
		'state',
		'zip',
		'country',
		'phone',
		'dob',
		'age',
		'gender',
		'status',
		'signed_up',
		'recipes',
		'articles',
		'photos',
		'videos',
		'testimonials',
		'friends',
		'viewed',
		'spclicks',
		'spviews',
		'howto',
		'meta_keywords',
		'meta_title',
		'meta_desc',
	),
)); ?>
