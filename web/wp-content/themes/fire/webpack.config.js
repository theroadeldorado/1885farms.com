const path = require('path');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');
const FireConfig = require('./fire.config');

const isProduction = process.env.NODE_ENV === 'production';

const aliases = {
  '@': path.resolve(__dirname, '.'),
  '@base': path.resolve(__dirname, 'assets/scripts/base'),
  '@component': path.resolve(__dirname, 'assets/scripts/components'),
  '@template': path.resolve(__dirname, 'templates'),
};

// prettier-ignore
const styleLoaders = [
  {
    test: /\.css$/,
    use: [
      MiniCssExtractPlugin.loader,
      { loader: 'css-loader', options: { importLoaders: 1 } },
      'postcss-loader'
    ]
  },
];

const scriptLoaders = [
  {
    test: /\.m?js$/,
    use: {
      loader: 'babel-loader',
      options: {
        presets: [['@babel/preset-env', { shippedProposals: true }]],
        plugins: [['@babel/plugin-proposal-object-rest-spread', { loose: true, useBuiltIns: true }]],
      },
    },
  },
];

const fontLoaders = [
  {
    test: /\.(ttf|eot|woff|woff2)$/,
    loader: 'url-loader',
    options: { limit: 10000, name: 'fonts/[name].[ext]' },
  },
];

module.exports = {
  mode: isProduction === true ? 'production' : 'development',
  entry: {
    styles: path.resolve(__dirname, `./main.css`),
    scripts: path.resolve(__dirname, `./main.js`),
  },
  output: { path: FireConfig.DESTINATION_PATH, filename: '[name].js' },
  module: { rules: [...scriptLoaders, ...styleLoaders, ...fontLoaders] },
  resolve: { alias: aliases },
  devtool: 'source-map',
  externals: {},
  plugins: [
    new MiniCssExtractPlugin({
      filename: '[name].css',
    }),
    new CleanWebpackPlugin({
      verbose: true,
      cleanAfterEveryBuildPatterns: ['!fonts/*'],
    }),
    new BrowserSyncPlugin(
      {
        proxy: FireConfig.PROXY_URL,
        port: process.env.PORT || FireConfig.DEFAULT_PORT,
        files: [path.resolve(__dirname, '**/*.php'), path.resolve(__dirname, '**/*.js'), path.resolve(__dirname, '**/*.css')],
        ghostMode: false,
      },
      { injectCss: true }
    ),
  ],
};
