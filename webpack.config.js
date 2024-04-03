const path = require('path');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const MODE = "development";
const enabledSourceMap = MODE === "development";

module.exports = {
  mode: MODE,
  entry: './src/index.js',
  output: {
    path: `${__dirname}`,
    filename: 'bundle.js',
  },
  devServer: {
    static: {
      directory: path.resolve(__dirname, 'dist'),
    },
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        use: [
          {
            loader: "babel-loader",
            options: {
              presets: [
                "@babel/preset-env",
              ],
            },
          },
        ],
      },

      {
        test: /\.(scss|css)$/,
        use: [
          "style-loader",

          {
            loader: MiniCssExtractPlugin.loader,
            options: {
              esModule: false,
            },
          },
  
          {
            loader: "css-loader",
            options: {
              url: false,
              sourceMap: enabledSourceMap,

              // 0 => no loaders (default);
              // 1 => postcss-loader;
              // 2 => postcss-loader, sass-loader
              importLoaders: 2,
            },
          },
          
          {
            loader: "sass-loader",
            options: {
              sourceMap: enabledSourceMap,
            },
          },
        ],
      },
    ],
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: "style.css",
    }),
  ],
  target: ["web", "es5"],
};
