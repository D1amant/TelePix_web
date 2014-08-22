<?php
/* @var $this EstabelecimentoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Estabelecimentos',
);

$this->menu=array(
	array('label'=>'Create Estabelecimento', 'url'=>array('create')),
	array('label'=>'Manage Estabelecimento', 'url'=>array('admin')),
);
?>

<h1>Estabelecimentos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
