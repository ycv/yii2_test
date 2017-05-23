<?php

use yii\helpers\Html;
use frontend\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);

$this->title = 'Top10目录';
?>
<!--引用css-->
<?= Html::cssFile('@web/statics/report/css/trackingreport.css') ?>

<!--引用js-->
<?= Html::jsFile('@web/statics/report/js/sortable_table.min.js') ?>

<script type='text/javascript'>
    $(document).ready(function () {
        $('#myTable05').fixedHeaderTable({altClass: 'odd', footer: true, cloneHeadToFoot: true, autoShow: false});
        $('#myTable05').fixedHeaderTable('show', 1000);
    });
</script>

<div  style="height: 400px;width: 100%;">
    <table class="fancyDarkTable" id="myTable05" cellpadding="0" cellspacing="0" style="width: 90%;">
        <thead>
            <tr>
                <th width="40%">编号</th>
                <th width="40%">项目名称</th>
                <th width="10%">预计采购金额(K)</th>
            </tr>
        </thead>
        <tbody id="reprot_list_">
            <?php
            if (count($reportArr) > 0) {
                foreach ($reportArr as $key => $value) {
                    ?>
                    <tr>
                        <td class="numeric_middle"><?= $value["number"]; ?></td>
                        <td class="numeric_middle"><?= $value["entry_name"]; ?></td>
                        <td class="numeric"><?= sprintf("%01.2f", $value["Estimated_amount_of_purchase"]); ?></td>
                    </tr>
                    <?php
                }
            }
            ?>

        </tbody>
    </table>
</div>
<div class="clear"></div>

