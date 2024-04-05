<!-- MpesaPaymentForm.vue -->
<template>
    <form @submit.prevent="initiatePayment">
        <input type="text" v-model="phoneNumber" placeholder="Enter your phone number">
        <button type="submit">Pay with M-Pesa</button>
    </form>
</template>

<script>
export default {
    data() {
        return {
            phoneNumber: '',
        };
    },
    methods: {
        async initiatePayment() {
            // Make an HTTP request to your server to initiate the M-Pesa payment
            // Use this.phoneNumber to get the phone number entered by the user
            // Handle the response from the server accordingly
        },
    },
};
</script>
