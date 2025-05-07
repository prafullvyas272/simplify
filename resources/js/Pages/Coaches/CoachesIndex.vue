
<template>

    <h1 class="text-4xl font-bold mb-10 mt-10 ml-[10%]">  Coaches </h1>
    <!-- <div class="w-full px-20 flex flex-row flex-wrap gap-10 justify-center">
        <div class="w-[20%]" v-for="coach in this.coaches">
            <Link :href="route('users.show_coach', {
                user: coach.id
            })">
                <CoachesCards
                    :coach="coach"
                />
            </Link>
        </div>
    </div> -->
    <div  class="w-full my-5 flex justify-center items-center">
        <!-- <Button
            @click="router().visit(route('users.all_coaches' , {
                page: current_page -1
            }),{
                preserveScroll: true
            })"
            :disabled="current_page <=1"
            class="hover:bg-gray-400/10 bg-white text-gray-500 mx-3 text-center rounded-l-lg border-[1px] border-gray-300 px-6 py-2 w-[100px]"
        > Previous </Button> -->
        <!-- <Button
            @click="router().visit(route('users.all_coaches' , {
                page: current_page +1
            }),{
                preserveScroll: true
            })"
            :disabled="current_page >= last_page "
            class="hover:bg-gray-400/10 bg-white text-gray-500 mx-3 text-center rounded-r-lg border-[1px] border-gray-300 px-6 py-2 w-[100px]"
        > Next </Button> -->
    </div>
</template>

<script>
import CoachesCards from "@/Components/CoachesCards.vue";
import MainLayout from "@/Layouts/MainLayout.vue";
import Button from "@/shadcn/ui/button/Button.vue";
import random_backgrounds from "@/Helpers/RandomBackgrounds.js";
import {
    Pagination,
    PaginationEllipsis,
    PaginationFirst,
    PaginationLast,
    PaginationList,
    PaginationListItem,
    PaginationNext,
    PaginationPrev,
} from '@/shadcn/ui/pagination'
import {Link , router} from "@inertiajs/vue3";
import CoachLayout from "@/Layouts/SimplifyLayout.vue";

export default {
    name: "CoachesIndex",
    layout: CoachLayout,
    methods: {
        router() {
            return router
        }
    },
    data(){
        return {
            random_backgrounds:random_backgrounds,
        }
    },

    // layout:MainLayout,
    components: {Button,Link,CoachesCards , Pagination, PaginationEllipsis , PaginationFirst, PaginationLast, PaginationList, PaginationListItem , PaginationNext, PaginationPrev},
    props:{
        coaches: Array,
        current_page: Number,
        last_page: Number,
    },
}
</script>

<style scoped>

</style>
