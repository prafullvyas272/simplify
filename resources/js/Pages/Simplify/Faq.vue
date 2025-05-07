<template>
    <!-- FAQ Section -->
      <div class="py-8">
        <h2 class="text-2xl font-bold mb-6 text-center">Frequently Asked Questions (FAQ)</h2>
        <div class="bg-white p-6 shadow rounded-lg border gradient-border min-height-0">
          <!-- FAQ Item -->
          <div class="pb-4">
            <h3 class="font-semibold text-lg">
              1. How do I send tasks to Simplify?
            </h3>
            <p class="">
              Just forward your school emails, event schedules, or reminders to
              <span class="font-bold">simplify@useunify.com</span>. We’ll organize everything into your calendar with reminders.
            </p>
          </div>

          <!-- Repeat similar structure for other FAQs -->
          <div class="pb-4">
            <h3 class="font-semibold text-lg">
              2. Can I include my partner in events or reminders?
            </h3>
            <p class="">
              Yes! To include your partner, make sure their details are added in the Profile section under "My Account." To ensure your partner receives calendar invites from Simplify, make sure to CC them in the emails you send and we’ll include them in the event or reminder.
            </p>
          </div>

          <div class="pb-4">
            <h3 class="font-semibold text-lg">
              3. How does Simplify handle long emails or newsletters?
            </h3>
            <p class="">
              Simplify extracts the key details from long emails or newsletters and organizes them into calendar events or reminders for you.
            </p>
          </div>

          <div class="pb-4">
            <h3 class="font-semibold text-lg">
              4. What if an event changes or gets canceled?
            </h3>
            <p class="">
              Simply forward the updated details to Simplify, and we’ll adjust your calendar accordingly.
            </p>
          </div>

          <div>
            <h3 class="font-semibold text-lg">
              5. Does Simplify work for non-school-related tasks?
            </h3>
            <p class="">
              Absolutely! Simplify can handle all types of tasks, including extracurricular activities, birthdays, and personal reminders.
            </p>
          </div>
          <div>
            <h3 class="font-semibold text-lg">
              6. Should I double-check tasks processed by Simplify?
            </h3>
            <p class="">
              Simplify uses AI to efficiently understand and organize your tasks. While it strives for accuracy, we recommend reviewing all processed tasks to ensure the details meet your expectations. This ensures nothing is missed and keeps everything running smoothly.
            </p>
          </div>
        </div>
      </div>
</template>

<script>
import SimplifyLayout from "@/Layouts/SimplifyLayout.vue";
import {Link} from "@inertiajs/vue3";
export default {
    name: "FaqPage",
    layout:SimplifyLayout,
    components: {Link}
};
</script>

<style scoped>
.gradient-border {
  position: relative;
  padding: 2px; /* Space for the border */
  background: linear-gradient(to right, #ddb7ff, #ffd7f5, #fff8e3, #ff83df); /* Gradient border */
  border-radius: 1px; /* Rounded corners for the border */
}

.gradient-border > div {
  background: white; /* Inner content background */
  border-radius: 1px; /* Match inner content radius slightly smaller */
  padding: 16px; /* Adjust padding for the inner content */
  margin: 0px 2px;
}

@media screen and (min-width:1920px) {
.gradient-border > div {
    padding: 25px;
    height: 143px;
    margin: 3px;
}
}
</style>
