<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AdvSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Рекламные баннеры';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="adv-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать баннер', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            /*'id',*/
            'link',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]) ?>

</div>
