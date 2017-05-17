<?php

namespace frontend\modules\infi;

class InfiModule extends \yii\base\Module {

    public $controllerNamespace = 'frontend\modules\infi\controllers';

    public function init() {
        parent::init();
        $this->modules = [
            'category' => [
                'class' => 'frontend\modules\infi\modules\category\CategoryModule',
            ],
        ];
        // custom initialization code goes here
    }

}
