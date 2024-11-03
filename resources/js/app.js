import { createApp } from 'vue';
import Index from './components/Index.vue';
import router from './router.js';



const app = createApp({
    el: '#app',

    components:{
        Index
    }
});
app.use(router); // Подключение маршрутизатора к приложению
app.mount('#app');
