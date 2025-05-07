
<template>
    <div class="w-full flex flex-row border-2 border-gray-300 rounded flex-wrap pb-10">
        <div class="w-full flex flex-row justify-between p-5">
            <h1 class="font-semibold text-xl my-5">
                Proposals
            </h1>
        </div>
        <div class="w-full px-20 flex flex-row flex-wrap gap-10 justify-center">
            <div class="w-[20%]" v-for="proposal in this.proposals">
                <Link :href="route('proposals.show', proposal.id)">
                    <ProposalsCards
                        :student="proposal.student"
                    />
                </Link>
            </div>
        </div>
        <div  class="w-full my-5 flex justify-center items-center">
            <Button
                @click="router().visit(route('proposals.index' , {
                    page: current_page -1
                }),{
                    preserveScroll: true
                })"
                :disabled="current_page <=1"
                class="hover:bg-gray-400/10 bg-white text-gray-500 mx-3 text-center rounded-l-lg border-[1px] border-gray-300 px-6 py-2 w-[100px]"
            > Previous </Button>
            <Button
                @click="router().visit(route('proposals.index' , {
                    page: current_page +1
                }),{
                    preserveScroll: true
                })"
                :disabled="current_page >= last_page "
                class="hover:bg-gray-400/10 bg-white text-gray-500 mx-3 text-center rounded-r-lg border-[1px] border-gray-300 px-6 py-2 w-[100px]"
            > Next </Button>
        </div>
    </div>
</template>

<script>
import CoachesCards from "@/Components/CoachesCards.vue";
import CoachLayout from "@/Layouts/SimplifyLayout.vue";
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
import ProposalsCards from "@/Components/Proposals/ProposalsCards.vue";

export default {
    name: "ProposalsIndex",
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
    layout:CoachLayout,
    components: {
        ProposalsCards,
        Button,Link,CoachesCards , Pagination, PaginationEllipsis , PaginationFirst, PaginationLast, PaginationList, PaginationListItem , PaginationNext, PaginationPrev},
    props:{
        proposals: Array,
        current_page: Number,
        last_page: Number,
    },
}
</script>

<style scoped>

</style>
