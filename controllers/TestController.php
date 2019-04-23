<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019-03-15
 * Time: 15:47
 */

namespace app\controllers;

use app\models\Test;
use yii\db\Query;
use yii\web\Controller;
use yii\db\ActiveRecord;

class TestController extends Controller
{
    public function actionIndex()
    {
        $rows = (new Query())->select('id, name')
            ->from('test')
            ->all();
        var_dump($rows);
    }

}