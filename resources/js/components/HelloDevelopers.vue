<template>
    <div>
        <h1>{{name}}</h1>
        <welcome></welcome>
    </div>
</template>

<script>
    import Welcome from './Welcome.vue'
    export default {
        data: () => ({
            name: 'muhit'
        }),
        components:{
            Welcome
        }

    }
</script>
