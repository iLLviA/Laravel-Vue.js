<template>
   <div>
       <div>
           <h4>記事投稿</h4>
           <div>
               <input type="text" v-model="title" name="title" placeholder="タイトル">
               <textarea v-model="content" class="form-control" placeholder="コンテンツ" rows="4"></textarea>
               <p>{{title}}</p>
               <p>{{content}}</p>
               <button v-on:click="postArticle">投稿</button>
               <router-link :to="{name:'index'}">記事一覧へ</router-link>
           </div>
       </div>
   </div>
</template>
<script>
    export default {
       data() {
           return {
               title:'',
               content:''
           }
       },
        mounted() {
            console.log('Component mounteddwadadwad.')
        },
        methods: {
           postArticle(){
               let article = {
                   'title':this.title,
                   'content' : this.content
               }

               const id =1

               axios.post('/api/article/' + id,article).then(res => {
                   console.log(res.data.title)
                   console.log(res.data.content)
               })
           }
        }
    }
</script>
