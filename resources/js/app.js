

require('./bootstrap');

window.Vue = require('vue').default;



Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('datos', require('./components/Datos.vue').default);


const app = new Vue({
    el: '#app',
});
