<?php

use dosamigos\tinymce\TinyMce;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use kartik\time\TimePicker;

?>

<div class="event-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 40]) ?>
    <?=
    $form->field($model, 'descriptionEvent')->textarea(['maxlength' => 150, 'rows' => 3])->widget(TinyMce::className(), [
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
    <?= '<label class="control-label">Дата проведення</label>'; ?>
    <?=
        DatePicker::widget([
            'model' => $model,
            'attribute' => 'date',
            'pluginOptions' => [
                'autoclose' => true,
                'todayHighlight' => true,
                'format' => 'yyyy-m-d'

            ]
        ]);
    ?>
    <?= $form->field($model, 'city')->dropDownList($cities) ?>
    <?= '<label class="control-label">Час початку</label>'; ?>
    <?=
        TimePicker::widget([
            'model' => $model,
            'attribute' => 'begin',
            'pluginOptions' => [
                'minuteStep'=>1,
                'showMeridian'=>false
            ]
        ]);
    ?>
    <?= '<label class="control-label">Час завершення</label>'; ?>
    <?=
        TimePicker::widget([
            'model' => $model,
            'attribute' => 'end',
            'pluginOptions' => [
                'autoclose' => true,
                'minuteStep'=>1,
                'showMeridian'=>false
            ]
        ]);
    ?>
    <?= $form->field($model, 'latitude')->textInput(['maxlength' => 40]) ?>
    <?= $form->field($model, 'longtitude')->textInput(['maxlength' => 40]) ?>
    <?= $form->field($model, 'image')->fileInput() ?>
    <?php if($model->id) echo Html::img($model->image, ['alt' => 'My logo']); ?>
    <?= $form->field($model, 'category')->dropDownList($categories); ?>
    <div class="form-group">
        <?= Html::submitButton(!$model['id'] ? 'Створити' : 'Зберегти змiни', ['class' => !$model['id'] ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
