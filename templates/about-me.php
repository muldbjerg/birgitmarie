<?php
/**
 * Template Name: About Me Page
 * Template Post Type: page
 *
 */

 get_header();
?>

<div class="about-me">


    <div class="text-site">

        <h1 class="handwritten"><?php the_title() ?></h1>
        
        <div class="about-me-text">
            <?php the_content() ?>
        </div>
    </div>
    
    <div class="image-site">
       <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/about-me/about-me.jpg' ); ?>" alt="" >
    </div>

</div>

<style>
    .about-me { 
        display: grid;
        gap: 15vw;
        padding-top: 10vw;
        grid-template-columns: 2fr 2fr;
        
    }

    .about-me .text-site {
        margin-top: 20px;
        flex-grow: 4;       
       
    }

    .about-me .text-site h1{
        transform: translateX(-20px) rotate(-4deg);
        font-weight: normal;
        margin-bottom: 50px;
        font-size: 3.5rem;
    }

    .about-me .text-site .about-me-text{
        /* max-width: 1200px; */
        font-size: 1.75rem;
        font-weight: 600;
        line-height: 1.6;
        color: var(--forrest-green);
    }
    
    .about-me .image-site {
        flex-grow: 4;
    }
    
</style>