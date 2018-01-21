<?php 
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$form = ActiveForm::begin();
echo $form->field($model,'name');
echo $form->field($model,'email');
echo $form->field($model,'comment')->textarea();
echo Html::submitButton('simpan',['class'=>'btn btn-primary']);
ActiveForm::end();
 ?>