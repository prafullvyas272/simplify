<template>
    <div class="p-6">
        <div class="p-6">
            <div v-if="style == 'C'" class=" ">
                <div class="space-y-8">
                    <!-- Supportive (S) Students -->
                    <section>
                        <div
                            class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                            style="border-radius: 50px"
                        ></div>
                        <h4 class="text-3xl font-bold mb-4">
                            Supportive (S) Students
                        </h4>
                        <div class="row">
                            <div class="col-6">
                                <div class="rounded-lg">
                                    <h4
                                        class="text-lg font-semibold text-indigo-600 text-blue-800"
                                    >
                                        Strengths:
                                    </h4>
                                    <ul class="list-none pl-6 space-y-1">
                                        <li>
                                            <strong> Dependability:</strong>
                                            Supportive students are reliable and
                                            trustworthy. They often take their
                                            responsibilities seriously.
                                        </li>
                                        <li>
                                            <strong>Teamwork:</strong>
                                            They work well in group settings and
                                            are very cooperative, making them
                                            excellent team players.
                                        </li>
                                        <li>
                                            <strong> Patience:</strong>
                                            These students are patient and
                                            willing to take the time to help
                                            others, showing a lot of empathy.
                                        </li>
                                    </ul>

                                    <h4
                                        class="text-lg font-semibold text-indigo-600 text-blue-800 mt-4"
                                    >
                                        Potential Challenges:
                                    </h4>
                                    <ul class="list-none pl-6 space-y-1">
                                        <li>
                                            <strong>
                                                Resistance to Change:</strong
                                            >
                                            Supportive students may struggle
                                            with change and prefer a stable,
                                            predictable environment.
                                        </li>
                                        <li>
                                            <strong
                                                >Avoidance of Conflict:</strong
                                            >
                                            They might avoid conflict to
                                            maintain harmony, which can
                                            sometimes prevent them from standing
                                            up for themselves.
                                        </li>
                                        <li>
                                            <strong>
                                                Lack of Assertiveness:</strong
                                            >
                                            They may have difficulty being
                                            assertive and expressing their own
                                            needs and opinions.
                                        </li>
                                    </ul>

                                    <h4
                                        class="text-lg font-semibold text-indigo-600 text-blue-800 mt-4"
                                    >
                                        Teaching Tips and Correcting
                                        Inappropriate Behavior:
                                    </h4>
                                    <ul class="list-none pl-6 space-y-1">
                                        <li>
                                            <strong
                                                >Structured Environment:
                                            </strong>
                                            Provide a well-organised and
                                            predictable learning environment.
                                            Use repetition and consistent
                                            routines to help them feel secure.
                                        </li>
                                        <li>
                                            <strong
                                                >Encourage Independence:</strong
                                            >
                                            Give them opportunities to make
                                            decisions independently and take on
                                            leadership roles in group settings.
                                        </li>
                                        <li>
                                            <strong
                                                >Positive Reinforcement:</strong
                                            >
                                            Offer praise and recognition for
                                            their contributions and efforts,
                                            reinforcing their sense of
                                            self-worth.
                                        </li>
                                        <li>
                                            <strong>
                                                Conflict Resolution:</strong
                                            >
                                            Teach them conflict-resolution
                                            skills to help them manage
                                            disagreements constructively.
                                        </li>
                                        <li>
                                            <strong>
                                                Supportive Feedback:</strong
                                            >
                                            Provide gentle and supportive
                                            feedback that encourages them to
                                            express their thoughts and feelings.
                                        </li>
                                        <li>
                                            <strong
                                                >Incremental Challenges:</strong
                                            >
                                            Gradually introduce new challenges
                                            to help them adapt to change and
                                            build resilience.
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-6">
                                <div
                                    class="flex justify-center items-center mb-4"
                                >
                                    <img
                                        class="w-96 h-auto object-contain"
                                        :src="'/images/reports-svg-images/Page 34b.svg'"
                                        alt=""
                                    />
                                </div>
                                <div
                                    class="flex justify-center items-center mb-4"
                                >
                                    <img
                                        class="w-96 h-auto object-contain"
                                        :src="'/images/reports-svg-images/Page20.svg'"
                                        alt=""
                                    />
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

            <!-- For CD Style Type -->
            <div id="CD" v-if="style == 'CD' || style == 'CS'">
                <div class="rounded-lg mb-8">
                    <!-- Supportive (S) Students Section -->
                    <div class="rounded-lg mb-8">
                        <div
                            class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                            style="border-radius: 50px"
                        ></div>
                        <div class="row">
                            <div class="col-6">
                                <h4 class="text-3xl font-bold mb-4">
                                    Supportive (S) Students
                                </h4>
                                <div class="space-y-4">
                                    <div>
                                        <h4 class="font-bold text-lg">
                                            Strengths:
                                        </h4>
                                        <ul class="list-none pl-5">
                                            <li>
                                                <strong>Dependability</strong>:
                                                Supportive students are reliable
                                                and trustworthy. They often take
                                                their responsibilities
                                                seriously.
                                            </li>
                                            <li>
                                                <strong>Teamwork</strong>: They
                                                work well in group settings and
                                                are very cooperative, making
                                                them excellent team players.
                                            </li>
                                            <li>
                                                <strong>Patience</strong>: These
                                                students are patient and willing
                                                to take the time to help others,
                                                showing a lot of empathy.
                                            </li>
                                        </ul>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-lg">
                                            Potential Challenges:
                                        </h4>
                                        <ul class="list-none pl-5">
                                            <li>
                                                <strong
                                                    >Resistance to
                                                    Change</strong
                                                >: Supportive students may
                                                struggle with change and prefer
                                                a stable, predictable
                                                environment.
                                            </li>
                                            <li>
                                                <strong
                                                    >Avoidance of
                                                    Conflict</strong
                                                >: They might avoid conflict to
                                                maintain harmony, which can
                                                sometimes prevent them from
                                                standing up for themselves.
                                            </li>
                                            <li>
                                                <strong
                                                    >Lack of
                                                    Assertiveness</strong
                                                >: They may have difficulty
                                                being assertive and expressing
                                                their own needs and opinions.
                                            </li>
                                        </ul>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-lg">
                                            Teaching Tips and Correcting
                                            Inappropriate Behavior:
                                        </h4>
                                        <ul class="list-none pl-5">
                                            <li>
                                                <strong
                                                    >Structured
                                                    Environment</strong
                                                >: Provide a well-organised and
                                                predictable learning
                                                environment. Use repetition and
                                                consistent routines to help them
                                                feel secure.
                                            </li>
                                            <li>
                                                <strong
                                                    >Encourage
                                                    Independence</strong
                                                >: Give them opportunities to
                                                make decisions independently and
                                                take on leadership roles in
                                                group settings.
                                            </li>
                                            <li>
                                                <strong
                                                    >Positive
                                                    Reinforcement</strong
                                                >: Offer praise and recognition
                                                for their contributions and
                                                efforts, reinforcing their sense
                                                of self-worth.
                                            </li>
                                            <li>
                                                <strong
                                                    >Conflict Resolution</strong
                                                >: Teach them
                                                conflict-resolution skills to
                                                help them manage disagreements
                                                constructively.
                                            </li>
                                            <li>
                                                <strong
                                                    >Supportive Feedback</strong
                                                >: Provide gentle and supportive
                                                feedback that encourages them to
                                                express their thoughts and
                                                feelings.
                                            </li>
                                            <li>
                                                <strong
                                                    >Incremental
                                                    Challenges</strong
                                                >: Gradually introduce new
                                                challenges to help them adapt to
                                                change and build resilience.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div
                                    class="flex justify-center items-center mb-4"
                                >
                                    <img
                                        class="w-120 h-auto object-contain"
                                        :src="'/images/reports-svg-images/Page 34b.svg'"
                                        alt=""
                                    />
                                </div>
                                <div
                                    class="flex justify-center items-center mb-4"
                                >
                                    <img
                                        class="w-64 h-auto object-contain"
                                        :src="'/images/reports-svg-images/Page20.svg'"
                                        alt=""
                                    />
                                </div>
                                <div
                                    data-v-0132f395=""
                                    class="flex justify-center items-center"
                                >
                                    <img
                                        data-v-0132f395=""
                                        class="w-90 h-auto object-contain"
                                        src="/images/reports-svg-images/Page16.svg"
                                        alt=""
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- For D Style Type -->
            <div id="D" v-if="style == 'D'">
                <div class=" ">

                    <div
                        class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                        style="border-radius: 50px"
                    ></div>
                    <div class="row">
                        <div class="col-6">
                            <h4 class="text-3xl font-semibold mb-4">
                                Supportive (S) Students
                            </h4>
                            <h4 class="text-2xl font-semibold mb-2">
                                Strengths:
                            </h4>
                            <ul class="list-none pl-6 mb-4">
                                <li>
                                    <b>Dependability:</b>
                                    Supportive students are reliable and
                                    trustworthy. They often take their
                                    responsibilities seriously.
                                </li>
                                <li>
                                    <b>Teamwork:</b>
                                    They work well in group settings and are
                                    very cooperative, making them excellent team
                                    players.
                                </li>
                                <li>
                                    <b>Patience:</b>
                                    These students are patient and willing to
                                    take the time to help others, showing a lot
                                    of empathy.
                                </li>
                            </ul>

                            <h4 class="text-2xl font-semibold mb-2">
                                Potential Challenges:
                            </h4>
                            <ul class="list-none pl-6 mb-4">
                                <li>
                                    <b>Resistance to Change:</b>
                                    Supportive students may struggle with change
                                    and prefer a stable, predictable
                                    environment.
                                </li>
                                <li>
                                    <b>Avoidance of Conflict:</b>
                                    They might avoid conflict to maintain
                                    harmony, which can sometimes prevent them
                                    from standing up for themselves.
                                </li>
                                <li>
                                    <b>Lack of Assertiveness:</b>
                                    They may have difficulty being assertive and
                                    expressing their own needs and opinions.
                                </li>
                            </ul>

                            <h4 class="text-2xl font-semibold mb-2">
                                Teaching Tips and Correcting Inappropriate
                                Behaviour:
                            </h4>
                            <ul class="list-none pl-6 mb-6">
                                <li>
                                    <b>Structured Environment:</b>
                                    Provide a well-organised and predictable
                                    learning environment. Use repetition and
                                    consistent routines to help them feel
                                    secure.
                                </li>
                                <li>
                                    <b>Encourage Independence:</b>
                                    Give them opportunities to make decisions
                                    independently and take on leadership roles
                                    in group settings.
                                </li>
                                <li>
                                    <b>Positive Reinforcement:</b>
                                    Offer praise and recognition for their
                                    contributions and efforts, reinforcing their
                                    sense of self-worth.
                                </li>
                                <li>
                                    <b>Conflict Resolution:</b>
                                    Teach them conflict-resolution skills to
                                    help them manage disagreements
                                    constructively.
                                </li>
                                <li>
                                    <b>Supportive Feedback:</b>
                                    Provide gentle and supportive feedback that
                                    encourages them to express their thoughts
                                    and feelings.
                                </li>
                                <li>
                                    <b>Incremental Challenges:</b>
                                    Gradually introduce new challenges to help
                                    them adapt to change and build resilience.
                                </li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <div class="flex justify-center items-center mb-4">
                                <img
                                    class="w-120 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page 34b.svg'"
                                    alt=""
                                />
                            </div>
                            <div class="flex justify-center items-center mb-4">
                                <img
                                    class="w-64 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page20.svg'"
                                    alt=""
                                />
                            </div>
                            <div class="flex justify-center items-center mb-4">
                                <img
                                    class="w-64 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page21.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- For DC Style Type -->
            <div id="DC" v-if="style == 'DC'">
                <div class=" ">
                    <div class="mb-8">
                        <div
                            class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                            style="border-radius: 50px"
                        ></div>
                        <div class="row">
                            <div class="col-6">
                                <h4 class="text-3xl font-bold mb-4 mb-2">
                                    Supportive (S) Students
                                </h4>
                                <div class="space-y-4">
                                    <div>
                                        <h4 class="text-xl font-semibold">
                                            Strengths:
                                        </h4>
                                        <ul class="list-none list-inside pl-6">
                                            <li>
                                                <strong>Dependability: </strong>
                                                Supportive students are reliable
                                                and trustworthy. They often take
                                                their responsibilities
                                                seriously.
                                            </li>
                                            <li>
                                                <strong>Teamwork: </strong>
                                                They work well in group settings
                                                and are very cooperative, making
                                                them excellent team players.
                                            </li>
                                            <li>
                                                <strong>Patience: </strong>
                                                These students are patient and
                                                willing to take the time to help
                                                others, showing a lot of
                                                empathy.
                                            </li>
                                        </ul>
                                    </div>

                                    <div>
                                        <h4 class="text-xl font-semibold">
                                            Potential Challenges:
                                        </h4>
                                        <ul class="list-none list-inside pl-6">
                                            <li>
                                                <strong
                                                    >Resistance to Change:
                                                </strong>
                                                Supportive students may struggle
                                                with change and prefer a stable,
                                                predictable environment.
                                            </li>
                                            <li>
                                                <strong
                                                    >Avoidance of Conflict:
                                                </strong>
                                                They might avoid conflict to
                                                maintain harmony, which can
                                                sometimes prevent them from
                                                standing up for themselves.
                                            </li>
                                            <li>
                                                <strong
                                                    >Lack of Assertiveness:
                                                </strong>
                                                They may have difficulty being
                                                assertive and expressing their
                                                own needs and opinions.
                                            </li>
                                        </ul>
                                    </div>

                                    <div>
                                        <div class="mb-8">
                                            <h4
                                                class="text-xl font-semibold mb-2"
                                            >
                                                Teaching Tips and Correcting
                                                Inappropriate Behaviour
                                            </h4>
                                            <div class="space-y-4">
                                                <p>
                                                    <span class="font-semibold"
                                                        >Structured
                                                        Environment:</span
                                                    >
                                                    Provide a well-organised and
                                                    predictable learning
                                                    environment. Use repetition
                                                    and consistent routines to
                                                    help them feel secure.
                                                </p>
                                                <p>
                                                    <span class="font-semibold"
                                                        >Encourage
                                                        Independence:</span
                                                    >
                                                    Give them opportunities to
                                                    make decisions independently
                                                    and take on leadership roles
                                                    in group settings.
                                                </p>
                                                <p>
                                                    <span class="font-semibold"
                                                        >Positive
                                                        Reinforcement:</span
                                                    >
                                                    Offer praise and recognition
                                                    for their contributions and
                                                    efforts, reinforcing their
                                                    sense of self-worth.
                                                </p>
                                                <p>
                                                    <span class="font-semibold"
                                                        >Conflict
                                                        Resolution:</span
                                                    >
                                                    Teach them
                                                    conflict-resolution skills
                                                    to help them manage
                                                    disagreements
                                                    constructively.
                                                </p>
                                                <p>
                                                    <span class="font-semibold"
                                                        >Supportive
                                                        Feedback:</span
                                                    >
                                                    Provide gentle and
                                                    supportive feedback that
                                                    encourages them to express
                                                    their thoughts and feelings.
                                                </p>
                                                <p>
                                                    <span class="font-semibold"
                                                        >Incremental
                                                        Challenges:</span
                                                    >
                                                    Gradually introduce new
                                                    challenges to help them
                                                    adapt to change and build
                                                    resilience.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div
                                    class="flex justify-center items-center mb-4"
                                >
                                    <img
                                        class="w-120 h-auto object-contain"
                                        :src="'/images/reports-svg-images/Page 34b.svg'"
                                        alt=""
                                    />
                                </div>
                                <div
                                    class="flex justify-center items-center mb-4"
                                >
                                    <img
                                        class="w-96 h-auto object-contain"
                                        :src="'/images/reports-svg-images/Page20.svg'"
                                        alt=""
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- For DI Style Type -->
            <div id="DI" v-if="style == 'DI'">
                <div class="space-y-6">
                    <div class="space-y-4">
                        <div
                            class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                            style="border-radius: 50px"
                        ></div>
                        <div class="row">
                            <div class="col-6">
                                <h4 class="text-3xl font-bold mb-4">
                                    Supportive (S) Students
                                </h4>
                                <h4 class="font-semibold">Strengths:</h4>
                                <ul class="list-none pl-5 space-y-2">
                                    <li>
                                        <strong>Dependability:</strong>
                                        Supportive students are reliable and
                                        trustworthy. They often take their
                                        responsibilities seriously.
                                    </li>
                                    <li>
                                        <strong>Teamwork:</strong> They work
                                        well in group settings and are very
                                        cooperative, making them excellent team
                                        players.
                                    </li>
                                    <li>
                                        <strong>Patience:</strong> These
                                        students are patient and willing to take
                                        the time to help others, showing a lot
                                        of empathy.
                                    </li>
                                </ul>

                                <h4 class="font-semibold">
                                    Potential Challenges:
                                </h4>
                                <ul class="list-none pl-5 space-y-2">
                                    <li>
                                        <strong>Resistance to Change:</strong>
                                        Supportive students may struggle with
                                        change and prefer a stable, predictable
                                        environment.
                                    </li>
                                    <li>
                                        <strong>Avoidance of Conflict:</strong>
                                        They might avoid conflict to maintain
                                        harmony, which can sometimes prevent
                                        them from standing up for themselves.
                                    </li>
                                    <li>
                                        <strong>Lack of Assertiveness:</strong>
                                        They may have difficulty being assertive
                                        and expressing their own needs and
                                        opinions.
                                    </li>
                                </ul>

                                <h4 class="font-semibold">
                                    Teaching Tips and Correcting Inappropriate
                                    Behaviour:
                                </h4>
                                <ul class="list-none pl-5 space-y-2">
                                    <li>
                                        <strong>Structured Environment:</strong>
                                        Provide a well-organised and predictable
                                        learning environment. Use repetition and
                                        consistent routines to help them feel
                                        secure.
                                    </li>
                                    <li>
                                        <strong>Encourage Independence:</strong>
                                        Give them opportunities to make
                                        decisions independently and take on
                                        leadership roles in group settings.
                                    </li>
                                    <li>
                                        <strong>Positive Reinforcement:</strong>
                                        Offer praise and recognition for their
                                        contributions and efforts, reinforcing
                                        their sense of self-worth.
                                    </li>
                                    <li>
                                        <strong>Conflict Resolution:</strong>
                                        Teach them conflict-resolution skills to
                                        help them manage disagreements
                                        constructively.
                                    </li>
                                    <li>
                                        <strong>Supportive Feedback:</strong>
                                        Provide gentle and supportive feedback
                                        that encourages them to express their
                                        thoughts and feelings.
                                    </li>
                                    <li>
                                        <strong>Incremental Challenges:</strong>
                                        Gradually introduce new challenges to
                                        help them adapt to change and build
                                        resilience.
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <div
                                    class="flex justify-center items-center mb-4"
                                >
                                    <img
                                        class="w-120 h-auto object-contain"
                                        :src="'/images/reports-svg-images/Page 34b.svg'"
                                        alt=""
                                    />
                                </div>
                                <div
                                    class="flex justify-center items-center mb-4"
                                >
                                    <img
                                        class="w-96 h-auto object-contain"
                                        :src="'/images/reports-svg-images/Page20.svg'"
                                        alt=""
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- For I Style Type -->
            <div id="I" v-if="style == 'I'">
                <div class="mt-10">
                    <div class="space-y-8">
                        <!-- Supportive (S) Students -->
                        <section>
                            <div
                                class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                                style="border-radius: 50px"
                            ></div>
                            <div class="row">
                                <div class="col-6">
                                    <h4 class="text-3xl font-bold mb-4">
                                        Supportive (S) Students
                                    </h4>
                                    <div class="mt-4">
                                        <h4 class="font-semibold">
                                            Strengths:
                                        </h4>
                                        <ul class="list-none pl-5">
                                            <li>
                                                <strong>Dependability: </strong>
                                                Supportive students are reliable
                                                and trustworthy. They often take
                                                their responsibilities
                                                seriously.
                                            </li>
                                            <li>
                                                <strong>Teamwork: </strong>
                                                They work well in group settings
                                                and are very cooperative, making
                                                them excellent team players.
                                            </li>
                                            <li>
                                                <strong>Patience: </strong>
                                                These students are patient and
                                                willing to take the time to help
                                                others, showing a lot of
                                                empathy.
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="mt-4">
                                        <h4 class="font-semibold">
                                            Potential Challenges:
                                        </h4>
                                        <ul class="list-none pl-5">
                                            <li>
                                                <strong
                                                    >Resistance to Change:
                                                </strong>

                                                Supportive students may struggle
                                                with change and prefer a stable,
                                                predictable environment.
                                            </li>
                                            <li>
                                                <strong
                                                    >Avoidance of Conflict:
                                                </strong>
                                                They might avoid conflict to
                                                maintain harmony, which can
                                                sometimes prevent them from
                                                standing up for themselves.
                                            </li>
                                            <li>
                                                <strong
                                                    >Lack of Assertiveness:
                                                </strong>
                                                They may have difficulty being
                                                assertive and expressing their
                                                own needs and opinions.
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="mt-4">
                                        <h4 class="font-semibold">
                                            Teaching Tips and Correcting
                                            Inappropriate Behaviour:
                                        </h4>
                                        <ul class="list-none pl-5">
                                            <li>
                                                <strong
                                                    >Structured Environment:
                                                </strong>
                                                Provide a well-organised and
                                                predictable learning
                                                environment. Use repetition and
                                                consistent routines to help them
                                                feel secure.
                                            </li>
                                            <li>
                                                <strong
                                                    >Encourage Independence:
                                                </strong>
                                                Give them opportunities to make
                                                decisions independently and take
                                                on leadership roles in group
                                                settings.
                                            </li>
                                            <li>
                                                <strong
                                                    >Positive
                                                    Reinforcement:</strong
                                                >

                                                Offer praise and recognition for
                                                their contributions and efforts,
                                                reinforcing their sense of
                                                self-worth.
                                            </li>
                                            <li>
                                                <strong
                                                    >Conflict Resolution:
                                                </strong>
                                                Teach them conflict-resolution
                                                skills to help them manage
                                                disagreements constructively.
                                            </li>
                                            <li>
                                                <strong
                                                    >Supportive Feedback:
                                                </strong>
                                                Provide gentle and supportive
                                                feedback that encourages them to
                                                express their thoughts and
                                                feelings.
                                            </li>
                                            <li>
                                                <strong
                                                    >Incremental Challenges:
                                                </strong>
                                                Gradually introduce new
                                                challenges to help them adapt to
                                                change and build resilience.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div
                                        class="flex justify-center items-center mb-4"
                                    >
                                        <img
                                            class="w-120 h-auto object-contain"
                                            :src="'/images/reports-svg-images/Page 34b.svg'"
                                            alt=""
                                        />
                                    </div>
                                    <div
                                        class="flex justify-center items-center mb-4"
                                    >
                                        <img
                                            class="w-96 h-auto object-contain"
                                            :src="'/images/reports-svg-images/Page20.svg'"
                                            alt=""
                                        />
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>

            <!-- For ID Style Type -->
            <div id="ID" v-if="style == 'ID'">
                <div class="space-y-8">
                    <div class="mt-8 space-y-4">
                        <div
                            class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                            style="border-radius: 50px"
                        ></div>
                        <div class="row">
                            <div class="col-6">
                                <h4
                                    class="text-3xl font-bold mb-4 text-indigo-600"
                                >
                                    Supportive (S) Students
                                </h4>
                                <div class="space-y-2">
                                    <h4 class="font-semibold text-xl">
                                        Strengths:
                                    </h4>
                                    <ul class="list-none pl-6">
                                        <li>
                                            <strong>Dependability</strong>:
                                            Supportive students are reliable and
                                            trustworthy. They often take their
                                            responsibilities seriously.
                                        </li>
                                        <li>
                                            <strong>Teamwork</strong>: They work
                                            well in group settings and are very
                                            cooperative, making them excellent
                                            team players.
                                        </li>
                                        <li>
                                            <strong>Patience</strong>: These
                                            students are patient and willing to
                                            take the time to help others,
                                            showing a lot of empathy.
                                        </li>
                                    </ul>
                                    <h4 class="font-semibold text-xl">
                                        Potential Challenges:
                                    </h4>
                                    <ul class="list-none pl-6">
                                        <li>
                                            <strong>Resistance to Change</strong
                                            >: Supportive students may struggle
                                            with change and prefer a stable,
                                            predictable environment.
                                        </li>
                                        <li>
                                            <strong
                                                >Avoidance of Conflict</strong
                                            >: They might avoid conflict to
                                            maintain harmony, which can
                                            sometimes prevent them from standing
                                            up for themselves.
                                        </li>
                                        <li>
                                            <strong
                                                >Lack of Assertiveness</strong
                                            >: They may have difficulty being
                                            assertive and expressing their own
                                            needs and opinions.
                                        </li>
                                    </ul>
                                    <h4 class="font-semibold text-xl">
                                        Teaching Tips and Correcting
                                        Inappropriate Behaviour:
                                    </h4>
                                    <ul class="list-none pl-6">
                                        <li>
                                            <strong
                                                >Structured Environment</strong
                                            >: Provide a well-organised and
                                            predictable learning environment.
                                            Use repetition and consistent
                                            routines to help them feel secure.
                                        </li>
                                        <li>
                                            <strong
                                                >Encourage Independence</strong
                                            >: Give them opportunities to make
                                            decisions independently and take on
                                            leadership roles in group settings.
                                        </li>
                                        <li>
                                            <strong
                                                >Positive Reinforcement</strong
                                            >: Offer praise and recognition for
                                            their contributions and efforts,
                                            reinforcing their sense of
                                            self-worth.
                                        </li>
                                        <li>
                                            <strong>Conflict Resolution</strong
                                            >: Teach them conflict-resolution
                                            skills to help them manage
                                            disagreements constructively.
                                        </li>
                                        <li>
                                            <strong>Supportive Feedback</strong
                                            >: Provide gentle and supportive
                                            feedback that encourages them to
                                            express their thoughts and feelings.
                                        </li>
                                        <li>
                                            <strong
                                                >Incremental Challenges</strong
                                            >: Gradually introduce new
                                            challenges to help them adapt to
                                            change and build resilience.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-6">
                                <div
                                    class="flex justify-center items-center mb-4"
                                >
                                    <img
                                        class="w-120 h-auto object-contain"
                                        :src="'/images/reports-svg-images/Page 34b.svg'"
                                        alt=""
                                    />
                                </div>

                                <div
                                    class="flex justify-center items-center mb-4"
                                >
                                    <img
                                        class="w-90 h-auto object-contain"
                                        :src="'/images/reports-svg-images/Page21.svg'"
                                        alt=""
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- For IS Style Type -->
            <div id="IS" v-if="style == 'IS'">
                <div class=" ">
                    <div class="my-6">
                        <div
                            class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                            style="border-radius: 50px"
                        ></div>
                        <div class="row">
                            <div class="col-6">
                                <h4 class="text-3xl font-bold mb-4">
                                    Supportive (S) Students
                                </h4>
                                <h4 class="text-xl font-semibold">
                                    Strengths:
                                </h4>
                                <ul class="list-none pl-5">
                                    <li>
                                        <strong>Dependability</strong>:
                                        Supportive students are reliable and
                                        trustworthy. They often take their
                                        responsibilities seriously.
                                    </li>
                                    <li>
                                        <strong>Teamwork</strong>: They work
                                        well in group settings and are very
                                        cooperative, making them excellent team
                                        players.
                                    </li>
                                    <li>
                                        <strong>Patience</strong>: These
                                        students are patient and willing to take
                                        the time to help others, showing a lot
                                        of empathy.
                                    </li>
                                </ul>
                                <h4 class="text-xl font-semibold">
                                    Potential Challenges:
                                </h4>
                                <ul class="list-none pl-5">
                                    <li>
                                        <strong>Resistance to Change</strong>:
                                        Supportive students may struggle with
                                        change and prefer a stable, predictable
                                        environment.
                                    </li>
                                    <li>
                                        <strong>Avoidance of Conflict</strong>:
                                        They might avoid conflict to maintain
                                        harmony, which can sometimes prevent
                                        them from standing up for themselves.
                                    </li>
                                    <li>
                                        <strong>Lack of Assertiveness</strong>:
                                        They may have difficulty being assertive
                                        and expressing their own needs and
                                        opinions.
                                    </li>
                                </ul>
                                <h4 class="text-xl font-semibold">
                                    Teaching Tips and Correcting Inappropriate
                                    Behaviour:
                                </h4>
                                <ul class="list-none pl-5">
                                    <li>
                                        <strong>Structured Environment</strong>:
                                        Provide a well-organised and predictable
                                        learning environment. Use repetition and
                                        consistent routines to help them feel
                                        secure.
                                    </li>
                                    <li>
                                        <strong>Encourage Independence</strong>:
                                        Give them opportunities to make
                                        decisions independently and take on
                                        leadership roles in group settings.
                                    </li>
                                    <li>
                                        <strong>Positive Reinforcement</strong>:
                                        Offer praise and recognition for their
                                        contributions and efforts, reinforcing
                                        their sense of self-worth.
                                    </li>
                                    <li>
                                        <strong>Conflict Resolution</strong>:
                                        Teach them conflict-resolution skills to
                                        help them manage disagreements
                                        constructively.
                                    </li>
                                    <li>
                                        <strong>Supportive Feedback</strong>:
                                        Provide gentle and supportive feedback
                                        that encourages them to express their
                                        thoughts and feelings.
                                    </li>
                                    <li>
                                        <strong>Incremental Challenges</strong>:
                                        Gradually introduce new challenges to
                                        help them adapt to change and build
                                        resilience.
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <div
                                    class="flex justify-center items-center mb-4"
                                >
                                    <img
                                        class="w-120 h-auto object-contain"
                                        :src="'/images/reports-svg-images/Page 34b.svg'"
                                        alt=""
                                    />
                                </div>

                                <div
                                    class="flex justify-center items-center mb-4"
                                >
                                    <img
                                        class="w-90 h-auto object-contain"
                                        :src="'/images/reports-svg-images/Page21.svg'"
                                        alt=""
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- For S Style Type -->
            <div id="S" v-if="style == 'S'">
                <div class="py-6">
                    <div class="mb-6">
                        <div
                            class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                            style="border-radius: 50px"
                        ></div>
                        <div class="row">
                            <div class="col-6">
                                <h4 class="text-3xl font-bold mb-4">
                                    Supportive (S) Students
                                </h4>
                                <h4 class="text-xl font-semibold mt-2">
                                    Strengths:
                                </h4>
                                <ul class="list-none pl-6">
                                    <li>
                                        <strong>Dependability</strong>:
                                        Supportive students are reliable and
                                        trustworthy, often taking their
                                        responsibilities seriously.
                                    </li>
                                    <li>
                                        <strong>Teamwork</strong>: They work
                                        well in group settings and are very
                                        cooperative, making them excellent team
                                        players.
                                    </li>
                                    <li>
                                        <strong>Patience</strong>: These
                                        students are patient and willing to take
                                        the time to help others, showing a lot
                                        of empathy.
                                    </li>
                                </ul>
                                <h4 class="text-xl font-semibold mt-2">
                                    Potential Challenges:
                                </h4>
                                <ul class="list-none pl-6">
                                    <li>
                                        <strong>Resistance to Change</strong>:
                                        Supportive students may struggle with
                                        change and prefer a stable, predictable
                                        environment.
                                    </li>
                                    <li>
                                        <strong>Avoidance of Conflict</strong>:
                                        They might avoid conflict to maintain
                                        harmony, which can sometimes prevent
                                        them from standing up for themselves.
                                    </li>
                                    <li>
                                        <strong>Lack of Assertiveness</strong>:
                                        They may have difficulty being assertive
                                        and expressing their own needs and
                                        opinions.
                                    </li>
                                </ul>
                                <h4 class="text-xl font-semibold mt-2">
                                    Teaching Tips and Correcting Inappropriate
                                    Behaviour:
                                </h4>
                                <ul class="list-none pl-6">
                                    <li>
                                        <strong>Structured Environment</strong>:
                                        Provide a well-organised and predictable
                                        learning environment. Use repetition and
                                        consistent routines to help them feel
                                        secure.
                                    </li>
                                    <li>
                                        <strong>Encourage Independence</strong>:
                                        Give them opportunities to make
                                        decisions independently and take on
                                        leadership roles in group settings.
                                    </li>
                                    <li>
                                        <strong>Positive Reinforcement</strong>:
                                        Offer praise and recognition for their
                                        contributions and efforts, reinforcing
                                        their sense of self-worth.
                                    </li>
                                    <li>
                                        <strong>Conflict Resolution</strong>:
                                        Teach them conflict-resolution skills to
                                        help them manage disagreements
                                        constructively.
                                    </li>
                                    <li>
                                        <strong>Supportive Feedback</strong>:
                                        Provide gentle and supportive feedback
                                        that encourages them to express their
                                        thoughts and feelings.
                                    </li>
                                    <li>
                                        <strong>Incremental Challenges</strong>:
                                        Gradually introduce new challenges to
                                        help them adapt to change and build
                                        resilience.
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <div
                                    class="flex justify-center items-center mb-4"
                                >
                                    <img
                                        class="w-120 h-auto object-contain"
                                        :src="'/images/reports-svg-images/Page 34b.svg'"
                                        alt=""
                                    />
                                </div>
                                <div
                                    class="flex justify-center items-center mb-4"
                                >
                                    <img
                                        class="w-90 h-auto object-contain"
                                        :src="'/images/reports-svg-images/Page 7.svg'"
                                        alt=""
                                    />
                                </div>

                                <div
                                    class="flex justify-center items-center mb-4"
                                >
                                    <img
                                        class="w-90 h-auto object-contain"
                                        :src="'/images/reports-svg-images/Page21.svg'"
                                        alt=""
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- For SC Style Type -->
            <div id="SC" v-if="style == 'SC'">
                <div class="text-left">


                    <div
                        class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                        style="border-radius: 50px"
                    ></div>
                    <div class="row">
                        <div class="col-6">
                            <h4
                                class="text-3xl font-bold mb-4 mt-6 text-indigo-600"
                            >
                                Supportive (S) Students
                            </h4>
                            <p class="text-xl font-bold sc-heading">
                                Strengths:
                            </p>
                            <ul class="list-none ml-5">
                                <li>
                                    <strong>Dependability</strong>: Supportive
                                    students are reliable and trustworthy. They
                                    often take their responsibilities seriously.
                                </li>
                                <li>
                                    <strong>Teamwork</strong>: They work well in
                                    group settings and are very cooperative,
                                    making them excellent team players.
                                </li>
                                <li>
                                    <strong>Patience</strong>: These students
                                    are patient and willing to take the time to
                                    help others, showing a lot of empathy.
                                </li>
                            </ul>

                            <p class="text-xl font-bold mt-4 sc-heading">
                                Potential Challenges:
                            </p>
                            <ul class="list-none ml-5">
                                <li>
                                    <strong>Resistance to Change</strong>:
                                    Supportive students may struggle with change
                                    and prefer a stable, predictable
                                    environment.
                                </li>
                                <li>
                                    <strong>Avoidance of Conflict</strong>: They
                                    might avoid conflict to maintain harmony,
                                    which can sometimes prevent them from
                                    standing up for themselves.
                                </li>
                                <li>
                                    <strong>Lack of Assertiveness</strong>: They
                                    may have difficulty being assertive and
                                    expressing their own needs and opinions.
                                </li>
                            </ul>

                            <p class="text-xl font-bold mt-4 sc-heading">
                                Teaching Tips and Correcting Inappropriate
                                Behaviour:
                            </p>
                            <ul class="list-none ml-5">
                                <li>
                                    <strong>Structured Environment</strong>:
                                    Provide a well-organised and predictable
                                    learning environment. Use repetition and
                                    consistent routines to help them feel
                                    secure.
                                </li>
                                <li>
                                    <strong>Encourage Independence</strong>:
                                    Give them opportunities to make decisions
                                    independently and take on leadership roles
                                    in group settings.
                                </li>
                                <li>
                                    <strong>Positive Reinforcement</strong>:
                                    Offer praise and recognition for their
                                    contributions and efforts, reinforcing their
                                    sense of self-worth.
                                </li>
                                <li>
                                    <strong>Conflict Resolution</strong>: Teach
                                    them conflict-resolution skills to help them
                                    manage disagreements constructively.
                                </li>
                                <li>
                                    <strong>Supportive Feedback</strong>:
                                    Provide gentle and supportive feedback that
                                    encourages them to express their thoughts
                                    and feelings.
                                </li>
                                <li>
                                    <strong>Incremental Challenges</strong>:
                                    Gradually introduce new challenges to help
                                    them adapt to change and build resilience.
                                </li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <div class="flex justify-center items-center mb-4">
                                <img
                                    class="w-120 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page 34b.svg'"
                                    alt=""
                                />
                            </div>
                            <div class="flex justify-center items-center mb-4">
                                <img
                                    class="w-96 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page20.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- For SI Style Type -->
            <div id="SI" v-if="style == 'SI'">
                <div class=" ">
                    <div
                        class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                        style="border-radius: 50px"
                    ></div>
                    <div class="row">
                        <div class="col-6">
                            <h4
                                class="text-3xl font-bold mb-4 text-indigo-600 mb-2"
                            >
                                Supportive (S) Students
                            </h4>
                            <h4 class="text-xl font-semibold">Strengths:</h4>
                            <ul class="list-none pl-5 mb-4">
                                <li>
                                    <strong>Dependability</strong>: Supportive
                                    students are reliable and trustworthy. They
                                    often take their responsibilities seriously.
                                </li>
                                <li>
                                    <strong>Teamwork</strong>: They work well in
                                    group settings and are very cooperative,
                                    making them excellent team players.
                                </li>
                                <li>
                                    <strong>Patience</strong>: These students
                                    are patient and willing to take the time to
                                    help others, showing a lot of empathy.
                                </li>
                            </ul>

                            <h4 class="text-xl font-semibold">
                                Potential Challenges:
                            </h4>
                            <ul class="list-none pl-5 mb-4">
                                <li>
                                    <strong>Resistance to Change</strong>:
                                    Supportive students may struggle with change
                                    and prefer a stable, predictable
                                    environment.
                                </li>
                                <li>
                                    <strong>Avoidance of Conflict</strong>: They
                                    might avoid conflict to maintain harmony,
                                    which can sometimes prevent them from
                                    standing up for themselves.
                                </li>
                                <li>
                                    <strong>Lack of Assertiveness</strong>: They
                                    may have difficulty being assertive and
                                    expressing their own needs and opinions.
                                </li>
                            </ul>

                            <h4 class="text-xl font-semibold">
                                Teaching Tips and Correcting Inappropriate
                                Behaviour:
                            </h4>
                            <ul class="list-none pl-5 mb-4">
                                <li>
                                    <strong>Structured Environment</strong>:
                                    Provide a well-organised and predictable
                                    learning environment. Use repetition and
                                    consistent routines to help them feel
                                    secure.
                                </li>
                                <li>
                                    <strong>Encourage Independence</strong>:
                                    Give them opportunities to make decisions
                                    independently and take on leadership roles
                                    in group settings.
                                </li>
                                <li>
                                    <strong>Positive Reinforcement</strong>:
                                    Offer praise and recognition for their
                                    contributions and efforts, reinforcing their
                                    sense of self-worth.
                                </li>
                                <li>
                                    <strong>Conflict Resolution</strong>: Teach
                                    them conflict-resolution skills to help them
                                    manage disagreements constructively.
                                </li>
                                <li>
                                    <strong>Supportive Feedback</strong>:
                                    Provide gentle and supportive feedback that
                                    encourages them to express their thoughts
                                    and feelings.
                                </li>
                                <li>
                                    <strong>Incremental Challenges</strong>:
                                    Gradually introduce new challenges to help
                                    them adapt to change and build resilience.
                                </li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <div class="flex justify-center items-center mb-4">
                                <img
                                    class="w-120 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page 34b.svg'"
                                    alt=""
                                />
                            </div>
                            <div
                                data-v-c08108fc=""
                                class="flex justify-center items-center"
                            >
                                <img
                                    data-v-c08108fc=""
                                    class="w-100 h-auto object-contain"
                                    src="/images/reports-svg-images/Page19.svg"
                                    alt=""
                                />
                            </div>
                            <div
                                data-v-39cdb3b5=""
                                class="flex justify-center items-center"
                            >
                                <img
                                    data-v-39cdb3b5=""
                                    class="w-96 h-auto object-contain"
                                    src="/images/reports-svg-images/Page 12 newb.svg"
                                    alt=""
                                />
                            </div>
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
    /* font-size: 19px; */
}

h2,
h4,
.p-6 > .row > .col-6 > h2,
.sc-heading {
    color: rgb(55 48 163);
    font-weight: bold !important;
}

ul > li {
    margin-top: 17px;
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

    strong {
        font-size: 1rem !important;
    }
    .p-6 {
        padding: 1rem;
    }

    h2,
    h3,
    h4 {
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

ul {
    padding: 0%;
}
</style>

<script>
import AssessmentTypes from "@/Layouts/AssessmentTypes.vue";

export default {
    name: "TeachingInsightS",
    layout: AssessmentTypes,
    props: {
        style: String,
        childName: String,
        image: String,
    },
};
</script>
