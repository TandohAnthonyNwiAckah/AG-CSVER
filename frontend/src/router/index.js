
import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter)
let routes = [
	{
		name: 'main',
		path: '/',
		component: () => import('layouts/MainLayout.vue'),
		children: [
			
			{ 
				path: '/(home)?', 
				name: 'home' , 
				component: () => import('pages/home/home.vue'),
				props: true
			},
			//Dashboard routes


//countries routes
			{ 
				path: '/countries/', 
				name: 'countrieslist', 
				component: () => import('pages/countries/list.vue'), 
				props: true
			},
			{ 
				path: '/countries/(list|index)/:fieldName?/:fieldValue?', 
				name: 'countrieslistfilter', 
				component: () => import('pages/countries/list.vue'), 
				props: true
			},
	
			{ 
				path: '/countries/view/:id', 
				name: 'countriesview', 
				component: () => import('pages/countries/view.vue'), 
				props: true
			},
	
			{ 
				path: '/countries/add', 
				name: 'countriesadd', 
				component: () => import('pages/countries/add.vue'), 
				props: true
			},
	
			{ 
				path: '/countries/edit/:id', 
				name: 'countriesedit', 
				component: () => import('pages/countries/edit.vue'), 
				props: true
			},
		

//currencies routes
			{ 
				path: '/currencies/', 
				name: 'currencieslist', 
				component: () => import('pages/currencies/list.vue'), 
				props: true
			},
			{ 
				path: '/currencies/(list|index)/:fieldName?/:fieldValue?', 
				name: 'currencieslistfilter', 
				component: () => import('pages/currencies/list.vue'), 
				props: true
			},
	
			{ 
				path: '/currencies/view/:id', 
				name: 'currenciesview', 
				component: () => import('pages/currencies/view.vue'), 
				props: true
			},
	
			{ 
				path: '/currencies/add', 
				name: 'currenciesadd', 
				component: () => import('pages/currencies/add.vue'), 
				props: true
			},
	
			{ 
				path: '/currencies/edit/:id', 
				name: 'currenciesedit', 
				component: () => import('pages/currencies/edit.vue'), 
				props: true
			},
		

			
			
			
			
			{ 
				path:  '/error/forbidden', 
				name: 'forbidden', 
				component: () => import('pages/errors/forbidden.vue'),
				props: true
			},
			{ 
				path: '/error/notfound', 
				name: 'notfound',
				component: () => import('pages/errors/pagenotfound.vue'),
				props: true
			}
		]
	},
];


/*
 * If not building with SSR mode, you can
 * directly export the Router instantiation;
 *
 * The function below can be async too; either use
 * async/await or return a Promise which resolves
 * with the Router instance.
 */

export default async function ({ store, ssrContext }) {
	let mainRoute = routes.find(x => x.name = "main");

	

	// Always leave this as last one
	if (process.env.MODE !== 'ssr') {
		mainRoute.children.push({path: '*', component: () => import('pages/errors/pagenotfound.vue')});
	}

	const Router = new VueRouter({
		scrollBehavior: () => ({ x: 0, y: 0 }),
		routes,
		// Leave these as they are and change in quasar.conf.js instead!
		// quasar.conf.js -> build -> vueRouterMode
		// quasar.conf.js -> build -> publicPath
		mode: process.env.VUE_ROUTER_MODE,
		base: process.env.VUE_ROUTER_BASE
	});
	return Router
}
