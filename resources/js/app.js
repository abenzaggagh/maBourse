require('./bootstrap');

import $ from 'jquery';

import 'jquery-ui/ui/widgets/datepicker.js';

window.$ = window.jQuery = $;

window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);



