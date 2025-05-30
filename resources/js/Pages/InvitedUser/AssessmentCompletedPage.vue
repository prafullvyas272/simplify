<template>
    <div
        class="w-full h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] px-10 flex items-center fixed top-0 z-10">
        <div class="w-1/6 img-logo">
            <Link :href="route('profile.report')">
            <img src="/images/web_logo.png" class="h-full object-contain" alt="Logo">
            </Link>
        </div>
    </div>


    <section class="middle_section">
        <div class="container" style="margin-top: 90px;">
            <div class="row justify-content-center pos_rel">
                <div class="col-md-8 quiz-completed">
                    <div class="bg_congo">
                        <div class="congo_special">
                            <h2>Congratulations You've successfully completed the assessments!</h2>
                            <p>
                            </p>
                            <p>
                            </p>
                            <div class="buttons-profile">
                                <!-- <a :href="route('profile.download_report')" class="commen_btn m-auto">Finish</a> -->
                                <a class="commen_btn m-auto cursor-pointer" @click="this.logout">
                                        Log out
                                </a>
                            </div>
                            <!-- <a href="" class="commen_btn m-auto">Finish</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</template>

<script>
import axios from 'axios';
import { Link } from "@inertiajs/vue3";

export default {
    name: "WelcomeInvitedUser",
    components: { Link },
    props: {
        authUser: Object,
        child: Object,
        pakageId: Number,
    },
    data() {
        return {

        };
    },
    methods: {
        logout() {
            this.$inertia.post(route("logout"));
        },
    },
    mounted() {
        // Pre-select the first answer for each question
    },
};
</script>

<style scoped>
.congo_special .congratulation {
    padding-left: 25px;
}

.congo_special {
    z-index: 999;
}

.quiz-completed .no-cartoon:after,
.quiz-completed .no-cartoon:before {
    background-image: none;
}
</style>
