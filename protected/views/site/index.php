<?php
$this->pageTitle=Yii::app()->name . ' - Блог';
$this->breadcrumbs=array('Блог',);

foreach ($posts as $post) {
    echo '<h2>' . CHtml::encode($post->title) . '</h2>';
    echo '<p>' . CHtml::encode($post->content) . '</p>';
    echo '<p>Опубликовано: ' . date('d.m.Y H:i', strtotime($post->created_at)) . '</p>';
    echo '<hr>';
}

$this->widget('CLinkPager', array(
    'pages' => $pages,
));
?>
