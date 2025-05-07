<template>
 <div class="p-6">
    <div class="space-y-6 mt-3">
        <h1 class="font-bold mb-4 text-center">Learning Style Insights</h1>
    </div>
    <div class="p-4 md:p-6">

    <!-- For C Style Report -->
    <div v-if="style == 'C'">
        <!-- Content for C -->
        <div class="row">
            <div class="col-6">
                <div class="p-0 pb-0">
                    <h2 class="text-xl md:text-3xl mb-4">How You Learn Best</h2>
                    <p>
                        With a Cautious (C) style, you have a unique approach to learning. Here’s how you can make the most of your learning experience:

                    </p>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Structured Learning Environment:</strong> You thrive in environments where there is
                            clear
                            organisation and structure. Having a consistent
                            routine and clear guidelines helps you focus and
                            absorb information more effectively.
                        </li>
                        <li>
                            <strong>Detailed Instructions:</strong> You prefer detailed instructions and appreciate
                            having all the necessary information before starting
                            a task. This allows you to understand the material
                            thoroughly and complete tasks accurately.
                        </li>
                        <li>
                            <strong>Independent Study:</strong>You enjoy working independently, allowing you to
                            concentrate deeply on the subject matter without
                            distractions. This independence helps you develop a
                            strong understanding of complex concepts.
                        </li>
                        <li>
                            <strong>Analytical Thinking:</strong> You excel at analysing information and identifying
                            patterns, which helps you understand and retain new
                            concepts. You enjoy subjects that challenge your
                            critical thinking skills and require in-depth
                            analysis.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/HowYouLearnBest/8.svg'" alt="" />
                </div>
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/StrengthsAndAreasForGrowth/4.svg'"
                        alt="" />
                </div>


            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/HowYouLearnBest/9.svg'" alt="" />
                </div>
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/StrengthsAndAreasForGrowth/4.svg'"
                        alt="" />
                </div>
            </div>
            <div class="col-6">
                <div class="p-6">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Strategies for Enhancing Learning
                    </h2>
                    <p class="">
                        To make the most of your learning style, try these strategies:
                    </p>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Create a Study Schedule:</strong> Establish a consistent study routine that helps
                            you
                            stay organised and focused.
                        </li>
                        <li>
                            <strong>Break Down Complex Tasks:</strong> Divide complex tasks into smaller, manageable
                            steps
                            to make them less overwhelming.
                        </li>
                        <li>
                            <strong>Seek Clarification:</strong> Don’t hesitate to ask for clarification or
                            additional information if you don’t understand
                            something fully.
                        </li>
                        <li>
                            <strong>Engage in Analytical Activities:</strong> Participate in activities that challenge
                            your
                            analytical skills, such as puzzles, logic games, or
                            problem-solving exercises.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <!-- For CD Style Report -->
    <div v-if="style == 'CD'">
        <div class="row">
            <div class="col-6">
                <div class="p-0 pb-0">
                    <h2 class="text-xl md:text-3xl mb-4">How You Learn Best</h2>
                    <p class="">
                        With a Cautious-Dominant (CD) style, you combine analytical
                        thinking with a focus on achieving results. Here’s how you can
                        make the most of your learning experience:
                    </p>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Structured Learning:</strong> You thrive in
                            environments where there is clear structure and
                            organisation. Detailed instructions and well-defined goals
                            help you stay focused and on track.
                        </li>
                        <li>
                            <strong>Independent Study:</strong> You prefer to work
                            independently, relying on your own skills and judgment.
                            Individual projects, research assignments, and tasks that
                            allow for self-paced learning align well with your
                            strengths.
                        </li>
                        <li>
                            <strong>Task-Oriented Learning:</strong> You are motivated
                            by learning experiences that have clear objectives and
                            measurable outcomes. You prefer tasks that allow you to see
                            tangible results from your efforts.
                        </li>
                        <li>
                            <strong>Analytical Challenges:</strong> You excel in tasks
                            that require careful analysis, problem-solving, and logical
                            reasoning. Activities like case studies, research projects,
                            and complex problem-solving tasks are particularly engaging
                            for you.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/HowYouLearnBest/8.svg'" alt="" />
                </div>
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/StrengthsAndAreasForGrowth/4.svg'"
                        alt="" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/HowYouLearnBest/9.svg'" alt="" />
                </div>
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/StrengthsAndAreasForGrowth/4.svg'"
                        alt="" />
                </div>
            </div>
            <div class="col-6">
                <div class="p-6">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Strategies for Enhancing Learning
                    </h2>
                    <p class="">
                        To make the most of your learning style, try these strategies:
                    </p>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Set Clear Goals:</strong> Establish clear learning
                            objectives and goals for each study session. Knowing what
                            you want to achieve will keep you focused and motivated.
                        </li>
                        <li>
                            <strong>Work Independently:</strong> Take advantage of
                            opportunities for independent study. Projects that allow you
                            to work at your own pace and apply your analytical skills
                            are ideal.
                        </li>
                        <li>
                            <strong>Engage in Analytical Activities:</strong> Focus on
                            activities that require careful analysis and logical
                            reasoning. These tasks will help you make the most of your
                            strengths and keep you engaged.
                        </li>
                        <li>
                            <strong>Review and Reflect:</strong> After completing tasks,
                            take time to review your work and reflect on the results.
                            This process will help you identify areas for improvement
                            and reinforce your learning.
                        </li>
                    </ul>
                </div>
            </div>
        </div>





    </div>

    <!-- For CS Style Report -->
    <div v-if="style == 'CS'">
        <div class="row">
            <div class="col-6">
                <div class="p-0 pb-0">
                    <h2 class="text-xl md:text-3xl mb-4">How You Learn Best</h2>
                    <p class="">
                        With a Cautious-Supportive (CS) style, you have a
                        detail-oriented and supportive approach to learning. Here’s how
                        you can make the most of your learning experience:
                    </p>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Structured Learning:</strong> You thrive in
                            environments where there is a clear structure and
                            organisation. Detailed instructions and well-defined goals
                            help you stay focused and on track.
                        </li>
                        <li>
                            <strong>Collaborative Learning:</strong> You work well in
                            group settings where cooperation and teamwork are
                            encouraged. Group projects, study groups, and team
                            activities enhance your learning experience by allowing you
                            to support and learn from others.
                        </li>
                        <li>
                            <strong>Supportive Feedback:</strong> You respond well to
                            positive reinforcement and supportive feedback. Knowing that
                            your efforts are recognised and appreciated motivates you to
                            improve and succeed.
                        </li>
                        <li>
                            <strong>Analytical Tasks:</strong> You excel at tasks that
                            require careful analysis and attention to detail.
                            Problem-solving activities, research projects, and detailed
                            assignments align well with your strengths.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/HowYouLearnBest/8.svg'" alt="" />
                </div>
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/StrengthsAndAreasForGrowth/4.svg'"
                        alt="" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/HowYouLearnBest/9.svg'" alt="" />
                </div>
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/StrengthsAndAreasForGrowth/4.svg'"
                        alt="" />
                </div>
            </div>
            <div class="col-6">
                <div class="p-0 pb-0">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Strategies for Enhancing Learning
                    </h2>
                    <p class="">
                        To make the most of your learning style, try these strategies:
                    </p>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Create a Study Schedule:</strong> Develop a
                            structured study schedule that includes specific times for
                            studying, breaks, and review sessions. Having a clear plan
                            will help you stay organised and focused.
                        </li>
                        <li>
                            <strong>Participate in Study Groups:</strong> Join study
                            groups where you can collaborate with peers. Sharing
                            knowledge and supporting each other will enhance your
                            understanding of the material.
                        </li>
                        <li>
                            <strong>Seek Detailed Feedback:</strong> Ask teachers or
                            mentors for detailed feedback on your work. Use their
                            suggestions to make improvements and refine your skills.
                        </li>
                        <li>
                            <strong>Engage in Analytical Activities:</strong> Focus on
                            activities that require careful analysis and attention to
                            detail. These tasks will help you make the most of your
                            strengths and keep you engaged.
                        </li>
                    </ul>
                </div>
            </div>
        </div>





    </div>

    <!-- For D Style Report -->
    <div v-if="style == 'D'">
        <div class="row">
            <div class="col-6">

                <div class="p-0 pb-0">
                    <h2 class="text-xl md:text-3xl mb-4">How You Learn Best</h2>
                    <p class="">
                        With a Dominant (D) style, you have a unique approach to
                        learning. Here’s how you can make the most of your learning
                        experience:
                    </p>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Action-Oriented Learning:</strong> You learn best
                            when you can jump right in and take action. Hands-on
                            activities and real-world applications help you grasp
                            concepts quickly.
                        </li>
                        <li>
                            <strong>Goal-Driven:</strong> Setting clear goals for what
                            you want to learn keeps you focused and motivated. You like
                            knowing what you’re working toward and how it fits into the
                            bigger picture.
                        </li>
                        <li>
                            <strong>Challenge-Seeking:</strong> You enjoy tackling
                            challenging tasks that push you to think critically and
                            solve problems. Complex projects and competitive
                            environments can be exciting and engaging for you.
                        </li>
                        <li>
                            <strong>Independent Study:</strong> You prefer having
                            control over your learning process. Having the freedom to
                            explore topics on your own helps you stay engaged and
                            interested.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/HowYouLearnBest/8.svg'" alt="" />
                </div>
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/StrengthsAndAreasForGrowth/4.svg'"
                        alt="" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/HowYouLearnBest/9.svg'" alt="" />
                </div>
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/StrengthsAndAreasForGrowth/4.svg'"
                        alt="" />
                </div>
            </div>
            <div class="col-6">

                <div class="p-6">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Strategies for Enhancing Learning
                    </h2>
                    <p class="">
                        To make the most of your learning style, try these strategies:
                    </p>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Set Clear Learning Goals:</strong> Define what you
                            want to achieve in each subject or topic, and track your
                            progress to stay motivated.
                        </li>
                        <li>
                            <strong>Get Hands-On:</strong> Look for opportunities to
                            apply what you’re learning through projects, experiments, or
                            real-life scenarios.
                        </li>
                        <li>
                            <strong>Challenge Yourself:</strong> Seek out advanced
                            courses or competitions that push you to grow and test your
                            skills.
                        </li>
                        <li>
                            <strong>Take Initiative:</strong> Take charge of your
                            learning by choosing topics that interest you and exploring
                            them in depth.
                        </li>
                    </ul>
                </div>
            </div>
        </div>



    </div>

    <!-- For DC Style Report -->
    <div v-if="style == 'DC'">
        <div class="row">
            <div class="col-6">
                <div class="p-0 pb-0">
                    <h2 class="text-xl md:text-3xl mb-4">How You Learn Best</h2>
                    <p>
                        With a Dominant-Cautious (DC) style, you have a unique approach
                        to learning that combines assertiveness with a love for detail
                        and accuracy. Here’s how you can make the most of your learning
                        experience:
                    </p>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Structured and Organised:</strong> You thrive in
                            structured learning environments where expectations are
                            clear, and materials are well-organised. You appreciate
                            detailed instructions and clear guidelines.
                        </li>
                        <li>
                            <strong>Goal-Oriented Learning:</strong> You are driven by
                            goals and enjoy setting ambitious targets for yourself. You
                            learn best when you can see how the material relates to your
                            objectives and how it can be applied to real-world
                            situations.
                        </li>
                        <li>
                            <strong>Analytical Exploration:</strong> You enjoy diving
                            deep into subjects and analysing information thoroughly.
                            Opportunities for research, problem-solving, and critical
                            thinking keep you motivated and engaged.
                        </li>
                        <li>
                            <strong>Independent Study:</strong> You excel when given the
                            chance to work independently, allowing you to concentrate
                            deeply on your studies without distractions.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/HowYouLearnBest/8.svg'" alt="" />
                </div>
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/StrengthsAndAreasForGrowth/4.svg'"
                        alt="" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/HowYouLearnBest/9.svg'" alt="" />
                </div>
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/StrengthsAndAreasForGrowth/4.svg'"
                        alt="" />
                </div>
            </div>
            <div class="col-6">
                <div class="p-0 pb-0">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Strategies for Enhancing Learning
                    </h2>
                    <p>
                        To make the most of your learning style, try these strategies:
                    </p>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Set Clear Goals:</strong> Define clear learning
                            objectives and track your progress to stay motivated and
                            focused.
                        </li>
                        <li>
                            <strong>Maintain Organisation:</strong> Keep your study
                            materials and schedule well-organised to ensure you can work
                            efficiently and effectively.
                        </li>
                        <li>
                            <strong>Engage in Analytical Activities:</strong>
                            Participate in activities that challenge your critical
                            thinking and problem-solving skills.
                        </li>
                        <li>
                            <strong>Seek Independent Projects:</strong> Look for
                            opportunities to work on projects independently, allowing
                            you to delve deeply into topics of interest.
                        </li>
                    </ul>
                </div>
            </div>
        </div>





    </div>

    <!-- For DI Style Report -->
    <div v-if="style == 'DI'">
        <div class="row">
            <div class="col-6">

                <div class="p-0 pb-0">
                    <h2 class="text-xl md:text-3xl mb-4">How You Learn Best</h2>
                    <p>
                        With a Dominant-Influential (DI) style, you have a dynamic
                        approach to learning. Here’s how you can make the most of your
                        learning experience:
                    </p>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Active and Engaging:</strong> You thrive in
                            interactive learning environments that allow you to
                            participate actively and engage with the material. You enjoy
                            discussions, debates, and group activities that stimulate
                            your mind and encourage collaboration.
                        </li>
                        <li>
                            <strong>Goal-Oriented Learning:</strong> You are driven by
                            goals and enjoy setting ambitious targets for yourself. You
                            learn best when you can see how the material relates to your
                            objectives and how it can be applied to real-world
                            situations.
                        </li>
                        <li>
                            <strong>Creative Exploration:</strong> You enjoy exploring
                            new ideas and concepts, often approaching problems with
                            creativity and innovation. Opportunities for creative
                            thinking and expression keep you motivated and inspired.
                        </li>
                        <li>
                            <strong>Leadership Opportunities:</strong> You excel when
                            given the chance to take the lead in group projects or
                            presentations. You enjoy guiding others and sharing your
                            vision, using your charisma to inspire teamwork and
                            cooperation.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/HowYouLearnBest/8.svg'" alt="" />
                </div>
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/StrengthsAndAreasForGrowth/4.svg'"
                        alt="" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/HowYouLearnBest/9.svg'" alt="" />
                </div>
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/StrengthsAndAreasForGrowth/4.svg'"
                        alt="" />
                </div>
            </div>
            <div class="col-6">
                <div class="p-0 pb-0">
                    <h2 class=" text-xl md:text-3xl mb-4">
                        Strategies for Enhancing Learning
                    </h2>
                    <p>
                        To make the most of your learning style, try these strategies:
                    </p>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Set Clear Goals:</strong> Define clear learning
                            objectives and track your progress to stay motivated and
                            focused.
                        </li>
                        <li>
                            <strong>Engage in Group Activities:</strong> Participate in
                            group discussions and projects to leverage your social
                            skills and learn from others.
                        </li>
                        <li>
                            <strong>Explore Creative Projects:</strong> Seek out
                            opportunities for creative expression and problem-solving in
                            your studies.
                        </li>
                        <li>
                            <strong>Take Initiative:</strong> Volunteer for leadership
                            roles in group settings to develop your leadership skills
                            and confidence.
                        </li>
                    </ul>
                </div>
            </div>
        </div>




    </div>

    <!-- For I Style Report -->
    <div v-if="style == 'I'">
        <div class="row">
            <div class="col-6">

                <div class="p-0 pb-0">
                    <h2 class="text-xl md:text-3xl mb-4">How You Learn Best</h2>
                    <p>
                        With an Influential (I) style, you have a unique approach to
                        learning. Here’s how you can make the most of your learning
                        experience:
                    </p>

                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Interactive Learning:</strong> You learn best
                            through interactive activities and group discussions.
                            Participating in lively conversations helps you understand
                            new concepts.
                        </li>
                        <li>
                            <strong>Creative Projects:</strong> You thrive when you can
                            express your creativity, whether it’s through art, music, or
                            creative writing. Projects that allow you to explore your
                            imagination are your favourites.
                        </li>
                        <li>
                            <strong>Social Learning:</strong> Studying with friends or
                            working in groups keeps you motivated and engaged. You enjoy
                            bouncing ideas off others and learning from their
                            perspectives.
                        </li>
                        <li>
                            <strong>Visual and Auditory Aids:</strong> You prefer
                            learning materials that include visuals or audio elements,
                            like videos, podcasts, and colourful presentations, to keep
                            things interesting.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/HowYouLearnBest/8.svg'" alt="" />
                </div>
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/StrengthsAndAreasForGrowth/4.svg'"
                        alt="" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/HowYouLearnBest/9.svg'" alt="" />
                </div>
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/StrengthsAndAreasForGrowth/4.svg'"
                        alt="" />
                </div>
            </div>
            <div class="col-6">

                <div class="p-0 pb-0">
                    <h2 class=" text-xl md:text-3xl mb-4">
                        Strategies for Enhancing Learning
                    </h2>
                    <p>
                        To make the most of your learning style, try these strategies:
                    </p>

                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Engage in Group Activities:</strong> Join study
                            groups or team projects where you can collaborate and learn
                            from others.
                        </li>
                        <li>
                            <strong>Incorporate Creativity:</strong> Use creative
                            methods, like drawing diagrams or making mind maps, to help
                            you grasp complex topics.
                        </li>
                        <li>
                            <strong>Use Multimedia Resources:</strong> Explore videos,
                            podcasts, and online resources to supplement your learning
                            and make studying more enjoyable.
                        </li>
                        <li>
                            <strong>Ask Questions:</strong> Don’t hesitate to ask
                            questions in class or during discussions to clarify your
                            understanding and encourage conversation.
                        </li>
                    </ul>
                </div>
            </div>
        </div>



    </div>

    <!-- For ID Style Report -->
    <div v-if="style == 'ID'">
        <div class="row">
            <div class="col-6">

                <div class="p-0 pb-0">
                    <h2 class="text-xl md:text-3xl mb-4">How You Learn Best</h2>
                    <p class="">
                        With an Influential-Dominant (ID) style, you have a dynamic
                        approach to learning that combines social engagement with
                        assertive leadership. Here’s how you can make the most of your
                        learning experience:
                    </p>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Interactive Learning:</strong> You thrive in
                            environments that are interactive and engaging.
                            Participating in discussions, group projects, and hands-on
                            activities keeps you interested and helps you understand
                            concepts more effectively.
                        </li>
                        <li>
                            <strong>Leadership Opportunities:</strong> You excel when
                            given the chance to take on leadership roles in your
                            learning. Leading group projects, organising study sessions,
                            and presenting in front of the class can enhance your
                            learning experience.
                        </li>
                        <li>
                            <strong>Goal-Oriented Learning:</strong> Setting clear goals
                            and working towards them motivates you. Having specific
                            objectives and milestones helps you stay focused and driven.
                        </li>
                        <li>
                            <strong>Social Collaboration:</strong> Collaborating with
                            peers and exchanging ideas energises you. You benefit from
                            study groups and collaborative learning environments where
                            you can share insights and learn from others.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/HowYouLearnBest/8.svg'" alt="" />
                </div>
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/StrengthsAndAreasForGrowth/4.svg'"
                        alt="" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/HowYouLearnBest/9.svg'" alt="" />
                </div>
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/StrengthsAndAreasForGrowth/4.svg'"
                        alt="" />
                </div>
            </div>
            <div class="col-6">

                <div class="p-0 pb-0">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Strategies for Enhancing Learning
                    </h2>
                    <p class="">
                        To make the most of your learning style, try these strategies:
                    </p>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Participate Actively:</strong> Engage actively in
                            class discussions and group activities. Your contributions
                            can enhance your understanding and make learning more
                            enjoyable.
                        </li>
                        <li>
                            <strong>Seek Leadership Roles:</strong> Look for
                            opportunities to lead projects or study groups. Your
                            leadership skills can help guide and motivate others while
                            enhancing your own learning.
                        </li>
                        <li>
                            <strong>Set Clear Objectives:</strong> Define specific goals
                            for your learning. Break down large tasks into smaller,
                            manageable steps to track your progress and stay motivated.
                        </li>
                        <li>
                            <strong>Collaborate with Peers:</strong> Join study groups
                            or form collaborative learning partnerships. Sharing ideas
                            and working together can provide new perspectives and deepen
                            your understanding.
                        </li>
                    </ul>
                </div>
            </div>
        </div>



    </div>

    <!-- For IS Style Report -->
    <div v-if="style == 'IS'">
        <div class="row">
            <div class="col-6">

                <div class="p-0 pb-0">
                    <h2 class="text-xl md:text-3xl mb-4">How You Learn Best</h2>
                    <p class="">
                        With an Influential-Supportive (IS) style, you have a unique
                        approach to learning that combines social engagement with a
                        supportive atmosphere. Here’s how you can make the most of your
                        learning experience:
                    </p>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Collaborative Learning:</strong> You thrive in group
                            settings where you can work with peers. Collaborative
                            projects, study groups, and interactive discussions help you
                            understand and retain information.
                        </li>
                        <li>
                            <strong>Positive Reinforcement:</strong> Encouragement and
                            positive feedback from teachers and classmates boost your
                            motivation and confidence. You learn best in environments
                            where your efforts are acknowledged and appreciated.
                        </li>
                        <li>
                            <strong>Interactive Activities:</strong> Engaging in
                            hands-on activities, role-playing, and practical exercises
                            keeps you interested and helps you grasp concepts more
                            effectively.
                        </li>
                        <li>
                            <strong>Supportive Environment:</strong> You excel in
                            environments that are welcoming and inclusive. A supportive
                            atmosphere where you feel valued and respected enhances your
                            ability to focus and learn.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/HowYouLearnBest/8.svg'" alt="" />
                </div>
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/StrengthsAndAreasForGrowth/4.svg'"
                        alt="" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/HowYouLearnBest/9.svg'" alt="" />
                </div>
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/StrengthsAndAreasForGrowth/4.svg'"
                        alt="" />
                </div>
            </div>
            <div class="col-6">

                <div class="p-0 pb-0">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Strategies for Enhancing Learning
                    </h2>
                    <p class="">
                        To make the most of your learning style, try these strategies:
                    </p>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Participate in Group Projects:</strong> Seek out
                            opportunities to work with others on assignments and
                            projects. Collaborative efforts can enhance your
                            understanding and make learning more enjoyable.
                        </li>
                        <li>
                            <strong>Seek Positive Feedback:</strong> Don’t hesitate to
                            ask for feedback on your work. Positive reinforcement from
                            teachers and peers can boost your confidence and keep you
                            motivated.
                        </li>
                        <li>
                            <strong>Engage in Interactive Learning:</strong> Participate
                            in activities that require active involvement, such as
                            debates, presentations, and hands-on experiments. These
                            methods can make learning more dynamic and memorable.
                        </li>
                        <li>
                            <strong>Create a Supportive Study Environment:</strong>
                            Surround yourself with supportive and encouraging peers.
                            Study groups and collaborative learning environments can
                            help you stay focused and motivated.
                        </li>
                    </ul>
                </div>
            </div>
        </div>



    </div>

    <!-- For S Style Report -->
    <div v-if="style == 'S'">
        <!-- Content for S -->
        <div class="row">
            <div class="col-6">


                <div class="p-0 pb-0">
                    <h2 class="text-xl md:text-3xl mb-4">How You Learn Best</h2>
                    <p class="">
                        With a Supportive (S) style, you have a unique approach to
                        learning. Here’s how you can make the most of your learning
                        experience:
                    </p>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Collaborative Learning:</strong> You learn best when
                            working with others in group settings, where you can share
                            ideas and support one another. Being part of a team allows
                            you to hear different perspectives, which can deepen your
                            understanding of the material. You enjoy contributing to
                            group projects and finding ways to help everyone succeed
                            together.
                        </li>
                        <li>
                            <strong>Consistent Routine:</strong> Having a structured
                            routine helps you feel comfortable and focused, allowing you
                            to absorb information more effectively. You thrive when you
                            know what to expect and can plan your study sessions around
                            a regular schedule. This predictability helps reduce stress
                            and enhances your ability to concentrate on learning.
                        </li>
                        <li>
                            <strong>Hands-On Activities:</strong> You enjoy learning
                            through practical, hands-on experiences that allow you to
                            apply concepts in real-world situations. Experiential
                            learning, such as labs or interactive projects, makes
                            abstract ideas more tangible and understandable. You excel
                            when you can see the direct application of what you're
                            learning.
                        </li>
                        <li>
                            <strong>Supportive Environment:</strong> A positive and
                            encouraging atmosphere boosts your confidence and motivates
                            you to engage with the material. You perform best when you
                            feel supported by teachers and peers who value your
                            contributions. Encouragement and constructive feedback help
                            you stay motivated and eager to learn.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/HowYouLearnBest/8.svg'" alt="" />
                </div>
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/StrengthsAndAreasForGrowth/4.svg'"
                        alt="" />
                </div>
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/HowYouLearnBest/9.svg'" alt="" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/HowYouLearnBest/9.svg'" alt="" />
                </div>
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/StrengthsAndAreasForGrowth/4.svg'"
                        alt="" />
                </div>
            </div>
            <div class="col-6">

                <div class="p-0 pb-0">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Strategies for Enhancing Learning
                    </h2>
                    <p class="">
                        To make the most of your learning style, try these strategies:
                    </p>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Join Study Groups:</strong> Participate in group
                            study sessions where you can collaborate and learn from
                            peers.
                        </li>
                        <li>
                            <strong>Create a Study Schedule:</strong> Establish a
                            consistent study routine that helps you stay organised and
                            focused.
                        </li>
                        <li>
                            <strong>Engage in Practical Projects:</strong> Look for
                            opportunities to apply what you’ve learned through projects
                            or experiments.
                        </li>
                        <li>
                            <strong>Seek Encouragement:</strong> Surround yourself with
                            supportive friends and mentors who can provide guidance and
                            encouragement.
                        </li>
                    </ul>
                </div>
            </div>
        </div>



    </div>

    <!-- For SC Style Report -->
    <div v-if="style == 'SC'">
        <div class="row">
            <div class="col-6">
                <div class="p-0 pb-0">
                    <h2 class="text-xl md:text-3xl mb-4">
                        How You Learn Best
                    </h2>
                    <p class="">
                        With a Supportive-Cautious (SC) style, you have a methodical and supportive approach to
                        learning. Here’s how you can make the most of your learning experience:

                    </p>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Structured Learning:</strong> You thrive in environments that provide clear
                            instructions, well-organised materials, and predictable routines. A structured approach
                            helps you stay focused and reduces anxiety.
                        </li>
                        <li>
                            <strong>Collaborative Learning:</strong> Working with peers in group projects and study
                            groups enhances your learning experience. You benefit from sharing ideas and supporting each
                            other in a collaborative setting.
                        </li>
                        <li>
                            <strong>Detail-Oriented Learning:</strong> You excel when you can pay attention to details
                            and ensure accuracy. Tasks that require careful analysis and thoroughness are where you
                            shine.
                        </li>
                        <li>
                            <strong>Supportive Feedback:</strong> You respond well to constructive feedback that is
                            delivered in a supportive and respectful manner. Knowing that your efforts are recognised
                            and appreciated motivates you to improve.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/HowYouLearnBest/8.svg'" alt="" />
                </div>
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/StrengthsAndAreasForGrowth/4.svg'"
                        alt="" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/HowYouLearnBest/9.svg'" alt="" />
                </div>
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/StrengthsAndAreasForGrowth/4.svg'"
                        alt="" />
                </div>
            </div>
            <div class="col-6">

                <div class="p-0 pb-0">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Strategies for Enhancing Learning
                    </h2>
                    <p class="">
                        To make the most of your learning style, try these strategies:
                    </p>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Follow a Study Schedule:</strong> Create a study
                            schedule that outlines specific times for studying different
                            subjects. A routine will help you stay organised and manage
                            your time effectively.
                        </li>
                        <li>
                            <strong>Join Study Groups:</strong> Participate in study
                            groups where you can collaborate with peers. Sharing
                            knowledge and supporting each other will enhance your
                            understanding of the material.
                        </li>
                        <li>
                            <strong>Focus on Details:</strong> Take time to review and
                            analyse your notes and assignments carefully. Pay attention
                            to details to ensure accuracy and completeness.
                        </li>
                        <li>
                            <strong>Seek Constructive Feedback:</strong> Ask teachers or
                            mentors for feedback on your work. Use their suggestions to
                            make improvements and refine your skills.
                        </li>
                    </ul>
                </div>
            </div>
        </div>



    </div>

    <!-- For SI Style Report -->
    <div v-if="style == 'SI'">
        <div class="row">
            <div class="col-6">

                <div class="p-0 pb-0">
                    <h2 class="text-xl md:text-3xl mb-4">How You Learn Best</h2>
                    <p class="">
                        With a Supportive-Influential (SI) style, you have a social and
                        supportive approach to learning. Here’s how you can make the
                        most of your learning experience:
                    </p>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Collaborative Learning:</strong> You thrive in environments where you can work with
                            others. Group projects, study groups, and team activities enhance your learning experience.
                            Sharing ideas and supporting each other helps you understand the material better.
                        </li>
                        <li>
                            <strong>Interactive and Engaging Lessons:</strong> You learn best when lessons are
                            interactive and engaging. Activities that involve discussion, role-playing, and hands-on
                            experiences keep you interested and motivated.
                        </li>
                        <li>
                            <strong>Supportive Feedback:</strong> You respond well to positive reinforcement and
                            supportive feedback. Knowing that your efforts are recognised and appreciated motivates you
                            to improve and succeed.
                        </li>
                        <li>
                            <strong>Real-Life Applications:</strong> You enjoy learning when you can see how the
                            material applies to real life. Relating lessons to practical situations and personal
                            experiences makes the content more meaningful and memorable.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/HowYouLearnBest/8.svg'" alt="" />
                </div>
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/StrengthsAndAreasForGrowth/4.svg'"
                        alt="" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/HowYouLearnBest/9.svg'" alt="" />
                </div>
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/StrengthsAndAreasForGrowth/4.svg'"
                        alt="" />
                </div>
            </div>
            <div class="col-6">

                <div class="p-0 pb-0">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Strategies for Enhancing Learning
                    </h2>
                    <p class="">
                        To make the most of your learning style, try these strategies:
                    </p>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Join Study Groups:</strong> Participate in study groups where you can collaborate
                            with peers. Sharing knowledge and supporting each other will enhance your understanding of
                            the material.
                        </li>
                        <li>
                            <strong>Engage in Class Discussions:</strong> Actively participate in class discussions and
                            activities. Engaging with the material and your classmates will make learning more enjoyable
                            and effective.
                        </li>
                        <li>
                            <strong>Seek Constructive Feedback:</strong> Ask teachers or mentors for feedback on your
                            work. Use their suggestions to make improvements and refine your skills.
                        </li>
                        <li>
                            <strong>Relate Lessons to Real Life:</strong> Find ways to connect what you’re learning to
                            real-life situations. This will make the content more relevant and easier to remember.
                        </li>
                    </ul>
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
    name: "LearningStyleInsight",
    layout: AssessmentTypes,
    props: {
        style: String,
        childName: String,
        image: String,
    },
};
</script>


<style scoped>
/* Add styles here */
/* h2, h2, h2, h2 {
    color: rgb(55 48 163 );
    font-weight: bold !important;
} */
div.col-6>h2.font-medium,
li>div>h2,
div.space-y-2>h2.font-medium {
    color: rgb(36, 168, 250);
    font-weight: bold;
    font-size: 19px;
}

div.col-6>h2.font-medium,
li>div>h2,
strong,
div.space-y-2>h2.font-medium {
    color: rgb(36, 168, 250);
    font-weight: bold;
    color: #fa25c4
        /* font-size: 19px; */
}

h2,
.p-6>.row>.col-6>h2 {
    color: rgb(55 48 163);
    font-weight: bold !important;
}

ul>li {
    margin-top: 18px;
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

.col-6:nth-of-type(2) {
    display: flex;
    justify-content: center;
}
.col-6:nth-of-type(1) {
    display: flex;
    justify-content: center;
}

    .col-6 {
        width: 100%;
        margin-bottom: 2rem;
    }
    h2 {
        font-size: 1.5rem;
        line-height: 2rem;
    }

    strong{
        font-size: 1rem;
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

  

    ul.list-disc {
        padding-left: 1rem;
    }
}
</style>
