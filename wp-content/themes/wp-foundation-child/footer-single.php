</div></div><!-- end #container -->
 <footer role="contentinfo" class="footer">
<div id="footer-wrap" style="clear:both;"><div class="row">
<?php
      if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Custom Widget Area') ) : ?>
<?php endif; ?>
							<nav class="twelve columns clearfix">
								<!--<?php bones_footer_links(); ?> -->
<?php ubermenu( 'footer_custom' , array( 'theme_location' => 'footer_links' ) ); ?>
							</nav> <div class="site-info">
  
  Copyright © <?php echo date( 'Y' ); ?>  Halo, Purely for Pets
</div><!-- .site-info -->	
</div>			
</div></footer><!-- end footer -->
		
		
		
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
	<?php wp_footer(); // js scripts are inserted using this function ?>
<!-- start number replacer -->

<!-- end ad widget --></body></html>