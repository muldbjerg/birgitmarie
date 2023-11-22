<?php
/**
 * Template Name: About Me Template
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
       <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/about-me/about-me.jpg' ); ?>" alt="Smilende Birgit Marie stående på marked med Replated tallerkenerne" >
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
        transform: translateX(-20px) rotate(-5deg);
        font-weight: normal;
        margin-bottom: 50px;
        font-size: 3rem;
        color: var(--caramel-delight); 
    }

    .about-me .text-site .about-me-text{
        font-size: 1.75rem;
        line-height: 1.6;
    }
    
    .about-me .image-site {
        flex-grow: 4;
    }
    
    @media only screen and (max-width: 960px) {
        .about-me { 
            grid-template-columns: 1fr;
            
        }

        .about-me .text-site .about-me-text{
            font-size: 1.3rem;
            line-height: 1.6;
            
        }
        
        .about-me .text-site h1{
            transform: translateX(0px) rotate(-5deg);
            text-align: center;
        }
    }
</style>


<?php
    get_footer();
?>