<?php
    
 /**
 * The template for displaying the header
 *
 * @link       https://creativelittledots.co.uk
 * @since      1.0.0
 *
 * @package    Hymnal
 * @subpackage Hymnal/public/templates
 */
?>

<!doctype html>

<html class="no-js" <?php language_attributes(); ?>>

    <head>

    	<meta charset="<?php bloginfo( 'charset' ); ?>">

        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php get_the_title(); ?></title>

        <link rel="stylesheet" href="<?php echo plugins_url( 'css/app.css', dirname(__FILE__) ); ?>">

    </head>

    <body>
        
        <main class="js-container container text-center">