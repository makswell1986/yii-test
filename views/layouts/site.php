<?php

use app\assets\AppAsset;

use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);


$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);


?>

<?php $this->beginPage(); ?>



<html lang="<?= Yii::$app->language ?>">

<head>
<?php $this->head() ?>


<title><?= Html::encode($this->title) ?></title>


</head>

<body>
<?php $this->beginBody() ?>
  
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <div class="header_nav">
          <a class="navbar-brand brand_desktop" href="index.html">
            <img src="/images/logo.png" alt="" />
          </a>
          <div class="main_nav">
            <div class="top_nav">
              <ul class=" ">
                <li class="">
                  <a class="" href="">
                 <? if (Yii::$app->user->isGuest){  ?>
                    <span><?= Html::a('Login', ['site/login'], ['class' => '']) ?></span>
                    
                 <? } else { ?>
                  <span> <?= Html::beginForm(['/site/logout'])
                    . Html::submitButton(
                        'Logout (' . Yii::$app->user->identity->username . ')',
                        ['class' => 'nav-link btn btn-link logout']
                    )
                    . Html::endForm()   ?>                      
                  
                </span>

                 <?}?>
                    
                    </a>
                </li>
                <li class="">
                  <a class="" href="/site/register">
                    
                    <span>Register</span>
                  </a>
                </li>
                <li class="">
                  <a class="" href="">
                    <img src="/images/location.png" alt="" />
                    <span>Den mark Loram ipusum</span>
                  </a>
                </li>
                <li class="">
                  <a class="" href="">
                    <span><?= $this->render('language') ?></span>
                  </a>
                </li>
              </ul>
            </div>
            <div class="bottom_nav">
              <nav class="navbar navbar-expand-lg custom_nav-container">
                <a class="navbar-brand brand_mobile" href="index.html">
                  <img src="/images/logo.png" alt="" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                    <ul class="navbar-nav  ">
                      <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="about.html"> About </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="class.html"> Classes </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="blog.html">Blog</a>
                      </li>
                    </ul>
                    <form class="form-inline">
                      <button class="btn ml-3 ml-lg-5 nav_search-btn" type="submit"></button>
                    </form>
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->

<?= $content ?>

              <!-- footer section -->
              <section class=" footer_section ">
                <div class="social_box">
                  <a href="#">
                    <img src="/images/facebook.png" alt="">
                  </a>
                  <a href="#">
                    <img src="/images/twitter.png" alt="">
                  </a>
                  <a href="#">
                    <img src="/images/linkedin.png" alt="">
                  </a>
                  <a href="#">
                    <img src="/images/instagram.png" alt="">
                  </a>
                  <a href="#">
                    <img src="/images/youtube.png" alt="">
                  </a>
                </div>
                <p>
                  &copy; 2020 All Rights Reserved. Design by
                  <a href="https://html.design/">Free Html Templates</a>
                </p>
              </section>
              <!-- footer section -->

        
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <?php $this->endBody() ?>
</body>

</html>

<?php $this->endPage() ?>