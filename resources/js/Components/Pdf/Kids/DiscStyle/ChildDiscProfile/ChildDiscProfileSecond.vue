<template>
    <div class="p-4 md:p-6">
        <div class="container mx-auto p-4 mt-3"></div>

        <div v-if="style == 'C'" class="disc-scores-summary p-6 rounded-lg">
            <div class="primary-style mb-6">
                <h3 class="text-3xl font-bold mb-4">
                    Primary Style: Cautious (C)
                </h3>
                <p class="text-lg">
                    Based on the assessment,
                    <strong> {{ childName }} </strong>’s primary DISC style is
                    <strong>Cautious (C)</strong>. This means that
                    <strong> {{ childName }} </strong> tends to be thoughtful,
                    detail-oriented, and analytical. Children with a Cautious
                    style prefer environments where they can work quietly, focus
                    on details, and think things through carefully.
                </p>
            </div>
        </div>

        <!-- For CD Style Type -->
        <div id="CD" v-if="style == 'CD'">
            <div class="p-6 space-y-6">

                <!-- Primary Style Section -->
                <div class="mt-4 p-4 rounded-md">
                    <h3 class="text-3xl font-bold mb-4 text-blue-800">
                        Primary Style: Cautious-Dominant (CD)
                    </h3>
                    <p class="mt-2">
                        Based on the assessment,
                        <span class="font-semibold"> {{ childName }} </span>’s
                        primary DISC style is
                        <span class="font-semibold">Cautious-Dominant (CD)</span
                        >. This means that
                        <span class="font-semibold"> {{ childName }} </span> is
                        careful and precise, and also enjoys taking charge and
                        leading others.
                    </p>
                    <p class="mt-2">
                        Children with a Cautious-Dominant style are
                        detail-oriented and strong leaders who thrive in
                        structured environments and excel at problem-solving and
                        guiding others.
                    </p>
                </div>
            </div>
        </div>

        <!-- For CS Style Type -->
        <div id="CS" v-if="style == 'CS'">
            <div class="max-w-4xl">


                <!-- Primary Style -->
                <div>
                    <h2 class="text-2xl font-bold mb-4">
                        Primary Style: Cautious-Supportive (CS)
                    </h2>
                    <p class="mb-4">
                        Based on the assessment,
                        <span class="font-semibold"> {{ childName }} </span>’s
                        primary DISC style is
                        <span class="text-blue-500 font-semibold"
                            >Cautious-Supportive (CS)</span
                        >. This means that
                        <span class="font-semibold"> {{ childName }} </span> is
                        careful, reliable, and always ready to help others.
                    </p>
                    <p class="">
                        Children with a
                        <span class="font-semibold">Cautious-Supportive</span>
                        style are detail-oriented and supportive individuals who
                        thrive in calm environments and enjoy making sure tasks
                        are completed accurately and everyone feels considered.
                    </p>
                </div>
            </div>
        </div>

        <!-- For D Style Type -->
        <div id="D" v-if="style == 'D'">
            <div class="p-6">

                <h2 class="text-2xl font-bold mt-6 mb-4">
                    Primary Style: Dominant (D)
                </h2>
                <p class="text-lg">
                    Based on the assessment, {{ childName }} ’s primary DISC
                    style is Dominant (D). This means that {{ childName }} tends
                    to be confident, decisive, and energetic. Children with a
                    Dominant style are natural leaders and enjoy taking charge
                    of situations.
                </p>
            </div>
        </div>

        <!-- For DC Style Type -->
        <div id="DC" v-if="style == 'DC'">
            <div class="">

                <h2 class="mt-6 text-3xl font-bold mb-4">
                    Primary Style: Dominant-Cautious (DC)
                </h2>
                <p class="mt-4">
                    Based on the assessment, {{ childName }} ’s primary DISC
                    style is Dominant-Cautious (DC). This means that
                    {{ childName }} tends to be confident, detail-oriented, and
                    focused on doing things right. Children with a
                    Dominant-Cautious style are natural leaders who enjoy taking
                    charge and making sure everything is perfect.
                </p>
            </div>
        </div>

        <!-- For DI Style Type -->
        <div id="DI" v-if="style == 'DI'">
            <div class="p-4 space-y-6">


                <!-- Primary Style -->
                <div>
                    <h2 class="text-3xl font-bold mb-4">
                        Primary Style: Dominant-Influential (DI)
                    </h2>
                    <p class="">
                        Based on the assessment, {{ childName }} ’s primary DISC
                        style is Dominant-Influential (DI). This means that
                        {{ childName }} tends to be a confident leader who
                        enjoys being around people and interacting with others.
                    </p>
                    <p class="">
                        Children with a Dominant-Influential style are natural
                        leaders who thrive in social environments.
                    </p>
                </div>
            </div>
        </div>

        <!-- For I Style Type -->
        <div id="I" v-if="style == 'I'">
            <div class="space-y-6">


                <h3 class="text-3xl font-bold mb-4">
                    Primary Style: Influential (I)
                </h3>
                <p class="text-base">
                    Based on the assessment,
                    <span class="font-bold"> {{ childName }} </span>’s primary
                    DISC style is Influential (I). This means that
                    <span class="font-bold"> {{ childName }} </span> is
                    naturally outgoing, enthusiastic, and loves interacting with
                    others. Children with an Influential style are excellent
                    communicators and thrive in social settings.
                </p>
            </div>
        </div>

        <!-- For ID Style Type -->
        <div id="ID" v-if="style == 'ID'">


            <div class="mt-6">
                <p class="text-3xl font-bold mb-4">
                    Primary Style: Influential-Dominant (ID)
                </p>
                <p class="text-base mt-2">
                    Based on the assessment, {{ childName }} ’s primary DISC
                    style is Influential-Dominant (ID). This means that
                    {{ childName }} is outgoing, enthusiastic, and loves to take
                    charge. Children with an Influential-Dominant style are
                    natural leaders who thrive in social settings and enjoy
                    inspiring and motivating others.
                </p>
            </div>
        </div>

        <!-- For IS Style Type -->
        <div id="IS" v-if="style == 'IS'">
            <div class="p-6 space-y-6">


                <h2 class="text-3xl font-bold mb-4">
                    Primary Style: Influential-Supportive (IS)
                </h2>
                <p class="text-md mt-2">
                    Based on the assessment, {{ childName }} ’s primary DISC
                    style is Influential-Supportive (IS). This means that
                    {{ childName }} is friendly, enthusiastic, and enjoys
                    helping others. Children with an Influential-Supportive
                    style are natural communicators who thrive in social
                    settings and are always ready to lend a hand.
                </p>
            </div>
        </div>

        <!-- For S Style Type -->
        <div id="S" v-if="style == 'S'">
            <div class="p-6 space-y-6">


                <!-- Primary Style -->
                <div class="space-y-4">
                    <h3 class="text-3xl font-bold mb-4">
                        Primary Style: Supportive (S)
                    </h3>
                    <p>
                        Based on the assessment,
                        <span class="font-bold"> {{ childName }} </span>'s
                        primary DISC style is <strong>Supportive (S)</strong>.
                        This means that
                        <span class="font-bold"> {{ childName }} </span> tends
                        to be caring, dependable, and enjoys helping others.
                        Children with a Supportive style are natural team
                        players and value cooperation and harmony in their
                        interactions.
                    </p>
                </div>
            </div>
        </div>

        <!-- For SC Style Type -->
        <div id="SC" v-if="style == 'SC'">
            <div class="p-6">


                <h3 class="text-3xl font-bold mb-4 mb-4">
                    Primary Style: Supportive-Cautious (SC)
                </h3>
                <p class="mb-6">
                    Based on the assessment, {{ childName }} ’s primary DISC
                    style is Supportive-Cautious (SC). This means that
                    {{ childName }} is thoughtful, reliable, and loves to help
                    others. Children with a Supportive-Cautious style are
                    careful and supportive individuals who thrive in calm
                    environments and enjoy making sure everyone feels considered
                    and respected.
                </p>
            </div>
        </div>

        <!-- For SI Style Type -->
        <div id="SI" v-if="style == 'SI'">
            <div class="space-y-6">
                <h3 class="text-3xl font-bold mb-4">
                    Primary Style: Supportive-Influential (SI)
                </h3>
                <p class="text-base">
                    Based on the assessment, {{ childName }} ’s primary DISC
                    style is Supportive-Influential (SI). This means that
                    {{ childName }} is kind, friendly, and loves to help others.
                    Children with a Supportive-Influential style are natural
                    helpers who thrive in social settings and enjoy making sure
                    everyone feels included and appreciated.
                </p>
            </div>
        </div>
    </div>
</template>

<style>
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
div.space-y-2 > h4.font-medium,
span.font-bold {
    color: rgb(36, 168, 250);
    font-weight: bold;
    color: #fa25c4;
    /* font-size: 19px; */
}

h2,
.p-6 > .row > .col-6 > h2,
h3,
p.text-3xl {
    color: rgb(55 48 163);
    font-weight: bold !important;
}
.list-none {
    list-style-type: none;
}
p,
ul > li,
.text-base {
    font-size: 1.125rem;
    line-height: 1.75rem;
}
ul > li {
    margin-top: 13px;
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

    h2,
    h3 {
        font-size: 1.5rem !important;
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
    name: "ChildDiscProfileSecond",
    layout: AssessmentTypes,
    props: {
        childName: String,
        style: String,
        image: String,
        discScores: Object,
    },
    data() {
        return {};
    },
};
</script>
