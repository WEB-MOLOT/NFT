<template>

</template>


<script>
export default {
    data() {
        return {
            email: '0'
        }
    },

    mounted() {

    },

    methods: {
        sendLink() {
            axios.post('password/reset', { email: this.email })
                .then(response => {
                    console.log(response)
                })
        }
    }
}
</script>
