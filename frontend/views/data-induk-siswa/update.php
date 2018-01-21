<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\DataIndukSiswa */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Data Induk Siswa',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Data Induk Siswas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="data-induk-siswa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
