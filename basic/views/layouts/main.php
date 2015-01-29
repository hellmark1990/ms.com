<?php

use yii\helpers\Html;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        
    </head>
    <body>
        <?php $this->beginBody() ?>
         <header class="p0">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <div class="header-block clearfix">
                            <div class="navbar navbar_ clearfix">
                                <div class="navbar-inner navbar-inner_">
                                    <div class="container">
                                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse_">MENU</a>                                                   
                                        <div class="nav-collapse nav-collapse_">
                                            <ul class="nav sf-menu">
                                                <li class="active li-first"><a href="index.html"><em class="hidden-phone"></em><span class="visible-phone">Home</span></a></li>
                                                <li><a href="index-5.html">contacts</a></li>
                                            </ul>
                                        </div>
                                        <ul class="social-icons">
                                            <li><a href="#"><img src="img/icon-1.png" alt=""></a></li>
                                            <li><a href="#"><img src="img/icon-2.png" alt=""></a></li>
                                            <li><a href="#"><img src="img/icon-3.png" alt=""></a></li>
                                            <li><a href="#"><img src="img/icon-4.png" alt=""></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>   
                        </div>
                    </div>
                </div>   
            </div>
        </header>

        <section id="content" class="main-content">
            <div class="container">
                <div class="row">
                    
                </div>        
            </div>
        </section>
        
        <footer>
            <div class="container">
                <div class="row">
                    <div class="span8 float">
                        <ul class="footer-menu">
                            <li><a href="index.html" class="current">Home Page</a>|</li>
                            <li><a href="index-1.html">about</a>|</li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <?php $this->endBody() ?>
        <?php $this->endBody() ?>        
    </body>    
</html>
<?php $this->endPage() ?>
