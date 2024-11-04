<template>
    <div>
        Registration

        <input
            v-model="name"
            type="name"
            placeholder="name"
            class="form-contr"
        />
        <input
            v-model="email"
            type="email"
            placeholder="email"
            class="form-contr"
        />
        <input
            v-model="password"
            type="password"
            placeholder="password"
            class="form-contr"
        />
        <input
            v-model="password_confirmation"
            type="password"
            placeholder="password_confirmation"
            class="form-contr"
        />
        <input
            @click.prevent="register"
            type="button"
            value="register"
            class="btn btn-primary"
        />
    </div>
</template>

<script>
import axios from "axios";

export default {
    name: "Registration",

    data() {
        return {
            name: null,
            email: null,
            password: null,
            password_confirmation: null,
        };
    },

    methods: {
        register() {
            axios.get("/sanctum/csrf-cookie").then((response) => {
                axios.post("/register", {
                    name: this.name,
                    email: this.email,
                    password: this.password,
                    password_confirmation: this.password_confirmation,
                })
                .then( response=> {
                    localStorage.setItem('x_xsrf_token', response.config.headers['X-XSRF-TOKEN']);
                    this.$router.push({name: 'user.personal'});
                })
            });
        },
    },
};
</script>

<style scoped></style>
