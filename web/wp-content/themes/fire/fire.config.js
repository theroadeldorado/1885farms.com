const path = require('path');

module.exports = {
  PROXY_URL: 'http://1885farms.fire/',
  DEFAULT_PORT: 3000,

  ASSET_PATH: path.resolve(__dirname, './assets'),
  DESTINATION_PATH: path.resolve(__dirname, './dist'),

  PURGE_CSS_WHITELIST: [],
  PURGE_CSS_WHITELIST_PATTERNS: [/slick/, /gap/],
  PURGE_CSS_WHITELIST_PATTERNS_CHILDREN: [/slick/, /is-ie11/],
};
