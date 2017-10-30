<?php

use yii\helpers\Html;

$this->title = 'Створити екскурсію';
$this->params['breadcrumbs'][] = ['label' => 'Екскурсії', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tour-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $tourForm,
        'cities'=> $cities,
        'points'=> $points,
        'types'=> $types,
        'categories'=> $categories,
    ]) ?>

</div>
