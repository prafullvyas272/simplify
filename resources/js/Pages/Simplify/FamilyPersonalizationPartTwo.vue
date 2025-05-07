<template>
    <div class="flex min-h-screen bg-gray-50 font-popins">
        <!-- Main Content -->
        <main class="personalization-part-two flex-1 p-10 bg-white">
            <h2 class="text-center text-4xl text-[#091532] mb-4">
                Your Family
            </h2>

            <div class="h-1.5 w-full bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] mb-10">
            </div>

            <!-- Parent Section -->
            <div class="mb-1">
                <h3 class="text-xl font-bold ">Parent (You)</h3>
                <div class="flex space-x-6">
                    <div class="flex items-center space-x-2">
                        <span class="text-3xl">
                            <svg v-if="user.gender == 'male'" version="1.0" xmlns="http://www.w3.org/2000/svg" width="50.000000pt"
                                height="80.000000pt" viewBox="0 0 112.000000 154.000000"
                                preserveAspectRatio="xMidYMid meet">
                                <metadata>
                                    Created by potrace 1.16, written by Peter Selinger 2001-2019
                                </metadata>
                                <g transform="translate(0.000000,154.000000) scale(0.100000,-0.100000)" fill="#000000"
                                    stroke="none">
                                    <path d="M495 1431 c-58 -35 -70 -58 -70 -126 0 -54 4 -68 25 -90 29 -32 78
-55 116 -55 37 0 98 36 118 71 24 41 23 111 -3 153 -37 59 -129 83 -186 47z" />
                                    <path d="M356 1128 c-17 -17 -41 -75 -86 -210 -34 -103 -60 -195 -58 -204 2
-9 16 -26 31 -38 26 -19 30 -19 54 -6 19 11 34 38 59 105 l33 90 0 -346 c1
-315 3 -349 19 -367 28 -34 65 -37 98 -9 l29 25 3 211 c3 176 6 211 18 211 12
0 14 -33 14 -209 0 -189 2 -211 19 -232 23 -28 83 -32 109 -6 15 16 18 53 22
365 3 193 8 335 13 319 36 -129 72 -176 120 -158 55 21 54 36 -18 252 -74 221
-83 235 -152 226 -21 -3 -58 -11 -82 -17 -37 -11 -51 -10 -95 4 -74 23 -120
21 -150 -6z" />
                                </g>
                            </svg>

                            <svg v-if="user.gender == 'female'" version="1.0" xmlns="http://www.w3.org/2000/svg" width="50.000000pt"
                                height="80.000000pt" viewBox="0 0 112.000000 154.000000"
                                preserveAspectRatio="xMidYMid meet">
                                <metadata>
                                    Created by potrace 1.16, written by Peter Selinger 2001-2019
                                </metadata>
                                <g transform="translate(0.000000,154.000000) scale(0.100000,-0.100000)" fill="#000000"
                                    stroke="none">
                                    <path d="M491 1456 c-54 -30 -67 -106 -26 -154 77 -91 213 3 163 113 -22 48
                -88 68 -137 41z" />
                                    <path d="M413 1224 c-47 -23 -60 -50 -114 -231 -37 -127 -46 -169 -39 -184 12
                -21 53 -25 67 -6 5 6 27 74 49 149 21 76 44 138 50 138 6 0 -18 -100 -56 -237
                l-68 -238 64 -3 64 -3 0 -187 c0 -197 3 -212 45 -212 42 0 45 15 45 212 0 160
                2 188 15 188 13 0 15 -27 15 -181 0 -105 4 -188 10 -200 14 -26 66 -26 80 0 6
                12 10 95 10 200 l0 181 60 0 c42 0 60 4 60 13 -1 6 -29 113 -65 237 -35 124
                -61 227 -59 229 11 11 24 -22 59 -144 39 -139 61 -173 96 -155 28 16 24 49
                -26 216 -48 161 -64 190 -116 216 -46 24 -200 25 -246 2z" />
                                </g>
                            </svg>

                        </span>
                        <button
                            class="border border-black rounded-lg px-4 py-2 font-semibold text-gray-800 shadow-sm focus:outline-none hover:bg-gray-100">
                            {{ parentDetail.first_name }} {{ parentDetail.last_name }}
                        </button>
                    </div>
                    <div v-if="parentDetail?.partner_first_name && parentDetail?.partner_last_name"
                        class="flex items-center space-x-2">
                        <span class="text-3xl">
                            <!-- Show male icon if current user is male -->
                            <svg v-if="user.gender == 'female'" version="1.0" xmlns="http://www.w3.org/2000/svg" width="50.000000pt"
                                height="80.000000pt" viewBox="0 0 112.000000 154.000000"
                                preserveAspectRatio="xMidYMid meet">
                                <metadata>
                                    Created by potrace 1.16, written by Peter Selinger 2001-2019
                                </metadata>
                                <g transform="translate(0.000000,154.000000) scale(0.100000,-0.100000)" fill="#000000"
                                    stroke="none">
                                    <path d="M495 1431 c-58 -35 -70 -58 -70 -126 0 -54 4 -68 25 -90 29 -32 78
-55 116 -55 37 0 98 36 118 71 24 41 23 111 -3 153 -37 59 -129 83 -186 47z" />
                                    <path d="M356 1128 c-17 -17 -41 -75 -86 -210 -34 -103 -60 -195 -58 -204 2
-9 16 -26 31 -38 26 -19 30 -19 54 -6 19 11 34 38 59 105 l33 90 0 -346 c1
-315 3 -349 19 -367 28 -34 65 -37 98 -9 l29 25 3 211 c3 176 6 211 18 211 12
0 14 -33 14 -209 0 -189 2 -211 19 -232 23 -28 83 -32 109 -6 15 16 18 53 22
365 3 193 8 335 13 319 36 -129 72 -176 120 -158 55 21 54 36 -18 252 -74 221
-83 235 -152 226 -21 -3 -58 -11 -82 -17 -37 -11 -51 -10 -95 4 -74 23 -120
21 -150 -6z" />
                                </g>
                            </svg>
                            <!-- Show female icon if current user is male -->

                            <svg v-if="user.gender == 'male'" version="1.0" xmlns="http://www.w3.org/2000/svg" width="50.000000pt"
                                height="80.000000pt" viewBox="0 0 112.000000 154.000000"
                                preserveAspectRatio="xMidYMid meet">
                                <metadata>
                                    Created by potrace 1.16, written by Peter Selinger 2001-2019
                                </metadata>
                                <g transform="translate(0.000000,154.000000) scale(0.100000,-0.100000)" fill="#000000"
                                    stroke="none">
                                    <path d="M491 1456 c-54 -30 -67 -106 -26 -154 77 -91 213 3 163 113 -22 48
                -88 68 -137 41z" />
                                    <path d="M413 1224 c-47 -23 -60 -50 -114 -231 -37 -127 -46 -169 -39 -184 12
                -21 53 -25 67 -6 5 6 27 74 49 149 21 76 44 138 50 138 6 0 -18 -100 -56 -237
                l-68 -238 64 -3 64 -3 0 -187 c0 -197 3 -212 45 -212 42 0 45 15 45 212 0 160
                2 188 15 188 13 0 15 -27 15 -181 0 -105 4 -188 10 -200 14 -26 66 -26 80 0 6
                12 10 95 10 200 l0 181 60 0 c42 0 60 4 60 13 -1 6 -29 113 -65 237 -35 124
                -61 227 -59 229 11 11 24 -22 59 -144 39 -139 61 -173 96 -155 28 16 24 49
                -26 216 -48 161 -64 190 -116 216 -46 24 -200 25 -246 2z" />
                                </g>
                            </svg>

                        </span>
                        <button
                            class="border border-black rounded-lg px-4 py-2 font-semibold text-gray-800 shadow-sm focus:outline-none hover:bg-gray-100">
                            {{ parentDetail.partner_first_name }} {{ parentDetail.partner_last_name }}
                        </button>
                    </div>
                </div>
            </div>

            <!-- Children Section -->
            <div class="mb-5">
                <h3 class="text-xl font-bold">Children</h3>

                <div class="flex space-x-6">
                    <div v-for="(person, index) in childDetail" :key="index" class="flex items-center space-x-2">
                        <span class="text-3xl" v-if="person.gender === 'male'">
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="50.000000pt"
                                height="80.000000pt" viewBox="0 0 112.000000 130.000000"
                                preserveAspectRatio="xMidYMid meet">
                                <metadata> Created by potrace 1.16, written by Peter Selinger 2001-2019 </metadata>
                                <g transform="translate(0.000000,130.000000) scale(0.100000,-0.100000)" fill="#000000"
                                    stroke="none">
                                    <path
                                        d="M519 1180 c-44 -13 -79 -42 -100 -81 -73 -144 78 -293 221 -217 96 52 116 168 43 249 -46 51 -103 68 -164 49z" />
                                    <path
                                        d="M316 731 c-124 -124 -139 -152 -103 -188 31 -31 65 -19 133 48 l64 63 0 -242 c0 -229 1 -243 20 -262 25 -25 51 -25 81 -1 22 18 24 28 29 138 5 110 6 118 25 118 19 0 20 -8 23 -115 2 -101 5 -117 24 -137 28 -30 53 -29 83 2 l25 24 0 238 0 237 64 -63 c48 -47 71 -63 92 -63 45 0 71 56 41 92 -7 8 -62 64 -123 123 l-112 108 -37 -15 c-47 -20 -115 -20 -162 -1 -19 8 -38 15 -42 15 -3 0 -60 -54 -125 -119z" />
                                </g>
                            </svg>
                        </span>

                        <span v-if="person.gender === 'female'">
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="50.000000pt"
                                height="80.000000pt" viewBox="0 0 112.000000 130.000000"
                                preserveAspectRatio="xMidYMid meet">
                                <metadata>Created by potrace 1.16, written by Peter Selinger 2001-2019</metadata>
                                <g transform="translate(0.000000,130.000000) scale(0.100000,-0.100000)" fill="#000000"
                                    stroke="none">
                                    <path
                                        d="M351 1156 c-15 -16 -25 -45 -32 -92 -6 -38 -15 -74 -21 -81 -28 -34 26 -72 76 -53 32 12 48 42 55 109 8 70 31 82 31 16 0 -42 5 -52 39 -86 32 -33 45 -39 80 -39 82 0 131 49 131 130 0 22 4 40 8 40 20 0 32 -28 32 -75 0 -38 5 -57 20 -73 26 -28 62 -37 90 -22 17 9 21 17 15 38 -3 15 -10 52 -16 82 -12 72 -28 109 -50 120 -26 14 -76 12 -109 -5 -25 -13 -32 -13 -57 0 -15 8 -41 15 -58 15 -16 0 -43 -7 -58 -15 -25 -13 -32 -13 -57 0 -44 23 -93 19 -119 -9z" />
                                    <path
                                        d="M511 880 c-67 -16 -113 -60 -159 -150 -43 -86 -80 -224 -69 -254 9 -23 73 -22 85 2 5 9 15 45 22 80 9 43 16 60 23 53 10 -10 -4 -184 -19 -238 -6 -21 -3 -23 30 -23 l36 0 0 -129 c0 -140 7 -161 54 -161 41 0 46 16 46 162 l0 138 25 0 25 0 0 -138 c0 -94 4 -142 12 -150 19 -19 66 -15 78 7 5 11 10 76 10 145 l0 126 36 0 c35 0 36 1 30 28 -8 33 -18 261 -11 247 3 -5 13 -44 23 -85 l18 -75 37 -3 c28 -2 39 1 44 14 10 26 -16 142 -50 224 -64 154 -175 216 -326 180z" />
                                </g>
                            </svg>
                        </span>


                        <button
                            class="border border-black rounded-lg px-4 py-2 font-semibold text-gray-800 shadow-sm focus:outline-none hover:bg-gray-100">
                            {{ person.child_first_name }} {{ person.child_last_name }}
                        </button>
                    </div>
                </div>


                <div class="mt-6 text-center">
                    <Link
                        class="border border-[#DDB7FF] rounded-lg px-4 py-2 font-semibold bg-gradient-to-r from-[#FFF8E3] via-[#FFD7F5] to-[#DDB7FF] hover:shadow-md"
                        href='/simplify-add-family-personalization/1'>Add another child</Link>
                </div>
            </div>

            <div class="h-1.5 w-full bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] mb-10">
            </div>

            <!-- Navigation Buttons -->
            <div class="mt-8 flex justify-between">
                <Link
                    class="commen_btn px-8 py-3 bg-gray-300 text-gray-800 rounded-lg shadow-sm font-semibold hover:bg-gray-400"
                    href='/simplify-family-personalization'>Back</Link>
                <Link class="commen_btn bg-[#FC5C7D] text-white rounded-lg shadow-sm font-semibold hover:bg-[#E94563]"
                    :href="route('simplify.whats-next')">Submit</Link>
            </div>
        </main>
    </div>
</template>

<script>
import SimplifyLayout from "@/Layouts/SimplifyLayout.vue";
import { Link } from "@inertiajs/vue3";
export default {
    name: "FamilyPersonalizationPartTwo",
    layout: SimplifyLayout,
    components: { Link },
    props: {
        parentDetail: Object,
        childDetail: Object,
        user: Object,
    },
};
</script>

<style scoped>
.font-popins {
    font-family: "Poppins", sans-serif;
}

.personalization-part-two .border-black {
    border: 2px solid #000000 !important;
    background-color: lightgray;
}
</style>
