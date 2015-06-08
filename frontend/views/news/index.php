<?php
use yii\helpers\Html;

$this->title = 'News';
?>
<center><h1>News</h1></center>
<?php foreach ($news as $myNews):?>
<center><h3><?= Html::encode("{$myNews->TitleNews}") ?></h3></center>
<br>
<?= Html::encode("{$myNews->DescriptionNews}") ?>
<?php endforeach; ?>


