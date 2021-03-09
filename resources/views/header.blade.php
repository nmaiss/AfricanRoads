<style>
    #header{
        margin-bottom: 40px;
        height: 15vh;
    }
    #header-header{
        height: 5vh;
        line-height: 5vh;
        text-align: center;
        width: 100%;
        background: url("/images/Jungle.jpg") no-repeat center center fixed;
        background-size: cover;
    }
    #navbar-header{
        height: 10vh;
        background-color: #F3F3F4;
    }

    #navbar-brand{
        position: absolute;
        left: 6vh;
        background-color: #F3F3F3;
    }

    #header-country{
        width: 20vh;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #D8D8D8;
        font-weight: bold;
    }

    #header-logo, #header-hour {
        color: white;
        background-color: #B5D6A9;
        width: 20vh;
    }

    #header-logo{
        height: 10vh;
        background: url("/images/logo.jpg") center center;
        background-size: cover;
    }

    #header-hour {
        height: 5vh;
        display: flex;
        justify-content: center;
        align-items: center;
        font-weight: bold;
    }

    #free-service {
        display: flex;
        justify-content: center;
        align-items: center;
        color: #D8D8D8;
        font-weight: bold;
        font-size: 20px;
    }

    #navbar-title {
        height: 10vh;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #CDCDCD;
        font-weight: bold;
        font-size: 35px;
    }

    #header a:hover{
        decoration: none!important;
    }

    #navabr-bags {
        color: #CDCDCD;
        font-weight: bold;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 10vh;
        position: absolute;
        font-size: 15px;
        right: 0;
    }

    #bags-logo img{
        height: 13vh;
        margin-left: 25px;
    }

    #covid-message{
        margin-left: auto;
        margin-right: auto;
        text-align: center;
        display: inline-block;
        font-size: 15px;
        line-height: 15px!important;
        background-color: white;
        border-radius: 100px!important;
        display: inline-block;
        margin-top: 9px;
    }

    #covid-message div {
        background-color: white;
        color: #D9D9D9;
        font-weight: bold;
        padding-top: 7px;
        padding-bottom: 7px;
        padding-left: 35px;
        padding-right: 35px;
    }

    @media (max-width: 1200px) {
        #header-header{
            display: none;
        }
        #navbar-bags{
            display: none!important;
        }

        #navbar-bags img{
            display: none!important;
        }

        #navbar-brand{
            left: 0;
            display: none;
        }

        #bags-logo{
            display: none;
        }

        #bags-title{
            display: none;
        }

        #header{
            margin-bottom: 40px;
            height: 10vh;
        }

        #header{
            width: 200vw;
            background-color: #F3F3F4;
        }

    }

</style>

<div id="app-header">
    <div id="header">
        <div id="header-header">
            <a href="https://www.who.int/fr">
                <div id="covid-message">
                    <div>
                        Important | COVID-19
                    </div>
                </div>
            </a>
        </div>

        <div id="navbar-header">
            <div id="navbar-brand">
                <div class="container">
                    <div class="row">
                        <a href="/">
                            <div class="co" id="header-logo"></div>
                        </a>
                        <div class="col" id="free-service">Service<font color="#9FB793">&nbsp;Gratuit</a></div>
                    </div>
                </div>
            </div>
            <div id="navabr-bags">
                <div id="bags-title">
                    <a target="_blank" rel="noopener noreferrer" href="https://www.bags-app.com/">Découvrez BAGS (colis par avions)</a>
                </div>
                <div id="bags-logo">
                    <a target="_blank" rel="noopener noreferrer" href="https://www.bags-app.com/">
                        <img src="/images/bags.webp">
                    </a>
                </div>
            </div>
            <div id="navbar-title">
                @if ($current_page == 'offers')
                    <a href="/home">Accueil</a>
                @else
                    <a href="/offers">Annonces</a>
                @endif
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="{{ asset('js/app2.js') }}"></script>
