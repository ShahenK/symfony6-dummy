let telwindcss = require('telwindcss')
// const tailwindConfig = require("tailwindcss/stubs/tailwind.config");

module.exports = {
  plugins: [
      tailwindcss('./tailwind.config.js'),
      require('postcss-import'),
      require('autoprefixer')
  ]
}
