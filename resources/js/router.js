import {createRouter, createWebHistory} from 'vue-router';

const routes = [
	{
		path:'/dashboard',
		component:()=>import('./pages/Dashboard.vue')
	}
];

export default createRouter({
	history:createWebHistory(),
	routes
});