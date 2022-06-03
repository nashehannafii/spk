<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\kriteriaTabelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kriteria Tabels';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jumbotron bg-transparent">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Buat Bobot Untung', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_kriteria',
            'nama_kriteria',
            'kriteria',
            'bobot',
            // [
            //     'class' => ActionColumn::className(),
            //     'urlCreator' => function ($action, kriteriaTabel $model, $key, $index, $column) {
            //         return Url::toRoute([$action, 'id_kriteria' => $model->id_kriteria]);
            //      }
            // ],
        ],
    ]); ?>


</div>
