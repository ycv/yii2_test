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
<?= Html::jsFile('@web/statics/report/js/sortable_table.js') ?>

<style>
    .ft_container table tr th {
        background-color: #DBEAF9;

    }
    .dwrapper tr th{
        height:24px
    }
</style>
<script>
    $(function () {
        $('#fixed_hdr2').fxdHdrCol({
            fixedCols: 1,
            width: "100%",
            height: 400,
            colModal: [
                {width: 100, align: 'left'},
                {width: 70, align: 'left'},
                {width: 100, align: 'left'},
                {width: 100, align: 'center'},
                {width: 90, align: 'left'}, {width: 100, align: 'center'},
                {width: 90, align: 'left'},
                {width: 30, align: 'left'},
                {width: 30, align: 'left'},
                {width: 30, align: 'left'}, {width: 30, align: 'left'}
            ]
        });
    });
</script>

<div class="dwrapper">
    <table id="fixed_hdr2">
        <thead>
            <tr>
                <th rowspan="2">序号</th>
                <th colspan="10">bbb</th>
            </tr>
            <tr> 
                <th>名称</th>
                <th>地址</th>
                <th>城讪</th>
                <th>区号</th>
                <th>电话</th>
                <th style="width: 64px">销售日期</th>
                <th>Company</th>
                <th>注释</th>
            </tr>




        </thead>
        <tbody>
            <tr><td>1</td><td>996790</td><td>Chloe Ball</td><td>Ap #257-5640 Arcu. Avenue</td><td>Eugene</td> <td>(393) 766-1343</td>
                <td style="width: 64px">07/16/12</td><td>Lycos</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>
            <tr> <td>996791</td><td>Ebony Waters</td><td>Ap #985-9134 Arcu. Avenue</td><td>Seward</td><td>25697</td><td>(940) 942-1452</td>
                <td style="width: 64px">06/02/10</td><td>Google</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>
            <tr> <td>996792</td><td>Ahmed Rodriquez</td><td>282-3161 Lorem, Rd.</td><td>Hollywood</td><td>33065</td><td>(518) 396-3831</td>
                <td style="width: 64px">06/22/10</td><td>Lycos</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>


        </tbody>
    </table>
</div>