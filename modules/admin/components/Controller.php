<?php
namespace app\modules\admin\components;

use Yii;
use app\components\ControllerTrait;
use yii\web\NotFoundHttpException;

class Controller extends \yii\web\Controller
{
    use ControllerTrait;
    public $layout = '@app/modules/admin/views/layouts/main';

    public function init()
    {
//        if (!Yii::$app->getUser()->can('visitAdmin')) { // 判断是否有访问后台权限
//            throw new NotFoundHttpException('The requested page does not exist.');
//        }
    }
}