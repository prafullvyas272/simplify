<template>
    <div class="min-h-screen flex flex-col py-10 font-poppins">
      <!-- Heading -->
      <div class="mb-8 text-center">
        <h1 class="text-3xl font-bold text-gray-800 mt-10">
          Welcome to You<span class="highlightedText">r Reports</span> Hub!
        </h1>
        <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
          To ensure you get the best insights and recommendations from Unify, make sure
          your child's profile is always up to date.
        </p>
      </div>

      <!-- Profile Section -->
      <div class="w-full max-w-6xl px-6">
        <!-- Profile Header -->
        <div class="flex justify-between items-start mb-8">
          <div >
            <Link class="flex items-center space-x-2" :href="route('profile.child.edit',id)">
            <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
              width="30.000000pt" height="30.000000pt" viewBox="0 0 132.000000 132.000000"
              preserveAspectRatio="xMidYMid meet">
              <metadata>
              Created by potrace 1.16, written by Peter Selinger 2001-2019
              </metadata>
              <g transform="translate(0.000000,132.000000) scale(0.100000,-0.100000)"
              fill="#000000" stroke="none">
              <path d="M352 948 c-9 -9 -12 -97 -12 -336 0 -298 1 -326 18 -338 13 -10 84
              -13 323 -14 284 0 307 1 322 18 15 16 17 45 17 200 0 115 -4 182 -10 182 -6 0
              -10 -63 -10 -168 0 -117 -4 -172 -12 -180 -17 -17 -599 -17 -616 0 -9 9 -12
              90 -12 304 0 257 2 293 16 298 9 3 87 6 175 6 87 0 159 2 159 4 0 2 3 11 6 20
              5 14 -14 16 -173 16 -126 0 -183 -4 -191 -12z"/>
              <path d="M717 762 l-137 -137 0 -63 0 -62 48 0 47 0 143 143 c78 79 142 148
              142 155 0 14 -83 102 -96 102 -5 0 -71 -62 -147 -138z"/>
              </g>
              </svg>
              <span class="text-gray-700 font-semibold">Edit Profile</span>
            </Link>
          </div>
        </div>

        <!-- Child Information -->
        <div class="grid grid-cols-1 gap-6">
          <!-- Child Name -->
          <div>
            <label class="block text-gray-700 font-semibold mb-2">Child Name</label>
            <p class="border border-black rounded-md w-fit px-4 py-2 font-semibold text-gray-800 shadow-sm focus:outline-none hover:bg-gray-100">
              {{ childDetail?.child_name }}
            </p>
          </div>

          <!-- School Name -->
          <div v-if="childrenSchool != ''">
            <label class="block text-gray-700 font-semibold mb-2">School Name</label>
            <button class="border border-black rounded-md px-4 py-2 font-semibold text-gray-800 shadow-sm focus:outline-none hover:bg-gray-100">
              {{ childrenSchool }}
            </button>
          </div>

          <!-- Grade -->
          <div v-if="childDetail?.grade">
            <label class="block text-gray-700 font-semibold mb-2">Grade</label>
            <button class="border border-black rounded-md px-4 py-2 font-semibold text-gray-800 shadow-sm focus:outline-none hover:bg-gray-100">{{ childDetail?.grade }}</button>
          </div>
        </div>
        <!-- Birthdate -->
        <div class="flex items-center space-x-2">
            <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
              width="40.000000pt" height="50.000000pt" viewBox="0 0 118.000000 122.000000"
              preserveAspectRatio="xMidYMid meet">
              <metadata>
              Created by potrace 1.16, written by Peter Selinger 2001-2019
              </metadata>
              <g transform="translate(0.000000,122.000000) scale(0.100000,-0.100000)"
              fill="#000000" stroke="none">
              <path d="M487 1119 c-27 -40 -48 -112 -42 -140 6 -25 40 -49 70 -49 8 0 21 10
              29 23 13 19 13 30 2 77 -7 30 -19 68 -28 84 l-15 29 -16 -24z"/>
              <path d="M681 1110 c-28 -47 -43 -103 -35 -135 8 -33 49 -51 81 -36 31 14 30
              77 -1 151 l-24 54 -21 -34z"/>
              <path d="M437 894 c-4 -4 -7 -27 -7 -51 l0 -43 -78 0 c-98 0 -156 -26 -190
              -85 -22 -39 -22 -47 -20 -272 l3 -232 -29 -8 c-38 -11 -55 -37 -40 -60 10 -17
              47 -18 509 -21 369 -2 501 1 512 10 20 16 12 51 -15 64 l-24 12 -1 243 c-2
              240 -2 245 -26 278 -35 49 -91 71 -183 71 l-77 0 -3 48 -3 47 -65 0 -65 0 -3
              -47 c-3 -46 -5 -48 -32 -48 -27 0 -29 2 -32 48 l-3 47 -60 3 c-34 2 -64 0 -68
              -4z m522 -190 c30 -25 31 -28 31 -115 0 -72 -3 -89 -15 -89 -21 0 -55 36 -55
              58 0 23 -19 42 -42 42 -19 0 -22 -5 -32 -53 -4 -16 -17 -32 -31 -39 -39 -17
              -72 3 -85 52 -9 33 -15 40 -35 40 -20 0 -26 -7 -35 -40 -13 -49 -46 -69 -84
              -52 -17 7 -29 25 -36 52 -9 33 -15 40 -36 40 -19 0 -26 -6 -30 -29 -8 -37 -39
              -71 -64 -71 -25 0 -56 34 -64 71 -10 51 -56 36 -70 -23 -7 -30 -39 -53 -62
              -44 -10 4 -14 24 -14 72 0 74 19 126 53 142 14 7 140 11 349 11 l326 1 31 -26z
              m-548 -274 c19 0 47 9 64 20 26 17 31 18 46 4 28 -25 94 -29 139 -9 35 16 40
              16 61 1 31 -21 97 -20 134 2 29 18 31 18 60 0 17 -10 40 -18 53 -18 21 0 22
              -3 22 -91 0 -142 40 -129 -390 -129 l-369 0 -16 30 c-11 22 -15 53 -13 107 l3
              77 32 7 c18 3 43 13 55 22 21 14 26 13 54 -4 17 -10 47 -19 65 -19z"/>
              </g>
              </svg>
            <button
              class="border border-black rounded-md px-4 py-2 font-semibold text-gray-800 shadow-sm focus:outline-none hover:bg-gray-100"
            >
              {{ new Date(childDetail.birth_date).toLocaleDateString('en-US') }}

            </button>
          </div>
        <div class="h-1.5 w-full bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] flex flex-row"></div>
        <!-- Reports Section -->
        <div v-if="childDetail.payment_status == 'paid' && childDetail.learn_assessment_link && childDetail.disc_assessment_link" class="mt-8">
          <h2 class="text-xl font-semibold text-gray-800">{{ childDetail?.child_name.split(" ")[0] }}’s Reports</h2>
          <div class="w-full">
            <div class="flex w-full">
                <!-- Learning Styles Report -->
                <!-- First Column: Image -->
                <div class="flex-shrink-0">
                    <img src="/images/assessments/report-learning.png" alt="Learning Report" width="50" />
                </div>
                <!-- Second Column: Link -->
                <div class="ml-4 mt-2">
                    <a :href="childDetail.learn_assessment_link" target="_blank"
                        class="report-download-link flex items-center border border-blue rounded-md px-4 py-2 font-semibold text-pink-500 hover:bg-pink-100">
                        Learning Styles Report
                </a>
                </div>
            </div>
            <div class="flex w-full">
                <!-- Personality Report -->
                <div class="flex-shrink-0">
                    <img src="/images/assessments/report-personality.png" width="50"/>
                </div>
                <div class="ml-4 mt-2">
                    <a :href="childDetail.disc_assessment_link" target="_blank"
                    class=" report-download-link flex items-center border border-blue rounded-md px-4 py-2 font-semibold text-pink-500 hover:bg-pink-100"
                    >

                    Personality Report &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </a>
                </div>
            </div>
          </div>
        </div>

        <div v-else class="mt-8">
          <!-- Content for when the condition is not fulfilled -->
          <p>Your reports will be available within 48 hours.</p>
        </div>

        <!-- Payment Button -->
        <div v-if="childDetail.payment_status != 'paid'" style="float: right;" class="mt-6 mt-6 w-full max-w-2xl">
          <a :href="`/assessments/pay/${childDetail.id}/${authUserId}/${pricings.id}`"
          class="text-lg w-50 flex text-center items-center bg-gradient-to-r from-yellow-300 to-blue-300 text-gray-800 font-semibold px-8 py-3 rounded-md shadow hover:shadow-md">
          Payment to take assessment
       </a>
        </div>

        <!-- Back Button -->
        <div class="mt-6">
          <Link :href='"/profile-report"'
            class=" w-20 flex items-center bg-gradient-to-r from-yellow-300 to-blue-300 text-gray-800 font-semibold px-6 py-2 rounded-md shadow hover:shadow-md"
          >
            Back
        </Link>
        </div>
      </div>
    </div>
  </template>
  <script>
  import ReportLayout from "@/Layouts/ReportLayout.vue";
  import {Link} from "@inertiajs/vue3";

  export default {
    name: "ShowChildInformation",
    layout: ReportLayout,
    components: {Link},
    props:{
        childDetail: Object,
        pricings:Object,
        childrenSchool : String,
        id : Number
    },
    data () {
        return {
            authUserId: this.childDetail.user_id,
        }
    },
  };
  </script>
  <style scoped>
  .font-poppins {
    font-family: 'Poppins', sans-serif;
  }

  .report-download-link{
    border: 2.5px solid #a3e5f1 !important;
    color: #000000;
  }
  </style>
