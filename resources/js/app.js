import './bootstrap'
import { createApp } from 'vue';
import PostComponent from "./components/PostComponent.vue";
// import '../sass/app.scss';
// 

const app = createApp({
    el: '#app',

    components: {
        'post-component': PostComponent,
    }
});

// const app = createApp({});

// import ExampleComponent from './components/ExampleComponent.vue';
// app.component('example-component', ExampleComponent);

app.mount('#app');
