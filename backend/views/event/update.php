<?php

use yii\helpers\Html;


$this->title = 'Редагування подiї: ' . $form_main->name;
$this->params['breadcrumbs'][] = ['label' => 'Подiї', 'url' => ['index']];

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="event-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $form_main,
        'categories'=>$categories,
        'cities'=>$cities
    ]) ?>

</div>
