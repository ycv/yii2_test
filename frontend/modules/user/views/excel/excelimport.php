<?php

use yii\helpers\Url;
?>

<div>

    <form action="<?= Url::toRoute(['/user/excel/excelimport']) ?>" method="post"> 
        <input hidden name="_csrf" value="<?= Yii::$app->request->csrfToken ?>"/>
        上传文件：<input type="text" name="upfile" /><br> 
        <input type="submit" value="上传"name="asdas" />
    </form> 
</div>