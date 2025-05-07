<template>
    <div class="p-4 md:p-6">
        <div class="container mx-auto p-4">
            <h1 class="font-bold mb-4 text-center">A Note for Your Child</h1>
        </div>
        <h1 class="text-3xl font-bold text-center mb-4">Welcome Message</h1>

        <div class="row p-6">
            <div class="col-6">
                <div class="child-intro mb-6">
                    <h2 class="text-4xl font-semibold text-pink-500 mb-2">
                        Hi {{ childName }} !
                    </h2>
                    <p class="text-lg text-gray-700">
                        Welcome to your very own DISC report! This report is all
                        about you and how special you are. We’ll talk about some
                        of the things you like to do, how you like to play with
                        your friends, and even how you like to learn new things.
                        It’s like a story all about you!
                    </p>
                </div>
                <div class="understanding-disc mb-6">
                    <h2 class="text-3xl font-bold mt-6 mb-2 blueheading">
                        Understanding Your DISC Style
                    </h2>

                    <div class="what-is-disc mb-4">
                        <h3 class="text-xl font-semibold text-green-500 mb-2">
                            What is a DISC Style?
                        </h3>
                        <p class="text-lg text-gray-700">
                            DISC styles are different ways that people do
                            things. Just like how some people like chocolate ice
                            cream and others like vanilla, people have different
                            styles for how they do things.
                        </p>
                    </div>

                    <div class="disc-details">
                        <p class="text-lg text-gray-700">
                            In this report, you’ll learn about your style and
                            what makes you unique. There are four main styles:
                        </p>
                        <ul
                            class="list-none list-inside mt-2 text-lg text-gray-700"
                        >
                            <li>
                                <strong>Dominant (D):</strong> People who like
                                to take charge and lead.
                            </li>
                            <li>
                                <strong>Influential (I):</strong> People who
                                love to talk and make friends.
                            </li>
                            <li>
                                <strong>Supportive (S):</strong> People who like
                                to help others and work together.
                            </li>
                            <li>
                                <strong>Cautious (C):</strong> People who like
                                to make sure everything is done just right.
                            </li>
                        </ul>
                        <p>
                            This report will help you understand your own
                            special style and how you can use it to be the best
                            you can be!
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img
                        class="w-96 h-auto object-contain"
                        @error="
                            $event.target.src =
                                '/images/default/placeholder.png'
                        "
                        :src="'/images/reports-svg-images/page4.svg'"
                        alt=""
                    />
                </div>
            </div>
        </div>
    </div>
</template>

<style>
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
    .row + .row {
        margin-top: 1rem;
    }

    ul.list-disc {
        padding-left: 1rem;
    }
}
h4 {
    color: rgb(34 197 94);
}

/* Add styles here */
/* h1, h2, h2, h4 {
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
div.space-y-2 > h4.font-medium {
    color: rgb(36, 168, 250);
    font-weight: bold;
    color: #fa25c4;
    /* font-size: 19px; */
}

.p-6 > h2,
.p-6 > h2 > .row > .col-6 > h2 {
    color: rgb(55 48 163);
    font-weight: bold !important;
}

p,
ul > li {
    font-size: 1.125rem;
    line-height: 1.75rem;
}

.blueheading {
    color: rgb(55 48 163);
}
</style>

<script>
import AssessmentTypes from "@/Layouts/AssessmentTypes.vue";

export default {
    name: "NoteForChild",
    layout: AssessmentTypes,
    props: {
        childName: String,
        style: String,
        image: String,
    },
};
</script>
