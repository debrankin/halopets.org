<?php
/*
Template Name: Full Width kibbledrop Landing Page
*/
?>

<?php get_header(kdrop); ?>
<div id="top-kdrop">
<div id="top-campaign-info"><h3>Proud Sponsor of Freekibble.com</h3>Donating 1.5 million bowls of Halo every year to shelter pets <div class="sm-box">
<a href="http://facebook.com/HaloPets" target="_blank"><div class="fb-button"></div></a>
<a href="http://twitter.com/HaloPets" target="_blank"><div class="tw-button"></div></a>
<a href="http://instagram.com/HaloPets" target="_blank"><div class="inst-button"></div></a>
</div>
</div>
		<div class="row container">
			<div class="twelve columns">
				<header role="banner" id="top-header">
<div id="banner-campaign-info"><h3>Proud Sponsor of Freekibble.com</h3>
Donating 1.5 million bowls of Halo every year to shelter pets
  <br />
      <div class="sm-box">
<a href="http://facebook.com/HaloPets" target="_blank"><div class="fb-button"></div></a>
<a href="http://twitter.com/HaloPets" target="_blank"><div class="tw-button"></div></a>
<a href="http://instagram.com/HaloPets" target="_blank"><div class="inst-button"></div></a>
</div>
</div>
		</header> <!-- end header -->
			</div></div></div><div style="background-image:url(/wp-content/uploads/2015/02/white-top-tornedge.png);background-repeat:repeat-x;background-position:right top;height:12px;></div></div><div style="background-color: #fff; padding: 10px;margin-bottom:-14px;"></div>
		
			<div id="content" class="clearfix">
			<!-- <div id="main" class="twelve columns clearfix" role="main"> -->
				<div id="main-custom" class="clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						<header>
							
							<h1 style="display:none;"><?php the_title(); ?></h1>
						
						</header> <!-- end article header -->
					
						<section class="post_content">
							<?php the_content(); ?>
					
						</section> <!-- end article section -->
						
						<footer>
			
							<p class="clearfix"><?php the_tags('<span class="tags">Tags: ', ', ', '</span>'); ?></p>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					<?php comments_template(); ?>
					
					<?php endwhile; ?>	
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1>Not Found</h1>
					    </header>
					    <section class="post_content">
					    	<p>Sorry, but the requested resource was not found on this site.</p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
			
</div> <!-- end #main -->
    
			
    
			</div> <!-- end #content --><div class="clearfix"></div>


<?php get_footer(campaign); ?>