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
        $('#myTable05').fixedHeaderTable({altClass: 'odd', footer: true, fixedColumns: 1});
    });
</script>
<div  style="height: 400px;width: 300px;overflow-x: auto;  overflow-y: auto;">
    <table class="fancyTable" id="myTable05" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th>Browser</th>
                <th>Visits</th>
                <th>Pages/Visit</th>
                <th>Avg. Time on Site</th>
                <th>% New Visits</th>
                <th>Bounce Rate</th>
                <th>Avg. Time on Site</th>
                <th>% New Visits</th>
                <th>Bounce Rate</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Browser</th>
                <th>Visits</th>
                <th>Pages/Visit</th>
                <th>Avg. Time on Site</th>
                <th>% New Visits</th>
                <th>Bounce Rate</th>
                <th>Avg. Time on Site</th>
                <th>% New Visits</th>
                <th>Bounce Rate</th>
            </tr>
        </tfoot>
        <tbody>
            <tr>
                <td>Firefox first</td>
                <td class="numeric">1,990</td>
                <td class="numeric">3.11</td>
                <td class="numeric">00:04:22</td>
                <td class="numeric">70.00%</td>
                <td class="numeric">32.61%</td>
                <td class="numeric">00:04:22</td>
                <td class="numeric">70.00%</td>
                <td class="numeric">32.61%</td>
            </tr>
            <tr>
                <td>Firefox</td>
                <td class="numeric">1,990</td>
                <td class="numeric">3.11</td>
                <td class="numeric">00:04:22 test test test</td>
                <td class="numeric">70.00%</td>
                <td class="numeric">32.61%</td>
                <td class="numeric">00:04:22</td>
                <td class="numeric">70.00%</td>
                <td class="numeric">32.61%</td>
            </tr>
            <tr>
                <td>Firefox</td>
                <td class="numeric">1,990</td>
                <td class="numeric">3.11</td>
                <td class="numeric">00:04:22</td>
                <td class="numeric">70.00% test test test</td>
                <td class="numeric">32.61%</td>
                <td class="numeric">00:04:22</td>
                <td class="numeric">70.00%</td>
                <td class="numeric">32.61%</td>
            </tr>
            <tr>
                <td>Firefox</td>
                <td class="numeric">1,990</td>
                <td class="numeric">3.11</td>
                <td class="numeric">00:04:22</td>
                <td class="numeric">70.00%</td>
                <td class="numeric">32.61%</td>
                <td class="numeric">00:04:22</td>
                <td class="numeric">70.00%</td>
                <td class="numeric">32.61%</td>
            </tr>
            <tr>
                <td>Firefox</td>
                <td class="numeric">1,990</td>
                <td class="numeric">3.11</td>
                <td class="numeric">00:04:22</td>
                <td class="numeric">70.00%</td>
                <td class="numeric">32.61%</td>
                <td class="numeric">00:04:22</td>
                <td class="numeric">70.00%</td>
                <td class="numeric">32.61%</td>
            </tr>
            <tr>
                <td>Firefox</td>
                <td class="numeric">1,990</td>
                <td class="numeric">3.11</td>
                <td class="numeric">00:04:22</td>
                <td class="numeric">70.00%</td>
                <td class="numeric">32.61%</td>
                <td class="numeric">00:04:22</td>
                <td class="numeric">70.00%</td>
                <td class="numeric">32.61%</td>
            </tr>
            <tr>
                <td>Firefox</td>
                <td class="numeric">1,990</td>
                <td class="numeric">3.11</td>
                <td class="numeric">00:04:22</td>
                <td class="numeric">70.00%</td>
                <td class="numeric">32.61%</td>
                <td class="numeric">00:04:22</td>
                <td class="numeric">70.00%</td>
                <td class="numeric">32.61%</td>
            </tr>
            <tr>
                <td>Firefox</td>
                <td class="numeric">1,990</td>
                <td class="numeric">3.11</td>
                <td class="numeric">00:04:22</td>
                <td class="numeric">70.00%</td>
                <td class="numeric">32.61%</td>
                <td class="numeric">00:04:22</td>
                <td class="numeric">70.00%</td>
                <td class="numeric">32.61%</td>
            </tr>
            <tr>
                <td>Firefox</td>
                <td class="numeric">1,990</td>
                <td class="numeric">3.11</td>
                <td class="numeric">00:04:22</td>
                <td class="numeric">70.00%</td>
                <td class="numeric">32.61%</td>
                <td class="numeric">00:04:22</td>
                <td class="numeric">70.00%</td>
                <td class="numeric">32.61%</td>
            </tr>
            <tr>
                <td>Firefox</td>
                <td class="numeric">1,990</td>
                <td class="numeric">3.11</td>
                <td class="numeric">00:04:22</td>
                <td class="numeric">70.00%</td>
                <td class="numeric">32.61%</td>
                <td class="numeric">00:04:22</td>
                <td class="numeric">70.00%</td>
                <td class="numeric">32.61%</td>
            </tr>
            <tr>
                <td>Firefox</td>
                <td class="numeric">1,990</td>
                <td class="numeric">3.11</td>
                <td class="numeric">00:04:22</td>
                <td class="numeric">70.00%</td>
                <td class="numeric">32.61%</td>
                <td class="numeric">00:04:22</td>
                <td class="numeric">70.00%</td>
                <td class="numeric">32.61%</td>
            </tr>
            <tr>
                <td>Firefox</td>
                <td class="numeric">1,990</td>
                <td class="numeric">3.11</td>
                <td class="numeric">00:04:22</td>
                <td class="numeric">70.00%</td>
                <td class="numeric">32.61%</td>
                <td class="numeric">00:04:22</td>
                <td class="numeric">70.00%</td>
                <td class="numeric">32.61%</td>
            </tr>
            <tr>
                <td>Firefox</td>
                <td class="numeric">1,990</td>
                <td class="numeric">3.11</td>
                <td class="numeric">00:04:22</td>
                <td class="numeric">70.00%</td>
                <td class="numeric">32.61%</td>
                <td class="numeric">00:04:22</td>
                <td class="numeric">70.00%</td>
                <td class="numeric">32.61%</td>
            </tr>
            <tr>
                <td>Firefox</td>
                <td class="numeric">1,990</td>
                <td class="numeric">3.11</td>
                <td class="numeric">00:04:22</td>
                <td class="numeric">70.00%</td>
                <td class="numeric">32.61%</td>
                <td class="numeric">00:04:22</td>
                <td class="numeric">70.00%</td>
                <td class="numeric">32.61%</td>
            </tr>
            <tr>
                <td>Firefox</td>
                <td class="numeric">1,990</td>
                <td class="numeric">3.11</td>
                <td class="numeric">00:04:22</td>
                <td class="numeric">70.00%</td>
                <td class="numeric">32.61%</td>
                <td class="numeric">00:04:22</td>
                <td class="numeric">70.00%</td>
                <td class="numeric">32.61%</td>
            </tr>
            <tr>
                <td>Firefox</td>
                <td class="numeric">1,990</td>
                <td class="numeric">3.11</td>
                <td class="numeric">00:04:22</td>
                <td class="numeric">70.00%</td>
                <td class="numeric">32.61%</td>
                <td class="numeric">00:04:22</td>
                <td class="numeric">70.00%</td>
                <td class="numeric">32.61%</td>
            </tr>
            <tr>
                <td>Firefox</td>
                <td class="numeric">1,990</td>
                <td class="numeric">3.11</td>
                <td class="numeric">00:04:22</td>
                <td class="numeric">70.00%</td>
                <td class="numeric">32.61%</td>
                <td class="numeric">00:04:22</td>
                <td class="numeric">70.00%</td>
                <td class="numeric">32.61%</td>
            </tr>
            <tr>
                <td>Firefox</td>
                <td class="numeric">1,990</td>
                <td class="numeric">3.11</td>
                <td class="numeric">00:04:22</td>
                <td class="numeric">70.00%</td>
                <td class="numeric">32.61%</td>
                <td class="numeric">00:04:22</td>
                <td class="numeric">70.00%</td>
                <td class="numeric">32.61%</td>
            </tr>
            <tr>
                <td>Firefox</td>
                <td class="numeric">1,990</td>
                <td class="numeric">3.11</td>
                <td class="numeric">00:04:22</td>
                <td class="numeric">70.00%</td>
                <td class="numeric">32.61%</td>
                <td class="numeric">00:04:22</td>
                <td class="numeric">70.00%</td>
                <td class="numeric">32.61%</td>
            </tr>
            <tr>
                <td>Firefox</td>
                <td class="numeric">1,990</td>
                <td class="numeric">3.11</td>
                <td class="numeric">00:04:22</td>
                <td class="numeric">70.00%</td>
                <td class="numeric">32.61%</td>
                <td class="numeric">00:04:22</td>
                <td class="numeric">70.00%</td>
                <td class="numeric">32.61%</td>
            </tr>
            <tr>
                <td>Firefox</td>
                <td class="numeric">1,990</td>
                <td class="numeric">3.11</td>
                <td class="numeric">00:04:22</td>
                <td class="numeric">70.00%</td>
                <td class="numeric">32.61%</td>
                <td class="numeric">00:04:22</td>
                <td class="numeric">70.00%</td>
                <td class="numeric">32.61%</td>
            </tr>
            <tr>
                <td>Firefox</td>
                <td class="numeric">1,990</td>
                <td class="numeric">3.11</td>
                <td class="numeric">00:04:22</td>
                <td class="numeric">70.00%</td>
                <td class="numeric">32.61%</td>
                <td class="numeric">00:04:22</td>
                <td class="numeric">70.00%</td>
                <td class="numeric">32.61%</td>
            </tr>
            <tr>
                <td>Firefox</td>
                <td class="numeric">1,990</td>
                <td class="numeric">3.11</td>
                <td class="numeric">00:04:22</td>
                <td class="numeric">70.00%</td>
                <td class="numeric">32.61%</td>
                <td class="numeric">00:04:22</td>
                <td class="numeric">70.00%</td>
                <td class="numeric">32.61%</td>
            </tr>
            <tr>
                <td>Firefox</td>
                <td class="numeric">1,990</td>
                <td class="numeric">3.11</td>
                <td class="numeric">00:04:22</td>
                <td class="numeric">70.00%</td>
                <td class="numeric">32.61%</td>
                <td class="numeric">00:04:22</td>
                <td class="numeric">70.00%</td>
                <td class="numeric">32.61%</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="clear"></div>

