<?php

use yii\helpers\Html;




$this->title = 'Додати подiю';
$this->params['breadcrumbs'][] = ['label' => 'Події', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="event-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $form_main,
        'categories'=>$categories,
        'cities'=>$cities
    ]) ?>

</div>
