<template>
    <div class="card-panel red lighten-2 center-align white-text">        
        <i class="material-icons left">sentiment_very_dissatisfied</i> <span v-if="!message"> No results found!</span>
    </div>           
</template>
<script>
export default {
    props:{
        message: String
    }
}
</script>