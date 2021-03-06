<?php
/* @var $this yii\web\View */

use yii\helpers\Url;
use yii\helpers\Html;
use yii\helpers\StringHelper;
use frontend\controllers\SiteController;

$this->title = 'Каталог туров';
$this->params['sidebarType'] = 4;
$this->params['breadcrumbs'][] = ['label' => $this->title];
?>
<div class="tours-catalog">
    <div class="container">
        <div class="row">
            <div class="main-content__heading">
                <h3 class="title">
                    <?=$this->title?>
                </h3>
            </div>  <!--main-content__heading-->

            <form class="search-field" method="get">
                <input type="search" placeholder="Поиск по турам" name="search" value="<?=!empty($get['search']) ? $get['search'] : '' ?>">
                <input type="submit" value="">
            </form>

            <div class="row">
                <?php foreach($models as $model): ?>
                <div class="tours-catalog__item-wrapper col-lg-6 col-md-6 col-sm-6">
                    <div class="tours-catalog__item">
                        <div class="image">
                            <img src="<?=$model->getImage() ? $model->getImage()->getUrl('426x174'):''?>" alt="">
                        </div>
                        <div class="caption clearfix">
                            <h4 class="title"><?=Html::encode($model->title_ru)?></h4>
                            <hr>
                            <p><?=StringHelper::truncateWords(Html::encode($model->description_ru), 20)?> </p>
                            <hr>
                            <p class="tour-duration"><i class="icon"></i> <?=$model->duration?></p>
                            <a href="<?=Url::to('/tours/show/'.$model->id)?>" class="common-button common-button--thin">Подробнее</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                <?php if(!empty($models) && count($models) % 2 == 0 && count($models) % 20 == 0): ?>
                <a href="<?=Url::to(['/tours/', 'limit'=>$limit])?>" class="common-button load-more-btn common-button--thin">Загрузить еще</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>  <!--tours-page-->
