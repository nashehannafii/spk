<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BarangTabelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Barang Tabels';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jumbotron bg-transparent">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Barang Tabel', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'nama_barang',
            'keuntungan_nilai',
            'penjualan_nilai',
            'harga_nilai',
            // [
            //     'class' => ActionColumn::className(),
            //     'urlCreator' => function ($action, BarangTabel $model, $key, $index, $column) {
            //         return Url::toRoute([$action, 'id' => $model->id]);
            //      }
            // ],
        ],
    ]); ?>


</div>