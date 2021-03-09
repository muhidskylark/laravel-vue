<template>
<div>
    <div>
        <p>{{name}}</p>
        <p>{{age}}</p>
    </div>
    <p>{{hell}}</p>
    <button v-on:click="nameChange('hi')">Say Hi</button>
    <button v-on:click="nameChange('what')">Say What</button>
</div>
</template>
<script>
    export default {
        data: ()=>({
            name:"Abdullah Al Muhit",
            age:'14',
            hell:'sfsdf',
        }),
        methods: {
            say: function (mes) {
                alert(this.name)
            },
            nameChange: function(mes){
                if(this.name=='Abdullah Al Muhit'){
                    alert(this.name)
                }
                else {
                    alert(mes)
                }
            }
        }

    }
</script>