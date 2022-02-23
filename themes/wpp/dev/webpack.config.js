const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const CssMinimizerPlugin = require("css-minimizer-webpack-plugin");
//const HtmlCriticalWebpackPlugin = require("html-critical-webpack-plugin");
//const OptimizeCssAssetsPlugin = require('optimize-css-assets-webpack-plugin');
//const TerserPlugin = require("terser-webpack-plugin");


var path = require('path');


const jsPath = './dist/',
    outputPath = '../assets',
    entryPoints = {
        'wpp-header': jsPath + '/index.js',
        'wpp-footer':  jsPath + '/index-footer.js'
    };

module.exports = {
    mode: 'production',
    entry: entryPoints,
    output: {
        path: path.resolve(__dirname, outputPath),
        filename: '[name].js',
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: '[name].css',
            chunkFilename: "[id].css",
        })
    ],
    module: {
        rules: [
            {
                test: /\.s?[c]ss$/i,
                use: [
                    MiniCssExtractPlugin.loader,
                    'css-loader',
                    'sass-loader'
                ]
            },
            {
                test: /\.sass$/i,
                use: [
                    MiniCssExtractPlugin.loader,
                    'css-loader',
                    {
                        loader: 'sass-loader',
                        options: {
                            sassOptions: {indentedSyntax: true}
                        }
                    }
                ]
            },
            {
                test: /\.woff(2)?(\?v=[0-9]\.[0-9]\.[0-9])?$/,
                loader: 'url-loader',
                options: {
                    name: '[name].[ext]',
                    limit: 1032000,
                    mimetype: 'application/font-woff',
                    outputPath: 'fonts/'
                },
            },
            {
                test: /\.(ttf|eot|svg)(\?[\s\S]+)?$/,
                loader: 'file-loader',
                options: {
                    name: '[name].[ext]',
                    esModule: false,
                    outputPath: 'fonts/'
                },
            },
            /*{
                test: /\.(woff(2)?|ttf|eot|svg)(\?v=\d+\.\d+\.\d+)?$/,
                use: [
                    {
                        loader: 'file-loader',
                        options: {
                            name: '[name].[ext]',
                            outputPath: 'fonts/'
                        }
                    }
                ]
            },*/
        ]
    },
    optimization: {
        minimize: true,
        minimizer: [
            // Для webpack @ 5 вы можете использовать синтаксис `...` для расширения существующих минимизаторов (например, `terser-webpack-plugin`), раскомментируйте следующую строку
             `...`,
            new CssMinimizerPlugin(),
        ],
    }
};