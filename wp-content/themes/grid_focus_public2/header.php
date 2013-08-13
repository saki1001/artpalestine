<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php if (is_home () ) { bloginfo('name'); } elseif ( is_category() ) {
single_cat_title(); echo " - "; bloginfo('name');
} elseif (is_single() || is_page() ) {
single_post_title();
} elseif (is_search() ) {
bloginfo('name'); echo " search results: "; echo wp_specialchars($s);
} else { wp_title('',true); }
?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/toggle.js"></script>
<?php wp_head(); ?>
</head>
<body>
	<div id="wrapper"><a name="top"></a>