window._ = require('lodash');

try {
    require('bootstrap');
} catch (e) {
    console.error("Error: " + e)
}

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
