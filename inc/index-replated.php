
<div class="index-replated">

    <div class="top-content">
        
        <div class="replated-image-1">
            <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/index/replated-index-1.webp' ); ?>" alt="" >
        </div>
        
        <div class="replated-text-top">

            <h2>Replated</h2>
            <p class="replated-tagline handwritten">
                <span>Tallerkener</span>
                <span>klar til</span>
                <span>et nyt liv</span>
            </p>
        </div>

        <div class="clearfix"></div>
        
        <div class="replated-image-2">
            <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/index/replated-index-2.webp' ); ?>" alt="" >
        </div>
    </div>

    <div class="secondary-content">
        <div class="replated-text">
            <div class="notation-box">
                <p>Antal Forsøg</p>
                <p><span>232<span></p>
            </div>
        
            <p>Normalt siges det, at man ikke kan glasere keramik der allerede er brændt. Det tog mange forsøg - men jeg har fundet en måde at give masseproducerede en ny glasur. På den måde de stakke med efterlade hvide tallerkener i genbrugsbutikkerne få nyt liv.</p>
        </div>
        <div>
            <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/index/replated-index-3.webp' ); ?>" alt="">
        </div>
    </div>

    <!-- <div class="tertiary-content">
        <div style="padding:56.25% 0 0 0;position:relative;">
            <img class="poster-image" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/index/replated-video-poster.png'); ?>" alt="">
            <iframe src="https://player.vimeo.com/video/855685548?h=cef5385160&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" loading="lazy" allowfullscreen></iframe>
            <script src="https://player.vimeo.com/api/player.js"></script>
        </div>
        <script>

        </script>
        
    </div> -->
        
</div>


<style>
    
    
    .index-replated .top-content .replated-text-top{
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        padding-top: 9vw;
    }
    
    .index-replated .top-content .replated-text-top h2{
        font-size: 9vw;
        text-transform: uppercase;
        color: var(--caramel-delight);
        margin: 0;
    }
    
    .index-replated .top-content .replated-text-top .replated-tagline{
        font-size: 9vw;
        line-height: 0.7;
        margin: -3.5vw 0 0;
        text-align: center;
    }

    .index-replated .top-content .replated-tagline span{
        display: block;
    }

    .index-replated .top-content .replated-tagline span:nth-child(2){
        margin-left: 10vw;
    }

    .index-replated .top-content .replated-tagline span:nth-child(3){
        margin-left: 18vw;
    }

    .index-replated .top-content .replated-image-1{
        width: 32vw;
        float:right;
        margin-top: -220px;
    }
    
    .index-replated .top-content .replated-image-2{
        width: 45vw;
        margin-top: -130px;
    }

    .index-replated .secondary-content {
        display: grid;
        grid-template-columns: 30% 65%; 
        align-items: end;
        gap: 5vw;
        margin-top: 10vw;
    }

    .index-replated .secondary-content .replated-text{
        max-width: 400px;
        padding-bottom: 2vw;
    }
    
    .index-replated .secondary-content .replated-text .notation-box p:nth-child(1){
        max-width: 68px;
        line-height: 1.2;
        
    }
    .index-replated .secondary-content .replated-text .notation-box p:nth-child(2){
        max-width: 140px;
        padding-top: 16px;
        font-size: 3.2rem;
    }
    
    .index-replated .tertiary-content{
        padding: 10vw;
      
    }

    .index-replated .tertiary-content iframe{
        background:#f60;
    }

    /* .index-replated .tertiary-content img.poster-image{
        background-size: cover;
        bottom: 0;
        left: 0;
        opacity: 1.0;
        position: absolute;
        right: 0;
        top: 0;
        z-index: 10;
        height: 100%;
        width: 100%;
        transition: all 0.3s ease-in;
        opacity: 0.3;
    } */
</style>