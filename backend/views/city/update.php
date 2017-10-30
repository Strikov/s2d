<?php

use yii\helpers\Html;

$this->title = 'Редагувати мiсто: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Мiста', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sightseeing-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
