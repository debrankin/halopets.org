<?php
/*
Template Name: Full Width Page trans-bg
*/
?>

<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->	<head>
    <meta name="sitelock-site-verification" content="1819" />
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
		<!--<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">-->
<link rel="shortcut icon" href="https://www.halopets.com/favicon.ico?v=2" />
				
		
		
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		
		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
    <link rel="stylesheet" href="https://use.typekit.net/xyy4cxh.css">

		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link href="wp-content/themes/wp-foundation-child/stylesheets/reset.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="wp-content/themes/wp-foundation-child/includes/extendjQuery.js"></script>
<script type="text/javascript" src="wp-content/themes/wp-foundation-child/includes/extendjQuery-ui.js"></script>
<link href="wp-content/themes/wp-foundation-child/includes/OnePageSite/OnePageSite2.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="wp-content/themes/wp-foundation-child/includes/OnePageSite/OnePageSite1.js"></script>
	<link rel="shortcut icon" href="favicon_1.ico" type="image/vnd.microsoft.icon" />

<link href="wp-content/themes/wp-foundation-child/includes/FlexiMenus2/CSSMenu_OnePageMenu2.css" rel="stylesheet" type="text/css" />
<link href="wp-content/themes/wp-foundation-child/css/bootstrap.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="wp-content/themes/wp-foundation-child/includes/FlexiMenus2/fleximenus2.js"></script>
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script>
  (function(d) {
    var config = {
      kitId: 'xvo8zss',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<link href="wp-content/themes/wp-foundation-child/p7ap3/p7AP3-01.css" rel="stylesheet" type="text/css" media="all">
<link href="wp-content/themes/wp-foundation-child/p7ap3/p7ap3-columns.css" rel="stylesheet" type="text/css" media="all">
<link href="wp-content/themes/wp-foundation-child/stylesheets/violator.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="wp-content/themes/wp-foundation-child/p7ap3/p7AP3scripts.js"></script>

		
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
        <link rel="stylesheet" type="text/css" href="wp-content/themes/MyFontsWebfontsKit/MyFontsWebfontsKit.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" async></script>    
        
    
	
<!-- jQuery library  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" async></script>-->
<!-- jQuery library -->
<script type="text/javascript" async>
jQuery( document ).ready(function() {
	$(window).scroll(function() {
		if($(this).scrollTop() != 0) {
			$('#backtotop').fadeIn();	
		} else {
			$('#backtotop').fadeOut();
		}
	});
 
	$('#backtotop').click(function() {
		$('body,html').animate({scrollTop:0},800);
	});	
});

$(function() {
	  $('a[href*=#]:not([href=#])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html,body').animate({
	          scrollTop: target.offset().top
	        }, 1000);
	        return false;
	      }
	    }
	  });
	});
</script>
	



</head>
	
	<body <?php body_class(); ?> >    
       

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" async></script>
<!-- jQuery library -->
<!-- jQuery library -->
<script type="text/javascript" async>
$(function() {
	$(window).scroll(function() {
		if($(this).scrollTop() != 0) {
			$('#backtotop').fadeIn();	
		} else {
			$('#backtotop').fadeOut();
		}
	});
 
	$('#backtotop').click(function() {
		$('body,html').animate({scrollTop:0},800);
	});	
});

$(function() {
	  $('a[href*=#]:not([href=#])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html,body').animate({
	          scrollTop: target.offset().top
	        }, 1000);
	        return false;
	      }
	    }
	  });
	});
</script>





<!-- End of Google Analytics Code --></head>
	
	<body <?php body_class(); ?>>
<div id="home" class="site-section">
 <div id="OnePageMenu2_container" class="FM2_OnePageMenu2_container">
    <ul id="OnePageMenu2" class="FM2_OnePageMenu2">
      <!-- version=2.0.217;name=OnePageMenu2;baseskin=skin06;colorscheme=dark_blue;type=horizontal; --><li style="padding-top:3px;padding-right:40px;padding-left:8%;border-right:none;"><img src="/wp-content/uploads/2018/07/word-logo.png" width="140" height="auto" alt=""/></li>
      <li><a href="#home" target="_self"><font class="leaf">Home</font></a></li>
 
      <li><a href="#feature" target="_self"><font class="leaf"> Featured Partners &amp; Grant Recipients</font></a></li>
      
          <li><a href="#about" target="_self"><font class="leaf">About</font></a></li>
    
      <li><a href="#help" target="_self"><font class="leaf">Lend a Paw</font></a> </li>
     
      <li><a href="#donate" target="_self"><font class="leaf">Giving</font></a></li>
      <li><a href="https://halopets.com"><font class="leaf">Halopets.com</font></a></li>
    </ul><div class="header-tag">Improving the wellbeing of pets and the people who love them</div>
   
	</div><div class="m-poopsie-violator block" id="block-poopsieviolator">
  
    
        <a href="https://halopets.com/halo-feed-it-forward"><div class="poopsie-img halo-donates"><img src="wp-content/uploads/2018/07/donate.png"></div><div class="halo-donates-text top"><div><span class="single">Halo</span> Donates a Bowl to Animals in Need</div><div class="hide-desktop">For Every Purchase You Make</div></div><div class="halo-donates-text bottom">For Every Purchase You Make</div></a>
    </div>

<a class="FM2_mobile_button" id="FM2_OnePageMenu2_mobile_button"><span class="caption">Menu</span></a><img src="wp-content/uploads/2018/07/hpf-hero-crop.jpg" width="100%" height="auto" alt=""/>
  <div class="mobile" style="margin-top:-30px;"><img src="wp-content/uploads/2018/07/hpf-logo.png" alt="" style="width:15%; min-width:150px;"/></div>
    <div class="mobile-hide" style="margin-top:-80px;"><img src="wp-content/uploads/2018/07/hpf-logo.png" alt="" style="width:15%; min-width:150px;"/></div>
  <div class="section-content-home"><h1>Welcome to the Halo
Pet Foundation</h1><h2>Improving the wellbeing of pets and the people who love them</h2>
<div style="margin-bottom:25px;"><p style="font-size: 13pt; font-weight: 500; text-align: left;">Inspired by our love for animals, we strive to help pets and their families live longer, happier, healthier lives together. Specifically, we seek to educate people on responsible pet ownership, eliminating animal abuse and reducing the overpopulation of uncared-for pets.
</p>
  <div id="p7AP3_2" class="p7AP3-01 p7AP3">
    <div id="p7AP3rw_2" class="p7AP3root-wrapper">
      <div class="p7AP3trig p7ap3-theme-01">
        <h3><a href="#p7AP3c2_1" id="p7AP3t2_1">Learn more</a></h3>
      </div>
      <div id="p7AP3w2_1" class="p7AP3cwrapper p7ap3-theme-01">
        <div id="p7AP3c2_1" class="p7AP3content p7ap3-theme-01">
          <div id="p7AP3p2_1" class="p7AP3panelcontent p7ap3-theme-01">
            <div class="p7ap3-col-wrapper no-columns">
              <p style="font-size: 13pt; font-weight: 500; text-align: left;">Through the Halo Pet Foundation, whose mission is to improve the wellbeing of pets and the people who love them, we support great organizations, including The Humane Society of the United States, the ASPCA, National Canine Cancer Foundation, Center for Canine Behavior Studies, The Green Chimneys Human Animal Interaction conference, Pets for Patriots, and more. </p>
              <p style="font-size: 13pt; font-weight: 500; text-align: left;">Halo, Purely for Pets, donates a minimum of ½% of sales—five times the national corporate giving average—to the Halo Pet Foundation and to provide food for shelter pets. </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--[if lte IE 7]><style>.p7AP3, .p7AP3cwrapper, .p7AP3panelcontent, .p7AP3trig a {zoom: 1;}</style><![endif]-->
    <!--[if IE 5]><style>.p7AP3cwrapper {height: auto !important;}</style><![endif]-->
    <script type="text/javascript">P7_opAP3('p7AP3_2',1,2,0,0,0,0,0,0,1,0,1000,250,1,1);</script>
  </div>
</div>
<a href="#help"><div class="donate-button" id="button1">
	<div>DONATE NOW</div>
</div></a>
	
	 <!-- <div style="background-image:url(images/manny-bub.png);background-position:center center;background-size:contain;background-repeat:no-repeat;ext:align:center;padding:15% 0;">
	    <h4>Manny the Frenchie and LIL BUB<br>Ambassadors
	    </h4></div>-->
	
</div>
</div>					
					<div class="site info navinfo">
						<h1><a class="brand" id="logo" href="<?php echo get_bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
						<h4 class="subhead"><?php echo get_bloginfo ( 'description' ); ?></h4>
					</div>
 
			

				</header> <!-- end header -->
			</div>