<?php
/* @var $this CategoryController */
/* @var $model Category */

$this->breadcrumbs=array(
	'Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Category', 'url'=>array('index')),
	array('label'=>'Manage Category', 'url'=>array('admin')),
);
?>

<h1>Create Sub-Category</h1>

<?php echo $this->renderPartial('_form2', array('model'=>$model, 'id'=>$model->id,'subcategory'=>$subcategory)); ?>