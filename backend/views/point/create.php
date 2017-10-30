<?php

use yii\helpers\Html;




$this->title = 'Створити пам\'ятку';
$this->params['breadcrumbs'][] = ['label' => 'Пам\'ятки', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="point-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $form_main,
        'categories'=>$categories,

    ]) ?>

</div>
