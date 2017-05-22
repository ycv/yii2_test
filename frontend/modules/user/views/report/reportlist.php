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

<script type='text/javascript'>
    $(document).ready(function () {
        $("#tab_Test6").FrozenTable(22, 0, 2);
    });
</script>
<div style="overflow: auto;width:100%;height:222px;">
    <table id='tab_Test6' border="1" width='1200px'>
        <tbody>
            <tr class='tabth'>
                <td colspan='13' width='1120px'>项   目  内  容</td>
                <td colspan='9'>中 压</td>
                <!--<td colspan='50'>低 压 柜</td>-->
                <td colspan='15'>低 压 柜</td>
                <td colspan='3'>分摊参考数</td>
                <td colspan='2'>IBNR分摊</td>
            </tr>
            <tr class='tabth'>
                <!-- 项   目  内  容 -->
                <td width='120px'>编号</td>
                <td width='120px'>项目名称</td>
                <td width='20%'>区域</td>
                <td width='20%'>地址</td>
                <td width='20%'>所属行业</td>
                <td width='100px'>投资单位</td>
                <td width='100px'>规模(万)平方米</td>
                <td width='100px'>甲方联系人</td>
                <td width='100px'>电话</td>
                <td width='100px'>设计单位</td>
                <td width='100px'>设计师</td>
                <td width='100px'>设计院跟踪人</td>
                <td width='100px'>工程进展</td>

                <!-- 中 压 -->
                <td width='100px'>盘厂情况</td>
                <td width='100px'>预计采购时间</td>
                <td width='100px'>上图否</td>
                <td width='100px'>WMTS</td>
                <td width='100px'>数量</td>
                <td width='100px'>竞争对手</td>
                <td width='100px'>跟踪进展</td>
                <td width='100px'>预计采购金额(K)</td>
                <td width='100px'>实际采购金额(K)</td>

                <!-- 低压柜 -->
                <td width='100px'>EEEEEE</td><td width='100px'>EEEEEE</td><td width='100px'>EEEEEE</td><td width='100px'>EEEEEE</td><td width='100px'>EEEEEE</td>
                <td width='100px'>EEEEEE</td><td width='100px'>EEEEEE</td><td width='100px'>EEEEEE</td><td width='100px'>EEEEEE</td><td width='100px'>EEEEEE</td>
                <td>0EEEEEE</td><td>EEEEEE</td>  <td>0.0</td><td>0.0</td><td>0.0</td>
                <!--
                <td width='100px'>EEEEEE</td><td width='100px'>EEEEEE</td> <td width='100px'>EEEEEE</td> <td width='100px'>EEEEEE</td> <td width='100px'>EEEEEE</td>
                <td width='100px'>EEEEEE</td><td width='100px'>EEEEEE</td> <td width='100px'>EEEEEE</td> <td width='100px'>EEEEEE</td> <td width='100px'>EEEEEE</td>
                <td width='100px'>EEEEEE</td><td width='100px'>EEEEEE</td> <td width='100px'>EEEEEE</td> <td width='100px'>EEEEEE</td> <td width='100px'>EEEEEE</td>
                <td width='100px'>EEEEEE</td><td width='100px'>EEEEEE</td> <td width='100px'>EEEEEE</td> <td width='100px'>EEEEEE</td> <td width='100px'>EEEEEE</td>
                <td width='100px'>EEEEEE</td><td width='100px'>EEEEEE</td> <td width='100px'>EEEEEE</td> <td width='100px'>EEEEEE</td> <td width='100px'>EEEEEE</td>
                <td width='100px'>EEEEEE</td><td width='100px'>EEEEEE</td> <td width='100px'>EEEEEE</td> <td width='100px'>EEEEEE</td> <td width='100px'>EEEEEE</td>
                <td width='100px'>EEEEEE</td><td width='100px'>EEEEEE</td> <td width='100px'>EEEEEE</td> <td width='100px'>EEEEEE</td> <td width='100px'>EEEEEE</td>
                <td width='100px'>EEEEEE</td><td width='100px'>EEEEEE</td> <td width='100px'>EEEEEE</td> <td width='100px'>EEEEEE</td> <td width='100px'>EEEEEE</td>
                <td width='100px'>EEEEEE</td><td width='100px'>EEEEEE</td> <td width='100px'>EEEEEE</td> <td width='100px'>EEEEEE</td> <td width='100px'>EEEEEE</td>
                <td width='100px'>EEEEEE</td><td width='100px'>EEEEEE</td> <td width='100px'>EEEEEE</td> <td width='100px'>EEEEEE</td> <td width='100px'>EEEEEE</td>
                -->



                <td width='150px'>(4)=(2)* 55%1</td>
                <td width='150px'>(5)=(3)* 30%2</td>
                <td width='100px'>合计<br>(6)</td>
                <td width='150px'>机构A<br>(7)=(4)/(6)*(1)</td>
                <td width='150px'>机构B<br>(8)=(5)/(6)*(1)</td>
            </tr>
            <tr>
                <td>0.0</td>
                <td>0.0</td>
                <td>0.0</td>
                <td>0.0</td>
                <td>0.0</td>
                <td>0.0</td>
                <td>0.0</td>
                <td>0.0</td>
                <td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td>
                <td>0.0</td><td>0.0</td><td>0.0</td>
                <td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td>
                <td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td>
                <td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td>  <td>0.0</td><td>0.0</td><td>0.0</td>
                <!--
                                <td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td>
                                <td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td>
                                <td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td>
                                <td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td>
                                <td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td>
                -->
            </tr>

            <tr>
                <td>0.0</td>
                <td>0.0</td>
                <td>0.0</td>
                <td>0.0</td>
                <td>0.0</td>
                <td>0.0</td>
                <td>0.0</td>
                <td>0.0</td>
                <td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td>
                <td>0.0</td><td>0.0</td><td>0.0</td>
                <td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td>
                <td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td>
                <td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td>  <td>0.0</td><td>0.0</td><td>0.0</td>
                <!--
               <td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td>
               <td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td>
               <td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td>
               <td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td>
               <td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td>
                -->
            </tr>

            <!--
                        <tr class='tabth'>
                            <td colspan='2'>合计</td>
                            <td>0.0</td>
                            <td>0.0</td>
                            <td>0.0</td>
                            <td>0.0</td>
                            <td>0.0</td>
                            <td>0.0</td>
                            <td>0.0</td>
                            <td>0.0</td><td>0.0</td><td>0.0</td>
                            <td>0.0</td>
                            <td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td>
                            <td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td>
                            <td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td>
                            <td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td>
                            <td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td>
                            <td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td><td>0.0</td>
                        </tr>
            -->
        </tbody>
    </table>
</div>
