<template>
    <div class="flex flex-col justify-center items-center mt-4 px-4">
        <div class="w-full relative mb-10 text-center">
            <h1 class="text-3xl sm:text-5xl font-bold">Welcome</h1>
            <div class="absolute right-0 top-1/2 transform -translate-y-1/2 hidden sm:block">
                <Button @click="downloadPdf">Download PDF</Button>
            </div>
            <div class="block sm:hidden mt-4">
                <Button @click="downloadPdf">Download PDF</Button>
            </div>
        </div>
    </div>
    <div class="p-6 pt-0">
        <div class="row p-6">
            <div class="col-6">
                <p class="mb-4">
                    Thank you for taking the next step in learning more about your child’s personality. As children
                    grow, they begin to show clearer patterns in how they think, behave, and connect with the world
                    around them.
                </p>
                <p class="mb-4">
                    Understanding these patterns can help parents and caregivers support them in ways that
                    feel natural, effective, and encouraging.
                </p>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain" :src="'/images/second-term/kids-disc-images/3.png'"
                        alt="" />
                </div>
            </div>
        </div>

        <div class="row mt-4 p-6">
            <div class="col-6 flex justify-center items-center">
                <img class="w-64 h-auto object-contain" :src="'/images/second-term/kids-disc-images/4.png'" alt="" />
            </div>
            <div class="col-6">
                <p class="mb-4">
                    This report is designed to give you insight into your child’s personality style - what motivates
                    them, how they relate to others, and where they may need extra support.
                </p>
                <p>
                    While every child is different, recognising certain tendencies can help you respond with more
                    clarity and confidence.
                </p>
            </div>
        </div>

        <div class="my-4">
            <p>
                Whether at home, in school, or out with friends, your child is always learning. Our goal is to
                provide you with thoughtful ideas, helpful language, and practical tips to guide them as they
                continue to grow.
            </p>
            <div class="flex justify-center items-center">
                <img class="w-90 h-auto object-contain" :src="'/images/second-term/kids-disc-images/5.png'" alt="" />
            </div>
        </div>

    </div>
</template>


<style>
/* Add styles here */
/* h1, h2, h2, h4 {
    color: rgb(55 48 163 );
    font-weight: bold !important;
} */
div.col-6>h4.font-medium,
li>div>h4,
div.space-y-2>h4.font-medium {
    color: rgb(36, 168, 250);
    font-weight: bold;
    font-size: 19px;
}

div.col-6>h4.font-medium,
li>div>h4,
strong,
div.space-y-2>h4.font-medium {
    color: rgb(36, 168, 250);
    font-weight: bold;
    color: #fa25c4;
    /* font-size: 19px; */
}

h2,
.p-6>.row>.col-6>h2 {
    color: rgb(55 48 163);
    font-weight: bold !important;
}

ul>li {
    margin-top: 17px;
}

p,
ul>li {
    font-size: 1.125rem;
    line-height: 1.75rem;
}

/* Add these new mobile responsive styles */
@media (max-width: 768px) {
    .row {
        display: flex;
        flex-direction: column;
    }

    .row:nth-of-type(2) {
        flex-direction: column-reverse;
    }

    .col-6 {
        width: 100%;
        margin-bottom: 2rem;
    }

    .p-6 {
        padding: 1rem;
    }

    h2 {
        font-size: 1.5rem !important;
    }

    /* Adjust image container on mobile */
    .col-6 .flex.justify-center.items-center {
        margin: 1rem 0;
    }

    /* Adjust spacing between sections */
    .row+.row {
        margin-top: 1rem;
    }

    ul.list-disc {
        padding-left: 1rem;
    }
}
</style>

<script>
import SecondTermAssessmentTypes from '@/Layouts/SecondTermAssessmentTypes.vue';
import Button from "@/shadcn/ui/button/Button.vue";

export default {
    name: "Welcome",
    components: { Button },
    layout: SecondTermAssessmentTypes,
    props: {
        childName: String,
        style: String,
        image: String,
    },
    methods: {
        downloadPdf() {

        }
    }
};

</script>