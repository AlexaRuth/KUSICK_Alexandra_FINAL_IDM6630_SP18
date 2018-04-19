
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 

	<article <?php post_class(); ?>>
		<a href="<?php the_permalink($the_title); ?>">
			<?php the_title('<h2>','</h2>');?></a>

			<?php the_content(); ?>
		</article>

	<br />

<?php $pfx_date = get_the_date( $format, $post_id ); ?> 

<?php the_category( $separator, $parents, $post_id ); ?>

<?php endwhile; else : ?>
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>
