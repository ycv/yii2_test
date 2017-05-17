<?php

use yii\helpers\Url;
?>

<div>
    <form  action="<?= Url::toRoute(['/user/excel/excelimport']) ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_csrf" value="<?= Yii::$app->request->csrfToken ?>">
        上传文件：<input type="file" name="upfile" /><br> 
        <input type="submit" value="上传" />
    </form> 
</div>