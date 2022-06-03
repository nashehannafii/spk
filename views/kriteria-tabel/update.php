<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\kriteriaTabel */

$this->title = 'Update Kriteria Tabel: ' . $model->id_kriteria;
$this->params['breadcrumbs'][] = ['label' => 'Kriteria Tabels', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kriteria, 'url' => ['view', 'id_kriteria' => $model->id_kriteria]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kriteria-tabel-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
