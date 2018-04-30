
<?php 

$units_post_type_query = array(
'post_type'=> 'units',
'post_status' => 'publish'
);

$get_units = new WP_Query($units_post_type_query);


if ( $get_units->have_posts() ) : while ( $get_units->have_posts() ) : $get_units->the_post(); ?> 


	<article <?php post_class( 'units' ); ?>>
		<a href="<?php the_permalink(); ?>">
			<?php the_title('<h2>','</h2>'); the_post_thumbnail(); ?> </a>

<p><?php the_field('sqft'); ?></p>
<p><?php the_field('rent_per_month'); ?></p>
<p><?php the_field('bedrooms'); ?></p>

			<?php //the_content(); ?>
		</article>

	<br />

<?php $pfx_date = get_the_date( $format, $post_id ); ?> 


<?php endwhile; else : ?>
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>