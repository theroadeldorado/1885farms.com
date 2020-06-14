const purgecss = require("@fullhuman/postcss-purgecss");
const FireConfig = require("./fire.config");

const isProduction = process.env.NODE_ENV === "production";

// prettier-ignore
module.exports = {
  plugins: [
    require('postcss-import'),
    require('postcss-nested'),
    require('tailwindcss'),
    require('postcss-preset-env')({
      stage: 1,
      features: {
        'focus-within-pseudo-class': false
      }
    }),
    isProduction ? require('cssnano')({
      preset: 'default',
    }) : null,
    isProduction ? purgecss({
      content: ['./**/*.php', './**/*.html'],
      whitelist: FireConfig.PURGE_CSS_WHITELIST,
      whitelistPatterns: FireConfig.PURGE_CSS_WHITELIST_PATTERNS,
      whitelistPatternsChildren: FireConfig.PURGE_CSS_WHITELIST_PATTERNS_CHILDREN,
      defaultExtractor: content => content.match(/[A-Za-z0-9-_:/]+/g) || []
    }) : null
  ]
};
