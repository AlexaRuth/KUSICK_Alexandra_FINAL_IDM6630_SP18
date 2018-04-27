<!-- <?echo basename(__FILE__); ?> -->
<html>
	<head>
		<title>IDM 6630 - Final Project</title>
		<?php wp_head(); ?>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="stylesheet" href= "style.css">
		<link href="https://fonts.googleapis.com/css?family=Junge|Poppins:500" rel="stylesheet">

		<?php wp_head(); ?>
	</head>

	<body>
		 <header>
		 	<?php get_template_part('nav'); ?>
		 	<h1><?php echo get_bloginfo ('name'); ?></h1>
			<!--<?php echo get_bloginfo ('description'); ?>-->

		 </header>

<!-- <?php echo "END OF" . basename(__FILE__); ?> -->

