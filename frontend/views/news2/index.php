<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'News2s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news2-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create News2', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdNews',
            'TitleNews',
            'DescriptionNews',
            'ContentsNews',
            'DateNews',
            'Author',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
