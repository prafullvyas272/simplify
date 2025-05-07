<template>
    <div class="p-6">
        <div class="p-6">
            <div class="mx-auto">
                <h1 class="font-bold mb-4 text-center">Parental Insights</h1>
            </div>
            <div v-if="style == 'C'" class="space-y-8">
                <!-- DISC Overview Section -->
                <div class="rounded-lg">
                    <div class="flex justify-center items-center mb-4">
                        <img
                            class="w-120 h-auto object-contain"
                            :src="'/images/reports-svg-images/Page 28a.svg'"
                            alt=""
                        />
                    </div>

                    <h4 class="text-3xl font-bold mb-2">
                        Understanding Your DISC Style as a Parent
                    </h4>
                    <p class="mb-4">
                        As a parent, your DISC style significantly impacts how
                        you interact with your child and approach parenting.
                        Understanding your own style can help you communicate
                        more effectively and support your child’s development.
                        Here’s a brief overview of the four DISC styles:
                    </p>
                    <div class="space-y-4 ml-3">
                        <div class="flex justify-center items-center mb-4">
                            <img
                                class="w-120 h-auto object-contain"
                                :src="'/images/reports-images/parental-insight-kids.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                    <p>
                        If you have a mixed style, please refer to each section
                        that corresponds to your blend.
                    </p>
                    <p>
                        If you do not know your style, please
                        <a href="https://www.useunify.com/adults-assessment"
                            >click here to take our Adult Assessment!</a
                        >
                    </p>
                </div>
            </div>

            <!-- For CD Style Type -->
            <div id="CD" v-if="style == 'CD'">
                <div class="rounded-lg">
                    <h4 class="text-3xl font-bold mb-4">
                        Understanding Your DISC Style as a Parent
                    </h4>
                    <p class="text-md mb-4">
                        As a parent, your DISC style significantly impacts how
                        you interact with your child and approach parenting.
                        Understanding your own style can help you communicate
                        more effectively and support your child’s development.
                        Here’s a brief overview of the four DISC styles:
                    </p>

                    <div class="space-y-4 ml-3">
                        <div class="flex justify-center items-center mb-4">
                            <img
                                class="w-120 h-auto object-contain"
                                :src="'/images/reports-images/parental-insight-kids.svg'"
                                alt=""
                            />
                        </div>
                    </div>

                    <p class="text-md mb-4">
                        If you have a mixed style, please refer to each section
                        that corresponds to your blend.
                    </p>
                    <p>
                        If you do not know your style, please
                        <a href="https://www.useunify.com/adults-assessment"
                            >click here to take our Adult Assessment!</a
                        >
                    </p>
                </div>
            </div>

            <!-- For CS Style Type -->
            <div v-if="style == 'CS'" class="space-y-8">
                <!-- DISC Overview Section -->
                <div class="rounded-lg">
                    <div class="flex justify-center items-center mb-4">
                        <img
                            class="w-120 h-auto object-contain"
                            :src="'/images/reports-svg-images/Page 28a.svg'"
                            alt=""
                        />
                    </div>

                    <h4 class="text-3xl font-bold mb-2">
                        Understanding Your DISC Style as a Parent
                    </h4>
                    <p class="mb-4">
                        As a parent, your DISC style significantly impacts how
                        you interact with your child and approach parenting.
                        Understanding your own style can help you communicate
                        more effectively and support your child’s development.
                        Here’s a brief overview of the four DISC styles:
                    </p>
                    <div class="space-y-4 ml-3">
                        <div class="flex justify-center items-center mb-4">
                            <img
                                class="w-120 h-auto object-contain"
                                :src="'/images/reports-images/parental-insight-kids.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                    <p>
                        If you have a mixed style, please refer to each section
                        that corresponds to your blend.
                    </p>
                    <p>
                        If you do not know your style, please
                        <a href="https://www.useunify.com/adults-assessment"
                            >click here to take our Adult Assessment!</a
                        >
                    </p>
                </div>


            </div>

            <!-- For D Style Type -->
            <div id="D" v-if="style == 'D'">
                <h4 class="font-semibold">
                    Understanding Your DISC Style as a Parent
                </h4>
                <p>
                    As a parent, your DISC style significantly impacts how you
                    interact with your child and approach parenting.
                    Understanding your own style can help you communicate more
                    effectively and support your child’s development. Here’s a
                    brief overview of the four DISC styles:
                </p>

                <div class="flex justify-center items-center mb-4">
                    <img
                        class="w-120 h-auto object-contain"
                        :src="'/images/reports-images/parental-insight-kids.svg'"
                        alt=""
                    />
                </div>

                <p>
                    If you have a mixed style, please refer to each section that
                    corresponds to your blend.
                </p>

                <p>
                    If you do not know your style, please
                    <a href="https://www.useunify.com/adults-assessment"
                        >click here to take our Adult Assessment!</a
                    >
                </p>

            </div>

            <!-- For DC Style Type -->
            <div id="DC" v-if="style == 'DC'">
                <div class="space-y-6">
                    <div>
                        <h4 class="text-md font-semibold">
                            Understanding Your DISC Style as a Parent
                        </h4>
                        <p>
                            As a parent, your DISC style significantly impacts
                            how you interact with your child and approach
                            parenting. Understanding your own style can help you
                            communicate more effectively and support your
                            child’s development. Here’s a brief overview of the
                            four DISC styles:
                        </p>
                        <div class="flex justify-center items-center mb-4">
                            <img
                                class="w-120 h-auto object-contain"
                                :src="'/images/reports-images/parental-insight-kids.svg'"
                                alt=""
                            />
                        </div>
                        <p>
                            If you have a mixed style, please refer to each
                            section that corresponds to your blend.
                        </p>
                        <p>
                            If you do not know your style, please
                            <a href="https://www.useunify.com/adults-assessment"
                                >click here to take our Adult Assessment!</a
                            >
                        </p>
                    </div>


                </div>
            </div>

            <!-- For DI Style Type -->
            <div id="DI" v-if="style == 'DI'">
                <div class="space-y-6 mt-4">
                    <h4 class="font-semibold text-indigo-600">
                        Understanding Your DISC Style as a Parent
                    </h4>

                    <p>
                        As a parent, your DISC style significantly impacts how
                        you interact with your child and approach parenting.
                        Understanding your own style can help you communicate
                        more effectively and support your child’s development.
                        Here’s a brief overview of the four DISC styles:
                    </p>

                    <div class="space-y-4 ml-3">
                        <div class="flex justify-center items-center mb-4">
                            <img
                                class="w-120 h-auto object-contain"
                                :src="'/images/reports-images/parental-insight-kids.svg'"
                                alt=""
                            />
                        </div>
                    </div>

                    <p>
                        If you have a mixed style, please refer to each section
                        that corresponds to your blend.
                    </p>
                    <p>
                        If you do not know your style, please
                        <a href="https://www.useunify.com/adults-assessment"
                            >click here to take our Adult Assessment!</a
                        >
                    </p>

                </div>
            </div>

            <!-- For I Style Type -->
            <div id="I" v-if="style == 'I'">
                <div class="space-y-6">
                    <div class="pl-4">
                        <h4 class="text-3xl font-semibold">
                            Understanding Your DISC Style as a Parent
                        </h4>
                        <p class="pl-4">
                            As a parent, your DISC style significantly impacts
                            how you interact with your child and approach
                            parenting. Understanding your own style can help you
                            communicate more effectively and support your
                            child’s development.
                        </p>
                        <p class="pl-4">
                            Here’s a brief overview of the four DISC styles:
                        </p>
                    </div>

                    <div class="space-y-4 ml-3">
                        <div class="flex justify-center items-center mb-4">
                            <img
                                class="w-120 h-auto object-contain"
                                :src="'/images/reports-images/parental-insight-kids.svg'"
                                alt=""
                            />
                        </div>
                    </div>

                    <div class="pl-4">
                        <p class="pl-4">
                            If you have a mixed style, please refer to each
                            section that corresponds to your blend.
                        </p>
                    </div>

                    <div class="pl-4">
                        <p class="text-blue-600 pl-4">
                            <a href="https://www.useunify.com/adults-assessment"
                                >If you do not know your style, please click
                                here to take our Adult Assessment!</a
                            >
                        </p>
                    </div>

                </div>
            </div>

            <!-- For ID Style Type -->
            <div id="ID" v-if="style == 'ID'">
                <div class="space-y-6">
                    <div class="flex flex-col space-y-4 ml-3">
                        <h4 class="text-3xl font-bold mb-2">
                            Understanding Your DISC Style as a Parent
                        </h4>
                        <p class="text-sm">
                            As a parent, your DISC style significantly impacts
                            how you interact with your child and approach
                            parenting. Understanding your own style can help you
                            communicate more effectively and support your
                            child’s development. Here’s a brief overview of the
                            four DISC styles:
                        </p>

                        <!-- DISC Styles Overview -->
                        <div class="space-y-4 ml-3">
                            <div class="flex justify-center items-center mb-4">
                                <img
                                    class="w-120 h-auto object-contain"
                                    :src="'/images/reports-images/parental-insight-kids.svg'"
                                    alt=""
                                />
                            </div>
                        </div>

                        <p class="text-sm">
                            If you have a mixed style, please refer to each
                            section that corresponds to your blend.
                        </p>
                        <p>
                            If you do not know your style, please
                            <a href="https://www.useunify.com/adults-assessment"
                                >click here to take our Adult Assessment!</a
                            >
                        </p>

                    </div>
                </div>
            </div>

            <!-- For IS Style Type -->
            <div id="IS" v-if="style == 'IS'">
                <div class="p-3">
                    <h4 class="text-3xl font-bold mb-4">
                        Understanding Your DISC Style as a Parent
                    </h4>

                    <p class="mb-4">
                        As a parent, your DISC style significantly impacts how
                        you interact with your child and approach parenting.
                        Understanding your own style can help you communicate
                        more effectively and support your child’s development.
                        Here’s a brief overview of the four DISC styles:
                    </p>

                    <div class="space-y-4 ml-3">
                        <div class="flex justify-center items-center mb-4">
                            <img
                                class="w-120 h-auto object-contain"
                                :src="'/images/reports-images/parental-insight-kids.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                    <p class="mt-4 mb-4">
                        If you have a mixed style, please refer to each section
                        that corresponds to your blend.
                    </p>
                    <p>
                        If you do not know your style, please
                        <a href="https://www.useunify.com/adults-assessment"
                            >click here to take our Adult Assessment!</a
                        >
                    </p>


                </div>
            </div>

            <!-- For S Style Type -->
            <div id="S" v-if="style == 'S'">
                <div class="space-y-6">
                    <h4 class="text-md font-semibold text-indigo-600">
                        Understanding Your DISC Style as a Parent
                    </h4>
                    <p class="text-base">
                        As a parent, your DISC style significantly impacts how
                        you interact with your child and approach parenting.
                        Understanding your own style can help you communicate
                        more effectively and support your child’s development.
                        Here’s a brief overview of the four DISC styles:
                    </p>
                    <p>
                        If you have a mixed style, please refer to each section
                        that corresponds to your blend.
                    </p>
                    <p>
                        If you do not know your style, please
                        <a href="https://www.useunify.com/adults-assessment"
                            >click here to take our Adult Assessment!</a
                        >
                    </p>
                    <div class="space-y-4 ml-3">
                        <div class="flex justify-center items-center mb-4">
                            <img
                                class="w-120 h-auto object-contain"
                                :src="'/images/reports-images/parental-insight-kids.svg'"
                                alt=""
                            />
                        </div>
                    </div>


                </div>
            </div>

            <!-- For SC Style Type -->
            <div id="SC" v-if="style == 'SC'">
                <div class="space-y-6">
                    <div class=" ">
                        <h4 class="text-2xl font-semibold">
                            Understanding Your DISC Style as a Parent
                        </h4>
                        <p>
                            Your DISC style significantly impacts how you
                            interact with your child and approach parenting.
                            Understanding your own style can help you
                            communicate more effectively and support your
                            child’s development. Here’s a brief overview of the
                            four DISC styles:
                        </p>
                        <div class="flex justify-center items-center mb-4">
                            <img
                                class="w-120 h-auto object-contain"
                                :src="'/images/reports-images/parental-insight-kids.svg'"
                                alt=""
                            />
                        </div>
                        <p>
                            If you have a mixed style, please refer to each
                            section that corresponds to your blend.
                        </p>
                        <p>
                            If you do not know your style, please
                            <a href="https://www.useunify.com/adults-assessment"
                                >click here to take our Adult Assessment!</a
                            >
                        </p>
                    </div>


                </div>
            </div>

            <!-- For SC Style Type -->
            <div id="SI" v-if="style == 'SI'">
                <div class="space-y-6">
                    <div class=" ">
                        <h2 class="font-semibold">
                            Understanding Your DISC Style as a Parent
                        </h2>
                        <p>
                            As a parent, your DISC style significantly impacts
                            how you interact with your child and approach
                            parenting. Understanding your own style can help you
                            communicate more effectively and support your
                            child’s development. Here’s a brief overview of the
                            four DISC styles:
                        </p>
                        <div class="flex justify-center items-center mb-4">
                            <img
                                class="w-120 h-auto object-contain"
                                :src="'/images/reports-images/parental-insight-kids.svg'"
                                alt=""
                            />
                        </div>
                        <p>
                            If you have a mixed style, please refer to each
                            section that corresponds to your blend.
                        </p>
                        <p>
                            If you do not know your style, please
                            <a href="https://www.useunify.com/adults-assessment"
                                >click here to take our Adult Assessment!</a
                            >
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
/* Add styles here */
/* h2, h2, h2, h4 {
color: rgb(55 48 163 );
font-weight: bold !important;
} */
div.col-6 > h4.font-medium,
li > div > h4,
div.space-y-2 > h4.font-medium {
    color: rgb(36, 168, 250);
    font-weight: bold;
    font-size: 19px;
}

div.col-6 > h4.font-medium,
li > div > h4,
strong,
span,
b,
div.space-y-2 > h4.font-medium {
    color: rgb(36, 168, 250);
    font-weight: bold;
    color: #fa25c4;
    /* font-size: 19px; */
}

h2,
h4,
.p-6 > .row > .col-6 > h2 {
    color: rgb(55 48 163);
    font-weight: bold !important;
}

h4 {
    color: rgb(55 48 163);
    font-weight: bold !important;
}

.blueheading {
    color: rgb(55 48 163);
    font-size: 21px;
}

ul.list-none > li,
div.space-y-2,
ul.mt-2.list-none.pl-5.space-y-2 > li {
    margin-top: 50px;
    /* margin-bottom: 2px; */
}

ul > li {
    /* margin-top: 20px; */
}

p,
ul > li,
ol > li,
strong,
.text-base {
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
    strong {
        font-size: 1rem !important;
    }

    h2,
    h3,
    h4 {
        font-size: 1.25rem !important;
    }

    /* Adjust image container on mobile */
    .col-6 .flex.justify-center.items-center {
        margin: 1rem 0;
    }

    /* Adjust spacing between sections */
    .row + .row {
        margin-top: 1rem;
    }

    ul.list-disc {
        padding-left: 1rem;
    }
}
</style>

<script>
import AssessmentTypes from "@/Layouts/AssessmentTypes.vue";

export default {
    name: "ParentalInsightFirst",
    layout: AssessmentTypes,
    props: {
        style: String,
        childName: String,
        image: String,
    },
};
</script>
