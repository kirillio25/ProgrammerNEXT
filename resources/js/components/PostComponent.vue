<template>
    <div>
        <SinglePostComponent></SinglePostComponent>
        <div>{{ age }}</div>
        <!-- <div>{{ vasyJob }}</div> -->
        <button @click="sayHello">Нажми</button>

        <!-- Цикл получаем данные с posts -->
        <div v-for="person in persons">
            <div>{{ person.name }}</div>
            <div>{{ person.age }}</div>
        </div>

                <!-- Цикл c условием
                <div v-for="person in personAgeTwenty">
            <div>{{ person.name }}</div>
            <div>{{ person.age }}</div>
        </div> -->
    </div>
</template>

<script>
import axios from "axios";
import SinglePostComponent from "./SinglePostComponent.vue";

export default {
    name: "PostComponent",

    // data() {
    //     return {
    //         name: "vasya",
    //         age: 20,
    //         persons: [
    //             {
    //                 id: 1,
    //                 name: "Енакентий1",
    //                 age: 23,
    //             },
    //             {
    //                 id: 2,
    //                 name: "Енакентий2",
    //                 age: 25,
    //             },
    //             {
    //                 id: 3,
    //                 name: "Енакентий3",
    //                 age: 4,
    //             },
    //         ]
    //     }
    // },


    data() {
        return {
            name: "vasya",
            age: 20,
            persons: null,
           
        }
    },
    mounted(){
        // this.getPosts();
        this.getPersons();
    },

    methods:{
        sayHello(){
            console.log("hello");
        },
        // // Получаем данные с posts
        // getPosts(){
        //     axios.get('/posts')
        //     .then(function(data){
        //         console.log(data);
        //     })
        // },
        getPersons(){
            axios.get('/posts')
            .then( res => {
                this.persons = res.data
            })
            .catch( error => {
                console.log(error)
            })
        },

    },
    // наше условие если нужно 
    // computed:{
    //     vasyJob(){
    //         return this.name + " Работает"
    //     },
    //     personAgeTwenty(){
    //         return this.persons.filter(function(person){
    //             return person .age > 20;
    //         })
    //     },
    // },

    components: {
        SinglePostComponent,
    }
}
</script>

<style scoped>

</style>