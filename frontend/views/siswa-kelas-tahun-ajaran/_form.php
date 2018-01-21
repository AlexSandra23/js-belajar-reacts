<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\SiswaKelasTahunAjaran */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="siswa-kelas-tahun-ajaran-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_data_induk_siswa')->textInput() ?>

    <?= $form->field($model, 'id_kelas_tahun_ajaran')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
