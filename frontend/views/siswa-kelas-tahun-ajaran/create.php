<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\SiswaKelasTahunAjaran */

$this->title = Yii::t('app', 'Create Siswa Kelas Tahun Ajaran');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Siswa Kelas Tahun Ajarans'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="siswa-kelas-tahun-ajaran-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
