<style>

#header-form img {
    width: 120px;
}

#title-form {
    font-size: 50px;
    background-color: #93C47D;
    font-weight: bold;
    color: white;

    text-align: center;
    vertical-align: middle;
    line-height: 50px;
}

#title-form p{
    padding-top: 20px;
    padding-bottom: 8px;
    padding-left: 60px;
    padding-right: 60px;
}

#header-form {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 50px;
}

#left-img-form {
    margin-right: -30px;
    z-index: 10;
}

#right-img-form {
    margin-left: -30px;
    z-index: 10;
}

.title {
    font-size: 40px;
    color: #93C47D;
    font-weight: bold;
    text-align: center;
    margin-bottom: 15px;
}

#means {
    margin-bottom: 20px;
}

.mean {
    height: 80px;
    background-color: #D9EAD3;
    margin: 20px;
    color: #B6D7A8;
    font-size: 20px;
    font-weight: bold;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    border: 5px solid #B6D7A8;
    border-radius: 15px;
    cursor: pointer;
}

.mean-image img{
    width: 50px;
    position: absolute;
    bottom: -20px;
    left: -20px;
}

.mean-arrow img{
    width: 50px;
    position: absolute;
    right: -20px;
}

.selected {
    background-color: #93C47D;
    color: white;
    border: 5px solid #93C47D;
}

.card-header{
    display: none;
}

.input-form {
    background-color: #D9EAD3!important;
    color: #93C47D!important;
    border: 5px solid #B6D7A8;
    border-radius: 10px;
    height: 45px;
    text-align: center;
    width: 100%;
}

.btn-secondary{
    background-color: #D9EAD3!important;
    color: #93C47D!important;
    text-align: center;
    border: none!important;
    width: 100%;
}

.check-form {
    width: 50px;
    position: absolute;
    right: -5px;
    bottom: 5px;
}

.last-step img, .next-step img{
    width: 110px;
}

.warning-message{
    font-size: 20px;
    text-align: center;
    height: 110px;
    line-height: 110px;
    font-style: italic;
    color: #DADADA;
    font-weight: bold;
}

@media (max-width: 800px){
    .warning-message{
        font-size: 10px!important;
        height: 50px;
        line-height: 50px;
    }

    .thank-container{
        font-size: 10px!important;
    }
}

.warning {
    color: #E06666;
}

.big-form {
    height: 100%;
}

.thanks-message {
    text-align: center;
    font-size: 40px;
    font-weight: bold;
    color: #B6D7A8;
}

.menu {
    text-align: center;
    font-size: 40px;
}

.menu a{
    text-decoration: none;
    color: #B7B7B7!important;
}

.menu a:hover{
    text-decoration: none;
}

.menu-images{
    text-align: center;
}

.menu-images img{
    height: 100px;
}

b-drop-down img{
    height: 20px;
}

#home-menu {
    position: absolute;
    left: 60px;
    top: 10px;
}

#home-menu img {
    height: 100px;
}

@media (max-width: 1200px) {
    #home-menu{
        display: none;
    }

}

@media (max-width: 800px) {
    .warning-message{
        display: none!important;
    }

    .thank-container{
        font-size: 10px!important;
    }

    .menu-thank{
        font-size: 20px!important;
    }

}



</style>

<template>
    <div>
        <a href="/home">
            <div id="home-menu">
                <img src="/images/bouton-d_accueil.png">
            </div>
        </a>
        <div id="header-form">
            <div id="left-img-form">
                <img src="/images/tourist.png">
            </div>
            <div id="title-form">
                <p v-if="type == 'passenger'">Passager(s)</p>
                 <p v-if="type == 'merchandise'">Marchandise(s)</p>
            </div>
            <div id="right-img-form">
                <img src="/images/stock.png">
            </div>
        </div>

        <div v-if="max_step < 3">
          <b-card no-body>
            <b-tabs v-model="current_step" card>

              <b-tab title="Je transporte avec" active>
                <b-card-text>
                    <div class="title">
                        Je transporte avec
                    </div>

                    <b-container id="means">
                        <b-row>
                            <b-col class="mean" v-for="mean in means"  :key="mean.name" v-on:click="select(mean)" :class="mean.name === choosed_mean ? 'selected' : ''">
                                {{ mean.name }}
                                <div class="mean-image">
                                    <img :src="'/storage/' + mean.image">
                                </div>
                                <div class="mean-arrow" v-if="mean.name == choosed_mean">
                                    <img src="/images/check.png">
                                </div>
                            </b-col>
                        </b-row>
                    </b-container>

                    <b-container fluid class="text-light text-center">
                        <b-row>
                            <b-col cols="auto" class="mr-auto p-3 ">

                            </b-col>
                            <b-col cols="auto" class="p-3">
                                <div class="next-step" v-if="validate()" @click="next()">
                                    <img src="/images/Flèche verte.jpg">
                                </div>
                            </b-col>
                        </b-row>
                    </b-container>
                </b-card-text>
              </b-tab>

              <b-tab title="Itinéraire ">
                <b-card-text>
                    <div class="title">
                        Itinéraire
                    </div>

                    <b-container class="bv-example-row bv-example-row-flex-cols infos-form">
                        <b-row class="mb-3">
                            <b-col>
                                <b-form-select v-model="from" class="input-form" placeholder="Départ">
                                    <option value="">Départ</option>
                                    <option v-for="select_from in from_cities" :key="select_from.id" :value="select_from.name">
                                        {{ select_from.name }}
                                    </option>
                                </b-form-select>
                                <img src="/images/check.png" class="check-form" v-if="from != ''">
                            </b-col>
                            <b-col>
                                <b-form-datepicker id="datepicker" v-model="date" placeholder="Date" class="input-form" button-only></b-form-datepicker>
                                <img src="/images/check.png" class="check-form" v-if="date != ''">
                            </b-col>
                            <b-col>
                                <b-form-select v-model="to" class="input-form">
                                    <option value="">Arrivée</option>
                                    <option v-for="select_to in to_cities" :key="select_to.id" :value="select_to.name">
                                        {{ select_to.name }}
                                    </option>
                                </b-form-select>
                                <img src="/images/check.png" class="check-form" v-if="to != ''">
                            </b-col>
                        </b-row>
                        <b-row>
                            <b-col></b-col>
                            <b-col>
                                <b-form-timepicker v-model="hour" placeholder="heure" locale="fr" class="input-form" button-only></b-form-timepicker>
                                <img src="/images/check.png" class="check-form" v-if="hour != ''">
                            </b-col>
                            <b-col></b-col>
                        </b-row>
                    </b-container>

                    <b-container fluid class="text-light text-center mt-3">
                        <b-row>
                            <b-col cols="auto" class="mr-auto p-3 ">
                                <div class="last-step" @click="back()">
                                    <img src="/images/Flèche rouge.jpg">
                                </div>
                            </b-col>
                            <b-col cols="auto" class="mr-auto">
                                <div class="warning-message">
                                    <span class="warning">Attention!</span> Vous ne pourrez pas ensuite modifier l'annonce...
                                </div>
                            </b-col>
                            <b-col cols="auto" class="p-3">
                                <div class="next-step" v-if="validate()" @click="next()">
                                    <img src="/images/Flèche verte.jpg">
                                </div>
                            </b-col>
                        </b-row>
                    </b-container>

                </b-card-text>
              </b-tab>
              <b-tab title="Place(s) disponible(s) et Contact">
                <b-card-text>
                    <div class="title">
                        Place(s) disponible(s) et Contact
                    </div>

                    <b-container class="bv-example-row bv-example-row-flex-cols">
                      <b-row>
                        <b-col align-self="stretch">
                            <b-form-input v-model="number_places" class="input-form big-form" placeholder="Nombre de places"></b-form-input>
                            <img src="/images/check.png" class="check-form" v-if="number_places != ''">
                        </b-col>
                        <b-row cols="1" class="name-group">
                            <b-col class="mb-3">
                                <b-form-input v-model="name" class="input-form" placeholder="Nom"></b-form-input>
                                <img src="/images/check.png" class="check-form" v-if="name != ''">
                            </b-col>
                            <b-col>
                                <b-form-input v-model="first_name" class="input-form"  placeholder="Prénom"></b-form-input>
                                <img src="/images/check.png" class="check-form" v-if="first_name != ''">
                            </b-col>
                        </b-row>
                        <b-col align-self="stretch">
                            <b-form-input v-model="company" class="input-form big-form"  placeholder="Entreprise"></b-form-input>
                            <img src="/images/check.png" class="check-form" v-if="company != ''">
                        </b-col>
                        <b-col align-self="stretch">
                            <b-form-input v-model="phone_number" class="input-form big-form"  placeholder="Numéro de téléphone"></b-form-input>
                            <img src="/images/check.png" class="check-form" v-if="phone_number != ''">
                        </b-col>
                      </b-row>
                    </b-container>

                    <b-container fluid class="text-light text-center">
                        <b-row>
                            <b-col cols="auto" class="mr-auto p-3 ">
                                <div class="last-step" @click="back()">
                                    <img src="/images/Flèche rouge.jpg">
                                </div>
                            </b-col>
                            <b-col cols="auto" class="mr-auto">
                                <div class="warning-message">
                                    <span class="warning">Attention!</span> Vous ne pourrez pas ensuite modifier l'annonce...
                                </div>
                            </b-col>
                            <b-col cols="auto" class="p-3">
                                <div class="next-step" v-if="validate()" @click="submit()">
                                    <img src="/images/check.png">
                                </div>
                            </b-col>
                        </b-row>
                    </b-container>
                </b-card-text>
              </b-tab>
            </b-tabs>
          </b-card>
      </div>
      <div v-if="max_step === 3">
          <div class="container thank-container">
              <div class="row justify-content-center">
                  <div class="col-md-8">
                      <div class="thanks-message mb-4">Merci, votre annonce est postée !</div>
                      <b-container class="bv-example-row menu-images menu mt-6">
                          <b-row align-h="center">
                            <b-col cols="4" class="ml-4 sm-mr-4">
                                <a href="/home"><img src="/images/home-icon-silhouette.png"></a>
                            </b-col>
                            <b-col cols="4" class="mr-4">
                                <a href="/offers"><img src="/images/megaphone.png"></a>
                            </b-col>
                          </b-row>
                          <b-row align-h="center">
                            <b-col cols="4">
                                <a href="/home" class="menu-thank">Accueil</a>
                            </b-col>
                            <b-col cols="4">
                                <a href="/offers" class="menu-thank">Annonces</a>
                            </b-col>
                          </b-row>
                      </b-container>
                  </div>
              </div>
          </div>
      </div>
    </div>
</template>

<script>
    export default {
        props: ['type'],
        data: function () {
          return {
            countries: [],
            countries_object: [],
            means: [],
            current_step: 0,
            max_step: 0,
            choosed_mean: "",
            mean_image: "",
            date: "",
            hour: "",
            from: "",
            to: "",
            number_places: '',
            name: "",
            first_name: "",
            company: "",
            country: "",
            phone_number: "",
            typee: this.type,
            to_cities: [],
            from_cities: []
          }
        },
        methods: {
            select(mean){
                if (this.choosed_mean === mean.name){
                    this.choosed_mean = "";
                }
                else {
                    this.choosed_mean = mean.name;
                    this.mean_image = mean.image;
                }
            },
            add() {
                axios.post('/transport/store', this.$data)
                    .then((response) => {
                        console.log(response)
                    })
            },
            validate() {
                if (this.choosed_mean === "" && this.max_step === 0) {
                    return 0;
                }
                else if ((this.from === "" || this.to === "" || this.date === "" || this.hour === "") && this.max_step === 1) {
                    return 0;
                }
                else if ((this.number_places === "" || this.name === "" || this.first_name === "" || this.company === "" || this.phone_number === "") && this.max_step === 2) {
                    return 0;
                }
                else {
                    return 1;
                }
            },
            back() {
                if (this.current_step != 0)
                    this.current_step--;
                    this.max_step--;
            },
            next() {
                if (this.current_step != 2) {
                    this.max_step++;
                    this.current_step++;
                }
            },
            submit() {
                this.max_step++;
                this.current_step++;
                this.add();
            }
        },
        mounted() {
            axios.get('/country/index')
                .then((response) => {
                    this.countries=response.data.map(item=>item.name);
                    console.log(response)
                });
            axios.get('/country/index')
                .then((response) => {
                    this.countries_object=response.data;
                    console.log(response)
                })
            axios.get('/mean/index')
                .then((response) => {
                    this.means=response.data;
                    console.log(response)
                })
            axios.get('/city/index').then(response => (this.from_cities = response.data))
            axios.get('/city/index_from').then(response => (this.to_cities = response.data))
            console.log('Component mounted.')
        }
    }
</script>
