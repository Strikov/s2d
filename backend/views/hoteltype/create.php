<?php

use yii\helpers\Html;




$this->title = 'Створити тип закладу де відпочити';
$this->params['breadcrumbs'][] = ['label' => 'Типи закладів де відпочити', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hoteltype-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $form_main,

    ]) ?>

</div>
