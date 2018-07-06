</div><!-- end contain user content --></div><!-- end #container -->
 <footer role="contentinfo" class="footer">
<div id="footer-wrap" style="clear:both;"><div class="row">
<?php
      if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Custom Widget Area') ) : ?>
<?php endif; ?>
							<nav class="twelve columns clearfix">
								<!--<?php bones_footer_links(); ?> -->
<?php ubermenu( 'footer_custom' , array( 'theme_location' => 'footer_links' ) ); ?>
							</nav> 
<div class="totop">
      <div id="backtotop">Scroll to Top</div>
    </div>

<div style="float:left;width:58%;margin-left:2%;margin-bottom:20px;margin-top:-20px;">
 <script>
  (function() {
    var cx = '015535028030804175508:5--w8muciak';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:search></gcse:search></div><div class="site-info">
Copyright © <?php echo date( 'Y' ); ?>  Halo, Purely for Pets
</div><!-- .site-info -->	
		
		
		
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
	<?php wp_footer(); // js scripts are inserted using this function ?>
<!-- start number replacer -->

<!-- end ad widget --></body></html>