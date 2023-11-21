<div class="follow-instagram">
    <div class="text-part">
        <a class="instagram-icon" href="https://www.instagram.com/birgitmariestudio/" target="_blank" rel="noopener">
            <span>Følg med på</span>
            <span class="profile-name">@birgitmariestudio</span>
        </a>
    </div>
</div>

<style>
    .follow-instagram{
        padding: 20vw 0;
    }

    .follow-instagram .text-part{
        font-size: 4vw;
    }

    .follow-instagram .text-part a{
        display:flex;
        justify-content: center;
        flex-direction: column;
        color: var( --caramel-delight);
        
    }

    @media(hover:hover){
        .follow-instagram .text-part a:hover span:nth-child(2){
            color: var( --main-text-color);
            color: #3E6984;
            color: #C88769;
        }
    }

    .follow-instagram .text-part a span{
        display: block;
        text-align: center;
    }

    .follow-instagram .text-part a span:nth-child(2){
        font-weight: 700;
        transition: all 0.2s var(--power3-out);
    }
</style>