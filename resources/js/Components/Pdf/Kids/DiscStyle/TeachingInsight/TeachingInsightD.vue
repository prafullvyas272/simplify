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
                                <h4 class="text-3xl font-bold mb-4">
                                    Dominant (D) Students
                                </h4>
                                <div class="rounded-lg">
                                    <h4
                                        class="text-lg font-semibold text-indigo-600 text-blue-800"
                                    >
                                        Strengths:
                                    </h4>
                                    <ul class="list-none pl-6 space-y-1">
                                        <li>
                                            <strong
                                                >Leadership Abilities:</strong
                                            >
                                            Dominant students are natural
                                            leaders who are confident in taking
                                            charge and making decisions.
                                        </li>
                                        <li>
                                            <strong>Goal-Oriented:</strong> They
                                            are highly motivated by goals and
                                            challenges, often setting high
                                            standards for themselves.
                                        </li>
                                        <li>
                                            <strong
                                                >Energetic and Active:</strong
                                            >
                                            These students have a high energy
                                            level and enjoy activities that
                                            involve physical movement and
                                            action.
                                        </li>
                                    </ul>

                                    <h4
                                        class="text-lg font-semibold text-indigo-600 text-blue-800 mt-4"
                                    >
                                        Potential Challenges:
                                    </h4>
                                    <ul class="list-none pl-6 space-y-1">
                                        <li>
                                            <strong>Impatience: </strong>
                                            Dominant students may become easily
                                            frustrated if things do not move at
                                            their pace or if they do not achieve
                                            immediate results.
                                        </li>
                                        <li>
                                            <strong
                                                >Difficulty Listening:</strong
                                            >
                                            They may struggle with listening to
                                            others, preferring to lead and make
                                            decisions independently.
                                        </li>
                                        <li>
                                            <strong
                                                >Authority Conflicts:</strong
                                            >
                                            These students might challenge
                                            authority and resist following
                                            directions if they feel their
                                            autonomy is being restricted.
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
                                        Strengths:
                                    </h4>
                                    <ul class="list-none pl-5">
                                        <li>
                                            <strong>Leadership Abilities</strong
                                            >: Dominant students are natural
                                            leaders who are confident in taking
                                            charge and making decisions.
                                        </li>
                                        <li>
                                            <strong>Goal-Oriented</strong>: They
                                            are highly motivated by goals and
                                            challenges, often setting high
                                            standards for themselves.
                                        </li>
                                        <li>
                                            <strong>Energetic and Active</strong
                                            >: These students have a high energy
                                            level and enjoy activities that
                                            involve physical movement and
                                            action.
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="font-bold text-lg">
                                        Potential Challenges:
                                    </h4>
                                    <ul class="list-none pl-5">
                                        <li>
                                            <strong>Impatience</strong>:
                                            Dominant students may become easily
                                            frustrated if things do not move at
                                            their pace or if they do not achieve
                                            immediate results.
                                        </li>
                                        <li>
                                            <strong>Difficulty Listening</strong
                                            >: They may struggle with listening
                                            to others, preferring to lead and
                                            make decisions independently.
                                        </li>
                                        <li>
                                            <strong>Authority Conflicts</strong
                                            >: These students might challenge
                                            authority and resist following
                                            directions if they feel their
                                            autonomy is being restricted.
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
                            <h4 class="text-3xl font-semibold mb-4">
                                Dominant (D) Students
                            </h4>
                            <h4 class="text-2xl font-semibold mb-2">
                                Strengths:
                            </h4>
                            <ul class="list-none pl-6 mb-4">
                                <li>
                                    <b>Leadership Abilities:</b> Dominant
                                    students are natural leaders who are
                                    confident in taking charge and making
                                    decisions.
                                </li>
                                <li>
                                    <b>Goal-Oriented:</b> They are highly
                                    motivated by goals and challenges, often
                                    setting high standards for themselves.
                                </li>
                                <li>
                                    <b>Energetic and Active:</b> These students
                                    have a high energy level and enjoy
                                    activities that involve physical movement
                                    and action.
                                </li>
                            </ul>

                            <h4 class="text-2xl font-semibold mb-2">
                                Potential Challenges:
                            </h4>
                            <ul class="list-none pl-6 mb-4">
                                <li>
                                    <b>Impatience:</b> Dominant students may
                                    become easily frustrated if things do not
                                    move at their pace or if they do not achieve
                                    immediate results.
                                </li>
                                <li>
                                    <b>Difficulty Listening:</b> They may
                                    struggle with listening to others,
                                    preferring to lead and make decisions
                                    independently.
                                </li>
                                <li>
                                    <b>Authority Conflicts:</b> These students
                                    might challenge authority and resist
                                    following directions if they feel their
                                    autonomy is being restricted.
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
                                <h4 class="text-3xl font-bold mb-4">
                                    Dominant (D) Students
                                </h4>
                                <div class="space-y-4">
                                    <div>
                                        <h4 class="text-xl font-semibold">
                                            Strengths:
                                        </h4>
                                        <ul class="list-none list-inside pl-6">
                                            <li>
                                                <strong
                                                    >Leadership
                                                    Abilities:</strong
                                                >
                                                Dominant students are natural
                                                leaders who are confident in
                                                taking charge and making
                                                decisions.
                                            </li>
                                            <li>
                                                <strong>
                                                    Goal-Oriented:
                                                </strong>
                                                They are highly motivated by
                                                goals and challenges, often
                                                setting high standards for
                                                themselves.
                                            </li>
                                            <li>
                                                <strong
                                                    >Energetic and Active:
                                                </strong>
                                                These students have a high
                                                energy level and enjoy
                                                activities that involve physical
                                                movement and action.
                                            </li>
                                        </ul>
                                    </div>

                                    <div>
                                        <h4 class="text-xl font-semibold">
                                            Potential Challenges:
                                        </h4>
                                        <ul class="list-none list-inside pl-6">
                                            <li>
                                                <strong>Impatience: </strong>
                                                Dominant students may become
                                                easily frustrated if things do
                                                not move at their pace or if
                                                they do not achieve immediate
                                                results.
                                            </li>
                                            <li>
                                                <strong
                                                    >Difficulty Listening:
                                                </strong>
                                                They may struggle with listening
                                                to others, preferring to lead
                                                and make decisions
                                                independently.
                                            </li>
                                            <li>
                                                <strong
                                                    >Authority Conflicts:
                                                </strong>
                                                These students might challenge
                                                authority and resist following
                                                directions if they feel their
                                                autonomy is being restricted.
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
                                <h4 class="text-3xl font-bold mb-4">
                                    Dominant (D) Students
                                </h4>
                                <h4 class="font-semibold">Strengths:</h4>
                                <ul class="list-none pl-5 space-y-2">
                                    <li>
                                        <strong>Leadership Abilities:</strong>
                                        Dominant students are natural leaders
                                        who are confident in taking charge and
                                        making decisions.
                                    </li>
                                    <li>
                                        <strong>Goal-Oriented:</strong> They are
                                        highly motivated by goals and
                                        challenges, often setting high standards
                                        for themselves.
                                    </li>
                                    <li>
                                        <strong>Energetic and Active:</strong>
                                        These students have a high energy level
                                        and enjoy activities that involve
                                        physical movement and action.
                                    </li>
                                </ul>

                                <h4 class="font-semibold">
                                    Potential Challenges:
                                </h4>
                                <ul class="list-none pl-5 space-y-2">
                                    <li>
                                        <strong>Impatience:</strong> Dominant
                                        students may become easily frustrated if
                                        things do not move at their pace or if
                                        they do not achieve immediate results.
                                    </li>
                                    <li>
                                        <strong>Difficulty Listening:</strong>
                                        They may struggle with listening to
                                        others, preferring to lead and make
                                        decisions independently.
                                    </li>
                                    <li>
                                        <strong>Authority Conflicts:</strong>
                                        These students might challenge authority
                                        and resist following directions if they
                                        feel their autonomy is being restricted.
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
                            <div
                                class="w-full h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                                style="border-radius: 50px"
                            ></div>
                            <div class="row">
                                <div class="col-6">
                                    <h4 class="text-3xl font-bold mb-4">
                                        Dominant (D) Students
                                    </h4>
                                    <div class="mt-4">
                                        <h4 class="font-semibold">
                                            Strengths:
                                        </h4>
                                        <ul class="list-none pl-5">
                                            <li>
                                                <strong
                                                    >Leadership Abilities:
                                                </strong>
                                                Dominant students are natural
                                                leaders who are confident in
                                                taking charge and making
                                                decisions.
                                            </li>
                                            <li>
                                                <strong>Goal-Oriented: </strong
                                                >They are highly motivated by
                                                goals and challenges, often
                                                setting high standards for
                                                themselves.
                                            </li>
                                            <li>
                                                <strong
                                                    >Energetic and Active: </strong
                                                >These students have a high
                                                energy level and enjoy
                                                activities that involve physical
                                                movement and action.
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="mt-4">
                                        <h4 class="font-semibold">
                                            Potential Challenges:
                                        </h4>
                                        <ul class="list-none pl-5">
                                            <li>
                                                <strong>Impatience: </strong
                                                >Dominant students may become
                                                easily frustrated if things do
                                                not move at their pace or if
                                                they do not achieve immediate
                                                results.
                                            </li>
                                            <li>
                                                <strong
                                                    >Difficulty Listening: </strong
                                                >They may struggle with
                                                listening to others, preferring
                                                to lead and make decisions
                                                independently.
                                            </li>
                                            <li>
                                                <strong
                                                    >Authority Conflicts:
                                                </strong>
                                                These students might challenge
                                                authority and resist following
                                                directions if they feel their
                                                autonomy is being restricted.
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
                                    Dominant (D) Students
                                </h4>
                                <div class="space-y-2">
                                    <h4 class="font-semibold text-xl">
                                        Strengths:
                                    </h4>
                                    <ul class="list-none pl-6">
                                        <li>
                                            <strong>Leadership Abilities</strong
                                            >: Dominant students are natural
                                            leaders who are confident in taking
                                            charge and making decisions.
                                        </li>
                                        <li>
                                            <strong>Goal-Oriented</strong>: They
                                            are highly motivated by goals and
                                            challenges, often setting high
                                            standards for themselves.
                                        </li>
                                        <li>
                                            <strong>Energetic and Active</strong
                                            >: These students have a high energy
                                            level and enjoy activities that
                                            involve physical movement and
                                            action.
                                        </li>
                                    </ul>
                                    <h4 class="font-semibold text-xl">
                                        Potential Challenges:
                                    </h4>
                                    <ul class="list-none pl-6">
                                        <li>
                                            <strong>Impatience</strong>:
                                            Dominant students may become easily
                                            frustrated if things do not move at
                                            their pace or if they do not achieve
                                            immediate results.
                                        </li>
                                        <li>
                                            <strong>Difficulty Listening</strong
                                            >: They may struggle with listening
                                            to others, preferring to lead and
                                            make decisions independently.
                                        </li>
                                        <li>
                                            <strong>Authority Conflicts</strong
                                            >: These students might challenge
                                            authority and resist following
                                            directions if they feel their
                                            autonomy is being restricted.
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
                                <h4 class="text-3xl font-bold mb-4">
                                    Dominant (D) Students
                                </h4>
                                <h4 class="text-xl font-semibold">
                                    Strengths:
                                </h4>
                                <ul class="list-none pl-5">
                                    <li>
                                        <strong>Leadership Abilities</strong>:
                                        Dominant students are natural leaders
                                        who are confident in taking charge and
                                        making decisions.
                                    </li>
                                    <li>
                                        <strong>Goal-Oriented</strong>: They are
                                        highly motivated by goals and
                                        challenges, often setting high standards
                                        for themselves.
                                    </li>
                                    <li>
                                        <strong>Energetic and Active</strong>:
                                        These students have a high energy level
                                        and enjoy activities that involve
                                        physical movement and action.
                                    </li>
                                </ul>
                                <h4 class="text-xl font-semibold">
                                    Potential Challenges:
                                </h4>
                                <ul class="list-none pl-5">
                                    <li>
                                        <strong>Impatience</strong>: Dominant
                                        students may become easily frustrated if
                                        things do not move at their pace or if
                                        they do not achieve immediate results.
                                    </li>
                                    <li>
                                        <strong>Difficulty Listening</strong>:
                                        They may struggle with listening to
                                        others, preferring to lead and make
                                        decisions independently.
                                    </li>
                                    <li>
                                        <strong>Authority Conflicts</strong>:
                                        These students might challenge authority
                                        and resist following directions if they
                                        feel their autonomy is being restricted.
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
                                <h4 class="text-3xl font-bold mb-4">
                                    Dominant (D) Students
                                </h4>
                                <h4 class="text-xl font-semibold mt-2">
                                    Strengths:
                                </h4>
                                <ul class="list-none pl-6">
                                    <li>
                                        <strong>Leadership Abilities</strong>:
                                        Dominant students are natural leaders
                                        who are confident in taking charge and
                                        making decisions.
                                    </li>
                                    <li>
                                        <strong>Goal-Oriented</strong>: They are
                                        highly motivated by goals and
                                        challenges, often setting high standards
                                        for themselves.
                                    </li>
                                    <li>
                                        <strong>Energetic and Active</strong>:
                                        These students have a high energy level
                                        and enjoy activities that involve
                                        physical movement and action.
                                    </li>
                                </ul>
                                <h4 class="text-xl font-semibold mt-2">
                                    Potential Challenges:
                                </h4>
                                <ul class="list-none pl-6">
                                    <li>
                                        <strong>Impatience</strong>: Dominant
                                        students may become easily frustrated if
                                        things do not move at their pace or if
                                        they do not achieve immediate results.
                                    </li>
                                    <li>
                                        <strong>Difficulty Listening</strong>:
                                        They may struggle with listening to
                                        others, preferring to lead and make
                                        decisions independently.
                                    </li>
                                    <li>
                                        <strong>Authority Conflicts</strong>:
                                        These students might challenge authority
                                        and resist following directions if they
                                        feel their autonomy is being restricted.
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

            <!-- For SC Style Type -->
            <div id="SC" v-if="style == 'SC'">
                <div class="text-left">
                    <div
                        class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                        style="border-radius: 50px"
                    ></div>
                    <div class="row">
                        <div class="col-6">
                            <h4 class="text-3xl font-bold mb-4 text-indigo-600">
                                Dominant (D) Students
                            </h4>
                            <p class="text-xl font-bold sc-heading">
                                Strengths:
                            </p>
                            <ul class="list-none ml-5">
                                <li>
                                    <strong>Leadership Abilities</strong>:
                                    Dominant students are natural leaders who
                                    are confident in taking charge and making
                                    decisions.
                                </li>
                                <li>
                                    <strong>Goal-Oriented</strong>: They are
                                    highly motivated by goals and challenges,
                                    often setting high standards for themselves.
                                </li>
                                <li>
                                    <strong>Energetic and Active</strong>: These
                                    students have a high energy level and enjoy
                                    activities that involve physical movement
                                    and action.
                                </li>
                            </ul>

                            <p class="text-xl font-bold mt-4 sc-heading">
                                Potential Challenges:
                            </p>
                            <ul class="list-none ml-5">
                                <li>
                                    <strong>Impatience</strong>: Dominant
                                    students may become easily frustrated if
                                    things do not move at their pace or if they
                                    do not achieve immediate results.
                                </li>
                                <li>
                                    <strong>Difficulty Listening</strong>: They
                                    may struggle with listening to others,
                                    preferring to lead and make decisions
                                    independently.
                                </li>
                                <li>
                                    <strong>Authority Conflicts</strong>: These
                                    students might challenge authority and
                                    resist following directions if they feel
                                    their autonomy is being restricted.
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
                            <img
                                class="rounded-full m-4 flex w-30 h-30 bg-white object-contain"
                                src="/images/reports-images/C.png"
                                alt=""
                            />

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
                                class="text-md mb-2 font-semibold text-indigo-600"
                            >
                                Dominant (D) Students
                            </h4>
                            <h4 class="text-xl font-semibold">Strengths:</h4>
                            <ul class="list-none pl-5 mb-4">
                                <li>
                                    <strong>Leadership Abilities</strong>:
                                    Dominant students are natural leaders who
                                    are confident in taking charge and making
                                    decisions.
                                </li>
                                <li>
                                    <strong>Goal-Oriented</strong>: They are
                                    highly motivated by goals and challenges,
                                    often setting high standards for themselves.
                                </li>
                                <li>
                                    <strong>Energetic and Active</strong>: These
                                    students have a high energy level and enjoy
                                    activities that involve physical movement
                                    and action.
                                </li>
                            </ul>

                            <h4 class="text-xl font-semibold">
                                Potential Challenges:
                            </h4>
                            <ul class="list-none pl-5 mb-4">
                                <li>
                                    <strong>Impatience</strong>: Dominant
                                    students may become easily frustrated if
                                    things do not move at their pace or if they
                                    do not achieve immediate results.
                                </li>
                                <li>
                                    <strong>Difficulty Listening</strong>: They
                                    may struggle with listening to others,
                                    preferring to lead and make decisions
                                    independently.
                                </li>
                                <li>
                                    <strong>Authority Conflicts</strong>: These
                                    students might challenge authority and
                                    resist following directions if they feel
                                    their autonomy is being restricted.
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
    name: "TeachingInsightD",
    layout: AssessmentTypes,
    props: {
        style: String,
        childName: String,
        image: String,
    },
};
</script>
