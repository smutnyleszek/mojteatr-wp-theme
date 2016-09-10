<!DOCTYPE html>

<!--[if IE 8 ]>    <html class="ie ie8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />

    <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <?php if (is_search()) { ?>
    <meta name="robots" content="noindex, nofollow" />
    <?php } ?>

    <title>
           <?php
              if (function_exists('is_tag') && is_tag()) {
                 single_tag_title("Archiwum taga: &quot;"); echo '&quot; - '; }
              elseif (is_archive()) {
                 wp_title(''); echo ' Archiwum - '; }
              elseif (is_search()) {
                 echo 'Wyszukiwanie: &quot;'.wp_specialchars($s).'&quot; - '; }
              elseif (!(is_404()) && (is_single()) || (is_page())) {
                 wp_title(''); echo ' - '; }
              elseif (is_404()) {
                 echo 'Nie znaleziono - '; }
              if (is_home()) {
                 bloginfo('name'); echo ' - '; bloginfo('description'); }
              else {
                  bloginfo('name'); }
              if ($paged>1) {
                 echo ' - page '. $paged; }
           ?>
    </title>

    <meta name="title" content="<?php
              if (function_exists('is_tag') && is_tag()) {
                 single_tag_title("Archiwum taga: &quot;"); echo '&quot; - '; }
              elseif (is_archive()) {
                 wp_title(''); echo ' Archiwum - '; }
              elseif (is_search()) {
                 echo 'Wyszukiwanie: &quot;'.wp_specialchars($s).'&quot; - '; }
              elseif (!(is_404()) && (is_single()) || (is_page())) {
                 wp_title(''); echo ' - '; }
              elseif (is_404()) {
                 echo 'Nie znaleziono - '; }
              if (is_home()) {
                 bloginfo('name'); echo ' - '; bloginfo('description'); }
              else {
                  bloginfo('name'); }
              if ($paged>1) {
                 echo ' - page '. $paged; }
           ?>">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <meta name="google-site-verification" content="">

    <meta name="author" content="Mój Teatr">
    <meta name="Copyright" content="Copyright Mój Teatr 2016. All Rights Reserved.">

    <!-- Dublin Core Metadata : http://dublincore.org/ -->
    <meta name="DC.title" content="Mój teatr">
    <meta name="DC.subject" content="Theatre from Poznań, Poland.">
    <meta name="DC.creator" content="Leszek Pietrzak">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css?v=2">

    <link rel="stylesheet" href="http://mojteatr.pl/webfontkit-stylesheet.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/libs/baguetteBox.min.css">

    <!-- all our JS is at the bottom of the page, except for Modernizr. -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/libs/baguetteBox.min.js"></script>

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <div id="page-wrap">
        <header id="header">
            <a i-o-logo href="<?php echo get_option('home'); ?>/">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 200">
                  <path d="M219.1 11.7l-17.4 19.7h6.2l20.3-19.7h-9.1zm68.4 0c-2.1 0-4.1 1-6 2.9-1.8 1.9-2.7 4-2.7 6.2 0 1.5.4 2.6 1.2 3.3.8.7 1.9 1.2 3.5 1.2 2.1 0 4-.9 5.7-2.7 1.8-1.8 2.7-3.7 2.7-5.8 0-1.5-.4-2.7-1.3-3.7-.8-1-1.9-1.4-3.1-1.4zM87.4 39.9c-3.4 0-7.7 1.7-12.8 5.1-5.1 3.4-11.2 8.6-18.3 15.8 1.5-2.7 2.5-5 3.1-6.9.6-1.9.9-3.7.9-5.3 0-2.4-.6-4.2-1.8-5.6-1.2-1.3-2.9-2-4.9-2-3.1 0-6.8 1.6-11.2 4.7-4.3 3.1-9.8 8.2-16.3 15.2l2.7 2.2c5.3-5.8 9.6-10.1 13-12.8 3.4-2.7 6.1-4.1 8-4.1.6 0 1.1.2 1.6.6.5.4.7 1 .7 1.6 0 2-2.4 6.6-7.3 13.9-4.9 7.3-12.7 17.7-23.2 31.3h9.6C44.9 77.1 56.1 64.9 64.7 57c8.6-7.9 15.2-11.8 19.8-11.8 1.5 0 2.7.5 3.7 1.5s1.5 2.2 1.5 3.7c0 3.6-6.8 14-20.3 31.3-4 5-7.1 9-9.3 11.9h9.4c12-15.4 23-27.4 33.1-36.2 10.1-8.8 17.8-13.2 23.1-13.2 1.5 0 2.6.4 3.4 1.1.8.7 1.3 1.6 1.3 2.7 0 1.5-3 6.4-8.8 14.6-2.5 3.4-4.5 6.1-5.9 8.1-.6.9-1.5 2.2-2.8 3.9-4.6 6.1-6.9 10.4-6.9 12.8 0 2.4.8 4.4 2.6 6.1 1.7 1.7 3.8 2.6 6.2 2.6 6 0 12.5-2.5 19.5-7.6 3.4-2.5 7.4-5.9 12-10.3-.7 1.9-1 3.7-1 5.4 0 3.8 1.3 6.9 3.9 9.2 2.6 2.3 6.2 3.4 10.8 3.4 3.4 0 7.2-1.1 11.6-3.2 4.4-2.1 9.2-5.3 14.6-9.4l3.9-3.6c2.7-2.3 5.2-4.7 7.3-7 23.9 6.5 58.8-26.1 66-28.6 0-.1.1-.1.1-.2l-.1.2-37 54.6c-8.4 4.1-16 8.3-22.7 12.6h6.3c4.4-2.6 9-5.2 13.9-7.6-15.8 21.7-26.9 35.8-33 42.3-6.1 6.5-11 9.8-14.5 9.8-1.3 0-2.2-.3-2.8-1-.6-.7-1-1.8-1-3.4 0-4.5 2.4-9.6 7.2-15.4V133c0-.7 0-1.3-.1-2-7.1 7.7-10.7 14.8-10.7 21.2 0 2.1.7 3.7 2 4.9 1.3 1.2 3.1 1.9 5.3 1.9 5 0 12.5-5.1 22.4-15.1 9.9-10 21.8-24.8 35.8-44.3 15-5.3 28.1-11.1 39.1-17.7 4.7-2.8 8.9-5.7 12.7-8.6l-2.4-2c-3.1 2.3-6.5 4.5-10.2 6.7-10 6-22 11.7-35.8 16.8l38.6-54.9c-4.1.1-8.1.4-11.8.9-6.1.6-43.9 34.9-64.9 29.4 1.5-1.8 2.9-3.7 4.1-5.5 3.2-5.1 4.8-9.8 4.8-14.1 0-3.4-1-5.9-3.2-7.8-2.1-1.9-5.1-2.8-8.9-2.8-5.7 0-12.3 2.1-19.7 6.3-5.7 3.3-11.3 7.6-16.8 12.8-.1.1-.1.2-.2.2-1.5 1.4-2.9 2.9-4.4 4.4-1.3 1.4-2.6 2.8-3.7 4.2-6.2 6.5-11.7 11.6-16.5 15.4-6.8 5.4-12.3 8.1-16.4 8.1-1.3 0-2.4-.3-3.2-.8-.8-.5-1.3-1.2-1.2-2.1 0-1.2 2.4-5.2 7.3-11.9 2.4-3.3 4.4-6 5.8-8l.2-.3c6-8.2 8.9-14.2 8.9-18 0-3-.9-5.5-2.8-7.5s-4.2-3-7.1-3c-3.7 0-8.4 1.7-14 5.2s-12 8.6-19.1 15.3c.9-2 1.6-3.8 2.1-5.4.5-1.6.7-3.1.7-4.4 0-3.4-.8-6-2.6-7.9-1.2-1.8-3.6-2.7-6.5-2.7zm111.1 4.2c2.3 0 4 .6 5.2 1.8 1.2 1.2 1.8 3.1 1.8 5.5 0 3.8-2 8.5-6 14.1s-9.4 11-16.1 16.2c-4.3 3.4-8.4 6.1-12.4 8-4 1.9-7.5 2.8-10.6 2.8-2.1 0-3.9-.6-5.2-1.7-1.3-1.1-2-2.4-2-4.2 0-2.9 1.4-6.4 4.2-10.3 2.8-3.9 7.4-8.7 13.7-14.6 6.3-5.9 11.7-10.3 16.2-13.2 4.5-2.9 8.3-4.4 11.2-4.4zm-61 68.1l-.4 2.4c-.4 2.5-.8 4.9-1.4 7.3-.6 2.4-1.3 4.9-2 7.2l-11.2 35.6c-1.1 4-2.2 7.5-4.1 11.1-1.5 2.1-3 2.9-5.6 3H97.1c-.5-3.6-.9-7-.9-10.7v-14.8h6.9c.7 0 .9.1 1.2.4.3.2.2.2.2.5v5.2h8.7v-20.8h-8.7v5.1c0 .5 0 .3-.2.5-.3.3-.6.5-1.2.5h-6.9V133c0-3.6.4-7.2.9-10.8h4.3c2.5.1 4 1.1 5.4 3.2 1.6 2.3 2.4 4.9 2.4 8.1v2.9h8.7v-22.8H8.1v22.8h8.6v-2.9c0-3.3.9-5.8 2.4-8.1 1.4-2.1 3-3 5.5-3.2h4.2c.5 3.6.9 7.2.9 10.8v35.2c0 3.6-.4 7.1-.9 10.7h-6.3v8.7h34.3v-8.7h-6.3c-.5-3.6-.9-7-.9-10.7V133c0-3.6.4-7.2.9-10.8h4c2.5.1 4 1.1 5.5 3.2 1.6 2.3 2.4 4.9 2.4 8.1v2.9H71v-14.2h4.6c.5 3.6.9 7.2.9 10.8v35.2c0 3.6-.4 7.1-.9 10.7h-6.2v8.7h62.8v-8.7H128c.6-3.3 1.3-6.7 2.3-9.9l1.7-5.1h12.2l1.9 5.2c.8 2.2 1.3 4.4 1.9 6.6.3 1.1.5 2.1.8 3.2h-4.1v8.7h64.2v-8.7h-6.3c-.5-3.6-.9-7-.9-10.7V144c-.5.5-.9 1-1.4 1.4-5 5.1-9.4 8.9-13.3 11.6-1.8 1.2-3.5 2.1-5.1 2.8v8.4c0 3.6-.4 7.1-.9 10.7h-11.3c-.8-1.6-1.5-3.3-2.3-4.9-1-2.2-1.8-4.5-2.7-6.8l-13.3-38v-.1c-.9-2.4-1.6-4.7-2.3-7.1-.7-2.4-1.2-4.9-1.7-7.3l-.5-2.4h-9.4zm22.8 1.4v22.8h8.6v-2.9c0-3.3.9-5.8 2.4-8.1 1.4-2.1 3-3 5.5-3.2h4.2c.4 2.7.7 5.4.8 8.1 0 .9.1 1.8.1 2.7v18.5c2.2-1.5 4.7-3.6 7.6-6.6 2.6-2.8 7.1-8.3 12.3-15.1.1-2.5.5-5 .8-7.5h4c.3 0 .5 0 .8.1 2.1-2.8 4.3-5.7 6.5-8.7h-53.6zm66.5 0c-4.5 5.9-8.7 11.3-12.7 16.2.3 1.1.5 2.4.5 3.7v2.9h8.6v-14.2h4.6c.5 3.6.9 7.2.9 10.8v35.2c0 3.6-.4 7.1-.9 10.7h-6.2v8.7h34.1v-8.7h-6.3c-.5-3.6-.9-7-.9-10.7v-14.1h.1c3 0 4.6.8 5.5 1.9 1 1.2 1.8 3.4 2 6.8v.1l1 11.2v.1c.3 4.3 1.5 7.9 4.1 10.4 2.6 2.5 6.3 3.6 10.5 3.6H284v-8.6h-4.3c-1-.1-1.1-.2-1.6-1.4-.7-1.6-1.1-3.4-1.3-5.6l-.9-10.3v-.1c-.4-3.8-2-7.3-4.7-9.8-1.1-1.1-2.8-1.5-4.2-2.3 2.4-1 5.2-1.7 7-3.3 3.4-3.2 5-7.7 5.1-13v-.1c-.2-6.7-2.9-12.3-8-15.6-4.9-3.2-11.1-4.6-18.3-4.6h-26zm22.6 8.6h2.1c3.1.1 4.9 1 6.2 2.9 1.5 2.1 2.3 4.8 2.3 8.6 0 3.9-.8 6.7-2.3 8.8-1.3 1.9-3.1 2.8-6.2 2.9h-3V133c0-3.6.4-7.2.9-10.8zm-111.8 23.3l3.4 9.8h-6.5l3.1-9.8z"/>
                </svg>
            </a>
        </header>
