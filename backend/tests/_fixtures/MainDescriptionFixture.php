<?php
/**
 * Created by PhpStorm.
 * User: Volodya
 * Date: 20.07.2017
 * Time: 12:00
 */

namespace backend\tests\_fixtures;


use yii\test\ActiveFixture;

class MainDescriptionFixture extends ActiveFixture
{
    public $modelClass = 'backend\models\MainDescription';
    public $dataFile = '@backend/tests/_fixtures/data/maindescription.php';

}