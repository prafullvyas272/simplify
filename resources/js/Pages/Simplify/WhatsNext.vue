<template>
    <div class="mt-10 min-h-screen flex flex-col items-center py-10">
    <div class="text-center mb-10">
      <h1 class="text-4xl font-bold text-[#091532]">You’re All Set to Simplify!</h1>
      <p class=" mt-2">Here’s What’s Next:</p>
    </div>

    <div class="flex flex-col md:flex-row gap-6 w-full max-w-4xl">
      <!-- Step 1 -->
      <div class="relative bg-white rounded-lg p-6 border-2 border-pink-500 flex-1 text-center">
        <!-- Step Number -->
        <div
          class="absolute -top-12 -left-4 w-16 h-16 flex items-center justify-center bg-pink-500 text-white font-bold rounded-full"
        >
          1
        </div>
        <div class="flex justify-center mb-4">
            <img src="/images/whats-next-1.png" alt="Step 1 Icon"/>
        </div>
        <h2 class="text-lg font-semibold mb-4">Send Us Your Tasks</h2>
        <p class="">
          Forward school emails, schedules, or to-dos to
          <span class="text-pink-500 font-medium">
            <a class="text-pink-500" href="mailto:simplify@useunify.com">simplify@useunify.com</a>
        </span>,
          and we’ll handle the rest.
        </p>
        <p>You can also Whatsapp us at:
        </p>
        <p><span class="text-pink-500 font-medium">
            <a class="text-pink-500" href="https://wa.me/971585586439">
                +971 58 558 6439
            </a>
        </span></p>
        <p>
            <span>Or scan here, to go straight into the chat:
            </span>
        </p>
        <div class="">
            <div
                class="my-3 w-full h-40 md:h-full   flex justify-center items-center  overflow-hidden">
                <!-- QR Code Content -->
                <img class="w-full max-w-[150px] md:max-w-[200px] h-auto object-contain"
                    :src="'/images/adobe-express-qr.png'" alt="QR Code" />
            </div>
        </div>
        <h3 class="text-base font-semibold">Want your partner included?</h3>
        <p class="">
            When forwarding tasks, simply copy your partner in the email to include them in the event or reminder.
        </p>
      </div>

      <!-- Step 2 -->
      <div class="relative bg-white rounded-lg p-6 border-2 border-blue-500 flex-1 text-center">
        <!-- Step Number -->
        <div
          class="absolute -top-12 -left-4 w-16 h-16 flex items-center justify-center bg-blue-500 text-white font-bold rounded-full"
        >
          2
        </div>
        <div class="flex justify-center mb-4">
            <img src="/images/whats-next-2.png" alt="Step 1 Icon"/>
        </div>
        <h2 class="text-lg font-semibold mb-4">We Organize For You</h2>
        <p class="">
          Your tasks will be automatically added to your calendar, complete with
          reminders tailored to your family’s schedule.
        </p>
      </div>
    </div>

    <div class="text-sm mt-6 max-w-4xl text-left">
      Note: You can always go back and edit your family details under
      <Link :href="route('simplify.activate.FamilyPersonalizationPartTwo')" ><span class="text-gray-800 font-medium"><strong>"My Account" </strong> </span> </Link>later to keep
      everything up-to-date.
    </div>
  </div>
  </template>

  <script>
  import SimplifyLayout from "@/Layouts/SimplifyLayout.vue";
  import {Link} from "@inertiajs/vue3";
  export default {
    name: "SimplifyPage",
    layout:SimplifyLayout,
    components: {Link},
  };
  </script>

  <style scoped>
  /* Add custom styles if necessary */
  </style>
