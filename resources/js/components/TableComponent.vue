<style>

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
    height: 6vh;
    line-height: 5vh;
    background-color: #B5D6A7;
    color: white;
    font-size: 25px;
    position: absolute;
    width: 90%;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-99%);
    border: 5px solid #92C27A;
    border-radius: 15px 15px 0px 0px;
    font-weight: bold;
}

th, td {
    text-align: center!important;
}

.pair div {
    padding: 10px;
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
    padding: 10px;
}

</style>

<template>
    <div>
        <div id="sub-header">

        </div>
        <b-container class="content-tables" fluid>
            <b-row id="headers">
                <b-col>
                    <div class="col-header">
                        Transporteur(s)
                    </div>
                </b-col>
                <b-col>
                    <div class="col-header">
                        Expéditeur(s)
                    </div>
                </b-col>
            </b-row>
            <b-row>
                <b-col class="border-right">
                    <b-table hover :items="transporters" :fields="fields_transporters">
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

                    <b-table hover :items="expedients" :fields="fields_expedients">
                        <template #cell(mean_image)="data" class="mean-image">
                            <img src="/images/tourist.png" height="25px" v-if="data.item.type == 'sender'">
                            <img src="/images/stock.png" height="25px" v-if="data.item.type == 'traveler'">
                        </template>
                        <template #cell(contact)="data">
                            <contact :expediter="data.item"></contact>
                        </template>
                        <template #cell(created_at)="data">
                            {{ data.item.created_at.substr(11, 5) }}
                        </template>
                        <template #cell(type)="data">
                            <p v-if="data.item.type == 'traveler'">Voyageur</p>
                            <p v-if="data.item.type == 'sender'">Expéditeur</p>
                        </template>
                    </b-table>
                </b-col>
            </b-row>
        </b-container>
    </div>
</template>

<script>
    export default {
        data(){
            return {
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
                        class: 'pair'

                    },
                    {
                        key: 'mean',
                        label: 'Type',
                        class: 'impair'
                    },
                    {
                        key: 'from',
                        label: 'Départ',
                        class: 'pair'
                    },
                    {
                        key: 'hour',
                        label: 'Heure',
                        class: 'impair'
                    },
                    {
                        key: 'to',
                        label: 'Arrivée',
                        class: 'pair'
                    },
                    {
                        key: 'number_places',
                        label: 'Disponibilité'
                        ,class: 'impair'
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
                        class: 'pair'
                    },
                    {
                        key: 'type',
                        label: 'Type',
                        class: 'impair'
                    },
                    {
                        key: 'from',
                        label: 'Départ',
                        class: 'pair'
                    },
                    {
                        key: 'to',
                        label: 'Arrivée',
                        class: 'impair'
                    },
                    {
                        key: 'delay',
                        label: 'Délai',
                        class: 'pair'
                    },
                    {
                        key: 'contact',
                        label: ''
                    }
                ]
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
        }
    }
</script>
