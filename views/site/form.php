<?php
use yii\widgets\ActiveForm;
use yii\helpers;

?>
<?php if ($name) {?><p> Ви ввили имя <b><?=$name?></b> и имейл <b> <?=$email?> </b>. </p> <?php } ?>
<?php $f=ActiveForm::begin();?>
    <?=$f->field($form,'name')?>
    <?=$f->field($form,'email')?>
    <?=helpers\Html::submitButton('Send');?>

<?php ActiveForm::end();?>