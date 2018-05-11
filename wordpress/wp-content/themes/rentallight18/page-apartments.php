<!-- <?echo basename(__FILE__); ?>  -->

<?php define( 'WP_USE_THEMES', false ); get_header(); ?>

	<body <?php body_class(''); ?>>


		<section class="post">
			 <?php get_template_part('loop'); ?> 
		</section>



		<!-- <article class="post">
			<?php /*get_template_part('loop-apartments') */; ?>
		</article> -->


		<footer>
			<?php get_footer(); ?> 
		</footer>

	</body>

<!-- <?php echo "END OF" . basename(__FILE__); ?>  -->