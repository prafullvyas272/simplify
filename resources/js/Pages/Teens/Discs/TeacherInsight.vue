<template>
     <div class="p-6">
    <div class="space-y-6 mt-3">
        <h1 class="font-bold mb-4 text-center">Teacher Insights</h1>
    </div>
    <div class="p-4 md:p-6">

    <!-- For C Style Report -->
    <div v-if="style == 'C'">
        <!-- Content for C -->
        <div class="space-y-6">
            <div class="  rounded-lg  border-gray-200">
                <h2 class="text-xl md:text-3xl mb-4">
                    Welcome, Teachers!
                </h2>
                <p class="mt-2 text-gray-700">
                    Welcome to the Teacher Insights section of the Teen DISC
                    Assessment Report. Understanding your students' unique
                    personality traits can help you create an engaging and
                    supportive learning environment. This section is designed to
                    provide practical strategies for teaching a student with a
                    Cautious (C) style. These students are often analytical,
                    detail-oriented, and methodical learners who thrive in
                    structured environments.
                </p>
            </div>

            <div class="row">
                <div class="col-6">

                    <div class="  rounded-lg  border-gray-200">
                        <h2 class="text-xl md:text-3xl mb-4">
                            Teaching Strategies for Cautious (C) Style Students
                        </h2>
                        <ul class="list-disc pl-5 mt-2 text-gray-700">
                            <li>
                                <strong>Provide clear instructions:</strong> Offer detailed instructions
                                and expectations for assignments and tasks, ensuring
                                your student understands what is required.
                            </li>
                            <li>
                                <strong>Create a structured environment:</strong> Establish a consistent
                                classroom routine with clear guidelines to help your
                                student feel secure and focused.
                            </li>
                            <li>
                                <strong>Encourage analytical thinking:</strong> Design activities that
                                challenge your student's critical thinking skills and
                                allow them to explore subjects in depth.
                            </li>
                            <li>
                                <strong>Promote independent learning:</strong> Provide opportunities for
                                your student to work independently, allowing them to
                                concentrate deeply on their studies.
                            </li>
                            <li>
                                <strong>Encourage open communication:</strong> Encourage your student to
                                express their thoughts and ideas, ensuring they feel
                                heard and valued.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-images/TeensDiscReportStyleImages/Teacherinsights/8.svg'" alt="" />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-images/TeensDiscReportStyleImages/Teacherinsights/20.svg'" alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <div class="  rounded-lg  border-gray-200">
                        <h2 class="text-xl md:text-3xl mb-4">
                            How Teachers Can Support Cautious (C) Style Students
                        </h2>
                        <ul class="list-disc pl-5 mt-2 text-gray-700">
                            <li>
                                <strong>Use structured lessons:</strong> Develop lessons that are
                                well-organised and clearly outline the objectives and
                                steps involved.
                            </li>
                            <li>
                                <strong>Encourage attention to detail: </strong>Recognise and appreciate
                                your student’s ability to focus on details and produce
                                high-quality work.
                            </li>
                            <li>
                                <strong>Offer constructive feedback: </strong> Provide specific feedback
                                that helps your student improve their work and build
                                confidence.
                            </li>
                            <li>
                                <strong>Balance routine with exploration: </strong> While maintaining a
                                structured environment, encourage your student to
                                explore new ideas and concepts.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="overflow-x-auto   rounded-lg  border-gray-200">
                        <h2 class="text-xl md:text-3xl mb-4">
                            Table of Teaching Tips for Cautious Style
                        </h2>
                        <table class="table-auto border-collapse border border-gray-300 w-full font-bold">
                            <thead class="">
                                <tr class="">
                                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">
                                        Focus Area
                                    </th>
                                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">
                                        Suggestions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-t">
                                    <td class="px-4 py-2 text-sm text-gray-700">
                                        Provide Clear Instructions
                                    </td>
                                    <td class="px-4 py-2 text-sm text-gray-700">
                                        Offer detailed and specific instructions for tasks
                                        and assignments
                                    </td>
                                </tr>
                                <tr class="border-t">
                                    <td class="px-4 py-2 text-sm text-gray-700">
                                        Create a Structured Environment
                                    </td>
                                    <td class="px-4 py-2 text-sm text-gray-700">
                                        Establish consistent classroom routines and clear
                                        guidelines
                                    </td>
                                </tr>
                                <tr class="border-t">
                                    <td class="px-4 py-2 text-sm text-gray-700">
                                        Encourage Analytical Thinking
                                    </td>
                                    <td class="px-4 py-2 text-sm text-gray-700">
                                        Design activities that challenge critical thinking
                                        skills
                                    </td>
                                </tr>
                                <tr class="border-t">
                                    <td class="px-4 py-2 text-sm text-gray-700">
                                        Promote Independent Learning
                                    </td>
                                    <td class="px-4 py-2 text-sm text-gray-700">
                                        Provide opportunities for focused, independent study
                                    </td>
                                </tr>
                                <tr class="border-t">
                                    <td class="px-4 py-2 text-sm text-gray-700">
                                        Encourage Open Communication
                                    </td>
                                    <td class="px-4 py-2 text-sm text-gray-700">
                                        Encourage expression of thoughts and ideas in a
                                        supportive setting
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="mt-4 text-sm text-gray-700">
                            These strategies can help you create an engaging and supportive
                            classroom environment for students with a Cautious (C) style,
                            empowering them to reach their full potential.
                        </p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-images/TeensDiscReportStyleImages/Teacherinsights/22.svg'" alt="" />
                    </div>
                </div>
            </div>




        </div>

    </div>

    <!-- For CD Style Report -->
    <div v-if="style == 'CD'">
        <div class="">
            <h2 class="text-xl md:text-3xl mb-4">Welcome, Teachers!</h2>
            <p class="">
                Welcome to the Teacher Insights section of our report.
                Understanding your students' unique personality traits can help
                you create an engaging and supportive learning environment. This
                section is designed to provide practical strategies for teaching
                a student with a Cautious-Dominant (CD) style. These students
                are detail-oriented, analytical, and decisive. They thrive in
                environments that are structured, goal-oriented, and efficient.
            </p>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Teaching Strategies for Cautious-Dominant (CD) Style Students
                    </h2>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Provide Clear Structure:</strong> Create a classroom
                            environment with clear routines, expectations, and
                            objectives. CD students excel when they know exactly what is
                            expected of them and have a clear plan to follow.
                        </li>
                        <li>
                            <strong>Encourage Independent Work:</strong> Give CD
                            students opportunities to work independently on tasks that
                            challenge their analytical skills. They value autonomy and
                            prefer to rely on their own abilities to complete
                            assignments.
                        </li>
                        <li>
                            <strong>Challenge Analytical Thinking:</strong> Engage CD
                            students with tasks that require deep analysis,
                            problem-solving, and logical reasoning. Case studies,
                            research projects, and strategy games are particularly
                            stimulating for them.
                        </li>
                        <li>
                            <strong>Balance Structure with Flexibility:</strong> While
                            CD students thrive on structure, it’s also important to
                            introduce elements of flexibility. Encourage them to adapt
                            to new situations and consider alternative approaches.
                        </li>
                        <li>
                            <strong>Provide Constructive Feedback:</strong> Offer
                            specific and constructive feedback that focuses on their
                            analytical process and decision-making. Acknowledge their
                            strengths while also guiding them on how to improve.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Teacherinsights/8.svg'" alt="" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Teacherinsights/20.svg'" alt="" />
                </div>
            </div>
            <div class="col-6">

                <div class="">
                    <h2 class="text-xl md:text-3xl mb-4">
                        How Teachers Can Support Cautious-Dominant (CD) Style Students
                    </h2>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Promote Independence:</strong> Encourage CD students
                            to take ownership of their learning by giving them control
                            over their projects and tasks.
                        </li>
                        <li>
                            <strong>Encourage Analytical Skills:</strong> Support their
                            interest in analysing and solving complex problems by
                            incorporating activities that challenge their thinking.
                        </li>
                        <li>
                            <strong>Encourage Participation in Group Work:</strong>
                            While they prefer working independently, it’s beneficial for
                            CD students to engage in group work to develop their
                            collaboration skills.
                        </li>
                        <li>
                            <strong>Provide a Calm and Focused Environment:</strong>
                            Minimise distractions in the classroom to help CD students
                            maintain their focus and efficiency.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">



                <div class="p-6">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Table of Teaching Tips for Cautious-Dominant Style
                    </h2>
                    <table class="table-auto border-collapse border border-gray-300 w-full font-bold">
                        <thead>
                            <tr class="">
                                <th class="border border-gray-300 px-4 py-2 text-left">
                                    Focus Area
                                </th>
                                <th class="border border-gray-300 px-4 py-2 text-left">
                                    Suggestions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border font-bold border-gray-300 px-4 py-2">
                                    Provide Clear Structure
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Create a classroom environment with clear routines
                                    and objectives
                                </td>
                            </tr>
                            <tr>
                                <td class="border font-bold border-gray-300 px-4 py-2">
                                    Encourage Independent Work
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Give students opportunities to work independently on
                                    analytical tasks
                                </td>
                            </tr>
                            <tr>
                                <td class="border font-bold border-gray-300 px-4 py-2">
                                    Challenge Analytical Thinking
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Engage students with tasks that require deep
                                    analysis and problem-solving
                                </td>
                            </tr>
                            <tr>
                                <td class="border font-bold border-gray-300 px-4 py-2">
                                    Balance Structure with Flexibility
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Introduce flexibility and encourage adaptability
                                </td>
                            </tr>
                            <tr>
                                <td class="border font-bold border-gray-300 px-4 py-2">
                                    Provide Constructive Feedback
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Offer specific and constructive feedback focused on
                                    analytical skills
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="mt-4 font-bold">
                        These strategies can help you create an engaging and supportive
                        classroom environment for students with a Cautious-Dominant (CD)
                        style, empowering them to reach their full potential.
                    </p>
                </div>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Teacherinsights/22.svg'" alt="" />
                </div>
            </div>
        </div>










    </div>

    <!-- For CS Style Report -->
    <div v-if="style == 'CS'">
        <div class="">
            <h2 class="text-xl md:text-3xl mb-4">Welcome, Teachers!</h2>
            <p class="">
                Welcome to the Teacher Insights section of the Teen DISC
                Assessment Report. Understanding your students' unique
                personality traits can help you create an engaging and
                supportive learning environment. This section is designed to
                provide practical strategies for teaching a student with a
                Cautious-Supportive (CS) style. These students are
                detail-oriented, patient, and empathetic. They thrive in
                environments that are structured, supportive, and calm.
            </p>
        </div>

        <div class="row">
            <div class="col-6">

                <div class="">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Teaching Strategies for Cautious-Supportive (CS) Style Students
                    </h2>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Maintain Structure and Routine:</strong> Create a
                            classroom environment with clear routines and expectations.
                            Consistency helps CS students feel secure and focused.
                        </li>
                        <li>
                            <strong>Encourage Group Work:</strong> Promote cooperative
                            learning by encouraging group projects and collaborative
                            activities. CS students excel in social and team-oriented
                            settings.
                        </li>
                        <li>
                            <strong>Provide Detailed Instructions:</strong> Offer clear
                            and detailed instructions for assignments and projects. CS
                            students appreciate having a thorough understanding of what
                            is expected.
                        </li>
                        <li>
                            <strong>Give Supportive Feedback:</strong> Provide specific
                            and constructive feedback to help CS students improve.
                            Acknowledge their detailed work and encourage them to
                            continue refining their skills.
                        </li>
                        <li>
                            <strong>Be Patient and Understanding:</strong> Show empathy
                            and understanding towards CS students. Create a safe space
                            where they feel comfortable expressing their thoughts and
                            emotions.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Teacherinsights/8.svg'" alt="" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Teacherinsights/20.svg'" alt="" />
                </div>
            </div>
            <div class="col-6">

                <div class="">
                    <h2 class="text-xl md:text-3xl mb-4">
                        How Teachers Can Support Cautious-Supportive (CS) Style Students
                    </h2>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Promote Stability:</strong> Ensure that your
                            classroom provides a stable and predictable setting. CS
                            students thrive in environments where they feel secure.
                        </li>
                        <li>
                            <strong>Encourage Collaborative Efforts:</strong> Promote
                            opportunities for CS students to work with others. Their
                            cooperative nature makes them valuable team members.
                        </li>
                        <li>
                            <strong>Recognise Their Efforts:</strong> Regularly
                            acknowledge and praise CS students for their detailed and
                            precise work. Positive reinforcement motivates them to
                            continue excelling.
                        </li>
                        <li>
                            <strong>Provide Emotional Support:</strong> Be attentive to
                            CS students' emotional needs. Offer reassurance and comfort
                            when they feel stressed or anxious.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">

                <div class="p-6">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Table of Teaching Tips for Cautious-Supportive Style
                    </h2>
                    <table class="table-auto border-collapse border border-gray-300 w-full font-bold">
                        <thead>
                            <tr class="">
                                <th class="border border-gray-300 px-4 py-2 text-left">
                                    Focus Area
                                </th>
                                <th class="border border-gray-300 px-4 py-2 text-left">
                                    Suggestions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border font-bold border-gray-300 px-4 py-2">
                                    Maintain Structure and Routine
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Create a classroom environment with clear routines
                                    and expectations
                                </td>
                            </tr>
                            <tr>
                                <td class="border font-bold border-gray-300 px-4 py-2">
                                    Encourage Group Work
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Promote cooperative learning through group projects
                                </td>
                            </tr>
                            <tr>
                                <td class="border font-bold border-gray-300 px-4 py-2">
                                    Provide Detailed Instructions
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Offer clear and detailed instructions for
                                    assignments
                                </td>
                            </tr>
                            <tr>
                                <td class="border font-bold border-gray-300 px-4 py-2">
                                    Give Supportive Feedback
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Provide specific and constructive feedback
                                </td>
                            </tr>
                            <tr>
                                <td class="border font-bold border-gray-300 px-4 py-2">
                                    Be Patient and Understanding
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Show empathy and create a safe space for expression
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="mt-4 font-bold">
                        These strategies can help you create an engaging and supportive
                        classroom environment for students with a Cautious-Supportive
                        (CS) style, empowering them to reach their full potential.
                    </p>
                </div>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Teacherinsights/22.svg'" alt="" />
                </div>
            </div>
        </div>




    </div>

    <!-- For D Style Report -->
    <div v-if="style == 'D'">
        <div class="">
            <h2 class="text-xl md:text-3xl mb-4">Welcome, Teachers!</h2>
            <p class="">
                Welcome to the Teacher Insights section of the Teen DISC
                Assessment Report. Understanding your students' unique
                personality traits can help you create an effective and
                supportive learning environment. This section is designed to
                provide practical strategies for teaching a student with a
                Dominant (D) style. These students are often confident,
                assertive, and eager to take on leadership roles.
            </p>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Teaching Strategies for Dominant (D) Style Students
                    </h2>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Encourage Leadership Roles:</strong> Give your
                            student opportunities to lead group projects or class
                            activities. This allows them to utilise their natural
                            leadership abilities and feel valued in the classroom.
                        </li>
                        <li>
                            <strong>Set Clear Objectives:</strong> Dominant students
                            thrive when they know what is expected of them. Clearly
                            outline goals and expectations for assignments and classroom
                            behaviour.
                        </li>
                        <li>
                            <strong>Provide Challenging Activities:</strong> Engage them
                            with tasks that push their limits and require
                            problem-solving skills. This can keep them motivated and
                            focused.
                        </li>
                        <li>
                            <strong>Promote an Open Dialogue:</strong> Encourage open
                            communication by allowing them to express their ideas and
                            opinions. Provide constructive feedback to help them
                            improve.
                        </li>
                        <li>
                            <strong>Recognise Achievements:</strong> Acknowledge their
                            accomplishments and hard work. Positive reinforcement
                            encourages them to keep striving for success.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Teacherinsights/8.svg'" alt="" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Teacherinsights/20.svg'" alt="" />
                </div>
            </div>
            <div class="col-6">


                <div class="">
                    <h2 class="text-xl md:text-3xl mb-4">
                        How Teachers Can Support Dominant (D) Style Students
                    </h2>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Create a Dynamic Classroom:</strong> Incorporate
                            activities that require quick thinking and action to keep
                            them engaged.
                        </li>
                        <li>
                            <strong>Balance Structure with Flexibility:</strong> While
                            maintaining classroom structure, allow for some flexibility
                            to accommodate their desire for independence.
                        </li>
                        <li>
                            <strong>Promote Empathy and Collaboration:</strong>
                            Encourage activities that require teamwork and understanding
                            of different perspectives to help them develop empathy.
                        </li>
                        <li>
                            <strong>Use Competitive Elements:</strong> Introduce
                            friendly competition through games and activities to
                            motivate them and harness their competitive spirit.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">


                <div class="p-6">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Table of Teaching Tips for Dominant Style
                    </h2>
                    <table class="table-auto border-collapse border border-gray-300 w-full font-bold">
                        <thead>
                            <tr class="">
                                <th class="border border-gray-300 px-4 py-2 text-left">
                                    Focus Area
                                </th>
                                <th class="border border-gray-300 px-4 py-2 text-left">
                                    Suggestions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border font-bold border-gray-300 px-4 py-2">
                                    Leadership Roles
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Assign roles such as group leader or class
                                    spokesperson
                                </td>
                            </tr>
                            <tr>
                                <td class="border font-bold border-gray-300 px-4 py-2">
                                    Setting Objectives
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Clearly communicate goals and expectations for
                                    assignments
                                </td>
                            </tr>
                            <tr>
                                <td class="border font-bold border-gray-300 px-4 py-2">
                                    Challenging Activities
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Offer tasks that require critical thinking and
                                    problem-solving
                                </td>
                            </tr>
                            <tr>
                                <td class="border font-bold border-gray-300 px-4 py-2">
                                    Open Dialogue
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Build a classroom environment where students feel
                                    comfortable sharing ideas
                                </td>
                            </tr>
                            <tr>
                                <td class="border font-bold border-gray-300 px-4 py-2">
                                    Recognising Achievements
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Celebrate successes and provide positive feedback
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="mt-4 font-bold">
                        These strategies can help you create an engaging and supportive
                        classroom environment for students with a Dominant (D) style,
                        empowering them to reach their full potential.
                    </p>
                </div>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Teacherinsights/22.svg'" alt="" />
                </div>
            </div>
        </div>



    </div>

    <!-- For DC Style Report -->
    <div v-if="style == 'DC'">
        <div class="">
            <h2 class="text-xl md:text-3xl mb-4">Welcome, Teachers!</h2>
            <p>
                Welcome to the Teacher Insights section of the Teen DISC
                Assessment Report. Understanding your students' unique
                personality traits can help you create an engaging and
                supportive learning environment. This section is designed to
                provide practical strategies for teaching a student with a
                Dominant-Cautious (DC) style. These students are often
                confident, analytical, and driven, thriving in environments that
                offer structure and clear goals.
            </p>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Teaching Strategies for Dominant-Cautious (DC) Style Students
                    </h2>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Encourage Leadership Roles:</strong> Provide
                            opportunities for your student to take on leadership roles
                            in group projects, presentations, and classroom activities.
                        </li>
                        <li>
                            <strong>Set Clear Goals:</strong> Establish clear and
                            challenging goals to keep your student motivated and focused
                            on their objectives.
                        </li>
                        <li>
                            <strong>Promote Structured Learning:</strong> Engage your
                            student with structured and methodical learning experiences,
                            such as detailed assignments and research projects.
                        </li>
                        <li>
                            <strong>Recognise Achievements:</strong> Acknowledge your
                            student’s successes and efforts with praise and positive
                            reinforcement to boost their confidence and motivation.
                        </li>
                        <li>
                            <strong>Maintain a Quiet and Organised Environment:</strong>
                            Create a classroom environment that is orderly and free from
                            distractions, allowing your student to concentrate deeply on
                            their work.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Teacherinsights/8.svg'" alt="" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Teacherinsights/20.svg'" alt="" />
                </div>
            </div>
            <div class="col-6">

                <div class="">
                    <h2 class="text-xl md:text-3xl mb-4">
                        How Teachers Can Support Dominant-Cautious (DC) Style Students
                    </h2>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Provide Clear Instructions:</strong> Offer detailed
                            and specific instructions for tasks and assignments to
                            ensure your student understands expectations.
                        </li>
                        <li>
                            <strong>Encourage Analytical Thinking:</strong> Facilitate
                            opportunities for your student to engage in critical
                            thinking and problem-solving activities.
                        </li>
                        <li>
                            <strong>Offer Constructive Feedback:</strong> Provide
                            constructive feedback that helps your student refine their
                            skills and approach, balancing praise with actionable
                            suggestions for improvement.
                        </li>
                        <li>
                            <strong>Challenge Their Thinking:</strong> Design activities
                            that challenge your student’s critical thinking and
                            problem-solving skills, keeping them engaged and motivated.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">



                <div class="p-6">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Table of Teaching Tips for Dominant-Cautious Style
                    </h2>
                    <table class="table-auto border-collapse border border-gray-300 w-full font-bold">
                        <thead>
                            <tr class="">
                                <th class="border border-gray-300 px-4 py-2 text-left">
                                    Focus Area
                                </th>
                                <th class="border border-gray-300 px-4 py-2 text-left">
                                    Suggestions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border font-bold border-gray-300 px-4 py-2">
                                    Encourage Leadership Roles
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Provide opportunities for leadership in group
                                    projects and classroom activities
                                </td>
                            </tr>
                            <tr>
                                <td class="border font-bold border-gray-300 px-4 py-2">
                                    Set Clear Goals
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Establish clear and challenging goals to keep them
                                    motivated
                                </td>
                            </tr>


                            <tr>
                                <td class="border font-bold border-gray-300 px-4 py-2">
                                    Promote Structured Learning
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Engage with detailed assignments and research
                                    projects
                                </td>
                            </tr>
                            <tr>
                                <td class="border font-bold border-gray-300 px-4 py-2">
                                    Recognise Achievements
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Acknowledge successes and efforts with praise and
                                    positive reinforcement
                                </td>
                            </tr>
                            <tr>
                                <td class="border font-bold border-gray-300 px-4 py-2">
                                    Maintain a Quiet and Organised Environment
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Create an orderly classroom environment that allows
                                    for deep concentration
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="mt-4 font-bold">
                        These strategies can help you create an engaging and supportive
                        classroom environment for students with a Dominant-Cautious (DC)
                        style, empowering them to reach their full potential.
                    </p>
                </div>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Teacherinsights/22.svg'" alt="" />
                </div>
            </div>
        </div>



    </div>

    <!-- For DI Style Report -->
    <div v-if="style == 'DI'">
        <div class="">
            <h2 class="text-xl md:text-3xl mb-4">Welcome, Teachers!</h2>
            <p>
                Welcome to the Teacher Insights section of the Teen DISC
                Assessment Report. Understanding your students' unique
                personality traits can help you create an engaging and
                supportive learning environment. This section is designed to
                provide practical strategies for teaching a student with a
                Dominant-Influential (DI) style. These students are often
                confident, charismatic, and driven, thriving in environments
                that offer challenges and opportunities for leadership.
            </p>
        </div>

        <div class="row">
            <div class="col-6">

                <div class="">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Teaching Strategies for Dominant-Influential (DI) Style Students
                    </h2>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Encourage Leadership Roles:</strong> Provide
                            opportunities for your student to take on leadership roles
                            in group projects, presentations, and classroom activities.
                        </li>
                        <li>
                            <strong>Set Clear Goals:</strong> Establish clear and
                            challenging goals to keep your student motivated and focused
                            on their objectives.
                        </li>
                        <li>
                            <strong>Promote Interactive Learning:</strong> Engage your
                            student with interactive and participatory learning
                            experiences, such as discussions, debates, and group
                            activities.
                        </li>
                        <li>
                            <strong>Recognise Achievements:</strong> Acknowledge your
                            student’s successes and efforts with praise and positive
                            reinforcement to boost their confidence and motivation.
                        </li>
                        <li>
                            <strong>Promote a Dynamic Environment:</strong> Create a
                            classroom environment that is energetic and stimulating,
                            allowing your student to thrive and stay engaged.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Teacherinsights/8.svg'" alt="" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Teacherinsights/20.svg'" alt="" />
                </div>
            </div>
            <div class="col-6">

                <div class="">
                    <h2 class="text-xl md:text-3xl mb-4">
                        How Teachers Can Support Dominant-Influential (DI) Style
                        Students
                    </h2>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Provide Clear Instructions:</strong> Offer detailed
                            and specific instructions for tasks and assignments to
                            ensure your student understands expectations.
                        </li>
                        <li>
                            <strong>Encourage Social Interaction:</strong> Facilitate
                            opportunities for your student to collaborate with peers and
                            share their ideas.
                        </li>
                        <li>
                            <strong>Offer Constructive Feedback:</strong> Provide
                            constructive feedback that helps your student refine their
                            skills and approach, balancing praise with actionable
                            suggestions for improvement.
                        </li>
                        <li>
                            <strong>Challenge Their Thinking:</strong> Design activities
                            that challenge your student’s critical thinking and
                            problem-solving skills, keeping them engaged and motivated.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">



                <div class="p-6">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Table of Teaching Tips for Dominant-Influential Style
                    </h2>
                    <table class="table-auto border-collapse border border-gray-300 w-full font-bold">
                        <thead>
                            <tr class="">
                                <th class="border border-gray-300 px-4 py-2 text-left">
                                    Focus Area
                                </th>
                                <th class="border border-gray-300 px-4 py-2 text-left">
                                    Suggestions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border font-bold border-gray-300 px-4 py-2">
                                    Encourage Leadership Roles
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Provide opportunities for leadership in group
                                    projects and classroom activities
                                </td>
                            </tr>
                            <tr>
                                <td class="border font-bold border-gray-300 px-4 py-2">
                                    Set Clear Goals
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Establish clear and challenging goals to keep them
                                    motivated
                                </td>
                            </tr>
                            <tr>
                                <td class="border font-bold border-gray-300 px-4 py-2">
                                    Promote Interactive Learning
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Engage with participatory learning experiences like
                                    discussions and debates
                                </td>
                            </tr>
                            <tr>
                                <td class="border font-bold border-gray-300 px-4 py-2">
                                    Recognise Achievements
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Acknowledge successes and efforts with praise and
                                    positive reinforcement
                                </td>
                            </tr>
                            <tr>
                                <td class="border font-bold border-gray-300 px-4 py-2">
                                    Create a Dynamic Environment
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Create an energetic and stimulating classroom
                                    environment
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="mt-4 font-bold">
                        These strategies can help you create an engaging and supportive
                        classroom environment for students with a Dominant-Influential
                        (DI) style, empowering them to reach their full potential.
                    </p>
                </div>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Teacherinsights/22.svg'" alt="" />
                </div>
            </div>
        </div>

    </div>

    <!-- For I Style Report -->
    <div v-if="style == 'I'">
        <div class="">
            <h2 class="text-xl md:text-3xl mb-4">Welcome, Teachers!</h2>
            <p>
                Welcome to the Teacher Insights section of the Teen DISC
                Assessment Report. Understanding your students' unique
                personality traits can help you create an engaging and
                supportive learning environment. This section is designed to
                provide practical strategies for teaching a student with an
                Influential (I) style. These students are often charismatic,
                social, and enthusiastic about learning.
            </p>
            <div class="row">
                <div class="col-6">

                    <h2 class="text-xl md:text-3xl mb-4">
                        Teaching Strategies for Influential (I) Style Students
                    </h2>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Encourage Participation:</strong> Create
                            opportunities for your students to share their ideas and be
                            actively involved in class discussions and projects.
                        </li>
                        <li>
                            <strong>Incorporate Creativity:</strong> Design creative
                            assignments and projects that allow your student to express
                            themselves and explore their imagination.
                        </li>
                        <li>
                            <strong>Use Positive Reinforcement:</strong> Recognise your
                            student's efforts and achievements with praise and
                            encouragement to boost their confidence and motivation.
                        </li>
                        <li>
                            <strong>Promote Collaboration:</strong> Encourage group work
                            and cooperative learning activities where your student can
                            interact and learn from their peers.
                        </li>
                        <li>
                            <strong>Integrate Varied Learning Methods:</strong> Utilise
                            different teaching methods, such as role-playing, debates,
                            and storytelling, to cater to your student’s diverse
                            learning preferences and keep them engaged.
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-images/TeensDiscReportStyleImages/Teacherinsights/8.svg'" alt="" />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-images/TeensDiscReportStyleImages/Teacherinsights/20.svg'" alt="" />
                    </div>
                </div>
                <div class="col-6">

                    <h2 class="text-xl md:text-3xl mb-4">
                        How Teachers Can Support Influential (I) Style Students
                    </h2>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Create an Interactive Classroom:</strong> Use
                            dynamic teaching methods, such as group discussions and
                            hands-on activities, to keep your student engaged and
                            interested.
                        </li>
                        <li>
                            <strong>Incorporate Visual and Auditory Aids:</strong>
                            Utilise multimedia resources like videos, podcasts, and
                            presentations to enhance the learning experience.
                        </li>
                        <li>
                            <strong>Encourage Social Learning:</strong> Facilitate
                            peer-to-peer learning and encourage your student to
                            participate in study groups or clubs.
                        </li>
                        <li>
                            <strong>Balance Structure with Flexibility:</strong> While
                            maintaining a structured environment, allow for flexibility
                            to accommodate your student's spontaneous and creative
                            nature.
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-6">

                    <div class="p-6">
                        <h2 class="text-xl md:text-3xl mb-4">
                            Table of Teaching Tips for Influential Style
                        </h2>
                        <table class="table-auto border-collapse border border-gray-300 w-full font-bold">
                            <thead>
                                <tr class="">
                                    <th class="border border-gray-300 px-4 py-2 text-left">
                                        Focus Area
                                    </th>
                                    <th class="border border-gray-300 px-4 py-2 text-left">
                                        Suggestions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border font-bold border-gray-300 px-4 py-2">
                                        Encouraging Participation
                                    </td>
                                    <td class="border border-gray-300 px-4 py-2">
                                        Create opportunities for class discussions and
                                        idea-sharing
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border font-bold border-gray-300 px-4 py-2">
                                        Incorporating Creativity
                                    </td>
                                    <td class="border border-gray-300 px-4 py-2">
                                        Design creative projects and activities to express
                                        imagination
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border font-bold border-gray-300 px-4 py-2">
                                        Using Positive Reinforcement
                                    </td>
                                    <td class="border border-gray-300 px-4 py-2">
                                        Recognise efforts and achievements with praise and
                                        encouragement
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border font-bold border-gray-300 px-4 py-2">
                                        Promoting Collaboration
                                    </td>
                                    <td class="border border-gray-300 px-4 py-2">
                                        Encourage group work and cooperative learning
                                        activities
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border font-bold border-gray-300 px-4 py-2">
                                        Integrating Varied Methods
                                    </td>
                                    <td class="border border-gray-300 px-4 py-2">
                                        Use diverse teaching techniques to keep learning
                                        exciting
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="mt-4 font-bold">
                            These strategies can help you create an engaging and supportive
                            classroom environment for students with an Influential (I)
                            style, empowering them to reach their full potential.
                        </p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-images/TeensDiscReportStyleImages/Teacherinsights/22.svg'" alt="" />
                    </div>
                </div>
            </div>


        </div>

    </div>

    <!-- For ID Style Report -->
    <div v-if="style == 'ID'">
        <div class="">
            <h2 class="text-xl md:text-3xl mb-4">Welcome, Teachers!</h2>
            <p>
                Welcome to the Teacher Insights section of the Teen DISC
                Assessment Report. Understanding your students' unique
                personality traits can help you create an engaging and
                supportive learning environment. This section is designed to
                provide practical strategies for teaching a student with an
                Influential-Dominant (ID) style. These students are social,
                assertive, and driven to achieve their goals. They thrive in
                dynamic and goal-oriented environments.
            </p>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Teaching Strategies for Influential-Dominant (ID) Style Students
                    </h2>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Encourage Leadership Roles:</strong> Provide
                            opportunities for your student to take on leadership roles
                            in group projects, class discussions, and school activities.
                            Their confidence and charisma can inspire and motivate their
                            peers.
                        </li>
                        <li>
                            <strong>Offer Positive Reinforcement:</strong> Regularly
                            acknowledge and celebrate your student’s efforts and
                            achievements. Positive feedback helps boost their confidence
                            and motivation.
                        </li>
                        <li>
                            <strong>Create an Engaging Environment:</strong> Design
                            lessons that are interactive and participatory. Your student
                            will thrive in settings that allow them to actively engage
                            with the material and their classmates.
                        </li>
                        <li>
                            <strong>Set Clear Goals:</strong> Provide clear objectives
                            and expectations for assignments and projects. Your
                            student’s goal-oriented nature will help them stay focused
                            and driven to achieve high standards.
                        </li>
                        <li>
                            <strong>Support Social Interaction:</strong> Encourage group
                            work and collaborative activities that allow your student to
                            use their social skills. Building strong relationships with
                            peers can enhance their learning experience.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Teacherinsights/8.svg'" alt="" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Teacherinsights/20.svg'" alt="" />
                </div>
            </div>
            <div class="col-6">

                <div class="">
                    <h2 class="text-xl md:text-3xl mb-4">
                        How Teachers Can Support Influential-Dominant (ID) Style
                        Students
                    </h2>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Provide Constructive Feedback:</strong> Offer
                            specific and constructive feedback to help them refine their
                            skills and approach, balancing praise with actionable
                            suggestions for improvement.
                        </li>
                        <li>
                            <strong>Promote a Positive Atmosphere:</strong> Create a
                            classroom environment that emphasises positivity and
                            encouragement, helping your student stay motivated and
                            engaged.
                        </li>
                        <li>
                            <strong>Encourage Open Communication:</strong> Promote an
                            environment where your student feels comfortable expressing
                            their thoughts and ideas. Open dialogue can help you
                            understand their needs and aspirations.
                        </li>
                        <li>
                            <strong>Facilitate Goal Setting:</strong> Help your student
                            set short-term and long-term goals for their academic and
                            personal growth. Regularly review their progress and
                            celebrate their achievements.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">

                <div class="p-6">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Table of Teaching Tips for Influential-Dominant Style
                    </h2>
                    <table class="table-auto border-collapse border border-gray-300 w-full font-bold">
                        <thead>
                            <tr class="">
                                <th class="border border-gray-300 px-4 py-2 text-left">
                                    Focus Area
                                </th>
                                <th class="border border-gray-300 px-4 py-2 text-left">
                                    Suggestions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border font-bold border-gray-300 px-4 py-2">
                                    Encourage Leadership Roles
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Provide opportunities for leadership in group
                                    projects and activities
                                </td>
                            </tr>
                            <tr>
                                <td class="border font-bold border-gray-300 px-4 py-2">
                                    Offer Positive Reinforcement
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Regularly acknowledge and celebrate efforts and
                                    achievements
                                </td>
                            </tr>
                            <tr>
                                <td class="border font-bold border-gray-300 px-4 py-2">
                                    Create an Engaging Environment
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Design lessons that are interactive and
                                    participatory
                                </td>
                            </tr>
                            <tr>
                                <td class="border font-bold border-gray-300 px-4 py-2">
                                    Set Clear Goals
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Provide clear objectives and expectations for
                                    assignments
                                </td>
                            </tr>
                            <tr>
                                <td class="border font-bold border-gray-300 px-4 py-2">
                                    Support Social Interaction
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Encourage group work and collaborative activities
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="mt-4 font-bold">
                        These strategies can help you create an engaging and supportive
                        classroom environment for students with an Influential-Dominant
                        (ID) style, empowering them to reach their full potential.
                    </p>
                </div>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Teacherinsights/22.svg'" alt="" />
                </div>
            </div>
        </div>



    </div>

    <!-- For IS Style Report -->
    <div v-if="style == 'IS'">
        <div class="">
            <h2 class="text-xl md:text-3xl mb-4">Welcome, Teachers!</h2>
            <p class="">
                Welcome to the Teacher Insights section of the Teen DISC
                Assessment Report. Understanding your students' unique
                personality traits can help you create an engaging and
                supportive learning environment. This section is designed to
                provide practical strategies for teaching a student with an
                Influential-Supportive (IS) style. These students are social,
                empathetic, and collaborative, thriving in environments that
                offer positivity and inclusion.
            </p>
        </div>
        <div class="row">
            <div class="col-6">

                <div class="">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Teaching Strategies for Influential-Supportive (IS) Style
                        Students
                    </h2>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Encourage Group Activities:</strong> Provide
                            opportunities for your student to participate in group
                            projects, discussions, and collaborative activities. They
                            thrive in social settings where teamwork is emphasised.
                        </li>
                        <li>
                            <strong>Offer Positive Reinforcement:</strong> Regularly
                            acknowledge and celebrate your student’s efforts and
                            achievements. Positive feedback helps boost their confidence
                            and motivation.
                        </li>
                        <li>
                            <strong>Create an Inclusive Environment:</strong> Create a
                            classroom atmosphere that values cooperation, mutual
                            respect, and inclusivity. Ensure that every student feels
                            valued and supported.
                        </li>
                        <li>
                            <strong>Incorporate Interactive Lessons:</strong> Engage
                            your student with interactive and hands-on learning
                            experiences. Activities such as role-playing, simulations,
                            and creative projects can make learning more enjoyable and
                            effective.
                        </li>
                        <li>
                            <strong>Support Empathy Development:</strong> Encourage
                            activities that promote empathy and understanding, such as
                            peer mentoring, group discussions on social issues, and
                            community service projects.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Teacherinsights/8.svg'" alt="" />
                </div>
                <div class="flex justify-center items-center"><img class="w-64 h-auto object-contain" src="/images/reports-images/TeensDiscReportStyleImages/SocialInteractionsAndCommunicationStyle/4.svg" alt=""></div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Teacherinsights/20.svg'" alt="" />
                </div>
            </div>
            <div class="col-6">

                <div class="">
                    <h2 class="text-xl md:text-3xl mb-4">
                        How Teachers Can Support Influential-Supportive (IS) Style
                        Students
                    </h2>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Provide Clear Instructions:</strong> Offer detailed
                            and specific instructions for tasks and assignments to
                            ensure your student understands expectations.
                        </li>
                        <li>
                            <strong>Encourage Social Interaction:</strong> Facilitate
                            opportunities for your student to interact with peers and
                            participate in group activities.
                        </li>
                        <li>
                            <strong>Offer Constructive Feedback:</strong> Provide
                            constructive feedback that helps your student refine their
                            skills and approach, balancing praise with actionable
                            suggestions for improvement.
                        </li>
                        <li>
                            <strong>Promote a Positive Atmosphere:</strong> Create a
                            classroom environment that emphasises positivity and
                            encouragement, helping your student stay motivated and
                            engaged.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">


                <div class="p-6">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Table of Teaching Tips for Influential-Supportive Style
                    </h2>
                    <table class="table-auto border-collapse border border-gray-300 w-full font-bold">
                        <thead>
                            <tr class="">
                                <th class="border border-gray-300 px-4 py-2 text-left">
                                    Focus Area
                                </th>
                                <th class="border border-gray-300 px-4 py-2 text-left">
                                    Suggestions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border font-bold border-gray-300 px-4 py-2">
                                    Encourage Group Activities
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Provide opportunities for participation in group
                                    projects and collaborative activities
                                </td>
                            </tr>
                            <tr>
                                <td class="border font-bold border-gray-300 px-4 py-2">
                                    Offer Positive Reinforcement
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Regularly acknowledge and celebrate efforts and
                                    achievements
                                </td>
                            </tr>
                            <tr>
                                <td class="border font-bold border-gray-300 px-4 py-2">
                                    Create an Inclusive Environment
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Create a classroom atmosphere that values
                                    cooperation and mutual respect
                                </td>
                            </tr>
                            <tr>
                                <td class="border font-bold border-gray-300 px-4 py-2">
                                    Incorporate Interactive Lessons
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Engage with interactive and hands-on learning
                                    experiences
                                </td>
                            </tr>
                            <tr>
                                <td class="border font-bold border-gray-300 px-4 py-2">
                                    Support Empathy Development
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Encourage activities that promote empathy and
                                    understanding
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="mt-4 font-bold">
                        These strategies can help you create an engaging and supportive
                        classroom environment for students with an
                        Influential-Supportive (IS) style, empowering them to reach
                        their full potential.
                    </p>
                </div>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Teacherinsights/22.svg'" alt="" />
                </div>
                <div class="flex justify-center items-center"><img class="w-64 h-auto object-contain" src="/images/reports-images/TeensDiscReportStyleImages/SocialInteractionsAndCommunicationStyle/4.svg" alt=""></div>
            </div>
        </div>


    </div>

    <!-- For S Style Report -->
    <div v-if="style == 'S'">
        <!-- Content for S -->

        <div class="">
            <h2 class="text-xl md:text-3xl mb-4">Welcome, Teachers!</h2>
            <p>
                Welcome to the Teacher Insights section of the Teen DISC
                Assessment Report. Understanding your students' unique
                personality traits can help you create an engaging and
                supportive learning environment. This section is designed to
                provide practical strategies for teaching a student with a
                Supportive (S) style. These students are often patient,
                cooperative, and empathetic learners who thrive in nurturing
                environments.
            </p>
        </div>
        <div class="row">
            <div class="col-6">

                <div class="">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Teaching Strategies for Supportive (S) Style Students
                    </h2>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Encourage Group Work:</strong> Create opportunities
                            for your student to participate in group activities where
                            they can collaborate and contribute to the team.
                        </li>
                        <li>
                            <strong>Provide a Stable Routine:</strong> Establish a
                            consistent classroom routine that helps your student feel
                            secure and focused.
                        </li>
                        <li>
                            <strong>Use Positive Reinforcement:</strong> Recognise your
                            student’s efforts and achievements with praise and
                            encouragement to boost their confidence and motivation.
                        </li>
                        <li>
                            <strong>Promote Open Communication:</strong> Encourage your
                            student to express their thoughts and ideas, ensuring they
                            feel heard and valued.
                        </li>
                        <li>
                            <strong>Incorporate Empathy-Building Activities:</strong>
                            Design activities that encourage students to consider
                            others’ perspectives and feelings, promoting a supportive
                            classroom environment.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Teacherinsights/8.svg'" alt="" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Teacherinsights/20.svg'" alt="" />
                </div>
            </div>
            <div class="col-6">

                <div class="">
                    <h2 class="text-xl md:text-3xl mb-4">
                        How Teachers Can Support Supportive (S) Style Students
                    </h2>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Create a Nurturing Classroom:</strong> Use teaching
                            methods that emphasise kindness, understanding, and
                            encouragement.
                        </li>
                        <li>
                            <strong>Encourage Social Interaction:</strong> Facilitate
                            peer-to-peer learning and encourage your student to
                            participate in clubs or team projects.
                        </li>
                        <li>
                            <strong>Balance Routine with Flexibility:</strong> While
                            maintaining a structured environment, allow for flexibility
                            to accommodate your student's cooperative nature.
                        </li>
                        <li>
                            <strong>Encourage a Sense of Belonging:</strong> Create an
                            inclusive environment where all students feel valued and
                            supported.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">


                <div class="p-6">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Table of Teaching Tips for Supportive Style
                    </h2>
                    <table class="table-auto border-collapse border border-gray-300 w-full font-bold">
                        <thead>
                            <tr class="">
                                <th class="border border-gray-300 px-4 py-2 text-left">
                                    Focus Area
                                </th>
                                <th class="border border-gray-300 px-4 py-2 text-left">
                                    Suggestions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border font-bold border-gray-300 px-4 py-2">
                                    Encouraging Group Work
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Create opportunities for collaborative projects and
                                    team activities
                                </td>
                            </tr>
                            <tr>
                                <td class="border font-bold border-gray-300 px-4 py-2">
                                    Providing a Stable Routine
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Establish consistent classroom routines to enhance
                                    focus and comfort
                                </td>
                            </tr>
                            <tr>
                                <td class="border font-bold border-gray-300 px-4 py-2">
                                    Using Positive Reinforcement
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Recognise efforts and achievements with praise and
                                    encouragement
                                </td>
                            </tr>
                            <tr>
                                <td class="border font-bold border-gray-300 px-4 py-2">
                                    Promoting Open Communication
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Encourage expression of thoughts and ideas in a
                                    supportive setting
                                </td>
                            </tr>
                            <tr>
                                <td class="border font-bold border-gray-300 px-4 py-2">
                                    Incorporating Empathy-Building
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Design activities that promote empathy and
                                    understanding of diverse perspectives
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="mt-4 font-bold">
                        These strategies can help you create an engaging and supportive
                        classroom environment for students with a Supportive (S) style,
                        empowering them to reach their full potential.
                    </p>
                </div>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Teacherinsights/22.svg'" alt="" />
                </div>
            </div>
        </div>


    </div>

    <!-- For SC Style Report -->
    <div v-if="style == 'SC'">
        <div class="">
            <h2 class="text-xl md:text-3xl mb-4">Welcome, Teachers!</h2>
            <p>
                Welcome to the Teacher Insights section of the Teen DISC
                Assessment Report. Understanding your students' unique
                personality traits can help you create an engaging and
                supportive learning environment. This section is designed to
                provide practical strategies for teaching a student with a
                Supportive-Cautious (SC) style. These students are reliable,
                detail-oriented, and supportive. They thrive in environments
                that are stable, structured, and empathetic.
            </p>
        </div>
        <div class="row">
            <div class="col-6">

                <div class="">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Teaching Strategies for Supportive-Cautious (SC) Style Students
                    </h2>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Provide Clear Instructions:</strong> Ensure that
                            your instructions are clear, detailed, and easy to follow.
                            SC students appreciate knowing exactly what is expected of
                            them.
                        </li>
                        <li>
                            <strong>Create a Stable Environment:</strong> Maintain a
                            consistent and predictable classroom routine. Stability
                            helps SC students feel secure and focused.
                        </li>
                        <li>
                            <strong>Encourage Group Work:</strong> Promote cooperative
                            learning by encouraging group projects and collaborative
                            activities. SC students excel in supportive and
                            team-oriented settings.
                        </li>
                        <li>
                            <strong>Offer Constructive Feedback:</strong> Provide
                            specific and constructive feedback to help SC students
                            improve. Acknowledge their detailed work and offer guidance
                            for further development.
                        </li>
                        <li>
                            <strong>Be Patient and Understanding:</strong> Show patience
                            and understanding towards SC students. They may need more
                            time to process information and complete tasks accurately.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Teacherinsights/8.svg'" alt="" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Teacherinsights/20.svg'" alt="" />
                </div>
            </div>
            <div class="col-6">
                <div class="">
                    <h2 class="text-xl md:text-3xl mb-4">
                        How Teachers Can Support Supportive-Cautious (SC) Style Students
                    </h2>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Create a Supportive Atmosphere:</strong> Create a
                            classroom environment that emphasises kindness, respect, and
                            empathy. SC students thrive in positive and nurturing
                            settings.
                        </li>
                        <li>
                            <strong>Encourage Attention to Detail:</strong> Recognise
                            and praise the meticulous work of SC students. Encourage
                            activities that require careful analysis and thoroughness.
                        </li>
                        <li>
                            <strong>Promote Open Communication:</strong> Create an
                            environment where students feel comfortable expressing their
                            thoughts and concerns. Open communication helps build trust
                            and understanding.
                        </li>
                        <li>
                            <strong>Set Clear Expectations:</strong> Clearly outline
                            your expectations for assignments and behaviour. SC students
                            appreciate knowing what is expected of them and strive to
                            meet those expectations.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">


                <div class="p-6">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Table of Teaching Tips for Supportive-Cautious Style
                    </h2>
                    <table class="table-auto border-collapse border border-gray-300 w-full font-bold">
                        <thead>
                            <tr class="">
                                <th class="border border-gray-300 px-4 py-2 text-left">
                                    Focus Area
                                </th>
                                <th class="border border-gray-300 px-4 py-2 text-left">
                                    Suggestions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border font-bold border-gray-300 px-4 py-2">
                                    Provide Clear Instructions
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Ensure instructions are detailed and easy to follow
                                </td>
                            </tr>
                            <tr>
                                <td class="border font-bold border-gray-300 px-4 py-2">
                                    Create a Stable Environment
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Maintain a consistent and predictable classroom
                                    routine
                                </td>
                            </tr>
                            <tr>
                                <td class="border font-bold border-gray-300 px-4 py-2">
                                    Encourage Group Work
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Promote cooperative learning through group projects
                                </td>
                            </tr>
                            <tr>
                                <td class="border font-bold border-gray-300 px-4 py-2">
                                    Offer Constructive Feedback
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Provide specific and constructive feedback to help
                                    improvement
                                </td>
                            </tr>
                            <tr>
                                <td class="border font-bold border-gray-300 px-4 py-2">
                                    Be Patient and Understanding
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Show patience and understanding towards their needs
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="mt-4 font-bold">
                        These strategies can help you create an engaging and supportive
                        classroom environment for students with a Supportive-Cautious
                        (SC) style, empowering them to reach their full potential.
                    </p>
                </div>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Teacherinsights/22.svg'" alt="" />
                </div>
            </div>
        </div>


    </div>

    <!-- For SI Style Report -->
    <div v-if="style == 'SI'">
        <div class="">
            <h2 class="text-xl md:text-3xl mb-4">Welcome, Teachers!</h2>
            <p>
                Welcome to the Teacher Insights section of the Teen DISC
                Assessment Report. Understanding your students' unique
                personality traits can help you create an engaging and
                supportive learning environment. This section is designed to
                provide practical strategies for teaching a student with a
                Supportive-Influential (SI) style. These students are
                empathetic, sociable, and supportive. They thrive in
                environments that are social, positive, and engaging.
            </p>
        </div>
        <div class="row">
            <div class="col-6">

                <div class="">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Teaching Strategies for Supportive-Influential (SI) Style
                        Students
                    </h2>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Encourage Group Work:</strong> Promote cooperative
                            learning by encouraging group projects and collaborative
                            activities. SI students excel in social and team-oriented
                            settings.
                        </li>
                        <li>
                            <strong>Create a Positive Environment:</strong> Maintain a
                            classroom atmosphere that emphasises positivity, kindness,
                            and encouragement. Recognising and celebrating student
                            achievements can boost their confidence and motivation.
                        </li>
                        <li>
                            <strong>Engage with Interactive Lessons:</strong> Use
                            interactive and engaging teaching methods. Activities that
                            involve discussions, role-playing, and hands-on experiences
                            keep SI students interested and motivated.
                        </li>
                        <li>
                            <strong>Provide Constructive Feedback:</strong> Offer
                            specific and constructive feedback to help SI students
                            improve. Acknowledge their social and collaborative efforts,
                            and guide them toward further development.
                        </li>
                        <li>
                            <strong>Be Empathetic and Supportive:</strong> Show empathy
                            and understanding towards SI students. Create a safe space
                            where they feel comfortable expressing their thoughts and
                            emotions.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Teacherinsights/8.svg'" alt="" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Teacherinsights/20.svg'" alt="" />
                </div>
            </div>
            <div class="col-6">

                <div class="">
                    <h2 class="text-xl md:text-3xl mb-4">
                        How Teachers Can Support Supportive-Influential (SI) Style
                        Students
                    </h2>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Promote Social Interaction:</strong> Encourage
                            activities that involve social engagement. SI students
                            thrive in environments where they can interact with their
                            peers.
                        </li>
                        <li>
                            <strong>Recognise Their Efforts:</strong> Regularly
                            acknowledge and praise SI students for their efforts and
                            achievements. Positive reinforcement motivates them to
                            continue excelling.
                        </li>
                        <li>
                            <strong>Promote Collaboration:</strong> Support involvement
                            in group projects and team activities. SI students'
                            cooperative nature makes them valuable team members.
                        </li>
                        <li>
                            <strong>Provide Emotional Support:</strong> Be attentive to
                            SI students' emotional needs. Offer a listening ear and
                            provide comfort and reassurance when they are feeling
                            stressed or anxious.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">


                <div class="p-6">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Table of Teaching Tips for Supportive-Influential Style
                    </h2>
                    <table class="table-auto border-collapse border border-gray-300 w-full">
                        <thead>
                            <tr class="">
                                <th class="border border-gray-300 px-4 py-2 text-left">
                                    Focus Area
                                </th>
                                <th class="border border-gray-300 px-4 py-2 text-left">
                                    Suggestions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border font-bold border-gray-300 px-4 py-2">
                                    Encourage Group Work
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Promote cooperative learning through group projects


                                </td>
                            </tr>
                            <tr>
                                <td class="border font-bold border-gray-300 px-4 py-2">
                                    Create a Positive Environment
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Maintain a classroom atmosphere of positivity and
                                    encouragement
                                </td>
                            </tr>
                            <tr>
                                <td class="border font-bold border-gray-300 px-4 py-2">
                                    Engage with Interactive Lessons
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Use interactive teaching methods and activities
                                </td>
                            </tr>
                            <tr>
                                <td class="border font-bold border-gray-300 px-4 py-2">
                                    Provide Constructive Feedback
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Offer specific and constructive feedback
                                </td>
                            </tr>
                            <tr>
                                <td class="border font-bold border-gray-300 px-4 py-2">
                                    Be Empathetic and Supportive
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Show empathy and create a safe space for expression
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="mt-4 font-bold">
                        These strategies can help you create an engaging and supportive
                        classroom environment for students with a Supportive-Influential
                        (SI) style, empowering them to reach their full potential.
                    </p>
                </div>

            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Teacherinsights/22.svg'" alt="" />
                </div>
            </div>
        </div>

    </div>
    </div>
    </div>
</template>

<script>
import AssessmentTypes from "@/Layouts/AssessmentTypes.vue";

export default {
    name: "TeacherInsight",
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
    background-color: rgb(220 252 231 );
    /* Green */
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
