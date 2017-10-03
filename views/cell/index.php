<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CellSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cells';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cell-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cell', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'donorPack_id',
            'cellModel_id',
            'user_id',
            'cellStatus_id',
            // 'label',
            // 'lastTestCapacity_id',
            // 'lastTestImp_id',
            // 'lastTestVoltage_id',
            // 'Notes',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
