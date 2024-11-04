<template>
    <div>
        <input v-model="email" type="email" placeholder="email" class="form-contr">
        <input v-model="password" type="password" placeholder="password" class="form-contr">
        <input @click.prevent="login" type="button" value="login" class="btn btn-primary">
    </div>
</template>

<script>
import axios from 'axios';
export default {

    name: "Login",

    data(){
        return {
            email: null,
            password: null,
        }
    },

    methods: {
    login() {
        axios.get('/sanctum/csrf-cookie')
            .then(response => {
                return axios.post('/login', { email: this.email, password: this.password });
            })
            .then(response => {
                localStorage.setItem('x_xsrf_token', response.config.headers['X-XSRF-TOKEN']);
                this.$router.push({name: 'user.personal'});
            })
            .catch(error => {
                console.error("Ошибка при выполнении запроса:", error);
                alert("Ошибка при входе: " + (error.response?.data?.message || "Неизвестная ошибка"));
            });
    }
}

}
</script>

<style scoped>

</style>
