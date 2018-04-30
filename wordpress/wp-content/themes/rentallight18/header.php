<!-- <?echo basename(__FILE__); ?> -->
<html>
	<head>
		<title>IDM 6630 - Final Project</title>
		<?php wp_head(); ?>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="stylesheet" href= "style.css">
		<link href="https://fonts.googleapis.com/css?family=Raleway:400,500|Signika:400,600" rel="stylesheet">

		<?php wp_head(); ?>
	</head>

	<body>
		<div id="page">

		 <header id "masthead" class="site-header" role "banner">

		 	<h1 class="sitetitle"><?php echo get_bloginfo ('name'); ?></h1>
		 	
		 	<?php get_template_part('nav'); ?>

			<!--<?php echo get_bloginfo ('description'); ?>-->

		 </header>
		</div>

<!-- <?php echo "END OF" . basename(__FILE__); ?> -->

