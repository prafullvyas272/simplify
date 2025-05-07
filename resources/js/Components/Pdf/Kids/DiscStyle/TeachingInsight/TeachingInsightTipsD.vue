<template>
    <div class="p-6">
        <div class="p-6">
            <div v-if="style == 'C'" class=" ">
                <div class="space-y-8">
                    <!-- Dominant (D) Students -->
                    <section>
                        <div
                            class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                            style="border-radius: 50px"
                        ></div>
                        <div class="row">
                            <div class="col-6">

                                <div class="rounded-lg">

                                    <h4
                                        class="text-lg font-semibold text-indigo-600 text-blue-800 mt-4"
                                    >
                                        Teaching Tips and Correcting
                                        Inappropriate Behavior:
                                    </h4>
                                    <ul class="list-none pl-6 space-y-1">
                                        <li>
                                            <strong>Active Learning:</strong>
                                            Because this student is so active,
                                            learning almost occurs as a
                                            by-product of energy, movement, and
                                            actions. Therefore, this student
                                            needs to be challenged through a
                                            sense of competition and physical
                                            (tactile or kinaesthetic)
                                            activities.
                                        </li>
                                        <li>
                                            <strong>Engaging Methods:</strong>
                                            Use demonstrations, field trips,
                                            computer learning programs, and game
                                            format lessons to engage this
                                            student.
                                        </li>
                                        <li>
                                            <strong>Clear Instructions:</strong>
                                            Since they are often poor listeners,
                                            you must give them clear
                                            instructions and achievable goals,
                                            which should be immediately rewarded
                                            when met.
                                        </li>
                                        <li>
                                            <strong
                                                >Rewards and
                                                Recognition:</strong
                                            >
                                            Look for ways to reward these
                                            students for the development of good
                                            study habits, good attitudes,
                                            self-discipline, and acceptable
                                            work. Special treats, incentive
                                            charts, colourful stickers, and
                                            short breaks between lessons (since
                                            they have difficulty sustaining an
                                            assignment for extended periods of
                                            time) all serve as additional
                                            motivations.
                                        </li>
                                        <li>
                                            <strong>
                                                Minimal Distractions:</strong
                                            >

                                            To help the student stay focused on
                                            the task at hand, provide a quiet
                                            environment with minimum
                                            distractions.
                                        </li>
                                        <li>
                                            <strong>
                                                Variety and Choices:</strong
                                            >
                                            Display great patience and
                                            encouragement while offering the
                                            student plenty of variety and
                                            choices of learning activities that
                                            are practical and useful.
                                        </li>
                                        <li>
                                            <strong>
                                                Conflict Resolution:</strong
                                            >
                                            Teach conflict-resolution skills by
                                            role-playing scenarios where the
                                            student learns to compromise and see
                                            others' viewpoints.
                                        </li>
                                        <li>
                                            <strong
                                                >Logical Consequences:</strong
                                            >
                                            Use logical consequences that
                                            directly relate to their behaviour
                                            to help them understand the impact
                                            of their actions. For instance, if
                                            they are disruptive during group
                                            work, have them take a timeout to
                                            reflect on their behaviour and then
                                            rejoin the group when they are ready
                                            to participate positively.
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

                                <div
                                    class="flex justify-center items-center mb-4"
                                >
                                    <img
                                        class="w-120 h-auto object-contain"
                                        :src="'/images/reports-svg-images/Page21.svg'"
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
                <!-- Dominant (D) Students Section -->
                <div class="rounded-lg mb-8">
                    <div
                        class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                        style="border-radius: 50px"
                    ></div>
                    <h4 class="text-3xl font-bold mb-4">
                        Dominant (D) Students
                    </h4>
                    <div class="space-y-4">
                        <div class="row">
                            <div class="col-6">

                                <div>
                                    <h4 class="font-bold text-lg">
                                        Teaching Tips and Correcting
                                        Inappropriate Behavior:
                                    </h4>
                                    <ul class="list-none pl-5">
                                        <li>
                                            <strong>Active Learning</strong>:
                                            Because this student is so active,
                                            learning almost occurs as a
                                            by-product of energy, movement, and
                                            actions. Therefore, this student
                                            needs to be challenged through a
                                            sense of competition and physical
                                            (tactile or kinaesthetic)
                                            activities.
                                        </li>
                                        <li>
                                            <strong>Engaging Methods</strong>:
                                            Use demonstrations, field trips,
                                            computer learning programs, and game
                                            format lessons to engage this
                                            student.
                                        </li>
                                        <li>
                                            <strong>Clear Instructions</strong>:
                                            Since they are often poor listeners,
                                            you must give them clear
                                            instructions and achievable goals,
                                            which should be immediately rewarded
                                            when met.
                                        </li>
                                        <li>
                                            <strong
                                                >Rewards and Recognition</strong
                                            >: Look for ways to reward these
                                            students for the development of good
                                            study habits, good attitudes,
                                            self-discipline, and acceptable
                                            work. Special treats, incentive
                                            charts, colourful stickers, and
                                            short breaks between lessons (since
                                            they have difficulty sustaining an
                                            assignment for extended periods of
                                            time) all serve as additional
                                            motivations.
                                        </li>
                                        <li>
                                            <strong>Minimal Distractions</strong
                                            >: To help the student stay focused
                                            on the task at hand, provide a quiet
                                            environment with minimum
                                            distractions.
                                        </li>
                                        <li>
                                            <strong>Variety and Choices</strong
                                            >: Display great patience and
                                            encouragement while offering the
                                            student plenty of variety and
                                            choices of learning activities that
                                            are practical and useful.
                                        </li>
                                        <li>
                                            <strong>Conflict Resolution</strong
                                            >: Teach conflict-resolution skills
                                            by role-playing scenarios where the
                                            student learns to compromise and see
                                            others' viewpoints.
                                        </li>
                                        <li>
                                            <strong>Logical Consequences</strong
                                            >: Use logical consequences that
                                            directly relate to their behaviour
                                            to help them understand the impact
                                            of their actions. For instance, if
                                            they are disruptive during group
                                            work, have them take a timeout to
                                            reflect on their behaviour and then
                                            rejoin the group when they are ready
                                            to participate positively.
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-6">
                                <div
                                    class="flex justify-center items-center mb-4"
                                >
                                    <img
                                        class="w-90 h-auto object-contain"
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
                                    data-v-4e1d6ec0=""
                                    class="flex justify-center items-center mt-4 mb-4"
                                >
                                    <img
                                        data-v-4e1d6ec0=""
                                        class="w-90 h-auto object-contain"
                                        src="/images/reports-svg-images/Page31b.svg"
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
                            <h4 class="text-2xl font-semibold mb-2">
                                Teaching Tips and Correcting Inappropriate
                                Behaviour:
                            </h4>
                            <ul class="list-none pl-6 mb-6">
                                <li>
                                    <b>Active Learning:</b>
                                    Because this student is so active, learning
                                    almost occurs as a by-product of energy,
                                    movement, and actions. Therefore, this
                                    student needs to be challenged through a
                                    sense of competition and physical (tactile
                                    or kinesthetic) activities.
                                </li>
                                <li>
                                    <b>Engaging Methods:</b>
                                    Use demonstrations, field trips, computer
                                    learning programs, and game format lessons
                                    to engage this student.
                                </li>
                                <li>
                                    <b>Clear Instructions:</b>
                                    Since they are often poor listeners, you
                                    must give them clear instructions and
                                    achievable goals, which should be
                                    immediately rewarded when met.
                                </li>
                                <li>
                                    <b>Rewards and Recognition:</b>
                                    Look for ways to reward these students for
                                    the development of good study habits, good
                                    attitudes, self-discipline, and acceptable
                                    work. Special treats, incentive charts,
                                    colourful stickers, and short breaks between
                                    lessons (since they have difficulty
                                    sustaining an assignment for extended
                                    periods of time) all serve as additional
                                    motivations.
                                </li>
                                <li>
                                    <b>Minimal Distractions:</b>
                                    To help the student stay focused on the task
                                    at hand, provide a quiet environment with
                                    minimum distractions.
                                </li>
                                <li>
                                    <b>Variety and Choices:</b>
                                    Display great patience and encouragement
                                    while offering the student plenty of variety
                                    and choices of learning activities that are
                                    practical and useful.
                                </li>
                                <li>
                                    <b>Conflict Resolution:</b>
                                    Teach conflict-resolution skills by
                                    role-playing scenarios where the student
                                    learns to compromise and see others'
                                    viewpoints.
                                </li>
                                <li>
                                    <b>Logical Consequences:</b>
                                    Use logical consequences that directly
                                    relate to their behaviour to help them
                                    understand the impact of their actions. For
                                    instance, if they are disruptive during
                                    group work, have them take a timeout to
                                    reflect on their behaviour and then rejoin
                                    the group when they are ready to participate
                                    positively.
                                </li>
                            </ul>
                        </div>
                        <div class="col-6">

                            <div class="flex justify-center items-center mb-4">
                                <img
                                    class="w-96 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page20.svg'"
                                    alt=""
                                />
                            </div>

                            <div class="flex justify-center items-center mb-4">
                                <img
                                    class="w-120 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page21.svg'"
                                    alt=""
                                />
                            </div>

                            <div class="flex justify-center items-center mb-4">
                                <img
                                    class="w-64 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page 7.svg'"
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

                                <div class="space-y-4">
                                    <div class="mb-8">
                                        <h4 class="text-xl font-semibold mb-2">
                                            Teaching Tips and Correcting
                                            Inappropriate Behaviour:
                                        </h4>
                                        <div class="space-y-4">
                                            <p>
                                                <span class="font-semibold"
                                                    >Active Learning:</span
                                                >
                                                Because this student is so
                                                active, learning almost occurs
                                                as a by-product of energy,
                                                movement, and actions.
                                                Therefore, this student needs to
                                                be challenged through a sense of
                                                competition and physical
                                                (tactile or kinaesthetic)
                                                activities.
                                            </p>
                                            <p>
                                                <span class="font-semibold"
                                                    >Engaging Methods:</span
                                                >
                                                Use demonstrations, field trips,
                                                computer learning programs, and
                                                game-format lessons to engage
                                                this student.
                                            </p>
                                            <p>
                                                <span class="font-semibold"
                                                    >Clear Instructions:</span
                                                >
                                                Since they are often poor
                                                listeners, you must give them
                                                clear instructions and
                                                achievable goals, which should
                                                be immediately rewarded when
                                                met.
                                            </p>
                                            <p>
                                                <span class="font-semibold"
                                                    >Rewards and
                                                    Recognition:</span
                                                >
                                                Look for ways to reward these
                                                students for the development of
                                                good study habits, good
                                                attitudes, self-discipline, and
                                                acceptable work. Special treats,
                                                incentive charts, colourful
                                                stickers, and short breaks
                                                between lessons (since they have
                                                difficulty sustaining an
                                                assignment for extended periods
                                                of time) all serve as additional
                                                motivations.
                                            </p>
                                            <p>
                                                <span class="font-semibold"
                                                    >Minimal Distractions:</span
                                                >
                                                To help the student stay focused
                                                on the task at hand, provide a
                                                quiet environment with minimum
                                                distractions.
                                            </p>
                                            <p>
                                                <span class="font-semibold"
                                                    >Variety and Choices:</span
                                                >
                                                Display great patience and
                                                encouragement while offering the
                                                student plenty of variety and
                                                choices of learning activities
                                                that are practical and useful.
                                            </p>
                                            <p>
                                                <span class="font-semibold"
                                                    >Conflict Resolution:</span
                                                >
                                                Teach conflict-resolution skills
                                                by role-playing scenarios where
                                                the student learns to compromise
                                                and see others' viewpoints.
                                            </p>
                                            <p>
                                                <span class="font-semibold"
                                                    >Logical Consequences:</span
                                                >
                                                Use logical consequences that
                                                directly relate to their
                                                behaviour to help them
                                                understand the impact of their
                                                actions. For instance, if they
                                                are disruptive during group
                                                work, have them take a timeout
                                                to reflect on their behaviour
                                                and then rejoin the group when
                                                they are ready to participate
                                                positively.
                                            </p>
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
                                <h4 class="font-semibold">
                                    Teaching Tips and Correcting Inappropriate
                                    Behaviour:
                                </h4>
                                <ul class="list-none pl-5 space-y-2">
                                    <li>
                                        <strong>Active Learning:</strong>
                                        Because this student is so active,
                                        learning almost occurs as a by-product
                                        of energy, movement, and actions.
                                        Therefore, this student needs to be
                                        challenged through a sense of
                                        competition and physical (tactile or
                                        kinaesthetic) activities.
                                    </li>
                                    <li>
                                        <strong>Engaging Methods:</strong>
                                        Use demonstrations, field trips,
                                        computer learning programs, and game
                                        format lessons to engage this student.
                                    </li>
                                    <li>
                                        <strong>Clear Instructions:</strong>
                                        Since they are often poor listeners, you
                                        must give them clear instructions and
                                        achievable goals, which should be
                                        immediately rewarded when met.
                                    </li>
                                    <li>
                                        <strong
                                            >Rewards and Recognition:</strong
                                        >
                                        Look for ways to reward these students
                                        for the development of good study
                                        habits, good attitudes, self-discipline,
                                        and acceptable work. Special treats,
                                        incentive charts, colourful stickers,
                                        and short breaks between lessons (since
                                        they have difficulty sustaining an
                                        assignment for extended periods of time)
                                        all serve as additional motivations.
                                    </li>
                                    <li>
                                        <strong>Minimal Distractions:</strong>
                                        To help the student stay focused on the
                                        task at hand, provide a quiet
                                        environment with minimum distractions.
                                    </li>
                                    <li>
                                        <strong>Variety and Choices:</strong>
                                        Display great patience and encouragement
                                        while offering the student plenty of
                                        variety and choices of learning
                                        activities that are practical and
                                        useful.
                                    </li>
                                    <li>
                                        <strong>Conflict Resolution:</strong>
                                        Teach conflict-resolution skills by
                                        role-playing scenarios where the student
                                        learns to compromise and see others'
                                        viewpoints.
                                    </li>
                                    <li>
                                        <strong>Logical Consequences:</strong>
                                        Use logical consequences that directly
                                        relate to their behaviour to help them
                                        understand the impact of their actions.
                                        For instance, if they are disruptive
                                        during group work, have them take a
                                        timeout to reflect on their behaviour
                                        and then rejoin the group when they are
                                        ready to participate positively.
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

            <!-- For I Style Type -->
            <div id="I" v-if="style == 'I'">
                <div class="">

                    <div class="">
                        <!-- Dominant (D) Students -->
                        <section>
                            <div class="row">
                                <div class="col-6">
                                    <div class="mt-4">
                                        <h4 class="font-semibold">
                                            Teaching Tips and Correcting
                                            Inappropriate Behaviour:
                                        </h4>
                                        <ul class="list-none pl-5">
                                            <li>
                                                <strong
                                                    >Active Learning:
                                                </strong>
                                                Because this student is so
                                                active, learning almost occurs
                                                as a by-product of energy,
                                                movement, and actions.
                                                Therefore, this student needs to
                                                be challenged through a sense of
                                                competition and physical
                                                (tactile or kinaesthetic)
                                                activities.
                                            </li>
                                            <li>
                                                <strong
                                                    >Engaging Methods:
                                                </strong>
                                                Use demonstrations, field trips,
                                                computer learning programs, and
                                                game format lessons to engage
                                                this student.
                                            </li>
                                            <li>
                                                <strong
                                                    >Clear Instructions:
                                                </strong>
                                                Since they are often poor
                                                listeners, you must give them
                                                clear instructions and
                                                achievable goals, which should
                                                be immediately rewarded when
                                                met.
                                            </li>
                                            <li>
                                                <strong
                                                    >Rewards and Recognition:
                                                </strong>
                                                Look for ways to reward these
                                                students for the development of
                                                good study habits, good
                                                attitudes, self-discipline, and
                                                acceptable work. Special treats,
                                                incentive charts, colourful
                                                stickers, and short breaks
                                                between lessons (since they have
                                                difficulty sustaining an
                                                assignment for extended periods
                                                of time) all serve as additional
                                                motivations.
                                            </li>
                                            <li>
                                                <strong
                                                    >Minimal Distractions:
                                                </strong>
                                                To help the student stay focused
                                                on the task at hand, provide a
                                                quiet environment with minimum
                                                distractions.
                                            </li>
                                            <li>
                                                <strong
                                                    >Variety and Choices:
                                                </strong>
                                                Display great patience and
                                                encouragement while offering the
                                                student plenty of variety and
                                                choices of learning activities
                                                that are practical and useful.
                                            </li>
                                            <li>
                                                <strong
                                                    >Conflict Resolution:
                                                </strong>
                                                Teach conflict-resolution skills
                                                by role-playing scenarios where
                                                the student learns to compromise
                                                and see others' viewpoints.
                                            </li>
                                            <li>
                                                <strong
                                                    >Logical Consequences:
                                                </strong>
                                                Use logical consequences that
                                                directly relate to their
                                                behaviour to help them
                                                understand the impact of their
                                                actions. For instance, if they
                                                are disruptive during group
                                                work, have them take a timeout
                                                to reflect on their behaviour
                                                and then rejoin the group when
                                                they are ready to participate
                                                positively.
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
                                            :src="'/images/reports-svg-images/Page20.svg'"
                                            alt=""
                                        />
                                    </div>

                                    <div
                                        class="flex justify-center items-center mb-4"
                                    >
                                        <img
                                            class="w-120 h-auto object-contain"
                                            :src="'/images/reports-svg-images/Page21.svg'"
                                            alt=""
                                        />
                                    </div>

                                    <div
                                        class="flex justify-center items-center mb-4"
                                    >
                                        <img
                                            class="w-64 h-auto object-contain"
                                            :src="'/images/reports-svg-images/Page 7.svg'"
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

                                <div class="space-y-2">
                                    <h4 class="font-semibold text-xl">
                                        Teaching Tips and Correcting
                                        Inappropriate Behaviour:
                                    </h4>
                                    <ul class="list-none pl-6">
                                        <li>
                                            <strong>Active Learning</strong>:
                                            Because this student is so active,
                                            learning almost occurs as a
                                            by-product of energy, movement, and
                                            actions. Therefore, this student
                                            needs to be challenged through a
                                            sense of competition and physical
                                            (tactile or kinaesthetic)
                                            activities.
                                        </li>
                                        <li>
                                            <strong>Engaging Methods</strong>:
                                            Use demonstrations, field trips,
                                            computer learning programs, and game
                                            format lessons to engage this
                                            student.
                                        </li>
                                        <li>
                                            <strong>Clear Instructions</strong>:
                                            Since they are often poor listeners,
                                            you must give them clear
                                            instructions and achievable goals,
                                            which should be immediately rewarded
                                            when met.
                                        </li>
                                        <li>
                                            <strong
                                                >Rewards and Recognition</strong
                                            >: Look for ways to reward these
                                            students for the development of good
                                            study habits, good attitudes,
                                            self-discipline, and acceptable
                                            work. Special treats, incentive
                                            charts, colourful stickers, and
                                            short breaks between lessons (since
                                            they have difficulty sustaining an
                                            assignment for extended periods of
                                            time) all serve as additional
                                            motivations.
                                        </li>
                                        <li>
                                            <strong>Minimal Distractions</strong
                                            >: To help the student stay focused
                                            on the task at hand, provide a quiet
                                            environment with minimum
                                            distractions.
                                        </li>
                                        <li>
                                            <strong>Variety and Choices</strong
                                            >: Display great patience and
                                            encouragement while offering the
                                            student plenty of variety and
                                            choices of learning activities that
                                            are practical and useful.
                                        </li>
                                        <li>
                                            <strong>Conflict Resolution</strong
                                            >: Teach conflict-resolution skills
                                            by role-playing scenarios where the
                                            student learns to compromise and see
                                            others' viewpoints.
                                        </li>
                                        <li>
                                            <strong>Logical Consequences</strong
                                            >: Use logical consequences that
                                            directly relate to their behaviour
                                            to help them understand the impact
                                            of their actions. For instance, if
                                            they are disruptive during group
                                            work, have them take a timeout to
                                            reflect on their behaviour and then
                                            rejoin the group when they are ready
                                            to participate positively.
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

                                <h4 class="text-xl font-semibold">
                                    Teaching Tips and Correcting Inappropriate
                                    Behaviour:
                                </h4>
                                <ul class="list-none pl-5">
                                    <li>
                                        <strong>Active Learning</strong>:
                                        Because this student is so active,
                                        learning almost occurs as a by-product
                                        of energy, movement, and actions.
                                        Therefore, this student needs to be
                                        challenged through a sense of
                                        competition and physical (tactile or
                                        kinaesthetic) activities.
                                    </li>
                                    <li>
                                        <strong>Engaging Methods</strong>: Use
                                        demonstrations, field trips, computer
                                        learning programs, and game format
                                        lessons to engage this student.
                                    </li>
                                    <li>
                                        <strong>Clear Instructions</strong>:
                                        Since they are often poor listeners, you
                                        must give them clear instructions and
                                        achievable goals, which should be
                                        immediately rewarded when met.
                                    </li>
                                    <li>
                                        <strong>Rewards and Recognition</strong
                                        >: Look for ways to reward these
                                        students for the development of good
                                        study habits, good attitudes,
                                        self-discipline, and acceptable work.
                                        Special treats, incentive charts,
                                        colourful stickers, and short breaks
                                        between lessons (since they have
                                        difficulty sustaining an assignment for
                                        extended periods of time) all serve as
                                        additional motivations.
                                    </li>
                                    <li>
                                        <strong>Minimal Distractions</strong>:
                                        To help the student stay focused on the
                                        task at hand, provide a quiet
                                        environment with minimum distractions.
                                    </li>
                                    <li>
                                        <strong>Variety and Choices</strong>:
                                        Display great patience and encouragement
                                        while offering the student plenty of
                                        variety and choices of learning
                                        activities that are practical and
                                        useful.
                                    </li>
                                    <li>
                                        <strong>Conflict Resolution</strong>:
                                        Teach conflict-resolution skills by
                                        role-playing scenarios where the student
                                        learns to compromise and see others'
                                        viewpoints.
                                    </li>
                                    <li>
                                        <strong>Logical Consequences</strong>:
                                        Use logical consequences that directly
                                        relate to their behaviour to help them
                                        understand the impact of their actions.
                                        For instance, if they are disruptive
                                        during group work, have them take a
                                        timeout to reflect on their behaviour
                                        and then rejoin the group when they are
                                        ready to participate positively.
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

                                <h4 class="text-xl font-semibold mt-2">
                                    Teaching Tips and Correcting Inappropriate
                                    Behaviour:
                                </h4>
                                <ul class="list-none pl-6">
                                    <li>
                                        <strong>Active Learning</strong>:
                                        Because this student is so active,
                                        learning almost occurs as a by-product
                                        of energy, movement, and actions.
                                        Therefore, this student needs to be
                                        challenged through a sense of
                                        competition and physical (tactile or
                                        kinaesthetic) activities.
                                    </li>
                                    <li>
                                        <strong>Engaging Methods</strong>: Use
                                        demonstrations, field trips, computer
                                        learning programs, and game format
                                        lessons to engage this student.
                                    </li>
                                    <li>
                                        <strong>Clear Instructions</strong>:
                                        Since they are often poor listeners, you
                                        must give them clear instructions and
                                        achievable goals, which should be
                                        immediately rewarded when met.
                                    </li>
                                    <li>
                                        <strong>Rewards and Recognition</strong
                                        >: Look for ways to reward these
                                        students for the development of good
                                        study habits, good attitudes,
                                        self-discipline, and acceptable work.
                                        Special treats, incentive charts,
                                        colourful stickers, and short breaks
                                        between lessons (since they have
                                        difficulty sustaining an assignment for
                                        extended periods of time) all serve as
                                        additional motivations.
                                    </li>
                                    <li>
                                        <strong>Minimal Distractions</strong>:
                                        To help the student stay focused on the
                                        task at hand, provide a quiet
                                        environment with minimum distractions.
                                    </li>
                                    <li>
                                        <strong>Variety and Choices</strong>:
                                        Display great patience and encouragement
                                        while offering the student plenty of
                                        variety and choices of learning
                                        activities that are practical and
                                        useful.
                                    </li>
                                    <li>
                                        <strong>Conflict Resolution</strong>:
                                        Teach conflict-resolution skills by
                                        role-playing scenarios where the student
                                        learns to compromise and see others'
                                        viewpoints.
                                    </li>
                                    <li>
                                        <strong>Logical Consequences</strong>:
                                        Use logical consequences that directly
                                        relate to their behaviour to help them
                                        understand the impact of their actions.
                                        For instance, if they are disruptive
                                        during group work, have them take a
                                        timeout to reflect on their behaviour
                                        and then rejoin the group when they are
                                        ready to participate positively.
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6">

                                <div
                                    class="flex justify-center items-center mb-4"
                                >
                                    <img
                                        class="w-96 h-auto object-contain"
                                        :src="'/images/reports-svg-images/Page20.svg'"
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

                            <p class="text-xl font-bold mt-4 sc-heading">
                                Teaching Tips and Correcting Inappropriate
                                Behaviour:
                            </p>
                            <ul class="list-none ml-5">
                                <li>
                                    <strong>Active Learning</strong>: Because
                                    this student is so active, learning almost
                                    occurs as a by-product of energy, movement,
                                    and actions. Therefore, this student needs
                                    to be challenged through a sense of
                                    competition and physical (tactile or
                                    kinaesthetic) activities.
                                </li>
                                <li>
                                    <strong>Engaging Methods</strong>: Use
                                    demonstrations, field trips, computer
                                    learning programs, and game format lessons
                                    to engage this student.
                                </li>
                                <li>
                                    <strong>Clear Instructions</strong>: Since
                                    they are often poor listeners, you must give
                                    them clear instructions and achievable
                                    goals, which should be immediately rewarded
                                    when met.
                                </li>
                                <li>
                                    <strong>Rewards and Recognition</strong>:
                                    Look for ways to reward these students for
                                    the development of good study habits, good
                                    attitudes, self-discipline, and acceptable
                                    work. Special treats, incentive charts,
                                    colourful stickers, and short breaks between
                                    lessons (since they have difficulty
                                    sustaining an assignment for extended
                                    periods of time) all serve as additional
                                    motivations.
                                </li>
                                <li>
                                    <strong>Minimal Distractions</strong>: To
                                    help the student stay focused on the task at
                                    hand, provide a quiet environment with
                                    minimum distractions.
                                </li>
                                <li>
                                    <strong>Variety and Choices</strong>:
                                    Display great patience and encouragement
                                    while offering the student plenty of variety
                                    and choices of learning activities that are
                                    practical and useful.
                                </li>
                                <li>
                                    <strong>Conflict Resolution</strong>: Teach
                                    conflict-resolution skills by role-playing
                                    scenarios where the student learns to
                                    compromise and see others' viewpoints.
                                </li>
                                <li>
                                    <strong>Logical Consequences</strong>: Use
                                    logical consequences that directly relate to
                                    their behaviour to help them understand the
                                    impact of their actions. For instance, if
                                    they are disruptive during group work, have
                                    them take a timeout to reflect on their
                                    behaviour and then rejoin the group when
                                    they are ready to participate positively.
                                </li>
                            </ul>
                        </div>
                        <div class="col-6">

                            <div class="flex justify-center items-center mb-4">
                                <img
                                    class="w-96 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page20.svg'"
                                    alt=""
                                />
                            </div>
                            <img
                                class="rounded-full m-4 flex w-30 h-30 bg-white object-contain"
                                src="/images/reports-images/C.png"
                                alt=""
                            />
                            <div
                                data-v-c08108fc=""
                                class="flex justify-center items-center mb-4"
                            >
                                <img
                                    data-v-c08108fc=""
                                    class="w-80 h-auto object-contain"
                                    src="/images/reports-svg-images/Page21.svg"
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
                            <h4 class="text-xl font-semibold">
                                Teaching Tips and Correcting Inappropriate
                                Behaviour:
                            </h4>
                            <ul class="list-none pl-5 mb-4">
                                <li>
                                    <strong>Active Learning</strong>: Because
                                    this student is so active, learning almost
                                    occurs as a by-product of energy, movement,
                                    and actions. Therefore, this student needs
                                    to be challenged through a sense of
                                    competition and physical (tactile or
                                    kinaesthetic) activities.
                                </li>
                                <li>
                                    <strong>Engaging Methods</strong>: Use
                                    demonstrations, field trips, computer
                                    learning programs, and game format lessons
                                    to engage this student.
                                </li>
                                <li>
                                    <strong>Clear Instructions</strong>: Since
                                    they are often poor listeners, you must give
                                    them clear instructions and achievable
                                    goals, which should be immediately rewarded
                                    when met.
                                </li>
                                <li>
                                    <strong>Rewards and Recognition</strong>:
                                    Look for ways to reward these students for
                                    the development of good study habits, good
                                    attitudes, self-discipline, and acceptable
                                    work. Special treats, incentive charts,
                                    colourful stickers, and short breaks between
                                    lessons (since they have difficulty
                                    sustaining an assignment for extended
                                    periods of time) all serve as additional
                                    motivations.
                                </li>
                                <li>
                                    <strong>Minimal Distractions</strong>: To
                                    help the student stay focused on the task at
                                    hand, provide a quiet environment with
                                    minimum distractions.
                                </li>
                                <li>
                                    <strong>Variety and Choices</strong>:
                                    Display great patience and encouragement
                                    while offering the student plenty of variety
                                    and choices of learning activities that are
                                    practical and useful.
                                </li>
                                <li>
                                    <strong>Conflict Resolution</strong>: Teach
                                    conflict-resolution skills by role-playing
                                    scenarios where the student learns to
                                    compromise and see others' viewpoints.
                                </li>
                                <li>
                                    <strong>Logical Consequences</strong>: Use
                                    logical consequences that directly relate to
                                    their behaviour to help them understand the
                                    impact of their actions. For instance, if
                                    they are disruptive during group work, have
                                    them take a timeout to reflect on their
                                    behaviour and then rejoin the group when
                                    they are ready to participate positively.
                                </li>
                            </ul>
                        </div>
                        <div class="col-6">

                            <div class="flex justify-center items-center mb-4">
                                <img
                                    class="w-96 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page20.svg'"
                                    alt=""
                                />
                            </div>
                            <div
                                data-v-c08108fc=""
                                class="mt-5 flex justify-center items-center"
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
                                class="mt-5 flex justify-center items-center"
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
    name: "TeachingInsightTipsD",
    layout: AssessmentTypes,
    props: {
        style: String,
        childName: String,
        image: String,
    },
};
</script>
