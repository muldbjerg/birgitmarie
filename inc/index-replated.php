
<div class="index-replated">

    <div class="top-content">
        
        <div class="replated-image-1">
            <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/index/replated-index-1.webp' ); ?>" alt="Replated tallerkener udstillet" >
        </div>
        
        <div class="replated-text-top">

            <h2>Replated</h2>
            <p class="replated-tagline handwritten">
                <span>Materialer</span>
                <span>med</span>
                <span>mening</span>
            </p>
        </div>

        <div class="clearfix"></div>
        
        <div class="replated-image-2">
            <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/index/replated-index-2.webp' ); ?>" alt="Replated tallerkener set oppefra" >
        </div>
    </div>

    <div class="secondary-content">
        <div class="replated-text">
            <div class="notation-box">
                <p>Antal Forsøg</p>
                <p><span>302<span></p>
            </div>
        
            <p>Det er normalt besværligt og med meget svingende resultater, at glasere keramik, der allerede er glasurbrændt.</p>
            <p>Det tog mange forsøg - men jeg har fundet en metode til at give masseproducerede tallerkner en ny glasur. På den måde kan stakkene med de hvide tallerkener i genbrugsbutikkerne få nyt liv. Dette er min måde at bruge ressourcerne på ny og det giver mening.
            </p>
        </div>
        <div>
            <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/index/replated-index-3.webp' ); ?>" alt="Hånd der holder Replated tallerkener">
        </div>
    </div>

    <div class="tertiary-content">
        <div class="replated-video-container">
            <div id="replated-video-poster" class="poster-image">
                <div class="play-button">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M72,39.88V216.12a8,8,0,0,0,12.15,6.69l144.08-88.12a7.82,7.82,0,0,0,0-13.38L84.15,33.19A8,8,0,0,0,72,39.88Z"  fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                </div>

                <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/index/replated-video-poster.webp'); ?>" alt="Vis video om Replated projektet">
            </div>
            <iframe id="replated-video" src="" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
        </div>
        <script>
            var replatedVideo = document.getElementById('replated-video'),
                replatedVideoPoster = document.getElementById('replated-video-poster');

            replatedVideoPoster.addEventListener("click", (e) => {
                replatedVideo.src = 'https://player.vimeo.com/video/855685548?h=cef5385160&byline=0&portrait=0&autoplay=1';
                replatedVideoPoster.classList.add('hide')
            });

        </script>
        
    </div>
        
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
        font-size: 7vw;
        line-height: 0.7;
        margin: -2.5vw 0 0;
        text-align: center;
    }

    .index-replated .top-content .replated-tagline span{
        display: block;
    }

    .index-replated .top-content .replated-tagline span:nth-child(2){
        margin-left: 20vw;
    }

    .index-replated .top-content .replated-tagline span:nth-child(3){
        margin-left: 22vw;
    }

    .index-replated .top-content .replated-image-1{
        width: 32vw;
        float:right;
        margin-top: -240px;
    }
    
    .index-replated .top-content .replated-image-2{
        width: 45vw;
        margin-top: -60px;
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
        font-size: 4rem;
    }
    
    .index-replated .tertiary-content{
        padding: 10vw;
    }

    .index-replated .tertiary-content .replated-video-container{
        position: relative;
        padding: 56.25% 0 0 0;
    }

    .index-replated .tertiary-content #replated-video-poster{
        position: absolute;
        z-index: 1;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        cursor: pointer;
    }

    .index-replated .tertiary-content #replated-video-poster .play-button{
        display: flex;
        justify-content: center;
        align-items: center;
        position: absolute;
        z-index: 2;
        width: 180px;
        height: 120px;
        border-radius: 30px;
        right: calc(50% - 90px);
        top: calc(50% - 60px); 
        background: rgba(74, 24, 5, 0.7);
        backdrop-filter: blur(4px);

        transition: all 0.2s ease;
    }

    .index-replated .tertiary-content #replated-video-poster .play-button svg{
        height: 60px;
        color: #fff;
    }

    @media(hover: hover){
        .index-replated .tertiary-content #replated-video-poster:hover .play-button{
            background: transparent;
            transform: scale(1.1);
        }
    }

    .index-replated .tertiary-content #replated-video-poster.hide{
        opacity: 0;
        z-index: 0;
    }
    
    .index-replated .tertiary-content #replated-video{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

   @media only screen and (max-width: 1040px) {
       .index-replated .top-content .replated-image-2{
           margin-top: 20px;
        }
        
        .index-replated .tertiary-content{
            padding: 10vw 0;
        }
    }
    
    @media only screen and (max-width: 960px) {
        .index-replated .top-content {
            padding-top: 40px;
        }

        .index-replated .top-content .replated-image-1{
            display: none;
        }

         .index-replated .secondary-content .replated-text{ 
            max-width: 400px;
            padding-bottom: 2vw;
        }

         .index-replated .top-content .replated-text-top h2{
            font-size: 14vw;
        }
        
        .index-replated .top-content .replated-text-top .replated-tagline{
            font-size: 12vw;
            margin: -4vw 0 0;
        }

        .index-replated .top-content .replated-tagline span:nth-child(2) {
            margin-left: 8vw;
            transform: translateY(5px);
        }

        .index-replated .top-content .replated-image-2{
            margin-top: 52vw;
            width: 100%;
        }

        .index-replated .secondary-content{
            grid-template-columns: 1fr; 
            margin-top: 20vw;
            gap: 20vw;
        }

        .index-replated .secondary-content .replated-text .notation-box p:nth-child(2){
            font-size: 3rem;
        }

        .index-replated .tertiary-content #replated-video-poster .play-button{
            width: 120px;
            height: 80px;
            border-radius: 20px;
            right: calc(50% - 60px);
            top: calc(50% - 40px); 
        }

        .index-replated .tertiary-content #replated-video-poster .play-button svg{
            height: 40px;
        }
    }

</style>