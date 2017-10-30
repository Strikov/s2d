<?php

/* @var $this \yii\web\View */

/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
\Yii::$app->language = 'uk-UA';
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'Дивна Україна',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    if (!\Yii::$app->user->can('viewAdmin')) {
        $menuItems[] = ['label' => 'Авторизуватися', 'url' => ['/site/login']];
    } else {
        $menuItems = [
            ['label' => 'Головна', 'url' => ['/site/index']],
            ['label' => 'Головний опис', 'url' => ['/maindescription/index']],
            ['label' => 'Міста', 'url' => ['/city/index']],
            ['label' => 'Екскурсії',
                'items' => [
                    ['label' => 'Екскурсії', 'url' => ['/tour/index']],
                    ['label' => 'Типи екскурсій', 'url' => ['/tourtype/index']],
                    ['label' => 'Категорії екскурсій', 'url' => ['/tourcategory/index']],

                ]],
            ['label' => 'Події',
                'items' => [
                    ['label' => 'Події ', 'url' => ['/event/index']],
                    ['label' => 'Категорії подій', 'url' => ['/eventcategory/index']],

                ]],
            ['label' => 'Пам\'ятки',
                'items' =>
                    [
                        ['label' => 'Пам\'ятки', 'url' => ['/point/index']],
                        ['label' => 'Категорії пам\'яток', 'url' => ['/pointcategory/index']],

                    ]],
            ['label' => 'Де поїсти',
                'items' => [
                    ['label' => 'Де поїсти', 'url' => ['/cafe/index']],
                    ['label' => 'Типи закладів', 'url' => ['/cafetype/index']],
                ]],
            ['label' => 'Де відпочити',
                'items' => [
                    ['label' => 'Де відпочити', 'url' => ['/hotel/index']],
                    ['label' => 'Типи закладів', 'url' => ['/hoteltype/index']],
                ]
            ],

        ];
    }
    if (Yii::$app->user->isGuest) {
        // $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Вийти (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Дивна Україна <?= date('Y') ?></p>
        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
