<!-- <?echo basename(__FILE__); ?> -->
<html>
	<head>
		<title>IDM 6630 - Final Project</title>
		<?php wp_head(); ?>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="stylesheet" href= "style.css">
		<link href="https://fonts.googleapis.com/css?family=Raleway:400,500|Signika:400,600" rel="stylesheet">

<!-- SCRIPTS -->
		<script type="text/javascript" src="js/jquery-3.0.0.js"></script>
        <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
        <script type="text/javascript" src="js/jquery.colorbox.js"></script>
        <script type="text/javascript" src="js/script.js"></script>

<?php wp_head(); ?>
</head>

<!-- SITE TITLE HEADER AND NAVIGATION -->

	<header id "masthead" class="site-header" role "banner">

		<h1 class="sitetitle">
		Abode <br>
		Milwaukee</h1>

	<!--<?php echo get_bloginfo ('description'); ?>-->
	</header>
	
	<?php get_template_part('nav'); ?>


<!-- <?php echo "END OF" . basename(__FILE__); ?> -->

