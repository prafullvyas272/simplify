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
            <div class="d-flex items-center mb-2 justify-between  border-gray-300 rounded-lg">
                <h2 class="text-3xl font-bold text-center m-0">Children</h2>

                <Link :href="route('profile.child.addmore')"
                    class="hidden lg:block w-fit md:w-auto inline-block border border-[#DDB7FF] rounded-lg px-6 py-3 text-[#1D355D] font-semibold bg-gradient-to-r from-[#FFF8E3] via-[#FFD7F5] to-[#DDB7FF] hover:shadow-md text-center">
                Add another child
                </Link>
            </div>
            <div class="d-flex gap-3 flex-wrap">
                <div v-for="(person, index) in childDetail" :key="index"
                    class="bg-white rounded-lg w-fit px-2 shadow-md justify-center d-flex items-center border hover:shadow-lg transition-shadow">
                    <!-- Male Icon -->
                    <svg v-if="person.gender === 'male'" xmlns="http://www.w3.org/2000/svg" width="50" height="80"
                        viewBox="0 0 112 130">
                        <g transform="translate(0,130) scale(0.1,-0.1)" fill="currentColor" stroke="none">
                            <path
                                d="M519 1180 c-44 -13 -79 -42 -100 -81 -73 -144 78 -293 221 -217 96 52 116 168 43 249 -46 51 -103 68 -164 49z" />
                            <path
                                d="M316 731 c-124 -124 -139 -152 -103 -188 31 -31 65 -19 133 48 l64 63 0 -242 c0 -229 1 -243 20 -262 25 -25 51 -25 81 -1 22 18 24 28 29 138 5 110 6 118 25 118 19 0 20 -8 23 -115 2 -101 5 -117 24 -137 28 -30 53 -29 83 2 l25 24 0 238 0 237 64 -63 c48 -47 71 -63 92 -63 45 0 71 56 41 92 -7 8 -62 64 -123 123 l-112 108 -37 -15 c-47 -20 -115 -20 -162 -1 -19 8 -38 15 -42 15 -3 0 -60 -54 -125 -119z" />
                        </g>
                    </svg>
                    <!-- Female Icon -->
                    <!-- <svg
                        v-if="person.gender === 'female'"
                        xmlns="http://www.w3.org/2000/svg"
                        width="50"
                        height="80"
                        viewBox="0 0 112 130"
                    >
                        <g
                            transform="translate(0,130) scale(0.1,-0.1)"
                            fill="currentColor"
                            stroke="none"
                        >
                            <path
                                d="M351 1156 c-15 -16 -25 -45 -32 -92 -6 -38 -15 -74 -21 -81 -28 -34 26 -72 76 -53 32 12 48 42 55 109 8 70 31 82 31 16 0 -42 5 -52 39 -86 32 -33 45 -39 80 -39 82 0 131 49 131 130 0 22 4 40 8 40 20 0 32 -28 32 -75 0 -38 5 -57 20 -73 26 -28 62 -37 90 -22 17 9 21 17 15 38 -3 15 -10 52 -16 82 -12 72 -28 109 -50 120 -26 14 -76 12 -109 -5 -25 -13 -32 -13 -57 0 -15 8 -41 15 -58 15 -16 0 -43 -7 -58 -15 -25 -13 -32 -13 -57 0 -44 23 -93 19 -119 -9z"
                            />
                        </g>
                    </svg> -->
                    <svg v-if="person.gender === 'female'" fill="#000000" width="50px" height="80px" viewBox="0 0 50 50" version="1.2"
                        baseProfile="tiny" xmlns="http://www.w3.org/2000/svg" overflow="inherit">
                        <circle cx="22.875" cy="4.625" r="4.125" />
                        <path
                            d="M32.913 32l-5.909-16.237-.034-.167c0-.237.199-.429.447-.429.211 0 .388.141.435.329l4.017 10.504c.267.601 1.365 1 2.087 1 .965 0 1.065-1.895 1.044-2l-4.017-10.357c-.349-2.321-2.693-4.643-5.368-4.643h-5.235c-2.675 0-5.193 2.322-5.542 4.643l-3.837 10.357c-.087.199 0 2 1.043 2 .811 0 1.89-.283 2.087-1l3.875-10.549c.062-.166.228-.284.421-.284.247 0 .446.192.446.428l-.028.153-5.757 16.252c-.011.048 0 .951 0 1 0 .346.835 1 1.198 1h3.714v13.095c0 1.04.916 1.905 2 1.905s2-.866 2-1.905v-13.104c0-.283 2-.274 2 .009v13c0 1.04.917 2 2 2 1.086 0 2-.961 2-2v-13h3.869c.362 0 1.044-.654 1.044-1 0-.08.029-.931 0-1z" />
                    </svg>

                    <Link :href="route('profile.child.show', person.id)"
                        class="border border-black rounded-lg px-4 py-2 mr-2 font-semibold text-gray-800 shadow-sm focus:outline-none hover:bg-gray-100">
                    {{ person.child_name }}
                    </Link>
                </div>
            </div>

            <div class="mt-8 block lg:hidden">
                <Link :href="route('profile.child.addmore')"
                    class="w-full inline-block border border-[#DDB7FF] rounded-lg px-6 py-3 text-[#1D355D] font-semibold bg-gradient-to-r from-[#FFF8E3] via-[#FFD7F5] to-[#DDB7FF] hover:shadow-md text-center">
                Add another child
                </Link>
            </div>

            <hr class="mt-10">
            <!-- Take Adult Assessment Section -->
            <div
                class="w-full items-center  flex flex-col md:flex-row items-center justify-between space-y-4 md:space-y-0">
                <p class="text-start text-gray-600 text-sm w-full m-0">
                    Looking for insights about yourself? Take our Adult Assessment
                    to discover your personality style and gain valuable
                    self-awareness.
                </p>
                <a href="https://assessment.useunify.com/" target="_blank"
                    class=" text-nowrap w-full md:w-auto text-center border border-[#ADD8E6] rounded-lg px-6 py-3 text-[#1D355D] font-semibold bg-gradient-to-r from-[#FFF8E3] via-[#D7E9FF] to-[#BEE3FF] hover:shadow-md">
                    Take Adult Assessment
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
        childDetail: Object,
    },

    methods: {
        navigateToRoute(id) {
            // Replace `routeName` with your Laravel route name
            const url = `/show-child/${id}`;
            window.location.href = url;
        },
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
