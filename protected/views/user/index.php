<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Users',
);

$this->menu=array(
	array('label'=>'Create User', 'url'=>array('create'),'visible'=>(Yii::app()->user->name == 'admin')),
	array('label'=>'Manage User', 'url'=>array('admin'),'visible'=>(Yii::app()->user->name == 'admin')),
);
?>

<h1>Users</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
