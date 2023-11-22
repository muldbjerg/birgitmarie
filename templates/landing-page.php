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
        max-width: 540px;
        font-size: 1.6rem;
        line-height: 1.4;
    }
    
    @media only screen and (max-width: 1040px) {
        .landing-page .hero-text{
            font-size: 1.3rem;
        }
    
    }
</style>

<?php
    get_footer();
?>