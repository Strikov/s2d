<?php

use yii\helpers\Html;


$this->title = 'Редагування типу закладів де поїсти: ' . $form_main->name;
$this->params['breadcrumbs'][] = ['label' => 'Типи закладів де поїсти', 'url' => ['index']];

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cafetype-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $form_main,
    ]) ?>

</div>
