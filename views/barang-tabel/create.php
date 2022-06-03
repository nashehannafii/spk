<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BarangTabel */

$this->title = 'Create Barang Tabel';
$this->params['breadcrumbs'][] = ['label' => 'Barang Tabels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="barang-tabel-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
