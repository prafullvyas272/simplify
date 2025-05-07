<template>
    <div class="p-6">
        <div class="container mx-auto p-4"></div>
        <div v-if="style == 'C'">


            <div class="effective-communication p-6 rounded-lg mb-6">

                <div class="motivational-phrases p-6 mb-6">
                    <h2 class="text-3xl font-bold mb-2">
                        Phrases for Parents to Use with a Cautious (C) Child
                    </h2>
                    <p class="font-semibold text-blue-500 mb-2">
                        Motivating and Encouraging Phrases
                    </p>

                    <ul class="list-none list-inside text-lg mb-6">
                        <li class="mt-3">
                            I appreciate your attention to detail. Your careful
                            work makes a big difference!
                        </li>
                        <li class="mt-3">
                            Your analytical skills are impressive. How did you
                            figure that out?
                        </li>
                        <li class="mt-3">
                            Great job on staying organised! It really helps
                            everyone when things are clear.
                        </li>
                        <li class="mt-3">
                            Your precision is amazing. How can we use it in our
                            next project?
                        </li>
                        <li class="mt-3">
                            You did an excellent job planning this. What was
                            your favorite part of the process?
                        </li>
                        <li class="mt-3">
                            I’m impressed with how thoroughly you approached
                            this task. What other ideas do you have?
                        </li>
                        <li class="mt-3">
                            Your methodical approach is a great strength. How
                            can we apply it to other areas?
                        </li>
                    </ul>
                </div>

                <p class="text-2xl p-6 font-semibold text-blue-500 mb-4">
                    Corrective and Guidance Phrases
                </p>
                <ul class="list-none list-inside text-lg">
                    <li class="mt-3">
                        It's important to be open to others' ideas too. What do
                        you think your classmates are trying to say?
                    </li>
                    <li class="mt-3">
                        Remember, flexibility is important. How can we adapt if
                        things don't go as planned?
                    </li>
                    <li class="mt-3">
                        I know you like to get things right, but sometimes it's
                        okay to make mistakes and learn from them.
                    </li>
                    <li class="mt-3">
                        Sometimes it helps to take a step back and look at the
                        big picture.
                    </li>
                    <li class="mt-3">
                        We have rules to help guide us, but it's also important
                        to be flexible when needed.
                    </li>
                    <li class="mt-3">
                        If you feel overwhelmed, try breaking the task into
                        smaller, manageable parts.
                    </li>
                    <li class="mt-3">
                        Patience is important. Let's practice being patient and
                        allowing ourselves to make progress step by step.
                    </li>
                </ul>

                <p class="mb-2">
                    By using these strategies and phrases, parents can
                    effectively support and guide their Cautious (C) child,
                    helping them to develop their strengths and address areas
                    for growth.
                </p>
            </div>
        </div>

        <!-- For CD Style Type -->
        <div id="CD" v-if="style == 'CD'">
            <div class="p-6 space-y-6">


                <!-- Phrases for Parents to Use with a Cautious-Dominant (CD) Child Section -->
                <div>
                    <h2 class="text-3xl font-bold mb-2">
                        Phrases for Parents to Use with a Cautious-Dominant (CD)
                        Child
                    </h2>

                    <div>
                        <p class="font-semibold text-blue-500 mb-2">
                            Motivating and Encouraging Phrases:
                        </p>
                        <ul class="list-none pl-6 space-y-2">
                            <li class="mt-3">
                                I love how you think things through. Your
                                attention to detail is amazing.
                            </li>
                            <li class="mt-3">
                                You are a natural leader. Your confidence is
                                inspiring to others.
                            </li>
                            <li class="mt-3">
                                Great job figuring that out! Your
                                problem-solving skills are impressive.
                            </li>
                            <li class="mt-3">
                                I appreciate how you plan everything carefully.
                                It makes a big difference.
                            </li>
                            <li class="mt-3">
                                You did an excellent job leading that project.
                                What did you enjoy most about it?
                            </li>
                            <li class="mt-3">
                                Your focus and determination are wonderful. Keep
                                up the great work!
                            </li>
                            <li class="mt-3">
                                I’m proud of how you handled that situation.
                                What did you learn from it?
                            </li>
                        </ul>
                    </div>

                    <div>
                        <p class="font-semibold text-blue-500 mb-1">
                            Corrective and Guidance Phrases:
                        </p>
                        <ul class="list-none pl- space-y-2">
                            <li class="mt-3">
                                Remember, it’s okay to be flexible sometimes.
                                Let’s try to adapt to this change together.
                            </li>
                            <li class="mt-3">
                                It’s important to listen to others’ ideas too.
                                What do you think your friends have to say?
                            </li>
                            <li class="mt-3">
                                Taking charge is great, but let’s also value the
                                contributions of others.
                            </li>
                            <li class="mt-3">
                                I know you want to get things done quickly, but
                                sometimes it’s helpful to take your time and
                                think it through.
                            </li>
                            <li class="mt-3">
                                We all make mistakes. Let’s talk about what we
                                can learn from this experience.
                            </li>
                            <li class="mt-3">
                                You have great ideas. Let’s make sure everyone
                                in the group has a chance to share theirs too.
                            </li>
                            <li class="mt-3">
                                Patience is key. Let’s practice waiting our turn
                                and listening carefully to others.
                            </li>
                        </ul>
                    </div>
                </div>

                <div>
                    <p>
                        By using these phrases, parents can effectively
                        motivate, guide, and support Cautious-Dominant (CD)
                        children in a way that respects their natural tendencies
                        while promoting positive behaviour and growth.
                    </p>
                </div>
            </div>
        </div>

        <!-- For CS Style Type -->
        <div id="CS" v-if="style == 'CS'">
            <div class="supporting-at-home p-6 space-y-6">


                <!-- Phrases for Parents Section -->
                <div>
                    <h2 class="text-3xl font-bold mb-2">
                        Phrases for Parents to Use with a Cautious-Supportive
                        (CS) Child
                    </h2>
                    <p class="font-semibold text-blue-500 mb-1">
                        Motivating and Encouraging Phrases:
                    </p>
                    <ul class="list-none list-inside space-y-2">
                        <li class="mt-3">
                            I really appreciate how carefully you plan things.
                            Your attention to detail is amazing.
                        </li>
                        <li class="mt-3">
                            You are so reliable. I know I can always count on
                            you.
                        </li>
                        <li class="mt-3">
                            Your support makes a big difference to everyone
                            around you. How can we help more people together?
                        </li>
                        <li class="mt-3">
                            I love how you think things through. Your careful
                            approach is a great strength.
                        </li>
                        <li class="mt-3">
                            You did a wonderful job organising that. What did
                            you enjoy most about it?
                        </li>
                        <li class="mt-3">
                            Your calm and thoughtful nature brings peace to our
                            home. How can we use that to help others?
                        </li>
                        <li class="mt-3">
                            I’m proud of how you handled that situation with
                            such care. What did you learn from it?
                        </li>
                    </ul>
                    <p class="font-semibold text-green-500 mb-1">
                        Corrective and Guidance Phrases:
                    </p>
                    <ul class="list-none list-inside space-y-2">
                        <li class="mt-3">
                            It’s okay to make decisions more quickly sometimes.
                            Trust your instincts.
                        </li>
                        <li class="mt-3">
                            Changes can be tough, but let’s practice how to
                            handle them together.
                        </li>
                        <li class="mt-3">
                            Your feelings matter, but it’s also important to
                            speak up for what you need.
                        </li>
                        <li class="mt-3">
                            We all make mistakes. Let’s talk about what we can
                            learn from this experience.
                        </li>
                        <li class="mt-3">
                            It’s good to try new things, even if they seem a bit
                            challenging at first.
                        </li>
                        <li class="mt-3">
                            Feedback can help us grow. What can we take from
                            this to improve?
                        </li>
                        <li class="mt-3">
                            It’s important to balance helping others with taking
                            care of yourself. How can we make sure you’re also
                            feeling good?
                        </li>
                    </ul>
                </div>

                <div>
                    <p>
                        By using these phrases, parents can effectively
                        motivate, guide, and support Cautious-Supportive (CS)
                        children in a way that respects their natural tendencies
                        while promoting positive behaviour and growth
                    </p>
                </div>
            </div>
        </div>

        <!-- For D Style Type -->
        <div id="D" v-if="style == 'D'">
            <div class="supporting-at-home p-6 space-y-6">


                <!-- Phrases for Parents Section -->
                <div>
                    <h2 class="text-3xl font-bold mb-2">
                        Phrases for Parents to Use with a Dominant (D) Child
                    </h2>
                    <p class="font-semibold text-blue-500 mb-1">
                        Motivating and Encouraging Phrases:
                    </p>
                    <ul class="list-none list-inside space-y-2">
                        <li class="mt-3">
                            I love your enthusiasm. Let's set some goals to
                            achieve together.
                        </li>
                        <li class="mt-3">
                            You're so good at taking charge. How can you use
                            that to help your siblings?
                        </li>
                        <li class="mt-3">
                            Your determination is impressive. Let's plan how you
                            can tackle this new challenge.
                        </li>
                        <li class="mt-3">
                            You did a fantastic job deciding on this. What's
                            your plan for the next step?
                        </li>
                        <li class="mt-3">
                            Your energy is a great strength. How about we use it
                            for this new activity?
                        </li>
                        <li class="mt-3">
                            I’m proud of how you led the family game night. What
                            did you enjoy the most?
                        </li>
                        <li class="mt-3">
                            I see you’re really confident in your decisions. How
                            can we build on that confidence?
                        </li>
                    </ul>
                    <p class="font-semibold text-green-500 mb-1">
                        Corrective and Guidance Phrases:
                    </p>
                    <ul class="list-none list-inside space-y-2">
                        <li class="mt-3">
                            It’s important to listen to others’ ideas too. What
                            do you think your friends have to say?
                        </li>
                        <li class="mt-3">
                            Teamwork means everyone’s voice is heard. How can we
                            include everyone in the decision?
                        </li>
                        <li class="mt-3">
                            Taking charge is great, but let's also value the
                            ideas of others.
                        </li>
                        <li class="mt-3">
                            I know you want to get things done quickly, but
                            sometimes it’s helpful to slow down and think it
                            through.
                        </li>
                        <li class="mt-3">
                            We have rules for a reason. Let's talk about why
                            they are important.
                        </li>
                        <li class="mt-3">
                            When you feel frustrated, try to take a few deep
                            breaths and think about a solution.
                        </li>
                        <li class="mt-3">
                            Patience is key. Let's practice waiting our turn and
                            listening to others.
                        </li>
                    </ul>

                    <p>
                        By using these phrases, parents can effectively
                        motivate, guide, and correct their Dominant child in a
                        way that respects their natural tendencies while
                        promoting positive behaviour and growth
                    </p>
                </div>
            </div>
        </div>

        <!-- For DC Style Type -->
        <div id="DC" v-if="style == 'DC'">
            <div class="supporting-at-home p-6 space-y-6">


                <!-- Phrases for Parents Section -->
                <div>
                    <h2 class="text-3xl font-bold mb-2">
                        Phrases for Parents to Use with a Dominant-Cautious (DC)
                        Child
                    </h2>
                    <p class="font-semibold text-blue-500 mb-1">
                        Motivating and Encouraging Phrases :
                    </p>
                    <ul class="list-none list-inside space-y-2">
                        <li class="mt-3">
                            I love how you take charge. Let's set some goals to
                            achieve together.
                        </li>
                        <li class="mt-3">
                            You did an excellent job paying attention to the
                            details. What’s the next step?
                        </li>
                        <li class="mt-3">
                            Your determination and thoroughness are impressive.
                            Let's see how we can use those skills in this new
                            challenge.
                        </li>
                        <li class="mt-3">
                            You planned that activity so well. How about we try
                            something new next time?
                        </li>
                        <li class="mt-3">
                            Your focus is amazing. Let's channel it into this
                            project.
                        </li>
                        <li class="mt-3">
                            I appreciate how you ensure everything is done
                            correctly. Keep it up!
                        </li>
                        <li class="mt-3">
                            Your careful planning makes everything run smoothly.
                            Great job!
                        </li>
                    </ul>
                    <p class="font-semibold text-green-500 mb-1">
                        Corrective and Guidance Phrases:
                    </p>
                    <ul class="list-none list-inside space-y-2">
                        <li class="mt-3">
                            It’s important to listen to others’ ideas too. What
                            do you think your friends have to say?
                        </li>
                        <li class="mt-3">
                            Teamwork means everyone’s voice is heard. How can we
                            include everyone in the decision?
                        </li>
                        <li class="mt-3">
                            Remember, it’s okay to make mistakes. What can we
                            learn from this?
                        </li>
                        <li class="mt-3">
                            Sometimes it helps to slow down and think things
                            through carefully.
                        </li>
                        <li class="mt-3">
                            We have rules for a reason. Let's talk about why
                            they are important.
                        </li>
                        <li class="mt-3">
                            When you feel overwhelmed, take a moment to breathe
                            and prioritise your tasks.
                        </li>
                        <li class="mt-3">
                            Let's work on being patient and waiting for our turn
                            to speak.
                        </li>
                    </ul>

                    <p>
                        By using these phrases, parents can effectively
                        motivate, guide, and correct their Dominant- Cautious
                        (DC) child in a way that respects their natural
                        tendencies while promoting positive behaviour and growth
                    </p>
                </div>
            </div>
        </div>

        <!-- For DI Style Type -->
        <div id="DI" v-if="style == 'DI'">
            <div class="supporting-at-home p-6 space-y-6">


                <!-- Phrases for Parents Section -->
                <div>
                    <h2 class="text-3xl font-bold mb-2">
                        Phrases for Parents to Use with a Dominant-Influential
                        (DI) Child
                    </h2>
                    <p class="font-semibold text-blue-500 mb-1">
                        Motivating and Encouraging Phrases :
                    </p>
                    <ul class="list-none list-inside space-y-2">
                        <li class="mt-3">
                            I love your enthusiasm! Let's find a fun way to use
                            it.
                        </li>
                        <li class="mt-3">
                            You have great ideas. How can we make them happen?
                        </li>
                        <li class="mt-3">
                            Your energy is fantastic. How about we try this new
                            activity?
                        </li>
                        <li class="mt-3">
                            You’re so good at making friends. How can we include
                            everyone in this game?
                        </li>
                        <li class="mt-3">
                            I’m proud of how you took the lead. What did you
                            enjoy most about it?
                        </li>
                        <li class="mt-3">
                            Your excitement is contagious! Let's see how we can
                            share it with others.
                        </li>
                        <li class="mt-3">
                            You did a great job organising this. What’s your
                            next plan?
                        </li>
                    </ul>
                    <p class="font-semibold text-green-500 mb-1">
                        Corrective and Guidance Phrases:
                    </p>
                    <ul class="list-none list-inside space-y-2">
                        <li class="mt-3">
                            It’s important to listen to others’ ideas too. What
                            do you think your friends have to say?
                        </li>
                        <li class="mt-3">
                            Remember, teamwork means everyone’s voice is heard.
                            How can we include everyone in the decision?
                        </li>
                        <li class="mt-3">
                            Taking charge is great, but let's also value the
                            ideas of others.
                        </li>
                        <li class="mt-3">
                            I know you’re excited, but let’s take a moment to
                            think about our next steps.
                        </li>
                        <li class="mt-3">
                            We have rules for a reason. Let's talk about why
                            they are important.
                        </li>
                        <li class="mt-3">
                            When you feel overwhelmed, try taking a deep breath
                            and think about a solution.
                        </li>
                        <li class="mt-3">
                            Patience is key. Let’s practice waiting our turn and
                            listening to others.
                        </li>
                    </ul>

                    <p>
                        By using these phrases, parents can effectively
                        motivate, guide, and correct their Dominant-Influential
                        (DI) child in a way that respects their natural
                        tendencies while promoting positive behaviour and
                        growth.
                    </p>
                </div>
            </div>
        </div>

        <!-- For I Style Type -->
        <div id="I" v-if="style == 'I'">
            <div class="supporting-at-home p-6 space-y-6">


                <!-- Phrases for Parents Section -->
                <div>
                    <h2 class="text-3xl font-bold mb-2">
                        Phrases for Parents to Use with an Influential (I) Child
                    </h2>
                    <p class="font-semibold text-blue-500 mb-1">
                        Motivating and Encouraging Phrases :
                    </p>
                    <ul class="list-none list-inside space-y-2">
                        <li class="mt-3">
                            Your enthusiasm is amazing! It brings so much joy to
                            everyone around you.
                        </li>
                        <li class="mt-3">
                            You’re so good at making friends. How about we
                            invite some of them over for a playdate?
                        </li>
                        <li class="mt-3">
                            I love how you express your ideas. Let’s find a way
                            to bring them to life!
                        </li>
                        <li class="mt-3">
                            Your creativity shines through in everything you do.
                            What project would you like to work on next?
                        </li>
                        <li class="mt-3">
                            Your positive energy is contagious. How can we use
                            it to brighten someone’s day?
                        </li>
                        <li class="mt-3">
                            You did a great job including everyone in the
                            activity. What did you enjoy the most?
                        </li>
                        <li class="mt-3">
                            I’m impressed with how you communicated your
                            thoughts. How can we build on that skill?
                        </li>
                    </ul>
                    <p class="font-semibold text-green-500 mb-1">
                        Corrective and Guidance Phrases:
                    </p>
                    <ul class="list-none list-inside space-y-2">
                        <li class="mt-3">
                            It's important to listen to others too. What do you
                            think your friends were trying to say?
                        </li>
                        <li class="mt-3">
                            Remember, teamwork means everyone gets to share
                            their ideas. How can we make sure everyone is heard?
                        </li>
                        <li class="mt-3">
                            I know you have a lot to share, but let's give
                            others a chance to speak too.
                        </li>
                        <li class="mt-3">
                            When you're excited, it’s helpful to pause and think
                            about what you want to say next.
                        </li>
                        <li class="mt-3">
                            We have rules to follow so that everyone can have
                            fun. Let’s talk about why they matter.
                        </li>
                        <li class="mt-3">
                            If you feel overwhelmed, try taking a few deep
                            breaths and think about a calm solution.
                        </li>
                        <li class="mt-3">
                            Patience is important. Let's practice waiting our
                            turn and listening carefully to others.
                        </li>
                    </ul>

                    <p>
                        By using these phrases, parents can effectively
                        motivate, guide, and correct Influential (I) children in
                        a way that respects their natural tendencies while
                        promoting positive behaviour and growth.
                    </p>
                </div>
            </div>
        </div>

        <!-- For ID Style Type -->
        <div id="ID" v-if="style == 'ID'">
            <div class="supporting-at-home p-6 space-y-6">

                <!-- Phrases for Parents Section -->
                <div>
                    <h2 class="text-3xl font-bold mb-2">
                        Phrases for Parents to Use with an Influential-Dominant
                        (ID) Child
                    </h2>
                    <p class="font-semibold text-blue-500 mb-1">
                        Motivating and Encouraging Phrases :
                    </p>
                    <ul class="list-none list-inside space-y-2">
                        <li class="mt-3">
                            I love your enthusiasm! Your energy makes everything
                            more exciting.
                        </li>
                        <li class="mt-3">
                            You have such great ideas. How can we turn them into
                            action?
                        </li>
                        <li class="mt-3">
                            Your leadership skills are impressive. Keep
                            inspiring others!
                        </li>
                        <li class="mt-3">
                            You did an amazing job organising that activity.
                            What’s your next plan?
                        </li>
                        <li class="mt-3">
                            Your confidence shines through. How can we use it
                            for this new challenge?
                        </li>
                        <li class="mt-3">
                            You’re a natural leader. How did you feel about
                            leading the group?
                        </li>
                        <li class="mt-3">
                            I'm proud of how you handled that situation. What
                            did you learn from it?
                        </li>
                    </ul>
                    <p class="font-semibold text-green-500 mb-1">
                        Corrective and Guidance Phrases:
                    </p>
                    <ul class="list-none list-inside space-y-2">
                        <li class="mt-3">
                            Listening to others can help us see new
                            perspectives. What do you think your friends are
                            saying?
                        </li>
                        <li class="mt-3">
                            Remember, teamwork means sharing ideas and working
                            together. How can we make sure everyone gets
                            involved?
                        </li>
                        <li class="mt-3">
                            Including everyone’s ideas shows that we value them.
                            How can we encourage others to share their thoughts?
                        </li>
                        <li class="mt-3">
                            Sometimes taking a moment to think before acting can
                            lead to even better outcomes.
                        </li>
                        <li class="mt-3">
                            Let’s discuss why we have certain rules and how they
                            benefit all of us.
                        </li>
                        <li class="mt-3">
                            If you’re feeling frustrated, take a deep breath and
                            think about a calm way to solve the problem.
                        </li>
                        <li class="mt-3">
                            Patience is important. How can we practice waiting
                            and considering others' viewpoints?
                        </li>
                    </ul>

                    <p>
                        By using these phrases, parents can effectively
                        motivate, guide, and support Influential-Dominant (ID)
                        children in a way that respects their natural tendencies
                        while promoting positive behaviour and growth.
                    </p>
                </div>
            </div>
        </div>

        <!-- For IS Style Type -->
        <div id="IS" v-if="style == 'IS'">
            <div class="supporting-at-home p-6 space-y-6">


                <!-- Phrases for Parents Section -->
                <div>
                    <h2 class="text-3xl font-bold mb-2">
                        Phrases for Parents to Use with an
                        Influential-Supportive (IS) Child
                    </h2>
                    <p class="font-semibold text-blue-500 mb-1">
                        Motivating and Encouraging Phrases :
                    </p>
                    <ul class="list-none list-inside space-y-2">
                        <li class="mt-3">
                            I love how you bring everyone together. Your
                            friendliness makes such a positive impact!
                        </li>
                        <li class="mt-3">
                            You always have such creative ideas. How can we
                            explore them further?
                        </li>
                        <li class="mt-3">
                            Your enthusiasm is contagious. Let’s find a fun way
                            to share it with others!
                        </li>
                        <li class="mt-3">
                            I appreciate how you support your friends. What did
                            you enjoy most about helping them?
                        </li>
                        <li class="mt-3">
                            Your positive attitude brightens everyone's day. How
                            can we spread more of your great ideas?
                        </li>
                        <li class="mt-3">
                            You did a fantastic job working with your friends.
                            What other group activities would you like to try?
                        </li>
                        <li class="mt-3">
                            I'm proud of how you handled that situation. What
                            did you learn from it?
                        </li>
                    </ul>
                    <p class="font-semibold text-green-500 mb-1">
                        Corrective and Guidance Phrases:
                    </p>
                    <ul class="list-none list-inside space-y-2">
                        <li class="mt-3">
                            It's important to listen to others too. What do you
                            think your friends are trying to say?
                        </li>
                        <li class="mt-3">
                            Remember, teamwork means everyone's ideas matter.
                            How can we make sure everyone feels included?
                        </li>
                        <li class="mt-3">
                            I know you're excited, but let's take a moment to
                            think about the best way to proceed.
                        </li>
                        <li class="mt-3">
                            Sometimes it helps to pause and consider different
                            options.
                        </li>
                        <li class="mt-3">
                            We have rules to follow so that everyone can have
                            fun. Let's talk about why they are important.
                        </li>
                        <li class="mt-3">
                            If you feel overwhelmed, try taking a deep breath
                            and thinking about what you can do next.
                        </li>
                        <li class="mt-3">
                            Let's practice being patient and waiting for our
                            turn to speak.
                        </li>
                    </ul>

                    <p class="mt-6">
                        By using these phrases, parents can effectively
                        motivate, guide, and support Influential-Supportive (IS)
                        children in a way that respects their natural tendencies
                        while promoting positive behaviour and growth.
                    </p>
                </div>
            </div>
        </div>

        <!-- For S Style Type -->
        <div id="S" v-if="style == 'S'">
            <div class="supporting-at-home p-6 space-y-6">


                <!-- Phrases for Parents Section -->
                <div>
                    <h2 class="text-3xl font-bold mb-2">
                        Phrases for Parents to Use with a Supportive (S) Child
                    </h2>
                    <p class="font-semibold text-blue-500 mb-1">
                        Motivating and Encouraging Phrases :
                    </p>
                    <ul class="list-none list-inside space-y-2">
                        <li class="mt-3">
                            I love how caring and supportive you are. Your
                            friends are lucky to have you!
                        </li>
                        <li class="mt-3">
                            You did a great job helping out. How did it make you
                            feel?
                        </li>
                        <li class="mt-3">
                            Your patience and kindness are wonderful traits.
                            Keep being you!
                        </li>
                        <li class="mt-3">
                            You’re a great team player. How can we use your
                            skills for this project?
                        </li>
                        <li class="mt-3">
                            I appreciate how you include everyone. What do you
                            think we should do next?
                        </li>
                        <li class="mt-3">
                            Your calm and steady approach is so helpful. Thank
                            you for being reliable.
                        </li>
                        <li class="mt-3">
                            You have a special way of making others feel valued.
                            How can we build on that?
                        </li>
                    </ul>
                    <p class="font-semibold text-green-500 mb-1">
                        Corrective and Guidance Phrases:
                    </p>
                    <ul class="list-none list-inside space-y-2">
                        <li class="mt-3">
                            It's important to share your thoughts too. What do
                            you think about this?
                        </li>
                        <li class="mt-3">
                            Remember, your ideas are just as important. Let’s
                            hear what you have to say.
                        </li>
                        <li class="mt-3">
                            Taking the lead can be fun too. How about you try it
                            this time?
                        </li>
                        <li class="mt-3">
                            Sometimes, it’s okay to say no. How can we set
                            healthy boundaries?
                        </li>
                        <li class="mt-3">
                            We have rules to help everyone get along. Let’s talk
                            about why they matter.
                        </li>
                        <li class="mt-3">
                            When you feel overwhelmed, it’s okay to take a
                            break. What helps you relax?
                        </li>
                        <li class="mt-3">
                            Patience is great, but don’t forget to speak up when
                            you need something.
                        </li>
                    </ul>
                    <p>
                        By using these phrases, parents can effectively
                        motivate, guide, and correct Supportive (S) children in
                        a way that respects their natural tendencies while
                        promoting positive behaviour and growth.
                    </p>
                </div>
            </div>
        </div>

        <!-- For SC Style Type -->
        <div id="SC" v-if="style == 'SC'">
            <div class="supporting-at-home p-6 space-y-6">


                <!-- Phrases for Parents Section -->
                <div>
                    <h2 class="text-3xl font-bold mb-2">
                        Phrases for Parents to Use with a Supportive-Cautious
                        (SC) Child
                    </h2>
                    <p class="font-semibold text-blue-500 mb-1">
                        Motivating and Encouraging Phrases: :
                    </p>
                    <ul class="list-none list-inside space-y-2">
                        <li class="mt-3">
                            I appreciate how thoughtful you are. Your
                            consideration for others is wonderful.
                        </li>
                        <li class="mt-3">
                            You are so reliable and trustworthy. People can
                            always count on you.
                        </li>
                        <li class="mt-3">
                            Your support means a lot to your friends. How can we
                            help others more?
                        </li>
                        <li class="mt-3">
                            I love how you always think things through
                            carefully. Your attention to detail is impressive.
                        </li>
                        <li class="mt-3">
                            You did a fantastic job helping with that project.
                            What did you enjoy most about it?
                        </li>
                        <li class="mt-3">
                            Your calm and thoughtful nature makes everyone feel
                            comfortable. How can we use that in new situations?
                        </li>
                        <li class="mt-3">
                            I’m proud of how you handled that situation with
                            such care. What did you learn from it?
                        </li>
                    </ul>
                    <p class="font-semibold text-green-500 mb-1">
                        Corrective and Guidance Phrases:
                    </p>
                    <ul class="list-none list-inside space-y-2">
                        <li class="mt-3">
                            It’s okay to make decisions more quickly. Trust
                            yourself and go with your first thought.
                        </li>
                        <li class="mt-3">
                            Sometimes, changes happen suddenly. Let’s practice
                            how to adapt when things don’t go as planned.
                        </li>
                        <li class="mt-3">
                            Your feelings are important, but it’s also okay to
                            speak up when you need something.
                        </li>
                        <li class="mt-3">
                            We all make mistakes. Let’s talk about what we can
                            learn from this experience.
                        </li>
                        <li class="mt-3">
                            Remember, it’s good to try new things even if they
                            seem a bit challenging at first.
                        </li>
                        <li class="mt-3">
                            Criticism can help us grow. What can we take from
                            this feedback to improve?
                        </li>
                        <li class="mt-3">
                            It’s important to balance your support for others
                            with taking care of yourself. How can we make sure
                            you’re also feeling good?
                        </li>
                    </ul>
                </div>
            </div>
            <div class="supporting-at-home p-6 space-y-6">
                <p>
                    By using these phrases, parents can effectively motivate,
                    guide, and support Supportive-Cautious (SC) children in a
                    way that respects their natural tendencies while promoting
                    positive behaviour and growth.
                </p>
            </div>
        </div>

        <!-- For SI Style Type -->
        <div id="SI" v-if="style == 'SI'">
            <div class="supporting-at-home p-6 space-y-6">


                <!-- Phrases for Parents Section -->
                <div>
                    <h2 class="text-3xl font-bold mb-2">
                        Phrases for Parents to Use with a Supportive-Influential
                        (SI) Child
                    </h2>
                    <p class="font-semibold text-blue-500 mb-1">
                        Motivating and Encouraging Phrases:
                    </p>
                    <ul class="list-none list-inside space-y-2">
                        <li class="mt-3">
                            I love how kind you are to everyone. Your kindness
                            makes a big difference.
                        </li>
                        <li class="mt-3">
                            You have a wonderful way of including everyone. How
                            can we use that more often?
                        </li>
                        <li class="mt-3">
                            Your creativity always amazes me. What new project
                            do you want to start?
                        </li>
                        <li class="mt-3">
                            You did a fantastic job helping your friends. What
                            did you enjoy most about it?
                        </li>
                        <li class="mt-3">
                            Your positive attitude brightens everyone’s day. How
                            can we share it even more?
                        </li>
                        <li class="mt-3">
                            You’re so good at bringing people together. What
                            other activities can we try?
                        </li>
                        <li class="mt-3">
                            I'm really proud of how you handled that situation.
                            What did you learn from it?
                        </li>
                    </ul>
                    <p class="font-semibold text-green-500 mb-1">
                        Corrective and Guidance Phrases:
                    </p>
                    <ul class="list-none list-inside space-y-2">
                        <li class="mt-3">
                            Remember, it’s okay to speak up for yourself. How do
                            you feel about sharing your ideas?
                        </li>
                        <li class="mt-3">
                            It’s important to also think about what you need.
                            How can we make sure you’re heard?
                        </li>
                        <li class="mt-3">
                            Sometimes making a decision can be hard but trust
                            yourself. What do you think is best?
                        </li>
                        <li class="mt-3">
                            Everyone makes mistakes. Let’s talk about what we
                            can learn from this.
                        </li>
                        <li class="mt-3">
                            It’s okay to say no if you need to. How can we
                            practice being more assertive?
                        </li>
                        <li class="mt-3">
                            Criticism can be tough, but it helps us grow. What
                            can we take from this feedback?
                        </li>
                        <li class="mt-3">
                            Your feelings matter too. How can we balance what
                            you want with what others need?
                        </li>
                    </ul>
                    <p class="text-base">
                        By using these phrases, parents can effectively
                        motivate, guide, and support Supportive-Influential (SI)
                        children in a way that respects their natural tendencies
                        while promoting positive behaviour and growth.
                    </p>
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
    /* font-size: 129px; */

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
.text-base,
strong,
span,
li.mt-3 {
    font-size: 1.125rem;
    line-height: 1.75rem;
}

ul > li {
    margin-top: 13px;
}

strong,
li > span {
    font-size: 19px;
}

p.text-blue-500,
p.text-green-500 {
    font-size: 23px;
    font-weight: bold;
}

/* Add these new mobile responsive styles */
@media (max-width: 768px) {
    .row {
        display: flex;
        flex-direction: column;
    }

    strong {
        font-size: 1rem !important;
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

    p {
        font-size: 18px !important;
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
    name: "GuidanceForParentsSecond",
    layout: AssessmentTypes,
    props: {
        style: String,
        childName: String,
        image: String,
    },
};
</script>
