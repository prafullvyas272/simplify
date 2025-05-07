<template>
    <div class="p-4 md:p-6">
        <div class="container mx-auto p-4 mt-3">
            <h1 class="font-bold mb-4 text-center">
                Your Child's DISC Profile
            </h1>
        </div>
        <div class="flex justify-center items-center">
            <img
                class="w-120 h-auto object-contain"
                @error="$event.target.src = '/images/default/placeholder.png'"
                :src="'/images/reports-svg-images/Page16.svg'"
                alt=""
            />
        </div>

        <div v-if="style == 'C'" class="disc-scores-summary p-6 rounded-lg">
            <h2 class="text-3xl font-bold mb-4">Summary of Scores</h2>
            <h2 class="text-3xl font-bold mb-4 mb-4">
                {{ childName }} ’s DISC Scores
            </h2>

            <div class="scores-intro mb-6">
                <p class="text-lg">
                    Here is a summary of your child’s scores in the four DISC
                    styles. This visual representation will help you understand
                    which styles are most dominant in your child’s behavior.
                </p>
                <ul class="list-none list-inside text-lg mt-4">
                    <li>
                        <strong>Dominant (D):</strong> {{ parsedDiscScores.D }}
                    </li>
                    <li>
                        <strong>Influential (I):</strong>
                        {{ parsedDiscScores.I }}
                    </li>
                    <li>
                        <strong>Supportive (S):</strong>
                        {{ parsedDiscScores.S }}
                    </li>
                    <li>
                        <strong>Cautious (C):</strong> {{ parsedDiscScores.C }}
                    </li>
                </ul>
                <Chart type="bar" :data="chart_data" :options="chart_options" />
            </div>

            <div class="graph-description mb-6">
                <p class="text-lg">
                    The graphs above display the levels of
                    <strong> {{ childName }} </strong>'s Dominant (D),
                    Influential (I), Supportive (S), and Cautious (C)
                    personality traits. The higher the level of each trait, the
                    stronger it is in <strong> {{ childName }} </strong>.
                </p>
            </div>

            <div class="growth-dynamics mb-6">
                <p class="text-lg">
                    It’s important to remember that as children grow, they often
                    explore different behaviors. This report provides valuable
                    insights into <strong> {{ childName }} </strong>'s
                    personality dynamics. You may notice that
                    <strong> {{ childName }} </strong> shows different traits in
                    various situations, which is completely normal. By
                    recognising these behavior patterns, you can interact with
                    <strong> {{ childName }} </strong> more effectively.
                </p>
            </div>

        </div>

        <!-- For CD Style Type -->
        <div id="CD" v-if="style == 'CD'">
            <div class="p-6 space-y-6">
                <!-- Header Section -->
                <h2 class="text-3xl font-bold mb-4">Summary of Scores</h2>
                <p class="">
                    <span class="font-semibold">
                        {{ childName }} ’s DISC Scores:</span
                    >
                    Here is a summary of your child’s scores in the four DISC
                    styles. This visual representation will help you understand
                    which styles are most dominant in your child’s behavior.
                </p>

                <!-- Scores Section -->
                <div class="space-y-2">
                    <ul class="list-none list-inside text-lg mt-4">
                        <li>
                            <strong>Dominant (D):</strong>
                            {{ parsedDiscScores.D }}
                        </li>
                        <li>
                            <strong>Influential (I):</strong>
                            {{ parsedDiscScores.I }}
                        </li>
                        <li>
                            <strong>Supportive (S):</strong>
                            {{ parsedDiscScores.S }}
                        </li>
                        <li>
                            <strong>Cautious (C):</strong>
                            {{ parsedDiscScores.C }}
                        </li>
                    </ul>
                    <Chart
                        type="bar"
                        :data="chart_data"
                        :options="chart_options"
                    />
                </div>

                <!-- Explanation Section -->
                <div class="mt-4">
                    <p class="">
                        The graphs above display the levels of
                        <span class="font-semibold"> {{ childName }} </span>'s
                        Dominant (D), Influential (I), Supportive (S), and
                        Cautious (C) personality traits. The higher the level of
                        each trait, the stronger it is in
                        <span class="font-semibold"> {{ childName }} </span>.
                    </p>
                    <p class="mt-2">
                        It’s important to remember that as children grow, they
                        often explore different behaviors. This report provides
                        valuable insights into
                        <span class="font-semibold"> {{ childName }} </span>'s
                        personality dynamics. You may notice that
                        <span class="font-semibold"> {{ childName }} </span>
                        shows different traits in various situations, which is
                        completely normal. By recognising these behavior
                        patterns, you can interact with
                        <span class="font-semibold"> {{ childName }} </span>
                        more effectively.
                    </p>
                </div>


            </div>
        </div>

        <!-- For CS Style Type -->
        <div id="CS" v-if="style == 'CS'">
            <div class="max-w-4xl">
                <!-- Summary of Scores -->
                <div>
                    <h2 class="text-3xl font-bold mb-4 mb-4">
                        Summary of Scores
                    </h2>
                    <p class="mb-4">
                        <span class="font-semibold">
                            {{ childName }} ’s DISC Scores:</span
                        >
                    </p>
                    <ul class="list-none space-y-2">
                        <li>
                            <span class="font-semibold">Dominant (D):</span>
                            {{ parsedDiscScores.D }}
                        </li>
                        <li>
                            <span class="font-semibold">Influential (I):</span>
                            {{ parsedDiscScores.I }}
                        </li>
                        <li>
                            <span class="font-semibold">Supportive (S):</span>
                            {{ parsedDiscScores.S }}
                        </li>
                        <li>
                            <span class="font-semibold">Cautious (C):</span>
                            {{ parsedDiscScores.C }}
                        </li>
                        <Chart
                            type="bar"
                            :data="chart_data"
                            :options="chart_options"
                        />
                    </ul>
                    <p class="mt-4">
                        The graphs above display the levels of
                        <span class="font-semibold"> {{ childName }} </span>'s
                        Dominant (D), Influential (I), Supportive (S), and
                        Cautious (C) personality traits. The higher the level of
                        each trait, the stronger it is in
                        <span class="font-semibold"> {{ childName }} </span>.
                    </p>
                    <p class="mt-4">
                        It’s important to remember that as children grow, they
                        often explore different behaviours. This report provides
                        valuable insights into
                        <span class="font-semibold"> {{ childName }} </span>'s
                        personality dynamics. You may notice that
                        <span class="font-semibold"> {{ childName }} </span>
                        shows different traits in various situations, which is
                        completely normal. By recognising these behaviour
                        patterns, you can interact with
                        <span class="font-semibold"> {{ childName }} </span>
                        more effectively.
                    </p>
                </div>

            </div>
        </div>

        <!-- For D Style Type -->
        <div id="D" v-if="style == 'D'">
            <div class="p-6">
                <h2 class="text-3xl font-bold mb-4">Summary of Scores</h2>
                <p class="text-lg mb-4">{{ childName }} ’s DISC Scores:</p>
                <ul class="list-none space-y-2">
                    <li><b>Dominant (D):</b> {{ parsedDiscScores.D }}</li>
                    <li><b>Influential (I):</b> {{ parsedDiscScores.I }}</li>
                    <li><b>Supportive (S):</b> {{ parsedDiscScores.S }}</li>
                    <li><b>Cautious (C):</b> {{ parsedDiscScores.C }}</li>
                </ul>
                <Chart type="bar" :data="chart_data" :options="chart_options" />

                <p class="mt-4 text-lg">
                    The graphs above display the levels of {{ childName }} 's
                    Dominant (D), Influential (I), Supportive (S), and Cautious
                    (C) personality traits. The higher the level of each trait,
                    the stronger it is in {{ childName }} .
                </p>
                <p class="mt-4 text-lg">
                    It’s important to remember that as children grow, they often
                    explore different behaviours. This report provides valuable
                    insights into {{ childName }} 's personality dynamics. You
                    may notice that {{ childName }} shows different traits in
                    various situations, which is completely normal. By
                    recognising these behaviour patterns, you can interact with
                    {{ childName }} more effectively.
                </p>


            </div>
        </div>

        <!-- For DC Style Type -->
        <div id="DC" v-if="style == 'DC'">
            <div class="">
                <h2 class="text-3xl font-bold mb-4">Summary of Scores</h2>
                <p class="font-bold mb-4">{{ childName }} ’s DISC Scores:</p>
                <p>
                    Here is a summary of your child’s scores in the four DISC
                    styles. This visual representation will help you understand
                    which styles are most dominant in your child’s behaviour.
                </p>
                <h1 class="text-3xl font-bold mb-4 mb-6">
                    DISC Summary for {{ childName }}
                </h1>

                <div class="space-y-4">
                    <ul class="list-none list-inside text-lg mt-4">
                        <li>
                            <strong>Dominant (D):</strong>
                            {{ parsedDiscScores.D }}
                        </li>
                        <li>
                            <strong>Influential (I):</strong>
                            {{ parsedDiscScores.I }}
                        </li>
                        <li>
                            <strong>Supportive (S):</strong>
                            {{ parsedDiscScores.S }}
                        </li>
                        <li>
                            <strong>Cautious (C):</strong>
                            {{ parsedDiscScores.C }}
                        </li>
                    </ul>
                    <Chart
                        type="bar"
                        :data="chart_data"
                        :options="chart_options"
                    />
                </div>

                <p class="mt-6">
                    The graphs above display the levels of {{ childName }} 's
                    Dominant (D), Influential (I), Supportive (S), and Cautious
                    (C) personality traits. The higher the level of each trait,
                    the stronger it is in {{ childName }} .
                </p>

                <p class="mt-4">
                    It’s important to remember that as children grow, they often
                    explore different behaviours. This report provides valuable
                    insights into {{ childName }} 's personality dynamics. You
                    may notice that {{ childName }} shows different traits in
                    various situations, which is completely normal. By
                    recognising these behaviour patterns, you can interact with
                    {{ childName }} more effectively.
                </p>


            </div>
        </div>

        <!-- For DI Style Type -->
        <div id="DI" v-if="style == 'DI'">
            <div class="p-4 space-y-6">
                <!-- Summary of Scores -->
                <div>
                    <h2 class="text-3xl font-bold mb-4">Summary of Scores</h2>
                    <p class="">
                        <strong> {{ childName }} ’s DISC Scores:</strong>
                    </p>
                    <p class="">
                        Here is a summary of your child’s scores in the four
                        DISC styles. This visual representation will help you
                        understand which styles are most dominant in your
                        child’s behaviour.
                    </p>
                    <div class="space-y-2">
                        <ul class="list-none list-inside text-lg mt-4">
                            <li>
                                <strong>Dominant (D):</strong>
                                {{ parsedDiscScores.D }}
                            </li>
                            <li>
                                <strong>Influential (I):</strong>
                                {{ parsedDiscScores.I }}
                            </li>
                            <li>
                                <strong>Supportive (S):</strong>
                                {{ parsedDiscScores.S }}
                            </li>
                            <li>
                                <strong>Cautious (C):</strong>
                                {{ parsedDiscScores.C }}
                            </li>
                        </ul>
                        <Chart
                            type="bar"
                            :data="chart_data"
                            :options="chart_options"
                        />
                    </div>
                    <!-- TODOIMG -->
                    <p class="">
                        The graphs above display the levels of
                        {{ childName }} 's Dominant (D), Influential (I),
                        Supportive (S), and Cautious (C) personality traits. The
                        higher the level of each trait, the stronger it is in
                        {{ childName }} .
                    </p>
                    <p class="">
                        It’s important to remember that as children grow, they
                        often explore different behaviours. This report provides
                        valuable insights into {{ childName }} 's personality
                        dynamics. You may notice that {{ childName }} shows
                        different traits in various situations, which is
                        completely normal. By recognising these behaviour
                        patterns, you can interact with {{ childName }} more
                        effectively.
                    </p>
                </div>

            </div>
        </div>

        <!-- For I Style Type -->
        <div id="I" v-if="style == 'I'">
            <div class="space-y-6">
                <h2 class="text-3xl font-bold mb-4">Summary of Scores</h2>
                <p class="text-base">
                    <span class="font-bold"> {{ childName }} </span>’s DISC
                    Scores:
                </p>
                <p class="text-base">
                    Here is a summary of your child’s scores in the four DISC
                    styles. This visual representation will help you understand
                    which styles are most dominant in your child’s behavior.
                </p>

                <ul class="list-none space-y-2">
                    <ul class="list-none list-inside text-lg mt-4">
                        <li>
                            <strong>Dominant (D):</strong>
                            {{ parsedDiscScores.D }}
                        </li>
                        <li>
                            <strong>Influential (I):</strong>
                            {{ parsedDiscScores.I }}
                        </li>
                        <li>
                            <strong>Supportive (S):</strong>
                            {{ parsedDiscScores.S }}
                        </li>
                        <li>
                            <strong>Cautious (C):</strong>
                            {{ parsedDiscScores.C }}
                        </li>
                    </ul>
                    <Chart
                        type="bar"
                        :data="chart_data"
                        :options="chart_options"
                    />
                </ul>

                <p class="text-base">
                    The graphs above display the levels of
                    <span class="font-bold"> {{ childName }} </span>'s Dominant
                    (D), Influential (I), Supportive (S), and Cautious (C)
                    personality traits. The higher the level of each trait, the
                    stronger it is in
                    <span class="font-bold"> {{ childName }} </span>.
                </p>
                <p class="text-base">
                    It’s important to remember that as children grow, they often
                    explore different behaviors. This report provides valuable
                    insights into
                    <span class="font-bold"> {{ childName }} </span>'s
                    personality dynamics. You may notice that
                    <span class="font-bold"> {{ childName }} </span> shows
                    different traits in various situations, which is completely
                    normal. By recognising these behavior patterns, you can
                    interact with
                    <span class="font-bold"> {{ childName }} </span> more
                    effectively.
                </p>

            </div>
        </div>

        <!-- For ID Style Type -->
        <div id="ID" v-if="style == 'ID'">
            <div class="mt-4">
                <p class="text-3xl font-bold mb-4">Summary of Scores</p>
                <p class="text-base mt-2">{{ childName }} ’s DISC Scores:</p>
                <p class="text-base mt-2">
                    Here is a summary of your child’s scores in the four DISC
                    styles. This visual representation will help you understand
                    which styles are most dominant in your child’s behaviour.
                </p>
                <div class="mt-4">
                    <ul class="list-none list-inside text-lg mt-4">
                        <li>
                            <strong>Dominant (D):</strong>
                            {{ parsedDiscScores.D }}
                        </li>
                        <li>
                            <strong>Influential (I):</strong>
                            {{ parsedDiscScores.I }}
                        </li>
                        <li>
                            <strong>Supportive (S):</strong>
                            {{ parsedDiscScores.S }}
                        </li>
                        <li>
                            <strong>Cautious (C):</strong>
                            {{ parsedDiscScores.C }}
                        </li>
                    </ul>
                    <Chart
                        type="bar"
                        :data="chart_data"
                        :options="chart_options"
                    />
                </div>
            </div>

            <div class="mt-6">
                <p class="text-base">
                    The graphs above display the levels of {{ childName }} 's
                    Dominant (D), Influential (I), Supportive (S), and Cautious
                    (C) personality traits. The higher the level of each trait,
                    the stronger it is in {{ childName }} .
                </p>
                <p class="text-base mt-4">
                    It’s important to remember that as children grow, they often
                    explore different behaviours. This report provides valuable
                    insights into {{ childName }} 's personality dynamics. You
                    may notice that {{ childName }} shows different traits in
                    various situations, which is completely normal. By
                    recognising these behaviour patterns, you can interact with
                    {{ childName }} more effectively.
                </p>
            </div>


        </div>

        <!-- For IS Style Type -->
        <div id="IS" v-if="style == 'IS'">
            <div>
                <h2 class="text-3xl font-bold mb-4">Summary of Scores</h2>
                <p class="text-md mt-2">{{ childName }} ’s DISC Scores:</p>
                <p class="text-md mt-2">
                    Here is a summary of your child’s scores in the four DISC
                    styles. This visual representation will help you understand
                    which styles are most dominant in your child’s behaviour.
                </p>

                <ul class="list-none pl-5 mt-3">
                    <ul class="list-none list-inside text-lg mt-4">
                        <li>
                            <strong>Dominant (D):</strong>
                            {{ parsedDiscScores.D }}
                        </li>
                        <li>
                            <strong>Influential (I):</strong>
                            {{ parsedDiscScores.I }}
                        </li>
                        <li>
                            <strong>Supportive (S):</strong>
                            {{ parsedDiscScores.S }}
                        </li>
                        <li>
                            <strong>Cautious (C):</strong>
                            {{ parsedDiscScores.C }}
                        </li>
                    </ul>
                    <Chart
                        type="bar"
                        :data="chart_data"
                        :options="chart_options"
                    />
                </ul>

                <p class="text-md mt-3">
                    The graphs above display the levels of {{ childName }} 's
                    Dominant (D), Influential (I), Supportive (S), and Cautious
                    (C) personality traits. The higher the level of each trait,
                    the stronger it is in {{ childName }} .
                </p>

                <p class="text-md mt-3">
                    It’s important to remember that as children grow, they often
                    explore different behaviours. This report provides valuable
                    insights into {{ childName }} 's personality dynamics. You
                    may notice that {{ childName }} shows different traits in
                    various situations, which is completely normal. By
                    recognising these behaviour patterns, you can interact with
                    {{ childName }} more effectively.
                </p>

            </div>
        </div>

        <!-- For S Style Type -->
        <div id="S" v-if="style == 'S'">
            <div class="p-6 space-y-6">
                <!-- Summary of Scores -->
                <div class="space-y-4">
                    <h2 class="text-3xl font-bold mb-4">Summary of Scores</h2>
                    <p class="text-lg font-medium">
                        <span class="font-bold">
                            {{ childName }} ’s DISC Scores:</span
                        >
                    </p>
                    <p>
                        Here is a summary of your child’s scores in the four
                        DISC styles. This visual representation will help you
                        understand which styles are most dominant in your
                        child’s behaviour.
                    </p>
                    <ul class="list-none list-inside text-lg mt-4">
                        <li>
                            <strong>Dominant (D):</strong>
                            {{ parsedDiscScores.D }}
                        </li>
                        <li>
                            <strong>Influential (I):</strong>
                            {{ parsedDiscScores.I }}
                        </li>
                        <li>
                            <strong>Supportive (S):</strong>
                            {{ parsedDiscScores.S }}
                        </li>
                        <li>
                            <strong>Cautious (C):</strong>
                            {{ parsedDiscScores.C }}
                        </li>
                    </ul>
                    <Chart
                        type="bar"
                        :data="chart_data"
                        :options="chart_options"
                    />
                </div>

                <!-- Graph Explanation -->
                <div class="space-y-4">
                    <p>
                        The graphs above display the levels of
                        <span class="font-bold"> {{ childName }} </span>'s
                        Dominant (D), Influential (I), Supportive (S), and
                        Cautious (C) personality traits. The higher the level of
                        each trait, the stronger it is in
                        <span class="font-bold"> {{ childName }} </span>.
                    </p>
                    <p>
                        It’s important to remember that as children grow, they
                        often explore different behaviours. This report provides
                        valuable insights into
                        <span class="font-bold"> {{ childName }} </span>'s
                        personality dynamics. You may notice that
                        <span class="font-bold"> {{ childName }} </span> shows
                        different traits in various situations, which is
                        completely normal. By recognising these behaviour
                        patterns, you can interact with
                        <span class="font-bold"> {{ childName }} </span> more
                        effectively.
                    </p>
                </div>

            </div>
        </div>

        <!-- For SC Style Type -->
        <div id="SC" v-if="style == 'SC'">
            <div class="p-6">
                <h2 class="text-3xl font-bold mb-4">Summary of Scores</h2>
                <p class="mb-6">{{ childName }} ’s DISC Scores:</p>

                <p class="mb-6">
                    Here is a summary of your child’s scores in the four DISC
                    styles. This visual representation will help you understand
                    which styles are most dominant in your child’s behaviour.
                </p>

                <ul class="list-none list-inside text-lg mt-4">
                    <li>
                        <strong>Dominant (D):</strong> {{ parsedDiscScores.D }}
                    </li>
                    <li>
                        <strong>Influential (I):</strong>
                        {{ parsedDiscScores.I }}
                    </li>
                    <li>
                        <strong>Supportive (S):</strong>
                        {{ parsedDiscScores.S }}
                    </li>
                    <li>
                        <strong>Cautious (C):</strong> {{ parsedDiscScores.C }}
                    </li>
                </ul>
                <Chart type="bar" :data="chart_data" :options="chart_options" />

                <p class="mb-6">
                    The graphs above display the levels of {{ childName }} 's
                    Dominant (D), Influential (I), Supportive (S), and Cautious
                    (C) personality traits. The higher the level of each trait,
                    the stronger it is in {{ childName }} .
                </p>

                <p class="mb-6">
                    It’s important to remember that as children grow, they often
                    explore different behaviours. This report provides valuable
                    insights into {{ childName }} 's personality dynamics. You
                    may notice that {{ childName }} shows different traits in
                    various situations, which is completely normal. By
                    recognising these behaviour patterns, you can interact with
                    {{ childName }} more effectively.
                </p>

            </div>
        </div>

        <!-- For SI Style Type -->
        <div id="SI" v-if="style == 'SI'">
            <div class="space-y-6">
                <h2 class="text-3xl font-bold mb-4">Summary of Scores</h2>
                <p class="text-base">{{ childName }} ’s DISC Scores:</p>
                <p class="text-base">
                    Here is a summary of your child’s scores in the four DISC
                    styles. This visual representation will help you understand
                    which styles are most dominant in your child’s behaviour.
                </p>

                <ul class="list-none list-inside text-lg mt-4">
                    <li>
                        <strong>Dominant (D):</strong> {{ parsedDiscScores.D }}
                    </li>
                    <li>
                        <strong>Influential (I):</strong>
                        {{ parsedDiscScores.I }}
                    </li>
                    <li>
                        <strong>Supportive (S):</strong>
                        {{ parsedDiscScores.S }}
                    </li>
                    <li>
                        <strong>Cautious (C):</strong> {{ parsedDiscScores.C }}
                    </li>
                </ul>
                <Chart type="bar" :data="chart_data" :options="chart_options" />

                <p class="text-base">
                    The graphs above display the levels of {{ childName }} 's
                    Dominant (D), Influential (I), Supportive (S), and Cautious
                    (C) personality traits. The higher the level of each trait,
                    the stronger it is in {{ childName }} .
                </p>

                <p class="text-base">
                    It’s important to remember that as children grow, they often
                    explore different behaviours. This report provides valuable
                    insights into {{ childName }} 's personality dynamics. You
                    may notice that {{ childName }} shows different traits in
                    various situations, which is completely normal. By
                    recognising these behaviour patterns, you can interact with
                    {{ childName }} more effectively.
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
import Chart from "primevue/chart";

export default {
    name: "ChildDiscProfileFirst",
    layout: AssessmentTypes,
    components: { Chart },
    props: {
        childName: String,
        style: String,
        image: String,
        discScores: Object,
    },
    data() {
        return {
            parsedDiscScores: this.discScores
                ? this.discScores
                : { C: 0, D: 0, I: 0, S: 0 },
            chart_options: {
                scales: {
                    y: {
                        ticks: {
                            stepSize: 2,
                        },
                        suggestedMax: 20,
                    },
                },
            },
            chart_data: {
                labels: ["D", "I", "S", "C"],
                datasets: [
                    {
                        label: "DISC Score",
                        data: [],
                        backgroundColor: [
                            "rgba(249, 115, 22, 0.2)",
                            "rgba(6, 182, 212, 0.2)",
                            "rgb(107, 114, 128, 0.2)",
                            "rgba(139, 92, 246, 0.2)",
                        ],
                        borderColor: [
                            "rgb(249, 115, 22)",
                            "rgb(6, 182, 212)",
                            "rgb(107, 114, 128)",
                            "rgb(139, 92, 246)",
                        ],
                        borderWidth: 1,
                    },
                ],
            },
            x: 0,
            y: 0,
        };
    },
    watch: {
        discScores: {
            immediate: true,
            handler(newValue) {
                this.parsedDiscScores = JSON.parse(
                    newValue ? newValue : { C: 0, D: 0, I: 0, S: 0 }
                );
                console.log("----", this.parsedDiscScores);
            },
        },
    },
    mounted() {
        const data = JSON.parse(this.discScores);
        this.chart_data.datasets[0].data = [data.D, data.I, data.S, data.C];
        switch (this.style) {
            case "C":
                this.x = 60;
                this.y = 220;
                break;
            case "CD":
                this.x = 60;
                this.y = 170;
                break;
            case "DC":
                this.x = 60;
                this.y = 120;
                break;
            case "D":
                this.x = 60;
                this.y = 65;
                break;

            case "S":
                this.x = 230;
                this.y = 220;
                break;
            case "SI":
                this.x = 230;
                this.y = 170;
                break;
            case "IS":
                this.x = 230;
                this.y = 120;
                break;
            case "I":
                this.x = 230;
                this.y = 65;
                break;

            case "CS":
                this.x = 120;
                this.y = 220;
                break;
            case "SC":
                this.x = 165;
                this.y = 220;
                break;

            case "DI":
                this.x = 120;
                this.y = 50;
                break;
            case "ID":
                this.x = 170;
                this.y = 50;
                break;
        }
    },
};
</script>
