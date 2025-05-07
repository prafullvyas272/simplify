<template>
    <div class="p-4 md:p-6">
        <div class="container mx-auto p-4"></div>

        <div id="CD" v-if="style == 'C'">
            <div class="stress-management p-6 rounded-lg">
                <h2 class="text-3xl font-bold mb-4">Stress Management</h2>
                <h2 class="text-2xl font-bold mb-2 text-blue-500 mb-4">
                    How {{ childName }} Handles Stress:
                </h2>
                <p class="text-lg mb-4">
                    Children with a Cautious (C) style can become stressed in
                    chaotic or unpredictable environments. They may also feel
                    stressed when they are pressured to make quick decisions or
                    when their careful planning is disrupted. Here are some
                    signs of stress and ways to help:
                </p>

                <ul class="list-none list-inside text-lg">
                    <li>
                        <strong> Signs of Stress: </strong>
                        Withdrawal, increased anxiety, and a tendency to
                        overthink.
                    </li>
                </ul>

                <ul class="list-none list-inside text-lg">
                    <li>
                        <strong>Stress Triggers: </strong>
                        Chaos, unpredictability, and pressure to make quick
                        decisions.
                    </li>
                </ul>

                <ul class="list-none list-inside text-lg mb-6">
                    <li>
                        <strong> Coping Strategies: </strong>
                        Providing reassurance, allowing them time to process
                        changes, and engaging in calming activities.
                    </li>
                </ul>
                <h2 class="text-xl font-semibold text-purple-500">
                    Tips for Parents and Teachers:
                </h2>
                <ul class="list-none list-inside text-lg space-y-2">
                    <li>
                        <strong>Provide Reassurance:</strong> Offer comfort and
                        affirmation, especially when they seem stressed.
                    </li>
                    <li>
                        <strong>Encourage Calm Activities:</strong> Engage them
                        in calming activities like reading, drawing, or nature
                        walks.
                    </li>
                    <li>
                        <strong>Support Their Planning:</strong> Allow them to
                        have some control over their environment and schedule to
                        reduce stress.
                    </li>
                </ul>
            </div>
        </div>

        <!-- For CD Style Type -->
        <div id="CD" v-if="style == 'CD'">
            <div class="p-6 rounded-lg space-y-6">
                <!-- Stress Management Section -->
                <div>
                    <h2 class="text-3xl font-bold mb-4">Stress Management</h2>
                    <p>
                        <strong> How {{ childName }} Handles Stress: </strong>
                    </p>
                    <p class="">
                        Children with a Cautious-Dominant (CD) style may become
                        stressed when there is too much chaos or when they face
                        unexpected changes. They might also feel overwhelmed if
                        they have too many tasks at once. Here are some signs of
                        stress and ways to help:
                    </p>
                    <ul class="list-none pl-6">
                        <li>
                            <span class="font-semibold">Signs of Stress:</span>
                            Frustration, irritability, difficulty concentrating,
                            and withdrawal.
                        </li>
                        <li>
                            <span class="font-semibold">Stress Triggers:</span>
                            Chaotic environments, sudden changes, and an
                            overload of responsibilities.
                        </li>
                        <li>
                            <span class="font-semibold"
                                >Coping Strategies:</span
                            >
                            Encourage {{ childName }} to take breaks and engage
                            in calming activities, such as reading or doing
                            puzzles. Practice relaxation techniques together,
                            like deep breathing or mindfulness exercises.
                        </li>
                    </ul>
                </div>

                <!-- Tips for Parents and Teachers Section -->
                <div>
                    <h2 class="text-3xl font-bold mb-4">
                        Tips for Parents and Teachers:
                    </h2>
                    <ul class="list-none pl-6 space-y-2">
                        <li>
                            <span class="font-semibold"
                                >Provide a Calm Environment:</span
                            >
                            Ensure {{ childName }} has access to a quiet and
                            organised space where they can relax and focus.
                        </li>
                        <li>
                            <span class="font-semibold"
                                >Introduce Relaxation Techniques:</span
                            >
                            Teach them stress-relief techniques like deep
                            breathing, meditation, or yoga to help them stay
                            calm.
                        </li>
                        <li>
                            <span class="font-semibold"
                                >Promote Time Management:</span
                            >
                            Help {{ childName }} manage their responsibilities
                            by breaking tasks into smaller, manageable steps and
                            prioritising them.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- For CS Style Type -->
        <div id="CS" v-if="style == 'CS'">
            <div class="p-6">
                <!-- Stress Management Section -->
                <div>
                    <h2 class="text-3xl font-bold mb-4">Stress Management</h2>
                    <h2 class="text-xl font-semibold text-blue-600 mb-3">
                        How {{ childName }} Handles Stress:
                    </h2>
                    <p class="">
                        Children with a
                        <span class="font-semibold text-blue-600"
                            >Cautious-Supportive (CS)</span
                        >
                        style may become stressed in environments that lack
                        order or when faced with unexpected changes. They might
                        also feel overwhelmed if given too many responsibilities
                        at once. Here are some signs of stress and ways to help:
                    </p>
                    <ul class="list-none list-inside mt-4 space-y-2">
                        <li>
                            <span class="font-semibold">Signs of Stress:</span>
                            Withdrawal, increased sensitivity, difficulty
                            concentrating, and excessive worrying.
                        </li>
                        <li>
                            <span class="font-semibold">Stress Triggers:</span>
                            Disorganised environments, sudden changes in
                            routine, and an overload of tasks.
                        </li>
                        <li>
                            <span class="font-semibold"
                                >Coping Strategies:</span
                            >
                            Encourage {{ childName }} to participate in
                            structured and calming activities, practice time
                            management skills, and take breaks to relax and
                            recharge.
                        </li>
                    </ul>
                    <h2 class="text-3xl font-bold mb-4 text-green-600 mt-6">
                        Tips for Parents and Teachers:
                    </h2>
                    <ul class="list-none list-inside space-y-2">
                        <li>
                            <strong> Create a Calm Environment: </strong> Ensure
                            {{ childName }} has a peaceful and organised space
                            where they can feel secure and focused.
                        </li>
                        <li>
                            <strong
                                >Introduce Time Management Techniques:
                            </strong>
                            Teach {{ childName }} how to break tasks into
                            smaller, manageable steps and use checklists to keep
                            track of their responsibilities.
                        </li>
                        <li>
                            <strong> Incorporate Relaxation Breaks: </strong>
                            Schedule regular breaks during tasks or study time
                            for {{ childName }} to engage in calming activities,
                            such as reading a book, drawing, or practising deep
                            breathing exercises.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- For D Style Type -->
        <div id="D" v-if="style == 'D'">
            <!-- Stress Management -->
            <div class="p-6 mt-8">
                <h2 class="text-3xl font-bold mb-4">Stress Management</h2>
                <p>
                    <strong>How {{ childName }} Handles Stress: </strong>
                </p>
                <p class="text-lg mb-4">
                    Children with a Dominant (D) style can become stressed when
                    they feel out of control or when their authority is
                    challenged. They may also experience stress when they are
                    not able to achieve their goals. Here are some signs of
                    stress and ways to help:
                </p>

                <!-- <h2 class="text-3xl font-bold mb-4">Signs of Stress:</h2> -->
                <ul class="list-none space-y-2">
                    <li>
                        <b>Signs of Stress:</b>Frustration, impatience, and a
                        desire to take control of the situation.
                    </li>
                    <li>
                        <b>Stress Triggers:</b> Lack of control, being
                        micromanaged, and not meeting their own high
                        expectations.
                    </li>
                    <li>
                        <b>Coping Strategies:</b> Engaging in physical
                        activities, having clear communication about
                        expectations, and providing opportunities for
                        leadership.
                    </li>
                </ul>

                <h2 class="text-3xl font-bold mb-4">
                    Tips for Parents and Teachers:
                </h2>
                <ul class="list-none space-y-2">
                    <li>
                        <b>Provide Clear Communication:</b> Ensure that
                        expectations and goals are communicated clearly to avoid
                        misunderstandings.
                    </li>
                    <li>
                        <b>Encourage Physical Activities:</b> Physical exercise
                        can be a great way for your child to manage stress and
                        release energy.
                    </li>
                    <li>
                        <b>Support Goal Setting:</b> Help your child set
                        realistic and achievable goals, and celebrate their
                        successes to boost their confidence.
                    </li>
                </ul>
            </div>
        </div>

        <!-- For DC Style Type -->
        <div id="DC" v-if="style == 'DC'">
            <div class="">
                <!-- Stress Management -->
                <h2 class="text-3xl font-bold mb-4 mt-8 mb-6">
                    Stress Management
                </h2>
                <p>
                    <strong> How {{ childName }} Handles Stress: </strong>
                </p>
                <p class="mb-4">
                    Children with a Dominant-Cautious (DC) style can become
                    stressed when they feel overwhelmed by too many tasks or
                    when they perceive their efforts are not meeting high
                    standards. They may also experience stress when they are in
                    environments lacking structure or clear expectations. Here
                    are some signs of stress and ways to help:
                </p>

                <ul class="list-none pl-6 mt-2 space-y-2">
                    <li>
                        <span class="font-bold">Signs of Stress:</span>
                        Overwhelm, frustration, and becoming overly critical of
                        themselves or others.
                    </li>
                    <li>
                        <span class="font-bold">Stress Triggers:</span> Having
                        too many tasks at once, feeling their work is not
                        perfect, and chaotic environments.
                    </li>
                    <li>
                        <span class="font-bold">Coping Strategies:</span>
                        Creating a structured plan to manage tasks, providing
                        opportunities for them to take control, and allowing
                        time for detailed, focused work.
                    </li>
                </ul>

                <h2 class="text-3xl font-bold mb-4 mt-6">
                    Tips for Parents and Teachers:
                </h2>
                <ul class="list-none pl-6 mt-2 space-y-2">
                    <li>
                        <span class="font-bold">Encourage Breaks:</span> Ensure
                        {{ childName }} takes regular breaks during tasks to
                        avoid feeling overwhelmed.
                    </li>
                    <li>
                        <span class="font-bold">Provide Reassurance:</span>
                        Offer positive reinforcement and reassure them that
                        their efforts are valued and appreciated.
                    </li>
                    <li>
                        <span class="font-bold">Create a Structured Plan:</span>
                        Help them develop a plan that breaks tasks into smaller,
                        manageable steps to maintain focus and reduce stress.
                    </li>
                </ul>
            </div>
        </div>

        <!-- For DI Style Type -->
        <div id="DI" v-if="style == 'DI'">
            <div class="p-6 space-y-6">
                <!-- Stress Management -->
                <div>
                    <h2 class="text-3xl font-bold mb-4">Stress Management</h2>
                    <p>
                        <strong> How {{ childName }} Handles Stress: </strong>
                    </p>
                    <p class="">
                        Children with a Dominant-Influential (DI) style can
                        become stressed when they feel their leadership is
                        challenged or when they are in environments that limit
                        their social interactions. Here are some signs of stress
                        and ways to help:
                    </p>
                    <ul class="list-none pl-6 space-y-2">
                        <li>
                            <strong>Signs of Stress:</strong> Frustration,
                            restlessness, and a strong desire to take control of
                            situations.
                        </li>
                        <li>
                            <strong>Stress Triggers:</strong> Being in
                            environments where their leadership is not
                            recognised or where social interaction is limited.
                        </li>
                        <li>
                            <strong>Coping Strategies:</strong> Engaging in
                            physical activities, having open communication, and
                            providing opportunities for social interaction.
                        </li>
                    </ul>
                </div>

                <!-- Tips for Stress Management -->
                <div>
                    <h2 class="text-3xl font-bold mb-4">
                        Tips for Parents and Teachers:
                    </h2>
                    <ul class="list-none pl-6 space-y-2">
                        <li>
                            <strong>Provide Physical Outlets:</strong> Ensure
                            they have opportunities for physical activity to
                            help manage stress.
                        </li>
                        <li>
                            <strong>Support Open Dialogue:</strong> Create an
                            environment where they feel comfortable sharing
                            their thoughts and feelings.
                        </li>
                        <li>
                            <strong>Encourage Balance:</strong> Teach them how
                            to manage their time effectively and not take on too
                            much at once.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- For I Style Type -->
        <div id="I" v-if="style == 'I'">
            <div class="space-y-6">
                <!-- Stress Management -->
                <div class="space-y-4">
                    <h2 class="text-3xl font-bold mb-2">Stress Management</h2>
                    <p>
                        <strong>How {{ childName }} Handles Stress: </strong>
                    </p>
                    <p class="text-base">
                        Children with an Influential (I) style can become
                        stressed when they feel isolated or when their social
                        interactions are limited. They may also experience
                        stress when they are not able to express themselves or
                        when they feel misunderstood. Here are some signs of
                        stress and ways to help:
                    </p>
                    <ul class="list-none pl-6 space-y-2">
                        <li>
                            <strong>Signs of Stress:</strong> Withdrawal, mood
                            swings, and a decrease in their usual enthusiasm.
                        </li>
                        <li>
                            <strong>Stress Triggers:</strong> Lack of social
                            interaction, feeling ignored, and restrictive
                            environments.
                        </li>
                        <li>
                            <strong>Coping Strategies:</strong> Providing
                            opportunities for social interaction, encouraging
                            creative outlets, and ensuring they feel heard and
                            understood.
                        </li>
                    </ul>
                    <h4 class="text-3xl font-bold mb-4">
                        Tips for Parents and Teachers:
                    </h4>
                    <ul class="list-none space-y-2">
                        <li>
                            <strong>Encourage Social Interaction:</strong> Make
                            sure they have regular opportunities to interact
                            with friends and peers.
                        </li>
                        <li>
                            <strong>Provide Creative Outlets:</strong> Offer
                            activities that allow them to express their emotions
                            and creativity.
                        </li>
                        <li>
                            <strong>Communicate Openly:</strong> Keep lines of
                            communication open and encourage them to talk about
                            their feelings and concerns.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- For ID Style Type -->
        <div id="ID" v-if="style == 'ID'">
            <div class="mt-6">
                <h2 class="text-3xl font-bold mb-4">Stress Management</h2>
                <p class="text-base mt-2">
                    <strong>How {{ childName }} Handles Stress:</strong>
                </p>
                <p class="text-base mt-2">
                    Children with an Influential-Dominant (ID) style may become
                    stressed when they feel their leadership is challenged or
                    when they are not able to express their ideas. They may also
                    feel overwhelmed if they have too many tasks at once. Here
                    are some signs of stress and ways to help:
                </p>
                <ul class="list-none pl-5 mt-2">
                    <li>
                        <span class="font-semibold">Signs of Stress:</span>
                        Frustration, impatience, and difficulty focusing.
                    </li>
                    <li>
                        <span class="font-semibold">Stress Triggers:</span>
                        Feeling excluded, having their ideas dismissed, and
                        managing multiple responsibilities.
                    </li>
                    <li>
                        <span class="font-semibold">Coping Strategies:</span>
                        Engage {{ childName }} in activities where they can lead
                        and make decisions, provide a calm environment for
                        relaxation, and teach stress management techniques like
                        deep breathing exercises.
                    </li>
                </ul>
            </div>

            <div class="mt-6">
                <h2 class="text-3xl font-bold mb-4">
                    Tips for Parents and Teachers:
                </h2>
                <ul class="list-none pl-5 mt-2">
                    <li>
                        <span class="font-semibold"
                            >Encourage Leadership Roles:</span
                        >
                        Provide opportunities for {{ childName }} to take on
                        leadership roles in activities and projects.
                    </li>
                    <li>
                        <span class="font-semibold"
                            >Create a Relaxing Space:</span
                        >
                        Ensure there is a quiet and comfortable area where they
                        can retreat and relax when feeling overwhelmed.
                    </li>
                    <li>
                        <span class="font-semibold"
                            >Teach Stress Management Skills:</span
                        >
                        Guide them in practising stress management techniques
                        and maintaining a positive attitude.
                    </li>
                </ul>
            </div>
        </div>

        <!-- For IS Style Type -->
        <div id="IS" v-if="style == 'IS'">
            <div>
                <h2 class="text-3xl font-semibold mt-6">Stress Management</h2>
                <p class="text-md mt-2">
                    <strong> How {{ childName }} Handles Stress: </strong>
                </p>
                <p class="text-md mt-2">
                    Children with an Influential-Supportive (IS) style may
                    become stressed when they feel excluded or when there is
                    conflict in their social groups. They may also feel
                    overwhelmed if they have too many tasks at once. Here are
                    some signs of stress and ways to help:
                </p>

                <ul class="list-none pl-5 mt-2">
                    <li>
                        <strong>Signs of Stress:</strong> Withdrawal, increased
                        sensitivity, and difficulty concentrating.
                    </li>
                    <li>
                        <strong>Stress Triggers:</strong> Feeling left out,
                        conflicts with friends, and having too many
                        responsibilities.
                    </li>
                    <li>
                        <strong>Coping Strategies:</strong> Encourage
                        {{ childName }} to spend time with friends and
                        participate in social activities to help them feel
                        connected. Create a peaceful space at home where they
                        can relax and unwind. Help them develop skills to
                        resolve conflicts calmly and effectively.
                    </li>
                </ul>

                <h4 class="text-md font-semibold mt-4">
                    Tips for Parents and Teachers:
                </h4>
                <ul class="list-none pl-5 mt-2">
                    <li>
                        <strong>Encourage Social Interaction:</strong> Ensure
                        {{ childName }} has plenty of opportunities to socialise
                        and feel included.
                    </li>
                    <li>
                        <strong>Create a Relaxing Space:</strong> Provide a
                        quiet and comfortable area where they can retreat and
                        relax when feeling overwhelmed.
                    </li>
                    <li>
                        <strong>Teach Conflict Resolution Skills:</strong> Guide
                        them in resolving conflicts peacefully and maintaining
                        positive relationships with their peers.
                    </li>
                </ul>
            </div>
        </div>

        <!-- For S Style Type -->
        <div id="S" v-if="style == 'S'">
            <div class="space-y-6">
                <section>
                    <h2 class="mt-4 font-semibold">Stress Management</h2>
                    <p>
                        <strong>How {{ childName }} Handles Stress:</strong>
                    </p>
                    <p>
                        Children with a Supportive (S) style can become stressed
                        in chaotic or conflict-ridden environments. They may
                        also feel stressed when they are unable to help or
                        support others as they wish. Here are some signs of
                        stress and ways to help:
                    </p>
                    <ul class="list-none pl-6 space-y-4">
                        <li>
                            <strong>Signs of Stress:</strong> Withdrawal,
                            quietness, and increased sensitivity.
                        </li>
                        <li>
                            <strong>Stress Triggers:</strong> Conflict, chaos,
                            and feeling unable to help others.
                        </li>
                        <li>
                            <strong>Coping Strategies:</strong> Providing
                            reassurance, offering quiet time, and engaging in
                            relaxing activities.
                        </li>
                    </ul>
                    <h2 class="mt-4 font-medium">
                        Tips for Parents and Teachers:
                    </h2>
                    <ul class="list-none pl-6 space-y-4">
                        <li>
                            <strong>Provide Reassurance:</strong> Offer comfort
                            and reassurance when they seem stressed.
                        </li>
                        <li>
                            <strong>Encourage Relaxation:</strong> Engage them
                            in calming activities like reading, drawing, or
                            nature walks.
                        </li>
                        <li>
                            <strong>Model Conflict Resolution:</strong> Show
                            them how to handle conflicts calmly and
                            constructively.
                        </li>
                    </ul>
                </section>
            </div>
        </div>

        <!-- For SC Style Type -->
        <div id="SC" v-if="style == 'SC'">
            <div class="p-6">
                <h2 class="text-3xl font-semibold mb-4">Stress Management</h2>
                <p class="mb-6">
                    <strong> How {{ childName }} Handles Stress: </strong>
                </p>
                <p class="mb-6">
                    Children with a Supportive-Cautious (SC) style may become
                    stressed when there is too much chaos or when they are put
                    in unpredictable situations. They may also feel overwhelmed
                    if they have too many tasks at once. Here are some signs of
                    stress and ways to help:
                </p>
                <ul class="list-none pl-5 mb-6">
                    <li>
                        <strong>Signs of Stress:</strong> Withdrawal, increased
                        sensitivity, and difficulty concentrating.
                    </li>
                    <li>
                        <strong>Stress Triggers:</strong> Chaotic environments,
                        sudden changes, and having too many responsibilities.
                    </li>
                    <li>
                        <strong>Coping Strategies:</strong> Encourage
                        {{ childName }} to spend time in quiet and calm
                        environments, engage in activities that they find
                        soothing, and practice stress management techniques like
                        deep breathing exercises.
                    </li>
                </ul>

                <h2 class="text-3xl font-bold mb-4">
                    Tips for Parents and Teachers:
                </h2>
                <ul class="list-none pl-5 mb-6">
                    <li>
                        <strong>Provide a Calm Space:</strong> Ensure
                        {{ childName }} has access to a quiet and comfortable
                        area where they can retreat and relax when feeling
                        overwhelmed.
                    </li>
                    <li>
                        <strong>Encourage Predictable Routines:</strong>
                        Maintain a consistent daily routine to provide a sense
                        of stability and security.
                    </li>
                    <li>
                        <strong>Teach Stress Management Skills:</strong> Guide
                        them in practising stress management techniques and
                        maintaining a positive attitude.
                    </li>
                </ul>
            </div>
        </div>

        <!-- For SI Style Type -->
        <div id="SI" v-if="style == 'SI'">
            <div class="space-y-6">
                <h2 class="text-3xl font-bold mb-4">Stress Management</h2>
                <p>
                    <strong> How {{ childName }} Handles Stress: </strong>
                </p>
                <p class="text-base">
                    Children with a Supportive-Influential (SI) style may become
                    stressed when they feel excluded or when there is conflict
                    in their social groups. They may also feel overwhelmed if
                    they have too many tasks at once. Here are some signs of
                    stress and ways to help:
                </p>

                <ul class="list-none pl-5 space-y-2">
                    <li>
                        <strong>Signs of Stress:</strong> Withdrawal, increased
                        sensitivity, and difficulty concentrating.
                    </li>
                    <li>
                        <strong>Stress Triggers:</strong> Feeling left out,
                        conflicts with friends, and having too many
                        responsibilities.
                    </li>
                    <li>
                        <strong>Coping Strategies:</strong> Encourage
                        {{ childName }} to spend time with friends and
                        participate in social activities, create a peaceful
                        space at home for relaxation, and teach stress
                        management techniques like deep breathing exercises.
                    </li>
                </ul>

                <h4 class="text-3xl font-bold mb-4">
                    Tips for Parents and Teachers:
                </h4>
                <ul class="list-none pl-5 space-y-2">
                    <li>
                        <strong>Encourage Social Interaction:</strong> Ensure
                        {{ childName }} has plenty of opportunities to socialise
                        and feel included.
                    </li>
                    <li>
                        <strong>Create a Relaxing Space:</strong> Provide a
                        quiet and comfortable area where they can retreat and
                        relax when feeling overwhelmed.
                    </li>
                    <li>
                        <strong>Teach Stress Management Skills:</strong> Guide
                        them in practising stress management techniques and
                        maintaining a positive attitude.
                    </li>
                </ul>
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
    strong {
        font-size: 1rem !important;
    }

    h4 {
        width: max-content;
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
    /* margin-top: 17px; */
    /* font-size: 19px; */
}

h2,
h4,
.p-6 > .row > .col-6 > h2 {
    color: rgb(55 48 163);
    font-weight: bold !important;
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
</style>

<script>
import AssessmentTypes from "@/Layouts/AssessmentTypes.vue";

export default {
    name: "UnderstandingChildStyleSecond",
    layout: AssessmentTypes,
    props: {
        childName: String,
        style: String,
        image: String,
    },
};
</script>
