<template>
    <div>
        <router-link :to="{ name: 'get.index' }">GET</router-link>
        <router-link v-if="!token" :to="{ name: 'user.login' }">login</router-link>
        <router-link v-if="token" :to="{ name: 'user.personal' }">Personal</router-link>
        <router-link v-if="!token" :to="{ name: 'user.registration' }">registration</router-link>
        <a v-if="token" @click.prevent="logout" href="#">logout</a>
        <router-view :key="$route.fullPath"></router-view>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    name: "Index",

    data() {
        return {
            token: null
        }
    },

    mounted() {
        this.getToken();
    },

    updated() {
        console.log('updated');
        // Проверка токена при каждом обновлении компонента
        this.getToken();
    },

    methods: {
        getToken() {
            const currentToken = localStorage.getItem("x_xsrf_token");
            if (currentToken !== this.token) {
                this.token = currentToken;
            }
        },

        logout() {
            axios.post('/logout')
                .then(res => {
                    localStorage.removeItem('x_xsrf_token');
                    // this.getToken(); // Обновляем токен после выхода
                    this.$router.push({ name: 'user.login' });
                })
                .catch(error => {
                    console.error("Ошибка при выходе:", error);
                });
        }
    }
}
</script>


<style scoped>

</style>
