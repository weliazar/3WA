<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<!-- appel du CSS de font-awesome pour les icones -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<!-- Police de google font -->
	<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<!-- on appelle toujours son CSS en dernier -->
	
	<!--lien pour wordpress look le lien bbx design dans le css-->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<title><?php the_title(); ?></title>
	
	<?php wp_head(); ?>
</head>



<body>
	<!--HEADER-->
	<header>
	
	<!---afficher l'image -->
		<a href="#"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="logo de Green office" /></a>
		
		<!--NAV -->
		<nav> 
		<?php 
            
            $menu = wp_nav_menu(['echo'=> false ]);
            
            echo strip_tags($menu,'<a>');
            
            
            ?>
		
		</nav>
		
        
		
	</header>
	