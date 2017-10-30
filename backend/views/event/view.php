<?php

use backend\models\TourForm;
use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Події', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tour-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редагувати', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?=
        Html::a('Видалити', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ])
        ?>
    </p>

    <?=
    DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'attribute' => 'id',
                'format' => 'raw',
                'label' => '№',
            ],
            [
                'attribute' => 'name',
                'format' => 'raw',
                'label' => 'Назва',
            ],
            [
                'attribute' => 'category',
                'format' => 'raw',
                'label' => 'Категорiя',
            ],
            [
                'attribute' => 'date',
                'format' => ['date', 'php:d-m-Y'],
                'label' => 'Дата проведення',
            ],
            [
                'attribute' => 'begin',
                'format' => ['time', 'php:H:i'],
                'label' => 'Час початку',
            ],
            [
                'attribute' => 'end',
                'format' => ['time', 'php:H:i'],
                'label' => 'Час завершення',
            ],
            [
                'attribute' => 'city',
                'format' => 'raw',
                'label' => 'Мiсто',
            ],
            [
                'attribute' => 'latitude',
                'format' => 'raw',
                'label' => 'Широта',
            ],
            [
                'attribute' => 'longtitude',
                'format' => 'raw',
                'label' => 'Довгота',
            ],
        ],
    ]);
    ?>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Опис екскурсії</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><?php echo $model->descriptionEvent ?></td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="row" >
        <div class="text-center">
            <p><b>Зображення</b></p>
            <img src="<?php echo $model->getImage()->getUrl('1280x'); ?>" alt="Ошибка загрузки изображения"
                 class="img-responsive img-thumbnail" style="max-width: 70%"/>
        </div>
    </div>
</div>