<?php get_header(); ?>	
	
	<div class="container ">
		<div class="row">


			<div class="col-md-12 col-xs-12 content post">
			     <!--<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

 	<!-- Test if the current post is in category 3. -->
 	<!-- If it is, the div box is given the CSS class "post-cat-three". -->
 	<!-- Otherwise, the div box is given the CSS class "post". -->

 	<?php if ( in_category( '3' ) ) : ?>
 		<div class="post-cat-three">
 	<?php else : ?>
 		<div class="post">
 	<?php endif; ?>

				<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					<h4><?php the_author_posts_link(); ?</h4>
				<div class="row">
					<div class="col-md-2 hidden-xs">
						
				<?php the_post_thumbnail('thumbnail'); ?>
					</div>
					<div class="col-md-10 text-left">
							<p>
			 <div class="entry-summary">
				<?php the_excerpt( __( 'Continue reading <span class="meta-nav">&raquo;</span>', 'hbd-theme' )  ); ?>
				                    </div>	</p>

					</div>
				</div>
				

			



			</div>
		</div>
	</div>
	<div class="container sidebar">

	<div class="row">
		<div class="col-md-4">
			<h3>recent posts</h3>
			<ul>
				<li>
				<?php dynamic_sidebar( 'left-sidebar' ); ?>
				</li>
			</ul>
		</div>
		<div class="col-md-4 hidden-xs">
			<h3>categories</h3>
			<ul>
			    <li><?php dynamic_sidebar( 'middle-sidebar' ); ?></li>
			</ul>

		</div>
		<div class="col-md-4 hidden-xs">
			<h3>tags</h3>
			<ul><li><?php dynamic_sidebar( 'right-sidebar' ); ?></li></ul>
		</div>
	</div>
	</div>
	 <?php endwhile; else : ?>


 	<!-- The very first "if" tested to see if there were any Posts to -->
 	<!-- display.  This "else" part tells what do if there weren't any. -->
 	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>


 	<!-- REALLY stop The Loop. -->
 <?php endif; ?>


<?php get_footer(); ?>
