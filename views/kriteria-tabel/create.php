<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\kriteriaTabel */

$this->title = 'Create Kriteria Tabel';
$this->params['breadcrumbs'][] = ['label' => 'Kriteria Tabels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kriteria-tabel-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
