<template>
    <div class="p-6">
        <div class="p-6">

            <div v-if="style == 'C'" class="space-y-8">


                <!-- Parenting Tips Section -->
                <div class="rounded-lg">
                    <!-- <h4 class="text-3xl font-bold mb-2">Parenting Tips Based on Your DISC Style</h4> -->

                    <!-- Dominant (D) Parent with Cautious (C) Child -->
                    <div class="rounded-lg mb-6">
                        <div
                            class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                            style="border-radius: 50px"
                        ></div>
                        <h4
                            class="text-3xl font-semibold mt-6 mb-2 text-indigo-600"
                        >
                            If You Are a Dominant (D) Parent with a Cautious (C)
                            Child
                        </h4>

                        <div class="row">
                            <div class="col-6">
                                <div class="space-y-4 ml-3">
                                    <div>
                                        <strong
                                            >Balancing Structure with
                                            Flexibility:</strong
                                        >
                                        <p>
                                            <strong>Tip : </strong> While you
                                            prefer to take charge, it’s
                                            important to provide your C child
                                            with a structured environment while
                                            allowing for some flexibility.
                                        </p>
                                        <p>
                                            <strong>Example : </strong>
                                            Establish a routine that includes
                                            both structured activities and time
                                            for your child to explore their
                                            interests independently.
                                        </p>
                                    </div>
                                    <div>
                                        <strong
                                            >Encouraging Precision and
                                            Quality:</strong
                                        >
                                        <p>
                                            <strong>Tip : </strong>Appreciate
                                            and encourage your child’s attention
                                            to detail and high standards.
                                        </p>
                                        <p>
                                            <strong>Example : </strong> Praise
                                            their meticulous work on a project,
                                            emphasising how their careful
                                            planning and execution make a
                                            difference.
                                        </p>
                                    </div>
                                    <div>
                                        <strong
                                            >Supporting Analytical
                                            Thinking:</strong
                                        >
                                        <p>
                                            <strong>Tip : </strong>Encourage
                                            your child’s analytical skills by
                                            engaging in activities that require
                                            problem-solving and critical
                                            thinking.
                                        </p>
                                        <p>
                                            <strong>Example : </strong> Work
                                            together on science experiments or
                                            strategy games that challenge their
                                            mind and promote logical thinking.
                                        </p>
                                    </div>
                                    <div>
                                        <strong
                                            >Providing Clear and Detailed
                                            Instructions:</strong
                                        >
                                        <p>
                                            <strong>Tip : </strong>Be clear and
                                            precise in your communication,
                                            ensuring your child understands what
                                            is expected.
                                        </p>
                                        <p>
                                            <strong>Example : </strong> When
                                            assigning tasks, break them down
                                            into detailed steps and check for
                                            understanding before they begin.
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




                    <!-- If Dominant (D) Parent with Cautious-Dominant (CD) Child -->
                    <div class="mb-8">
                        <div
                            class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                            style="border-radius: 50px"
                        ></div>
                        <h4
                            class="text-3xl font-semibold mt-6 mb-2 text-indigo-600"
                        >
                            If You Are a Dominant (D) Parent with a
                            Cautious-Dominant (CD) Child
                        </h4>

                        <div class="row">
                            <div class="col-6">
                                <div class="mb-4">
                                    <h4 class="font-semibold text-xl">
                                        Encouraging Detailed Leadership
                                    </h4>
                                    <p>
                                        <strong>Tip : </strong> While you
                                        naturally take charge, support your CD
                                        child’s attention to detail in their
                                        leadership.
                                    </p>
                                    <p>
                                        <strong>Example : </strong>Allow
                                        {{ childName }} to lead a family
                                        project, like planning a trip, ensuring
                                        they can use their detailed approach.
                                        Discuss how their careful planning
                                        contributes to success.
                                    </p>
                                </div>

                                <div class="mb-4">
                                    <h4 class="font-semibold text-xl">
                                        Balancing Structure with Flexibility
                                    </h4>
                                    <p>
                                        <strong>Tip : </strong>Encourage your
                                        child to be flexible while maintaining
                                        their structured approach.
                                    </p>
                                    <p>
                                        <strong>Example : </strong>Involve
                                        {{ childName }} in activities that
                                        require quick thinking and adaptability,
                                        like cooking a new recipe together.
                                        Celebrate their ability to adapt while
                                        keeping things organised.
                                    </p>
                                </div>

                                <div class="mb-4">
                                    <h4 class="font-semibold text-xl">
                                        Recognising and Praising Thoroughness
                                    </h4>
                                    <p>
                                        <strong>Tip : </strong>Provide positive
                                        reinforcement for your child’s
                                        meticulous approach and leadership
                                        skills.
                                    </p>
                                    <p>
                                        <strong>Example : </strong>Praise
                                        {{ childName }} for their detailed
                                        completion of tasks, such as organising
                                        their room or planning an event.
                                        Highlight how their thoroughness is a
                                        valuable trait.
                                    </p>
                                </div>

                                <div class="mb-4">
                                    <h4 class="font-semibold text-xl">
                                        Supporting Emotional Resilience
                                    </h4>
                                    <p>
                                        <strong>Tip : </strong>Help your child
                                        develop strategies to manage stress and
                                        remain calm in challenging situations.
                                    </p>
                                    <p>
                                        <strong>Example : </strong>Practice
                                        relaxation techniques together, such as
                                        deep breathing exercises or mindfulness
                                        activities. Encourage {{ childName }} to
                                        use these techniques when they feel
                                        overwhelmed.
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
                <!-- DISC Overview Section -->


                <!-- Parenting Tips Section -->
                <div class="rounded-lg">
                    <!-- <h4 class="text-3xl font-bold mb-2">Parenting Tips Based on Your DISC Style</h4> -->

                    <!-- Dominant (D) Parent with Cautious (C) Child -->
                    <div class="rounded-lg mb-6">
                        <div
                            class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                            style="border-radius: 50px"
                        ></div>
                        <h4
                            class="text-3xl font-semibold mt-6 mb-2 text-indigo-600"
                        >
                            If You Are a Dominant (D) Parent with a
                            Cautious-Supportive (CS) Child
                        </h4>

                        <div class="row">
                            <div class="col-6">
                                <div class="space-y-4 ml-3">
                                    <div>
                                        <strong>
                                            Encouraging Thoughtful Exploration:
                                        </strong>
                                        <p>
                                            <strong>Tip : </strong>
                                            While you naturally take bold
                                            actions, support your CS child’s
                                            need for careful exploration and
                                            consideration.
                                        </p>
                                        <p>
                                            <strong>Example : </strong> When
                                            faced with a new activity or
                                            decision, guide {{ childname }} to
                                            explore different options and think
                                            through potential outcomes. Discuss
                                            how thoughtful planning can lead to
                                            successful results.
                                        </p>
                                    </div>

                                    <div>
                                        <strong>
                                            Balancing Assertiveness with
                                            Support:
                                        </strong>
                                        <p>
                                            <strong>Tip : </strong>
                                            Encourage your child to take
                                            initiative while providing the
                                            reassurance they need to feel
                                            secure.
                                        </p>
                                        <p>
                                            <strong>Example : </strong> Involve
                                            {{ childname }} in planning family
                                            activities, allowing them to make
                                            decisions with your support. Offer
                                            praise and constructive feedback to
                                            build their confidence.
                                        </p>
                                    </div>

                                    <div>
                                        <strong>
                                            Celebrating Detailed Work:
                                        </strong>
                                        <p>
                                            <strong>Tip : </strong>
                                            Recognise and celebrate your child’s
                                            meticulous approach and attention to
                                            detail.
                                        </p>
                                        <p>
                                            <strong>Example : </strong> Praise
                                            {{ childname }} for their careful
                                            completion of tasks, such as
                                            organising their room or completing
                                            a detailed project. Highlight how
                                            their thoroughness is a valuable
                                            trait.
                                        </p>
                                    </div>

                                    <div>
                                        <strong>
                                            Enhancing Decision-Making
                                            Confidence:
                                        </strong>
                                        <p>
                                            <strong>Tip : </strong>
                                            Support your child in making
                                            confident decisions by providing
                                            opportunities for independent
                                            choices.
                                        </p>
                                        <p>
                                            <strong>Example : </strong> Let
                                            {{ childname }} decide on weekend
                                            activities or select a new hobby.
                                            Discuss their choices and outcomes,
                                            reinforcing that thoughtful
                                            decision-making leads to positive
                                            experiences
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
                    <li class="  ">
                        <div
                            class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                            style="border-radius: 50px"
                        ></div>
                        <div class="row">
                            <h3
                                class="text-center text-md font-bold text-indigo-600 blueheading"
                            >
                                If You Are a Dominant (D) Parent with a Dominant
                                (D) Child:
                            </h3>

                            <div class="col-6">
                                <ul class="mt-2 list-none pl-5 space-y-2">
                                    <li>
                                        <b>Encouraging Collaboration:</b><br />
                                        <span class="font-medium">Tip : </span>
                                        While both you and your child are
                                        natural leaders, it’s important to teach
                                        them the value of collaboration.
                                        Encourage your child to listen to
                                        others’ ideas and work as part of a
                                        team. <br /><span class="font-medium"
                                            >Example :
                                        </span>
                                        During family activities or games,
                                        ensure that everyone gets a chance to
                                        lead and share their ideas. Discuss the
                                        importance of teamwork and respecting
                                        others’ input.
                                    </li>
                                    <li>
                                        <b>Managing Conflict:</b><br />
                                        <span class="font-medium">Tip : </span>
                                        Both you and your child may have strong
                                        opinions, which can lead to conflicts.
                                        Practice patience and teach your child
                                        conflict-resolution skills. <br /><span
                                            class="font-medium"
                                            >Example :
                                        </span>
                                        Role-play scenarios where you and your
                                        child have differing opinions and work
                                        together to find a compromise. Emphasise
                                        the importance of finding common ground.
                                    </li>
                                    <li>
                                        <b>Setting Clear Boundaries:</b><br />
                                        <span class="font-medium">Tip : </span>
                                        As a D parent, you may be used to taking
                                        charge. However, it’s important to set
                                        clear boundaries and ensure that your
                                        child understands the rules and
                                        consequences. <br /><span
                                            class="font-medium"
                                            >Example :
                                        </span>
                                        Create a family agreement that outlines
                                        expectations and responsibilities for
                                        everyone. Review and update it regularly
                                        to keep it relevant.
                                    </li>
                                    <li>
                                        <b>Nurturing Independence:</b><br />
                                        <span class="font-medium">Tip : </span>
                                        Encourage your child to take on
                                        responsibilities and make decisions
                                        independently. Provide opportunities for
                                        them to lead and manage tasks on their
                                        own. <br /><span class="font-medium"
                                            >Example :
                                        </span>
                                        Assign your child a project, such as
                                        planning a family outing, and let them
                                        take the lead. Offer guidance as needed
                                        but allow them to make key decisions.
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
                                        class="w-120 h-auto object-contain"
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


                    <div>
                        <div
                            class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                            style="border-radius: 50px"
                        ></div>
                        <h4
                            class="text-3xl font-semibold mt-6 mb-2 text-indigo-600"
                        >
                            If You Are a Dominant (D) Parent with a
                            Dominant-Cautious (DC) Child
                        </h4>
                        <div class="row">
                            <div class="col-6">
                                <h4 class="text-xl font-semibold">
                                    Encouraging Precision and Leadership:
                                </h4>
                                <p>
                                    <strong>Tip : </strong> While both you and
                                    your child are natural leaders, it’s
                                    important to encourage your DC child to
                                    focus on precision and thoroughness. Build
                                    their attention to detail while supporting
                                    their leadership skills.
                                </p>
                                <p>
                                    <strong>Example : </strong> Involve your
                                    child in planning family activities that
                                    require both leadership and attention to
                                    detail, such as organising a family trip
                                    where they can manage the itinerary and
                                    logistics.
                                </p>

                                <h4 class="text-xl font-semibold">
                                    Balancing High Standards with Flexibility:
                                </h4>
                                <p>
                                    <strong>Tip : </strong> Help your child
                                    balance their high standards with the need
                                    to be adaptable. Teach them that it's okay
                                    if things don’t go perfectly and the
                                    importance of flexibility.
                                </p>
                                <p>
                                    <strong>Example : </strong> When working on
                                    a project, remind your child that it's okay
                                    to adjust plans as needed. Discuss how
                                    changes can sometimes lead to better
                                    outcomes and encourage them to be open to
                                    new ideas.
                                </p>

                                <h4 class="text-xl font-semibold">
                                    Providing Clear Structure:
                                </h4>
                                <p>
                                    <strong>Tip : </strong> Clearly define rules
                                    and expectations to provide a structured
                                    environment. Your child thrives on knowing
                                    what is expected and having a clear path to
                                    follow.
                                </p>
                                <p>
                                    <strong>Example : </strong> Set up a
                                    consistent daily routine with clear steps
                                    for tasks such as homework and chores. Use
                                    checklists or charts to help them keep track
                                    of their responsibilities and feel in
                                    control.
                                </p>

                                <h4 class="text-xl font-semibold">
                                    Promoting Analytical Thinking:
                                </h4>
                                <p>
                                    <strong>Tip : </strong> Encourage your child
                                    to think critically and analyse situations
                                    thoroughly before making decisions. Support
                                    their natural inclination towards careful
                                    planning and problem-solving.
                                </p>
                                <p>
                                    <strong>Example : </strong> Engage your
                                    child in activities that require strategic
                                    thinking, such as chess or complex puzzles.
                                    Discuss different strategies and the
                                    importance of evaluating all options before
                                    deciding on the best course of action.
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


                    <div class="">
                        <div
                            class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                            style="border-radius: 50px"
                        ></div>
                        <h4 class="font-semibold text-indigo-600">
                            If You Are a Dominant (D) Parent with a
                            Dominant-Influential (DI) Child
                        </h4>

                        <div class="row">
                            <div class="col-6">
                                <div class="mt-4">
                                    <h4 class="text-md font-semibold">
                                        Encouraging Collaboration
                                    </h4>
                                    <p class="">
                                        <strong>Tip : </strong>While both you
                                        and your child are natural leaders, it’s
                                        important to teach them the value of
                                        collaboration. Encourage your child to
                                        listen to others’ ideas and work as part
                                        of a team.
                                    </p>
                                    <p class="mt-2">
                                        <strong>Example : </strong>During family
                                        activities or games, ensure that
                                        everyone gets a chance to lead and share
                                        their ideas. Discuss the importance of
                                        teamwork and respecting others’ input.
                                    </p>
                                </div>

                                <div class="mt-4">
                                    <h4 class="text-xl font-semibold">
                                        Managing Excitement
                                    </h4>
                                    <p class="">
                                        <strong>Tip : </strong>Both you and your
                                        child may have high energy levels.
                                        Practice activities that help manage
                                        excitement in a productive way.
                                    </p>
                                    <p class="mt-2">
                                        <strong>Example : </strong>Engage in
                                        sports or physical activities together
                                        to channel energy positively. Discuss
                                        ways to stay focused and calm during
                                        quieter times.
                                    </p>
                                </div>

                                <div class="mt-4">
                                    <h4 class="text-xl font-semibold">
                                        Setting Clear Boundaries
                                    </h4>
                                    <p class="">
                                        <strong>Tip : </strong>As a D parent,
                                        you may be used to taking charge.
                                        However, it’s important to set clear
                                        boundaries and ensure that your child
                                        understands the rules and consequences.
                                    </p>
                                    <p class="mt-2">
                                        <strong>Example : </strong>Create a
                                        family agreement that outlines
                                        expectations and responsibilities for
                                        everyone. Review and update it regularly
                                        to keep it relevant.
                                    </p>
                                </div>

                                <div class="mt-4">
                                    <h4 class="text-xl font-semibold">
                                        Promote Independence
                                    </h4>
                                    <p class="">
                                        <strong>Tip : </strong>Encourage your
                                        child to take on responsibilities and
                                        make decisions independently. Provide
                                        opportunities for them to lead and
                                        manage tasks on their own.
                                    </p>
                                    <p class="mt-2">
                                        <strong>Example : </strong>Assign your
                                        child a project, such as planning a
                                        family outing, and let them take the
                                        lead. Offer guidance as needed but allow
                                        them to make key decisions.
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
                        <div class="pl-4">
                            <div
                                class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                                style="border-radius: 50px"
                            ></div>
                            <h4 class="text-md font-semibold text-indigo-600">
                                If You Are a Dominant (D) Parent with an
                                Influential (I) Child
                            </h4>
                            <div class="row">
                                <div class="col-6">
                                    <ul class="list-none pl-6">
                                        <li>
                                            <strong
                                                >Balancing Structure with
                                                Creativity:</strong
                                            >
                                            <br /><strong>Tip : </strong>While
                                            you prefer to take charge, it’s
                                            important to allow your I child the
                                            freedom to explore their creativity.
                                            <br /><strong>Example : </strong
                                            >Establish a routine that includes
                                            both structured activities and time
                                            for creative play, allowing them to
                                            express themselves freely.
                                        </li>
                                        <li>
                                            <strong
                                                >Encouraging Social
                                                Interaction:</strong
                                            ><br /><strong>Tip : </strong>
                                            Recognise and support your child’s
                                            need for social interaction and
                                            communication.<br />
                                            <strong>Example : </strong>Arrange
                                            playdates, group activities, or
                                            social clubs where they can interact
                                            with peers and build friendships.
                                        </li>
                                        <li>
                                            <strong
                                                >Providing Positive
                                                Feedback:</strong
                                            >
                                            <br /><strong>Tip : </strong>Offer
                                            praise and recognition for their
                                            enthusiasm and social skills.
                                            <br /><strong>Example : </strong
                                            >Celebrate their efforts in making
                                            friends and engaging with others,
                                            highlighting how their positive
                                            energy impacts those around them.
                                        </li>
                                        <li>
                                            <strong
                                                >Supporting Their Ideas:</strong
                                            >
                                            <br /><strong>Tip : </strong
                                            >Encourage your child’s creative
                                            ideas and projects, providing
                                            guidance and support.<br />
                                            <strong>Example : </strong>Help them
                                            plan and execute creative projects
                                            or activities, praising their
                                            initiative and creativity.
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




                        <!-- Encouraging Leadership and Initiative for D Parent with ID Child -->
                        <div class="space-y-4 ml-3">
                            <div
                                class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                                style="border-radius: 50px"
                            ></div>
                            <h4 class="text-md font-semibold text-indigo-600">
                                If You Are a Dominant (D) Parent with an
                                Influential-Dominant (ID) Child
                            </h4>
                            <div class="row">
                                <div class="col-6">
                                    <div class="space-y-2">
                                        <h5 class="text-md font-semibold">
                                            <b>
                                                Encouraging Leadership and
                                                Initiative:
                                            </b>
                                        </h5>
                                        <p class="text-sm">
                                            <strong>Tip : </strong>While you are
                                            naturally goal-oriented and
                                            assertive, it’s important to
                                            encourage your ID child to take
                                            initiative and lead with confidence.
                                        </p>
                                        <p class="text-sm">
                                            <strong>Example : </strong>Allow
                                            your child to take charge of family
                                            projects, such as planning a trip or
                                            organising a family event. Praise
                                            their leadership and decision-making
                                            skills.
                                        </p>
                                    </div>
                                    <div class="space-y-2">
                                        <h5 class="text-md font-semibold">
                                            <b>
                                                Balancing Control and
                                                Flexibility:
                                            </b>
                                        </h5>
                                        <p class="text-sm">
                                            <strong>Tip : </strong>Although you
                                            prefer to be in control, giving your
                                            child some flexibility can help them
                                            develop their leadership abilities.
                                        </p>
                                        <p class="text-sm">
                                            <strong>Example : </strong>Set clear
                                            goals and expectations, but allow
                                            {{ childName }} to choose how they
                                            achieve these goals. This balance
                                            can enhance their sense of
                                            responsibility and creativity.
                                        </p>
                                    </div>
                                    <div class="space-y-2">
                                        <h5 class="text-md font-semibold">
                                            <b>
                                                Promoting Positive Social
                                                Interaction:
                                            </b>
                                        </h5>
                                        <p class="text-sm">
                                            <strong>Tip : </strong>Encourage
                                            your child’s sociable nature by
                                            creating positive social
                                            interactions.
                                        </p>
                                        <p class="text-sm">
                                            <strong>Example : </strong>Arrange
                                            playdates, group activities, and
                                            family gatherings where
                                            {{ childName }} can interact with
                                            peers and practice their leadership
                                            skills in a social setting.
                                        </p>
                                    </div>
                                    <div class="space-y-2">
                                        <h5 class="text-md font-semibold">
                                            <b>
                                                Supporting Decision-Making
                                                Skills:
                                            </b>
                                        </h5>
                                        <p class="text-sm">
                                            <strong>Tip : </strong>Allow your
                                            child to make decisions and take
                                            responsibility for their actions to
                                            build confidence and independence.
                                        </p>
                                        <p class="text-sm">
                                            <strong>Example : </strong>Involve
                                            {{ childName }} in family
                                            decision-making processes, such as
                                            planning meals or choosing weekend
                                            activities. Discuss the outcomes of
                                            their decisions to reinforce
                                            learning and growth.
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



                    <div
                        class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                        style="border-radius: 50px"
                    ></div>
                    <h4
                        class="text-3xl font-semibold mt-6 mb-2 text-indigo-600"
                    >
                        If You Are a Dominant (D) Parent with an
                        Influential-Supportive (IS) Child
                    </h4>
                    <div class="row">
                        <div class="col-6">
                            <div class="">
                                <p>
                                    <strong
                                        >Balancing Structure and
                                        Flexibility:</strong
                                    >
                                    <br /><strong>Tip : </strong> While you are
                                    goal-oriented and like to be in control,
                                    it’s important to balance this with a
                                    flexible approach that accommodates your IS
                                    child’s social and creative nature.
                                </p>
                                <p>
                                    <strong>Example : </strong> Set clear goals
                                    and expectations but allow
                                    {{ childName }} the freedom to choose how
                                    they achieve them. For instance, if they
                                    need to complete a project, let them decide
                                    whether to work alone or with friends.
                                </p>
                            </div>

                            <div class="">
                                <p>
                                    <strong
                                        >Encouraging Creative
                                        Expression:</strong
                                    ><br /><strong>Tip : </strong> Support your
                                    child’s creativity by providing
                                    opportunities for imaginative play and
                                    artistic expression.
                                </p>
                                <p>
                                    <strong>Example : </strong> Encourage
                                    {{ childName }} to participate in creative
                                    activities like drawing, painting, or drama.
                                    Praise their creativity and provide
                                    resources for them to explore their
                                    interests.
                                </p>
                            </div>

                            <div class="">
                                <p>
                                    <strong>Promoting Social Engagement:</strong
                                    ><br /><strong>Tip : </strong> While you may
                                    focus on results and efficiency, it’s
                                    important to support your child’s need for
                                    social interaction and teamwork.
                                </p>
                                <p>
                                    <strong>Example : </strong> Encourage
                                    {{ childName }} to join clubs, sports teams,
                                    or group activities where they can interact
                                    with peers. Highlight the value of teamwork
                                    and cooperation.
                                </p>
                            </div>

                            <div class="">
                                <p>
                                    <strong
                                        >Providing Positive
                                        Reinforcement:</strong
                                    >
                                    <br /><strong>Tip : </strong> Use positive
                                    reinforcement to motivate and encourage your
                                    IS child. Recognise their efforts and
                                    achievements regularly.
                                </p>
                                <p>
                                    <strong>Example : </strong> Praise
                                    {{ childName }} for their accomplishments,
                                    whether big or small. Use specific feedback
                                    to acknowledge their strengths, such as
                                    their ability to make friends easily or
                                    their creative ideas.
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



                    <div
                        class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                        style="border-radius: 50px"
                    ></div>
                    <h4
                        class="text-3xl font-semibold mt-6 mb-2 text-indigo-600"
                    >
                        If You Are a Dominant (D) Parent with a Supportive (S)
                        Child
                    </h4>
                    <div class="row">
                        <div class="col-6">
                            <div class="space-y-4 ml-3">
                                <div class="">
                                    <h4 class="font-semibold text-xl">
                                        Encouraging Collaboration
                                    </h4>
                                    <p>
                                        <strong>Tip : </strong> While you
                                        naturally take charge, encourage your S
                                        child to share their ideas and
                                        participate in decision-making.
                                    </p>
                                    <p>
                                        <strong>Example : </strong> During
                                        family activities, ensure everyone gets
                                        a chance to lead and contribute,
                                        discussing the importance of teamwork
                                        and collaboration.
                                    </p>
                                </div>

                                <div class="">
                                    <h4 class="font-semibold text-xl">
                                        Encouraging Patience
                                    </h4>
                                    <p>
                                        <strong>Tip : </strong> Practice
                                        patience with your child, recognising
                                        their need for a calm and supportive
                                        environment.
                                    </p>
                                    <p>
                                        <strong>Example : </strong> Involve them
                                        in activities that require patience,
                                        such as puzzles or gardening,
                                        emphasising the value of taking time to
                                        achieve goals.
                                    </p>
                                </div>

                                <div class="">
                                    <h4 class="font-semibold text-xl">
                                        Providing Supportive Feedback
                                    </h4>
                                    <p>
                                        <strong>Tip : </strong> Give feedback
                                        that reinforces their supportive nature
                                        and encourages their participation.
                                    </p>
                                    <p>
                                        <strong>Example : </strong> Praise their
                                        efforts in helping others and highlight
                                        how their actions positively impact the
                                        family or group.
                                    </p>
                                </div>

                                <div class="">
                                    <h4 class="font-semibold text-xl">
                                        Creating a Structured Environment
                                    </h4>
                                    <p>
                                        <strong>Tip : </strong> Provide clear
                                        guidelines and consistent routines to
                                        help your child feel secure and focused.
                                    </p>
                                    <p>
                                        <strong>Example : </strong> Establish a
                                        daily routine with set times for
                                        activities, homework, and relaxation,
                                        helping them understand what to expect.
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


                    <div class=" ">
                        <div
                            class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                            style="border-radius: 50px"
                        ></div>
                        <h4
                            class="text-3xl font-semibold mt-6 mb-2 text-indigo-600"
                        >
                            If You Are a Dominant (D) Parent with a
                            Supportive-Cautious (SC) Child
                        </h4>
                        <div class="row">
                            <div class="col-6">
                                <div class="space-y-4">
                                    <div>
                                        <h4 class="text-lg font-semibold">
                                            Encouraging Careful Decision-Making:
                                        </h4>
                                        <p>
                                            <strong>Tip : </strong>While you
                                            naturally make quick decisions,
                                            support your SC child's need to
                                            think things through.
                                        </p>
                                        <p>
                                            <strong>Example : </strong>Allow
                                            {{ childName }} extra time to make
                                            decisions, and discuss the pros and
                                            cons of different options together.
                                            This helps them feel confident in
                                            their choices.
                                        </p>
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-semibold">
                                            Promoting Independence with
                                            Guidance:
                                        </h4>
                                        <p>
                                            <strong>Tip : </strong>Encourage
                                            your child to take initiative and
                                            make independent decisions while
                                            providing guidance and support.
                                        </p>
                                        <p>
                                            <strong>Example : </strong>Let
                                            {{ childName }} choose their own
                                            extracurricular activities, and
                                            support them in managing their
                                            schedule. Praise their efforts to
                                            take responsibility.
                                        </p>
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-semibold">
                                            Recognising Efforts and
                                            Achievements:
                                        </h4>
                                        <p>
                                            <strong>Tip : </strong>Acknowledge
                                            your child's thoughtfulness and
                                            reliability by celebrating their
                                            efforts and accomplishments.
                                        </p>
                                        <p>
                                            <strong>Example : </strong>Create a
                                            "success board" where
                                            {{ childName }} can display their
                                            achievements, such as completed
                                            projects or acts of kindness.
                                            Regularly review and celebrate these
                                            successes.
                                        </p>
                                    </div>
                                    <div>
                                        <h4 class="text-lg font-semibold">
                                            Teaching Stress Management:
                                        </h4>
                                        <p>
                                            <strong>Tip : </strong>Help your
                                            child develop strategies to manage
                                            stress and stay calm in challenging
                                            situations.
                                        </p>
                                        <p>
                                            <strong>Example : </strong>Practice
                                            relaxation techniques together, such
                                            as deep breathing exercises or
                                            mindfulness activities. Encourage
                                            {{ childName }} to use these
                                            techniques when they feel
                                            overwhelmed.
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


                    <div class=" ">
                        <div
                            class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                            style="border-radius: 50px"
                        ></div>
                        <h4
                            class="text-3xl font-semibold mt-6 mb-2 text-indigo-600"
                        >
                            If You Are a Dominant (D) Parent with a
                            Supportive-Influential (SI) Child
                        </h4>
                        <div class="row">
                            <div class="col-6">
                                <div class="space-y-4">
                                    <div>
                                        <h4 class="text-xl font-semibold">
                                            Balancing Assertiveness with
                                            Sensitivity:
                                        </h4>
                                        <p>
                                            <strong>Tip : </strong>
                                            While you are naturally assertive
                                            and direct, it’s important to
                                            balance this with sensitivity to
                                            your SI child’s feelings.
                                        </p>
                                        <p>
                                            <strong>Example : </strong>
                                            Encourage {{ childName }} to express
                                            their thoughts and ideas, and listen
                                            actively. Praise their efforts to
                                            speak up, even if their ideas differ
                                            from yours.
                                        </p>
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-semibold">
                                            Encouraging Social Interaction and
                                            Leadership:
                                        </h4>
                                        <p>
                                            <strong>Tip : </strong>
                                            Support your child’s social nature
                                            by providing opportunities for them
                                            to engage with peers and take on
                                            leadership roles.
                                        </p>
                                        <p>
                                            <strong>Example : </strong> Allow
                                            {{ childName }} to organise family
                                            activities or participate in group
                                            projects where they can lead and
                                            collaborate with others. This helps
                                            build their confidence and social
                                            skills.
                                        </p>
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-semibold">
                                            Promoting Decision-Making Skills:
                                        </h4>
                                        <p>
                                            <strong>Tip : </strong>
                                            Encourage your child to make
                                            decisions independently, helping
                                            them build confidence in their
                                            judgment.
                                        </p>
                                        <p>
                                            <strong>Example : </strong> Involve
                                            {{ childName }} in family
                                            decision-making processes, such as
                                            planning a weekend outing or
                                            choosing meals. Discuss the outcomes
                                            of their decisions to reinforce
                                            learning and growth.
                                        </p>
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-semibold">
                                            Supporting Empathy and
                                            Understanding:
                                        </h4>
                                        <p>
                                            <strong>Tip : </strong>
                                            Teach your child the importance of
                                            empathy and understanding others’
                                            perspectives.
                                        </p>
                                        <p>
                                            <strong>Example : </strong>
                                            Engage in activities that require
                                            cooperation and consideration of
                                            others' feelings, such as
                                            volunteering together or caring for
                                            a pet. Discuss the importance of
                                            empathy and how it helps build
                                            strong relationships.
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
    name: "ParentalInsightD",
    layout: AssessmentTypes,
    props: {
        style: String,
        childName: String,
        image: String,
    },
};
</script>
