</div><!-- end wrapper -->

<footer class="clearfix" id="colophon" role="contentinfo">

	<?php dynamic_sidebar( 'footer-area' ); ?>

	<div class="widget-container">
		//footer menu here!
	</div>
	
    <div class="widget-container">        
        &copy; 2013 <?php bloginfo('name'); ?>        
    </div>
</footer><!-- end footer -->

<?php 
//must call wp_footer right before </body> for JS and plugins to run!
wp_footer();  ?>
</body>
</html>