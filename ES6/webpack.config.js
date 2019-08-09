module.exports = {
    entry: './main.js',
    output: {
        path: __dirname,
        filename: 'bundle.js',
    },
    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_module/, 
                use: {
                    loader: 'babel-loader'
                }
            }
        ],
    }
}