require('./bootstrap');

require('alpinejs');

window.Vue = require('vue');

Vue.component('quill-component', require('./components/QuillComponent.vue').default);

const app = new Vue({
    el: '#app',
});
