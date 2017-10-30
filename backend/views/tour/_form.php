<?php

use dosamigos\tinymce\TinyMce;
use kartik\select2\Select2;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="tour-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 40]) ?>
    <?= $form->field($model, 'city')->dropDownList($cities) ?>
    <?= $form->field($model, 'type')->dropDownList($types) ?>
    <?= $form->field($model, 'category')->dropDownList($categories) ?>
    <?=
    $form->field($model, 'description')->textarea(['maxlength' => 150, 'rows' => 3])->widget(TinyMce::className(), [
        'options' => ['rows' => 3],
        'language'=>'uk',
        'clientOptions' => [
            'plugins' => [
                "advlist autolink lists link charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste image"
            ],
            'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        ]
    ])
    ?>
    <?php if($model->id) echo Html::img($model->image, ['alt' => 'My logo']); ?>
    <?= $form->field($model, 'image')->fileInput() ?>
    <?= $form->field($model, 'points')->widget(Select2::classname(), [
        'name' => 'points',
        'data' => $points,
        'options' => [
            'placeholder' => 'Виберіть точки екскурсії...',
            'multiple' => true
        ],
    ]) ?>
    <?= $form->field($model, 'tour3d')->fileInput() ?>
    <div class="form-group">
        <?= Html::submitButton(!$model['id'] ? 'Створити' : 'Зберегти зміни', ['class' => !$model['id'] ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
