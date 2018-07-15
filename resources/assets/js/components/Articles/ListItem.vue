<template>
   <div class="list-item">
       <div class = "item" >
           <h3>タイトル:{{item.title}}</h3>
           <p>内容:{{item.content}}</p>
       </div>
   </div>
</template>
<script>
    export default {
        data() {
            return {}
        },
        props:{
            item: Object
        }
    }
</script>
<style lang="scss" scoped>
    .item {
        width: 250px;
        height: 150px;
        border-radius: 16px;
        background-color: white;
        margin-bottom: 10px;




    }
</style>
