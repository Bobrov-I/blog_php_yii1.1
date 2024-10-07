<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Пост'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Обновить',
);

$this->menu=array(
	array('label'=>'Список постов', 'url'=>array('index')),
	array('label'=>'Назад', 'url'=>array('view', 'id'=>$model->id)),
);
?>

<h1>Update Post <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>