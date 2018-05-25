<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/img/icon.png ?>" />
    <title><?php bloginfo('name');?></title>

	<?php wp_head(); ?>
</head>
<body>
	
<header id="header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-expand-lg navbar-light navbar-custom">
				  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png ?>" alt="Logo Sample">
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon icon-custom"></span>
				  </button>
				  <div class="collapse navbar-collapse collapse-custom" id="navbarNav">
				    <?php wp_nav_menu( array( 'theme_location' => 'menu_principal', 'menu_class' => 'navbar-nav',) ); ?>
				  </div>
				</nav>
			</div>
		</div>
	</div>
</header>