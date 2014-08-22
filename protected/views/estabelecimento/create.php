<?php
/* @var $this EstabelecimentoController */
/* @var $model Estabelecimento */

$this->breadcrumbs=array(
	'Estabelecimentos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Estabelecimento', 'url'=>array('index')),
	array('label'=>'Manage Estabelecimento', 'url'=>array('admin')),
);
?>

<h1>Create Estabelecimento</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>