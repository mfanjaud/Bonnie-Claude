<?php /* Template Name: home */ get_header('home'); ?>

	<main role="main">
    
    
		<!-- section -->
		<section class="presentation animated fadeInDown" id="about">
        		<div class="container"><p data-midnight="red"></p>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center"> <?php the_post_thumbnail('large'); ?> </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-left">
				<h1><?php the_title(); ?></h1>
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
                <!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<p><?php the_content(); ?></p>


				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->
          <?php endif; ?>      
        	</div>
		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
