<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\tinymce\TinyMce;

?>

<div class="maindescription-form">

    <?php $form = ActiveForm::begin(); ?>

    <?=
    $form->field($model, 'introText')->textarea(['maxlength' => 150, 'rows' => 3])->widget(TinyMce::className(), [
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

    <?= $form->field($model, 'videoURL')->textInput(['maxlength' => true]) ?>

    <?=
    $form->field($model, 'videoText')->textarea(['maxlength' => 150, 'rows' => 10])->widget(TinyMce::className(), [
        'options' => ['rows' => 9],
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

    <?= $form->field($model, 'show')->checkbox()?>


    <div class="form-group">
        <?= Html::submitButton(!$model['id'] ? 'Створити' : 'Зберегти зміни', ['class' => !$model['id'] ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
