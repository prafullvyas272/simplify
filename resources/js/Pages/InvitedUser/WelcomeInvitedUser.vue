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
                            <h2>You've successfully logged in!</h2>
                            <p></p>
                            <p>Click on the pay now button below to take the assessments.
                            </p>
                            <!-- <a href="" class="commen_btn m-auto">Finish</a> -->
                            <div class="buttons-profile">
                                <!-- <a :href="route('profile.download_report')" class="commen_btn m-auto">Finish</a> -->
                                <a class="commen_btn m-auto"
                                    :href="route('assessments.pay', { id: child.id, user_id: authUser.id, pakage_id: pakageId })">
                                        Pay Now
                                </a>

                            </div>
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
