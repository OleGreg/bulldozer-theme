<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <title>
        <?php bloginfo('name'); ?> |
        <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">

    <!-- Creative Commons web fonts -->
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/banana-brick" type="text/css"/>
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/jellee-typeface" type="text/css"/>

    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

    <?php wp_head(); ?>

    <style>
        .slide-image{
            background: no-repeat center center;
        }
    </style>

</head>

<body>

<div class="blog-masthead">
    <div class="container">
        <!-- Static navbar -->
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo home_url(); ?>">
                        <img class= "brand-image" src="<?php echo get_theme_mod('brand_logo', get_bloginfo('template_url') . '/img/showcase.jpg' ); ?>" />
                        <?php bloginfo('name'); ?>
                    </a>
                </div>

                <?php
                wp_nav_menu( array(
                        'menu'              => 'primary',
                        'theme_location'    => 'primary',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse',
                        'container_id'      => 'bs-example-navbar-collapse-1',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new wp_bootstrap_navwalker())
                );
                ?>

            </div>
        </nav>
    </div>
</div>

<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img class="first-slide slide-image" src="<?php echo get_theme_mod('slide1_image', get_bloginfo('template_url') . '/img/showcase.jpg' ); ?>" alt="First slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1><?php echo get_theme_mod('slide1_heading', 'slide1 heading'); ?></h1>
                    <p><?php echo get_theme_mod('slide1_text', 'slide1 text, your text goes here'); ?></p>
                    <p>
                        <a class="btn btn-lg btn-primary" href="<?php echo get_theme_mod('btn_url1', 'http://test.com'); ?>" role="button">
                            <?php echo get_theme_mod('btn_text1', 'Read More'); ?>
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="second-slide slide-image" src="<?php echo get_theme_mod('slide2_image', get_bloginfo('template_url') . '/img/showcase.jpg' ); ?>" alt="Second slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1><?php echo get_theme_mod('slide2_heading', 'slide2 heading'); ?></h1>
                    <p><?php echo get_theme_mod('slide2_text', 'slide1 text, your text goes here'); ?></p>
                    <p>
                        <a class="btn btn-lg btn-primary" href="<?php echo get_theme_mod('btn_url2', 'http://test.com'); ?>" role="button">
                            <?php echo get_theme_mod('btn_text2', 'Read More'); ?>
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="third-slide slide-image" src="<?php echo get_theme_mod('slide3_image', get_bloginfo('template_url') . '/img/showcase.jpg' ); ?>" alt="Third slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1><?php echo get_theme_mod('slide3_heading', 'slide3 heading'); ?></h1>
                    <p><?php echo get_theme_mod('slide3_text', 'slide1 text, your text goes here'); ?></p>
                    <p>
                        <a class="btn btn-lg btn-primary" href="<?php echo get_theme_mod('btn_url3', 'http://test.com'); ?>" role="button">
                            <?php echo get_theme_mod('btn_text3', 'Read More'); ?>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div><!-- /.carousel -->


<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
        <div class="col-lg-4">
            <img class="img-circle" src="<?php echo get_theme_mod('heading1_image', 'data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=='); ?>" alt="Generic placeholder image" width="140" height="140">
            <h2><?php echo get_theme_mod('heading1_heading', 'heading1 heading'); ?></h2>
            <p><?php echo get_theme_mod('heading1_text', 'heading1 text, your text goes here'); ?></p>
            <p><a class="btn btn-default" href="<?php echo get_theme_mod('h_btn_url1', 'http://test.com'); ?>" role="button"><?php echo get_theme_mod('h_btn_text1', 'Read More'); ?> &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="img-circle" src="<?php echo get_theme_mod('heading2_image', 'data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=='); ?>" alt="Generic placeholder image" width="140" height="140">
            <h2><?php echo get_theme_mod('heading2_heading', 'heading2 heading'); ?></h2>
            <p><?php echo get_theme_mod('heading2_text', 'heading1 text, your text goes here'); ?></p>
            <p><a class="btn btn-default" href="<?php echo get_theme_mod('h_btn_url2', 'http://test.com'); ?>" role="button"><?php echo get_theme_mod('h_btn_text2', 'Read More'); ?> &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="img-circle" src="<?php echo get_theme_mod('heading3_image', 'data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=='); ?>" alt="Generic placeholder image" width="140" height="140">
            <h2><?php echo get_theme_mod('heading3_heading', 'heading3 heading'); ?></h2>
            <p><?php echo get_theme_mod('heading3_text', 'heading3 text, your text goes here'); ?></p>
            <p><a class="btn btn-default" href="<?php echo get_theme_mod('h_btn_url3', 'http://test.com'); ?>" role="button"><?php echo get_theme_mod('h_btn_text3', 'Read More'); ?> &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <br>

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">
                <?php echo get_theme_mod('featurette1_heading_bold', 'First featurette heading.'); ?>
                <span class="text-muted"><?php echo get_theme_mod('featurette1_heading_light', 'It\'ll blow your mind.'); ?> </span>
            </h2>
            <p class="lead"><?php echo get_theme_mod('featurette1_text', 'Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.'); ?></p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-responsive center-block" src="<?php echo get_theme_mod('featurette1_image', 'data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=='); ?>" alt="Generic placeholder image">
        </div>
    </div>

    <br>

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">
                <?php echo get_theme_mod('featurette2_heading_bold', 'Oh yeah, it\'s that good.'); ?>
                <span class="text-muted"><?php echo get_theme_mod('featurette2_heading_light', 'See for yourself.'); ?> </span>
            </h2>
            <p class="lead"><?php echo get_theme_mod('featurette2_text', 'Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.'); ?></p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-responsive center-block" src="<?php echo get_theme_mod('featurette2_image', 'data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=='); ?>" alt="Generic placeholder image">
        </div>
    </div>

    <br>

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">
                <?php echo get_theme_mod('featurette3_heading_bold', 'And lastly, this one.'); ?>
                <span class="text-muted"><?php echo get_theme_mod('featurette3_heading_light', 'Checkmate.'); ?> </span>
            </h2>
            <p class="lead"><?php echo get_theme_mod('featurette3_text', 'Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.'); ?></p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-responsive center-block" src="<?php echo get_theme_mod('featurette3_image', 'data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=='); ?>" alt="Generic placeholder image">
        </div>
    </div>

    <!-- end container -->
</div>

    <hr>

    <!-- /END THE FEATURETTES -->

    <!--    FOOTER-->

    <footer class="blog-footer">
        <p>&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></p>
        <p><a href="#">Back to top</a></p>
    </footer>

    <!--Hook-->
    <?php wp_footer(); ?>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>

</body>
</html>
