<template>
    <span class="">
        <button v-if="!tipo || (tipo != 'button' && tipo != 'link')" type="button" v-bind:class="css || 'btn btn-primary'" data-toggle="modal" v-bind:data-target="'#'+nomemodal">{{titulomodal}}</button>
        <button v-if="tipo == 'button'" type="button" v-bind:class="css || 'btn btn-primary'" data-toggle="modal" v-bind:data-target="'#'+nomemodal">{{titulomodal}}</button>
        <a v-if="tipo == 'link'" href="#" v-bind:class="css || ''" data-toggle="modal" v-bind:data-target="'#'+nomemodal">{{titulomodal}}</a>
    </span>
</template>

<script>
    export default {
        props: ['tipo','nomemodal', 'titulomodal','css']
    }
</script>
