<?php
/* @var $this PostController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Посты',
);

$this->menu=array(
	array('label'=>'Создать пост', 'url'=>array('create')),
);
?>

<h1>Мои посты</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
