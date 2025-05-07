<template>
    <div class="p-6">
        <div class="p-6">
            <div v-if="style == 'C'" class="space-y-8">
                <!-- Parenting Tips Section -->
                <div class="rounded-lg">
                    <!-- Cautious (C) Parent with Cautious (C) Child -->
                    <div class="rounded-lg mb-6">
                        <div
                            class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                            style="border-radius: 50px"
                        ></div>
                        <h4
                            class="text-3xl font-semibold mt-6 mb-2 text-indigo-600"
                        >
                            If You Are a Cautious (C) Parent with a Cautious (C)
                            Child
                        </h4>
                        <div class="row">
                            <div class="col-6">
                                <div class="space-y-4 ml-3">
                                    <div>
                                        <strong
                                            >Supporting Detailed and Structured
                                            Learning:</strong
                                        >
                                        <p>
                                            <strong>Tip : </strong>Create an
                                            environment that values precision,
                                            structure, and detailed work.
                                        </p>
                                        <p>
                                            <strong>Example : </strong> Work
                                            together on organising their study
                                            space or planning their activities,
                                            emphasising the importance of order
                                            and clarity.
                                        </p>
                                    </div>
                                    <div>
                                        <strong
                                            >Encouraging Risk-Taking and
                                            Flexibility:</strong
                                        >
                                        <p>
                                            <strong>Tip : </strong>Gently
                                            encourage your child to step out of
                                            their comfort zone and try new
                                            things.
                                        </p>
                                        <p>
                                            <strong>Example : </strong>
                                            Introduce new activities gradually,
                                            praising their efforts and
                                            discussing the benefits of trying
                                            different approaches.
                                        </p>
                                    </div>
                                    <div>
                                        <strong
                                            >Balancing Perfectionism with
                                            Realistic Goals:</strong
                                        >
                                        <p>
                                            <strong>Tip : </strong>Help your
                                            child set realistic goals and
                                            understand that making mistakes is a
                                            part of learning.
                                        </p>
                                        <p>
                                            <strong>Example : </strong> Set
                                            achievable milestones for projects
                                            and celebrate progress, emphasising
                                            that perfection is not always
                                            necessary.
                                        </p>
                                    </div>
                                    <div>
                                        <strong
                                            >Providing Consistent Support and
                                            Feedback:</strong
                                        >
                                        <p>
                                            <strong>Tip : </strong>Offer
                                            consistent support and constructive
                                            feedback to help them improve.
                                        </p>
                                        <p>
                                            <strong>Example : </strong>
                                            Regularly discuss their progress and
                                            provide specific suggestions for
                                            improvement, reinforcing their
                                            efforts and achievements.
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
                    <!-- If Cautious (C) Parent with Cautious-Dominant (CD) Child -->
                    <div>
                        <div
                            class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                            style="border-radius: 50px"
                        ></div>
                        <h4
                            class="text-3xl font-semibold mt-6 mb-2 text-indigo-600"
                        >
                            If You Are a Cautious (C) Parent with a
                            Cautious-Dominant (CD) Child
                        </h4>

                        <div class="row">
                            <div class="col-6">
                                <div class="mb-4">
                                    <h4 class="font-semibold text-xl">
                                        Encouraging Confident Leadership
                                    </h4>
                                    <p>
                                        <strong>Tip : </strong>While you both
                                        value careful planning, it's important
                                        to encourage your CD child to take on
                                        leadership roles confidently.
                                    </p>
                                    <p>
                                        <strong>Example : </strong>Allow
                                        {{ childName }} to lead a small project
                                        at home, such as planning a family
                                        outing. Discuss how their detailed
                                        planning can help ensure the success of
                                        the activity.
                                    </p>
                                </div>

                                <div class="mb-4">
                                    <h4 class="font-semibold text-xl">
                                        Balancing Structure with Adaptability
                                    </h4>
                                    <p>
                                        <strong>Tip : </strong>Support your
                                        child in being adaptable while
                                        maintaining their structured approach.
                                    </p>
                                    <p>
                                        <strong>Example : </strong>Involve
                                        {{ childName }} in activities that
                                        require quick thinking and flexibility,
                                        like trying new recipes or spontaneous
                                        games. Celebrate their ability to adapt
                                        while keeping things organised.
                                    </p>
                                </div>

                                <div class="mb-4">
                                    <h4 class="font-semibold text-xl">
                                        Recognising and Praising Precision
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
                                        Highlight how their precision is a
                                        valuable trait.
                                    </p>
                                </div>

                                <div class="mb-4">
                                    <h4 class="font-semibold text-xl">
                                        Creating a Calm and Organised
                                        Environment
                                    </h4>
                                    <p>
                                        <strong>Tip : </strong>Ensure that your
                                        home environment is calm and
                                        well-organised, helping your child feel
                                        secure.
                                    </p>
                                    <p>
                                        <strong>Example : </strong>Maintain a
                                        consistent daily routine and organise
                                        spaces. This stability supports
                                        {{ childName }} ’s need for order and
                                        predictability.
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
                    <!-- Cautious (C) Parent with Cautious (C) Child -->
                    <div class="rounded-lg mb-6">
                        <div
                            class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                            style="border-radius: 50px"
                        ></div>
                        <h4
                            class="text-3xl font-semibold mt-6 mb-2 text-indigo-600"
                        >
                            If You Are a Cautious (C) Parent with a
                            Cautious-Supportive (CS) Child
                        </h4>
                        <div class="row">
                            <div class="col-6">
                                <div class="space-y-4 ml-3">
                                    <div>
                                        <strong>
                                            Balancing Caution with
                                            Encouragement:
                                        </strong>
                                        <p>
                                            <strong>Tip : </strong>
                                            While you both value careful
                                            consideration, encourage your child
                                            to take on new challenges with
                                            confidence.
                                        </p>
                                        <p>
                                            <strong>Example : </strong> Allow
                                            {{ childname }} to try new
                                            activities or tasks with your
                                            support. Reassure them that it's
                                            okay to make mistakes and learn from
                                            them.
                                        </p>
                                    </div>

                                    <div>
                                        <strong>
                                            Recognising and Praising Detailed
                                            Work:
                                        </strong>
                                        <p>
                                            <strong>Tip : </strong>
                                            Provide positive reinforcement for
                                            your child’s meticulous approach and
                                            attention to detail.
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
                                            Creating a Calm and Organised
                                            Environment:
                                        </strong>
                                        <p>
                                            <strong>Tip : </strong>
                                            Ensure that your home environment is
                                            calm and well-organised, helping
                                            your child feel secure.
                                        </p>
                                        <p>
                                            <strong>Example : </strong> Maintain
                                            a consistent daily routine and
                                            organise spaces. This stability
                                            supports {{ childname }}’s need for
                                            order and predictability.
                                        </p>
                                    </div>

                                    <div>
                                        <strong>
                                            Leveraging Your Cautious Nature:
                                        </strong>
                                        <p>
                                            <strong>Tip : </strong>
                                            Use your natural inclination for
                                            careful planning to teach your child
                                            the value of preparation and
                                            foresight.
                                        </p>
                                        <p>
                                            <strong>Example : </strong> Involve
                                            {{ childname }} in planning family
                                            activities, discussing the steps
                                            involved and potential challenges.
                                            Your approach helps them appreciate
                                            the benefits of being well-prepared.
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
                    <!-- C -->
                    <li class="  ">
                        <div
                            class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                            style="border-radius: 50px"
                        ></div>
                        <h4
                            class="text-center text-md font-semibold text-indigo-600"
                        >
                            If You Are a Cautious (C) Parent with a Dominant (D)
                            Child:
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
                                        <b>Promoting Creativity:</b>
                                        <br />
                                        <span class="font-medium">Tip : </span>
                                        While you value organisation and
                                        precision, it’s important to allow your
                                        D child to explore and make mistakes.
                                        Encourage creative problem-solving and
                                        experimentation. <br /><span
                                            class="font-medium"
                                            >Example :
                                        </span>
                                        Provide open-ended art supplies or
                                        building materials and encourage your
                                        child to create their own projects.
                                        Praise their creativity and unique
                                        ideas, even if they are different from
                                        your expectations.
                                    </li>
                                    <li>
                                        <b>Simplifying Communication:</b>
                                        <br />
                                        <span class="font-medium">Tip : </span>
                                        Avoid overloading your child with too
                                        many details. Be concise and clear in
                                        your communication, ensuring that they
                                        understand the key points. <br /><span
                                            class="font-medium"
                                            >Example :
                                        </span>
                                        When giving instructions, break them
                                        down into simple steps and check for
                                        understanding. Use visual aids, such as
                                        charts or diagrams, to reinforce your
                                        message.
                                    </li>
                                    <li>
                                        <b>Encouraging Leadership:</b>
                                        <br />
                                        <span class="font-medium">Tip : </span>
                                        Support your child’s natural leadership
                                        abilities by providing opportunities for
                                        them to lead projects or activities.
                                        <br /><span class="font-medium"
                                            >Example :
                                        </span>
                                        Assign your child the role of “project
                                        manager” for a family project, such as
                                        organising a garage sale or planning a
                                        family trip. Allow them to make
                                        decisions and take responsibility for
                                        the outcome.
                                    </li>
                                    <li>
                                        <b
                                            >Balancing Structure with
                                            Flexibility:</b
                                        >
                                        <br />
                                        <span class="font-medium">Tip : </span>
                                        While you prefer structured
                                        environments, it’s important to allow
                                        some flexibility for your child to take
                                        initiative and make decisions.
                                        <br /><span class="font-medium"
                                            >Example :
                                        </span>
                                        Establish a routine that includes
                                        designated times for structured
                                        activities and free time where your
                                        child can choose what they want to do.
                                        This balance helps them develop
                                        independence while maintaining order.
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


                    <!-- C -->
                    <div>
                        <div
                            class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                            style="border-radius: 50px"
                        ></div>
                        <h4
                            class="text-3xl font-semibold mt-6 mb-2 text-indigo-600"
                        >
                            If You Are a Cautious (C) Parent with a
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
                                    Promoting Structured Independence:
                                </h4>
                                <p>
                                    <strong>Tip : </strong> While you value
                                    structure and precision, it’s important to
                                    encourage your DC child to take on
                                    responsibilities independently within a
                                    clear framework.
                                </p>
                                <p>
                                    <strong>Example : </strong> Allow your child
                                    to manage their own study schedule,
                                    providing guidelines but letting them decide
                                    the specific timing and order of tasks.
                                    Praise their organisational skills and
                                    independence.
                                </p>

                                <h4 class="text-xl font-semibold">
                                    Balancing Perfectionism with Flexibility:
                                </h4>
                                <p>
                                    <strong>Tip : </strong> Help your child
                                    understand that while striving for
                                    perfection is admirable, being adaptable is
                                    also crucial. Teach them to balance their
                                    meticulousness with the ability to adapt
                                    when needed.
                                </p>
                                <p>
                                    <strong>Example : </strong> When your child
                                    works on a project, discuss potential
                                    changes and how to handle them. Emphasise
                                    that adapting to new situations can lead to
                                    improved outcomes.
                                </p>

                                <h4 class="text-xl font-semibold">
                                    Encouraging Analytical Leadership:
                                </h4>
                                <p>
                                    <strong>Tip : </strong> Support your child’s
                                    leadership abilities by providing
                                    opportunities that require both analytical
                                    thinking and decision-making.
                                </p>
                                <p>
                                    <strong>Example : </strong> Assign your
                                    child a project that involves research and
                                    analysis, such as planning a family budget
                                    or organising a detailed itinerary for a
                                    trip. Allow them to lead and make key
                                    decisions.
                                </p>

                                <h4 class="text-xl font-semibold">
                                    Simplifying Communication:
                                </h4>
                                <p>
                                    <strong>Tip : </strong> Communicate clearly
                                    and concisely, avoiding overwhelming your
                                    child with too many details at once. Focus
                                    on key points to ensure understanding.
                                </p>
                                <p>
                                    <strong>Example : </strong> When giving
                                    instructions for a task, break them down
                                    into simple, manageable steps. Use visual
                                    aids like charts or checklists to help your
                                    child follow along and stay organised.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- For DI Style Type -->
            <div id="DI" v-if="style == 'DI'">
                <div class="space-y-6 mt-4">


                    <!-- C -->
                    <div class="mt-6">
                        <div
                            class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                            style="border-radius: 50px"
                        ></div>
                        <h4 class="font-semibold text-indigo-600">
                            If You Are a Cautious (C) Parent with a
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
                                        Encouraging Expressive Outlets
                                    </h4>
                                    <p class="">
                                        <strong>Tip : </strong>While you value
                                        organisation and structure, it’s
                                        important to support your DI child’s
                                        need for creative and expressive
                                        activities.
                                    </p>
                                    <p class="mt-2">
                                        <strong>Example : </strong>Provide
                                        opportunities for your child to engage
                                        in activities like drama, music, or
                                        dance, where they can express themselves
                                        and showcase their talents. Encourage
                                        them to share their creations with
                                        family and friends.
                                    </p>
                                </div>

                                <div class="mt-4">
                                    <h4 class="text-xl font-semibold">
                                        Balancing Detail with Big Picture
                                    </h4>
                                    <p class="">
                                        <strong>Tip : </strong>While you focus
                                        on details and precision, help your DI
                                        child see the bigger picture and the
                                        impact of their actions.
                                    </p>
                                    <p class="mt-2">
                                        <strong>Example : </strong>When working
                                        on projects, discuss both the detailed
                                        steps and the overall goal. Encourage
                                        your child to think about how their
                                        actions contribute to the larger
                                        outcome, promoting both their attention
                                        to detail and visionary thinking.
                                    </p>
                                </div>

                                <div class="mt-4">
                                    <h4 class="text-xl font-semibold">
                                        Supporting Social Leadership
                                    </h4>
                                    <p class="">
                                        <strong>Tip : </strong>Encourage your
                                        child’s natural leadership abilities in
                                        social settings while guiding them to be
                                        considerate of others.
                                    </p>
                                    <p class="mt-2">
                                        <strong>Example : </strong>Suggest your
                                        child take on leadership roles in group
                                        activities, such as being the team
                                        captain in sports or the leader in group
                                        projects. Teach them the importance of
                                        listening to team members and valuing
                                        their contributions.
                                    </p>
                                </div>

                                <div class="mt-4">
                                    <h4 class="text-xl font-semibold">
                                        Creating Flexible Structures
                                    </h4>
                                    <p class="">
                                        <strong>Tip : </strong>Combine your need
                                        for structure with your child’s need for
                                        flexibility and spontaneity.
                                    </p>
                                    <p class="mt-2">
                                        <strong>Example : </strong>Establish a
                                        daily routine that includes both
                                        structured activities and free time.
                                        Allow your child to choose how they
                                        spend their free time, encouraging them
                                        to explore new interests and hobbies
                                        while maintaining a sense of order in
                                        their day.
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

                        <!-- C -->
                        <div class="pl-4">
                            <div
                                class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                                style="border-radius: 50px"
                            ></div>
                            <h4 class="text-md font-semibold text-indigo-600">
                                If You Are a Cautious (C) Parent with an
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
                                                >Balancing Structure with
                                                Flexibility:</strong
                                            ><br /><strong>Tip : </strong>
                                            While you prefer structure, allow
                                            some flexibility for your child to
                                            explore their interests and make
                                            decisions.
                                            <br /><strong> Example : </strong>
                                            Establish a routine that includes
                                            both structured activities and free
                                            time for your child to choose their
                                            own activities.
                                        </li>
                                        <li>
                                            <strong
                                                >Encouraging Creative
                                                Expression:</strong
                                            ><br /><strong>Tip : </strong>
                                            Provide various outlets for your
                                            child to express their creativity
                                            and ideas. <br />
                                            <strong>Example : </strong>Enrol
                                            them in art classes, drama clubs, or
                                            other creative activities where they
                                            can showcase their talents.
                                        </li>
                                        <li>
                                            <strong
                                                >Supporting Social
                                                Interaction:</strong
                                            >
                                            <br /><strong>Tip : </strong
                                            >Recognise and support your child’s
                                            need for social interaction and
                                            communication. <br />
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
                                            enthusiasm and social skills. <br />
                                            <strong>Example : </strong>Celebrate
                                            their efforts in making friends and
                                            engaging with others, highlighting
                                            how their positive energy impacts
                                            those around them.
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


                        <!-- Encouraging Creative Expression for C Parent with ID Child -->
                        <div class="space-y-4 ml-3">
                            <div
                                class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                                style="border-radius: 50px"
                            ></div>
                            <h4 class="text-md font-semibold text-indigo-600">
                                If You Are a Cautious (C) Parent with an
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
                                    <div class="space-y-2">
                                        <h5 class="text-md font-semibold">
                                            <b>
                                                Encouraging Creative Expression
                                                and Leadership:
                                            </b>
                                        </h5>
                                        <p class="text-sm">
                                            <strong>Tip : </strong>While you
                                            value structure and precision, it’s
                                            important to provide opportunities
                                            for your ID child to explore their
                                            creativity and take on leadership
                                            roles.
                                        </p>
                                        <p class="text-sm">
                                            <strong>Example : </strong>Encourage
                                            {{ childName }} to engage in
                                            creative activities like drawing,
                                            storytelling, or building projects.
                                            Allow them to take the lead in
                                            organising family activities or
                                            events.
                                        </p>
                                    </div>
                                    <div class="space-y-2">
                                        <h5 class="text-md font-semibold">
                                            <b>
                                                Balancing Structure with
                                                Flexibility:
                                            </b>
                                        </h5>
                                        <p class="text-sm">
                                            <strong>Tip : </strong>Although you
                                            prefer structured environments,
                                            allowing flexibility can help your
                                            child thrive.
                                        </p>
                                        <p class="text-sm">
                                            <strong>Example : </strong>Create a
                                            daily routine that includes both
                                            structured activities and free time
                                            for {{ childName }} to choose their
                                            own activities. This balance helps
                                            them develop independence while
                                            still providing the structure they
                                            need.
                                        </p>
                                    </div>
                                    <div class="space-y-2">
                                        <h5 class="text-md font-semibold">
                                            <b>
                                                Supporting Social Interaction:
                                            </b>
                                        </h5>
                                        <p class="text-sm">
                                            <strong>Tip : </strong>Encourage
                                            your child’s natural inclination
                                            towards social interaction by
                                            providing opportunities for them to
                                            engage with others.
                                        </p>
                                        <p class="text-sm">
                                            <strong>Example : </strong>Arrange
                                            playdates, group activities, or
                                            family outings where
                                            {{ childName }} can interact with
                                            peers. Support their participation
                                            in clubs or teams that align with
                                            their interests.
                                        </p>
                                    </div>
                                    <div class="space-y-2">
                                        <h5 class="text-md font-semibold">
                                            <b>
                                                Developing Patience and
                                                Attention to Detail:
                                            </b>
                                        </h5>
                                        <p class="text-sm">
                                            <strong>Tip : </strong>Help your
                                            child develop patience and focus on
                                            details, balancing their enthusiasm
                                            with careful planning.
                                        </p>
                                        <p class="text-sm">
                                            <strong>Example : </strong>Engage
                                            {{ childName }} in activities that
                                            require attention to detail and
                                            patience, such as building models or
                                            completing puzzles. Teach them to
                                            plan their tasks and think through
                                            steps before acting.
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


                    <!-- C -->
                    <div
                        class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                        style="border-radius: 50px"
                    ></div>
                    <h4
                        class="text-3xl font-semibold mt-6 mb-2 text-indigo-600"
                    >
                        If You Are a Cautious (C) Parent with an
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
                                    <strong
                                        >Encouraging Creative
                                        Expression:</strong
                                    ><br /><strong>Tip : </strong> While you
                                    value structure and precision, it’s
                                    important to provide opportunities for your
                                    IS child to explore their creativity.
                                </p>
                                <p>
                                    <strong>Example : </strong> Set aside time
                                    for {{ childName }} to engage in creative
                                    activities like drawing, painting, or
                                    crafting. Encourage them to express their
                                    ideas freely and praise their creativity.
                                </p>
                            </div>

                            <div class="">
                                <p>
                                    <strong
                                        >Balancing Structure with
                                        Flexibility:</strong
                                    ><br /><strong>Tip : </strong> Although you
                                    prefer structured environments, allowing
                                    flexibility can help your child thrive.
                                </p>
                                <p>
                                    <strong>Example : </strong> Create a daily
                                    routine that includes both structured
                                    activities and free time for
                                    {{ childName }} to choose their own
                                    activities. This balance helps them develop
                                    independence while still providing the
                                    structure they need.
                                </p>
                            </div>

                            <div class="">
                                <p>
                                    <strong
                                        >Supporting Social Interaction:</strong
                                    ><br /><strong>Tip : </strong> Encourage
                                    your child’s natural inclination towards
                                    social interaction by providing
                                    opportunities for them to engage with
                                    others.
                                </p>
                                <p>
                                    <strong>Example : </strong> Arrange
                                    playdates, group activities, or family
                                    outings where {{ childName }} can interact
                                    with peers. Support their participation in
                                    clubs or teams that align with their
                                    interests.
                                </p>
                            </div>

                            <div class="">
                                <p>
                                    <strong
                                        >Promoting Empathy and
                                        Understanding:</strong
                                    >
                                    <br /><strong>Tip : </strong> Teach your
                                    child the importance of empathy and
                                    understanding others' feelings.
                                </p>
                                <p>
                                    <strong>Example : </strong> Engage in
                                    activities that require taking turns and
                                    sharing, such as cooperative games or family
                                    projects. Discuss different perspectives and
                                    encourage {{ childName }} to consider
                                    others' feelings in various situations.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- For S Style Type -->
            <div id="S" v-if="style == 'S'">
                <div class="space-y-6">




                    <!-- C -->
                    <div
                        class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                        style="border-radius: 50px"
                    ></div>
                    <h4
                        class="text-3xl font-semibold mt-6 mb-2 text-indigo-600"
                    >
                        If You Are a Cautious (C) Parent with a Supportive (S)
                        Child
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
                                        Creating a Structured Environment
                                    </h4>
                                    <p>
                                        <strong>Tip : </strong> Provide a
                                        well-organised and predictable
                                        environment where your child feels
                                        secure.
                                    </p>
                                    <p>
                                        <strong>Example : </strong> Use visual
                                        schedules and routines to help your
                                        child understand what to expect each
                                        day.
                                    </p>
                                </div>

                                <div class="">
                                    <h4 class="font-semibold text-xl">
                                        Encouraging Social Interaction
                                    </h4>
                                    <p>
                                        <strong>Tip : </strong> Encourage
                                        opportunities for your child to engage
                                        in group activities and build social
                                        confidence.
                                    </p>
                                    <p>
                                        <strong>Example : </strong> Arrange
                                        playdates or group projects where they
                                        can interact with peers and develop
                                        their social skills.
                                    </p>
                                </div>

                                <div class="">
                                    <h4 class="font-semibold text-xl">
                                        Balancing Structure with Flexibility
                                    </h4>
                                    <p>
                                        <strong>Tip : </strong> While you prefer
                                        structure, allow some flexibility for
                                        your child to explore their interests
                                        and make decisions.
                                    </p>
                                    <p>
                                        <strong>Example : </strong> Establish a
                                        routine that includes both structured
                                        activities and free time for your child
                                        to choose their own activities.
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- For SC Style Type -->
            <div id="SC" v-if="style == 'SC'">
                <div class="space-y-6">


                    <!-- C -->
                    <div class=" ">
                        <div
                            class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                            style="border-radius: 50px"
                        ></div>
                        <h4
                            class="text-3xl font-semibold mt-6 mb-2 text-indigo-600"
                        >
                            If You Are a Cautious (C) Parent with a
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
                                        <h4 class="text-lg font-semibold">
                                            Encouraging Thoughtful
                                            Decision-Making:
                                        </h4>
                                        <p>
                                            <strong>Tip : </strong>Support your
                                            SC child’s need for careful and
                                            deliberate decision-making by
                                            discussing options and outcomes.
                                        </p>
                                        <p>
                                            <strong>Example : </strong>Allow
                                            {{ childName }} time to think
                                            through their decisions, and discuss
                                            the pros and cons together. This
                                            helps them feel confident in their
                                            choices.
                                        </p>
                                    </div>
                                    <div>
                                        <h4 class="text-lg font-semibold">
                                            Promoting Independence with
                                            Structure:
                                        </h4>
                                        <p>
                                            <strong>Tip : </strong>While you
                                            both value structure and
                                            predictability, it’s important to
                                            encourage independence within that
                                            framework.
                                        </p>
                                        <p>
                                            <strong>Example : </strong>Give
                                            {{ childName }} responsibilities
                                            that allow them to plan and organise
                                            their own tasks, such as creating a
                                            study schedule or managing a small
                                            project. Praise their efforts to
                                            work independently.
                                        </p>
                                    </div>
                                    <div>
                                        <h4 class="text-lg font-semibold">
                                            Teaching Adaptability and
                                            Flexibility:
                                        </h4>
                                        <p>
                                            <strong>Tip : </strong>Help your
                                            child develop strategies to handle
                                            unexpected changes and remain calm
                                            under pressure.
                                        </p>
                                        <p>
                                            <strong>Example : </strong>Practice
                                            scenarios where plans change
                                            suddenly, and discuss how to adapt.
                                            Use activities that involve
                                            flexibility, such as improvisational
                                            games or spontaneous outings.
                                        </p>
                                    </div>
                                    <div>
                                        <h4 class="text-lg font-semibold">
                                            Supporting Empathy and Social
                                            Skills:
                                        </h4>
                                        <p>
                                            <strong>Tip : </strong>Encourage
                                            your child to develop empathy and
                                            strong social skills by engaging in
                                            activities that promote
                                            understanding and cooperation.
                                        </p>
                                        <p>
                                            <strong>Example : </strong
                                            >Participate in community service
                                            projects or team-building activities
                                            that require collaboration and
                                            consideration of others'
                                            perspectives. Discuss the importance
                                            of empathy and effective
                                            communication.
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


                    <!-- C -->
                    <div class=" ">
                        <div
                            class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                            style="border-radius: 50px"
                        ></div>
                        <h4
                            class="text-3xl font-semibold mt-6 mb-2 text-indigo-600"
                        >
                            If You Are a Cautious (C) Parent with a
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
                                            Encouraging Creative Expression and
                                            Social Interaction:
                                        </h4>
                                        <p>
                                            <strong>Tip : </strong>
                                            While you value structure and
                                            precision, it’s important to provide
                                            opportunities for your SI child to
                                            explore their creativity and engage
                                            in social activities.
                                        </p>
                                        <p>
                                            <strong>Example : </strong>
                                            Encourage {{ childName }} to
                                            participate in creative projects
                                            like drawing, storytelling, or
                                            building things. Arrange playdates
                                            and group activities where they can
                                            interact with peers.
                                        </p>
                                    </div>

                                    <div>
                                        <h4 class="text-xl font-semibold">
                                            Balancing Structure with
                                            Flexibility:
                                        </h4>
                                        <p>
                                            <strong>Tip : </strong>
                                            Although you prefer structured
                                            environments, allowing flexibility
                                            can help your child thrive.
                                        </p>
                                        <p>
                                            <strong>Example : </strong> Create a
                                            daily routine that includes both
                                            structured activities and free time
                                            for {{ childName }} to choose their
                                            own activities. This balance helps
                                            them develop independence while
                                            still providing the structure they
                                            need.
                                        </p>
                                    </div>

                                    <div>
                                        <h4 class="text-xl font-semibold">
                                            Supporting Empathy and Social
                                            Responsibility:
                                        </h4>
                                        <p>
                                            <strong>Tip : </strong>
                                            Encourage your child’s natural
                                            empathy and desire to help others by
                                            involving them in activities that
                                            promote social responsibility.
                                        </p>
                                        <p>
                                            <strong>Example : </strong> Engage
                                            in community service projects or
                                            family volunteering activities where
                                            {{ childName }} can help others and
                                            see the positive impact of their
                                            actions.
                                        </p>
                                    </div>

                                    <div>
                                        <h4 class="text-xl font-semibold">
                                            Developing Assertiveness and
                                            Decision-Making Skills:
                                        </h4>
                                        <p>
                                            <strong>Tip : </strong>
                                            Help your child develop
                                            assertiveness and decision-making
                                            skills, balancing their supportive
                                            nature with confidence in their own
                                            choices.
                                        </p>
                                        <p>
                                            <strong>Example : </strong>
                                            Encourage {{ childName }} to make
                                            decisions and express their
                                            opinions, starting with small
                                            choices and gradually moving to
                                            bigger ones. Discuss the outcomes of
                                            their decisions to reinforce
                                            learning and growth.
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
    name: "ParentalInsightC",
    layout: AssessmentTypes,
    props: {
        style: String,
        childName: String,
        image: String,
    },
};
</script>
