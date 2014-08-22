<?php
/* @var $this EstabelecimentoController */
/* @var $model Estabelecimento */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'estabelecimento-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cnpj'); ?>
		<?php echo $form->textField($model,'cnpj',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'cnpj'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo'); ?>
		<?php echo $form->textField($model,'tipo',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descricao'); ?>
		<?php echo $form->textArea($model,'descricao',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'descricao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'regiao'); ?>
		<?php echo $form->textField($model,'regiao',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'regiao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nomeFantazia'); ?>
		<?php echo $form->textField($model,'nomeFantazia',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nomeFantazia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'imagem'); ?>
		<?php echo $form->textField($model,'imagem',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'imagem'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ceps_entrega'); ?>
		<?php echo $form->textField($model,'ceps_entrega',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ceps_entrega'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->