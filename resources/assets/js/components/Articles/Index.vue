<template>
    <div>
        <nav-link></nav-link>
        <list-view :items="items"></list-view>
    </div>
</template>

<script>
    import NavLink from './Nav'
    import ListView from './ListView'
    import axios from 'axios'
    export default {
        data() {
            return {
                items:[]
            }
        },
        mounted() {
            axios.get('/api/article/list_item').then(response => {(
                this.items = response.data.data
            )
            })
            console.log(this.items)
        },
        components :{
            NavLink,
            ListView
        }

    }
</script>
<style lang="scss" scoped>

</style>
