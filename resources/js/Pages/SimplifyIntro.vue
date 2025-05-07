<template>
    <div class="flex min-h-screen bg-gray-50">
      <!-- Sidebar -->
      <aside class="w-64 bg-white shadow-lg">
        <div class="p-6 text-lg font-bold text-blue-800">
          Hi Mary!
        </div>
        <nav class="mt-6 space-y-4">
          <a
            href="#"
            class="flex items-center px-6 py-3 text-blue-600 font-semibold hover:bg-gray-100"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5 mr-2"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M9.75 12l2.25 2.25 4.5-4.5m6 6.75V19.5a2.25 2.25 0 01-2.25 2.25H4.5A2.25 2.25 0 012.25 19.5v-9a2.25 2.25 0 012.25-2.25h9"
              />
            </svg>
            How It Works
          </a>
          <a
            href="#"
            class="flex items-center px-6 py-3 text-gray-600 hover:bg-gray-100"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5 mr-2"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M5 7h14M5 12h14m-7 5h7"
              />
            </svg>
            My Account
          </a>
          <a
            href="#"
            class="flex items-center px-6 py-3 text-gray-600 hover:bg-gray-100"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5 mr-2"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M17 9V7a4 4 0 10-8 0v2m-3 8h14m-7 0v-3a1 1 0 112 0v3m-2 0h-2"
              />
            </svg>
            FAQ's
          </a>
        </nav>
      </aside>

      <!-- Main Content -->
      <main class="flex-1 p-8">
        <h1 class="text-3xl font-bold text-gray-900 mb-4">
          Welcome to <span class="text-blue-600">Simplify</span>!
        </h1>
        <p class="text-gray-600 mb-4">
          Here to make your life easier, one task at a time.
        </p>
        <p class="text-gray-600 mb-8">
          Simplify is here to take the load off your plate and give you back precious
          time. Whether it’s long school emails, last-minute event reminders, or juggling
          your kids' activities, we’ll handle the details so you can focus on what truly
          matters.
        </p>
        <h2 class="text-xl font-semibold text-gray-900 mb-4">The Best Part?</h2>

        <!-- Feature Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
          <div class="border-2 border-yellow-200 rounded-lg p-6 text-center">
            <h3 class="text-lg font-bold text-gray-900 mb-2">Completely Hands-Free</h3>
            <p class="text-gray-600">
                You forward the things you need to remember, and we handle the rest - no more mental juggling or manual updates.
            </p>
          </div>
          <div class="border-2 border-pink-200 rounded-lg p-6 text-center">
            <h3 class="text-lg font-bold text-gray-900 mb-2">Tailored to Your Family</h3>
            <p class="text-gray-600">
              Simplify learns from your inputs to provide reminders and suggestions that
              fit your unique needs.
            </p>
          </div>
          <div class="border-2 border-purple-200 rounded-lg p-6 text-center">
            <h3 class="text-lg font-bold text-gray-900 mb-2">Time Saving Magic</h3>
            <p class="text-gray-600">
              From syncing schedules to personalized recommendations, we give you back
              hours in your day.
            </p>
          </div>
        </div>

        <div class="mt-8 text-center">
          <button class="bg-yellow-400 text-white px-6 py-3 rounded-lg font-semibold">
            Next
          </button>
        </div>
      </main>
    </div>
  </template>

  <script>
  export default {
    name: "SimplifyIntro",
  };
  </script>

  <style scoped>
  </style>
