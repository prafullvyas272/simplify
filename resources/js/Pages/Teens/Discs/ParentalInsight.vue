<template>
     <div class="p-6">
    <div class="space-y-6 mt-3">
        <h1 class="font-bold mb-4 text-center">Parental Insights</h1>
    </div>
    <div class="p-4 md:p-6">

    <!-- For C Style Report -->
    <div v-if="style == 'C'">
        <!-- Content for C -->
            <div class="row">
                <div class="col-6">
                    <div class="">
                        <h2 class="text-xl md:text-3xl mb-4">
                            Supporting Your Teen with a Cautious (C) Style
                        </h2>
                        <p class="mt-2">
                            Welcome to the Parental Insights section of our
                            report. Understanding your teen’s unique personality
                            can help you support them in reaching their full
                            potential. Teens with a Cautious (C) style are
                            naturally analytical, detail-oriented, and
                            methodical. They thrive in environments that offer
                            structure and predictability. Here’s how you can
                            nurture their strengths and guide their growth
                            effectively.
                        </p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-64 h-auto object-contain"
                            :src="'/images/reports-images/TeensDiscReportStyleImages/ParentalInsights/7.svg'" alt="" />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-90 h-auto object-contain"
                            :src="'/images/reports-images/TeensDiscReportStyleImages/ParentalInsights/8.svg'" alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <div class="">
                        <h2 class="text-xl md:text-3xl mb-4">
                            Tips for Supporting Your Teen’s Growth
                        </h2>
                        <div class="mt-2 space-y-2">
                            <div>
                                <strong>
                                    Encourage Analytical Thinking
                                </strong>
                                <p>
                                    Support your teen’s natural curiosity by
                                    providing opportunities for them to explore
                                    subjects that interest them. Encourage
                                    activities that involve research,
                                    problem-solving, and critical thinking.
                                </p>
                            </div>
                            <div>
                                <strong>Provide Structure</strong>
                                <p>
                                    Create a consistent and predictable home
                                    environment with clear routines and
                                    expectations. This helps your teen feel
                                    secure and focused.
                                </p>
                            </div>
                            <div>
                                <strong>
                                    Recognise Precision and Effort
                                </strong>
                                <p>
                                    Acknowledge your teen’s attention to detail
                                    and their efforts to complete tasks
                                    accurately. Positive reinforcement boosts
                                    their confidence and motivation.
                                </p>
                            </div>
                            <div>
                                <strong>
                                    Promote Open Communication
                                </strong>
                                <p>
                                    Build an environment where your teen feels
                                    comfortable expressing their thoughts and
                                    feelings. Encourage discussions about their
                                    ideas and concerns.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="space-y-6  ">
            <h2 class="text-xl md:text-3xl mb-4">
                Table of Parenting Tips for Cautious Style
            </h2>
            <table class="min-w-full table-auto border-collapse border border-gray-200">
                <thead>
                    <tr class="">
                        <th class="px-4 py-2 border border-gray-300 text-left font-semibold">
                            Focus Area
                        </th>
                        <th class="px-4 py-2 border border-gray-300 text-left font-semibold">
                            Suggestions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="px-4 py-2 border border-gray-300">
                            Encouraging Analytical Thinking
                        </td>
                        <td class="px-4 py-2 border border-gray-300">
                            Provide opportunities for research, problem-solving,
                            and critical thinking.
                        </td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 border border-gray-300">
                            Providing Structure
                        </td>
                        <td class="px-4 py-2 border border-gray-300">
                            Establish consistent routines and clear
                            expectations.
                        </td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 border border-gray-300">
                            Recognising Precision and Effort
                        </td>
                        <td class="px-4 py-2 border border-gray-300">
                            Acknowledge attention to detail and effort in
                            completing tasks.
                        </td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 border border-gray-300">
                            Promoting Open Communication
                        </td>
                        <td class="px-4 py-2 border border-gray-300">
                            Encourage discussions about thoughts, ideas, and
                            concerns.
                        </td>
                    </tr>
                </tbody>
            </table>
            <p>
                These tips can help you support your teen’s development and
                empower them to thrive in various aspects of their life. By
                understanding their Cautious style, you can guide them toward
                becoming a confident and well-rounded individual.
            </p>
        </div>

    </div>

    <!-- For CD Style Report -->
    <div v-if="style == 'CD'">
        <div class="row">
            <div class="col-6">
                <div class=" pb-0">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Supporting Your Teen with a Cautious-Dominant (CD) Style
                    </h2>
                    <p class="">
                        Welcome to the Parental Insights section of our report.
                        Understanding your teen’s unique personality can help
                        you support them in reaching their full potential. Teens
                        with a Cautious-Dominant (CD) style are detail-oriented,
                        analytical, and decisive. They thrive in environments
                        that are structured, goal-oriented, and efficient.
                        Here’s how you can nurture their strengths and guide
                        their growth effectively.
                    </p>
                </div>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/ParentalInsights/7.svg'" alt="" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/ParentalInsights/8.svg'" alt="" />
                </div>
            </div>
            <div class="col-6">
                <div class=" pb-0">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Tips for Supporting Your Teen’s Growth
                    </h2>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Encourage Independence:</strong> Recognise
                            your teen’s desire to work independently and make
                            decisions on their own. Provide opportunities for
                            them to take responsibility for tasks and projects,
                            allowing them to develop their self-reliance.
                        </li>
                        <li>
                            <strong>Promote Analytical Thinking:</strong>
                            Support your teen’s analytical nature by encouraging
                            them to engage in activities that challenge their
                            problem-solving skills. Help them explore their
                            interests in subjects that require logical thinking
                            and precision.
                        </li>
                        <li>
                            <strong>Balance Structure with Flexibility:</strong>
                            While your teen thrives in structured environments,
                            it’s also important to encourage flexibility. Help
                            them adapt to changes by gradually introducing new
                            experiences and encouraging open-mindedness.
                        </li>
                        <li>
                            <strong>Recognise Their Achievements:</strong>
                            Regularly acknowledge and praise your teen’s
                            accomplishments, especially when they demonstrate
                            their ability to analyse situations and make
                            informed decisions. Positive reinforcement can boost
                            their confidence and motivation.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="">
            <h2 class="text-xl md:text-3xl mb-4">
                Table of Parenting Tips for Cautious-Dominant Style
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
                            Encourage Independence
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Provide opportunities for independent tasks and
                            decision-making
                        </td>
                    </tr>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Promote Analytical Thinking
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Encourage activities that challenge their
                            problem-solving skills
                        </td>
                    </tr>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Balance Structure with Flexibility
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Gradually introduce new experiences and encourage
                            open-mindedness
                        </td>
                    </tr>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Recognise Their Achievements
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Acknowledge and praise their accomplishments,
                            particularly in analysis and decision-making
                        </td>
                    </tr>
                </tbody>
            </table>
            <p class="mt-4 font-bold">
                These tips can help you support your teen’s development and
                empower them to thrive in various aspects of their life. By
                understanding their Cautious-Dominant style, you can guide them
                toward becoming a confident and well-rounded individual.
            </p>
        </div>


    </div>

    <!-- For CS Style Report -->
    <div v-if="style == 'CS'">
        <div class="row">
            <div class="col-6">
                <div class=" pb-0">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Supporting Your Teen with a Cautious-Supportive (CS)
                        Style
                    </h2>
                    <p class="">
                        Welcome to the Parental Insights section of our report.
                        Understanding your teen’s unique personality can help
                        you support them in reaching their full potential. Teens
                        with a Cautious-Supportive (CS) style are naturally
                        detail-oriented, patient, and empathetic. They thrive in
                        environments that are structured, supportive, and calm.
                        Here’s how you can nurture their strengths and guide
                        their growth effectively.
                    </p>
                </div>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/ParentalInsights/7.svg'" alt="" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/ParentalInsights/8.svg'" alt="" />
                </div>
            </div>
            <div class="col-6">
                <div class=" pb-0">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Tips for Supporting Your Teen’s Growth
                    </h2>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Maintain Structure and Routine:</strong>
                            Provide a structured environment with clear routines
                            and expectations. Stability helps your teen feel
                            secure and focused.
                        </li>
                        <li>
                            <strong>Encourage Group Activities:</strong> Support
                            your teen’s involvement in group projects and team
                            activities. Their cooperative nature makes them
                            valuable team members who can help create a
                            harmonious environment.
                        </li>
                        <li>
                            <strong>Recognise Their Efforts:</strong> Regularly
                            acknowledge and praise your teen’s efforts and
                            achievements. Positive reinforcement boosts their
                            confidence and encourages continued growth.
                        </li>
                        <li>
                            <strong>Provide Emotional Support:</strong> Be
                            attentive to your teen’s emotional needs. Offer a
                            listening ear and provide comfort and reassurance
                            when they are feeling stressed or anxious.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- <div class=" pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                Tips for Supporting Your Teen’s Growth
            </h2>
            <ul class="list-disc pl-6">
                <li>
                    <strong>Maintain Structure and Routine:</strong> Provide a
                    structured environment with clear routines and expectations.
                    Stability helps your teen feel secure and focused.
                </li>
                <li>
                    <strong>Encourage Group Activities:</strong> Support your
                    teen’s involvement in group projects and team activities.
                    Their cooperative nature makes them valuable team members
                    who can help create a harmonious environment.
                </li>
                <li>
                    <strong>Recognise Their Efforts:</strong> Regularly
                    acknowledge and praise your teen’s efforts and achievements.
                    Positive reinforcement boosts their confidence and
                    encourages continued growth.
                </li>
                <li>
                    <strong>Provide Emotional Support:</strong> Be attentive to
                    your teen’s emotional needs. Offer a listening ear and
                    provide comfort and reassurance when they are feeling
                    stressed or anxious.
                </li>
            </ul>
        </div> -->

        <div class="">
            <h2 class="text-xl md:text-3xl mb-4">
                Table of Parenting Tips for Cautious-Supportive Style
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
                            Maintain Structure and Routine
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Provide a structured environment with clear routines
                        </td>
                    </tr>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Encourage Group Activities
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Support involvement in group projects and team
                            activities
                        </td>
                    </tr>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Recognise Their Efforts
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Acknowledge and praise their efforts and
                            achievements
                        </td>
                    </tr>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Provide Emotional Support
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Be attentive to emotional needs and offer comfort
                            and reassurance
                        </td>
                    </tr>
                </tbody>
            </table>
            <p class="mt-4 font-bold">
                These tips can help you support your teen’s development and
                empower them to thrive in various aspects of their life. By
                understanding their Cautious-Supportive style, you can guide
                them toward becoming a confident and well-rounded individual.
            </p>
        </div>


    </div>

    <!-- For D Style Report -->
    <div v-if="style == 'D'">
        <div class="row">
            <div class="col-6">
                <div class=" pb-0">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Supporting Your Teen with a Dominant (D) Style
                    </h2>
                    <p class="">
                        Welcome to the Parents insights section of our report.
                        As a parent, understanding your teen’s unique
                        personality can help you support them in reaching their
                        full potential. Teens with a Dominant (D) style are
                        naturally confident, driven, and eager to take charge.
                        They thrive on challenges and enjoy being in leadership
                        roles. Here’s how you can nurture their strengths and
                        guide their growth effectively.
                    </p>
                </div>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/ParentalInsights/7.svg'" alt="" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/ParentalInsights/8.svg'" alt="" />
                </div>
            </div>
            <div class="col-6">
                <div class=" pb-0">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Tips for Supporting Your Teen’s Growth
                    </h2>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Encourage Leadership Opportunities:</strong>
                            Look for ways to let your teen take on leadership
                            roles, whether it’s as a team captain, project
                            leader, or organiser for family activities. This
                            helps them build confidence and develop valuable
                            skills.
                        </li>
                        <li>
                            <strong>Set Clear Expectations:</strong> Teens with
                            a Dominant style appreciate having clear guidelines
                            and boundaries. Set expectations and
                            responsibilities, but also allow them some freedom
                            to make decisions within those limits, promoting
                            independence.
                        </li>
                        <li>
                            <strong>Recognise Achievements:</strong> Celebrate
                            your teen’s successes and milestones. Positive
                            reinforcement, such as praise or rewards, encourages
                            them to keep striving for their goals and boosts
                            their motivation.
                        </li>
                        <li>
                            <strong>Promote Empathy and Listening:</strong> Help
                            your teen understand the importance of listening to
                            others and considering different perspectives.
                            Encourage activities that involve teamwork and
                            collaboration to develop these skills.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="">
            <h2 class="text-xl md:text-3xl mb-4">
                Table of Parenting Tips for Dominant Style
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
                            Leadership Opportunities
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Encourage roles like team captain, project leader,
                            or organiser for family activities
                        </td>
                    </tr>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Setting Expectations
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Establish clear rules and responsibilities, and
                            provide room for decision-making
                        </td>
                    </tr>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Recognising Achievements
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Praise accomplishments, celebrate milestones, and
                            provide positive feedback
                        </td>
                    </tr>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Promoting Empathy
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Discuss the importance of empathy, practice active
                            listening, and engage in group activities
                        </td>
                    </tr>
                </tbody>
            </table>
            <p class="mt-4 font-bold">
                These tips can help you support your teen’s development and
                empower them to thrive in various aspects of their life. By
                understanding their Dominant style, you can guide them toward
                becoming a confident and effective leader.
            </p>
        </div>


    </div>

    <!-- For DC Style Report -->
    <div v-if="style == 'DC'">
        <div class="row">
            <div class="col-6">
                <div class=" pb-0">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Supporting Your Teen with a Dominant-Cautious (DC) Style
                    </h2>
                    <p>
                        Welcome to the Parental Insights section of our report.
                        Understanding your teen’s unique personality can help
                        you support them in reaching their full potential. Teens
                        with a Dominant-Cautious (DC) style are natural leaders
                        who are confident, analytical, and driven. They thrive
                        in environments that offer structure and clear goals.
                        Here’s how you can nurture their strengths and guide
                        their growth effectively.
                    </p>
                </div>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/ParentalInsights/7.svg'" alt="" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/ParentalInsights/8.svg'" alt="" />
                </div>
            </div>
            <div class="col-6">
                <div class=" pb-0">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Tips for Supporting Your Teen’s Growth
                    </h2>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Encourage Leadership Opportunities:</strong>
                            Support your teen’s desire to take on leadership
                            roles, whether it’s in school clubs, sports teams,
                            or community projects. Provide them with
                            opportunities to lead and make decisions.
                        </li>
                        <li>
                            <strong>Promote Goal Setting:</strong> Help your
                            teen set clear and achievable goals. Encourage them
                            to outline the steps needed to reach these goals and
                            celebrate their achievements along the way.
                        </li>
                        <li>
                            <strong>Recognise Their Analytical Skills:</strong>
                            Acknowledge and appreciate your teen’s ability to
                            analyse and think critically. Encourage them to
                            apply these skills in their studies and everyday
                            life.
                        </li>
                        <li>
                            <strong>Provide Constructive Feedback:</strong>
                            Offer specific and actionable feedback that helps
                            your teen improve their skills. Balance praise with
                            constructive criticism to help them grow.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="">
            <h2 class="text-xl md:text-3xl mb-4">
                Table of Parenting Tips for Dominant-Cautious Style
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
                            Encourage Leadership Opportunities
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Support leadership roles in school clubs, sports
                            teams, or community projects
                        </td>
                    </tr>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Promote Goal Setting
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Help set clear and achievable goals and celebrate
                            achievements
                        </td>
                    </tr>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Recognise Their Analytical Skills
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Appreciate their ability to analyse and think
                            critically
                        </td>
                    </tr>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Provide Constructive Feedback
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Offer specific feedback and balance praise with
                            constructive criticism
                        </td>
                    </tr>
                </tbody>
            </table>
            <p class="mt-4 font-bold">
                These tips can help you support your teen’s development and
                empower them to thrive in various aspects of their life. By
                understanding their Dominant-Cautious style, you can guide them
                toward becoming a confident and well-rounded individual.
            </p>
        </div>

    </div>

    <!-- For DI Style Report -->
    <div v-if="style == 'DI'">
        <div class="row">
            <div class="col-6">
                <div class=" pb-0">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Supporting Your Teen with a Dominant-Influential (DI)
                        Style
                    </h2>
                    <p>
                        Welcome to the Parental Insights section of our report.
                        Understanding your teen’s unique personality can help
                        you support them in reaching their full potential. Teens
                        with a Dominant-Influential (DI) style are natural
                        leaders who are charismatic, confident, and driven. They
                        thrive in environments that offer challenges and
                        opportunities for social interaction. Here’s how you can
                        nurture their strengths and guide their growth
                        effectively.
                    </p>
                </div>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/ParentalInsights/7.svg'" alt="" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/ParentalInsights/8.svg'" alt="" />
                </div>
            </div>
            <div class="col-6">
                <div class=" pb-0">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Tips for Supporting Your Teen’s Growth
                    </h2>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Encourage Leadership Opportunities:</strong>
                            Support your teen’s desire to take on leadership
                            roles, whether it’s in school clubs, sports teams,
                            or community projects. Provide them with
                            opportunities to lead and make decisions.
                        </li>
                        <li>
                            <strong>Promote Goal Setting:</strong> Help your
                            teen set clear and achievable goals. Encourage them
                            to outline the steps needed to reach these goals and
                            celebrate their achievements along the way.
                        </li>
                        <li>
                            <strong>Recognise Their Charisma:</strong>
                            Acknowledge and appreciate your teen’s ability to
                            inspire and motivate others. Encourage them to use
                            their persuasive skills positively to influence and
                            lead their peers.
                        </li>
                        <li>
                            <strong>Provide Constructive Feedback:</strong>
                            Offer specific and actionable feedback that helps
                            your teen improve their skills. Balance praise with
                            constructive criticism to help them grow.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="">
            <h2 class="text-xl md:text-3xl mb-4">
                Table of Parenting Tips for Dominant-Influential Style
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
                            Encourage Leadership Opportunities
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Support leadership roles in school clubs, sports
                            teams, or community projects
                        </td>
                    </tr>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Promote Goal Setting
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Help set clear and achievable goals and celebrate
                            achievements
                        </td>
                    </tr>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Recognise Their Charisma
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Appreciate their ability to inspire and motivate
                            others
                        </td>
                    </tr>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Provide Constructive Feedback
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Offer specific feedback and balance praise with
                            constructive criticism
                        </td>
                    </tr>
                </tbody>
            </table>
            <p class="mt-4 font-bold">
                These tips can help you support your teen’s development and
                empower them to thrive in various aspects of their life. By
                understanding their Dominant-Influential style, you can guide
                them toward becoming a confident and well-rounded individual.
            </p>
        </div>


    </div>

    <!-- For I Style Report -->
    <div v-if="style == 'I'">
        <div class="row">
            <div class="col-6">
                <div class=" pb-0">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Supporting Your Teen with an Influential (I) Style
                    </h2>
                    <p>
                        Welcome to the Parental Insights section of our report.
                        Understanding your teen’s unique personality can help
                        you support them in reaching their full potential. Teens
                        with an Influential (I) style are naturally charismatic,
                        social, and inspiring. They thrive in environments that
                        allow them to express themselves and connect with
                        others. Here’s how you can nurture their strengths and
                        guide their growth effectively.
                    </p>
                </div>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/ParentalInsights/7.svg'" alt="" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/ParentalInsights/8.svg'" alt="" />
                </div>
            </div>
            <div class="col-6">
                <div class=" pb-0">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Tips for Supporting Your Teen’s Growth
                    </h2>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Encourage Social Activities:</strong>
                            Support your teen in joining clubs, teams, or social
                            events where they can meet new people and build
                            friendships. These interactions are essential for
                            their personal development.
                        </li>
                        <li>
                            <strong>Celebrate Creativity:</strong> Provide
                            opportunities for your teen to explore their
                            creative side through art, music, drama, or other
                            expressive outlets. Encourage them to pursue hobbies
                            that allow them to showcase their talents.
                        </li>
                        <li>
                            <strong>Recognise Achievements:</strong> Acknowledge
                            your teen’s efforts and successes with praise and
                            encouragement. Positive reinforcement boosts their
                            confidence and motivates them to keep striving.
                        </li>
                        <li>
                            <strong>Promote Empathy and Listening:</strong> Help
                            your teen develop empathy by encouraging them to
                            listen to others and appreciate different
                            perspectives. Role-playing scenarios can be an
                            effective way to practice these skills.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="">
            <h2 class="text-xl md:text-3xl mb-4">
                Table of Parenting Tips for Influential Style
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
                        <td class="border border-gray-300 px-4 py-2">
                            Social Activities
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Encourage participation in clubs, teams or social
                            events to build connections
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">
                            Celebrating Creativity
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Provide opportunities for creative expression
                            through various hobbies and arts
                        </td>
                    </tr>


                    <tr>
                        <td class="border border-gray-300 px-4 py-2">
                            Recognising Achievements
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Praise efforts and celebrate successes to boost
                            confidence and motivation
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">
                            Promoting Empathy
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Discuss the importance of listening and
                            understanding others' perspectives
                        </td>
                    </tr>
                </tbody>
            </table>
            <p class="mt-4 font-bold">
                These tips can help you support your teen’s development and
                empower them to thrive in various aspects of their life. By
                understanding their Influential style, you can guide them toward
                becoming a confident and inspiring individual.
            </p>
        </div>

    </div>

    <!-- For ID Style Report -->
    <div v-if="style == 'ID'">
        <div class="row">
            <div class="col-6">
                <div class=" pb-0">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Supporting Your Teen with an Influential-Dominant (ID)
                        Style
                    </h2>
                    <p>
                        Welcome to the Parental Insights section of our report.
                        Understanding your teen’s unique personality can help
                        you support them in reaching their full potential. Teens
                        with an Influential-Dominant (ID) style are naturally
                        social, assertive, and driven to achieve their goals.
                        They thrive in environments that are dynamic, engaging,
                        and goal-oriented. Here’s how you can nurture their
                        strengths and guide their growth effectively.
                    </p>
                </div>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/ParentalInsights/7.svg'" alt="" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/ParentalInsights/8.svg'" alt="" />
                </div>
            </div>
            <div class="col-6">
                <div class=" pb-0">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Tips for Supporting Your Teen’s Growth
                    </h2>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Encourage Leadership Opportunities:</strong>
                            Support your teen’s desire to take on leadership
                            roles in social and group settings. Their charisma
                            and confidence can inspire and motivate others.
                        </li>
                        <li>
                            <strong>Provide Positive Reinforcement:</strong>
                            Regularly acknowledge and celebrate your teen’s
                            efforts and achievements. Positive feedback boosts
                            their confidence and keeps them motivated.
                        </li>
                        <li>
                            <strong>Promote Goal Setting:</strong> Help your
                            teen set clear and achievable goals. Encourage them
                            to break down large tasks into smaller, manageable
                            steps.
                        </li>
                        <li>
                            <strong>Promote Balanced Social Interactions:</strong>
                            Encourage your teen to engage in both leadership and
                            supportive roles in social settings. This will help
                            them develop empathy and understand different
                            perspectives.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="">
            <h2 class="text-xl md:text-3xl mb-4">
                Table of Parenting Tips for Influential-Dominant Style
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
                        <td class="border border-gray-300 px-4 py-2">
                            Encourage Leadership
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Support leadership roles in social and group
                            settings
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">
                            Provide Positive Reinforcement
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Regularly acknowledge and celebrate efforts and
                            achievements
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">
                            Promote Goal Setting
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Help set clear and achievable goals with manageable
                            steps
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">
                            Promote Balanced Social Interactions
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Encourage a balance of leadership and supportive
                            roles
                        </td>
                    </tr>
                </tbody>
            </table>
            <p class="mt-4 font-bold">
                These tips can help you support your teen’s development and
                empower them to thrive in various aspects of their life. By
                understanding their Influential-Dominant style, you can guide
                them toward becoming a confident and well-rounded individual.
            </p>
        </div>


    </div>

    <!-- For IS Style Report -->
    <div v-if="style == 'IS'">
        <div class="row">
            <div class="col-6">
                <div class=" pb-0">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Supporting Your Teen with an Influential-Supportive (IS)
                        Style
                    </h2>
                    <p class="">
                        Welcome to the Parental Insights section of our report.
                        Understanding your teen’s unique personality can help
                        you support them in reaching their full potential. Teens
                        with an Influential-Supportive (IS) style are naturally
                        social, empathetic, and collaborative. They thrive in
                        environments that are positive and inclusive. Here’s how
                        you can nurture their strengths and guide their growth
                        effectively.
                    </p>
                </div>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/ParentalInsights/7.svg'" alt="" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/ParentalInsights/8.svg'" alt="" />
                </div>
            </div>
            <div class="col-6">
                <div class=" pb-0">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Tips for Supporting Your Teen’s Growth
                    </h2>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Encourage Social Interactions:</strong>
                            Support your teen’s desire to engage with others by
                            encouraging participation in social activities,
                            clubs, and group projects. Social interactions are
                            essential for their well-being and development.
                        </li>
                        <li>
                            <strong>Provide Positive Reinforcement:</strong>
                            Regularly acknowledge and celebrate your teen’s
                            efforts and achievements. Positive reinforcement
                            boosts their confidence and motivation.
                        </li>
                        <li>
                            <strong>Support Collaborative Efforts:</strong>
                            Encourage your teen to work on group projects and
                            team activities. Their collaborative nature makes
                            them valuable team members, and these experiences
                            will help them build essential skills.
                        </li>
                        <li>
                            <strong>Promote Empathy and Understanding:</strong>
                            Help your teen develop their empathetic skills by
                            discussing different perspectives and encouraging
                            them to consider others’ feelings and experiences.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="">
            <h2 class="text-xl md:text-3xl mb-4">
                Table of Parenting Tips for Influential-Supportive Style
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
                        <td class="border border-gray-300 px-4 py-2">
                            Encourage Social Interactions
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Support participation in social activities, clubs,
                            and group projects
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">
                            Provide Positive Reinforcement
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Regularly acknowledge and celebrate efforts and
                            achievements
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">
                            Support Collaborative Efforts
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Encourage teamwork and group activities
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">
                            Promote Empathy and Understanding
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Discuss different perspectives and encourage
                            consideration of others’ feelings
                        </td>
                    </tr>
                </tbody>
            </table>
            <p class="mt-4 font-bold">
                These tips can help you support your teen’s development and
                empower them to thrive in various aspects of their life. By
                understanding their Influential-Supportive style, you can guide
                them toward becoming a confident and well-rounded individual.
            </p>
        </div>

    </div>

    <!-- For S Style Report -->
    <div v-if="style == 'S'">
        <!-- Content for S -->
        <div class="row">
            <div class="col-6">
                <div class=" pb-0">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Supporting Your Teen with a Supportive (S) Style
                    </h2>
                    <p class="">
                        Welcome to the Parental Insights section of our report.
                        Understanding your teen’s unique personality can help
                        you support them in reaching their full potential. Teens
                        with a Supportive (S) style are naturally patient,
                        reliable, and cooperative. They thrive in environments
                        that offer stability and positive social connections.
                        Here’s how you can nurture their strengths and guide
                        their growth effectively.
                    </p>
                </div>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/ParentalInsights/7.svg'" alt="" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/ParentalInsights/8.svg'" alt="" />
                </div>
            </div>
            <div class="col-6">
                <div class=" pb-0">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Tips for Supporting Your Teen’s Growth
                    </h2>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Encourage Social Connections:</strong>
                            Support your teen in building friendships and
                            participating in group activities. These
                            interactions are essential for their personal
                            development and sense of belonging.
                        </li>
                        <li>
                            <strong>Create a Stable Environment:</strong>
                            Provide a consistent and predictable home routine
                            that helps your teen feel secure and comfortable.
                        </li>
                        <li>
                            <strong>Recognise Efforts:</strong> Acknowledge your
                            teen’s efforts and contributions, even if they’re
                            not always in the spotlight. Positive reinforcement
                            boosts their confidence and motivation.
                        </li>
                        <li>
                            <strong>Promote Open Communication:</strong> Promote
                            an environment where your teen feels comfortable
                            expressing their thoughts and feelings without fear
                            of judgment.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="">
            <h2 class="text-xl md:text-3xl mb-4">
                Table of Parenting Tips for Supportive Style
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
                        <td class="border border-gray-300 px-4 py-2">
                            Encouraging Social Connections
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Support participation in clubs, teams, or social
                            events to build friendships
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">
                            Creating a Stable Environment
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Provide a consistent routine that offers security
                            and predictability
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">
                            Recognising Achievements
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Acknowledge contributions and reinforce positive
                            behaviours
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">
                            Promoting Open Communication
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Create a safe space for sharing thoughts and
                            feelings openly
                        </td>
                    </tr>
                </tbody>
            </table>
            <p class="mt-4 font-bold">
                These tips can help you support your teen’s development and
                empower them to thrive in various aspects of their life. By
                understanding their Supportive style, you can guide them toward
                becoming a confident and well-rounded individual.
            </p>
        </div>


    </div>

    <!-- For SC Style Report -->
    <div v-if="style == 'SC'">
        <div class="row">
            <div class="col-6">
                <div class=" pb-0">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Supporting Your Teen with a Supportive-Cautious (SC)
                        Style
                    </h2>
                    <p class="">
                        Welcome to the Parental Insights section of our report.
                        Understanding your teen’s unique personality can help
                        you support them in reaching their full potential. Teens
                        with a Supportive-Cautious (SC) style are naturally
                        reliable, detail-oriented, and supportive. They thrive
                        in environments that are stable, structured, and
                        empathetic. Here’s how you can nurture their strengths
                        and guide their growth effectively.
                    </p>
                </div>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/ParentalInsights/7.svg'" alt="" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/ParentalInsights/8.svg'" alt="" />
                </div>
            </div>
            <div class="col-6">
                <div class=" pb-0">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Tips for Supporting Your Teen’s Growth
                    </h2>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Provide a Stable Environment:</strong>
                            Create a consistent and predictable home
                            environment. Stability helps your teen feel secure
                            and allows them to focus on their tasks and goals.
                        </li>
                        <li>
                            <strong>Encourage Attention to Detail:</strong>
                            Support your teen’s meticulous nature by encouraging
                            activities that require careful analysis and
                            thoroughness. Praise their attention to detail and
                            accuracy.
                        </li>
                        <li>
                            <strong>Promote Teamwork and Collaboration:</strong>
                            Encourage your teen to participate in group
                            activities and team projects. Their cooperative
                            nature makes them a valuable team member.
                        </li>
                        <li>
                            <strong>Support Emotional Well-being:</strong> Be
                            attentive to your teen’s emotional needs. Offer a
                            listening ear and provide comfort and reassurance
                            when they are feeling stressed or anxious.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="">
            <h2 class="text-xl md:text-3xl mb-4">
                Table of Parenting Tips for Supportive-Cautious Style
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
                        <td class="border border-gray-300 px-4 py-2">
                            Provide a Stable Environment
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Create consistent routines and predictable home
                            settings
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">
                            Encourage Attention to Detail
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Support activities that require careful analysis and
                            accuracy
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">
                            Promote Teamwork and Collaboration
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Encourage participation in group activities and team
                            projects
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">
                            Support Emotional Well-being
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Be attentive to emotional needs and provide comfort
                            and reassurance
                        </td>
                    </tr>
                </tbody>
            </table>
            <p class="mt-4 font-bold">
                These tips can help you support your teen’s development and
                empower them to thrive in various aspects of their life. By
                understanding their Supportive-Cautious style, you can guide
                them toward becoming a confident and well-rounded individual.
            </p>
        </div>


    </div>

    <!-- For SI Style Report -->
    <div v-if="style == 'SI'">
        <div class="row">
            <div class="col-6">
                <div class=" pb-0">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Supporting Your Teen with a Supportive-Influential (SI)
                        Style
                    </h2>
                    <p class="">
                        Welcome to the Parental Insights section of our report.
                        Understanding your teen’s unique personality can help
                        you support them in reaching their full potential. Teens
                        with a Supportive-Influential (SI) style are naturally
                        empathetic, sociable, and supportive. They thrive in
                        environments that are social, positive, and engaging.
                        Here’s how you can nurture their strengths and guide
                        their growth effectively.
                    </p>
                </div>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/ParentalInsights/7.svg'" alt="" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/ParentalInsights/8.svg'" alt="" />
                </div>
            </div>
            <div class="col-6">
                <div class=" pb-0">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Tips for Supporting Your Teen’s Growth
                    </h2>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Encourage Social Interaction:</strong>
                            Provide opportunities for your teen to engage in
                            social activities. Whether it’s through clubs,
                            sports, or community events, social interaction
                            helps them stay motivated and connected.
                        </li>
                        <li>
                            <strong>Recognise Their Efforts:</strong> Regularly
                            acknowledge and praise your teen’s efforts and
                            achievements. Positive reinforcement boosts their
                            confidence and encourages continued growth.
                        </li>
                        <li>
                            <strong>Encourage Collaboration:</strong> Support
                            your teen’s involvement in group projects and team
                            activities. Their cooperative nature makes them a
                            valuable team member who can help create a
                            harmonious environment.
                        </li>
                        <li>
                            <strong>Provide Emotional Support:</strong> Be
                            attentive to your teen’s emotional needs. Offer a
                            listening ear and provide comfort and reassurance
                            when they are feeling stressed or anxious.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="">
            <h2 class="text-xl md:text-3xl mb-4">
                Table of Parenting Tips for Supportive-Influential Style
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
                        <td class="border border-gray-300 px-4 py-2">
                            Encourage Social Interaction
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Provide opportunities for social engagement and
                            activities
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">
                            Recognise Their Efforts
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Acknowledge and praise their efforts and
                            achievements
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">
                            Encourage Collaboration
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Support involvement in group projects and team
                            activities
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">
                            Provide Emotional Support
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Be attentive to emotional needs and offer comfort
                            and reassurance
                        </td>
                    </tr>
                </tbody>
            </table>
            <p class="mt-4 font-bold">
                These tips can help you support your teen’s development and
                empower them to thrive in various aspects of their life. By
                understanding their Supportive-Influential style, you can guide
                them toward becoming a confident and well-rounded individual.
            </p>
        </div>
        </div>

    </div>
    </div>
</template>

<script>
import AssessmentTypes from "@/Layouts/AssessmentTypes.vue";

export default {
    name: "ParentalInsight",
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
    color: #fa25c4
        /* font-size: 19px; */
}

h2,
.p-6 > .row > .col-6 > h2 {
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
