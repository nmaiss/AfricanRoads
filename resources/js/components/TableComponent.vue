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
                    </b-table>
                </b-col>
                <b-col>
                    <b-table striped hover :items="expedients" :fields="fields_expedients"></b-table>
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
                        label: 'T'
                    },
                    {
                        key: 'date',
                        label: 'Date'
                    },
                    {
                        key: 'mean',
                        label: 'Type'
                    },
                    {
                        key: 'from',
                        label: 'Départ'
                    },
                    {
                        key: 'hour',
                        label: 'Heure'
                    },
                    {
                        key: 'to',
                        label: 'Arrivée'
                    },
                    {
                        key: 'number_places',
                        label: 'Disponnibilité'
                    },
                    {
                        key: 'contact',
                        label: ''
                    }
                ],
                fields_expedients: [
                    {
                        key: 'T',
                    },
                    {
                        key: 'type',
                        label: 'Type'
                    },
                    {
                        key: 'from',
                        label: 'Départ'
                    },
                    {
                        key: 'to',
                        label: 'Arrivée'
                    },
                    {
                        key: 'delay',
                        label: 'Délai'
                    },
                    {
                        key: 'contact',
                        label: 'Contact'
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
