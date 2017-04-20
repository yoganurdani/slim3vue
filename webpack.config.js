module.exports = {
    babel: {
        presets: ['es2015'],
        plugins: ['transform-runtime', 'transform-vue-jsx']
    },
    module: {
        loaders: [
        {
            test: /\.vue$/,
            loader: 'vue'
        },
        {
            test: /\.css$/,
            loader: "style-loader!css-loader"
        },
        { 
            test: /\.(png|jpg|jpeg|gif|eot|ttf|woff|woff2|svg|svgz)(\?.+)?$/,
            loader: 'url-loader',
        },
        ]
    },
    resolve: {
        alias: {vue: 'vue/dist/vue.js'}
    },
    vue: {
        loaders: {
            scss: 'style!css!sass'
        }
    }
};
