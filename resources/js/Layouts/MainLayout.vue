<template>
    <div class="nav-bar-mainlayout">
        <NavBar />
    </div>
    <div class="w-full">
        <slot/>
    </div>
</template>


<script>
import NavBar from "@/Components/Navigation/NavBar.vue";


export default {
    name: "MainLayout",
    components: {NavBar},
}
</script>

<style scoped>
    .nav-bar-mainlayout{
        padding-bottom: 50px;
    }
    .w-full{
        /* padding-top: 50px; */
        position: relative;
    }
</style>
