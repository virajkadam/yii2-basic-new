<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Testmaster */

$this->title = 'Create Testmaster';
$this->params['breadcrumbs'][] = ['label' => 'Testmasters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="testmaster-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
