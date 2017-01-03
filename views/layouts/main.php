<?php

/**
 * @var $this yii\web\View
 * @var $content string
 */

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;

?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <?php NavBar::begin(['brandLabel' => Yii::$app->name]) ?>
        <?= Nav::widget([
            'items' => [
                ['label' => 'Home', 'url' => ['/site/index']],
            ],
            'options' => ['class' => 'navbar-nav'],
        ]) ?>
        <?php NavBar::end() ?>
        <div class="container">
            <?= $content ?>
        </div>
        <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>