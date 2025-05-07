<template>
    <div class="p-6">
        <div class="p-6">
            <div v-if="style == 'C'" class="space-y-8">
                <!-- Parenting Tips Section -->
                <div class="rounded-lg">


                    <!-- Supportive (S) Parent with Cautious (C) Child -->

                    <div class="rounded-lg mb-6">
                        <div
                            class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                            style="border-radius: 50px"
                        ></div>
                        <h4
                            class="text-3xl font-semibold mt-6 mb-2 text-indigo-600"
                        >
                            If You Are a Supportive (S) Parent with a Cautious
                            (C) Child
                        </h4>
                        <div class="row">
                            <div class="col-6">
                                <div class="space-y-4 ml-3">
                                    <div>
                                        <strong
                                            >Creating a Stable
                                            Environment:</strong
                                        >
                                        <p>
                                            <strong>Tip : </strong>Provide a
                                            calm and stable environment where
                                            your child can thrive.
                                        </p>
                                        <p>
                                            <strong>Example : </strong>
                                            Maintain consistent routines and
                                            clear expectations to help your
                                            child feel secure and focused.
                                        </p>
                                    </div>
                                    <div>
                                        <strong
                                            >Encouraging Independence and
                                            Decision-Making:</strong
                                        >
                                        <p>
                                            <strong>Tip : </strong>While you
                                            naturally support and nurture,
                                            encourage your child to make
                                            independent decisions.
                                        </p>
                                        <p>
                                            <strong>Example : </strong>
                                            Allow them to take the lead on small
                                            projects or decisions, offering
                                            guidance as needed but giving them
                                            the responsibility.
                                        </p>
                                    </div>
                                    <div>
                                        <strong
                                            >Building Analytical Skills:
                                        </strong>
                                        <p>
                                            <strong>Tip : </strong> Engage in
                                            activities that challenge your
                                            child’s analytical abilities and
                                            critical thinking.
                                        </p>
                                        <p>
                                            <strong>Example : </strong> Work on
                                            puzzles or science experiments
                                            together, encouraging them to
                                            explore and solve problems.
                                        </p>
                                    </div>
                                    <div>
                                        <strong
                                            >Providing Detailed
                                            Feedback:</strong
                                        >
                                        <p>
                                            <strong>Tip : </strong>Offer
                                            constructive feedback that helps
                                            them understand areas for
                                            improvement.
                                        </p>
                                        <p>
                                            <strong>Example : </strong> When
                                            reviewing their work, highlight both
                                            their strengths and areas where they
                                            can improve, providing specific
                                            examples.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div
                                    class="flex justify-center items-center mb-4"
                                >
                                    <img
                                        class="w-64 h-auto object-contain"
                                        :src="'/images/reports-svg-images/Page31.svg'"
                                        alt=""
                                    />
                                </div>
                                <div
                                    class="flex justify-center items-center mb-4"
                                >
                                    <img
                                        class="w-64 h-auto object-contain"
                                        :src="'/images/reports-svg-images/Page31b.svg'"
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
                <div class="rounded-lg">


                    <!-- If Supportive (S) Parent with Cautious-Dominant (CD) Child -->
                    <div class="mb-8">
                        <div
                            class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                            style="border-radius: 50px"
                        ></div>
                        <h4
                            class="text-3xl font-semibold mt-6 mb-2 text-indigo-600"
                        >
                            If You Are a Supportive (S) Parent with a
                            Cautious-Dominant (CD) Child
                        </h4>

                        <div class="row">
                            <div class="col-6">
                                <div class="mb-4">
                                    <h4 class="font-semibold text-xl">
                                        Encouraging Independent Leadership
                                    </h4>
                                    <p>
                                        <strong>Tip : </strong>While you
                                        naturally provide support and nurturing,
                                        it's important to encourage your CD
                                        child to take on tasks independently.
                                    </p>
                                    <p>
                                        <strong>Example : </strong>Allow
                                        {{ childName }} to manage a small
                                        project on their own, like organising
                                        their school supplies or planning a
                                        family game night. Offer guidance when
                                        needed, but celebrate their independent
                                        efforts.
                                    </p>
                                </div>

                                <div class="mb-4">
                                    <h4 class="font-semibold text-xl">
                                        Creating a Structured Social Environment
                                    </h4>
                                    <p>
                                        <strong>Tip : </strong>Provide
                                        opportunities for your child to interact
                                        with peers in calm and predictable
                                        settings.
                                    </p>
                                    <p>
                                        <strong>Example : </strong>Arrange
                                        small, structured group activities such
                                        as a book club or a cooperative game
                                        night. This allows {{ childName }} to
                                        engage socially in a comfortable
                                        setting.
                                    </p>
                                </div>

                                <div class="mb-4">
                                    <h4 class="font-semibold text-xl">
                                        Providing Gentle Encouragement
                                    </h4>
                                    <p>
                                        <strong>Tip : </strong>Use gentle and
                                        consistent encouragement to motivate
                                        your child.
                                    </p>
                                    <p>
                                        <strong>Example : </strong>Regularly
                                        acknowledge and praise
                                        {{ childName }} for their efforts,
                                        whether it’s completing homework or
                                        helping around the house. This positive
                                        reinforcement helps them feel valued.
                                    </p>
                                </div>

                                <div class="mb-4">
                                    <h4 class="font-semibold text-xl">
                                        Teaching Relaxation Techniques
                                    </h4>
                                    <p>
                                        <strong>Tip : </strong>Equip your child
                                        with tools to manage stress effectively.
                                    </p>
                                    <p>
                                        <strong>Example : </strong>Practice
                                        relaxation techniques together, such as
                                        progressive muscle relaxation or guided
                                        imagery. Encourage {{ childName }} to
                                        use these techniques during stressful
                                        moments.
                                    </p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div
                                    class="flex justify-center items-center mb-4"
                                >
                                    <img
                                        class="w-64 h-auto object-contain"
                                        :src="'/images/reports-svg-images/Page31.svg'"
                                        alt=""
                                    />
                                </div>
                                <div
                                    class="flex justify-center items-center mb-4"
                                >
                                    <img
                                        class="w-64 h-auto object-contain"
                                        :src="'/images/reports-svg-images/Page31b.svg'"
                                        alt=""
                                    />
                                </div>
                                <div
                                    data-v-0132f395=""
                                    class="flex justify-center items-center"
                                >
                                    <img
                                        data-v-0132f395=""
                                        class="w-90 h-auto object-contain"
                                        src="/images/reports-svg-images/Page16.svg"
                                        alt=""
                                    />
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <!-- For CS Style Type -->
            <div v-if="style == 'CS'" class="space-y-8">
                <!-- Parenting Tips Section -->
                <div class="rounded-lg">


                    <!-- Supportive (S) Parent with Cautious (C) Child -->
                    <div class="rounded-lg mb-6">
                        <div
                            class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                            style="border-radius: 50px"
                        ></div>
                        <h4
                            class="text-3xl font-semibold mt-6 mb-2 text-indigo-600"
                        >
                            If You Are a Supportive (S) Parent with a
                            Cautious-Supportive (CS) Child
                        </h4>
                        <div class="row">
                            <div class="col-6">
                                <div class="space-y-4 ml-3">
                                    <div>
                                        <strong>
                                            Leveraging Your Supportive Nature:
                                        </strong>
                                        <p>
                                            <strong>Tip : </strong>
                                            Use your natural supportive style to
                                            create a nurturing environment where
                                            your child feels safe to express
                                            themselves.
                                        </p>
                                        <p>
                                            <strong>Example : </strong> Have
                                            regular check-ins with
                                            {{ childname }} to talk about their
                                            day and any concerns they may have.
                                            Your supportive approach helps them
                                            feel understood and valued.
                                        </p>
                                    </div>

                                    <div>
                                        <strong>
                                            Encouraging Careful Independence:
                                        </strong>
                                        <p>
                                            <strong>Tip : </strong>
                                            Encourage your CS child to take on
                                            tasks independently while providing
                                            supportive guidance.
                                        </p>
                                        <p>
                                            <strong>Example : </strong>
                                            Allow {{ childname }} to manage
                                            their school projects independently,
                                            offering help when asked. Celebrate
                                            their achievements to build
                                            confidence.
                                        </p>
                                    </div>

                                    <div>
                                        <strong>
                                            Creating a Structured Social
                                            Environment:
                                        </strong>
                                        <p>
                                            <strong>Tip : </strong>
                                            Provide opportunities for your child
                                            to interact with peers in calm and
                                            predictable settings.
                                        </p>
                                        <p>
                                            <strong>Example : </strong>
                                            Arrange small, structured group
                                            activities such as a book club or a
                                            cooperative game night. This allows
                                            {{ childname }} to engage socially
                                            in a comfortable setting.
                                        </p>
                                    </div>

                                    <div>
                                        <strong> Gentle Motivation: </strong>
                                        <p>
                                            <strong>Tip : </strong>
                                            Use gentle and consistent
                                            encouragement to motivate your
                                            child.
                                        </p>
                                        <p>
                                            <strong>Example : </strong>
                                            Regularly acknowledge and praise
                                            {{ childname }} for their efforts,
                                            whether it’s completing homework or
                                            helping around the house. This
                                            positive reinforcement helps them
                                            feel valued.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div
                                    class="flex justify-center items-center mb-4"
                                >
                                    <img
                                        class="w-64 h-auto object-contain"
                                        :src="'/images/reports-svg-images/Page31.svg'"
                                        alt=""
                                    />
                                </div>
                                <div
                                    class="flex justify-center items-center mb-4"
                                >
                                    <img
                                        class="w-64 h-auto object-contain"
                                        :src="'/images/reports-svg-images/Page31b.svg'"
                                        alt=""
                                    />
                                </div>
                                <div
                                    class="flex justify-center items-center mb-4"
                                >
                                    <img
                                        class="w-64 h-auto object-contain"
                                        :src="'/images/reports-svg-images/Page21.svg'"
                                        alt=""
                                    />
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <!-- For D Style Type -->
            <div id="D" v-if="style == 'D'">

                <ul class="space-y-4 ml-3">


                    <!-- S -->
                    <li class="  ">
                        <div
                            class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                            style="border-radius: 50px"
                        ></div>
                        <h4
                            class="text-center text-md font-semibold text-indigo-600"
                        >
                            If You Are a Supportive (S) Parent with a Dominant
                            (D) Child:
                        </h4>

                        <div class="row">
                            <div class="col-6">
                                <ul class="mt-2 list-none pl-5 space-y-2">
                                    <li>
                                        <b>Promoting Independence:</b>
                                        <br />
                                        <span class="font-medium">Tip : </span>
                                        While you are naturally supportive and
                                        nurturing, it’s important to encourage
                                        your D child to take on challenges and
                                        make decisions independently.
                                        <br /><span class="font-medium"
                                            >Example :
                                        </span>
                                        Allow your child to choose their own
                                        extracurricular activities and support
                                        them in pursuing their interests.
                                        Encourage them to solve problems on
                                        their own before stepping in to help.
                                    </li>
                                    <li>
                                        <b>Setting Boundaries:</b>
                                        <br />
                                        <span class="font-medium">Tip : </span>
                                        Clearly define rules and expectations to
                                        provide a structured environment.
                                        Consistent boundaries help your child
                                        understand what is expected of them and
                                        feel secure. <br /><span
                                            class="font-medium"
                                            >Example :
                                        </span>
                                        Establish a consistent bedtime routine
                                        with clear rules about screen time and
                                        bedtime activities. Stick to this
                                        routine to provide a sense of stability.
                                    </li>
                                    <li>
                                        <b>Encouraging Team Activities:</b>
                                        <br />
                                        <span class="font-medium">Tip : </span>
                                        Involve your child in activities that
                                        require teamwork and cooperation. This
                                        helps them develop social skills and
                                        learn to work well with others.
                                        <br /><span class="font-medium"
                                            >Example :
                                        </span>
                                        Enroll your child in team sports or
                                        group projects where they can
                                        collaborate with peers and practice
                                        their teamwork skills.
                                    </li>
                                    <li>
                                        <b>Building Confidence:</b>
                                        <br />
                                        <span class="font-medium">Tip : </span>
                                        Build your child’s confidence by
                                        providing positive reinforcement and
                                        celebrating their achievements.
                                        <br /><span class="font-medium"
                                            >Example :
                                        </span>
                                        Create a “Celebration Wall” where you
                                        display your child’s accomplishments,
                                        such as good grades, completed projects,
                                        and other milestones. Regularly
                                        acknowledge their efforts and successes.
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <div
                                    class="flex justify-center items-center mb-4"
                                >
                                    <img
                                        class="w-64 h-auto object-contain"
                                        :src="'/images/reports-svg-images/Page31.svg'"
                                        alt=""
                                    />
                                </div>
                                <div
                                    class="flex justify-center items-center mb-4"
                                >
                                    <img
                                        class="w-64 h-auto object-contain"
                                        :src="'/images/reports-svg-images/Page31b.svg'"
                                        alt=""
                                    />
                                </div>
                                <div
                                    class="flex justify-center items-center mb-4"
                                >
                                    <img
                                        class="w-64 h-auto object-contain"
                                        :src="'/images/reports-svg-images/Page21.svg'"
                                        alt=""
                                    />
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>

            <!-- For DC Style Type -->
            <div id="DC" v-if="style == 'DC'">
                <div class="space-y-6">




                    <!-- S -->
                    <div>
                        <div
                            class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                            style="border-radius: 50px"
                        ></div>
                        <h4
                            class="text-3xl font-semibold mt-6 mb-2 text-indigo-600"
                        >
                            If You Are a Supportive (S) Parent with a
                            Dominant-Cautious (DC) Child
                        </h4>
                        <div class="row">
                            <div class="col-6">
                                <h4 class="text-xl font-semibold">
                                    Encouraging Independence:
                                </h4>
                                <p>
                                    <strong>Tip : </strong> While you are
                                    naturally supportive and nurturing, it’s
                                    important to encourage your DC child to take
                                    on responsibilities and make decisions
                                    independently.
                                </p>
                                <p>
                                    <strong>Example : </strong> Allow your child
                                    to take the lead on organising their study
                                    schedule or managing their own chores.
                                    Praise their efforts and decision-making
                                    skills.
                                </p>

                                <h4 class="text-xl font-semibold">
                                    Reinforcing Structure with Flexibility:
                                </h4>
                                <p>
                                    <strong>Tip : </strong> Clearly define
                                    routines and expectations while allowing
                                    some flexibility for your child's
                                    decision-making process.
                                </p>
                                <p>
                                    <strong>Example : </strong> Set up a daily
                                    routine but let your child decide the order
                                    in which to complete their tasks. This
                                    provides structure while promoting their
                                    autonomy.
                                </p>

                                <h4 class="text-xl font-semibold">
                                    Supporting Analytical Skills:
                                </h4>
                                <p>
                                    <strong>Tip : </strong> Encourage activities
                                    that require detailed planning and critical
                                    thinking to enhance your child's analytical
                                    skills.
                                </p>
                                <p>
                                    <strong>Example : </strong> Engage your
                                    child in activities such as building models,
                                    conducting experiments, or solving puzzles
                                    that require careful thought and precision.
                                </p>

                                <h4 class="text-xl font-semibold">
                                    Nurturing Confidence in Leadership:
                                </h4>
                                <p>
                                    <strong>Tip : </strong> Provide
                                    opportunities for your child to lead
                                    projects and make decisions, reinforcing
                                    their natural leadership abilities.
                                </p>
                                <p>
                                    <strong>Example : </strong> Assign your
                                    child a leadership role in family
                                    activities, such as planning a weekend
                                    outing or organising a family event. Support
                                    their decisions and offer guidance when
                                    needed.
                                </p>
                            </div>
                            <div class="col-6">
                                <div
                                    class="flex justify-center items-center mb-4"
                                >
                                    <img
                                        class="w-64 h-auto object-contain"
                                        :src="'/images/reports-svg-images/Page31.svg'"
                                        alt=""
                                    />
                                </div>
                                <div
                                    class="flex justify-center items-center mb-4"
                                >
                                    <img
                                        class="w-64 h-auto object-contain"
                                        :src="'/images/reports-svg-images/Page31b.svg'"
                                        alt=""
                                    />
                                </div>
                                <div
                                    class="flex justify-center items-center mb-4"
                                >
                                    <img
                                        class="w-64 h-auto object-contain"
                                        :src="'/images/reports-svg-images/Page21.svg'"
                                        alt=""
                                    />
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- For DI Style Type -->
            <div id="DI" v-if="style == 'DI'">
                <div class="space-y-6 mt-4">



                    <!-- S -->
                    <div class="mt-6">
                        <div
                            class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                            style="border-radius: 50px"
                        ></div>
                        <h4 class="font-semibold text-indigo-600">
                            If You Are a Supportive (S) Parent with a
                            Dominant-Influential (DI) Child
                        </h4>
                        <div class="row">
                            <div class="col-6">
                                <div class="mt-4">
                                    <h4 class="text-xl font-semibold">
                                        Encouraging Initiative
                                    </h4>
                                    <p class="">
                                        <strong>Tip : </strong>While you are
                                        naturally supportive and nurturing, it’s
                                        important to encourage your DI child to
                                        take on challenges and make decisions
                                        independently.
                                    </p>
                                    <p class="mt-2">
                                        <strong>Example : </strong>Allow your
                                        child to choose their own
                                        extracurricular activities and support
                                        them in pursuing their interests.
                                        Encourage them to take the lead in
                                        planning family activities or projects.
                                    </p>
                                </div>

                                <div class="mt-4">
                                    <h4 class="text-xl font-semibold">
                                        Balancing Nurturing with Encouragement
                                    </h4>
                                    <p class="">
                                        <strong>Tip : </strong>Provide a
                                        nurturing environment while also
                                        encouraging your child to step out of
                                        their comfort zone and try new things.
                                    </p>
                                    <p class="mt-2">
                                        <strong>Example : </strong>Praise your
                                        child’s efforts and achievements, and
                                        gently push them to take on new
                                        challenges, such as trying a new sport
                                        or joining a new club.
                                    </p>
                                </div>

                                <div class="mt-4">
                                    <h4 class="text-xl font-semibold">
                                        Promoting Social Interaction
                                    </h4>
                                    <p class="">
                                        <strong>Tip : </strong>Involve your
                                        child in social activities that require
                                        teamwork and cooperation. This helps
                                        them develop social skills and learn to
                                        work well with others.
                                    </p>
                                    <p class="mt-2">
                                        <strong>Example : </strong>Encourage
                                        your child to join clubs, sports teams,
                                        or group projects where they can
                                        interact with peers and practice their
                                        teamwork skills.
                                    </p>
                                </div>

                                <div class="mt-4">
                                    <h4 class="text-xl font-semibold">
                                        Building Confidence Through Positive
                                        Reinforcement
                                    </h4>
                                    <p class="">
                                        <strong>Tip : </strong>Provide positive
                                        reinforcement and celebrate your child’s
                                        achievements to build their confidence.
                                    </p>
                                    <p class="mt-2">
                                        <strong>Example : </strong>Create a
                                        “Success Board” where you display your
                                        child’s accomplishments, such as good
                                        grades, completed projects, and other
                                        milestones. Regularly acknowledge their
                                        efforts and successes.
                                    </p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div
                                    class="flex justify-center items-center mb-4"
                                >
                                    <img
                                        class="w-64 h-auto object-contain"
                                        :src="'/images/reports-svg-images/Page31.svg'"
                                        alt=""
                                    />
                                </div>
                                <div
                                    class="flex justify-center items-center mb-4"
                                >
                                    <img
                                        class="w-64 h-auto object-contain"
                                        :src="'/images/reports-svg-images/Page31b.svg'"
                                        alt=""
                                    />
                                </div>
                                <div
                                    class="flex justify-center items-center mb-4"
                                >
                                    <img
                                        class="w-64 h-auto object-contain"
                                        :src="'/images/reports-svg-images/Page21.svg'"
                                        alt=""
                                    />
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <!-- For I Style Type -->
            <div id="I" v-if="style == 'I'">
                <div class="space-y-6">

                    <div class="space-y-4 ml-3">


                        <!-- S -->
                        <div class="pl-4">
                            <div
                                class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                                style="border-radius: 50px"
                            ></div>
                            <h4 class="text-md font-semibold text-indigo-600">
                                If You Are a Supportive (S) Parent with an
                                Influential (I) Child
                            </h4>
                            <div class="row">
                                <div class="col-6">
                                    <ul class="list-none pl-6">
                                        <li>
                                            <strong
                                                >Balancing Enthusiasm with
                                                Stability:</strong
                                            ><br /><strong>Tip : </strong> While
                                            you provide a calm and stable
                                            environment, ensure your I child has
                                            opportunities to engage in energetic
                                            and creative activities.
                                            <br /><strong>Example : </strong>Use
                                            visual schedules and routines to
                                            outline daily activities, providing
                                            a balance between structured and
                                            creative play.
                                        </li>
                                        <li>
                                            <strong
                                                >Encouraging Social
                                                Interaction:</strong
                                            >
                                            <br /><strong>Tip : </strong>Create
                                            opportunities for your child to
                                            engage with others in a supportive
                                            and collaborative manner.
                                            <br /><strong>Example : </strong
                                            >Arrange playdates or group
                                            activities where they can work with
                                            peers, emphasising the importance of
                                            teamwork and cooperation.
                                        </li>
                                        <li>
                                            <strong
                                                >Providing Positive
                                                Reinforcement:</strong
                                            >
                                            <br /><strong>Tip : </strong>Offer
                                            praise and recognition for their
                                            social skills and creative efforts.
                                            <br /><strong>Example : </strong
                                            >Celebrate their achievements in
                                            making friends and engaging with
                                            others, highlighting how their
                                            positive energy impacts those around
                                            them.
                                        </li>
                                        <li>
                                            <strong
                                                >Encouraging Leadership in Group
                                                Settings:</strong
                                            ><br /><strong>Tip : </strong>
                                            Encourage your child to take on
                                            small leadership roles within group
                                            activities. <br /><strong
                                                >Example : </strong
                                            >Assign them roles such as team
                                            leader in group projects or
                                            activities, supporting their growth
                                            in confidence and leadership skills.
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <div
                                        class="flex justify-center items-center mb-4"
                                    >
                                        <img
                                            class="w-64 h-auto object-contain"
                                            :src="'/images/reports-svg-images/Page31.svg'"
                                            alt=""
                                        />
                                    </div>
                                    <div
                                        class="flex justify-center items-center mb-4"
                                    >
                                        <img
                                            class="w-64 h-auto object-contain"
                                            :src="'/images/reports-svg-images/Page31b.svg'"
                                            alt=""
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- For ID Style Type -->
            <div id="ID" v-if="style == 'ID'">
                <div class="space-y-6">
                    <div class="flex flex-col space-y-4 ml-3">


                        <!-- Encouraging Independence and Leadership for S Parent with ID Child -->
                        <div class="space-y-4 ml-3">
                            <div
                                class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                                style="border-radius: 50px"
                            ></div>
                            <h4 class="text-md font-semibold text-indigo-600">
                                If You Are a Supportive (S) Parent with an
                                Influential-Dominant (ID) Child
                            </h4>
                            <div class="row">
                                <div class="col-6">
                                    <div class="space-y-2">
                                        <h5 class="text-md font-semibold">
                                            <b>
                                                Encouraging Independence and
                                                Leadership:
                                            </b>
                                        </h5>
                                        <p class="text-sm">
                                            <strong>Tip : </strong>While you are
                                            naturally supportive and nurturing,
                                            it’s important to encourage your ID
                                            child to take on challenges and lead
                                            with confidence.
                                        </p>
                                        <p class="text-sm">
                                            <strong>Example : </strong>Allow
                                            {{ childName }} to take charge of
                                            certain family activities, such as
                                            planning a game night or organising
                                            a weekend outing. Support their
                                            leadership by providing guidance
                                            when needed.
                                        </p>
                                    </div>
                                    <div class="space-y-2">
                                        <h5 class="text-md font-semibold">
                                            <b>
                                                Balancing Nurturing with
                                                Independence:
                                            </b>
                                        </h5>
                                        <p class="text-sm">
                                            <strong>Tip : </strong>While you may
                                            prefer to provide close guidance,
                                            give your child opportunities to
                                            make decisions independently.
                                        </p>
                                        <p class="text-sm">
                                            <strong>Example : </strong>Encourage
                                            {{ childName }} to handle small
                                            tasks on their own, such as managing
                                            their own schedule for homework and
                                            play. This helps them build
                                            confidence and decision-making
                                            skills.
                                        </p>
                                    </div>
                                    <div class="space-y-2">
                                        <h5 class="text-md font-semibold">
                                            <b>
                                                Supporting Social Engagement:
                                            </b>
                                        </h5>
                                        <p class="text-sm">
                                            <strong>Tip : </strong>Support your
                                            child’s sociable nature by
                                            encouraging them to engage in group
                                            activities and build friendships.
                                        </p>
                                        <p class="text-sm">
                                            <strong>Example : </strong>Arrange
                                            playdates and group activities where
                                            {{ childName }} can interact with
                                            peers. Encourage participation in
                                            team sports or clubs that align with
                                            their interests.
                                        </p>
                                    </div>
                                    <div class="space-y-2">
                                        <h5 class="text-md font-semibold">
                                            <b>
                                                Promoting Patience and Listening
                                                Skills:
                                            </b>
                                        </h5>
                                        <p class="text-sm">
                                            <strong>Tip : </strong>Help your
                                            child develop patience and active
                                            listening skills, which are crucial
                                            for effective leadership.
                                        </p>
                                        <p class="text-sm">
                                            <strong>Example : </strong>Engage in
                                            activities that require turn-taking
                                            and listening, such as family
                                            discussions or cooperative games.
                                            Encourage {{ childName }} to listen
                                            to others’ ideas and reflect on them
                                            before responding.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div
                                        class="flex justify-center items-center mb-4"
                                    >
                                        <img
                                            class="w-64 h-auto object-contain"
                                            :src="'/images/reports-svg-images/Page31.svg'"
                                            alt=""
                                        />
                                    </div>
                                    <div
                                        class="flex justify-center items-center mb-4"
                                    >
                                        <img
                                            class="w-64 h-auto object-contain"
                                            :src="'/images/reports-svg-images/Page31b.svg'"
                                            alt=""
                                        />
                                    </div>
                                    <div
                                        data-v-39cdb3b5=""
                                        class="flex justify-center items-center"
                                    >
                                        <img
                                            data-v-39cdb3b5=""
                                            class="w-96 h-auto object-contain"
                                            src="/images/reports-svg-images/Page 12 newb.svg"
                                            alt=""
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- For IS Style Type -->
            <div id="IS" v-if="style == 'IS'">
                <div class="p-3">





                    <!-- S -->
                    <div
                        class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                        style="border-radius: 50px"
                    ></div>
                    <h4
                        class="text-3xl font-semibold mt-6 mb-2 text-indigo-600"
                    >
                        If You Are a Supportive (S) Parent with an
                        Influential-Supportive (IS) Child
                    </h4>
                    <div class="row">
                        <div class="col-6">
                            <div class="">
                                <p>
                                    <strong
                                        >Encouraging Social Connections:</strong
                                    ><br /><strong>Tip : </strong> Your
                                    naturally supportive and nurturing nature
                                    complements your IS child’s need for social
                                    interaction. Encourage them to build and
                                    maintain friendships.
                                </p>
                                <p>
                                    <strong>Example : </strong> Arrange
                                    playdates, family gatherings, and social
                                    activities where {{ childName }} can
                                    interact with peers and family members.
                                    Encourage them to join clubs or teams to
                                    expand their social network.
                                </p>
                            </div>

                            <div class="">
                                <p>
                                    <strong
                                        >Supporting Creative Expression:</strong
                                    ><br /><strong>Tip : </strong> Encourage
                                    your child’s creativity by providing a safe
                                    and supportive environment for artistic and
                                    imaginative activities.
                                </p>
                                <p>
                                    <strong>Example : </strong> Set up a
                                    creative space at home with art supplies,
                                    musical instruments, or costumes for
                                    role-playing. Encourage {{ childName }} to
                                    express themselves through various creative
                                    outlets and join them in these activities.
                                </p>
                            </div>

                            <div class="">
                                <p>
                                    <strong
                                        >Balancing Support with
                                        Independence:</strong
                                    ><br /><strong>Tip : </strong> While you are
                                    naturally nurturing, it’s important to also
                                    encourage your child to take on
                                    responsibilities and make independent
                                    decisions.
                                </p>
                                <p>
                                    <strong>Example : </strong> Give
                                    {{ childName }} age-appropriate
                                    responsibilities, such as helping with
                                    household chores or planning a family
                                    activity. Support their efforts and provide
                                    guidance as needed, but allow them to take
                                    the lead.
                                </p>
                            </div>

                            <div class="">
                                <p>
                                    <strong>Providing Gentle Guidance:</strong>
                                    <br /><strong>Tip : </strong> Use gentle and
                                    positive reinforcement to guide your child’s
                                    behavior and decisions. Offer constructive
                                    feedback in a supportive manner.
                                </p>
                                <p>
                                    <strong>Example : </strong> When
                                    {{ childName }} faces challenges, provide
                                    encouragement and gentle suggestions on how
                                    to overcome them. Use positive language to
                                    highlight their strengths and areas for
                                    growth, helping them build confidence and
                                    resilience.
                                </p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="flex justify-center items-center mb-4">
                                <img
                                    class="w-64 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page31.svg'"
                                    alt=""
                                />
                            </div>
                            <div class="flex justify-center items-center mb-4">
                                <img
                                    class="w-64 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page31b.svg'"
                                    alt=""
                                />
                            </div>
                            <div class="flex justify-center items-center mb-4">
                                <img
                                    class="w-64 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page21.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <!-- For S Style Type -->
            <div id="S" v-if="style == 'S'">
                <div class="space-y-6">



                    <!-- S -->
                    <div
                        class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                        style="border-radius: 50px"
                    ></div>
                    <h4
                        class="text-3xl font-semibold mt-6 mb-2 text-indigo-600"
                    >
                        If You Are a Supportive (S) Parent with a Supportive (S)
                        Child
                    </h4>
                    <div class="row">
                        <div class="col-6">
                            <div class="space-y-4 ml-3">
                                <div class="">
                                    <h4 class="font-semibold text-xl">
                                        Creating a Calm and Stable Environment
                                    </h4>
                                    <p>
                                        <strong>Tip : </strong> Provide a calm
                                        and consistent environment where your
                                        child feels secure.
                                    </p>
                                    <p>
                                        <strong>Example : </strong> Maintain
                                        regular routines and clear expectations
                                        to help your child feel comfortable and
                                        focused.
                                    </p>
                                </div>

                                <div class="">
                                    <h4 class="font-semibold text-xl">
                                        Encouraging Team Activities
                                    </h4>
                                    <p>
                                        <strong>Tip : </strong> Involve your
                                        child in activities that require
                                        teamwork and cooperation.
                                    </p>
                                    <p>
                                        <strong>Example : </strong> Enrol your
                                        child in team sports or group projects
                                        where they can collaborate with peers
                                        and practice their teamwork skills.
                                    </p>
                                </div>

                                <div class="">
                                    <h4 class="font-semibold text-xl">
                                        Promote Independence
                                    </h4>
                                    <p>
                                        <strong>Tip : </strong> Encourage your
                                        child to take on responsibilities and
                                        make decisions independently.
                                    </p>
                                    <p>
                                        <strong>Example : </strong> Allow your
                                        child to choose their own
                                        extracurricular activities and support
                                        them in pursuing their interests.
                                    </p>
                                </div>

                                <div class="">
                                    <h4 class="font-semibold text-xl">
                                        Providing Supportive Feedback
                                    </h4>
                                    <p>
                                        <strong>Tip : </strong> Offer gentle and
                                        supportive feedback that encourages them
                                        to express their thoughts and feelings.
                                    </p>
                                    <p>
                                        <strong>Example : </strong> Praise their
                                        efforts and contributions, reinforcing
                                        their sense of self-worth and value.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="flex justify-center items-center mb-4">
                                <img
                                    class="w-64 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page31.svg'"
                                    alt=""
                                />
                            </div>
                            <div class="flex justify-center items-center mb-4">
                                <img
                                    class="w-64 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Page31b.svg'"
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



                    <!-- S -->
                    <div class=" ">
                        <div
                            class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                            style="border-radius: 50px"
                        ></div>
                        <h4
                            class="text-3xl font-semibold mt-6 mb-2 text-indigo-600"
                        >
                            If You Are a Supportive (S) Parent with a
                            Supportive-Cautious (SC) Child
                        </h4>
                        <div class="row">
                            <div class="col-6">
                                <div class="space-y-4">
                                    <div>
                                        <h4 class="text-xl font-semibold">
                                            Encouraging Independence with
                                            Support:
                                        </h4>
                                        <p>
                                            <strong>Tip : </strong>While you
                                            naturally provide support and
                                            nurturing, it's important to
                                            encourage your SC child to take on
                                            tasks independently.
                                        </p>
                                        <p>
                                            <strong>Example : </strong>Allow
                                            {{ childName }} to handle small
                                            responsibilities on their own, such
                                            as managing their homework schedule
                                            or organising their room. Offer
                                            guidance when needed but celebrate
                                            their independent efforts.
                                        </p>
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-semibold">
                                            Promoting Social Interaction in Calm
                                            Settings:
                                        </h4>
                                        <p>
                                            <strong>Tip : </strong>Support your
                                            child’s preference for calm and
                                            structured social interactions by
                                            arranging suitable activities.
                                        </p>
                                        <p>
                                            <strong>Example : </strong>Organise
                                            playdates or group activities that
                                            are calm and structured, like board
                                            games or cooperative projects. This
                                            allows {{ childName }} to interact
                                            with peers in a comfortable setting.
                                        </p>
                                    </div>
                                    <div>
                                        <h4 class="text-lg font-semibold">
                                            Providing Gentle Encouragement:
                                        </h4>
                                        <p>
                                            <strong>Tip : </strong>Use gentle
                                            encouragement to motivate your child
                                            and build their confidence.
                                        </p>
                                        <p>
                                            <strong>Example : </strong>Praise
                                            {{ childName }} for their efforts
                                            and accomplishments, no matter how
                                            small. Use positive reinforcement to
                                            highlight their strengths and build
                                            their self-esteem.
                                        </p>
                                    </div>
                                    <div>
                                        <h4 class="text-lg font-semibold">
                                            Supporting Careful Planning:
                                        </h4>
                                        <p>
                                            <strong>Tip : </strong>Encourage
                                            your child's natural inclination
                                            towards careful planning and
                                            organisation.
                                        </p>
                                        <p>
                                            <strong>Example : </strong>Involve
                                            {{ childName }} in planning family
                                            activities or organising their
                                            schedule. Discuss the benefits of
                                            being prepared and organised,
                                            reinforcing their strengths.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div
                                    class="flex justify-center items-center mb-4"
                                >
                                    <img
                                        class="w-64 h-auto object-contain"
                                        :src="'/images/reports-svg-images/Page31.svg'"
                                        alt=""
                                    />
                                </div>
                                <div
                                    class="flex justify-center items-center mb-4"
                                >
                                    <img
                                        class="w-64 h-auto object-contain"
                                        :src="'/images/reports-svg-images/Page31b.svg'"
                                        alt=""
                                    />
                                </div>
                                <div
                                    data-v-c08108fc=""
                                    class="flex justify-center items-center mb-4"
                                >
                                    <img
                                        data-v-c08108fc=""
                                        class="w-64 h-auto object-contain"
                                        src="/images/reports-svg-images/Page20.svg"
                                        alt=""
                                    />
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- For SC Style Type -->
            <div id="SI" v-if="style == 'SI'">
                <div class="space-y-6">



                    <!-- S -->
                    <div class=" ">
                        <div
                            class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                            style="border-radius: 50px"
                        ></div>
                        <h4
                            class="text-3xl font-semibold mt-6 mb-2 text-indigo-600"
                        >
                            I If You Are a Supportive (S) Parent with a
                            Supportive-Influential (SI) Child
                        </h4>
                        <div class="row">
                            <div class="col-6">
                                <div class="space-y-4">
                                    <div>
                                        <h4 class="text-xl font-semibold">
                                            Encouraging Independence and
                                            Leadership:
                                        </h4>
                                        <p>
                                            <strong>Tip : </strong>
                                            While you are naturally nurturing
                                            and supportive, it’s important to
                                            encourage your SI child to take on
                                            leadership roles and develop
                                            independence.
                                        </p>
                                        <p>
                                            <strong>Example : </strong> Allow
                                            {{ childName }} to take charge of
                                            certain family activities, such as
                                            planning a game night or organising
                                            a weekend outing. Support their
                                            leadership by providing guidance
                                            when needed.
                                        </p>
                                    </div>

                                    <div>
                                        <h4 class="text-xl font-semibold">
                                            Promoting Social Interaction and
                                            Teamwork:
                                        </h4>
                                        <p>
                                            <strong>Tip : </strong>
                                            Support your child’s sociable nature
                                            by encouraging them to engage in
                                            group activities and build
                                            friendships.
                                        </p>
                                        <p>
                                            <strong>Example : </strong> Arrange
                                            playdates, family gatherings, and
                                            group activities where
                                            {{ childName }} can interact with
                                            peers. Encourage participation in
                                            team sports or clubs that align with
                                            their interests.
                                        </p>
                                    </div>

                                    <div>
                                        <h4 class="text-xl font-semibold">
                                            Providing Constructive Feedback:
                                        </h4>
                                        <p>
                                            <strong>Tip : </strong>
                                            Use positive reinforcement and
                                            constructive feedback to guide your
                                            child’s behaviour and decisions.
                                        </p>
                                        <p>
                                            <strong>Example : </strong> When
                                            {{ childName }} faces challenges,
                                            provide encouragement and gentle
                                            suggestions on how to overcome them.
                                            Use positive language to highlight
                                            their strengths and areas for
                                            growth, helping them build
                                            confidence and resilience.
                                        </p>
                                    </div>

                                    <div>
                                        <h4 class="text-xl font-semibold">
                                            Balancing Support with Independence:
                                        </h4>
                                        <p>
                                            <strong>Tip : </strong>
                                            While you may prefer to provide
                                            close guidance, give your child
                                            opportunities to make decisions
                                            independently.
                                        </p>
                                        <p>
                                            <strong>Example : </strong>
                                            Encourage {{ childName }} to handle
                                            small tasks on their own, such as
                                            managing their own schedule for
                                            homework and play. This helps them
                                            build confidence and decision-making
                                            skills.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div
                                    class="flex justify-center items-center mb-4"
                                >
                                    <img
                                        class="w-64 h-auto object-contain"
                                        :src="'/images/reports-svg-images/Page31.svg'"
                                        alt=""
                                    />
                                </div>
                                <div
                                    class="flex justify-center items-center mb-4"
                                >
                                    <img
                                        class="w-64 h-auto object-contain"
                                        :src="'/images/reports-svg-images/Page31b.svg'"
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
                        </div>
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

h4 {
    color: rgb(55 48 163);
    font-weight: bold !important;
}

.blueheading {
    color: rgb(55 48 163);
    font-size: 21px;
}

ul.list-none > li,
div.space-y-2,
ul.mt-2.list-none.pl-5.space-y-2 > li {
    margin-top: 50px;
    /* margin-bottom: 2px; */
}

ul > li {
    /* margin-top: 20px; */
}

p,
ul > li,
ol > li,
strong,
.text-base {
    font-size: 1.125rem;
    line-height: 1.75rem;
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
    strong {
        font-size: 1rem !important;
    }

    h2,
    h3,
    h4 {
        font-size: 1.25rem !important;
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
    name: "ParentalInsightC",
    layout: AssessmentTypes,
    props: {
        style: String,
        childName: String,
        image: String,
    },
};
</script>
