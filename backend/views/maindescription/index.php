<?php


use backend\models\MainDescriptionForm;
use yii\helpers\Html;


/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Головний опис';
$this->params['breadcrumbs'][] = $this->title;
?>
<div>
    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('Створити', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php
    $provider = new \yii\data\ArrayDataProvider([
        'allModels' => $model,
        'key' => function ($model) {
            return $model->id;
        },
        'sort' => [
            'attributes' => ['id', 'introText', 'videoURL', 'videoText', 'show']
        ],
        'modelClass' => MainDescriptionForm::className(),
    ]);
    echo \yii\grid\GridView::widget([
        'dataProvider' => $provider,
        'columns' => [
            'id',
            'introText',
            'videoURL',
            'videoText',
            [
                'attribute' => 'show',
                'format' => 'raw',
                'value' => function ($data) {
                    return $data->show ? 'Так' : 'Нi';
                },
            ],
            [
                'class' => \yii\grid\ActionColumn::className(),
                'template' => '{update}'
            ],
            [
                'class' => \yii\grid\ActionColumn::className(),
                'template' => '{delete}'
            ]
        ]
    ])
    //echo MaindescriptionWidget::widget(['data'=>$model]);?>

</div>
