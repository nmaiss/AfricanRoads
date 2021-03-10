<template>
    <div>
        <img src="/images/phones.png" height="30px" v-b-popover.hover.right.html='"Entreprise : " + transporter.company + "<br>" + "Nom Prénom : " + transporter.name + " " + transporter.first_name + "<br>" + "Description : " + transporter.description + "<br>" + "Numéro de téléphone : " + transporter.phone_number' title="Contact">
    </div>
</template>

<script>
    export default{
        props: ['transporter'],
        data(){
            return {

            }
        }
    }

</script>
