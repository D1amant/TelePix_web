<?php
/* @var $this EstabelecimentoController */
/* @var $data Estabelecimento */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pkCodEstabelecimento')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pkCodEstabelecimento), array('view', 'id'=>$data->pkCodEstabelecimento)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cnpj')); ?>:</b>
	<?php echo CHtml::encode($data->cnpj); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
	<?php echo CHtml::encode($data->tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descricao')); ?>:</b>
	<?php echo CHtml::encode($data->descricao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('regiao')); ?>:</b>
	<?php echo CHtml::encode($data->regiao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nomeFantazia')); ?>:</b>
	<?php echo CHtml::encode($data->nomeFantazia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('imagem')); ?>:</b>
	<?php echo CHtml::encode($data->imagem); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('ceps_entrega')); ?>:</b>
	<?php echo CHtml::encode($data->ceps_entrega); ?>
	<br />

	*/ ?>

</div>