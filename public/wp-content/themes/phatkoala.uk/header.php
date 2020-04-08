<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title><?php wp_title(); ?></title>
<link rel="profile" href="https://gmpg.org/xfn/11" />
<?php wp_head(); ?>
<link rel="apple-touch-icon" sizes="180x180" href="<?=home_url()?>/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?=home_url()?>/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?=home_url()?>/favicon-16x16.png">
<link rel="manifest" href="<?=home_url()?>/site.webmanifest">
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>