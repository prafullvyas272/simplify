<template>
    <div class="p-6">
        <div class="p-6">
            <div v-if="style == 'C'" class="space-y-8">
                <!-- Parenting Tips Section -->
                <div class="rounded-lg">
                    <!-- Influential (I) Parent with Cautious (C) Child -->
                    <div class="rounded-lg mb-6">
                        <div
                            class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                            style="border-radius: 50px"
                        ></div>
                        <h4
                            class="text-3xl font-semibold mt-6 mb-2 text-indigo-600"
                        >
                            If You Are an Influential (I) Parent with a Cautious
                            (C) Child
                        </h4>
                        <div class="row">
                            <div class="col-6">
                                <div class="space-y-4 ml-3">
                                    <div>
                                        <strong
                                            >Balancing Enthusiasm with
                                            Precision:</strong
                                        >
                                        <p>
                                            <strong>Tip : </strong>While you
                                            bring energy and enthusiasm,
                                            recognise the importance of your
                                            child’s need for precision and
                                            careful planning.
                                        </p>
                                        <p>
                                            <strong>Example : </strong>
                                            Encourage their detailed approach in
                                            creative projects by discussing
                                            their ideas and planning together.
                                        </p>
                                    </div>
                                    <div>
                                        <strong
                                            >Supporting Structured
                                            Routines:</strong
                                        >
                                        <p>
                                            <strong>Tip : </strong>Provide a
                                            consistent and predictable routine
                                            that helps your child feel secure.
                                        </p>
                                        <p>
                                            <strong>Example : </strong> Use
                                            visual schedules and charts to
                                            outline daily activities, helping
                                            them know what to expect and when.
                                        </p>
                                    </div>
                                    <div>
                                        <strong
                                            >Encouraging Detailed Work:</strong
                                        >
                                        <p>
                                            <strong>Tip : </strong>Nurture an
                                            appreciation for their meticulous
                                            work by engaging in activities that
                                            require attention to detail.
                                        </p>
                                        <p>
                                            <strong>Example : </strong> Involve
                                            your child in organising family
                                            events or creating detailed artwork,
                                            praising their effort and precision.
                                        </p>
                                    </div>
                                    <div>
                                        <strong
                                            >Balancing Social Interaction with
                                            Quiet Time:</strong
                                        >
                                        <p>
                                            <strong>Tip : </strong>Recognise
                                            their need for quiet and focused
                                            time amidst social activities.
                                        </p>
                                        <p>
                                            <strong>Example : </strong> Create a
                                            balance between social activities
                                            and quiet time for independent work
                                            or relaxation.
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
                    <!-- If Influential (I) Parent with Cautious-Dominant (CD) Child -->
                    <div class="mb-8">
                        <div
                            class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                            style="border-radius: 50px"
                        ></div>
                        <h4
                            class="text-3xl font-semibold mt-6 mb-2 text-indigo-600"
                        >
                            If You Are an Influential (I) Parent with a
                            Cautious-Dominant (CD) Child
                        </h4>

                        <div class="row">
                            <div class="col-6">
                                <div class="mb-4">
                                    <h4 class="font-semibold text-xl">
                                        Balancing Enthusiasm with Precision
                                    </h4>
                                    <p>
                                        <strong>Tip : </strong>While your
                                        enthusiasm and energy are great, ensure
                                        that your CD child can focus on their
                                        careful and precise nature.
                                    </p>
                                    <p>
                                        <strong>Example : </strong>Combine fun,
                                        energetic activities with tasks that
                                        require attention to detail, like
                                        building a model or organising a family
                                        event. Celebrate both their enthusiasm
                                        and precision.
                                    </p>
                                </div>

                                <div class="mb-4">
                                    <h4 class="font-semibold text-xl">
                                        Encouraging Structured Social
                                        Interactions
                                    </h4>
                                    <p>
                                        <strong>Tip : </strong>Support your
                                        child’s preference for structured and
                                        meaningful social interactions.
                                    </p>
                                    <p>
                                        <strong>Example : </strong>Arrange
                                        smaller, structured group activities
                                        where {{ childName }} can interact
                                        meaningfully with a few peers. Encourage
                                        discussions about their interests and
                                        ideas to deepen their connections.
                                    </p>
                                </div>

                                <div class="mb-4">
                                    <h4 class="font-semibold text-xl">
                                        Promoting Detailed and Thoughtful
                                        Planning
                                    </h4>
                                    <p>
                                        <strong>Tip : </strong>Involve your
                                        child in planning activities to leverage
                                        their natural inclination for careful
                                        organisation.
                                    </p>
                                    <p>
                                        <strong>Example : </strong>Let
                                        {{ childName }} plan part of a family
                                        trip, such as creating an itinerary or
                                        organising supplies. Discuss how their
                                        careful planning contributes to a
                                        successful and enjoyable experience.
                                    </p>
                                </div>

                                <div class="mb-4">
                                    <h4 class="font-semibold text-xl">
                                        Facilitating Open and Thoughtful
                                        Communication
                                    </h4>
                                    <p>
                                        <strong>Tip : </strong>Promote an
                                        environment where your child feels
                                        comfortable expressing their thoughts
                                        and ideas.
                                    </p>
                                    <p>
                                        <strong>Example : </strong>Create
                                        regular family meetings where
                                        {{ childName }} can share their ideas
                                        and concerns. Listen actively and ask
                                        open-ended questions to encourage deeper
                                        conversations.
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
                    <!-- Influential (I) Parent with Cautious (C) Child -->
                    <div class="rounded-lg mb-6">
                        <div
                            class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                            style="border-radius: 50px"
                        ></div>
                        <h4
                            class="text-3xl font-semibold mt-6 mb-2 text-indigo-600"
                        >
                            If You Are an Influential (I) Parent with a
                            Cautious-Supportive (CS) Child
                        </h4>
                        <div class="row">
                            <div class="col-6">
                                <div class="space-y-4 ml-3">
                                    <div>
                                        <strong>
                                            Balancing Excitement with Structure:
                                        </strong>
                                        <p>
                                            <strong>Tip : </strong> While your
                                            enthusiasm and energy are great,
                                            ensure that {{ childname }} has
                                            structured activities to feel
                                            secure.
                                        </p>
                                        <p>
                                            <strong>Example : </strong>
                                            Alternate between high-energy
                                            activities and calm, structured
                                            tasks. Create a visual schedule to
                                            help them anticipate what comes next
                                            and feel more secure.
                                        </p>
                                    </div>

                                    <div>
                                        <strong>
                                            Encouraging Meaningful Social
                                            Connections:
                                        </strong>
                                        <p>
                                            <strong>Tip : </strong>
                                            Support your child in forming deep
                                            and thoughtful social connections.
                                        </p>
                                        <p>
                                            <strong>Example : </strong> Arrange
                                            smaller, intimate gatherings where
                                            {{ childname }} can interact
                                            meaningfully with a few peers.
                                            Encourage discussions about their
                                            interests and feelings to deepen
                                            their connections.
                                        </p>
                                    </div>

                                    <div>
                                        <strong>
                                            Promoting Detailed and Careful
                                            Planning:
                                        </strong>
                                        <p>
                                            <strong>Tip : </strong>
                                            Involve your child in detailed
                                            planning activities to leverage
                                            their natural inclination for
                                            organisation.
                                        </p>
                                        <p>
                                            <strong>Example : </strong> Let
                                            {{ childname }} plan part of a
                                            family trip, such as creating an
                                            itinerary or organising supplies.
                                            Discuss how their careful planning
                                            contributes to a successful and
                                            enjoyable experience.
                                        </p>
                                    </div>

                                    <div>
                                        <strong>
                                            Recognising and Praising
                                            Thoroughness:
                                        </strong>
                                        <p>
                                            <strong>Tip : </strong>
                                            Provide positive reinforcement for
                                            your child’s thoroughness and
                                            reliability.
                                        </p>
                                        <p>
                                            <strong>Example : </strong>
                                            Compliment {{ childname }} on their
                                            detailed approach to completing
                                            tasks, like organising their room or
                                            doing a school project. Use rewards
                                            that align with their interests to
                                            acknowledge their hard work.
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

<!-- I -->
                    <li class="  ">
                        <div
                            class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                            style="border-radius: 50px"
                        ></div>
                        <h4
                            class="text-center text-md font-semibold text-indigo-600"
                        >
                            If You Are an Influential (I) Parent with a Dominant
                            (D) Child:
                        </h4>

                        <div class="row">
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
                            <div class="col-6">
                                <ul class="mt-2 list-none pl-5 space-y-2">
                                    <li>
                                        <b>Balancing Fun with Structure:</b
                                        ><br />
                                        <span class="font-medium">Tip : </span>
                                        While you naturally create a lively and
                                        fun environment, it’s important to
                                        provide structure and clear expectations
                                        for your D child. They thrive on
                                        challenges and clear goals. <br /><span
                                            class="font-medium"
                                            >Example :
                                        </span>
                                        Set up a reward system where your child
                                        earns points for completing tasks and
                                        reaching goals. This combines fun and
                                        structure, keeping them motivated.
                                    </li>
                                    <li>
                                        <b>Encouraging Focus:</b><br />
                                        <span class="font-medium">Tip : </span>
                                        Help your D child stay on task by
                                        setting specific, achievable goals and
                                        providing consistent feedback. Break
                                        larger tasks into smaller, manageable
                                        steps. <br /><span class="font-medium"
                                            >Example :
                                        </span>
                                        Create a weekly planner with your child,
                                        outlining their tasks and goals. Check
                                        in regularly to monitor their progress
                                        and provide encouragement.
                                    </li>
                                    <li>
                                        <b>Promoting Healthy Competition:</b
                                        ><br />
                                        <span class="font-medium">Tip : </span>
                                        Engage your child in activities that
                                        involve friendly competition,
                                        emphasising the importance of good
                                        sportsmanship and learning from both
                                        wins and losses. <br /><span
                                            class="font-medium"
                                            >Example :
                                        </span>
                                        Organise family game nights where
                                        everyone can compete in a fun and
                                        supportive environment. Celebrate
                                        achievements and discuss what everyone
                                        learned from the experience.
                                    </li>
                                    <li>
                                        <b>Building Decision-Making Skills:</b>
                                        Support your child’s decision-making
                                        abilities by giving them opportunities
                                        to make choices and take on leadership
                                        roles. <br /><span class="font-medium"
                                            >Example :
                                        </span>
                                        Allow your child to plan a weekend
                                        activity or make decisions about their
                                        extracurricular activities. Guide them
                                        through the decision-making process,
                                        discussing the pros and cons of each
                                        option.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>


                </ul>
            </div>

            <!-- For DC Style Type -->
            <div id="DC" v-if="style == 'DC'">
                <div class="space-y-6">



<!-- I -->
                    <div>
                        <div
                            class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                            style="border-radius: 50px"
                        ></div>
                        <h4
                            class="text-3xl font-semibold mt-6 mb-2 text-indigo-600"
                        >
                            If You Are an Influential (I) Parent with a
                            Dominant-Cautious (DC) Child
                        </h4>
                        <div class="row">
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
                            <div class="col-6">
                                <h4 class="text-xl font-semibold">
                                    Balancing Enthusiasm with Structure:
                                </h4>
                                <p>
                                    <strong>Tip : </strong> While you naturally
                                    create a lively and fun environment, it’s
                                    important to provide structure and clear
                                    expectations for your DC child. They thrive
                                    on challenges and clear goals.
                                </p>
                                <p>
                                    <strong>Example : </strong> Set up a reward
                                    system where your child earns points for
                                    completing tasks and reaching goals. This
                                    combines fun and structure, keeping them
                                    motivated.
                                </p>

                                <h4 class="text-xl font-semibold">
                                    Encouraging Precision:
                                </h4>
                                <p>
                                    <strong>Tip : </strong> Help your DC child
                                    focus on accuracy and detail without
                                    becoming overwhelmed. Provide activities
                                    that combine creativity with precision.
                                </p>
                                <p>
                                    <strong>Example : </strong> Engage your
                                    child in arts and crafts projects that
                                    require careful planning and execution.
                                    Praise their attention to detail and
                                    creativity.
                                </p>

                                <h4 class="text-xl font-semibold">
                                    Supporting Analytical Decision-Making:
                                </h4>
                                <p>
                                    <strong>Tip : </strong> Support your child’s
                                    decision-making abilities by giving them
                                    opportunities to make choices and take on
                                    leadership roles, while encouraging
                                    analytical thinking.
                                </p>
                                <p>
                                    <strong>Example : </strong> Allow your child
                                    to plan a weekend activity or make decisions
                                    about their extracurricular activities.
                                    Guide them through the decision-making
                                    process, discussing the pros and cons of
                                    each option.
                                </p>

                                <h4 class="text-xl font-semibold">
                                    Reinforcing Attention to Detail:
                                </h4>
                                <p>
                                    <strong>Tip : </strong> Encourage your child
                                    to pay attention to detail in various tasks
                                    to enhance their precision skills.
                                </p>
                                <p>
                                    <strong>Example : </strong> Involve your
                                    child in cooking or baking, where measuring
                                    ingredients and following recipes exactly
                                    can help them understand the importance of
                                    detail and accuracy.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- For DI Style Type -->
            <div id="DI" v-if="style == 'DI'">
                <div class="space-y-6 mt-4">


<!-- I -->
                    <div class="mt-6">
                        <div
                            class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                            style="border-radius: 50px"
                        ></div>
                        <h4 class="font-semibold text-indigo-600">
                            If You Are an Influential (I) Parent with a
                            Dominant-Influential (DI) Child
                        </h4>
                        <div class="row">
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
                            <div class="col-6">
                                <div class="mt-4">
                                    <h4 class="text-xl font-semibold">
                                        Balancing Fun with Structure
                                    </h4>
                                    <p class="">
                                        <strong>Tip : </strong>While you
                                        naturally create a lively and fun
                                        environment, it’s important to provide
                                        structure and clear expectations for
                                        your DI child. They thrive on challenges
                                        and clear goals.
                                    </p>
                                    <p class="mt-2">
                                        <strong>Example : </strong>Set up a
                                        reward system where your child earns
                                        points for completing tasks and reaching
                                        goals. This combines fun and structure,
                                        keeping them motivated.
                                    </p>
                                </div>

                                <div class="mt-4">
                                    <h4 class="text-xl font-semibold">
                                        Encouraging Focus
                                    </h4>
                                    <p class="">
                                        <strong>Tip : </strong>Help your DI
                                        child stay on task by setting specific,
                                        achievable goals and providing
                                        consistent feedback. Break larger tasks
                                        into smaller, manageable steps.
                                    </p>
                                    <p class="mt-2">
                                        <strong>Example : </strong>Create a
                                        weekly planner with your child outlining
                                        their tasks and goals. Check in
                                        regularly to monitor their progress and
                                        provide encouragement.
                                    </p>
                                </div>

                                <div class="mt-4">
                                    <h4 class="text-xl font-semibold">
                                        Promoting Social Engagement
                                    </h4>
                                    <p class="">
                                        <strong>Tip : </strong>Engage your child
                                        in activities that involve social
                                        interaction, emphasising the importance
                                        of making friends and working together.
                                    </p>
                                    <p class="mt-2">
                                        <strong>Example : </strong>Organise
                                        playdates or group activities where your
                                        child can interact with peers in a fun
                                        and supportive environment. Celebrate
                                        their social successes and discuss what
                                        everyone learned from the experience.
                                    </p>
                                </div>

                                <div class="mt-4">
                                    <h4 class="text-xl font-semibold">
                                        Build Creativity
                                    </h4>
                                    <p class="">
                                        <strong>Tip : </strong>Support your
                                        child’s creative abilities by providing
                                        opportunities for them to express
                                        themselves through art, music, or drama.
                                    </p>
                                    <p class="mt-2">
                                        <strong>Example : </strong>Allow your
                                        child to participate in creative
                                        projects or performances. Encourage them
                                        to share their work with others and
                                        celebrate their creativity.
                                    </p>
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

<!-- I -->
                        <div class="pl-4">
                            <div
                                class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                                style="border-radius: 50px"
                            ></div>

                            <h4 class="text-md font-semibold text-indigo-600">
                                If You Are an Influential (I) Parent with an
                                Influential (I) Child
                            </h4>
                            <div class="row">
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
                                <div class="col-6">
                                    <ul class="list-none pl-6">
                                        <li>
                                            <strong
                                                >Creating a Lively
                                                Environment:</strong
                                            ><br /><strong>Tip : </strong>
                                            Create an energetic and engaging
                                            environment that stimulates your
                                            child’s natural enthusiasm and
                                            creativity. <br />
                                            <strong>Example : </strong>Involve
                                            them in family activities that
                                            encourage interaction and
                                            creativity, such as game nights or
                                            arts and crafts sessions.
                                        </li>
                                        <li>
                                            <strong
                                                >Encouraging Creative
                                                Expression:</strong
                                            ><br /><strong>Tip : </strong>
                                            Provide various outlets for your
                                            child to express their creativity
                                            and ideas. <br /><strong
                                                >Example : </strong
                                            >Enrol them in art classes, drama
                                            clubs, or other creative activities
                                            where they can showcase their
                                            talents.
                                        </li>
                                        <li>
                                            <strong
                                                >Supporting Social Skills
                                                Development:</strong
                                            ><br /><strong>Tip : </strong>
                                            Encourage opportunities for your
                                            child to build and maintain
                                            friendships. <br /><strong
                                                >Example : </strong
                                            >Arrange regular playdates and group
                                            activities that allow them to
                                            practice their social skills in a
                                            fun and supportive environment.
                                        </li>
                                        <li>
                                            <strong
                                                >Providing Positive
                                                Reinforcement:</strong
                                            ><br /><strong>Tip : </strong> Offer
                                            frequent praise and recognition for
                                            their efforts and achievements.
                                            <br />
                                            <strong>Example : </strong>Celebrate
                                            their successes, both big and small,
                                            reinforcing their confidence and
                                            motivation.
                                        </li>
                                    </ul>
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


                        <!-- Encouraging Creativity and Leadership for I Parent with ID Child -->
                        <div class="space-y-4 ml-3">
                            <div
                                class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                                style="border-radius: 50px"
                            ></div>
                            <h4 class="text-md font-semibold text-indigo-600">
                                If You Are an Influential (I) Parent with an
                                Influential-Dominant (ID) Child
                            </h4>
                            <div class="row">
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
                                <div class="col-6">
                                    <div class="space-y-2">
                                        <h5 class="text-md font-semibold">
                                            <b>
                                                Encouraging Creativity and
                                                Leadership:
                                            </b>
                                        </h5>
                                        <p class="text-sm">
                                            <strong>Tip : </strong>Both you and
                                            your ID child thrive on creativity
                                            and leadership. Provide
                                            opportunities for them to express
                                            their ideas and take on leadership
                                            roles.
                                        </p>
                                        <p class="text-sm">
                                            <strong>Example : </strong>Involve
                                            {{ childName }} in creative projects
                                            like planning a family event or
                                            organising a community activity.
                                            Celebrate their innovative ideas and
                                            leadership skills.
                                        </p>
                                    </div>
                                    <div class="space-y-2">
                                        <h5 class="text-md font-semibold">
                                            <b>
                                                Balancing Fun and
                                                Responsibility:
                                            </b>
                                        </h5>
                                        <p class="text-sm">
                                            <strong>Tip : </strong>While having
                                            fun is important, it’s also crucial
                                            to teach your child about
                                            responsibility and following through
                                            on tasks.
                                        </p>
                                        <p class="text-sm">
                                            <strong>Example : </strong>Create a
                                            fun and engaging routine that
                                            includes both enjoyable activities
                                            and responsibilities. Use visual
                                            schedules to help
                                            {{ childName }} stay on track with
                                            their chores and homework.
                                        </p>
                                    </div>
                                    <div class="space-y-2">
                                        <h5 class="text-md font-semibold">
                                            <b>
                                                Promoting Positive Social
                                                Interactions:
                                            </b>
                                        </h5>
                                        <p class="text-sm">
                                            <strong>Tip : </strong>Encourage
                                            your child’s natural sociability by
                                            arranging social activities and
                                            playdates.
                                        </p>
                                        <p class="text-sm">
                                            <strong>Example : </strong>Organise
                                            regular social events where
                                            {{ childName }} can interact with
                                            friends and family. Encourage them
                                            to join clubs or teams that match
                                            their interests.
                                        </p>
                                    </div>
                                    <div class="space-y-2">
                                        <h5 class="text-md font-semibold">
                                            <b>
                                                Providing Positive
                                                Reinforcement:
                                            </b>
                                        </h5>
                                        <p class="text-sm">
                                            <strong>Tip : </strong>Celebrate
                                            your child’s achievements and
                                            efforts with enthusiasm. Positive
                                            reinforcement is key to keeping them
                                            motivated.
                                        </p>
                                        <p class="text-sm">
                                            <strong>Example : </strong>Praise
                                            {{ childName }} regularly for their
                                            accomplishments, whether it’s
                                            finishing a school project or being
                                            a good friend. Use rewards like
                                            extra playtime or a favourite treat
                                            to show appreciation for their
                                            efforts.
                                        </p>
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




                    <!-- I -->
                    <div
                        class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                        style="border-radius: 50px"
                    ></div>
                    <h4
                        class="text-3xl font-semibold mt-6 mb-2 text-indigo-600"
                    >
                        If You Are an Influential (I) Parent with an
                        Influential-Supportive (IS) Child
                    </h4>
                    <div class="row">
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
                        <div class="col-6">
                            <div class="">
                                <p>
                                    <strong>Nurturing Creativity:</strong>
                                    <br /><strong>Tip : </strong> Both you and
                                    your IS child thrive on creativity. Provide
                                    plenty of opportunities for imaginative and
                                    artistic expression.
                                </p>
                                <p>
                                    <strong>Example : </strong> Encourage
                                    {{ childName }} to engage in creative
                                    activities like drawing, painting, or
                                    writing stories. Participate with them,
                                    sharing your own creative ideas and
                                    projects.
                                </p>
                            </div>

                            <div class="">
                                <p>
                                    <strong
                                        >Encouraging Social Interaction:</strong
                                    ><br /><strong>Tip : </strong> Your social
                                    nature aligns well with your child’s.
                                    Support their desire for social interaction
                                    by arranging playdates and group activities.
                                </p>
                                <p>
                                    <strong>Example : </strong> Organise regular
                                    social events where {{ childName }} can
                                    interact with friends and family. Encourage
                                    them to join clubs or teams that match their
                                    interests.
                                </p>
                            </div>

                            <div class="">
                                <p>
                                    <strong
                                        >Balancing Fun with
                                        Responsibility:</strong
                                    ><br /><strong>Tip : </strong> While having
                                    fun is important, it’s also crucial to teach
                                    your child about responsibility and
                                    following through on tasks.
                                </p>
                                <p>
                                    <strong>Example : </strong> Create a fun and
                                    engaging routine that includes both
                                    enjoyable activities and responsibilities.
                                    Use visual schedules to help
                                    {{ childName }} stay on track with their
                                    chores and homework.
                                </p>
                            </div>

                            <div class="">
                                <p>
                                    <strong
                                        >Providing Positive
                                        Reinforcement:</strong
                                    ><br /><strong>Tip : </strong> Celebrate
                                    your child’s achievements and efforts with
                                    enthusiasm. Positive reinforcement is key to
                                    keeping them motivated.
                                </p>
                                <p>
                                    <strong>Example : </strong> Praise
                                    {{ childName }} regularly for their
                                    accomplishments, whether it’s finishing a
                                    school project or being a good friend. Use
                                    rewards like extra playtime or a favorite
                                    treat to show appreciation for their
                                    efforts.
                                </p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <!-- For S Style Type -->
            <div id="S" v-if="style == 'S'">
                <div class="space-y-6">


                    <!-- I -->

                    <div
                        class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                        style="border-radius: 50px"
                    ></div>
                    <h4
                        class="text-3xl font-semibold mt-6 mb-2 text-indigo-600"
                    >
                        If You Are an Influential (I) Parent with a Supportive
                        (S) Child
                    </h4>
                    <div class="row">
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
                        <div class="col-6">
                            <div class="space-y-4 ml-3">
                                <div class="">
                                    <h4 class="font-semibold text-xl">
                                        Balancing Enthusiasm with Stability
                                    </h4>
                                    <p>
                                        <strong>Tip : </strong> While you bring
                                        energy and enthusiasm, ensure your S
                                        child has a stable and predictable
                                        environment.
                                    </p>
                                    <p>
                                        <strong>Example : </strong> Use visual
                                        schedules and charts to outline daily
                                        activities, helping them feel secure and
                                        organised.
                                    </p>
                                </div>

                                <div class="">
                                    <h4 class="font-semibold text-xl">
                                        Encouraging Social Interaction
                                    </h4>
                                    <p>
                                        <strong>Tip : </strong> Create
                                        opportunities for your child to engage
                                        with others in a supportive and
                                        collaborative manner.
                                    </p>
                                    <p>
                                        <strong>Example : </strong> Arrange
                                        playdates or group activities where they
                                        can work with peers, emphasising the
                                        importance of teamwork and cooperation.
                                    </p>
                                </div>

                                <div class="">
                                    <h4 class="font-semibold text-xl">
                                        Providing Positive Reinforcement
                                    </h4>
                                    <p>
                                        <strong>Tip : </strong> Offer praise and
                                        recognition for their supportive actions
                                        and contributions.
                                    </p>
                                    <p>
                                        <strong>Example : </strong> Celebrate
                                        their efforts in helping others and
                                        highlight how their actions make a
                                        difference, boosting their confidence
                                        and self-esteem.
                                    </p>
                                </div>

                                <div class="">
                                    <h4 class="font-semibold text-xl">
                                        Encouraging Leadership in Group Settings
                                    </h4>
                                    <p>
                                        <strong>Tip : </strong> Encourage your
                                        child to take on small leadership roles
                                        within group activities.
                                    </p>
                                    <p>
                                        <strong>Example : </strong> Assign them
                                        roles such as team leader in group
                                        projects or activities, supporting their
                                        growth in confidence and leadership
                                        skills.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <!-- For SC Style Type -->
            <div id="SC" v-if="style == 'SC'">
                <div class="space-y-6">



                    <!-- I -->
                    <div class=" ">
                        <div
                            class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                            style="border-radius: 50px"
                        ></div>
                        <h4
                            class="text-3xl font-semibold mt-6 mb-2 text-indigo-600"
                        >
                            If You Are an Influential (I) Parent with a
                            Supportive-Cautious (SC) Child
                        </h4>
                        <div class="row">
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
                            <div class="col-6">
                                <div class="space-y-4">
                                    <div>
                                        <h4 class="text-xl font-semibold">
                                            Balancing Enthusiasm with Calm:
                                        </h4>
                                        <p>
                                            <strong>Tip : </strong>While you
                                            bring energy and excitement, it's
                                            important to balance this with calm
                                            and structured activities that your
                                            SC child thrives in.
                                        </p>
                                        <p>
                                            <strong>Example : </strong>Create a
                                            balanced routine that includes both
                                            fun, energetic activities and calm,
                                            focused ones. Use visual schedules
                                            to help {{ childName }} stay on
                                            track with their responsibilities.
                                        </p>
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-semibold">
                                            Promoting Careful Planning and
                                            Thoughtfulness:
                                        </h4>
                                        <p>
                                            <strong>Tip : </strong>Support your
                                            child's natural inclination towards
                                            careful planning by involving them
                                            in organising activities.
                                        </p>
                                        <p>
                                            <strong>Example : </strong>Allow
                                            {{ childName }} to help plan family
                                            events or organise their own
                                            schedule for homework and play.
                                            Discuss the importance of planning
                                            and being prepared.
                                        </p>
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-semibold">
                                            Encouraging Social Interaction and
                                            Creativity:
                                        </h4>
                                        <p>
                                            <strong>Tip : </strong>Both you and
                                            your SC child can benefit from
                                            engaging in social and creative
                                            activities together.
                                        </p>
                                        <p>
                                            <strong>Example : </strong>Organise
                                            regular family gatherings,
                                            playdates, or creative projects like
                                            art and storytelling. Participate
                                            with them, sharing your own creative
                                            ideas and social skills.
                                        </p>
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-semibold">
                                            Encouraging Open Communication:
                                        </h4>
                                        <p>
                                            <strong>Tip : </strong>Maintain open
                                            lines of communication where your
                                            child feels comfortable sharing
                                            their thoughts and ideas.
                                        </p>
                                        <p>
                                            <strong>Example : </strong>Have
                                            regular family discussions where
                                            {{ childName }} can express their
                                            opinions and contribute to family
                                            decisions. Show genuine interest in
                                            their ideas and provide constructive
                                            feedback.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- For SC Style Type -->
            <div id="SI" v-if="style == 'SI'">
                <div class="space-y-6">


                    <!-- I -->
                    <div class=" ">
                        <div
                            class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                            style="border-radius: 50px"
                        ></div>
                        <h4
                            class="text-3xl font-semibold mt-6 mb-2 text-indigo-600"
                        >
                            If You Are an Influential (I) Parent with a
                            Supportive-Influential (SI) Child
                        </h4>
                        <div class="row">
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
                            <div class="col-6">
                                <div class="space-y-4">
                                    <div>
                                        <h4 class="text-xl font-semibold">
                                            Encouraging Social Interaction and
                                            Creativity:
                                        </h4>
                                        <p>
                                            <strong>Tip : </strong>
                                            Both you and your SI child thrive on
                                            social interactions and creative
                                            expression. Provide opportunities
                                            for them to engage in social and
                                            creative activities.
                                        </p>
                                        <p>
                                            <strong>Example : </strong>
                                            Organise regular family gatherings,
                                            playdates, or creative projects like
                                            art and storytelling. Participate
                                            with them, sharing your own creative
                                            ideas and social skills.
                                        </p>
                                    </div>

                                    <div>
                                        <h4 class="text-xl font-semibold">
                                            Balancing Fun with Responsibility:
                                        </h4>
                                        <p>
                                            <strong>Tip : </strong>
                                            While having fun is important, it’s
                                            also crucial to teach your child
                                            about responsibility and following
                                            through on tasks.
                                        </p>
                                        <p>
                                            <strong>Example : </strong> Create a
                                            fun and engaging routine that
                                            includes both enjoyable activities
                                            and responsibilities. Use visual
                                            schedules to help
                                            {{ childName }} stay on track with
                                            their chores and homework.
                                        </p>
                                    </div>

                                    <div>
                                        <h4 class="text-xl font-semibold">
                                            Promoting Leadership and Teamwork:
                                        </h4>
                                        <p>
                                            <strong>Tip : </strong>
                                            Encourage your child’s natural
                                            leadership and teamwork skills by
                                            providing opportunities for them to
                                            take on supportive leadership roles.
                                        </p>
                                        <p>
                                            <strong>Example : </strong> Allow
                                            {{ childName }} to lead family
                                            activities or group projects,
                                            emphasising the importance of
                                            teamwork and cooperation. Celebrate
                                            their successes and provide guidance
                                            when needed.
                                        </p>
                                    </div>

                                    <div>
                                        <h4 class="text-xl font-semibold">
                                            Providing Positive Reinforcement:
                                        </h4>
                                        <p>
                                            <strong>Tip : </strong>
                                            Celebrate your child’s achievements
                                            and efforts with enthusiasm.
                                            Positive reinforcement is key to
                                            keeping them motivated.
                                        </p>
                                        <p>
                                            <strong>Example : </strong> Praise
                                            {{ childName }} regularly for their
                                            accomplishments, whether it’s
                                            finishing a school project or being
                                            a good friend. Use rewards like
                                            extra playtime or a favourite treat
                                            to show appreciation for their
                                            efforts.
                                        </p>
                                    </div>
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
    name: "ParentalInsightI",
    layout: AssessmentTypes,
    props: {
        style: String,
        childName: String,
        image: String,
    },
};
</script>
