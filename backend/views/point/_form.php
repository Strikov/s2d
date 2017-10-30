<?php

use dosamigos\tinymce\TinyMce;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

?>

<div class="point-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 40]) ?>
    <?=
    $form->field($model, 'descriptionPoint')->textarea(['maxlength' => 900])->widget(TinyMce::className(), [
        'options' => ['rows' => 10],
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
    <?=
    $form->field($model, 'shortDescriptionPoint')->textarea(['maxlength' => 100])->widget(TinyMce::className(), [
        'options' => ['rows' => 5],
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
    <?= $form->field($model, 'latitude')->textInput(['maxlength' => 40]) ?>
    <?= $form->field($model, 'longtitude')->textInput(['maxlength' => 40]) ?>
    <?= $form->field($model, 'image')->fileInput() ?>
    <?php if($model->id) echo Html::img($model->image, ['alt' => 'My logo']); ?>
    <?= $form->field($model, 'panorama')->fileInput() ?>
    <?php if($model->id) echo Html::img($model->panorama, ['alt' => 'My logo']); ?>
<!--    --><?//= $form->field($model, 'category')->widget(Select2::classname(), [
//        'name' => 'category',
//        'data' => $categories,
//        'options' => [
//            'placeholder' => 'Виберіть категорію...',
//            'multiple' => true
//        ],
//    ]) ?>

    <?= $form->field($model, 'category')->dropDownList($categories); ?>
    <div class="form-group">
        <?= Html::submitButton(!$model['id'] ? 'Створити' : 'Зберегти зміни', ['class' => !$model['id'] ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
