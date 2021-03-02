<style>
    #header{
        margin-bottom: 80px;
        height: 15vh;
    }
    #header-header{
        height: 5vh;
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
        height: 15vh;
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
        right: 120px;
        height: 10vh;
        position: absolute;
        font-size: 15px;
    }

</style>

<div id="app-header">
    <div id="header">
        <div id="header-header"></div>
        <div id="navbar-header">
            <div id="navbar-brand">
                <div class="container">
                    <div class="row">
                        <a href="/">
                            <div class="co" id="header-logo"></div>
                        </a>
                        <div class="col" id="free-service">Service<font color="#9FB793"> Gratuit</a></div>
                    </div>
                    <div class="row">
                        <div class="col" id="header-country"><country></country></div>
                        <div class="col" id="header-hour"><hour></hour></div>
                    </div>
                </div>
            </div>
            <div id="navabr-bags">
                <a href="https://www.bags-app.com/">Découvrez BAGS (colis par avions)</a>
            </div>
            <div id="navbar-title">
                @if ($current_page == 'offers')
                    <a href="/home">Page d'accueil</a>
                @else
                    <a href="/offers">Consulter les annonces</a>
                @endif
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="{{ asset('js/app2.js') }}"></script>
