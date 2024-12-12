<?php
/* @var $this CategoryController */
/* @var $model Category */

$this->breadcrumbs=array(
	'Categories'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Category', 'url'=>array('index')),
	array('label'=>'Create Category', 'url'=>array('create')),
        array('label'=>'Create Sub-Category', 'url'=>array('csubcat', 'id'=>$model->id)),
	array('label'=>'Update Category', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Category', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Category', 'url'=>array('admin')),
);
?>

<h1>View Category #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'cat_name',
		'cat_desc',
		'cat_type',
		'parent',
		'photo',
		'video',
		'status',
		'seo_url',
		'meta_keyword',
		'meta_title',
		'meta_desc',
		'rating',
		'rater',
		'viewed',
		'created_by',
		'created_at',
		'modified_at',
		'modified_by',
	),
)); ?>
