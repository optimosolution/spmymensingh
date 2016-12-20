<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="S.M. Saidur Rahman">
        <meta name="generator" content="Optimo Solution" />
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <!-- CSS -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/font-awesome.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/animate.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/lightbox.css" rel="stylesheet" media="screen">
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/syntax/shCore.css" rel="stylesheet"  media="screen">
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/syntax/shThemeDefault.css" rel="stylesheet"  media="screen">
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" rel="stylesheet" media="screen" title="default">
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/color-blue.css" rel="stylesheet" media="screen" title="default">
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/width-full.css" rel="stylesheet" media="screen" title="default">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/html5shiv.js"></script>
            <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="boxed animated fadeIn animation-delay-5">
            <header id="header" class="hidden-xs">
                <div class="container">
                    <div id="header-title">
                        <?php
                        $logo = CHtml::image(Yii::app()->theme->baseUrl . '/img/logo.png', Yii::app()->name, array('alt' => Yii::app()->name, 'class' => 'img-responsive alignleft', 'title' => Yii::app()->name, 'style' => ''));
                        echo CHtml::link($logo, array('site/index'), array('class' => ''));
                        ?>
                    </div>
                    <div id="social-header" class="hidden-xs">

                    </div>
                    <div id="search-header" class="hidden-xs animated bounceInRight">

                    </div>
                </div> <!-- container -->
            </header> <!-- header -->
            <nav class="navbar navbar-static-top navbar-mind" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <?php echo CHtml::link(Yii::app()->name, array('site/index'), array('class' => 'navbar-brand visible-xs')); ?>
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-mind-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <i class="fa fa-bars fa-inverse"></i>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-mind-collapse">
                        <ul class="nav navbar-nav">
                            <li class="active">
                                <?php echo CHtml::link('<i class="fa fa-home"></i> ' . Title::get_title(2), array('site/index'), array('class' => '', 'title' => 'Home')); ?>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo ContentCategory::getCategoryName(1); ?><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><?php echo CHtml::link(Content::get_title(1), array('content/view', 'id' => 1), array('class' => '')); ?></li>
                                    <li><?php echo CHtml::link(Content::get_title(2), array('content/view', 'id' => 2), array('class' => '')); ?></li>
                                    <li><?php echo CHtml::link(Content::get_title(3), array('content/view', 'id' => 3), array('class' => '')); ?></li>
                                    <li><?php echo CHtml::link(Content::get_title(4), array('content/view', 'id' => 4), array('class' => '')); ?></li>
                                    <li><?php echo CHtml::link(ContentCategory::getCategoryName(21), array('content/index', 'id' => 21), array('class' => '')); ?></li>

                                </ul>
                            </li> <!-- dropdown -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo ContentCategory::getCategoryName(2); ?><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><?php echo CHtml::link(Content::get_title(5), array('content/view', 'id' => 5), array('class' => '')); ?></li>
                                    <li><?php echo CHtml::link(Content::get_title(6), array('content/view', 'id' => 6), array('class' => '')); ?></li>
                                    <li><?php echo CHtml::link(Content::get_title(7), array('content/view', 'id' => 7), array('class' => '')); ?></li>
                                    <li><?php echo CHtml::link(Content::get_title(8), array('content/view', 'id' => 8), array('class' => '')); ?></li>
                                    <li><?php echo CHtml::link(Content::get_title(9), array('content/view', 'id' => 9), array('class' => '')); ?></li>
                                    <li><?php echo CHtml::link(Content::get_title(10), array('content/view', 'id' => 10), array('class' => '')); ?></li>
                                </ul>
                            </li> <!-- dropdown -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo ContentCategory::getCategoryName(3); ?><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><?php echo CHtml::link(Content::get_title(11), array('content/view', 'id' => 11), array('class' => '')); ?></li>
                                    <li><?php echo CHtml::link(Content::get_title(12), array('content/view', 'id' => 12), array('class' => '')); ?></li>
                                    <li><?php echo CHtml::link(Content::get_title(13), array('content/view', 'id' => 13), array('class' => '')); ?></li>
                                    <li><?php echo CHtml::link(Content::get_title(14), array('content/view', 'id' => 14), array('class' => '')); ?></li>
                                    <li><?php echo CHtml::link(Content::get_title(15), array('content/view', 'id' => 15), array('class' => '')); ?></li>
                                    <li><?php echo CHtml::link(Content::get_title(16), array('content/view', 'id' => 16), array('class' => '')); ?></li>
                                    <li><?php echo CHtml::link(Content::get_title(17), array('content/view', 'id' => 17), array('class' => '')); ?></li>
                                    <li><?php echo CHtml::link(Content::get_title(18), array('content/view', 'id' => 18), array('class' => '')); ?></li>      
                                </ul>
                            </li> <!-- dropdown -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo ContentCategory::getCategoryName(4); ?><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-header"><?php echo ContentCategory::getCategoryName(5); ?></li>
                                    <li><?php echo CHtml::link(Content::get_title(33), array('content/view', 'id' => 33), array('class' => '')); ?></li>
                                    <li><?php echo CHtml::link(Content::get_title(34), array('content/view', 'id' => 34), array('class' => '')); ?></li>
                                    <li><?php echo CHtml::link(Content::get_title(35), array('content/view', 'id' => 35), array('class' => '')); ?></li>
                                    <li><?php echo CHtml::link(BannerCategory::get_title(7), array('gallery/index', 'id' => 7), array('class' => '')); ?></li>
                                    <li><?php echo CHtml::link(Content::get_title(36), array('content/view', 'id' => 36), array('class' => '')); ?></li>
                                    <li><?php echo CHtml::link(Content::get_title(37), array('content/view', 'id' => 37), array('class' => '')); ?></li>
                                    <li><?php echo CHtml::link(Content::get_title(38), array('content/view', 'id' => 38), array('class' => '')); ?></li>
                                    <li><?php echo CHtml::link(Content::get_title(39), array('content/view', 'id' => 39), array('class' => '')); ?></li>
                                    <li><?php echo CHtml::link(Content::get_title(40), array('content/view', 'id' => 40), array('class' => '')); ?></li>
                                    <li><?php echo CHtml::link(Content::get_title(41), array('content/view', 'id' => 41), array('class' => '')); ?></li>
                                    <li><?php echo CHtml::link(Content::get_title(42), array('content/view', 'id' => 42), array('class' => '')); ?></li>
                                    <li><?php echo CHtml::link(Content::get_title(43), array('content/view', 'id' => 43), array('class' => '')); ?></li>
                                    <li><?php echo CHtml::link(Content::get_title(44), array('content/view', 'id' => 44), array('class' => '')); ?></li>
                                    <li class="dropdown-header"><?php echo ContentCategory::getCategoryName(6); ?></li>
                                    <li><?php echo CHtml::link(Content::get_title(45), array('content/view', 'id' => 45), array('class' => '')); ?></li>
                                    <li><?php echo CHtml::link(Content::get_title(46), array('content/view', 'id' => 46), array('class' => '')); ?></li>
                                    <li><?php echo CHtml::link(Content::get_title(47), array('content/view', 'id' => 47), array('class' => '')); ?></li>
                                    <li class="dropdown-header"><?php echo ContentCategory::getCategoryName(7); ?></li>
                                    <li><?php echo CHtml::link(Content::get_title(48), array('content/view', 'id' => 48), array('class' => '')); ?></li>
                                    <li class="dropdown-header"><?php echo ContentCategory::getCategoryName(8); ?></li>
                                    <li><?php echo CHtml::link(Content::get_title(49), array('content/view', 'id' => 49), array('class' => '')); ?></li>
                                </ul>
                            </li> <!-- dropdown -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo ContentCategory::getCategoryName(9); ?><b class="caret"></b></a>            
                                <ul class="dropdown-menu">
                                    <li class="dropdown-header"><?php echo ContentCategory::getCategoryName(10); ?></li>
                                    <li><i class="icon"></i><?php echo CHtml::link(Content::get_title(23), array('content/view', 'id' => 23), array('class' => '')); ?></li>  
                                    <li><?php echo CHtml::link(Content::get_title(24), array('content/view', 'id' => 24), array('class' => '')); ?></li>
                                    <li><?php echo CHtml::link(Content::get_title(25), array('content/view', 'id' => 25), array('class' => '')); ?></li>
                                    <li><?php echo CHtml::link(Content::get_title(26), array('content/view', 'id' => 26), array('class' => '')); ?></li>
                                    <li><?php echo CHtml::link(Content::get_title(27), array('content/view', 'id' => 27), array('class' => '')); ?></li>
                                    <li class="dropdown-header"><?php echo ContentCategory::getCategoryName(11); ?></li>
                                    <li><?php echo CHtml::link(Content::get_title(28), array('content/view', 'id' => 28), array('class' => '')); ?></li>  
                                    <li><?php echo CHtml::link(Content::get_title(29), array('content/view', 'id' => 29), array('class' => '')); ?></li>
                                    <li class="dropdown-header"><?php echo ContentCategory::getCategoryName(12); ?></li>
                                    <li><?php echo CHtml::link(Content::get_title(30), array('content/view', 'id' => 30), array('class' => '')); ?></li>  
                                    <li><?php echo CHtml::link(Content::get_title(31), array('content/view', 'id' => 31), array('class' => '')); ?></li>
                                    <li><?php echo CHtml::link(Content::get_title(32), array('content/view', 'id' => 32), array('class' => '')); ?></li>
                                    <li><?php echo CHtml::link(Content::get_title(22), array('content/view', 'id' => 22), array('class' => '')); ?></li>  
                                </ul>
                            </li> <!-- dropdown -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo ContentCategory::getCategoryName(13); ?><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><?php echo CHtml::link(Content::get_title(50), array('content/view', 'id' => 50), array('class' => '')); ?></li>  
                                    <li><?php echo CHtml::link(Content::get_title(51), array('content/view', 'id' => 51), array('class' => '')); ?></li>
                                    <li><?php echo CHtml::link(Content::get_title(52), array('content/view', 'id' => 52), array('class' => '')); ?></li>
                                    <li><?php echo CHtml::link(Content::get_title(53), array('content/view', 'id' => 53), array('class' => '')); ?></li> 
                                    <li><?php echo CHtml::link(ContentCategory::getCategoryName(29), array('content/index', 'id' => 29), array('class' => '')); ?></li>  
                                    <li><?php echo CHtml::link(ContentCategory::getCategoryName(30), array('content/index', 'id' => 30), array('class' => '')); ?></li>  
                                    <li><?php echo CHtml::link(ContentCategory::getCategoryName(31), array('content/index', 'id' => 31), array('class' => '')); ?></li>                                     
                                    <li class="dropdown-header"><?php echo ContentCategory::getCategoryName(14); ?></li>
                                    <li><?php echo CHtml::link(ContentCategory::getCategoryName(32), array('content/index', 'id' => 32), array('class' => '')); ?></li>  
                                    <li><?php echo CHtml::link(ContentCategory::getCategoryName(33), array('content/index', 'id' => 33), array('class' => '')); ?></li>                                    
                                </ul>
                            </li> <!-- dropdown -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo ContentCategory::getCategoryName(15); ?><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><?php echo CHtml::link(ContentCategory::getCategoryName(34), array('content/index', 'id' => 34), array('class' => '')); ?></li>  
                                    <li><?php echo CHtml::link(ContentCategory::getCategoryName(35), array('content/index', 'id' => 35), array('class' => '')); ?></li>
                                    <li><?php echo CHtml::link(BannerCategory::get_title(5), array('gallery/index', 'id' => 5), array('class' => '')); ?></li>
                                    <li><?php echo CHtml::link(BannerCategory::get_title(8), array('gallery/index', 'id' => 8), array('class' => '')); ?></li>
                                    <li><?php echo CHtml::link(ContentCategory::getCategoryName(36), array('content/index', 'id' => 36), array('class' => '')); ?></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo ContentCategory::getCategoryName(16); ?><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><?php echo CHtml::link(ContentCategory::getCategoryName(37), array('content/index', 'id' => 37), array('class' => '')); ?></li>  
                                    <li><?php echo CHtml::link(ContentCategory::getCategoryName(38), array('content/index', 'id' => 38), array('class' => '')); ?></li>
                                    <li><?php echo CHtml::link(ContentCategory::getCategoryName(39), array('content/index', 'id' => 39), array('class' => '')); ?></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo ContentCategory::getCategoryName(17); ?><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><?php echo CHtml::link(ContentCategory::getCategoryName(40), array('content/index', 'id' => 40), array('class' => '')); ?></li>  
                                    <li><?php echo CHtml::link(ContentCategory::getCategoryName(41), array('content/index', 'id' => 41), array('class' => '')); ?></li>
                                    <li><?php echo CHtml::link(ContentCategory::getCategoryName(42), array('content/index', 'id' => 42), array('class' => '')); ?></li>
                                    <li><?php echo CHtml::link(ContentCategory::getCategoryName(43), array('content/index', 'id' => 43), array('class' => '')); ?></li>
                                </ul>
                            </li>
                            <li class="">
                                <?php echo CHtml::link(ContentCategory::getCategoryName(18), array('content/index', 'id' => 18), array('class' => '')); ?>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo BannerCategory::get_title(4); ?><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><?php echo CHtml::link(BannerCategory::get_title(1), array('gallery/index', 'id' => 1), array('class' => '')); ?></li>
                                    <li><?php echo CHtml::link(BannerCategory::get_title(2), array('gallery/index', 'id' => 2), array('class' => '')); ?></li>
                                    <li><?php echo CHtml::link(BannerCategory::get_title(3), array('gallery/index', 'id' => 3), array('class' => '')); ?></li>
                                </ul>
                            </li> <!-- dropdown -->
                            <li class="">
                                <?php echo CHtml::link(Title::get_title(1), array('site/contact'), array('class' => '')); ?>
                            </li>
                            <li class="">
                                <?php echo CHtml::link(Content::get_title(61), array('content/view', 'id' => 61), array('class' => '')); ?>
                            </li>
                        </ul> <!-- nav nabvar-nav -->
                    </div><!-- navbar-collapse -->
                </div> <!-- container -->
            </nav> <!-- navbar navbar-default -->
            <?php echo $content; ?>
            <aside id="footer-widgets">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <h3 class="footer-widget-title">Subscribe</h3>
                            <p>Enter your e-mail below to subscribe to our free newsletter. We promise not to bother you often!</p>
                            <?php
                            $form = $this->beginWidget('CActiveForm', array(
                                'id' => 'subscribe-form',
                                'action' => Yii::app()->createUrl('/site/subscrib'),
                                'enableAjaxValidation' => false,
                            ));
                            ?>
                            <div class="input-group">
                                <?php echo CHtml::textField('Subscriber[email]', '', array('type' => 'text', 'class' => 'form-control', 'placeholder' => 'Email Adress')); ?> 
                                <span class="input-group-btn">
                                    <?php echo CHtml::submitButton('Subscribe', array('class' => 'btn btn-success')); ?>
                                </span>
                            </div><!-- /input-group -->
                            <?php $this->endWidget(); ?>
                        </div>
                        <div class="col-md-5">
                            <div class="footer-widget">
                                <h3 class="footer-widget-title"><?php echo ContentCategory::getCategoryName(14); ?></h3>
                                <?php $this->get_popular_business_blog(14); ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="footer-widget">
                                <h3 class="footer-widget-title"><?php echo ContentCategory::getCategoryName(16); ?></h3>
                                <?php $this->get_popular_business_blog(16); ?>
                            </div>
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </aside> <!-- footer-widgets -->
            <footer id="footer">
                <p>&copy; <?php echo date('Y'); ?> <?php echo Yii::app()->name; ?>. All rights reserved. Designed & Developed By Momtaj Trading(Pvt.) Ltd.</p>
            </footer>
        </div> <!-- boxed -->
        <div id="back-top">
            <a href="#header"><i class="fa fa-chevron-up"></i></a>
        </div>
        <!-- Scripts -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-1.10.2.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.cookie.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.mixitup.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/lightbox-2.6.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/holder.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/app.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/styleswitcher.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/syntax/shCore.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/syntax/shBrushXml.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/syntax/shBrushJScript.js"></script>
        <script type="text/javascript">
            SyntaxHighlighter.all()
        </script>
    </body>
</html> 