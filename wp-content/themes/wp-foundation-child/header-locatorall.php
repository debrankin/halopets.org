<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<title><?php wp_title('', true, 'right'); ?></title>
				
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- icons & favicons -->
		<!-- For iPhone 4 -->
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/library/images/icons/h/apple-touch-icon.png">
		<!-- For iPad 1-->
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/library/images/icons/m/apple-touch-icon.png">
		<!-- For iPhone 3G, iPod Touch and Android -->
		<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/library/images/icons/l/apple-touch-icon-precomposed.png">
		<!-- For Nokia -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/library/images/icons/l/apple-touch-icon.png">
		<!-- For everything else -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
				
		<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

		
		<!-- bring in theme options styles -->
		<?php 
		$heading_typography = of_get_option('heading_typography');
		if ($heading_typography) {
			$theme_options_styles = '
			h1, h2, h3, h4, h5, h6{ 
				font-family: ' . $heading_typography['face'] . '; 
				font-weight: ' . $heading_typography['style'] . '; 
				color: ' . $heading_typography['color'] . '; 
			}';
		}
		
		$main_body_typography = of_get_option('main_body_typography');
		if ($main_body_typography) {
			$theme_options_styles .= '
			body{ 
				font-family: ' . $main_body_typography['face'] . '; 
				font-weight: ' . $main_body_typography['style'] . '; 
				color: ' . $main_body_typography['color'] . '; 
			}';
		}
		
		$link_color = of_get_option('link_color');
		if ($link_color) {
			$theme_options_styles .= '
			a{ 
				color: ' . $link_color . '; 
			}';
		}
		
		$link_hover_color = of_get_option('link_hover_color');
		if ($link_hover_color) {
			$theme_options_styles .= '
			a:hover{ 
				color: ' . $link_hover_color . '; 
			}';
		}
		
		$link_active_color = of_get_option('link_active_color');
		if ($link_active_color) {
			$theme_options_styles .= '
			a:active{ 
				color: ' . $link_active_color . '; 
			}';
		}
		
		$topbar_bg_color = of_get_option('top_nav_bg_color');
		if ($topbar_bg_color) {
			$theme_options_styles .= '
			.top-nav { 
				background-color: '. $topbar_bg_color . ';
			}';
		}
		
		$topbar_link_color = of_get_option('top_nav_link_color');
		if ($topbar_link_color) {
			$theme_options_styles .= '
			.top-nav > li > a { 
				color: '. $topbar_link_color . ' !important;
			}';
		}
		
		$topbar_link_hover_color = of_get_option('top_nav_link_hover_color');
		if ($topbar_link_hover_color) {
			$theme_options_styles .= '
			.top-nav > li > a:hover { 
				color: '. $topbar_link_hover_color . ' !important;
			}';
		}
		
		$suppress_comments_message = of_get_option('suppress_comments_message');
		if ($suppress_comments_message){
			$theme_options_styles .= '
			#main article {
				border-bottom: none;
			}';
		}
						
		if($theme_options_styles){
			echo '<style>' 
			. $theme_options_styles . '
			</style>';
		}
		
		?>
	<link rel="stylesheet" type="text/css" href="/MyFontsWebfontsKit/MyFontsWebfontsKit.css">
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=debrankin" async="async"></script><!-- Go to www.addthis.com/dashboard to customize your tools --><!-- Start of Google Analytics Code -->
<script>

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-3470457-1', 'auto', {'allowLinker': true });
  ga('require', 'linker');
  ga('linker:autoLink', ['shop.halopets.com', 'blog.halopets.com']);
  ga('send', 'pageview');

</script>

<!-- End of Google Analytics Code --></head>
	
	<body <?php body_class(); ?> style="background-image:url(/wp-content/uploads/2015/02/footer-bg.png);">


<div><!-- CHECK THIS - MAY REPLACE WITH CLEARFIX AFTER LIST ENDING -->

<a href="https://halopets.com"><div class="center-logo"></div></a><div class="float-nav-left"><?php ubermenu( 'main' , array( 'theme_location' => 'main_nav' ) ); ?></div><div class="float-utility-nav-rt" id="util"><ul><li><a href="http://shop.halopets.com/checkout-2-04-0/cart.ssp#cart"><img src="/wp-content/uploads/2015/02/cart-icon.png" width="22" height="17" alt="cart" /> CART</a></li><li><a href="https://checkout.netsuite.com/c.663240/myaccount-1-05-0/index.ssp"> <img src="/wp-content/uploads/2015/02/paw-icon.png" width="22" height="17" alt="my account" /> MY ACCOUNT</a></li><li><a href="<?php echo site_url(); ?>"> <img src="/wp-content/uploads/2015/02/home-icon.png" width="22" height="17" alt="cart" /></a></li></ul></div>
    
<div id="top-locator">
<div id="top-locator-info"><h2><a href="#">Where to Buy - Full Store Search</a></h2><div id="sl"><form method="post" action="https://halopets.com/getcode-all.php" target="ifrm"><input name="zip" type="text" placeholder="zip/postal"/><select id="dist" name="dist"> <option value="20" selected="selected">20</option><option value="5">5</option>
<option value="10">10</option></select><select name="units"><option value="mi">mi</option><option value="km" >km</option></select><input type="submit" id="sl-button1" class="sl-buttonText" name="search" style="margin-top:8px;clear:both;"></form></div><div class="clearfix";></div>
</div>

		<div class="row container">
			<div class="twelve columns">
				<header role="banner" id="top-header">

<div id="banner-locator-info" style="float:left;"><h2>Where to Buy - Full Store Search</h2>
<div id="sl"><form method="post" action="https://halopets.com/getcode-all.php" target="ifrm"><input name="zip" type="text" placeholder="zip/postal"/><select id="dist" name="dist"> <option value="20" selected="selected">20</option><option value="5">5</option>
<option value="10">10</option></select><select name="units"><option value="mi">mi</option><option value="km" >km</option></select><input type="submit" id="sl-button1" class="sl-buttonText" name="search" ></form></div><div class="clearfix";></div>
   </div> <div class="sharethis">
<a href="#">
<div id="p7Tooltip_1"><img src="/wp-content/uploads/2015/03/share-button-text.png" width="120" height="54" alt=""/></div>
<div id="SHARE">
  <div class="addthis_sharing_toolbox"></div>
</div>
</a>
</div>


 
		</header> <!-- end header -->
			</div></div><div style="background-image:url(/wp-content/uploads/2015/02/white-top-tornedge.png);background-repeat:repeat-x;background-position:right top;height:12px;"></div></div>

<div style="background-color: #fff; padding: 10px;margin-bottom:-18px;">