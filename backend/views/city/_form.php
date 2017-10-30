<?php

use dosamigos\tinymce\TinyMce;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ip') ?>

    <?= $form->field($model, 'name') ?>

    <?=
    $form->field($model, 'descriptionCity')->textarea(['maxlength' => 150, 'rows' => 3])->widget(TinyMce::className(), [
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

    <?= $form->field($model, 'image')->fileInput() ?>

    <?php if($model->id) echo Html::img($model->image, ['alt' => 'My logo']); ?>

    <?= $form->field($model, 'panorama')->fileInput() ?>

    <?php if($model->id) Html::img($model->panorama, ['alt' => 'My logo']); ?>

    <div class="form-group">
        <?= Html::submitButton($model->id == null ? 'Створити' : 'Зберегти зміни', ['class' => $model->id == null ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
