<template>
    <div class="container container-post p-15">
        <div class="columns is-multiline is-tablet">
            <a class="button is-loading btn-loading" v-if="loading">Button</a>
            <div class="column is-half-tablet is-one-third-desktop p-1-rem"  v-for="post in posts">
                <div class="card card-borderless">
                    <div class="card-image">
                        <figure class="image is-16by9">
                            <img src="http://bulma.io/images/placeholders/640x360.png" alt="Image">
                        </figure>
                    </div>
                    <router-link to="/post" tag="a">
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <h2 class="title is-4 font-medium">{{ post.title.rendered }}</h2>
                                </div>
                            </div>

                            <div class="content">
                                <p v-html="post.excerpt.rendered"></p>
                                <small>{{ post.modified_gmt }}</small>
                            </div>
                        </div>
                    </router-link>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';

    export default{
        data(){
            return{
                posts:[],
                loading: false
            }
        },
        mounted() {
            this.loading=true;
            axios.get('http://www.gengs.info/id/wp-json/wp/v2/posts?per_page=15').then((response)=>{this.posts=response.data;this.loading=false});
        }

    }
</script>

<style lang="scss" scoped>
    .card.card-borderless{
        background-color: #fcfdfe;
        box-shadow: 0 0px 0px rgba(10, 10, 10, 0), 0 0 0 0px rgba(10, 10, 10, 0);
    }
    
    .card-borderless .card-content{
        padding: 1rem 0rem 1.5rem 0rem;
    }

    
    a.btn-loading{
        background-color: #fcfdfe;
        color: #fcfdfe !important;
        border-color: #fcfdfe;
        width: 100%;
        height: 200px;
    }

    .button.is-loading.btn-loading:after{
        animation: spinAround 500ms infinite linear;
        border: 4px solid #dbdbdb;
        border-radius: 290486px;
        border-right-color: transparent;
        border-top-color: transparent;
        content: "";
        display: block;
        height: 3em;
        position: relative;
        width: 3em;
        left: 50%;
        margin-left: -0.5em;
        margin-top: -0.5em;
        position: absolute;
        top: 50%;
        position: absolute !important;
    }
    
    .content p{
        display: block;
        display: -webkit-box;
        max-width: 400px;
        height: 6.3rem;
        -webkit-line-clamp: 4;
        -webkit-box-orient: vertical;
        overflow: hidden;
        line-height: 1.625;
        text-overflow: ellipsis;
    }
</style>