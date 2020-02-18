const autoprefixer = require('autoprefixer');

module.exports = {
 
  entry: ['./app.css','./app.js'],
  mode: 'development',

  output: {
    filename: 'bundle.js',
  },
  module: {
    rules: [
      {
        test: /\.css$/,
        use: ['style-loader', 'css-loader'],
      }
    ]
  },
};