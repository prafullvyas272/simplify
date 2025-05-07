<template>
    <!-- For C Style Type -->
    <div v-if="style == 'C'" class="welcome-message p-6 rounded-lg pt-0">
        <div class="disc-style-summary p-6 rounded-lg pt-0">
            <div class="tips p-6 mb-6">
                <h3 class="text-4xl font-bold text-red-500 mb-2">
                    Tips for Being the Best You:
                </h3>
                <ul class="list-none list-inside text-lg">
                    <li>
                        <strong>Be Confident:</strong> Remember, your ideas and
                        thoughts are important. Don’t be afraid to share them.
                    </li>
                    <li>
                        <strong>Embrace Flexibility:</strong> It’s okay if
                        things don’t always go as planned. Try to go with the
                        flow sometimes.
                    </li>
                    <li>
                        <strong>Stay Positive:</strong> Keep using your amazing
                        skills to help others and solve problems, and remember
                        that it’s okay to make mistakes and learn from them.
                    </li>
                </ul>
            </div>

            <div class="closing-message">
                <p class="text-lg">
                    Remember, {{ childName }} , you are a wonderful and
                    thoughtful person! Use your strengths to help others and
                    make the world a better place. We are so proud of you and
                    can’t wait to see all the amazing things you will do!
                </p>
            </div>
        </div>
    </div>

    <!-- For CD Style Type -->
    <div v-if="style == 'CD'" class="welcome-message p-6 rounded-lg">
        <div class="disc-style-summary p-6 rounded-lg pt-0">
            <div class="tips p-6 mb-6">
                <h3 class="text-4xl font-bold text-red-500 mb-2">
                    Tips for Being the Best You:
                </h3>
                <ul class="list-none list-inside text-lg">
                    <li>
                        <span class="font-semibold">Stay Focused:</span>
                        Keep paying attention to details and doing your best
                        work. Your careful nature is a great strength.
                    </li>
                    <li>
                        <span class="font-semibold">Be Confident:</span>
                        Trust in your ability to lead and know that you can
                        guide others well.
                    </li>
                    <li>
                        <span class="font-semibold">Help Others:</span>
                        Use your problem-solving skills to help your friends and
                        classmates when they need it.
                    </li>
                </ul>
            </div>

            <div class="closing-message">
                <p class="text-lg">
                    <span class="font-semibold">Remember {{ childName }} </span
                    >, you are amazing with your careful and leadership
                    qualities. Use your strengths to lead and help others while
                    enjoying the activities you love! Your attention to detail
                    and problem-solving skills can make a big difference in your
                    world. We are so proud of you and can’t wait to see all the
                    amazing things you will do!
                </p>
            </div>
        </div>
    </div>

    <!-- For CS Style Type -->
    <div id="CS" v-if="style == 'CS'">
        <div class="disc-style-summary p-6 rounded-lg pt-0">
            <div class="tips p-6 mb-6">
                <h3 class="text-4xl font-bold text-red-500 mb-2">
                    Tips for Being the Best You:
                </h3>
                <ul class="list-none list-inside text-lg">
                    <li>
                        <span class="font-semibold">Stay Thoughtful:</span>
                        Keep considering how your actions affect others. Your
                        thoughtfulness is a great strength.
                    </li>
                    <li>
                        <span class="font-semibold">Be Confident:</span>
                        Trust in your abilities and know that you are reliable
                        and capable.
                    </li>
                    <li>
                        <span class="font-semibold">Help Others:</span>
                        Use your helpful nature to support your friends and
                        family. It makes you and others feel good.
                    </li>
                </ul>
            </div>

            <div class="closing-message">
                <p class="text-lg">
                    Remember,
                    <span class="font-semibold"> {{ childName }} </span>, you
                    are amazing with your careful and supportive nature. Use
                    your strengths to help others and enjoy the activities you
                    love! Your attention to detail and reliability can make a
                    big difference in your world. We are so proud of you and
                    can’t wait to see all the amazing things you will do!
                </p>
            </div>
        </div>
    </div>

    <!-- For D Style Type -->
    <div v-if="style == 'D'" class="welcome-message p-6 rounded-lg">
        <div class="disc-style-summary p-6 rounded-lg pt-0">
            <div class="tips p-6 mb-6">
                <h3 class="text-4xl font-bold text-red-500 mb-2">
                    Tips for Being the Best You:
                </h3>
                <ul class="list-none list-inside text-lg">
                    <li>
                        <b>Listen to Others:</b> Sometimes it’s important to
                        hear what your friends have to say and include their
                        ideas.
                    </li>
                    <li>
                        <b>Take Turns:</b> Let others have a chance to lead too.
                        It can be fun to see what ideas they come up with.
                    </li>
                    <li>
                        <b>Stay Positive:</b> Even when things don’t go as
                        planned, keep a positive attitude and try again.
                    </li>
                </ul>
            </div>

            <div class="closing-message">
                <p class="text-lg">
                    Remember,
                    <span class="font-semibold"> {{ childName }} </span>, you
                    are a strong and capable leader! Use your skills to help
                    others and make your world a better place. We are so proud
                    of you and can’t wait to see all the amazing things you will
                    do!
                </p>
            </div>
        </div>
    </div>

    <!-- For DC Style Type -->
    <div id="DC" v-if="style == 'DC'">
        <div class="disc-style-summary p-6 rounded-lg pt-0">
            <div class="tips p-6 mb-6">
                <h3 class="text-4xl font-bold text-red-500 mb-2">
                    Tips for Being the Best You:
                </h3>
                <ul class="list-none list-inside text-lg">
                    <li>
                        <strong>Set Realistic Goals:</strong> Make sure your
                        goals are achievable and celebrate when you reach them.
                    </li>
                    <li>
                        <strong>Balance Work and Play:</strong> Take breaks and
                        have fun so you don’t get too tired.
                    </li>
                    <li>
                        <strong>Encourage Precision:</strong> Keep paying
                        attention to details and help others see why doing
                        things well is important.
                    </li>
                </ul>
            </div>

            <div class="closing-message">
                <p class="text-lg">
                    Remember, {{ childName }} , you are amazing with your
                    leadership and attention to detail. Use your strengths to
                    help others and achieve great things! We are so proud of you
                    and can’t wait to see all the amazing things you will do!
                </p>
            </div>
        </div>
    </div>

    <!-- For DI Style Type -->
    <div id="DI" v-if="style == 'DI'">
        <div class="disc-style-summary p-6 rounded-lg pt-0">
            <div class="tips p-6 mb-6">
                <h3 class="text-4xl font-bold text-red-500 mb-2">
                    Tips for Being the Best You:
                </h3>
                <ul class="list-none list-inside text-lg">
                    <li>
                        <strong>Share the Spotlight:</strong> Make sure to let
                        your friends share their ideas and take the lead
                        sometimes.
                    </li>
                    <li>
                        <strong>Be a Team Player:</strong> Work together with
                        others and value their contributions.
                    </li>
                    <li>
                        <strong>Use Your Energy Wisely:</strong> Balance your
                        active times with rest to stay energised and happy.
                    </li>
                </ul>
            </div>

            <div class="closing-message">
                <p class="text-lg">
                    Remember, {{ childName }} , you are a strong and capable
                    leader who brings energy and enthusiasm to everything you
                    do! Use your skills to help others and make your world a
                    better place. We are so proud of you and can’t wait to see
                    all the amazing things you will do!
                </p>
            </div>
        </div>
    </div>

    <!-- For I Style Type -->
    <div id="I" v-if="style == 'I'">
        <div class="disc-style-summary p-6 rounded-lg pt-0">
            <div class="tips p-6 mb-6">
                <h3 class="text-4xl font-bold text-red-500 mb-2">
                    Tips for Being the Best You:
                </h3>
                <ul class="list-none list-inside text-lg">
                    <li>
                        <strong>Stay Organised:</strong>
                        Try to keep your things in order and make a plan for
                        your tasks. This will help you stay on track.
                    </li>
                    <li>
                        <strong>Practice Listening:</strong>
                        Remember to take turns and listen to what others have to
                        say. It will help you learn new things and understand
                        your friends better.
                    </li>
                    <li>
                        <strong>Focus on One Thing at a Time:</strong>
                        Sometimes, it’s important to focus on one task at a time
                        to do your best work.
                    </li>
                </ul>
            </div>

            <div class="closing-message">
                <p class="text-lg">
                    Remember, {{ childName }}, you are a bright and enthusiastic
                    person! Use your energy and creativity to make the world a
                    more fun and exciting place. We are so proud of you and
                    can’t wait to see all the amazing things you will do!
                </p>
            </div>
        </div>
    </div>

    <!-- For ID Style Type -->
    <div id="ID" v-if="style == 'ID'">
        <div class="disc-style-summary p-6 rounded-lg pt-0">
            <div class="tips p-6 mb-6">
                <h3 class="text-4xl font-bold text-red-500 mb-2">
                    Tips for Being the Best You:
                </h3>
                <ul class="list-none list-inside text-lg">
                    <ul class="list-none pl-6 mt-2">
                        <li>
                            <strong>Stay Positive:</strong> Keep your positive
                            attitude and share it with others. Your enthusiasm
                            makes everyone happy.
                        </li>
                        <li>
                            <strong>Lead with Kindness:</strong> Use your
                            leadership skills to help others and make sure
                            everyone feels included.
                        </li>
                        <li>
                            <strong>Be Organised:</strong> Try to keep your
                            things tidy and plan your activities so you can have
                            even more fun.
                        </li>
                    </ul>
                </ul>
            </div>

            <div class="closing-message">
                <p class="text-lg">
                    Remember, <span class="font-semibold">{{ childName }}</span
                    >, you are amazing with your energy and leadership. Use your
                    strengths to help others and have fun along the way! Your
                    positive influence can make a big difference in your world.
                    We are so proud of you and can’t wait to see all the amazing
                    things you will do!
                </p>
            </div>
        </div>
    </div>

    <!-- For IS Style Type -->
    <div id="IS" v-if="style == 'IS'">
        <div class="disc-style-summary p-6 rounded-lg pt-0">
            <div class="tips p-6 mb-6">
                <h3 class="text-4xl font-bold text-red-500 mb-2">
                    Tips for Being the Best You:
                </h3>
                <ul class="list-none list-inside text-lg">
                    <ul class="list-none pl-6 mt-2">
                        <li>
                            <strong>Stay Positive:</strong> Keep your positive
                            attitude and share it with others. Your enthusiasm
                            makes everyone happy.
                        </li>
                        <li>
                            <strong>Help Others:</strong> Continue to help your
                            friends and classmates. They appreciate your support
                            and kindness.
                        </li>
                        <li>
                            <strong>Use Your Creativity:</strong> Find new ways
                            to use your imagination in everything you do,
                            whether it’s in school or at home.
                        </li>
                    </ul>
                </ul>
            </div>

            <div class="closing-message">
                <p class="text-lg">
                    Remember, {{ childName }} , you are amazing with your
                    friendly and supportive nature. Use your strengths to help
                    others and have fun along the way! We are so proud of you
                    and can’t wait to see all the amazing things you will do!
                </p>
            </div>
        </div>
    </div>

    <!-- For S Style Type -->
    <div id="S" v-if="style == 'S'">
        <div class="disc-style-summary p-6 rounded-lg pt-0">
            <div class="tips p-6 mb-6">
                <h3 class="text-4xl font-bold text-red-500 mb-2">
                    Tips for Being the Best You:
                </h3>
                <ul class="list-none list-inside text-lg">
                    <ul class="list-none pl-6 mt-2">
                        <li>
                            <strong>Speak Up:</strong> Remember, your ideas are
                            important too! Try to share your thoughts more
                            often.
                        </li>
                        <li>
                            <strong>Take Initiative:</strong> Sometimes, it’s
                            good to take the lead. Don’t be afraid to step up
                            when you have a good idea.
                        </li>
                        <li>
                            <strong>Stay Positive:</strong> Keep being the
                            caring and patient person you are, and remember that
                            it’s okay to ask for help when you need it.
                        </li>
                    </ul>
                </ul>
            </div>

            <div class="closing-message">
                <p class="text-lg">
                    Remember, <span class="font-bold"> {{ childName }} </span>,
                    you are a wonderful and supportive friend! Use your
                    strengths to help others and create a positive environment
                    around you. We are so proud of you and can’t wait to see all
                    the amazing things you will do!
                </p>
            </div>
        </div>
    </div>

    <!-- For SC Style Type -->
    <div id="SC" v-if="style == 'SC'">
        <div class="disc-style-summary p-6 rounded-lg pt-0">
            <div class="tips p-6 mb-6">
                <h3 class="text-4xl font-bold text-red-500 mb-2">
                    Tips for Being the Best You:
                </h3>
                <ul class="list-none list-inside text-lg">
                    <ul class="list-none pl-6 mt-2">
                        <li>
                            <strong>Stay Thoughtful:</strong> Keep considering
                            how your actions affect others. Your thoughtfulness
                            is a great strength.
                        </li>
                        <li>
                            <strong>Be Confident:</strong> Trust in your
                            abilities and know that you are reliable and
                            capable.
                        </li>
                        <li>
                            <strong>Help Others:</strong> Use your helpful
                            nature to support your friends and family. It makes
                            you and others feel good.
                        </li>
                    </ul>
                </ul>
            </div>

            <div class="closing-message">
                <p class="text-lg">
                    Remember, {{ childName }} , you are amazing with your
                    thoughtfulness and reliability. Use your strengths to help
                    others and enjoy the activities you love! Your careful and
                    supportive nature can make a big difference in your world.
                    We are so proud of you and can’t wait to see all the amazing
                    things you will do!
                </p>
            </div>
        </div>
    </div>

    <!-- For SI Style Type -->
    <div id="SI" v-if="style == 'SI'">
        <div class="disc-style-summary p-6 rounded-lg pt-0">
            <div class="tips p-6 mb-6">
                <h3 class="text-4xl font-bold text-red-500 mb-2">
                    Tips for Being the Best You:
                </h3>
                <ul class="list-none list-inside text-lg">
                    <ul class="list-none pl-6 mt-2">
                        <li>
                            <strong>Stay Positive:</strong> Keep your positive
                            attitude and share it with others. Your friendliness
                            makes everyone happy.
                        </li>
                        <li>
                            <strong>Help Others:</strong> Use your helpful
                            nature to support your friends and family. It makes
                            you and others feel good.
                        </li>
                        <li>
                            <strong>Be Creative:</strong> Keep using your
                            imagination in fun and creative ways. It helps you
                            learn and enjoy what you do.
                        </li>
                    </ul>
                </ul>
            </div>

            <div class="closing-message">
                <p class="text-lg">
                    Remember, {{ childName }} , you are amazing with your
                    kindness and friendliness. Use your strengths to help others
                    and have fun along the way! Your positive influence can make
                    a big difference in your world. We are so proud of you and
                    can’t wait to see all the amazing things you will do!
                </p>
            </div>
        </div>
    </div>
</template>

<style>
h4 {
    color: rgb(34 197 94);
}

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

.tips {
    padding: 6px;
}

div.col-6 > h4.font-medium,
li > div > h4,
strong,
div.space-y-2 > h4.font-medium,
li > span.font-semibold,
li > b {
    color: rgb(36, 168, 250);
    font-weight: bold;
    color: #fa25c4;
    /* font-size: 19px; */
}

h2,
.p-6 > .row > .col-6 > h2 {
    color: rgb(55 48 163);
    font-weight: bold !important;
}
p,
ul > li {
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
    name: "YourDiscStyleSecond",
    layout: AssessmentTypes,
    props: {
        childName: String,
        style: String,
        image: String,
    },
};
</script>
