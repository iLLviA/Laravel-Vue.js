<template>
    <nav class="nav-link">
        <router-link :to="{name:'index'}">Top</router-link>
        <router-link :to="{name:'index'}">記事一覧</router-link>
        <router-link :to="{name:'create'}">記事作成</router-link>
    </nav>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },

    }
</script>
<style lang="scss" scoped>
    .nav-link{
        list-style: none;
        display: inline-flex;
        justify-content:flex-end;
        background-color: rgba(0,0,0,0.8);
        position: fixed;
        width: 1110px;
        z-index: 999;
            a{
                text-decoration: none;
                color: white;
                padding: 10px;
                display: inline-block;
                position: relative;
                &::after {
                    background-color: tomato;
                    bottom: 0;
                    content: '';
                    display: block;
                    height: 1px;
                    // left: 0;
                    position: absolute;
                    transition: .5s all;
                    width: 0;
                    left: 50%;
                    transform: translateX(-50%);
                }
                &:hover {
                    color: red;
                    &::after{
                        width: 100%;
                    }
                }
            }


        }



</style>
