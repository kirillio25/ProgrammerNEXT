<template>
    <div>
        1
        <router-link :to="{ name: 'get.index' }">GET</router-link>
        <router-view></router-view>
    </div>
</template>

<script>
export default {
    name: "Index"
}
</script>

<style scoped>

</style>
