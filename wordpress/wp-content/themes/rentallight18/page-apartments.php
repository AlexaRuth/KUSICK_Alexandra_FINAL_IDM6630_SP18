<!-- <?echo basename(__FILE__); ?>  -->

<?php define( 'WP_USE_THEMES', false ); get_header(); ?>

<body <?php body_class(''); ?>>

	<main id="main-section">

			<article class="post">
<?php echo do_shortcode("[post_grid id='155']"); ?>
				 <?php get_template_part('loop');?> 
			</article>


			<!-- <article class="post">
				<?php /*get_template_part('loop-apartments') */; ?>
			</article> -->
	</main>


	<footer>
		<?php get_footer(); ?> 
	</footer>

</body>

<!-- <?php echo "END OF" . basename(__FILE__); ?>  -->