<?php

namespace common\components;

use yii;
use yii\base\Object;
use yii\web\UploadedFile;

/**
 * 文件上传
 * @package common\components\oauth
 */
class Upload extends Object {

    /**
     * 上传文件
     */
    public function uploadFile($uploadfile, $filepath) {
        $result = $uploadfile->saveAs($filepath);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param 创建目录
     * @return bool
     */
    public function mkDirs($dir) {
        if (!is_dir($dir)) {
            if (!$this->mkDirs(dirname($dir))) {
                return false;
            }
            if (!mkdir($dir, 0777)) {
                return false;
            }
        }

        return true;
    }

    /**
     * 生成随机文件名
     */
    public function generateRandFileName() {
        $tokenLen = 40;
        if (@file_exists('/dev/urandom')) { // Get 100 bytes of random data
            $randomData = file_get_contents('/dev/urandom', false, null, 0, 100) . uniqid(mt_rand(), true);
        } else {
            $randomData = mt_rand() . mt_rand() . mt_rand() . mt_rand() . microtime(true) . uniqid(mt_rand(), true);
        }
        return substr(hash('sha512', $randomData), 0, $tokenLen);
    }

    /**
     * 获取文件后缀名函数
     */
    public function fileext($filename) {
        return substr(strrchr($filename, '.'), 1);
    }

}
