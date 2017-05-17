<?php

use yii\helpers\Url;
?>
<div>
    <form action="<?= Url::toRoute(['/user/excel/excelimport']) ?>" method="post" enctype="multipart/form-data">
        <input hidden name="_csrf-frontend" value="<?= Yii::$app->request->csrfToken ?>"/>
        上传文件：<input type="file" name="upfile" /><br> 
        <button type="submit" >保存</button>
    </form> 
</div> 