<style>

    .menu-el img{
        height: 100px;
        margin-bottom: 10px;
    }

    .menu-title{
        font-size: 25px;
        color: white;
    }

    .menu{
        margin-top: 30px;
    }

    .menu-el{
        margin-bottom: 30px;
        display: inline-block;
        margin-left: 70px;
        text-align: center;
    }

    .menu a:hover{
        text-decoration: none!important;
    }

    .custom-select-2{
        height: 15vh;
        width: 40vw;
        text-align-last: center;
        background-color: #FFFFFF;
        color: #D9D9D9;
        font-size: 30px;
        font-weight: bold;
        border-radius: 30px;
    }

</style>

<template>
    <div>
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

        <div id="flag">
            <img :src="'/storage/' + countries_object[country - 1].country_flag">
        </div>
        <b-form-select id="selection" v-model="country" class="custom-select-2">
          <option v-bind:value="country_object.id" v-for="country_object in countries_object">{{ country_object.name }}
          </option>
        </b-form-select>
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
        axios.get('/country/index')
            .then((response) => {
                this.countries=response.data.map(item=>item.id);
                this.countries_flags=response.data.map(item=>item.country_flag);
                console.log(response)
            });
        axios.get('/country/index')
            .then((response) => {
                this.countries_object=response.data;
                console.log(response)
            })
        console.log('Component mounted.')
    }
}

</script>
