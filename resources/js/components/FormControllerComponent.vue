<template>
    <div>
        <b-row>
            <b-col>
                <div class="last-step" @click="back()">
                    <img src="/images/Flèche rouge.jpg">
                </div>
            </b-col>
            <b-col cols="8">
                <div class="warning-message">
                    <span class="warning">Attention!</span> Vous ne pourrez pas ensuite modifier l'annonce...
                </div>
            </b-col>
            <b-col>
                <div class="next-step" v-if="validate()" @click="next()">
                    <img src="/images/Flèche verte.jpg">
                </div>
            </b-col>
        </b-row>
    </div>
</template>

<script>
export default{
    props: {
        back: function,
        validate: function,
        next: function
    }
}

</script
