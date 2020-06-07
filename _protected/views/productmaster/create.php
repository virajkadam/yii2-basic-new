<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Productmaster */

$this->title = 'Create Productmaster';
$this->params['breadcrumbs'][] = ['label' => 'Productmasters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productmaster-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
