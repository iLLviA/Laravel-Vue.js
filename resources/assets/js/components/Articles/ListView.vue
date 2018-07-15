<template>
   <div class="list-view">
       <list-item v-for="item in items" :item="item"></list-item>
   </div>
</template>
<script>
    import ListItem from './ListItem'
    export default {
        data() {
            return {

            }
        },
        props:{
            items: Array
        },
        components : {
            ListItem
        }
    }

</script>
<style lang="scss" scoped>
    .list-view {
        padding-top:100px;
        display:flex;
        flex-wrap: wrap;
        justify-content:space-between;
    }
</style>
