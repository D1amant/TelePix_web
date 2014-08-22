<?php
/* @var $this EstabelecimentoController */
/* @var $model Estabelecimento */

$this->breadcrumbs=array(
	'Estabelecimentos'=>array('index'),
	$model->pkCodEstabelecimento=>array('view','id'=>$model->pkCodEstabelecimento),
	'Update',
);

$this->menu=array(
	array('label'=>'List Estabelecimento', 'url'=>array('index')),
	array('label'=>'Create Estabelecimento', 'url'=>array('create')),
	array('label'=>'View Estabelecimento', 'url'=>array('view', 'id'=>$model->pkCodEstabelecimento)),
	array('label'=>'Manage Estabelecimento', 'url'=>array('admin')),
);
?>

<h1>Update Estabelecimento <?php echo $model->pkCodEstabelecimento; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>