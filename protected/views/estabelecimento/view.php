<?php
/* @var $this EstabelecimentoController */
/* @var $model Estabelecimento */

$this->breadcrumbs=array(
	'Estabelecimentos'=>array('index'),
	$model->pkCodEstabelecimento,
);

$this->menu=array(
	array('label'=>'List Estabelecimento', 'url'=>array('index')),
	array('label'=>'Create Estabelecimento', 'url'=>array('create')),
	array('label'=>'Update Estabelecimento', 'url'=>array('update', 'id'=>$model->pkCodEstabelecimento)),
	array('label'=>'Delete Estabelecimento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pkCodEstabelecimento),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Estabelecimento', 'url'=>array('admin')),
);
?>

<h1>View Estabelecimento #<?php echo $model->pkCodEstabelecimento; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pkCodEstabelecimento',
		'cnpj',
		'tipo',
		'descricao',
		'regiao',
		'nomeFantazia',
		'imagem',
		'ceps_entrega',
	),
)); ?>
