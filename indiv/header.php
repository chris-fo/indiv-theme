<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 */
?>
<!Doctype html>
<html lang="en">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page">
	<header class="primary-header flex">
        <div class="logo">
            <?php if( has_custom_logo() ):  ?>
                <?php 
                    // Get Custom Logo URL
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $custom_logo_data = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    $custom_logo_url = $custom_logo_data[0];
                ?>

                <a class="logo-link-area" href="<?php echo esc_url( home_url( '/' ) ); ?>" 
                title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" 
                rel="home">

                    <img src="<?php echo esc_url( $custom_logo_url ); ?>" 
                        alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"/>
                </a>
            <?php else: ?>
                <div class="site-name"><?php bloginfo( 'name' ); ?></div>
            <?php endif; ?>
        </div>

        <button class="mobile-nav-toggle" 
        aria-controls="primary-navigation" aria-expanded="false">
            <span class="sr-only">Menu</span>
            <i class="fa-solid fa-bars"></i>
        </button>

        <nav class="navigation">
            <?php
                wp_nav_menu( array(
                    'theme_location' => 'header',
                    'menu_class' => 'primary-navigation flex',
                    'menu_id' => 'primary navigation',
                    'container' => '',
                ));
            ?>
        </nav>
    </header>
    <div class="title-container">
        <h1><?php the_title();?></h1>
            </div>
	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
