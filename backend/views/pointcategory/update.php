<?php

use yii\helpers\Html;


$this->title = 'Редагування категорії пам\'яток: ' . $form_main->name;
$this->params['breadcrumbs'][] = ['label' => 'Категорії пам\'яток', 'url' => ['index']];

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="event-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $form_main,
    ]) ?>

</div>
