<?php
use yii\helpers\Html;
?>
<center><h1>News</h1></center>
<?php foreach ($news as $myNews):?>
<?= Html::encode("{$myNews->TitleNews}") ?>
<?php endforeach; ?>


