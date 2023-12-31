    </div> <!-- END SIDE-CONTENT -->
    
    <footer>
        <p>Birgit Marie Studio © <?php echo date("Y") ?></p>
        <p><a target="_blank" href="mailto:birgitmarieoesterby@gmail.com?body=Hej Birgit Marie">birgitmarieoesterby@gmail.com</a> +45 21 77 87 77</p>
    </footer>
</div> <!-- END SITE-WRAPPER -->

<style>
    footer{
        padding: 20vw 0 4vw;
        font-size: 1rem;
        color: #A4927C;
    }

    footer p{
        margin: 4px 0;
    }

    footer p:first-of-type{
        font-weight: 600;
    }

    footer a, footer a:visited{
        display: inline-block;
        margin-right: 16px;
        color: #A4927C;
        transition: color 0.1s ease;
    }

    @media(hover: hover){
         footer a:hover{
            color: var(--main-text-color);
         }
    }

    
    @media only screen and (max-width: 960px) {
        footer{
            text-align: center;
        }
    }
</style>