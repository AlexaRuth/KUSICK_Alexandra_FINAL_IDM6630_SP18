<article class="post">
	<a href="#!"> <h2> TEST</h2>
	 </a>

</article>

<?php 

$unit_post_type_query = array(
'post_type'=> 'unit',
'post_status' => 'publish',
'meta_key' => 'locationname',
'meta_value' => 'Cudahy'
);



$get_unit = new WP_Query($unit_post_type_query);


if ( $get_unit->have_posts() ) : while ( $get_unit->have_posts() ) : $get_unit->the_post(); ?> 


	<article <?php post_class(); ?>>
		<a href="<?php the_permalink(); ?>">
			<?php the_title('<h2>','</h2>'); the_post_thumbnail(); ?> </a>

			<?php //the_content(); ?>
		</article>

	<br />

<?php $pfx_date = get_the_date( $format, $post_id ); ?> 

<?php the_category( $separator, $parents, $post_id ); ?>


<?php endwhile; else : ?>
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>