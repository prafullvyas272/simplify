<template>
    <div class="p-6">
    <div class="p-6">
        <div class="mx-auto">
            <h1 class="font-bold mb-4 text-center">
                Personalised Recommendations for both Parents & Teachers
            </h1>
        </div>
        <div class="container mx-auto">
            <div class="flex justify-center items-center mb-4">
                <img
                    class="w-120 h-auto object-contain"
                    :src="'/images/reports-svg-images/Page24.svg'"
                    alt=""
                />
            </div>
        </div>
        <div v-if="style == 'C'" class="container mx-auto">
            <h2 class="text-3xl font-bold mb-2">
                Activities to Develop Strengths
            </h2>

            <p class="mb-4">
                Suggested Activities for {{ childName }} to Build on Their
                Strengths:
            </p>

            <!-- Activities Table -->
            <div class="max-w-full overflow-x-auto shadow-md rounded-lg mb-6">
                <div class="min-w-[600px] md:min-w-full">
                    <!-- Minimum width for mobile scroll -->
                    <table
                        class="w-full border-collapse border border-gray-300"
                    >
                        <thead>
                            <tr class="border-b">
                                <th
                                    class="border border-gray-300 px-4 py-2 text-left"
                                >
                                    Activity
                                </th>
                                <th
                                    class="border border-gray-300 px-4 py-2 text-left"
                                >
                                    Description
                                </th>
                                <th
                                    class="border border-gray-300 px-4 py-2 text-left"
                                >
                                    Purpose
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td
                                    class="border font-bold border-gray-300 px-4 py-2"
                                >
                                    Science Experiments
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Engage {{ childName }} in hands-on science
                                    experiments that require careful observation
                                    and analysis.
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    To develop analytical and problem-solving
                                    skills.
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td
                                    class="border font-bold border-gray-300 px-4 py-2"
                                >
                                    Puzzle Solving
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Provide puzzles and brainteasers that
                                    require attention to detail and logical
                                    thinking.
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    To enhance their focus and critical thinking
                                    abilities.
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td
                                    class="border font-bold border-gray-300 px-4 py-2"
                                >
                                    Detailed Artwork
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Encourage participation in art projects that
                                    require precision, such as drawing or model
                                    building.
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    To promote creativity while honing their
                                    attention to detail.
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td
                                    class="border font-bold border-gray-300 px-4 py-2"
                                >
                                    Research Projects
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Assign research projects on topics of
                                    interest where they can gather and analyse
                                    information.
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    To build their research and organisational
                                    skills.
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td
                                    class="border font-bold border-gray-300 px-4 py-2"
                                >
                                    Strategy Games
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Introduce board games or computer games that
                                    involve strategy and planning.
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    To stimulate their strategic thinking and
                                    planning skills.
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td
                                    class="border font-bold border-gray-300 px-4 py-2"
                                >
                                    Organisational Tasks
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Involve {{ childName }} in organising events
                                    or projects that require careful planning
                                    and execution.
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    To enhance their organisational and planning
                                    abilities.
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td
                                    class="border font-bold border-gray-300 px-4 py-2"
                                >
                                    Math Challenges
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Engage them in math challenges or
                                    competitions that require precision and
                                    accuracy.
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    To strengthen their mathematical and
                                    analytical skills.
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td
                                    class="border font-bold border-gray-300 px-4 py-2"
                                >
                                    Technology Projects
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Encourage involvement in technology or
                                    coding projects that require logical
                                    thinking and precision.
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    To develop their technical skills and
                                    logical thinking.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <h2 class="text-3xl font-bold mb-2">
                Exercises to Improve Areas of Growth
            </h2>

            <p class="mb-2">
                Practical Exercises for {{ childName }} to Address Areas for
                Growth:
            </p>

            <!-- Exercises List -->
            <div class="rounded-lg mb-6">
                <div class="row">
                    <div class="col-6">
                        <h2 class="text-xl font-semibold mb-2">
                            Flexibility Drills
                        </h2>
                        <ul class="list-none pl-6 space-y-2">
                            <li>
                                Engage {{ childName }} in activities that
                                require adapting to changes, such as
                                improvisational games or tasks with changing
                                rules.
                            </li>
                            <li>
                                <strong>Purpose:</strong> To help them become
                                more comfortable with uncertainty and change.
                            </li>
                        </ul>

                        <h2 class="text-xl font-semibold mb-2">
                            Social Skills Practice
                        </h2>
                        <ul class="list-none pl-6 space-y-2">
                            <li>
                                Encourage participation in group activities and
                                social clubs where {{ childName }} can interact
                                with peers and build social confidence.
                            </li>
                            <li>
                                <strong>Purpose:</strong> To enhance their
                                social interaction skills and build confidence
                                in group settings.
                            </li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center mt-4 mb-4">
                            <img
                                class="w-96 h-auto object-contain"
                                :src="'/images/reports-svg-images/Page 26ab.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <h2 class="text-xl font-semibold mb-2">
                            Decision-Making Exercises
                        </h2>
                        <ul class="list-none pl-6 space-y-2">
                            <li>
                                Provide scenarios where {{ childName }} must
                                make decisions quickly, such as timed quizzes or
                                spontaneous problem-solving activities.
                            </li>
                            <li>
                                <strong>Purpose:</strong> To improve their
                                ability to make decisions more swiftly and
                                confidently.
                            </li>
                        </ul>

                        <h2 class="text-xl font-semibold mb-2">
                            Role-Playing Scenarios
                        </h2>
                        <ul class="list-none pl-6 space-y-2">
                            <li>
                                Conduct role-playing exercises that involve
                                conflict resolution and perspective-taking.
                            </li>
                            <li>
                                <strong>Purpose:</strong> To develop empathy and
                                improve their ability to handle conflicts
                                constructively.
                            </li>
                        </ul>

                        <h2 class="text-xl font-semibold mb-2">
                            Creative Expression Activities
                        </h2>
                        <ul class="list-none pl-6 space-y-2">
                            <li>
                                Encourage involvement in activities that require
                                creative thinking and flexibility, such as art,
                                drama, or creative writing.
                            </li>
                            <li>
                                <strong>Purpose:</strong> To promote
                                adaptability and encourage thinking outside the
                                box.
                            </li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center mt-4 mb-4">
                            <img
                                class="w-96 h-auto object-contain"
                                :src="'/images/reports-svg-images/Page17.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="flex justify-center items-center mt-4 mb-4">
                            <img
                                class="w-96 h-auto object-contain"
                                :src="'/images/reports-svg-images/Page 26ab.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="col-6">
                        <h2 class="text-xl font-semibold mb-2">
                            Group Projects
                        </h2>
                        <ul class="list-none pl-6 space-y-2">
                            <li>
                                Assign group projects where {{ childName }} must
                                collaborate and communicate with others, sharing
                                responsibilities and ideas.
                            </li>
                            <li>
                                <strong>Purpose:</strong> To build teamwork
                                skills and enhance their ability to work
                                effectively with others.
                            </li>
                        </ul>

                        <h2 class="text-xl font-semibold mb-2">
                            Stress Management Techniques
                        </h2>
                        <ul class="list-none pl-6 space-y-2">
                            <li>
                                Teach {{ childName }} stress management
                                techniques such as deep breathing, meditation,
                                or yoga.
                            </li>
                            <li>
                                <strong>Purpose:</strong> To help them stay calm
                                and focused in stressful situations.
                            </li>
                        </ul>

                        <h2 class="text-xl font-semibold mb-2">
                            Public Speaking Practice
                        </h2>
                        <ul class="list-none pl-6 space-y-2">
                            <li>
                                Encourage participation in public speaking
                                activities, like presentations or debates, to
                                build confidence in expressing their ideas.
                            </li>
                            <li>
                                <strong>Purpose:</strong> To improve their
                                communication skills and reduce anxiety about
                                speaking in front of others.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <p class="mb-2">
                By incorporating these exercises into {{ childName }}’s routine,
                you can help them develop in areas where they may need growth,
                nurturing a well-rounded and resilient individual.
            </p>
        </div>

        <!-- For CD Style Type -->
        <div id="CD" v-if="style == 'CD'">
            <div class="overflow-x-auto">
                <div class="m-4">
                    <h2 class="text-3xl font-bold mb-2">
                        Activities to Develop Strengths
                    </h2>
                    <p>
                        Suggested Activities for {{ childName }} to Build on
                        Their Strengths:
                    </p>
                </div>
                <div
                    class="max-w-full overflow-x-auto shadow-md rounded-lg mb-6"
                >
                    <div class="min-w-[600px] md:min-w-full">
                        <!-- Minimum width for mobile scroll -->
                        <table
                            class="w-full border-collapse border border-gray-300"
                        >
                            <thead>
                                <tr class="bg-grey-500">
                                    <th
                                        class="border font-bold border-gray-300 px-4 py-2"
                                    >
                                        Activity
                                    </th>
                                    <th
                                        class="border border-gray-300 px-4 py-2"
                                    >
                                        Description
                                    </th>
                                    <th
                                        class="border border-gray-300 px-4 py-2"
                                    >
                                        Purpose
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Activity 1 -->
                                <tr class="hover:">
                                    <td
                                        class="border font-bold border-gray-300 px-4 py-2"
                                    >
                                        Leadership Roles
                                    </td>
                                    <td
                                        class="border border-gray-300 px-4 py-2"
                                    >
                                        Give {{ childName }} opportunities to
                                        lead group activities or projects.
                                    </td>
                                    <td
                                        class="border border-gray-300 px-4 py-2"
                                    >
                                        To develop their leadership and
                                        decision-making skills.
                                    </td>
                                </tr>
                                <!-- Activity 2 -->
                                <tr class="hover:">
                                    <td
                                        class="border font-bold border-gray-300 px-4 py-2"
                                    >
                                        Strategic Games
                                    </td>
                                    <td
                                        class="border border-gray-300 px-4 py-2"
                                    >
                                        Engage in strategy games like chess or
                                        board games that require planning and
                                        foresight.
                                    </td>
                                    <td
                                        class="border border-gray-300 px-4 py-2"
                                    >
                                        To enhance their problem-solving and
                                        strategic thinking skills.
                                    </td>
                                </tr>

                                <!-- Activity 4 -->
                                <tr class="hover:">
                                    <td
                                        class="border font-bold border-gray-300 px-4 py-2"
                                    >
                                        Detailed Projects
                                    </td>
                                    <td
                                        class="border border-gray-300 px-4 py-2"
                                    >
                                        Involve {{ childName }} in projects that
                                        require attention to detail, such as
                                        model building or detailed artwork.
                                    </td>
                                    <td
                                        class="border border-gray-300 px-4 py-2"
                                    >
                                        To strengthen their attention to detail
                                        and precision.
                                    </td>
                                </tr>
                                <!-- Activity 5 -->
                                <tr class="hover:">
                                    <td
                                        class="border font-bold border-gray-300 px-4 py-2"
                                    >
                                        Organisational Tasks
                                    </td>
                                    <td
                                        class="border border-gray-300 px-4 py-2"
                                    >
                                        Assign tasks that involve organising
                                        events or materials, such as planning a
                                        class party or organising supplies.
                                    </td>
                                    <td
                                        class="border border-gray-300 px-4 py-2"
                                    >
                                        To build their organisational and
                                        planning skills.
                                    </td>
                                </tr>
                                <!-- Activity 6 -->
                                <tr class="hover:">
                                    <td
                                        class="border font-bold border-gray-300 px-4 py-2"
                                    >
                                        Mentoring Opportunities
                                    </td>
                                    <td
                                        class="border border-gray-300 px-4 py-2"
                                    >
                                        Pair {{ childName }} with younger
                                        students to help with homework or
                                        projects.
                                    </td>
                                    <td
                                        class="border border-gray-300 px-4 py-2"
                                    >
                                        To encourage empathy and leadership
                                        through mentorship.
                                    </td>
                                </tr>
                                <!-- Activity 7 -->
                                <tr class="hover:">
                                    <td
                                        class="border font-bold border-gray-300 px-4 py-2"
                                    >
                                        Science Experiments
                                    </td>
                                    <td
                                        class="border border-gray-300 px-4 py-2"
                                    >
                                        Conduct science experiments that require
                                        careful planning and execution.
                                    </td>
                                    <td
                                        class="border border-gray-300 px-4 py-2"
                                    >
                                        To build their analytical and
                                        problem-solving abilities.
                                    </td>
                                </tr>
                                <!-- Activity 8 -->
                                <tr class="hover:">
                                    <td
                                        class="border font-bold border-gray-300 px-4 py-2"
                                    >
                                        Community Service
                                    </td>
                                    <td
                                        class="border border-gray-300 px-4 py-2"
                                    >
                                        Participate in community service
                                        projects that require careful
                                        organisation and leadership.
                                    </td>
                                    <td
                                        class="border border-gray-300 px-4 py-2"
                                    >
                                        To develop social responsibility and
                                        leadership skills.
                                    </td>
                                </tr>

                                <tr class="hover:">
                                    <td
                                        class="border font-bold border-gray-300 px-4 py-2"
                                    >
                                        Puzzle Challenges
                                    </td>
                                    <td
                                        class="border border-gray-300 px-4 py-2"
                                    >
                                        Engage in complex puzzles or brain
                                        teasers that challenge their analytical
                                        thinking.
                                    </td>
                                    <td
                                        class="border border-gray-300 px-4 py-2"
                                    >
                                        To improve their critical thinking and
                                        problem-solving skills
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="-lg">
                <h2 class="text-3xl font-bold mb-2">
                    Exercises to Improve Areas of Growth
                </h2>
                <p class="text-lg mb-4">
                    Practical Exercises for {{ childName }} to Address Areas for
                    Growth:
                </p>

                <div class="row">
                    <div class="col-6">
                        <!-- Flexibility Training -->
                        <div class="mb-4">
                            <h3 class="font-semibold text-xl">
                                Flexibility Training
                            </h3>
                            <p class="mb-2">
                                Introduce activities that require
                                {{ childName }} to adapt quickly to new
                                situations, like impromptu storytelling or
                                changes in game rules.
                            </p>
                            <p class="">
                                <strong>Purpose:</strong>To help them become
                                more adaptable and open to change.
                            </p>
                        </div>

                        <div class="mb-4">
                            <h3 class="font-semibold text-xl">
                                Patience-Building Activities
                            </h3>
                            <p class="mb-2">
                                Engage in activities that require taking turns
                                and waiting, such as board games or team sports.
                            </p>
                            <p class="">
                                <strong>Purpose:</strong>To teach them patience
                                and improve their ability to work
                                collaboratively.
                            </p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center mt-4 mb-4">
                            <img
                                class="w-96 h-auto object-contain"
                                :src="'/images/reports-svg-images/Page 26ab.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="mb-4">
                            <h3 class="font-semibold text-xl">
                                Empathy Development
                            </h3>
                            <p class="mb-2">
                                Role-play scenarios where {{ childName }} must
                                consider and respond to others' feelings and
                                perspectives.
                            </p>
                            <p class="">
                                <strong>Purpose:</strong>
                                To develop their empathy and understanding of
                                others’ emotions.
                            </p>
                        </div>
                        <div class="mb-4">
                            <h3 class="font-semibold text-xl">
                                Stress Management Techniques
                            </h3>
                            <p class="mb-2">
                                Practice relaxation techniques like deep
                                breathing, mindfulness, or yoga together.
                            </p>
                            <p class="">
                                <strong>Purpose:</strong>To help them manage
                                stress and stay calm in challenging situations.
                            </p>
                        </div>

                        <div class="mb-4">
                            <h3 class="font-semibold text-xl">
                                Group Collaboration Projects
                            </h3>
                            <p class="mb-2">
                                Involve {{ childName }} in projects that require
                                teamwork and valuing different perspectives.
                            </p>
                            <p class="">
                                <strong>Purpose:</strong>To enhance their
                                teamwork skills and encourage consideration of
                                others’ ideas.
                            </p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center mt-4 mb-4">
                            <img
                                class="w-96 h-auto object-contain"
                                :src="'/images/reports-svg-images/Page17.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="flex justify-center items-center mt-4 mb-4">
                            <img
                                class="w-96 h-auto object-contain"
                                :src="'/images/reports-svg-images/Page31b.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-4">
                            <h3 class="font-semibold text-xl">
                                Leadership in Diverse Settings
                            </h3>
                            <p class="mb-2">
                                Provide opportunities for {{ childName }} to
                                lead in various settings, including unfamiliar
                                or changing environments.
                            </p>
                            <p class="">
                                <strong>Purpose:</strong>To build their
                                confidence and adaptability in leadership roles.
                            </p>
                        </div>
                        <div class="mb-4">
                            <h3 class="font-semibold text-xl">
                                Decision-Making Practice
                            </h3>
                            <p class="mb-2">
                                Give {{ childName }} choices in their daily
                                routine and discuss the outcomes of their
                                decisions.
                            </p>
                            <p class="">
                                <strong>Purpose:</strong>To strengthen their
                                decision-making skills and boost their
                                confidence.
                            </p>
                        </div>
                        <div class="mb-4">
                            <h3 class="font-semibold text-xl">
                                Creative Expression
                            </h3>
                            <p class="mb-2">
                                Encourage {{ childName }} to express their
                                thoughts and feelings through creative
                                activities like drawing, writing, or drama.
                            </p>
                            <p class="">
                                <strong>Purpose:</strong>To improve their
                                emotional expression and understanding.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <p class="mt-4">
                        By incorporating these exercises into {{ childName }}’s
                        routine, you can help them develop in areas where they
                        may need growth, creating a well-rounded and resilient
                        individual.
                    </p>
                </div>
            </div>
        </div>

        <!-- For CS Style Type -->
        <div id="CS" v-if="style == 'CS'">
            <div class="space-y-6">
                <h2 class="text-3xl font-bold mb-2">
                    Activities to Develop Strengths
                </h2>
                <p>
                    <strong
                        >Suggested Activities for {{ childName }} to Build on
                        Their Strengths:</strong
                    >
                </p>
                <div
                    class="max-w-full overflow-x-auto shadow-md rounded-lg mb-6"
                >
                    <div class="min-w-[600px] md:min-w-full">
                        <!-- Minimum width for mobile scroll -->
                        <table
                            class="w-full border-collapse border border-gray-300"
                        >
                            <thead>
                                <tr>
                                    <th class="border-b px-4 py-2">Activity</th>
                                    <th class="border-b px-4 py-2">
                                        Description
                                    </th>
                                    <th class="border-b px-4 py-2">Purpose</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border-b px-4 py-2">
                                        Detail-Oriented Tasks
                                    </td>
                                    <td class="border-b px-4 py-2">
                                        Engage {{ childName }} in activities
                                        that require careful attention to
                                        detail, such as puzzles, model building,
                                        or craft projects.
                                    </td>
                                    <td class="border-b px-4 py-2">
                                        To enhance their precision and focus.
                                    </td>
                                </tr>

                                <tr>
                                    <td class="border-b px-4 py-2">
                                        Organisational Roles
                                    </td>
                                    <td class="border-b px-4 py-2">
                                        Assign {{ childName }} roles that
                                        involve organising events or materials,
                                        such as classroom monitor or family
                                        event planner.
                                    </td>
                                    <td class="border-b px-4 py-2">
                                        To build their organisational and
                                        leadership skills.
                                    </td>
                                </tr>

                                <tr>
                                    <td class="border-b px-4 py-2">
                                        Supportive Group Work
                                    </td>
                                    <td class="border-b px-4 py-2">
                                        Involve {{ childName }} in group
                                        projects where they can help and support
                                        others, such as collaborative art
                                        projects or team sports.
                                    </td>
                                    <td class="border-b px-4 py-2">
                                        To strengthen their teamwork and
                                        supportive nature.
                                    </td>
                                </tr>

                                <tr>
                                    <td class="border-b px-4 py-2">
                                        Community Service
                                    </td>
                                    <td class="border-b px-4 py-2">
                                        Participate in community service
                                        activities together, such as
                                        volunteering at a local shelter or
                                        organising a neighbourhood clean-up.
                                    </td>
                                    <td class="border-b px-4 py-2">
                                        To develop a sense of social
                                        responsibility.
                                    </td>
                                </tr>

                                <tr>
                                    <td class="border-b px-4 py-2">
                                        Research Projects
                                    </td>
                                    <td class="border-b px-4 py-2">
                                        Encourage {{ childName }} to undertake
                                        small research projects on topics of
                                        interest, providing structured guidance.
                                    </td>
                                    <td class="border-b px-4 py-2">
                                        To improve their research and analytical
                                        skills.
                                    </td>
                                </tr>

                                <tr>
                                    <td class="border-b px-4 py-2">
                                        Mentorship Programs
                                    </td>
                                    <td class="border-b px-4 py-2">
                                        Pair {{ childName }} with a mentor or
                                        allow them to mentor younger students in
                                        areas they excel.
                                    </td>
                                    <td class="border-b px-4 py-2">
                                        To build leadership and empathy.
                                    </td>
                                </tr>

                                <tr>
                                    <td class="border-b px-4 py-2">
                                        Creative Expression
                                    </td>
                                    <td class="border-b px-4 py-2">
                                        Provide opportunities for creative
                                        expression through activities like
                                        drawing, painting, or writing.
                                    </td>
                                    <td class="border-b px-4 py-2">
                                        To allow them to express their
                                        creativity while focusing on detail.
                                    </td>
                                </tr>

                                <tr>
                                    <td class="border-b px-4 py-2">
                                        Structured Play
                                    </td>
                                    <td class="border-b px-4 py-2">
                                        Engage in structured play activities
                                        that require following rules and
                                        completing specific tasks, such as board
                                        games or strategy games.
                                    </td>
                                    <td class="border-b px-4 py-2">
                                        To enhance their problem-solving and
                                        critical-thinking skills
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="">
                    <h2 class="text-3xl font-bold mb-2">
                        Exercises to Improve Areas of Growth
                    </h2>
                    <p>
                        <strong
                            >Practical Exercises for {{ childName }} to Address
                            Areas for Growth:</strong
                        >
                    </p>

                    <div class="row">
                        <div class="col-6">
                            <p>
                                <strong> Confidence-Building Tasks: </strong
                                ><br />
                                Encourage {{ childName }} to take on new and
                                slightly challenging tasks independently,
                                gradually increasing the difficulty as they
                                succeed.
                                <br />
                                <span>Purpose:</span> To help them build
                                self-confidence and trust in their abilities.
                            </p>

                            <p class="mt-2">
                                <strong> Quick Decision-Making Games: </strong
                                ><br />

                                Play games that require quick thinking and
                                decision-making, such as rapid-fire question
                                rounds or timed puzzles.
                                <br />
                                <span>Purpose:</span>
                                To enhance their ability to make decisions more
                                swiftly and confidently.
                            </p>

                            <p class="mt-2">
                                <strong> Adaptability Exercises: </strong><br />
                                Engage in activities that involve unexpected
                                changes or require flexibility, such as
                                impromptu storytelling or games with changing
                                rules.
                                <br /><span>Purpose:</span> To help
                                {{ childName }} become more adaptable and
                                comfortable with change.
                            </p>
                        </div>
                        <div class="col-6">
                            <div
                                class="flex justify-center items-center mt-4 mb-4"
                            >
                                <img
                                    class="w-96 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page 26ab.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <p class="mt-2">
                                <strong> Handling Criticism Practice: </strong
                                ><br />
                                Role-play scenarios where
                                {{ childName }} receives constructive feedback
                                and learns to respond positively.

                                <span>Purpose:</span>
                                To teach them how to accept criticism and use it
                                for personal growth.
                            </p>

                            <p class="mt-2">
                                <strong> Group Collaboration Projects: </strong
                                ><br />
                                Involve {{ childName }} in projects that require
                                collaboration and sharing of ideas, such as
                                building a group model or creating a class
                                mural.

                                <br />
                                <span>Purpose:</span>
                                To improve their teamwork skills and encourage
                                valuing others’ contributions.
                            </p>

                            <p class="mt-2">
                                <strong> Mindfulness Activities: </strong><br />
                                Introduce mindfulness exercises like deep
                                breathing, meditation, or yoga to help
                                {{ childName }} manage stress and stay calm in
                                various situations.
                                <br />
                                <span>Purpose:</span>
                                To enhance their ability to remain calm and
                                focused under pressure.
                            </p>
                        </div>
                        <div class="col-6">
                            <div
                                class="flex justify-center items-center mt-4 mb-4"
                            >
                                <img
                                    class="w-96 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page17.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div
                                class="flex justify-center items-center mt-4 mb-4"
                            >
                                <img
                                    class="w-64 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page31b.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                        <div class="col-6">
                            <p class="mt-2">
                                <strong> Leadership Opportunities: </strong
                                ><br />
                                Provide opportunities for {{ childName }} to
                                take the lead in small projects or tasks,
                                guiding them through the process.
                                <br />
                                <span>Purpose:</span>
                                To build their leadership skills and confidence
                                in leading others.
                            </p>
                            <p class="mt-2">
                                <strong> Empathy Role-Playing: </strong><br />
                                Engage in role-playing activities that require
                                {{ childName }} to consider others' feelings and
                                perspectives.
                                <br />
                                <span>Purpose:</span>
                                To develop empathy and improve their ability to
                                understand and connect with others.
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <p>
                        By incorporating these exercises into
                        {{ childName }} ’s routine, you can help them develop in
                        areas where they may need growth, nurturing a
                        well-rounded and resilient individual.
                    </p>
                </div>
            </div>
        </div>

        <!-- For D Style Type -->
        <div v-if="style == 'D'" class="container mx-auto">
            <h2 class="text-3xl font-bold mb-2">
                Activities to Develop Strengths
            </h2>

            <p class="mb-4">
                Suggested Activities for {{ childName }} to Build on Their
                Strengths:
            </p>

            <!-- Activities Table -->
            <div class="max-w-full overflow-x-auto shadow-md rounded-lg mb-6">
                <div class="min-w-[600px] md:min-w-full">
                    <!-- Minimum width for mobile scroll -->
                    <table
                        class="w-full border-collapse border border-gray-300"
                    >
                        <thead>
                            <tr class="">
                                <th
                                    class="border font-bold border-gray-300 px-4 py-2"
                                >
                                    Activity
                                </th>
                                <th
                                    class="border font-bold border-gray-300 px-4 py-2"
                                >
                                    Description
                                </th>
                                <th
                                    class="border font-bold border-gray-300 px-4 py-2"
                                >
                                    Purpose
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td
                                    class="border font-bold border-gray-300 px-4 py-2"
                                >
                                    Leadership Games
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Organise a family game night where
                                    {{ childName }}
                                    can take the lead in explaining and managing
                                    the games.
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    To enhance leadership skills and confidence.
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td
                                    class="border font-bold border-gray-300 px-4 py-2"
                                >
                                    Goal Setting
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Work with {{ childName }} to set short-term
                                    and long-term goals, such as learning a new
                                    skill or achieving a milestone in a hobby.
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    To reinforce their goal-setting abilities
                                    and provide a sense of accomplishment.
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td
                                    class="border font-bold border-gray-300 px-4 py-2"
                                >
                                    Decision-Making Scenarios
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Create scenarios where {{ childName }} needs
                                    to make decisions, such as planning a
                                    weekend outing or solving a problem at home.
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    To improve their decision-making skills and
                                    encourage critical thinking.
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td
                                    class="border font-bold border-gray-300 px-4 py-2"
                                >
                                    Public Speaking
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Encourage {{ childName }} to practice public
                                    speaking by presenting to family members or
                                    participating in school events.
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    To build their communication skills and
                                    boost their confidence in expressing ideas.
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td
                                    class="border font-bold border-gray-300 px-4 py-2"
                                >
                                    Problem-Solving Tasks
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Give {{ childName }} challenging puzzles or
                                    tasks that require strategic thinking.
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    To enhance their problem-solving abilities
                                    and critical thinking skills.
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td
                                    class="border font-bold border-gray-300 px-4 py-2"
                                >
                                    Creative Projects
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Involve {{ childName }} in creative projects
                                    that require planning and execution, like
                                    building a model or crafting.
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    To build creativity and project management
                                    skills.
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td
                                    class="border font-bold border-gray-300 px-4 py-2"
                                >
                                    Competitive Sports
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Enroll {{ childName }} in sports that
                                    emphasise competition and teamwork, such as
                                    soccer or basketball.
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    To develop teamwork and leadership through
                                    physical activity.
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td
                                    class="border font-bold border-gray-300 px-4 py-2"
                                >
                                    Leadership Roles
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Assign {{ childName }} a leadership role in
                                    group activities, such as being the team
                                    captain or group leader.
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    To practice leadership in a structured
                                    setting and build confidence in leading
                                    peers.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <h2 class="text-3xl font-bold mb-2">
                Exercises to Improve Areas of Growth
            </h2>

            <p class="mb-4">
                Practical Exercises for {{ childName }} to Address Areas for
                Growth:
            </p>

            <!-- Exercises List -->
            <ul class="space-y-4">
                <div class="row">
                    <div class="col-6">
                        <li class="mb-4">
                            <b>Listening Skills:</b> Engage in active listening
                            exercises, such as repeating back what someone has
                            said or summarising a story they heard. <br /><span
                                class="font-bold"
                                >Purpose:</span
                            >
                            To help {{ childName }} develop better listening
                            habits and understand the importance of hearing
                            others’ viewpoints.
                        </li>

                        <li class="mb-4">
                            <b>Patience-Building Activities:</b> Involve
                            {{ childName }} in activities that require patience,
                            such as gardening, cooking, or completing a complex
                            puzzle. <br /><span class="font-bold"
                                >Purpose:</span
                            >
                            To teach patience and the value of persistence in
                            achieving long-term goals.
                        </li>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center mt-4 mb-4">
                            <img
                                class="w-96 h-auto object-contain"
                                :src="'/images/reports-svg-images/Page 26ab.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <li class="mb-4">
                            <b>Team-Based Projects:</b> Encourage participation
                            in team sports or group projects where
                            {{ childName }} needs to collaborate and work with
                            others. <br /><span class="font-bold"
                                >Purpose:</span
                            >
                            To develop teamwork skills and the ability to share
                            leadership roles.
                        </li>

                        <li class="mb-4">
                            <b>Empathy Exercises:</b> Practice role-playing
                            scenarios where {{ childName }} needs to understand
                            and respond to others' emotions, such as comforting
                            a friend or helping solve a peer’s problem.
                            <br /><span class="font-bold">Purpose:</span>
                            To promote empathy and improve interpersonal
                            relationships.
                        </li>

                        <li class="mb-4">
                            <b>Conflict Resolution Skills:</b> Teach
                            {{ childName }} conflict resolution through
                            role-playing and discussion of real-life scenarios.
                            <br /><span class="font-bold">Purpose:</span>
                            To improve their ability to handle disagreements
                            constructively and peacefully.
                        </li>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center mt-4 mb-4">
                            <img
                                class="w-96 h-auto object-contain"
                                :src="'/images/reports-svg-images/Page17.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="flex justify-center items-center mt-4 mb-4">
                            <img
                                class="w-64 h-auto object-contain"
                                :src="'/images/reports-svg-images/Page31b.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="col-6">
                        <li class="mb-4">
                            <b>Mindfulness Activities:</b> Introduce mindfulness
                            exercises like deep breathing, meditation, or yoga
                            to help {{ childName }} manage stress and build
                            patience. <br /><span class="font-bold"
                                >Purpose:</span
                            >
                            To help them develop self-regulation and stress
                            management skills.
                        </li>

                        <li class="mb-4">
                            <b>Group Discussions:</b> Involve {{ childName }} in
                            group discussions and activities that require
                            listening and responding thoughtfully to others.
                            <br /><span class="font-bold">Purpose:</span>
                            To enhance their listening and communication skills
                            in a group setting.
                        </li>

                        <li class="mb-4">
                            <b>Reflective Journaling:</b> Encourage
                            {{ childName }} to keep a journal where they reflect
                            on their day, decisions they made, and what they
                            learned. <br /><span class="font-bold"
                                >Purpose:</span
                            >
                            To promote self-awareness and critical thinking
                            about their actions and behaviors.
                        </li>
                    </div>
                </div>
            </ul>
            <div>
                By incorporating these exercises into {{ childName }} ’s
                routine, you can help them develop in areas where they may need
                growth, nurturing a well-rounded and resilient individual.
            </div>
        </div>

        <!-- For DC Style Type -->
        <div id="DC" v-if="style == 'DC'">
            <div class="space-y-6">
                <h2 class="text-3xl font-bold mb-2">
                    Activities to Develop Strengths
                </h2>
                <p>
                    <strong
                        >Suggested Activities for {{ childName }} to Build on
                        Their Strengths:</strong
                    >
                </p>
                <div
                    class="max-w-full overflow-x-auto shadow-md rounded-lg mb-6"
                >
                    <div class="min-w-[600px] md:min-w-full">
                        <!-- Minimum width for mobile scroll -->
                        <table
                            class="w-full border-collapse border border-gray-300"
                        >
                            <thead>
                                <tr>
                                    <th class="border-b px-4 py-2">Activity</th>
                                    <th class="border-b px-4 py-2">
                                        Description
                                    </th>
                                    <th class="border-b px-4 py-2">Purpose</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border-b px-4 py-2">
                                        Leadership Games
                                    </td>
                                    <td class="border-b px-4 py-2">
                                        Organise a family game night where
                                        {{ childName }} can take the lead in
                                        explaining and managing the games.
                                    </td>
                                    <td class="border-b px-4 py-2">
                                        To enhance leadership skills and
                                        confidence.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border-b px-4 py-2">
                                        Goal Setting
                                    </td>
                                    <td class="border-b px-4 py-2">
                                        Work with {{ childName }} to set
                                        short-term and long-term goals, such as
                                        learning a new skill or achieving a
                                        milestone in a hobby.
                                    </td>
                                    <td class="border-b px-4 py-2">
                                        To reinforce their goal-setting
                                        abilities and provide a sense of
                                        accomplishment.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border-b px-4 py-2">
                                        Decision-Making Scenarios
                                    </td>
                                    <td class="border-b px-4 py-2">
                                        Create scenarios where
                                        {{ childName }} needs to make decisions,
                                        such as planning a weekend outing or
                                        solving a problem at home.
                                    </td>
                                    <td class="border-b px-4 py-2">
                                        To improve their decision-making skills
                                        and encourage critical thinking.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border-b px-4 py-2">
                                        Detailed Projects
                                    </td>
                                    <td class="border-b px-4 py-2">
                                        Involve {{ childName }} in projects that
                                        require careful planning and execution,
                                        like building models, conducting
                                        experiments, or crafting.
                                    </td>
                                    <td class="border-b px-4 py-2">
                                        To promote attention to detail and
                                        project management skills.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border-b px-4 py-2">
                                        Analytical Games
                                    </td>
                                    <td class="border-b px-4 py-2">
                                        Introduce strategy games and puzzles
                                        that require careful thought and
                                        planning.
                                    </td>
                                    <td class="border-b px-4 py-2">
                                        To develop their analytical and
                                        problem-solving abilities.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border-b px-4 py-2">
                                        Organisational Tasks
                                    </td>
                                    <td class="border-b px-4 py-2">
                                        Assign tasks that require organising,
                                        such as arranging a bookshelf or
                                        creating a study schedule.
                                    </td>
                                    <td class="border-b px-4 py-2">
                                        To enhance their organisational skills
                                        and help them manage their time better.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border-b px-4 py-2">
                                        Mentorship Opportunities
                                    </td>
                                    <td class="border-b px-4 py-2">
                                        Pair {{ childName }} with younger
                                        students to mentor and guide them.
                                    </td>
                                    <td class="border-b px-4 py-2">
                                        To develop leadership and teaching
                                        skills while reinforcing their knowledge
                                        and confidence.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border-b px-4 py-2">
                                        Public Speaking
                                    </td>
                                    <td class="border-b px-4 py-2">
                                        Encourage {{ childName }} to practice
                                        public speaking by presenting to family
                                        members or participating in school
                                        events.
                                    </td>
                                    <td class="border-b px-4 py-2">
                                        To build their communication skills and
                                        boost their confidence in expressing
                                        ideas.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="">
                    <h2 class="text-3xl font-bold mb-2">
                        Exercises to Improve Areas of Growth
                    </h2>
                    <p>
                        <strong
                            >Practical Exercises for {{ childName }} to Address
                            Areas for Growth:</strong
                        >
                    </p>

                    <div class="row">
                        <div class="col-6">
                            <p>
                                <strong>Active Listening Drills:</strong><br />
                                Engage {{ childName }} in activities where they
                                practice listening and summarising what they
                                heard.<br />
                                <span>Purpose:</span> To improve their listening
                                skills and ensure they understand others.
                            </p>

                            <p>
                                <strong>Detail-Oriented Projects:</strong><br />
                                Involve {{ childName }} in projects that require
                                precision and attention to detail, such as model
                                building or intricate crafts.<br />
                                <span>Purpose:</span> To help them develop
                                patience and meticulousness.
                            </p>
                            <p>
                                <strong
                                    >Collaborative Planning Activities:</strong
                                ><br />
                                Encourage {{ childName }} to work on group
                                projects that involve planning and organisation
                                with peers.<br />
                                <span>Purpose:</span> To enhance their teamwork
                                skills and learn to value others’ contributions.
                            </p>
                        </div>
                        <div class="col-6">
                            <div
                                class="flex justify-center items-center mt-4 mb-4"
                            >
                                <img
                                    class="w-96 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page 26ab.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <p>
                                <strong>Role-Playing Scenarios:</strong><br />
                                Create role-playing scenarios where
                                {{ childName }} must navigate social situations
                                and consider others' perspectives.<br />
                                <span>Purpose:</span> To promote empathy and
                                improve their interpersonal skills.
                            </p>

                            <p>
                                <strong
                                    >Structured Problem-Solving Tasks:</strong
                                ><br />
                                Provide structured tasks that require critical
                                thinking and problem-solving, such as logic
                                puzzles or strategic games.<br />
                                <span>Purpose:</span> To build their analytical
                                skills and ability to approach problems
                                methodically.
                            </p>

                            <p>
                                <strong
                                    >Mindfulness and Relaxation
                                    Techniques:</strong
                                ><br />
                                Introduce activities like deep breathing,
                                meditation, or quiet reflection time to help
                                {{ childName }} manage stress.<br />
                                <span>Purpose:</span> To help them develop
                                self-regulation and stress management skills.
                            </p>
                        </div>
                        <div class="col-6">
                            <div
                                class="flex justify-center items-center mt-4 mb-4"
                            >
                                <img
                                    class="w-96 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page17.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div
                                class="flex justify-center items-center mt-4 mb-4"
                            >
                                <img
                                    class="w-64 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page31b.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                        <div class="col-6">
                            <p>
                                <strong>Task Management Exercises:</strong
                                ><br />
                                Assign exercises that require organising and
                                prioritising tasks, such as creating to-do lists
                                or managing small projects.<br />
                                <span>Purpose:</span> To enhance their
                                organisational skills and ability to manage
                                multiple tasks.
                            </p>

                            <p>
                                <strong>Feedback Reflection:</strong><br />
                                Encourage {{ childName }} to reflect on feedback
                                they receive and identify areas for
                                improvement.<br />
                                <span>Purpose:</span> To help them accept
                                constructive criticism and learn from it.
                            </p>
                            <div>
                                <p>
                                    By incorporating these exercises into
                                    {{ childName }} ’s routine, you can help
                                    them develop in areas where they may need
                                    growth, nurturing a well-rounded and
                                    resilient individual.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- For DI Style Type -->
        <div id="DI" v-if="style == 'DI'">
            <h2 class="text-3xl font-bold mb-2">
                Activities to Develop Strengths
            </h2>
            <p>
                Suggested Activities for {{ childName }} to Build on Their
                Strengths:
            </p>
            <div class="max-w-full mb-6">
                <div class="min-w-[600px] md:min-w-full">
                    <!-- Minimum width for mobile scroll -->
                    <table
                        class="w-full border-collapse border border-gray-300"
                    >
                        <thead>
                            <tr class="text-left">
                                <th class="px-6 py-3 font-semibold border-b">
                                    Activity
                                </th>
                                <th class="px-6 py-3 font-semibold border-b">
                                    Description
                                </th>
                                <th class="px-6 py-3 font-semibold border-b">
                                    Purpose
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="px-6 py-3">Lead Group Games</td>
                                <td class="px-6 py-3">
                                    Encourage {{ childName }} to organise and
                                    lead games with friends.
                                </td>
                                <td class="px-6 py-3">
                                    To develop leadership and social skills
                                    simultaneously.
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td class="px-6 py-3">
                                    Creative Expression Projects
                                </td>
                                <td class="px-6 py-3">
                                    Involve {{ childName }} in creative
                                    projects, such as art, drama, or music,
                                    where they can express themselves freely.
                                </td>
                                <td class="px-6 py-3">
                                    To enhance creativity and boost
                                    self-confidence.
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td class="px-6 py-3">
                                    Interactive Learning Games
                                </td>
                                <td class="px-6 py-3">
                                    Use educational games that require teamwork
                                    and strategy, like board games or group
                                    challenges.
                                </td>
                                <td class="px-6 py-3">
                                    To promote teamwork and strategic thinking.
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td class="px-6 py-3">
                                    Plan Family Activities
                                </td>
                                <td class="px-6 py-3">
                                    Let {{ childName }} plan family outings or
                                    events.
                                </td>
                                <td class="px-6 py-3">
                                    To develop planning and leadership skills.
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td class="px-6 py-3">Join Team Sports</td>
                                <td class="px-6 py-3">
                                    Sign up {{ childName }} for a team sport,
                                    like soccer or basketball, where they can
                                    take on leadership roles.
                                </td>
                                <td class="px-6 py-3">
                                    To develop leadership and teamwork through
                                    physical activity.
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td class="px-6 py-3">Storytelling Sessions</td>
                                <td class="px-6 py-3">
                                    Encourage {{ childName }} to create and tell
                                    stories to family or friends.
                                </td>
                                <td class="px-6 py-3">
                                    To improve their creative thinking and
                                    communication skills.
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td class="px-6 py-3">Volunteer Leadership</td>
                                <td class="px-6 py-3">
                                    Encourage {{ childName }} to take on a
                                    leadership role in a community or school
                                    volunteer project.
                                </td>
                                <td class="px-6 py-3">
                                    To develop a sense of responsibility and
                                    community leadership.
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td class="px-6 py-3">Puzzle Challenges</td>
                                <td class="px-6 py-3">
                                    Engage them in complex puzzles or building
                                    sets that require planning and strategy.
                                </td>
                                <td class="px-6 py-3">
                                    To enhance problem-solving and critical
                                    thinking skills.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="space-y-6 mt-4">
                    <h2>Exercises to Improve Areas of Growth</h2>
                    <p>
                        Practical Exercises for {{ childName }} to Address Areas
                        for Growth:
                    </p>

                    <ol class="list- pl-6 space-y-4">
                        <div class="row">
                            <div class="col-6">
                                <li>
                                    <h3 class="text-lg font-semibold">
                                        Listening Games
                                    </h3>
                                    <p class="">
                                        Play games where {{ childName }} has to
                                        listen carefully and repeat back what
                                        they heard.
                                    </p>
                                    <p class="mt-2">
                                        <strong>Purpose:</strong> To improve
                                        listening skills.
                                    </p>
                                </li>

                                <li>
                                    <h3 class="text-lg font-semibold">
                                        Time Management Tasks
                                    </h3>
                                    <p class="">
                                        Give tasks that require planning, like
                                        organising their study time or a small
                                        project.
                                    </p>
                                    <p class="mt-2">
                                        <strong>Purpose:</strong> To help them
                                        learn to manage time.
                                    </p>
                                </li>
                                <li>
                                    <h3 class="text-lg font-semibold">
                                        Patience-Building Activities
                                    </h3>
                                    <p class="">
                                        Do activities that need patience, like
                                        gardening or baking.
                                    </p>
                                    <p class="mt-2">
                                        <strong>Purpose:</strong> To teach
                                        patience.
                                    </p>
                                </li>
                            </div>
                            <div class="col-6">
                                <div
                                    class="flex justify-center items-center mt-4 mb-4"
                                >
                                    <img
                                        class="w-96 h-auto object-contain"
                                        :src="'/images/reports-svg-images/Page 26ab.svg'"
                                        alt=""
                                    />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <li>
                                    <h3 class="text-lg font-semibold">
                                        Empathy Role-Playing
                                    </h3>
                                    <p class="">
                                        Role-play different scenarios where
                                        {{ childName }}
                                        needs to understand others' feelings.
                                    </p>
                                    <p class="mt-2">
                                        <strong>Purpose:</strong> To develop
                                        empathy.
                                    </p>
                                </li>

                                <li>
                                    <h3 class="text-lg font-semibold">
                                        Group Projects
                                    </h3>
                                    <p class="">
                                        Involve {{ childName }} in projects that
                                        need teamwork.
                                    </p>
                                    <p class="mt-2">
                                        <strong>Purpose:</strong> To improve
                                        teamwork skills.
                                    </p>
                                </li>

                                <li>
                                    <h3 class="text-lg font-semibold">
                                        Mindfulness Exercises
                                    </h3>
                                    <p class="">
                                        Teach simple mindfulness exercises like
                                        deep breathing or relaxing thoughts.
                                    </p>
                                    <p class="mt-2">
                                        <strong>Purpose:</strong> To help them
                                        stay calm and manage stress.
                                    </p>
                                </li>
                            </div>
                            <div class="col-6">
                                <div
                                    class="flex justify-center items-center mt-4 mb-4"
                                >
                                    <img
                                        class="w-96 h-auto object-contain"
                                        :src="'/images/reports-svg-images/Page17.svg'"
                                        alt=""
                                    />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div
                                    class="flex justify-center items-center mt-4 mb-4"
                                >
                                    <img
                                        class="w-64 h-auto object-contain"
                                        :src="'/images/reports-svg-images/Page31b.svg'"
                                        alt=""
                                    />
                                </div>
                            </div>
                            <div class="col-6">
                                <li>
                                    <h3 class="text-lg font-semibold">
                                        Conflict Resolution Practice
                                    </h3>
                                    <p class="">
                                        Role-play situations where
                                        {{ childName }} learns to solve
                                        conflicts peacefully.
                                    </p>
                                    <p class="mt-2">
                                        <strong>Purpose:</strong> To improve
                                        their ability to handle disagreements.
                                    </p>
                                </li>

                                <li>
                                    <h3 class="text-lg font-semibold">
                                        Reflective Journaling
                                    </h3>
                                    <p class="">
                                        Encourage {{ childName }} to keep a
                                        simple journal about their day and what
                                        they learned.
                                    </p>
                                    <p class="mt-2">
                                        <strong>Purpose:</strong> To promote
                                        self-awareness and thinking about their
                                        actions.
                                    </p>
                                </li>
                            </div>
                        </div>
                    </ol>
                </div>

                <p>
                    By incorporating these exercises into {{ childName }}’s
                    routine, you can help them develop in areas where they may
                    need growth, nurturing a well-rounded and resilient
                    individual.
                </p>
            </div>
        </div>

        <!-- For I Style Type -->
        <div id="I" v-if="style == 'I'">
            <div class="overflow-x-auto">
                <h2 class="text-3xl font-bold mb-2">
                    Activities to Develop Strengths
                </h2>

                <p>
                    <strong
                        >Suggested Activities for {{ childName }} to Build on
                        Their Strengths:</strong
                    >
                </p>
                <div
                    class="max-w-full overflow-x-auto shadow-md rounded-lg mb-6"
                >
                    <div class="min-w-[600px] md:min-w-full">
                        <!-- Minimum width for mobile scroll -->
                        <table
                            class="w-full border-collapse border border-gray-300"
                        >
                            <thead class="">
                                <tr>
                                    <th
                                        class="px-4 py-2 border border-gray-300 text-left"
                                    >
                                        Activity
                                    </th>
                                    <th
                                        class="px-4 py-2 border border-gray-300 text-left"
                                    >
                                        Description
                                    </th>
                                    <th
                                        class="px-4 py-2 border border-gray-300 text-left"
                                    >
                                        Purpose
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td
                                        class="px-4 py-2 border border-gray-300"
                                    >
                                        Storytelling
                                    </td>
                                    <td
                                        class="px-4 py-2 border border-gray-300"
                                    >
                                        Encourage {{ childName }} to create and
                                        tell stories, either verbally or through
                                        writing.
                                    </td>
                                    <td
                                        class="px-4 py-2 border border-gray-300"
                                    >
                                        To enhance their communication skills
                                        and boost their confidence.
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="px-4 py-2 border border-gray-300"
                                    >
                                        Drama and Role-Play
                                    </td>
                                    <td
                                        class="px-4 py-2 border border-gray-300"
                                    >
                                        Involve {{ childName }} in drama
                                        activities or role-playing games.
                                    </td>
                                    <td
                                        class="px-4 py-2 border border-gray-300"
                                    >
                                        To allow them to express their
                                        creativity and improve their social
                                        skills.
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="px-4 py-2 border border-gray-300"
                                    >
                                        Art Projects
                                    </td>
                                    <td
                                        class="px-4 py-2 border border-gray-300"
                                    >
                                        Provide various art supplies and
                                        encourage
                                        {{ childName }} to engage in creative
                                        art projects.
                                    </td>
                                    <td
                                        class="px-4 py-2 border border-gray-300"
                                    >
                                        To build their creativity and offer a
                                        productive outlet for self-expression.
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="px-4 py-2 border border-gray-300"
                                    >
                                        Group Activities
                                    </td>
                                    <td
                                        class="px-4 py-2 border border-gray-300"
                                    >
                                        Organise activities that require
                                        teamwork and collaboration, such as
                                        group projects or team sports.
                                    </td>
                                    <td
                                        class="px-4 py-2 border border-gray-300"
                                    >
                                        To develop their teamwork skills and
                                        build stronger social connections.
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="px-4 py-2 border border-gray-300"
                                    >
                                        Public Speaking
                                    </td>
                                    <td
                                        class="px-4 py-2 border border-gray-300"
                                    >
                                        Encourage {{ childName }} to participate
                                        in public speaking activities, like
                                        class presentations or debates.
                                    </td>
                                    <td
                                        class="px-4 py-2 border border-gray-300"
                                    >
                                        To build their confidence and improve
                                        their verbal communication skills.
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="px-4 py-2 border border-gray-300"
                                    >
                                        Social Clubs
                                    </td>
                                    <td
                                        class="px-4 py-2 border border-gray-300"
                                    >
                                        Enrol {{ childName }} in clubs or groups
                                        that align with their interests, such as
                                        a drama club or art club.
                                    </td>
                                    <td
                                        class="px-4 py-2 border border-gray-300"
                                    >
                                        To provide regular opportunities for
                                        social interaction and skill
                                        development.
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="px-4 py-2 border border-gray-300"
                                    >
                                        Creative Writing
                                    </td>
                                    <td
                                        class="px-4 py-2 border border-gray-300"
                                    >
                                        Provide opportunities for
                                        {{ childName }} to engage in creative
                                        writing, such as keeping a journal or
                                        writing short stories.
                                    </td>
                                    <td
                                        class="px-4 py-2 border border-gray-300"
                                    >
                                        To enhance their expressive abilities
                                        and boost their imaginative skills.
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="px-4 py-2 border border-gray-300"
                                    >
                                        Community Service
                                    </td>
                                    <td
                                        class="px-4 py-2 border border-gray-300"
                                    >
                                        Involve {{ childName }} in community
                                        service activities where they can work
                                        with others and contribute positively.
                                    </td>
                                    <td
                                        class="px-4 py-2 border border-gray-300"
                                    >
                                        To develop empathy and a sense of social
                                        responsibility while building social
                                        connections.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="space-y-6 mt-5">
                <div class="row">
                    <h2 class="text-3xl font-bold mb-2">
                        Exercises to Improve Areas of Growth
                    </h2>

                    <p>
                        <strong>
                            Practical Exercises for {{ childName }} to Address
                            Areas for Growth:
                        </strong>
                    </p>
                    <div class="col-6">
                        <div class="pl-4">
                            <h3 class="text-xl font-semibold">
                                Active Listening Drills
                            </h3>
                            <p class="pl-4">
                                Engage {{ childName }} in activities where they
                                practice listening and repeating back what they
                                heard.
                            </p>
                            <p class="pl-4">
                                <strong>Purpose:</strong> To improve their
                                listening skills and ensure they understand
                                others.
                            </p>
                        </div>

                        <div class="pl-4">
                            <h3 class="text-xl font-semibold">
                                Organisational Tasks
                            </h3>
                            <p class="pl-4">
                                Assign tasks that require {{ childName }} to
                                organise their belongings or schedule, such as
                                arranging their room or creating a weekly
                                planner.
                            </p>
                            <p class="pl-4">
                                <strong>Purpose:</strong> To enhance their
                                organisational skills and help them manage their
                                time better.
                            </p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center mt-4 mb-4">
                            <img
                                class="w-96 h-auto object-contain"
                                :src="'/images/reports-svg-images/Page 26ab.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="pl-4">
                            <h3 class="text-xl font-semibold">
                                Empathy Role-Playing
                            </h3>
                            <p class="pl-4">
                                Conduct role-playing scenarios where
                                {{ childName }} must consider and respond to
                                others' feelings and perspectives.
                            </p>
                            <p class="pl-4">
                                <strong>Purpose:</strong> To develop empathy and
                                improve their ability to understand others'
                                emotions.
                            </p>
                        </div>

                        <div class="pl-4">
                            <h3 class="text-xl font-semibold">
                                Turn-Taking Games
                            </h3>
                            <p class="pl-4">
                                Play games that require taking turns and waiting
                                patiently, such as board games or group
                                activities.
                            </p>
                            <p class="pl-4">
                                <strong>Purpose:</strong> To teach patience and
                                the importance of sharing and cooperation.
                            </p>
                        </div>

                        <div class="pl-4">
                            <h3 class="text-xl font-semibold">
                                Detailed Projects
                            </h3>
                            <p class="pl-4">
                                Involve {{ childName }} in projects that require
                                attention to detail, such as building models or
                                completing puzzles.
                            </p>
                            <p class="pl-4">
                                <strong>Purpose:</strong> To help them focus on
                                precision and follow through with tasks.
                            </p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center mt-4 mb-4">
                            <img
                                class="w-96 h-auto object-contain"
                                :src="'/images/reports-svg-images/Page17.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="flex justify-center items-center mt-4 mb-4">
                            <img
                                class="w-96 h-auto object-contain"
                                :src="'/images/reports-svg-images/Page31b.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="pl-4">
                            <h3 class="text-xl font-semibold">
                                Quiet Reflection Time
                            </h3>
                            <p class="pl-4">
                                Encourage {{ childName }} to spend time
                                reflecting on their day, perhaps through
                                journaling or quiet thinking.
                            </p>
                            <p class="pl-4">
                                <strong>Purpose:</strong> To nurture
                                self-awareness and mindfulness.
                            </p>
                        </div>

                        <div class="pl-4">
                            <h3 class="text-xl font-semibold">
                                Conflict Resolution Practice
                            </h3>
                            <p class="pl-4">
                                Teach {{ childName }} conflict resolution skills
                                through discussions and role-playing common
                                conflicts they may encounter.
                            </p>
                            <p class="pl-4">
                                <strong>Purpose:</strong> To enhance their
                                ability to handle disagreements constructively.
                            </p>
                        </div>

                        <div class="pl-4">
                            <h3 class="text-xl font-semibold">
                                Mindfulness Activities
                            </h3>
                            <p class="pl-4">
                                Introduce mindfulness exercises like deep
                                breathing, meditation, or yoga.
                            </p>
                            <p class="pl-4">
                                <strong>Purpose:</strong> To improve their
                                ability to stay calm and focused in various
                                situations.
                            </p>
                        </div>
                        <p>
                            By incorporating these exercises into
                            {{ childName }} ’s routine, you can help them
                            develop in areas where they may need growth,
                            nurturing a well-rounded and resilient individual.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- For ID Style Type -->
        <div id="ID" v-if="style == 'ID'">
            <div class="">
                <h2>Activities to Develop Strengths</h2>
                <p>
                    Suggested Activities for {{ childName }} to Build on Their
                    Strengths:
                </p>

                <div
                    class="max-w-full overflow-x-auto shadow-md rounded-lg mb-6"
                >
                    <div class="min-w-[600px] md:min-w-full">
                        <!-- Minimum width for mobile scroll -->
                        <table
                            class="w-full border-collapse border border-gray-300"
                        >
                            <thead class="">
                                <tr>
                                    <th
                                        class="px-4 py-2 text-left border border-gray-300"
                                    >
                                        Activity
                                    </th>
                                    <th
                                        class="px-4 py-2 text-left border border-gray-300"
                                    >
                                        Description
                                    </th>
                                    <th
                                        class="px-4 py-2 text-left border border-gray-300"
                                    >
                                        Purpose
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="">
                                    <td
                                        class="px-4 py-2 border border-gray-300"
                                    >
                                        Leadership Projects
                                    </td>
                                    <td
                                        class="px-4 py-2 border border-gray-300"
                                    >
                                        Assign {{ childName }} to lead group
                                        projects or class activities.
                                    </td>
                                    <td
                                        class="px-4 py-2 border border-gray-300"
                                    >
                                        To enhance leadership skills and
                                        confidence.
                                    </td>
                                </tr>
                                <tr class="">
                                    <td
                                        class="px-4 py-2 border border-gray-300"
                                    >
                                        Debate Clubs
                                    </td>
                                    <td
                                        class="px-4 py-2 border border-gray-300"
                                    >
                                        Encourage participation in debate clubs
                                        or public speaking events.
                                    </td>
                                    <td
                                        class="px-4 py-2 border border-gray-300"
                                    >
                                        To improve communication and persuasive
                                        abilities.
                                    </td>
                                </tr>
                                <tr class="">
                                    <td
                                        class="px-4 py-2 border border-gray-300"
                                    >
                                        Creative Competitions
                                    </td>
                                    <td
                                        class="px-4 py-2 border border-gray-300"
                                    >
                                        Involve {{ childName }} in creative
                                        competitions like art contests or
                                        science fairs.
                                    </td>
                                    <td
                                        class="px-4 py-2 border border-gray-300"
                                    >
                                        To combine creativity with a sense of
                                        achievement.
                                    </td>
                                </tr>
                                <tr class="">
                                    <td
                                        class="px-4 py-2 border border-gray-300"
                                    >
                                        Team Sports
                                    </td>
                                    <td
                                        class="px-4 py-2 border border-gray-300"
                                    >
                                        Encourage joining team sports or group
                                        activities.
                                    </td>
                                    <td
                                        class="px-4 py-2 border border-gray-300"
                                    >
                                        To build teamwork and cooperative
                                        skills.
                                    </td>
                                </tr>
                                <tr class="">
                                    <td
                                        class="px-4 py-2 border border-gray-300"
                                    >
                                        Peer Mentoring
                                    </td>
                                    <td
                                        class="px-4 py-2 border border-gray-300"
                                    >
                                        Pair {{ childName }} with younger
                                        students for mentoring activities.
                                    </td>
                                    <td
                                        class="px-4 py-2 border border-gray-300"
                                    >
                                        To develop empathy and leadership.
                                    </td>
                                </tr>
                                <tr class="">
                                    <td
                                        class="px-4 py-2 border border-gray-300"
                                    >
                                        Community Service
                                    </td>
                                    <td
                                        class="px-4 py-2 border border-gray-300"
                                    >
                                        Engage in community service projects
                                        that require planning and organisation.
                                    </td>
                                    <td
                                        class="px-4 py-2 border border-gray-300"
                                    >
                                        To instil a sense of social
                                        responsibility and leadership.
                                    </td>
                                </tr>
                                <tr class="">
                                    <td
                                        class="px-4 py-2 border border-gray-300"
                                    >
                                        Drama and Performance
                                    </td>
                                    <td
                                        class="px-4 py-2 border border-gray-300"
                                    >
                                        Involve {{ childName }} in drama or
                                        performance arts where they can take on
                                        lead roles.
                                    </td>
                                    <td
                                        class="px-4 py-2 border border-gray-300"
                                    >
                                        To boost confidence and creative
                                        expression.
                                    </td>
                                </tr>
                                <tr class="">
                                    <td
                                        class="px-4 py-2 border border-gray-300"
                                    >
                                        Student Council
                                    </td>
                                    <td
                                        class="px-4 py-2 border border-gray-300"
                                    >
                                        Encourage running for student council or
                                        other leadership positions.
                                    </td>
                                    <td
                                        class="px-4 py-2 border border-gray-300"
                                    >
                                        To develop leadership and
                                        decision-making skills.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="space-y-6">
                    <div class="flex flex-col space-y-4">
                        <h2 class="font-bold">
                            Exercises for {{ childName }} to Address Areas for
                            Growth
                        </h2>

                        <div class="row pink-heading">
                            <div class="col-6">
                                <!-- Active Listening Games -->
                                <div class="space-y-2 mb-2">
                                    <h4 class="text-lg font-medium">
                                        Active Listening Games:
                                    </h4>
                                    <p class="text-sm">
                                        Engage {{ childName }} in games that
                                        require listening and repeating back
                                        what was heard.
                                    </p>
                                    <p class="text-sm">
                                        <b>Purpose:</b> To improve their
                                        listening skills and ensure they
                                        understand others.
                                    </p>
                                </div>

                                <!-- Patience-Building Activities -->
                                <div class="space-y-2 mb-2">
                                    <h4 class="text-lg font-medium">
                                        Patience-Building Activities:
                                    </h4>
                                    <p class="text-sm">
                                        Provide activities that require waiting
                                        and turn-taking, such as board games or
                                        cooking projects.
                                    </p>
                                    <p class="text-sm">
                                        <b>Purpose:</b> To help
                                        {{ childName }} develop patience and
                                        understand the value of waiting.
                                    </p>
                                </div>

                                <!-- Detail-Oriented Tasks -->
                                <div class="space-y-2 mb-2">
                                    <h4 class="text-lg font-medium">
                                        Detail-Oriented Tasks:
                                    </h4>
                                    <p class="text-sm">
                                        Assign tasks that require attention to
                                        detail, like puzzles, model building, or
                                        detailed crafts.
                                    </p>
                                    <p class="text-sm">
                                        <b>Purpose:</b> To enhance their focus
                                        on details and improve precision.
                                    </p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div
                                    class="flex justify-center items-center mt-4 mb-4"
                                >
                                    <img
                                        class="w-96 h-auto object-contain"
                                        :src="'/images/reports-svg-images/Page 26ab.svg'"
                                        alt=""
                                    />
                                </div>
                            </div>
                        </div>

                        <div class="row pink-heading">
                            <div class="col-6">
                                <!-- Conflict Resolution Practice -->
                                <div class="space-y-2 mb-2">
                                    <h4 class="text-lg font-medium">
                                        Conflict Resolution Practice:
                                    </h4>
                                    <p class="text-sm">
                                        Conduct role-playing scenarios where
                                        {{ childName }} must navigate and
                                        resolve conflicts.
                                    </p>
                                    <p class="text-sm">
                                        <b>Purpose:</b> To develop their ability
                                        to handle disagreements constructively.
                                    </p>
                                </div>

                                <!-- Mindfulness Exercises -->
                                <div class="space-y-2 mb-2">
                                    <h4 class="text-lg font-medium">
                                        Mindfulness Exercises:
                                    </h4>
                                    <p class="text-sm">
                                        Introduce mindfulness activities such as
                                        deep breathing, meditation, or yoga.
                                    </p>
                                    <p class="text-sm">
                                        <b>Purpose:</b> To help
                                        {{ childName }} manage stress and stay
                                        calm in challenging situations.
                                    </p>
                                </div>

                                <!-- Group Collaboration Projects -->
                                <div class="space-y-2 mb-2">
                                    <h4 class="text-lg font-medium">
                                        Group Collaboration Projects:
                                    </h4>
                                    <p class="text-sm">
                                        Involve {{ childName }} in projects that
                                        require collaboration and sharing of
                                        ideas.
                                    </p>
                                    <p class="text-sm">
                                        <b>Purpose:</b> To teach them the
                                        importance of teamwork and valuing
                                        others’ contributions.
                                    </p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div
                                    class="flex justify-center items-center mt-4 mb-4"
                                >
                                    <img
                                        class="w-96 h-auto object-contain"
                                        :src="'/images/reports-svg-images/Page17.svg'"
                                        alt=""
                                    />
                                </div>
                            </div>
                        </div>

                        <div class="row pink-heading">
                            <div class="col-6">
                                <div
                                    class="flex justify-center items-center mt-4 mb-4"
                                >
                                    <img
                                        class="w-64 h-auto object-contain"
                                        :src="'/images/reports-svg-images/Page31b.svg'"
                                        alt=""
                                    />
                                </div>
                            </div>
                            <div class="col-6">
                                <!-- Empathy Role-Playing -->
                                <div class="space-y-2 mb-2">
                                    <h4 class="text-lg font-medium">
                                        Empathy Role-Playing:
                                    </h4>
                                    <p class="text-sm">
                                        Engage in role-playing activities that
                                        require {{ childName }} to consider
                                        others' feelings and perspectives.
                                    </p>
                                    <p class="text-sm">
                                        <b>Purpose:</b> To develop empathy and
                                        improve their ability to understand and
                                        connect with others.
                                    </p>
                                </div>

                                <!-- Organisational Challenges -->
                                <div class="space-y-2 mb-2">
                                    <h4 class="text-lg font-medium">
                                        Organisational Challenges:
                                    </h4>
                                    <p class="text-sm">
                                        Set up challenges that require
                                        {{ childName }} to organise tasks or
                                        plan events.
                                    </p>
                                    <p class="text-sm">
                                        <b>Purpose:</b> To improve their
                                        organisational skills and ability to
                                        manage multiple responsibilities.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Conclusion -->
                        <div>
                            <p class="text-sm">
                                By incorporating these exercises into
                                {{ childName }} ’s routine, you can help them
                                develop in areas where they may need growth,
                                nurturing a well-rounded and resilient
                                individual.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- For IS Style Type -->
        <div id="IS" v-if="style == 'IS'">
            <h2>Activities to Develop Strengths</h2>
            <p>
                Suggested Activities for {{ childName }} to Build on Their
                Strengths:
            </p>

            <div class="max-w-full overflow-x-auto shadow-md rounded-lg mb-6">
                <div class="min-w-[600px] md:min-w-full">
                    <!-- Minimum width for mobile scroll -->
                    <table
                        class="w-full border-collapse border border-gray-300"
                    >
                        <thead>
                            <tr class="text-left">
                                <th class="px-4 py-2 border-b">Activity</th>
                                <th class="px-4 py-2 border-b">Description</th>
                                <th class="px-4 py-2 border-b">Purpose</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="">
                                <td class="px-4 py-2 border-b">
                                    Group Projects
                                </td>
                                <td class="px-4 py-2 border-b">
                                    Involve {{ childName }} in collaborative
                                    projects where they can work with peers.
                                </td>
                                <td class="px-4 py-2 border-b">
                                    To enhance teamwork and social skills.
                                </td>
                            </tr>
                            <tr class="">
                                <td class="px-4 py-2 border-b">
                                    Creative Workshops
                                </td>
                                <td class="px-4 py-2 border-b">
                                    Encourage participation in art, music, or
                                    drama workshops.
                                </td>
                                <td class="px-4 py-2 border-b">
                                    Encourage participation in art, music, or
                                    drama workshops.
                                </td>
                            </tr>
                            <tr class="">
                                <td class="px-4 py-2 border-b">
                                    Peer Mentoring
                                </td>
                                <td class="px-4 py-2 border-b">
                                    Pair {{ childName }} with younger students
                                    for mentoring activities.
                                </td>
                                <td class="px-4 py-2 border-b">
                                    To build leadership and empathy.
                                </td>
                            </tr>
                            <tr class="">
                                <td class="px-4 py-2 border-b">
                                    Community Service
                                </td>
                                <td class="px-4 py-2 border-b">
                                    Engage in community service activities
                                    together.
                                </td>
                                <td class="px-4 py-2 border-b">
                                    To instil a sense of social responsibility.
                                </td>
                            </tr>
                            <tr class="">
                                <td class="px-4 py-2 border-b">Team Sports</td>
                                <td class="px-4 py-2 border-b">
                                    Encourage joining team sports or group
                                    activities.
                                </td>
                                <td class="px-4 py-2 border-b">
                                    To improve cooperation and physical fitness.
                                </td>
                            </tr>
                            <tr class="">
                                <td class="px-4 py-2 border-b">Social Clubs</td>
                                <td class="px-4 py-2 border-b">
                                    Encourage joining clubs that align with
                                    their interests, like drama club or art
                                    club.
                                </td>
                                <td class="px-4 py-2 border-b">
                                    To expand their social network and explore
                                    interests
                                </td>
                            </tr>
                            <tr class="">
                                <td class="px-4 py-2 border-b">
                                    Storytelling Sessions
                                </td>
                                <td class="px-4 py-2 border-b">
                                    Organise storytelling or creative writing
                                    sessions.
                                </td>
                                <td class="px-4 py-2 border-b">
                                    To boost their imagination and communication
                                    skills.
                                </td>
                            </tr>
                            <tr class="">
                                <td class="px-4 py-2 border-b">
                                    Classroom Helper Roles
                                </td>
                                <td class="px-4 py-2 border-b">
                                    Assign classroom roles that require
                                    assisting the teacher or helping classmates.
                                </td>
                                <td class="px-4 py-2 border-b">
                                    To strengthen their supportive nature and
                                    responsibility.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="space-y-6">
                <div>
                    <h2 class="textl font-semibold">
                        Exercises to Improve Areas of Growth
                    </h2>
                    <p class="text-base">
                        Practical Exercises for {{ childName }} to Address Areas
                        for Growth:
                    </p>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="">
                            <h3 class="text-xl font-semibold">
                                Active Listening Games
                            </h3>
                            <p>
                                Engage {{ childName }} in games that require
                                listening and repeating back what was heard.
                            </p>
                            <p class="text-sm">
                                <b>Purpose:</b> To improve their listening
                                skills and ensure they understand others.
                            </p>
                        </div>

                        <div class="">
                            <h3 class="text-xl font-semibold">
                                Organisational Tasks
                            </h3>
                            <p>
                                Assign tasks that require {{ childName }} to
                                organise their belongings or schedule, such as
                                arranging their room or creating a weekly
                                planner.
                            </p>
                            <p class="text-sm">
                                <b>Purpose:</b> To enhance their organisational
                                skills and help them manage their time better.
                            </p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center mt-4 mb-4">
                            <img
                                class="w-96 h-auto object-contain"
                                :src="'/images/reports-svg-images/Page 26ab.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="">
                            <h3 class="text-xl font-semibold">
                                Empathy Role-Playing
                            </h3>
                            <p>
                                Conduct role-playing scenarios where
                                {{ childName }} must consider and respond to
                                others' feelings and perspectives.
                            </p>
                            <p class="text-sm">
                                <b>Purpose:</b> To develop empathy and improve
                                their ability to understand others' emotions.
                            </p>
                        </div>

                        <div class="">
                            <h3 class="text-xl font-semibold">
                                Turn-Taking Games
                            </h3>
                            <p>
                                Play games that require taking turns and waiting
                                patiently, such as board games or group
                                activities.
                            </p>
                            <p class="text-sm">
                                <b>Purpose:</b> To teach patience and the
                                importance of sharing and cooperation.
                            </p>
                        </div>

                        <div class="">
                            <h3 class="text-xl font-semibold">
                                Detailed Projects
                            </h3>
                            <p>
                                Involve {{ childName }} in projects that require
                                attention to detail, such as building models or
                                completing puzzles.
                            </p>
                            <p class="text-sm">
                                <b>Purpose:</b> To help them focus on precision
                                and follow through with tasks.
                            </p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center mt-4 mb-4">
                            <img
                                class="w-96 h-auto object-contain"
                                :src="'/images/reports-svg-images/Page17.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="flex justify-center items-center mt-4 mb-4">
                            <img
                                class="w-96 h-auto object-contain"
                                :src="'/images/reports-svg-images/Page31b.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="">
                            <h3 class="text-xl font-semibold">
                                Quiet Reflection Time
                            </h3>
                            <p>
                                Encourage {{ childName }} to spend time
                                reflecting on their day, perhaps through
                                journaling or quiet thinking.
                            </p>
                            <p class="text-sm">
                                <b>Purpose:</b> To promote self-awareness and
                                mindfulness.
                            </p>
                        </div>

                        <div class="">
                            <h3 class="text-xl font-semibold">
                                Conflict Resolution Practice
                            </h3>
                            <p>
                                Teach {{ childName }} conflict resolution skills
                                through discussions and role-playing common
                                conflicts they may encounter.
                            </p>
                            <p class="text-sm">
                                <b>Purpose:</b> To enhance their ability to
                                handle disagreements constructively.
                            </p>
                        </div>

                        <div class="">
                            <h3 class="text-xl font-semibold">
                                Mindfulness Activities
                            </h3>
                            <p>
                                Introduce mindfulness exercises like deep
                                breathing, meditation, or yoga.
                            </p>
                            <p class="text-sm">
                                <b>Purpose:</b> To improve their ability to stay
                                calm and focused in various situations.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                By incorporating these exercises into {{ childName }}’s routine,
                you can help them develop in areas where they may need growth,
                nurturing a well-rounded and resilient individual.
            </div>
        </div>

        <!-- For S Style Type -->
        <div id="S" v-if="style == 'S'">
            <div>
                <h2>Activities to Develop Strengths</h2>
                <p>
                    Suggested Activities for {{ childName }} to Build on Their
                    Strengths:
                </p>
            </div>
            <div class="max-w-full overflow-x-auto shadow-md rounded-lg mb-6">
                <div class="min-w-[600px] md:min-w-full">
                    <!-- Minimum width for mobile scroll -->
                    <table
                        class="w-full border-collapse border border-gray-300"
                    >
                        <thead>
                            <tr class="">
                                <th class="border px-4 py-2">Activity</th>
                                <th class="border px-4 py-2">Description</th>
                                <th class="border px-4 py-2">Purpose</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border px-4 py-2">Team Sports</td>
                                <td class="border px-4 py-2">
                                    Enrol {{ childName }} in team sports where
                                    they can collaborate and work together with
                                    peers.
                                </td>
                                <td class="border px-4 py-2">
                                    To develop teamwork and cooperation skills.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Volunteer Projects
                                </td>
                                <td class="border px-4 py-2">
                                    Involve {{ childName }} in community service
                                    or volunteer projects.
                                </td>
                                <td class="border px-4 py-2">
                                    To promote a sense of responsibility and
                                    community involvement.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">Group Projects</td>
                                <td class="border px-4 py-2">
                                    Encourage participation in school group
                                    projects or collaborative assignments.
                                </td>
                                <td class="border px-4 py-2">
                                    To enhance their ability to work effectively
                                    with others.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Mentorship Programs
                                </td>
                                <td class="border px-4 py-2">
                                    Pair {{ childName }} with a mentor or have
                                    them mentor younger students.
                                </td>
                                <td class="border px-4 py-2">
                                    To develop leadership skills and a sense of
                                    responsibility.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Family Activities
                                </td>
                                <td class="border px-4 py-2">
                                    Plan family activities that require teamwork
                                    and cooperation, such as cooking or
                                    gardening.
                                </td>
                                <td class="border px-4 py-2">
                                    To strengthen family bonds and teamwork
                                    skills.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Empathy Exercises
                                </td>
                                <td class="border px-4 py-2">
                                    Engage in activities that build empathy,
                                    such as caring for pets or helping family
                                    members.
                                </td>
                                <td class="border px-4 py-2">
                                    To nurture their natural empathy and caring
                                    nature.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Drama and Role-Play
                                </td>
                                <td class="border px-4 py-2">
                                    Participate in drama activities or
                                    role-playing games that involve
                                    collaboration.
                                </td>
                                <td class="border px-4 py-2">
                                    To improve social skills and confidence in
                                    group settings.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Cooperative Games
                                </td>
                                <td class="border px-4 py-2">
                                    Play board games or activities that require
                                    cooperation and teamwork.
                                </td>
                                <td class="border px-4 py-2">
                                    To reinforce the importance of working
                                    together and sharing.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="space-y-6 m-4">
                <h2 class="textl font-semibold">
                    Exercises to Improve Areas of Growth
                </h2>
                <p class="text-base">
                    Practical Exercises for {{ childName }} to Address Areas for
                    Growth:
                </p>

                <div class="space-y-4">
                    <div class="row">
                        <div class="col-6">
                            <div class="">
                                <h4 class="text-lg font-medium">
                                    Assertiveness Training
                                </h4>
                                <p>
                                    Engage {{ childName }} in activities where
                                    they practice expressing their opinions and
                                    standing up for themselves.
                                </p>
                                <p>
                                    <strong>Purpose:</strong> To help them build
                                    confidence in voicing their needs and ideas.
                                </p>
                            </div>

                            <div class="">
                                <h4 class="text-lg font-medium">
                                    Leadership Roles
                                </h4>
                                <p>
                                    Assign tasks that require {{ childName }} to
                                    take the lead, such as being a group leader
                                    in projects or organising activities.
                                </p>
                                <p>
                                    <strong>Purpose:</strong> To develop their
                                    leadership skills and encourage initiative.
                                </p>
                            </div>

                            <div class="">
                                <h4 class="text-lg font-medium">
                                    Conflict Resolution Practice
                                </h4>
                                <p>
                                    Teach {{ childName }} conflict resolution
                                    skills through discussions and role-playing
                                    common conflicts they may encounter.
                                </p>
                                <p>
                                    <strong>Purpose:</strong> To enhance their
                                    ability to handle disagreements
                                    constructively.
                                </p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div
                                class="flex justify-center items-center mt-4 mb-4"
                            >
                                <img
                                    class="w-96 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page 26ab.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="">
                                <h4 class="text-lg font-medium">
                                    Decision-Making Scenarios
                                </h4>
                                <p>
                                    Conduct scenarios where {{ childName }} must
                                    make decisions and solve problems
                                    independently or within a group.
                                </p>
                                <p>
                                    <strong>Purpose:</strong> To improve their
                                    decision-making abilities and boost
                                    confidence in their choices.
                                </p>
                            </div>

                            <div class="">
                                <h4 class="text-lg font-medium">
                                    Public Speaking Exercises
                                </h4>
                                <p>
                                    Encourage {{ childName }} to participate in
                                    public speaking activities, such as
                                    presentations or speeches.
                                </p>
                                <p>
                                    <strong>Purpose:</strong> To build their
                                    confidence in speaking in front of others
                                    and expressing their ideas clearly.
                                </p>
                            </div>

                            <div class="">
                                <h4 class="text-lg font-medium">
                                    Empathy Exercises
                                </h4>
                                <p>
                                    Engage in activities that build empathy,
                                    such as caring for pets or helping family
                                    members.
                                </p>
                                <p>
                                    <strong>Purpose:</strong> To nurture their
                                    natural empathy and caring nature.
                                </p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div
                                class="flex justify-center items-center mt-4 mb-4"
                            >
                                <img
                                    class="w-96 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page17.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div
                                class="flex justify-center items-center mt-4 mb-4"
                            >
                                <img
                                    class="w-64 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page31b.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="">
                                <h4 class="text-lg font-medium">
                                    Role-Playing Leadership
                                </h4>
                                <p>
                                    Conduct role-playing games that require
                                    {{ childName }} to take on leadership roles
                                    and make decisions.
                                </p>
                                <p>
                                    <strong>Purpose:</strong> To help them
                                    practice leadership in a supportive
                                    environment.
                                </p>
                            </div>

                            <div class="">
                                <h4 class="text-lg font-medium">
                                    Mindfulness Activities
                                </h4>
                                <p>
                                    Introduce mindfulness exercises like deep
                                    breathing, meditation, or yoga.
                                </p>
                                <p>
                                    <strong>Purpose:</strong> To improve their
                                    ability to stay calm and focused in various
                                    situations.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <p>
                    By incorporating these exercises into {{ childName }} ’s
                    routine, you can help them develop in areas where they may
                    need growth, nurturing a well-rounded and resilient
                    individual.
                </p>
            </div>
        </div>

        <!-- For SC Style Type -->
        <div id="SC" v-if="style == 'SC'">
            <h2>Activities to Develop Strengths</h2>
            <p>
                Suggested Activities for {{ childName }} to Build on Their
                Strengths:
            </p>

            <div class="max-w-full overflow-x-auto shadow-md rounded-lg mb-6">
                <div class="min-w-[600px] md:min-w-full">
                    <!-- Minimum width for mobile scroll -->
                    <table
                        class="w-full border-collapse border border-gray-300"
                    >
                        <thead>
                            <tr class="text-left">
                                <th class="px-4 py-2 border-b">Activity</th>
                                <th class="px-4 py-2 border-b">Description</th>
                                <th class="px-4 py-2 border-b">Purpose</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="">
                                <td class="px-4 py-2 border-b">
                                    Organisational Tasks
                                </td>
                                <td class="px-4 py-2 border-b">
                                    Assign {{ childName }} tasks that require
                                    careful planning and organisation.
                                </td>
                                <td class="px-4 py-2 border-b">
                                    To enhance their organisational skills and
                                    reliability.
                                </td>
                            </tr>
                            <tr class="">
                                <td class="px-4 py-2 border-b">
                                    Group Projects
                                </td>
                                <td class="px-4 py-2 border-b">
                                    Involve {{ childName }} in group projects
                                    where they can work collaboratively with
                                    peers.
                                </td>
                                <td class="px-4 py-2 border-b">
                                    To develop teamwork and social skills.
                                </td>
                            </tr>
                            <tr class="">
                                <td class="px-4 py-2 border-b">
                                    Community Service
                                </td>
                                <td class="px-4 py-2 border-b">
                                    Engage in community service activities
                                    together.
                                </td>
                                <td class="px-4 py-2 border-b">
                                    To instil a sense of social responsibility.
                                </td>
                            </tr>
                            <tr class="">
                                <td class="px-4 py-2 border-b">
                                    Classroom Helper Roles
                                </td>
                                <td class="px-4 py-2 border-b">
                                    Assign classroom roles that involve
                                    assisting the teacher or helping classmates.
                                </td>
                                <td class="px-4 py-2 border-b">
                                    To strengthen their supportive nature and
                                    responsibility.
                                </td>
                            </tr>
                            <tr class="">
                                <td class="px-4 py-2 border-b">
                                    Puzzle and Strategy Games
                                </td>
                                <td class="px-4 py-2 border-b">
                                    Encourage playing puzzles and strategy games
                                    that require careful thought and planning.
                                </td>
                                <td class="px-4 py-2 border-b">
                                    To boost their problem-solving and attention
                                    to detail skills.
                                </td>
                            </tr>
                            <tr class="">
                                <td class="px-4 py-2 border-b">
                                    Storytelling Sessions
                                </td>
                                <td class="px-4 py-2 border-b">
                                    Organise storytelling or creative writing
                                    sessions.
                                </td>
                                <td class="px-4 py-2 border-b">
                                    To enhance their creativity and
                                    communication skills.
                                </td>
                            </tr>
                            <tr class="">
                                <td class="px-4 py-2 border-b">
                                    Arts and Crafts Projects
                                </td>
                                <td class="px-4 py-2 border-b">
                                    Provide materials for arts and crafts
                                    projects that they can complete carefully.
                                </td>
                                <td class="px-4 py-2 border-b">
                                    To allow them to express creativity while
                                    being meticulous.
                                </td>
                            </tr>
                            <tr class="">
                                <td class="px-4 py-2 border-b">
                                    Mentorship Programs
                                </td>
                                <td class="px-4 py-2 border-b">
                                    Pair {{ childName }} with a mentor or allow
                                    them to mentor younger students.
                                </td>
                                <td class="px-4 py-2 border-b">
                                    To build leadership and empathy.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="space-y-6">
                <div>
                    <h2 class="textl font-semibold">
                        Exercises to Improve Areas of Growth
                    </h2>
                    <p class="text-base">
                        Practical Exercises for {{ childName }} to Address Areas
                        for Growth:
                    </p>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="">
                            <h3 class="text-xl font-semibold">
                                Active Listening Games
                            </h3>
                            <p>
                                Engage {{ childName }} in games that require
                                listening and repeating back what was heard.
                            </p>
                            <p class="text-sm">
                                <b>Purpose:</b> To improve their listening
                                skills and ensure they understand others.
                            </p>
                        </div>

                        <div class="">
                            <h3 class="text-xl font-semibold">
                                Decision-Making Exercises
                            </h3>
                            <p>
                                Involve {{ childName }} in tasks that require
                                making choices, such as planning a family outing
                                or choosing a class project.
                            </p>
                            <p class="text-sm">
                                <b>Purpose:</b> To enhance their decision-making
                                skills and build confidence in their judgments.
                            </p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center mt-4 mb-4">
                            <img
                                class="w-96 h-auto object-contain"
                                :src="'/images/reports-svg-images/Page 26ab.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="">
                            <h3 class="text-xl font-semibold">
                                Handling Criticism Practice
                            </h3>
                            <p>
                                Conduct role-playing scenarios where
                                {{ childName }} receives constructive feedback
                                and learns how to respond positively.
                            </p>
                            <p class="text-sm">
                                <b>Purpose:</b> To teach them how to accept
                                criticism as a tool for improvement.
                            </p>
                        </div>

                        <div class="">
                            <h3 class="text-xl font-semibold">
                                Group Collaboration Projects
                            </h3>
                            <p>
                                Involve {{ childName }} in projects that require
                                collaboration and sharing of ideas.
                            </p>
                            <p class="text-sm">
                                <b>Purpose:</b> To teach them the importance of
                                teamwork and valuing others’ contributions.
                            </p>
                        </div>

                        <div class="">
                            <h3 class="text-xl font-semibold">
                                Adaptability Challenges
                            </h3>
                            <p>
                                Engage in activities that involve sudden changes
                                or require quick thinking.
                            </p>
                            <p class="text-sm">
                                <b>Purpose:</b> To help {{ childName }} become
                                more adaptable and comfortable with unexpected
                                situations.
                            </p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center mt-4 mb-4">
                            <img
                                class="w-96 h-auto object-contain"
                                :src="'/images/reports-svg-images/Page17.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="flex justify-center items-center mt-4 mb-4">
                            <img
                                class="w-96 h-auto object-contain"
                                :src="'/images/reports-svg-images/Page31b.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="">
                            <h3 class="text-xl font-semibold">
                                Empathy Role-Playing
                            </h3>
                            <p>
                                Engage in role-playing activities that require
                                {{ childName }} to consider others' feelings and
                                perspectives.
                            </p>
                            <p class="text-sm">
                                <b>Purpose:</b> To develop empathy and improve
                                their ability to understand and connect with
                                others.
                            </p>
                        </div>

                        <div class="">
                            <h3 class="text-xl font-semibold">
                                Organisational Challenges
                            </h3>
                            <p>
                                Set up challenges that require
                                {{ childName }} to organise tasks or plan
                                events.
                            </p>
                            <p class="text-sm">
                                <b>Purpose:</b> To improve their organisational
                                skills and ability to manage multiple
                                responsibilities.
                            </p>
                        </div>

                        <div class="">
                            <h3 class="text-xl font-semibold">
                                Mindfulness Activities
                            </h3>
                            <p>
                                Introduce mindfulness exercises like deep
                                breathing, meditation, or yoga.
                            </p>
                            <p class="text-sm">
                                <b>Purpose:</b> To help {{ childName }} manage
                                stress and stay calm in various situations.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                By incorporating these exercises into {{ childName }}’s routine,
                you can help them develop in areas where they may need growth,
                nurturing a well-rounded and resilient individual.
            </div>
        </div>

        <!-- For SI Style Type -->
        <div id="SI" v-if="style == 'SI'" class="">
            <div>
                <h2>Activities to Develop Strengths</h2>
                <p>
                    Suggested Activities for {{ childName }} to Build on Their
                    Strengths:
                </p>
            </div>
            <div class="max-w-full overflow-x-auto shadow-md rounded-lg mb-6">
                <div class="min-w-[600px] md:min-w-full">
                    <!-- Minimum width for mobile scroll -->
                    <table
                        class="w-full border-collapse border border-gray-300"
                    >
                        <thead>
                            <tr>
                                <th
                                    class="border border-gray-300 px-4 py-2 text-left font-semibold"
                                >
                                    Activity
                                </th>
                                <th
                                    class="border border-gray-300 px-4 py-2 text-left font-semibold"
                                >
                                    Description
                                </th>
                                <th
                                    class="border border-gray-300 px-4 py-2 text-left font-semibold"
                                >
                                    Purpose
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">
                                    Group Projects
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Involve {{ childName }} in collaborative
                                    projects where they can work with peers.
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    To enhance teamwork and social skills.
                                </td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">
                                    Creative Workshops
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Encourage participation in art, music, or
                                    drama workshops.
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    To develop their creativity and expressive
                                    abilities.
                                </td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">
                                    Peer Mentoring
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Pair {{ childName }} with younger students
                                    for mentoring activities.
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    To build leadership and empathy.
                                </td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">
                                    Community Service
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Engage in community service activities
                                    together.
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    To instil a sense of social responsibility.
                                </td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">
                                    Team Sports
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Encourage joining team sports or group
                                    activities.
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    To improve cooperation and physical fitness.
                                </td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">
                                    Storytelling Sessions
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Organise storytelling or creative writing
                                    sessions.
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    To boost their imagination and communication
                                    skills.
                                </td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">
                                    Classroom Helper Roles
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Assign classroom roles that require
                                    assisting the teacher or helping classmates.
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    To strengthen their supportive nature and
                                    responsibility.
                                </td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">
                                    Social Clubs
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Encourage joining clubs that align with
                                    their interests, like drama club or art
                                    club.
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    To expand their social network and explore
                                    interests.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="mb-4 mt-4">
                <h2 class="text-3xl font-bold mb-2">
                    Exercises to Improve Areas of Growth
                </h2>
                <p>
                    Practical Exercises for {{ childName }} to Address Areas for
                    Growth:
                </p>

                <div class="">
                    <div class="row">
                        <div class="col-6">
                            <div>
                                <h3 class="text-xl font-semibold">
                                    Active Listening Games:
                                </h3>
                                <p>
                                    Engage {{ childName }} in games that require
                                    listening and repeating back what was heard.
                                </p>
                                <p class="">
                                    <strong>Purpose: </strong>To improve their
                                    listening skills and ensure they understand
                                    others.
                                </p>
                            </div>

                            <div>
                                <h3 class="text-xl font-semibold">
                                    Assertiveness Training:
                                </h3>
                                <p>
                                    Provide activities that encourage
                                    {{ childName }} to express their opinions
                                    and make decisions.
                                </p>
                                <p class="">
                                    <strong>Purpose: </strong>To help them
                                    become more confident in sharing their ideas
                                    and standing up for themselves.
                                </p>
                            </div>

                            <div>
                                <h3 class="text-xl font-semibold">
                                    Decision-Making Exercises:
                                </h3>
                                <p>
                                    Involve {{ childName }} in tasks that
                                    require making choices, such as planning a
                                    family outing or choosing a class project.
                                </p>
                                <p class="">
                                    <strong>Purpose: </strong>To enhance their
                                    decision-making skills and build confidence
                                    in their judgments.
                                </p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div
                                class="flex justify-center items-center mt-4 mb-4"
                            >
                                <img
                                    class="w-96 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page 26ab.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div>
                                <h3 class="text-xl font-semibold">
                                    Handling Criticism Practice:
                                </h3>
                                <p>
                                    Conduct role-playing scenarios where
                                    {{ childName }} receives constructive
                                    feedback and learns how to respond
                                    positively.
                                </p>
                                <p class="">
                                    <strong>Purpose: </strong>To teach them how
                                    to accept criticism as a tool for
                                    improvement.
                                </p>
                            </div>

                            <div>
                                <h3 class="text-xl font-semibold">
                                    Group Collaboration Projects:
                                </h3>
                                <p>
                                    Involve {{ childName }} in projects that
                                    require collaboration and sharing of ideas.
                                </p>
                                <p class="">
                                    <strong>Purpose: </strong>To teach them the
                                    importance of teamwork and valuing others’
                                    contributions.
                                </p>
                            </div>

                            <div>
                                <h3 class="text-xl font-semibold">
                                    Empathy Role-Playing:
                                </h3>
                                <p>
                                    Engage in role-playing activities that
                                    require
                                    {{ childName }} to consider others' feelings
                                    and perspectives.
                                </p>
                                <p class="">
                                    <strong>Purpose: </strong>To develop empathy
                                    and improve their ability to understand and
                                    connect with others.
                                </p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div
                                class="flex justify-center items-center mt-4 mb-4"
                            >
                                <img
                                    class="w-96 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page17.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div
                                class="flex justify-center items-center mt-4 mb-4"
                            >
                                <img
                                    class="w-64 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page31b.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                        <div class="col-6">
                            <div>
                                <h3 class="text-xl font-semibold">
                                    Organisational Challenges:
                                </h3>
                                <p>
                                    Set up challenges that require
                                    {{ childName }} to organise tasks or plan
                                    events.
                                </p>
                                <p class="">
                                    <strong>Purpose: </strong> To improve their
                                    organisational skills and ability to manage
                                    multiple responsibilities.
                                </p>
                            </div>

                            <div>
                                <h3 class="text-xl font-semibold">
                                    Mindfulness Activities:
                                </h3>
                                <p>
                                    Introduce mindfulness exercises like deep
                                    breathing, meditation, or yoga.
                                </p>
                                <p class="">
                                    <strong>Purpose: </strong> To help
                                    {{ childName }} manage stress and stay calm
                                    in various situations.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <p>
                    By incorporating these exercises into {{ childName }} ’s
                    routine, you can help them develop in areas where they may
                    need growth, nurturing a well-rounded and resilient
                    individual.
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
div.col-6.font-medium,
li > div,
div.space-y-2.font-medium {
    color: rgb(36, 168, 250);
    font-weight: bold;
    font-size: 19px;
}

div.col-6.font-medium,
li > div > strong,
span,
b,
div.space-y-2.font-medium,
em,
p > strong,
.pink-heading > div > div > h4 {
    color: rgb(36, 168, 250);
    font-weight: bold;
    color: #fa25c4;
    /* font-size: 19px; */
}

h2,
.p-6 > .row > .col-6 > h2,
h3,
h4.text-lg {
    color: rgb(55 48 163);
    font-weight: bold !important;
}

table {
    width: 100%;
    border-collapse: collapse;
    border: 1px solid #ddd;
    border-radius: 8px;
    overflow: hidden;
}

thead {
    background: linear-gradient(to right, #8b5cf6, #ec4899);
    color: white;
}

th,
td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

tbody tr:nth-child(odd) {
    background-color: rgb(254 249 195);
    /* Yellow */
}

tbody tr:nth-child(even) {
    background-color: rgb(220 252 231);
    /* Green */
}
p,
ul > li,
ol > li,
strong,
.text-base {
    font-size: 1.125rem;
    line-height: 1.75rem;
}
ul > li {
    /* margin-top: 17px; */
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
        padding: 0;
    }

    .p-6 {
        padding: 1rem;
    }

    h2,
    h3,
    h4 {
        font-size: 1.5rem !important;
        color: rgb(55 48 163);
        font-weight: bold !important;
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
    name: "Recommendation",
    layout: AssessmentTypes,
    props: {
        style: String,
        childName: String,
        image: String,
    },
};
</script>
