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

defineExpose({ focus: () => input.value.focus() });
</script>

<template>
    <input
        class="px-2 py-0.5 border-[1px] border-black  rounded-full focus:border-purple-600 focus:outline-none"
        v-model="model"
        ref="input"
    />
</template>
