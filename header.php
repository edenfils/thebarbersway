<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Document Meta
    ============================================= -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--IE Compatibility Meta-->
    <meta name="author" content="zytheme" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/assets/images/favicon/favicon.png" rel="icon">

    <!-- Fonts
    ============================================= -->
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900%7COpen+Sans:300,300i,400,400i,600,600i,700,700i,800,800i' rel='stylesheet' type='text/css'>

    <!-- Stylesheets
    ============================================= -->
    <link href="<?php echo get_bloginfo('template_directory'); ?>/assets/css/external.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/assets/css/style.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/assets/css/custom.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->

    <!-- Document Title
    ============================================= -->
    <title><?php wp_title(); ?></title>

</head>

<body <?php body_class() ?>>
    <div class="preloader">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>
    <!-- Document Wrapper
	============================================= -->
<div id="wrapper" class="wrapper clearfix">
    <header id="navbar-spy" class="header header-topbar header-transparent header-fixed">

	<nav id="primary-menu" class="navbar navbar-fixed-top">
		<div class="container">
			<div class="">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="logo" href="/">
					<img class="logo-light" src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/logo/logo-light3.png" alt="Hairy Logo">
					<img class="logo-dark" src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/logo/logo-light3.png" alt="Hairy Logo">
				</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse pull-right" id="navbar-collapse-1">
				<ul class="nav navbar-nav nav-pos-right nav-bordered-right snavbar-left">
		<!-- Home Menu -->
<li class="active">
    <a href="/" class="menu-item">home</a>
</li>
<!-- li end -->
<!-- Pages Menu -->
<li class="has-dropdown">
    <a href="/" data-toggle="dropdown" class="dropdown-toggle link-hover" data-hover="pages">pages</a>
    <ul class="dropdown-menu">
        <li><a href="/about-me">about me</a></li>
        <li><a href="/book-online-demo">book online demo</a></li>
        <li><a href="/brand-questionnaire">Client Questionnaire</a></li>
    </ul>
</li>
<!-- li end -->
<!-- Services Menu-->
<li>
    <a href="/services" class="menu-item">Services</a>
</li>
<!-- li end -->
<!-- Blog Menu-->
<li>
    <a href="/blog" class="menu-item">Blog</a>
</li>
<!-- li end -->
<!-- Gallery Menu-->
<li class="">
    <a href="/gallery-demo" class="menu-item">Gallery</a>
</li>
<!-- li end -->


				<!-- Module Search -->
<div class="module module-search pull-left">
    <div class="module-icon search-icon">
        <i class="lnr lnr-magnifier"></i>
        <span class="title">search</span>
    </div>
    <div class="module-content module-fullscreen module--search-box">
        <div class="pos-vertical-center">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                        <form role="search" method="get" action="/" class="form-search">
                            <input type="text" class="form-control" placeholder="Search..">
                            <button class="btn" type="button"><i class="lnr lnr-magnifier"></i></button>
                        </form>
                        <!-- .form-search end -->
                    </div>
                    <!-- .col-md-8 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </div>
        <a class="module-cancel" href="#"><i class="lnr lnr-cross"></i></a>
    </div>
</div>
<!-- .module-search end -->
				<!-- Module Cart -->
				<div class="module module-cart pull-left">
					<div class="module-icon">
						<a class="btn btn--white btn--bordered btn--rounded" href="/contact">Hire Me</a>
					</div>
				</div>
				<!-- .module-cart end -->
			</div>
			<!-- /.navbar-collapse -->
			</div>
		</div>
		<!-- /.container-fluid -->
	</nav>

</header>
