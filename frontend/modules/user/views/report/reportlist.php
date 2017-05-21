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
<?= Html::jsFile('@web/statics/report/js/tablefreeze.js') ?>

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
            fixedCols: 2,
            width: "100%",
            height: 400,
            colModal: [
                {width: 50, align: 'center'},
                {width: 110, align: 'center'},
                {width: 170, align: 'left'},
                {width: 250, align: 'left'},
                {width: 100, align: 'left'},
                {width: 70, align: 'left'},
                {width: 100, align: 'left'},
                {width: 100, align: 'center'},
                {width: 90, align: 'left'},
                {width: 400, align: 'left'}
            ]
        });
    });
</script>

<div class="dwrapper">
    <table id="fixed_hdr2">
        <thead>
            <tr><th>序号</th><th>订单号</th><th>名称</th><th>地址</th><th>城讪</th><th>区号</th><th>电话</th>
                <th style="width: 64px">销售日期</th><th>Company</th><th>注释</th></tr>
        </thead>
        <tbody>
            <tr><td>1</td><td>996790</td><td>Chloe Ball</td><td>Ap #257-5640 Arcu. Avenue</td><td>Eugene</td><td>26699</td><td>(393) 766-1343</td>
                <td style="width: 64px">07/16/12</td><td>Lycos</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>
            <tr><td>2</td><td>996791</td><td>Ebony Waters</td><td>Ap #985-9134 Arcu. Avenue</td><td>Seward</td><td>25697</td><td>(940) 942-1452</td>
                <td style="width: 64px">06/02/10</td><td>Google</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>
            <tr><td>3</td><td>996792</td><td>Ahmed Rodriquez</td><td>282-3161 Lorem, Rd.</td><td>Hollywood</td><td>33065</td><td>(518) 396-3831</td>
                <td style="width: 64px">06/22/10</td><td>Lycos</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>
            <tr><td>4</td><td>996793</td><td>Igor Baldwin</td><td>P.O. Box 984, 3232 Nullam Ave</td><td>New Brunswick</td><td>19082</td><td>(813) 803-8117</td>
                <td style="width: 64px">02/26/11</td><td>Altavista</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>
            <tr><td>5</td><td>996794</td><td>Bertha Hewitt</td><td>330-2892 Interdum. St.</td><td>Hawthorne</td><td>62390</td><td>(518) 797-6715</td>
                <td style="width: 64px">06/15/11</td><td>Chami</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>
            <tr><td>6</td><td>996795</td><td>Katelyn Hebert</td><td>1064 Fringilla. Ave</td><td>Rock Springs</td><td>25013</td><td>(695) 380-1814</td>
                <td style="width: 64px">06/02/10</td><td>Lavasoft</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>
            <tr><td>7</td><td>996796</td><td>Courtney Lee</td><td>Ap #668-1360 Est, Av.</td><td>Dalton</td><td>64476</td><td>(480) 511-5735</td>
                <td style="width: 64px">06/08/10</td><td>Finale</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>
            <tr><td>8</td><td>996797</td><td>Katell Patrick</td><td>P.O. Box 147, 6533 Proin Avenue</td><td>Latrobe</td><td>70185</td><td>(821) 531-3834</td>
                <td style="width: 64px">03/09/11</td><td>Apple Systems</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>
            <tr><td>9</td><td>996798</td><td>Joshua Dominguez</td><td>281-1223 Ac Rd.</td><td>Commerce</td><td>27741</td><td>(675) 395-5374</td>
                <td style="width: 64px">12/16/11</td><td>Cakewalk</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>
            <tr><td>10</td><td>996799</td><td>Sierra Trevino</td><td>Ap #481-7244 Adipiscing Rd.</td><td>Fairbanks</td><td>35181</td><td>(665) 913-2731</td>
                <td style="width: 64px">05/24/10</td><td>Microsoft</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>
            <tr><td>11</td><td>996800</td><td>Raya Vega</td><td>P.O. Box 748, 4877 Pede Road</td><td>Norwalk</td><td>05538</td><td>(379) 244-7840</td>
                <td style="width: 64px">02/08/11</td><td>Google</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>
            <tr><td>12</td><td>996801</td><td>Maxwell Figueroa</td><td>8705 Lorem St.</td><td>Arlington</td><td>60314</td><td>(198) 201-4894</td>
                <td style="width: 64px">12/23/11</td><td>Borland</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>
            <tr><td>13</td><td>996802</td><td>Daniel Patterson</td><td>P.O. Box 931, 7606 Dui, Street</td><td>Coatesville</td><td>63987</td><td>(871) 124-5670</td>
                <td style="width: 64px">09/04/12</td><td>Google</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>
            <tr><td>14</td><td>996803</td><td>Germaine Hill</td><td>741-3835 Accumsan Rd.</td><td>Cape Girardeau</td><td>52698</td><td>(378) 756-3401</td>
                <td style="width: 64px">05/12/11</td><td>Adobe</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>
            <tr><td>15</td><td>996804</td><td>Clinton Joyce</td><td>P.O. Box 273, 2329 Ornare. Road</td><td>Johnson City</td><td>01474</td><td>(986) 604-8372</td>
                <td style="width: 64px">07/21/10</td><td>Google</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>
            <tr><td>16</td><td>996805</td><td>Maya Kirkland</td><td>3129 Euismod Ave</td><td>Effingham</td><td>19513</td><td>(451) 666-1027</td>
                <td style="width: 64px">10/30/10</td><td>Altavista</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>
            <tr><td>17</td><td>996806</td><td>Oren Irwin</td><td>8358 Montes, Rd.</td><td>Arcadia</td><td>31908</td><td>(100) 820-6726</td>
                <td style="width: 64px">08/26/12</td><td>Chami</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>
            <tr><td>18</td><td>996807</td><td>Cruz Trevino</td><td>4817 Sodales Road</td><td>Covina</td><td>52672</td><td>(355) 944-2951</td>
                <td style="width: 64px">04/16/10</td><td>Lavasoft</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>
            <tr><td>19</td><td>996808</td><td>Mercedes Stein</td><td>Ap #732-2018 Fusce Avenue</td><td>Sunbury</td><td>78621</td><td>(682) 798-4376</td>
                <td style="width: 64px">12/25/10</td><td>Borland</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>
            <tr><td>20</td><td>996809</td><td>Blaine Carpenter</td><td>9943 Phasellus Avenue</td><td>Basin</td><td>72271</td><td>(618) 306-1899</td>
                <td style="width: 64px">05/20/11</td><td>Cakewalk</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>
            <tr><td>21</td><td>996790</td><td>Chloe Ball</td><td>Ap #257-5640 Arcu. Avenue</td><td>Eugene</td><td>26699</td><td>(393) 766-1343</td>
                <td style="width: 64px">07/16/12</td><td>Lycos</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>
            <tr><td>22</td><td>996791</td><td>Ebony Waters</td><td>Ap #985-9134 Arcu. Avenue</td><td>Seward</td><td>25697</td><td>(940) 942-1452</td>
                <td style="width: 64px">06/02/10</td><td>Google</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>
            <tr><td>23</td><td>996792</td><td>Ahmed Rodriquez</td><td>282-3161 Lorem, Rd.</td><td>Hollywood</td><td>33065</td><td>(518) 396-3831</td>
                <td style="width: 64px">06/22/10</td><td>Lycos</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>
            <tr><td>24</td><td>996793</td><td>Igor Baldwin</td><td>P.O. Box 984, 3232 Nullam Ave</td><td>New Brunswick</td><td>19082</td><td>(813) 803-8117</td>
                <td style="width: 64px">02/26/11</td><td>Altavista</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>
            <tr><td>25</td><td>996794</td><td>Bertha Hewitt</td><td>330-2892 Interdum. St.</td><td>Hawthorne</td><td>62390</td><td>(518) 797-6715</td>
                <td style="width: 64px">06/15/11</td><td>Chami</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>
            <tr><td>26</td><td>996795</td><td>Katelyn Hebert</td><td>1064 Fringilla. Ave</td><td>Rock Springs</td><td>25013</td><td>(695) 380-1814</td>
                <td style="width: 64px">06/02/10</td><td>Lavasoft</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>
            <tr><td>27</td><td>996796</td><td>Courtney Lee</td><td>Ap #668-1360 Est, Av.</td><td>Dalton</td><td>64476</td><td>(480) 511-5735</td>
                <td style="width: 64px">06/08/10</td><td>Finale</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>
            <tr><td>28</td><td>996797</td><td>Katell Patrick</td><td>P.O. Box 147, 6533 Proin Avenue</td><td>Latrobe</td><td>70185</td><td>(821) 531-3834</td>
                <td style="width: 64px">03/09/11</td><td>Apple Systems</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>
            <tr><td>29</td><td>996798</td><td>Joshua Dominguez</td><td>281-1223 Ac Rd.</td><td>Commerce</td><td>27741</td><td>(675) 395-5374</td>
                <td style="width: 64px">12/16/11</td><td>Cakewalk</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>
            <tr><td>30</td><td>996799</td><td>Sierra Trevino</td><td>Ap #481-7244 Adipiscing Rd.</td><td>Fairbanks</td><td>35181</td><td>(665) 913-2731</td>
                <td style="width: 64px">05/24/10</td><td>Microsoft</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>
            <tr><td>31</td><td>996800</td><td>Raya Vega</td><td>P.O. Box 748, 4877 Pede Road</td><td>Norwalk</td><td>05538</td><td>(379) 244-7840</td>
                <td style="width: 64px">02/08/11</td><td>Google</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>
            <tr><td>32</td><td>996801</td><td>Maxwell Figueroa</td><td>8705 Lorem St.</td><td>Arlington</td><td>60314</td><td>(198) 201-4894</td>
                <td style="width: 64px">12/23/11</td><td>Borland</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>
            <tr><td>33</td><td>996802</td><td>Daniel Patterson</td><td>P.O. Box 931, 7606 Dui, Street</td><td>Coatesville</td><td>63987</td><td>(871) 124-5670</td>
                <td style="width: 64px">09/04/12</td><td>Google</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>
            <tr><td>34</td><td>996803</td><td>Germaine Hill</td><td>741-3835 Accumsan Rd.</td><td>Cape Girardeau</td><td>52698</td><td>(378) 756-3401</td>
                <td style="width: 64px">05/12/11</td><td>Adobe</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>
            <tr><td>35</td><td>996804</td><td>Clinton Joyce</td><td>P.O. Box 273, 2329 Ornare. Road</td><td>Johnson City</td><td>01474</td><td>(986) 604-8372</td>
                <td style="width: 64px">07/21/10</td><td>Google</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>
            <tr><td>36</td><td>996805</td><td>Maya Kirkland</td><td>3129 Euismod Ave</td><td>Effingham</td><td>19513</td><td>(451) 666-1027</td>
                <td style="width: 64px">10/30/10</td><td>Altavista</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>
            <tr><td>37</td><td>996806</td><td>Oren Irwin</td><td>8358 Montes, Rd.</td><td>Arcadia</td><td>31908</td><td>(100) 820-6726</td>
                <td style="width: 64px">08/26/12</td><td>Chami</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>
            <tr><td>38</td><td>996807</td><td>Cruz Trevino</td><td>4817 Sodales Road</td><td>Covina</td><td>52672</td><td>(355) 944-2951</td>
                <td style="width: 64px">04/16/10</td><td>Lavasoft</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>
            <tr><td>39</td><td>996808</td><td>Mercedes Stein</td><td>Ap #732-2018 Fusce Avenue</td><td>Sunbury</td><td>78621</td><td>(682) 798-4376</td>
                <td style="width: 64px">12/25/10</td><td>Borland</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>
            <tr><td>40</td><td>996809</td><td>Blaine Carpenter</td><td>9943 Phasellus Avenue</td><td>Basin</td><td>72271</td><td>(618) 306-1899</td>
                <td style="width: 64px">05/20/11</td><td>Cakewalk</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>
            <tr><td>41</td><td>996790</td><td>Chloe Ball</td><td>Ap #257-5640 Arcu. Avenue</td><td>Eugene</td><td>26699</td><td>(393) 766-1343</td>
                <td style="width: 64px">07/16/12</td><td>Lycos</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>
            <tr><td>42</td><td>996791</td><td>Ebony Waters</td><td>Ap #985-9134 Arcu. Avenue</td><td>Seward</td><td>25697</td><td>(940) 942-1452</td>
                <td style="width: 64px">06/02/10</td><td>Google</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>
            <tr><td>43</td><td>996792</td><td>Ahmed Rodriquez</td><td>282-3161 Lorem, Rd.</td><td>Hollywood</td><td>33065</td><td>(518) 396-3831</td>
                <td style="width: 64px">06/22/10</td><td>Lycos</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>
            <tr><td>44</td><td>996793</td><td>Igor Baldwin</td><td>P.O. Box 984, 3232 Nullam Ave</td><td>New Brunswick</td><td>19082</td><td>(813) 803-8117</td>
                <td style="width: 64px">02/26/11</td><td>Altavista</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>
            <tr><td>45</td><td>996794</td><td>Bertha Hewitt</td><td>330-2892 Interdum. St.</td><td>Hawthorne</td><td>62390</td><td>(518) 797-6715</td>
                <td style="width: 64px">06/15/11</td><td>Chami</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>
            <tr><td>46</td><td>996795</td><td>Katelyn Hebert</td><td>1064 Fringilla. Ave</td><td>Rock Springs</td><td>25013</td><td>(695) 380-1814</td>
                <td style="width: 64px">06/02/10</td><td>Lavasoft</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>
            <tr><td>47</td><td>996796</td><td>Courtney Lee</td><td>Ap #668-1360 Est, Av.</td><td>Dalton</td><td>64476</td><td>(480) 511-5735</td>
                <td style="width: 64px">06/08/10</td><td>Finale</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>
            <tr><td>48</td><td>996797</td><td>Katell Patrick</td><td>P.O. Box 147, 6533 Proin Avenue</td><td>Latrobe</td><td>70185</td><td>(821) 531-3834</td>
                <td style="width: 64px">03/09/11</td><td>Apple Systems</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>
            <tr><td>49</td><td>996798</td><td>Joshua Dominguez</td><td>281-1223 Ac Rd.</td><td>Commerce</td><td>27741</td><td>(675) 395-5374</td>
                <td style="width: 64px">12/16/11</td><td>Cakewalk</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>
            <tr><td>50</td><td>996799</td><td>Sierra Trevino</td><td>Ap #481-7244 Adipiscing Rd.</td><td>Fairbanks</td><td>35181</td><td>(665) 913-2731</td>
                <td style="width: 64px">05/24/10</td><td>Microsoft</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>
            <tr><td>51</td><td>996800</td><td>Raya Vega</td><td>P.O. Box 748, 4877 Pede Road</td><td>Norwalk</td><td>05538</td><td>(379) 244-7840</td>
                <td style="width: 64px">02/08/11</td><td>Google</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>
            <tr><td>52</td><td>996801</td><td>Maxwell Figueroa</td><td>8705 Lorem St.</td><td>Arlington</td><td>60314</td><td>(198) 201-4894</td>
                <td style="width: 64px">12/23/11</td><td>Borland</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>
            <tr><td>53</td><td>996802</td><td>Daniel Patterson</td><td>P.O. Box 931, 7606 Dui, Street</td><td>Coatesville</td><td>63987</td><td>(871) 124-5670</td>
                <td style="width: 64px">09/04/12</td><td>Google</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>
            <tr><td>54</td><td>996803</td><td>Germaine Hill</td><td>741-3835 Accumsan Rd.</td><td>Cape Girardeau</td><td>52698</td><td>(378) 756-3401</td>
                <td style="width: 64px">05/12/11</td><td>Adobe</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>
            <tr><td>55</td><td>996804</td><td>Clinton Joyce</td><td>P.O. Box 273, 2329 Ornare. Road</td><td>Johnson City</td><td>01474</td><td>(986) 604-8372</td>
                <td style="width: 64px">07/21/10</td><td>Google</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>
            <tr><td>56</td><td>996805</td><td>Maya Kirkland</td><td>3129 Euismod Ave</td><td>Effingham</td><td>19513</td><td>(451) 666-1027</td>
                <td style="width: 64px">10/30/10</td><td>Altavista</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>
            <tr><td>57</td><td>996806</td><td>Oren Irwin</td><td>8358 Montes, Rd.</td><td>Arcadia</td><td>31908</td><td>(100) 820-6726</td>
                <td style="width: 64px">08/26/12</td><td>Chami</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>
            <tr><td>58</td><td>996807</td><td>Cruz Trevino</td><td>4817 Sodales Road</td><td>Covina</td><td>52672</td><td>(355) 944-2951</td>
                <td style="width: 64px">04/16/10</td><td>Lavasoft</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>
            <tr><td>59</td><td>996808</td><td>Mercedes Stein</td><td>Ap #732-2018 Fusce Avenue</td><td>Sunbury</td><td>78621</td><td>(682) 798-4376</td>
                <td style="width: 64px">12/25/10</td><td>Borland</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>
            <tr><td>60</td><td>996809</td><td>Blaine Carpenter</td><td>9943 Phasellus Avenue</td><td>Basin</td><td>72271</td><td>(618) 306-1899</td>
                <td style="width: 64px">05/20/11</td><td>Cakewalk</td><td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur</td></tr>	</tbody>
    </table>
</div>