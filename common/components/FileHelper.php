<?php

namespace common\components;

use Yii;

class FileHelper {

    const DT_CHMOD = 0777;

    /**
     * 创建文件
     * @param $filename 文件全路径
     * @param $data 文件内容
     * @return bool|int
     */
    public static function file_put($filename, $data) {
        self::dir_create(dirname($filename));
        if (@$fp = fopen($filename, 'wb')) {
            flock($fp, LOCK_EX);
            $len = fwrite($fp, $data);
            flock($fp, LOCK_UN);
            fclose($fp);
            @chmod($filename, DT_CHMOD);
            return $len;
        } else {
            return false;
        }
    }

    /**
     * 获取文件内容
     * @param $filename 文件地址
     * @return string
     */
    public static function file_get($filename) {
        return @file_get_contents($filename);
    }

    /**
     * 删除文件
     * @param $filename 文件地址
     * @return bool
     */
    public static function file_del($filename) {
        @chmod($filename, DT_CHMOD);
        return is_file($filename) ? @unlink($filename) : false;
    }

    /**
     * 创建目录
     * @param $path 目录地址
     * @return bool
     */
    public static function dir_create($path) {
        if (is_dir($path))
            return true;

        $dir = str_replace(Yii::$app->basePath . '/', '', $path);
        $dir = self::dir_path($dir);
        $temp = explode('/', $dir);
        $cur_dir = Yii::$app->basePath . '/';
        $max = count($temp) - 1;
        for ($i = 0; $i < $max; $i++) {
            $cur_dir .= $temp[$i] . '/';
            if (is_dir($cur_dir))
                continue;
            @mkdir($cur_dir);
            @chmod($cur_dir, DT_CHMOD);
        }

        return is_dir($path);
    }

    /**
     * 目录地址转换
     * @param $dirpath
     * @return mixed|string
     */
    public static function dir_path($dirpath) {
        $dirpath = str_replace('\\', '/', $dirpath);
        if (substr($dirpath, -1) != '/')
            $dirpath = $dirpath . '/';
        return $dirpath;
    }

    /**
     * 获取文件后缀名
     * @param $filename
     * @return string
     */
    public static function file_ext($filename) {
        return strtolower(trim(substr(strrchr($filename, '.'), 1)));
    }

    /**
     * 获取文件文件路径及文件名，不包含后缀名
     * @param $filename
     * @return string
     */
    public static function file_basename($filename) {
        return substr($filename, 0, -strlen(strstr($filename, '.')));
    }

}
