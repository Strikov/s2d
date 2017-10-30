<?php

use yii\helpers\Html;




$this->title = 'Створити категорію пам\'яток';
$this->params['breadcrumbs'][] = ['label' => 'Категорії пам\'яток', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pointcategory-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $form_main,

    ]) ?>

</div>
