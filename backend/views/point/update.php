<?php

use yii\helpers\Html;


$this->title = 'Редагування екскурсії: ' . $form_main->name;
$this->params['breadcrumbs'][] = ['label' => 'Пам\'ятки', 'url' => ['index']];

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="point-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $form_main,
        'categories'=>$categories,
    ]) ?>

</div>
