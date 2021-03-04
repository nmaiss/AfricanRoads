<style>

.nav-link {
    background-color: #92C47D!important;
    color: white!important;
    font-size: 20px!important;
    font-weight: bold!important;
}

.content-tables{
    margin-right: 500px!important;
}

.mean-image{
    text-align: center;
}

.mean-image img{
    height: 50px;
}

</style>

<template>
    <div>
        <b-container class="content-tables ml-5 mr-5" fluid>
              <b-tabs content-class="mt-3" justified>
                <b-tab title="Transporteur(s)" active >
                    <p>
                        <b-table striped hover :items="transporters" :fields="fields_transporters">
                            <template #cell(mean_image)="data" class="mean-image">
                                <img :src="'/storage/' + data.item.mean_image" height="25px">
                            </template>
                            <template #cell(contact)="data">
                                <contact></contact>
                            </template>
                        </b-table>
                    </p>
                </b-tab>
                <b-tab title="Expéditeur(s) ou voyageur(s)">
                    <p>
                        <b-table striped hover :items="expedients" :fields="fields_expedients"></b-table>
                    </p>
                </b-tab>
              </b-tabs>
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
                        label: 'Contact'
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
