<?php

use yii\helpers\Html;
?>
<table class="imagetable">
    <tr>
        <th>学号</th>
        <th>姓名</th>
    </tr>
    <?php foreach ($user_data as $country): ?>
        <tr>
            <td><?= $country['user_id'] ?></td>
            <td><?= $country['user_name'] ?></td>
        </tr>
    <?php endforeach; ?>

</table>