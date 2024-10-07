<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Пост'=>array('index'),
	'Создать',
);

$this->menu=array(
	array('label'=>'Список постов', 'url'=>array('index')),
);
?>

<h1>Create Post</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>