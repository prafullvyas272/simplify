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


const showPassword = ref(false)
const togglePassword = () => {
  showPassword.value = !showPassword.value
}

</script>

<template>
    <div class="relative w-full">
      <!-- Input Field -->
      <input
        :type="showPassword ? 'text' : 'password'"
        class="border border-input px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 flex w-full items-center justify-center rounded-md outline-none text-sm focus:!ring-white !p-6 bg-slate-200 pr-10"
        :placeholder="placeholder"
        :inputmode="inputmode"
        :name="name"
        v-model="model"
        ref="input"
      />

      <!-- Eye Icon Button -->
      <button
        type="button"
        @click="togglePassword"
        class="absolute inset-y-0 right-3 flex items-center text-gray-500"
        tabindex="-1"
      >
        <svg v-if="!showPassword" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7a10.057 10.057 0 013.44-4.421m3.746-1.385A9.97 9.97 0 0112 5c4.478 0 8.268 2.943 9.542 7a9.973 9.973 0 01-1.249 2.527M15 12a3 3 0 01-4.708 2.46M3 3l18 18" />
        </svg>
        <svg v-else xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
        </svg>

      </button>
    </div>
  </template>

<style scoped>
input {
    padding: 1.5rem !important;
}
</style>