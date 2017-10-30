<?php

use yii\helpers\Html;


$this->title = 'Редагування головного опису';
$this->params['breadcrumbs'][] = ['label' => 'Головний опис', 'url' => ['index']];

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="maindescription-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $form_main,
    ]) ?>

</div>
