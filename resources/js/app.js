import './bootstrap';
import { createApp } from 'vue'
import App from '../src/App.vue'
import { createRouter, createWebHashHistory } from 'vue-router';

import routes from './routes.js';

const router = createRouter({
  history: createWebHashHistory(import.meta.env.BASE_URL),
  routes, 
});

const app = createApp(App)
app.use(router)
app.mount('#app');