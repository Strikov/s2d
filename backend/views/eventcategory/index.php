<?php


use backend\models\BaseCategoryForm;
use yii\helpers\Html;


/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Категорії подій';
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
            'attributes' => ['id', 'name']
        ],
        'modelClass' => BaseCategoryForm::className(),
    ]);

    echo \yii\grid\GridView::widget([
        'dataProvider' => $provider,
        'columns' => [
            'id',
            'name',
            ['class' => \yii\grid\ActionColumn::className(),
                'template' => '{update}'
            ],
            ['class' => \yii\grid\ActionColumn::className(),
                'template' => '{delete}'
            ]
        ]
    ]);


    //echo EventcategoryWidget::widget(['data'=>$model]);?>

</div>
