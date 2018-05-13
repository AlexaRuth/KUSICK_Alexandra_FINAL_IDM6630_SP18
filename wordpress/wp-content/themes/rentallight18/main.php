<!-- <?echo basename(__FILE__); ?>  -->


<main id="main-section">

<div id="welcome">
	<h2>Welcome Home</h2>
	<p> We service three main nieborhoods in the Milwaukee. Let us help you find your new home</p>
</div> 

<section class="post-landing">
	<?php echo do_shortcode("[post_grid id='155']"); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 

		<article <?php post_class('landingPost'); ?>>
		<a href="<?php the_permalink(); ?>"> 
			<?php the_title('<h3>','</h3>');?> 
			<?php the_content(); ?>
		</article>

	<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>


</section> 
		

</main>

<!-- <?php echo "END OF" . basename(__FILE__); ?>  -->
