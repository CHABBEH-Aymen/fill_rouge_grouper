import './bootstrap';

import Alpine from 'alpinejs';
import PrimeVue from 'primevue/config';
import {createApp} from 'vue';
import App from './App.vue';
import router from './router.js';


createApp(App)
	.use(router)
	.use(PrimeVue, {
		theme: {
	        preset: Aura
	    }
	})
	.mount('#app');
window.Alpine = Alpine;
Alpine.start();
