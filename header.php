<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>

</head>


<body <?php body_class(); ?>>
<div id="wrapper-main">
	
	<a href="<?php bloginfo('url'); ?>"><div id="homelink"><h1><?php bloginfo('name'); ?></h1></div></a>
	
	<div id="wrapper-shadow-left">
	<div id="wrapper-shadow-right">
	<div id="wrapper-shadow-bottom-left">
	<div id="wrapper-shadow-bottom-right">
		<div id="header"></div>

		<div id="top-menu">
			<ul>
			<?php wp_list_pages('title_li=&depth=1'); ?>
			<li><a href="<?php bloginfo('atom_url'); ?>">Feed</a></li>
			</ul>
		</div>
		
		<div id="wrapper-gradient">
		<div id="wrapper-line">
