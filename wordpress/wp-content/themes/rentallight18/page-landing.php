<!-- <?echo basename(__FILE__); ?>  -->

<?php define( 'WP_USE_THEMES', false ); get_header(); ?>

	<body <?php body_class(''); ?>>

		  <?php the_content(); ?>

	</body>

<!-- <?php echo "END OF" . basename(__FILE__); ?>  -->