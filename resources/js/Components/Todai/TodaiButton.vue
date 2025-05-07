<template>
    <button
        type="submit"
        class="px-[35px] py-[8px] text-brand-secondary bg-brand-primary font-semibold rounded-full hover:bg-brand-primary-hover relative w-full !py-5 text-center flex justify-center text-white false"
    >
        {{ text }}
    </button>
</template>

<style scoped>
button{
    background-color: rgb(58 130 246);
}

</style>

<script setup>
defineProps({
    text: {
        type: String,
        default: "",
    },
});
</script>
