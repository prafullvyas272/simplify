<template>
    <div class="p-6">
        <div class="container mx-auto p-4">
            <h1 class="font-bold mb-4 text-center">Guidance for Teachers</h1>
        </div>

        <div v-if="style == 'C'">
            <div class="supporting-at-home p-6 mb-2">
                <h2 class="text-3xl font-bold mb-2">Classroom Strategies</h2>

                <ul class="list-none list-inside mb-1">
                    <div class="row">
                        <div class="col-6">
                            <li>
                                <strong>Leverage Analytical Skills:</strong>
                                <ul class="list-none list-inside ml-6 mb-2">
                                    <li>
                                        Encourage {{ childName }} to engage in
                                        activities that require critical
                                        thinking and problem-solving, such as
                                        math puzzles or science experiments
                                    </li>
                                    <li>
                                        Assign tasks that involve research and
                                        detailed analysis, allowing them to
                                        utilise their strengths in precision and
                                        thoroughness.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <strong
                                    >Provide Structured Learning
                                    Environment:</strong
                                >
                                <ul class="list-none list-inside ml-6 mb-2">
                                    <li>
                                        Maintain a well-organised classroom with
                                        clear routines and expectations. Use
                                        visual schedules and detailed
                                        instructions to help
                                        {{ childName }} understand what is
                                        expected.
                                    </li>
                                    <li>
                                        Break down larger tasks into smaller,
                                        manageable steps, providing checklists
                                        or guides to help them stay on track.
                                    </li>
                                </ul>
                            </li>
                        </div>
                        <div class="col-6">
                            <div class="flex justify-center items-center">
                                <img
                                    class="w-100 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page19.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                    </div>

                    <li>
                        <strong>Nurture a Supportive Environment:</strong>
                        <ul class="list-none list-inside ml-6 mb-2">
                            <li>
                                Create a classroom atmosphere that values
                                careful thinking and precision. Encourage all
                                students to appreciate the importance of detail
                                and accuracy.
                            </li>
                            <li>
                                Implement activities that promote collaboration
                                while respecting individual work preferences,
                                such as group projects with clearly defined
                                roles.
                            </li>
                        </ul>
                    </li>
                    <li>
                        <strong>Encourage Flexibility and Adaptability:</strong>
                        <ul class="list-none list-inside ml-6 mb-2">
                            <li>
                                Introduce activities that require flexibility,
                                such as open-ended projects where there is more
                                than one correct solution.
                            </li>
                            <li>
                                Provide opportunities for {{ childName }} to
                                experience different perspectives and adapt to
                                new situations through role-playing or
                                scenario-based learning.
                            </li>
                        </ul>
                    </li>
                </ul>

                <div class="effective-communication p-6 rounded-lg mb-6">
                    <h2 class="text-3xl font-bold mb-2800">
                        Motivating {{ childName }} as a Cautious (C) Student
                    </h2>
                    <p class="mb-2">
                        Students with a Cautious (C) style are naturally
                        motivated by structure, clear instructions, and
                        opportunities to think things through. Here are some
                        strategies to motivate and encourage {{ childName }}:
                    </p>
                    <div class="row">
                        <div class="col-6">
                            <div class="flex justify-center items-center mb-4">
                                <img
                                    class="w-96 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page20.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                        <div class="col-6">
                            <ul class="list-none list-inside mb-6">
                                <li>
                                    <strong>Set Clear Goals:</strong> Cautious
                                    (C) students thrive on having specific,
                                    achievable goals. Break larger tasks into
                                    smaller milestones and celebrate each
                                    achievement.
                                </li>
                                <li>
                                    <strong
                                        >Provide Detailed Instructions:</strong
                                    >
                                    Offer precise and detailed instructions for
                                    tasks and projects. Cautious (C) students
                                    appreciate knowing exactly what is expected
                                    of them.
                                </li>
                                <li>
                                    <strong
                                        >Encourage Analytical Thinking:</strong
                                    >
                                    Engage {{ childName }} in activities that
                                    require critical thinking and
                                    problem-solving, such as puzzles, research
                                    projects, or science experiments.
                                </li>
                                <li>
                                    <strong>Use Positive Reinforcement:</strong>
                                    Recognise and celebrate {{ childName }} ’s
                                    careful and thorough work. Use praise,
                                    certificates, or tangible rewards to
                                    acknowledge their accomplishments.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="effective-communication p-6 rounded-lg mb-6">
                    <h2 class="text-3xl font-bold mb-2800">
                        Encouraging {{ childName }} as a Cautious (C) Student
                    </h2>
                    <!-- <p class="font-semibold text-blue-500 mb-2">
                   Students with a Cautious (C) style are naturally motivated
                   by structure, clear instructions, and opportunities to think
                   things through. Here are some strategies to motivate and
                   encourage {{ childName }}:
               </p> -->

                    <div class="row">
                        <div class="col-6 mt-3">
                            <ul class="list-none list-inside mb-6">
                                <li>
                                    <strong>Positive Reinforcement:</strong>
                                    Regularly acknowledge {{ childName }} ’s
                                    careful and detailed work. Positive
                                    reinforcement helps build their self-esteem
                                    and encourages their natural tendencies to
                                    be precise and thorough.
                                </li>
                                <li>
                                    <strong
                                        >Opportunities for Detailed
                                        Work:</strong
                                    >
                                    Provide opportunities for {{ childName }} to
                                    engage in tasks that require attention to
                                    detail. This can include research projects,
                                    detailed artwork, or science experiments.
                                </li>
                                <li>
                                    <strong>Structured Environment:</strong>
                                    Create a consistent and predictable routine.
                                    Cautious (C) students feel more secure and
                                    focused when they know what to expect.
                                </li>
                                <li>
                                    <strong
                                        >Encourage Analytical Thinking:</strong
                                    >
                                    Involve {{ childName }} in activities that
                                    require problem-solving and critical
                                    thinking, such as strategy games or complex
                                    puzzles.
                                </li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <div class="flex justify-center items-center mb-4">
                                <img
                                    class="w-80 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page21.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div
                                class="effective-communication p-6 rounded-lg mb-6"
                            >
                                <h2 class="text-3xl font-bold mb-2800">
                                    Communicating with {{ childName }}
                                </h2>

                                <ul class="list-none list-inside mb-6">
                                    <li>
                                        <strong>Be Detailed and Clear:</strong>
                                        Use precise and detailed language when
                                        giving instructions or discussing
                                        expectations. Cautious (C) students
                                        appreciate clarity and specificity.
                                    </li>
                                    <li>
                                        <strong
                                            >Encourage Open Dialogue:</strong
                                        >
                                        Create an environment where
                                        {{ childName }} feels comfortable
                                        expressing their thoughts and concerns.
                                        Ask open-ended questions to engage them
                                        in discussions and show genuine interest
                                        in their ideas.
                                    </li>
                                    <li>
                                        <strong
                                            >Set Clear and Consistent
                                            Expectations:</strong
                                        >
                                        Clearly define rules and expectations,
                                        using simple and direct language.
                                        Cautious (C) students benefit from
                                        understanding what is expected of them
                                        and having consistent guidelines to
                                        follow.
                                    </li>
                                    <li>
                                        <strong
                                            >Provide Constructive
                                            Feedback:</strong
                                        >
                                        Offer specific, actionable feedback that
                                        helps {{ childName }} understand how
                                        they can improve. Focus on their
                                        strengths while gently addressing areas
                                        for growth to nurture a supportive
                                        learning environment.
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </div>
                    <div class="col-6 effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div class="flex justify-center items-center">
                                <img
                                    class="w-90 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page17.svg'"
                                    alt=""
                                />
                            </div>
                        </li>
                    </div>
                </div>
                <div>
                    <p>
                        By utilising these communication tips, you can
                        effectively motivate, encourage, and guide
                        {{ childName }} as a Cautious (C) student, helping them
                        reach their full potential.
                    </p>
                </div>

                <div class="row">
                    <div class="col-6 effective-study-box">
                        <div class="items-start space-x-4">
                            <div class="flex justify-center items-center">
                                <img
                                    class="w-120 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page16.svg'"
                                    alt=""
                                />
                            </div>
                            <div class="flex justify-center items-center mt-5">
                                <img
                                    class="w-120 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page 34.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- For CD Style Type -->
        <div id="CD" v-if="style == 'CD'">
            <div class="supporting-at-home p-6 mb-2">
                <h2 class="text-3xl font-bold mb-2">Classroom Strategies</h2>
                <p class="font-semibold text-blue-500 mb-2">
                    Tips for Supporting {{ childName }} in the Classroom
                </p>
                <ul class="list-none list-inside mb-1">
                    <div class="row">
                        <div class="col-6">
                            <li>
                                <p>
                                    <span class="font-semibold"
                                        ><strong></strong>Leverage Leadership
                                        Skills:</span
                                    >
                                </p>
                                <p class="ml-5">
                                    Assign {{ childName }} roles that allow them
                                    to lead projects or activities, such as
                                    being a group leader or class helper.
                                </p>
                                <p class="ml-5">
                                    Encourage them to mentor peers or take part
                                    in student council or other leadership
                                    opportunities.
                                </p>
                            </li>
                            <li>
                                <p>
                                    <span class="font-semibold"
                                        ><strong></strong>Promote Structured
                                        Learning:</span
                                    >
                                </p>
                                <p class="ml-5">
                                    Provide a structured and organised classroom
                                    setting with clear expectations and
                                    routines.
                                </p>
                                <p class="ml-5">
                                    Use visual aids and schedules to help
                                    {{ childName }} stay on track and understand
                                    what is coming next.
                                </p>
                            </li>
                            <li>
                                <p>
                                    <span class="font-semibold"
                                        ><strong></strong>Incorporate
                                        Problem-Solving Activities:</span
                                    >
                                </p>
                                <p class="ml-5">
                                    Include activities and games in the
                                    curriculum that challenge {{ childName }} ’s
                                    analytical and problem-solving skills.
                                </p>
                                <p class="ml-5">
                                    Recognise and reward their achievements to
                                    motivate continued effort and improvement.
                                </p>
                            </li>
                        </div>
                        <div class="col-6">
                            <div class="flex justify-center items-center">
                                <img
                                    class="w-100 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page19.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                    </div>

                    <li>
                        <p>
                            <span class="font-semibold"
                                ><strong></strong>Support Collaborative
                                Learning:</span
                            >
                        </p>
                        <p class="ml-5">
                            Encourage group work and collaborative projects that
                            require
                            {{ childName }} to work with others and value
                            different perspectives.
                        </p>
                        <p class="ml-5">
                            Facilitate activities that build teamwork and
                            cooperation skills.
                        </p>
                    </li>
                </ul>

                <div class="effective-communication p-6 rounded-lg mb-6">
                    <h2 class="text-3xl font-bold mb-2800">
                        Motivating {{ childName }} as a Cautious-Dominant (CD)
                        Student
                    </h2>
                    <p class="mb-2">
                        Students with a Cautious-Dominant (CD) style are
                        naturally motivated by clear goals, structured
                        environments, and opportunities to lead and solve
                        problems. Here are some strategies to motivate and
                        encourage {{ childName }}:
                    </p>
                    <div class="row">
                        <div class="col-6">
                            <div class="flex justify-center items-center mb-4">
                                <img
                                    class="w-80 h-auto object-contain"
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
                                    class="w-100 h-auto object-contain"
                                    src="/images/reports-svg-images/Page16.svg"
                                    alt=""
                                />
                            </div>
                        </div>
                        <div class="col-6">
                            <ul class="list-none list-inside mb-6">
                                <li>
                                    <p>
                                        <span class="font-semibold"
                                            >Set Clear Goals:</span
                                        >
                                    </p>
                                    <p class="ml-5">
                                        Establish specific, achievable goals for
                                        {{ childName }} to work towards. Break
                                        larger tasks into smaller milestones and
                                        celebrate each achievement.
                                    </p>
                                    <p class="ml-5">
                                        Discuss the importance of these goals
                                        and how they contribute to their overall
                                        success.
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <span class="font-semibold"
                                            >Provide Leadership
                                            Opportunities:</span
                                        >
                                    </p>
                                    <p class="ml-5">
                                        Offer opportunities for
                                        {{ childName }} to take on leadership
                                        roles in class activities or group
                                        projects. This can include being a team
                                        leader or organising a class event.
                                    </p>
                                    <p class="ml-5">
                                        Encourage them to mentor peers or take
                                        part in student council or other
                                        leadership programs.
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <span class="font-semibold"
                                            >Challenge Their Problem-Solving
                                            Skills:</span
                                        >
                                    </p>
                                    <p class="ml-5">
                                        Engage {{ childName }} in activities
                                        that require critical thinking and
                                        problem-solving, such as puzzles,
                                        strategy games, or complex projects.
                                    </p>
                                    <p class="ml-5">
                                        Recognise their efforts and successes in
                                        solving problems, reinforcing their
                                        confidence in their abilities.
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <ul>
                            <li>
                                <p>
                                    <span class="font-semibold"
                                        >Use Positive Reinforcement:</span
                                    >
                                </p>
                                <p class="ml-5">
                                    Acknowledge and celebrate {{ childName }} ’s
                                    accomplishments and efforts regularly. Use
                                    praise, certificates, or small rewards to
                                    show appreciation.
                                </p>
                                <p class="ml-5">
                                    Highlight their strengths and the positive
                                    impact of their leadership and
                                    problem-solving skills.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="effective-communication p-6 rounded-lg mb-6">
                    <h2 class="text-3xl font-bold mb-2800">
                        Encouraging {{ childName }} as a Cautious-Dominant (CD)
                        Student
                    </h2>

                    <div class="row">
                        <div class="col-6 mt-3">
                            <ul class="list-none list-inside mb-6">
                                <li>
                                    <span class="font-semibold"
                                        >Positive Reinforcement:</span
                                    >
                                    Regularly acknowledge {{ childName }} ’s
                                    careful planning and leadership efforts.
                                    Positive reinforcement helps build their
                                    self-esteem and motivation. Highlight their
                                    attention to detail and problem-solving
                                    skills.
                                </li>
                                <li>
                                    <span class="font-semibold"
                                        >Constructive Feedback:</span
                                    >
                                    Provide specific, actionable feedback that
                                    helps
                                    {{ childName }} understand how they can
                                    improve. Focus on their strengths while
                                    gently addressing areas for growth,
                                    nurturing a supportive learning environment.
                                </li>
                                <li>
                                    <span class="font-semibold"
                                        >Role Models:</span
                                    >
                                    Introduce {{ childName }} to positive role
                                    models who demonstrate leadership, careful
                                    planning, and empathy. Share stories of
                                    individuals who excel in both thoughtful and
                                    assertive roles, inspiring them to develop
                                    these skills.
                                </li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <div class="flex justify-center items-center mb-4">
                                <img
                                    class="w-80 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page21.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                    </div>
                    <ul class="list-none list-inside mb-6">
                        <li>
                            <span class="font-semibold"
                                >Encourage Empathy and Teamwork:</span
                            >
                            Involve {{ childName }} in activities that promote
                            empathy and teamwork. This helps them understand the
                            importance of considering others’ perspectives and
                            working collaboratively.
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-6 effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div
                                class="effective-communication p-6 rounded-lg mb-6"
                            >
                                <h2 class="text-3xl font-bold mb-2800">
                                    Communicating with {{ childName }}
                                </h2>

                                <ul class="list-none list-inside mb-6">
                                    <li>
                                        <span class="font-semibold"
                                            >Be Clear and Detailed:</span
                                        >
                                        Use clear and precise language when
                                        giving instructions or discussing
                                        expectations. Avoid vague explanations
                                        and provide detailed guidance. Break
                                        down tasks into manageable steps,
                                        ensuring
                                        {{ childName }} understands each part of
                                        the process.
                                    </li>
                                    <li>
                                        <span class="font-semibold"
                                            >Encourage Open Dialogue:</span
                                        >
                                        Create an environment where
                                        {{ childName }} feels comfortable
                                        expressing their thoughts and feelings.
                                        Show genuine interest in their ideas and
                                        listen attentively. Ask open-ended
                                        questions to encourage them to share
                                        more about their experiences and
                                        feelings, nurturing a sense of being
                                        heard and valued.
                                    </li>
                                    <li>
                                        <span class="font-semibold"
                                            >Set Firm Boundaries and
                                            Expectations:</span
                                        >
                                        Clearly define rules and expectations in
                                        a firm but supportive manner. Explain
                                        the reasons behind rules and how they
                                        benefit everyone, helping
                                        {{ childName }} understand and follow
                                        them more easily. Provide consistent
                                        reminders about the boundaries and
                                        expectations, helping them stay on track
                                        without feeling criticised.
                                    </li>
                                    <li>
                                        <span class="font-semibold"
                                            >Practice Active Listening:</span
                                        >
                                        Show that you are listening by nodding,
                                        maintaining eye contact, and reflecting
                                        back what they say. This demonstrates
                                        that you value their input and
                                        understand their perspective. Encourage
                                        them to practice active listening with
                                        others, promoting mutual respect and
                                        understanding in conversations.
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </div>
                    <div class="col-6 effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div class="flex justify-center items-center">
                                <img
                                    class="w-90 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page17.svg'"
                                    alt=""
                                />
                            </div>
                        </li>
                        <div
                            data-v-0132f395=""
                            class="mt-10 flex justify-center items-center"
                        >
                            <img
                                data-v-0132f395=""
                                class="w-240 h-auto object-contain"
                                src="/images/reports-svg-images/Page16.svg"
                                alt=""
                            />
                        </div>
                    </div>
                </div>
                <div>
                    <p>
                        By utilising these communication tips, you can
                        effectively motivate, encourage, and guide
                        {{ childName }} as a Cautious-Dominant (CD) student,
                        helping them reach their full potential.
                    </p>
                </div>


            </div>
        </div>

        <!-- For CS Style Type -->
        <div id="CS" v-if="style == 'CS'">
            <div class="supporting-at-home p-6 mb-2">
                <h2 class="text-3xl font-bold mb-2">Classroom Strategies</h2>

                <ul class="list-none list-inside mb-1">
                    <div class="row">
                        <ul class="col-6">
                            <li>
                                <span class="font-semibold"
                                    ><strong></strong>Leverage Attention to
                                    Detail:</span
                                >
                                <br />
                                <p>
                                    Assign
                                    {{ childName }} roles that require careful
                                    planning and organisation, such as managing
                                    classroom supplies or leading a project that
                                    requires detailed work.
                                </p>
                                <p class="mb-2">
                                    Encourage them to participate in tasks that
                                    require precision and thoroughness, such as
                                    science experiments or creating detailed
                                    reports.
                                </p>
                            </li>
                            <li>
                                <span class="font-semibold"
                                    ><strong></strong>Promote a Calm and
                                    Structured Learning Environment:</span
                                >
                                <p>
                                    Create a structured and calm classroom
                                    environment where
                                    {{ childName }} can concentrate and feel
                                    secure.
                                </p>
                                <p class="mb-2">
                                    Use visual aids and clear instructions to
                                    help them understand and follow classroom
                                    routines and expectations.
                                </p>
                            </li>
                            <li>
                                <span class="font-semibold"
                                    ><strong></strong>Supportive Social
                                    Interaction:</span
                                >
                                <p>
                                    Encourage
                                    {{ childName }} to engage in group
                                    activities where they can interact with
                                    classmates and build strong relationships in
                                    a supportive environment.
                                </p>
                                <p class="mb-2">
                                    Provide opportunities for them to take on
                                    supportive roles within group projects,
                                    emphasising the importance of teamwork and
                                    cooperation.
                                </p>
                            </li>
                        </ul>
                        <div class="col-6">
                            <div class="flex justify-center items-center">
                                <img
                                    class="w-100 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page19.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                    </div>

                    <li>
                        <span class="font-semibold"
                            ><strong></strong>Build Confidence and
                            Decision-Making Skills:</span
                        >
                        <p>
                            Give
                            {{ childName }} opportunities to make decisions in
                            the classroom, starting with small choices and
                            gradually moving to bigger ones.
                        </p>
                        <p class="mb-2">
                            Celebrate their successes and praise their efforts,
                            helping them build confidence and trust in their
                            abilities.
                        </p>
                    </li>
                </ul>

                <div class="effective-communication p-6 rounded-lg mb-6">
                    <h2 class="text-3xl font-bold mb-2800">
                        Motivating {{ childName }} as a Cautious-Supportive (CS)
                        Student
                    </h2>

                    <p>
                        Students with a Cautious-Supportive (CS) style are
                        naturally motivated by stability, careful planning, and
                        opportunities to help others. Here are some strategies
                        to motivate and encourage
                        {{ childName }}:
                    </p>
                    <div class="row">
                        <div class="col-6">
                            <div class="flex justify-center items-center mb-4">
                                <img
                                    class="w-80 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page20.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                        <div class="col-6">
                            <ul class="list-none list-inside mb-6">
                                <li>
                                    <span class="font-semibold"
                                        >Encourage Precision and Detail:</span
                                    >
                                    Highlight and praise
                                    {{ childName }} ’s attention to detail.
                                    Engage them in activities that require
                                    careful planning and precision, such as
                                    science experiments or detailed art
                                    projects.
                                </li>
                                <li>
                                    <span class="font-semibold"
                                        >Provide a Stable and Predictable
                                        Environment:</span
                                    >
                                    Establish a consistent and predictable
                                    classroom routine. Cautious-Supportive (CS)
                                    students feel more secure and focused when
                                    they know what to expect. Minimise chaotic
                                    situations and sudden changes to help them
                                    feel comfortable and at ease.
                                </li>
                                <li>
                                    <span class="font-semibold"
                                        >Use Positive Reinforcement:</span
                                    >
                                    Recognise and celebrate
                                    {{ childName }} ’s efforts to support and
                                    help others. Use praise, certificates, or
                                    small rewards to acknowledge their
                                    contributions. Highlight their reliability
                                    and thoughtfulness, reinforcing their
                                    positive behaviors and efforts.
                                </li>
                            </ul>
                        </div>
                        <ul>
                            <li>
                                <strong class="font-semibold"
                                    >Create Leadership Opportunities in
                                    Structured Settings:</strong
                                >
                                <p>
                                    Provide opportunities for
                                    {{ childName }} to take on leadership roles
                                    in group settings, such as team leader or
                                    project coordinator. Offer guidance and
                                    encouragement to help them develop these
                                    skills. Encourage them to share their ideas
                                    and opinions in class discussions, building
                                    their confidence in decision-making and
                                    leadership.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="effective-communication p-6 rounded-lg mb-6">
                    <h2 class="text-3xl font-bold mb-2800">
                        Encouraging {{ childName }} as a Cautious-Supportive
                        (CS) Student
                    </h2>

                    <div class="row">
                        <div class="col-6 mt-3">
                            <ul class="list-none list-inside mb-6">
                                <li>
                                    <span class="font-semibold"
                                        >Constructive Feedback:</span
                                    >
                                    Provide specific, actionable feedback that
                                    helps
                                    {{ childName }}
                                    understand how they can improve. Focus on
                                    their strengths while gently addressing
                                    areas for growth, nurturing a supportive
                                    learning environment.
                                </li>
                                <li>
                                    <span class="font-semibold"
                                        >Role Models:</span
                                    >
                                    Introduce
                                    {{ childName }} to positive role models who
                                    demonstrate careful planning, reliability,
                                    and empathy. Share stories of individuals
                                    who excel in both thoughtful and supportive
                                    roles, inspiring them to develop these
                                    skills.
                                </li>
                                <li>
                                    <span class="font-semibold"
                                        >Encourage Social Responsibility:</span
                                    >
                                    Involve
                                    {{ childName }} in activities that promote
                                    social responsibility and community
                                    involvement. This helps them understand the
                                    importance of contributing to their
                                    community and the positive impact they can
                                    have on others.
                                </li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <div class="flex justify-center items-center mb-4">
                                <img
                                    class="w-80 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page21.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                    </div>
                    <ul class="list-none list-inside mb-6">
                        <li>
                            <span class="font-semibold"
                                >Support Emotional Resilience:</span
                            >
                            Teach
                            {{ childName }} strategies for managing stress and
                            dealing with setbacks. Encourage them to see
                            challenges as opportunities for growth and learning,
                            building their emotional resilience.
                        </li>
                    </ul>
                </div>

                <div class="row">
                    <div class="col-6 effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div class="flex justify-center items-center">
                                <img
                                    class="w-90 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page17.svg'"
                                    alt=""
                                />
                            </div>
                        </li>
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
                    </div>
                    <div class="col-6 effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <div
                                    class="effective-communication p-6 rounded-lg mb-6"
                                >
                                    <h2 class="text-3xl font-bold mb-2800">
                                        Communicating with {{ childName }}
                                    </h2>

                                    <ul class="list-none list-inside mb-6">
                                        <li>
                                            <b>Promote Open Communication:</b>
                                            Create an environment where
                                            {{ childName }} feels safe
                                            expressing their thoughts and
                                            feelings. Show genuine interest in
                                            their ideas and actively listen. Ask
                                            specific questions to encourage them
                                            to share their experiences and
                                            thoughts, promoting a sense of being
                                            understood and valued.
                                        </li>
                                        <li>
                                            <b
                                                >Set Clear Expectations with
                                                Support:</b
                                            >
                                            Define rules and expectations
                                            clearly and supportively. Explain
                                            the reasons behind rules and how
                                            they help everyone, ensuring
                                            {{ childName }} understands and can
                                            follow them. Provide gentle and
                                            consistent reminders about the
                                            expectations, helping them stay on
                                            track without feeling pressured
                                        </li>
                                        <li>
                                            <b
                                                >Empathetic Listening and
                                                Validation:</b
                                            >
                                            Show empathy by actively listening
                                            to
                                            {{ childName }} and validating their
                                            feelings. Reflect back what they
                                            share to show you understand and
                                            care. Encourage them to practice
                                            empathetic listening with others,
                                            promoting mutual respect and
                                            understanding in their interactions.
                                        </li>
                                        <li>
                                            <b>Offer Balanced Feedback:</b>
                                            Provide balanced feedback that
                                            highlights what they did well and
                                            offers constructive suggestions for
                                            improvement. Use a supportive and
                                            encouraging tone. Encourage
                                            self-assessment by asking
                                            {{ childName }} to reflect on their
                                            performance and identify areas for
                                            growth, promoting a proactive
                                            mindset.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </div>
                    <p>
                        By using these tailored communication strategies, you
                        can effectively motivate, encourage, and guide
                        {{ childName }} as a Cautious-Supportive (CS) student,
                        helping them thrive in their unique way.
                    </p>
                </div>

            </div>
        </div>

        <!-- For D Style Type -->
        <div id="D" v-if="style == 'D'">
            <div class="supporting-at-home p-6 mb-2">
                <h2 class="text-3xl font-bold mb-2">Classroom Strategies</h2>

                <ul class="list-none list-inside mb-1">
                    <div class="row">
                        <div class="col-6">
                            <li>
                                <strong>Leverage Leadership Skills:</strong>
                                <ul class="list-none list-inside ml-6 mb-2">
                                    <li>
                                        Assign {{ childName }} roles that allow
                                        them to lead projects or activities,
                                        such as group leader or class helper
                                    </li>
                                    <li>
                                        Encourage them to mentor peers or take
                                        part in student council or other
                                        leadership opportunities.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <strong
                                    >Structured Learning Environment:</strong
                                >
                                <ul class="list-none list-inside ml-6 mb-2">
                                    <li>
                                        Provide a structured and organised
                                        classroom setting with clear
                                        expectations and routines
                                    </li>
                                    <li>
                                        Use visual aids and schedules to help
                                        {{ childName }} stay on track and
                                        understand what is coming next
                                    </li>
                                </ul>
                            </li>
                        </div>
                        <div class="col-6">
                            <div class="flex justify-center items-center">
                                <img
                                    class="w-100 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page19.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                    </div>

                    <li>
                        <strong>Incorporate Competitive Elements:</strong>
                        <ul class="list-none list-inside ml-6 mb-2">
                            <li>
                                Include competitive activities and games in the
                                curriculum that allow {{ childName }} to channel
                                their competitive energy positively.
                            </li>
                            <li>
                                Recognise and reward achievements to motivate
                                continued effort and improvement.
                            </li>
                        </ul>
                    </li>
                    <li>
                        <strong>Support Collaborative Learning:</strong>
                        <ul class="list-none list-inside ml-6 mb-2">
                            <li>
                                Encourage group work and collaborative projects
                                that require {{ childName }} to work with others
                                and value different perspectives.
                            </li>
                            <li>
                                Facilitate activities that build teamwork and
                                cooperation skills.
                            </li>
                        </ul>
                    </li>
                </ul>

                <div class="effective-communication p-6 rounded-lg mb-6">
                    <h2 class="text-3xl font-bold mb-2800">
                        Motivating {{ childName }} as a Dominant (D) Student:
                    </h2>
                    <p>
                        Students with a Dominant (D) style are naturally
                        motivated by challenges and opportunities to take the
                        lead. Here are some strategies to motivate and encourage
                        {{ childName }} :
                    </p>

                    <div class="row">
                        <div class="col-6">
                            <div class="flex justify-center items-center mb-4">
                                <img
                                    class="w-80 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page20.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                        <div class="col-6">
                            <ul class="list-none list-inside mb-6">
                                <li>
                                    <b>Set Clear Goals:</b> Dominant (D)
                                    students thrive on having specific,
                                    achievable goals. Break larger tasks into
                                    smaller milestones and celebrate each
                                    achievement.
                                </li>
                                <li>
                                    <b>Provide Challenges:</b> Offer
                                    opportunities for {{ childName }} to take on
                                    leadership roles or participate in
                                    competitive activities. This can include
                                    sports, academic competitions, or team
                                    projects.
                                </li>

                                <li>
                                    <b>Offer Rewards:</b> Use a system of
                                    rewards to recognise their accomplishments.
                                    This could be through praise, certificates,
                                    or tangible rewards like extra playtime or a
                                    favourite treat.
                                </li>
                                <li>
                                    <b>Encourage Independence:</b> Allow
                                    {{ childName }} to make decisions and take
                                    responsibility for their actions. This helps
                                    them develop confidence and decision-making
                                    skills.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="effective-communication p-6 rounded-lg mb-6">
                    <h2 class="text-3xl font-bold mb-2800">
                        Encouraging {{ childName }} as a Dominant (D) Student:
                    </h2>

                    <div class="row">
                        <div class="col-6 mt-3">
                            <ul class="list-none list-inside mb-6">
                                <li>
                                    <b>Positive Reinforcement:</b> Regularly
                                    acknowledge {{ childName }} ’s efforts and
                                    successes. Positive reinforcement helps
                                    build their self-esteem and motivation.
                                </li>
                                <li>
                                    <b>Constructive Feedback:</b> Provide
                                    specific, actionable feedback that helps
                                    {{ childName }} understand how they can
                                    improve. Focus on their strengths while
                                    gently addressing areas for growth.
                                </li>
                                <li>
                                    <b>Role Models:</b> Introduce
                                    {{ childName }} to positive role models who
                                    demonstrate leadership and determination.
                                    This can inspire them to develop their own
                                    leadership skills.
                                </li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <div class="flex justify-center items-center mb-4">
                                <img
                                    class="w-80 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page21.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <div
                                    class="effective-communication p-6 rounded-lg mb-6"
                                >
                                    <h2 class="text-3xl font-bold mb-2800">
                                        Communicating with {{ childName }}
                                    </h2>

                                    <ul class="list-none list-inside mb-6">
                                        <li>
                                            <b>Be Direct and Clear:</b> Use
                                            straightforward language and be
                                            specific about expectations and
                                            rules. Dominant (D) students
                                            appreciate clarity and precision.
                                        </li>
                                        <li>
                                            <b>Encourage Open Dialogue:</b>
                                            Create an environment where
                                            {{ childName }} feels comfortable
                                            expressing their thoughts and
                                            opinions. Ask open-ended questions
                                            to engage them in discussions.
                                        </li>
                                        <li>
                                            <b
                                                >Set Boundaries and
                                                Expectations:</b
                                            >
                                            Clearly define rules and
                                            consequences, ensuring that
                                            {{ childName }} understands what is
                                            expected of them. Consistent
                                            boundaries help maintain order and
                                            discipline.
                                        </li>
                                        <li>
                                            <b>Listen Actively:</b> Show
                                            {{ childName }} that you value their
                                            input by actively listening to their
                                            ideas and feedback. This promotes
                                            mutual respect and encourages open
                                            communication.
                                        </li>
                                    </ul>
                                    <p>
                                        By utilising these communication tips,
                                        you can effectively motivate, encourage,
                                        and guide {{ childName }} as a Dominant
                                        (D) student, helping them reach their
                                        full potential.
                                    </p>
                                </div>
                            </div>
                        </li>
                    </div>
                    <div class="col-6 effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div class="flex justify-center items-center">
                                <img
                                    class="w-90 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page17.svg'"
                                    alt=""
                                />
                            </div>
                        </li>
                    </div>
                </div>

            </div>
        </div>

        <!-- For DC Style Type -->
        <div id="DC" v-if="style == 'DC'">
            <div class="supporting-at-home p-6 mb-2">
                <h2 class="text-3xl font-bold mb-2">Classroom Strategies</h2>

                <ul class="list-none list-inside mb-1">
                    <div class="row">
                        <div class="col-6">
                            <li>
                                <strong>Leverage Leadership Skills:</strong>
                                <ul class="list-none list-inside ml-6 mb-2">
                                    <li>
                                        Assign {{ childName }} roles that allow
                                        them to lead projects or activities,
                                        such as group leader or class helper.
                                    </li>
                                    <li>
                                        Encourage them to mentor peers or take
                                        part in student council or other
                                        leadership opportunities.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <strong>Promote Attention to Detail:</strong>
                                <ul class="list-none list-inside ml-6 mb-2">
                                    <li>
                                        Provide assignments that require
                                        precision and thoroughness, such as
                                        science experiments or detailed reports.
                                    </li>
                                    <li>
                                        Use checklists and rubrics to help
                                        {{ childName }} understand the criteria
                                        for success.
                                    </li>
                                </ul>
                            </li>
                        </div>
                        <div class="col-6">
                            <div class="flex justify-center items-center">
                                <img
                                    class="w-100 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page19.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                    </div>

                    <li>
                        <strong>Structured Learning Environment:</strong>
                        <ul class="list-none list-inside ml-6 mb-2">
                            <li>
                                Provide a structured and organised classroom
                                setting with clear expectations and routines.
                            </li>
                            <li>
                                Use visual aids and schedules to help
                                {{ childName }} stay on track and understand
                                what is coming next.
                            </li>
                        </ul>
                    </li>
                    <li>
                        <strong>Support Collaborative Learning:</strong>
                        <ul class="list-none list-inside ml-6 mb-2">
                            <li>
                                Encourage group work and collaborative projects
                                that require {{ childName }} to work with others
                                and value different perspectives.
                            </li>
                            <li>
                                Facilitate activities that build teamwork and
                                cooperation skill.
                            </li>
                        </ul>
                    </li>
                </ul>

                <div class="effective-communication p-6 rounded-lg mb-6">
                    <h2 class="text-3xl font-bold mb-2800">
                        Motivating {{ childName }} as a Dominant-Cautious (DC)
                        Student
                    </h2>
                    <p>
                        Students with a Dominant-Cautious (DC) style are
                        naturally motivated by challenges and opportunities to
                        take the lead while focusing on accuracy and quality.
                        Here are some strategies to motivate and encourage
                        {{ childName }} :
                    </p>

                    <div class="row">
                        <div class="col-6">
                            <div class="flex justify-center items-center mb-4">
                                <img
                                    class="w-80 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page20.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                        <div class="col-6">
                            <ul class="list-none list-inside mb-6">
                                <li>
                                    <span class="font-semibold"
                                        >Set Clear Goals:</span
                                    >
                                    Break larger tasks into smaller, achievable
                                    milestones and celebrate each achievement.
                                    Providing specific and measurable goals
                                    allows them to track their progress and feel
                                    a sense of accomplishment.
                                </li>
                                <li>
                                    <span class="font-semibold"
                                        >Offer Challenges :</span
                                    >
                                    Provide opportunities for {{ childName }} to
                                    take on leadership roles or participate in
                                    activities that require precision. Challenge
                                    them with tasks that require critical
                                    thinking and detailed work to keep them
                                    engaged and motivated.
                                </li>
                                <li>
                                    <span class="font-semibold"
                                        >Use Positive Reinforcement:</span
                                    >
                                    Recognise their accomplishments with praise
                                    and tangible rewards, like certificates or
                                    extra privileges. Consistent and specific
                                    feedback on their performance helps them
                                    understand what they are doing well and
                                    where they can improve.
                                </li>
                                <li>
                                    <span class="font-semibold"
                                        >Encourage Independence:</span
                                    >
                                    Allow {{ childName }} to make decisions and
                                    take responsibility for their actions.
                                    Supporting their initiatives and ideas
                                    nurtures a sense of autonomy and confidence,
                                    helping them to become more self-reliant and
                                    motivated.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="effective-communication p-6 rounded-lg mb-6">
                    <h2 class="text-3xl font-bold mb-2800">
                        Encouraging {{ childName }} as a Dominant-Cautious (DC)
                        Student
                    </h2>

                    <div class="row">
                        <div class="col-6 mt-3">
                            <ul class="list-none list-inside mb-6">
                                <li>
                                    <b>Encouraging Critical Thinking:</b>
                                    Encourage {{ childName }} to think
                                    critically and analyse situations. Ask
                                    questions that require them to consider
                                    different perspectives and solutions,
                                    helping them develop their analytical skills
                                    and decision-making abilities.
                                </li>
                                <li>
                                    <b>Reinforce the Importance of Accuracy:</b>
                                    Emphasise the value of doing tasks
                                    accurately and thoroughly. Recognise and
                                    praise their meticulous work, whether it's a
                                    well-written report or a carefully executed
                                    project. This reinforcement helps them take
                                    pride in their precision and encourages them
                                    to maintain high standards.
                                </li>
                                <li>
                                    <b>Support Leadership with Precision:</b>
                                    Provide opportunities for {{ childName }} to
                                    lead tasks that require careful planning and
                                    execution. This could involve organising a
                                    group project or managing a detailed
                                    assignment. Their leadership skills are
                                    enhanced when they can apply their attention
                                    to detail.
                                </li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <div class="flex justify-center items-center mb-4">
                                <img
                                    class="w-80 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page21.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <div
                                    class="effective-communication p-6 rounded-lg mb-6"
                                >
                                    <h2 class="text-3xl font-bold mb-2800">
                                        Communicating with {{ childName }}
                                    </h2>

                                    <ul class="list-none list-inside mb-6">
                                        <li>
                                            <b>Be Detailed and Clear:</b> Use
                                            precise language and be specific
                                            about expectations and rules.
                                            {{ childName }} appreciates clarity
                                            and precision.
                                        </li>
                                        <li>
                                            <b
                                                >Encourage Analytical
                                                Discussions:</b
                                            >
                                            Engage {{ childName }} in
                                            discussions that require critical
                                            thinking and problem-solving. Ask
                                            open-ended questions that prompt
                                            them to explore various outcomes and
                                            solutions.
                                        </li>
                                        <li>
                                            <b>Set Consistent Boundaries:</b>
                                            Clearly define rules and
                                            consequences, ensuring that
                                            {{ childName }} understands what is
                                            expected of them.
                                        </li>
                                        <li>
                                            <b>Promote Open Communication:</b>
                                            Create an environment where
                                            {{ childName }} feels comfortable
                                            expressing their thoughts and
                                            opinions.
                                        </li>
                                    </ul>
                                    <p>
                                        By utilising these communication tips,
                                        you can effectively motivate, encourage,
                                        and guide {{ childName }} as a
                                        Dominant-Cautious (DC) student, helping
                                        them reach their full potential.
                                    </p>
                                </div>
                            </div>
                        </li>
                    </div>
                    <div class="col-6 effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div class="flex justify-center items-center">
                                <img
                                    class="w-90 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page17.svg'"
                                    alt=""
                                />
                            </div>
                        </li>
                    </div>
                </div>


            </div>
        </div>

        <!-- For DI Style Type -->
        <div id="DI" v-if="style == 'DI'">
            <div class="supporting-at-home p-6 mb-2">
                <h2 class="text-3xl font-bold mb-2">Classroom Strategies</h2>

                <ul class="list-none list-inside mb-1">
                    <div class="row">
                        <div class="col-6">
                            <li>
                                <strong
                                    >Recognise and Reward Achievements:</strong
                                >
                                <ul class="list-none list-inside ml-6 mb-2">
                                    <li>
                                        Recognise and reward their achievements
                                        to motivate continued effort and
                                        improvement
                                    </li>
                                    <li>
                                        Work with them to set new, challenging
                                        goals that keep them engaged and
                                        striving for excellence
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <strong>Support Creative Expression:</strong>
                                <ul class="list-none list-inside ml-6 mb-2">
                                    <li>
                                        Include creative activities and projects
                                        that allow {{ childName }} to express
                                        their ideas and enthusiasm
                                    </li>
                                    <li>
                                        Offer various outlets for creativity,
                                        such as art, drama, or storytelling.
                                    </li>
                                </ul>
                            </li>
                        </div>
                        <div class="col-6">
                            <div class="flex justify-center items-center">
                                <img
                                    class="w-100 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page19.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                    </div>

                    <li>
                        <strong>Leverage Leadership Skills:</strong>
                        <ul class="list-none list-inside ml-6 mb-2">
                            <li>
                                Assign {{ childName }} roles that allow them to
                                lead projects or activities, such as group
                                leader or class helper.
                            </li>
                            <li>
                                Encourage them to mentor peers or take part in
                                student council or other leadership
                                opportunities.
                            </li>
                        </ul>
                    </li>
                    <li>
                        <strong>Incorporate Social Interaction:</strong>
                        <ul class="list-none list-inside ml-6 mb-2">
                            <li>
                                Encourage group work and collaborative projects
                                that require {{ childName }} to interact with
                                others and value different perspectives.
                            </li>
                            <li>
                                Facilitate activities that build teamwork and
                                cooperation skills, such as group games or
                                social events.
                            </li>
                        </ul>
                    </li>
                </ul>

                <div class="effective-communication p-6 rounded-lg mb-6">
                    <h2 class="text-3xl font-bold mb-2800">
                        Motivating {{ childName }} as a Dominant-Influential
                        (DI) Student:
                    </h2>
                    <p>
                        Students with a Dominant-Influential (DI) style are
                        naturally motivated by social interactions, leadership
                        opportunities, and positive reinforcement. Here are some
                        strategies to motivate and encourage {{ childName }} :
                    </p>

                    <div class="row">
                        <div class="col-6">
                            <div class="flex justify-center items-center mb-4">
                                <img
                                    class="w-80 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page20.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                        <div class="col-6">
                            <ul class="list-none list-inside mb-6">
                                <li>
                                    <b>Set Clear Goals:</b> Define specific
                                    goals for {{ childName }} . DI students
                                    thrive on having specific, achievable goals.
                                    Break larger tasks into smaller milestones
                                    and celebrate each achievement.
                                </li>

                                <li>
                                    <b>Provide Social Opportunities:</b>
                                    Organise social events that offer
                                    opportunities for {{ childName }} to
                                    participate in social activities and group
                                    projects. Encourage them to interact with
                                    peers and build friendships through
                                    collaborative tasks.
                                </li>

                                <li>
                                    <b>Offer Positive Reinforcement:</b>
                                    Recognise achievements and use a system of
                                    rewards to acknowledge their
                                    accomplishments. This could be through
                                    praise, certificates, or tangible rewards
                                    like extra playtime. Regularly acknowledge
                                    their efforts and successes, both big and
                                    small, to boost their confidence.
                                </li>

                                <li>
                                    <b>Encourage Creative Expression:</b>
                                    Incorporate creativity in their learning
                                    environment. Offer creative outlets to keep
                                    {{ childName }} engaged by integrating art,
                                    music, drama, and other creative projects
                                    into the curriculum. Allow them to present
                                    their work in expressive ways, celebrating
                                    their creativity and unique ideas.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="effective-communication p-6 rounded-lg mb-6">
                    <h2 class="text-3xl font-bold mb-2800">
                        Encouraging {{ childName }} as a Dominant-Influential
                        (DI) Student
                    </h2>

                    <div class="row">
                        <div class="col-6 mt-3">
                            <ul class="list-none list-inside mb-6">
                                <li>
                                    <b>Positive Reinforcement:</b> Celebrate
                                    their social successes and leadership
                                    efforts. Regularly acknowledge
                                    {{ childName }} ’s enthusiasm, creativity,
                                    and social skills to build their confidence
                                    and motivate them to continue excelling.
                                </li>
                                <li>
                                    <b>Creative Outlets:</b> Provide
                                    opportunities for creative expression.
                                    Encourage {{ childName }} to engage in
                                    activities like drama, music, or art where
                                    they can showcase their creativity and
                                    leadership skills.
                                </li>
                                <li>
                                    <b>Interactive and Fun Learning:</b>
                                    Incorporate interactive and fun learning
                                    activities that involve social interaction.
                                    Use games, group projects, and collaborative
                                    tasks to keep them engaged and excited about
                                    learning.
                                </li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <div class="flex justify-center items-center mb-4">
                                <img
                                    class="w-80 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page21.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <div
                                    class="effective-communication p-6 rounded-lg mb-6"
                                >
                                    <h2 class="text-3xl font-bold mb-2800">
                                        Communicating with {{ childName }}
                                    </h2>

                                    <ul class="list-none list-inside mb-6">
                                        <li>
                                            <b>Be Enthusiastic and Engaging:</b>
                                            Use lively and energetic language to
                                            capture their interest. DI students
                                            respond well to enthusiastic
                                            communication that matches their own
                                            energy levels.
                                        </li>
                                        <li>
                                            <b>Encourage Group Discussions:</b>
                                            Facilitate group discussions where
                                            they can express their thoughts and
                                            listen to others. DI students thrive
                                            in interactive environments where
                                            they can engage with their peers.
                                        </li>
                                        <li>
                                            <b
                                                >Provide Constructive
                                                Feedback:</b
                                            >
                                            Offer specific, actionable feedback
                                            that focuses on their strengths
                                            while gently addressing areas for
                                            improvement. DI students benefit
                                            from clear and constructive
                                            guidance.
                                        </li>
                                        <li>
                                            <b>Reinforce Positive Behaviour:</b>
                                            Reinforce positive behaviour and
                                            achievements with praise and
                                            recognition. This helps them stay
                                            motivated and feel appreciated for
                                            their efforts.
                                        </li>
                                    </ul>
                                    <p>
                                        By utilising these communication tips,
                                        you can effectively motivate, encourage,
                                        and guide {{ childName }} as a
                                        Dominant-Influential (DI) student,
                                        helping them reach their full potential.
                                    </p>
                                </div>
                            </div>
                        </li>
                    </div>
                    <div class="col-6 effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div class="flex justify-center items-center">
                                <img
                                    class="w-90 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page17.svg'"
                                    alt=""
                                />
                            </div>
                        </li>
                    </div>
                </div>


            </div>
        </div>

        <!-- For I Style Type -->
        <div id="I" v-if="style == 'I'">
            <div class="supporting-at-home p-6 mb-2">
                <h2 class="text-3xl font-bold mb-2">Classroom Strategies</h2>

                <ul class="list-none list-inside mb-1">
                    <div class="row">
                        <div class="col-6">
                            <li>
                                <strong>Leverage Social Skills:</strong>
                                <ul class="list-none list-inside ml-6 mb-2">
                                    <li>
                                        Incorporate group projects and
                                        collaborative activities where
                                        {{ childName }} can interact and work
                                        with classmates.
                                    </li>
                                    <li>
                                        Encourage {{ childName }} to help
                                        classmates understand concepts they
                                        excel in.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <strong>Provide Creative Outlets:</strong>
                                <ul class="list-none list-inside ml-6 mb-2">
                                    <li>
                                        Integrate arts, drama, and other
                                        creative projects into the curriculum to
                                        allow
                                        {{ childName }} to express their
                                        creativity.
                                    </li>
                                    <li>
                                        Assign roles that cater to their
                                        strengths, such as class spokesperson or
                                        project presenter.
                                    </li>
                                </ul>
                            </li>
                        </div>
                        <div class="col-6">
                            <div class="flex justify-center items-center">
                                <img
                                    class="w-100 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page19.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                    </div>

                    <li>
                        <strong>Encourage Positive Communication:</strong>
                        <ul class="list-none list-inside ml-6 mb-2">
                            <li>
                                Implement activities that focus on developing
                                listening skills and respectful communication.
                            </li>
                            <li>
                                Facilitate open class discussions where every
                                student has a chance to speak and share their
                                ideas.
                            </li>
                        </ul>
                    </li>
                    <li>
                        <strong>Support Social Development:</strong>
                        <ul class="list-none list-inside ml-6 mb-2">
                            <li>
                                Organise social events and activities that allow
                                {{ childName }} to build and maintain
                                friendships.
                            </li>
                            <li>
                                Create opportunities for {{ childName }} to
                                participate in school clubs or teams, promoting
                                a sense of belonging and community.
                            </li>
                        </ul>
                    </li>
                </ul>

                <div class="effective-communication p-6 rounded-lg mb-6">
                    <h2 class="text-3xl font-bold mb-2800">
                        Motivating {{ childName }} as an Influential (I) Student
                    </h2>
                    <p>
                        Students with an Influential (I) style are naturally
                        motivated by social interactions, creative
                        opportunities, and positive reinforcement. Here are some
                        strategies to motivate and encourage {{ childName }} :
                    </p>

                    <div class="row">
                        <div class="col-6">
                            <div class="flex justify-center items-center mb-4">
                                <img
                                    class="w-80 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page20.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                        <div class="col-6">
                            <ul class="list-none list-inside mb-6">
                                <li>
                                    <strong
                                        >Encourage Social Connections:</strong
                                    >
                                    Influential (I) students thrive on social
                                    interactions. Encourage participation in
                                    group projects and social activities where
                                    {{ childName }} can interact with peers and
                                    build friendships.
                                </li>
                                <li>
                                    <strong
                                        >Provide Creative Opportunities:</strong
                                    >
                                    Offer creative outlets to keep
                                    {{ childName }} engaged. Integrate art,
                                    music, drama, and other creative projects
                                    into the curriculum, and allow them to
                                    present their work in expressive ways.
                                </li>
                                <li>
                                    <strong>Use Positive Reinforcement:</strong>
                                    Positive feedback and rewards are key
                                    motivators. Regularly acknowledge and
                                    celebrate
                                    {{ childName }} ’s efforts and achievements,
                                    both big and small, using praise,
                                    certificates, or tangible rewards like extra
                                    playtime.
                                </li>
                                <li>
                                    <strong>Encourage Participation:</strong>
                                    Assign roles that allow {{ childName }} to
                                    contribute to class activities, such as
                                    being the class spokesperson or event
                                    organiser. Encourage involvement in clubs,
                                    teams, or other extracurricular activities
                                    that align with their interests.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="effective-communication p-6 rounded-lg mb-6">
                    <h2 class="text-3xl font-bold mb-2800">
                        Encouraging {{ childName }} as an Influential (I)
                        Student:
                    </h2>

                    <div class="row">
                        <div class="col-6 mt-3">
                            <ul class="list-none list-inside mb-6">
                                <li>
                                    <strong>Positive Reinforcement:</strong>
                                    Regularly acknowledge {{ childName }} ’s
                                    enthusiasm and social skills. Positive
                                    reinforcement helps build their self-esteem
                                    and encourages their natural tendencies to
                                    connect with others.
                                </li>
                                <li>
                                    <strong>Creative Freedom:</strong> Provide
                                    opportunities for {{ childName }} to engage
                                    in creative activities. Allowing them to
                                    express their ideas through art, drama, or
                                    other creative outlets can nurture their
                                    imaginative abilities and keep them
                                    motivated.
                                </li>
                                <li>
                                    <strong
                                        >Opportunities for Social
                                        Interaction:</strong
                                    >
                                    Facilitate activities that allow
                                    {{ childName }} to engage with peers. This
                                    can include group projects, team sports, or
                                    social clubs, helping them to build and
                                    maintain friendships while developing their
                                    social skills.
                                </li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <div class="flex justify-center items-center mb-4">
                                <img
                                    class="w-80 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page21.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <div
                                    class="effective-communication p-6 rounded-lg mb-6"
                                >
                                    <h2 class="text-3xl font-bold mb-2800">
                                        Communicating with {{ childName }}
                                    </h2>

                                    <ul class="list-none list-inside mb-6">
                                        <li>
                                            <strong
                                                >Be Positive and
                                                Encouraging:</strong
                                            >
                                            Use affirmative language and
                                            highlight
                                            {{ childName }} ’s strengths.
                                            Influential (I) students respond
                                            well to positivity and
                                            encouragement, which helps build
                                            their confidence and motivation.
                                        </li>
                                        <li>
                                            <strong
                                                >Encourage Open
                                                Dialogue:</strong
                                            >
                                            Create an environment where
                                            {{ childName }} feels comfortable
                                            expressing their thoughts and
                                            feelings. Ask open-ended questions
                                            to engage them in discussions and
                                            show genuine interest in their
                                            ideas.
                                        </li>
                                        <li>
                                            <strong
                                                >Set Clear Expectations:</strong
                                            >
                                            Clearly define rules and
                                            expectations, using simple and
                                            direct language. Influential (I)
                                            students benefit from understanding
                                            what is expected of them and why,
                                            helping them stay focused and
                                            motivated.
                                        </li>
                                        <li>
                                            <strong
                                                >Provide Constructive
                                                Feedback:</strong
                                            >
                                            Offer specific, actionable feedback
                                            that helps
                                            {{ childName }} understand how they
                                            can improve. Focus on their
                                            strengths while gently addressing
                                            areas for growth to nurture a
                                            supportive learning environment.
                                        </li>
                                    </ul>
                                    <p>
                                        By utilising these communication tips,
                                        you can effectively motivate, encourage,
                                        and guide {{ childName }} as an
                                        Influential (I) student, helping them
                                        reach their full potential.
                                    </p>
                                </div>
                            </div>
                        </li>
                    </div>
                    <div class="col-6 effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div class="flex justify-center items-center">
                                <img
                                    class="w-90 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page17.svg'"
                                    alt=""
                                />
                            </div>
                        </li>
                    </div>
                </div>

            </div>
        </div>

        <!-- For ID Style Type -->
        <div id="ID" v-if="style == 'ID'">
            <div class="supporting-at-home p-6 mb-2">
                <h2 class="text-3xl font-bold mb-2">Classroom Strategies</h2>

                <ul class="list-none list-inside mb-1">
                    <div class="row">
                        <div class="col-6">
                            <li>
                                <strong>Leverage Social Skills:</strong>
                                <ul class="list-none list-inside ml-6 mb-2">
                                    <li>
                                        Assign {{ childName }} roles that allow
                                        them to lead projects or activities,
                                        such as group leader or class helper.
                                    </li>
                                    <li>
                                        Encourage them to mentor peers or take
                                        part in student council or other
                                        leadership opportunities.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <strong
                                    >Structured Learning Environment:</strong
                                >
                                <ul class="list-none list-inside ml-6 mb-2">
                                    <li>
                                        Provide a structured and organised
                                        classroom setting with clear
                                        expectations and routines.
                                    </li>
                                    <li>
                                        Use visual aids and schedules to help
                                        {{ childName }} stay on track and
                                        understand what is coming next.
                                    </li>
                                </ul>
                            </li>
                        </div>
                        <div class="col-6">
                            <div class="flex justify-center items-center">
                                <img
                                    class="w-100 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page19.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                    </div>

                    <li>
                        <strong>Incorporate Competitive Elements:</strong>
                        <ul class="list-none list-inside ml-6 mb-2">
                            <li>
                                Include competitive activities and games in the
                                curriculum that allow {{ childName }} to channel
                                their competitive energy positively.
                            </li>
                            <li>
                                Recognise and reward achievements to motivate
                                continued effort and improvement.
                            </li>
                        </ul>
                    </li>
                    <li>
                        <strong>Support Collaborative Learning:</strong>
                        <ul class="list-none list-inside ml-6 mb-2">
                            <li>
                                Encourage group work and collaborative projects
                                that require {{ childName }} to work with others
                                and value different perspectives.
                            </li>
                            <li>
                                Facilitate activities that build teamwork and
                                cooperation skills.
                            </li>
                        </ul>
                    </li>
                </ul>

                <div class="effective-communication p-6 rounded-lg mb-6">
                    <h2 class="text-3xl font-bold mb-2800">
                        Motivating {{ childName }} as an Influential-Dominant
                        (ID) Student
                    </h2>
                    <p>
                        Students with an Influential-Dominant (ID) style are
                        naturally motivated by leadership opportunities, social
                        interactions, and positive reinforcement. Here are some
                        strategies to motivate and encourage {{ childName }}:
                    </p>

                    <div class="row">
                        <div class="col-6">
                            <div class="flex justify-center items-center mb-4">
                                <img
                                    class="w-80 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page20.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                        <div class="col-6">
                            <ul class="list-none list-inside mb-6">
                                <li>
                                    <span class="font-semibold"
                                        >Promote Leadership Roles:</span
                                    >
                                    Provide opportunities for
                                    {{ childName }}
                                    to take on leadership roles in class
                                    projects, activities, or group discussions.
                                    This helps them feel valued and gives them a
                                    chance to exercise their leadership skills.
                                </li>
                                <li>
                                    <span class="font-semibold"
                                        >Encourage Social Interactions:</span
                                    >
                                    Create an environment where
                                    {{ childName }} can interact with peers
                                    through group projects and social
                                    activities. Encourage them to build
                                    friendships and work collaboratively with
                                    others.
                                </li>
                                <li>
                                    <span class="font-semibold"
                                        >Use Positive Reinforcement:</span
                                    >
                                    Regularly acknowledge and celebrate
                                    {{ childName }} ’s efforts and achievements.
                                    Positive feedback and rewards, such as
                                    praise, certificates, or tangible rewards,
                                    can boost their confidence and motivation.
                                </li>
                                <li>
                                    <span class="font-semibold"
                                        >Provide Creative and Challenging
                                        Opportunities:</span
                                    >
                                    Offer activities that combine creativity
                                    with challenges, such as leading a team in a
                                    creative project or organising an event.
                                    This keeps them engaged and allows them to
                                    utilise both their creative and leadership
                                    skills.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="effective-communication p-6 rounded-lg mb-6">
                    <h2 class="text-3xl font-bold mb-2800">
                        Encouraging {{ childName }} as an Influential-Dominant
                        (ID) Student:
                    </h2>

                    <div class="row">
                        <div class="col-6 mt-3">
                            <ul class="list-none list-inside mb-6">
                                <li>
                                    <strong>Positive Reinforcement:</strong>
                                    Regularly acknowledge {{ childName }} ’s
                                    efforts and successes. Positive
                                    reinforcement helps build their self-esteem
                                    and motivation. Highlight their leadership
                                    abilities and enthusiasm.
                                </li>
                                <li>
                                    <strong>Constructive Feedback:</strong>
                                    Provide specific, actionable feedback that
                                    helps {{ childName }} understand how they
                                    can improve. Focus on their strengths while
                                    gently addressing areas for growth, creating
                                    a supportive learning environment.
                                </li>
                                <li>
                                    <strong
                                        >Encourage Social
                                        Responsibility:</strong
                                    >
                                    Involve {{ childName }} in activities that
                                    promote social responsibility and community
                                    involvement. This helps them understand the
                                    importance of contributing to their
                                    community and the positive impact they can
                                    have on others.
                                </li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <div class="flex justify-center items-center mb-4">
                                <img
                                    class="w-80 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page21.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <div
                                    class="effective-communication p-6 rounded-lg mb-6"
                                >
                                    <h2 class="text-3xl font-bold mb-2800">
                                        Communicating with {{ childName }}
                                    </h2>

                                    <ul class="list-none list-inside mb-6">
                                        <li>
                                            <strong
                                                >Be Direct and Clear:</strong
                                            >
                                            Use straightforward language when
                                            giving instructions or discussing
                                            expectations. Avoid ambiguous or
                                            overly complex explanations. Provide
                                            clear and concise feedback on their
                                            behaviour and performance, helping
                                            them understand what they did well
                                            and where they can improve.
                                        </li>
                                        <li>
                                            <strong
                                                >Encourage Open
                                                Dialogue:</strong
                                            >
                                            Create an environment where
                                            {{ childName }} feels comfortable
                                            expressing their thoughts and
                                            opinions. Show genuine interest in
                                            their ideas and listen actively. Ask
                                            open-ended questions to encourage
                                            them to share more about their
                                            experiences and feelings, nurturing
                                            a sense of being heard and valued.
                                        </li>
                                        <li>
                                            <strong
                                                >Set Boundaries and
                                                Expectations:</strong
                                            >
                                            Clearly define rules and
                                            consequences, ensuring that
                                            {{ childName }} understands what is
                                            expected of them. Use simple and
                                            direct language. Consistently
                                            enforce boundaries while allowing
                                            for some flexibility when
                                            appropriate, helping them learn the
                                            importance of structure and
                                            discipline.
                                        </li>
                                        <li>
                                            <strong
                                                >Use Positive
                                                Reinforcement:</strong
                                            >
                                            Regularly acknowledge and celebrate
                                            both big and small successes to
                                            boost their confidence and
                                            motivation. Focus on their strengths
                                            and achievements. Encourage them to
                                            keep striving for improvement by
                                            setting new and challenging goals
                                            together, motivating them to reach
                                            their full potential.
                                        </li>
                                    </ul>
                                    <p>
                                        By utilising these communication tips,
                                        you can effectively motivate, encourage,
                                        and guide {{ childName }} as an
                                        Influential-Dominant (ID) student,
                                        helping them reach their full potential.
                                    </p>
                                </div>
                            </div>
                        </li>
                    </div>
                    <div class="col-6 effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div class="flex justify-center items-center">
                                <img
                                    class="w-90 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page17.svg'"
                                    alt=""
                                />
                            </div>
                        </li>
                    </div>
                </div>


            </div>
        </div>

        <!-- For IS Style Type -->
        <div id="IS" v-if="style == 'IS'">
            <div class="supporting-at-home p-6 mb-2">
                <h2 class="text-3xl font-bold mb-2">Classroom Strategies</h2>

                <ul class="list-none list-inside mb-1">
                    <div class="row">
                        <div class="col-6">
                            <li>
                                <strong>Leverage Social Skills:</strong>
                                <ul class="list-none list-inside ml-6 mb-2">
                                    <li>
                                        Assign {{ childName }} roles that
                                        involve interacting with classmates,
                                        such as group leader or peer mentor.
                                    </li>
                                    <li>
                                        Encourage them to participate in group
                                        projects where their social skills can
                                        help build team cohesion.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <strong>Promote Creativity:</strong>
                                <ul class="list-none list-inside ml-6 mb-2">
                                    <li>
                                        Incorporate creative activities into the
                                        curriculum, such as art projects,
                                        storytelling sessions, or drama
                                        exercises.
                                    </li>
                                    <li>
                                        Provide opportunities for
                                        {{ childName }} to express their
                                        creativity, whether through visual arts,
                                        music, or writing.
                                    </li>
                                </ul>
                            </li>
                        </div>
                        <div class="col-6">
                            <div class="flex justify-center items-center">
                                <img
                                    class="w-100 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page19.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                    </div>

                    <li>
                        <strong>Supportive Learning Environment:</strong>
                        <ul class="list-none list-inside ml-6 mb-2">
                            <li>
                                Create a classroom atmosphere that is welcoming
                                and inclusive, where all students feel valued
                                and supported.
                            </li>
                            <li>
                                Use positive reinforcement to encourage
                                {{ childName }} ’s supportive behaviour, such as
                                helping peers or contributing to a positive
                                classroom environment.
                            </li>
                        </ul>
                    </li>
                    <li>
                        <strong>Teach Organisational Skills:</strong>
                        <ul class="list-none list-inside ml-6 mb-2">
                            <li>
                                Help {{ childName }} develop organisational
                                skills by using visual aids and checklists to
                                keep track of assignments and tasks.
                            </li>
                            <li>
                                Encourage them to maintain a tidy and organised
                                workspace, both in the classroom and at home.
                            </li>
                        </ul>
                    </li>
                </ul>

                <div class="effective-communication p-6 rounded-lg mb-6">
                    <h2 class="text-3xl font-bold mb-2800">
                        Motivating {{ childName }} as an Influential-Supportive
                        (IS) Student
                    </h2>
                    <p>
                        Students with an Influential-Supportive (IS) style are
                        naturally motivated by social interactions, creative
                        opportunities, and positive reinforcement. Here are some
                        strategies to motivate and encourage {{ childName }} :
                    </p>

                    <div class="row">
                        <div class="col-6">
                            <div class="flex justify-center items-center mb-4">
                                <img
                                    class="w-80 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page20.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                        <div class="col-6">
                            <ul class="list-none list-inside mb-6">
                                <li>
                                    <span class="font-semibold"
                                        >Encourage Social Connections:</span
                                    >
                                    Encourage participation in group projects
                                    and social activities where
                                    {{ childName }} can interact with peers and
                                    build friendships. This helps them feel
                                    connected and engaged.
                                </li>
                                <li>
                                    <span class="font-semibold"
                                        >Provide Creative Outlets:</span
                                    >
                                    Offer creative projects and activities that
                                    allow {{ childName }} to express their
                                    imagination and ideas. Integrate art, music,
                                    drama, and other creative endeavours into
                                    the curriculum.
                                </li>
                                <li>
                                    <span class="font-semibold"
                                        >Use Positive Reinforcement:</span
                                    >
                                    Recognise and celebrate
                                    {{ childName }}
                                    ’s efforts and achievements regularly. Use
                                    praise, certificates, or tangible rewards to
                                    acknowledge both big and small successes.
                                </li>
                                <li>
                                    <span class="font-semibold"
                                        >Encourage Empathy and
                                        Cooperation:</span
                                    >
                                    Promote activities that require teamwork and
                                    cooperation, emphasising the importance of
                                    understanding and supporting others. This
                                    helps
                                    {{ childName }} develop strong social and
                                    empathetic skills.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="effective-communication p-6 rounded-lg mb-6">
                    <h2 class="text-3xl font-bold mb-2800">
                        Encouraging {{ childName }} as an Influential-Supportive
                        (IS) Student:
                    </h2>

                    <div class="row">
                        <div class="col-6 mt-3">
                            <ul class="list-none list-inside mb-6">
                                <li>
                                    <strong>Positive Reinforcement:</strong>
                                    Regularly acknowledge {{ childName }} ’s
                                    efforts and successes. Positive
                                    reinforcement helps build their self-esteem
                                    and motivation. Highlight their ability to
                                    bring people together and their supportive
                                    nature.
                                </li>
                                <li>
                                    <strong>Constructive Feedback:</strong>
                                    Provide specific, actionable feedback that
                                    helps {{ childName }} understand how they
                                    can improve. Focus on their strengths while
                                    gently addressing areas for growth,
                                    promoting a supportive learning environment.
                                </li>
                                <li>
                                    <strong>Role Models:</strong> Introduce
                                    {{ childName }} to positive role models who
                                    demonstrate empathy, creativity, and strong
                                    social skills. Share stories of individuals
                                    who excel in both social and creative
                                    fields, inspiring them to develop these
                                    skills.
                                </li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <div class="flex justify-center items-center mb-4">
                                <img
                                    class="w-80 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page21.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <div
                                    class="effective-communication p-6 rounded-lg mb-6"
                                >
                                    <h2 class="text-3xl font-bold mb-2800">
                                        Communicating with {{ childName }}
                                    </h2>

                                    <ul class="list-none list-inside mb-6">
                                        <li>
                                            <strong
                                                >Be Positive and
                                                Encouraging:</strong
                                            >
                                            Use kind and supportive language to
                                            recognise {{ childName }} ’s efforts
                                            and strengths. This boosts their
                                            confidence and encourages them to
                                            keep trying their best.
                                        </li>
                                        <li>
                                            <strong
                                                >Encourage Open
                                                Dialogue:</strong
                                            >
                                            Create a safe space for
                                            {{ childName }} to share their
                                            thoughts and feelings. Let them know
                                            their opinions are valued and
                                            respected.
                                        </li>
                                        <li>
                                            <strong
                                                >Set Clear Expectations:</strong
                                            >
                                            Clearly explain rules and
                                            expectations in a gentle manner.
                                            Ensure
                                            {{ childName }} understands what is
                                            expected of them and why, helping
                                            them stay focused and motivated.
                                        </li>
                                        <li>
                                            <strong>Use Visual Aids:</strong>
                                            Incorporate visual aids like charts
                                            or diagrams to explain tasks and
                                            rules. This helps
                                            {{ childName }} understand and
                                            remember what they need to do.
                                        </li>
                                    </ul>
                                    <p>
                                        By utilising these communication tips,
                                        you can effectively motivate, encourage,
                                        and guide {{ childName }} as an
                                        Influential-Supportive (IS) student,
                                        helping them reach their full potential.
                                    </p>
                                </div>
                            </div>
                        </li>
                    </div>
                    <div class="col-6 effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div class="flex justify-center items-center">
                                <img
                                    class="w-90 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page17.svg'"
                                    alt=""
                                />
                            </div>
                        </li>
                    </div>
                </div>

            </div>
        </div>

        <!-- For S Style Type -->
        <div id="S" v-if="style == 'S'">
            <div class="supporting-at-home p-6 mb-2">
                <h2 class="text-3xl font-bold mb-2">Classroom Strategies</h2>

                <ul class="list-none list-inside mb-1">
                    <div class="row">
                        <div class="col-6">
                            <li>
                                <strong>Leverage Social Skills:</strong>
                                <ul class="list-none list-inside ml-6 mb-2">
                                    <li>
                                        Encourage {{ childName }} to participate
                                        in group projects and collaborative
                                        activities where they can support and
                                        work with their classmates.
                                    </li>
                                    <li>
                                        Assign roles that involve helping
                                        others, such as classroom helper or peer
                                        tutor.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <strong>Provide Consistent Structure:</strong>
                                <ul class="list-none list-inside ml-6 mb-2">
                                    <li>
                                        Maintain a structured and predictable
                                        classroom environment with clear
                                        routines and expectations.
                                    </li>
                                    <li>
                                        Use visual aids and schedules to help
                                        {{ childName }} understand what to
                                        expect and stay organised.
                                    </li>
                                </ul>
                            </li>
                        </div>
                        <div class="col-6">
                            <div class="flex justify-center items-center">
                                <img
                                    class="w-100 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page19.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                    </div>

                    <li>
                        <strong>Promote a Supportive Environment:</strong>
                        <ul class="list-none list-inside ml-6 mb-2">
                            <li>
                                Create a classroom atmosphere that values
                                cooperation and teamwork. Encourage students to
                                work together and support one another.
                            </li>
                            <li>
                                Implement activities that promote empathy and
                                understanding among students, such as
                                team-building exercises and cooperative learning
                                tasks.
                            </li>
                        </ul>
                    </li>
                    <li>
                        <strong>Encourage Leadership Development:</strong>
                        <ul class="list-none list-inside ml-6 mb-2">
                            <li>
                                Offer opportunities for {{ childName }} to take
                                on small leadership roles in group activities or
                                projects.
                            </li>
                            <li>
                                Provide guidance and support to help them build
                                confidence in leading others and making
                                decisions.
                            </li>
                        </ul>
                    </li>
                </ul>

                <div class="effective-communication p-6 rounded-lg mb-6">
                    <h2 class="text-3xl font-bold mb-2800">
                        Motivating {{ childName }} as a Supportive (S) Student:
                    </h2>

                    <p>
                        Students with a Supportive (S) style are naturally
                        motivated by a sense of belonging, stability, and
                        opportunities to help others. Here are some strategies
                        to motivate and encourage {{ childName }} :
                    </p>

                    <div class="row">
                        <div class="col-6 mt-3">
                            <ul class="list-none list-inside mb-6">
                                <li>
                                    <strong>Encourage Teamwork:</strong>
                                    Supportive (S) students thrive in
                                    cooperative environments. Encourage
                                    participation in group projects and
                                    activities where {{ childName }} can work
                                    with peers and build a sense of camaraderie.
                                </li>
                                <li>
                                    <strong
                                        >Provide a Stable Environment:</strong
                                    >
                                    Create a consistent and predictable
                                    classroom routine. Supportive (S) students
                                    feel more secure and focused when they know
                                    what to expect.
                                </li>
                                <li>
                                    <strong>Use Positive Reinforcement:</strong>
                                    Recognise and celebrate {{ childName }} ’s
                                    efforts to support and help others. Use
                                    praise, certificates, or small rewards to
                                    acknowledge their contributions.
                                </li>
                                <li>
                                    <strong
                                        >Encourage Leadership
                                        Opportunities:</strong
                                    >
                                    Provide opportunities for {{ childName }} to
                                    take on leadership roles in group settings,
                                    such as team leader or project coordinator.
                                    Offer guidance and encouragement to help
                                    them develop these skills.
                                </li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <div class="flex justify-center items-center mb-4">
                                <img
                                    class="w-80 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page21.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="effective-communication p-6 rounded-lg mb-6">
                    <h2 class="text-3xl font-bold mb-2800">
                        Encouraging {{ childName }} as a Supportive (S) Student
                    </h2>
                    <div class="row">
                        <div class="col-6">
                            <div class="flex justify-center items-center mb-4">
                                <img
                                    class="w-80 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page20.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                        <div class="col-6">
                            <ul class="list-none list-inside mb-6">
                                <li>
                                    <span class="font-semibold"
                                        >Positive Reinforcement:</span
                                    >
                                    Regularly acknowledge {{ childName }} ’s
                                    efforts to help and support others. Positive
                                    reinforcement helps build their self-esteem
                                    and encourages their natural tendencies to
                                    be dependable and nurturing.
                                </li>
                                <li>
                                    <span class="font-semibold"
                                        >Opportunities for Teamwork:</span
                                    >
                                    Provide opportunities for {{ childName }} to
                                    work in group settings. This can include
                                    group projects, team-based activities, or
                                    collaborative learning tasks.
                                </li>
                                <li>
                                    <span class="font-semibold"
                                        >Stable and Predictable Routine:</span
                                    >
                                    Create a classroom environment with a
                                    consistent and predictable routine. This
                                    helps Supportive (S) students feel more
                                    secure and focused.
                                </li>
                                <li>
                                    <span class="font-semibold"
                                        >Encourage Leadership in Small
                                        Groups:</span
                                    >
                                    Encourage {{ childName }} to take on
                                    leadership roles in small group settings,
                                    such as being a team leader or project
                                    coordinator.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <div
                                    class="effective-communication p-6 rounded-lg mb-6"
                                >
                                    <h2 class="text-3xl font-bold mb-2800">
                                        Communicating with {{ childName }}
                                    </h2>

                                    <ul class="list-none list-inside mb-6">
                                        <li>
                                            <strong
                                                >Be Supportive and
                                                Understanding:</strong
                                            >
                                            Use reassuring language and
                                            highlight
                                            {{ childName }} ’s strengths.
                                            Supportive (S) students respond well
                                            to understanding and encouragement,
                                            which helps build their confidence
                                            and sense of security.
                                        </li>
                                        <li>
                                            <strong
                                                >Encourage Open
                                                Dialogue:</strong
                                            >
                                            Create a safe and welcoming
                                            environment where
                                            {{ childName }} feels comfortable
                                            expressing their thoughts and
                                            feelings. Ask open-ended questions
                                            to engage them in discussions and
                                            show genuine interest in their
                                            ideas.
                                        </li>
                                        <li>
                                            <strong
                                                >Set Clear and Consistent
                                                Expectations:</strong
                                            >
                                            Clearly define rules and
                                            expectations, using simple and
                                            direct language. Supportive (S)
                                            students benefit from understanding
                                            what is expected of them and having
                                            consistent guidelines to follow.
                                        </li>
                                        <li>
                                            <strong
                                                >Provide Gentle
                                                Guidance:</strong
                                            >
                                            Offer specific, actionable feedback
                                            that helps {{ childName }}
                                            understand how they can improve.
                                            Focus on their strengths while
                                            gently addressing areas for growth
                                            to encourage a supportive learning
                                            environment.
                                        </li>
                                    </ul>
                                    <p>
                                        By utilising these communication tips,
                                        you can effectively motivate, encourage,
                                        and guide {{ childName }} as a
                                        Supportive (S) student, helping them
                                        reach their full potential.
                                    </p>
                                </div>
                            </div>
                        </li>
                    </div>
                    <div class="col-6 effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div class="flex justify-center items-center">
                                <img
                                    class="w-90 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page17.svg'"
                                    alt=""
                                />
                            </div>
                        </li>
                    </div>
                </div>


            </div>
        </div>

        <!-- For SC Style Type -->
        <div id="SC" v-if="style == 'SC'">
            <div class="supporting-at-home p-6 mb-2">
                <h2 class="text-3xl font-bold mb-2">Classroom Strategies</h2>

                <ul class="list-none list-inside mb-1">
                    <div class="row">
                        <div class="col-6">
                            <li>
                                <strong
                                    >Leverage Thoughtfulness and
                                    Reliability:</strong
                                >
                                <ul class="list-none list-inside ml-6 mb-2">
                                    <li>
                                        Assign {{ childName }} roles that allow
                                        them to assist with organising class
                                        activities or supporting peers. Their
                                        reliability makes them great helpers and
                                        role models.
                                    </li>
                                    <li>
                                        Encourage them to participate in tasks
                                        that require careful planning and
                                        attention to detail, such as organising
                                        classroom materials or managing class
                                        projects.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <strong
                                    >Promote Calm and Focused Learning:</strong
                                >
                                <ul class="list-none list-inside ml-6 mb-2">
                                    <li>
                                        Create a structured and calm classroom
                                        environment where {{ childName }} can
                                        concentrate and feel secure.
                                    </li>
                                    <li>
                                        Use visual aids and clear instructions
                                        to help them understand and follow
                                        classroom routines and expectations.
                                    </li>
                                </ul>
                            </li>
                        </div>
                        <div class="col-6">
                            <div class="flex justify-center items-center">
                                <img
                                    class="w-100 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page19.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                    </div>

                    <li>
                        <strong>Support Social Interaction:</strong>
                        <ul class="list-none list-inside ml-6 mb-2">
                            <li>
                                Encourage {{ childName }} to engage in group
                                activities where they can interact with
                                classmates and build strong relationships.
                            </li>
                            <li>
                                Provide opportunities for them to take on
                                supportive roles within group projects,
                                emphasising the importance of teamwork and
                                cooperation.
                            </li>
                        </ul>
                    </li>
                    <li>
                        <strong>Build Confidence and Decision-Making:</strong>
                        <ul class="list-none list-inside ml-6 mb-2">
                            <li>
                                Give {{ childName }} opportunities to make
                                decisions in the classroom, starting with small
                                choices and gradually moving to bigger ones.
                            </li>
                            <li>
                                Celebrate their successes and praise their
                                efforts, helping them build confidence and trust
                                in their abilities.
                            </li>
                        </ul>
                    </li>
                </ul>

                <div class="effective-communication p-6 mb-6">
                    <h2 class="text-3xl font-bold mb-2800">
                        Motivating {{ childName }} as a Supportive-Cautious (SC)
                        Student:
                    </h2>

                    <p>
                        Students with a Supportive-Cautious (SC) style are
                        naturally motivated by stability, careful planning, and
                        opportunities to help others. Here are some strategies
                        to motivate and encourage {{ childName }} :
                    </p>

                    <div class="row">
                        <div class="col-6 mt-3">
                            <ul class="list-none list-inside mb-6">
                                <li>
                                    <strong
                                        >Encourage Teamwork and Social
                                        Interaction:</strong
                                    >
                                    Encourage participation in group projects
                                    and activities where {{ childName }} can
                                    work with peers and build a sense of
                                    camaraderie. Create opportunities for them
                                    to support and help others, enhancing their
                                    natural supportive nature.
                                </li>
                                <li>
                                    <strong
                                        >Provide a Stable and Predictable
                                        Environment:</strong
                                    >
                                    Establish a consistent and predictable
                                    classroom routine. Supportive-Cautious (SC)
                                    students feel more secure and focused when
                                    they know what to expect. Minimise chaotic
                                    situations and sudden changes to help them
                                    feel comfortable and at ease.
                                </li>
                                <li>
                                    <strong>Use Positive Reinforcement:</strong>
                                    Recognise and celebrate {{ childName }} ’s
                                    efforts to support and help others. Use
                                    praise, certificates, or small rewards to
                                    acknowledge their contributions. Highlight
                                    their reliability and thoughtfulness,
                                    reinforcing their positive behaviours and
                                    efforts.
                                </li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <div class="flex justify-center items-center mb-4">
                                <img
                                    class="w-80 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page21.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                    </div>
                    <ul class="list-none list-inside mb-6">
                        <li>
                            <strong>Create Leadership Opportunities:</strong>
                            Provide opportunities for {{ childName }} to take on
                            leadership roles in group settings, such as team
                            leader or project coordinator. Offer guidance and
                            encouragement to help them develop these skills.
                            Encourage them to share their ideas and opinions in
                            class discussions, building their confidence in
                            decision-making and leadership.
                        </li>
                    </ul>
                </div>

                <div class="effective-communication p-6 rounded-lg mb-6">
                    <h2 class="text-3xl font-bold mb-2800">
                        Encouraging {{ childName }} as a Supportive-Cautious
                        (SC) Student
                    </h2>
                    <div class="row">
                        <div class="col-6">
                            <div class="flex justify-center items-center mb-4">
                                <img
                                    class="w-80 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page20.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                        <div class="col-6">
                            <ul class="list-none list-inside mb-6">
                                <li>
                                    <strong>Positive Reinforcement:</strong>
                                    Regularly acknowledge {{ childName }} ’s
                                    efforts and successes. Positive
                                    reinforcement helps build their self-esteem
                                    and motivation. Highlight their
                                    thoughtfulness, reliability, and supportive
                                    nature.
                                </li>
                                <li>
                                    <strong>Constructive Feedback:</strong>
                                    Provide specific, actionable feedback that
                                    helps
                                    {{ childName }}
                                    understand how they can improve. Focus on
                                    their strengths while gently addressing
                                    areas for growth, nurturing a supportive
                                    learning environment.
                                </li>
                                <li>
                                    <strong>Role Models:</strong> Introduce
                                    {{ childName }} to positive role models who
                                    demonstrate careful planning, reliability,
                                    and empathy. Share stories of individuals
                                    who excel in both thoughtful and supportive
                                    roles, inspiring them to develop these
                                    skills.
                                </li>
                            </ul>
                        </div>
                        <ul class="list- list-inside mb-6">
                            <li>
                                <strong
                                    >Encourage Social Responsibility:</strong
                                >
                                Involve {{ childName }} in activities that
                                promote social responsibility and community
                                involvement. This helps them understand the
                                importance of contributing to their community
                                and the positive impact they can have on others.
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <div
                                    class="effective-communication p-6 rounded-lg mb-6"
                                >
                                    <h2 class="text-3xl font-bold mb-2800">
                                        Communicating with {{ childName }}
                                    </h2>

                                    <ul class="list-none list-inside mb-6">
                                        <li>
                                            <strong
                                                >Encourage Open
                                                Dialogue:</strong
                                            >
                                            Create an environment where
                                            {{ childName }} feels comfortable
                                            expressing their thoughts and
                                            feelings. Show genuine interest in
                                            their ideas and listen actively. Ask
                                            open-ended questions to encourage
                                            them to share more about their
                                            experiences and feelings, promoting
                                            a sense of being heard and valued.
                                        </li>
                                        <li>
                                            <strong
                                                >Set Gentle Boundaries and
                                                Expectations:</strong
                                            >
                                            Clearly define rules and
                                            expectations in a gentle and
                                            supportive manner. Explain the
                                            reasons behind rules and how they
                                            help everyone, helping
                                            {{ childName }} understand and
                                            follow them more easily. Provide
                                            gentle reminders about the
                                            boundaries and expectations, helping
                                            them stay on track without feeling
                                            criticised.
                                        </li>
                                        <li>
                                            <strong
                                                >Use Visual and Interactive
                                                Aids:</strong
                                            >
                                            Incorporate visual aids like charts,
                                            pictures, or storyboards to explain
                                            tasks and expectations. This helps
                                            {{ childName }} understand and
                                            remember what they need to do.
                                            Engage them in interactive
                                            discussions where they can ask
                                            questions and share their thoughts,
                                            reinforcing their understanding and
                                            involvement.
                                        </li>
                                        <li>
                                            <strong
                                                >Practice Empathetic
                                                Listening:</strong
                                            >
                                            Show empathy by actively listening
                                            to
                                            {{ childName }} and acknowledging
                                            their feelings. Reflect back what
                                            they say to show you understand and
                                            care about their experiences.
                                            Encourage them to listen to others
                                            as well, promoting mutual respect
                                            and understanding in conversations.
                                        </li>
                                    </ul>
                                    <p>
                                        By utilising these communication tips,
                                        you can effectively motivate, encourage,
                                        and guide {{ childName }} as a
                                        Supportive-Cautious (SC) student,
                                        helping them reach their full potential.
                                    </p>
                                </div>
                            </div>
                        </li>
                    </div>
                    <div class="col-6 effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div class="flex justify-center items-center">
                                <img
                                    class="w-90 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page17.svg'"
                                    alt=""
                                />
                            </div>
                        </li>
                        <div
                            data-v-39cdb3b5=""
                            class="flex justify-center items-center"
                        >
                            <img
                                data-v-39cdb3b5=""
                                class="w-120 m-10 h-auto object-contain"
                                src="/images/reports-svg-images/Page 12 newb.svg"
                                alt=""
                            />
                        </div>
                        <div
                            data-v-c08108fc=""
                            class="flex justify-center items-center mb-4"
                        >
                            <img
                                data-v-c08108fc=""
                                class="w-80 h-auto object-contain"
                                src="/images/reports-svg-images/Page20.svg"
                                alt=""
                            />
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <!-- For SI Style Type -->
        <div id="SI" v-if="style == 'SI'">
            <div class="supporting-at-home p-6 mb-2">
                <h2 class="text-3xl font-bold mb-2">Classroom Strategies</h2>

                <ul class="list-none list-inside mb-1">
                    <div class="row">
                        <div class="col-6">
                            <li>
                                <strong>Leverage Social Skills:</strong>
                                <ul class="list-none list-inside ml-6 mb-2">
                                    <li>
                                        Assign {{ childName }} roles that
                                        involve interacting with classmates,
                                        such as group leader or peer mentor.
                                    </li>
                                    <li>
                                        Encourage them to participate in group
                                        projects where their social skills can
                                        help build team cohesion.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <strong>Promote Creativity:</strong>
                                <ul class="list-none list-inside ml-6 mb-2">
                                    <li>
                                        Incorporate creative activities into the
                                        curriculum, such as art projects,
                                        storytelling sessions, or drama
                                        exercises.
                                    </li>
                                    <li>
                                        Provide opportunities for
                                        {{ childName }} to express their
                                        creativity, whether through visual arts,
                                        music, or writing.
                                    </li>
                                </ul>
                            </li>
                        </div>
                        <div class="col-6">
                            <div class="flex justify-center items-center">
                                <img
                                    class="w-100 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page19.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                    </div>

                    <li>
                        <strong>Supportive Learning Environment:</strong>
                        <ul class="list-none list-inside ml-6 mb-2">
                            <li>
                                Create a classroom atmosphere that is welcoming
                                and inclusive, where all students feel valued
                                and supported.
                            </li>
                            <li>
                                Use positive reinforcement to encourage
                                {{ childName }} ’s supportive behaviour, such as
                                helping peers or contributing to a positive
                                classroom environment.
                            </li>
                        </ul>
                    </li>
                    <li>
                        <strong>Teach Organisational Skills:</strong>
                        <ul class="list-none list-inside ml-6 mb-2">
                            <li>
                                Help {{ childName }} develop organisational
                                skills by using visual aids and checklists to
                                keep track of assignments and tasks.
                            </li>
                            <li>
                                Encourage them to maintain a tidy and organised
                                workspace, both in the classroom and at home.
                            </li>
                        </ul>
                    </li>
                </ul>

                <div class="effective-communication p-6 mb-6">
                    <h2 class="text-3xl font-bold mb-2800">
                        Motivating {{ childName }} as a Supportive-Influential
                        (SI) Student:
                    </h2>

                    <p>
                        Students with a Supportive-Influential (SI) style are
                        naturally motivated by social connections, opportunities
                        to help others, and creative expression. Here are some
                        strategies to motivate and encourage {{ childName }} :
                    </p>

                    <div class="row">
                        <div class="col-6 mt-3">
                            <ul class="list-none list-inside mb-6">
                                <li>
                                    <strong>Promote Social Connections:</strong>
                                    Encourage participation in group projects
                                    and social activities where
                                    {{ childName }} can interact with peers and
                                    build friendships. This helps them feel
                                    connected and engaged.
                                </li>
                                <li>
                                    <strong>Provide Creative Outlets:</strong>
                                    Offer creative projects and activities that
                                    allow {{ childName }} to express their
                                    imagination and ideas. Integrate art, music,
                                    drama, and other creative endeavours into
                                    the curriculum.
                                </li>
                                <li>
                                    <strong>Use Positive Reinforcement:</strong>
                                    Recognise and celebrate {{ childName }} ’s
                                    efforts and achievements regularly. Use
                                    praise, certificates, or tangible rewards to
                                    acknowledge both big and small successes.
                                </li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <div class="flex justify-center items-center mb-4">
                                <img
                                    class="w-80 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page21.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                    </div>
                    <ul class="list-none list-inside mb-6">
                        <li>
                            <strong>Encourage Empathy and Cooperation:</strong>
                            Promote activities that require teamwork and
                            cooperation, emphasising the importance of
                            understanding and supporting others. This helps
                            {{ childName }} develop strong social and empathetic
                            skills.
                        </li>
                    </ul>
                </div>

                <div class="effective-communication p-6 rounded-lg mb-6">
                    <h2 class="text-3xl font-bold mb-2800">
                        Encouraging {{ childName }} as a Supportive-Influential
                        (SI) Student
                    </h2>
                    <div class="row">
                        <div class="col-6">
                            <div class="flex justify-center items-center mb-4">
                                <img
                                    class="w-80 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page20.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                        <div class="col-6">
                            <ul class="list-none list-inside mb-6">
                                <li>
                                    <strong>Positive Reinforcement:</strong>
                                    Regularly acknowledge {{ childName }} ’s
                                    efforts and successes. Positive
                                    reinforcement helps build their self-esteem
                                    and motivation. Highlight their kindness,
                                    creativity, and ability to bring people
                                    together.
                                </li>
                                <li>
                                    <strong>Constructive Feedback:</strong>
                                    Provide specific, actionable feedback that
                                    helps {{ childName }} understand how they
                                    can improve. Focus on their strengths while
                                    gently addressing areas for growth,
                                    promoting a supportive learning environment.
                                </li>
                                <li>
                                    <strong>Role Models:</strong> Introduce
                                    {{ childName }} to positive role models who
                                    demonstrate empathy, creativity, and strong
                                    social skills. Share stories of individuals
                                    who excel in both creative and social
                                    fields, inspiring them to develop these
                                    skills.
                                </li>
                            </ul>
                        </div>
                        <ul class="list- list-inside mb-6">
                            <li>
                                <strong
                                    >Encourage Social Responsibility:</strong
                                >
                                Involve {{ childName }} in activities that
                                promote social responsibility and community
                                involvement. This helps them understand the
                                importance of contributing to their community
                                and the positive impact they can have on others.
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <div
                                    class="effective-communication p-6 rounded-lg mb-6"
                                >
                                    <h2 class="text-3xl font-bold mb-2800">
                                        Communicating with {{ childName }}
                                    </h2>

                                    <ul class="list-none list-inside mb-6">
                                        <li>
                                            <strong
                                                >Set Gentle and Clear
                                                Expectations:</strong
                                            >
                                            Clearly explain rules and
                                            expectations in a gentle and
                                            supportive manner, ensuring Kids
                                            shrihan understands what is expected
                                            of them. Provide gentle reminders
                                            about the boundaries and
                                            expectations, helping them stay on
                                            track without feeling criticised.
                                        </li>
                                        <li>
                                            <strong
                                                >Encourage Open
                                                Dialogue:</strong
                                            >
                                            Create a safe space for Kids shrihan
                                            to share their thoughts and
                                            feelings. Let them know their
                                            opinions are valued and respected.
                                            Ask open-ended questions that prompt
                                            them to share more about their day
                                            and experiences, such as What made
                                            you happy today? or Can you tell me
                                            more about that?
                                        </li>
                                        <li>
                                            <strong
                                                >Practice Empathetic
                                                Listening:</strong
                                            >
                                            Show empathy by actively listening
                                            to Kids shrihan and acknowledging
                                            their feelings. Reflect back what
                                            they say to show you understand and
                                            care about their experiences.
                                            Encourage them to listen to others
                                            as well, promoting mutual respect
                                            and understanding in conversations.
                                        </li>
                                        <li>
                                            <strong
                                                >Provide Constructive
                                                Feedback:</strong
                                            >
                                            Offer specific, constructive
                                            feedback that focuses on what they
                                            did well and how they can improve.
                                            Use a supportive tone to guide them
                                            without making them feel criticised.
                                            Encourage self-reflection by asking
                                            them how they think they can do
                                            better next time, encouraging a
                                            growth mindset.
                                        </li>
                                    </ul>
                                    <p>
                                        By utilising these communication tips,
                                        you can effectively motivate, encourage,
                                        and guide Kids shrihan as a
                                        Supportive-Influential (SI) student,
                                        helping them reach their full potential.
                                    </p>
                                </div>
                            </div>
                        </li>
                    </div>
                    <div class="col-6 effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div class="flex justify-center items-center">
                                <img
                                    class="w-90 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page17.svg'"
                                    alt=""
                                />
                            </div>
                        </li>
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
.p-6 > .row > .col-6 > h2 {
    color: rgb(55 48 163);
    font-weight: bold !important;
}

ul > li {
    margin-top: 18px;
}

p,
ul > li,
ol > li,
strong,
.text-base {
    font-size: 1.125rem;
    line-height: 1.75rem;
}

strong {
    font-size: 19px;
}

p.text-blue-500 {
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

    h2,
    h3 {
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
    name: "GuidanceForTeacherFirst",
    layout: AssessmentTypes,
    props: {
        style: String,
        childName: String,
        image: String,
    },
};
</script>
