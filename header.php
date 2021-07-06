<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="default">
	<meta name="apple-mobile-web-app-title" content="<?= bloginfo('name') ?>">

	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php /*
	<link rel="preload" href="<?= get_bloginfo('template_url') ?>/dist/fonts/source-sans-pro-v13-latin-regular.woff2" as="font" crossorigin="anonymous" />
	<link rel="preload" href="<?= get_bloginfo('template_url') ?>/dist/fonts/source-sans-pro-v13-latin-600.woff2" as="font" crossorigin="anonymous" />
	<link rel="preload" href="<?= get_bloginfo('template_url') ?>/dist/fonts/source-sans-pro-v13-latin-700.woff2" as="font" crossorigin="anonymous" />
	*/ ?>

	<?php wp_head(); ?>

</head>


<?php
// ----------------------------------------------------------------------
// ----------------------------------------------------------------------
// ----------------------------------------------------------------------
// Globale Einstellungen werden geladen

$global_social		= get_field('opt_socialmedia', 'option') ?: false;
$global_contact		= get_field('opt_contact', 'option') ?: false;

$global_logos 		= get_field('opt_logos', 'option') ?: false;
$global_header 		= get_field('opt_header', 'option') ?: false;

// ----------------------------------------------------------------------
// Überschreibende Einstellungen werden geladen

$override_logos		= get_field('override_logos') ? get_field('instance_logos')['opt_logos'] : false;
$override_header	= get_field('override_header') ? get_field('instance_header')['opt_header'] : false;

// ----------------------------------------------------------------------
// Überschreibende Einstellungen werden geladen

$page_logos		= $override_logos ?: $global_logos;
$page_header	= $override_header ?: $global_header;

// ----------------------------------------------------------------------
?>


<body <?php body_class('w-body'); ?>>

	<?php if($page_header['show_socialmedia'] && $global_social) { ?>
		<div class="header-meta">
			<div class="header-meta-inner">
				<div class="header-meta-item">
					<?php $social_profiles = $global_social;
					include 'tpl/partials/social.php'; ?>
				</div>
			</div>
		</div>
	<?php } ?>
	<header class="header header--sticky" id="header" role="banner">
		<div class="header-inner">
			<div class="header-container">
				<div class="header-col">
				    <div class="header-item header-item--logo">
						<?php include_once 'tpl/partials/logo-function.php'; ?>
						<?php include 'tpl/partials/logo.php'; ?>
					</div>
				</div>
				<div class="header-col">
					<?php include 'tpl/partials/header-nav.php'; ?>
					<?php include 'tpl/partials/calltoaction.php'; ?>
					<?php include 'tpl/partials/header-contact.php'; ?>
					<?php include 'tpl/partials/header-lang.php'; ?>
                    <div class="header-btn-wrapper">
                        <a href="tel:0441 925100">
                            <svg xmlns="http://www.w3.org/2000/svg" width="19.177" height="19.121" viewBox="0 0 19.177 19.121">
                                <path id="phone" d="M18.782,12.587a3.028,3.028,0,0,1-.645-.115,9.084,9.084,0,0,1-1.261-.375,1.925,1.925,0,0,0-2.387.962l-.212.433a11.721,11.721,0,0,1-2.56-1.925,11.721,11.721,0,0,1-1.925-2.56l.4-.269a1.925,1.925,0,0,0,.962-2.387,9.941,9.941,0,0,1-.375-1.261c-.048-.212-.087-.433-.115-.654a2.887,2.887,0,0,0-2.887-2.4H4.9A2.887,2.887,0,0,0,2.009,5.321a18.284,18.284,0,0,0,15.9,15.839h.366a2.88,2.88,0,0,0,2.887-2.9V15.377A2.887,2.887,0,0,0,18.782,12.587Zm.481,5.774a.962.962,0,0,1-.327.722,1.01,1.01,0,0,1-.789.241A16.359,16.359,0,0,1,3.991,5.1a1.049,1.049,0,0,1,.241-.789.962.962,0,0,1,.722-.327H7.84a.962.962,0,0,1,.962.76q.058.395.144.779A10.7,10.7,0,0,0,9.39,7.015l-1.347.625a.962.962,0,0,0-.472,1.28,13.944,13.944,0,0,0,6.736,6.736,1.02,1.02,0,0,0,1.28-.5l.6-1.347a13.174,13.174,0,0,0,1.52.443q.385.087.779.144a.962.962,0,0,1,.76.962Z" transform="translate(-1.982 -2.04)"></path>
                            </svg>
                        </a>
                        <a href="mailto:kontakt@trendcom-ccs.de">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" viewBox="0 0 20 16">
                                <path id="envelope" d="M19,4H5A3,3,0,0,0,2,7V17a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V7a3,3,0,0,0-3-3Zm-.41,2-5.88,5.88a1,1,0,0,1-1.42,0L5.41,6ZM20,17a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V7.41l5.88,5.88a3,3,0,0,0,4.24,0L20,7.41Z" transform="translate(-2 -4)"></path>
                            </svg>
                        </a>
                    </div>
					<?php include 'tpl/partials/header-nav-mobile.php'; ?>
				</div>
			</div>
		</div>
	</header>
