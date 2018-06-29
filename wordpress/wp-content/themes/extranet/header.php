<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="HandheldFriendly" content="true">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php if (get_theme_mod('favicon', '') != null) { ?>
<link rel="icon" type="image/png" href="<?php echo esc_url( get_theme_mod('favicon', '') ); ?>" />
<?php } ?>
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<?php wp_head(); ?>
<?php
  	$primary_font = 'Roboto';
  	$secondary_font = 'Roboto';
	$primary_color = '#ce181e';

?>
<style type="text/css" media="all">
	body,
	input,
	input[type="text"],
	input[type="email"],
	input[type="url"],
	input[type="search"],
	input[type="password"],
	textarea,
	table,
	.sidebar .widget_ad .widget-title,
	.site-footer .widget_ad .widget-title {
		font-family: "<?php echo $primary_font; ?>", "Helvetica Neue", Helvetica, Arial, sans-serif;
	}
	#secondary-menu li a,
	.footer-nav li a,
	.pagination .page-numbers,
	button,
	.btn,
	input[type="submit"],
	input[type="reset"],
	input[type="button"],
	.comment-form label,
	label,
	h1,h2,h3,h4,h5,h6 {
		font-family: "<?php echo $secondary_font; ?>", "Helvetica Neue", Helvetica, Arial, sans-serif;
	}
	a:hover,
	.site-header .search-icon:hover span,
	#primary-menu li a:link,
	#primary-menu li a:visited,
	#primary-menu li.sfHover li a,
	#secondary-menu li.sfHover li a,	
	.sf-menu li li a:hover,
	.sf-menu li.sfHover a,
	.sf-menu li.current-menu-item a,
	.sf-menu li.current-menu-item a:hover,
	.breadcrumbs .breadcrumbs-nav a:hover,
	.read-more a,
	.read-more a:visited,
	.entry-title a:hover,
	article.hentry .edit-link a,
	.author-box a,
	.page-content a,
	.entry-content a,
	.comment-author a,
	.comment-content a,
	.comment-reply-title small a:hover,
	.sidebar .widget a,
	.sidebar .widget ul li a:hover,
	#site-bottom a:hover,
	.author-box a:hover,
	.page-content a:hover,
	.entry-content a:hover,
	.widget_tag_cloud .tagcloud a:hover:before,
	.entry-tags .tag-links a:hover:before,
	.content-loop .entry-title a:hover,
	.content-list .entry-title a:hover,
	.content-grid .entry-title a:hover,
	article.hentry .edit-link a:hover,
	.site-footer .widget ul li a:hover,
	.comment-content a:hover,
	.pagination .page-numbers.current,
	.entry-tags .tag-links a:hover {
		color: <?php echo $primary_color; ?>;
	}
	#primary-menu li li a:hover,
	#secondary-menu li li a:hover,
	#primary-menu li li.current-menu-item a:hover,
	#secondary-menu li li.current-menu-item a:hover,	
	.widget_tag_cloud .tagcloud a:hover {
		color: <?php echo $primary_color; ?> !important;
	}
	.sf-menu li a:hover,
	.sf-menu li.sfHover a,
	.sf-menu li.current-menu-item a,
	.sf-menu li.current-menu-item a:hover,
	button,
	.btn,
	input[type="submit"],
	input[type="reset"],
	input[type="button"],
	.entry-category a,
	#back-top a:hover span,
	.bx-wrapper .bx-pager.bx-default-pager a:hover,
	.bx-wrapper .bx-pager.bx-default-pager a.active,
	.bx-wrapper .bx-pager.bx-default-pager a:focus,
	.sidebar .widget ul li:before,
	.widget_newsletter input[type="submit"],
	.widget_newsletter input[type="button"],
	.widget_newsletter button,
	.pagination .next {
		background-color: <?php echo $primary_color; ?>;
	}
	.pagination .next:after {
		border-left-color: <?php echo $primary_color; ?>;
	}
	#secondary-bar {
		border-bottom-color: <?php echo $primary_color; ?>;
	}
	.header-search,
	.sf-menu li a:before {
		border-color: <?php echo $primary_color; ?>;
	}
</style>

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header clear">

		<div id="primary-bar" class="container">

			<nav id="primary-nav" class="primary-navigation">

				<?php 
					if ( has_nav_menu( 'primary' ) ) {
						wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'sf-menu' ) );
					} else {
				?>

					<ul id="primary-menu" class="sf-menu">
						<li><a href="<?php echo home_url(); ?>/wp-admin/nav-menus.php"><?php echo __('Add menu for location: Primary Menu', 'standard'); ?></a></li>
					</ul><!-- .sf-menu -->

				<?php } ?>

			</nav><!-- #primary-nav -->

			<?php if ( get_theme_mod('header-search-on', true) ) : ?>

			<div class="header-search">
				<form id="searchform" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
					<input type="search" name="s" class="search-input" value="<?php echo get_search_query(); ?>" placeholder="Search for..." autocomplete="off">
					<button type="submit" class="search-submit"><span class="genericon genericon-search"></span></button>		
				</form>
			</div><!-- .header-search -->	
					
			<?php endif; ?>

		</div><!-- #primary-bar -->

		<div class="site-start container">

			<div class="site-branding" style="float:none; text-align:center;">

				<?php if (get_theme_mod('logo', get_template_directory_uri().'/assets/img/logo.png') != null) { ?>
				
				<div id="logo">
					<span class="helper"></span>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php echo get_theme_mod('logo', get_template_directory_uri().'/assets/img/logo.png'); ?>" alt=""/>
					</a>
				</div><!-- #logo -->

				<?php } else { ?>

				<h1 class="site-title"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
				<div class="site-desc">
					<?php bloginfo('description'); ?>
				</div><!-- .site-desc -->

				<?php } ?>

			</div><!-- .site-branding -->						

			<?php dynamic_sidebar( 'header-ad' ); ?>	

		</div><!-- .site-start .container -->

		<div id="secondary-bar" class="container">

			<nav id="secondary-nav" class="secondary-navigation">

				<?php 
					if ( has_nav_menu( 'secondary' ) ) {
						wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_id' => 'secondary-menu', 'menu_class' => 'sf-menu' ) );
					} else {
				?>

					<ul id="secondary-menu" class="sf-menu">
						<li><a href="<?php echo home_url(); ?>/wp-admin/nav-menus.php"><?php echo __('Add menu for location: Secondary Menu', 'standard'); ?></a></li>
					</ul><!-- .sf-menu -->

				<?php } ?>

			</nav><!-- #secondary-nav -->

		</div><!-- #secondary-bar -->

		<span class="mobile-menu-icon">
			<span class="menu-icon-open"><?php echo __('Menu', 'standard'); ?></span>
			<span class="menu-icon-close"><span class="genericon genericon-close"></span></span>		
		</span>	

		<?php if ( get_theme_mod('header-search-on', true) ) : ?>
			
			<span class="search-icon">
				<span class="genericon genericon-search"></span>
				<span class="genericon genericon-close"></span>			
			</span>

			<div class="mobile-search">
				<form id="searchform" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
					<input type="search" name="s" class="search-input" placeholder="Search for..." autocomplete="off">
					<button type="submit" class="search-submit"><span class="genericon genericon-search"></span></button>		
				</form>
			</div><!-- .header-search -->					

		<?php endif; ?>

		<div class="mobile-menu clear">

			<div class="container">

			<?php 

				if ( has_nav_menu( 'primary' ) ) {

					echo '<div class="menu-left">';
					echo '<h3>' . get_theme_mod('primary-nav-heading', __('Pages', 'standard')) . '</h3>';

					wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-mobile-menu', 'menu_class' => '', 'depth' => 1 ) );

					echo "</div>";

				}

				if ( has_nav_menu( 'secondary' ) ) {

					echo '<div class="menu-right">';
					echo '<h3>' . get_theme_mod('secondary-nav-heading', __('Categories', 'standard')) . '</h3>';

					wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_id' => 'secondary-mobile-menu', 'menu_class' => '', 'depth' => 1 ) );

					echo "</div>";

				}

			?>

			</div><!-- .container -->

		</div><!-- .mobile-menu -->					

	</header><!-- #masthead -->	

<div id="content" class="site-content container clear">
