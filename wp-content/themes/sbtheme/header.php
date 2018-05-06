<!DOCTYPE html>
<html lang="en">

	<head>
		<title>S&B Property Maintenance</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<link href="https://fonts.googleapis.com/css?family=Roboto:100i,300,400,500,700" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo( 'template_directory' );?>/slick/slick.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo( 'template_directory' );?>/slick/slick-theme.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo( 'template_directory' );?>/dist/css/animate.css"/>
		<?php wp_head();?>
	</head>

	<body <?php body_class( ); ?>>

	<div class="content">
		<?php get_template_part('partials/top-nav'); ?>
		<div class="row mobile-nav">
			<?php get_template_part('partials/mobile-nav'); ?>
		</div>