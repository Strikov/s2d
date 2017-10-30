<?php


use backend\models\EventForm;
use yii\helpers\Html;


/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Подiї';
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
            'attributes' => ['id', 'name', 'descriptionEvent', 'date', 'begin', 'end', 'city', 'latitude', 'longtitude', 'image', 'category']
        ],
        'modelClass' => EventForm::className(),
    ]);

    echo \yii\grid\GridView::widget([
        'dataProvider' => $provider,
        'columns' => [
            'id',
            'name',
            [
                'attribute' => 'date',
                'format' => ['date', 'php:d-m-Y'],
            ],
            [
                'attribute' => 'begin',
                'format' => ['time', 'php:H:i'],
            ],
            [
                'attribute' => 'end',
                'format' => ['time', 'php:H:i'],
            ],
            'city',
            'latitude',
            'longtitude',
            ['attribute' => 'image',
                'format' => 'raw',
                'value' => function ($data) {
                    $image = $data->getImage();
                    return Html::img($image->getUrl('300x175'), ['alt' => 'My logo']);
                },
            ],
            'category',
            ['class' => \yii\grid\ActionColumn::className(),
                'template' => '{view}'
            ],
            ['class' => \yii\grid\ActionColumn::className(),
                'template' => '{update}'
            ],
            ['class' => \yii\grid\ActionColumn::className(),
                'template' => '{delete}'
            ]
        ]
    ]);


    //echo EventWidget::widget(['data'=>$model]);?>

</div>
