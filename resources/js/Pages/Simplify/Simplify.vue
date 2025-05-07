<template>
    <!-- <div>
        <NavBar />
    </div> -->
    <!-- Main Content -->
    <main class="flex-1 p-8 text-center mt-10">
        <div class="flex justify-center">
            <img class="mt-10" src="/images/simplify-logo-crop.png" width="400"/>
        </div>
      <h1 class="text-4xl font-black  mt-5 text-center font-bold">
        Welcome to <span class="highlightedText">Simplify</span>!
      </h1>
        <p class="text-lg text-black-600 mb-4 text-center">
          Here to make your life easier, one task at a time.
        </p>
        <p class="text-lg text-black-600 mb-8">
          Simplify is here to take the load off your plate and give you back precious
          time. Whether it’s long school emails, last-minute event reminders, or juggling
          your kids' activities, we’ll handle the details so you can focus on what truly
          matters.
        </p>
        <p class="text-lg text-black-600 mb-4">The Best Part?</p>

        <!-- Feature Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Box 1 -->
        <div class="gradient-border">
          <div>
            <h3 class="text-lg font-black text-black-900 mb-2">Completely Hands-Free</h3>
            <p class="text-gray-600">
              You forward the things you need to remember, and we handle the rest - no more mental juggling or manual updates.
              <!-- You forward the emails, and we handle the rest—no more mental juggling or manual updates. -->
            </p>
          </div>
        </div>

        <!-- Box 2 -->
        <div class="gradient-border">
          <div>
            <h3 class="text-lg font-black text-gray-900 mb-2">Tailored to Your Family</h3>
            <p class="text-gray-600">
              Simplify learns from your inputs to provide reminders and suggestions that
              fit your unique needs.
            </p>
          </div>
        </div>

        <!-- Box 3 -->
        <div class="gradient-border">
          <div>
            <h3 class="text-lg font-black text-gray-900 mb-2">Time Saving Magic</h3>
            <p class="text-gray-600">
              From syncing schedules to personalized recommendations, we give you back
              hours in your day.
            </p>
          </div>
        </div>
      </div>

        <div class="mt-5">
            <h2 class="text-3xl font-black text-gray-900 mb-1">Ready to Simplify Your Life?</h2>
            <p class="text-lg">Click below and let’s get started on making your parenting journey smoother!</p>
        </div>
        <div class="mt-8 flex justify-between float-right">
            <Link class="commen_btn px-8 py-3 bg-gray-300 text-gray-800 rounded-lg shadow-sm font-semibold hover:bg-gray-400"  :href="route('simplify.how-it-works')" >Next</Link>
        </div>
      </main>

</template>

<script>

//import NavBar from "@/Components/Navigation/NavBar.vue";
import SimplifyLayout from "@/Layouts/SimplifyLayout.vue";
import {Link} from "@inertiajs/vue3";
export default {
    name: "AssessmentBefore",
    layout:SimplifyLayout,
    components: {Link}
}
</script>


<style scoped>

tbody:before {
    content:"@";
    display:block;
    line-height:10px;
    text-indent:-99999px;
}
.gradient-border {
  position: relative;
  padding: 2px; /* Space for the border */
  background: linear-gradient(to right, #ddb7ff, #ffd7f5, #fff8e3, #ff83df); /* Gradient border */
  border-radius: 8px; /* Rounded corners for the border */
}

.gradient-border > div {
  background: white; /* Inner content background */
  border-radius: 6px; /* Match inner content radius slightly smaller */
  padding: 16px; /* Adjust padding for the inner content */
  margin:2px;
  max-height:185px;
  min-height:185px;
  margin-bottom:20px;
}

@media screen and (min-width:1920px) {
.gradient-border > div {
    padding: 25px;
    max-height: 165px;
    margin: 3px;
    margin-bottom:20px;
}
}
</style>
