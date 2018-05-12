<!-- <?echo basename(__FILE__); ?>  -->

<main id="main-section">

	<h2>Welcome</h2>

<div class="landingimage"> <img src="../img/Milwaukee-Wisconsin.jpg" alt="Milwaukee">  </div>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 

	<article <?php post_class('landingPost'); ?>>
		<a href="<?php the_permalink(); ?>">
			<?php the_title('<h3>','</h3>');  ?>
	<?php the_content(); ?>
	</article>


	<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>



			<!-- <section>
			<?php /*get_template_part('loop-home'); */ ?> -->
		</section> 
			
</main>

<!-- <?php echo "END OF" . basename(__FILE__); ?>  -->
