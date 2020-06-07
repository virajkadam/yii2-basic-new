<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\productmastersearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Productmasters';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productmaster-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Productmaster', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'category_id',
            'offer_id',
            'name',
            'description',
            //'base_quantity',
            //'base_unit',
            //'mrp',
            //'discounted_percentage',
            //'discounted_amount',
            //'selling_amount',
            //'image',
            //'created_on',
            //'status',
            //'vendor_id',
            //'rank',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
