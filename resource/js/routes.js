import VueRouter from 'vue-router';

let routes=[
    {
        path: '/',
        component: require('./components/Container-post.vue')
    },
    {
        path: '/post',
        component: require('./components/Single-post.vue')
    },
    
];

export default new VueRouter({
    routes
}); 
