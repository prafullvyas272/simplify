<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    href: {
        type: String,
        required: true,
    },
    text: {
        type: String,
        required: true,
    },
});


</script>

<style scoped>
a{
    background-color: rgb(58 130 246);
}

</style>

<template>

    <Link :href="href"
        class="px-[35px] py-[8px] text-brand-secondary bg-brand-primary font-semibold rounded-full hover:bg-brand-primary-hover relative w-full !py-5 text-center flex justify-center text-white false">
        {{ text }}
    </Link>
</template>
