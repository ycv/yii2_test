<?php

use yii\helpers\Html;
use frontend\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);

$this->title = '项目跟踪报表2';
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
<div  style="height: 400px;width: 100%;overflow-x: auto;  overflow-y: auto;">
    <table class="   fancyDarkTable" id="myTable05" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th>编号</th>
                <th>项目名称</th>
                <th>预计采购金额(K)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Firefox</td>
                <td class="numeric">1,990</td>
                <td class="numeric">32.61%</td>
            </tr>
            <tr>
                <td>Firefox</td>
                <td  >1,990</td>
                <td >32.61%</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="clear"></div>

