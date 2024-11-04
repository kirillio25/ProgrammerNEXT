import { createRouter, createWebHistory } from "vue-router";
import Login from "./components/Login.vue";
import Registration from "./components/Registration.vue";
import Get from "./components/Get.vue";
import Personal from "./components/Personal.vue";

const routes = [
    {
        path: "/get",
        component: Get,
        name: "get.index",
    },
    {
        path: "/user/login",
        component: Login,
        name: "user.login",
    },
    {
        path: "/user/register",
        component: Registration,
        name: "user.registration",
    },
    {
        path: "/user/personal",
        component: Personal,
        name: "user.personal",
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

router.beforeEach((to, from, next) => {
    const token = localStorage.getItem("x_xsrf_token");

    if (!token) {
        if (to.name === "user.login" || to.name === "user.registration") {
            return next();
        } else {
            return next({
                name: "user.login",
            });
        }
    }

    if (
        to.name === "user.login" ||
        (to.name === "user.registration" && token)
    ) {
        return next({
            name: "user.personal",
        });
    }

    next();
});

export default router;
