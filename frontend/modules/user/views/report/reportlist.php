<?php

use yii\helpers\Html;
use frontend\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);

$this->title = '项目跟踪报表';
?>
<!--引用css-->
<?= Html::cssFile('@web/statics/report/css/trackingreport.css') ?>

<!--引用js-->
<?= Html::jsFile('@web/statics/report/js/tablefreeze.js') ?>

 
     
        <div class="grid_8 height400">
            <table class="fancyTable" id="myTable05" cellpadding="0" cellspacing="0">
                <thead>
                    <tr>
                        <th  rowspan="2">AAAAA</th>
                        <th  colspan="13" >xxxxxxxx</th>
                    </tr>     
                    <tr>
                        <th  >bb</th>
                        <th  colspan="3">cccccc</th>
                        <th>ddddddd</th>
                        <th>eeeeeeeee</th>
                        <th>fffffff</th>
                        <th>tttt</th>
                        <th>vvvvvvv</th>
                        <th>qqqqqq</th>
                        <th>tttt</th>
                        <th>vvvvvvv</th>
                        <th>qqqqqq</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td >11</td>
                        <td class="numeric">12</td>
                        <td class="numeric">13</td>
                        <td class="numeric">14</td>
                        <td class="numeric">70.00%</td>
                        <td class="numeric">32.61%</td>
                        <td class="numeric">00:04:22</td>
                        <td class="numeric">70.00%</td>
                        <td class="numeric">32.61%</td><td class="numeric">00:04:22</td>
                        <td class="numeric">70.00%</td>
                        <td class="numeric">32.61%</td><th>vvvvvvv</th>
                        <th>qqqqqq</th>
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
                        <td class="numeric">32.61%</td><td class="numeric">00:04:22</td>
                        <td class="numeric">70.00%</td>
                        <td class="numeric">32.61%</td><th>vvvvvvv</th>
                        <th>qqqqqq</th>
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
                        <td class="numeric">32.61%</td><td class="numeric">00:04:22</td>
                        <td class="numeric">70.00%</td>
                        <td class="numeric">32.61%</td><th>vvvvvvv</th>
                        <th>qqqqqq</th>
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
                        <td class="numeric">32.61%</td><td class="numeric">00:04:22</td>
                        <td class="numeric">70.00%</td>
                        <td class="numeric">32.61%</td><th>vvvvvvv</th>
                        <th>qqqqqq</th>
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
                        <td class="numeric">32.61%</td><td class="numeric">00:04:22</td>
                        <td class="numeric">70.00%</td>
                        <td class="numeric">32.61%</td><th>vvvvvvv</th>
                        <th>qqqqqq</th>
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
                        <td class="numeric">32.61%</td><td class="numeric">00:04:22</td>
                        <td class="numeric">70.00%</td>
                        <td class="numeric">32.61%</td><th>vvvvvvv</th>
                        <th>qqqqqq</th>
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
                        <td class="numeric">32.61%</td><td class="numeric">00:04:22</td>
                        <td class="numeric">70.00%</td><th>vvvvvvv</th>
                        <th>qqqqqq</th>
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
                        <td class="numeric">32.61%</td><td class="numeric">00:04:22</td>
                        <td class="numeric">70.00%</td>
                        <td class="numeric">32.61%</td><th>vvvvvvv</th>
                        <th>qqqqqq</th>
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
                        <td class="numeric">32.61%</td><td class="numeric">00:04:22</td>
                        <td class="numeric">70.00%</td>
                        <td class="numeric">32.61%</td><th>vvvvvvv</th>
                        <th>qqqqqq</th>
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
                        <td class="numeric">32.61%</td><td class="numeric">00:04:22</td>
                        <td class="numeric">70.00%</td><th>vvvvvvv</th>
                        <th>qqqqqq</th>
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
                        <td class="numeric">70.00%</td><th>vvvvvvv</th>
                        <th>qqqqqq</th>
                        <td class="numeric">32.61%</td><td class="numeric">00:04:22</td>
                        <td class="numeric">70.00%</td>
                        <td class="numeric">32.61%</td>
                    </tr>
                    <tr>
                        <td>Firefox</td>
                        <td class="numeric">1,990</td>
                        <td class="numeric">3.11</td>
                        <td class="numeric">00:04:22</td><th>vvvvvvv</th>
                        <th>qqqqqq</th>
                        <td class="numeric">70.00%</td>
                        <td class="numeric">32.61%</td>
                        <td class="numeric">00:04:22</td>
                        <td class="numeric">70.00%</td>
                        <td class="numeric">32.61%</td><td class="numeric">00:04:22</td>
                        <td class="numeric">70.00%</td>
                        <td class="numeric">32.61%</td>
                    </tr>
                    <tr>
                        <td>Firefox</td>
                        <td class="numeric">1,990</td><th>vvvvvvv</th>
                        <th>qqqqqq</th>
                        <td class="numeric">3.11</td>
                        <td class="numeric">00:04:22</td>
                        <td class="numeric">70.00%</td>
                        <td class="numeric">32.61%</td>
                        <td class="numeric">00:04:22</td>
                        <td class="numeric">70.00%</td>
                        <td class="numeric">32.61%</td><td class="numeric">00:04:22</td>
                        <td class="numeric">70.00%</td>
                        <td class="numeric">32.61%</td>
                    </tr>
                    <tr>
                        <td>Firefox</td>
                        <td class="numeric">1,990</td>
                        <td class="numeric">3.11</td>
                        <td class="numeric">00:04:22</td>
                        <td class="numeric">70.00%</td><th>vvvvvvv</th>
                        <th>qqqqqq</th>
                        <td class="numeric">32.61%</td>
                        <td class="numeric">00:04:22</td>
                        <td class="numeric">70.00%</td><td class="numeric">00:04:22</td>
                        <td class="numeric">70.00%</td>
                        <td class="numeric">32.61%</td>
                        <td class="numeric">32.61%</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="clear"></div>
  
 