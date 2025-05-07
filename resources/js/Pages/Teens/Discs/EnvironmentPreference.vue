<template>
     <div class="p-6">
    <div class="space-y-6 mt-3">
        <h1 class="font-bold mb-4 text-center">Environment Preferences</h1>
    </div>
    <!-- For C Style Report -->
    <div v-if="style == 'C'">
        <!-- Content for C -->
        <div class="space-y-4">
            <div class="p-4 row">
                <div class="col-6">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Your Ideal Environment
                    </h2>
                    <p>
                        As someone with a Cautious (C) style, you thrive in environments that are structured and predictable. Here’s what your perfect setting looks like:
                    </p>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Organised and Systematic:</strong> You feel most comfortable in settings that are
                            well-organised, with clear systems and
                            procedures in place. This helps you focus and
                            work efficiently.
                        </li>
                        <li>
                            <strong>Quiet and Calm:</strong> You prefer environments that are calm and free
                            from distractions, allowing you to concentrate
                            and think deeply.
                        </li>
                        <li>
                            <strong>Stable and Predictable:</strong> You do well in environments where routines are
                            consistent and expectations are clear. Stability
                            helps you feel secure and confident in your
                            actions.
                        </li>
                        <li>
                            <strong>Detail-Oriented:</strong> You excel in settings where attention to detail
                            is valued, allowing you to use your precision
                            and analytical skills to their fullest
                            potential.
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensDiscReportStyleImages/Environment/21.png'" alt="" />
                    </div>
                </div>
            </div>

            <div class="p-4 row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensDiscReportStyleImages/Environment/22.svg'" alt="" />
                    </div>
                </div>

                <div class="col-6">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Suggestions for Thriving in Different Settings
                    </h2>
                    <p>
                        To make the most of any environment, try these tips:

                        </p>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Create Order:</strong> Organise your space and use tools like planners
                            or checklists to keep track of tasks and
                            responsibilities.
                        </li>
                        <li>
                            <strong>Seek Quiet Spaces:</strong> Find quiet places where you can focus on your
                            work without interruptions or distractions.
                        </li>
                        <li>
                            <strong>Establish Routines:</strong> Develop consistent routines for your daily
                            activities to enhance your productivity and
                            reduce stress.
                        </li>
                        <li>
                            <strong> Pay Attention to Details:</strong> Use your attention to detail to excel in tasks
                            that require accuracy and precision.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- For CD Style Report -->
    <div v-if="style == 'CD'">
        <div class="space-y-4">
            <div class="p-4 row pb-0">
                <div class="col-6">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Your Ideal Environment
                    </h2>
                    <p class="">
                        As someone with a Cautious-Dominant (CD) style, you
                        thrive in environments that are structured,
                        goal-oriented, and efficient. Here’s what your perfect
                        setting looks like:
                    </p>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Organised and Structured:</strong> You feel
                            most comfortable in environments where there is
                            clear structure and organisation. Detailed plans,
                            schedules, and well-defined goals help you stay
                            focused and productive.
                        </li>
                        <li>
                            <strong>Task-Oriented and Efficient:</strong> You
                            excel in settings where efficiency and productivity
                            are prioritised. You appreciate environments that
                            allow you to work quickly and effectively, with
                            minimal distractions.
                        </li>
                        <li>
                            <strong>Independent and Self-Directed:</strong> You
                            prefer environments where you have the autonomy to
                            work independently. Having control over your tasks
                            and the ability to manage your time and resources is
                            important to you.
                        </li>
                        <li>
                            <strong>Calm and Focused:</strong> You work best in
                            environments that are calm and free of unnecessary
                            interruptions. A focused atmosphere helps you
                            concentrate on your tasks and achieve your goals.
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensDiscReportStyleImages/Environment/21.png'" alt="" />
                    </div>
                </div>
            </div>

            <div class="p-4 row pb-0">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensDiscReportStyleImages/Environment/22.svg'" alt="" />
                    </div>
                </div>

                <div class="col-6">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Suggestions for Thriving in Different Settings
                    </h2>
                    <p class="">
                        To make the most of any environment, try these tips:
                    </p>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Create a Work Plan:</strong> Develop a clear
                            plan for your tasks and projects. Break down large
                            tasks into smaller steps and set deadlines to stay
                            on track.
                        </li>
                        <li>
                            <strong>Minimise Distractions:</strong> Identify and
                            minimise potential distractions in your environment.
                            This might mean finding a quiet place to work or
                            setting boundaries with others.
                        </li>
                        <li>
                            <strong>Prioritise Your Tasks:</strong> Focus on
                            completing the most important tasks first.
                            Prioritising your work helps you stay efficient and
                            ensures that you achieve your goals
                        </li>
                        <li>
                            <strong>Set Up an Organised Workspace:</strong> Keep
                            your workspace tidy and organised. An orderly
                            environment can help you stay focused and reduce
                            stress.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- For CS Style Report -->
    <div v-if="style == 'CS'">
        <div class="space-y-4">
            <div class="p-4 row">
                <div class="col-6">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Your Ideal Environment
                    </h2>
                    <p class="">
                        As someone with a Cautious-Supportive (CS) style, you
                        thrive in environments that are structured, supportive,
                        and calm. Here’s what your perfect setting looks like:
                    </p>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Structured and Organised:</strong> You feel
                            most comfortable in environments where there is a
                            clear structure and organisation. Well-defined
                            goals, routines, and expectations help you stay
                            focused and productive.
                        </li>
                        <li>
                            <strong>Supportive and Cooperative:</strong> You
                            excel in settings where cooperation and teamwork are
                            encouraged. Being part of a supportive group helps
                            you feel valued and included.
                        </li>
                        <li>
                            <strong>Calm and Predictable:</strong> You work best
                            in environments that are calm and predictable.
                            Reducing unexpected changes and disruptions helps
                            you maintain a sense of control and stability.
                        </li>
                        <li>
                            <strong>Positive and Encouraging:</strong> You
                            thrive in positive environments where your efforts
                            are recognised and appreciated. Positive
                            reinforcement boosts your confidence and motivation.
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensDiscReportStyleImages/Environment/21.png'" alt="" />
                    </div>
                </div>
            </div>

            <div class="p-4 row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensDiscReportStyleImages/Environment/22.svg'" alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Suggestions for Thriving in Different Settings
                    </h2>
                    <p class="">
                        To make the most of any environment, try these tips:
                    </p>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Create a Routine:</strong> Establish a daily
                            routine that includes time for studying, relaxing,
                            and engaging in enjoyable activities. A predictable
                            schedule can help you feel more in control.
                        </li>
                        <li>
                            <strong>Engage in Team Activities:</strong> Seek out
                            opportunities to work with others in cooperative
                            settings. Group projects, study groups, and team
                            activities can enhance your learning experience and
                            help you build strong relationships.
                        </li>
                        <li>
                            <strong>Maintain a Positive Attitude:</strong> Focus
                            on maintaining a positive attitude and surrounding
                            yourself with encouraging people. Positive
                            interactions can enhance your well-being and
                            productivity.
                        </li>
                        <li>
                            <strong>Stay Organised:</strong> Keep your workspace
                            organised and free of clutter. An organised
                            environment can help you stay focused and reduce
                            stress.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- For D Style Report -->
    <div v-if="style == 'D'" class="space-y-4">
        <div class="p-4 row">
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">
                    Your Ideal Environment
                </h2>
                <p class="">
                    As someone with a Dominant (D) style, you thrive in places
                    that challenge and excite you. Here’s what your perfect
                    setting looks like:
                </p>
                <ul class="list-disc pl-6">
                    <li>
                        <strong>Fast-Paced and Dynamic:</strong> You love being
                        in environments where things are happening quickly, and
                        you can jump into new challenges and activities.
                    </li>
                    <li>
                        <strong>Goal-Oriented Atmosphere:</strong> You do best
                        where there are clear goals and targets, so you know
                        exactly what you're working toward.
                    </li>
                    <li>
                        <strong>Opportunities for Leadership:</strong> You enjoy
                        situations where you can take the lead and help steer
                        projects or group activities.
                    </li>
                    <li>
                        <strong>Competitive Spirit:</strong> A bit of
                        competition is great for you, pushing you to step up and
                        do your best.
                    </li>
                </ul>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Environment/21.png'" alt="" />
                </div>
            </div>
        </div>

        <div class="p-4 row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Environment/22.svg'" alt="" />
                </div>
            </div>
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">
                    Suggestions for Thriving in Different Settings
                </h2>
                <p class="">
                    To make the most of any environment, try these tips:
                </p>
                <ul class="list-disc pl-6">
                    <li>
                        <strong>Seek Challenges:</strong> Look for chances to
                        take on new projects or roles that let you grow and show
                        off your skills.
                    </li>
                    <li>
                        <strong>Set Personal Goals:</strong> Even if things are
                        laid back, set your own goals to keep yourself pumped
                        and focused.
                    </li>
                    <li>
                        <strong>Create a Positive Space:</strong> Surround
                        yourself with people and things that motivate you and
                        make you feel good about what you're doing.
                    </li>
                    <li>
                        <strong>Adapt to Change:</strong> Be open to new ideas
                        and ready to switch things up when necessary, so you can
                        make the most of whatever comes your way.
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- For DC Style Report -->
    <div v-if="style == 'DC'" class="space-y-4">
        <div class="p-4 row">
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">
                    Your Ideal Environment
                </h2>
                <p>
                    As someone with a Dominant-Cautious (DC) style, you thrive
                    in environments that are structured and challenging. Here’s
                    what your perfect setting looks like:
                </p>
                <ul class="list-disc pl-6">
                    <li>
                        <strong>Organised and Structured:</strong> You feel most
                        comfortable in environments that are well-organised and
                        have clear rules and expectations. You appreciate order
                        and predictability.
                    </li>
                    <li>
                        <strong>Goal-Oriented and Focused:</strong> You thrive
                        in settings where there are clear goals and objectives.
                        Environments that challenge you to push your limits and
                        achieve high standards are ideal for you.
                    </li>
                    <li>
                        <strong>Quiet and Concentrated:</strong> You prefer
                        environments that allow for deep concentration and
                        focus. Quiet settings where you can work independently
                        without distractions help you stay productive.
                    </li>
                    <li>
                        <strong>Detail-Oriented and Methodical:</strong> You
                        excel in environments that require attention to detail
                        and methodical approaches. You enjoy tasks that involve
                        analysis, precision, and thoroughness.
                    </li>
                </ul>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Environment/21.png'" alt="" />
                </div>
            </div>
        </div>

        <div class="p-4 row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Environment/22.svg'" alt="" />
                </div>
            </div>
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">
                    Suggestions for Thriving in Different Settings
                </h2>
                <p>To make the most of any environment, try these tips:</p>
                <ul class="list-disc pl-6">
                    <li>
                        <strong>Stay Organised:</strong> Keep your workspace and
                        schedule well-organised to ensure you can work
                        efficiently and effectively.
                    </li>
                    <li>
                        <strong>Set Clear Goals:</strong> Establish clear goals
                        for yourself in any setting to stay focused and
                        motivated.
                    </li>
                    <li>
                        <strong>Create Quiet Spaces:</strong> Find or create
                        quiet spaces where you can concentrate deeply on your
                        work without distractions.
                    </li>
                    <li>
                        <strong>Embrace Detailed Work:</strong> Look for
                        opportunities to engage in tasks that require analysis
                        and precision, allowing you to use your strengths.
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- For DI Style Report -->
    <div v-if="style == 'DI'" class="space-y-4">
        <div class="p-4 row">
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">
                    Your Ideal Environment
                </h2>
                <p>
                    As someone with a Dominant-Influential (DI) style, you
                    thrive in environments that are dynamic and stimulating.
                    Here’s what your perfect setting looks like:
                </p>
                <ul class="list-disc pl-6">
                    <li>
                        <strong>Energetic and Active:</strong> You feel most
                        comfortable in environments that are lively and full of
                        activity. You enjoy being surrounded by people and
                        engaging in various activities that keep you motivated
                        and excited.
                    </li>
                    <li>
                        <strong>Goal-Oriented and Competitive:</strong> You
                        thrive in settings where there are clear goals and
                        opportunities for competition. Environments that
                        challenge you to push your limits and achieve high
                        standards are ideal for you.
                    </li>
                    <li>
                        <strong>Social and Collaborative:</strong> You enjoy
                        working with others and benefit from environments that
                        encourage teamwork and collaboration. You feel energised
                        when you can share ideas and work towards common goals
                        with your peers.
                    </li>
                    <li>
                        <strong>Innovative and Flexible:</strong> You prefer
                        environments that allow for creativity and flexibility.
                        Settings that encourage innovative thinking and
                        adaptability help you stay engaged and inspired.
                    </li>
                </ul>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Environment/21.png'" alt="" />
                </div>
            </div>
        </div>

        <div class="p-4 row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Environment/22.svg'" alt="" />
                </div>
            </div>
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">
                    Suggestions for Thriving in Different Settings
                </h2>
                <p>To make the most of any environment, try these tips:</p>
                <ul class="list-disc pl-6">
                    <li>
                        <strong>Stay Engaged:</strong> Look for opportunities to
                        participate in activities and projects that interest you
                        and keep you active.
                    </li>
                    <li>
                        <strong>Set Clear Goals:</strong> Establish clear goals
                        for yourself in any setting to stay focused and
                        motivated.
                    </li>
                    <li>
                        <strong>Build Strong Relationships:</strong> Nurture
                        positive relationships with those around you to create a
                        supportive and collaborative environment.
                    </li>
                    <li>
                        <strong>Embrace Flexibility:</strong> Be open to new
                        ideas and adapt to changes in your environment to stay
                        innovative and inspired.
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- For I Style Report -->
    <div v-if="style == 'I'" class="space-y-4">
        <div class="p-4 row">
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">
                    Your Ideal Environment
                </h2>
                <p>
                    As someone with an Influential (I) style, you thrive in
                    environments that are lively and interactive. Here’s what
                    your perfect setting looks like:
                </p>

                <ul class="list-disc pl-6">
                    <li>
                        <strong>Social and Collaborative:</strong> You enjoy
                        being in places where you can connect with others and
                        work together on projects or activities.
                    </li>
                    <li>
                        <strong>Creative and Expressive:</strong> You feel
                        energised in environments that allow for creativity and
                        self-expression, whether through art, music, or drama.
                    </li>
                    <li>
                        <strong>Flexible and Open:</strong> You prefer settings
                        that offer flexibility and encourage exploring new ideas
                        without too many restrictions.
                    </li>
                    <li>
                        <strong>Positive and Encouraging:</strong> You do best
                        in supportive environments where people celebrate
                        achievements and encourage each other.
                    </li>
                </ul>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Environment/21.png'" alt="" />
                </div>
            </div>
        </div>

        <div class="p-4 row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Environment/22.svg'" alt="" />
                </div>
            </div>
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">
                    Suggestions for Thriving in Different Settings
                </h2>
                <p>To make the most of any environment, try these tips:</p>

                <ul class="list-disc pl-6">
                    <li>
                        <strong>Seek Social Opportunities:</strong> Look for
                        chances to engage with peers in group projects, clubs,
                        or social events.
                    </li>
                    <li>
                        <strong>Embrace Creativity:</strong> Find ways to
                        incorporate creative activities into your daily routine,
                        like journaling or trying new hobbies.
                    </li>
                    <li>
                        <strong>Stay Open to Change:</strong> Be adaptable and
                        ready to explore new paths or ideas when they arise.
                    </li>
                    <li>
                        <strong>Cultivate Positivity:</strong> Surround yourself
                        with positive influences and people who inspire you to
                        be your best self.
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- For ID Style Report -->
    <div v-if="style == 'ID'" class="space-y-4">
        <div class="p-4 row">
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">
                    Your Ideal Environment
                </h2>
                <p class="">
                    As someone with an Influential-Dominant (ID) style, you
                    thrive in environments that are dynamic, engaging, and
                    goal-oriented. Here’s what your perfect setting looks like:
                </p>
                <ul class="list-disc pl-6">
                    <li>
                        <strong>Interactive and Engaging:</strong> You feel most
                        comfortable in environments that allow for active
                        participation and engagement. You enjoy interactive
                        discussions, group projects, and hands-on activities.
                    </li>
                    <li>
                        <strong>Supportive of Leadership:</strong> You excel in
                        settings that recognise and support your leadership
                        abilities. Opportunities to lead and make decisions
                        motivate you and enhance your learning experience.
                    </li>
                    <li>
                        <strong>Goal-Oriented and Ambitious:</strong> You thrive
                        in environments that are focused on achieving goals and
                        high standards. Clear objectives and challenging tasks
                        keep you motivated and driven.
                    </li>
                    <li>
                        <strong>Social and Collaborative:</strong> You perform
                        best in environments that encourage social interaction
                        and teamwork. Collaborative projects and group
                        activities help you stay engaged and energised.
                    </li>
                </ul>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Environment/21.png'" alt="" />
                </div>
            </div>
        </div>

        <div class="p-4 row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Environment/22.svg'" alt="" />
                </div>
            </div>
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">
                    Suggestions for Thriving in Different Settings
                </h2>
                <p class="">
                    To make the most of any environment, try these tips:
                </p>
                <ul class="list-disc pl-6">
                    <li>
                        <strong>Engage Actively:</strong> Seek out opportunities
                        to participate actively in your environment. Whether in
                        class, clubs, or social activities, your engagement can
                        enhance your experience.
                    </li>
                    <li>
                        <strong>Seek Leadership Roles:</strong> Look for chances
                        to take on leadership roles in group projects, school
                        organisations, or extracurricular activities. Your
                        leadership skills can help you excel and inspire others.
                    </li>
                    <li>
                        <strong>Stay Positive:</strong> Maintain a positive
                        attitude and focus on the opportunities rather than the
                        challenges. Your optimism can help you navigate
                        different environments successfully.
                    </li>
                    <li>
                        <strong>Set Clear Goals:</strong> Define specific goals
                        for yourself and create a plan to achieve them. Clear
                        objectives can help you stay motivated and focused.
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- For IS Style Report -->
    <div v-if="style == 'IS'" class="space-y-4">
        <div class="p-4 row">
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">
                    Your Ideal Environment
                </h2>
                <p class="">
                    As someone with an Influential-Supportive (IS) style, you
                    thrive in environments that are social, encouraging, and
                    collaborative. Here’s what your perfect setting looks like:
                </p>
                <ul class="list-disc pl-6">
                    <li>
                        <strong>Social and Interactive:</strong> You feel most
                        comfortable in environments that allow for social
                        interactions and group activities. You enjoy engaging
                        with others and working together towards common goals.
                    </li>
                    <li>
                        <strong>Positive and Encouraging:</strong> You thrive in
                        settings where positivity and encouragement are
                        emphasised. Environments that celebrate successes and
                        provide constructive feedback help you stay motivated
                        and confident.
                    </li>
                    <li>
                        <strong>Collaborative and Inclusive:</strong> You excel
                        in environments that value teamwork and cooperation. You
                        appreciate spaces where everyone’s contributions are
                        recognised, and collaboration is encouraged.
                    </li>
                    <li>
                        <strong>Welcoming and Supportive:</strong> You perform
                        best in environments that are welcoming and supportive,
                        where you feel valued and respected. A sense of
                        belonging helps you focus and achieve your best.
                    </li>
                </ul>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Environment/21.png'" alt="" />
                </div>
            </div>
        </div>

        <div class="p-4 row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Environment/22.svg'" alt="" />
                </div>
            </div>
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">
                    Suggestions for Thriving in Different Settings
                </h2>
                <p class="">
                    To make the most of any environment, try these tips:
                </p>
                <ul class="list-disc pl-6">
                    <li>
                        <strong>Engage with Peers:</strong> Seek out
                        opportunities to work with others on assignments and
                        projects. Collaborative efforts can enhance your
                        understanding and make learning more enjoyable.
                    </li>
                    <li>
                        <strong>Seek Positive Reinforcement:</strong> Don’t
                        hesitate to ask for feedback on your work. Positive
                        reinforcement from teachers and peers can boost your
                        confidence and keep you motivated.
                    </li>
                    <li>
                        <strong>Create Interactive Spaces:</strong> Participate
                        in activities that require active involvement, such as
                        group discussions, team projects, and interactive
                        lessons. These methods can make learning more dynamic
                        and memorable.
                    </li>
                    <li>
                        <strong>Cultivate a Supportive Network:</strong>
                        Surround yourself with supportive and encouraging peers.
                        Study groups and collaborative learning environments can
                        help you stay focused and motivated.
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- For S Style Report -->
    <div v-if="style == 'S'" class="space-y-4">
        <!-- Content for S -->

        <div class="p-4 row">
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">
                    Your Ideal Environment
                </h2>
                <p class="">
                    As someone with a Supportive (S) style, you thrive in
                    environments that are calm and harmonious. Here’s what your
                    perfect setting looks like:
                </p>
                <ul class="list-disc pl-6">
                    <li>
                        <strong>Stable and Predictable:</strong> You feel most
                        comfortable in settings that provide consistency and
                        reliability, where you know what to expect.
                    </li>
                    <li>
                        <strong>Friendly and Inclusive:</strong> You enjoy being
                        in places where people are welcoming, and everyone is
                        encouraged to participate.
                    </li>
                    <li>
                        <strong>Supportive and Encouraging:</strong> You do well
                        in environments where people are supportive of each
                        other, offering help and encouragement.
                    </li>
                    <li>
                        <strong>Cooperative and Team-Oriented:</strong> You
                        prefer settings where teamwork is valued, and everyone
                        works together toward common goals.
                    </li>
                </ul>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Environment/21.png'" alt="" />
                </div>
            </div>
        </div>

        <div class="p-4 row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Environment/22.svg'" alt="" />
                </div>
            </div>
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">
                    Suggestions for Thriving in Different Settings
                </h2>
                <p class="">
                    To make the most of any environment, try these tips:
                </p>
                <ul class="list-disc pl-6">
                    <li>
                        <strong>Seek Out Stable Routines:</strong> Find or
                        create routines that provide a sense of stability and
                        help you feel more secure.
                    </li>
                    <li>
                        <strong>Build Inclusive Friendships:</strong> Surround
                        yourself with friends who appreciate and include
                        everyone, promoting a sense of community.
                    </li>
                    <li>
                        <strong>Encourage a Supportive Atmosphere:</strong>
                        Contribute to creating a positive environment by
                        offering encouragement and assistance to others.
                    </li>
                    <li>
                        <strong>Embrace Teamwork:</strong> Look for
                        opportunities to participate in group activities where
                        collaboration and cooperation are emphasised.
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- For SC Style Report -->
    <div v-if="style == 'SC'" class="space-y-4">
        <div class="p-4 row">
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">
                    Your Ideal Environment
                </h2>
                <p class="">
                    As someone with a Supportive-Cautious (SC) style, you thrive
                    in environments that are stable, supportive, and
                    well-organised. Here’s what your perfect setting looks like:
                </p>
                <ul class="list-disc pl-6">
                    <li>
                        <strong>Structured and Predictable:</strong> You feel
                        most comfortable in environments that have clear
                        routines and expectations. A predictable setting helps
                        you stay focused and reduces anxiety.
                    </li>
                    <li>
                        <strong>Supportive and Cooperative:</strong> You excel
                        in settings where cooperation and teamwork are
                        encouraged. Being part of a supportive group helps you
                        feel valued and included.
                    </li>
                    <li>
                        <strong>Quiet and Calm:</strong> You work best in
                        environments that are quiet and free from distractions.
                        A calm atmosphere allows you to concentrate and perform
                        tasks with precision.
                    </li>
                    <li>
                        <strong>Detail-Oriented:</strong> You thrive in
                        environments where attention to detail is important.
                        Tasks that require careful analysis and thoroughness are
                        where you excel.
                    </li>
                </ul>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Environment/21.png'" alt="" />
                </div>
            </div>
        </div>

        <div class="p-4 row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Environment/22.svg'" alt="" />
                </div>
            </div>

            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">
                    Suggestions for Thriving in Different Settings
                </h2>
                <p class="">
                    To make the most of any environment, try these tips:
                </p>
                <ul class="list-disc pl-6">
                    <li>
                        <strong>Follow a Routine:</strong> Establish and
                        maintain routines to create a sense of stability and
                        predictability. This will help you feel more in control
                        and less stressed.
                    </li>
                    <li>
                        <strong>Engage in Teamwork:</strong> Seek out
                        opportunities to work with others in a supportive and
                        cooperative setting. Your collaborative nature will help
                        you and your team succeed.
                    </li>
                    <li>
                        <strong>Create a Quiet Space:</strong> Find or create a
                        quiet space where you can focus on your tasks without
                        distractions. This will help you work more efficiently
                        and accurately.
                    </li>
                    <li>
                        <strong>Pay Attention to Details:</strong> Use your
                        attention to detail to your advantage. Whether it’s in
                        schoolwork or other activities, your meticulous approach
                        will help you achieve high-quality results.
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- For SI Style Report -->
    <div v-if="style == 'SI'" class="space-y-4">
        <div class="p-4 row">
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">
                    Your Ideal Environment
                </h2>
                <p class="">
                    As someone with a Supportive-Influential (SI) style, you
                    thrive in environments that are social, supportive, and
                    engaging. Here’s what your perfect setting looks like:
                </p>
                <ul class="list-disc pl-6">
                    <li>
                        <strong>Social and Interactive:</strong> You feel most
                        comfortable in environments where you can interact with
                        others. Being around people and engaging in
                        conversations helps you stay motivated and energised.
                    </li>
                    <li>
                        <strong>Supportive and Cooperative:</strong> You excel
                        in settings where cooperation and teamwork are
                        encouraged. Being part of a supportive group helps you
                        feel valued and included.
                    </li>
                    <li>
                        <strong>Dynamic and Engaging:</strong> You work best in
                        environments that are dynamic and offer variety.
                        Activities that are interactive and engaging keep you
                        interested and focused.
                    </li>
                    <li>
                        <strong>Positive and Encouraging:</strong> You thrive in
                        positive environments where your efforts are recognised
                        and appreciated. Positive reinforcement boosts your
                        confidence and motivation.
                    </li>
                </ul>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Environment/21.png'" alt="" />
                </div>
            </div>
        </div>

        <div class="p-4 row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Environment/22.svg'" alt="" />
                </div>
            </div>
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">
                    Suggestions for Thriving in Different Settings
                </h2>
                <p class="">
                    To make the most of any environment, try these tips:
                </p>
                <ul class="list-disc pl-6">
                    <li>
                        <strong>Engage with Others:</strong> Seek out
                        opportunities to interact with your peers. Group
                        projects, study groups, and social activities can help
                        you stay motivated and engaged.
                    </li>
                    <li>
                        <strong>Promote Teamwork:</strong> Encourage cooperation
                        and teamwork in your activities. Your supportive nature
                        makes you a valuable team member who can help create a
                        harmonious environment.
                    </li>
                    <li>
                        <strong>Seek Variety:</strong> Look for ways to
                        introduce variety into your routine. Different
                        activities and interactive tasks can keep you interested
                        and focused.
                    </li>
                    <li>
                        <strong>Stay Positive:</strong> Focus on maintaining a
                        positive attitude and surrounding yourself with
                        encouraging people. Positive interactions can enhance
                        your well-being and productivity.
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </div>
</template>

<script>
import AssessmentTypes from "@/Layouts/AssessmentTypes.vue";

export default {
    name: "EnvironmentPreference",
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
    margin-top:17px;
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

    .p-6 {
        padding: 1rem;
    }

    h2 {
        font-size: 1.5rem !important;
        line-height: 2rem;
    }

    strong{
        font-size: 1rem;
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
