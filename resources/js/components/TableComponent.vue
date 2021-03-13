

<style>

#navbar-title:after {
    content: '';
    background: url("/images/home-icon-silhouette.png") center no-repeat;
    background-size: 40px;
    display: inline-block;
    width: 50px;
    height: 50px;
    margin-left: 20px;
}

.nav-link {
    background-color: #92C47D!important;
    color: white!important;
    font-size: 20px!important;
    font-weight: bold!important;
}

.mean-image{
    text-align: center;
}

.mean-image img{
    height: 50px;
}

#header{
    margin-bottom: 0px!important;
}

#sub-header{
    height: 10vh;
    width: 100%;
    background: url("/images/Jungle.jpg") no-repeat center center fixed;
    background-size: cover;
}

#headers{
    text-align: center;
}

.col-header{
    text-align: center;
    height: 7vh;
    line-height: 6vh;
    background-color: #B5D6A7;
    color: white;
    font-size: 2em;
    position: absolute;
    width: 90%;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-99%);
    border: 5px solid #92C27A;
    border-radius: 15px 15px 0px 0px;
    font-weight: bold;
}

.border-right2 {
    border-right: 1px solid #dee2e6;
}

.filter-text{
    color: #447B2E;
}

@media (max-width: 800px){
    .filter-text span{
        display: none!important;
    }

    .filter-text{
    }

    .col-header{
        font-size: 1em;
        text-align: left!important;
    }

    .table-title{
        margin-right: 20px;
    }

    #sub-header{
        width: 155vw!important;
    }

    .col{
        border-right: none!important;
    }

    .filter-text:after{
        top: 5px!important;
    }
}

th, td {
    text-align: center!important;
}

.pair div {
    padding: 8px;
    background-color: #91C37C;
    color: #447B2E;
    border-radius: 5px;
}

.mean-image-tr div{
    background-color: #92C27C;
    color: white;
    padding: 10px;
}
.impair div{
    background-color: #D6E9D3;
    color: #588F40;
    border-radius: 5px;
    padding: 8px;
}

.collapse-title{
    font-size: 20px;
    color: #8EC277;
    font-weight: bold;
    text-align: center;
}

.filter-title{
    right: 10%;
    position: absolute;
    top: -5vh;
    color: #588F40;
}

#copyright2{
    text-align: center;
    color: gray;
    width: 100%;
    font-size: 1.2em;
}

.animation2{
  height:0px;
  width:1px;
  border-bottom:1px solid #000;

  -webkit-animation: increase 3s;
  -moz-animation:    increase 3s;
  -o-animation:      increase 3s;
  animation:         increase 3s infinite;
  animation-fill-mode: forwards;
}

@keyframes increase {
    100% {
        width: 99%;
    }
}

.filter-text:after{
    content: '';
    background: url(/images/filter.png) center no-repeat;
    background-size: 30px;
    display: inline-block;
    width: 30px;
    height: 30px;
    text-align: center;
    position: absolute;
    top: 12px;
}

@media (max-width: 1200px) {
    #header{
        background-color: #F3F3F4;
    }

    .pair, .impair{
        font-size: 10px;
        line-height: 25px;
    }

    #copyright2{
        text-align: center;
        color: gray;
        width: 155%;
        font-size: 1.2em;
    }

    .animation2{
      height:0px;
      width:1px;
      border-bottom:1px solid #000;

      -webkit-animation: increase 3s;
      -moz-animation:    increase 3s;
      -o-animation:      increase 3s;
      animation:         increase 3s infinite;
      animation-fill-mode: forwards;
    }

    @keyframes increase {
        99% {
            width: 100%;
        }
    }
}

</style>

<template>
    <div>
        <div id="sub-header">

        </div>
        <b-container class="content-tables mb-6" fluid>
            <b-row id="headers">
                <b-col class="table-title">
                    <div class="col-header">
                        &nbsp&nbsp&nbspTransporteur(s)<a v-b-toggle.collapse-1 class="filter-text"><span>&nbsp&nbspTrier&nbsp&nbsp</span></a>
                    </div>
                </b-col>
                <b-col class="table-title">
                    <div class="col-header">
                        &nbsp&nbsp&nbspExpéditeur(s) <a v-b-toggle.collapse-2 class="filter-text"><span>&nbsp&nbspTrier&nbsp&nbsp</span></a>
                    </div>
                </b-col>
            </b-row>
            <b-row>
                <b-col class="border-right2">
                    <b-collapse id="collapse-1" class="">
                        <b-card>
                          <p class="card-text text-center">
                              <div class="collapse-title mb-3">Trier par...</div>
                              <b-container class="collapse-filters">
                                <b-row class="mb-2">
                                  <b-col class="pair"><div>Date</div></b-col>
                                  <b-col class="impair"><div>Type</div></b-col>
                                  <b-col class="pair"><div>Départ</div></b-col>
                                  <b-col class="impair"><div>Arrivée</div></b-col>
                                </b-row>
                                <b-row>
                                  <b-col><b-form-datepicker class="w-100 h-100" button-only reset-button v-model="filter_date_trans"></b-form-datepicker></b-col>
                                  <b-col>
                                      <b-form-select v-model="filter_type_trans">
                                          <option value=""></option>
                                          <option v-for="select_mean in means" :key="select_mean.id" :value="select_mean.name">
                                              {{ select_mean.name }}
                                          </option>
                                      </b-form-select>
                                  </b-col>
                                  <b-col>
                                      <b-form-select v-model="filter_from_trans">
                                          <option value=""></option>
                                          <option v-for="select_from in from_cities" :key="select_from.id" :value="select_from.name">
                                              {{ select_from.name }}
                                          </option>
                                      </b-form-select>
                                  </b-col>
                                  <b-col>
                                      <b-form-select v-model="filter_to_trans">
                                          <option value=""></option>
                                          <option v-for="select_to in to_cities" :key="select_to.id" :value="select_to.name">
                                              {{ select_to.name }}
                                          </option>
                                      </b-form-select>
                                  </b-col>
                                </b-row>
                              </b-container>
                          </p>
                        </b-card>
                    </b-collapse>
                    <b-table hover :items="filtered_transporters" :fields="fields_transporters" primary-key="a" :tbody-transition-props="transProps">
                        <template #cell(mean_image)="data" class="mean-image">
                            <img :src="'/storage/' + data.item.mean_image" height="25px">
                        </template>
                        <template #cell(contact)="data">
                            <contact :transporter="data.item"></contact>
                        </template>
                        <template #cell(number_places)="data">
                            {{ data.item.number_places }} places
                        </template>
                    </b-table>
                </b-col>
                <b-col>
                    <b-collapse id="collapse-2" class="">
                      <b-card>
                        <p class="card-text text-center">
                            <div class="collapse-title mb-3">Trier par...</div>
                            <b-container class="bv-example-row">
                              <b-row class="mb-2">
                                <b-col class="pair"><div>Date</div></b-col>
                                <b-col class="impair"><div>Départ</div></b-col>
                                <b-col class="pair"><div>Arrivée</div></b-col>
                              </b-row>
                              <b-row>
                                <b-col><b-form-datepicker class="w-100 h-100" button-only reset-button v-model="filter_date_exp"></b-form-datepicker></b-col>
                                <b-col>
                                    <b-form-select v-model="filter_from_exp">
                                        <option value=""></option>
                                        <option v-for="select_from in from_cities" :key="select_from.id" :value="select_from.name">
                                            {{ select_from.name }}
                                        </option>
                                    </b-form-select>
                                </b-col>
                                <b-col>
                                    <b-form-select v-model="filter_to_exp">
                                        <option value=""></option>
                                        <option v-for="select_to in to_cities" :key="select_to.id" :value="select_to.name">
                                            {{ select_to.name }}
                                        </option>
                                    </b-form-select>
                                </b-col>
                              </b-row>
                            </b-container>
                        </p>
                      </b-card>
                    </b-collapse>
                    <b-table hover :items="filtered_exporters" :fields="fields_expedients" primary-key="a" :tbody-transition-props="transProps">
                        <template #cell(mean_image)="data" class="mean-image">
                            <img src="/images/tourist.png" height="25px" v-if="data.item.type == 'sender'">
                            <img src="/images/stock.png" height="25px" v-if="data.item.type == 'traveler'">
                        </template>
                        <template #cell(created_at)="data">
                            {{ data.item.created_at.substr(11, 5) }}
                        </template>
                        <template #cell(type)="data">
                            <p v-if="data.item.type == 'sender'">Voyageur</p>
                            <p v-if="data.item.type == 'traveler'">Expéditeur</p>
                        </template>
                        <template #cell(contact)="data">
                            <contact :transporter="data.item"></contact>
                        </template>
                    </b-table>
                </b-col>
            </b-row>
        </b-container>
        <footer class="footer mt-auto py-3">
          <div id="copyright2">
              <div class="animation2 mb-1"></div>
              <div class="mt-2">African Road By HERITAGES © 2021</div>
          </div>
        </footer>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                from_cities: [],
                to_cities: [],
                means: [],
                filter_date_trans: '',
                filter_type_trans: '',
                filter_from_trans: '',
                filter_to_trans: '',
                filter_date_exp: '',
                filter_type_exp: '',
                filter_from_exp: '',
                filter_to_exp: '',
                transProps: {
                  name: 'flip-list'
                },
                date: "",
                type: "",
                from: "",
                to: "",
                transporters: [],
                expedients: [],
                fields: ['T', 'Date', 'Type', 'Départ', 'Heure', 'Arrivé', 'Disponnibilité', 'Contact'],
                fields_transporters: [
                    {
                        key: 'mean_image',
                        label: 'T',
                        class: 'mean-image-tr'
                    },
                    {
                        key: 'date',
                        label: 'Date',
                        class: 'pair',
                        sortable: true

                    },
                    {
                        key: 'mean',
                        label: 'Type',
                        class: 'impair',
                        sortable: true
                    },
                    {
                        key: 'from',
                        label: 'Départ',
                        class: 'pair',
                        sortable: true
                    },
                    {
                        key: 'hour',
                        label: 'Heure',
                        class: 'impair',
                        sortable: true
                    },
                    {
                        key: 'to',
                        label: 'Arrivée',
                        class: 'pair',
                        sortable: true
                    },
                    {
                        key: 'number_places',
                        label: 'Disponibilité'
                        ,class: 'impair',
                        sortable: true
                    },
                    {
                        key: 'contact',
                        label: ''
                    }
                ],
                fields_expedients: [
                    {
                        key: 'mean_image',
                        label: 'T',
                        class: 'mean-image-tr'
                    },
                    {
                        key: 'created_at',
                        label: 'Heure',
                        class: 'pair',
                        sortable: true
                    },
                    {
                        key: 'type',
                        label: 'Type',
                        class: 'impair',
                        sortable: true
                    },
                    {
                        key: 'from',
                        label: 'Départ',
                        class: 'pair',
                        sortable: true
                    },
                    {
                        key: 'to',
                        label: 'Arrivée',
                        class: 'impair',
                        sortable: true
                    },
                    {
                        key: 'delay',
                        label: 'Délai',
                        class: 'pair',
                        sortable: true
                    },
                    {
                        key: 'contact2',
                        label: ''
                    },
                    {
                        key: 'contact3',
                        label: ''
                    },
                    {
                        key: 'contact4',
                        label: ''
                    },
                    {
                        key: 'contact5',
                        label: ''
                    },
                    {
                        key: 'contact',
                        label: ''
                    }
                ],
                filtered_trans: [],
                filtered_exp: [],
                delays: []
            }
        },
        methods: {
            filterTable(row, filter) {
                if (row.date === filter[0]) {
                    return true;
                } else {
                    return false;
                }
            }
        },
        mounted() {
            console.log('Component mounted.');
            axios.get('/transport/get').then(
                response => (this.transporters = response.data)
            )
            axios.get('/travel/get').then(response => (this.expedients = response.data))

            axios.get('/city/index').then(response => (this.to_cities = response.data))
            axios.get('/city/index_from').then(response => (this.from_cities = response.data))
            axios.get('/mean/index').then(response => (this.means = response.data))
            axios.get('/delay/index').then(response => (this.delays = response.data))
        },
        computed: {
            filtered_transporters () {
                this.filtered_trans = this.transporters;
                this.filtered_trans = this.filter_date_trans
                ? this.filtered_trans.filter(item => item.date.includes(this.filter_date_trans))
                :this.filtered_trans;
                this.filtered_trans =  this.filter_type_trans
                ? this.filtered_trans.filter(item => item.mean.includes(this.filter_type_trans))
                :this.filtered_trans;
                this.filtered_trans =  this.filter_from_trans
                ? this.filtered_trans.filter(item => item.from.includes(this.filter_from_trans))
                :this.filtered_trans;
                this.filtered_trans =  this.filter_to_trans
                ? this.filtered_trans.filter(item => item.to.includes(this.filter_to_trans))
                :this.filtered_trans;
                return this.filtered_trans;
            },

            filtered_exporters () {
                this.filtered_exp = this.expedients;

                this.filtered_exp = this.filter_date_exp
                ? this.filtered_exp.filter(item => item.created_at.includes(this.filter_date_exp))
                :this.filtered_exp;

                this.filtered_exp =  this.filter_type_exp
                ? this.filtered_exp.filter(item => item.mean.includes(this.filter_type_exp))
                :this.filtered_exp;

                this.filtered_exp =  this.filter_from_exp
                ? this.filtered_exp.filter(item => item.from.includes(this.filter_from_exp))
                :this.filtered_exp;

                this.filtered_exp =  this.filter_to_exp
                ? this.filtered_exp.filter(item => item.to.includes(this.filter_to_exp))
                :this.filtered_exp;
                return this.filtered_exp;
            }
        }
    }
</script>
