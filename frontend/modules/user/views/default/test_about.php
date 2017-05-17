<?php

use yii\helpers\Html;
?>
<h1>hello about</h1>

<h1><?= $v_hello_str; ?></h1>

<?php $this->beginBlock('block1'); ?>
<h2>show block1</h2>
<?php $this->endBlock(); ?>