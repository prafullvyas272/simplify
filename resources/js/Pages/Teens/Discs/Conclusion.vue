<template>
     <div class="p-6">
      <div class="space-y-6 mt-3">
        <h1 class="font-bold mb-4 text-center">Conclusion</h1>
    </div>
    <!-- For C Style Report -->
    <div v-if="style == 'C'">
        <!-- Content for C -->
        <div class="p-6 bg-white">
            <div class="row">
                <div class="col-6">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Encouragement for Personal Growth
                    </h2>
                    <p class="text-gray-700 mb-6">
                        Congratulations on completing your Teen DISC Assessment!
                        By understanding your Cautious (C) style, you've taken
                        an important step toward discovering more about yourself
                        and how you interact with the world. Your strengths as
                        an analytical thinker, detail-oriented worker, and
                        reliable individual set you up for success in many areas
                        of life.
                    </p>

                    <p class="text-gray-700 mb-6">
                        Remember, growth is a continuous journey. Embrace your
                        strengths but also focus on developing areas where you
                        can improve, like listening skills and patience. These
                        will help you become an even more effective communicator
                        and leader.
                    </p>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensDiscReportStyleImages/Conclusion/24.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensDiscReportStyleImages/Conclusion/35.svg'"
                            alt=""
                        />
                    </div>
                </div>
                <div class="col-6">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Final Thoughts and Next Steps
                    </h2>
                    <p class="text-gray-700 mb-6">
                        Here are some things to keep in mind as you move
                        forward:
                    </p>

                    <ul class="list-disc pl-5 text-gray-700 mb-6">
                        <li>
                            <strong>Celebrate Your Achievements:</strong>
                            Recognise your successes and use them as motivation
                            to keep pushing yourself.
                        </li>
                        <li>
                            <strong>Stay Open to Learning:</strong> Be curious
                            and open-minded, always looking for opportunities to
                            learn and grow.
                        </li>
                        <li>
                            <strong>Set New Goals:</strong> Use what you’ve
                            learned about yourself to set new goals, whether
                            they’re related to school, hobbies, or future career
                            paths.
                        </li>
                        <li>
                            <strong>Seek Support:</strong> Don’t hesitate to
                            reach out to friends, family, teachers, or mentors
                            when you need guidance or encouragement.
                        </li>
                    </ul>

                    <p class="text-gray-700">
                        Your unique combination of traits makes you capable of
                        achieving great things. Keep exploring, challenging
                        yourself, and embracing the opportunities that come your
                        way.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- For CD Style Report -->
    <div v-if="style == 'CD'">
        <div class="p-6 pb-0 row">
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">
                    Encouragement for Personal Growth
                </h2>
                <p>
                    Congratulations on completing your Teen DISC Assessment! By
                    understanding your Cautious-Dominant (CD) style, you've
                    gained valuable insights into your strengths and how you
                    approach challenges. Your analytical thinking, attention to
                    detail, and decisive nature equip you with the tools to
                    succeed in many areas of life.
                </p>
                <p>
                    Remember, growth is a continuous journey. Embrace your
                    strengths but also focus on developing areas where you can
                    improve, like listening skills and patience. These will help
                    you become an even more effective communicator and leader.
                </p>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img
                        class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Conclusion/24.svg'"
                        alt=""
                    />
                </div>
            </div>
        </div>

        <div class="p-6 pb-0 row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img
                        class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Conclusion/35.svg'"
                        alt=""
                    />
                </div>
            </div>
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">
                    Final Thoughts and Next Steps
                </h2>
                <p>Here are some things to keep in mind as you move forward:</p>
                <ul class="list-disc pl-6">
                    <li>
                        <strong>Celebrate Your Achievements:</strong> Recognise
                        your successes and use them as motivation to keep
                        pushing yourself.
                    </li>
                    <li>
                        <strong>Stay Open to Learning:</strong> Be curious and
                        open-minded, always looking for opportunities to learn
                        and grow.
                    </li>
                    <li>
                        <strong>Set New Goals:</strong> Use what you’ve learned
                        about yourself to set new goals, whether they’re related
                        to school, hobbies, or future career paths.
                    </li>
                    <li>
                        <strong>Seek Support:</strong> Don’t hesitate to reach
                        out to friends, family, teachers, or mentors when you
                        need guidance or encouragement.
                    </li>
                </ul>
                <p>
                    Your unique combination of traits makes you capable of
                    achieving great things. Keep exploring, challenging
                    yourself, and embracing the opportunities that come your
                    way.
                </p>
            </div>
        </div>
    </div>

    <!-- For CS Style Report -->
    <div v-if="style == 'CS'">
        <div class="p-6 pb-0 row">
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">
                    Encouragement for Personal Growth
                </h2>
                <p>
                    Congratulations on completing your Teen DISC Assessment! By
                    understanding your Cautious-Supportive (CS) style, you've
                    taken an important step toward discovering more about
                    yourself and how you interact with the world. Your strengths
                    as a detail-oriented, patient, and empathetic individual set
                    you up for success in many areas of life.
                </p>
                <p>
                    Remember, growth is a continuous journey. Embrace your
                    strengths but also focus on developing areas where you can
                    improve, like listening skills and patience. These will help
                    you become an even more effective communicator and leader.
                </p>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img
                        class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Conclusion/24.svg'"
                        alt=""
                    />
                </div>
            </div>
        </div>

        <div class="p-6 pb-0 row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img
                        class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Conclusion/24.svg'"
                        alt=""
                    />
                </div>
            </div>
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">
                    Final Thoughts and Next Steps
                </h2>
                <p>Here are some things to keep in mind as you move forward:</p>
                <ul class="list-disc pl-6">
                    <li>
                        <strong>Celebrate Your Achievements:</strong> Recognise
                        your successes and use them as motivation to keep
                        pushing yourself.
                    </li>
                    <li>
                        <strong>Stay Open to Learning:</strong> Be curious and
                        open-minded, always looking for opportunities to learn
                        and grow.
                    </li>
                    <li>
                        <strong>Set New Goals:</strong> Use what you’ve learned
                        about yourself to set new goals, whether they’re related
                        to school, hobbies, or future career paths.
                    </li>
                    <li>
                        <strong>Seek Support:</strong> Don’t hesitate to reach
                        out to friends, family, teachers, or mentors when you
                        need guidance or encouragement.
                    </li>
                </ul>
                <p>
                    Your unique combination of traits makes you capable of
                    achieving great things. Keep exploring, challenging
                    yourself, and embracing the opportunities that come your
                    way.
                </p>
            </div>
        </div>
    </div>

    <!-- For D Style Report -->
    <div v-if="style == 'D'">
        <div class="p-6 pb-0 row">
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">
                    Encouragement for Personal Growth
                </h2>
                <p>
                    Congratulations on completing your Teen DISC Assessment! By
                    understanding your Dominant (D) style, you've taken an
                    important step toward discovering more about yourself and
                    how you interact with the world. Your strengths as a leader,
                    decision-maker, and goal-oriented individual set you up for
                    success in many areas of life.
                </p>
                <p>
                    Remember, growth is a continuous journey. Embrace your
                    strengths, but also focus on developing areas where you can
                    improve, like listening skills and empathy. These will help
                    you become an even more effective communicator and leader.
                </p>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img
                        class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Conclusion/24.svg'"
                        alt=""
                    />
                </div>
            </div>
        </div>

        <div class="p-6 pb-0 row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img
                        class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Conclusion/35.svg'"
                        alt=""
                    />
                </div>
            </div>
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">
                    Final Thoughts and Next Steps
                </h2>
                <p>Here are some things to keep in mind as you move forward:</p>
                <ul class="list-disc pl-6">
                    <li>
                        <strong>Celebrate Your Achievements:</strong> Recognise
                        your successes and use them as motivation to keep
                        pushing yourself.
                    </li>
                    <li>
                        <strong>Stay Open to Learning:</strong> Be curious and
                        open-minded, always looking for opportunities to learn
                        and grow.
                    </li>
                    <li>
                        <strong>Set New Goals:</strong> Use what you’ve learned
                        about yourself to set new goals, whether they’re related
                        to school, hobbies, or future career paths.
                    </li>
                    <li>
                        <strong>Seek Support:</strong> Don’t hesitate to reach
                        out to friends, family, teachers, or mentors when you
                        need guidance or encouragement.
                    </li>
                </ul>
                <p>
                    Your unique combination of traits makes you capable of
                    achieving great things. Keep exploring, challenging
                    yourself, and embracing the opportunities that come your
                    way.
                </p>
            </div>
        </div>
    </div>

    <!-- For DC Style Report -->
    <div v-if="style == 'DC'">
        <div class="p-6 pb-0 row">
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">
                    Encouragement for Personal Growth
                </h2>
                <p>
                    Congratulations on completing your Teen DISC Assessment! By
                    understanding your Dominant-Cautious (DC) style, you've
                    taken an important step toward discovering more about
                    yourself and how you interact with the world. Your strengths
                    as a confident leader, analytical thinker, and driven
                    individual set you up for success in many areas of life.
                </p>
                <p>
                    Remember, growth is a continuous journey. Embrace your
                    strengths but also focus on developing areas where you can
                    improve, like listening skills and empathy. These will help
                    you become an even more effective communicator and leader.
                </p>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img
                        class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Conclusion/24.svg'"
                        alt=""
                    />
                </div>
            </div>
        </div>

        <div class="p-6 pb-0 row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img
                        class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Conclusion/24.svg'"
                        alt=""
                    />
                </div>
            </div>
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">
                    Final Thoughts and Next Steps
                </h2>
                <p>
                    Here are some things to keep in mind as you move forward:
                </p>
                <ul class="list-disc pl-6">
                    <li>
                        <strong>Celebrate Your Achievements:</strong> Recognise
                        your successes and use them as motivation to keep
                        pushing yourself.
                    </li>
                    <li>
                        <strong>Stay Open to Learning:</strong> Be curious and
                        open-minded, always looking for opportunities to learn
                        and grow.
                    </li>
                    <li>
                        <strong>Set New Goals:</strong> Use what you’ve learned
                        about yourself to set new goals, whether they’re related
                        to school, hobbies, or future career paths.
                    </li>
                    <li>
                        <strong>Seek Support:</strong> Don’t hesitate to reach
                        out to friends, family, teachers, or mentors when you
                        need guidance or encouragement.
                    </li>
                </ul>
                <p>
                    Your unique combination of traits makes you capable of
                    achieving great things. Keep exploring, challenging
                    yourself, and embracing the opportunities that come your
                    way.
                </p>
            </div>
        </div>
    </div>

    <!-- For DI Style Report -->
    <div v-if="style == 'DI'">
        <div class="p-6 pb-0 row">
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">
                    Encouragement for Personal Growth
                </h2>
                <p class="mb-4">
                    Congratulations on completing your Teen DISC Assessment! By
                    understanding your Dominant-Influential (DI) style, you've
                    taken an important step toward discovering more about
                    yourself and how you interact with the world. Your strengths
                    as a confident leader, persuasive communicator, and driven
                    individual set you up for success in many areas of life.
                </p>
                <p class="mb-4">
                    Remember, growth is a continuous journey. Embrace your
                    strengths but also focus on developing areas where you can
                    improve, like listening skills and empathy. These will help
                    you become an even more effective communicator and leader.
                </p>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img
                        class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Conclusion/24.svg'"
                        alt=""
                    />
                </div>
            </div>
        </div>

        <div class="p-6 pb-0 row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img
                        class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Conclusion/35.svg'"
                        alt=""
                    />
                </div>
            </div>
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">
                    Final Thoughts and Next Steps
                </h2>
                <p class="mb-4">
                    Here are some things to keep in mind as you move forward:
                </p>
                <ul class="list-disc pl-6">
                    <li>
                        <strong>Celebrate Your Achievements:</strong> Recognise
                        your successes and use them as motivation to keep
                        pushing yourself.
                    </li>
                    <li>
                        <strong>Stay Open to Learning:</strong> Be curious and
                        open-minded, always looking for opportunities to learn
                        and grow.
                    </li>
                    <li>
                        <strong>Set New Goals:</strong> Use what you’ve learned
                        about yourself to set new goals, whether they’re related
                        to school, hobbies, or future career paths.
                    </li>
                    <li>
                        <strong>Seek Support:</strong> Don’t hesitate to reach
                        out to friends, family, teachers, or mentors when you
                        need guidance or encouragement.
                    </li>
                </ul>
                <p class="mt-4">
                    Your unique combination of traits makes you capable of
                    achieving great things. Keep exploring, challenging
                    yourself, and embracing the opportunities that come your
                    way.
                </p>
            </div>
        </div>
    </div>

    <!-- For I Style Report -->
    <div v-if="style == 'I'">
        <div class="p-6 pb-0 row">
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">
                    Encouragement for Personal Growth
                </h2>
                <p class="">
                    Congratulations on completing your Teen DISC Assessment! By
                    understanding your Influential (I) style, you've taken an
                    important step toward discovering more about yourself and
                    how you interact with the world. Your strengths as a
                    charismatic communicator, social connector, and creative
                    thinker set you up for success in many areas of life.
                </p>
                <p class="font-bold mt-4">
                    Remember, growth is a continuous journey. Embrace your
                    strengths but also focus on developing areas where you can
                    improve, like listening skills and patience. These will help
                    you become an even more effective communicator and leader.
                </p>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img
                        class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Conclusion/24.svg'"
                        alt=""
                    />
                </div>
            </div>
        </div>

        <div class="p-6 pb-0 row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img
                        class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Conclusion/35.svg'"
                        alt=""
                    />
                </div>
            </div>
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">
                    Final Thoughts and Next Steps
                </h2>
                <p class="">
                    Here are some things to keep in mind as you move forward:
                </p>
                <ul class="list-disc pl-6">
                    <li>
                        <strong>Celebrate Your Achievements:</strong> Recognise
                        your successes and use them as motivation to keep
                        pushing yourself.
                    </li>
                    <li>
                        <strong>Stay Open to Learning:</strong> Be curious and
                        open-minded, always looking for opportunities to learn
                        and grow.
                    </li>
                    <li>
                        <strong>Set New Goals:</strong> Use what you’ve learned
                        about yourself to set new goals, whether they’re related
                        to school, hobbies, or future career paths.
                    </li>
                    <li>
                        <strong>Seek Support:</strong> Don’t hesitate to reach
                        out to friends, family, teachers, or mentors when you
                        need guidance or encouragement.
                    </li>
                </ul>
                <p class="font-bold mt-4">
                    Your unique combination of traits makes you capable of
                    achieving great things. Keep exploring, challenging
                    yourself, and embracing the opportunities that come your
                    way.
                </p>
            </div>
        </div>
    </div>

    <!-- For ID Style Report -->
    <div v-if="style == 'ID'">
        <div class="p-6 pb-0 row">
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">
                    Encouragement for Personal Growth
                </h2>
                <p>
                    Congratulations on completing your Teen DISC Assessment! By
                    understanding your Influential-Dominant (ID) style, you've
                    taken an important step toward discovering more about
                    yourself and how you interact with the world. Your strengths
                    as a charismatic leader, persuasive communicator, and
                    goal-oriented individual set you up for success in many
                    areas of life.
                </p>
                <p>
                    Remember, growth is a continuous journey. Embrace your
                    strengths but also focus on developing areas where you can
                    improve, like listening skills and patience. These will help
                    you become an even more effective communicator and leader.
                </p>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img
                        class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Conclusion/24.svg'"
                        alt=""
                    />
                </div>
            </div>
        </div>

        <div class="p-6 pb-0 row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img
                        class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Conclusion/35.svg'"
                        alt=""
                    />
                </div>
            </div>
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">
                    Final Thoughts and Next Steps
                </h2>
                <p>Here are some things to keep in mind as you move forward:</p>
                <ul class="list-disc pl-6">
                    <li>
                        <strong>Celebrate Your Achievements:</strong> Recognise
                        your successes and use them as motivation to keep
                        pushing yourself.
                    </li>
                    <li>
                        <strong>Stay Open to Learning:</strong> Be curious and
                        open-minded, always looking for opportunities to learn
                        and grow.
                    </li>
                    <li>
                        <strong>Set New Goals:</strong> Use what you’ve learned
                        about yourself to set new goals, whether they’re related
                        to school, hobbies, or future career paths.
                    </li>
                    <li>
                        <strong>Seek Support:</strong> Don’t hesitate to reach
                        out to friends, family, teachers, or mentors when you
                        need guidance or encouragement.
                    </li>
                </ul>
                <p>
                    Your unique combination of traits makes you capable of
                    achieving great things. Keep exploring, challenging
                    yourself, and embracing the opportunities that come your
                    way.
                </p>
            </div>
        </div>
    </div>

    <!-- For IS Style Report -->
    <div v-if="style == 'IS'">
        <div class="p-6 pb-0 row">
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">
                    Encouragement for Personal Growth
                </h2>
                <p>
                    Congratulations on completing your Teen DISC Assessment! By
                    understanding your Influential-Supportive (IS) style, you've
                    taken an important step toward discovering more about
                    yourself and how you interact with the world. Your strengths
                    as a social connector, empathetic listener, and
                    collaborative team player set you up for success in many
                    areas of life.
                </p>
                <p>
                    Remember, growth is a continuous journey. Embrace your
                    strengths but also focus on developing areas where you can
                    improve, like listening skills and patience. These will help
                    you become an even more effective communicator and leader.
                </p>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img
                        class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Conclusion/24.svg'"
                        alt=""
                    />
                </div>
            </div>
        </div>

        <div class="p-6 pb-0 row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img
                        class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Conclusion/35.svg'"
                        alt=""
                    />
                </div>
            </div>
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">
                    Final Thoughts and Next Steps
                </h2>
                <p>Here are some things to keep in mind as you move forward:</p>
                <ul class="list-disc pl-6">
                    <li>
                        <strong>Celebrate Your Achievements:</strong> Recognise
                        your successes and use them as motivation to keep
                        pushing yourself.
                    </li>
                    <li>
                        <strong>Stay Open to Learning:</strong> Be curious and
                        open-minded, always looking for opportunities to learn
                        and grow.
                    </li>
                    <li>
                        <strong>Set New Goals:</strong> Use what you’ve learned
                        about yourself to set new goals, whether they’re related
                        to school, hobbies, or future career paths.
                    </li>
                    <li>
                        <strong>Seek Support:</strong> Don’t hesitate to reach
                        out to friends, family, teachers, or mentors when you
                        need guidance or encouragement.
                    </li>
                </ul>
                <p>
                    Your unique combination of traits makes you capable of
                    achieving great things. Keep exploring, challenging
                    yourself, and embracing the opportunities that come your
                    way.
                </p>
            </div>
        </div>
    </div>

    <!-- For S Style Report -->
    <div v-if="style == 'S'">
        <!-- Content for S -->

        <div class="p-6 pb-0 row">
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">
                    Encouragement for Personal Growth
                </h2>
                <p>
                    Congratulations on completing your Teen DISC Assessment! By
                    understanding your Supportive (S) style, you've taken an
                    important step toward discovering more about yourself and
                    how you interact with the world. Your strengths as a caring
                    listener, reliable friend, and cooperative team player set
                    you up for success in many areas of life.
                </p>
                <p>
                    Remember, growth is a continuous journey. Embrace your
                    strengths but also focus on developing areas where you can
                    improve, like listening skills and patience. These will help
                    you become an even more effective communicator and leader.
                </p>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img
                        class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Conclusion/24.svg'"
                        alt=""
                    />
                </div>
            </div>
        </div>

        <div class="p-6 pb-0 row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img
                        class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Conclusion/35.svg'"
                        alt=""
                    />
                </div>
            </div>
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">
                    Final Thoughts and Next Steps
                </h2>
                <p>Here are some things to keep in mind as you move forward:</p>
                <ul class="list-disc pl-6">
                    <li>
                        <strong>Celebrate Your Achievements:</strong> Recognise
                        your successes and use them as motivation to keep
                        pushing yourself.
                    </li>
                    <li>
                        <strong>Stay Open to Learning:</strong> Be curious and
                        open-minded, always looking for opportunities to learn
                        and grow.
                    </li>
                    <li>
                        <strong>Set New Goals:</strong> Use what you’ve learned
                        about yourself to set new goals, whether they’re related
                        to school, hobbies, or future career paths.
                    </li>
                    <li>
                        <strong>Seek Support:</strong> Don’t hesitate to reach
                        out to friends, family, teachers, or mentors when you
                        need guidance or encouragement.
                    </li>
                </ul>
                <p>
                    Your unique combination of traits makes you capable of
                    achieving great things. Keep exploring, challenging
                    yourself, and embracing the opportunities that come your
                    way.
                </p>
            </div>
        </div>
    </div>

    <!-- For SC Style Report -->
    <div v-if="style == 'SC'">
        <div class="p-6 pb-0 row">
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">
                    Encouragement for Personal Growth
                </h2>
                <p>
                    Congratulations on completing your Teen DISC Assessment! By
                    understanding your Supportive-Cautious (SC) style, you've
                    taken an important step toward discovering more about
                    yourself and how you interact with the world. Your strengths
                    as a reliable, detail-oriented, and supportive individual
                    set you up for success in many areas of life.
                </p>
                <p>
                    Remember, growth is a continuous journey. Embrace your
                    strengths but also focus on developing areas where you can
                    improve, like listening skills and patience. These will help
                    you become an even more effective communicator and leader.
                </p>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img
                        class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Conclusion/24.svg'"
                        alt=""
                    />
                </div>
            </div>
        </div>

        <div class="p-6 pb-0 row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img
                        class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Conclusion/35.svg'"
                        alt=""
                    />
                </div>
            </div>
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">
                    Final Thoughts and Next Steps
                </h2>
                <p>Here are some things to keep in mind as you move forward:</p>
                <ul class="list-disc pl-6">
                    <li>
                        <strong>Celebrate Your Achievements:</strong> Recognise
                        your successes and use them as motivation to keep
                        pushing yourself.
                    </li>
                    <li>
                        <strong>Stay Open to Learning:</strong> Be curious and
                        open-minded, always looking for opportunities to learn
                        and grow.
                    </li>
                    <li>
                        <strong>Set New Goals:</strong> Use what you’ve learned
                        about yourself to set new goals, whether they’re related
                        to school, hobbies, or future career paths.
                    </li>
                    <li>
                        <strong>Seek Support:</strong> Don’t hesitate to reach
                        out to friends, family, teachers, or mentors when you
                        need guidance or encouragement.
                    </li>
                </ul>
                <p>
                    Your unique combination of traits makes you capable of
                    achieving great things. Keep exploring, challenging
                    yourself, and embracing the opportunities that come your
                    way.
                </p>
            </div>
        </div>
    </div>

    <!-- For SI Style Report -->
    <div v-if="style == 'SI'">
        <div class="p-6 pb-0 row">
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">
                    Encouragement for Personal Growth
                </h2>
                <p>
                    Congratulations on completing your Teen DISC Assessment! By
                    understanding your Supportive-Influential (SI) style, you've
                    taken an important step toward discovering more about
                    yourself and how you interact with the world. Your strengths
                    as an empathetic, sociable, and supportive individual set
                    you up for success in many areas of life.
                </p>
                <p>
                    Remember, growth is a continuous journey. Embrace your
                    strengths but also focus on developing areas where you can
                    improve, like listening skills and patience. These will help
                    you become an even more effective communicator and leader.
                </p>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img
                        class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Conclusion/24.svg'"
                        alt=""
                    />
                </div>
            </div>
        </div>

        <div class="p-6 pb-0 row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img
                        class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Conclusion/35.svg'"
                        alt=""
                    />
                </div>
            </div>
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">
                    Final Thoughts and Next Steps
                </h2>
                <p>Here are some things to keep in mind as you move forward:</p>
                <ul class="list-disc pl-6">
                    <li>
                        <strong>Celebrate Your Achievements:</strong> Recognise
                        your successes and use them as motivation to keep
                        pushing yourself.
                    </li>
                    <li>
                        <strong>Stay Open to Learning:</strong> Be curious and
                        open-minded, always looking for opportunities to learn
                        and grow.
                    </li>
                    <li>
                        <strong>Set New Goals:</strong> Use what you’ve learned
                        about yourself to set new goals, whether they’re related
                        to school, hobbies, or future career paths.
                    </li>
                    <li>
                        <strong>Seek Support:</strong> Don’t hesitate to reach
                        out to friends, family, teachers, or mentors when you
                        need guidance or encouragement.
                    </li>
                </ul>
                <p>
                    Your unique combination of traits makes you capable of
                    achieving great things. Keep exploring, challenging
                    yourself, and embracing the opportunities that come your
                    way.
                </p>
            </div>
        </div>
    </div>
    </div>
</template>

<script>
import AssessmentTypes from "@/Layouts/AssessmentTypes.vue";

export default {
    name: "Conclusion",
    layout: AssessmentTypes,
    props: {
        style: String,
        childName: String,
        image: String,
    },
};
</script>


<style>
/* Add styles here */
/* h2, h2, h2, h4 {
    color: rgb(55 48 163 );
    font-weight: bold !important;
} */
div.col-6>h4.font-medium,
li>div>h4,
div.space-y-2>h4.font-medium {
    color: rgb(36, 168, 250);
    font-weight: bold;
    font-size: 19px;
}

div.col-6>h4.font-medium,
li>div>h4,
strong,
div.space-y-2>h4.font-medium {
    color: rgb(36, 168, 250);
    font-weight: bold;
    color:#fa25c4
    /* font-size: 19px; */
}

h2,.p-6>.row>.col-6>h2{
    color: rgb(55 48 163 );
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
        /* margin-bottom: 2rem; */
    }

    .p-6 {
        padding: 1rem;
    }

    /* Adjust image container on mobile */
    .col-6 .flex.justify-center.items-center {
        margin: 1rem 0;
    }

    /* Adjust spacing between sections */
    .row + .row {
        margin-top: 1rem;
    }

    /* Make text more readable on mobile */
    /* h2 {
        font-size: 1.5rem;
        line-height: 2rem;
    } */

    h2 {
        font-size: 1.5rem !important;
        line-height: 2rem;
    }

    strong{
        font-size: 1rem;
    }

    ul.list-disc {
        padding-left: 1rem;
    }
}
</style>
