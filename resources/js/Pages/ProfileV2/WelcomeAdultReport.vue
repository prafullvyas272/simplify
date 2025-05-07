<template>
    <div class="min-h-screen flex flex-col py-10 font-poppins">
        <!-- Heading -->
        <div class="mb-8 px-4">
            <h1 class="text-center text-2xl md:text-3xl font-bold">
                Profile Information
            </h1>
            <p class="text-center text-gray-600 mt-4 max-w-3xl mx-auto">
                This is your profile section. Please check all details are up to
                date.
            </p>
        </div>

        <div class="p-3 pt-0">

            <div class="d-flex gap-3 flex-wrap">
                <div
                    class=" rounded-lg w-fit px-2  justify-center d-flex items-center border hover:shadow-lg transition-shadow"
                >
                    <!-- Male Icon -->
                    <svg v-if="userDetail.gender == 'male'"
                     version="1.0" xmlns="http://www.w3.org/2000/svg" width="50.000000pt" height="80.000000pt" viewBox="0 0 112.000000 154.000000" preserveAspectRatio="xMidYMid meet" data-v-a85f9358=""><metadata data-v-a85f9358=""> Created by potrace 1.16, written by Peter Selinger 2001-2019 </metadata><g transform="translate(0.000000,154.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none" data-v-a85f9358=""><path d="M495 1431 c-58 -35 -70 -58 -70 -126 0 -54 4 -68 25 -90 29 -32 78
-55 116 -55 37 0 98 36 118 71 24 41 23 111 -3 153 -37 59 -129 83 -186 47z" data-v-a85f9358=""></path><path d="M356 1128 c-17 -17 -41 -75 -86 -210 -34 -103 -60 -195 -58 -204 2
-9 16 -26 31 -38 26 -19 30 -19 54 -6 19 11 34 38 59 105 l33 90 0 -346 c1
-315 3 -349 19 -367 28 -34 65 -37 98 -9 l29 25 3 211 c3 176 6 211 18 211 12
0 14 -33 14 -209 0 -189 2 -211 19 -232 23 -28 83 -32 109 -6 15 16 18 53 22
365 3 193 8 335 13 319 36 -129 72 -176 120 -158 55 21 54 36 -18 252 -74 221
-83 235 -152 226 -21 -3 -58 -11 -82 -17 -37 -11 -51 -10 -95 4 -74 23 -120
21 -150 -6z" data-v-a85f9358=""></path></g></svg>
                    <!-- Female Icon -->
                    <svg
                        v-if="userDetail.gender == 'female'"
                        version="1.0"
                        xmlns="http://www.w3.org/2000/svg"
                        width="40.000000pt"
                        height="70.000000pt"
                        viewBox="0 0 112.000000 154.000000"
                        preserveAspectRatio="xMidYMid meet"
                    >
                        <metadata>
                            Created by potrace 1.16, written by Peter Selinger
                            2001-2019
                        </metadata>
                        <g
                            transform="translate(0.000000,154.000000) scale(0.100000,-0.100000)"
                            fill="#000000"
                            stroke="none"
                        >
                            <path
                                d="M491 1456 c-54 -30 -67 -106 -26 -154 77 -91 213 3 163 113 -22 48
                -88 68 -137 41z"
                            />
                            <path
                                d="M413 1224 c-47 -23 -60 -50 -114 -231 -37 -127 -46 -169 -39 -184 12
                -21 53 -25 67 -6 5 6 27 74 49 149 21 76 44 138 50 138 6 0 -18 -100 -56 -237
                l-68 -238 64 -3 64 -3 0 -187 c0 -197 3 -212 45 -212 42 0 45 15 45 212 0 160
                2 188 15 188 13 0 15 -27 15 -181 0 -105 4 -188 10 -200 14 -26 66 -26 80 0 6
                12 10 95 10 200 l0 181 60 0 c42 0 60 4 60 13 -1 6 -29 113 -65 237 -35 124
                -61 227 -59 229 11 11 24 -22 59 -144 39 -139 61 -173 96 -155 28 16 24 49
                -26 216 -48 161 -64 190 -116 216 -46 24 -200 25 -246 2z"
                            />
                        </g>
                    </svg>

                    <Link
                        class="border border-black rounded-sm px-4 py-2 mr-2 font-semibold text-gray-800 shadow-sm focus:outline-none hover:bg-gray-100"
                    >
                        {{ userDetail.name }}
                    </Link>
                </div>
                <div
                    class=" rounded-lg w-fit px-2  justify-center d-flex items-center border hover:shadow-lg "
                >
                    <svg
                        version="1.0"
                        xmlns="http://www.w3.org/2000/svg"
                        width="40.000000pt"
                        height="50.000000pt"
                        viewBox="0 0 118.000000 122.000000"
                        preserveAspectRatio="xMidYMid meet"
                    >
                        <metadata>
                            Created by potrace 1.16, written by Peter Selinger
                            2001-2019
                        </metadata>
                        <g
                            transform="translate(0.000000,122.000000) scale(0.100000,-0.100000)"
                            fill="#000000"
                            stroke="none"
                        >
                            <path
                                d="M487 1119 c-27 -40 -48 -112 -42 -140 6 -25 40 -49 70 -49 8 0 21 10
              29 23 13 19 13 30 2 77 -7 30 -19 68 -28 84 l-15 29 -16 -24z"
                            />
                            <path
                                d="M681 1110 c-28 -47 -43 -103 -35 -135 8 -33 49 -51 81 -36 31 14 30
              77 -1 151 l-24 54 -21 -34z"
                            />
                            <path
                                d="M437 894 c-4 -4 -7 -27 -7 -51 l0 -43 -78 0 c-98 0 -156 -26 -190
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
              77 32 7 c18 3 43 13 55 22 21 14 26 13 54 -4 17 -10 47 -19 65 -19z"
                            />
                        </g>
                    </svg>

                    <Link
                    class="border ml-2 border-black rounded-sm px-4 py-2 mr-2 font-semibold text-gray-800 shadow-sm focus:outline-none hover:bg-gray-100"
                    >
                        {{ userDetail.birthday || "NA" }}
                    </Link>
                </div>
            </div>

            <hr class="mt-10" />
            <!-- Take Adult Assessment Section -->
            <div
                class="w-full items-center flex flex-col md:flex-row items-center justify-between space-y-4 md:space-y-0"
            >
                <p class="text-start text-gray-600 text-sm w-full m-0">
                  To ensure you get the best insights and recommendations
                        from Unify, make sure your profile is always up to date.
                </p>
                <Link
                       :href="route('profile.adult.edit')"
                    target="_blank"
                    class="text-nowrap w-full md:w-auto text-center border border-[#ADD8E6] rounded-lg px-6 py-3 text-[#1D355D] font-semibold bg-gradient-to-r from-[#FFF8E3] via-[#D7E9FF] to-[#BEE3FF] hover:shadow-md"
                >
                    Edit Profile
                </Link>
            </div>
            <hr class="mt-10" />
            <!-- Take Adult Assessment Section -->
            <div
                class="w-full items-center flex flex-col md:flex-row items-center justify-between space-y-4 md:space-y-0"
            >
                <p class="text-start text-gray-600 text-sm w-full m-0">
                    Looking for insights about yourself? Take our Adult
                    Assessment to discover your personality style and gain
                    valuable self-awareness.
                </p>
                <a
                    href="https://assessment.useunify.com/"
                    target="_blank"
                    class="text-nowrap w-full md:w-auto text-center border border-[#ADD8E6] rounded-lg px-6 py-3 text-[#1D355D] font-semibold bg-gradient-to-r from-[#FFF8E3] via-[#D7E9FF] to-[#BEE3FF] hover:shadow-md"
                >
                    Visit Unify Assessments Portal
                </a>
            </div>
        </div>
    </div>


</template>
<script>
import ReportLayout from "@/Layouts/ReportLayout.vue";
import { Link } from "@inertiajs/vue3";
export default {
    name: "WelcomeReport",
    layout: ReportLayout,
    components: { Link },
    props: {
        userDetail: Object,
    },

    methods: {
        // navigateToRoute(id) {
        //   const url = `/edit-child/${id}`;
        //   window.location.href = url;
        // },
    },
};
</script>

<style scoped>
.font-poppins {
    font-family: "Poppins", sans-serif;
}

.border-black {
    border: 2px solid #000000 !important;
    background-color: lightgray;
}
p {
    color: #000000;
}

@media screen and (min-width: 1920px) {
    .paragraph {
        font-size: larger;
        color: #000000;
    }
    .heading {
        font-size: xxx-large;
    }
}
</style>
