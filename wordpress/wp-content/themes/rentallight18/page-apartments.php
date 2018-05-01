<!-- <?echo basename(__FILE__); ?>  -->

<?php define( 'WP_USE_THEMES', false ); get_header(); ?>

	<body <?php body_class(); ?>>


<header class="entry-header">
	<h1 class="entry-title"> Apartments </h1>
</header>



		<div class="main-content">
			<?php get_template_part('loop-apartments'); ?>
		</div>


		<footer>
			<?php get_footer(); ?> 
		</footer>

	</body>

<!-- <?php echo "END OF" . basename(__FILE__); ?>  -->