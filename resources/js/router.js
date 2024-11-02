import { createRouter, createWebHistory } from 'vue-router';
import Index from './components/Index.vue';
import Get from './components/Get.vue';

const routes = [
    {
        path: '/',
        component: Index // Главная страница будет отображать Index.vue
    },
    {
        path: '/get',
        component: Get,
        name: 'get.index'
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;
