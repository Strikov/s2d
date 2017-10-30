<?php

use yii\helpers\Html;


$this->title = 'Редагувати заклад де поїсти: ' . $form_main->name;
$this->params['breadcrumbs'][] = ['label' => 'Де поїсти', 'url' => ['index']];

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hotel-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $form_main,
        'categories'=>$categories,
    ]) ?>

</div>
