<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Посты'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'Список постов', 'url'=>array('index')),
	array('label'=>'Изменить пост', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить пост', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>View Post #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'content',
		'author_id',
		'created_at',
		'updated_at',
	),
)); ?>
