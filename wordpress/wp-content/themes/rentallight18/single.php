<!-- <?echo basename(__FILE__); ?>  -->

<?php define( 'WP_USE_THEMES', false ); get_header(); ?>

	<body <?php body_class('page'); ?>>

		<header>
			<?php get_template_part('main-single'); ?>
		</header>


		<footer>
			<?php get_footer(); ?> 
		</footer>

	</body>

<!-- <?php echo "END OF" . basename(__FILE__); ?>  -->

