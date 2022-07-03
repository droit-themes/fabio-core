const path = require('path');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const PurgecssPlugin = require('purgecss-webpack-plugin');
const glob = require('glob');
const PATHS = {
    src: path.join(__dirname, 'theme-builder')
  }
  
module.exports = {
plugins: [
    new MiniCssExtractPlugin({
        // Options similar to the same options in webpackOptions.output
        // both options are optional
        filename: "../css/[name].css",
        chunkFilename: "[id].css",
    }),
    new PurgecssPlugin({
        paths: glob.sync(`${PATHS.src}/**/*`,  { nodir: true }),
      }),
  
],

 entry: {
     admin: './assets/src/admin.js'
 },
 output: {
    path: path.resolve(__dirname, 'assets/js'),
    filename: "[name].js",
  },
  module: {
    rules: [
       
          {
            test: /\.scss$/,
            use: [
                {
                    loader: MiniCssExtractPlugin.loader
                },
                {
                    loader: 'css-loader',

                },
                {
                    loader: 'sass-loader',
                    options: {
                        sourceMap: true,
                    },

                },
                {
                    // Run postcss actions
                    loader: 'postcss-loader',
                    options: {
                      // `postcssOptions` is needed for postcss 8.x;
                      // if you use postcss 7.x skip the key
                      postcssOptions: {
                        // postcss plugins, can be exported to postcss.config.js
                        plugins: function () {
                          return [
                            require('autoprefixer')
                          ];
                        }
                      }
                    }
                  }
            ],
        }
    ]
 },
 externals: {
  jquery: 'jQuery',
},

};
