
<?php 

$unit_post_type_query = array(
'post_type'=> 'unit',
'post_status' => 'publish'
);

$get_unit = new WP_Query($unit_post_type_query);


if ( $get_unit->have_posts() ) : while ( $get_unit->have_posts() ) : $get_unit->the_post(); ?> 


	<article <?php post_class( 'unit' ); ?>>
		<a href="<?php the_permalink(); ?>">
			<?php the_title('<h2>','</h2>'); the_post_thumbnail(); ?> </a>

<p><?php the_field('sqft'); ?></p>
<p><?php the_field('rent_per_month'); ?></p>
<p><?php the_field('bedrooms'); ?></p>

			<?php //THIS WILL SHOW OTHER CONTENT// the_content(); ?>
		</article>

	<br />

<?php $pfx_date = get_the_date( $format, $post_id ); ?> 


<?php endwhile; else : ?>
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>