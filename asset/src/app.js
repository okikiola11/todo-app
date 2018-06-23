require('../node_modules/jquery/dist/jquery.min.js');
require('../node_modules/popper.js/dist/umd/popper.min.js');
require('../node_modules/bootstrap/dist/js/bootstrap.min.js');

const TestComponent	=	require('./components/TestComponent');

const App			=	require('./components/App');

const Vue 			= 	require('vue');

Vue.prototype.base_url		=	'http://localhost/todo-app/';

import vueResource from 'vue-resource';

Vue.use(vueResource);

new Vue({
	el: '#app',
	data: {
		msg: 'Welcome to Vue.js Codeigniter 3.1.7'
		
	},
	components: { App },
	template: '<App/>',
	methods:{
		
	}
});

// JavaScript Document