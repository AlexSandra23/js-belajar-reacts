<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\TahunAjaran */

$this->title = Yii::t('app', 'Create Tahun Ajaran');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tahun Ajarans'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tahun-ajaran-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
