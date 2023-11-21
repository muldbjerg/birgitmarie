<?php
/**
 * Template Name: Landing Page Template
 * Template Post Type: page
 *
 */

 get_header();
?>

<div class="landing-page">

    
    <div class="hero-text">
        <?php the_content() ?>
    </div>
    
    
    <?php 
        include get_theme_file_path( '/inc/index-replated.php' );
    ?>

    <?php 
        include get_theme_file_path( '/inc/follow-instagram.php' );
    ?>

</div>

<style>
    .landing-page {
        padding-top: 40px;
    }

    .landing-page .hero-text{
        max-width: 420px;
        font-size: 1.6rem;
        line-height: 1.4;
    }
</style>