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
        // 拡張子が.jsの場合
        test: /\.js$/,
        use: [
          {
            // BabelによるJsのトランスパイル機能を利用
            loader: "babel-loader",
            // オプションの設定
            options: {
              presets: [
                // プリセットを指定することで、ECMAScript5に変換
                "@babel/preset-env",
              ],
            },
          },
        ],
      },

      {
        // 拡張子がscssまたはcssの場合の処理
        test: /\.(scss|css)$/,
        use: [
          // Jsファイルに取り込まれたCSSをDOM要素へ注入するローダー
          "style-loader",

          // mini-css-extract-pluginプラグインを使用してCSSを別ファイルに書き出します。
          {
            loader: MiniCssExtractPlugin.loader,
            options: {
              esModule: false,
            },
          },
  
          {
            // Jsファイル内に書かれたCSSを取り込む機能
            loader: "css-loader",
            // オプションの指定
            options: {
              // CSSのurl()値のメディアを取り込むのを禁止
              url: false,
              // ソースマップの利用有無
              sourceMap: enabledSourceMap,

              // 0 => no loaders (default);
              // 1 => postcss-loader;
              // 2 => postcss-loader, sass-loader
              importLoaders: 2,
            },
          },
          
          {
            // SassをCSSへトランスパイルする機能
            loader: "sass-loader",
            // オプションの指定
            options: {
              // ソースマップの利用有無
              sourceMap: enabledSourceMap,
            },
          },
        ],
      },
    ],
  },
  plugins: [
    // CSSファイルを外出しにするプラグイン
    new MiniCssExtractPlugin({
      // 出力するファイル名の指定
      filename: "style.css",
    }),
  ],
  target: ["web", "es5"],
};
