<?php

use yii\helpers\Html;




$this->title = 'Створити тип закладу де поїсти';
$this->params['breadcrumbs'][] = ['label' => 'Типи закладів де поїсти', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cafetype-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $form_main,

    ]) ?>

</div>
