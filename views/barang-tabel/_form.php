<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BarangTabel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jumbotron bg-transparent">
    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <tr>
                <th style="text-align: center" class="alert alert-info" colspan="6"><strong>Tabel Bobot Nilai</strong></th>
            </tr>

            <tr>
                <th style="text-align: center" rowspan="1" colspan="2">Penjualan</th>
                <th style="text-align: center" rowspan="1" colspan="2">Keuntungan</th>
                <th style="text-align: center" rowspan="1" colspan="2">Harga</th>
            </tr>
            <tr>
                <th style="text-align: center" rowspan="2">Keterangan</th>
                <th style="text-align: center" rowspan="2">Bobot</th>
                <th style="text-align: center" rowspan="2">Keterangan</th>
                <th style="text-align: center" rowspan="2">Bobot</th>
                <th style="text-align: center" rowspan="2">Keterangan</th>
                <th style="text-align: center" rowspan="2">Bobot</th>
            </tr>
        </table>
    </div>


    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_barang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keuntungan_nilai')->textInput() ?>

    <?= $form->field($model, 'penjualan_nilai')->textInput() ?>

    <?= $form->field($model, 'harga_nilai')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>