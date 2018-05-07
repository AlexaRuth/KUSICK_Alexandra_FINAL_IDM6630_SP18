<!-- <?echo basename(__FILE__); ?>  -->

<?php define( 'WP_USE_THEMES', false ); get_header(); ?>

	<body <?php body_class('page'); ?>>

		<section>
			<?php get_template_part('single-unit'); ?>
		</section>

<section class="imagegallery"> 
		<p><a class="group3" href="img/frederick/unitB_Upper/unitB_outside.jpg" title="UNIT A - Front of the house">UNIT A - Outside Front</a></p>
		<p><a class="group3" href="img/frederick/unitA_Lower/unitA_Livingroom.jpg" title="UNIT A - Inside Living Room">UNIT A - Inside Living Room  </a></p>
		<p><a class="group3" href="img/frederick/unitA_Lower/unitA_kitchen.jpg" title="UNIT A - The Kitchen">UNIT A - Kitchen </a></p>
		<p><a class="group3" href="img/frederick/unitA_Lower/unitA_bathroom.jpg" title="UNIT A - The Bathroom">UNIT A - Bathroom </a></p>
		<p><a class="group3" href="img/frederick/unitA_Lower/unitA_room1.jpg" title="UNIT A - Room 1">UNIT A - Room 1</a></p>
		<p><a class="group3" href="img/frederick/unitA_Lower/unitA_room2.jpg" title="UNIT A - Room 2">UNIT A - Room 2</a></p>  
		<p><a class="group3" href="img/frederick/unitA_Lower/unitA_room3.jpg" title="UNIT A - Room 3">UNIT A - Room 3</a></p>   
</section> 

		<footer>
			<?php get_footer(); ?> 
		</footer>

	</body>

<!-- <?php echo "END OF" . basename(__FILE__); ?>  -->