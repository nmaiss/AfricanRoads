<style>

    .centered-icons{
        margin-top: 50vh;
        transform: translateY(-50%);
    }

    .menu-el img{
        height: 7vw;
        margin-bottom: 1vw;
    }

    .menu-title{
        font-size: 1.5vw;
        color: white;
    }

    .menu-el{
        display: inline-block;
        margin-left: 3vw;
        text-align: center;
    }

    .menu a:hover{
        text-decoration: none!important;
    }

    @media only screen and (max-width: 550px) {
        .menu-title{
            font-size: 5vw;
        }
        .menu-el img{
            height: 20vw;
            margin-bottom: 1vw;
        }

        .menu-el{
            margin-bottom: 7vw;
        }
    }



</style>

<template>
    <div>
        <div class="centered-icons">
            <div class="menu">
                <div class="menu-el">
                    <a href="/home">
                        <div class="menu-image">
                            <img src="/images/home-icon-silhouette.png">
                        </div>
                        <div class="menu-title">
                            Page d'accueil
                        </div>
                    </a>
                </div>
                <div class="menu-el">
                    <a href="/offers">
                        <div class="menu-image">
                            <img src="/images/megaphone.png">
                        </div>
                        <div class="menu-title">
                            Consulter les annonces
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

export default{
    data: function() {
        return {
            country: 1,
            country_flag: "",
            countries: [],
            countries_flags: [],
            countries_object: [{'country_flag': "../images/democratic-republic-of-congo.png"}],
        }
    },
    mounted() {
        console.log('Component mounted.')
    }
}

</script>
