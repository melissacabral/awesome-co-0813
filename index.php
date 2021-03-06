<?php get_header(); ?>
    
    <div id="content">
	<?php 
	//THE LOOP.
	if( have_posts() ): 
		while( have_posts() ):
		the_post(); ?>
	
        <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
            <h2 class="entry-title"> <a href="<?php the_permalink(); ?>"> 
				<?php the_title(); ?> 
			</a></h2>
            <div class="postmeta"> 
                <span class="author"> Posted by: <?php the_author(); ?> </span> 
                <span class="date"> <?php the_date(); ?> </span> 
                <span class="num-comments"> 
			<?php comments_number('No comments yet', 'One comment', '% comments'); ?></span> 
                <span class="categories"> 
					<?php the_category(); ?>                
                </span> 
                <span class="tags">
					<?php the_tags(); ?>
				</span> 
            </div><!-- end postmeta -->   

            <?php the_post_thumbnail('thumbnail', array( 'class' => 'thumb' ) ); ?>         
            
            <div class="entry-content">
                <?php awesome_content(); ?>
            </div>
       
        
		<?php comments_template(); ?>
		 </article><!-- end post -->
      <?php 
	  endwhile;
	  else: ?>

	  <h2>Sorry, no posts found</h2>

	  <?php endif; //END OF LOOP. ?>
	          
        
        <div id="nav-below" class="pagination"> 
            <?php 
            //use the pagenavi plugin only if it exists (plugin is installed and active)
            if(function_exists('wp_pagenavi')){
                wp_pagenavi();
            }else{
             ?>
        	<span class="older"><?php next_posts_link('&laquo; Older Posts'); ?></span>
            <span class="newer"><?php previous_posts_link('Newer posts &raquo;');?></span>
            <?php } ?>
    
        </div><!-- end #nav-below --> 
        
    </div><!-- end content -->
    
<?php get_sidebar(); ?> 
<?php get_footer(); ?>  