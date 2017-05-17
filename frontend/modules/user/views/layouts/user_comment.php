<?php

use yii\helpers\Html;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>2user_page</title>
        <style>

        </style>
    </head>
    <body>
        <?php if (isset($this->blocks['block1'])): ?>
            <?= $this->blocks['block1']; ?>
        <?php else: ?>
        <?php endif; ?>
        <?= $content; ?>
    </body>
</html>





