<?php

use yii\helpers\Html;
use frontend\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);

$this->title = '项目跟踪报表';
?>
<!--引用css-->
<?= Html::cssFile('@web/statics/common/css/report_base.css') ?>

<script type="text/javascript">
    $(document).ready(function () {
        $('tbody tr').hover(function () {
            $(this).addClass('odd');
        }, function () {
            $(this).removeClass('odd');
        });
    });
</script>

<div style="overflow:scroll;width:100%; height:400px;">
    <table id="travel">
        <thead>    
            <tr>
                <th scope="col" rowspan="2">编号</th>
                <th scope="col" rowspan="2"    >项目名称</th>
                <th scope="col" rowspan="2">区域</th>
                <th scope="col" rowspan="2" width="80px;">地址</th>
                <th scope="col" rowspan="2">所属行业</th>
                <th scope="col" rowspan="2" style="width: 80px;">投资单位</th>
                <th scope="col" rowspan="2">规模(万)平方米</th>
                <th scope="col" rowspan="2">甲方联系人</th>
                <th scope="col" rowspan="2">电话</th>
                <th scope="col" rowspan="2">设计单位</th>
                <th scope="col" rowspan="2">设计师</th>
                <th scope="col" rowspan="2">设计院跟踪人</th>
                <th scope="col" rowspan="2">工程进展</th>
                <th scope="col" colspan="9">中压</th>
                <th scope="col" colspan="50">低压柜</th>
            </tr>
            <tr>
                <th scope="col">盘厂情况</th>
                <th scope="col">预计采购时间</th>
                <th scope="col">上图否</th>
                <th scope="col">WMTS</th>
                <th scope="col">数量</th>
                <th scope="col">竞争对手</th>
                <th scope="col">跟踪进展</th>
                <th scope="col">预计采购金额(K)</th>
                <th scope="col">实际采购金额(K)</th>

                <th scope="col">盘厂情况</th><th scope="col">预计采购时间</th><th scope="col">上图否</th>
                <th scope="col">ATMT-3A/3B</th><th scope="col">数量</th><th scope="col">万高推荐型号</th>
                <th scope="col">竞争对手</th><th scope="col">跟踪进展</th><th scope="col">预计采购金额(K)</th>
                <th scope="col">实际采购金额(K)</th>

                <th scope="col">上图否</th><th scope="col">首端ATS</th><th scope="col">数量</th><th scope="col">万高推荐型号</th>
                <th scope="col">竞争对手</th><th scope="col">跟踪进展</th><th scope="col">预计采购金额(K)</th><th scope="col">实际采购金额(K)</th>
                <th scope="col">上图否</th><th scope="col">WEFP/WEFD</th><th scope="col">数量</th><th scope="col">万高推荐型号</th>
                <th scope="col">竞争对手</th><th scope="col">跟踪进展</th><th scope="col">预计采购金额(K)</th><th scope="col">实际采购金额(K)</th>
                <th scope="col">上图否</th><th scope="col">iSCB</th><th scope="col">数量</th><th scope="col">万高推荐型号</th>

                <th scope="col">竞争对手</th><th scope="col">跟踪进展</th><th scope="col">预计采购金额(K)</th><th scope="col">实际采购金额(K)</th>
                <th scope="col">上图否</th><th scope="col">SPD</th><th scope="col">数量</th><th scope="col">万高推荐型号</th>
                <th scope="col">竞争对手</th><th scope="col">跟踪进展</th><th scope="col">预计采购金额(K)</th><th scope="col">实际采购金额(K)</th>



                <th scope="col">上图否</th> <th scope="col">WGR/WG</th> <th scope="col">数量</th> <th scope="col">万高推荐型号</th>
                <th scope="col">竞争对手</th> <th scope="col">跟踪进展</th> <th scope="col">预计采购金额(K)</th> <th scope="col">实际采购金额(K)</th>
            </tr>
        </thead>
        <!--
        <tfoot>
            <tr>
                <th scope="row">All modes</th>
                <td>55</td>
                <td>39</td>
                <td>27</td>
                <td>39</td>
                <td>20</td>
                <td>23</td>
            </tr>
        </tfoot>
        -->
        <tbody>
            <tr width="40px">
                <th>Car and vasssn</th>
                <td>48</td>
                <td width="60px">sssssss</td>
                <td style="width:80px;">32</td>
                <td>25</td>
                <td>29</td>
                <td>20</td>
                <td>20</td>
                <td>32</td>
                <td>25</td>
                <td>29</td>
                <td>20</td>
                <td>20</td>
                <td>32</td>
                <td>25</td>
                <td>29</td>
                <td>20</td>
                <td>20</td> <td>20</td><td>20</td> <td>20</td> <td>20</td>
                <td>20</td> <td>20</td><td>20</td> <td>20</td> <td>20</td>
                <td>20</td> <td>20</td><td>20</td> <td>20</td> <td>20</td>
                <td>20</td> <td>20</td><td>20</td> <td>20</td> <td>20</td>
                <td>20</td> <td>20</td><td>20</td> <td>20</td> <td>20</td>
                <td>20</td> <td>20</td><td>20</td> <td>20</td> <td>20</td>
                <td>20</td> <td>20</td><td>20</td> <td>20</td> <td>20</td>
                <td>20</td> <td>20</td><td>20</td> <td>20</td> <td>20</td>
                <td>20</td> <td>20</td><td>20</td> <td>20</td> <td>20</td>
                <td>20</td> <td>20</td><td>20</td> <td>20</td> <td>20</td>
                <td>20</td> <td>20</td><td>20</td> <td>20</td> <td>20</td>
            </tr>
            <tr>
                <th scope="row">Bicycle</th>
                <td>33</td><td>48</td>
                <td>24</td>
                <td>20</td>
                <td>25</td>
                <td>15</td>
                <td>17</td>
                <td>32</td>
                <td>25</td>
                <td>29</td>
                <td>20</td>
                <td>20</td>
                <td>32</td>
                <td>25</td>
                <td>29</td>
                <td>20</td>
                <td>20</td> <td>20</td> <td>20</td>
                <td>20</td> <td>20</td>
                <td>20</td> <td>20</td><td>20</td> <td>20</td> <td>20</td>
                <td>20</td> <td>20</td><td>20</td> <td>20</td> <td>20</td>
                <td>20</td> <td>20</td><td>20</td> <td>20</td> <td>20</td>
                <td>20</td> <td>20</td><td>20</td> <td>20</td> <td>20</td>
                <td>20</td> <td>20</td><td>20</td> <td>20</td> <td>20</td>
                <td>20</td> <td>20</td><td>20</td> <td>20</td> <td>20</td>
                <td>20</td> <td>20</td><td>20</td> <td>20</td> <td>20</td>
                <td>20</td> <td>20</td><td>20</td> <td>20</td> <td>20</td>
                <td>20</td> <td>20</td><td>20</td> <td>20</td> <td>20</td>
                <td>20</td> <td>20</td><td>20</td> <td>20</td> <td>20</td>
            </tr>


        </tbody>
    </table>

</div>