<template>
     <div class="p-4 md:p-6">

    <div class="container mx-auto p-4">
        <h1 class="font-bold text-center">Understanding Your Child’s Style</h1>
    </div>

    <div id="CD" v-if="style == 'C'">
        <div class="social-interactions p-6 rounded-lg">
            <h2 class="text-3xl font-bold mb-4">
                Social Interactions
            </h2>
            <h2 class="text-2xl font-semibold mb-2  text-blue-500 mb-4">
                How {{ childName }} Interacts with Others:
            </h2>
            <p class="text-lg  mb-4">
                Children with a Cautious (C) style are often thoughtful and reserved in social settings. They prefer smaller groups or one-on-one interactions where they can have deeper conversations. They are good listeners and often provide thoughtful advice to their friends. Here are some key points about how your child interacts with others:

            </p>
            <div class="row">
                <div class="col-6">
                    <ul
                        class="list-none list-inside text-lg  mb-6"
                    >
                        <li>
                            <strong>Thoughtful:</strong> {{ childName }} takes
                            the time to think before they speak and often
                            provides well-considered responses.
                        </li>
                        <li>
                            <strong>Reserved:</strong> They may be more
                            comfortable in smaller, quieter settings rather than
                            large, noisy groups.
                        </li>
                        <li>
                            <strong>Supportive:</strong> They are good listeners
                            and often help their friends by offering thoughtful
                            advice.
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-svg-images/Page 12 new.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-6 d-flex">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-svg-images/Page13b.svg'"
                            alt=""
                        />
                    </div>
                </div>
                <div class="col-6 d-flex">
                    <ul class="list-none list-inside text-lg ">
                        <h2 class="text-2xl font-semibold text-purple-500 mb-2">
                Tips for Parents and Teachers:
            </h2>
                        <li>
                            <strong
                                >Encourage Participation in Smaller
                                Groups:</strong
                            >
                            Provide opportunities for {{ childName }} to
                            interact in smaller group settings where they feel
                            more comfortable.
                        </li>
                        <li>
                            <strong>Promote Deep Conversations:</strong>
                            Encourage them to engage in meaningful conversations
                            where they can share their thoughts and ideas.
                        </li>
                        <li>
                            <strong>Build a Supportive Environment:</strong>
                            Create an environment where they feel safe to
                            express themselves and are appreciated for their
                            thoughtful contributions.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="preferred-environment p-6 rounded-lg mb-6">
            <h2 class="text-3xl font-bold mb-4">
                Preferred Environment
            </h2>
            <h2 class="text-2xl font-bold mb-2  text-blue-500 mb-4">
                Where {{ childName }} Thrives Best:
            </h2>
            <p class="text-lg  mb-4">
                Children with a Cautious (C) style perform best in environments that are structured, orderly, and quiet. They prefer settings where they can work independently or in small groups, focusing on details and ensuring accuracy. Here are some ideal environmental factors for your child:

            </p>
            <ul class="list-none list-inside text-lg  mb-6">
                <li>
                    <strong>Structured Settings:</strong> Consistent routines
                    and clear expectations help them feel secure and focused.
                </li>
                <li>
                    <strong>Quiet Spaces:</strong> They thrive in environments
                    that minimise distractions and allow them to concentrate.
                </li>
                <li>
                    <strong>Orderly Environments:</strong> Organised and well-ordered spaces help them stay on track and feel comfortable.

                </li>
            </ul>

            <div class="row">
                <div class="col-6">
                    <h2 class="text-2xl font-semibold text-purple-500 mb-2">
                        Tips for Parents and Teachers:
                    </h2>
                    <ul class="list-none list-inside text-lg ">
                        <li>
                            <strong>Maintain Consistency:</strong> Keep a
                            regular routine to provide a sense of stability.
                        </li>
                        <li>
                            <strong>Create Quiet Workspaces:</strong> Ensure
                            they have a quiet place to work and study without
                            distractions.
                        </li>
                        <li>
                            <strong>Promote Organisation:</strong> Encourage them to keep their environment tidy and well-organised.
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-svg-images/Page 12 newb.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>
        </div>

        <div class="stress-management p-6 rounded-lg">
            <h2 class="text-3xl font-bold mb-4">
                Stress Management
            </h2>
            <h2 class="text-2xl font-bold mb-2  text-blue-500 mb-4">
                How {{ childName }} Handles Stress:
            </h2>
            <p class="text-lg  mb-4">
                Children with a Cautious (C) style can become stressed in
                chaotic or unpredictable environments. They may also feel
                stressed when they are pressured to make quick decisions or when
                their careful planning is disrupted. Here are some signs of stress and ways to help:

            </p>

            <ul class="list-none list-inside text-lg  ">
                <li>
                    <strong >
                Signs of Stress:
            </strong>
                    Withdrawal, increased anxiety, and a tendency to overthink.
                </li>
            </ul>

            <ul class="list-none list-inside text-lg  ">
                <li>
                    <strong>Stress Triggers: </strong>
                    Chaos, unpredictability, and pressure to make quick
                    decisions.
                </li>
            </ul>

            <ul class="list-none list-inside text-lg  mb-6">
                <li>
                    <strong> Coping Strategies: </strong>
                    Providing reassurance, allowing them time to process
                    changes, and engaging in calming activities.
                </li>
            </ul>
            <h2 class="text-xl font-semibold text-purple-500">
                Tips for Parents and Teachers:
            </h2>
            <ul class="list-none list-inside text-lg  space-y-2">
                <li>
                    <strong>Provide Reassurance:</strong> Offer comfort and
                    affirmation, especially when they seem stressed.
                </li>
                <li>
                    <strong>Encourage Calm Activities:</strong> Engage them in
                    calming activities like reading, drawing, or nature walks.
                </li>
                <li>
                    <strong>Support Their Planning:</strong> Allow them to have
                    some control over their environment and schedule to reduce
                    stress.
                </li>
            </ul>
        </div>
    </div>

    <!-- For CD Style Type -->
    <div id="CD" v-if="style == 'CD'">
        <div class="p-6 rounded-lg space-y-6">
            <!-- Social Interactions Section -->
            <div>
                <h2 class="text-3xl font-bold mb-4">
                    Social Interactions
                </h2>
                <p>
                    <strong>
                        How {{ childName }} Interacts with Others:

                    </strong>
                </p>
                <p class="">
                    Children with a Cautious-Dominant (CD) style are naturally
                    detail-oriented and enjoy taking the lead. They are
                    confident in their abilities and like to make sure things
                    are done correctly. Here are some key points about how your
                    child interacts with others:
                </p>
                <ul class="list-none pl-6  space-y-2">
                    <li>
                        <span class="font-semibold">Confident Leader:</span>
                        {{ childName }} likes to take charge and lead group
                        activities. They are confident in their ideas and enjoy
                        guiding their friends.
                    </li>
                    <li>
                        <span class="font-semibold">Detail-Oriented:</span> They
                        pay close attention to details and make sure tasks are
                        completed accurately. This helps them ensure that
                        everything runs smoothly.
                    </li>
                    <li>
                        <span class="font-semibold">Supportive Helper:</span>
                        While they lead, they also help their friends and make
                        sure everyone is doing well.
                    </li>
                </ul>
            </div>

            <!-- Tips for Parents and Teachers Section -->
            <div>
                <h2 class="text-3xl font-bold mb-4">
                    Tips for Parents and Teachers:
                </h2>
                <ul class="list-none pl-6  space-y-2">
                    <li>
                        <span class="font-semibold"
                            >Encourage Group Leadership:</span
                        >
                        Involve {{ childName }} in group activities where they
                        can take on leadership roles and guide their peers.
                    </li>
                    <li>
                        <span class="font-semibold"
                            >Promote Inclusive Leadership:</span
                        >
                        Teach them to include others’ ideas and make sure
                        everyone feels valued in group settings.
                    </li>
                    <li>
                        <span class="font-semibold"
                            >Support Detail-Oriented Tasks:</span
                        >
                        Provide tasks that require careful planning and
                        attention to detail, allowing {{ childName }} to use
                        their strengths.
                    </li>
                </ul>
            </div>

            <!-- Preferred Environment Section -->
            <h2 class="text-3xl font-bold mb-4">
                Preferred Environment
            </h2>
            <p>
                <strong>
                    Where {{ childName }} Thrives Best:

                </strong>
            </p>
            <p class="">
                Children with a Cautious-Dominant (CD) style perform best in
                environments that are structured, organised, and allow them to
                take the lead. They appreciate clear expectations and enjoy
                tasks that require precision and problem-solving. Here are some
                ideal environmental factors for your child:
            </p>
            <div class="row">
                <div class="col-6">
                    <ul class="list-none pl-6  space-y-2">
                        <li>
                            <span class="font-semibold"
                                >Structured Settings:</span
                            >
                            Environments with clear routines and expectations
                            help them feel secure and focused.
                        </li>
                        <li>
                            <span class="font-semibold">Organised Spaces:</span>
                            Neat and orderly spaces where everything has a place
                            allow them to concentrate and work efficiently.
                        </li>
                        <li>
                            <span class="font-semibold"
                                >Leadership Opportunities:</span
                            >
                            Situations where they can take charge and guide
                            others help them thrive and use their natural
                            leadership abilities.
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-svg-images/Page13b.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>

            <!-- Tips for Parents and Teachers Section -->
            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-svg-images/Page 12 newb.svg'"
                            alt=""
                        />
                    </div>
                </div>
                <div class="col-6">
                    <div>
                        <h2 class="text-3xl font-bold mb-4">
                            Tips for Parents and Teachers:
                        </h2>
                        <ul class="list-none pl-6  space-y-2">
                            <li>
                                <span class="font-semibold"
                                    >Maintain a Structured Routine:</span
                                >
                                Provide a consistent daily routine to help
                                {{ childName }} feel secure and focused.
                            </li>
                            <li>
                                <span class="font-semibold"
                                    >Keep Spaces Organised:</span
                                >
                                Ensure their learning and play areas are neat
                                and orderly to help them concentrate.
                            </li>
                            <li>
                                <span class="font-semibold"
                                    >Offer Leadership Roles:</span
                                >
                                Give them opportunities to take on leadership
                                roles in group activities or projects.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Stress Management Section -->
            <div>
                <h2 class="text-3xl font-bold mb-4">
                    Stress Management
                </h2>
                <p>
                    <strong>
                        How {{  childName  }} Handles Stress:

                    </strong>
                </p>
                <p class="">
                    Children with a Cautious-Dominant (CD) style may become
                    stressed when there is too much chaos or when they face
                    unexpected changes. They might also feel overwhelmed if they
                    have too many tasks at once. Here are some signs of stress
                    and ways to help:
                </p>
                <ul class="list-none pl-6 ">
                    <li>
                        <span class="font-semibold">Signs of Stress:</span>
                        Frustration, irritability, difficulty concentrating, and
                        withdrawal.
                    </li>
                    <li>
                        <span class="font-semibold">Stress Triggers:</span>
                        Chaotic environments, sudden changes, and an overload of
                        responsibilities.
                    </li>
                    <li>
                        <span class="font-semibold">Coping Strategies:</span>
                        Encourage {{ childName }} to take breaks and engage in
                        calming activities, such as reading or doing puzzles.
                        Practice relaxation techniques together, like deep
                        breathing or mindfulness exercises.
                    </li>
                </ul>
            </div>

            <!-- Tips for Parents and Teachers Section -->
            <div>
                <h2 class="text-3xl font-bold mb-4">
                    Tips for Parents and Teachers:
                </h2>
                <ul class="list-none pl-6  space-y-2">
                    <li>
                        <span class="font-semibold"
                            >Provide a Calm Environment:</span
                        >
                        Ensure {{ childName }} has access to a quiet and
                        organised space where they can relax and focus.
                    </li>
                    <li>
                        <span class="font-semibold"
                            >Introduce Relaxation Techniques:</span
                        >
                        Teach them stress-relief techniques like deep breathing,
                        meditation, or yoga to help them stay calm.
                    </li>
                    <li>
                        <span class="font-semibold"
                            >Promote Time Management:</span
                        >
                        Help {{ childName }} manage their responsibilities by
                        breaking tasks into smaller, manageable steps and
                        prioritising them.
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- For CS Style Type -->
    <div id="CS" v-if="style == 'CS'">
        <div class="p-6">
            <!-- Social Interactions Section -->
            <div>
                <h2 class="text-3xl font-bold mb-4">
                    Social Interactions
                </h2>
                <h2 class="text-xl font-semibold text-blue-600 mb-3">
                    How {{ childName }} Interacts with Others:
                </h2>
                <p class="">
                    Children with a
                    <span class="font-semibold text-blue-600"
                        >Cautious-Supportive (CS)</span
                    >
                    style are naturally attentive and considerate. They take joy
                    in helping others and making sure everyone feels valued and
                    supported. Here are some key points about how your child interacts with others:

                </p>
                <div class="row">
                    <div class="col-6">
                        <ul
                            class="list-none list-inside  mt-4 space-y-2"
                        >
                            <li>
                                <span class="font-semibold"
                                    >Thoughtful and Attentive:</span
                                >
                                {{ childName }} carefully considers their
                                actions and how they affect others, always
                                striving to ensure everyone feels appreciated.
                            </li>
                            <li>
                                <span class="font-semibold"
                                    >Dependable and Steady:</span
                                >
                                They are known for their reliability and can be
                                trusted to follow through on their commitments,
                                making them a dependable friend.
                            </li>
                            <li>
                                <span class="font-semibold">Nurturing:</span>
                                They enjoy assisting their friends with tasks
                                and providing support, ensuring everyone feels
                                included and cared for.
                            </li>
                        </ul>
                    </div>
                    <div class="col-6 d-flex">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-96 h-auto object-contain"
                                :src="'/images/reports-svg-images/Page13b.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                </div>

                <h2 class="text-3xl font-bold mb-4 text-green-600 mt-6">
                    Tips for Parents and Teachers:
                </h2>
                <ul class="list-none list-inside  space-y-2 mb-4">
                    <li>
                        <strong>Facilitate One-on-One Interactions:</strong>
                        Encourage {{ childName }} to build close, supportive relationships with peers through one-on-one activities or playdates.

                    </li>
                    <li>
                        <strong>Promote Empathy-Building Activities:</strong>
                        Engage in activities that promote understanding and empathy, such as role-playing or cooperative games.

                    </li>
                    <li>
                        <strong>Encourage Supportive Roles: </strong>
                        Provide opportunities for {{ childName }} to help others in the classroom or at home, such as being a class helper or family assistant.

                    </li>
                </ul>
            </div>

            <!-- Preferred Environment Section -->
            <div>
                <h2 class="text-3xl font-bold mb-2">
                    Preferred Environment
                </h2>
                <h2 class="text-xl font-semibold text-blue-600 mb-3">
                    Where {{ childName }} Thrives Best:
                </h2>
                <p class="">
                    Children with a
                    <span class="font-semibold text-blue-600"
                        >Cautious-Supportive (CS)</span
                    >
                    style excel in environments that are calm, predictable, and organised. They appreciate stability and clarity in their surroundings. Here are some ideal environmental factors for your child:


                </p>
                <div class="row">
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-96 h-auto object-contain"
                                :src="'/images/reports-svg-images/Page 12 newb.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="col-6">
                        <ul
                            class="list-none list-inside  mt-4 space-y-2"
                        >
                            <li>
                                <span class="font-semibold"
                                    >Consistent Routines:</span
                                >
                                Environments with established routines and clear expectations help them feel secure.

                            </li>
                            <li>
                                <span class="font-semibold"
                                    >Quiet and Peaceful Settings:</span
                                >
                                Areas that are calm and free from chaos allow them to focus and feel at ease.

                            </li>
                            <li>
                                <span class="font-semibold"
                                    >Well-Organised Spaces:</span
                                >
                                Spaces where everything has a designated place help them stay organised and understand what is expected.

                            </li>
                        </ul>
                    </div>
                </div>
                <h2 class="text-3xl font-bold mb-4 text-green-600 mt-6">
                    Tips for Parents and Teachers:
                </h2>
                <ul class="list-none list-inside  space-y-2">
                    <li>
                        <strong>Maintain Consistent Schedules: </strong>
                        Establish a daily routine that {{ childName }} can rely on, reducing anxiety about what to expect.

                    </li>
                    <li>
                        <strong>Create Quiet Zones: </strong> Ensure there are spaces where {{ childName }} can retreat to for focused activities or relaxation.

                    </li>
                    <li>
                        <strong>Use Visual Aids: </strong> Implement charts and schedules to visually outline routines and expectations, aiding in their organisation and understanding.

                    </li>
                </ul>
            </div>

            <!-- Stress Management Section -->
            <div>
                <h2 class="text-3xl font-bold mb-4">
                    Stress Management
                </h2>
                <h2 class="text-xl font-semibold text-blue-600 mb-3">
                    How {{ childName }} Handles Stress:
                </h2>
                <p class="">
                    Children with a
                    <span class="font-semibold text-blue-600"
                        >Cautious-Supportive (CS)</span
                    >
                    style may become stressed in environments that lack order or
                    when faced with unexpected changes. They might also feel
                    overwhelmed if given too many responsibilities at once.
                    Here are some signs of stress and ways to help:

                </p>
                <ul class="list-none list-inside  mt-4 space-y-2">
                    <li>
                        <span class="font-semibold">Signs of Stress:</span>
                        Withdrawal, increased sensitivity, difficulty
                        concentrating, and excessive worrying.
                    </li>
                    <li>
                        <span class="font-semibold">Stress Triggers:</span>
                        Disorganised environments, sudden changes in routine, and an overload of tasks.

                    </li>
                    <li>
                        <span class="font-semibold">Coping Strategies:</span>
                        Encourage {{  childName  }} to participate in structured and calming activities, practice time management skills, and take breaks to relax and recharge.

                    </li>
                </ul>
                <h2 class="text-3xl font-bold mb-4 text-green-600 mt-6">
                    Tips for Parents and Teachers:
                </h2>
                <ul class="list-none list-inside  space-y-2">
                    <li>
                        <strong> Create a Calm Environment: </strong> Ensure {{  childName  }} has a peaceful and organised space where they can feel secure and focused.

                    </li>
                    <li>
                        <strong>Introduce Time Management Techniques: </strong> Teach {{ childName }} how to break tasks into smaller, manageable steps and use checklists to keep track of their responsibilities.

                    </li>
                    <li>
                        <strong> Incorporate Relaxation Breaks: </strong> Schedule regular breaks during tasks or study time for {{  childName  }} to engage in calming activities, such as reading a book, drawing, or practising deep breathing exercises.

                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- For D Style Type -->
    <div id="D" v-if="style == 'D'">
        <!-- Social Interactions -->
        <div class="p-6 ">
            <div class="row">
                <div class="col-6">
                    <h2 class="text-3xl font-bold mb-4">Social Interactions</h2>
                    <p><strong>How {{ childName }} Interacts with Others:
                    </strong></p>
                    <p class="text-lg mb-4">
                        Children with a Dominant (D) style are natural leaders.
                        They tend to take charge in group settings and enjoy
                        organising activities. They are often confident and
                        assertive, which can make them effective leaders among
                        their peers. Here are some key points about how your
                        child interacts with others:
                    </p>
                </div>
                <div class="col-6 d-flex">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-svg-images/Page13b.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>

            <!-- <h2 class="text-3xl font-bold mb-4">Key Points:</h2> -->
            <ul class="list-none space-y-2">
                <li>
                    <b>Leadership:</b> {{ childName }} often takes the lead in
                    group activities and likes to be in control of the
                    situation.
                </li>
                <li>
                    <b>Assertiveness:</b> They are not afraid to express their
                    opinions and can be very persuasive.
                </li>
                <li>
                    <b>Independence:</b> They prefer to make their own decisions
                    and may resist following others' directions.
                </li>
            </ul>

            <h2 class="text-3xl font-bold mb-4">
                Tips for Parents and Teachers:
            </h2>
            <ul class="list-none space-y-2">
                <li>
                    <span>Encourage Inclusive Leadership:</span> Help
                    {{ childName }} learn to include others in decision-making
                    processes.
                </li>
                <li>
                    <b>Promote Empathy:</b> Teach your child to consider others'
                    feelings and viewpoints, nurturing a more collaborative
                    environment.
                </li>
                <li>
                    <b>Provide Leadership Opportunities:</b> Give them chances
                    to lead in various settings, such as school projects, sports
                    teams, or family activities.
                </li>
            </ul>
        </div>

        <!-- Preferred Environment -->
        <div class="p-6   mt-8">
            <h2 class="text-3xl font-bold mb-4">Preferred Environment</h2>
            <p><strong>Where {{ childName }} Thrives Best:</strong>
            </p>
            <p class="text-lg mb-4">
                Children with a Dominant (D) style perform best in environments
                where they can take charge and feel challenged. They enjoy
                settings that allow them to set goals and achieve them. Here are
                some ideal environmental factors for your child:
            </p>

            <!-- <h2 class="text-3xl font-bold mb-4">Key Points:</h2> -->

            <ul class="list-none space-y-2">
                <li>
                    <b>Structured Settings:</b> Clear rules and expectations
                    help them know what is expected and how to succeed.
                </li>
                <li>
                    <b>Opportunities for Competition:</b> They thrive in
                    environments where they can compete and excel.
                </li>
                <li>
                    <b>Autonomy:</b> They appreciate having the freedom to make
                    decisions and lead initiatives.
                </li>
            </ul>

            <h2 class="text-3xl font-bold mb-4">
                Tips for Parents and Teachers:
            </h2>
            <ul class="list-none space-y-2">
                <li>
                    <b>Create Structured Environments:</b> Provide clear
                    guidelines and expectations to help your child understand
                    their goals.
                </li>
                <li>
                    <b>Encourage Healthy Competition:</b> Engage your child in
                    competitive activities that promote personal growth and
                    sportsmanship.
                </li>
                <li>
                    <b>Allow Autonomy:</b> Give your child opportunities to make
                    decisions and take responsibility for their actions.
                </li>
            </ul>
        </div>

        <!-- Stress Management -->
        <div class="p-6   mt-8">
            <h2 class="text-3xl font-bold mb-4">Stress Management</h2>
            <p><strong>How {{ childName }} Handles Stress:
            </strong></p>
            <p class="text-lg mb-4">
                Children with a Dominant (D) style can become stressed when they
                feel out of control or when their authority is challenged. They
                may also experience stress when they are not able to achieve
                their goals. Here are some signs of stress and ways to help:
            </p>

            <!-- <h2 class="text-3xl font-bold mb-4">Signs of Stress:</h2> -->
            <ul class="list-none space-y-2">
                <li>
                    <b>Signs of Stress:</b>Frustration, impatience, and a desire to take control of the situation.

                </li>
                <li>
                    <b>Stress Triggers:</b> Lack of control, being micromanaged,
                    and not meeting their own high expectations.
                </li>
                <li>
                    <b>Coping Strategies:</b> Engaging in physical activities,
                    having clear communication about expectations, and providing
                    opportunities for leadership.
                </li>
            </ul>

            <h2 class="text-3xl font-bold mb-4">
                Tips for Parents and Teachers:
            </h2>
            <ul class="list-none space-y-2">
                <li>
                    <b>Provide Clear Communication:</b> Ensure that expectations
                    and goals are communicated clearly to avoid
                    misunderstandings.
                </li>
                <li>
                    <b>Encourage Physical Activities:</b> Physical exercise can
                    be a great way for your child to manage stress and release
                    energy.
                </li>
                <li>
                    <b>Support Goal Setting:</b> Help your child set realistic
                    and achievable goals, and celebrate their successes to boost
                    their confidence.
                </li>
            </ul>
        </div>
    </div>

    <!-- For DC Style Type -->
    <div id="DC" v-if="style == 'DC'">
        <div class="">
            <!-- Social Interactions -->
            <h2 class="text-3xl font-bold mb-4 mb-6">
                Social Interactions
            </h2>
            <p>
                        <strong>
                            How {{ childName }} Interacts with Others:
                        </strong>
                    </p>
            <p class=" mb-4">
                Children with a Dominant-Cautious (DC) style are natural leaders
                who also value precision and correctness. They tend to take
                charge in group settings and enjoy organising activities to
                ensure everything runs smoothly. Here are some key points about
                how your child interacts with others:
            </p>

            <div class="row">
                <div class="col-6">
                    <ul class="list-none pl-6  mt-2 space-y-2">
                        <li>
                            <span class="font-bold">Leadership:</span>
                            {{ childName }} often takes the lead in group
                            activities and likes to be in control of the
                            situation.
                        </li>
                        <li>
                            <span class="font-bold">Attention to Detail:</span>
                            They ensure that all aspects of the activity or
                            project are done correctly and thoroughly.
                        </li>
                        <li>
                            <span class="font-bold">Independence:</span> They
                            prefer making their own decisions and may resist
                            following others' directions.
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-svg-images/Page13b.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>

            <h2 class="text-3xl font-bold mb-4 mt-6">
                Tips for Parents and Teachers:
            </h2>
            <ul class="list-none pl-6  mt-2 space-y-2">
                <li>
                    <span class="font-bold"
                        >Encourage Collaborative Projects:</span
                    >
                    Involve {{ childName }} in group activities that require
                    teamwork and valuing others' contributions.
                </li>
                <li>
                    <span class="font-bold">Teach Conflict Resolution:</span>
                    Help your child develop skills to resolve disagreements
                    calmly and effectively.
                </li>
                <li>
                    <span class="font-bold">Promote Inclusivity:</span>
                    Encourage your child to consider and incorporate others'
                    ideas and perspectives in group settings.
                </li>
            </ul>

            <!-- Preferred Environment -->

            <h2 class="text-3xl font-bold mb-4 mt-8 mb-6">
                Preferred Environment
            </h2>
            <p>
                <strong>
                    Where {{  childName }} Thrives Best:

                </strong>

            </p>
            <p class=" mb-4">
                Children with a Dominant-Cautious (DC) style perform best in
                environments where they can take charge and feel challenged,
                while also having the opportunity to pay attention to details.
                They enjoy settings that allow them to set goals and achieve
                them accurately. Here are some ideal environmental factors for
                your child:
            </p>

            <ul class="list-none pl-6  mt-2 space-y-2">
                <li>
                    <span class="font-bold">Structured Settings:</span> Clear
                    rules and expectations help them know what is expected and
                    how to succeed.
                </li>
                <li>
                    <span class="font-bold"
                        >Opportunities for Detailed Work:</span
                    >
                    They thrive in environments where they can focus on
                    precision and quality.
                </li>
                <li>
                    <span class="font-bold">Autonomy:</span> They appreciate
                    having the freedom to make decisions and lead initiatives.
                </li>
            </ul>

            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-svg-images/Page 12 newb.svg'"
                            alt=""
                        />
                    </div>
                </div>
                <div class="col-6">
                    <h2 class="text-3xl font-bold mb-4 mt-6">
                        Tips for Parents and Teachers:
                    </h2>
                    <ul class="list-none pl-6  mt-2 space-y-2">
                        <li>
                            <span class="font-bold"
                                >Create Structured Environments:</span
                            >
                            Provide clear guidelines and expectations to help
                            your child understand their goals.
                        </li>
                        <li>
                            <span class="font-bold"
                                >Encourage Detailed Projects:</span
                            >
                            Involve them in tasks that require attention to
                            detail and thoroughness.
                        </li>
                        <li>
                            <span class="font-bold">Allow Autonomy:</span> Give
                            your child opportunities to make decisions and take
                            responsibility for their actions.
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Stress Management -->

            <h2 class="text-3xl font-bold mb-4 mt-8 mb-6">
                Stress Management
            </h2>
            <p>
                <strong>
                    How {{ childName }} Handles Stress:

                </strong>
            </p>
            <p class=" mb-4">
                Children with a Dominant-Cautious (DC) style can become stressed
                when they feel overwhelmed by too many tasks or when they
                perceive their efforts are not meeting high standards. They may
                also experience stress when they are in environments lacking
                structure or clear expectations. Here are some signs of stress
                and ways to help:
            </p>

            <ul class="list-none pl-6  mt-2 space-y-2">
                <li>
                    <span class="font-bold">Signs of Stress:</span> Overwhelm,
                    frustration, and becoming overly critical of themselves or
                    others.
                </li>
                <li>
                    <span class="font-bold">Stress Triggers:</span> Having too
                    many tasks at once, feeling their work is not perfect, and
                    chaotic environments.
                </li>
                <li>
                    <span class="font-bold">Coping Strategies:</span> Creating a
                    structured plan to manage tasks, providing opportunities for
                    them to take control, and allowing time for detailed,
                    focused work.
                </li>
            </ul>

            <h2 class="text-3xl font-bold mb-4 mt-6">
                Tips for Parents and Teachers:
            </h2>
            <ul class="list-none pl-6  mt-2 space-y-2">
                <li>
                    <span class="font-bold">Encourage Breaks:</span> Ensure
                    {{ childName }} takes regular breaks during tasks to avoid
                    feeling overwhelmed.
                </li>
                <li>
                    <span class="font-bold">Provide Reassurance:</span> Offer
                    positive reinforcement and reassure them that their efforts
                    are valued and appreciated.
                </li>
                <li>
                    <span class="font-bold">Create a Structured Plan:</span>
                    Help them develop a plan that breaks tasks into smaller,
                    manageable steps to maintain focus and reduce stress.
                </li>
            </ul>
        </div>
    </div>

    <!-- For DI Style Type -->
    <div id="DI" v-if="style == 'DI'">
        <div class="p-6 space-y-6">
            <!-- Social Interactions -->
            <div>
                <h2 class="text-3xl font-bold mb-4">
                    Social Interactions
                </h2>
                <p class="">
                    <strong>How {{ childName }} Interacts with Others:</strong>
                </p>
                <p>
                    Children with a Dominant-Influential (DI) style are natural
                    leaders who enjoy being around others. They thrive in social
                    settings where they can interact and communicate. Here are
                    some key points about how your child interacts with others:
                </p>
                <ul class="list-none pl-6  space-y-2">
                    <li>
                        <strong>Leader in Group Settings:</strong>
                        {{ childName }} often takes the lead in group activities
                        and enjoys organising things.
                    </li>
                    <li>
                        <strong>Outgoing and Sociable:</strong> They are good at
                        making new friends and love to talk and share ideas with
                        others.
                    </li>
                    <li>
                        <strong>Persuasive:</strong> They can be very convincing
                        and often persuade others to follow their lead.
                    </li>
                </ul>
            </div>

            <!-- Tips for Social Interactions -->
            <div>
                <h2 class="text-3xl font-bold mb-4">
                    Tips for Parents and Teachers:
                </h2>
                <div class="row">
                    <div class="col-6">
                        <ul class="list-none pl-6  space-y-2">
                            <li>
                                <strong>Encourage Inclusive Leadership:</strong>
                                Help {{ childName }} learn to include others in
                                decision-making processes and value their input.
                            </li>
                            <li>
                                <strong>Promote Social Opportunities:</strong>
                                Provide plenty of opportunities for them to
                                engage in social activities, both structured and
                                unstructured.
                            </li>
                            <li>
                                <strong>Promote Empathy:</strong> Teach them to
                                consider others' feelings and perspectives,
                                nurturing a more collaborative environment.
                            </li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-96 h-auto object-contain"
                                :src="'/images/reports-svg-images/Page13b.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                </div>
            </div>

            <!-- Preferred Environment -->
            <div>
                <h2 class="text-3xl font-bold mb-4">
                    Preferred Environment
                </h2>
                <p class="">
                    <strong>Where {{ childName }} Thrives Best: </strong> <br><br> Children with a
                    Dominant-Influential (DI) style perform best in environments
                    where they can interact with others and take the lead. They
                    enjoy settings that allow them to be active and social. Here
                    are some ideal environmental factors for your child:
                </p>
                <ul class="list-none pl-6  space-y-2">
                    <li>
                        <strong>Interactive Settings:</strong> Environments that
                        encourage social interaction and communication help them
                        thrive.
                    </li>
                    <li>
                        <strong>Opportunities for Leadership:</strong> They do
                        well in settings where they can take on leadership roles
                        and responsibilities.
                    </li>
                    <li>
                        <strong>Dynamic and Engaging Activities:</strong>
                        Activities that are varied and engaging keep their
                        interest and energy levels high.
                    </li>
                </ul>
            </div>

            <!-- Tips for Creating Preferred Environment -->
            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-svg-images/Page 12 newb.svg'"
                            alt=""
                        />
                    </div>
                </div>
                <div class="col-6">
                    <h2 class="text-3xl font-bold mb-4">
                        Tips for Parents and Teachers:
                    </h2>
                    <ul class="list-none pl-6  space-y-2">
                        <li>
                            <strong>Create Interactive Environments:</strong>
                            Set up activities and spaces that promote
                            interaction and teamwork.
                        </li>
                        <li>
                            <strong>Provide Leadership Opportunities:</strong>
                            Give them chances to lead in various settings, such
                            as school projects, sports teams, or family
                            activities.
                        </li>
                        <li>
                            <strong>Offer Varied Activities:</strong> Ensure
                            they have access to a range of activities that keep
                            them engaged and stimulated.
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Stress Management -->
            <div>
                <h2 class="text-3xl font-bold mb-4">
                    Stress Management
                </h2>
                <p>
                    <strong>
                        How {{ childName }} Handles Stress:
                    </strong>
                </p>
                <p class="">
                    Children with a
                    Dominant-Influential (DI) style can become stressed when
                    they feel their leadership is challenged or when they are in
                    environments that limit their social interactions. Here are
                    some signs of stress and ways to help:
                </p>
                <ul class="list-none pl-6  space-y-2">
                    <li>
                        <strong>Signs of Stress:</strong> Frustration,
                        restlessness, and a strong desire to take control of
                        situations.
                    </li>
                    <li>
                        <strong>Stress Triggers:</strong> Being in environments
                        where their leadership is not recognised or where social
                        interaction is limited.
                    </li>
                    <li>
                        <strong>Coping Strategies:</strong> Engaging in physical
                        activities, having open communication, and providing
                        opportunities for social interaction.
                    </li>
                </ul>
            </div>

            <!-- Tips for Stress Management -->
            <div>
                <h2 class="text-3xl font-bold mb-4">
                    Tips for Parents and Teachers:
                </h2>
                <ul class="list-none pl-6  space-y-2">
                    <li>
                        <strong>Provide Physical Outlets:</strong> Ensure they
                        have opportunities for physical activity to help manage
                        stress.
                    </li>
                    <li>
                        <strong>Support Open Dialogue:</strong> Create an
                        environment where they feel comfortable sharing their
                        thoughts and feelings.
                    </li>
                    <li>
                        <strong>Encourage Balance:</strong> Teach them how to
                        manage their time effectively and not take on too much
                        at once.
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- For I Style Type -->
    <div id="I" v-if="style == 'I'">
        <div class="space-y-6">
            <!-- Social Interactions -->
            <div class="space-y-4">
                <h2 class="text-3xl font-bold mb-2 ">Social Interactions</h2>
                <p><strong>How {{  childName }} Interacts with Others:
                </strong></p>
                <p class="text-base">
                    Children with an Influential (I) style are natural
                    communicators. They tend to be the life of the party and
                    enjoy being in the company of others. They are often
                    confident in social settings and can easily make friends.
                    Here are some key points about how your child interacts with
                    others:
                </p>
                <ul class="list-none pl-6 space-y-2">
                    <li>
                        <strong>Outgoing:</strong> {{ childName }} loves to meet
                        new people and is often the first to introduce
                        themselves.
                    </li>
                    <li>
                        <strong>Expressive:</strong> They are very expressive
                        with their emotions and enjoy sharing their thoughts and
                        feelings with others.
                    </li>
                    <li>
                        <strong>Inclusive:</strong> They like to include others
                        in activities and are often the ones to bring people
                        together.
                    </li>
                </ul>
                <h4 class="text-3xl font-bold mb-4">
                    Tips for Parents and Teachers:
                </h4>
                <div class="row">
                    <div class="col-6">
                        <ul class="list-none space-y-2">
                            <li>
                                <strong>Encourage Social Activities:</strong>
                                Provide opportunities for {{ childName }} to
                                participate in group activities, clubs, and
                                social events.
                            </li>
                            <li>
                                <strong>Teach Active Listening:</strong> Help
                                them develop good listening skills by practising
                                active listening at home and in the classroom.
                            </li>
                            <li>
                                <strong>Promote Empathy:</strong> Encourage them
                                to consider others' feelings and viewpoints to
                                promote a more inclusive and empathetic
                                attitude.
                            </li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-96 h-auto object-contain"
                                :src="'/images/reports-svg-images/Page13b.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                </div>
            </div>

            <!-- Preferred Environment -->
            <div class="space-y-4">
                <h2 class="text-3xl font-bold mb-2 ">Preferred Environment</h2>
                <p><strong>Where {{ childName }} Thrives Best:
                </strong></p>
                <p class="text-base">
                    Children with an Influential (I) style perform best in
                    environments that are dynamic and interactive. They enjoy
                    settings that allow them to socialise and express
                    themselves. Here are some ideal environmental factors for
                    your child:
                </p>
                <ul class="list-none pl-6 space-y-2">
                    <li>
                        <strong>Social Settings:</strong> They thrive in
                        environments where they can interact with others, such
                        as group projects or team sports.
                    </li>
                    <li>
                        <strong>Creative Spaces:</strong> They enjoy spaces that
                        allow for creativity and self-expression, such as art
                        classes or drama clubs.
                    </li>
                    <li>
                        <strong>Flexible Structure:</strong> While they need
                        some structure, they also appreciate environments that
                        offer flexibility and spontaneity.
                    </li>
                </ul>
                <div class="row">
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-96 h-auto object-contain"
                                :src="'/images/reports-svg-images/Page 12 newb.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="col-6">
                        <h4 class="text-3xl font-bold mb-4">
                            Tips for Parents and Teachers:
                        </h4>
                        <ul class="list-none space-y-2">
                            <li>
                                <strong
                                    >Create Interactive Environments:</strong
                                >
                                Provide opportunities for social interaction and
                                group work in both school and home settings.
                            </li>
                            <li>
                                <strong>Encourage Creative Expression:</strong>
                                Involve your child in activities that allow them
                                to express their creativity, such as art, music,
                                or drama.
                            </li>
                            <li>
                                <strong>Maintain a Balanced Routine:</strong>
                                Offer a balance between structured activities
                                and free time to keep them engaged and
                                motivated.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Stress Management -->
            <div class="space-y-4">
                <h2 class="text-3xl font-bold mb-2 ">Stress Management</h2>
                <p><strong>How {{ childName }} Handles Stress:
                </strong></p>
                <p class="text-base">
                    Children with an Influential (I) style can become stressed
                    when they feel isolated or when their social interactions
                    are limited. They may also experience stress when they are
                    not able to express themselves or when they feel
                    misunderstood. Here are some signs of stress and ways to
                    help:
                </p>
                <ul class="list-none pl-6 space-y-2">
                    <li>
                        <strong>Signs of Stress:</strong> Withdrawal, mood
                        swings, and a decrease in their usual enthusiasm.
                    </li>
                    <li>
                        <strong>Stress Triggers:</strong> Lack of social
                        interaction, feeling ignored, and restrictive
                        environments.
                    </li>
                    <li>
                        <strong>Coping Strategies:</strong> Providing
                        opportunities for social interaction, encouraging
                        creative outlets, and ensuring they feel heard and
                        understood.
                    </li>
                </ul>
                <h4 class="text-3xl font-bold mb-4">
                    Tips for Parents and Teachers:
                </h4>
                <ul class="list-none space-y-2">
                    <li>
                        <strong>Encourage Social Interaction:</strong> Make sure
                        they have regular opportunities to interact with friends
                        and peers.
                    </li>
                    <li>
                        <strong>Provide Creative Outlets:</strong> Offer
                        activities that allow them to express their emotions and
                        creativity.
                    </li>
                    <li>
                        <strong>Communicate Openly:</strong> Keep lines of
                        communication open and encourage them to talk about
                        their feelings and concerns.
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- For ID Style Type -->
    <div id="ID" v-if="style == 'ID'">
        <div class="mt-6">
            <h2 class="text-3xl font-bold mb-4 ">
                Social Interactions
            </h2>
            <p class="text-base  mt-2">
                <b>How {{ childName }} Interacts with Others:</b>
            </p>
            <p class="text-base  mt-2">
                Children with an Influential-Dominant (ID) style are natural
                leaders who thrive in social settings. They enjoy inspiring and
                motivating others and are often the ones who take charge in
                group activities. Here are some key points about how your child
                interacts with others:
            </p>
            <ul class="list-none pl-5  mt-2 space-y-4">
                <li>
                    <span class="font-semibold">Friendly and Outgoing:</span>
                    {{ childName }} makes friends easily and enjoys being around
                    people.
                </li>
                <li>
                    <span class="font-semibold"
                        >Encouraging and Motivating:</span
                    >
                    They love to cheer on their friends and encourage them to do
                    their best.
                </li>
                <li>
                    <span class="font-semibold">Leader:</span> They naturally
                    take the lead in group activities and enjoy organising games
                    and projects.
                </li>
            </ul>
        </div>

        <div class="mt-6">
            <h2 class="text-3xl font-bold mb-4 ">
                Tips for Parents and Teachers:
            </h2>
            <div class="row">
                <div class="col-6">
                    <ul class="list-none pl-5  mt-2">
                        <li>
                            <span class="font-semibold"
                                >Encourage Group Activities:</span
                            >
                            Involve {{ childName }} in group activities where
                            they can interact with others and use their
                            leadership skills.
                        </li>
                        <li>
                            <span class="font-semibold"
                                >Promote Inclusive Play:</span
                            >
                            Teach them to include everyone in activities and
                            games, building a sense of community and teamwork.
                        </li>
                        <li>
                            <span class="font-semibold"
                                >Support Leadership Opportunities:</span
                            >
                            Provide chances for {{ childName }} to take on
                            leadership roles in group settings, helping them
                            build confidence and leadership skills.
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-svg-images/Page13b.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6">
            <h2 class="text-3xl font-bold mb-4 ">
                Preferred Environment
            </h2>
            <p class="text-base  mt-2">
                <strong>Where {{ childName }} Thrives Best:</strong>
            </p>
            <p class="text-base  mt-2">
                Children with an Influential-Dominant (ID) style perform best in
                environments where they can interact with others and take on
                leadership roles. They enjoy settings that are lively and
                collaborative. Here are some ideal environmental factors for
                your child:
            </p>
            <ul class="list-none pl-5  mt-2">
                <li>
                    <span class="font-semibold">Interactive Settings:</span>
                    Environments where they can engage with others and
                    participate in group activities.
                </li>
                <li>
                    <span class="font-semibold">Leadership Opportunities:</span>
                    Situations where they can take charge and lead others.
                </li>
                <li>
                    <span class="font-semibold">Supportive Atmosphere:</span> A
                    nurturing and inclusive environment where they feel valued
                    and supported.
                </li>
            </ul>
        </div>

        <div class="mt-6">
            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-svg-images/Page 12 newb.svg'"
                            alt=""
                        />
                    </div>
                </div>

                <div class="col-6">
                    <h2 class="text-3xl font-bold mb-4 ">
                        Tips for Parents and Teachers:
                    </h2>
                    <ul class="list-none pl-5  mt-2">
                        <li>
                            <span class="font-semibold"
                                >Create Interactive Learning Experiences:</span
                            >
                            Use group projects and interactive activities to
                            keep {{ childName }} engaged and motivated.
                        </li>
                        <li>
                            <span class="font-semibold"
                                >Provide Leadership Opportunities:</span
                            >
                            Encourage {{ childName }} to take on leadership
                            roles in activities and projects.
                        </li>
                        <li>
                            <span class="font-semibold"
                                >Ensure a Supportive Environment:</span
                            >
                            Make sure that the environment is welcoming and
                            supportive, where {{ childName }} feels safe to
                            express themselves.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="mt-6">
            <h2 class="text-3xl font-bold mb-4 ">
                Stress Management
            </h2>
            <p class="text-base  mt-2">
                <strong>How {{ childName }} Handles Stress:</strong>
            </p>
            <p class="text-base  mt-2">
                Children with an Influential-Dominant (ID) style may become
                stressed when they feel their leadership is challenged or when
                they are not able to express their ideas. They may also feel
                overwhelmed if they have too many tasks at once. Here are some
                signs of stress and ways to help:
            </p>
            <ul class="list-none pl-5  mt-2">
                <li>
                    <span class="font-semibold">Signs of Stress:</span>
                    Frustration, impatience, and difficulty focusing.
                </li>
                <li>
                    <span class="font-semibold">Stress Triggers:</span> Feeling
                    excluded, having their ideas dismissed, and managing
                    multiple responsibilities.
                </li>
                <li>
                    <span class="font-semibold">Coping Strategies:</span> Engage
                    {{ childName }} in activities where they can lead and make
                    decisions, provide a calm environment for relaxation, and
                    teach stress management techniques like deep breathing
                    exercises.
                </li>
            </ul>
        </div>

        <div class="mt-6">
            <h2 class="text-3xl font-bold mb-4 ">
                Tips for Parents and Teachers:
            </h2>
            <ul class="list-none pl-5  mt-2">
                <li>
                    <span class="font-semibold"
                        >Encourage Leadership Roles:</span
                    >
                    Provide opportunities for {{ childName }} to take on
                    leadership roles in activities and projects.
                </li>
                <li>
                    <span class="font-semibold">Create a Relaxing Space:</span>
                    Ensure there is a quiet and comfortable area where they can
                    retreat and relax when feeling overwhelmed.
                </li>
                <li>
                    <span class="font-semibold"
                        >Teach Stress Management Skills:</span
                    >
                    Guide them in practising stress management techniques and
                    maintaining a positive attitude.
                </li>
            </ul>
        </div>
    </div>

    <!-- For IS Style Type -->
    <div id="IS" v-if="style == 'IS'">
        <div>
            <h2 class="text-3xl font-semibold">Social Interactions</h2>
            <p class="text-md mt-2">
                <strong>
                How {{ childName }} Interacts with Others:

                </strong>
            </p>
            <p class="text-md mt-2">
                Children with an Influential-Supportive (IS) style are natural
                communicators who enjoy being around people and helping others.
                They thrive in social settings and are often the ones who bring
                everyone together. Here are some key points about how your child
                interacts with others:
            </p>

            <ul class="list-none pl-5 mt-2">
                <li>
                    <strong>Friendly and Outgoing:</strong>
                    {{ childName }} makes friends easily and enjoys being around
                    people.
                </li>
                <li>
                    <strong>Encouraging and Supportive:</strong> They love to
                    cheer on their friends and make sure everyone feels
                    included.
                </li>
                <li>
                    <strong>Team Player:</strong> They enjoy working with others
                    and are good at sharing and taking turns.
                </li>
            </ul>

            <h4 class="text-md font-semibold mt-4">
                Tips for Parents and Teachers:
            </h4>
            <div class="row">
                <div class="col-6">
                    <ul class="list-none pl-5 mt-2">
                        <li>
                            <strong>Encourage Group Activities:</strong> Involve
                            {{ childName }} in group activities where they can
                            interact with others and use their social skills.
                        </li>
                        <li>
                            <strong>Promote Inclusive Play:</strong> Teach them
                            to include everyone in activities and games,
                            promoting a sense of community and teamwork.
                        </li>
                        <li>
                            <strong>Support Leadership Opportunities:</strong>
                            Provide chances for {{ childName }} to take on
                            leadership roles in group settings, helping them
                            build confidence and leadership skills.
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-svg-images/Page13b.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>

            <h2 class="text-3xl font-semibold mt-6">Preferred Environment</h2>
            <p class="text-md mt-2">
                <strong>
                    Where {{ childName }} Thrives Best:
                </strong>
            </p>
            <p class="text-md mt-2">
                Children with an Influential-Supportive (IS) style perform best
                in environments where they can interact with others and express
                their creativity. They enjoy settings that are lively and
                collaborative. Here are some ideal environmental factors for
                your child:
            </p>

            <ul class="list-none pl-5 mt-2">
                <li>
                    <strong>Interactive Settings:</strong> Environments where
                    they can engage with others and participate in group
                    activities.
                </li>
                <li>
                    <strong>Creative Outlets:</strong> Opportunities for
                    creative expression, such as art, music, or drama.
                </li>
                <li>
                    <strong>Supportive Atmosphere:</strong> A nurturing and
                    inclusive environment where they feel valued and supported.
                </li>
            </ul>

            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-svg-images/Page 12 newb.svg'"
                            alt=""
                        />
                    </div>
                </div>
                <div class="col-6">
                    <h4 class="text-md font-semibold mt-4">
                        Tips for Parents and Teachers:
                    </h4>
                    <ul class="list-none pl-5 mt-2">
                        <li>
                            <strong
                                >Create Interactive Learning
                                Experiences:</strong
                            >
                            Use group projects and interactive activities to
                            keep {{ childName }} engaged and motivated.
                        </li>
                        <li>
                            <strong>Provide Creative Opportunities:</strong>
                            Encourage {{ childName }} to participate in
                            activities that allow them to express their
                            creativity.
                        </li>
                        <li>
                            <strong>Ensure a Supportive Environment:</strong>
                            Make sure that the environment is welcoming and
                            supportive, where {{ childName }} feels safe to
                            express themselves.
                        </li>
                    </ul>
                </div>
            </div>

            <h2 class="text-3xl font-semibold mt-6">Stress Management</h2>
            <p class="text-md mt-2">
                <strong>
                    How {{ childName }} Handles Stress:
                </strong>
            </p>
            <p class="text-md mt-2">
                Children with an Influential-Supportive (IS) style may become
                stressed when they feel excluded or when there is conflict in
                their social groups. They may also feel overwhelmed if they have
                too many tasks at once. Here are some signs of stress and ways
                to help:
            </p>

            <ul class="list-none pl-5 mt-2">
                <li>
                    <strong>Signs of Stress:</strong> Withdrawal, increased
                    sensitivity, and difficulty concentrating.
                </li>
                <li>
                    <strong>Stress Triggers:</strong> Feeling left out,
                    conflicts with friends, and having too many
                    responsibilities.
                </li>
                <li>
                    <strong>Coping Strategies:</strong> Encourage
                    {{ childName }} to spend time with friends and participate
                    in social activities to help them feel connected. Create a
                    peaceful space at home where they can relax and unwind. Help
                    them develop skills to resolve conflicts calmly and
                    effectively.
                </li>
            </ul>

            <h4 class="text-md font-semibold mt-4">
                Tips for Parents and Teachers:
            </h4>
            <ul class="list-none pl-5 mt-2">
                <li>
                    <strong>Encourage Social Interaction:</strong> Ensure
                    {{ childName }} has plenty of opportunities to socialise and
                    feel included.
                </li>
                <li>
                    <strong>Create a Relaxing Space:</strong> Provide a quiet
                    and comfortable area where they can retreat and relax when
                    feeling overwhelmed.
                </li>
                <li>
                    <strong>Teach Conflict Resolution Skills:</strong> Guide
                    them in resolving conflicts peacefully and maintaining
                    positive relationships with their peers.
                </li>
            </ul>
        </div>
    </div>

    <!-- For S Style Type -->
    <div id="S" v-if="style == 'S'">
        <div class="space-y-6">
            <section>
                <h2 class="mt-4 font-semibold">Social Interactions</h2>
                <p class="mt-2"><strong>How {{ childName }} Interacts with Others:</strong></p>
                <p>
                    Children with a Supportive (S) style are natural caregivers
                    and peacemakers. They are often the ones who help others
                    feel comfortable and included. They thrive in environments
                    where cooperation and harmony are valued. Here are some key
                    points about how your child interacts with others:
                </p>
                <ul class="list-none pl-6 space-y-4">
                    <li>
                        <strong>Inclusive:</strong> {{ childName }} makes sure
                        everyone is included and feels part of the group.
                    </li>
                    <li>
                        <strong>Supportive:</strong> They are always willing to
                        lend a helping hand and support their friends.
                    </li>
                    <li>
                        <strong>Patient:</strong> They listen patiently and take
                        the time to understand others’ needs and feelings.
                    </li>
                </ul>
                <h2 class="mt-4 font-medium">Tips for Parents and Teachers:</h2>
                <div class="row">
                    <div class="col-6">
                        <ul class="list-none pl-6 space-y-4">
                            <li>
                                <strong>Encourage Group Activities:</strong> Provide
                                opportunities for {{ childName }} to participate
                                in group activities where they can help and
                                support others.
                            </li>
                            <li>
                                <strong>Promote Open Communication:</strong>  Encourage them to
                                share their thoughts and feelings with friends
                                and family.
                            </li>
                            <li>
                                <strong>Teach Empathy:</strong> Reinforce their natural empathy
                                by discussing different perspectives and
                                emotions.
                            </li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-96 h-auto object-contain"
                                :src="'/images/reports-svg-images/Page13b.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <h2 class="mt-2 font-semibold">Preferred Environment</h2>
                <p><strong>Where {{ childName }} Thrives Best:</strong></p>
                <p>
                    Children with a Supportive (S) style perform best in
                    environments that are stable, cooperative, and free from
                    conflict. They enjoy settings where they can work together
                    with others and feel valued for their contributions. Here
                    are some ideal environmental factors for your child:
                </p>
                <ul class="list-none pl-6 space-y-4">
                    <li>
                        <strong>Stable Settings:</strong> Consistent routines
                        and predictable environments help them feel secure and
                        focused.
                    </li>
                    <li>
                        <strong>Collaborative Spaces:</strong> They thrive in
                        spaces that encourage teamwork and cooperation.
                    </li>
                    <li>
                        <strong>Calm Atmospheres:</strong> Environments that
                        minimise stress and conflict allow them to perform their
                        best.
                    </li>
                </ul>
                <div class="row">
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-96 h-auto object-contain"
                                :src="'/images/reports-svg-images/Page 12 newb.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="col-6">
                        <h2 class="mt-4 font-medium">
                            Tips for Parents and Teachers:
                        </h2>
                        <ul class="list-none pl-6 space-y-4">
                            <li>
                                <strong>Maintain Consistency:</strong> Keep a regular routine to
                                provide a sense of stability.
                            </li>
                            <li>
                                <strong>Promote Teamwork:</strong> Encourage participation in
                                team activities and collaborative projects.
                            </li>
                            <li>
                                <strong>Create a Calm Environment:</strong> Minimise stress and
                                manage conflicts constructively to maintain a
                                peaceful atmosphere.
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <section>
                <h2 class="mt-4 font-semibold">Stress Management</h2>
                <p><strong>How {{ childName }} Handles Stress:</strong></p>
                <p>
                    Children with a Supportive (S) style can become stressed in
                    chaotic or conflict-ridden environments. They may also feel
                    stressed when they are unable to help or support others as
                    they wish. Here are some signs of stress and ways to help:
                </p>
                <ul class="list-none pl-6 space-y-4">
                    <li>
                        <strong>Signs of Stress:</strong> Withdrawal, quietness,
                        and increased sensitivity.
                    </li>
                    <li>
                        <strong>Stress Triggers:</strong> Conflict, chaos, and
                        feeling unable to help others.
                    </li>
                    <li>
                        <strong>Coping Strategies:</strong> Providing
                        reassurance, offering quiet time, and engaging in
                        relaxing activities.
                    </li>
                </ul>
                <h2 class="mt-4 font-medium">Tips for Parents and Teachers:</h2>
                <ul class="list-none pl-6 space-y-4">
                    <li>
                        <strong>Provide Reassurance:</strong> Offer comfort and reassurance when
                        they seem stressed.
                    </li>
                    <li>
                        <strong>Encourage Relaxation:</strong>  Engage them in calming activities
                        like reading, drawing, or nature walks.
                    </li>
                    <li>
                        <strong>Model Conflict Resolution:</strong> Show them how to handle
                        conflicts calmly and constructively.
                    </li>
                </ul>
            </section>
        </div>
    </div>

    <!-- For SC Style Type -->
    <div id="SC" v-if="style == 'SC'">
        <div class="p-6">
            <h2 class="text-3xl font-semibold mb-4">Social Interactions</h2>
            <p class="mb-6">
                <strong>
                    How {{ childName }} Interacts with Others:
                </strong>
            </p>
            <p class="mb-6">
                Children with a Supportive-Cautious (SC) style are naturally
                thoughtful and reliable. They enjoy helping others and making
                sure everyone feels considered and respected. Here are some key
                points about how your child interacts with others:
            </p>
            <ul class="list-none pl-5 mb-6">
                <li>
                    <strong>Considerate and Thoughtful:</strong>
                    {{ childName }} always thinks about how their actions affect
                    others and strives to make sure everyone is happy.
                </li>
                <li>
                    <strong>Reliable and Trustworthy:</strong> They are
                    dependable and can be counted on to do what they say they
                    will do, making them a trusted friend.
                </li>
                <li>
                    <strong>Supportive:</strong> They enjoy helping friends with
                    their tasks and making sure everyone feels included and
                    supported.
                </li>
            </ul>

            <h2 class="text-3xl font-bold mb-4">
                Tips for Parents and Teachers:
            </h2>
            <div class="row">
                <div class="col-6">
                    <ul class="list-none pl-5 mb-6">
                        <li>
                            <strong>Encourage Group Activities:</strong> Involve
                            {{ childName }} in group activities where they can
                            interact with others and use their supportive
                            nature.
                        </li>
                        <li>
                            <strong>Promote Inclusive Play:</strong> Teach them
                            to include everyone in activities and games,
                            building a sense of community and teamwork.
                        </li>
                        <li>
                            <strong>Support Leadership Opportunities:</strong>
                            Provide chances for {{ childName }} to take on
                            supportive leadership roles in group settings,
                            helping them build confidence and leadership skills.
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-svg-images/Page13b.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>

            <h2 class="text-3xl font-semibold mb-4">Preferred Environment</h2>
            <p class="mb-6">
                <strong>
                    Where {{ childName }} Thrives Best:
                </strong>
            </p>
            <p class="mb-6">
                Children with a Supportive-Cautious (SC) style perform best in
                environments where they can interact with others in a calm and
                predictable setting. They enjoy stable and organised
                environments where they know what to expect. Here are some ideal
                environmental factors for your child:
            </p>
            <ul class="list-none pl-5 mb-6">
                <li>
                    <strong>Stable Settings:</strong> Environments that are
                    predictable and have a consistent routine.
                </li>
                <li>
                    <strong>Calm Atmosphere:</strong> Situations that are not
                    chaotic and allow for thoughtful interaction.
                </li>
                <li>
                    <strong>Organised Spaces:</strong> Clean and orderly
                    environments where everything has its place.
                </li>
            </ul>

            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-svg-images/Page 12 newb.svg'"
                            alt=""
                        />
                    </div>
                </div>
                <div class="col-6">
                    <h2 class="text-3xl font-bold mb-4">
                        Tips for Parents and Teachers:
                    </h2>
                    <ul class="list-none pl-5 mb-6">
                        <li>
                            <strong>Create a Stable Routine:</strong> Provide a
                            consistent daily routine to help
                            {{ childName }} feel secure and focused.
                        </li>
                        <li>
                            <strong>Maintain a Calm Atmosphere:</strong> Ensure
                            the environment is calm and not overly stimulating,
                            allowing {{ childName }} to concentrate and thrive.
                        </li>
                        <li>
                            <strong>Organise Learning Spaces:</strong> Keep
                            {{ childName }} ’s learning and play spaces
                            organised and free of clutter.
                        </li>
                    </ul>
                </div>
            </div>

            <h2 class="text-3xl font-semibold mb-4">Stress Management</h2>
            <p class="mb-6">
                <strong>
                    How {{ childName }} Handles Stress:
                </strong>
            </p>
            <p class="mb-6">
                Children with a Supportive-Cautious (SC) style may become
                stressed when there is too much chaos or when they are put in
                unpredictable situations. They may also feel overwhelmed if they
                have too many tasks at once. Here are some signs of stress and
                ways to help:
            </p>
            <ul class="list-none pl-5 mb-6">
                <li>
                    <strong>Signs of Stress:</strong> Withdrawal, increased
                    sensitivity, and difficulty concentrating.
                </li>
                <li>
                    <strong>Stress Triggers:</strong> Chaotic environments,
                    sudden changes, and having too many responsibilities.
                </li>
                <li>
                    <strong>Coping Strategies:</strong> Encourage
                    {{ childName }} to spend time in quiet and calm
                    environments, engage in activities that they find soothing,
                    and practice stress management techniques like deep
                    breathing exercises.
                </li>
            </ul>

            <h2 class="text-3xl font-bold mb-4">
                Tips for Parents and Teachers:
            </h2>
            <ul class="list-none pl-5 mb-6">
                <li>
                    <strong>Provide a Calm Space:</strong> Ensure
                    {{ childName }} has access to a quiet and comfortable area
                    where they can retreat and relax when feeling overwhelmed.
                </li>
                <li>
                    <strong>Encourage Predictable Routines:</strong> Maintain a
                    consistent daily routine to provide a sense of stability and
                    security.
                </li>
                <li>
                    <strong>Teach Stress Management Skills:</strong> Guide them
                    in practising stress management techniques and maintaining a
                    positive attitude.
                </li>
            </ul>
        </div>
    </div>

    <!-- For SI Style Type -->
    <div id="SI" v-if="style == 'SI'">
        <div class="space-y-6">
            <h2 class="text-3xl font-bold mb-4">Social Interactions</h2>
            <p>
                <strong>
                    How {{ childName }} Interacts with Others:

                </strong>
            </p>
            <p class="text-base">
                Children with a Supportive-Influential (SI) style are natural
                helpers who thrive in social settings. They enjoy making sure
                everyone feels included and appreciated and are often the ones
                who bring people together. Here are some key points about how
                your child interacts with others:
            </p>

            <ul class="list-none pl-5 space-y-2">
                <li>
                    <strong>Friendly and Welcoming:</strong>
                    {{ childName }} makes friends easily and enjoys being around
                    people.
                </li>
                <li>
                    <strong>Encouraging and Supportive:</strong> They love to
                    cheer on their friends and make them feel good about
                    themselves.
                </li>
                <li>
                    <strong>Inclusive:</strong> They naturally make sure
                    everyone feels included in games and activities.
                </li>
            </ul>

            <h4 class="text-3xl font-bold mb-4">
                Tips for Parents and Teachers:
            </h4>
            <div class="row">
                <div class="col-6">
                    <ul class="list-none pl-5 space-y-2">
                        <li>
                            <strong>Encourage Group Activities:</strong> Involve
                            {{ childName }} in group activities where they can
                            interact with others and use their social skills.
                        </li>
                        <li>
                            <strong>Promote Inclusive Play:</strong> Teach them
                            to include everyone in activities and games,
                            building a sense of community and teamwork.
                        </li>
                        <li>
                            <strong>Support Leadership Opportunities:</strong>
                            Provide chances for {{ childName }} to take on
                            supportive leadership roles in group settings,
                            helping them build confidence and leadership skills.
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-svg-images/Page13b.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>

            <h2 class="text-3xl font-bold mb-4">Preferred Environment</h2>
            <p>
                <strong>
                    Where {{  childName  }} Thrives Best:

                </strong>
            </p>
            <p class="text-base">
                Children with a Supportive-Influential (SI) style perform best
                in environments where they can interact with others and help
                make everyone feel included. They enjoy settings that are
                collaborative and nurturing. Here are some ideal environmental
                factors for your child:
            </p>

            <ul class="list-none pl-5 space-y-2">
                <li>
                    <strong>Interactive Settings:</strong> Environments where
                    they can engage with others and participate in group
                    activities.
                </li>
                <li>
                    <strong>Collaborative Projects:</strong> Situations where
                    they can work together with others and help create a
                    positive, inclusive atmosphere.
                </li>
                <li>
                    <strong>Supportive Atmosphere:</strong> A nurturing and
                    inclusive environment where they feel valued and supported.
                </li>
            </ul>

            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-svg-images/Page 12 newb.svg'"
                            alt=""
                        />
                    </div>
                </div>
                <div class="col-6">
                    <h4 class="text-3xl font-bold mb-4">
                        Tips for Parents and Teachers:
                    </h4>
                    <ul class="list-none pl-5 space-y-2">
                        <li>
                            <strong
                                >Create Interactive Learning
                                Experiences:</strong
                            >
                            Use group projects and interactive activities to
                            keep {{ childName }} engaged and motivated.
                        </li>
                        <li>
                            <strong
                                >Provide Opportunities for
                                Collaboration:</strong
                            >
                            Encourage {{ childName }} to take part in
                            collaborative projects and activities.
                        </li>
                        <li>
                            <strong>Ensure a Supportive Environment:</strong>
                            Make sure that the environment is welcoming and
                            supportive, where {{ childName }} feels safe to
                            express themselves.
                        </li>
                    </ul>
                </div>
            </div>

            <h2 class="text-3xl font-bold mb-4">Stress Management</h2>
            <p>
                <strong>
                    How {{childName}} Handles Stress:

                </strong>

            </p>
            <p class="text-base">
                Children with a Supportive-Influential (SI) style may become
                stressed when they feel excluded or when there is conflict in
                their social groups. They may also feel overwhelmed if they have
                too many tasks at once. Here are some signs of stress and ways
                to help:
            </p>

            <ul class="list-none pl-5 space-y-2">
                <li>
                    <strong>Signs of Stress:</strong> Withdrawal, increased
                    sensitivity, and difficulty concentrating.
                </li>
                <li>
                    <strong>Stress Triggers:</strong> Feeling left out,
                    conflicts with friends, and having too many
                    responsibilities.
                </li>
                <li>
                    <strong>Coping Strategies:</strong> Encourage
                    {{ childName }} to spend time with friends and participate
                    in social activities, create a peaceful space at home for
                    relaxation, and teach stress management techniques like deep
                    breathing exercises.
                </li>
            </ul>

            <h4 class="text-3xl font-bold mb-4">
                Tips for Parents and Teachers:
            </h4>
            <ul class="list-none pl-5 space-y-2">
                <li>
                    <strong>Encourage Social Interaction:</strong> Ensure
                    {{ childName }} has plenty of opportunities to socialise and
                    feel included.
                </li>
                <li>
                    <strong>Create a Relaxing Space:</strong> Provide a quiet
                    and comfortable area where they can retreat and relax when
                    feeling overwhelmed.
                </li>
                <li>
                    <strong>Teach Stress Management Skills:</strong> Guide them
                    in practising stress management techniques and maintaining a
                    positive attitude.
                </li>
            </ul>
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

    h2{
        font-size: 1.5rem !important;
    }
    strong{
        font-size: 1rem !important;
    }

    h4{
        width: max-content;
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
div.col-6>h4.font-medium,
li>div>h4,
div.space-y-2>h4.font-medium {
    color: rgb(36, 168, 250);
    font-weight: bold;
    font-size: 19px;
}

div.col-6>h4.font-medium,
li>div>h4,
strong,span,b,
div.space-y-2>h4.font-medium {
    color: rgb(36, 168, 250);
    font-weight: bold;
    color: #fa25c4;
    /* margin-top: 17px; */
    /* font-size: 19px; */
}

h2,h4,
.p-6>.row>.col-6>h2 {
    color: rgb(55 48 163);
    font-weight: bold !important;
}
p, ul >li, .text-base {
    font-size: 1.125rem;
    line-height: 1.75rem;
}
ul > li {
    margin-top:13px;
}
</style>

<script>
import AssessmentTypes from "@/Layouts/AssessmentTypes.vue";

export default {
    name: "ChildStyle",
    layout: AssessmentTypes,
    props: {
        childName: String,
        style: String,
        image: String,
    },
};
</script>
