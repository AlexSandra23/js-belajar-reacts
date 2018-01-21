<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\DataIndukSiswa */

$this->title = Yii::t('app', 'Create Data Induk Siswa');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Data Induk Siswas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-induk-siswa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
