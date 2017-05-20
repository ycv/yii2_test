<?php

namespace frontend\modules\user\models;

use common\models\Yii2TestProjectreport;
use Yii;
use yii\base\Model;

class ReportFrom extends Model {

    /**
     * 获取项目跟踪报表数据 全部数据
     */
    public function getProjectReportLists() {
        return Yii2TestProjectreport::find()->asArray()->all();
    }

}
