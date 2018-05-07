
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 

	<article <?php post_class(); ?>>
		<a href="<?php the_permalink(); ?>">
			<?php the_title('<h3>','</h3>'); the_post_thumbnail(); ?> </a>

			<?php //the_content(); ?>
		</article>

	<br />

<?php $pfx_date = get_the_date( $format, $post_id ); ?> 

<?php the_category( $separator, $parents, $post_id ); ?>

<?php endwhile; else : ?>
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>




