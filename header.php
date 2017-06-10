<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="row">
	<div class="column flex-container flex-dir-column">
		<?php get_template_part( 'template-parts/header/content', 'header' ); ?>
		<div class="menu-centered">
			<?php $defaults = array(
					'theme_location'  => '',
					'menu'            => '',
					'container'       => 'ul',
					'container_class' => '',
					'container_id'    => '',
					'menu_class'      => 'menu-list',
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          => ''
				);
			?>
			<?php wp_nav_menu( $defaults ); ?>
		</div>