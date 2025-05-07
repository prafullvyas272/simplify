<template>
    <div class="p-6">
        <div class="container mx-auto p-4">
            <h1 class="font-bold mb-4 text-center">Guidance for Parents</h1>
        </div>
        <div v-if="style == 'C'">
            <div class="supporting-at-home p-6 mb-6">
                <h2 class="text-3xl font-bold mb-2">
                    Supporting Your Child at Home
                </h2>
                <p class="font-semibold text-blue-500 mb-2">
                    Tips for Supporting {{ childName }} at Home:
                </p>
                <ul class="list-none list-inside mb-6">
                    <div class="row">
                        <div class="col-6">
                            <li class="mt-3">
                                <strong>Encourage Detailed Activities:</strong>
                                <ul class="list-none list-inside ml-6">
                                    <li class="mt-3">
                                        Provide {{ childName }} with projects
                                        that require attention to detail, such
                                        as model building, puzzles, or crafts.
                                    </li>
                                    <li class="mt-3">
                                        Involve them in activities that require
                                        problem-solving and analysis, like
                                        strategy games or science experiments.
                                    </li>
                                </ul>
                            </li>
                            <li class="mt-3">
                                <strong>Promote Social Interaction:</strong>
                                <ul class="list-none list-inside ml-6">
                                    <li class="mt-3">
                                        Arrange playdates or group activities
                                        with a small number of children where
                                        {{ childName }} can feel comfortable.
                                    </li>
                                    <li class="mt-3">
                                        Create opportunities for meaningful
                                        discussions at home where they can share
                                        their thoughts and ideas.
                                    </li>
                                </ul>
                            </li>
                        </div>
                        <div class="col-6 d-flex">
                            <div class="flex justify-center items-center">
                                <img
                                    class="w-100 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page16.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                    </div>

                    <li class="mt-3">
                        <strong>Support Flexibility and Adaptability:</strong>
                        <ul class="list-none list-inside ml-6">
                            <li class="mt-3">
                                Help {{ childName }} adapt to change by
                                gradually introducing small changes in their
                                routine or environment.
                            </li>
                            <li class="mt-3">
                                Discuss the importance of being flexible and
                                open to new experiences and perspectives.
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="effective-communication p-6 rounded-lg mb-6">
                <h2 class="text-3xl font-bold mb-2">
                    Strategies for Effective Communication
                </h2>
                <p class="font-semibold text-blue-500 mb-2">
                    Effective Communication with {{ childName }} :
                </p>

                <div class="row">
                    <div class="col-6">
                        <div class="flex justify-center items-center mb-4">
                            <img
                                class="w-96 h-auto object-contain"
                                :src="'/images/reports-svg-images/Page17.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="col-6">
                        <ol class="list-none list-inside mb-6">
                            <li class="mt-3">
                                <strong>Be Detailed and Clear:</strong>
                                <ul class="list-none list-inside ml-6">
                                    <li class="mt-3">
                                        Use precise and detailed language when
                                        giving instructions or discussing
                                        expectations. {{ childName }}
                                        appreciates clarity and specificity.
                                    </li>
                                    <li class="mt-3">
                                        Break larger tasks into smaller,
                                        manageable steps to help them understand
                                        what needs to be done.
                                    </li>
                                </ul>
                            </li>
                            <li class="mt-3">
                                <strong>Encourage Open Dialogue:</strong>
                                <ul class="list-none list-inside ml-6">
                                    <li class="mt-3">
                                        Ensure {{ childName }} feels comfortable
                                        expressing their thoughts and feelings
                                        without judgment. Encourage open and
                                        honest communication.
                                    </li>
                                    <li class="mt-3">
                                        Use questions that encourage them to
                                        share their ideas and perspectives in
                                        detail.
                                    </li>
                                </ul>
                            </li>
                            <li class="mt-3">
                                <strong>Provide Constructive Feedback:</strong>
                                <ul class="list-none list-inside ml-6">
                                    <li class="mt-3">
                                        Give detailed, actionable feedback that
                                        helps {{ childName }} understand how
                                        they can improve.
                                    </li>
                                    <li class="mt-3">
                                        Highlight their strengths while gently
                                        addressing areas for growth, nurturing a
                                        supportive learning environment.
                                    </li>
                                </ul>
                            </li>
                        </ol>
                    </div>
                </div>

            </div>
        </div>

        <!-- For CD Style Type -->
        <div id="CD" v-if="style == 'CD'">
            <div class="p-6 space-y-6">
                <!-- Supporting Your Child at Home Section -->
                <div>
                    <h2 class="text-3xl font-bold mb-2">
                        Supporting Your Child at Home
                    </h2>
                    <p class="font-semibold text-blue-500 mb-2">
                        Tips for Supporting {{ childName }} at Home:
                    </p>
                    <ul class="list-none pl-6 space-y-2">
                        <div class="row">
                            <div class="col-6">
                                <li class="mt-3">
                                    <span class="font-bold"
                                        >Encourage Leadership:</span
                                    >
                                    <p class="ml-5">
                                        Give {{ childName }} chances to lead at
                                        home, such as planning family activities
                                        or organising their own projects.
                                    </p>
                                    <p class="ml-5">
                                        Let them make decisions about certain
                                        parts of their daily routine, helping
                                        them feel more independent and
                                        responsible.
                                    </p>
                                </li>
                                <li class="mt-3">
                                    <span class="font-bold"
                                        >Promote Flexibility:</span
                                    >
                                    <p class="ml-5">
                                        Introduce activities that require
                                        adapting and quick thinking, like
                                        impromptu games or creative
                                        storytelling.
                                    </p>
                                    <p class="ml-5">
                                        Encourage them to try new things and
                                        embrace changes, which will help them
                                        become more adaptable.
                                    </p>
                                </li>
                            </div>
                            <div class="col-6 d-flex">
                                <div class="flex justify-center items-center">
                                    <img
                                        class="w-100 h-auto object-contain"
                                        :src="'/images/reports-svg-images/Page16.svg'"
                                        alt=""
                                    />
                                </div>
                            </div>
                        </div>
                        <li class="mt-3">
                            <span class="font-semibold"
                                >Build Patience and Empathy:</span
                            >
                            <p class="ml-5">
                                Encourage {{ childName }} to listen to others
                                and think about their feelings. Role-playing
                                different scenarios can help them practice
                                empathy.
                            </p>
                            <p class="ml-5">
                                Engage in activities that require patience and
                                teamwork, such as building complex models or
                                working on group projects.
                            </p>
                        </li>
                    </ul>
                </div>

                <!-- Strategies for Effective Communication Section -->
                <div>
                    <h2 class="text-3xl font-bold mb-2">
                        Strategies for Effective Communication
                    </h2>
                    <p class="font-semibold text-blue-500 mb-2">
                        Effective Communication with {{ childName }} :
                    </p>
                    <div class="row">
                        <div class="col-6 d-flex">
                            <div class="flex justify-center items-center">
                                <img
                                    class="w-100 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page17.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                        <div class="col-6">
                            <ul class="list-none pl-6 space-y-2">
                                <li class="mt-3">
                                    <span class="font-semibold"
                                        >Set Firm Boundaries and
                                        Expectations:</span
                                    >
                                    <p class="ml-5">
                                        Clearly define rules and expectations in
                                        a firm but supportive manner. Explain
                                        the reasons behind rules and how they
                                        benefit everyone, helping
                                        {{ childName }} understand and follow
                                        them more easily.
                                    </p>
                                    <p class="ml-5">
                                        Provide consistent reminders about the
                                        boundaries and expectations, helping
                                        them stay on track without feeling
                                        criticised.
                                    </p>
                                </li>
                                <li class="mt-3">
                                    <span class="font-semibold"
                                        >Practice Active Listening:</span
                                    >
                                    <p class="ml-5">
                                        Show that you are listening by nodding,
                                        maintaining eye contact, and reflecting
                                        back what they say. This demonstrates
                                        that you value their input and
                                        understand their perspective.
                                    </p>
                                    <p class="ml-5">
                                        Encourage them to practice active
                                        listening with others, promoting mutual
                                        respect and understanding in
                                        conversations.
                                    </p>
                                </li>
                                <li class="mt-3">
                                    <span class="font-semibold"
                                        >Provide Constructive Feedback:</span
                                    >
                                    <p class="ml-5">
                                        Offer specific, constructive feedback
                                        that highlights what they did well and
                                        offers suggestions for improvement. Use
                                        a supportive and encouraging tone.
                                    </p>
                                    <p class="ml-5">
                                        Encourage self-assessment by asking
                                        {{ childName }} to reflect on their
                                        performance and identify areas for
                                        growth, promoting a proactive mindset.
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- For CS Style Type -->
        <div id="CS" v-if="style == 'CS'">
            <div class="supporting-at-home p-6 space-y-6">
                <div>
                    <h2 class="text-3xl font-bold mb-2">
                        Supporting Your Child at Home
                    </h2>
                    <p class="font-semibold text-blue-500 mb-2">
                        Tips for Supporting {{ childName }} at Home:
                    </p>
                    <ul class="list-none list-inside space-y-4">
                        <div class="row">
                            <div class="col-6">
                                <li class="mt-3">
                                    <span class="font-bold"
                                        >Develop Confidence and
                                        Independence:</span
                                    >
                                    <ul class="list-none pl-6 space-y-2">
                                        <li class="mt-3">
                                            Encourage {{ childName }} to make
                                            decisions independently, starting
                                            with small choices and gradually
                                            moving to bigger ones.
                                        </li>
                                        <li class="mt-3">
                                            Celebrate their successes and praise
                                            their efforts, helping them build
                                            confidence and trust in their
                                            abilities.
                                        </li>
                                    </ul>
                                </li>
                                <li class="mt-3">
                                    <span class="font-bold"
                                        >Enhance Problem-Solving Skills:</span
                                    >
                                    <ul class="list-none pl-6 space-y-2">
                                        <li class="mt-3">
                                            Engage {{ childName }} in
                                            problem-solving activities, such as
                                            puzzles, strategy games, or
                                            brainstorming sessions for family
                                            projects.
                                        </li>
                                        <li class="mt-3">
                                            Discuss different approaches to
                                            solving problems and encourage them
                                            to think through various solutions.
                                        </li>
                                    </ul>
                                </li>
                            </div>
                            <div class="col-6 d-flex">
                                <div class="flex justify-center items-center">
                                    <img
                                        class="w-100 h-auto object-contain"
                                        :src="'/images/reports-svg-images/Page16.svg'"
                                        alt=""
                                    />
                                </div>
                            </div>
                        </div>

                        <li class="mt-3">
                            <span class="font-bold"
                                >Promote Social Interaction:</span
                            >
                            <ul class="list-none pl-6 space-y-2">
                                <li class="mt-3">
                                    Encourage {{ childName }} to participate in
                                    group activities and playdates where they
                                    can interact with peers in a supportive
                                    environment.
                                </li>
                                <li class="mt-3">
                                    Involve them in family discussions and
                                    decisions, emphasising the value of their
                                    input and ideas.
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <!-- Strategies for Effective Communication Section -->
                <div>
                    <h2 class="text-3xl font-bold mb-2">
                        Strategies for Effective Communication
                    </h2>
                    <p class="font-semibold text-blue-500 mb-1">
                        Effective Communication with {{ childName }} :
                    </p>

                    <div class="row">
                        <div class="col-6 d-flex">
                            <div class="flex justify-center items-center">
                                <img
                                    class="w-100 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page17.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                        <div class="col-6">
                            <ul class="list-none list-inside space-y-4">
                                <li class="mt-3">
                                    <span class="font-bold"
                                        >Be Clear and Detailed:</span
                                    >
                                    <ul class="list-none pl-6 space-y-2">
                                        <li class="mt-3">
                                            Use clear and detailed language when
                                            giving instructions or discussing
                                            expectations. Avoid ambiguous
                                            explanations and provide specific
                                            guidance.
                                        </li>
                                        <li class="mt-3">
                                            Break down tasks into manageable
                                            steps, ensuring
                                            {{ childName }} understands each
                                            part of the process.
                                        </li>
                                    </ul>
                                </li>
                                <li class="mt-3">
                                    <span class="font-bold"
                                        >Encourage Open Dialogue:</span
                                    >
                                    <ul class="list-none pl-6 space-y-2">
                                        <li class="mt-3">
                                            Create an environment where
                                            {{ childName }} feels comfortable
                                            expressing their thoughts and
                                            feelings. Show genuine interest in
                                            their ideas and listen attentively.
                                        </li>
                                        <li class="mt-3">
                                            Ask open-ended questions to
                                            encourage them to share more about
                                            their experiences and feelings,
                                            nurturing a sense of being heard and
                                            valued.
                                        </li>
                                    </ul>
                                </li>
                                <li class="mt-3">
                                    <span class="font-bold"
                                        >Set Gentle Boundaries and
                                        Expectations:</span
                                    >
                                    <ul class="list-none pl-6 space-y-2">
                                        <li class="mt-3">
                                            Clearly define rules and
                                            expectations in a gentle and
                                            supportive manner. Explain the
                                            reasons behind rules and how they
                                            benefit everyone, helping
                                            {{ childName }}
                                            understand and follow them more
                                            easily.
                                        </li>
                                        <li class="mt-3">
                                            Provide gentle reminders about the
                                            boundaries and expectations, helping
                                            them stay on track without feeling
                                            criticised.
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- For D Style Type -->
        <div id="D" v-if="style == 'D'">
            <div class="supporting-at-home p-6 space-y-6">
                <!-- Supporting Your Child at Home Section -->
                <div>
                    <h2 class="text-3xl font-bold mb-2">
                        Supporting Your Child at Home
                    </h2>
                    <p class="font-semibold text-blue-500 mb-2">
                        Tips for Supporting {{ childName }} at Home:
                    </p>
                    <ul class="list-none list-inside space-y-4">
                        <div class="row">
                            <div class="col-6">
                                <li class="mt-3">
                                    <span class="font-bold"
                                        >Encourage Leadership:</span
                                    >
                                    <ul class="list-none pl-6 space-y-2">
                                        <li class="mt-3">
                                            Provide opportunities for
                                            {{ childName }} to take on
                                            leadership roles at home, such as
                                            planning family activities or
                                            helping with household tasks.
                                        </li>
                                        <li class="mt-3">
                                            Allow them to make decisions about
                                            certain aspects of their daily
                                            routine, creating a sense of
                                            autonomy and responsibility.
                                        </li>
                                    </ul>
                                </li>
                                <li class="mt-3">
                                    <span class="font-bold"
                                        >Promote Healthy Competition:</span
                                    >
                                    <ul class="list-none pl-6 space-y-2">
                                        <li class="mt-3">
                                            Engage in games and activities that
                                            involve friendly competition,
                                            emphasising the importance of good
                                            sportsmanship and learning from both
                                            wins and losses.
                                        </li>
                                        <li class="mt-3">
                                            Celebrate their achievements and set
                                            new, challenging goals together.
                                        </li>
                                    </ul>
                                </li>
                            </div>
                            <div class="col-6 d-flex">
                                <div class="flex justify-center items-center">
                                    <img
                                        class="w-100 h-auto object-contain"
                                        :src="'/images/reports-svg-images/Page16.svg'"
                                        alt=""
                                    />
                                </div>
                            </div>
                        </div>
                        <li class="mt-3">
                            <span class="font-bold"
                                >Promote Patience and Empathy:</span
                            >
                            <ul class="list-none pl-6 space-y-2">
                                <li class="mt-3">
                                    Encourage {{ childName }} to listen to
                                    others’ perspectives and consider their
                                    feelings. Role-playing scenarios can be
                                    helpful for practising empathy.
                                </li>
                                <li class="mt-3">
                                    Provide activities that require patience and
                                    collaboration, such as building complex
                                    models or completing puzzles as a team.
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <!-- Strategies for Effective Communication Section -->
                <div>
                    <h2 class="text-3xl font-bold mb-2">
                        Strategies for Effective Communication
                    </h2>
                    <p class="font-semibold text-blue-500 mb-1">
                        Effective Communication with {{ childName }} :
                    </p>
                    <div class="row">
                        <div class="col-6 d-flex">
                            <div class="flex justify-center items-center">
                                <img
                                    class="w-100 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page17.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                        <div class="col-6">
                            <ul class="list-none list-inside space-y-4">
                                <li class="mt-3">
                                    <span class="font-bold"
                                        >Be Direct and Clear:</span
                                    >
                                    <ul class="list-none pl-6 space-y-2">
                                        <li class="mt-3">
                                            Use straightforward language when
                                            giving instructions or discussing
                                            expectations. Avoid ambiguous or
                                            overly complex explanations.
                                        </li>
                                        <li class="mt-3">
                                            Provide clear and concise feedback
                                            on their behaviour and performance.
                                        </li>
                                    </ul>
                                </li>
                                <li class="mt-3">
                                    <span class="font-bold"
                                        >Encourage Open Dialogue:</span
                                    >
                                    <ul class="list-none pl-6 space-y-2">
                                        <li class="mt-3">
                                            Create an environment where
                                            {{ childName }} feels comfortable
                                            expressing their thoughts and
                                            opinions.
                                        </li>
                                        <li class="mt-3">
                                            Ask open-ended questions to
                                            encourage them to share more about
                                            their experiences and feelings.
                                        </li>
                                    </ul>
                                </li>
                                <li class="mt-3">
                                    <span class="font-bold"
                                        >Set Boundaries and Expectations:</span
                                    >
                                    <ul class="list-none pl-6 space-y-2">
                                        <li class="mt-3">
                                            Clearly define rules and
                                            consequences, ensuring that
                                            {{ childName }} understands what is
                                            expected of them.
                                        </li>
                                        <li class="mt-3">
                                            Consistently enforce boundaries
                                            while allowing for some flexibility
                                            when appropriate.
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- For DC Style Type -->
        <div id="DC" v-if="style == 'DC'">
            <div class="supporting-at-home p-6 space-y-6">
                <!-- Supporting Your Child at Home Section -->
                <div>
                    <h2 class="text-3xl font-bold mb-2">
                        Supporting Your Child at Home
                    </h2>
                    <p class="font-semibold text-blue-500 mb-1">
                        Tips for Supporting {{ childName }} at Home:
                    </p>
                    <ul class="list-none list-inside space-y-4">
                        <div class="row">
                            <div class="col-6">
                                <li class="mt-3">
                                    <span class="font-bold"
                                        >Encourage Leadership:</span
                                    >
                                    <ul class="list-none pl-6 space-y-2">
                                        <li class="mt-3">
                                            Provide opportunities for
                                            {{ childName }} to take on
                                            leadership roles at home, such as
                                            planning family activities or
                                            helping with household tasks.<br />
                                        </li>
                                        <li class="mt-3">
                                            Allow them to make decisions about
                                            certain aspects of their daily
                                            routine, creating a sense of
                                            autonomy and responsibility.
                                        </li>
                                    </ul>
                                </li>
                                <li class="mt-3">
                                    <span class="font-bold"
                                        >Promote Attention to Detail:</span
                                    >
                                    <ul class="list-none pl-6 space-y-2">
                                        <li class="mt-3">
                                            Engage in activities that require
                                            precision, such as building models,
                                            doing puzzles, or cooking with
                                            detailed recipes.
                                        </li>
                                        <li class="mt-3">
                                            Encourage them to take pride in
                                            doing tasks thoroughly and praise
                                            their attention to detail.
                                        </li>
                                    </ul>
                                </li>
                            </div>
                            <div class="col-6 d-flex">
                                <div class="flex justify-center items-center">
                                    <img
                                        class="w-100 h-auto object-contain"
                                        :src="'/images/reports-svg-images/Page16.svg'"
                                        alt=""
                                    />
                                </div>
                            </div>
                        </div>
                        <li class="mt-3">
                            <span class="font-bold"
                                >Encourage Patience and Flexibility:</span
                            >
                            <ul class="list-none pl-6 space-y-2">
                                <li class="mt-3">
                                    Introduce activities that require waiting
                                    and patience, like gardening or long-term
                                    projects.
                                </li>
                                <li class="mt-3">
                                    Help them adapt to changes by gradually
                                    introducing new routines or plans, and
                                    discuss the importance of being flexible.
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <!-- Strategies for Effective Communication Section -->
                <div>
                    <h2 class="text-3xl font-bold mb-2">
                        Strategies for Effective Communication
                    </h2>
                    <p class="font-semibold text-blue-500 mb-1">
                        Effective Communication with {{ childName }} :
                    </p>
                    <div class="row">
                        <div class="col-6 d-flex">
                            <div class="flex justify-center items-center">
                                <img
                                    class="w-100 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page17.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                        <div class="col-6">
                            <ul class="list-none list-inside space-y-4">
                                <li class="mt-3">
                                    <span class="font-bold"
                                        >Be Detailed and Precise:</span
                                    >
                                    <ul class="list-none pl-6 space-y-2">
                                        <li class="mt-3">
                                            When giving instructions, be
                                            specific and thorough.
                                            {{ childName }} appreciates knowing
                                            exactly what is expected.
                                        </li>
                                        <li class="mt-3">
                                            Use clear, step-by-step guidance,
                                            especially for new or complex tasks.
                                        </li>
                                    </ul>
                                </li>
                                <li class="mt-3">
                                    <span class="font-bold"
                                        >Encourage Analytical Thinking:</span
                                    >
                                    <ul class="list-none pl-6 space-y-2">
                                        <li class="mt-3">
                                            Ask questions that promote critical
                                            thinking and problem-solving.
                                        </li>
                                        <li class="mt-3">
                                            Discuss different outcomes and
                                            possibilities, allowing them to
                                            explore various solutions.
                                        </li>
                                    </ul>
                                </li>
                                <li class="mt-3">
                                    <span class="font-bold"
                                        >Reinforce Consistency and
                                        Structure:</span
                                    >
                                    <ul class="list-none pl-6 space-y-2">
                                        <li class="mt-3">
                                            Maintain a consistent routine, as
                                            predictability helps
                                            {{ childName }} feel secure.
                                        </li>
                                        <li class="mt-3">
                                            Set clear and consistent boundaries,
                                            explaining the reasons behind rules
                                            and expectations.
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- For DI Style Type -->
        <div id="DI" v-if="style == 'DI'">
            <div class="supporting-at-home p-6 space-y-6">
                <!-- Supporting Your Child at Home Section -->
                <div>
                    <h2 class="text-3xl font-bold mb-2">
                        Supporting Your Child at Home
                    </h2>
                    <p class="font-semibold text-blue-500 mb-1">
                        Tips for Supporting {{ childName }} at Home:
                    </p>

                    <ul class="list-none list-inside space-y-4 strong-ul-size">
                        <div class="row">
                            <div class="col-6">
                                <li class="mt-3">
                                    <strong>Promote Social Engagement:</strong>
                                    <p>
                                        Engage in social activities that involve
                                        interaction with peers, such as
                                        playdates, team sports, or group
                                        projects.
                                    </p>
                                    <p>
                                        Celebrate their achievements in social
                                        settings and encourage them to set new,
                                        exciting social goals.
                                    </p>
                                </li>
                                <li class="mt-3">
                                    <strong
                                        >Teach Patience and
                                        Self-Regulation:</strong
                                    >
                                    <p>
                                        Help {{ childName }} develop patience by
                                        engaging in activities that require
                                        waiting for turns or long-term planning,
                                        such as gardening or baking.
                                    </p>
                                    <p>
                                        Practice calming techniques, like deep
                                        breathing or mindfulness exercises, to
                                        help them manage their high energy
                                        levels.
                                    </p>
                                </li>
                            </div>
                            <div class="col-6 d-flex">
                                <div class="flex justify-center items-center">
                                    <img
                                        class="w-100 h-auto object-contain"
                                        :src="'/images/reports-svg-images/Page16.svg'"
                                        alt=""
                                    />
                                </div>
                            </div>
                        </div>
                        <li class="mt-3">
                            <strong
                                >Encourage Leadership and Social
                                Interaction:</strong
                            >
                            <p>
                                Provide opportunities for {{ childName }} to
                                take on leadership roles at home, such as
                                organising family activities or helping with
                                household tasks.
                            </p>
                            <p>
                                Allow them to make decisions about certain
                                aspects of their daily routine, creating a sense
                                of autonomy and responsibility.
                            </p>
                        </li>
                    </ul>
                </div>

                <!-- Strategies for Effective Communication Section -->
                <div>
                    <h2 class="text-3xl font-bold mb-2">
                        Strategies for Effective Communication
                    </h2>
                    <p class="font-semibold text-blue-500 mb-1">
                        Effective Communication with {{ childName }} :
                    </p>
                    <div class="row">
                        <div class="col-6 d-flex">
                            <div class="flex justify-center items-center">
                                <img
                                    class="w-100 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page17.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                        <div class="col-6">
                            <ul class="list-none list-inside space-y-4">
                                <li class="mt-3">
                                    <strong
                                        >Be Enthusiastic and Engaging:</strong
                                    >

                                    <p>
                                        Use enthusiastic and lively language to
                                        capture their interest and maintain
                                        their attention.
                                    </p>
                                    <p>
                                        Encourage them to share their excitement
                                        and ideas freely, validating their
                                        enthusiasm.
                                    </p>
                                </li>
                                <li class="mt-3">
                                    <strong
                                        >Encourage Group Discussions:</strong
                                    >
                                    <p>
                                        Facilitate group discussions where they
                                        can express their thoughts and listen to
                                        others.
                                    </p>
                                    <p>
                                        Use roundtable discussions or group
                                        brainstorming sessions to stimulate
                                        their thinking and communication skills.
                                    </p>
                                </li>
                                <li class="mt-3">
                                    <strong
                                        >Provide Constructive Feedback:</strong
                                    >
                                    <p>
                                        Offer specific, actionable feedback that
                                        focuses on their strengths while gently
                                        addressing areas for improvement.
                                    </p>
                                    <p>
                                        Reinforce positive behaviour and
                                        achievements with praise and
                                        recognition.
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- For I Style Type -->
        <div id="I" v-if="style == 'I'">
            <div class="supporting-at-home p-6 space-y-6">
                <!-- Supporting Your Child at Home Section -->
                <div>
                    <h2 class="text-3xl font-bold mb-2">
                        Supporting Your Child at Home
                    </h2>
                    <p class="font-semibold text-blue-500 mb-2">
                        Tips for Supporting {{ childName }} at Home:
                    </p>
                    <ul class="list-none list-inside space-y-4">
                        <div class="row">
                            <div class="col-6">
                                <li class="mt-3">
                                    <span class="font-bold"
                                        >Encourage Social Interaction:</span
                                    >
                                    <ul class="list-none pl-6 space-y-2">
                                        <li class="mt-3">
                                            Arrange playdates, family
                                            gatherings, or group activities
                                            where
                                            {{ childName }} can interact with
                                            others.<br />
                                            Consider activities like sports,
                                            drama clubs, or dance classes where
                                            they can engage with peers and make
                                            new friends.
                                        </li>
                                    </ul>
                                </li>
                                <li class="mt-3">
                                    <span class="font-bold"
                                        >Promote Creative Expression:</span
                                    >
                                    <ul class="list-none pl-6 space-y-2">
                                        <li class="mt-3">
                                            Encourage activities such as
                                            drawing, painting, singing, or
                                            acting to allow your child to
                                            express themselves.
                                        </li>
                                        <li class="mt-3">
                                            Set up a designated area at home
                                            where they can explore their
                                            creativity without restrictions.
                                        </li>
                                    </ul>
                                </li>
                            </div>
                            <div class="col-6 d-flex">
                                <div class="flex justify-center items-center">
                                    <img
                                        class="w-100 h-auto object-contain"
                                        :src="'/images/reports-svg-images/Page16.svg'"
                                        alt=""
                                    />
                                </div>
                            </div>
                        </div>
                        <li class="mt-3">
                            <span class="font-bold"
                                >Develop Organisational Skills:</span
                            >
                            <ul class="list-none pl-6 space-y-2">
                                <li class="mt-3">
                                    Implement charts, checklists, and calendars
                                    to help {{ childName }} keep track of their
                                    tasks and responsibilities.
                                </li>
                                <li class="mt-3">
                                    Create consistent daily routines to provide
                                    structure while allowing for some
                                    flexibility.
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <!-- Strategies for Effective Communication Section -->
                <div>
                    <h2 class="text-3xl font-bold mb-2">
                        Strategies for Effective Communication
                    </h2>
                    <p class="font-semibold text-blue-500 mb-1">
                        Effective Communication with {{ childName }} :
                    </p>
                    <div class="row">
                        <div class="col-6 d-flex">
                            <div class="flex justify-center items-center">
                                <img
                                    class="w-100 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page17.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                        <div class="col-6">
                            <ul class="list-none list-inside space-y-4">
                                <li class="mt-3">
                                    <span class="font-bold"
                                        >Be Positive and Encouraging:</span
                                    >
                                    <ul class="list-none pl-6 space-y-2">
                                        <li class="mt-3">
                                            Use positive and supportive language
                                            when giving instructions or
                                            discussing their behaviour. Focus on
                                            their strengths and achievements.
                                        </li>
                                        <li class="mt-3">
                                            Regularly acknowledge and celebrate
                                            both big and small successes to
                                            boost their confidence and
                                            motivation.
                                        </li>
                                    </ul>
                                </li>
                                <li class="mt-3">
                                    <span class="font-bold"
                                        >Encourage Open Dialogue:</span
                                    >
                                    <ul class="list-none pl-6 space-y-2">
                                        <li class="mt-3">
                                            Ensure {{ childName }} feels
                                            comfortable expressing their
                                            thoughts and feelings without
                                            judgment. Nurture an environment
                                            where they feel heard and valued.
                                        </li>
                                        <li class="mt-3">
                                            Use questions that encourage them to
                                            share more about their experiences,
                                            such as “What was your favourite
                                            part of today?” or “How did that
                                            make you feel.
                                        </li>
                                    </ul>
                                </li>
                                <li class="mt-3">
                                    <span class="font-bold"
                                        >Set Clear Expectations:</span
                                    >
                                    <ul class="list-none pl-6 space-y-2">
                                        <li class="mt-3">
                                            Clearly communicate rules and
                                            expectations, making sure they
                                            understand what is expected of them.
                                            Use simple and direct language.
                                        </li>
                                        <li class="mt-3">
                                            Offer gentle and consistent
                                            reminders about the boundaries and
                                            expectations to help them stay on
                                            track without feeling criticised.
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- For ID Style Type -->
        <div id="ID" v-if="style == 'ID'">
            <div class="supporting-at-home p-6 space-y-6">
                <!-- Supporting Your Child at Home Section -->
                <div>
                    <h2 class="text-3xl font-bold mb-2">
                        Supporting Your Child at Home
                    </h2>
                    <p class="font-semibold text-blue-500 mb-1">
                        Tips for Supporting {{ childName }} at Home:
                    </p>

                    <ul class="list-none list-inside space-y-4">
                        <div class="row">
                            <div class="col-6">
                                <li class="mt-3">
                                    <span class="font-semibold"
                                        >Encourage Leadership:</span
                                    >
                                    Provide opportunities for {{ childName }} to
                                    take on leadership roles at home, such as
                                    planning family activities or helping with
                                    household tasks.
                                </li>
                                <li class="mt-3">
                                    Allow them to make decisions Let them make
                                    decisions about certain aspects of their
                                    daily routine, creating a sense of autonomy
                                    and responsibility.
                                </li>
                                <li class="mt-3">
                                    <span class="font-semibold"
                                        >Promote Healthy Competition:</span
                                    >
                                    Engage in games and activities that involve
                                    friendly competition, emphasising the
                                    importance of good sportsmanship and
                                    learning from both wins and losses.
                                </li>

                                <li class="mt-3">
                                    Celebrate their achievements and set new,
                                    challenging goals together, motivating them
                                    to strive for improvement.
                                </li>
                            </div>
                            <div class="col-6 d-flex">
                                <div class="flex justify-center items-center">
                                    <img
                                        class="w-100 h-auto object-contain"
                                        :src="'/images/reports-svg-images/Page16.svg'"
                                        alt=""
                                    />
                                </div>
                            </div>
                        </div>
                        <li class="mt-3">
                            <span class="font-semibold"
                                >Develop Patience and Listening Skills:</span
                            >
                            Encourage {{ childName }} to listen to others’
                            perspectives and consider their feelings.
                            Role-playing scenarios can be helpful for practising
                            empathy.
                        </li>
                        <li class="mt-3">
                            Provide activities that require patience and
                            collaboration, such as building complex models or
                            completing puzzles as a team.
                        </li>
                    </ul>
                </div>

                <!-- Strategies for Effective Communication Section -->
                <div>
                    <h2 class="text-3xl font-bold mb-2">
                        Strategies for Effective Communication
                    </h2>
                    <p class="font-semibold text-blue-500 mb-1">
                        Effective Communication with {{ childName }} :
                    </p>
                    <div class="row">
                        <div class="col-6 d-flex">
                            <div class="flex justify-center items-center">
                                <img
                                    class="w-100 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page17.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                        <div class="col-6">
                            <ul class="list-none list-inside space-y-4">
                                <li class="mt-3">
                                    <span class="font-semibold"
                                        >Be Direct and Clear:</span
                                    >
                                    Use straightforward language when giving
                                    instructions or discussing expectations.
                                    Avoid ambiguous or overly complex
                                    explanations.
                                </li>
                                <li class="mt-3">
                                    Provide clear and concise feedback on their
                                    behaviour and performance, helping them
                                    understand what they did well and where they
                                    can improve.
                                </li>
                                <li class="mt-3">
                                    <span class="font-semibold"
                                        >Encourage Open Dialogue:</span
                                    >
                                    Create an environment where
                                    {{ childName }} feels comfortable expressing
                                    their thoughts and opinions. Show genuine
                                    interest in their ideas and listen actively.
                                </li>
                                <li class="mt-3">
                                    Ask open-ended questions to encourage them
                                    to share more about their experiences and
                                    feelings, creating a sense of being heard
                                    and valued.
                                </li>
                                <li class="mt-3">
                                    <span class="font-semibold"
                                        >Use Positive Reinforcement:</span
                                    >
                                    Regularly acknowledge and celebrate both big
                                    and small successes to boost their
                                    confidence and motivation. Focus on their
                                    strengths and achievements.
                                </li>
                                <li class="mt-3">
                                    Encourage them to keep striving for
                                    improvement by setting new and challenging
                                    goals together, motivating them to reach
                                    their full potential.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- For IS Style Type -->
        <div id="IS" v-if="style == 'IS'">
            <div class="supporting-at-home p-6 space-y-6">
                <!-- Supporting Your Child at Home Section -->
                <div>
                    <h2 class="text-3xl font-bold mb-2">
                        Supporting Your Child at Home
                    </h2>
                    <p class="font-semibold text-blue-500 mb-1">
                        Tips for Supporting {{ childName }} at Home:
                    </p>
                    <ul class="list-none list-inside space-y-4">
                        <div class="row">
                            <div class="col-6">
                                <li class="mt-3">
                                    <span class="font-bold"
                                        >Strengthen Routine and
                                        Organisation:</span
                                    >
                                    <ul class="list-none pl-6 space-y-2">
                                        <li class="mt-3">
                                            Help {{ childName }} establish a
                                            consistent daily routine, using
                                            visual schedules or charts to keep
                                            track of tasks and responsibilities.
                                        </li>
                                        <li class="mt-3">
                                            Teach organisational skills by
                                            involving them in organising their
                                            personal space, using labelled bins
                                            and designated areas for their
                                            belongings.
                                        </li>
                                    </ul>
                                </li>
                                <li class="mt-3">
                                    <span class="font-bold"
                                        >Support Emotional Well-being:</span
                                    >
                                    <ul class="list-none pl-6 space-y-2">
                                        <li class="mt-3">
                                            Create a safe space for
                                            {{ childName }} to express their
                                            emotions, whether through talking,
                                            drawing, or other forms of
                                            expression.
                                        </li>
                                        <li class="mt-3">
                                            Practice relaxation techniques
                                            together, such as deep breathing
                                            exercises or mindfulness activities,
                                            to help them manage stress and stay
                                            calm.
                                        </li>
                                    </ul>
                                </li>
                            </div>
                            <div class="col-6 d-flex">
                                <div class="flex justify-center items-center">
                                    <img
                                        class="w-100 h-auto object-contain"
                                        :src="'/images/reports-svg-images/Page16.svg'"
                                        alt=""
                                    />
                                </div>
                            </div>
                        </div>
                        <li class="mt-3">
                            <span class="font-bold"
                                >Encourage Social Interaction:</span
                            >
                            <ul class="list-none pl-6 space-y-2">
                                <li class="mt-3">
                                    Create opportunities for {{ childName }} to
                                    engage in social activities, such as
                                    inviting friends over for playdates,
                                    participating in community events, or
                                    joining team sports.
                                </li>
                                <li class="mt-3">
                                    Support their involvement in group projects
                                    and collaborative games, highlighting the
                                    importance of teamwork and cooperation.
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <!-- Strategies for Effective Communication Section -->
                <div>
                    <h2 class="text-3xl font-bold mb-2">
                        Strategies for Effective Communication
                    </h2>
                    <p class="font-semibold text-blue-500 mb-1">
                        Effective Communication with {{ childName }} :
                    </p>
                    <div class="row">
                        <div class="col-6 d-flex">
                            <div class="flex justify-center items-center">
                                <img
                                    class="w-100 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page17.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                        <div class="col-6">
                            <ul class="list-none list-inside space-y-4">
                                <li class="mt-3">
                                    <span class="font-bold"
                                        >Be Positive and Supportive:</span
                                    >
                                    <ul class="list-none pl-6 space-y-2">
                                        <li class="mt-3">
                                            Use kind and encouraging language
                                            when discussing their behaviour and
                                            accomplishments. Highlight their
                                            strengths and successes to boost
                                            their confidence and motivation.
                                        </li>
                                        <li class="mt-3">
                                            Celebrate their achievements
                                            regularly, both big and small, to
                                            reinforce their positive behaviours
                                            and efforts.
                                        </li>
                                    </ul>
                                </li>
                                <li class="mt-3">
                                    <span class="font-bold"
                                        >Encourage Open Dialogue:</span
                                    >
                                    <ul class="list-none pl-6 space-y-2">
                                        <li class="mt-3">
                                            Create a safe space for
                                            {{ childName }} to express their
                                            thoughts and feelings. Let them know
                                            their opinions are valued and
                                            respected.
                                        </li>
                                        <li class="mt-3">
                                            Ask open-ended questions that prompt
                                            them to share more about their day
                                            and experiences, such as “What made
                                            you happy today?” or “Can you tell
                                            me more about that?”
                                        </li>
                                    </ul>
                                </li>
                                <li class="mt-3">
                                    <span class="font-bold"
                                        >Use Visual and Interactive Aids:</span
                                    >
                                    <ul class="list-none pl-6 space-y-2">
                                        <li class="mt-3">
                                            Incorporate visual aids like charts,
                                            pictures, or storyboards to explain
                                            tasks and expectations. This helps
                                            {{ childName }} understand and
                                            remember what they need to do.
                                        </li>
                                        <li class="mt-3">
                                            Engage them in interactive
                                            discussions where they can ask
                                            questions and share their thoughts,
                                            reinforcing their understanding and
                                            involvement.
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- For S Style Type -->
        <div id="S" v-if="style == 'S'">
            <div class="supporting-at-home p-6 space-y-6">
                <!-- Supporting Your Child at Home Section -->
                <div>
                    <h2 class="text-3xl font-bold mb-2">
                        Supporting Your Child at Home
                    </h2>
                    <p class="font-semibold text-blue-500 mb-2">
                        Tips for Supporting {{ childName }} at Home:
                    </p>
                    <ul class="list-none list-inside space-y-4">
                        <div class="row">
                            <div class="col-6">
                                <li class="mt-3">
                                    <span class="font-bold"
                                        >Encourage Social Interaction:</span
                                    >
                                    <ul class="list-none pl-6 space-y-2">
                                        <li class="mt-3">
                                            Arrange playdates, family
                                            gatherings, or team-based games
                                            where
                                            {{ childName }} can interact with
                                            peers and practice their supportive
                                            nature.
                                        </li>
                                        <li class="mt-3">
                                            Enrol them in team sports or
                                            cooperative activities where they
                                            can work with others and develop
                                            their teamwork skills.
                                        </li>
                                    </ul>
                                </li>
                                <li class="mt-3">
                                    <span class="font-bold"
                                        >Promote Communication Skills:</span
                                    >
                                    <ul class="list-none pl-6 space-y-2">
                                        <li class="mt-3">
                                            Create an environment where
                                            {{ childName }} feels comfortable
                                            sharing their thoughts and feelings.
                                            Have regular family discussions to
                                            practice expressing themselves.
                                        </li>
                                        <li class="mt-3">
                                            Engage in activities that require
                                            taking turns to talk and listen,
                                            reinforcing the importance of
                                            hearing others and being heard.
                                        </li>
                                    </ul>
                                </li>
                            </div>
                            <div class="col-6 d-flex">
                                <div class="flex justify-center items-center">
                                    <img
                                        class="w-100 h-auto object-contain"
                                        :src="'/images/reports-svg-images/Page16.svg'"
                                        alt=""
                                    />
                                </div>
                            </div>
                        </div>
                        <li class="mt-3">
                            <span class="font-bold"
                                >Encourage Leadership Opportunities:</span
                            >
                            <ul class="list-none pl-6 space-y-2">
                                <li class="mt-3">
                                    Give {{ childName }} responsibilities at
                                    home, like planning a family outing or
                                    organising a game, to help them develop
                                    their leadership skills.
                                </li>
                                <li class="mt-3">
                                    Support them in taking the lead on projects
                                    or activities they are passionate about,
                                    promoting confidence and decision-making
                                    abilities.
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <!-- Strategies for Effective Communication Section -->
                <div>
                    <h2 class="text-3xl font-bold mb-2">
                        Strategies for Effective Communication
                    </h2>
                    <p class="font-semibold text-blue-500 mb-1">
                        Effective Communication with {{ childName }} :
                    </p>
                    <div class="row">
                        <div class="col-6 d-flex">
                            <div class="flex justify-center items-center">
                                <img
                                    class="w-100 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page17.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                        <div class="col-6">
                            <ul class="list-none list-inside space-y-4">
                                <li class="mt-3">
                                    <span class="font-bold"
                                        >Be Supportive and Understanding:</span
                                    >
                                    <ul class="list-none pl-6 space-y-2">
                                        <li class="mt-3">
                                            Provide comfort and affirmation,
                                            especially when they feel uncertain
                                            or stressed. Let them know their
                                            feelings are valid and important.
                                        </li>
                                        <li class="mt-3">
                                            Regularly express gratitude for
                                            their supportive actions and
                                            highlight the positive impact they
                                            have on others.
                                        </li>
                                    </ul>
                                </li>
                                <li class="mt-3">
                                    <span class="font-bold"
                                        >Model Positive Behaviour:</span
                                    >
                                    <ul class="list-none pl-6 space-y-2">
                                        <li class="mt-3">
                                            Show empathy in your interactions
                                            with others, providing a model for
                                            {{ childName }} to emulate.
                                        </li>
                                        <li class="mt-3">
                                            Handle conflicts in a calm and
                                            constructive manner, teaching them
                                            healthy ways to address
                                            disagreements.
                                        </li>
                                    </ul>
                                </li>
                                <li class="mt-3">
                                    <span class="font-bold"
                                        >Encourage Open Dialogue:</span
                                    >
                                    <ul class="list-none pl-6 space-y-2">
                                        <li class="mt-3">
                                            Ensure {{ childName }} feels safe to
                                            express their thoughts and feelings
                                            without judgment. Encourage open and
                                            honest communication.
                                        </li>
                                        <li class="mt-3">
                                            Use questions that encourage them to
                                            share more about their experiences
                                            and emotions, nurturing a deeper
                                            understanding of their perspectives.
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- For SC Style Type -->
        <div id="SC" v-if="style == 'SC'">
            <div class="supporting-at-home p-6 space-y-6">
                <!-- Supporting Your Child at Home Section -->
                <div>
                    <h2 class="text-3xl font-bold mb-2">
                        Supporting Your Child at Home
                    </h2>
                    <p class="font-semibold text-blue-500 mb-1">
                        Tips for Supporting {{ childName }} at Home:
                    </p>

                    <ul class="list-none list-inside space-y-4">
                        <div class="row">
                            <div class="col-6">
                                <li class="mt-3">
                                    <strong
                                        >Promote Calm and Thoughtful
                                        Activities:</strong
                                    >
                                    <p class="ml-8">
                                        Encourage activities that allow
                                        {{ childName }} to think and relax, like
                                        puzzles, board games, or reading.
                                    </p>
                                    <p class="ml-8">
                                        Provide materials and opportunities for
                                        calm and creative play, such as drawing,
                                        building models, or crafting.
                                    </p>
                                </li>
                                <li class="mt-3">
                                    <strong
                                        >Support Emotional Well-being:</strong
                                    >
                                    <p class="ml-8">
                                        Create a safe space for
                                        {{ childName }} to express their
                                        emotions, whether through talking,
                                        drawing, or other forms of expression.
                                    </p>
                                    <p class="ml-8">
                                        Practice relaxation techniques together,
                                        such as deep breathing exercises or
                                        mindfulness activities, to help them
                                        manage stress and stay calm.
                                    </p>
                                </li>
                            </div>
                            <div class="col-6 d-flex">
                                <div class="flex justify-center items-center">
                                    <img
                                        class="w-100 h-auto object-contain"
                                        :src="'/images/reports-svg-images/Page16.svg'"
                                        alt=""
                                    />
                                </div>
                            </div>
                        </div>
                        <li class="mt-3">
                            <strong>Encourage Social Interaction:</strong>
                            <p class="ml-8">
                                Provide opportunities for {{ childName }} to
                                interact with friends and family members, such
                                as playdates, family gatherings, or team
                                activities.
                            </p>
                            <p class="ml-8">
                                Involve them in group projects and collaborative
                                games, emphasising the value of teamwork and
                                cooperation.
                            </p>
                        </li>
                    </ul>
                </div>

                <!-- Strategies for Effective Communication Section -->
                <div>
                    <h2 class="text-3xl font-bold mb-2">
                        Strategies for Effective Communication
                    </h2>
                    <p class="font-semibold text-blue-500 mb-1">
                        Effective Communication with {{ childName }} :
                    </p>
                    <div class="row">
                        <div class="col-6 d-flex">
                            <div class="flex justify-center items-center">
                                <img
                                    class="w-100 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page17.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                        <div class="col-6">
                            <ul class="list-none list-inside space-y-4">
                                <li class="mt-3">
                                    <strong>Be Clear and Consistent:</strong>
                                    <p class="ml-8">
                                        Use clear and straightforward language
                                        when giving instructions or discussing
                                        expectations. Avoid ambiguous or overly
                                        complex explanations.
                                    </p>
                                    <p class="ml-8">
                                        Provide consistent feedback and
                                        reinforcement, helping
                                        {{ childName }} understand what they did
                                        well and where they can improve.
                                    </p>
                                </li>
                                <li class="mt-3">
                                    <strong
                                        >Set Gentle Boundaries and
                                        Expectations:</strong
                                    >
                                    <p class="ml-8">
                                        Clearly define rules and expectations in
                                        a gentle and supportive manner. Explain
                                        the reasons behind rules and how they
                                        help everyone, helping
                                        {{ childName }} understand and follow
                                        them more easily.
                                    </p>
                                    <p class="ml-8">
                                        Provide gentle reminders about the
                                        boundaries and expectations, helping
                                        them stay on track without feeling
                                        criticised.
                                    </p>
                                </li>
                                <li class="mt-3">
                                    <strong
                                        >Practice Empathetic Listening:</strong
                                    >
                                    <p class="ml-8">
                                        Show empathy by actively listening to
                                        {{ childName }} and acknowledging their
                                        feelings. Reflect back what they say to
                                        show you understand and care about their
                                        experiences.
                                    </p>
                                    <p class="ml-8">
                                        Encourage them to listen to others as
                                        well, promoting mutual respect and
                                        understanding in conversations.
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <!-- For SI Style Type -->
        <div id="SI" v-if="style == 'SI'">
            <div class="supporting-at-home p-6 space-y-6">
                <!-- Supporting Your Child at Home Section -->
                <div>
                    <h2 class="text-3xl font-bold mb-2">
                        Supporting Your Child at Home
                    </h2>
                    <p class="font-semibold text-blue-500 mb-1">
                        Tips for Supporting {{ childName }} at Home:
                    </p>

                    <ul class="list-none list-inside space-y-4">
                        <div class="row">
                            <div class="col-6">
                                <li class="mt-3">
                                    <strong
                                        >Enhance Empathy and Compassion:</strong
                                    >
                                    <br />
                                    <p class="ml-5">
                                        Engage in activities that teach empathy,
                                        such as volunteering together or caring
                                        for a pet.
                                    </p>
                                </li>
                                <li class="mt-3 ml-5">
                                    Encourage {{ childName }} to consider
                                    others’ feelings and perspectives, using
                                    role-playing scenarios to practice empathy
                                    and understanding.
                                </li>
                                <li class="mt-3">
                                    <strong
                                        >Support Emotional Well-being:</strong
                                    >
                                    <br />

                                    <p class="ml-5">
                                        Create a safe space for
                                        {{ childName }} to express their
                                        emotions, whether through talking,
                                        drawing, or other forms of expression.
                                    </p>
                                </li>
                                <li class="mt-3 ml-5">
                                    Practice relaxation techniques together,
                                    such as deep breathing exercises or
                                    mindfulness activities, to help them manage
                                    stress and stay calm.
                                </li>
                                <li class="mt-3">
                                    <strong
                                        >Encourage Social Interaction:</strong
                                    >
                                    <br />

                                    <p class="ml-5">
                                        Provide opportunities for
                                        {{ childName }} to interact with friends
                                        and family members, such as playdates,
                                        family gatherings, or team activities.
                                    </p>
                                </li>
                                <li class="mt-3 ml-5">
                                    Involve them in group projects and
                                    collaborative games, emphasising the value
                                    of teamwork and cooperation.
                                </li>
                            </div>
                            <div class="col-6 d-flex">
                                <div class="flex justify-center items-center">
                                    <img
                                        class="w-100 h-auto object-contain"
                                        :src="'/images/reports-svg-images/Page16.svg'"
                                        alt=""
                                    />
                                </div>
                            </div>
                        </div>
                    </ul>
                </div>

                <!-- Strategies for Effective Communication Section -->
                <div>
                    <h2 class="text-3xl font-bold mb-2">
                        Strategies for Effective Communication
                    </h2>
                    <p class="font-semibold text-blue-500 mb-1">
                        Effective Communication with {{ childName }} :
                    </p>
                    <div class="row">
                        <div class="col-6 d-flex">
                            <div class="flex justify-center items-center">
                                <img
                                    class="w-100 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page17.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                        <div class="col-6">
                            <ul class="list-none list-inside space-y-4">
                                <li class="mt-3">
                                    <strong
                                        >Set Clear and Gentle
                                        Boundaries:</strong
                                    >
                                    <br />

                                    <p class="ml-5">
                                        Clearly define rules and expectations in
                                        a gentle and supportive manner. Explain
                                        the reasons behind rules and how they
                                        help everyone, helping
                                        {{ childName }} understand and follow
                                        them more easily.
                                    </p>
                                </li>
                                <li class="mt-3 ml-5">
                                    Provide gentle reminders about the
                                    boundaries and expectations, helping them
                                    stay on track without feeling criticised.
                                </li>
                                <li class="mt-3">
                                    <strong
                                        >Encourage Sharing and
                                        Listening:</strong
                                    >
                                    <br />

                                    <p class="ml-5">
                                        Create an environment where
                                        {{ childName }} feels comfortable
                                        sharing their thoughts and feelings. Let
                                        them know their opinions are valued and
                                        respected.
                                    </p>
                                </li>
                                <li class="mt-3 ml-5">
                                    Encourage them to listen to others and value
                                    their perspectives, promoting empathy and
                                    understanding.
                                </li>
                                <li class="mt-3">
                                    <strong>Be Positive and Supportive:</strong>
                                    <br />
                                    <p class="ml-5">
                                        Use kind and affirming language to
                                        recognise
                                        {{ childName }} ’s efforts and
                                        strengths. This boosts their confidence
                                        and encourages them to continue trying
                                        their best.
                                    </p>
                                </li>
                                <li class="mt-3 ml-5">
                                    Celebrate their achievements regularly, both
                                    big and small, to reinforce their positive
                                    behaviours and efforts.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>

<style scoped>

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
    name: "GuidanceForParentsFirst",
    layout: AssessmentTypes,
    props: {
        style: String,
        childName: String,
        image: String,
    },
};
</script>
