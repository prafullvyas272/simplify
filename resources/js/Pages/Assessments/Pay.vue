<template>

    <input id="card-holder-name" type="text">

    <!-- Stripe Elements Placeholder -->
    <div id="card-element"></div>


    <button id="card-button">
        Process Payment
    </button>

</template>
<script>
import "https://js.stripe.com/v3/"
export default {
    name: "Pay",
    data (){
        return {
            stripe : Stripe('stripe-public-key'),
            elements : stripe.elements(),
            cardElement : elements.create('card'),

        }
    },

    mounted() {
        this.cardElement.mount('#card-element');
    }
}
</script>

<style scoped>

</style>
