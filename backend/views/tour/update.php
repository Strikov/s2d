<?php

use yii\helpers\Html;


$this->title = 'Редагування екскурсії';
$this->params['breadcrumbs'][] = ['label' => 'Екскурсії', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $tourForm->name, 'url' => ['view', 'id' => $tourForm->id]];
$this->params['breadcrumbs'][] = 'Редагування екскурсії';
?>
<div class="tour-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $tourForm,
        'cities'=>$cities,
        'points'=>$points,
        'types'=>$types,
        'categories'=>$categories,
    ]) ?>

</div>
