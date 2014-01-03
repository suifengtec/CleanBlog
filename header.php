<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" >
	<!---->
	<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="author" content="Coolwp.com">
	<?php if(is_search()){//Prevent Search Bots from Indexing Search Results ?>
    <meta name="robots" content="noindex, nofollow" />
	<?php }?>
	<?php include('func/seo.php'); ?>
		<!-- Open Graph Tags -->
	<meta property="og:site_name" content="<?php bloginfo('name') ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:description" content="<?php bloginfo('description') ?>" />
	<meta property="og:url" content="<?php bloginfo('url') ?>" />
	<!-- End Open Graph Tags -->

	<!--For Apple-->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="format-detection" content="telephone=no">
	<!-- iOS Web App -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo('name') ?>" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
	<link rel="apple-touch-icon-precomposed" href="/images/ios/icon.png" />
	<!-- iPhone -->
	<link href="<?php echo THEME_IMG ?>/320x460.png"
	      media="(device-width: 320px) and (device-height: 480px)
	         and (-webkit-device-pixel-ratio: 1)"
	      rel="apple-touch-startup-image" />

	<!-- iPhone (Retina) -->
	<link href="<?php echo THEME_IMG ?>/640x920.png"
	      media="(device-width: 320px) and (device-height: 480px)
	         and (-webkit-device-pixel-ratio: 2)"
	      rel="apple-touch-startup-image" />

	<!-- iPhone 5 -->
	<link href="<?php echo THEME_IMG ?>/640x1096.png"
	      media="(device-width: 320px) and (device-height: 568px)
	         and (-webkit-device-pixel-ratio: 2)"
	      rel="apple-touch-startup-image" />

	<!-- iPad -->
	<link href="<?php echo THEME_IMG ?>/768x1004.png"
	      media="(device-width: 768px) and (device-height: 1024px)
	         and (orientation: portrait)
	         and (-webkit-device-pixel-ratio: 1)"
	      rel="apple-touch-startup-image" />
	<link href="<?php echo THEME_IMG ?>/748x1024.png"
	      media="(device-width: 768px) and (device-height: 1024px)
	         and (orientation: landscape)
	         and (-webkit-device-pixel-ratio: 1)"
	      rel="apple-touch-startup-image" />

	<!-- iPad (Retina) -->
	<link href="<?php echo THEME_IMG ?>/1536x2008.png"
	      media="(device-width: 768px) and (device-height: 1024px) and (orientation: portrait)and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
	<link href="<?php echo THEME_IMG ?>/1496x2048.png"
	      media="(device-width: 768px) and (device-height: 1024px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />

	<!-- Feeds and Pingback -->
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS2 Feed" href="<?php bloginfo('rss2_url'); ?>"/>

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo THEME_IMG;?>/favicon.ico"  type="image/x-icon">
	<link rel="apple-touch-icon" href="<?php echo THEME_IMG;?>/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo THEME_IMG;?>/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo THEME_IMG;?>/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo THEME_IMG;?>/apple-touch-icon-144x144.png">

	<?php wp_head();?>
	<!--[if IE 6]>
	<link rel="stylesheet" type="text/css" href="<?php echo THEME_URI; ?>/ui/css/bootstrap-ie6.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo THEME_URI; ?>/ui/css/ie.css">
	<![endif]-->
	<!--[if IE 7]>
		<link rel="stylesheet" href="<?php echo THEME_URI; ?>/ui/css/font-awesome-ie7.min.css" type="text/css">
	<![endif]-->


	<?php if(is_user_logged_in() ):?><style>.navbar{margin-top:28px;}</style>
	<?php endif; ?>
	<?php if ( is_singular() ){ ?>
<link rel="stylesheet" href="<?php echo THEME_URI; ?>/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo THEME_JS; ?>/comments-ajax.js"></script>
<?php } ?>
</head>
<body <?php body_class(); ?>>
      <!--Header content-->
      <div class="navbar navbar-fixed-top">
	  <div class="navbar-inner">
	   <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse" title="菜单" ><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
	    <a class="brand" href="<?php bloginfo('url');?>"title="<?php bloginfo('name');?>:<?php bloginfo('description');?>">CoolWP</a>
	      <div class="nav-collapse collapse">
		 <?php cwpmenu();?>
			    <ul class="nav">
			  	  <li>
					  <!-- Button to trigger modal -->
				      <a href="#myModal" role="button" data-toggle="modal">搜索</a>
					</li>
			    </ul>
  			</div>
	  </div>
	</div><!--//Menu-->
