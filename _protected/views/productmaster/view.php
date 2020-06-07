<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Productmaster */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Productmasters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="productmaster-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'category_id',
            'offer_id',
            'name',
            'description',
            'base_quantity',
            'base_unit',
            'mrp',
            'discounted_percentage',
            'discounted_amount',
            'selling_amount',
            'image',
            'created_on',
            'status',
            'vendor_id',
            'rank',
        ],
    ]) ?>

</div>
