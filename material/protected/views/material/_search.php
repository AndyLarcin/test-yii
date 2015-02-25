<?php
/* @var $this MaterialController */
/* @var $model Material */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'id'); ?>
<!--		--><?php //echo $form->textField($model,'id'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'name'); ?>
<!--		--><?php //echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'text'); ?>
<!--		--><?php //echo $form->textArea($model,'text',array('rows'=>6, 'cols'=>50)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'url'); ?>
<!--		--><?php //echo $form->textField($model,'url',array('size'=>60,'maxlength'=>255)); ?>
<!--	</div>-->

	<div class="row">
		<?php echo $form->label($model,'keywords'); ?>
		<?php echo $form->textField($model,'keywords',array('size'=>50,'maxlength'=>50)); ?>
	</div>

<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'descriptions'); ?>
<!--		--><?php //echo $form->textArea($model,'descriptions',array('rows'=>6, 'cols'=>50)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'shorpdescriptions'); ?>
<!--		--><?php //echo $form->textField($model,'shorpdescriptions',array('size'=>60,'maxlength'=>255)); ?>
<!--	</div>-->

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->