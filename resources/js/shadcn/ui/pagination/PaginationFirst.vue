<script setup>
import { computed } from "vue";
import { PaginationFirst } from "radix-vue";
import { DoubleArrowLeftIcon } from "@radix-icons/vue";
import { Button } from "@/shadcn/ui/button";
import { cn } from "@/lib/utils";

const props = defineProps({
  asChild: { type: Boolean, required: false, default: true },
  as: { type: null, required: false },
  class: { type: null, required: false },
});

const delegatedProps = computed(() => {
  const { class: _, ...delegated } = props;

  return delegated;
});
</script>

<template>
  <PaginationFirst v-bind="delegatedProps">
    <Button :class="cn('w-9 h-9 p-0', props.class)" variant="outline">
      <slot>
        <DoubleArrowLeftIcon />
      </slot>
    </Button>
  </PaginationFirst>
</template>
