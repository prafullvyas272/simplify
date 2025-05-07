<script setup>
import { onMounted, ref } from 'vue';

const model = defineModel({
    type: String,
    required: true,
});

const input = ref(null);

onMounted(() => {
    if (input.value.hasAttribute('autofocus')) {
        input.value.focus();
    }
});

defineProps({
    placeholder: {
        type: String,
        default: "",
    },
    inputmode: {
        type: String,
        default: "text",
    },
    name: {
        type: String,
        default: "",
    },
});

defineExpose({ focus: () => input.value.focus() });
</script>

<template>
    <input
        type="text"
        class="border border-input px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 flex w-full items-center justify-center rounded-md outline-none text-sm focus:!ring-white !p-6 bg-slate-200"
        :placeholder="placeholder"
        :inputmode="inputmode"
        :name="name"
        v-model="model"
        ref="input"
    />
</template>

<style scoped>
input {
    padding: 1.5rem !important;
}
</style>