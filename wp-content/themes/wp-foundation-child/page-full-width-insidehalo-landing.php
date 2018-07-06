<?php
/*
Template Name: Full Width Inside Halo Landing Page
*/
?>

<?php get_header(insidehalo); ?>




<div id="top-insidehalo">
<div id="top-aboutus-info"><h3><a href="#">#HaloFeeditForward</a></h3>When you share a photo of your pet with #HaloFeedItForward, we’ll donate a meal of Halo to a shelter pet on your behalf. So join the movement. Help us nourish healthier, happier shelter pets—and give them their very best chance at a forever home.
<br />
   <div class="sm-box">
<a href="http://facebook.com/HaloPets" target="_blank"><div class="fb-button"></div></a>
<a href="http://twitter.com/HaloPets" target="_blank"><div class="tw-button"></div></a>
<a href="http://instagram.com/HaloPets" target="_blank"><div class="inst-button"></div></a>
</div>
</div>
		<div class="row container">
			<div class="twelve columns">
				<header role="banner" id="top-header">
<div id="banner-aboutus-info"><h2>About HALO, Purely for Pets<span style="font-size:8pt;">&reg;</span> </h2>
For over 30 years, Halo, Purely for Pets<span style="font-size:6pt;">&reg;</span>   has created holistic pet products of uncompromising quality. Halo believes nutrition is the single most important factor in the quality of a pet’s life.
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


<?php get_footer(); ?>