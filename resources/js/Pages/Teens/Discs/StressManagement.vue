<template>
     <div class="p-6">
    <div class="p-4 md:p-6">
        <div class="space-y-6 mt-3">
            <h1 class="font-bold mb-4 text-center">
                Stress Management and Coping Strategies
            </h1>
        </div>
        <!-- For C Style Report -->
        <div v-if="style == 'C'">
            <!-- Content for C -->

            <div class="row">
                <div class="col-6">
                    <h2 class="text-xl md:text-3xl mb-4">How You Handle Stress</h2>
                    <p>
                        As someone with a Cautious (C) style, you often handle
                        stress with careful thought and preparation. Here's how
                        you typically manage stress:
                    </p>

                    <ul class="list-disc">
                        <li>
                            <strong>Planning and Organisation:</strong> You feel
                            more in control when you have a clear plan and
                            structure to follow. Organising your tasks and
                            responsibilities helps reduce stress by providing a
                            sense of predictability.
                        </li>
                        <li>
                            <strong>Time for Reflection:</strong> You take time
                            to reflect on your thoughts and feelings, allowing
                            you to process emotions and find solutions to
                            problems. This reflective approach helps you gain
                            perspective and manage stress effectively.
                        </li>
                        <li>
                            <strong>Seeking Information:</strong> When faced
                            with uncertainty, you seek out information and facts
                            to help you understand the situation better. Having
                            a clear understanding of the issue helps you feel
                            more confident and less stressed.
                        </li>
                        <li>
                            <strong>Avoiding Overcommitment:</strong> You prefer
                            to focus on a few tasks at a time, avoiding
                            overcommitment and ensuring you can dedicate your
                            full attention to each responsibility.
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensDiscReportStyleImages/StressManagement/11.svg'"
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
                            :src="'/images/reports-images/TeensDiscReportStyleImages/HowYouLearnBest/9.svg'"
                            alt=""
                        />
                    </div>
                </div>
                <div class="col-6">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Practical Tips for Managing Stress
                    </h2>
                    <p>To manage stress effectively, try these strategies:</p>

                    <ul class="list-disc">
                        <li>
                            <strong>Create a To-Do List:</strong> Break down
                            your tasks into manageable steps and prioritise them
                            to stay organised and focused.
                        </li>
                        <li>
                            <strong>Set Realistic Goals:</strong> Set achievable
                            goals for yourself, allowing for flexibility if
                            unexpected challenges arise.
                        </li>
                        <li>
                            <strong>Take Breaks:</strong> Allow yourself regular
                            breaks to recharge and avoid burnout, especially
                            when working on detailed or complex tasks.
                        </li>
                        <li>
                            <strong>Practice Mindfulness:</strong> Engage in
                            mindfulness exercises, like meditation or deep
                            breathing, to stay calm and focused during stressful
                            situations.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <h2 class="text-xl md:text-3xl mb-4">
                    Coping Strategies for Cautious Style
                </h2>

                <ul class="list-disc">
                    <li>
                        <strong>Plan and Organise:</strong> Use planning tools
                        like calendars or planners to keep track of tasks and
                        responsibilities.
                    </li>
                    <li>
                        <strong>Reflect and Analyse:</strong> Take time to
                        reflect on your thoughts and feelings, and use critical
                        thinking to find solutions.
                    </li>
                    <li>
                        <strong>Set Boundaries:</strong> Learn to say no when
                        necessary to avoid taking on too much and maintain a
                        manageable workload.
                    </li>
                </ul>
            </div>
        </div>

        <!-- For CD Style Report -->
        <div v-if="style == 'CD'">
            <div class="row">
                <div class="col-6">
                    <h2 class="text-xl md:text-3xl mb-4">How You Handle Stress</h2>
                    <p class="">
                        As someone with a Cautious-Dominant (CD) style, you
                        often handle stress by relying on logic, organisation,
                        and a focus on results. Here's how you typically manage
                        stress:
                    </p>
                    <ul class="list-disc">
                        <li>
                            <strong>Problem-Solving Approach:</strong> When
                            faced with stress, you tend to analyse the situation
                            carefully and look for logical solutions. Your
                            analytical nature helps you break down problems into
                            manageable parts.
                        </li>
                        <li>
                            <strong>Maintaining Control:</strong> You feel more
                            in control when you can organise your tasks and
                            create a plan of action. This sense of control helps
                            reduce anxiety and keeps you focused on your goals.
                        </li>
                        <li>
                            <strong>Task-Oriented Focus:</strong> You manage
                            stress by focusing on the tasks at hand. Completing
                            tasks and seeing tangible results helps you feel
                            accomplished and alleviates stress.
                        </li>
                        <li>
                            <strong>Independent Coping:</strong> You often
                            prefer to handle stress on your own, using your own
                            resources and strategies to work through challenges.
                            Your self-reliance gives you confidence in your
                            ability to overcome difficulties.
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensDiscReportStyleImages/StressManagement/11.svg'"
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
                            :src="'/images/reports-images/TeensDiscReportStyleImages/HowYouLearnBest/9.svg'"
                            alt=""
                        />
                    </div>
                </div>
                <div class="col-6">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Practical Tips for Managing Stress
                    </h2>
                    <p class="">
                        To manage stress effectively, try these strategies:
                    </p>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Break Down Tasks:</strong> When faced with a
                            stressful situation, break it down into smaller,
                            manageable steps. Focus on completing one step at a
                            time to reduce overwhelm.
                        </li>
                        <li>
                            <strong>Create a Plan:</strong> Develop a clear plan
                            of action to address the stressor. Organising your
                            thoughts and tasks will help you feel more in
                            control and less anxious.
                        </li>
                        <li>
                            <strong>Stay Focused on Goals:</strong> Keep your
                            focus on your long-term goals. Remembering what
                            you’re working towards can help you stay motivated
                            and reduce stress.
                        </li>
                        <li>
                            <strong>Take Time for Self-Care:</strong> Even
                            though you’re driven to achieve results, it’s
                            important to take breaks and engage in activities
                            that help you relax and recharge.
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <h2 class="text-xl md:text-3xl mb-4">
                    Coping Strategies for Cautious-Dominant Style
                </h2>
                <ul class="list-disc pl-6">
                    <li>
                        <strong>Mindful Planning:</strong> Set aside time to
                        organise your tasks and plan your day. Having a clear
                        plan can reduce feelings of being overwhelmed.
                    </li>
                    <li>
                        <strong>Problem-Solving Exercises:</strong> When
                        stressed, engage in activities that require logical
                        thinking, such as puzzles or strategy games. This helps
                        redirect your focus and keeps your mind sharp.
                    </li>
                    <li>
                        <strong>Solo Reflection: </strong> Take time alone to
                        reflect on your goals and progress. Journaling or quiet
                        thinking can help you process your thoughts and regain
                        focus.
                    </li>
                </ul>
            </div>
        </div>

        <!-- For CS Style Report -->
        <div v-if="style == 'CS'">
            <div class="row">
                <div class="col-6">
                    <h2 class="text-xl md:text-3xl mb-4">How You Handle Stress</h2>
                    <p class="">
                        As someone with a Cautious-Supportive (CS) style, you
                        often handle stress by seeking stability and relying on
                        your support network. Here's how you typically manage
                        stress:
                    </p>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Seeking Stability:</strong> You find comfort
                            in routines and predictable environments.
                            Maintaining a stable routine helps you feel more in
                            control and reduces anxiety.
                        </li>
                        <li>
                            <strong>Seeking Support:</strong> You find relief in
                            talking to friends, family, or mentors when you’re
                            stressed. Sharing your feelings and receiving
                            encouragement helps you feel understood and
                            supported.
                        </li>
                        <li>
                            <strong>Analytical Approach:</strong> You tend to
                            analyse stressful situations carefully, looking for
                            logical solutions. Your detail-oriented nature helps
                            you break down problems into manageable parts.
                        </li>
                        <li>
                            <strong>Engaging in Calming Activities:</strong> You
                            enjoy activities that help you relax and unwind,
                            such as reading, listening to music, or engaging in
                            hobbies that require focus and precision.
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensDiscReportStyleImages/StressManagement/11.svg'"
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
                            :src="'/images/reports-images/TeensDiscReportStyleImages/HowYouLearnBest/9.svg'"
                            alt=""
                        />
                    </div>
                </div>
                <div class="col-6">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Practical Tips for Managing Stress
                    </h2>
                    <p class="">
                        To manage stress effectively, try these strategies:
                    </p>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Maintain a Routine:</strong> Stick to a
                            daily routine that includes time for studying,
                            relaxing, and engaging in enjoyable activities. A
                            predictable schedule can help you feel more in
                            control.
                        </li>
                        <li>
                            <strong>Reach Out for Support:</strong> When feeling
                            stressed, talk to someone you trust. Sharing your
                            concerns can help you gain perspective and feel more
                            supported.
                        </li>
                        <li>
                            <strong>Break Down Tasks:</strong> When faced with a
                            stressful task, break it down into smaller,
                            manageable steps. Focus on completing one step at a
                            time.
                        </li>
                        <li>
                            <strong>Engage in Relaxing Activities:</strong> Make
                            time for activities that help you relax and unwind.
                            Whether it’s reading, listening to music, or
                            engaging in a hobby, these activities can reduce
                            stress.
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <h2 class="text-xl md:text-3xl mb-4">
                    Coping Strategies for Cautious-Supportive Style
                </h2>
                <ul class="list-disc pl-6">
                    <li>
                        <strong>Organise and Plan:</strong> Create to-do lists
                        and set priorities to manage your tasks effectively.
                        Keeping organised helps reduce feelings of being
                        overwhelmed.
                    </li>
                    <li>
                        <strong>Connect with Supportive People:</strong> Spend
                        time with friends and family who make you feel supported
                        and understood. Social connections can provide emotional
                        relief.
                    </li>
                    <li>
                        <strong>Set Boundaries:</strong> Learn to say no when
                        necessary to avoid taking on too much and maintain a
                        manageable workload.
                    </li>
                </ul>
            </div>
        </div>

        <!-- For D Style Report -->
        <div v-if="style == 'D'">
            <div class="row">
                <div class="col-6">
                    <h2 class="text-xl md:text-3xl mb-4">How You Handle Stress</h2>
                    <p class="">
                        As someone with a Dominant (D) style, you often face
                        stress head-on, but certain situations can still
                        challenge you. Here's how you typically handle stress:
                    </p>
                    <ul class="list-disc">
                        <li>
                            <strong>Taking Control:</strong> You prefer to take
                            charge of stressful situations, quickly figuring out
                            solutions and taking action to resolve issues.
                        </li>
                        <li>
                            <strong>Focus on Results:</strong> You stay focused
                            on achieving your goals, even when stress levels
                            rise. This helps you keep your eye on the prize and
                            push through tough times.
                        </li>
                        <li>
                            <strong>Staying Confident:</strong> You rely on your
                            self-assurance and determination to power through
                            challenges, trusting that you can handle whatever
                            comes your way.
                        </li>
                        <li>
                            <strong>Thriving on Pressure:</strong> You may find
                            that a bit of pressure actually motivates you to
                            perform better and achieve more.
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensDiscReportStyleImages/StressManagement/11.svg'"
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
                            :src="'/images/reports-images/TeensDiscReportStyleImages/HowYouLearnBest/9.svg'"
                            alt=""
                        />
                    </div>
                </div>
                <div class="col-6">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Practical Tips for Managing Stress
                    </h2>
                    <p class="">
                        To manage stress effectively, try these strategies:
                    </p>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Break It Down:</strong> When faced with a
                            big task, break it into smaller, manageable steps.
                            This makes it easier to tackle without feeling
                            overwhelmed.
                        </li>
                        <li>
                            <strong>Stay Organised:</strong> Keep track of your
                            tasks and deadlines with a planner or digital tool.
                            Knowing what you need to do can help reduce stress.
                        </li>
                        <li>
                            <strong>Take Breaks:</strong> Give yourself time to
                            relax and recharge. Short breaks can help clear your
                            mind and keep you focused.
                        </li>
                        <li>
                            <strong>Reach Out:</strong> Don’t hesitate to talk
                            to friends, family, or a mentor if you need support
                            or advice.
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <h2 class="text-xl md:text-3xl mb-4">
                    Coping Strategies for Dominant Style
                </h2>
                <ul class="list-disc pl-6">
                    <li>
                        <strong>Exercise Regularly:</strong> Physical activity
                        is a great way to relieve stress and boost your mood.
                    </li>
                    <li>
                        <strong>Focus on Solutions:</strong> Concentrate on
                        finding solutions rather than dwelling on problems.
                    </li>
                    <li>
                        <strong>Set Realistic Goals:</strong> Make sure your
                        goals are achievable to avoid unnecessary pressure.
                    </li>
                </ul>
            </div>
        </div>

        <!-- For DC Style Report -->
        <div v-if="style == 'DC'">
            <div class="row">
                <div class="col-6">
                    <h2 class="text-xl md:text-3xl mb-4">How You Handle Stress</h2>
                    <p>
                        As someone with a Dominant-Cautious (DC) style, you
                        often handle stress by taking charge and carefully
                        analysing the situation. Here's how you typically manage
                        stress:
                    </p>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Taking Control:</strong> You feel more in
                            control when you can take charge of a situation and
                            steer it toward a solution. Your confidence and
                            leadership skills help you navigate stressful
                            situations effectively.
                        </li>
                        <li>
                            <strong>Detailed Analysis:</strong> You approach
                            stress by breaking down the problem into smaller,
                            manageable parts. Analysing each aspect helps you
                            understand the issue better and find effective
                            solutions.
                        </li>
                        <li>
                            <strong>Maintaining Structure:</strong> Keeping a
                            structured and organised environment helps you
                            manage stress. You find comfort in having clear
                            plans and knowing what to expect.
                        </li>
                        <li>
                            <strong>Setting Clear Goals:</strong> Setting
                            specific goals and working towards them can help you
                            manage stress by giving you a sense of direction and
                            purpose. Your goal-oriented nature keeps you focused
                            on what’s important.
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensDiscReportStyleImages/StressManagement/11.svg'"
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
                            :src="'/images/reports-images/TeensDiscReportStyleImages/HowYouLearnBest/9.svg'"
                            alt=""
                        />
                    </div>
                </div>
                <div class="col-6">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Practical Tips for Managing Stress
                    </h2>
                    <p>To manage stress effectively, try these strategies:</p>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Take Charge:</strong> When faced with a
                            stressful situation, identify what you can control
                            and take proactive steps to address it.
                        </li>
                        <li>
                            <strong>Break Down Problems:</strong> Analyse the
                            situation by breaking it into smaller parts and
                            tackling each part methodically.
                        </li>
                        <li>
                            <strong>Maintain Organisation:</strong> Keep your
                            environment organised and structured to help reduce
                            stress and create a sense of order.
                        </li>
                        <li>
                            <strong>Set Achievable Goals:</strong> Break down
                            your tasks into manageable steps and set achievable
                            goals to keep yourself on track and reduce
                            overwhelm.
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <h2 class="text-xl md:text-3xl mb-4">
                    Coping Strategies for Dominant-Cautious Style
                </h2>

                <ul class="list-disc pl-6">
                    <li>
                        <strong>Exercise and Physical Activity:</strong> Engage
                        in regular physical activities, such as sports, running,
                        or yoga, to relieve stress and stay active.
                    </li>
                    <li>
                        <strong>Planning and Scheduling:</strong> Create
                        detailed plans and schedules to manage your time
                        effectively and reduce anxiety about deadlines.
                    </li>
                    <li>
                        <strong>Quiet Reflection:</strong> Spend time reflecting
                        on your thoughts and feelings to gain clarity and
                        perspective on stressful situations.
                    </li>
                </ul>
            </div>
        </div>

        <!-- For DI Style Report -->
        <div v-if="style == 'DI'">
            <div class="row">
                <div class="col-6">
                    <h2 class="text-xl md:text-3xl mb-4">How You Handle Stress</h2>
                    <p>
                        As someone with a Dominant-Influential (DI) style, you
                        often handle stress with energy and assertiveness.
                        Here's how you typically manage stress:
                    </p>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Taking Charge:</strong> You feel more in
                            control when you can take charge of a situation and
                            steer it toward a solution. Your confidence and
                            leadership skills help you navigate stressful
                            situations effectively.
                        </li>
                        <li>
                            <strong>Staying Active:</strong> Physical activity
                            and movement are great ways for you to relieve
                            stress. Engaging in sports, exercise, or other
                            active pursuits helps you channel your energy
                            positively.
                        </li>
                        <li>
                            <strong>Seeking Social Support:</strong> You thrive
                            in social settings and can benefit from talking to
                            friends, family, or mentors when you’re feeling
                            stressed. Sharing your thoughts and getting feedback
                            can help you feel more grounded.
                        </li>
                        <li>
                            <strong>Focusing on Goals:</strong> Setting clear
                            goals and working towards them can help you manage
                            stress by giving you a sense of direction and
                            purpose. Your goal-oriented nature keeps you focused
                            on what’s important.
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensDiscReportStyleImages/StressManagement/11.svg'"
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
                            :src="'/images/reports-images/TeensDiscReportStyleImages/HowYouLearnBest/9.svg'"
                            alt=""
                        />
                    </div>
                </div>
                <div class="col-6">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Practical Tips for Managing Stress
                    </h2>
                    <p>To manage stress effectively, try these strategies:</p>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Take Charge:</strong> When faced with a
                            stressful situation, identify what you can control
                            and take proactive steps to address it.
                        </li>
                        <li>
                            <strong>Stay Physically Active:</strong> Incorporate
                            regular physical activity into your routine to help
                            manage stress and boost your mood.
                        </li>
                        <li>
                            <strong>Talk it Out:</strong> Reach out to trusted
                            friends or family members to talk about what’s
                            stressing you out. Sometimes, just expressing your
                            feelings can make a big difference.
                        </li>
                        <li>
                            <strong>Set Achievable Goals:</strong> Break down
                            your tasks into manageable steps and set achievable
                            goals to keep yourself on track and reduce
                            overwhelming yourself.
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <h2 class="text-xl md:text-3xl mb-4">
                    Coping Strategies for Dominant-Influential Style
                </h2>
                <ul class="list-disc pl-6">
                    <li>
                        <strong>Exercise and Sports:</strong> Engage in physical
                        activities that you enjoy, such as sports, running, or
                        dancing, to relieve stress and stay active.
                    </li>
                    <li>
                        <strong>Leadership Opportunities:</strong> Look for
                        opportunities to take the lead on projects or activities
                        that interest you. Taking charge can help you feel more
                        in control and less stressed.
                    </li>
                    <li>
                        <strong>Social Connections:</strong> Spend time with
                        friends and family, and don’t hesitate to share your
                        thoughts and feelings with them. Social support is
                        crucial for your well-being.
                    </li>
                </ul>
            </div>
        </div>

        <!-- For I Style Report -->
        <div v-if="style == 'I'">
            <div class="row">
                <div class="col-6">
                    <h2 class="text-xl md:text-3xl mb-4">How You Handle Stress</h2>
                    <p>
                        As someone with an Influential (I) style, you often
                        handle stress with creativity and a positive attitude.
                        Here's how you typically manage stress:
                    </p>

                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Social Support:</strong> You rely on friends
                            and family for support and enjoy talking through
                            your feelings with others to gain perspective.
                        </li>
                        <li>
                            <strong>Optimistic Outlook:</strong> You tend to
                            focus on the positives, even in challenging
                            situations, which helps you stay hopeful and
                            motivated.
                        </li>
                        <li>
                            <strong>Expressive Outlets:</strong> You use
                            creative activities, like art or writing, to express
                            your emotions and relieve stress.
                        </li>
                        <li>
                            <strong>Seeking Distractions:</strong> Engaging in
                            fun activities, like watching movies or hanging out
                            with friends, helps you take your mind off stressful
                            situations.
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensDiscReportStyleImages/StressManagement/11.svg'"
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
                            :src="'/images/reports-images/TeensDiscReportStyleImages/HowYouLearnBest/9.svg'"
                            alt=""
                        />
                    </div>
                </div>
                <div class="col-6">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Practical Tips for Managing Stress
                    </h2>
                    <p>To manage stress effectively, try these strategies:</p>

                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Stay Connected:</strong> Reach out to
                            friends and family when you’re feeling overwhelmed.
                            Sharing your feelings can help you feel supported
                            and understood.
                        </li>
                        <li>
                            <strong>Take Breaks:</strong> Give yourself time to
                            relax and recharge with activities you enjoy, like
                            listening to music or going for a walk.
                        </li>
                        <li>
                            <strong>Practice Mindfulness:</strong> Spend time
                            focusing on the present moment through activities
                            like meditation or deep breathing to calm your mind.
                        </li>
                        <li>
                            <strong>Stay Organised:</strong> Keep track of your
                            tasks and responsibilities with a planner or app to
                            reduce last-minute stress.
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <h2 class="text-xl md:text-3xl mb-4">
                    Coping Strategies for Influential Style
                </h2>
                <ul class="list-disc pl-6">
                    <li>
                        <strong>Exercise Regularly:</strong> Physical activity
                        is a great way to relieve stress and boost your mood.
                    </li>
                    <li>
                        <strong>Focus on Solutions:</strong> Concentrate on
                        finding solutions rather than dwelling on problems.
                    </li>
                    <li>
                        <strong>Set Realistic Goals:</strong> Make sure your
                        goals are achievable to avoid unnecessary pressure.
                    </li>
                </ul>
            </div>
        </div>

        <!-- For ID Style Report -->
        <div v-if="style == 'ID'">
            <div class="row">
                <div class="col-6">
                    <h2 class="text-xl md:text-3xl mb-4">How You Handle Stress</h2>
                    <p class="">
                        As someone with an Influential-Dominant (ID) style, you
                        often handle stress by taking charge and seeking social
                        support. Here's how you typically manage stress:
                    </p>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Taking Initiative:</strong> When faced with
                            stress, you prefer to take control of the situation.
                            Your assertive nature drives you to find solutions
                            and take action to resolve problems quickly.
                        </li>
                        <li>
                            <strong>Seeking Social Support:</strong> You find
                            comfort in talking to friends, family, or mentors
                            when you’re stressed. Sharing your feelings and
                            receiving encouragement helps you feel understood
                            and supported.
                        </li>
                        <li>
                            <strong>Staying Positive:</strong> You maintain a
                            positive outlook, focusing on potential solutions
                            rather than dwelling on the problem. Your optimism
                            helps you manage stress more effectively.
                        </li>
                        <li>
                            <strong>Engaging in Activities:</strong>
                            Participating in activities and staying busy helps
                            you distract yourself from stress and keep your mind
                            occupied.
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensDiscReportStyleImages/StressManagement/11.svg'"
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
                            :src="'/images/reports-images/TeensDiscReportStyleImages/HowYouLearnBest/9.svg'"
                            alt=""
                        />
                    </div>
                </div>
                <div class="col-6">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Practical Tips for Managing Stress
                    </h2>
                    <p class="">
                        To manage stress effectively, try these strategies:
                    </p>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Take Action:</strong> When feeling stressed,
                            identify actionable steps you can take to address
                            the issue. Taking control can help you feel more
                            empowered and reduce stress.
                        </li>
                        <li>
                            <strong>Talk to Someone:</strong> Reach out to
                            friends, family, or a trusted adult when you’re
                            feeling stressed. Talking about your feelings can
                            help you gain perspective and find solutions.
                        </li>
                        <li>
                            <strong>Stay Positive:</strong> Practice positive
                            thinking and focus on the solutions rather than the
                            problems. Maintaining an optimistic outlook can help
                            you stay resilient.
                        </li>
                        <li>
                            <strong>Stay Engaged:</strong> Keep yourself busy
                            with activities you enjoy. Engaging in hobbies,
                            sports, or other interests can provide a healthy
                            distraction from stress.
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <h2 class="text-xl md:text-3xl mb-4">
                    Coping Strategies for Influential-Dominant Style
                </h2>
                <ul class="list-disc pl-6">
                    <li>
                        <strong>Exercise and Physical Activity:</strong> Engage
                        in regular physical activities, such as sports, dancing,
                        or yoga, to relieve stress and stay active.
                    </li>
                    <li>
                        <strong>Mindfulness and Relaxation:</strong> Practice
                        mindfulness exercises, such as meditation or deep
                        breathing, to help calm your mind and reduce stress.
                    </li>
                    <li>
                        <strong>Stay Connected:</strong> Maintain strong social
                        connections by spending time with friends and family,
                        participating in group activities, and building a
                        support network.
                    </li>
                </ul>
            </div>
        </div>

        <!-- For IS Style Report -->
        <div v-if="style == 'IS'">
            <div class="row">
                <div class="col-6">
                    <h2 class="text-xl md:text-3xl mb-4">How You Handle Stress</h2>
                    <p class="">
                        As someone with an Influential-Supportive (IS) style,
                        you often handle stress by seeking support from others
                        and maintaining a positive outlook. Here's how you
                        typically manage stress:
                    </p>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Seeking Social Support:</strong> You find
                            comfort in talking to friends, family, or mentors
                            when you’re stressed. Sharing your feelings and
                            receiving encouragement helps you feel understood
                            and supported.
                        </li>
                        <li>
                            <strong>Staying Positive:</strong> You tend to focus
                            on the positive aspects of situations, which helps
                            you manage stress more effectively. Your optimistic
                            perspective enables you to stay hopeful and
                            resilient.
                        </li>
                        <li>
                            <strong>Engaging in Social Activities:</strong>
                            Participating in social activities and spending time
                            with friends can help you relieve stress and
                            recharge your energy.
                        </li>
                        <li>
                            <strong>Maintaining Balance:</strong> You strive to
                            balance your academic, social, and personal life,
                            ensuring that you don’t get overwhelmed by any one
                            area.
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensDiscReportStyleImages/StressManagement/11.svg'"
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
                            :src="'/images/reports-images/TeensDiscReportStyleImages/HowYouLearnBest/9.svg'"
                            alt=""
                        />
                    </div>
                </div>
                <div class="col-6">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Practical Tips for Managing Stress
                    </h2>
                    <p class="">
                        To manage stress effectively, try these strategies:
                    </p>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Talk to Someone:</strong> Reach out to
                            friends, family, or a trusted adult when you’re
                            feeling stressed. Talking about your feelings can
                            help you gain perspective and find solutions.
                        </li>
                        <li>
                            <strong>Focus on the Positive:</strong> Practice
                            gratitude and positive thinking to help you stay
                            optimistic and resilient in challenging situations.
                        </li>
                        <li>
                            <strong>Stay Socially Active:</strong> Engage in
                            activities that you enjoy and that allow you to
                            connect with others. Social interactions can help
                            reduce stress and improve your mood.
                        </li>
                        <li>
                            <strong>Create a Balanced Schedule:</strong> Make
                            sure to balance your time between school, hobbies,
                            and relaxation. Avoid overcommitting yourself and
                            prioritise self-care.
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <h2 class="text-xl md:text-3xl mb-4">
                    Coping Strategies for Influential-Supportive Style
                </h2>
                <ul class="list-disc pl-6">
                    <li>
                        <strong>Exercise and Physical Activity:</strong> Engage
                        in regular physical activities, such as sports, dancing,
                        or yoga, to relieve stress and stay active.
                    </li>
                    <li>
                        <strong>Mindfulness and Relaxation:</strong> Practice
                        mindfulness exercises, such as meditation or deep
                        breathing, to help calm your mind and reduce stress.
                    </li>
                    <li>
                        <strong>Creative Outlets:</strong> Participate in
                        creative activities, such as drawing, writing, or
                        playing music, to express your emotions and unwind.
                    </li>
                </ul>
            </div>
        </div>

        <!-- For S Style Report -->
        <div v-if="style == 'S'">
            <!-- Content for S -->
            <div class="row">
                <div class="col-6">
                    <h2 class="text-xl md:text-3xl mb-4">How You Handle Stress</h2>
                    <p class="">
                        As someone with a Supportive (S) style, you often handle
                        stress with patience and a calm demeanour. Here's how
                        you typically manage stress:
                    </p>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Seeking Support:</strong> You rely on
                            friends and family for support, valuing their
                            encouragement and advice when things get tough.
                        </li>
                        <li>
                            <strong>Maintaining Routine:</strong> Having a
                            consistent routine helps you feel grounded and
                            reduces stress by providing a sense of stability.
                        </li>
                        <li>
                            <strong>Avoiding Conflict:</strong> You prefer to
                            avoid conflict and seek harmony, which helps you
                            manage stress by keeping situations peaceful.
                        </li>
                        <li>
                            <strong>Engaging in Relaxing Activities:</strong>
                            You find comfort in activities that help you unwind,
                            like reading, listening to music, or spending time
                            in nature.
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensDiscReportStyleImages/StressManagement/11.svg'"
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
                            :src="'/images/reports-images/TeensDiscReportStyleImages/HowYouLearnBest/9.svg'"
                            alt=""
                        />
                    </div>
                </div>

                <div class="col-6">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Practical Tips for Managing Stress
                    </h2>
                    <p class="">
                        To manage stress effectively, try these strategies:
                    </p>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Connect with Others:</strong> Reach out to
                            friends or family when you’re feeling overwhelmed.
                            Talking things through can help you feel supported
                            and understood.
                        </li>
                        <li>
                            <strong>Stick to a Routine:</strong> Keep a regular
                            schedule for your daily activities to provide
                            structure and reduce uncertainty.
                        </li>
                        <li>
                            <strong>Practice Mindfulness:</strong> Engage in
                            mindfulness exercises, like meditation or deep
                            breathing, to stay calm and focused.
                        </li>
                        <li>
                            <strong>Take Time for Yourself:</strong> Set aside
                            time for activities you enjoy, whether it’s a hobby,
                            a favourite TV show, or simply relaxing with a book.
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <h2 class="text-xl md:text-3xl mb-4">
                    Coping Strategies for Supportive Style
                </h2>
                <p class="">
                    Here are some coping strategies for your Supportive style:
                </p>
                <ul class="list-disc pl-6">
                    <li>
                        <strong>Seek Supportive Relationships:</strong> Surround
                        yourself with people who provide encouragement and
                        understanding.
                    </li>
                    <li>
                        <strong>Engage in Mindful Practices:</strong> Use
                        techniques like meditation or yoga to help centre
                        yourself and reduce stress.
                    </li>
                    <li>
                        <strong>Focus on Positive Interactions:</strong>
                        Emphasise maintaining positive relationships and
                        peaceful environments to keep stress levels low.
                    </li>
                </ul>
            </div>
        </div>

        <!-- For SC Style Report -->
        <div v-if="style == 'SC'">
            <div class="row">
                <div class="col-6">
                    <h2 class="text-xl md:text-3xl mb-4">How You Handle Stress</h2>
                    <p class="">
                        As someone with a Supportive-Cautious (SC) style, you
                        often handle stress by seeking stability and support.
                        Here's how you typically manage stress:
                    </p>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Seeking Support:</strong> You find comfort
                            in talking to friends, family, or mentors when
                            you’re stressed. Sharing your feelings and receiving
                            encouragement helps you feel understood and
                            supported.
                        </li>
                        <li>
                            <strong>Sticking to Routines:</strong> You prefer to
                            maintain routines and structure to reduce
                            uncertainty and anxiety. Familiar patterns help you
                            feel more in control and less stressed.
                        </li>
                        <li>
                            <strong>Taking Time to Reflect:</strong> You take a
                            thoughtful approach to stress, reflecting on the
                            situation and considering your options before taking
                            action. This helps you feel more prepared and
                            confident in your decisions.
                        </li>
                        <li>
                            <strong>Engaging in Calming Activities:</strong>
                            Participating in activities that promote relaxation,
                            and calmness helps you manage stress. This might
                            include reading, meditating, or spending time in
                            nature.
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensDiscReportStyleImages/StressManagement/11.svg'"
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
                            :src="'/images/reports-images/TeensDiscReportStyleImages/HowYouLearnBest/9.svg'"
                            alt=""
                        />
                    </div>
                </div>
                <div class="col-6">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Practical Tips for Managing Stress
                    </h2>
                    <p class="">
                        To manage stress effectively, try these strategies:
                    </p>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Reach Out for Support:</strong> When feeling
                            stressed, talk to someone you trust. Sharing your
                            concerns can help you gain perspective and feel more
                            supported.
                        </li>
                        <li>
                            <strong>Maintain Routines:</strong> Stick to your
                            daily routines as much as possible. Familiar
                            patterns can provide a sense of stability and reduce
                            stress.
                        </li>
                        <li>
                            <strong>Reflect and Plan:</strong> Take time to
                            reflect on stressful situations and plan your
                            response. Breaking down problems into manageable
                            steps can help you feel more in control.
                        </li>
                        <li>
                            <strong>Engage in Calming Activities:</strong> Find
                            activities that help you relax and unwind. This
                            could be anything from reading a book to practising
                            mindfulness or spending time outdoors.
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <h2 class="text-xl md:text-3xl mb-4">
                    Coping Strategies for Supportive-Cautious Style
                </h2>

                <ul class="list-disc pl-6">
                    <li>
                        <strong>Exercise and Physical Activity:</strong> Engage
                        in regular physical activities, such as walking, yoga,
                        or swimming, to relieve stress and stay active.
                    </li>
                    <li>
                        <strong>Creative Outlets:</strong> Participate in
                        creative activities, such as drawing, writing, or
                        playing music, to express your emotions and unwind.
                    </li>
                    <li>
                        <strong>Stay Connected:</strong> Maintain strong social
                        connections by spending time with friends and family,
                        participating in group activities, and building a
                        support network.
                    </li>
                </ul>
            </div>
        </div>

        <!-- For SI Style Report -->
        <div v-if="style == 'SI'">
            <div class="row">
                <div class="col-6">
                    <h2 class="text-xl md:text-3xl mb-4">How You Handle Stress</h2>
                    <p class="">
                        As someone with a Supportive-Influential (SI) style, you
                        often handle stress by seeking social support and
                        engaging in positive interactions. Here's how you
                        typically manage stress:
                    </p>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Seeking Social Support:</strong> You find
                            comfort in talking to friends, family, or mentors
                            when you’re stressed. Sharing your feelings and
                            receiving encouragement helps you feel understood
                            and supported.
                        </li>
                        <li>
                            <strong>Engaging in Social Activities:</strong>
                            Participating in social activities and spending time
                            with loved ones helps you relieve stress. Positive
                            interactions and shared experiences boost your mood
                            and reduce anxiety.
                        </li>
                        <li>
                            <strong>Staying Positive:</strong> You try to
                            maintain a positive outlook and focus on the good
                            aspects of situations. Your optimistic nature helps
                            you cope with stress more effectively.
                        </li>
                        <li>
                            <strong>Expressing Yourself:</strong> You often find
                            relief by expressing your thoughts and feelings.
                            Whether through talking, writing, or creative
                            outlets, sharing your emotions helps you process
                            stress.
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensDiscReportStyleImages/StressManagement/11.svg'"
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
                            :src="'/images/reports-images/TeensDiscReportStyleImages/HowYouLearnBest/9.svg'"
                            alt=""
                        />
                    </div>
                </div>
                <div class="col-6">
                    <h2 class="text-xl md:text-3xl mb-4">
                        Practical Tips for Managing Stress
                    </h2>
                    <p class="">
                        To manage stress effectively, try these strategies:
                    </p>
                    <ul class="list-disc pl-6">
                        <li>
                            <strong>Reach Out for Support:</strong> When feeling
                            stressed, talk to someone you trust. Sharing your
                            concerns can help you gain perspective and feel more
                            supported.
                        </li>
                        <li>
                            <strong>Stay Socially Active:</strong> Participate
                            in social activities that you enjoy. Being around
                            friends and engaging in fun activities can help you
                            relax and unwind.
                        </li>
                        <li>
                            <strong>Maintain a Positive Attitude:</strong> Focus
                            on the positive aspects of situations and remind
                            yourself of your strengths and achievements.
                        </li>
                        <li>
                            <strong>Express Your Emotions:</strong> Find healthy
                            ways to express your thoughts and feelings.
                            Journaling, art, or talking to a friend can help you
                            process your emotions and reduce stress.
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <h2 class="text-xl md:text-3xl mb-4">
                    Coping Strategies for Supportive-Influential Style
                </h2>

                <ul class="list-disc pl-6">
                    <li>
                        <strong>Connect with Friends:</strong> Spend time with
                        friends who make you feel happy and supported.
                        Socialising with positive people can boost your mood and
                        reduce stress.
                    </li>
                    <li>
                        <strong>Volunteer or Help Others:</strong> Participate
                        in community service or help someone in need. Acts of
                        kindness can provide a sense of fulfilment and distract
                        you from your own stress.
                    </li>
                    <li>
                        <strong>Develop a Hobby:</strong> Pursue a hobby or
                        interest that you are passionate about. Engaging in
                        activities you love can provide a positive outlet for
                        stress.
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
    name: "StressManagement",
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
div.space-y-2 > h4.font-medium {
    color: rgb(36, 168, 250);
    font-weight: bold;
    color: #fa25c4;
    /* font-size: 19px; */
}

h2,
.p-6 > .row > .col-6 > h2 {
    color: rgb(55 48 163);
    font-weight: bold !important;
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
