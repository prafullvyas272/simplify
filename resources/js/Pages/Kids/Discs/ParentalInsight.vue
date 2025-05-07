<template>
        <div class="p-6">
        <div class="p-6">

    <div class=" mx-auto ">
        <h1 class="font-bold mb-4 text-center">
            Parental Insights
        </h1>

    </div>
    <div v-if="style == 'C'" class="space-y-8">

        <!-- DISC Overview Section -->
        <div class="  rounded-lg ">
            <div class="flex justify-center items-center mb-4">
                <img class="w-120 h-auto object-contain" :src="'/images/reports-svg-images/Page 28a.svg'" alt="" />
            </div>

            <h4 class="text-3xl font-bold mb-2">Understanding Your DISC Style as a Parent</h4>
            <p class=" mb-4">As a parent, your DISC style significantly impacts how you interact with your
                child and approach parenting. Understanding your own style can help you communicate more effectively and
                support your child’s development. Here’s a brief overview of the four DISC styles:</p>
            <div class="space-y-4 ml-3">
                <div class="flex justify-center items-center mb-4">
                    <img class="w-120 h-auto object-contain" :src="'/images/reports-images/parental-insight-kids.svg'"
                        alt="" />
                </div>
            </div>
            <p>
                If you have a mixed style, please refer to each section that corresponds to your blend.

            </p>
            <p>If you do not know your style, please <a href="https://www.useunify.com/adults-assessment">click here to take
                our Adult Assessment!</a></p>

        </div>

        <!-- Parenting Tips Section -->
        <div class="  rounded-lg ">
            <!-- <h4 class="text-3xl font-bold mb-2">Parenting Tips Based on Your DISC Style</h4> -->

            <!-- Dominant (D) Parent with Cautious (C) Child -->
            <div class="  rounded-lg  mb-6">
                <div class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] "
                    style="border-radius: 50px;">
                </div>
                <h4 class="text-3xl font-semibold mt-6 mb-2 text-indigo-600">If You Are a Dominant (D) Parent with a
                    Cautious
                    (C) Child</h4>

                <div class="row">
                    <div class="col-6">
                        <div class="space-y-4 ml-3">
                            <div>
                                <strong>Balancing Structure with Flexibility:</strong>
                                <p><strong>Tip : </strong> While you prefer to take charge, it’s important to provide
                                    your C
                                    child
                                    with a structured
                                    environment while allowing for some flexibility.</p>
                                <p><strong>Example : </strong> Establish a routine that includes both structured
                                    activities and
                                    time for your child to explore their interests independently.</p>
                            </div>
                            <div>
                                <strong>Encouraging Precision and Quality:</strong>
                                <p><strong>Tip : </strong>Appreciate and encourage your child’s attention to detail and
                                    high
                                    standards.</p>
                                <p><strong>Example : </strong> Praise their meticulous work on a project, emphasising
                                    how their
                                    careful planning and execution make a difference.</p>
                            </div>
                            <div>
                                <strong>Supporting Analytical Thinking:</strong>
                                <p><strong>Tip : </strong>Encourage your child’s analytical skills by engaging in
                                    activities
                                    that
                                    require
                                    problem-solving and critical thinking.</p>
                                <p><strong>Example : </strong> Work together on science experiments or strategy games
                                    that
                                    challenge their mind and promote logical thinking.</p>
                            </div>
                            <div>
                                <strong>Providing Clear and Detailed Instructions:</strong>
                                <p><strong>Tip : </strong>Be clear and precise in your communication, ensuring your
                                    child
                                    understands what is expected.
                                </p>
                                <p><strong>Example : </strong> When assigning tasks, break them down into detailed steps
                                    and
                                    check
                                    for understanding before they begin.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center mb-4">
                            <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31.svg'"
                                alt="" />
                        </div>
                        <div class="flex justify-center items-center mb-4">
                            <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31b.svg'"
                                alt="" />
                        </div>
                    </div>
                </div>

            </div>

            <!-- Influential (I) Parent with Cautious (C) Child -->
            <div class="  rounded-lg  mb-6">



                <div class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] "
                    style="border-radius: 50px;">
                </div>
                <h4 class="text-3xl font-semibold mt-6 mb-2 text-indigo-600">If You Are an Influential (I) Parent
                    with a
                    Cautious (C) Child</h4>
                <div class="row">
                    <div class="col-6">
                        <div class="space-y-4 ml-3">
                            <div>
                                <strong>Balancing Enthusiasm with Precision:</strong>
                                <p><strong>Tip : </strong>While you bring energy and enthusiasm, recognise the
                                    importance of
                                    your
                                    child’s need for
                                    precision and careful planning.</p>
                                <p><strong>Example : </strong> Encourage their detailed approach in creative projects by
                                    discussing their ideas and planning together.</p>
                            </div>
                            <div>
                                <strong>Supporting Structured Routines:</strong>
                                <p><strong>Tip : </strong>Provide a consistent and predictable routine that helps your
                                    child
                                    feel
                                    secure.</p>
                                <p><strong>Example : </strong> Use visual schedules and charts to outline daily
                                    activities,
                                    helping them know what to expect and when.</p>
                            </div>
                            <div>
                                <strong>Encouraging Detailed Work:</strong>
                                <p><strong>Tip : </strong>Nurture an appreciation for their meticulous work by engaging
                                    in
                                    activities that require
                                    attention to detail.</p>
                                <p><strong>Example : </strong> Involve your child in organising family events or
                                    creating
                                    detailed
                                    artwork, praising their effort and precision.</p>
                            </div>
                            <div>
                                <strong>Balancing Social Interaction with Quiet Time:</strong>
                                <p><strong>Tip : </strong>Recognise their need for quiet and focused time amidst social
                                    activities.</p>
                                <p><strong>Example : </strong> Create a balance between social activities and quiet time
                                    for
                                    independent work or relaxation.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center mb-4">
                            <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31.svg'"
                                alt="" />
                        </div>
                        <div class="flex justify-center items-center mb-4">
                            <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31b.svg'"
                                alt="" />
                        </div>
                    </div>
                </div>

            </div>

            <!-- Supportive (S) Parent with Cautious (C) Child -->

            <div class="  rounded-lg  mb-6">
                <div class="  rounded-lg  mb-6">

                    <div class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] "
                        style="border-radius: 50px;">
                    </div>
                    <h4 class="text-3xl font-semibold mt-6 mb-2 text-indigo-600">If You Are a Supportive (S) Parent
                        with a
                        Cautious (C) Child</h4>
                    <div class="row">
                        <div class="col-6">
                            <div class="space-y-4 ml-3">
                                <div>
                                    <strong>Creating a Stable Environment:</strong>
                                    <p><strong>Tip : </strong>Provide a calm and stable environment where your child can
                                        thrive.
                                    </p>
                                    <p><strong>Example : </strong> Maintain consistent routines and clear expectations
                                        to help
                                        your
                                        child feel secure and focused.</p>
                                </div>
                                <div>
                                    <strong>Encouraging Independence and Decision-Making:</strong>
                                    <p><strong>Tip : </strong>While you naturally support and nurture, encourage your
                                        child to
                                        make independent
                                        decisions.
                                    </p>
                                    <p><strong>Example : </strong> Allow them to take the lead on small projects or
                                        decisions,
                                        offering guidance as needed but giving them the responsibility.</p>
                                </div>
                                <div>
                                    <strong>Building Analytical Skills:
                                    </strong>
                                    <p><strong>Tip : </strong> Engage in activities that challenge your child’s
                                        analytical abilities and critical thinking.

                                    </p>
                                    <p><strong>Example : </strong> Work on puzzles or science experiments together,
                                        encouraging
                                        them
                                        to explore and solve problems.</p>
                                </div>
                                <div>
                                    <strong>Providing Detailed Feedback:</strong>
                                    <p><strong>Tip : </strong>Offer constructive feedback that helps them understand
                                        areas for
                                        improvement.</p>
                                    <p><strong>Example : </strong> When reviewing their work, highlight both their
                                        strengths and
                                        areas
                                        where they can improve, providing specific examples.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="flex justify-center items-center mb-4">
                                <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31.svg'"
                                    alt="" />
                            </div>
                            <div class="flex justify-center items-center mb-4">
                                <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31b.svg'"
                                    alt="" />
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Cautious (C) Parent with Cautious (C) Child -->

                <div class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] "
                    style="border-radius: 50px;">
                </div>
                <h4 class="text-3xl font-semibold mt-6 mb-2 text-indigo-600">If You Are a Cautious (C) Parent with a
                    Cautious (C)
                    Child</h4>
                <div class="row">
                    <div class="col-6">
                        <div class="space-y-4 ml-3">
                            <div>
                                <strong>Supporting Detailed and Structured Learning:</strong>
                                <p><strong>Tip : </strong>Create an environment that values precision, structure, and
                                    detailed
                                    work.</p>
                                <p><strong>Example : </strong> Work together on organising their study space or planning
                                    their
                                    activities, emphasising the importance of order and clarity.</p>
                            </div>
                            <div>
                                <strong>Encouraging Risk-Taking and Flexibility:</strong>
                                <p><strong>Tip : </strong>Gently encourage your child to step out of their comfort zone
                                    and try
                                    new things.</p>
                                <p><strong>Example : </strong> Introduce new activities gradually, praising their
                                    efforts and
                                    discussing the benefits of trying different approaches.</p>
                            </div>
                            <div>
                                <strong>Balancing Perfectionism with Realistic Goals:</strong>
                                <p><strong>Tip : </strong>Help your child set realistic goals and understand that making
                                    mistakes
                                    is a part of
                                    learning.</p>
                                <p><strong>Example : </strong> Set achievable milestones for projects and celebrate
                                    progress,
                                    emphasising that perfection is not always necessary.</p>
                            </div>
                            <div>
                                <strong>Providing Consistent Support and Feedback:</strong>
                                <p><strong>Tip : </strong>Offer consistent support and constructive feedback to help
                                    them
                                    improve.
                                </p>
                                <p><strong>Example : </strong> Regularly discuss their progress and provide specific
                                    suggestions
                                    for improvement, reinforcing their efforts and achievements.</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center mb-4">
                            <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31.svg'"
                                alt="" />
                        </div>
                        <div class="flex justify-center items-center mb-4">
                            <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31b.svg'"
                                alt="" />
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- For CD Style Type -->
    <div id="CD" v-if="style == 'CD'">
        <div class="  rounded-lg ">
            <h4 class="text-3xl font-bold mb-4">Understanding Your DISC Style as a Parent</h4>
            <p class="text-md mb-4">As a parent, your DISC style significantly impacts how you interact with your child
                and approach parenting. Understanding your own style can help you communicate more effectively and
                support your child’s development. Here’s a brief overview of the four DISC styles:</p>


            <div class="space-y-4 ml-3">
                <div class="flex justify-center items-center mb-4">
                    <img class="w-120 h-auto object-contain" :src="'/images/reports-images/parental-insight-kids.svg'"
                        alt="" />
                </div>
            </div>

            <p class="text-md mb-4">If you have a mixed style, please refer to each section that corresponds to your
                blend.</p>
                <p>If you do not know your style, please <a href="https://www.useunify.com/adults-assessment">click here to take
                    our Adult Assessment!</a></p>
            <!-- If Dominant (D) Parent with Cautious-Dominant (CD) Child -->
            <div class="mb-8">
                <div class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] "
                    style="border-radius: 50px;">
                </div>
                <h4 class="text-3xl font-semibold mt-6 mb-2 text-indigo-600">If You Are a Dominant (D) Parent with a
                    Cautious-Dominant (CD)
                    Child</h4>

                <div class="row">
                    <div class="col-6">
                        <div class="mb-4">
                            <h4 class="font-semibold text-xl">Encouraging Detailed Leadership</h4>
                            <p><strong>Tip : </strong> While you naturally take charge, support your CD child’s
                                attention to
                                detail in their
                                leadership.</p>
                            <p><strong>Example : </strong>Allow {{ childName }} to lead a family project, like planning
                                a trip,
                                ensuring they can
                                use their detailed approach. Discuss how their careful planning contributes to success.
                            </p>
                        </div>

                        <div class="mb-4">
                            <h4 class="font-semibold text-xl">Balancing Structure with Flexibility</h4>
                            <p><strong>Tip : </strong>Encourage your child to be flexible while maintaining their
                                structured
                                approach.</p>
                            <p><strong>Example : </strong>Involve {{ childName }} in activities that require quick
                                thinking and
                                adaptability, like
                                cooking a new recipe together. Celebrate their ability to adapt while keeping things
                                organised.
                            </p>
                        </div>

                        <div class="mb-4">
                            <h4 class="font-semibold text-xl">Recognising and Praising Thoroughness</h4>
                            <p><strong>Tip : </strong>Provide positive reinforcement for your child’s meticulous
                                approach and
                                leadership skills.
                            </p>
                            <p><strong>Example : </strong>Praise {{ childName }} for their detailed completion of tasks,
                                such as
                                organising their
                                room or planning an event. Highlight how their thoroughness is a valuable trait.</p>
                        </div>

                        <div class="mb-4">
                            <h4 class="font-semibold text-xl">Supporting Emotional Resilience</h4>
                            <p><strong>Tip : </strong>Help your child develop strategies to manage stress and remain
                                calm in
                                challenging
                                situations.</p>
                            <p><strong>Example : </strong>Practice relaxation techniques together, such as deep
                                breathing
                                exercises or mindfulness
                                activities. Encourage {{ childName }} to use these techniques when they feel
                                overwhelmed.</p>
                        </div>

                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center mb-4">
                            <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31.svg'"
                                alt="" />
                        </div>
                        <div class="flex justify-center items-center mb-4">
                            <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31b.svg'"
                                alt="" />
                        </div>
                        <div data-v-0132f395="" class="flex justify-center items-center"><img data-v-0132f395="" class="w-90 h-auto object-contain" src="/images/reports-svg-images/Page16.svg" alt=""></div>
                    </div>
                </div>

            </div>

            <!-- If Influential (I) Parent with Cautious-Dominant (CD) Child -->
            <div class="mb-8">
                <div class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] "
                    style="border-radius: 50px;">
                </div>
                <h4 class="text-3xl font-semibold mt-6 mb-2 text-indigo-600">If You Are an Influential (I) Parent with a
                    Cautious-Dominant
                    (CD) Child</h4>

                <div class="row">
                    <div class="col-6">
                        <div class="mb-4">
                            <h4 class="font-semibold text-xl">Balancing Enthusiasm with Precision</h4>
                            <p><strong>Tip : </strong>While your enthusiasm and energy are great, ensure that your CD
                                child can
                                focus on their
                                careful and precise nature.</p>
                            <p><strong>Example : </strong>Combine fun, energetic activities with tasks that require
                                attention to
                                detail, like
                                building a model or organising a family event. Celebrate both their enthusiasm and
                                precision.
                            </p>
                        </div>

                        <div class="mb-4">
                            <h4 class="font-semibold text-xl">Encouraging Structured Social Interactions</h4>
                            <p><strong>Tip : </strong>Support your child’s preference for structured and meaningful
                                social
                                interactions.</p>
                            <p><strong>Example : </strong>Arrange smaller, structured group activities where {{
                                childName }} can
                                interact
                                meaningfully with a few peers. Encourage discussions about their interests and ideas to
                                deepen
                                their connections.</p>
                        </div>

                        <div class="mb-4">
                            <h4 class="font-semibold text-xl">Promoting Detailed and Thoughtful Planning</h4>
                            <p><strong>Tip : </strong>Involve your child in planning activities to leverage their
                                natural
                                inclination for careful
                                organisation.</p>
                            <p><strong>Example : </strong>Let {{ childName }} plan part of a family trip, such as
                                creating an
                                itinerary or
                                organising supplies. Discuss how their careful planning contributes to a successful and
                                enjoyable experience.</p>
                        </div>

                        <div class="mb-4">
                            <h4 class="font-semibold text-xl">Facilitating Open and Thoughtful Communication</h4>
                            <p><strong>Tip : </strong>Promote an environment where your child feels comfortable
                                expressing their
                                thoughts and
                                ideas.</p>
                            <p><strong>Example : </strong>Create regular family meetings where {{ childName }} can share
                                their
                                ideas and concerns.
                                Listen actively and ask open-ended questions to encourage deeper conversations.</p>
                        </div>

                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center mb-4">
                            <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31.svg'"
                                alt="" />
                        </div>
                        <div class="flex justify-center items-center mb-4">
                            <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31b.svg'"
                                alt="" />
                        </div>
                        <div data-v-0132f395="" class="flex justify-center items-center"><img data-v-0132f395="" class="w-90 h-auto object-contain" src="/images/reports-svg-images/Page16.svg" alt=""></div>

                    </div>
                </div>

            </div>

            <!-- If Supportive (S) Parent with Cautious-Dominant (CD) Child -->
            <div class="mb-8">
                <div class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] "
                    style="border-radius: 50px;">
                </div>
                <h4 class="text-3xl font-semibold mt-6 mb-2 text-indigo-600">If You Are a Supportive (S) Parent with a
                    Cautious-Dominant (CD)
                    Child</h4>

                <div class="row">
                    <div class="col-6">
                        <div class="mb-4">
                            <h4 class="font-semibold text-xl">Encouraging Independent Leadership</h4>
                            <p><strong>Tip : </strong>While you naturally provide support and nurturing, it's important
                                to
                                encourage your CD child
                                to take on tasks independently.</p>
                            <p><strong>Example : </strong>Allow {{ childName }} to manage a small project on their own,
                                like
                                organising their
                                school supplies or planning a family game night. Offer guidance when needed, but
                                celebrate their
                                independent efforts.</p>
                        </div>

                        <div class="mb-4">
                            <h4 class="font-semibold text-xl">Creating a Structured Social Environment</h4>
                            <p><strong>Tip : </strong>Provide opportunities for your child to interact with peers in
                                calm and
                                predictable
                                settings.</p>
                            <p><strong>Example : </strong>Arrange small, structured group activities such as a book club
                                or a
                                cooperative game
                                night. This allows {{ childName }} to engage socially in a comfortable setting.</p>
                        </div>

                        <div class="mb-4">
                            <h4 class="font-semibold text-xl">Providing Gentle Encouragement</h4>
                            <p><strong>Tip : </strong>Use gentle and consistent encouragement to motivate your child.
                            </p>
                            <p><strong>Example : </strong>Regularly acknowledge and praise {{ childName }} for their
                                efforts,
                                whether it’s
                                completing homework or helping around the house. This positive reinforcement helps them
                                feel
                                valued.</p>
                        </div>

                        <div class="mb-4">
                            <h4 class="font-semibold text-xl">Teaching Relaxation Techniques</h4>
                            <p><strong>Tip : </strong>Equip your child with tools to manage stress effectively.</p>
                            <p><strong>Example : </strong>Practice relaxation techniques together, such as progressive
                                muscle
                                relaxation or guided
                                imagery. Encourage {{ childName }} to use these techniques during stressful moments.</p>
                        </div>

                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center mb-4">
                            <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31.svg'"
                                alt="" />
                        </div>
                        <div class="flex justify-center items-center mb-4">
                            <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31b.svg'"
                                alt="" />
                        </div>
                        <div data-v-0132f395="" class="flex justify-center items-center"><img data-v-0132f395="" class="w-90 h-auto object-contain" src="/images/reports-svg-images/Page16.svg" alt=""></div>

                    </div>
                </div>

            </div>

            <!-- If Cautious (C) Parent with Cautious-Dominant (CD) Child -->
            <div>
                <div class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] "
                    style="border-radius: 50px;">
                </div>
                <h4 class="text-3xl font-semibold mt-6 mb-2 text-indigo-600">If You Are a Cautious (C) Parent with a
                    Cautious-Dominant (CD)
                    Child</h4>

                <div class="row">
                    <div class="col-6">
                        <div class="mb-4">
                            <h4 class="font-semibold text-xl">Encouraging Confident Leadership</h4>
                            <p><strong>Tip : </strong>While you both value careful planning, it's important to encourage
                                your CD
                                child to take on
                                leadership roles confidently.</p>
                            <p><strong>Example : </strong>Allow {{ childName }} to lead a small project at home, such as
                                planning a family outing.
                                Discuss how their detailed planning can help ensure the success of the activity.</p>
                        </div>

                        <div class="mb-4">
                            <h4 class="font-semibold text-xl">Balancing Structure with Adaptability</h4>
                            <p><strong>Tip : </strong>Support your child in being adaptable while maintaining their
                                structured
                                approach.</p>
                            <p><strong>Example : </strong>Involve {{ childName }} in activities that require quick
                                thinking and
                                flexibility, like
                                trying new recipes or spontaneous games. Celebrate their ability to adapt while keeping
                                things
                                organised.</p>
                        </div>

                        <div class="mb-4">
                            <h4 class="font-semibold text-xl">Recognising and Praising Precision</h4>
                            <p><strong>Tip : </strong>Provide positive reinforcement for your child’s meticulous
                                approach and
                                leadership skills.
                            </p>
                            <p><strong>Example : </strong>Praise {{ childName }} for their detailed completion of tasks,
                                such as
                                organising their
                                room or planning an event. Highlight how their precision is a valuable trait.</p>
                        </div>

                        <div class="mb-4">
                            <h4 class="font-semibold text-xl">Creating a Calm and Organised Environment</h4>
                            <p><strong>Tip : </strong>Ensure that your home environment is calm and well-organised,
                                helping your
                                child feel
                                secure.</p>
                            <p><strong>Example : </strong>Maintain a consistent daily routine and organise spaces. This
                                stability supports {{
                                    childName }} ’s need for order and predictability.</p>
                        </div>

                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center mb-4">
                            <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31.svg'"
                                alt="" />
                        </div>
                        <div class="flex justify-center items-center mb-4">
                            <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31b.svg'"
                                alt="" />
                        </div>
                        <div data-v-0132f395="" class="flex justify-center items-center"><img data-v-0132f395="" class="w-90 h-auto object-contain" src="/images/reports-svg-images/Page16.svg" alt=""></div>

                    </div>
                </div>

            </div>
        </div>

    </div>

    <!-- For CS Style Type -->
    <div v-if="style == 'CS'" class="space-y-8">

        <!-- DISC Overview Section -->
        <div class="  rounded-lg ">
            <div class="flex justify-center items-center mb-4">
                <img class="w-120 h-auto object-contain" :src="'/images/reports-svg-images/Page 28a.svg'" alt="" />
            </div>

            <h4 class="text-3xl font-bold mb-2">Understanding Your DISC Style as a Parent</h4>
            <p class=" mb-4">As a parent, your DISC style significantly impacts how you interact with your
                child and approach parenting. Understanding your own style can help you communicate more effectively and
                support your child’s development. Here’s a brief overview of the four DISC styles:</p>
            <div class="space-y-4 ml-3">
                <div class="flex justify-center items-center mb-4">
                    <img class="w-120 h-auto object-contain" :src="'/images/reports-images/parental-insight-kids.svg'"
                        alt="" />
                </div>
            </div>
            <p>
                If you have a mixed style, please refer to each section that corresponds to your blend.

            </p>
            <p>If you do not know your style, please <a href="https://www.useunify.com/adults-assessment">click here to take
                our Adult Assessment!</a></p>

        </div>

        <!-- Parenting Tips Section -->
        <div class="  rounded-lg ">
            <!-- <h4 class="text-3xl font-bold mb-2">Parenting Tips Based on Your DISC Style</h4> -->

            <!-- Dominant (D) Parent with Cautious (C) Child -->
            <div class="  rounded-lg  mb-6">
                <div class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] "
                    style="border-radius: 50px;">
                </div>
                <h4 class="text-3xl font-semibold mt-6 mb-2 text-indigo-600">If You Are a Dominant (D) Parent with a
                    Cautious-Supportive (CS) Child
                </h4>

                <div class="row">
                    <div class="col-6">
                        <div class="space-y-4 ml-3">
                            <div>
                                <strong>
                                    Encouraging Thoughtful Exploration:

                                </strong>
                                <p><strong>Tip : </strong>
                                    While you naturally take bold actions, support your CS child’s need for careful
                                    exploration and consideration.
                                </p>
                                <p><strong>Example : </strong>
                                    When faced with a new activity or decision, guide {{ childname }} to explore
                                    different options and think through potential outcomes. Discuss how thoughtful
                                    planning can lead to successful results.

                                </p>
                            </div>

                            <div>
                                <strong>
                                    Balancing Assertiveness with Support:

                                </strong>
                                <p><strong>Tip : </strong>
                                    Encourage your child to take initiative while providing the reassurance they need to
                                    feel secure.

                                </p>
                                <p><strong>Example : </strong>
                                    Involve {{ childname }} in planning family activities, allowing them to make
                                    decisions with your support. Offer praise and constructive feedback to build their
                                    confidence.

                                </p>
                            </div>

                            <div>
                                <strong>
                                    Celebrating Detailed Work:

                                </strong>
                                <p><strong>Tip : </strong>
                                    Recognise and celebrate your child’s meticulous approach and attention to detail.

                                </p>
                                <p><strong>Example : </strong>
                                    Praise {{ childname }} for their careful completion of tasks, such as organising
                                    their room or completing a detailed project. Highlight how their thoroughness is a
                                    valuable trait.

                                </p>
                            </div>

                            <div>
                                <strong>
                                    Enhancing Decision-Making Confidence:

                                </strong>
                                <p><strong>Tip : </strong>
                                    Support your child in making confident decisions by providing opportunities for
                                    independent choices.

                                </p>
                                <p><strong>Example : </strong>
                                    Let {{ childname }} decide on weekend activities or select a new hobby. Discuss
                                    their choices and outcomes, reinforcing that thoughtful decision-making leads to
                                    positive experiences

                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center mb-4">
                            <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31.svg'"
                                alt="" />
                        </div>
                        <div class="flex justify-center items-center mb-4">
                            <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31b.svg'"
                                alt="" />
                        </div>
                        <div class="flex justify-center items-center mb-4">
    <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page21.svg'" alt="" />
</div>
                    </div>
                </div>

            </div>

            <!-- Influential (I) Parent with Cautious (C) Child -->
            <div class="  rounded-lg  mb-6">



                <div class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] "
                    style="border-radius: 50px;">
                </div>
                <h4 class="text-3xl font-semibold mt-6 mb-2 text-indigo-600">If You Are an Influential (I) Parent
                    with a
                    Cautious-Supportive (CS) Child
                </h4>
                <div class="row">
                    <div class="col-6">
                        <div class="space-y-4 ml-3">
                            <div>
                                <strong>
                                    Balancing Excitement with Structure:

                                </strong>
                                <p><strong>Tip : </strong>
                                    While your enthusiasm and energy are great, ensure that {{ childname }} has
                                    structured activities to feel secure.

                                </p>
                                <p><strong>Example : </strong>
                                    Alternate between high-energy activities and calm, structured tasks. Create a visual
                                    schedule to help them anticipate what comes next and feel more secure.

                                </p>
                            </div>

                            <div>
                                <strong>
                                    Encouraging Meaningful Social Connections:

                                </strong>
                                <p><strong>Tip : </strong>
                                    Support your child in forming deep and thoughtful social connections.

                                </p>
                                <p><strong>Example : </strong>
                                    Arrange smaller, intimate gatherings where {{ childname }} can interact meaningfully
                                    with a few peers. Encourage discussions about their interests and feelings to deepen
                                    their connections.

                                </p>
                            </div>

                            <div>
                                <strong>
                                    Promoting Detailed and Careful Planning:

                                </strong>
                                <p><strong>Tip : </strong>
                                    Involve your child in detailed planning activities to leverage their natural
                                    inclination for organisation.

                                </p>
                                <p><strong>Example : </strong>
                                    Let {{ childname }} plan part of a family trip, such as creating an itinerary or
                                    organising supplies. Discuss how their careful planning contributes to a successful
                                    and enjoyable experience.

                                </p>
                            </div>

                            <div>
                                <strong>
                                    Recognising and Praising Thoroughness:

                                </strong>
                                <p><strong>Tip : </strong>
                                    Provide positive reinforcement for your child’s thoroughness and reliability.

                                </p>
                                <p><strong>Example : </strong>
                                    Compliment {{ childname }} on their detailed approach to completing tasks, like
                                    organising their room or doing a school project. Use rewards that align with their
                                    interests to acknowledge their hard work.

                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center mb-4">
                            <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31.svg'"
                                alt="" />
                        </div>
                        <div class="flex justify-center items-center mb-4">
                            <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31b.svg'"
                                alt="" />
                        </div>
                        <div class="flex justify-center items-center mb-4">
    <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page21.svg'" alt="" />
</div>
                    </div>
                </div>

            </div>

            <!-- Supportive (S) Parent with Cautious (C) Child -->

            <div class="  rounded-lg  mb-6">
                <div class="  rounded-lg  mb-6">

                    <div class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] "
                        style="border-radius: 50px;">
                    </div>
                    <h4 class="text-3xl font-semibold mt-6 mb-2 text-indigo-600">If You Are a Supportive (S) Parent
                        with a
                        Cautious-Supportive (CS) Child
                    </h4>
                    <div class="row">
                        <div class="col-6">
                            <div class="space-y-4 ml-3">
                                <div>
                                    <strong>
                                        Leveraging Your Supportive Nature:

                                    </strong>
                                    <p><strong>Tip : </strong>
                                        Use your natural supportive style to create a nurturing environment where your
                                        child feels safe to express themselves.

                                    </p>
                                    <p><strong>Example : </strong>
                                        Have regular check-ins with {{ childname }} to talk about their day and any
                                        concerns they may have. Your supportive approach helps them feel understood and
                                        valued.

                                    </p>
                                </div>

                                <div>
                                    <strong>
                                        Encouraging Careful Independence:

                                    </strong>
                                    <p><strong>Tip : </strong>
                                        Encourage your CS child to take on tasks independently while providing
                                        supportive guidance.

                                    </p>
                                    <p><strong>Example : </strong>
                                        Allow {{ childname }} to manage their school projects independently, offering
                                        help when asked. Celebrate their achievements to build confidence.

                                    </p>
                                </div>

                                <div>
                                    <strong>
                                        Creating a Structured Social Environment:

                                    </strong>
                                    <p><strong>Tip : </strong>
                                        Provide opportunities for your child to interact with peers in calm and
                                        predictable settings.

                                    </p>
                                    <p><strong>Example : </strong>
                                        Arrange small, structured group activities such as a book club or a cooperative
                                        game night. This allows {{ childname }} to engage socially in a comfortable
                                        setting.

                                    </p>
                                </div>

                                <div>
                                    <strong>
                                        Gentle Motivation:

                                    </strong>
                                    <p><strong>Tip : </strong>
                                        Use gentle and consistent encouragement to motivate your child.

                                    </p>
                                    <p><strong>Example : </strong>
                                        Regularly acknowledge and praise {{ childname }} for their efforts, whether it’s
                                        completing homework or helping around the house. This positive reinforcement
                                        helps them feel valued.

                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="col-6">
                            <div class="flex justify-center items-center mb-4">
                                <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31.svg'"
                                    alt="" />
                            </div>
                            <div class="flex justify-center items-center mb-4">
                                <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31b.svg'"
                                    alt="" />
                            </div>
                            <div class="flex justify-center items-center mb-4">
    <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page21.svg'" alt="" />
</div>
                        </div>
                    </div>

                </div>

                <!-- Cautious (C) Parent with Cautious (C) Child -->

                <div class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] "
                    style="border-radius: 50px;">
                </div>
                <h4 class="text-3xl font-semibold mt-6 mb-2 text-indigo-600">If You Are a Cautious (C) Parent with a
                    Cautious-Supportive (CS) Child
                </h4>
                <div class="row">
                    <div class="col-6">
                        <div class="space-y-4 ml-3">
                            <div>
                                <strong>
                                    Balancing Caution with Encouragement:

                                </strong>
                                <p><strong>Tip : </strong>
                                    While you both value careful consideration, encourage your child to take on new
                                    challenges with confidence.

                                </p>
                                <p><strong>Example : </strong>
                                    Allow {{ childname }} to try new activities or tasks with your support. Reassure
                                    them that it's okay to make mistakes and learn from them.

                                </p>
                            </div>

                            <div>
                                <strong>
                                    Recognising and Praising Detailed Work:

                                </strong>
                                <p><strong>Tip : </strong>
                                    Provide positive reinforcement for your child’s meticulous approach and attention to
                                    detail.

                                </p>
                                <p><strong>Example : </strong>
                                    Praise {{ childname }} for their careful completion of tasks, such as organising
                                    their room or completing a detailed project. Highlight how their thoroughness is a
                                    valuable trait.

                                </p>
                            </div>

                            <div>
                                <strong>
                                    Creating a Calm and Organised Environment:

                                </strong>
                                <p><strong>Tip : </strong>
                                    Ensure that your home environment is calm and well-organised, helping your child
                                    feel secure.

                                </p>
                                <p><strong>Example : </strong>
                                    Maintain a consistent daily routine and organise spaces. This stability supports {{
                                    childname }}’s need for order and predictability.

                                </p>
                            </div>

                            <div>
                                <strong>
                                    Leveraging Your Cautious Nature:

                                </strong>
                                <p><strong>Tip : </strong>
                                    Use your natural inclination for careful planning to teach your child the value of
                                    preparation and foresight.

                                </p>
                                <p><strong>Example : </strong>
                                    Involve {{ childname }} in planning family activities, discussing the steps involved
                                    and potential challenges. Your approach helps them appreciate the benefits of being
                                    well-prepared.

                                </p>
                            </div>

                        </div>

                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center mb-4">
                            <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31.svg'"
                                alt="" />
                        </div>
                        <div class="flex justify-center items-center mb-4">
                            <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31b.svg'"
                                alt="" />
                        </div>
                        <div class="flex justify-center items-center mb-4">
    <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page21.svg'" alt="" />
</div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- For D Style Type -->
    <div id="D" v-if="style == 'D'">

        <h4 class="font-semibold">Understanding Your DISC Style as a Parent</h4>
        <p>As a parent, your DISC style significantly impacts how you interact with your child and approach parenting.
            Understanding your own style can help you communicate more effectively and support your child’s development.
            Here’s a brief overview of the four DISC styles:</p>

        <div class="flex justify-center items-center mb-4">
            <img class="w-120 h-auto object-contain" :src="'/images/reports-images/parental-insight-kids.svg'" alt="" />
        </div>

        <p>If you have a mixed style, please refer to each section that corresponds to your blend.</p>

        <p>If you do not know your style, please <a href="https://www.useunify.com/adults-assessment">click here to take
                our Adult Assessment!</a></p>
        <ul class="space-y-4 ml-3">
            <li class="  ">
                <div class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] "
                    style="border-radius: 50px;">
                </div>
                <div class="row">
                     <h3 class="text-center text-md font-bold text-indigo-600 blueheading">If You Are a Dominant (D) Parent with a
                    Dominant (D) Child:</h3>

                    <div class="col-6">
                        <ul class="mt-2 list-none pl-5 space-y-2">
                            <li><b>Encouraging Collaboration:</b><br>
                                <span class="font-medium ">Tip :
                                </span> While both you and your child are natural leaders,
                                it’s
                                important to teach them the value of collaboration. Encourage your child to listen to
                                others’
                                ideas and work as part of a team. <br><span class="font-medium ">Example :
                                </span>
                                During family activities or games, ensure that everyone gets a chance to lead and share
                                their
                                ideas. Discuss the importance of teamwork and respecting others’ input.
                            </li>
                            <li><b>Managing Conflict:</b><br>
                                <span class="font-medium ">Tip :
                                </span> Both you and your child may have strong opinions, which can
                                lead to
                                conflicts. Practice patience and teach your child conflict-resolution skills. <br><span
                                    class="font-medium ">Example : </span> Role-play scenarios where you
                                and your
                                child have differing opinions and work together to find a compromise. Emphasise the
                                importance
                                of finding common ground.
                            </li>
                            <li><b>Setting Clear Boundaries:</b><br>
                                <span class="font-medium ">Tip :
                                </span> As a D parent, you may be used to taking charge.
                                However, it’s
                                important to set clear boundaries and ensure that your child understands the rules and
                                consequences. <br><span class="font-medium ">Example : </span> Create a
                                family
                                agreement that outlines expectations and responsibilities for everyone. Review and
                                update it
                                regularly to keep it relevant.
                            </li>
                            <li><b>Nurturing Independence:</b><br>
                                <span class="font-medium ">Tip :
                                </span> Encourage your child to take on responsibilities and make
                                decisions independently. Provide opportunities for them to lead and manage tasks on
                                their own.
                                <br><span class="font-medium ">Example : </span> Assign your child a
                                project, such
                                as
                                planning a family outing, and let them take the lead. Offer guidance as needed but allow
                                them to
                                make key decisions.
                            </li>
                        </ul>

                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center mb-4">
                            <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31.svg'"
                                alt="" />
                        </div>
                        <div class="flex justify-center items-center mb-4">
                            <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31b.svg'"
                                alt="" />
                        </div>
                        <div class="flex justify-center items-center mb-4">
    <img class="w-120 h-auto object-contain" :src="'/images/reports-svg-images/Page21.svg'" alt="" />
</div>
                    </div>
                </div>

            </li>

            <li class="  ">
                <div class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] "
                    style="border-radius: 50px;">
                </div>
                <h4 class="text-center text-md font-semibold text-indigo-600">If You Are an Influential (I) Parent with
                    a Dominant (D) Child:</h4>

                <div class="row">
                    <div class="col-6">
                        <div class="flex justify-center items-center mb-4">
                            <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31.svg'"
                                alt="" />
                        </div>
                        <div class="flex justify-center items-center mb-4">
                            <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31b.svg'"
                                alt="" />
                        </div>
                        <div class="flex justify-center items-center mb-4">
    <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page21.svg'" alt="" />
</div>
                    </div>
                    <div class="col-6">
                        <ul class="mt-2 list-none pl-5 space-y-2">
                            <li><b>Balancing Fun with Structure:</b><br>
                                <span class="font-medium ">Tip :
                                </span> While you naturally create a lively and fun
                                environment,
                                it’s important to provide structure and clear expectations for your D child. They thrive
                                on
                                challenges and clear goals. <br><span class="font-medium ">Example :
                                </span> Set up
                                a
                                reward system where your child earns points for completing tasks and reaching goals.
                                This
                                combines fun and structure, keeping them motivated.
                            </li>
                            <li><b>Encouraging Focus:</b><br>
                                <span class="font-medium ">Tip :
                                </span> Help your D child stay on task by setting specific, achievable
                                goals
                                and providing consistent feedback. Break larger tasks into smaller, manageable steps.
                                <br><span class="font-medium ">Example : </span> Create a weekly planner
                                with your child,
                                outlining their tasks and goals. Check in regularly to monitor their progress and
                                provide
                                encouragement.
                            </li>
                            <li><b>Promoting Healthy Competition:</b><br>
                                <span class="font-medium ">Tip :
                                </span> Engage your child in activities that involve
                                friendly
                                competition, emphasising the importance of good sportsmanship and learning from both
                                wins and
                                losses. <br><span class="font-medium ">Example : </span> Organise family
                                game
                                nights
                                where everyone can compete in a fun and supportive environment. Celebrate achievements
                                and
                                discuss what everyone learned from the experience.
                            </li>
                            <li><b>Building Decision-Making Skills:</b> Support your child’s decision-making abilities
                                by giving
                                them opportunities to make choices and take on leadership roles. <br><span
                                    class="font-medium ">Example : </span> Allow your child to plan a
                                weekend
                                activity or make decisions about their extracurricular activities. Guide them through
                                the
                                decision-making process, discussing the pros and cons of each option.</li>
                        </ul>
                    </div>

                </div>

            </li>

            <li class="  ">
                <div class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] "
                    style="border-radius: 50px;">
                </div>
                <h4 class="text-center text-md font-semibold text-indigo-600">If You Are a Supportive (S) Parent with a
                    Dominant (D) Child:</h4>

                <div class="row">
                    <div class="col-6">
                        <ul class="mt-2 list-none pl-5 space-y-2">
                            <li><b>Promoting Independence:</b>
                                <br>
                                <span class="font-medium ">Tip :
                                </span>
                                While you are naturally supportive and nurturing, it’s
                                important
                                to encourage your D child to take on challenges and make decisions independently.
                                <br><span class="font-medium ">Example : </span> Allow your child to choose
                                their own
                                extracurricular activities and support them in pursuing their interests. Encourage them
                                to solve
                                problems on their own before stepping in to help.
                            </li>
                            <li><b>Setting Boundaries:</b>
                                <br>
                                <span class="font-medium ">Tip :
                                </span> Clearly define rules and expectations to provide a structured
                                environment. Consistent boundaries help your child understand what is expected of them
                                and feel
                                secure. <br><span class="font-medium ">Example : </span> Establish a
                                consistent
                                bedtime routine with clear rules about screen time and bedtime activities. Stick to this
                                routine
                                to provide a sense of stability.
                            </li>
                            <li><b>Encouraging Team Activities:</b>
                                <br>
                                <span class="font-medium ">Tip :
                                </span> Involve your child in activities that require
                                teamwork and
                                cooperation. This helps them develop social skills and learn to work well with others.
                                <br><span class="font-medium ">Example : </span> Enroll your child in team
                                sports or
                                group
                                projects where they can collaborate with peers and practice their teamwork skills.
                            </li>
                            <li><b>Building Confidence:</b>
                                <br>
                                <span class="font-medium ">Tip :
                                </span> Build your child’s confidence by providing positive
                                reinforcement
                                and celebrating their achievements. <br><span class="font-medium ">Example
                                    :
                                </span>
                                Create a “Celebration Wall” where you display your child’s accomplishments, such as good
                                grades,
                                completed projects, and other milestones. Regularly acknowledge their efforts and
                                successes.
                            </li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center mb-4">
                            <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31.svg'"
                                alt="" />
                        </div>
                        <div class="flex justify-center items-center mb-4">
                            <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31b.svg'"
                                alt="" />
                        </div>
                        <div class="flex justify-center items-center mb-4">
    <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page21.svg'" alt="" />
</div>
                    </div>
                </div>

            </li>

            <li class="  ">
                <div class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] "
                    style="border-radius: 50px;">
                </div>
                <h4 class="text-center text-md font-semibold text-indigo-600">If You Are a Cautious (C) Parent with a
                    Dominant (D) Child:</h4>

                <div class="row">
                    <div class="col-6">
                        <div class="flex justify-center items-center mb-4">
                            <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31.svg'"
                                alt="" />
                        </div>
                        <div class="flex justify-center items-center mb-4">
                            <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31b.svg'"
                                alt="" />
                        </div>
                        <div class="flex justify-center items-center mb-4">
    <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page21.svg'" alt="" />
</div>
                    </div>
                    <div class="col-6">
                        <ul class="mt-2 list-none pl-5 space-y-2">
                            <li><b>Promoting Creativity:</b>
                                <br>
                                <span class="font-medium ">Tip :
                                </span> While you value organisation and precision, it’s important
                                to allow
                                your D child to explore and make mistakes. Encourage creative problem-solving and
                                experimentation. <br><span class="font-medium ">Example : </span> Provide
                                open-ended
                                art supplies or building materials and encourage your child to create their own
                                projects. Praise
                                their creativity and unique ideas, even if they are different from your expectations.
                            </li>
                            <li><b>Simplifying Communication:</b>
                                <br>
                                <span class="font-medium ">Tip :
                                </span> Avoid overloading your child with too many details. Be
                                concise
                                and clear in your communication, ensuring that they understand the key points. <br><span
                                    class="font-medium ">Example : </span> When giving instructions, break
                                them
                                down
                                into simple steps and check for understanding. Use visual aids, such as charts or
                                diagrams, to
                                reinforce your message.
                            </li>
                            <li><b>Encouraging Leadership:</b>
                                <br>
                                <span class="font-medium ">Tip :
                                </span> Support your child’s natural leadership abilities by
                                providing
                                opportunities for them to lead projects or activities. <br><span
                                    class="font-medium ">Example : </span> Assign your child the role of
                                “project
                                manager” for a family project, such as organising a garage sale or planning a family
                                trip. Allow
                                them to make decisions and take responsibility for the outcome.
                            </li>
                            <li><b>Balancing Structure with Flexibility:</b>
                                <br>
                                <span class="font-medium ">Tip :
                                </span> While you prefer structured environments,
                                it’s
                                important to allow some flexibility for your child to take initiative and make
                                decisions.
                                <br><span class="font-medium ">Example : </span> Establish a routine that
                                includes
                                designated times for structured activities and free time where your child can choose
                                what they
                                want to do. This balance helps them develop independence while maintaining order.
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
            <div>
                <h4 class="text-md font-semibold">Understanding Your DISC Style as a Parent</h4>
                <p>As a parent, your DISC style significantly impacts how you interact with your child and approach
                    parenting. Understanding your own style can help you communicate more effectively and support your
                    child’s development. Here’s a brief overview of the four DISC styles:</p>
                <div class="flex justify-center items-center mb-4">
                    <img class="w-120 h-auto object-contain" :src="'/images/reports-images/parental-insight-kids.svg'"
                        alt="" />
                </div>
                <p>If you have a mixed style, please refer to each section that corresponds to your blend.</p>
                <p>If you do not know your style, please <a href="https://www.useunify.com/adults-assessment">click here to take
                    our Adult Assessment!</a></p>
            </div>

            <div>
                <div class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] "
                    style="border-radius: 50px;">
                </div>
                <h4 class="text-3xl font-semibold mt-6 mb-2 text-indigo-600">If You Are a Dominant (D) Parent with a
                    Dominant-Cautious (DC) Child
                </h4>
                <div class="row">
                    <div class="col-6">
                        <h4 class="text-xl font-semibold ">Encouraging Precision and Leadership:</h4>
                        <p><strong>Tip : </strong> While both you and your child are natural leaders, it’s important to
                            encourage
                            your DC child to focus on precision and thoroughness. Build their attention to detail while
                            supporting their leadership skills.</p>
                        <p><strong>Example : </strong> Involve your child in planning family activities that require
                            both
                            leadership and attention to detail, such as organising a family trip where they can manage
                            the
                            itinerary and logistics.</p>

                        <h4 class="text-xl font-semibold ">Balancing High Standards with Flexibility:</h4>
                        <p><strong>Tip : </strong> Help your child balance their high standards with the need to be
                            adaptable.
                            Teach them that it's okay if things don’t go perfectly and the importance of flexibility.
                        </p>
                        <p><strong>Example : </strong> When working on a project, remind your child that it's okay to
                            adjust
                            plans
                            as needed. Discuss how changes can sometimes lead to better outcomes and encourage them to
                            be open
                            to new ideas.</p>

                        <h4 class="text-xl font-semibold ">Providing Clear Structure:</h4>
                        <p><strong>Tip : </strong> Clearly define rules and expectations to provide a structured
                            environment.
                            Your
                            child thrives on knowing what is expected and having a clear path to follow.</p>
                        <p><strong>Example : </strong> Set up a consistent daily routine with clear steps for tasks such
                            as
                            homework and chores. Use checklists or charts to help them keep track of their
                            responsibilities and
                            feel in control.</p>

                        <h4 class="text-xl font-semibold ">Promoting Analytical Thinking:</h4>
                        <p><strong>Tip : </strong> Encourage your child to think critically and analyse situations
                            thoroughly
                            before making decisions. Support their natural inclination towards careful planning and
                            problem-solving.</p>
                        <p><strong>Example : </strong> Engage your child in activities that require strategic thinking,
                            such as
                            chess or complex puzzles. Discuss different strategies and the importance of evaluating all
                            options
                            before deciding on the best course of action.</p>

                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center mb-4">
                            <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31.svg'"
                                alt="" />
                        </div>
                        <div class="flex justify-center items-center mb-4">
                            <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31b.svg'"
                                alt="" />
                        </div>
                        <div class="flex justify-center items-center mb-4">
    <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page21.svg'" alt="" />
</div>
                    </div>
                </div>

            </div>

            <div>
                <div class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] "
                    style="border-radius: 50px;">
                </div>
                <h4 class="text-3xl font-semibold mt-6 mb-2 text-indigo-600">If You Are an Influential (I) Parent with
                    a Dominant-Cautious (DC)
                    Child</h4>
                <div class="row">
                    <div class="col-6">
                        <div class="flex justify-center items-center mb-4">
                            <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31.svg'"
                                alt="" />
                        </div>
                        <div class="flex justify-center items-center mb-4">
                            <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31b.svg'"
                                alt="" />
                        </div>
                        <div class="flex justify-center items-center mb-4">
    <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page21.svg'" alt="" />
</div>
                    </div>
                    <div class="col-6">
                        <h4 class="text-xl font-semibold ">Balancing Enthusiasm with Structure:</h4>
                        <p><strong>Tip : </strong> While you naturally create a lively and fun environment, it’s
                            important to
                            provide structure and clear expectations for your DC child. They thrive on challenges and
                            clear
                            goals.</p>
                        <p><strong>Example : </strong> Set up a reward system where your child earns points for
                            completing tasks
                            and reaching goals. This combines fun and structure, keeping them motivated.</p>

                        <h4 class="text-xl font-semibold ">Encouraging Precision:</h4>
                        <p><strong>Tip : </strong> Help your DC child focus on accuracy and detail without becoming
                            overwhelmed.
                            Provide activities that combine creativity with precision.</p>
                        <p><strong>Example : </strong> Engage your child in arts and crafts projects that require
                            careful
                            planning
                            and execution. Praise their attention to detail and creativity.</p>

                        <h4 class="text-xl font-semibold ">Supporting Analytical Decision-Making:</h4>
                        <p><strong>Tip : </strong> Support your child’s decision-making abilities by giving them
                            opportunities
                            to
                            make choices and take on leadership roles, while encouraging analytical thinking.</p>
                        <p><strong>Example : </strong> Allow your child to plan a weekend activity or make decisions
                            about their
                            extracurricular activities. Guide them through the decision-making process, discussing the
                            pros and
                            cons of each option.</p>

                        <h4 class="text-xl font-semibold ">Reinforcing Attention to Detail:</h4>
                        <p><strong>Tip : </strong> Encourage your child to pay attention to detail in various tasks to
                            enhance
                            their precision skills.</p>
                        <p><strong>Example : </strong> Involve your child in cooking or baking, where measuring
                            ingredients and
                            following recipes exactly can help them understand the importance of detail and accuracy.
                        </p>

                    </div>

                </div>

            </div>

            <div>
                <div class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] "
                    style="border-radius: 50px;">
                </div>
                <h4 class="text-3xl font-semibold mt-6 mb-2 text-indigo-600">If You Are a Supportive (S) Parent with a
                    Dominant-Cautious (DC) Child
                </h4>
                <div class="row">

                    <div class="col-6">
                        <h4 class="text-xl font-semibold ">Encouraging Independence:</h4>
                        <p><strong>Tip : </strong> While you are naturally supportive and nurturing, it’s important to
                            encourage
                            your DC child to take on responsibilities and make decisions independently.</p>
                        <p><strong>Example : </strong> Allow your child to take the lead on organising their study
                            schedule or
                            managing their own chores. Praise their efforts and decision-making skills.</p>

                        <h4 class="text-xl font-semibold ">Reinforcing Structure with Flexibility:</h4>
                        <p><strong>Tip : </strong> Clearly define routines and expectations while allowing some
                            flexibility for
                            your child's decision-making process.</p>
                        <p><strong>Example : </strong> Set up a daily routine but let your child decide the order in
                            which to
                            complete their tasks. This provides structure while promoting their autonomy.</p>

                        <h4 class="text-xl font-semibold ">Supporting Analytical Skills:</h4>
                        <p><strong>Tip : </strong> Encourage activities that require detailed planning and critical
                            thinking to
                            enhance your child's analytical skills.</p>
                        <p><strong>Example : </strong> Engage your child in activities such as building models,
                            conducting
                            experiments, or solving puzzles that require careful thought and precision.</p>

                        <h4 class="text-xl font-semibold ">Nurturing Confidence in Leadership:</h4>
                        <p><strong>Tip : </strong> Provide opportunities for your child to lead projects and make
                            decisions,
                            reinforcing their natural leadership abilities.</p>
                        <p><strong>Example : </strong> Assign your child a leadership role in family activities, such as
                            planning
                            a weekend outing or organising a family event. Support their decisions and offer guidance
                            when
                            needed.</p>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center mb-4">
                            <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31.svg'"
                                alt="" />
                        </div>
                        <div class="flex justify-center items-center mb-4">
                            <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31b.svg'"
                                alt="" />
                        </div>
                        <div class="flex justify-center items-center mb-4">
    <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page21.svg'" alt="" />
</div>
                    </div>

                </div>

            </div>

            <div>
                <div class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] "
                    style="border-radius: 50px;">
                </div>
                <h4 class="text-3xl font-semibold mt-6 mb-2 text-indigo-600">If You Are a Cautious (C) Parent with a
                    Dominant-Cautious (DC) Child
                </h4>
                <div class="row">
                    <div class="col-6">
                        <div class="flex justify-center items-center mb-4">
                            <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31.svg'"
                                alt="" />
                        </div>
                        <div class="flex justify-center items-center mb-4">
                            <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31b.svg'"
                                alt="" />
                        </div>
                        <div class="flex justify-center items-center mb-4">
    <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page21.svg'" alt="" />
</div>
                    </div>
                    <div class="col-6">
                        <h4 class="text-xl font-semibold ">Promoting Structured Independence:</h4>
                        <p><strong>Tip : </strong> While you value structure and precision, it’s important to encourage
                            your DC
                            child to take on responsibilities independently within a clear framework.</p>
                        <p><strong>Example : </strong> Allow your child to manage their own study schedule, providing
                            guidelines
                            but letting them decide the specific timing and order of tasks. Praise their organisational
                            skills
                            and independence.</p>

                        <h4 class="text-xl font-semibold ">Balancing Perfectionism with Flexibility:</h4>
                        <p><strong>Tip : </strong> Help your child understand that while striving for perfection is
                            admirable,
                            being adaptable is also crucial. Teach them to balance their meticulousness with the ability
                            to
                            adapt when needed.</p>
                        <p><strong>Example : </strong> When your child works on a project, discuss potential changes and
                            how to
                            handle them. Emphasise that adapting to new situations can lead to improved outcomes.</p>

                        <h4 class="text-xl font-semibold ">Encouraging Analytical Leadership:</h4>
                        <p><strong>Tip : </strong> Support your child’s leadership abilities by providing opportunities
                            that
                            require both analytical thinking and decision-making.</p>
                        <p><strong>Example : </strong> Assign your child a project that involves research and analysis,
                            such as
                            planning a family budget or organising a detailed itinerary for a trip. Allow them to lead
                            and make
                            key decisions.</p>

                        <h4 class="text-xl font-semibold ">Simplifying Communication:</h4>
                        <p><strong>Tip : </strong> Communicate clearly and concisely, avoiding overwhelming your child
                            with too
                            many details at once. Focus on key points to ensure understanding.</p>
                        <p><strong>Example : </strong> When giving instructions for a task, break them down into simple,
                            manageable steps. Use visual aids like charts or checklists to help your child follow along
                            and stay
                            organised.</p>

                    </div>

                </div>

            </div>
        </div>

    </div>

    <!-- For DI Style Type -->
    <div id="DI" v-if="style == 'DI'">
        <div class="space-y-6 mt-4 ">
            <h4 class="font-semibold text-indigo-600">Understanding Your DISC Style as a Parent</h4>

            <p>As a parent, your DISC style significantly impacts how you interact with your child and approach
                parenting. Understanding your own style can help you communicate more effectively and support your
                child’s development. Here’s a brief overview of the four DISC styles:</p>

            <div class="space-y-4 ml-3">
                <div class="flex justify-center items-center mb-4">
                    <img class="w-120 h-auto object-contain" :src="'/images/reports-images/parental-insight-kids.svg'"
                        alt="" />
                </div>
            </div>


            <p>If you have a mixed style, please refer to each section that corresponds to your blend.</p>
            <p>If you do not know your style, please <a href="https://www.useunify.com/adults-assessment">click here to take
                our Adult Assessment!</a></p>
            <div class="">
                <div class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] "
                    style="border-radius: 50px;">
                </div>
                <h4 class="font-semibold text-indigo-600">If You Are a Dominant (D) Parent with a Dominant-Influential
                    (DI) Child</h4>

                <div class="row">
                    <div class="col-6">
                        <div class="mt-4">
                            <h4 class="text-md font-semibold ">Encouraging Collaboration</h4>
                            <p class=""><strong>Tip : </strong>While both you and your child are natural
                                leaders,
                                it’s important to
                                teach them the value of collaboration. Encourage your child to listen to others’ ideas
                                and work
                                as part of a team.</p>
                            <p class="mt-2 "><strong>Example : </strong>During family activities or games,
                                ensure
                                that everyone gets
                                a chance to lead and share their ideas. Discuss the importance of teamwork and
                                respecting
                                others’ input.</p>
                        </div>

                        <div class="mt-4">
                            <h4 class="text-xl font-semibold ">Managing Excitement</h4>
                            <p class=""><strong>Tip : </strong>Both you and your child may have high energy
                                levels.
                                Practice
                                activities that help manage excitement in a productive way.</p>
                            <p class="mt-2 "><strong>Example : </strong>Engage in sports or physical
                                activities
                                together to channel
                                energy positively. Discuss ways to stay focused and calm during quieter times.</p>
                        </div>

                        <div class="mt-4">
                            <h4 class="text-xl font-semibold ">Setting Clear Boundaries</h4>
                            <p class=""><strong>Tip : </strong>As a D parent, you may be used to taking
                                charge.
                                However, it’s
                                important to set clear boundaries and ensure that your child understands the rules and
                                consequences.</p>
                            <p class="mt-2 "><strong>Example : </strong>Create a family agreement that
                                outlines
                                expectations and
                                responsibilities for everyone. Review and update it regularly to keep it relevant.</p>
                        </div>

                        <div class="mt-4">
                            <h4 class="text-xl font-semibold ">Promote Independence</h4>
                            <p class=""><strong>Tip : </strong>Encourage your child to take on
                                responsibilities and
                                make decisions
                                independently. Provide opportunities for them to lead and manage tasks on their own.</p>
                            <p class="mt-2 "><strong>Example : </strong>Assign your child a project, such
                                as
                                planning a family
                                outing, and let them take the lead. Offer guidance as needed but allow them to make key
                                decisions.</p>
                        </div>

                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center mb-4">
                            <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31.svg'"
                                alt="" />
                        </div>
                        <div class="flex justify-center items-center mb-4">
                            <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31b.svg'"
                                alt="" />
                        </div>
                        <div class="flex justify-center items-center mb-4">
    <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page21.svg'" alt="" />
</div>
                    </div>
                </div>

            </div>

            <div class="mt-6">
                <div class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] "
                    style="border-radius: 50px;">
                </div>
                <h4 class="font-semibold text-indigo-600">If You Are an Influential (I) Parent with a
                    Dominant-Influential (DI) Child</h4>
                <div class="row">
                    <div class="col-6">
                        <div class="flex justify-center items-center mb-4">
                            <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31.svg'"
                                alt="" />
                        </div>
                        <div class="flex justify-center items-center mb-4">
                            <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31b.svg'"
                                alt="" />
                        </div>
                        <div class="flex justify-center items-center mb-4">
    <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page21.svg'" alt="" />
</div>
                    </div>
                    <div class="col-6">
                        <div class="mt-4">
                            <h4 class="text-xl font-semibold ">Balancing Fun with Structure</h4>
                            <p class=""><strong>Tip : </strong>While you naturally create a lively and fun
                                environment, it’s
                                important to provide structure and clear expectations for your DI child. They thrive on
                                challenges and clear goals.</p>
                            <p class="mt-2 "><strong>Example : </strong>Set up a reward system where your
                                child
                                earns points for
                                completing tasks and reaching goals. This combines fun and structure, keeping them
                                motivated.
                            </p>
                        </div>

                        <div class="mt-4">
                            <h4 class="text-xl font-semibold ">Encouraging Focus</h4>
                            <p class=""><strong>Tip : </strong>Help your DI child stay on task by setting
                                specific,
                                achievable goals
                                and providing consistent feedback. Break larger tasks into smaller, manageable steps.
                            </p>
                            <p class="mt-2 "><strong>Example : </strong>Create a weekly planner with your
                                child
                                outlining their tasks
                                and goals. Check in regularly to monitor their progress and provide encouragement.</p>
                        </div>

                        <div class="mt-4">
                            <h4 class="text-xl font-semibold ">Promoting Social Engagement</h4>
                            <p class=""><strong>Tip : </strong>Engage your child in activities that involve
                                social
                                interaction,
                                emphasising the importance of making friends and working together.</p>
                            <p class="mt-2 "><strong>Example : </strong>Organise playdates or group
                                activities
                                where your child can
                                interact with peers in a fun and supportive environment. Celebrate their social
                                successes and
                                discuss what everyone learned from the experience.</p>
                        </div>

                        <div class="mt-4">
                            <h4 class="text-xl font-semibold ">Build Creativity</h4>
                            <p class=""><strong>Tip : </strong>Support your child’s creative abilities by
                                providing
                                opportunities for
                                them to express themselves through art, music, or drama.</p>
                            <p class="mt-2 "><strong>Example : </strong>Allow your child to participate in
                                creative
                                projects or
                                performances. Encourage them to share their work with others and celebrate their
                                creativity.</p>
                        </div>
                    </div>

                </div>

            </div>

            <div class="mt-6">
                <div class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] "
                    style="border-radius: 50px;">
                </div>
                <h4 class="font-semibold text-indigo-600">If You Are a Supportive (S) Parent with a Dominant-Influential
                    (DI) Child</h4>
                <div class="row">
                    <div class="col-6">
                        <div class="mt-4">
                            <h4 class="text-xl font-semibold ">Encouraging Initiative</h4>
                            <p class=""><strong>Tip : </strong>While you are naturally supportive and
                                nurturing,
                                it’s important to
                                encourage your DI child to take on challenges and make decisions independently.</p>
                            <p class="mt-2 "><strong>Example : </strong>Allow your child to choose their
                                own
                                extracurricular
                                activities and support them in pursuing their interests. Encourage them to take the lead
                                in
                                planning family activities or projects.</p>
                        </div>

                        <div class="mt-4">
                            <h4 class="text-xl font-semibold ">Balancing Nurturing with Encouragement</h4>
                            <p class=""><strong>Tip : </strong>Provide a nurturing environment while also
                                encouraging your child to
                                step out of their comfort zone and try new things.</p>
                            <p class="mt-2 "><strong>Example : </strong>Praise your child’s efforts and
                                achievements, and gently push
                                them to take on new challenges, such as trying a new sport or joining a new club.</p>
                        </div>

                        <div class="mt-4">
                            <h4 class="text-xl font-semibold ">Promoting Social Interaction</h4>
                            <p class=""><strong>Tip : </strong>Involve your child in social activities that
                                require
                                teamwork and
                                cooperation. This helps them develop social skills and learn to work well with others.
                            </p>
                            <p class="mt-2 "><strong>Example : </strong>Encourage your child to join clubs,
                                sports
                                teams, or group
                                projects where they can interact with peers and practice their teamwork skills.</p>
                        </div>

                        <div class="mt-4">
                            <h4 class="text-xl font-semibold ">Building Confidence Through Positive
                                Reinforcement
                            </h4>
                            <p class=""><strong>Tip : </strong>Provide positive reinforcement and celebrate
                                your
                                child’s achievements
                                to build their confidence.</p>
                            <p class="mt-2 "><strong>Example : </strong>Create a “Success Board” where you
                                display
                                your child’s
                                accomplishments, such as good grades, completed projects, and other milestones.
                                Regularly
                                acknowledge their efforts and successes.</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center mb-4">
                            <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31.svg'"
                                alt="" />
                        </div>
                        <div class="flex justify-center items-center mb-4">
                            <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31b.svg'"
                                alt="" />
                        </div>
                        <div class="flex justify-center items-center mb-4">
    <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page21.svg'" alt="" />
</div>
                    </div>
                </div>

            </div>

            <div class="mt-6">
                <div class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] "
                    style="border-radius: 50px;">
                </div>
                <h4 class="font-semibold text-indigo-600">If You Are a Cautious (C) Parent with a Dominant-Influential
                    (DI) Child</h4>
                <div class="row">
                    <div class="col-6">
                        <div class="flex justify-center items-center mb-4">
                            <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31.svg'"
                                alt="" />
                        </div>
                        <div class="flex justify-center items-center mb-4">
                            <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31b.svg'"
                                alt="" />
                        </div>
                        <div class="flex justify-center items-center mb-4">
    <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page21.svg'" alt="" />
</div>
                    </div>
                    <div class="col-6">
                        <div class="mt-4">
                            <h4 class="text-xl font-semibold ">Encouraging Expressive Outlets</h4>
                            <p class=""><strong>Tip : </strong>While you value organisation and structure,
                                it’s
                                important to support
                                your DI child’s need for creative and expressive activities.</p>
                            <p class="mt-2 "><strong>Example : </strong>Provide opportunities for your
                                child to
                                engage in activities
                                like drama, music, or dance, where they can express themselves and showcase their
                                talents.
                                Encourage them to share their creations with family and friends.</p>
                        </div>

                        <div class="mt-4">
                            <h4 class="text-xl font-semibold ">Balancing Detail with Big Picture</h4>
                            <p class=""><strong>Tip : </strong>While you focus on details and precision,
                                help your
                                DI child see the
                                bigger picture and the impact of their actions.</p>
                            <p class="mt-2 "><strong>Example : </strong>When working on projects, discuss
                                both the
                                detailed steps and
                                the overall goal. Encourage your child to think about how their actions contribute to
                                the larger
                                outcome, promoting both their attention to detail and visionary thinking.</p>
                        </div>

                        <div class="mt-4">
                            <h4 class="text-xl font-semibold ">Supporting Social Leadership</h4>
                            <p class=""><strong>Tip : </strong>Encourage your child’s natural leadership
                                abilities
                                in social settings
                                while guiding them to be considerate of others.</p>
                            <p class="mt-2 "><strong>Example : </strong>Suggest your child take on
                                leadership roles
                                in group
                                activities, such as being the team captain in sports or the leader in group projects.
                                Teach them
                                the importance of listening to team members and valuing their contributions.</p>
                        </div>

                        <div class="mt-4">
                            <h4 class="text-xl font-semibold ">Creating Flexible Structures</h4>
                            <p class=""><strong>Tip : </strong>Combine your need for structure with your
                                child’s
                                need for flexibility
                                and spontaneity.</p>
                            <p class="mt-2 "><strong>Example : </strong>Establish a daily routine that
                                includes
                                both structured
                                activities and free time. Allow your child to choose how they spend their free time,
                                encouraging
                                them to explore new interests and hobbies while maintaining a sense of order in their
                                day.</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>

    <!-- For I Style Type -->
    <div id="I" v-if="style == 'I'">
        <div class="space-y-6">
            <div class="pl-4">
                <h4 class="text-3xl font-semibold ">Understanding Your DISC Style as a Parent</h4>
                <p class=" pl-4">

                    As a parent, your DISC style significantly impacts how you interact with your child and approach
                    parenting. Understanding your own style can help you communicate more effectively and support your
                    child’s development.

                </p>
                <p class=" pl-4">Here’s a brief overview of the four DISC styles:</p>
            </div>

            <div class="space-y-4 ml-3">
                <div class="flex justify-center items-center mb-4">
                    <img class="w-120 h-auto object-contain" :src="'/images/reports-images/parental-insight-kids.svg'"
                        alt="" />
                </div>
            </div>

            <div class="pl-4">
                <p class=" pl-4">If you have a mixed style, please refer to each section that corresponds
                    to your blend.</p>
                    
            </div>

            <div class="pl-4">
                <p class="text-blue-600 pl-4"><a href="https://www.useunify.com/adults-assessment">If you do not know
                        your style, please click here to take our
                        Adult Assessment!</a></p>
            </div>

            <div class="space-y-4 ml-3">
                <div class="pl-4">
                    <div class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] "
                        style="border-radius: 50px;">
                    </div>
                    <h4 class="text-md font-semibold text-indigo-600">If You Are a Dominant (D) Parent with an
                        Influential
                        (I) Child</h4>
                    <div class="row">
                        <div class="col-6">
                            <ul class="list-none pl-6">
                                <li><strong>Balancing Structure with Creativity:</strong>
                                    <br><strong>Tip : </strong>While you prefer to take charge, it’s
                                    important to allow your I child the freedom to explore their creativity.
                                    <br><strong>Example
                                        : </strong>Establish
                                    a routine that includes both structured activities and time for creative play,
                                    allowing them
                                    to express themselves freely.
                                </li>
                                <li><strong>Encouraging Social Interaction:</strong><br><strong>Tip : </strong>
                                    Recognise and
                                    support your child’s need for
                                    social interaction and communication.<br> <strong>Example : </strong>Arrange
                                    playdates,
                                    group
                                    activities, or
                                    social clubs where they can interact with peers and build friendships.</li>
                                <li><strong>Providing Positive Feedback:</strong> <br><strong>Tip : </strong>Offer
                                    praise and
                                    recognition for their
                                    enthusiasm and social skills. <br><strong>Example : </strong>Celebrate their efforts
                                    in
                                    making
                                    friends and
                                    engaging with others, highlighting how their positive energy impacts those around
                                    them.</li>
                                <li><strong>Supporting Their Ideas:</strong> <br><strong>Tip : </strong>Encourage your
                                    child’s
                                    creative ideas and projects,
                                    providing guidance and support.<br> <strong>Example : </strong>Help them plan and
                                    execute
                                    creative projects or
                                    activities, praising their initiative and creativity.</li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <div class="flex justify-center items-center mb-4">
                                <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31.svg'"
                                    alt="" />
                            </div>
                            <div class="flex justify-center items-center mb-4">
                                <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31b.svg'"
                                    alt="" />
                            </div>
                        </div>
                    </div>

                </div>

                <div class="pl-4">
                    <div class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] "
                        style="border-radius: 50px;">
                    </div>

                    <h4 class="text-md font-semibold text-indigo-600">If You Are an Influential (I) Parent with an
                        Influential (I) Child</h4>
                    <div class="row">
                        <div class="col-6">
                            <div class="flex justify-center items-center mb-4">
                                <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31.svg'"
                                    alt="" />
                            </div>
                            <div class="flex justify-center items-center mb-4">
                                <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31b.svg'"
                                    alt="" />
                            </div>
                        </div>
                        <div class="col-6">
                            <ul class="list-none pl-6">
                                <li><strong>Creating a Lively Environment:</strong><br><strong>Tip : </strong> Create an
                                    energetic and engaging environment
                                    that stimulates your child’s natural enthusiasm and creativity. <br> <strong>Example
                                        :
                                    </strong>Involve them in
                                    family activities that encourage interaction and creativity, such as game nights or
                                    arts and
                                    crafts sessions.</li>
                                <li><strong>Encouraging Creative Expression:</strong><br><strong>Tip : </strong> Provide
                                    various
                                    outlets for your child to
                                    express their creativity and ideas. <br><strong>Example : </strong>Enrol them in art
                                    classes, drama clubs, or
                                    other creative activities where they can showcase their talents.</li>
                                <li><strong>Supporting Social Skills Development:</strong><br><strong>Tip : </strong>
                                    Encourage
                                    opportunities for your
                                    child to build and maintain friendships. <br><strong>Example : </strong>Arrange
                                    regular
                                    playdates and group
                                    activities that allow them to practice their social skills in a fun and supportive
                                    environment.</li>
                                <li><strong>Providing Positive Reinforcement:</strong><br><strong>Tip : </strong> Offer
                                    frequent
                                    praise and recognition for
                                    their efforts and achievements. <br> <strong>Example : </strong>Celebrate their
                                    successes,
                                    both big and small,
                                    reinforcing their confidence and motivation.</li>
                            </ul>
                        </div>

                    </div>

                </div>

                <div class="pl-4">
                    <div class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] "
                        style="border-radius: 50px;">
                    </div>
                    <h4 class="text-md font-semibold text-indigo-600">If You Are a Supportive (S) Parent with an
                        Influential (I) Child</h4>
                    <div class="row">
                        <div class="col-6">
                            <ul class="list-none pl-6">
                                <li><strong>Balancing Enthusiasm with Stability:</strong><br><strong>Tip : </strong>
                                    While you
                                    provide a calm and stable
                                    environment, ensure your I child has opportunities to engage in energetic and
                                    creative
                                    activities. <br><strong>Example : </strong>Use visual schedules and routines to
                                    outline
                                    daily activities,
                                    providing a balance between structured and creative play.</li>
                                <li><strong>Encouraging Social Interaction:</strong> <br><strong>Tip : </strong>Create
                                    opportunities for your child to
                                    engage with others in a supportive and collaborative manner. <br><strong>Example :
                                    </strong>Arrange playdates or
                                    group activities where they can work with peers, emphasising the importance of
                                    teamwork and
                                    cooperation.</li>
                                <li><strong>Providing Positive Reinforcement:</strong> <br><strong>Tip : </strong>Offer
                                    praise
                                    and recognition for their
                                    social skills and creative efforts. <br><strong>Example : </strong>Celebrate their
                                    achievements in making friends
                                    and engaging with others, highlighting how their positive energy impacts those
                                    around them.
                                </li>
                                <li><strong>Encouraging Leadership in Group Settings:</strong><br><strong>Tip :
                                    </strong>
                                    Encourage your child to take on
                                    small leadership roles within group activities. <br><strong>Example :
                                    </strong>Assign them
                                    roles such as team
                                    leader in group projects or activities, supporting their growth in confidence and
                                    leadership
                                    skills.</li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <div class="flex justify-center items-center mb-4">
                                <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31.svg'"
                                    alt="" />
                            </div>
                            <div class="flex justify-center items-center mb-4">
                                <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31b.svg'"
                                    alt="" />
                            </div>
                        </div>
                    </div>

                </div>

                <div class="pl-4">
                    <div class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] "
                        style="border-radius: 50px;">
                    </div>
                    <h4 class="text-md font-semibold text-indigo-600">If You Are a Cautious (C) Parent with an
                        Influential
                        (I) Child</h4>
                    <div class="row">
                        <div class="col-6">
                            <div class="flex justify-center items-center mb-4">
                                <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31.svg'"
                                    alt="" />
                            </div>
                            <div class="flex justify-center items-center mb-4">
                                <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31b.svg'"
                                    alt="" />
                            </div>
                        </div>
                        <div class="col-6">
                            <ul class="list-none pl-6">
                                <li><strong>Balancing Structure with Flexibility:</strong><br><strong>Tip : </strong>
                                    While you
                                    prefer structure, allow
                                    some flexibility for your child to explore their interests and make decisions.
                                    <br><strong>
                                        Example : </strong>
                                    Establish a routine that includes both structured activities and free time for your
                                    child to
                                    choose their own activities.
                                </li>
                                <li><strong>Encouraging Creative Expression:</strong><br><strong>Tip : </strong> Provide
                                    various
                                    outlets for your child to
                                    express their creativity and ideas. <br> <strong>Example : </strong>Enrol them in
                                    art
                                    classes, drama clubs, or
                                    other creative activities where they can showcase their talents.</li>
                                <li><strong>Supporting Social Interaction:</strong> <br><strong>Tip : </strong>Recognise
                                    and
                                    support your child’s need for
                                    social interaction and communication. <br> <strong>Example : </strong>Arrange
                                    playdates,
                                    group activities, or
                                    social clubs where they can interact with peers and build friendships.</li>
                                <li><strong>Providing Positive Feedback:</strong> <br><strong>Tip : </strong>Offer
                                    praise and
                                    recognition for their
                                    enthusiasm and social skills. <br> <strong>Example : </strong>Celebrate their
                                    efforts in
                                    making friends and
                                    engaging with others, highlighting how their positive energy impacts those around
                                    them.</li>
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
                <h4 class="text-3xl font-bold mb-2 ">Understanding Your DISC Style as a Parent</h4>
                <p class="text-sm">As a parent, your DISC style significantly impacts how you interact with your child
                    and approach parenting. Understanding your own style can help you communicate more effectively and
                    support your child’s development. Here’s a brief overview of the four DISC styles:</p>

                <!-- DISC Styles Overview -->
                <div class="space-y-4 ml-3">
                    <div class="flex justify-center items-center mb-4">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-images/parental-insight-kids.svg'" alt="" />
                    </div>
                </div>

                <p class="text-sm">If you have a mixed style, please refer to each section that corresponds to your
                    blend.</p>
                    <p>If you do not know your style, please <a href="https://www.useunify.com/adults-assessment">click here to take
                        our Adult Assessment!</a></p>

                <!-- Encouraging Leadership and Initiative for D Parent with ID Child -->
                <div class="space-y-4 ml-3">
                    <div class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] "
                        style="border-radius: 50px;">
                    </div>
                    <h4 class="text-md font-semibold text-indigo-600">If You Are a Dominant (D) Parent with an
                        Influential-Dominant (ID)
                        Child</h4>
                    <div class="row">
                        <div class="col-6">
                            <div class="space-y-2">
                                <h5 class="text-md font-semibold">
                                    <b>
                                        Encouraging Leadership and Initiative:
                                    </b>
                                </h5>
                                <p class="text-sm"><strong>Tip : </strong>While you are naturally goal-oriented and
                                    assertive,
                                    it’s important to
                                    encourage your ID child to take initiative and lead with confidence.</p>
                                <p class="text-sm"><strong>Example : </strong>Allow your child to take charge of family
                                    projects, such as planning
                                    a trip or organising a family event. Praise their leadership and decision-making
                                    skills.</p>
                            </div>
                            <div class="space-y-2">
                                <h5 class="text-md font-semibold">
                                    <b>
                                        Balancing Control and Flexibility:
                                    </b>
                                </h5>
                                <p class="text-sm"><strong>Tip : </strong>Although you prefer to be in control, giving
                                    your
                                    child some flexibility
                                    can help them develop their leadership abilities.</p>
                                <p class="text-sm"><strong>Example : </strong>Set clear goals and expectations, but
                                    allow {{
                                        childName }} to
                                    choose how they achieve these goals. This balance can enhance their sense of
                                    responsibility
                                    and creativity.</p>
                            </div>
                            <div class="space-y-2">
                                <h5 class="text-md font-semibold">
                                    <b>
                                        Promoting Positive Social Interaction:
                                    </b>
                                </h5>
                                <p class="text-sm"><strong>Tip : </strong>Encourage your child’s sociable nature by
                                    creating
                                    positive social
                                    interactions.</p>
                                <p class="text-sm"><strong>Example : </strong>Arrange playdates, group activities, and
                                    family
                                    gatherings where {{
                                        childName }} can interact with peers and practice their leadership skills in a
                                    social
                                    setting.</p>
                            </div>
                            <div class="space-y-2">
                                <h5 class="text-md font-semibold">
                                    <b>
                                        Supporting Decision-Making Skills:
                                    </b>
                                </h5>
                                <p class="text-sm"><strong>Tip : </strong>Allow your child to make decisions and take
                                    responsibility for their
                                    actions to build confidence and independence.</p>
                                <p class="text-sm"><strong>Example : </strong>Involve {{ childName }} in family
                                    decision-making
                                    processes, such as
                                    planning meals or choosing weekend activities. Discuss the outcomes of their
                                    decisions to
                                    reinforce learning and growth.</p>
                            </div>

                        </div>
                        <div class="col-6">
                            <div class="flex justify-center items-center mb-4">
                                <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31.svg'"
                                    alt="" />
                            </div>
                            <div class="flex justify-center items-center mb-4">
                                <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31b.svg'"
                                    alt="" />
                            </div>
                            <div data-v-39cdb3b5="" class="flex justify-center items-center"><img data-v-39cdb3b5=""
                                    class="w-96 h-auto object-contain" src="/images/reports-svg-images/Page 12 newb.svg"
                                    alt=""></div>
                        </div>
                    </div>

                </div>

                <!-- Encouraging Creativity and Leadership for I Parent with ID Child -->
                <div class="space-y-4 ml-3">
                    <div class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] "
                        style="border-radius: 50px;">
                    </div>
                    <h4 class="text-md font-semibold text-indigo-600">If You Are an Influential (I) Parent with an
                        Influential-Dominant
                        (ID) Child</h4>
                    <div class="row">
                        <div class="col-6">
                            <div class="flex justify-center items-center mb-4">
                                <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31.svg'"
                                    alt="" />
                            </div>
                            <div class="flex justify-center items-center mb-4">
                                <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31b.svg'"
                                    alt="" />
                            </div>
                            <div data-v-39cdb3b5="" class="flex justify-center items-center"><img data-v-39cdb3b5=""
                                    class="w-96 h-auto object-contain" src="/images/reports-svg-images/Page 12 newb.svg"
                                    alt=""></div>
                        </div>
                        <div class="col-6">
                            <div class="space-y-2">
                                <h5 class="text-md font-semibold">
                                    <b>
                                        Encouraging Creativity and Leadership:
                                    </b>
                                </h5>
                                <p class="text-sm"><strong>Tip : </strong>Both you and your ID child thrive on
                                    creativity and
                                    leadership. Provide
                                    opportunities for them to express their ideas and take on leadership roles.</p>
                                <p class="text-sm"><strong>Example : </strong>Involve {{ childName }} in creative
                                    projects like
                                    planning a family
                                    event or organising a community activity. Celebrate their innovative ideas and
                                    leadership
                                    skills.</p>
                            </div>
                            <div class="space-y-2">
                                <h5 class="text-md font-semibold">
                                    <b>
                                        Balancing Fun and Responsibility:
                                    </b>
                                </h5>
                                <p class="text-sm"><strong>Tip : </strong>While having fun is important, it’s also
                                    crucial to
                                    teach your child
                                    about responsibility and following through on tasks.</p>
                                <p class="text-sm"><strong>Example : </strong>Create a fun and engaging routine that
                                    includes
                                    both enjoyable
                                    activities and responsibilities. Use visual schedules to help {{ childName }} stay
                                    on track
                                    with their chores and homework.</p>
                            </div>
                            <div class="space-y-2">
                                <h5 class="text-md font-semibold">
                                    <b>
                                        Promoting Positive Social Interactions:
                                    </b>
                                </h5>
                                <p class="text-sm"><strong>Tip : </strong>Encourage your child’s natural sociability by
                                    arranging social
                                    activities and playdates.</p>
                                <p class="text-sm"><strong>Example : </strong>Organise regular social events where {{
                                    childName
                                    }} can interact
                                    with friends and family. Encourage them to join clubs or teams that match their
                                    interests.
                                </p>
                            </div>
                            <div class="space-y-2">
                                <h5 class="text-md font-semibold">
                                    <b>
                                        Providing Positive Reinforcement:
                                    </b>
                                </h5>
                                <p class="text-sm"><strong>Tip : </strong>Celebrate your child’s achievements and
                                    efforts with
                                    enthusiasm.
                                    Positive reinforcement is key to keeping them motivated.</p>
                                <p class="text-sm"><strong>Example : </strong>Praise {{ childName }} regularly for their
                                    accomplishments, whether
                                    it’s finishing a school project or being a good friend. Use rewards like extra
                                    playtime or a
                                    favourite treat to show appreciation for their efforts.</p>
                            </div>
                        </div>

                    </div>

                </div>

                <!-- Encouraging Independence and Leadership for S Parent with ID Child -->
                <div class="space-y-4 ml-3">
                    <div class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] "
                        style="border-radius: 50px;">
                    </div>
                    <h4 class="text-md font-semibold text-indigo-600">If You Are a Supportive (S) Parent with an
                        Influential-Dominant
                        (ID)
                        Child</h4>
                    <div class="row">
                        <div class="col-6">
                            <div class="space-y-2">
                                <h5 class="text-md font-semibold">
                                    <b>
                                        Encouraging Independence and Leadership:
                                    </b>
                                </h5>
                                <p class="text-sm"><strong>Tip : </strong>While you are naturally supportive and
                                    nurturing, it’s
                                    important to
                                    encourage your ID child to take on challenges and lead with confidence.</p>
                                <p class="text-sm"><strong>Example : </strong>Allow {{ childName }} to take charge of
                                    certain
                                    family activities,
                                    such as planning a game night or organising a weekend outing. Support their
                                    leadership by
                                    providing guidance when needed.</p>
                            </div>
                            <div class="space-y-2">
                                <h5 class="text-md font-semibold">
                                    <b>
                                        Balancing Nurturing with Independence:
                                    </b>
                                </h5>
                                <p class="text-sm"><strong>Tip : </strong>While you may prefer to provide close
                                    guidance, give
                                    your child
                                    opportunities to make decisions independently.</p>
                                <p class="text-sm"><strong>Example : </strong>Encourage {{ childName }} to handle small
                                    tasks on
                                    their own, such
                                    as managing their own schedule for homework and play. This helps them build
                                    confidence and
                                    decision-making skills.</p>
                            </div>
                            <div class="space-y-2">
                                <h5 class="text-md font-semibold">
                                    <b>
                                        Supporting Social Engagement:
                                    </b>
                                </h5>
                                <p class="text-sm"><strong>Tip : </strong>Support your child’s sociable nature by
                                    encouraging
                                    them to engage in
                                    group activities and build friendships.</p>
                                <p class="text-sm"><strong>Example : </strong>Arrange playdates and group activities
                                    where {{
                                        childName }} can
                                    interact with peers. Encourage participation in team sports or clubs that align with
                                    their
                                    interests.</p>
                            </div>
                            <div class="space-y-2">
                                <h5 class="text-md font-semibold">
                                    <b>
                                        Promoting Patience and Listening Skills:
                                    </b>
                                </h5>
                                <p class="text-sm"><strong>Tip : </strong>Help your child develop patience and active
                                    listening
                                    skills, which are
                                    crucial for effective leadership.</p>
                                <p class="text-sm"><strong>Example : </strong>Engage in activities that require
                                    turn-taking and
                                    listening, such as
                                    family discussions or cooperative games. Encourage {{ childName }} to listen to
                                    others’
                                    ideas and reflect on them before responding.</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="flex justify-center items-center mb-4">
                                <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31.svg'"
                                    alt="" />
                            </div>
                            <div class="flex justify-center items-center mb-4">
                                <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31b.svg'"
                                    alt="" />
                            </div>
                            <div data-v-39cdb3b5="" class="flex justify-center items-center"><img data-v-39cdb3b5=""
                                    class="w-96 h-auto object-contain" src="/images/reports-svg-images/Page 12 newb.svg"
                                    alt=""></div>
                        </div>
                    </div>

                </div>

                <!-- Encouraging Creative Expression for C Parent with ID Child -->
                <div class="space-y-4 ml-3">
                    <div class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] "
                        style="border-radius: 50px;">
                    </div>
                    <h4 class="text-md font-semibold text-indigo-600">If You Are a Cautious (C) Parent with an
                        Influential-Dominant (ID)
                        Child</h4>
                    <div class="row">
                        <div class="col-6">
                            <div class="flex justify-center items-center mb-4">
                                <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31.svg'"
                                    alt="" />
                            </div>
                            <div data-v-39cdb3b5="" class="flex justify-center items-center"><img data-v-39cdb3b5=""
                                    class="w-96 h-auto object-contain" src="/images/reports-svg-images/Page 12 newb.svg"
                                    alt=""></div>
                            <div class="flex justify-center items-center mb-4">
                                <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31b.svg'"
                                    alt="" />
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="space-y-2">
                                <h5 class="text-md font-semibold">
                                    <b>
                                        Encouraging Creative Expression and Leadership:
                                    </b>
                                </h5>
                                <p class="text-sm"><strong>Tip : </strong>While you value structure and precision, it’s
                                    important to provide
                                    opportunities for your ID child to explore their creativity and take on leadership
                                    roles.
                                </p>
                                <p class="text-sm"><strong>Example : </strong>Encourage {{ childName }} to engage in
                                    creative
                                    activities like
                                    drawing, storytelling, or building projects. Allow them to take the lead in
                                    organising
                                    family activities or events.</p>
                            </div>
                            <div class="space-y-2">
                                <h5 class="text-md font-semibold">
                                    <b>
                                        Balancing Structure with Flexibility:
                                    </b>
                                </h5>
                                <p class="text-sm"><strong>Tip : </strong>Although you prefer structured environments,
                                    allowing
                                    flexibility can
                                    help your child thrive.</p>
                                <p class="text-sm"><strong>Example : </strong>Create a daily routine that includes both
                                    structured activities and
                                    free time for {{ childName }} to choose their own activities. This balance helps
                                    them
                                    develop independence while still providing the structure they need.</p>
                            </div>
                            <div class="space-y-2">
                                <h5 class="text-md font-semibold">
                                    <b>
                                        Supporting Social Interaction:
                                    </b>
                                </h5>
                                <p class="text-sm"><strong>Tip : </strong>Encourage your child’s natural inclination
                                    towards
                                    social interaction by
                                    providing opportunities for them to engage with others.</p>
                                <p class="text-sm"><strong>Example : </strong>Arrange playdates, group activities, or
                                    family
                                    outings where {{
                                        childName }} can interact with peers. Support their participation in clubs or teams
                                    that
                                    align with their interests.</p>
                            </div>
                            <div class="space-y-2">
                                <h5 class="text-md font-semibold">
                                    <b>
                                        Developing Patience and Attention to Detail:
                                    </b>
                                </h5>
                                <p class="text-sm"><strong>Tip : </strong>Help your child develop patience and focus on
                                    details,
                                    balancing their
                                    enthusiasm with careful planning.</p>
                                <p class="text-sm"><strong>Example : </strong>Engage {{ childName }} in activities that
                                    require
                                    attention to
                                    detail and patience, such as building models or completing puzzles. Teach them to
                                    plan their
                                    tasks and think through steps before acting.</p>
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
            <h4 class="text-3xl font-bold mb-4">Understanding Your DISC Style as a Parent</h4>

            <p class="mb-4">As a parent, your DISC style significantly impacts how you interact with your child and
                approach parenting. Understanding your own style can help you communicate more effectively and support
                your child’s development. Here’s a brief overview of the four DISC styles:</p>


            <div class="space-y-4 ml-3">
                <div class="flex justify-center items-center mb-4">
                    <img class="w-120 h-auto object-contain" :src="'/images/reports-images/parental-insight-kids.svg'"
                        alt="" />
                </div>
            </div>
            <p class="mt-4 mb-4">If you have a mixed style, please refer to each section that corresponds to your blend.
            </p>
            <p>If you do not know your style, please <a href="https://www.useunify.com/adults-assessment">click here to take
                our Adult Assessment!</a></p>

            <div class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] "
                style="border-radius: 50px;">
            </div>
            <h4 class="text-3xl font-semibold mt-6 mb-2 text-indigo-600">If You Are a Dominant (D) Parent with an
                Influential-Supportive
                (IS) Child</h4>
            <div class="row">
                <div class="col-6">
                    <div class="">
                        <p><strong>Balancing Structure and Flexibility:</strong>
                            <br><strong>Tip : </strong> While you are goal-oriented and like to be in control, it’s
                            important to
                            balance this with a flexible approach that accommodates your IS child’s social and creative
                            nature.
                        </p>
                        <p><strong>Example : </strong> Set clear goals and expectations but allow {{ childName }} the
                            freedom to
                            choose how they achieve them. For instance, if they need to complete a project, let them
                            decide
                            whether to work alone or with friends.</p>
                    </div>

                    <div class="">
                        <p><strong>Encouraging Creative Expression:</strong><br><strong>Tip : </strong> Support your
                            child’s
                            creativity by providing opportunities for imaginative play and artistic expression.</p>
                        <p><strong>Example : </strong> Encourage {{ childName }} to participate in creative activities
                            like
                            drawing, painting, or drama. Praise their creativity and provide resources for them to
                            explore their
                            interests.</p>
                    </div>

                    <div class="">
                        <p><strong>Promoting Social Engagement:</strong><br><strong>Tip : </strong> While you may focus
                            on
                            results
                            and efficiency, it’s important to support your child’s need for social interaction and
                            teamwork.</p>
                        <p><strong>Example : </strong> Encourage {{ childName }} to join clubs, sports teams, or group
                            activities
                            where they can interact with peers. Highlight the value of teamwork and cooperation.</p>
                    </div>

                    <div class="">
                        <p><strong>Providing Positive Reinforcement:</strong> <br><strong>Tip : </strong> Use positive
                            reinforcement to motivate and encourage your IS child. Recognise their efforts and
                            achievements
                            regularly.</p>
                        <p><strong>Example : </strong> Praise {{ childName }} for their accomplishments, whether big or
                            small.
                            Use
                            specific feedback to acknowledge their strengths, such as their ability to make friends
                            easily or
                            their creative ideas.</p>
                    </div>

                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center mb-4">
                        <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31.svg'" alt="" />
                    </div>
                    <div class="flex justify-center items-center mb-4">
                        <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31b.svg'"
                            alt="" />
                    </div>

<div class="flex justify-center items-center mb-4">
    <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page21.svg'" alt="" />
</div>

                </div>
            </div>


            <div class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] "
                style="border-radius: 50px;">
            </div>
            <h4 class="text-3xl font-semibold mt-6 mb-2 text-indigo-600">If You Are an Influential (I) Parent with an
                Influential-Supportive (IS) Child</h4>
            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center mb-4">
                        <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31.svg'" alt="" />
                    </div>
                    <div class="flex justify-center items-center mb-4">
                        <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31b.svg'"
                            alt="" />
                    </div>
                    <div class="flex justify-center items-center mb-4">
    <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page21.svg'" alt="" />
</div>
                </div>
                <div class="col-6">
                    <div class="">
                        <p><strong>Nurturing Creativity:</strong> <br><strong>Tip : </strong> Both you and your IS child
                            thrive
                            on
                            creativity. Provide plenty of opportunities for imaginative and artistic expression.</p>
                        <p><strong>Example : </strong> Encourage {{ childName }} to engage in creative activities like
                            drawing,
                            painting, or writing stories. Participate with them, sharing your own creative ideas and
                            projects.
                        </p>
                    </div>

                    <div class="">
                        <p><strong>Encouraging Social Interaction:</strong><br><strong>Tip : </strong> Your social
                            nature aligns
                            well with your child’s. Support their desire for social interaction by arranging playdates
                            and group
                            activities.</p>
                        <p><strong>Example : </strong> Organise regular social events where {{ childName }} can interact
                            with
                            friends and family. Encourage them to join clubs or teams that match their interests.</p>
                    </div>

                    <div class="">
                        <p><strong>Balancing Fun with Responsibility:</strong><br><strong>Tip : </strong> While having
                            fun is
                            important, it’s also crucial to teach your child about responsibility and following through
                            on
                            tasks.</p>
                        <p><strong>Example : </strong> Create a fun and engaging routine that includes both enjoyable
                            activities
                            and responsibilities. Use visual schedules to help {{ childName }} stay on track with their
                            chores
                            and homework.</p>
                    </div>

                    <div class="">
                        <p><strong>Providing Positive Reinforcement:</strong><br><strong>Tip : </strong> Celebrate your
                            child’s
                            achievements and efforts with enthusiasm. Positive reinforcement is key to keeping them
                            motivated.
                        </p>
                        <p><strong>Example : </strong> Praise {{ childName }} regularly for their accomplishments,
                            whether it’s
                            finishing a school project or being a good friend. Use rewards like extra playtime or a
                            favorite
                            treat to show appreciation for their efforts.</p>
                    </div>

                </div>

            </div>


            <div class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] "
                style="border-radius: 50px;">
            </div>
            <h4 class="text-3xl font-semibold mt-6 mb-2 text-indigo-600">If You Are a Supportive (S) Parent with an
                Influential-Supportive (IS) Child</h4>
            <div class="row">
                <div class="col-6">
                    <div class="">
                        <p><strong>Encouraging Social Connections:</strong><br><strong>Tip : </strong> Your naturally
                            supportive
                            and nurturing nature complements your IS child’s need for social interaction. Encourage them
                            to
                            build and maintain friendships.</p>
                        <p><strong>Example : </strong> Arrange playdates, family gatherings, and social activities where
                            {{
                                childName }} can interact with peers and family members. Encourage them to join clubs or
                            teams to
                            expand their social network.</p>
                    </div>

                    <div class="">
                        <p><strong>Supporting Creative Expression:</strong><br><strong>Tip : </strong> Encourage your
                            child’s
                            creativity by providing a safe and supportive environment for artistic and imaginative
                            activities.
                        </p>
                        <p><strong>Example : </strong> Set up a creative space at home with art supplies, musical
                            instruments,
                            or
                            costumes for role-playing. Encourage {{ childName }} to express themselves through various
                            creative
                            outlets and join them in these activities.</p>
                    </div>

                    <div class="">
                        <p><strong>Balancing Support with Independence:</strong><br><strong>Tip : </strong> While you
                            are
                            naturally nurturing, it’s important to also encourage your child to take on responsibilities
                            and
                            make independent decisions.</p>
                        <p><strong>Example : </strong> Give {{ childName }} age-appropriate responsibilities, such as
                            helping
                            with
                            household chores or planning a family activity. Support their efforts and provide guidance
                            as
                            needed, but allow them to take the lead.</p>
                    </div>

                    <div class="">
                        <p><strong>Providing Gentle Guidance:</strong> <br><strong>Tip : </strong> Use gentle and
                            positive
                            reinforcement to guide your child’s behavior and decisions. Offer constructive feedback in a
                            supportive manner.</p>
                        <p><strong>Example : </strong> When {{ childName }} faces challenges, provide encouragement and
                            gentle
                            suggestions on how to overcome them. Use positive language to highlight their strengths and
                            areas
                            for growth, helping them build confidence and resilience.</p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center mb-4">
                        <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31.svg'" alt="" />
                    </div>
                    <div class="flex justify-center items-center mb-4">
                        <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31b.svg'"
                            alt="" />
                    </div>
                    <div class="flex justify-center items-center mb-4">
    <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page21.svg'" alt="" />
</div>
                </div>
            </div>


            <div class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] "
                style="border-radius: 50px;">
            </div>
            <h4 class="text-3xl font-semibold mt-6 mb-2 text-indigo-600">If You Are a Cautious (C) Parent with an
                Influential-Supportive
                (IS) Child</h4>
            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center mb-4">
                        <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31.svg'" alt="" />
                    </div>
                    <div class="flex justify-center items-center mb-4">
                        <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31b.svg'"
                            alt="" />
                    </div>
                    <div class="flex justify-center items-center mb-4">
    <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page21.svg'" alt="" />
</div>
                </div>
                <div class="col-6">
                    <div class="">
                        <p><strong>Encouraging Creative Expression:</strong><br><strong>Tip : </strong> While you value
                            structure
                            and precision, it’s important to provide opportunities for your IS child to explore their
                            creativity.</p>
                        <p><strong>Example : </strong> Set aside time for {{ childName }} to engage in creative
                            activities like
                            drawing, painting, or crafting. Encourage them to express their ideas freely and praise
                            their
                            creativity.</p>
                    </div>

                    <div class="">
                        <p><strong>Balancing Structure with Flexibility:</strong><br><strong>Tip : </strong> Although
                            you prefer
                            structured environments, allowing flexibility can help your child thrive.</p>
                        <p><strong>Example : </strong> Create a daily routine that includes both structured activities
                            and free
                            time for {{ childName }} to choose their own activities. This balance helps them develop
                            independence while still providing the structure they need.</p>
                    </div>

                    <div class="">
                        <p><strong>Supporting Social Interaction:</strong><br><strong>Tip : </strong> Encourage your
                            child’s
                            natural inclination towards social interaction by providing opportunities for them to engage
                            with
                            others.</p>
                        <p><strong>Example : </strong> Arrange playdates, group activities, or family outings where {{
                            childName
                            }} can interact with peers. Support their participation in clubs or teams that align with
                            their
                            interests.</p>
                    </div>

                    <div class="">
                        <p><strong>Promoting Empathy and Understanding:</strong> <br><strong>Tip : </strong> Teach your
                            child
                            the
                            importance of empathy and understanding others' feelings.</p>
                        <p><strong>Example : </strong> Engage in activities that require taking turns and sharing, such
                            as
                            cooperative games or family projects. Discuss different perspectives and encourage {{
                                childName }}
                            to consider others' feelings in various situations.</p>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- For S Style Type -->
    <div id="S" v-if="style == 'S'">
        <div class="space-y-6">
            <h4 class="text-md font-semibold text-indigo-600">Understanding Your DISC Style as a Parent</h4>
            <p class="text-base">As a parent, your DISC style significantly impacts how you interact with your child and
                approach parenting. Understanding your own style can help you communicate more effectively and support
                your child’s development. Here’s a brief overview of the four DISC styles:</p>
            <p>
                If you have a mixed style, please refer to each section that corresponds to your blend.
            </p>
            <p>If you do not know your style, please <a href="https://www.useunify.com/adults-assessment">click here to take
                our Adult Assessment!</a></p>
            <div class="space-y-4 ml-3">
                <div class="flex justify-center items-center mb-4">
                    <img class="w-120 h-auto object-contain" :src="'/images/reports-images/parental-insight-kids.svg'"
                        alt="" />
                </div>
            </div>


            <div class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] "
                style="border-radius: 50px;">
            </div>
            <h4 class="text-3xl font-semibold mt-6 mb-2 text-indigo-600">If You Are a Dominant (D) Parent with a
                Supportive (S) Child
            </h4>
            <div class="row">
                <div class="col-6">
                    <div class="space-y-4 ml-3">
                        <div class="">
                            <h4 class="font-semibold text-xl">Encouraging Collaboration</h4>
                            <p><strong>Tip : </strong> While you naturally take charge, encourage your S child to share
                                their
                                ideas and participate in decision-making.</p>
                            <p><strong>Example : </strong> During family activities, ensure everyone gets a chance to
                                lead and
                                contribute, discussing the importance of teamwork and collaboration.</p>
                        </div>

                        <div class="">
                            <h4 class="font-semibold text-xl">Encouraging Patience</h4>
                            <p><strong>Tip : </strong> Practice patience with your child, recognising their need for a
                                calm and
                                supportive environment.</p>
                            <p><strong>Example : </strong> Involve them in activities that require patience, such as
                                puzzles or
                                gardening, emphasising the value of taking time to achieve goals.</p>
                        </div>

                        <div class="">
                            <h4 class="font-semibold text-xl">Providing Supportive Feedback</h4>
                            <p><strong>Tip : </strong> Give feedback that reinforces their supportive nature and
                                encourages
                                their
                                participation.</p>
                            <p><strong>Example : </strong> Praise their efforts in helping others and highlight how
                                their
                                actions
                                positively impact the family or group.</p>
                        </div>

                        <div class="">
                            <h4 class="font-semibold text-xl">Creating a Structured Environment</h4>
                            <p><strong>Tip : </strong> Provide clear guidelines and consistent routines to help your
                                child feel
                                secure and focused.</p>
                            <p><strong>Example : </strong> Establish a daily routine with set times for activities,
                                homework,
                                and
                                relaxation, helping them understand what to expect.</p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center mb-4">
                        <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31.svg'" alt="" />
                    </div>
                    <div class="flex justify-center items-center mb-4">
                        <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31b.svg'"
                            alt="" />
                    </div>
                </div>
            </div>


            <div class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] "
                style="border-radius: 50px;">
            </div>
            <h4 class="text-3xl font-semibold mt-6 mb-2 text-indigo-600">If You Are an Influential (I) Parent with a
                Supportive (S)
                Child</h4>
            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center mb-4">
                        <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31.svg'" alt="" />
                    </div>
                    <div class="flex justify-center items-center mb-4">
                        <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31b.svg'"
                            alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <div class="space-y-4 ml-3">
                        <div class="">
                            <h4 class="font-semibold text-xl">Balancing Enthusiasm with Stability</h4>
                            <p><strong>Tip : </strong> While you bring energy and enthusiasm, ensure your S child has a
                                stable
                                and
                                predictable environment.</p>
                            <p><strong>Example : </strong> Use visual schedules and charts to outline daily activities,
                                helping
                                them feel secure and organised.</p>
                        </div>

                        <div class="">
                            <h4 class="font-semibold text-xl">Encouraging Social Interaction</h4>
                            <p><strong>Tip : </strong> Create opportunities for your child to engage with others in a
                                supportive
                                and collaborative manner.</p>
                            <p><strong>Example : </strong> Arrange playdates or group activities where they can work
                                with peers,
                                emphasising the importance of teamwork and cooperation.</p>
                        </div>

                        <div class="">
                            <h4 class="font-semibold text-xl">Providing Positive Reinforcement</h4>
                            <p><strong>Tip : </strong> Offer praise and recognition for their supportive actions and
                                contributions.</p>
                            <p><strong>Example : </strong> Celebrate their efforts in helping others and highlight how
                                their
                                actions make a difference, boosting their confidence and self-esteem.</p>
                        </div>

                        <div class="">
                            <h4 class="font-semibold text-xl">Encouraging Leadership in Group Settings</h4>
                            <p><strong>Tip : </strong> Encourage your child to take on small leadership roles within
                                group
                                activities.</p>
                            <p><strong>Example : </strong> Assign them roles such as team leader in group projects or
                                activities,
                                supporting their growth in confidence and leadership skills.</p>
                        </div>
                    </div>
                </div>

            </div>


            <div class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] "
                style="border-radius: 50px;">
            </div>
            <h4 class="text-3xl font-semibold mt-6 mb-2 text-indigo-600">If You Are a Supportive (S) Parent with a
                Supportive (S) Child
            </h4>
            <div class="row">
                <div class="col-6">
                    <div class="space-y-4 ml-3">
                        <div class="">
                            <h4 class="font-semibold text-xl">Creating a Calm and Stable Environment</h4>
                            <p><strong>Tip : </strong> Provide a calm and consistent environment where your child feels
                                secure.
                            </p>
                            <p><strong>Example : </strong> Maintain regular routines and clear expectations to help your
                                child
                                feel comfortable and focused.</p>
                        </div>

                        <div class="">
                            <h4 class="font-semibold text-xl">Encouraging Team Activities</h4>
                            <p><strong>Tip : </strong> Involve your child in activities that require teamwork and
                                cooperation.
                            </p>
                            <p><strong>Example : </strong> Enrol your child in team sports or group projects where they
                                can
                                collaborate with peers and practice their teamwork skills.</p>
                        </div>

                        <div class="">
                            <h4 class="font-semibold text-xl">Promote Independence</h4>
                            <p><strong>Tip : </strong> Encourage your child to take on responsibilities and make
                                decisions
                                independently.</p>
                            <p><strong>Example : </strong> Allow your child to choose their own extracurricular
                                activities and
                                support them in pursuing their interests.</p>
                        </div>

                        <div class="">
                            <h4 class="font-semibold text-xl">Providing Supportive Feedback</h4>
                            <p><strong>Tip : </strong> Offer gentle and supportive feedback that encourages them to
                                express
                                their
                                thoughts and feelings.</p>
                            <p><strong>Example : </strong> Praise their efforts and contributions, reinforcing their
                                sense of
                                self-worth and value.</p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center mb-4">
                        <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31.svg'" alt="" />
                    </div>
                    <div class="flex justify-center items-center mb-4">
                        <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31b.svg'"
                            alt="" />
                    </div>
                </div>
            </div>


            <div class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] "
                style="border-radius: 50px;">
            </div>
            <h4 class="text-3xl font-semibold mt-6 mb-2 text-indigo-600">If You Are a Cautious (C) Parent with a
                Supportive (S) Child
            </h4>
            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center mb-4">
                        <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31.svg'" alt="" />
                    </div>
                    <div class="flex justify-center items-center mb-4">
                        <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31b.svg'"
                            alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <div class="space-y-4 ml-3">
                        <div class="">
                            <h4 class="font-semibold text-xl">Creating a Structured Environment</h4>
                            <p><strong>Tip : </strong> Provide a well-organised and predictable environment where your
                                child
                                feels
                                secure.</p>
                            <p><strong>Example : </strong> Use visual schedules and routines to help your child
                                understand what
                                to
                                expect each day.</p>
                        </div>

                        <div class="">
                            <h4 class="font-semibold text-xl">Encouraging Social Interaction</h4>
                            <p><strong>Tip : </strong> Encourage opportunities for your child to engage in group
                                activities and
                                build social confidence.</p>
                            <p><strong>Example : </strong> Arrange playdates or group projects where they can interact
                                with
                                peers
                                and develop their social skills.</p>
                        </div>

                        <div class="">
                            <h4 class="font-semibold text-xl">Balancing Structure with Flexibility</h4>
                            <p><strong>Tip : </strong> While you prefer structure, allow some flexibility for your child
                                to
                                explore their interests and make decisions.</p>
                            <p><strong>Example : </strong> Establish a routine that includes both structured activities
                                and free
                                time for your child to choose their own activities.</p>
                        </div>

                        <div class="">
                            <h4 class="font-semibold text-xl">Providing Positive Reinforcement</h4>
                            <p><strong>Tip : </strong> Offer praise and recognition for their supportive actions and
                                contributions.</p>
                            <p><strong>Example : </strong> Celebrate their efforts in helping others and highlight how
                                their
                                actions make a difference, boosting their confidence and self-esteem.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- For SC Style Type -->
    <div id="SC" v-if="style == 'SC'">
        <div class="space-y-6">
            <div class=" ">
                <h4 class="text-2xl font-semibold">Understanding Your DISC Style as a Parent</h4>
                <p>Your DISC style significantly impacts how you interact with your child and approach parenting.
                    Understanding your own style can help you communicate more effectively and support your child’s
                    development. Here’s a brief overview of the four DISC styles:</p>
                <div class="flex justify-center items-center mb-4">
                    <img class="w-120 h-auto object-contain" :src="'/images/reports-images/parental-insight-kids.svg'"
                        alt="" />
                </div>
                <p>If you have a mixed style, please refer to each section that corresponds to your blend.</p>
                <p>If you do not know your style, please <a href="https://www.useunify.com/adults-assessment">click here to take
                    our Adult Assessment!</a></p>
            </div>

            <div class=" ">
                <div class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] "
                    style="border-radius: 50px;">
                </div>
                <h4 class="text-3xl font-semibold mt-6 mb-2 text-indigo-600">If You Are a Dominant (D) Parent with a
                    Supportive-Cautious (SC) Child
                </h4>
                <div class="row">
                    <div class="col-6">
                        <div class="space-y-4">
                            <div>
                                <h4 class="text-lg font-semibold">Encouraging Careful Decision-Making:</h4>
                                <p><strong>Tip : </strong>While you naturally make quick decisions, support your SC
                                    child's need
                                    to think things
                                    through.</p>
                                <p><strong>Example : </strong>Allow {{ childName }} extra time to make decisions, and
                                    discuss
                                    the pros and cons of
                                    different options together. This helps them feel confident in their choices.</p>
                            </div>
                            <div>
                                <h4 class="text-xl font-semibold">Promoting Independence with Guidance:</h4>
                                <p><strong>Tip : </strong>Encourage your child to take initiative and make independent
                                    decisions
                                    while providing
                                    guidance and support.</p>
                                <p><strong>Example : </strong>Let {{ childName }} choose their own extracurricular
                                    activities,
                                    and support them in
                                    managing their schedule. Praise their efforts to take responsibility.</p>
                            </div>
                            <div>
                                <h4 class="text-xl font-semibold">Recognising Efforts and Achievements:</h4>
                                <p><strong>Tip : </strong>Acknowledge your child's thoughtfulness and reliability by
                                    celebrating
                                    their efforts and
                                    accomplishments.</p>
                                <p><strong>Example : </strong>Create a "success board" where {{ childName }} can display
                                    their
                                    achievements, such
                                    as completed projects or acts of kindness. Regularly review and celebrate these
                                    successes.
                                </p>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold">Teaching Stress Management:</h4>
                                <p><strong>Tip : </strong>Help your child develop strategies to manage stress and stay
                                    calm in
                                    challenging
                                    situations.</p>
                                <p><strong>Example : </strong>Practice relaxation techniques together, such as deep
                                    breathing
                                    exercises or
                                    mindfulness activities. Encourage {{ childName }} to use these techniques when they
                                    feel
                                    overwhelmed.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center mb-4">
                            <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31.svg'"
                                alt="" />
                        </div>
                        <div class="flex justify-center items-center mb-4">
                            <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31b.svg'"
                                alt="" />
                        </div>
                        <div data-v-c08108fc="" class="flex justify-center items-center mb-4"><img data-v-c08108fc="" class="w-64 h-auto object-contain" src="/images/reports-svg-images/Page20.svg" alt=""></div>
                    </div>
                </div>

            </div>

            <div class=" ">
                <div class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] "
                    style="border-radius: 50px;">
                </div>
                <h4 class="text-3xl font-semibold mt-6 mb-2 text-indigo-600">If You Are an Influential (I) Parent
                    with a Supportive-Cautious (SC)
                    Child</h4>
                <div class="row">
                    <div class="col-6">
                        <div class="flex justify-center items-center mb-4">
                            <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31.svg'"
                                alt="" />
                        </div>
                        <div class="flex justify-center items-center mb-4">
                            <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31b.svg'"
                                alt="" />
                        </div>
                        <div data-v-c08108fc="" class="flex justify-center items-center mb-4"><img data-v-c08108fc="" class="w-64 h-auto object-contain" src="/images/reports-svg-images/Page20.svg" alt=""></div>
                    </div>
                    <div class="col-6">
                        <div class="space-y-4">
                            <div>
                                <h4 class="text-xl font-semibold">Balancing Enthusiasm with Calm:</h4>
                                <p><strong>Tip : </strong>While you bring energy and excitement, it's important to
                                    balance this
                                    with calm and
                                    structured activities that your SC child thrives in.</p>
                                <p><strong>Example : </strong>Create a balanced routine that includes both fun,
                                    energetic
                                    activities and calm,
                                    focused ones. Use visual schedules to help {{ childName }} stay on track with their
                                    responsibilities.</p>
                            </div>
                            <div>
                                <h4 class="text-xl font-semibold">Promoting Careful Planning and Thoughtfulness:</h4>
                                <p><strong>Tip : </strong>Support your child's natural inclination towards careful
                                    planning by
                                    involving them in
                                    organising activities.</p>
                                <p><strong>Example : </strong>Allow {{ childName }} to help plan family events or
                                    organise their
                                    own schedule for
                                    homework and play. Discuss the importance of planning and being prepared.</p>
                            </div>
                            <div>
                                <h4 class="text-xl font-semibold">Encouraging Social Interaction and Creativity:</h4>
                                <p><strong>Tip : </strong>Both you and your SC child can benefit from engaging in social
                                    and
                                    creative activities
                                    together.</p>
                                <p><strong>Example : </strong>Organise regular family gatherings, playdates, or creative
                                    projects like art and
                                    storytelling. Participate with them, sharing your own creative ideas and social
                                    skills.</p>
                            </div>
                            <div>
                                <h4 class="text-xl font-semibold">Encouraging Open Communication:</h4>
                                <p><strong>Tip : </strong>Maintain open lines of communication where your child feels
                                    comfortable sharing their
                                    thoughts and ideas.</p>
                                <p><strong>Example : </strong>Have regular family discussions where {{ childName }} can
                                    express
                                    their opinions and
                                    contribute to family decisions. Show genuine interest in their ideas and provide
                                    constructive feedback.</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class=" ">
                <div class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] "
                    style="border-radius: 50px;">
                </div>
                <h4 class="text-3xl font-semibold mt-6 mb-2 text-indigo-600">If You Are a Supportive (S) Parent with
                    a Supportive-Cautious (SC)
                    Child</h4>
                <div class="row">
                    <div class="col-6">
                        <div class="space-y-4">
                            <div>
                                <h4 class="text-xl font-semibold">Encouraging Independence with Support:</h4>
                                <p><strong>Tip : </strong>While you naturally provide support and nurturing, it's
                                    important to
                                    encourage your SC
                                    child to take on tasks independently.</p>
                                <p><strong>Example : </strong>Allow {{ childName }} to handle small responsibilities on
                                    their
                                    own, such as
                                    managing their homework schedule or organising their room. Offer guidance when
                                    needed but
                                    celebrate their independent efforts.</p>
                            </div>
                            <div>
                                <h4 class="text-xl font-semibold">Promoting Social Interaction in Calm Settings:</h4>
                                <p><strong>Tip : </strong>Support your child’s preference for calm and structured social
                                    interactions by arranging
                                    suitable activities.</p>
                                <p><strong>Example : </strong>Organise playdates or group activities that are calm and
                                    structured, like board
                                    games or cooperative projects. This allows {{ childName }} to interact with peers in
                                    a
                                    comfortable setting.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold">Providing Gentle Encouragement:</h4>
                                <p><strong>Tip : </strong>Use gentle encouragement to motivate your child and build
                                    their
                                    confidence.</p>
                                <p><strong>Example : </strong>Praise {{ childName }} for their efforts and
                                    accomplishments, no
                                    matter how small.
                                    Use positive reinforcement to highlight their strengths and build their self-esteem.
                                </p>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold">Supporting Careful Planning:</h4>
                                <p><strong>Tip : </strong>Encourage your child's natural inclination towards careful
                                    planning
                                    and organisation.
                                </p>
                                <p><strong>Example : </strong>Involve {{ childName }} in planning family activities or
                                    organising their schedule.
                                    Discuss the benefits of being prepared and organised, reinforcing their strengths.
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center mb-4">
                            <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31.svg'"
                                alt="" />
                        </div>
                        <div class="flex justify-center items-center mb-4">
                            <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31b.svg'"
                                alt="" />
                        </div>
                        <div data-v-c08108fc="" class="flex justify-center items-center mb-4"><img data-v-c08108fc="" class="w-64 h-auto object-contain" src="/images/reports-svg-images/Page20.svg" alt=""></div>
                    </div>
                </div>

            </div>

            <div class=" ">
                <div class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] "
                    style="border-radius: 50px;">
                </div>
                <h4 class=" text-3xl font-semibold mt-6 mb-2 text-indigo-600">If You Are a Cautious (C) Parent with
                    a Supportive-Cautious (SC) Child
                </h4>
                <div class="row">
                    <div class="col-6">
                        <div class="flex justify-center items-center mb-4">
                            <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31.svg'"
                                alt="" />
                        </div>
                        <div class="flex justify-center items-center mb-4">
                            <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31b.svg'"
                                alt="" />
                        </div>
                        <div data-v-c08108fc="" class="flex justify-center items-center mb-4"><img data-v-c08108fc="" class="w-64 h-auto object-contain" src="/images/reports-svg-images/Page20.svg" alt=""></div>
                    </div>
                    <div class="col-6">
                        <div class="space-y-4">
                            <div>
                                <h4 class="text-lg font-semibold">Encouraging Thoughtful Decision-Making:</h4>
                                <p><strong>Tip : </strong>Support your SC child’s need for careful and deliberate
                                    decision-making by discussing
                                    options and outcomes.</p>
                                <p><strong>Example : </strong>Allow {{ childName }} time to think through their
                                    decisions, and
                                    discuss the pros
                                    and cons together. This helps them feel confident in their choices.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold">Promoting Independence with Structure:</h4>
                                <p><strong>Tip : </strong>While you both value structure and predictability, it’s
                                    important to
                                    encourage
                                    independence within that framework.</p>
                                <p><strong>Example : </strong>Give {{ childName }} responsibilities that allow them to
                                    plan and
                                    organise their own
                                    tasks, such as creating a study schedule or managing a small project. Praise their
                                    efforts
                                    to work independently.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold">Teaching Adaptability and Flexibility:</h4>
                                <p><strong>Tip : </strong>Help your child develop strategies to handle unexpected
                                    changes and
                                    remain calm under
                                    pressure.</p>
                                <p><strong>Example : </strong>Practice scenarios where plans change suddenly, and
                                    discuss how to
                                    adapt. Use
                                    activities that involve flexibility, such as improvisational games or spontaneous
                                    outings.
                                </p>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold">Supporting Empathy and Social Skills:</h4>
                                <p><strong>Tip : </strong>Encourage your child to develop empathy and strong social
                                    skills by
                                    engaging in
                                    activities that promote understanding and cooperation.</p>
                                <p><strong>Example : </strong>Participate in community service projects or team-building
                                    activities that require
                                    collaboration and consideration of others' perspectives. Discuss the importance of
                                    empathy
                                    and effective communication.</p>
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
            <div class=" ">
                <h2 class=" font-semibold">Understanding Your DISC Style as a Parent</h2>
                <p>

                    As a parent, your DISC style significantly impacts how you interact with your child and approach
                    parenting. Understanding your own style can help you communicate more effectively and support your
                    child’s development. Here’s a brief overview of the four DISC styles:
                </p>
                <div class="flex justify-center items-center mb-4">
                    <img class="w-120 h-auto object-contain" :src="'/images/reports-images/parental-insight-kids.svg'"
                        alt="" />
                </div>
                <p>If you have a mixed style, please refer to each section that corresponds to your blend.</p>
                <p>If you do not know your style, please <a href="https://www.useunify.com/adults-assessment">click here to take
                    our Adult Assessment!</a></p>
            </div>

            <div class=" ">
                <div class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] "
                    style="border-radius: 50px;">
                </div>
                <h4 class="text-3xl font-semibold mt-6 mb-2 text-indigo-600">
                    If You Are a Dominant (D) Parent with a Supportive-Influential (SI) Child
                </h4>
                <div class="row">
                    <div class="col-6">
                        <div class="space-y-4">
                            <div>
                                <h4 class="text-xl font-semibold">Balancing Assertiveness with Sensitivity:
                                </h4>
                                <p><strong>Tip : </strong>
                                    While you are naturally assertive and direct, it’s important to balance this with
                                    sensitivity to your SI child’s feelings.

                                </p>
                                <p><strong>Example : </strong>
                                    Encourage {{ childName }} to express their thoughts and ideas, and listen actively.
                                    Praise their efforts to speak up, even if their ideas differ from yours.

                                </p>
                            </div>
                            <div>
                                <h4 class="text-xl  font-semibold">Encouraging Social Interaction and Leadership:
                                </h4>
                                <p><strong>Tip : </strong>
                                    Support your child’s social nature by providing opportunities for them to engage
                                    with peers and take on leadership roles.

                                </p>
                                <p><strong>Example : </strong>
                                    Allow {{ childName }} to organise family activities or participate in group projects
                                    where they can lead and collaborate with others. This helps build their confidence
                                    and social skills.
                                </p>
                            </div>
                            <div>
                                <h4 class="text-xl  font-semibold">Promoting Decision-Making Skills:
                                </h4>
                                <p><strong>Tip : </strong>
                                    Encourage your child to make decisions independently, helping them build confidence
                                    in their judgment.

                                </p>
                                <p><strong>Example : </strong>
                                    Involve {{ childName }} in family decision-making processes, such as planning a
                                    weekend outing or choosing meals. Discuss the outcomes of their decisions to
                                    reinforce learning and growth.


                                </p>
                            </div>
                            <div>
                                <h4 class="text-xl font-semibold">Supporting Empathy and Understanding:
                                </h4>
                                <p><strong>Tip : </strong>
                                    Teach your child the importance of empathy and understanding others’ perspectives.

                                </p>
                                <p><strong>Example : </strong>
                                    Engage in activities that require cooperation and consideration of others' feelings,
                                    such as volunteering together or caring for a pet. Discuss the importance of empathy
                                    and how it helps build strong relationships.

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center mb-4">
                            <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31.svg'"
                                alt="" />
                        </div>
                        <div class="flex justify-center items-center mb-4">
                            <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31b.svg'"
                                alt="" />
                        </div>
                        <div data-v-0132f395="" class="flex justify-center items-center"><img data-v-0132f395="" class="w-100 h-auto object-contain" src="/images/reports-svg-images/Page16.svg" alt=""></div>
                    </div>
                </div>

            </div>

            <div class=" ">
                <div class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] "
                    style="border-radius: 50px;">
                </div>
                <h4 class="text-3xl font-semibold mt-6 mb-2 text-indigo-600">

                    If You Are an Influential (I) Parent with a Supportive-Influential (SI) Child

                </h4>
                <div class="row">
                    <div class="col-6">
                        <div class="flex justify-center items-center mb-4">
                            <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31.svg'"
                                alt="" />
                        </div>
                        <div class="flex justify-center items-center mb-4">
                            <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31b.svg'"
                                alt="" />
                        </div>
                        <div data-v-0132f395="" class="flex justify-center items-center"><img data-v-0132f395="" class="w-100 h-auto object-contain" src="/images/reports-svg-images/Page16.svg" alt=""></div>
                    </div>
                    <div class="col-6">
                        <div class="space-y-4">
                            <div>
                                <h4 class="text-xl font-semibold">
                                    Encouraging Social Interaction and Creativity:

                                </h4>
                                <p><strong>Tip : </strong>
                                    Both you and your SI child thrive on social interactions and creative expression.
                                    Provide opportunities for them to engage in social and creative activities.

                                </p>
                                <p><strong>Example : </strong>
                                    Organise regular family gatherings, playdates, or creative projects like art and
                                    storytelling. Participate with them, sharing your own creative ideas and social
                                    skills.

                                </p>
                            </div>

                            <div>
                                <h4 class="text-xl font-semibold">
                                    Balancing Fun with Responsibility:

                                </h4>
                                <p><strong>Tip : </strong>
                                    While having fun is important, it’s also crucial to teach your child about
                                    responsibility and following through on tasks.

                                </p>
                                <p><strong>Example : </strong>
                                    Create a fun and engaging routine that includes both enjoyable activities and
                                    responsibilities. Use visual schedules to help {{ childName }} stay on track with
                                    their chores and homework.

                                </p>
                            </div>

                            <div>
                                <h4 class="text-xl font-semibold">
                                    Promoting Leadership and Teamwork:

                                </h4>
                                <p><strong>Tip : </strong>
                                    Encourage your child’s natural leadership and teamwork skills by providing
                                    opportunities for them to take on supportive leadership roles.

                                </p>
                                <p><strong>Example : </strong>
                                    Allow {{ childName }} to lead family activities or group projects, emphasising the
                                    importance of teamwork and cooperation. Celebrate their successes and provide
                                    guidance when needed.

                                </p>
                            </div>

                            <div>
                                <h4 class="text-xl font-semibold">
                                    Providing Positive Reinforcement:

                                </h4>
                                <p><strong>Tip : </strong>
                                    Celebrate your child’s achievements and efforts with enthusiasm. Positive
                                    reinforcement is key to keeping them motivated.

                                </p>
                                <p><strong>Example : </strong>
                                    Praise {{ childName }} regularly for their accomplishments, whether it’s finishing a
                                    school project or being a good friend. Use rewards like extra playtime or a
                                    favourite treat to show appreciation for their efforts.

                                </p>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

            <div class=" ">
                <div class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] "
                    style="border-radius: 50px;">
                </div>
                <h4 class="text-3xl font-semibold mt-6 mb-2 text-indigo-600">I
                    If You Are a Supportive (S) Parent with a Supportive-Influential (SI) Child

                </h4>
                <div class="row">
                    <div class="col-6">
                        <div class="space-y-4">
                            <div>
                                <h4 class="text-xl font-semibold">
                                    Encouraging Independence and Leadership:

                                </h4>
                                <p><strong>Tip : </strong>
                                    While you are naturally nurturing and supportive, it’s important to encourage your
                                    SI child to take on leadership roles and develop independence.

                                </p>
                                <p><strong>Example : </strong>
                                    Allow {{ childName }} to take charge of certain family activities, such as planning
                                    a game night or organising a weekend outing. Support their leadership by providing
                                    guidance when needed.

                                </p>
                            </div>

                            <div>
                                <h4 class="text-xl font-semibold">
                                    Promoting Social Interaction and Teamwork:

                                </h4>
                                <p><strong>Tip : </strong>
                                    Support your child’s sociable nature by encouraging them to engage in group
                                    activities and build friendships.

                                </p>
                                <p><strong>Example : </strong>
                                    Arrange playdates, family gatherings, and group activities where {{ childName }} can
                                    interact with peers. Encourage participation in team sports or clubs that align with
                                    their interests.

                                </p>
                            </div>

                            <div>
                                <h4 class="text-xl font-semibold">
                                    Providing Constructive Feedback:

                                </h4>
                                <p><strong>Tip : </strong>
                                    Use positive reinforcement and constructive feedback to guide your child’s behaviour
                                    and decisions.

                                </p>
                                <p><strong>Example : </strong>
                                    When {{ childName }} faces challenges, provide encouragement and gentle suggestions
                                    on how to overcome them. Use positive language to highlight their strengths and
                                    areas for growth, helping them build confidence and resilience.

                                </p>
                            </div>

                            <div>
                                <h4 class="text-xl font-semibold">
                                    Balancing Support with Independence:

                                </h4>
                                <p><strong>Tip : </strong>
                                    While you may prefer to provide close guidance, give your child opportunities to
                                    make decisions independently.

                                </p>
                                <p><strong>Example : </strong>
                                    Encourage {{ childName }} to handle small tasks on their own, such as managing their
                                    own schedule for homework and play. This helps them build confidence and
                                    decision-making skills.

                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center mb-4">
                            <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31.svg'"
                                alt="" />
                        </div>
                        <div class="flex justify-center items-center mb-4">
                            <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31b.svg'"
                                alt="" />
                        </div>
                        <div data-v-0132f395="" class="flex justify-center items-center"><img data-v-0132f395="" class="w-100 h-auto object-contain" src="/images/reports-svg-images/Page16.svg" alt=""></div>
                    </div>
                </div>

            </div>

            <div class=" ">
                <div class="w-full my-3 py-3 h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] "
                    style="border-radius: 50px;">
                </div>
                <h4 class=" text-3xl font-semibold mt-6 mb-2 text-indigo-600">
                    If You Are a Cautious (C) Parent with a Supportive-Influential (SI) Child
                </h4>
                <div class="row">
                    <div class="col-6">
                        <div class="flex justify-center items-center mb-4">
                            <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31.svg'"
                                alt="" />
                        </div>
                        <div class="flex justify-center items-center mb-4">
                            <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page31b.svg'"
                                alt="" />
                        </div>
                        <div data-v-0132f395="" class="flex justify-center items-center"><img data-v-0132f395="" class="w-100 h-auto object-contain" src="/images/reports-svg-images/Page16.svg" alt=""></div>
                    </div>
                    <div class="col-6">
                        <div class="space-y-4">
                            <div>
                                <h4 class="text-xl font-semibold">
                                    Encouraging Creative Expression and Social Interaction:

                                </h4>
                                <p><strong>Tip : </strong>
                                    While you value structure and precision, it’s important to provide opportunities for
                                    your SI child to explore their creativity and engage in social activities.
                                </p>
                                <p><strong>Example : </strong>
                                    Encourage {{ childName }} to participate in creative projects like drawing,
                                    storytelling, or building things. Arrange playdates and group activities where they
                                    can interact with peers.

                                </p>
                            </div>

                            <div>
                                <h4 class="text-xl font-semibold">
                                    Balancing Structure with Flexibility:

                                </h4>
                                <p><strong>Tip : </strong>
                                    Although you prefer structured environments, allowing flexibility can help your
                                    child thrive.

                                </p>
                                <p><strong>Example : </strong>
                                    Create a daily routine that includes both structured activities and free time for {{
                                        childName }} to choose their own activities. This balance helps them develop
                                    independence while still providing the structure they need.

                                </p>
                            </div>

                            <div>
                                <h4 class="text-xl font-semibold">
                                    Supporting Empathy and Social Responsibility:

                                </h4>
                                <p><strong>Tip : </strong>
                                    Encourage your child’s natural empathy and desire to help others by involving them
                                    in activities that promote social responsibility.

                                </p>
                                <p><strong>Example : </strong>
                                    Engage in community service projects or family volunteering activities where {{
                                        childName }} can help others and see the positive impact of their actions.

                                </p>
                            </div>

                            <div>
                                <h4 class="text-xl font-semibold">
                                    Developing Assertiveness and Decision-Making Skills:
                                </h4>
                                <p><strong>Tip : </strong>
                                    Help your child develop assertiveness and decision-making skills, balancing their
                                    supportive nature with confidence in their own choices.

                                </p>
                                <p><strong>Example : </strong>
                                    Encourage {{ childName }} to make decisions and express their opinions, starting
                                    with small choices and gradually moving to bigger ones. Discuss the outcomes of
                                    their decisions to reinforce learning and growth.

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
span,
b,
div.space-y-2>h4.font-medium {
    color: rgb(36, 168, 250);
    font-weight: bold;
    color: #fa25c4;
    /* font-size: 19px; */
}

h2,
h4,
.p-6>.row>.col-6>h2 {
    color: rgb(55 48 163);
    font-weight: bold !important;
}

h4{
    color: rgb(55 48 163);
    font-weight: bold !important;
}

.blueheading {
    color: rgb(55 48 163);
    font-size:21px;
}


ul.list-none>li,
div.space-y-2,
ul.mt-2.list-none.pl-5.space-y-2>li {
    margin-top: 50px;
    /* margin-bottom: 2px; */
}

ul>li {
    /* margin-top: 20px; */
}


p,
ul>li,
ol>li,
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

    .p-6{
        padding: 1rem;
    }
    strong{
        font-size: 1rem !important;
    }

    h2, h3, h4{
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
    name: "ParentalInsight",
    layout: AssessmentTypes,
    props: {
        style: String,
        childName: String,
        image: String,

    },
};
</script>
