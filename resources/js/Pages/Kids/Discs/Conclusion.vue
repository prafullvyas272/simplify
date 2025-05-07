<template>
    <div class="p-6">
    <div class="p-6">
        <div class=" ">
            <h1 class="font-bold mb-4 text-center">Conclusion</h1>
        </div>
        <div class=" ">
            <div class="flex justify-center items-center mb-4">
                <img
                    class="w-96 h-auto object-contain"
                    :src="'/images/reports-svg-images/Page 42.svg'"
                    alt=""
                />
            </div>
        </div>
        <div v-if="style == 'C'" class=" ">
            <h2 class="text-3xl font-bold mb-4">Summary of Key Points</h2>

            <div class="rounded-lg mb-1">
                <h2 class="text-3xl font-bold mb-4 text-blue-600 mb-4">
                    Recap of {{ childName }} ’s DISC Assessment:
                </h2>

                <div class="row items-center">
                    <div class="col-1 p-0">
                        <div
                            class="flex justify-center items-center mb-4 hidden md:block"
                        >
                            <img
                                class="w-15 h-auto object-contain"
                                :src="'/images/kidsConclusion1.png'"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="col-11 p-0">
                        <strong>Cautious (C) Style:</strong> {{ childName }} is
                        a thoughtful and detail-oriented individual who excels
                        in structured and organised environments. They are
                        analytical, precise, and enjoy problem-solving.
                    </div>
                </div>
                <div class="row items-center">
                    <div class="col-1 p-0">
                        <div
                            class="flex justify-center items-center mb-4 hidden md:block"
                        >
                            <img
                                class="w-15 h-auto object-contain"
                                :src="'/images/kidsConclusion2.png'"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="col-11 p-0">
                        <strong>Strengths: </strong>Detail-oriented, analytical,
                        organised, and methodical.
                    </div>
                </div>
                <div class="row items-center">
                    <div class="col-1 p-0">
                        <div
                            class="flex justify-center items-center mb-4 hidden md:block"
                        >
                            <img
                                class="w-15 h-auto object-contain"
                                :src="'/images/kidsConclusion3.png'"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="col-11 p-0">
                        <strong>Areas for Growth: </strong>Flexibility, social
                        interaction, decision-making speed, and handling
                        conflict.
                    </div>
                    <p>
                        By understanding {{ childName }}’s unique DISC profile,
                        you can better support their development and help them
                        thrive in various environments. This report provides
                        practical recommendations to build on their strengths
                        and address areas for growth.
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="rounded-lg">
                        <h2 class="text-3xl font-bold mb-4">
                            Encouragement for Ongoing Support
                        </h2>
                        <strong class="mb-4"
                            >Supporting {{ childName }} ’s Journey:</strong
                        >
                        <p class="mb-4">
                            Remember, every child is unique and has their own
                            path to success.
                        </p>
                        <p>
                            Continue to encourage and support {{ childName }} by
                            providing opportunities for growth and celebrating
                            their achievements.
                        </p>
                        <p>
                            With your guidance and the insights from this
                            report,
                            {{ childName }} can develop their full potential and
                            become a well-rounded individual.
                        </p>
                    </div>
                </div>
                <div class="col-6 d-flex">
                    <div class="flex justify-center items-center mb-4">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/' + style + '.png'"
                            alt=""
                        />
                    </div>
                </div>
            </div>
        </div>

        <!-- For CD Style Type -->
        <div id="CD" v-if="style == 'CD'">
            <div class="rounded-lg">
                <h2 class="text-3xl font-bold mb-4">Summary of Key Points</h2>

                <div class="mb-4">
                    <h2 class="text-3xl font-bold mb-4 text-blue-600 mb-4">
                        Recap of {{ childName }} ’s DISC Assessment:
                    </h2>
                    <div class="row items-center">
                        <div class="col-1 p-0">
                            <div
                                class="flex justify-center items-center mb-4 hidden md:block"
                            >
                                <img
                                    class="w-15 h-auto object-contain"
                                    :src="'/images/kidsConclusion1.png'"
                                    alt=""
                                />
                            </div>
                        </div>
                        <div class="col-11 p-0">
                            <strong>Cautious-Dominant (CD) Style:</strong>
                            {{ childName }} is careful, precise, and enjoys
                            taking charge.
                        </div>
                    </div>
                    <div class="row items-center">
                        <div class="col-1 p-0">
                            <div
                                class="flex justify-center items-center mb-4 hidden md:block"
                            >
                                <img
                                    class="w-15 h-auto object-contain"
                                    :src="'/images/kidsConclusion2.png'"
                                    alt=""
                                />
                            </div>
                        </div>
                        <div class="col-11 p-0">
                            <strong>Strengths: </strong>Attention to detail,
                            Leadership, Problem-solving skills.
                        </div>
                    </div>
                    <div class="row items-center">
                        <div class="col-1 p-0">
                            <div
                                class="flex justify-center items-center mb-4 hidden md:block"
                            >
                                <img
                                    class="w-15 h-auto object-contain"
                                    :src="'/images/kidsConclusion3.png'"
                                    alt=""
                                />
                            </div>
                        </div>
                        <div class="col-11 p-0">
                            <strong>Areas for Growth: </strong>Flexibility,
                            Patience, Empathy.
                        </div>
                    </div>
                    <p class="mt-4">
                        By understanding {{ childName }} ’s unique DISC profile,
                        you can better support their development and help them
                        thrive in various environments. This report provides
                        practical recommendations to build on their strengths
                        and address areas for growth.
                    </p>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div>
                            <h2 class="text-3xl font-bold mb-4">
                                Encouragement for Ongoing Support
                            </h2>
                            <div class="mt-2">
                                <strong class="font-medium"
                                    >Supporting {{ childName }} ’s
                                    Journey:</strong
                                >
                                <ul class="list-none pl-6 mt-2">
                                    <li>
                                        Remember, every child is unique and has
                                        their own path to success.
                                    </li>
                                    <li>
                                        Continue to encourage and support
                                        {{ childName }} by providing
                                        opportunities for growth and celebrating
                                        their achievements.
                                    </li>
                                    <li>
                                        With your guidance and the insights from
                                        this report, {{ childName }} can develop
                                        their full potential and become a
                                        well-rounded individual.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 d-flex">
                        <div class="flex justify-center items-center mb-4">
                            <img
                                class="w-96 h-auto object-contain"
                                :src="
                                    '/images/reports-images/' + style + '.png'
                                "
                                alt=""
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- For CS Style Type -->
        <div id="CS" v-if="style == 'CS'">
            <div class="rounded-lg">
                <!-- Summary of Key Points -->
                <div>
                    <h2 class="text-3xl font-bold mb-4">
                        Summary of Key Points
                    </h2>
                    <h2 class="text-3xl font-bold mb-4 text-blue-600 mb-4">
                        Recap of
                        <span class="font-semibold"> {{ childName }} </span>’s
                        DISC Assessment:
                    </h2>
                    <div class="row items-center">
                        <div class="col-1 p-0">
                            <div
                                class="flex justify-center items-center mb-4 hidden md:block"
                            >
                                <img
                                    class="w-15 h-auto object-contain"
                                    :src="'/images/kidsConclusion1.png'"
                                    alt=""
                                />
                            </div>
                        </div>
                        <div class="col-11 p-0">
                            <strong> Cautious-Supportive (CS) Style:</strong>
                            {{ childName }} is thoughtful, reliable, and always
                            ready to help others.
                        </div>
                    </div>
                    <div class="row items-center">
                        <div class="col-1 p-0">
                            <div
                                class="flex justify-center items-center mb-4 hidden md:block"
                            >
                                <img
                                    class="w-15 h-auto object-contain"
                                    :src="'/images/kidsConclusion2.png'"
                                    alt=""
                                />
                            </div>
                        </div>
                        <div class="col-11 p-0">
                            <strong>Strengths: </strong>Attention to detail,
                            reliability, helpfulness, and thoughtfulness.
                        </div>
                    </div>
                    <div class="row items-center">
                        <div class="col-1 p-0">
                            <div
                                class="flex justify-center items-center mb-4 hidden md:block"
                            >
                                <img
                                    class="w-15 h-auto object-contain"
                                    :src="'/images/kidsConclusion3.png'"
                                    alt=""
                                />
                            </div>
                        </div>
                        <div class="col-11 p-0">
                            <strong>Areas for Growth: </strong>Confidence,
                            adaptability, decision-making, and stress
                            management.
                        </div>
                    </div>

                    <p class="mt-4">
                        By understanding
                        <span class="font-semibold"> {{ childName }} </span>’s
                        unique DISC profile, you can better support their
                        development and help them thrive in various
                        environments. This report provides practical
                        recommendations to build on their strengths and address
                        areas for growth.
                    </p>
                </div>

                <!-- Encouragement for Ongoing Support -->
                <div class="row">
                    <div class="col-6">
                        <div>
                            <h2 class="text-3xl font-bold mb-4">
                                Encouragement for Ongoing Support
                            </h2>
                            <strong class="">
                                Supporting
                                <span class="font-semibold">
                                    {{ childName }} </span
                                >’s Journey:
                            </strong>
                            <p class="mt-2">
                                Remember, every child is unique and has their
                                own path to success. Continue to encourage and
                                support
                                <span class="font-semibold">
                                    {{ childName }}
                                </span>
                                by providing opportunities for growth and
                                celebrating their achievements.
                            </p>
                            <p class="mt-2">
                                With your guidance and the insights from this
                                report,
                                <span class="font-semibold">
                                    {{ childName }}
                                </span>
                                can develop their full potential and become a
                                well-rounded individual.
                            </p>
                        </div>
                    </div>
                    <div class="col-6 d-flex">
                        <div class="flex justify-center items-center mb-4">
                            <img
                                class="w-96 h-auto object-contain"
                                :src="
                                    '/images/reports-images/' + style + '.png'
                                "
                                alt=""
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- For D Style Type -->
        <div id="D" v-if="style == 'D'">
            <div class="px-4 py-6">
                <h2 class="text-3xl font-bold mb-4">Summary of Key Points</h2>
                <h2 class="text-3xl font-bold mb-4 text-blue-600 mb-4">
                    Recap of
                    <span class="font-semibold"> {{ childName }} </span>’s DISC
                    Assessment:
                </h2>
                <div class="row items-center">
                    <div class="col-1 p-0">
                        <div
                            class="flex justify-center items-center mb-4 hidden md:block"
                        >
                            <img
                                class="w-15 h-auto object-contain"
                                :src="'/images/kidsConclusion1.png'"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="col-11 p-0">
                        <strong>Dominant (D) Style:</strong> {{ childName }} is
                        a natural leader, confident, and decisive.
                    </div>
                </div>
                <div class="row items-center">
                    <div class="col-1 p-0">
                        <div
                            class="flex justify-center items-center mb-4 hidden md:block"
                        >
                            <img
                                class="w-15 h-auto object-contain"
                                :src="'/images/kidsConclusion2.png'"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="col-11 p-0">
                        <strong>Strengths: </strong>Leadership, confidence,
                        decisiveness, and energy.
                    </div>
                </div>
                <div class="row items-center">
                    <div class="col-1 p-0">
                        <div
                            class="flex justify-center items-center mb-4 hidden md:block"
                        >
                            <img
                                class="w-15 h-auto object-contain"
                                :src="'/images/kidsConclusion3.png'"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="col-11 p-0">
                        <strong>Areas for Growth: </strong>Listening skills,
                        patience, teamwork, and empathy.
                    </div>
                </div>
                <section>
                    <p>
                        By understanding {{ childName }} ’s unique DISC profile,
                        you can better support their development and help them
                        thrive in various environments. This report provides
                        practical recommendations to build on their strengths
                        and address areas for growth.
                    </p>
                </section>

                <div class="row">
                    <div class="col-6">
                        <section class="mt-8">
                            <h2 class="text-3xl font-bold mb-4">
                                Encouragement for Ongoing Support
                            </h2>
                            <strong class="mb-2"
                                >Supporting {{ childName }} ’s Journey:</strong
                            >
                            <ul class="list-none pl-5 space-y-2">
                                <li>
                                    Remember, every child is unique and has
                                    their own path to success.
                                </li>
                                <li>
                                    Continue to encourage and support
                                    {{ childName }} by providing opportunities
                                    for growth and celebrating their
                                    achievements.
                                </li>
                                <li>
                                    With your guidance and the insights from
                                    this report, {{ childName }} can develop
                                    their full potential and become a
                                    well-rounded individual.
                                </li>
                            </ul>
                        </section>
                    </div>
                    <div class="col-6 d-flex">
                        <div class="flex justify-center items-center mb-4">
                            <img
                                class="w-96 h-auto object-contain"
                                :src="
                                    '/images/reports-images/' + style + '.png'
                                "
                                alt=""
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- For DC Style Type -->
        <div id="DC" v-if="style == 'DC'">
            <div class="mb-8">
                <div class="mb-6">
                    <h2 class="text-3xl font-bold mb-4">
                        Summary of Key Points
                    </h2>
                    <h2 class="text-3xl font-bold mb-4 text-blue-600 mb-4">
                        Recap of
                        <span class="font-semibold"> {{ childName }} </span>’s
                        DISC Assessment:
                    </h2>
                    <div class="row items-center">
                        <div class="col-1 p-0">
                            <div
                                class="flex justify-center items-center mb-4 hidden md:block"
                            >
                                <img
                                    class="w-15 h-auto object-contain"
                                    :src="'/images/kidsConclusion1.png'"
                                    alt=""
                                />
                            </div>
                        </div>
                        <div class="col-11 p-0">
                            <strong>Dominant-Cautious (DC):</strong>
                            {{ childName }} is a natural leader who is also very
                            detailed and precise.
                        </div>
                    </div>
                    <div class="row items-center">
                        <div class="col-1 p-0">
                            <div
                                class="flex justify-center items-center mb-4 hidden md:block"
                            >
                                <img
                                    class="w-15 h-auto object-contain"
                                    :src="'/images/kidsConclusion2.png'"
                                    alt=""
                                />
                            </div>
                        </div>
                        <div class="col-11 p-0">
                            <strong>Strengths: </strong>Leadership, attention to
                            detail, goal-oriented, and analytical thinking.
                        </div>
                    </div>
                    <div class="row items-center">
                        <div class="col-1 p-0">
                            <div
                                class="flex justify-center items-center mb-4 hidden md:block"
                            >
                                <img
                                    class="w-15 h-auto object-contain"
                                    :src="'/images/kidsConclusion3.png'"
                                    alt=""
                                />
                            </div>
                        </div>
                        <div class="col-11 p-0">
                            <strong>Areas for Growth: </strong>Flexibility,
                            listening skills, teamwork, and patience.
                        </div>
                    </div>
                    <p class="mt-4">
                        By understanding {{ childName }} ’s unique DISC profile,
                        you can better support their development and help them
                        thrive in various environments. This report provides
                        practical recommendations to build on their strengths
                        and address areas for growth.
                    </p>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div>
                            <h4 class="text-3xl font-bold mb-4">
                                Encouragement for Ongoing Support
                            </h4>
                            <p>
                                <strong class="font-semibold"
                                    >Supporting {{ childName }} ’s
                                    Journey:</strong
                                >
                                Remember, every child is unique and has their
                                own path to success.
                            </p>
                            <p>
                                Continue to encourage and support
                                {{ childName }} by providing opportunities for
                                growth and celebrating their achievements.
                            </p>
                            <p class="mt-4">
                                With your guidance and the insights from this
                                report, {{ childName }} can develop their full
                                potential and become a well-rounded individual.
                            </p>
                        </div>
                    </div>
                    <div class="col-6 d-flex">
                        <div class="flex justify-center items-center mb-4">
                            <img
                                class="w-96 h-auto object-contain"
                                :src="
                                    '/images/reports-images/' + style + '.png'
                                "
                                alt=""
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- For DI Style Type -->
        <div id="DI" v-if="style == 'DI'">
            <div class="space-y-6">
                <h2 class="text-3xl font-bold mb-4">Summary of Key Points</h2>

                <div class="space-y-4">
                    <h2 class="text-3xl font-bold mb-4 text-blue-600 mb-4">
                        Recap of
                        <span class="font-semibold"> {{ childName }} </span>’s
                        DISC Assessment:
                    </h2>
                    <div class="row items-center">
                        <div class="col-1 p-0">
                            <div
                                class="flex justify-center items-center mb-4 hidden md:block"
                            >
                                <img
                                    class="w-15 h-auto object-contain"
                                    :src="'/images/kidsConclusion1.png'"
                                    alt=""
                                />
                            </div>
                        </div>
                        <div class="col-11 p-0">
                            <strong>Dominant-Influential (DI) Style:</strong>
                            {{ childName }} is a natural leader and a great
                            communicator, with a blend of confidence,
                            enthusiasm, and sociability.
                        </div>
                    </div>
                    <div class="row items-center">
                        <div class="col-1 p-0">
                            <div
                                class="flex justify-center items-center mb-4 hidden md:block"
                            >
                                <img
                                    class="w-15 h-auto object-contain"
                                    :src="'/images/kidsConclusion2.png'"
                                    alt=""
                                />
                            </div>
                        </div>
                        <div class="col-11 p-0">
                            <strong>Strengths: </strong>Leadership, confidence,
                            sociability, and enthusiasm.
                        </div>
                    </div>
                    <div class="row items-center">
                        <div class="col-1 p-0">
                            <div
                                class="flex justify-center items-center mb-4 hidden md:block"
                            >
                                <img
                                    class="w-15 h-auto object-contain"
                                    :src="'/images/kidsConclusion3.png'"
                                    alt=""
                                />
                            </div>
                        </div>
                        <div class="col-11 p-0">
                            <strong>Areas for Growth: </strong>Patience,
                            listening skills, empathy, and focus.
                        </div>
                    </div>
                    <!-- <p class="text-base">
                        <strong>Strengths:</strong> Leadership, confidence,
                        sociability, and enthusiasm.
                    </p>
                    <p class="text-base">
                        <strong>Areas for Growth:</strong> Patience, listening
                        skills, empathy, and focus.
                    </p> -->
                    <p class="text-base">
                        By understanding {{ childName }} ’s unique DISC profile,
                        you can better support their development and help them
                        thrive in various environments. This report provides
                        practical recommendations to build on their strengths
                        and address areas for growth.
                    </p>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="space-y-4">
                            <h2 class="text-3xl font-bold mb-4">
                                Encouragement for Ongoing Support
                            </h2>
                            <p class="text-base">
                                <strong
                                    >Supporting {{ childName }} ’s
                                    Journey:</strong
                                >
                            </p>
                            <ul class="list-none pl-5 space-y-2">
                                <li>
                                    Remember, every child is unique and has
                                    their own path to success.
                                </li>
                                <li>
                                    Continue to encourage and support
                                    {{ childName }} by providing opportunities
                                    for growth and celebrating their
                                    achievements.
                                </li>
                                <li>
                                    With your guidance and the insights from
                                    this report, {{ childName }} can develop
                                    their full potential and become a
                                    well-rounded individual.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6 d-flex">
                        <div class="flex justify-center items-center mb-4">
                            <img
                                class="w-96 h-auto object-contain"
                                :src="
                                    '/images/reports-images/' + style + '.png'
                                "
                                alt=""
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- For I Style Type -->
        <div id="I" v-if="style == 'I'">
            <div class="mt-10">
                <h2 class="text-3xl font-bold mb-4">Summary of Key Points</h2>
                <div class="mt-2">
                    <h2 class="text-3xl font-bold mb-4 text-blue-600 mb-4">
                        Recap of
                        <span class="font-semibold"> {{ childName }} </span>’s
                        DISC Assessment:
                    </h2>
                    <div class="row items-center">
                        <div class="col-1 p-0">
                            <div
                                class="flex justify-center items-center mb-4 hidden md:block"
                            >
                                <img
                                    class="w-15 h-auto object-contain"
                                    :src="'/images/kidsConclusion1.png'"
                                    alt=""
                                />
                            </div>
                        </div>
                        <div class="col-11 p-0">
                            <strong>Influential (I) Style:</strong>
                            {{ childName }} is a natural communicator who
                            thrives in social settings. They are enthusiastic,
                            creative, and enjoy interacting with others.
                        </div>
                    </div>
                    <div class="row items-center">
                        <div class="col-1 p-0">
                            <div
                                class="flex justify-center items-center mb-4 hidden md:block"
                            >
                                <img
                                    class="w-15 h-auto object-contain"
                                    :src="'/images/kidsConclusion2.png'"
                                    alt=""
                                />
                            </div>
                        </div>
                        <div class="col-11 p-0">
                            <strong>Strengths: </strong>Social skills,
                            creativity, enthusiasm, and the ability to motivate
                            and engage others.
                        </div>
                    </div>
                    <div class="row items-center">
                        <div class="col-1 p-0">
                            <div
                                class="flex justify-center items-center mb-4 hidden md:block"
                            >
                                <img
                                    class="w-15 h-auto object-contain"
                                    :src="'/images/kidsConclusion3.png'"
                                    alt=""
                                />
                            </div>
                        </div>
                        <div class="col-11 p-0">
                            <strong>Areas for Growth: </strong>Listening skills,
                            patience, organisational skills, and empathy.
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <p class="text-lg">
                        By understanding {{ childName }} ’s unique DISC profile,
                        you can better support their development and help them
                        thrive in various environments. This report provides
                        practical recommendations to build on their strengths
                        and address areas for growth.
                    </p>
                </div>
                <div class="row">
                    <div class="col-6">
                        <h2 class="text-3xl font-bold mb-4">
                            Encouragement for Ongoing Support
                        </h2>
                        <div class="mt-4">
                            <strong class="text-lg"
                                >Supporting {{ childName }} ’s Journey:</strong
                            >
                            <ul class="list-none pl-5 space-y-2">
                                <li>
                                    Remember, every child is unique and has
                                    their own path to success.
                                </li>
                                <li>
                                    Continue to encourage and support
                                    {{ childName }} by providing opportunities
                                    for growth and celebrating their
                                    achievements.
                                </li>
                                <li>
                                    With your guidance and the insights from
                                    this report, {{ childName }} can develop
                                    their full potential and become a
                                    well-rounded individual.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6 d-flex">
                        <div class="flex justify-center items-center mb-4">
                            <img
                                class="w-96 h-auto object-contain"
                                :src="
                                    '/images/reports-images/' + style + '.png'
                                "
                                alt=""
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- For ID Style Type -->
        <div id="ID" v-if="style == 'ID'">
            <div class="space-y-4">
                <h2 class="text-3xl font-bold mb-4">Summary of Key Points</h2>
                <h2 class="text-3xl font-bold text-blue-600 mb-4">
                    Recap of
                    <span class="font-semibold"> {{ childName }} </span>’s DISC
                    Assessment:
                </h2>
                <div class="row items-center">
                    <div class="col-1 p-0">
                        <div
                            class="flex justify-center items-center mb-4 hidden md:block"
                        >
                            <img
                                class="w-15 h-auto object-contain"
                                :src="'/images/kidsConclusion1.png'"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="col-11 p-0">
                        <strong>Influential-Dominant (ID) Style:</strong>
                        {{ childName }} is outgoing, enthusiastic, and loves to
                        take charge.
                    </div>
                </div>
                <div class="row items-center">
                    <div class="col-1 p-0">
                        <div
                            class="flex justify-center items-center mb-4 hidden md:block"
                        >
                            <img
                                class="w-15 h-auto object-contain"
                                :src="'/images/kidsConclusion2.png'"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="col-11 p-0">
                        <strong>Strengths: </strong>Enthusiasm, Leadership,
                        Sociability, Confidence.
                    </div>
                </div>
                <div class="row items-center">
                    <div class="col-1 p-0">
                        <div
                            class="flex justify-center items-center mb-4 hidden md:block"
                        >
                            <img
                                class="w-15 h-auto object-contain"
                                :src="'/images/kidsConclusion3.png'"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="col-11 p-0">
                        <strong>Areas for Growth: </strong>Patience, Listening
                        Skills, Attention to Detail.
                    </div>
                </div>

                <p class="text-lg mt-4">
                    By understanding
                    <span class="font-bold"> {{ childName }} </span>’s unique
                    DISC profile, you can better support their development and
                    help them thrive in various environments. This report
                    provides practical recommendations to build on their
                    strengths and address areas for growth.
                </p>

                <div class="row">
                    <div class="col-6">
                        <h2 class="text-3xl font-bold mb-4 mt-6">
                            Encouragement for Ongoing Support
                        </h2>
                        <strong class="text-lg">
                            Supporting
                            <span class="font-bold"> {{ childName }} </span>’s
                            Journey:
                        </strong>
                        <p class="text-lg">
                            Remember, every child is unique and has their own
                            path to success.
                        </p>
                        <p class="text-lg">
                            Continue to encourage and support
                            <span class="font-bold"> {{ childName }} </span> by
                            providing opportunities for growth and celebrating
                            their achievements.
                        </p>
                        <p class="text-lg">
                            With your guidance and the insights from this
                            report,
                            <span class="font-bold"> {{ childName }} </span> can
                            develop their full potential and become a
                            well-rounded individual.
                        </p>
                    </div>
                    <div class="col-6 d-flex">
                        <div class="flex justify-center items-center mb-4">
                            <img
                                class="w-96 h-auto object-contain"
                                :src="
                                    '/images/reports-images/' + style + '.png'
                                "
                                alt=""
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- For IS Style Type -->
        <div id="IS" v-if="style == 'IS'">
            <div class=" ">
                <h2 class="text-3xl font-bold mb-4">Summary of Key Points</h2>
                <h2 class="text-3xl font-bold mb-4 text-blue-600 mb-4">
                    Recap of
                    <span class="font-semibold"> {{ childName }} </span>’s DISC
                    Assessment:
                </h2>
                <div class="row items-center">
                    <div class="col-1 p-0">
                        <div
                            class="flex justify-center items-center mb-4 hidden md:block"
                        >
                            <img
                                class="w-15 h-auto object-contain"
                                :src="'/images/kidsConclusion1.png'"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="col-11 p-0">
                        <strong>Influential-Supportive (IS) Style:</strong>
                        {{ childName }} is friendly, enthusiastic, and enjoys
                        helping others.
                    </div>
                </div>
                <div class="row items-center">
                    <div class="col-1 p-0">
                        <div
                            class="flex justify-center items-center mb-4 hidden md:block"
                        >
                            <img
                                class="w-15 h-auto object-contain"
                                :src="'/images/kidsConclusion2.png'"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="col-11 p-0">
                        <strong>Strengths: </strong>Friendliness, creativity,
                        supportiveness, and strong social skills.
                    </div>
                </div>
                <div class="row items-center">
                    <div class="col-1 p-0">
                        <div
                            class="flex justify-center items-center mb-4 hidden md:block"
                        >
                            <img
                                class="w-15 h-auto object-contain"
                                :src="'/images/kidsConclusion3.png'"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="col-11 p-0">
                        <strong>Areas for Growth: </strong>Focus and attention,
                        assertiveness, and organisation.
                    </div>
                </div>
                <p class="mt-4">
                    By understanding {{ childName }} ’s unique DISC profile, you
                    can better support their development and help them thrive in
                    various environments. This report provides practical
                    recommendations to build on their strengths and address
                    areas for growth.
                </p>

                <div class="row">
                    <div class="col-6">
                        <h2 class="text-3xl font-bold mb-4 mt-6 mb-2">
                            Encouragement for Ongoing Support
                        </h2>
                        <div class="space-y-4">
                            <p>
                                <strong
                                    >Supporting {{ childName }} ’s
                                    Journey:</strong
                                >
                            </p>
                            <ul class="list-none pl-5 space-y-2">
                                <li>
                                    Remember, every child is unique and has
                                    their own path to success.
                                </li>
                                <li>
                                    Continue to encourage and support
                                    {{ childName }} by providing opportunities
                                    for growth and celebrating their
                                    achievements.
                                </li>
                                <li>
                                    With your guidance and the insights from
                                    this report, {{ childName }} can develop
                                    their full potential and become a
                                    well-rounded individual.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6 d-flex">
                        <div class="flex justify-center items-center mb-4">
                            <img
                                class="w-96 h-auto object-contain"
                                :src="
                                    '/images/reports-images/' + style + '.png'
                                "
                                alt=""
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- For S Style Type -->
        <div id="S" v-if="style == 'S'">
            <div class="">
                <h2 class="text-3xl font-bold mb-4">Summary of Key Points</h2>
                <h2 class="text-3xl font-bold mb-4 text-blue-600 mb-4">
                    Recap of
                    <span class="font-semibold"> {{ childName }} </span>’s DISC
                    Assessment:
                </h2>
                <div class="row items-center">
                    <div class="col-1 p-0">
                        <div
                            class="flex justify-center items-center mb-4 hidden md:block"
                        >
                            <img
                                class="w-15 h-auto object-contain"
                                :src="'/images/kidsConclusion1.png'"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="col-11 p-0">
                        <strong>Supportive (S) Style: </strong>
                        {{ childName }} is a natural caregiver, calm, patient,
                        and dependable. They thrive in cooperative environments
                        and enjoy helping others.
                    </div>
                </div>
                <div class="row items-center">
                    <div class="col-1 p-0">
                        <div
                            class="flex justify-center items-center mb-4 hidden md:block"
                        >
                            <img
                                class="w-15 h-auto object-contain"
                                :src="'/images/kidsConclusion2.png'"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="col-11 p-0">
                        <strong>Strengths: </strong>Reliability, patience,
                        teamwork, and empathy.
                    </div>
                </div>
                <div class="row items-center">
                    <div class="col-1 p-0">
                        <div
                            class="flex justify-center items-center mb-4 hidden md:block"
                        >
                            <img
                                class="w-15 h-auto object-contain"
                                :src="'/images/kidsConclusion3.png'"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="col-11 p-0">
                        <strong>Areas for Growth: </strong>Assertiveness,
                        initiative, handling conflict, and decision-making.
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div>
                            <h2 class="text-3xl font-bold mb-4">
                                Encouragement for Ongoing Support
                            </h2>
                            <strong
                                >Supporting {{ childName }} ’s Journey:
                            </strong>
                            <p>
                                Remember, Every child is unique and has their
                                own path to success.
                            </p>
                            <p>
                                Continue to encourage {{ childName }} by
                                providing growth opportunities and celebrating
                                achievements.
                            </p>
                            <p>
                                With your guidance, {{ childName }} can develop
                                their full potential and become a well-rounded
                                individual.
                            </p>
                        </div>
                    </div>
                    <div class="col-6 d-flex">
                        <div class="flex justify-center items-center mb-4">
                            <img
                                class="w-96 h-auto object-contain"
                                :src="
                                    '/images/reports-images/' + style + '.png'
                                "
                                alt=""
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- For SC Style Type -->
        <div id="SC" v-if="style == 'SC'">
            <div class="space-y-6">
                <h2 class="text-3xl font-bold mb-4">Summary of Key Points</h2>
                <h2 class="text-3xl font-bold mb-4 text-blue-600 mb-4">
                    Recap of
                    <span class="font-semibold"> {{ childName }} </span>’s DISC
                    Assessment:
                </h2>
                <div class="row items-center">
                    <div class="col-1 p-0">
                        <div
                            class="flex justify-center items-center mb-4 hidden md:block"
                        >
                            <img
                                class="w-15 h-auto object-contain"
                                :src="'/images/kidsConclusion1.png'"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="col-11 p-0">
                        <strong>Supportive-Cautious (SC) Style:</strong>
                        {{ childName }} is thoughtful, reliable, and loves to
                        help others.
                    </div>
                </div>
                <div class="row items-center">
                    <div class="col-1 p-0">
                        <div
                            class="flex justify-center items-center mb-4 hidden md:block"
                        >
                            <img
                                class="w-15 h-auto object-contain"
                                :src="'/images/kidsConclusion2.png'"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="col-11 p-0">
                        <strong>Strengths: </strong>Thoughtfulness, reliability,
                        helpfulness, and attention to detail.
                    </div>
                </div>
                <div class="row items-center">
                    <div class="col-1 p-0">
                        <div
                            class="flex justify-center items-center mb-4 hidden md:block"
                        >
                            <img
                                class="w-15 h-auto object-contain"
                                :src="'/images/kidsConclusion3.png'"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="col-11 p-0">
                        <strong>Areas for Growth: </strong>Confidence,
                        decision-making skills, and adaptability.
                    </div>
                </div>
                <p class="text-base">
                    By understanding {{ childName }} ’s unique DISC profile, you
                    can better support their development and help them thrive in
                    various environments. This report provides practical
                    recommendations to build on their strengths and address
                    areas for growth.
                </p>
                <div class="row">
                    <div class="col-6">
                        <h2 class="text-3xl font-bold mb-4">
                            Encouragement for Ongoing Support
                        </h2>
                        <strong class="text-base"
                            >Supporting {{ childName }} ’s Journey:</strong
                        >
                        <ul class="list-none pl-5 space-y-2">
                            <li>
                                Remember, every child is unique and has their
                                own path to success.
                            </li>
                            <li>
                                Continue to encourage and support
                                {{ childName }} by providing opportunities for
                                growth and celebrating their achievements.
                            </li>
                        </ul>
                        <p class="text-base">
                            With your guidance and the insights from this
                            report, {{ childName }} can develop their full
                            potential and become a well-rounded individual.
                        </p>
                    </div>
                    <div class="col-6 d-flex">
                        <div class="flex justify-center items-center mb-4">
                            <img
                                class="w-96 h-auto object-contain"
                                :src="
                                    '/images/reports-images/' + style + '.png'
                                "
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
                <h2 class="text-3xl font-bold mb-4">Summary of Key Points</h2>
                <h2 class="text-3xl font-bold mb-4 text-blue-600 mb-4">
                    Recap of
                    <span class="font-semibold"> {{ childName }} </span>’s DISC
                    Assessment:
                </h2>
                <div class="row items-center">
                    <div class="col-1 p-0">
                        <div
                            class="flex justify-center items-center mb-4 hidden md:block"
                        >
                            <img
                                class="w-15 h-auto object-contain"
                                :src="'/images/kidsConclusion1.png'"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="col-11 p-0">
                        <strong>Supportive-Influential (SI) Style:</strong>
                        {{ childName }} is kind, friendly, and loves to help
                        others.
                    </div>
                </div>
                <div class="row items-center">
                    <div class="col-1 p-0">
                        <div
                            class="flex justify-center items-center mb-4 hidden md:block"
                        >
                            <img
                                class="w-15 h-auto object-contain"
                                :src="'/images/kidsConclusion2.png'"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="col-11 p-0">
                        <strong>Strengths: </strong>Kindness, friendliness,
                        helpfulness, and creativity.
                    </div>
                </div>
                <div class="row items-center">
                    <div class="col-1 p-0">
                        <div
                            class="flex justify-center items-center mb-4 hidden md:block"
                        >
                            <img
                                class="w-15 h-auto object-contain"
                                :src="'/images/kidsConclusion3.png'"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="col-11 p-0">
                        <strong>Areas for Growth: </strong>Assertiveness,
                        decision-making skills, and handling criticism.
                    </div>
                </div>
                <p class="text-base">
                    By understanding {{ childName }} ’s unique DISC profile, you
                    can better support their development and help them thrive in
                    various environments. This report provides practical
                    recommendations to build on their strengths and address
                    areas for growth.
                </p>

                <div class="row">
                    <div class="col-6">
                        <h2 class="text-3xl font-bold mb-4">
                            Encouragement for Ongoing Support
                        </h2>
                        <strong class="text-base"
                            >Supporting {{ childName }} ’s Journey:</strong
                        >
                        <ul class="list-none pl-5 space-y-2">
                            <li>
                                Remember, every child is unique and has their
                                own path to success.
                            </li>
                            <li>
                                Continue to encourage and support
                                {{ childName }} by providing opportunities for
                                growth and celebrating their achievements.
                            </li>
                            <li>
                                With your guidance and the insights from this
                                report, {{ childName }} can develop their full
                                potential and become a well-rounded individual.
                            </li>
                        </ul>
                    </div>
                    <div class="col-6 d-flex">
                        <div class="flex justify-center items-center mb-4">
                            <img
                                class="w-96 h-auto object-contain"
                                :src="
                                    '/images/reports-images/' + style + '.png'
                                "
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

    strong{
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
.p-6 > .row > .col-6 > h2 {
    color: rgb(55 48 163);
    font-weight: bold !important;
}
ul > li {
    margin-top: 17px;
}

p,
ul > li,
ol > li,
div > strong,
.row > div.col-11,
div > strong {
    font-size: 1.125rem;
    line-height: 1.75rem;
}
</style>

<script>
import AssessmentTypes from "@/Layouts/AssessmentTypes.vue";

export default {
    name: "Conclusion",
    layout: AssessmentTypes,
    props: {
        childName: String,
        style: String,
        image: String,
    },
};
</script>
