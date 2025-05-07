<template>
    <div class="p-6">

    <div class="container mx-auto p-4">
        <h1 class="font-bold mb-4 text-center">Communication</h1>
    </div>

    <!-- Report 1 Auditory-->
    <div v-if="style == 'Auditory'">
        <!-- Content for Report 1 -->
        <div class="p-6">
            <!-- Communication Strategies Section -->
            <div>

                <p class="mb-4">
                    Effective communication with your auditory learner is
                    essential to ensure they understand instructions, stay
                    engaged, and feel supported. Here are some strategies to
                    enhance communication with auditory learners:
                </p>
                <h2 class="text-2xl font-bold mb-4">
                    How to Communicate Effectively with Auditory Learners
                </h2>
                <div
                    class="max-w-full overflow-x-auto shadow-md rounded-lg mb-6"
                >
                    <div class="min-w-[600px] md:min-w-full">
                        <!-- Minimum width for mobile scroll -->
                        <table
                            class="w-full border-collapse border border-gray-300"
                        >
                            <thead>
                                <tr>
                                    <th class="border px-4 py-2">Activity</th>
                                    <th class="border px-4 py-2">Strategy</th>
                                    <th class="border px-4 py-2">Example</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Use Clear Verbal Instructions
                                    </td>
                                    <td class="border px-4 py-2">
                                        Provide detailed verbal instructions and
                                        repeat important points to ensure
                                        understanding.
                                    </td>
                                    <td class="border px-4 py-2">
                                        When explaining a task, say, “First,
                                        gather your materials. Next, follow
                                        these steps…”
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Encourage Questions
                                    </td>
                                    <td class="border px-4 py-2">
                                        Encourage your child to ask questions if
                                        they do not understand something.
                                    </td>
                                    <td class="border px-4 py-2">
                                        Prompt them with, “Do you have any
                                        questions about what we just discussed?”
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Active Listening
                                    </td>
                                    <td class="border px-4 py-2">
                                        Practice active listening by making eye
                                        contact, nodding, and responding
                                        thoughtfully.
                                    </td>
                                    <td class="border px-4 py-2">
                                        When your child is speaking, show you
                                        are listening by saying, “I understand”
                                        or “That’s interesting, tell me more.”
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Engage in Conversations
                                    </td>
                                    <td class="border px-4 py-2">
                                        Have regular conversations about various
                                        topics to practice verbal expression and
                                        listening skills.
                                    </td>
                                    <td class="border px-4 py-2">
                                        Discuss their day, favourite activities,
                                        or current events during mealtimes or
                                        car rides.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Provide Verbal Feedback
                                    </td>
                                    <td class="border px-4 py-2">
                                        Give verbal feedback and praise for
                                        their efforts and achievements.
                                    </td>
                                    <td class="border px-4 py-2">
                                        Say, “You did a great job explaining
                                        that!” or “I’m proud of how you handled
                                        that discussion.”
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Read Aloud Together
                                    </td>
                                    <td class="border px-4 py-2">
                                        Read books aloud together and discuss
                                        the stories.
                                    </td>
                                    <td class="border px-4 py-2">
                                        Take turns reading pages and ask
                                        questions about the plot and characters.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Use Audiobooks and Podcasts
                                    </td>
                                    <td class="border px-4 py-2">
                                        Incorporate audiobooks and educational
                                        podcasts into their daily routine.
                                    </td>
                                    <td class="border px-4 py-2">
                                        Listen to an audiobook during car rides
                                        or play an educational podcast during
                                        downtime.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="flex justify-center items-center">
                <img
                    class="w-90 h-auto object-contain"
                    :src="'/images/reports-svg-images/Kids/LearningStyles/22.svg'"
                    alt=""
                />
            </div>
            <!-- Encouraging Open Dialogue Section -->
            <div>
                <h2 class="text-2xl font-bold mb-4">
                    Encouraging Open Dialogue
                </h2>
                <p class="mb-4">
                    Here are some strategies to encourage open dialogue and
                    enhance verbal expression:
                </p>
                <div
                    class="max-w-full overflow-x-auto shadow-md rounded-lg mb-6"
                >
                    <div class="min-w-[600px] md:min-w-full">
                        <!-- Minimum width for mobile scroll -->
                        <table
                            class="w-full border-collapse border border-gray-300"
                        >
                            <thead>
                                <tr>
                                    <th class="border px-4 py-2">Activity</th>
                                    <th class="border px-4 py-2">Strategy</th>
                                    <th class="border px-4 py-2">Example</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Ask Open-Ended Questions
                                    </td>
                                    <td class="border px-4 py-2">
                                        Encourage your child to express their
                                        thoughts and feelings by asking
                                        open-ended questions.
                                    </td>
                                    <td class="border px-4 py-2">
                                        Instead of asking, “Did you like the
                                        book?” ask, “What was your favourite
                                        part of the book and why?”
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Create a Dialogue Journal
                                    </td>
                                    <td class="border px-4 py-2">
                                        Start a dialogue journal where you and
                                        your child can write and respond to each
                                        other’s entries.
                                    </td>
                                    <td class="border px-4 py-2">
                                        Use a notebook to exchange written notes
                                        and responses about daily experiences,
                                        thoughts, and ideas.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Storytelling Sessions
                                    </td>
                                    <td class="border px-4 py-2">
                                        Encourage your child to tell stories and
                                        share experiences verbally.
                                    </td>
                                    <td class="border px-4 py-2">
                                        Have a designated storytelling time
                                        where your child can narrate stories
                                        from their imagination or describe their
                                        day.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Role-Playing Activities
                                    </td>
                                    <td class="border px-4 py-2">
                                        Use role-playing activities to explore
                                        different scenarios and practice verbal
                                        interactions.
                                    </td>
                                    <td class="border px-4 py-2">
                                        Act out various roles in a story or
                                        simulate real-life situations like
                                        ordering at a restaurant or resolving a
                                        conflict.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Verbal Summaries
                                    </td>
                                    <td class="border px-4 py-2">
                                        After completing an activity or lesson,
                                        ask your child to verbally summarise
                                        what they learned.
                                    </td>
                                    <td class="border px-4 py-2">
                                        Prompt them with, “Can you tell me what
                                        you learned about today?” or “Explain
                                        how you solved that problem.”
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Active Participation in Discussions
                                    </td>
                                    <td class="border px-4 py-2">
                                        Encourage your child to participate
                                        actively in family discussions and share
                                        their opinions.
                                    </td>
                                    <td class="border px-4 py-2">
                                        During family meetings or dinner
                                        conversations, ask for their input on
                                        decisions or topics of interest.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Use Technology for Communication
                                    </td>
                                    <td class="border px-4 py-2">
                                        Utilise technology like voice notes and
                                        audio messages to communicate and share
                                        thoughts.
                                    </td>
                                    <td class="border px-4 py-2">
                                        Send each other voice messages to
                                        discuss plans, share news, or provide
                                        updates.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <img
                        class="w-90 h-auto object-contain"
                        :src="'/images/reports-svg-images/Kids/LearningStyles/19.svg'"
                        alt=""
                    />
                </div>

                <p>
                    By incorporating these communication tips, you can create a
                    supportive and engaging environment that enhances your
                    auditory learner's understanding and expression.
                </p>
            </div>
        </div>
    </div>

    <!-- Report 2 Auditory _ Kinesthethic Blend -->
    <div v-if="style == 'Auditory/Kinesthethic'">
        <!-- Content for Report 2 -->
        <div class="p-6">
            <p class="mb-4">
                Communicating effectively with your child involves engaging both
                their auditory and kinaesthetic strengths. Here are some
                strategies to enhance communication with blended learners:
            </p>

            <section class="p-6">
                <h2 class="text-2xl font-medium mb-4">
                    How to Communicate Effectively with Blended Learners:
                </h2>

                <div
                    class="max-w-full overflow-x-auto shadow-md rounded-lg mb-6"
                >
                    <div class="min-w-[600px] md:min-w-full">
                        <!-- Minimum width for mobile scroll -->
                        <table
                            class="w-full border-collapse border border-gray-300"
                        >
                            <thead>
                                <tr>
                                    <th class="border px-4 py-2">Activity</th>
                                    <th class="border px-4 py-2">Strategy</th>
                                    <th class="border px-4 py-2">Example</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Use Verbal Instructions with Physical
                                        Demonstrations
                                    </td>
                                    <td class="border px-4 py-2">
                                        Combine verbal instructions with
                                        physical demonstrations to help your
                                        child understand tasks more clearly.
                                    </td>
                                    <td class="border px-4 py-2">
                                        If teaching your child how to bake,
                                        explain the steps verbally and then
                                        physically show them how to mix
                                        ingredients. This reinforces the
                                        instructions through both hearing and
                                        doing.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Encourage Discussions with Hands-On
                                        Engagement
                                    </td>
                                    <td class="border px-4 py-2">
                                        Engage your child in discussions while
                                        they are completing a physical task to
                                        keep them focused and involved.
                                    </td>
                                    <td class="border px-4 py-2">
                                        While your child is assembling a puzzle
                                        or building a model, ask them questions
                                        or prompt a discussion about the lesson,
                                        allowing them to think aloud while
                                        staying physically engaged.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Provide Feedback with Verbal and
                                        Physical Cues
                                    </td>
                                    <td class="border px-4 py-2">
                                        Offer feedback through verbal praise and
                                        by physically showing them how to
                                        improve.
                                    </td>
                                    <td class="border px-4 py-2">
                                        If your child is building a project,
                                        praise their effort verbally and then
                                        physically adjust a part of the model to
                                        show how it can be improved. This helps
                                        them see and hear how to do better.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Allow Movement During Conversations
                                    </td>
                                    <td class="border px-4 py-2">
                                        Encourage your child to move around
                                        during discussions, as physical movement
                                        can help them process information more
                                        effectively.
                                    </td>
                                    <td class="border px-4 py-2">
                                        Let your child pace or play with a small
                                        object while you discuss a topic. This
                                        allows them to stay physically engaged
                                        while listening to the conversation.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Use Audio Prompts During Physical Tasks
                                    </td>
                                    <td class="border px-4 py-2">
                                        Give audio prompts or instructions while
                                        your child engages in hands-on
                                        activities to reinforce learning through
                                        both listening and doing.
                                    </td>
                                    <td class="border px-4 py-2">
                                        While your child is building a Lego
                                        structure, give them verbal instructions
                                        about the design or steps to follow,
                                        which helps them absorb the information
                                        while staying active.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Encourage Listening While Engaging in
                                        Hands-On Work
                                    </td>
                                    <td class="border px-4 py-2">
                                        Use audio resources, like audiobooks or
                                        verbal instructions, while your child
                                        works on a physical project.
                                    </td>
                                    <td class="border px-4 py-2">
                                        Have your child listen to an audiobook
                                        related to a subject they’re studying
                                        while they draw, build, or create a
                                        project. This allows them to multitask
                                        and absorb the information both
                                        auditorily and physically.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Review Tasks Verbally and Physically
                                    </td>
                                    <td class="border px-4 py-2">
                                        After completing a task, review key
                                        points verbally and through physical
                                        demonstrations to reinforce
                                        understanding.
                                    </td>
                                    <td class="border px-4 py-2">
                                        After your child completes a science
                                        experiment, verbally review the steps
                                        and have them physically walk through
                                        the process again. This helps solidify
                                        the learning by engaging both auditory
                                        and kinaesthetic senses.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <div class="flex justify-center items-center">
                <img
                    class="w-90 h-auto object-contain"
                    :src="'/images/reports-svg-images/Kids/LearningStyles/22.svg'"
                    alt=""
                />
            </div>
            <section class="p-6">
                <h2 class="text-2xl font-medium mb-4">
                    Encouraging Open Dialogue:
                </h2>
                <div
                    class="max-w-full overflow-x-auto shadow-md rounded-lg mb-6"
                >
                    <div class="min-w-[600px] md:min-w-full">
                        <!-- Minimum width for mobile scroll -->
                        <table
                            class="w-full border-collapse border border-gray-300"
                        >
                            <thead>
                                <tr>
                                    <th class="border px-4 py-2">Activity</th>
                                    <th class="border px-4 py-2">
                                        Description
                                    </th>
                                    <th class="border px-4 py-2">Example</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Ask Open-Ended Questions with Physical
                                        Engagement
                                    </td>
                                    <td class="border px-4 py-2">
                                        Use open-ended questions that allow your
                                        child to express themselves verbally
                                        while engaging in a hands-on task.
                                    </td>
                                    <td class="border px-4 py-2">
                                        Instead of asking “Did you enjoy the
                                        book?”, ask “What part of the book would
                                        you act out, and why?” while encouraging
                                        them to physically move or act out the
                                        scene as they describe it.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Create a Dialogue Space with Physical
                                        Interaction
                                    </td>
                                    <td class="border px-4 py-2">
                                        Set up a space where your child can
                                        interact physically while engaging in
                                        verbal dialogue.
                                    </td>
                                    <td class="border px-4 py-2">
                                        Create a small activity space where they
                                        can build or create something while
                                        having a conversation about their day or
                                        a lesson.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Use Physical Objects to Facilitate
                                        Conversations
                                    </td>
                                    <td class="border px-4 py-2">
                                        Introduce physical objects to the
                                        conversation to encourage hands-on
                                        interaction and discussion.
                                    </td>
                                    <td class="border px-4 py-2">
                                        During a discussion about a science
                                        concept, use models or objects that your
                                        child can touch or manipulate as they
                                        explain their understanding.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Encourage Verbal Reflections During
                                        Movement
                                    </td>
                                    <td class="border px-4 py-2">
                                        Let your child reflect verbally while
                                        they are physically active to help them
                                        express ideas more easily.
                                    </td>
                                    <td class="border px-4 py-2">
                                        During a walk or physical activity, ask
                                        your child open-ended questions about a
                                        topic they’ve recently learned,
                                        encouraging them to share their thoughts
                                        while moving.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Pair Written Responses with Physical
                                        Action
                                    </td>
                                    <td class="border px-4 py-2">
                                        Encourage your child to write or
                                        verbally share ideas and then perform a
                                        related physical task to reinforce their
                                        response.
                                    </td>
                                    <td class="border px-4 py-2">
                                        After discussing a lesson, ask your
                                        child to write down or verbally express
                                        what they learned, and then perform a
                                        related experiment or task that involves
                                        movement.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Use Audio Prompts to Encourage Dialogue
                                    </td>
                                    <td class="border px-4 py-2">
                                        Play audio prompts or questions to
                                        inspire your child to start a
                                        conversation, allowing them to respond
                                        while completing physical activities.
                                    </td>
                                    <td class="border px-4 py-2">
                                        Play a podcast or audio clip and ask
                                        your child to discuss their thoughts on
                                        it while they are engaged in a hands-on
                                        task like crafting or building.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Reinforce Dialogue with Verbal and
                                        Physical Cues
                                    </td>
                                    <td class="border px-4 py-2">
                                        Encourage dialogue by reinforcing verbal
                                        communication with physical gestures or
                                        actions.
                                    </td>
                                    <td class="border px-4 py-2">
                                        When discussing a topic, use hand
                                        movements, gestures, or physical
                                        examples to support your words, allowing
                                        your child to engage both verbally and
                                        kinaesthetically.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <div class="flex justify-center items-center">
                <img
                    class="w-90 h-auto object-contain"
                    :src="'/images/reports-svg-images/Kids/LearningStyles/19.svg'"
                    alt=""
                />
            </div>
            <footer class="mt-12">
                <p>
                    By incorporating these communication tips, you can create a
                    supportive and engaging environment that enhances your
                    blended learner's understanding and expression.
                </p>
            </footer>
        </div>
    </div>

    <!-- Report 3 Auditory _ Reading & Writing Blend-->
    <div v-if="style == 'Auditory/Reading/Writing'">
        <!-- Content for Report 3 -->
        <div class="p-6">
            <div>
                <p>
                    Communicating effectively with your child involves engaging
                    both their auditory and reading/writing strengths. Here are
                    some strategies to enhance communication with blended
                    learners:
                </p>
                <h2 class="text-2xl font-semibold">
                    How to Communicate Effectively with Blended Learners:
                </h2>
                <table class="min-w-full table-auto border-collapse border ">
                    <thead>
                        <tr>
                            <th class="border px-4 py-2">Activity</th>
                            <th class="border px-4 py-2">Strategy</th>
                            <th class="border px-4 py-2">Example</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border px-4 py-2">Use Verbal Instructions and Written Notes</td>
                            <td class="border px-4 py-2">Combine verbal instructions with written notes to reinforce
                                understanding.</td>
                            <td class="border px-4 py-2">After verbally explaining a homework assignment, provide a
                                written outline or checklist to help your child remember the steps and refer back to
                                them as needed.</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Encourage Discussions Followed by Written Reflections</td>
                            <td class="border px-4 py-2">Engage your child in verbal discussions and have them write
                                reflections afterwards.</td>
                            <td class="border px-4 py-2">After discussing a book or lesson, ask your child to write a
                                summary or reflection on the conversation. This reinforces their understanding through
                                both listening and writing.</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Provide Feedback in Both Verbal and Written Forms</td>
                            <td class="border px-4 py-2">Offer feedback in verbal and written formats to ensure your
                                child understands and retains the information.</td>
                            <td class="border px-4 py-2">After reviewing a project, give verbal praise for what they did
                                well and provide written notes on areas for improvement that they can reference later.
                            </td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Allow Verbal Outlines Before Written Tasks</td>
                            <td class="border px-4 py-2">Encourage your child to verbally outline their thoughts before
                                writing assignments.</td>
                            <td class="border px-4 py-2">Before starting a writing task, have your child talk through
                                their ideas out loud. This helps them organise their thoughts before putting them into a
                                written form.</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Use Verbal Prompts for Written Responses</td>
                            <td class="border px-4 py-2">Use verbal prompts to inspire written responses.</td>
                            <td class="border px-4 py-2">Ask open-ended questions like, “What did you learn from today’s
                                lesson?” and then have your child write a paragraph or short response. This helps them
                                process verbal input and organise their written thoughts.</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Create a Dialogue Journal for Writing and Discussion</td>
                            <td class="border px-4 py-2">Set up a written dialogue journal where you and your child
                                exchange ideas, followed by verbal discussions.</td>
                            <td class="border px-4 py-2">Write notes or questions in a shared journal, and then discuss
                                the responses verbally. This reinforces their learning through both written and spoken
                                expression.</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Incorporate Written and Verbal Goal-Setting</td>
                            <td class="border px-4 py-2">Combine verbal goal-setting with written plans to track
                                progress.</td>
                            <td class="border px-4 py-2">After a conversation about academic or personal goals, help
                                your child write down actionable steps to achieve them. This gives them a tangible plan
                                they can refer to.</td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="flex justify-center items-center">
                <img
                    class="w-90 h-auto object-contain"
                    :src="'/images/reports-svg-images/Kids/LearningStyles/22.svg'"
                    alt=""
                />
            </div>
            <div>
                <h2 class="text-2xl font-semibold">
                    Encouraging Open Dialogue:
                </h2>
                <div
                    class="max-w-full overflow-x-auto shadow-md rounded-lg mb-6"
                >
                    <div class="min-w-[600px] md:min-w-full">
                        <!-- Minimum width for mobile scroll -->
                        <table
                            class="w-full border-collapse border border-gray-300"
                        >
                            <thead>
                                <tr>
                                    <th class="border px-4 py-2">Activity</th>
                                    <th class="border px-4 py-2">Strategy</th>
                                    <th class="border px-4 py-2">Example</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Ask Open-Ended Questions Followed by
                                        Written Reflections
                                    </td>
                                    <td class="border px-4 py-2">
                                        Encourage your child to respond to
                                        open-ended questions verbally and follow
                                        up with written reflections to reinforce
                                        understanding.
                                    </td>
                                    <td class="border px-4 py-2">
                                        Ask questions like, “What do you think
                                        about this topic?” and after the
                                        discussion, have your child write a
                                        summary of their thoughts.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Create a Written and Verbal Dialogue
                                        Space
                                    </td>
                                    <td class="border px-4 py-2">
                                        Set up a space where your child can
                                        express themselves both verbally and in
                                        writing.
                                    </td>
                                    <td class="border px-4 py-2">
                                        Create a journal where you write down
                                        prompts or questions, and then discuss
                                        the responses verbally to encourage
                                        ongoing dialogue in both formats.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Use Verbal Feedback Paired with Written
                                        Responses
                                    </td>
                                    <td class="border px-4 py-2">
                                        Offer verbal feedback during
                                        conversations, and ask your child to
                                        write their responses or thoughts.
                                    </td>
                                    <td class="border px-4 py-2">
                                        After discussing a lesson, provide
                                        feedback verbally, then ask your child
                                        to write down what they’ve learned or
                                        how they might apply the feedback in the
                                        future.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Encourage Verbal Expression Before
                                        Writing
                                    </td>
                                    <td class="border px-4 py-2">
                                        Let your child verbally explain their
                                        ideas before writing them down.
                                    </td>
                                    <td class="border px-4 py-2">
                                        When working on a writing project, have
                                        your child explain their thoughts or
                                        outline the key points aloud before they
                                        begin writing. This helps clarify their
                                        ideas before they organise them in
                                        writing.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Provide Written Prompts to Encourage
                                        Discussion
                                    </td>
                                    <td class="border px-4 py-2">
                                        Use written prompts to spark verbal
                                        discussion and follow up with written
                                        tasks.
                                    </td>
                                    <td class="border px-4 py-2">
                                        Write a thought-provoking question on a
                                        topic and then have a conversation about
                                        it. After the discussion, ask your child
                                        to write their reflections or
                                        conclusions.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Use Audio Resources to Spark Writing
                                    </td>
                                    <td class="border px-4 py-2">
                                        Incorporate audio resources like
                                        podcasts or audiobooks to initiate
                                        dialogue and written responses.
                                    </td>
                                    <td class="border px-4 py-2">
                                        After listening to an educational
                                        podcast, ask your child to discuss their
                                        thoughts and write a summary or response
                                        about what they learned.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Combine Verbal Encouragement with
                                        Written Notes
                                    </td>
                                    <td class="border px-4 py-2">
                                        Offer verbal encouragement during
                                        conversations and follow up with written
                                        notes to reinforce the dialogue.
                                    </td>
                                    <td class="border px-4 py-2">
                                        After a conversation about progress or
                                        goals, write down key points or next
                                        steps that your child can refer to
                                        later, supporting their learning through
                                        both spoken and written formats.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div>
                <p class="mt-6">
                    By incorporating these communication tips, you can create a
                    supportive and engaging environment that enhances your
                    blended learner's understanding and expression.
                </p>
            </div>
        </div>
    </div>

    <!-- Report 4 Auditory _ Visual Blend-->
    <div v-if="style == 'Auditory/Visual'">
        <!-- Content for Report 4 -->
        <div class="p-6">
            <div>
                <p class="">
                    Communicating effectively with your child involves engaging
                    both their auditory and visual strengths. Here are some
                    strategies to enhance communication with blended learners:
                </p>
                <h2 class="text-2xl font-semibold">
                    How to Communicate Effectively with Blended Learners
                </h2>

            </div>

            <div>
                <p class="text-lg font-semibold">Communication Strategies</p>
                <div
                    class="max-w-full overflow-x-auto shadow-md rounded-lg mb-6"
                >
                    <div class="min-w-[600px] md:min-w-full">
                        <!-- Minimum width for mobile scroll -->
                        <table
                            class="w-full border-collapse border border-gray-300"
                        >
                            <thead>
                                <tr>
                                    <th class="border px-4 py-2">Strategy</th>
                                    <th class="border px-4 py-2">
                                        Description
                                    </th>
                                    <th class="border px-4 py-2">Example</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Use Verbal Instructions with Visual
                                        Support
                                    </td>
                                    <td class="border px-4 py-2">
                                        When giving instructions, speak clearly
                                        and accompany them with visual aids such
                                        as diagrams, checklists, or notes.
                                    </td>
                                    <td class="border px-4 py-2">
                                        Say, “First, clean your room,” while
                                        showing a checklist with steps like
                                        “Pick up toys” and “Fold clothes.”
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Encourage Verbal Summaries with Visual
                                        Cues
                                    </td>
                                    <td class="border px-4 py-2">
                                        After completing a task or learning new
                                        information, ask your child to verbally
                                        summarise what they’ve learned while
                                        referring to visual cues like drawings
                                        or notes.
                                    </td>
                                    <td class="border px-4 py-2">
                                        Ask, “Can you explain what you just
                                        learned about planets?” while they point
                                        to a diagram of the solar system.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Provide Feedback Using Both Verbal and
                                        Written Comments
                                    </td>
                                    <td class="border px-4 py-2">
                                        Offer feedback on your child’s work by
                                        discussing it verbally and complementing
                                        it with written notes or visual
                                        suggestions (such as drawings or
                                        highlighted points).
                                    </td>
                                    <td class="border px-4 py-2">
                                        Say, “Great job on your essay,” while
                                        underlining key parts of their written
                                        work or suggesting visual improvements.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Incorporate Visual Aids into Discussions
                                    </td>
                                    <td class="border px-4 py-2">
                                        During family discussions or
                                        problem-solving activities, use charts,
                                        diagrams, or drawings to help explain
                                        your points. Encourage your child to do
                                        the same when explaining their thoughts.
                                    </td>
                                    <td class="border px-4 py-2">
                                        While discussing weekend plans, use a
                                        visual calendar or chart to show the
                                        schedule while explaining each event
                                        verbally.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Engage in Active Listening and Visual
                                        Demonstration
                                    </td>
                                    <td class="border px-4 py-2">
                                        When your child is explaining something,
                                        practice active listening by nodding and
                                        asking questions. Encourage them to use
                                        visual aids like drawings or gestures to
                                        clarify their points.
                                    </td>
                                    <td class="border px-4 py-2">
                                        When your child talks about their school
                                        project, say, “Tell me more,” while they
                                        point to a diagram they drew as part of
                                        their project.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Use Verbal and Visual Prompts for
                                        Organisation
                                    </td>
                                    <td class="border px-4 py-2">
                                        Help your child stay organised by
                                        providing verbal reminders along with
                                        visual prompts like written schedules or
                                        task lists.
                                    </td>
                                    <td class="border px-4 py-2">
                                        Say, “Remember to complete your
                                        homework,” while showing them a
                                        checklist with all their tasks for the
                                        day.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Incorporate Audiovisual Tools for
                                        Learning Conversations
                                    </td>
                                    <td class="border px-4 py-2">
                                        Use tools like videos, apps, or
                                        interactive whiteboards when discussing
                                        complex topics with your child.
                                        Encourage them to explain what they see
                                        while you discuss the concepts verbally.
                                    </td>
                                    <td class="border px-4 py-2">
                                        Watch an educational video together and
                                        ask, “What did you learn from this?”
                                        while pausing to look at diagrams or key
                                        points in the video.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="flex justify-center items-center">
                <img
                    class="w-90 h-auto object-contain"
                    :src="'/images/reports-svg-images/Kids/LearningStyles/22.svg'"
                    alt=""
                />
            </div>
            <div>
                <h2 class="text-2xl font-bold mb-4">
                    Encouraging Open Dialogue
                </h2>
                <div
                    class="max-w-full overflow-x-auto shadow-md rounded-lg mb-6"
                >
                    <div class="min-w-[600px] md:min-w-full">
                        <!-- Minimum width for mobile scroll -->
                        <table
                            class="w-full border-collapse border border-gray-300"
                        >
                            <thead>
                                <tr>
                                    <th class="border px-4 py-2">Strategy</th>
                                    <th class="border px-4 py-2">
                                        Description
                                    </th>
                                    <th class="border px-4 py-2">Example</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Ask Open-Ended Questions
                                    </td>
                                    <td class="border px-4 py-2">
                                        Encourage your child to express their
                                        thoughts and feelings by asking
                                        open-ended questions.
                                    </td>
                                    <td class="border px-4 py-2">
                                        Instead of asking, “Did you like the
                                        book?” ask, “What was your favourite
                                        part of the book and why?”
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Create a Dialogue Journal
                                    </td>
                                    <td class="border px-4 py-2">
                                        Start a dialogue journal where you and
                                        your child can write and respond to each
                                        other’s entries.
                                    </td>
                                    <td class="border px-4 py-2">
                                        Use a notebook to exchange written notes
                                        and responses about daily experiences,
                                        thoughts, and ideas.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Storytelling Sessions
                                    </td>
                                    <td class="border px-4 py-2">
                                        Encourage your child to tell stories and
                                        share experiences verbally.
                                    </td>
                                    <td class="border px-4 py-2">
                                        Have a designated storytelling time
                                        where your child can narrate stories
                                        from their imagination or describe their
                                        day.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Role-Playing Activities
                                    </td>
                                    <td class="border px-4 py-2">
                                        Use role-playing activities to explore
                                        different scenarios and practice verbal
                                        interactions.
                                    </td>
                                    <td class="border px-4 py-2">
                                        Act out various roles in a story or
                                        simulate real-life situations like
                                        ordering at a restaurant or resolving a
                                        conflict.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Verbal Summaries
                                    </td>
                                    <td class="border px-4 py-2">
                                        After completing an activity or lesson,
                                        ask your child to verbally summarise
                                        what they learned.
                                    </td>
                                    <td class="border px-4 py-2">
                                        Prompt them with, “Can you tell me what
                                        you learned about today?” or “Explain
                                        how you solved that problem.”
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Active Participation in Discussions
                                    </td>
                                    <td class="border px-4 py-2">
                                        Encourage your child to participate
                                        actively in family discussions and share
                                        their opinions.
                                    </td>
                                    <td class="border px-4 py-2">
                                        During family meetings or dinner
                                        conversations, ask for their input on
                                        decisions or topics of interest.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Use Technology for Communication
                                    </td>
                                    <td class="border px-4 py-2">
                                        Utilise technology like voice notes and
                                        audio messages to communicate and share
                                        thoughts.
                                    </td>
                                    <td class="border px-4 py-2">
                                        Send each other voice messages to
                                        discuss plans, share news, or provide
                                        updates.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <p>
                    By incorporating these communication tips, you can create a
                    supportive and engaging environment that enhances your
                    blended learner's understanding and expression.
                </p>
            </div>
        </div>
    </div>

    <!-- Report 5 Kinesthethic _ Auditory Blend-->
    <div v-if="style == 'Kinesthethic/Auditory'">
        <!-- Content for Report 5 -->
        <div class="p-6">
            <p class="mt-2">
                Communicating effectively with your child involves engaging both their kinaesthetic and auditory strengths. Here are some strategies to enhance communication with blended learners:
            </p>
            <h2 class="text-2xl font-semibold">
                How to Communicate Effectively with Blended Learners
            </h2>
            <div class="max-w-full overflow-x-auto shadow-md rounded-lg mb-6">
                <div class="min-w-[600px] md:min-w-full">
                    <!-- Minimum width for mobile scroll -->
                    <table
                        class="w-full border-collapse border border-gray-300"
                    >
                        <thead>
                            <tr>
                                <th class="border px-4 py-2">Strategy</th>
                                <th class="border px-4 py-2">Description</th>
                                <th class="border px-4 py-2">Example</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border px-4 py-2">
                                    Use Verbal Instructions with Physical
                                    Demonstrations
                                </td>
                                <td class="border px-4 py-2">
                                    Combine verbal instructions with physical
                                    demonstrations to help your child understand
                                    tasks more clearly.
                                </td>
                                <td class="border px-4 py-2">
                                    If teaching your child how to bake, explain
                                    the steps verbally and then physically show
                                    them how to mix ingredients. This reinforces
                                    the instructions through both hearing and
                                    doing.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Encourage Discussions with Hands-On
                                    Engagement
                                </td>
                                <td class="border px-4 py-2">
                                    Engage your child in discussions while they
                                    are completing a physical task to keep them
                                    focused and involved.
                                </td>
                                <td class="border px-4 py-2">
                                    While your child is assembling a puzzle or
                                    building a model, ask them questions or
                                    prompt a discussion about the lesson,
                                    allowing them to think aloud while staying
                                    physically engaged.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Provide Feedback with Verbal and Physical
                                    Cues
                                </td>
                                <td class="border px-4 py-2">
                                    Offer feedback through verbal praise and by
                                    physically showing them how to improve.
                                </td>
                                <td class="border px-4 py-2">
                                    If your child is building a project, praise
                                    their effort verbally and then physically
                                    adjust a part of the model to show how it
                                    can be improved. This helps them see and
                                    hear how to do better.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Allow Movement During Conversations
                                </td>
                                <td class="border px-4 py-2">
                                    Encourage your child to move around during
                                    discussions, as physical movement can help
                                    them process information more effectively.
                                </td>
                                <td class="border px-4 py-2">
                                    Let your child pace or play with a small
                                    object while you discuss a topic. This
                                    allows them to stay physically engaged while
                                    listening to the conversation.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Use Audio Prompts During Physical Tasks
                                </td>
                                <td class="border px-4 py-2">
                                    Give audio prompts or instructions while
                                    your child engages in hands-on activities to
                                    reinforce learning through both listening
                                    and doing.
                                </td>
                                <td class="border px-4 py-2">
                                    While your child is building a Lego
                                    structure, give them verbal instructions
                                    about the design or steps to follow, which
                                    helps them absorb the information while
                                    staying active.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Encourage Listening While Engaging in
                                    Hands-On Work
                                </td>
                                <td class="border px-4 py-2">
                                    Use audio resources, like audiobooks or
                                    verbal instructions, while your child works
                                    on a physical project.
                                </td>
                                <td class="border px-4 py-2">
                                    Have your child listen to an audiobook
                                    related to a subject they’re studying while
                                    they draw, build, or create a project. This
                                    allows them to multitask and absorb the
                                    information both auditorily and physically.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Review Tasks Verbally and Physically
                                </td>
                                <td class="border px-4 py-2">
                                    After completing a task, review key points
                                    verbally and through physical demonstrations
                                    to reinforce understanding.
                                </td>
                                <td class="border px-4 py-2">
                                    After your child completes a science
                                    experiment, verbally review the steps and
                                    have them physically walk through the
                                    process again. This helps solidify the
                                    learning by engaging both auditory and
                                    kinaesthetic senses.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="flex justify-center items-center">
                <img
                    class="w-90 h-auto object-contain"
                    :src="'/images/reports-svg-images/Kids/LearningStyles/22.svg'"
                    alt=""
                />
            </div>
            <h2 class="text-2xl font-semibold">Encouraging Open Dialogue</h2>
            <div class="max-w-full overflow-x-auto shadow-md rounded-lg mb-6">
                <div class="min-w-[600px] md:min-w-full">
                    <!-- Minimum width for mobile scroll -->
                    <table
                        class="w-full border-collapse border border-gray-300"
                    >
                        <thead>
                            <tr>
                                <th class="border px-4 py-2">Strategy</th>
                                <th class="border px-4 py-2">Description</th>
                                <th class="border px-4 py-2">Example</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border px-4 py-2">
                                    Ask Open-Ended Questions with Physical
                                    Engagement
                                </td>
                                <td class="border px-4 py-2">
                                    Use open-ended questions that allow your
                                    child to express themselves verbally while
                                    engaging in a hands-on task.
                                </td>
                                <td class="border px-4 py-2">
                                    Instead of asking “Did you enjoy the book?”,
                                    ask “What part of the book would you act
                                    out, and why?” while encouraging them to
                                    physically move or act out the scene as they
                                    describe it.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Create a Dialogue Space with Physical
                                    Interaction
                                </td>
                                <td class="border px-4 py-2">
                                    Set up a space where your child can interact
                                    physically while engaging in verbal
                                    dialogue.
                                </td>
                                <td class="border px-4 py-2">
                                    Create a small activity space where they can
                                    build or create something while having a
                                    conversation about their day or a lesson.
                                    This allows them to express themselves both
                                    verbally and physically.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Use Physical Objects to Facilitate
                                    Conversations
                                </td>
                                <td class="border px-4 py-2">
                                    Introduce physical objects to the
                                    conversation to encourage hands-on
                                    interaction and discussion.
                                </td>
                                <td class="border px-4 py-2">
                                    During a discussion about a science concept,
                                    use models or objects that your child can
                                    touch or manipulate as they explain their
                                    understanding. This keeps them engaged and
                                    focused on the conversation.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Encourage Verbal Reflections During Movement
                                </td>
                                <td class="border px-4 py-2">
                                    Let your child reflect verbally while they
                                    are physically active to help them express
                                    ideas more easily.
                                </td>
                                <td class="border px-4 py-2">
                                    During a walk or physical activity, ask your
                                    child open-ended questions about a topic
                                    they’ve recently learned, encouraging them
                                    to share their thoughts while moving.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Pair Written Responses with Physical Action
                                </td>
                                <td class="border px-4 py-2">
                                    Encourage your child to write or verbally
                                    share ideas and then perform a related
                                    physical task to reinforce their response.
                                </td>
                                <td class="border px-4 py-2">
                                    After discussing a lesson, ask your child to
                                    write down or verbally express what they
                                    learned, and then perform a related
                                    experiment or task that involves movement.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Use Audio Prompts to Encourage Dialogue
                                </td>
                                <td class="border px-4 py-2">
                                    Play audio prompts or questions to inspire
                                    your child to start a conversation, allowing
                                    them to respond while completing physical
                                    activities.
                                </td>
                                <td class="border px-4 py-2">
                                    Play a podcast or audio clip and ask your
                                    child to discuss their thoughts on it while
                                    they are engaged in a hands-on task like
                                    crafting or building.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Reinforce Dialogue with Verbal and Physical
                                    Cues
                                </td>
                                <td class="border px-4 py-2">
                                    Encourage dialogue by reinforcing verbal
                                    communication with physical gestures or
                                    actions.
                                </td>
                                <td class="border px-4 py-2">
                                    When discussing a topic, use hand movements,
                                    gestures, or physical examples to support
                                    your words, allowing your child to engage
                                    both verbally and kinaesthetically.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <p>
                By incorporating these communication tips, you can create a
                supportive and engaging environment that enhances your blended
                learner's understanding and expression.
            </p>
        </div>
    </div>

    <!-- Report 6 Kinesthethic _ Reading & Writing -->
    <div v-if="style == 'Kinesthethic/Reading/Writing'">
        <!-- Content for Report 6 -->
        <div class="p-6 mx-auto">


            <p class="mb-4">
                Communicating effectively with your child involves engaging both
                their kinaesthetic and reading/writing strengths. Here are some
                strategies to enhance communication with blended learners:
            </p>

            <h2 class="text-2xl font-bold mb-4">
                How to Communicate Effectively with Blended Learners:
            </h2>

            <div class="max-w-full overflow-x-auto shadow-md rounded-lg mb-6">
                <div class="min-w-[600px] md:min-w-full">
                    <!-- Minimum width for mobile scroll -->
                    <table
                        class="w-full border-collapse border border-gray-300"
                    >
                        <thead>
                            <tr>
                                <th class="border px-4 py-2">Strategy</th>
                                <th class="border px-4 py-2">Description</th>
                                <th class="border px-4 py-2">Example</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border px-4 py-2">
                                    Use Written Instructions with Hands-On
                                    Demonstrations
                                </td>
                                <td class="border px-4 py-2">
                                    Provide written instructions alongside
                                    physical demonstrations to help your child
                                    understand tasks.
                                </td>
                                <td class="border px-4 py-2">
                                    When explaining how to complete a project,
                                    give your child a written outline and
                                    physically show them the steps to follow.
                                </td>
                            </tr>

                            <tr>
                                <td class="border px-4 py-2">
                                    Encourage Written Reflections After Physical
                                    Activities
                                </td>
                                <td class="border px-4 py-2">
                                    After a hands-on task, ask your child to
                                    write about their experience.
                                </td>
                                <td class="border px-4 py-2">
                                    After completing a science experiment, have
                                    your child write a reflection or summary of
                                    what they learned and how they performed the
                                    task.
                                </td>
                            </tr>

                            <tr>
                                <td class="border px-4 py-2">
                                    Incorporate Movement During Discussions
                                </td>
                                <td class="border px-4 py-2">
                                    Allow your child to move or engage
                                    physically while discussing topics to
                                    enhance focus.
                                </td>
                                <td class="border px-4 py-2">
                                    While discussing a lesson, let your child
                                    walk around, use a standing desk, or doodle
                                    as they process information verbally.
                                </td>
                            </tr>

                            <tr>
                                <td class="border px-4 py-2">
                                    Combine Verbal Feedback with Written Notes
                                </td>
                                <td class="border px-4 py-2">
                                    Offer verbal feedback on tasks and follow up
                                    with written comments.
                                </td>
                                <td class="border px-4 py-2">
                                    After your child completes a physical
                                    project, discuss what went well and areas
                                    for improvement, then provide written
                                    feedback for them to review later.
                                </td>
                            </tr>

                            <tr>
                                <td class="border px-4 py-2">
                                    Use Writing as a Follow-Up to Physical Tasks
                                </td>
                                <td class="border px-4 py-2">
                                    After completing a physical task, have your
                                    child follow up by writing about it.
                                </td>
                                <td class="border px-4 py-2">
                                    Once they finish a hands-on activity like
                                    building a model, ask them to write a
                                    summary or explanation of the steps
                                    involved.
                                </td>
                            </tr>

                            <tr>
                                <td class="border px-4 py-2">
                                    Encourage Note-Taking During Hands-On
                                    Activities
                                </td>
                                <td class="border px-4 py-2">
                                    Have your child take notes or write down
                                    steps while completing physical tasks to
                                    enhance understanding.
                                </td>
                                <td class="border px-4 py-2">
                                    While building something or conducting an
                                    experiment, ask them to take brief notes on
                                    what they’re doing and why.
                                </td>
                            </tr>

                            <tr>
                                <td class="border px-4 py-2">
                                    Use Written and Physical Cues to Reinforce
                                    Understanding
                                </td>
                                <td class="border px-4 py-2">
                                    Combine written cues with physical actions
                                    to reinforce learning and communication.
                                </td>
                                <td class="border px-4 py-2">
                                    Provide written instructions for a task, and
                                    ask your child to follow them while
                                    performing a physical task like assembling a
                                    puzzle or conducting a simple experiment.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="flex justify-center items-center">
                <img
                    class="w-90 h-auto object-contain"
                    :src="'/images/reports-svg-images/Kids/LearningStyles/22.svg'"
                    alt=""
                />
            </div>
            <h2 class="text-2xl font-semibold mb-4">
                Encouraging Open Dialogue:
            </h2>

            <div class="max-w-full overflow-x-auto shadow-md rounded-lg mb-6">
                <div class="min-w-[600px] md:min-w-full">
                    <!-- Minimum width for mobile scroll -->
                    <table
                        class="w-full border-collapse border border-gray-300"
                    >
                        <thead>
                            <tr>
                                <th class="border px-4 py-2">Activity</th>
                                <th class="border px-4 py-2">Strategy</th>
                                <th class="border px-4 py-2">Example</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border px-4 py-2">
                                    Use Physical Prompts to Spark Conversation
                                </td>
                                <td class="border px-4 py-2">
                                    Introduce physical objects or activities to
                                    inspire verbal and written discussions.
                                </td>
                                <td class="border px-4 py-2">
                                    After your child completes a physical
                                    project, ask them to explain what they did
                                    and why, then follow up with a written
                                    summary or reflection.
                                </td>
                            </tr>

                            <tr>
                                <td class="border px-4 py-2">
                                    Encourage Verbal Discussions After Writing
                                    Tasks
                                </td>
                                <td class="border px-4 py-2">
                                    After your child completes a writing task,
                                    engage them in a verbal discussion to
                                    elaborate on their ideas.
                                </td>
                                <td class="border px-4 py-2">
                                    Once your child finishes writing a report,
                                    ask them to verbally explain the key points
                                    or expand on their ideas.
                                </td>
                            </tr>

                            <tr>
                                <td class="border px-4 py-2">
                                    Create a Written and Physical Dialogue
                                    Journal
                                </td>
                                <td class="border px-4 py-2">
                                    Set up a journal where you and your child
                                    can exchange written ideas and physically
                                    interact with tasks related to the topic.
                                </td>
                                <td class="border px-4 py-2">
                                    After writing a journal entry, encourage
                                    your child to engage in a related hands-on
                                    activity, such as building or creating
                                    something tied to their reflection.
                                </td>
                            </tr>

                            <tr>
                                <td class="border px-4 py-2">
                                    Use Movement to Facilitate Discussions
                                </td>
                                <td class="border px-4 py-2">
                                    Allow your child to move around or engage in
                                    physical activities during discussions.
                                </td>
                                <td class="border px-4 py-2">
                                    During a conversation about a lesson, let
                                    your child walk or move around while sharing
                                    their thoughts, helping them process
                                    information physically and verbally.
                                </td>
                            </tr>

                            <tr>
                                <td class="border px-4 py-2">
                                    Combine Written Prompts with Hands-On
                                    Responses
                                </td>
                                <td class="border px-4 py-2">
                                    Provide written prompts and ask your child
                                    to respond verbally or through a physical
                                    activity.
                                </td>
                                <td class="border px-4 py-2">
                                    Write a question or prompt and ask your
                                    child to respond by performing a related
                                    task, such as building a model or drawing a
                                    diagram.
                                </td>
                            </tr>

                            <tr>
                                <td class="border px-4 py-2">
                                    Use Written Cues to Enhance Verbal and
                                    Physical Dialogue
                                </td>
                                <td class="border px-4 py-2">
                                    Incorporate written notes or cues into
                                    verbal discussions to reinforce
                                    understanding.
                                </td>
                                <td class="border px-4 py-2">
                                    Write down key discussion points and use
                                    them as a guide for your child to follow
                                    while completing a physical task, allowing
                                    them to engage with both formats.
                                </td>
                            </tr>

                            <tr>
                                <td class="border px-4 py-2">
                                    Encourage Open Discussion with Written
                                    Follow-Ups
                                </td>
                                <td class="border px-4 py-2">
                                    After verbal discussions, ask your child to
                                    write about their thoughts or conclusions.
                                </td>
                                <td class="border px-4 py-2">
                                    Following a discussion about a topic, have
                                    your child write a reflection or summary to
                                    help reinforce the conversation.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <p class="mt-6">
                By incorporating these communication tips, you can create a
                supportive and engaging environment that enhances your blended
                learner's understanding and expression.
            </p>
        </div>
    </div>

    <!-- Report 7 Kinesthethic _ Visual Blend-->
    <div v-if="style == 'Kinesthethic/Visual'">
        <!-- Content for Report 7 -->
        <div class="p-6">
            <div>
                <p>
                    Communicating effectively with your child involves engaging
                    both their kinaesthetic and visual strengths. Here are some
                    strategies to enhance communication with blended learners:
                </p>

                <div
                    class="max-w-full overflow-x-auto shadow-md rounded-lg mb-6"
                >
                    <div class="min-w-[600px] md:min-w-full">
                        <!-- Minimum width for mobile scroll -->
                        <table
                            class="w-full border-collapse border border-gray-300"
                        >
                            <thead>
                                <tr>
                                    <th class="border px-4 py-2">Strategy</th>
                                    <th class="border px-4 py-2">
                                        Description
                                    </th>
                                    <th class="border px-4 py-2">Example</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Strategy 1 -->
                                <tr>
                                    <td class="border px-4 py-2">
                                        Use Visual Aids with Physical
                                        Demonstrations
                                    </td>
                                    <td class="border px-4 py-2">
                                        When giving instructions, combine visual
                                        aids such as diagrams, charts, or
                                        checklists with physical demonstrations.
                                    </td>
                                    <td class="border px-4 py-2">
                                        If you are explaining how to organise a
                                        room, show your child a checklist of
                                        tasks and physically demonstrate how to
                                        fold clothes or arrange books. This
                                        helps your child see and physically
                                        engage with the process.
                                    </td>
                                </tr>

                                <!-- Strategy 2 -->
                                <tr>
                                    <td class="border px-4 py-2">
                                        Encourage Visual Summaries with Active
                                        Discussion
                                    </td>
                                    <td class="border px-4 py-2">
                                        After explaining a concept, ask your
                                        child to summarise it using visual cues
                                        like drawings, diagrams, or mind maps,
                                        followed by an active discussion.
                                    </td>
                                    <td class="border px-4 py-2">
                                        Ask your child to draw a diagram of the
                                        solar system after learning about
                                        planets, then explain the key points
                                        aloud. This reinforces their
                                        understanding by combining visual
                                        organisation and verbal expression.
                                    </td>
                                </tr>

                                <!-- Strategy 3 -->
                                <tr>
                                    <td class="border px-4 py-2">
                                        Provide Feedback Using Both Visual and
                                        Physical Examples
                                    </td>
                                    <td class="border px-4 py-2">
                                        When giving feedback, use visual aids
                                        and physical engagement to show your
                                        child how they can improve.
                                    </td>
                                    <td class="border px-4 py-2">
                                        If your child is working on a craft or
                                        drawing, point out specific areas for
                                        improvement by physically interacting
                                        with their project (e.g., adjusting
                                        shapes or positioning) and showing a
                                        visual model for comparison.
                                    </td>
                                </tr>

                                <!-- Strategy 4 -->
                                <tr>
                                    <td class="border px-4 py-2">
                                        Engage in Active Listening and Visual
                                        Problem-Solving
                                    </td>
                                    <td class="border px-4 py-2">
                                        When your child explains something,
                                        practice active listening and use visual
                                        prompts to clarify their thoughts.
                                    </td>
                                    <td class="border px-4 py-2">
                                        If your child is explaining a science
                                        experiment, encourage them to draw the
                                        experiment setup while you ask
                                        clarifying questions. This helps them
                                        express their thoughts both visually and
                                        verbally.
                                    </td>
                                </tr>

                                <!-- Strategy 5 -->
                                <tr>
                                    <td class="border px-4 py-2">
                                        Use Visual and Physical Prompts for
                                        Organisation
                                    </td>
                                    <td class="border px-4 py-2">
                                        Help your child stay organised by
                                        providing visual prompts like charts or
                                        task lists combined with physical
                                        activities.
                                    </td>
                                    <td class="border px-4 py-2">
                                        Use a chore chart with pictures and
                                        allow your child to physically move
                                        pieces or place stickers as tasks are
                                        completed. This reinforces their
                                        organisation skills through both visual
                                        and physical interaction.
                                    </td>
                                </tr>

                                <!-- Strategy 6 -->
                                <tr>
                                    <td class="border px-4 py-2">
                                        Incorporate Movement into Discussions
                                    </td>
                                    <td class="border px-4 py-2">
                                        Allow your child to move around while
                                        discussing ideas, keeping them
                                        physically engaged during conversations.
                                    </td>
                                    <td class="border px-4 py-2">
                                        While discussing homework, let your
                                        child pace or use physical objects like
                                        flashcards to stay focused during the
                                        conversation. Movement helps maintain
                                        their attention and encourages active
                                        learning.
                                    </td>
                                </tr>

                                <!-- Strategy 7 -->
                                <tr>
                                    <td class="border px-4 py-2">
                                        Encourage Hands-On Expression with
                                        Visual Storytelling
                                    </td>
                                    <td class="border px-4 py-2">
                                        Support your child in combining visual
                                        aids with hands-on expression when they
                                        explain ideas.
                                    </td>
                                    <td class="border px-4 py-2">
                                        Ask your child to create a storyboard of
                                        their favourite story and use models or
                                        objects to act out the scenes as they
                                        explain it. This integrates visual and
                                        kinaesthetic learning, allowing them to
                                        engage more fully with the material.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="flex justify-center items-center">
                <img
                    class="w-90 h-auto object-contain"
                    :src="'/images/reports-svg-images/Kids/LearningStyles/22.svg'"
                    alt=""
                />
            </div>
            <div>
                <h2 class="text-2xl font-bold">Encouraging Open Dialogue:</h2>

                <div
                    class="max-w-full overflow-x-auto shadow-md rounded-lg mb-6"
                >
                    <div class="min-w-[600px] md:min-w-full">
                        <!-- Minimum width for mobile scroll -->
                        <table
                            class="w-full border-collapse border border-gray-300"
                        >
                            <thead>
                                <tr>
                                    <th class="border px-4 py-2">Strategy</th>
                                    <th class="border px-4 py-2">
                                        Description
                                    </th>
                                    <th class="border px-4 py-2">Example</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Strategy 1 -->
                                <tr>
                                    <td class="border px-4 py-2">
                                        Ask Open-Ended Questions with Visual
                                        Prompts
                                    </td>
                                    <td class="border px-4 py-2">
                                        Use open-ended questions to encourage
                                        your child to share their thoughts, and
                                        provide visual prompts to help guide
                                        their response.
                                    </td>
                                    <td class="border px-4 py-2">
                                        Instead of asking, “Did you enjoy the
                                        book?” ask, “What was your favourite
                                        part of the book?” while having them
                                        draw a scene from the story. This allows
                                        your child to express their thoughts
                                        both verbally and visually.
                                    </td>
                                </tr>

                                <!-- Strategy 2 -->
                                <tr>
                                    <td class="border px-4 py-2">
                                        Create a Dialogue Journal with Physical
                                        Interaction
                                    </td>
                                    <td class="border px-4 py-2">
                                        Start a visual dialogue journal where
                                        you and your child can write or draw
                                        entries to each other, and physically
                                        exchange the notebook.
                                    </td>
                                    <td class="border px-4 py-2">
                                        Use a notebook where you both draw or
                                        write notes about your day, and then
                                        physically hand it to one another. This
                                        keeps the conversation going in a visual
                                        and hands-on manner.
                                    </td>
                                </tr>

                                <!-- Strategy 3 -->
                                <tr>
                                    <td class="border px-4 py-2">
                                        Use Visual Storyboards and Role-Playing
                                    </td>
                                    <td class="border px-4 py-2">
                                        Encourage your child to use storyboards
                                        and physical role-playing to communicate
                                        their ideas.
                                    </td>
                                    <td class="border px-4 py-2">
                                        Ask your child to storyboard a recent
                                        experience and then act out the scenes
                                        using props or gestures. This helps them
                                        organise their thoughts visually and
                                        express themselves through physical
                                        action.
                                    </td>
                                </tr>

                                <!-- Strategy 4 -->
                                <tr>
                                    <td class="border px-4 py-2">
                                        Provide Physical and Visual Feedback
                                    </td>
                                    <td class="border px-4 py-2">
                                        When discussing ideas or giving
                                        feedback, use visual aids and hands-on
                                        activities to facilitate the
                                        conversation.
                                    </td>
                                    <td class="border px-4 py-2">
                                        If your child is explaining a project
                                        idea, provide physical feedback by
                                        helping them adjust their models or
                                        drawings and use visual examples to
                                        reinforce your points.
                                    </td>
                                </tr>

                                <!-- Strategy 5 -->
                                <tr>
                                    <td class="border px-4 py-2">
                                        Engage in Collaborative Projects
                                    </td>
                                    <td class="border px-4 py-2">
                                        Work together on visual and hands-on
                                        projects that promote communication and
                                        sharing of ideas.
                                    </td>
                                    <td class="border px-4 py-2">
                                        Create a family vision board together
                                        where each person adds their ideas
                                        through images and objects. This
                                        collaborative project encourages
                                        dialogue through visual and physical
                                        contributions.
                                    </td>
                                </tr>

                                <!-- Strategy 6 -->
                                <tr>
                                    <td class="border px-4 py-2">
                                        Use Visual Prompts for Discussions
                                    </td>
                                    <td class="border px-4 py-2">
                                        During discussions, provide visual
                                        prompts to help your child express their
                                        thoughts and feelings.
                                    </td>
                                    <td class="border px-4 py-2">
                                        When discussing how they feel about
                                        school, ask your child to create a
                                        visual chart showing their emotions and
                                        then discuss each point together. This
                                        helps them clarify their feelings
                                        visually and verbally.
                                    </td>
                                </tr>

                                <!-- Strategy 7 -->
                                <tr>
                                    <td class="border px-4 py-2">
                                        Encourage Active Participation in
                                        Discussions with Movement
                                    </td>
                                    <td class="border px-4 py-2">
                                        Allow your child to move around or
                                        engage in physical activities while
                                        participating in discussions.
                                    </td>
                                    <td class="border px-4 py-2">
                                        During a family discussion, let your
                                        child hold an object that represents
                                        their turn to speak or allow them to
                                        move around while contributing to the
                                        conversation. This helps them stay
                                        engaged and express their thoughts more
                                        freely.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <p>
                By incorporating these communication tips, you can create a
                supportive and engaging environment that enhances your blended
                learner's understanding and expression.
            </p>
        </div>
    </div>

    <!-- Report 8 Kinesthethic-->
    <div v-if="style == 'Kinesthethic'">
        <!-- Content for Report 8 -->
        <div class="p-6">
            <div>

                <p>
                    Effective communication with your kinaesthetic learner is
                    essential to ensure they understand instructions, stay
                    engaged, and feel supported. Here are some strategies to
                    enhance communication with kinaesthetic learners:
                </p>
            </div>

            <h2 class="text-2xl font-bold mb-4">
                How to Communicate Effectively with Kinaesthetic Learners:
            </h2>

            <div class="max-w-full overflow-x-auto shadow-md rounded-lg mb-6">
                <div class="min-w-[600px] md:min-w-full">
                    <!-- Minimum width for mobile scroll -->
                    <table
                        class="w-full border-collapse border border-gray-300"
                    >
                        <thead>
                            <tr>
                                <th class="border px-4 py-2">Strategy</th>
                                <th class="border px-4 py-2">Description</th>
                                <th class="border px-4 py-2">Example</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Strategy 1 -->
                            <tr>
                                <td class="border px-4 py-2">
                                    Use Physical Demonstrations
                                </td>
                                <td class="border px-4 py-2">
                                    Demonstrate tasks and concepts physically
                                    rather than just explaining them verbally.
                                </td>
                                <td class="border px-4 py-2">
                                    Show how to solve a math problem using
                                    physical objects, like blocks or counters.
                                </td>
                            </tr>

                            <!-- Strategy 2 -->
                            <tr>
                                <td class="border px-4 py-2">
                                    Encourage Hands-On Interaction
                                </td>
                                <td class="border px-4 py-2">
                                    Allow your child to manipulate objects and
                                    materials while explaining concepts.
                                </td>
                                <td class="border px-4 py-2">
                                    When teaching about plants, provide real
                                    plants or flowers to examine and touch.
                                </td>
                            </tr>

                            <!-- Strategy 3 -->
                            <tr>
                                <td class="border px-4 py-2">
                                    Incorporate Movement into Instructions
                                </td>
                                <td class="border px-4 py-2">
                                    Integrate movement into your instructions to
                                    help your child stay focused and engaged.
                                </td>
                                <td class="border px-4 py-2">
                                    Use gestures, body movements, or dance to
                                    illustrate points and keep their attention.
                                </td>
                            </tr>

                            <!-- Strategy 4 -->
                            <tr>
                                <td class="border px-4 py-2">
                                    Use Tactile Learning Tools
                                </td>
                                <td class="border px-4 py-2">
                                    Provide tactile tools such as clay, sand, or
                                    textured materials during lessons.
                                </td>
                                <td class="border px-4 py-2">
                                    Use modelling clay to explain geometric
                                    shapes or create maps with textured
                                    materials.
                                </td>
                            </tr>

                            <!-- Strategy 5 -->
                            <tr>
                                <td class="border px-4 py-2">
                                    Interactive Storytelling
                                </td>
                                <td class="border px-4 py-2">
                                    Encourage your child to act out stories or
                                    scenarios while you read or tell them.
                                </td>
                                <td class="border px-4 py-2">
                                    Use role-playing to bring historical events
                                    or book characters to life.
                                </td>
                            </tr>

                            <!-- Strategy 6 -->
                            <tr>
                                <td class="border px-4 py-2">
                                    Break Tasks into Steps
                                </td>
                                <td class="border px-4 py-2">
                                    Break down instructions into smaller,
                                    manageable steps with physical actions.
                                </td>
                                <td class="border px-4 py-2">
                                    Provide step-by-step instructions for a
                                    science experiment, with each step involving
                                    a physical task.
                                </td>
                            </tr>

                            <!-- Strategy 7 -->
                            <tr>
                                <td class="border px-4 py-2">
                                    Engage Multiple Senses
                                </td>
                                <td class="border px-4 py-2">
                                    Use activities that engage multiple senses
                                    to reinforce learning.
                                </td>
                                <td class="border px-4 py-2">
                                    Combine listening to a story with drawing
                                    scenes from it or acting it out.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="flex justify-center items-center">
                <img
                    class="w-90 h-auto object-contain"
                    :src="'/images/reports-svg-images/Kids/LearningStyles/22.svg'"
                    alt=""
                />
            </div>

            <h2 class="text-2xl font-bold">Encouraging Open Dialogue</h2>
            <div class="max-w-full overflow-x-auto shadow-md rounded-lg mb-6">
                <div class="min-w-[600px] md:min-w-full">
                    <!-- Minimum width for mobile scroll -->
                    <table
                        class="w-full border-collapse border border-gray-300"
                    >
                        <thead>
                            <tr>
                                <th class="border px-4 py-2">Strategy</th>
                                <th class="border px-4 py-2">Description</th>
                                <th class="border px-4 py-2">Example</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Strategy 1 -->
                            <tr>
                                <td class="border px-4 py-2">
                                    Ask Open-Ended Questions
                                </td>
                                <td class="border px-4 py-2">
                                    Encourage your child to express their
                                    thoughts and feelings by asking open-ended
                                    questions.
                                </td>
                                <td class="border px-4 py-2">
                                    Instead of asking, “Did you like the
                                    project?” ask, “What was your favourite part
                                    of the project and why?”
                                </td>
                            </tr>

                            <!-- Strategy 2 -->
                            <tr>
                                <td class="border px-4 py-2">
                                    Active Listening
                                </td>
                                <td class="border px-4 py-2">
                                    Show that you are actively listening by
                                    making eye contact, nodding, and responding
                                    thoughtfully.
                                </td>
                                <td class="border px-4 py-2">
                                    When your child is explaining something,
                                    maintain eye contact and provide verbal
                                    affirmations like, “I see,” or “That’s
                                    interesting.”
                                </td>
                            </tr>

                            <!-- Strategy 3 -->
                            <tr>
                                <td class="border px-4 py-2">
                                    Use Visual and Tactile Prompts
                                </td>
                                <td class="border px-4 py-2">
                                    Use visual and tactile prompts to initiate
                                    conversations and discussions.
                                </td>
                                <td class="border px-4 py-2">
                                    Show your child a picture or an object and
                                    ask them to tell a story about it or explain
                                    what it means to them.
                                </td>
                            </tr>

                            <!-- Strategy 4 -->
                            <tr>
                                <td class="border px-4 py-2">
                                    Encourage Storytelling
                                </td>
                                <td class="border px-4 py-2">
                                    Encourage your child to tell stories using
                                    both words and physical actions.
                                </td>
                                <td class="border px-4 py-2">
                                    Have a designated storytelling time where
                                    your child can narrate stories and act them
                                    out.
                                </td>
                            </tr>

                            <!-- Strategy 5 -->
                            <tr>
                                <td class="border px-4 py-2">
                                    Create a Dialogue Journal
                                </td>
                                <td class="border px-4 py-2">
                                    Start a dialogue journal where you and your
                                    child can write and respond to each other’s
                                    entries.
                                </td>
                                <td class="border px-4 py-2">
                                    Use a notebook to exchange written notes and
                                    responses about daily experiences, thoughts,
                                    and ideas.
                                </td>
                            </tr>

                            <!-- Strategy 6 -->
                            <tr>
                                <td class="border px-4 py-2">
                                    Use Physical Emotion Charts
                                </td>
                                <td class="border px-4 py-2">
                                    Use physical emotion charts to help your
                                    child express their feelings.
                                </td>
                                <td class="border px-4 py-2">
                                    Create a chart with different facial
                                    expressions and ask your child to point to
                                    how they are feeling.
                                </td>
                            </tr>

                            <!-- Strategy 7 -->
                            <tr>
                                <td class="border px-4 py-2">
                                    Encourage Feedback
                                </td>
                                <td class="border px-4 py-2">
                                    Encourage your child to give feedback on
                                    their learning experiences and express any
                                    concerns or preferences.
                                </td>
                                <td class="border px-4 py-2">
                                    After completing a project, ask your child
                                    what they enjoyed, what they found
                                    challenging, and how they think they could
                                    improve.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <p>
                By incorporating these communication tips, you can create a
                supportive and engaging environment that enhances your
                kinaesthetic learner's understanding and expression.
            </p>
        </div>
    </div>

    <!-- Report 9 Reading & Writing _ Auditory Blend -->
    <div v-if="style == 'Reading/Writing/Auditory'">
        <!-- Content for Report 9 -->
        <div class="p-6">
            <p class="mb-6">
                Communicating effectively with your child involves engaging both
                their reading/writing and auditory strengths. Here are some
                strategies to enhance communication with blended learners:
            </p>

            <h2 class="text-2xl font-bold mb-4">
                How to Communicate Effectively with Blended Learners:
            </h2>

            <div class="p-6">
                <div
                    class="max-w-full overflow-x-auto shadow-md rounded-lg mb-6"
                >
                    <div class="min-w-[600px] md:min-w-full">
                        <!-- Minimum width for mobile scroll -->
                        <table
                            class="w-full border-collapse border border-gray-300"
                        >
                            <thead>
                                <tr>
                                    <th class="border px-4 py-2">Strategy</th>
                                    <th class="border px-4 py-2">
                                        Description
                                    </th>
                                    <th class="border px-4 py-2">Example</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Strategy 1 -->
                                <tr>
                                    <td class="border px-4 py-2">
                                        Use Verbal Instructions and Written
                                        Notes
                                    </td>
                                    <td class="border px-4 py-2">
                                        Combine verbal instructions with written
                                        notes to reinforce understanding.
                                    </td>
                                    <td class="border px-4 py-2">
                                        After verbally explaining a homework
                                        assignment, provide a written outline or
                                        checklist to help your child remember
                                        the steps and refer back to them as
                                        needed.
                                    </td>
                                </tr>

                                <!-- Strategy 2 -->
                                <tr>
                                    <td class="border px-4 py-2">
                                        Encourage Discussions Followed by
                                        Written Reflections
                                    </td>
                                    <td class="border px-4 py-2">
                                        Engage your child in verbal discussions
                                        and have them write reflections
                                        afterwards.
                                    </td>
                                    <td class="border px-4 py-2">
                                        After discussing a book or lesson, ask
                                        your child to write a summary or
                                        reflection on the conversation. This
                                        reinforces their understanding through
                                        both listening and writing.
                                    </td>
                                </tr>

                                <!-- Strategy 3 -->
                                <tr>
                                    <td class="border px-4 py-2">
                                        Provide Feedback in Both Verbal and
                                        Written Forms
                                    </td>
                                    <td class="border px-4 py-2">
                                        Offer feedback in verbal and written
                                        formats to ensure your child understands
                                        and retains the information.
                                    </td>
                                    <td class="border px-4 py-2">
                                        After reviewing a project, give verbal
                                        praise for what they did well and
                                        provide written notes on areas for
                                        improvement that they can reference
                                        later.
                                    </td>
                                </tr>

                                <!-- Strategy 4 -->
                                <tr>
                                    <td class="border px-4 py-2">
                                        Allow Verbal Outlines Before Written
                                        Tasks
                                    </td>
                                    <td class="border px-4 py-2">
                                        Encourage your child to verbally outline
                                        their thoughts before writing
                                        assignments.
                                    </td>
                                    <td class="border px-4 py-2">
                                        Before starting a writing task, have
                                        your child talk through their ideas out
                                        loud. This helps them organise their
                                        thoughts before putting them into a
                                        written form.
                                    </td>
                                </tr>

                                <!-- Strategy 5 -->
                                <tr>
                                    <td class="border px-4 py-2">
                                        Use Verbal Prompts for Written Responses
                                    </td>
                                    <td class="border px-4 py-2">
                                        Use verbal prompts to inspire written
                                        responses.
                                    </td>
                                    <td class="border px-4 py-2">
                                        Ask open-ended questions like, “What did
                                        you learn from today’s lesson?” and then
                                        have your child write a paragraph or
                                        short response. This helps them process
                                        verbal input and organise their written
                                        thoughts.
                                    </td>
                                </tr>

                                <!-- Strategy 6 -->
                                <tr>
                                    <td class="border px-4 py-2">
                                        Create a Dialogue Journal for Writing
                                        and Discussion
                                    </td>
                                    <td class="border px-4 py-2">
                                        Set up a written dialogue journal where
                                        you and your child exchange ideas,
                                        followed by verbal discussions.
                                    </td>
                                    <td class="border px-4 py-2">
                                        Write notes or questions in a shared
                                        journal and then discuss the responses
                                        verbally. This reinforces their learning
                                        through both written and spoken
                                        expression.
                                    </td>
                                </tr>

                                <!-- Strategy 7 -->
                                <tr>
                                    <td class="border px-4 py-2">
                                        Incorporate Written and Verbal Goal
                                        Setting
                                    </td>
                                    <td class="border px-4 py-2">
                                        Combine verbal goal setting with written
                                        plans to track progress.
                                    </td>
                                    <td class="border px-4 py-2">
                                        After a conversation about academic or
                                        personal goals, help your child write
                                        down actionable steps to achieve them.
                                        This gives them a tangible plan they can
                                        refer to.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="flex justify-center items-center">
                <img
                    class="w-90 h-auto object-contain"
                    :src="'/images/reports-svg-images/Kids/LearningStyles/22.svg'"
                    alt=""
                />
            </div>

            <h2 class="text-2xl font-bold mb-4">Encouraging Open Dialogue:</h2>

            <div class="p-6">
                <div
                    class="max-w-full overflow-x-auto shadow-md rounded-lg mb-6"
                >
                    <div class="min-w-[600px] md:min-w-full">
                        <!-- Minimum width for mobile scroll -->
                        <table
                            class="w-full border-collapse border border-gray-300"
                        >
                            <thead>
                                <tr>
                                    <th class="border px-4 py-2">Strategy</th>
                                    <th class="border px-4 py-2">
                                        Description
                                    </th>
                                    <th class="border px-4 py-2">Example</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Strategy 1 -->
                                <tr>
                                    <td class="border px-4 py-2">
                                        Ask Open-Ended Questions Followed by
                                        Written Reflections
                                    </td>
                                    <td class="border px-4 py-2">
                                        Encourage your child to respond to
                                        open-ended questions verbally and follow
                                        up with written reflections to reinforce
                                        understanding.
                                    </td>
                                    <td class="border px-4 py-2">
                                        Ask questions like, “What do you think
                                        about this topic?” and after the
                                        discussion, have your child write a
                                        summary of their thoughts.
                                    </td>
                                </tr>

                                <!-- Strategy 2 -->
                                <tr>
                                    <td class="border px-4 py-2">
                                        Create a Written and Verbal Dialogue
                                        Space
                                    </td>
                                    <td class="border px-4 py-2">
                                        Set up a space where your child can
                                        express themselves both verbally and in
                                        writing.
                                    </td>
                                    <td class="border px-4 py-2">
                                        Create a journal where you write down
                                        prompts or questions and then discuss
                                        the responses verbally to encourage
                                        ongoing dialogue in both formats.
                                    </td>
                                </tr>

                                <!-- Strategy 3 -->
                                <tr>
                                    <td class="border px-4 py-2">
                                        Use Verbal Feedback Paired with Written
                                        Responses
                                    </td>
                                    <td class="border px-4 py-2">
                                        Offer verbal feedback during
                                        conversations and ask your child to
                                        write their responses or thoughts.
                                    </td>
                                    <td class="border px-4 py-2">
                                        After discussing a lesson, provide
                                        feedback verbally, then ask your child
                                        to write down what they’ve learned or
                                        how they might apply the feedback in the
                                        future.
                                    </td>
                                </tr>

                                <!-- Strategy 4 -->
                                <tr>
                                    <td class="border px-4 py-2">
                                        Encourage Verbal Expression Before
                                        Writing
                                    </td>
                                    <td class="border px-4 py-2">
                                        Let your child verbally explain their
                                        ideas before writing them down.
                                    </td>
                                    <td class="border px-4 py-2">
                                        When working on a writing project, have
                                        your child explain their thoughts or
                                        outline the key points aloud before they
                                        begin writing. This helps clarify their
                                        ideas before they organise them in
                                        writing.
                                    </td>
                                </tr>

                                <!-- Strategy 5 -->
                                <tr>
                                    <td class="border px-4 py-2">
                                        Provide Written Prompts to Encourage
                                        Discussion
                                    </td>
                                    <td class="border px-4 py-2">
                                        Use written prompts to spark verbal
                                        discussion and follow up with written
                                        tasks.
                                    </td>
                                    <td class="border px-4 py-2">
                                        Write a thought-provoking question on a
                                        topic and then have a conversation about
                                        it. After the discussion, ask your child
                                        to write their reflections or
                                        conclusions.
                                    </td>
                                </tr>

                                <!-- Strategy 6 -->
                                <tr>
                                    <td class="border px-4 py-2">
                                        Use Audio Resources to Spark Writing
                                    </td>
                                    <td class="border px-4 py-2">
                                        Incorporate audio resources like
                                        podcasts or audiobooks to initiate
                                        dialogue and written responses.
                                    </td>
                                    <td class="border px-4 py-2">
                                        After listening to an educational
                                        podcast, ask your child to discuss their
                                        thoughts and write a summary or response
                                        about what they learned.
                                    </td>
                                </tr>

                                <!-- Strategy 7 -->
                                <tr>
                                    <td class="border px-4 py-2">
                                        Combine Verbal Encouragement with
                                        Written Notes
                                    </td>
                                    <td class="border px-4 py-2">
                                        Offer verbal encouragement during
                                        conversations and follow up with written
                                        notes to reinforce the dialogue.
                                    </td>
                                    <td class="border px-4 py-2">
                                        After a conversation about progress or
                                        goals, write down key points or next
                                        steps that your child can refer to
                                        later, supporting their learning through
                                        both spoken and written formats.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <p class="mt-6">
                By incorporating these communication tips, you can create a
                supportive and engaging environment that enhances your blended
                learner's understanding and expression.
            </p>
        </div>
    </div>

    <!-- Report 10 Reading & Writing _ Kinesthethic Blend-->
    <div v-if="style == 'Reading/Writing/Kinesthethic'">
        <!-- Content for Report 10 -->
        <div class="p-6">
            <p class="mb-6">
                Communicating effectively with your child involves engaging both
                their reading/writing and kinaesthetic strengths. Here are some
                strategies to enhance communication with blended learners:
            </p>



            <h2 class="text-2xl font-bold mb-4">
                How to Communicate Effectively with Blended Learners:
            </h2>
            <div class="max-w-full overflow-x-auto shadow-md rounded-lg mb-6">
                <div class="min-w-[600px] md:min-w-full">
                    <!-- Minimum width for mobile scroll -->
                    <table
                        class="w-full border-collapse border border-gray-300"
                    >
                        <thead>
                            <tr>
                                <th class="border px-4 py-2">Activity</th>
                                <th class="border px-4 py-2">Strategy</th>
                                <th class="border px-4 py-2">Example</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border px-4 py-2">
                                    Use Written Instructions with Hands-On
                                    Demonstrations:
                                </td>
                                <td class="border px-4 py-2">
                                    Provide written instructions alongside
                                    physical demonstrations to help your child
                                    understand tasks.
                                </td>
                                <td class="border px-4 py-2">
                                    When explaining how to complete a project,
                                    give your child a written outline and
                                    physically show them the steps to follow.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Encourage Written Reflections After Physical
                                    Activities:
                                </td>
                                <td class="border px-4 py-2">
                                    After a hands-on task, ask your child to
                                    write about their experience.
                                </td>
                                <td class="border px-4 py-2">
                                    After completing a science experiment, have
                                    your child write a reflection or summary of
                                    what they learned and how they performed the
                                    task.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Incorporate Movement During Discussions:
                                </td>
                                <td class="border px-4 py-2">
                                    Allow your child to move or engage
                                    physically while discussing topics to
                                    enhance focus.
                                </td>
                                <td class="border px-4 py-2">
                                    While discussing a lesson, let your child
                                    walk around, use a standing desk, or doodle
                                    as they process information verbally.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Combine Verbal Feedback with Written Notes:
                                </td>
                                <td class="border px-4 py-2">
                                    Offer verbal feedback on tasks and follow up
                                    with written comments.
                                </td>
                                <td class="border px-4 py-2">
                                    After your child completes a physical
                                    project, discuss what went well and areas
                                    for improvement, then provide written
                                    feedback for them to review later.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Use Writing as a Follow-Up to Physical
                                    Tasks:
                                </td>
                                <td class="border px-4 py-2">
                                    After completing a physical task, have your
                                    child follow up by writing about it.
                                </td>
                                <td class="border px-4 py-2">
                                    Once they finish a hands-on activity like
                                    building a model, ask them to write a
                                    summary or explanation of the steps
                                    involved.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Encourage Note-Taking During Hands-On
                                    Activities:
                                </td>
                                <td class="border px-4 py-2">
                                    Have your child take notes or write down
                                    steps while completing physical tasks to
                                    enhance understanding.
                                </td>
                                <td class="border px-4 py-2">
                                    While building something or conducting an
                                    experiment, ask them to take brief notes on
                                    what they’re doing and why.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Use Written and Physical Cues to Reinforce
                                    Understanding:
                                </td>
                                <td class="border px-4 py-2">
                                    Combine written cues with physical actions
                                    to reinforce learning and communication.
                                </td>
                                <td class="border px-4 py-2">
                                    Provide written instructions for a task, and
                                    ask your child to follow them while
                                    performing a physical task like assembling a
                                    puzzle or conducting a simple experiment.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="flex justify-center items-center">
                <img
                    class="w-90 h-auto object-contain"
                    :src="'/images/reports-svg-images/Kids/LearningStyles/22.svg'"
                    alt=""
                />
            </div>
            <h2 class="text-2xl font-bold mb-4">Encouraging Open Dialogue:</h2>
            <div class="max-w-full overflow-x-auto shadow-md rounded-lg mb-6">
                <div class="min-w-[600px] md:min-w-full">
                    <!-- Minimum width for mobile scroll -->
                    <table
                        class="w-full border-collapse border border-gray-300"
                    >
                        <thead>
                            <tr>
                                <th class="border px-4 py-2">Activity</th>
                                <th class="border px-4 py-2">Strategy</th>
                                <th class="border px-4 py-2">Example</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border px-4 py-2">
                                    Use Physical Prompts to Spark Conversation:
                                </td>
                                <td class="border px-4 py-2">
                                    Introduce physical objects or activities to
                                    inspire verbal and written discussions.
                                </td>
                                <td class="border px-4 py-2">
                                    After your child completes a physical
                                    project, ask them to explain what they did
                                    and why, then follow up with a written
                                    summary or reflection.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Encourage Verbal Discussions After Writing
                                    Tasks:
                                </td>
                                <td class="border px-4 py-2">
                                    After your child completes a writing task,
                                    engage them in a verbal discussion to
                                    elaborate on their ideas.
                                </td>
                                <td class="border px-4 py-2">
                                    Once your child finishes writing a report,
                                    ask them to verbally explain the key points
                                    or expand on their ideas.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Create a Written and Physical Dialogue
                                    Journal:
                                </td>
                                <td class="border px-4 py-2">
                                    Set up a journal where you and your child
                                    can exchange written ideas and physically
                                    interact with tasks related to the topic.
                                </td>
                                <td class="border px-4 py-2">
                                    After writing a journal entry, encourage
                                    your child to engage in a related hands-on
                                    activity, such as building or creating
                                    something tied to their reflection.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Use Movement to Facilitate Discussions:
                                </td>
                                <td class="border px-4 py-2">
                                    Allow your child to move around or engage in
                                    physical activities during discussions.
                                </td>
                                <td class="border px-4 py-2">
                                    During a conversation about a lesson, let
                                    your child walk or move around while sharing
                                    their thoughts, helping them process
                                    information physically and verbally.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Combine Written Prompts with Hands-On
                                    Responses:
                                </td>
                                <td class="border px-4 py-2">
                                    Provide written prompts and ask your child
                                    to respond verbally or through a physical
                                    activity.
                                </td>
                                <td class="border px-4 py-2">
                                    Write a question or prompt and ask your
                                    child to respond by performing a related
                                    task, such as building a model or drawing a
                                    diagram.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Use Written Cues to Enhance Verbal and
                                    Physical Dialogue:
                                </td>
                                <td class="border px-4 py-2">
                                    Incorporate written notes or cues into
                                    verbal discussions to reinforce
                                    understanding.
                                </td>
                                <td class="border px-4 py-2">
                                    Write down key discussion points and use
                                    them as a guide for your child to follow
                                    while completing a physical task, allowing
                                    them to engage with both formats.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Encourage Open Discussion with Written
                                    Follow-Ups:
                                </td>
                                <td class="border px-4 py-2">
                                    After verbal discussions, ask your child to
                                    write about their thoughts or conclusions.
                                </td>
                                <td class="border px-4 py-2">
                                    Following a discussion about a topic, have
                                    your child write a reflection or summary to
                                    help reinforce the conversation.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <p class="mt-6">
                By incorporating these communication tips, you can create a
                supportive and engaging environment that enhances your blended
                learner's understanding and expression.
            </p>
        </div>
    </div>

    <!-- Report 11 Reading & Writing _ Visual Blend -->
    <div v-if="style == 'Reading/Writing/Visual'">
        <!-- Content for Report 11 -->
        <div class="p-6">
            <p class="text-lg mb-6">
                Communicating effectively with your child involves engaging both
                their reading/writing and visual strengths. Here are some
                strategies to enhance communication with blended learners:
            </p>




            <div class="space-y-6">
                <h2 class="text-2xl font-semibold">
                    How to Communicate Effectively with Blended Learners:
                </h2>

                <div
                    class="max-w-full overflow-x-auto shadow-md rounded-lg mb-6"
                >
                    <div class="min-w-[600px] md:min-w-full">
                        <!-- Minimum width for mobile scroll -->
                        <table
                            class="w-full border-collapse border border-gray-300"
                        >
                            <thead>
                                <tr>
                                    <th class="border px-4 py-2">Activity</th>
                                    <th class="border px-4 py-2">Strategy</th>
                                    <th class="border px-4 py-2">Example</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Use Visual Aids with Written
                                        Instructions
                                    </td>
                                    <td class="border px-4 py-2">
                                        When giving instructions, combine
                                        written guidance with visual cues, such
                                        as charts or diagrams.
                                    </td>
                                    <td class="border px-4 py-2">
                                        If assigning tasks, provide a written
                                        checklist along with a visual timeline
                                        or diagram to help your child see the
                                        steps and follow them in writing.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Encourage Written Summaries of Visual
                                        Discussions
                                    </td>
                                    <td class="border px-4 py-2">
                                        After a visual presentation or
                                        discussion, ask your child to write a
                                        summary of the key points.
                                    </td>
                                    <td class="border px-4 py-2">
                                        If you discuss a science concept using
                                        diagrams, ask your child to write a
                                        short summary or explanation of what was
                                        discussed. This reinforces their
                                        understanding through both visual and
                                        written engagement.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Provide Feedback Using Written and
                                        Visual Methods
                                    </td>
                                    <td class="border px-4 py-2">
                                        When offering feedback, use a
                                        combination of written notes and visual
                                        suggestions.
                                    </td>
                                    <td class="border px-4 py-2">
                                        If your child completes a project,
                                        provide written comments on their
                                        strengths and areas for improvement, and
                                        use visual aids (like arrows or
                                        highlights) to emphasise key points.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Encourage Visual Storytelling with
                                        Written Explanations
                                    </td>
                                    <td class="border px-4 py-2">
                                        Ask your child to explain ideas both
                                        visually and in writing to strengthen
                                        their communication skills.
                                    </td>
                                    <td class="border px-4 py-2">
                                        When discussing a book or event, have
                                        your child draw a visual representation
                                        of the story and write an explanation
                                        alongside it.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Use Written Prompts with Visual Support
                                    </td>
                                    <td class="border px-4 py-2">
                                        Help your child organise their thoughts
                                        by providing written prompts alongside
                                        visual aids.
                                    </td>
                                    <td class="border px-4 py-2">
                                        When asking your child to reflect on
                                        their day or an experience, provide a
                                        written prompt like, “What did you learn
                                        today?” and encourage them to use
                                        diagrams or drawings to support their
                                        response.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Incorporate Visual and Written Feedback
                                        Loops
                                    </td>
                                    <td class="border px-4 py-2">
                                        Create opportunities for your child to
                                        review feedback both visually and
                                        through written notes, allowing them to
                                        connect both learning styles.
                                    </td>
                                    <td class="border px-4 py-2">
                                        After completing a written assignment,
                                        provide a visual breakdown of their
                                        performance (like a chart or graph) and
                                        pair it with a written explanation of
                                        their strengths and improvement areas.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Encourage Note-Taking with Visual and
                                        Written Elements
                                    </td>
                                    <td class="border px-4 py-2">
                                        Teach your child to take notes by
                                        combining written summaries with visual
                                        elements like charts or mind maps.
                                    </td>
                                    <td class="border px-4 py-2">
                                        While listening to a lesson or reading a
                                        book, encourage your child to take notes
                                        and draw diagrams to reinforce key
                                        points. This will help them retain
                                        information by using both learning
                                        methods.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="flex justify-center items-center">
                <img
                    class="w-90 h-auto object-contain"
                    :src="'/images/reports-svg-images/Kids/LearningStyles/22.svg'"
                    alt=""
                />
            </div>
            <div class="space-y-6 mt-12">
                <h2 class="text-2xl font-semibold">
                    Encouraging Open Dialogue:
                </h2>

                <div
                    class="max-w-full overflow-x-auto shadow-md rounded-lg mb-6"
                >
                    <div class="min-w-[600px] md:min-w-full">
                        <!-- Minimum width for mobile scroll -->
                        <table
                            class="w-full border-collapse border border-gray-300"
                        >
                            <thead>
                                <tr>
                                    <th class="border px-4 py-2">Activity</th>
                                    <th class="border px-4 py-2">Strategy</th>
                                    <th class="border px-4 py-2">Example</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Ask Open-Ended Questions with Visual
                                        Prompts
                                    </td>
                                    <td class="border px-4 py-2">
                                        Use open-ended questions and accompany
                                        them with visual aids to help your child
                                        express their thoughts clearly.
                                    </td>
                                    <td class="border px-4 py-2">
                                        Example: Instead of asking, “Did you
                                        understand the lesson?” ask, “Can you
                                        show me what you learned today?” while
                                        encouraging your child to draw a diagram
                                        or take notes to explain the concept.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Create a Dialogue Journal with Written
                                        and Visual Entries
                                    </td>
                                    <td class="border px-4 py-2">
                                        Start a dialogue journal where both you
                                        and your child can exchange written and
                                        visual entries.
                                    </td>
                                    <td class="border px-4 py-2">
                                        Example: Use a notebook where you both
                                        write or draw notes to each other about
                                        daily experiences, thoughts, or ideas.
                                        This provides your child an opportunity
                                        to express themselves both visually and
                                        in writing.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Use Storyboards to Explain Ideas
                                    </td>
                                    <td class="border px-4 py-2">
                                        Encourage your child to use storyboards
                                        or flowcharts to visually represent
                                        their ideas before discussing them.
                                    </td>
                                    <td class="border px-4 py-2">
                                        Example: If your child is explaining a
                                        story or an idea, ask them to draw a
                                        quick storyboard to illustrate the main
                                        points, then discuss the details using
                                        written or verbal explanations.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Incorporate Written Reflections with
                                        Visual Elements
                                    </td>
                                    <td class="border px-4 py-2">
                                        After discussions or activities,
                                        encourage your child to write
                                        reflections and incorporate visual
                                        elements to express their thoughts.
                                    </td>
                                    <td class="border px-4 py-2">
                                        Example: After a family trip or a new
                                        experience, ask your child to write
                                        about what they enjoyed and illustrate
                                        their favourite part with a drawing or
                                        diagram.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Use Visual Cues to Encourage Written
                                        Communication
                                    </td>
                                    <td class="border px-4 py-2">
                                        Support your child’s expression by
                                        providing visual cues that help prompt
                                        written responses.
                                    </td>
                                    <td class="border px-4 py-2">
                                        Example: Show your child a photo or
                                        diagram and ask them to write a short
                                        paragraph about what it represents or
                                        how they feel about it. This combination
                                        of visual and written tasks enhances
                                        their ability to express themselves.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Encourage Collaborative Writing with
                                        Visual Planning
                                    </td>
                                    <td class="border px-4 py-2">
                                        When working on collaborative projects
                                        or discussions, encourage your child to
                                        visually plan their ideas before
                                        writing.
                                    </td>
                                    <td class="border px-4 py-2">
                                        Example: If planning a family event or
                                        school project, use a large chart to
                                        organise tasks visually, then work with
                                        your child to write out the steps or
                                        goals together.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">
                                        Encourage Written Feedback on Visual
                                        Projects
                                    </td>
                                    <td class="border px-4 py-2">
                                        After your child completes a visual
                                        project, encourage them to write a brief
                                        reflection or feedback on their work.
                                    </td>
                                    <td class="border px-4 py-2">
                                        Example: If your child draws or creates
                                        a visual presentation, ask them to write
                                        about the process and what they learned.
                                        This helps reinforce their learning and
                                        communication skills through both
                                        writing and visuals.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <p class="mt-4">
                By incorporating these communication tips, you can create a
                supportive and engaging environment that enhances your blended
                learner's understanding and expression.
            </p>
        </div>
    </div>
    <!-- Report 12 Reading & Writing-->
    <div v-if="style == 'Reading/Writing'">
        <!-- Content for Report 12 -->
        <section class="p-6">
            <p class="mt-4">
                Effective communication with your reading/writing learner is
                essential to ensure they understand instructions, stay engaged,
                and feel supported. Here are some strategies to enhance
                communication with reading/writing learners:
            </p>
            <h2 class="text-2xl font-semibold">
                How to Communicate Effectively with Reading/Writing Learners
            </h2>

            <div class="max-w-full overflow-x-auto shadow-md rounded-lg mb-6">
                <div class="min-w-[600px] md:min-w-full">
                    <!-- Minimum width for mobile scroll -->
                    <table
                        class="w-full border-collapse border border-gray-300"
                    >
                        <thead>
                            <tr>
                                <th class="border px-4 py-2">Activity</th>
                                <th class="border px-4 py-2">Strategy</th>
                                <th class="border px-4 py-2">Example</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border px-4 py-2">
                                    Provide Written Instructions
                                </td>
                                <td class="border px-4 py-2">
                                    Always provide written instructions for
                                    tasks and assignments.
                                </td>
                                <td class="border px-4 py-2">
                                    Give handouts or write instructions on the
                                    board so your child can refer back to them.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Encourage Written Communication
                                </td>
                                <td class="border px-4 py-2">
                                    Use written communication for important
                                    information and feedback.
                                </td>
                                <td class="border px-4 py-2">
                                    Write notes or letters to your child and
                                    encourage them to respond in writing.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Use Lists and Organisers
                                </td>
                                <td class="border px-4 py-2">
                                    Help your child use lists, organisers, and
                                    planners to keep track of tasks and
                                    information.
                                </td>
                                <td class="border px-4 py-2">
                                    Create to-do lists, checklists, and daily
                                    planners together.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Model Effective Writing
                                </td>
                                <td class="border px-4 py-2">
                                    Show your child examples of good writing and
                                    discuss what makes them effective.
                                </td>
                                <td class="border px-4 py-2">
                                    Share well-written articles, books, or your
                                    own writing projects.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Encourage Note-Taking
                                </td>
                                <td class="border px-4 py-2">
                                    Teach your child effective note-taking
                                    techniques and encourage them to take notes
                                    during lessons and readings.
                                </td>
                                <td class="border px-4 py-2">
                                    Show them how to use headings, bullet
                                    points, and summaries to organise their
                                    notes.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Engage in Written Discussions
                                </td>
                                <td class="border px-4 py-2">
                                    Use written discussions to explore topics in
                                    depth.
                                </td>
                                <td class="border px-4 py-2">
                                    Have your child write essays or reflections
                                    on topics you discuss at home.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Use Written Feedback
                                </td>
                                <td class="border px-4 py-2">
                                    Provide feedback on assignments and tasks in
                                    writing.
                                </td>
                                <td class="border px-4 py-2">
                                    Write comments on their work and suggest
                                    areas for improvement.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <div class="flex justify-center items-center">
            <img
                class="w-90 h-auto object-contain"
                :src="'/images/reports-svg-images/Kids/LearningStyles/22.svg'"
                alt=""
            />
        </div>
        <section class="p-6">
            <h2 class="text-2xl font-semibold">Encouraging Open Dialogue</h2>

            <div class="max-w-full overflow-x-auto shadow-md rounded-lg mb-6">
                <div class="min-w-[600px] md:min-w-full">
                    <!-- Minimum width for mobile scroll -->
                    <table
                        class="w-full border-collapse border border-gray-300"
                    >
                        <thead>
                            <tr>
                                <th class="border px-4 py-2">Activity</th>
                                <th class="border px-4 py-2">Strategy</th>
                                <th class="border px-4 py-2">Example</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border px-4 py-2">
                                    Ask Open-Ended Questions
                                </td>
                                <td class="border px-4 py-2">
                                    Encourage your child to express their
                                    thoughts and feelings by asking open-ended
                                    questions.
                                </td>
                                <td class="border px-4 py-2">
                                    Instead of asking, “Did you like the book?”
                                    ask, “What was your favourite part of the
                                    book and why?”
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Active Listening:
                                </td>
                                <td class="border px-4 py-2">
                                    Show that you are actively listening by
                                    making eye contact, nodding, and responding
                                    thoughtfully.
                                </td>
                                <td class="border px-4 py-2">
                                    When your child is explaining something,
                                    maintain eye contact and provide verbal
                                    affirmations like, “I see,” or “That’s
                                    interesting.”
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Encourage Storytelling
                                </td>
                                <td class="border px-4 py-2">
                                    Encourage your child to tell stories using
                                    both words and physical actions.
                                </td>
                                <td class="border px-4 py-2">
                                    Have a designated storytelling time where
                                    your child can narrate stories and act them
                                    out.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                   Create a Dialogue Journal
                                </td>
                                <td class="border px-4 py-2">
                                    Start a dialogue journal where you and your
                                    child can write and respond to each other’s
                                    entries.
                                </td>
                                <td class="border px-4 py-2">
                                    Use a notebook to exchange written notes and
                                    responses about daily experiences, thoughts,
                                    and ideas.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Use Physical Emotion Charts

                                </td>
                                <td class="border px-4 py-2">
                                    Use physical emotion charts to help your
                                    child express their feelings.
                                </td>
                                <td class="border px-4 py-2">
                                    Create a chart with different facial
                                    expressions and ask your child to point to
                                    how they are feeling.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Encourage Feedback
                                </td>
                                <td class="border px-4 py-2">
                                    Encourage your child to give feedback on
                                    their learning experiences and express any
                                    concerns or preferences.
                                </td>
                                <td class="border px-4 py-2">
                                    After completing a project, ask your child
                                    what they enjoyed, what they found
                                    challenging, and how they think they could
                                    improve.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Celebrate Written Achievements
                                </td>
                                <td class="border px-4 py-2">
                                    Recognise and celebrate your child’s
                                    accomplishments in reading and writing.
                                </td>
                                <td class="border px-4 py-2">
                                    Display their written work on a bulletin
                                    board or fridge, and praise their efforts
                                    and improvements.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <p class="mt-4">
                By incorporating these communication tips, you can create a
                supportive and engaging environment that enhances your
                reading/writing learner's understanding and expression.
            </p>
        </section>
    </div>

    <!-- Report 13 Visual _ Auditory Blend-->
    <div v-if="style == 'Visual/Auditory'">
        <!-- Content for Report 13 -->
        <section class="p-6">
            <p class="mt-4">
                Communicating effectively with your child involves engaging both
                their visual and auditory strengths. Here are some strategies to
                enhance communication with blended learners:
            </p>
            <h2 class="text-2xl font-semibold">
                How to Communicate Effectively with Blended Learners
            </h2>

            <div class="max-w-full overflow-x-auto shadow-md rounded-lg mb-6">
                <div class="min-w-[600px] md:min-w-full">
                    <!-- Minimum width for mobile scroll -->
                    <table
                        class="w-full border-collapse border border-gray-300"
                    >
                        <thead>
                            <tr>
                                <th class="border px-4 py-2">Activity</th>
                                <th class="border px-4 py-2">Strategy</th>
                                <th class="border px-4 py-2">Example</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border px-4 py-2">
                                    Use Verbal Instructions with Visual Support
                                </td>
                                <td class="border px-4 py-2">
                                    When giving instructions, speak clearly and
                                    accompany them with visual aids such as
                                    diagrams, checklists, or notes.
                                </td>
                                <td class="border px-4 py-2">
                                    Say, “First, clean your room,” while showing
                                    a checklist with steps like “Pick up toys”
                                    and “Fold clothes.”
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Encourage Verbal Summaries with Visual Cues
                                </td>
                                <td class="border px-4 py-2">
                                    After completing a task or learning new
                                    information, ask your child to verbally
                                    summarise what they’ve learned while
                                    referring to visual cues like drawings or
                                    notes.
                                </td>
                                <td class="border px-4 py-2">
                                    Ask, “Can you explain what you just learned
                                    about planets?” while they point to a
                                    diagram of the solar system.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Provide Feedback Using Both Verbal and
                                    Written Comments
                                </td>
                                <td class="border px-4 py-2">
                                    Offer feedback on your child’s work by
                                    discussing it verbally and complementing it
                                    with written notes or visual suggestions
                                    (such as drawings or highlighted points).
                                </td>
                                <td class="border px-4 py-2">
                                    Say, “Great job on your essay,” while
                                    underlining key parts of their written work
                                    or suggesting visual improvements.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Incorporate Visual Aids into Discussions
                                </td>
                                <td class="border px-4 py-2">
                                    During family discussions or problem-solving
                                    activities, use charts, diagrams, or
                                    drawings to help explain your points.
                                    Encourage your child to do the same when
                                    explaining their thoughts.
                                </td>
                                <td class="border px-4 py-2">
                                    While discussing weekend plans, use a visual
                                    calendar or chart to show the schedule while
                                    explaining each event verbally.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Engage in Active Listening and Visual
                                    Demonstration
                                </td>
                                <td class="border px-4 py-2">
                                    When your child is explaining something,
                                    practice active listening by nodding and
                                    asking questions. Encourage them to use
                                    visual aids like drawings or gestures to
                                    clarify their points.
                                </td>
                                <td class="border px-4 py-2">
                                    When your child talks about their school
                                    project, say, “Tell me more,” while they
                                    point to a diagram they drew as part of
                                    their project.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Use Verbal and Visual Prompts for
                                    Organisation
                                </td>
                                <td class="border px-4 py-2">
                                    Help your child stay organised by providing
                                    verbal reminders along with visual prompts
                                    like written schedules or task lists.
                                </td>
                                <td class="border px-4 py-2">
                                    Say, “Remember to complete your homework,”
                                    while showing them a checklist with all
                                    their tasks for the day.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Incorporate Audiovisual Tools for Learning
                                    Conversations
                                </td>
                                <td class="border px-4 py-2">
                                    Use tools like videos, apps, or interactive
                                    whiteboards when discussing complex topics
                                    with your child. Encourage them to explain
                                    what they see while you discuss the concepts
                                    verbally.
                                </td>
                                <td class="border px-4 py-2">
                                    Watch an educational video together and ask,
                                    “What did you learn from this?” while
                                    pausing to look at diagrams or key points in
                                    the video.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <div class="flex justify-center items-center">
            <img
                class="w-90 h-auto object-contain"
                :src="'/images/reports-svg-images/Kids/LearningStyles/22.svg'"
                alt=""
            />
        </div>
        <section class="p-6">
            <h2 class="text-2xl font-bold mb-4">Encouraging Open Dialogue</h2>

            <div class="max-w-full overflow-x-auto shadow-md rounded-lg mb-6">
                <div class="min-w-[600px] md:min-w-full">
                    <!-- Minimum width for mobile scroll -->
                    <table
                        class="w-full border-collapse border border-gray-300"
                    >
                        <thead>
                            <tr>
                                <th class="border px-4 py-2">Activity</th>
                                <th class="border px-4 py-2">Strategy</th>
                                <th class="border px-4 py-2">Example</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border px-4 py-2">
                                    Ask Open-Ended Questions
                                </td>
                                <td class="border px-4 py-2">
                                    Encourage your child to express their
                                    thoughts and feelings by asking open-ended
                                    questions.
                                </td>
                                <td class="border px-4 py-2">
                                    Instead of asking, “Did you like the book?”
                                    ask, “What was your favourite part of the
                                    book and why?”
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Create a Dialogue Journal
                                </td>
                                <td class="border px-4 py-2">
                                    Start a dialogue journal where you and your
                                    child can write and respond to each other’s
                                    entries.
                                </td>
                                <td class="border px-4 py-2">
                                    Use a notebook to exchange written notes and
                                    responses about daily experiences, thoughts,
                                    and ideas.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Storytelling Sessions
                                </td>
                                <td class="border px-4 py-2">
                                    Encourage your child to tell stories and
                                    share experiences verbally.
                                </td>
                                <td class="border px-4 py-2">
                                    Have a designated storytelling time where
                                    your child can narrate stories from their
                                    imagination or describe their day.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Role-Playing Activities
                                </td>
                                <td class="border px-4 py-2">
                                    Use role-playing activities to explore
                                    different scenarios and practice verbal
                                    interactions.
                                </td>
                                <td class="border px-4 py-2">
                                    Act out various roles in a story or simulate
                                    real-life situations like ordering at a
                                    restaurant or resolving a conflict.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Verbal Summaries
                                </td>
                                <td class="border px-4 py-2">
                                    After completing an activity or lesson, ask
                                    your child to verbally summarise what they
                                    learned.
                                </td>
                                <td class="border px-4 py-2">
                                    Prompt them with, “Can you tell me what you
                                    learned about today?” or “Explain how you
                                    solved that problem.”
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">

                                        Active Participation in
                                        Discussions
                                </td>
                                <td class="border px-4 py-2">
                                    Encourage your child to participate actively
                                    in family discussions and share their
                                    opinions.
                                </td>
                                <td class="border px-4 py-2">
                                    During family meetings or dinner
                                    conversations, ask for their input on
                                    decisions or topics of interest.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">

                                        Use Technology for
                                        Communication
                                </td>
                                <td class="border px-4 py-2">
                                    Utilise technology like voice notes and
                                    audio messages to communicate and share
                                    thoughts.
                                </td>
                                <td class="border px-4 py-2">
                                    Send each other voice messages to discuss
                                    plans, share news, or provide updates.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <p class="mt-4">
                By incorporating these communication tips, you can create a
                supportive and engaging environment that enhances your blended
                learner's understanding and expression.
            </p>
        </section>
    </div>

    <!-- Report 14 Visual _ Kinesthethic Blend-->
    <div v-if="style == 'Visual/Kinesthethic'">
        <!-- Content for Report 14 -->
        <section class="p-6">
            <p class="mt-4">
                Communicating effectively with your child involves engaging both
                their visual and kinaesthetic strengths. Here are some
                strategies to enhance communication with blended learners:
            </p>
            <h2 class="text-2xl font-semibold">
                How to Communicate Effectively with Blended Learners
            </h2>


            <div class="max-w-full overflow-x-auto shadow-md rounded-lg mb-6">
                <div class="min-w-[600px] md:min-w-full">
                    <!-- Minimum width for mobile scroll -->
                    <table
                        class="w-full border-collapse border border-gray-300"
                    >
                        <thead>
                            <tr>
                                <th class="border px-4 py-2">Activity</th>
                                <th class="border px-4 py-2">Strategy</th>
                                <th class="border px-4 py-2">Example</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border px-4 py-2">
                                    Use Visual Aids with Physical Demonstrations
                                </td>
                                <td class="border px-4 py-2">
                                    When giving instructions, combine visual
                                    aids such as diagrams, charts, or checklists
                                    with physical demonstrations.
                                </td>
                                <td class="border px-4 py-2">
                                    If you are explaining how to organise a
                                    room, show your child a checklist of tasks
                                    and physically demonstrate how to fold
                                    clothes or arrange books. This helps your
                                    child see and physically engage with the
                                    process.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Encourage Visual Summaries with Active
                                    Discussion
                                </td>
                                <td class="border px-4 py-2">
                                    After explaining a concept, ask your child
                                    to summarise it using visual cues like
                                    drawings, diagrams, or mind maps, followed
                                    by an active discussion.
                                </td>
                                <td class="border px-4 py-2">
                                    Ask your child to draw a diagram of the
                                    solar system after learning about planets,
                                    then explain the key points aloud. This
                                    reinforces their understanding by combining
                                    visual organisation and verbal expression.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Provide Feedback Using Both Visual and
                                    Physical Examples
                                </td>
                                <td class="border px-4 py-2">
                                    When giving feedback, use visual aids and
                                    physical engagement to show your child how
                                    they can improve.
                                </td>
                                <td class="border px-4 py-2">
                                    If your child is working on a craft or
                                    drawing, point out specific areas for
                                    improvement by physically interacting with
                                    their project (e.g., adjusting shapes or
                                    positioning) and showing a visual model for
                                    comparison.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Engage in Active Listening and Visual
                                    Problem-Solving
                                </td>
                                <td class="border px-4 py-2">
                                    When your child explains something, practice
                                    active listening and use visual prompts to
                                    clarify their thoughts.
                                </td>
                                <td class="border px-4 py-2">
                                    If your child is explaining a science
                                    experiment, encourage them to draw the
                                    experiment setup while you ask clarifying
                                    questions. This helps them express their
                                    thoughts both visually and verbally.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Use Visual and Physical Prompts for
                                    Organisation
                                </td>
                                <td class="border px-4 py-2">
                                    Help your child stay organised by providing
                                    visual prompts like charts or task lists
                                    combined with physical activities.
                                </td>
                                <td class="border px-4 py-2">
                                    Use a chore chart with pictures and allow
                                    your child to physically move pieces or
                                    place stickers as tasks are completed. This
                                    reinforces their organisation skills through
                                    both visual and physical interaction.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Incorporate Movement into Discussions
                                </td>
                                <td class="border px-4 py-2">
                                    Allow your child to move around while
                                    discussing ideas, keeping them physically
                                    engaged during conversations.
                                </td>
                                <td class="border px-4 py-2">
                                    While discussing homework, let your child
                                    pace or use physical objects like flashcards
                                    to stay focused during the conversation.
                                    Movement helps maintain their attention and
                                    encourages active learning.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Encourage Hands-On Expression with Visual
                                    Storytelling
                                </td>
                                <td class="border px-4 py-2">
                                    Support your child in combining visual aids
                                    with hands-on expression when they explain
                                    ideas.
                                </td>
                                <td class="border px-4 py-2">
                                    Ask your child to create a storyboard of
                                    their favourite story and use models or
                                    objects to act out the scenes as they
                                    explain it. This integrates visual and
                                    kinaesthetic learning, allowing them to
                                    engage more fully with the material.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <div class="flex justify-center items-center">
            <img
                class="w-90 h-auto object-contain"
                :src="'/images/reports-svg-images/Kids/LearningStyles/22.svg'"
                alt=""
            />
        </div>
        <section class="p-6">
            <h2 class="text-2xl font-semibold">Encouraging Open Dialogue</h2>
            <div class="max-w-full overflow-x-auto shadow-md rounded-lg mb-6">
                <div class="min-w-[600px] md:min-w-full">
                    <!-- Minimum width for mobile scroll -->
                    <table
                        class="w-full border-collapse border border-gray-300"
                    >
                        <thead>
                            <tr>
                                <th class="border px-4 py-2">Activity</th>
                                <th class="border px-4 py-2">Strategy</th>
                                <th class="border px-4 py-2">Example</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border px-4 py-2">
                                    Ask Open-Ended Questions with Visual Prompts
                                </td>
                                <td class="border px-4 py-2">
                                    Use open-ended questions to encourage your
                                    child to share their thoughts, and provide
                                    visual prompts to help guide their response.
                                </td>
                                <td class="border px-4 py-2">
                                    Instead of asking, “Did you enjoy the book?”
                                    ask, “What was your favourite part of the
                                    book?” while having them draw a scene from
                                    the story. This allows your child to express
                                    their thoughts both verbally and visually.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Create a Dialogue Journal with Physical
                                    Interaction
                                </td>
                                <td class="border px-4 py-2">
                                    Start a visual dialogue journal where you
                                    and your child can write or draw entries to
                                    each other, and physically exchange the
                                    notebook.
                                </td>
                                <td class="border px-4 py-2">
                                    Use a notebook where you both draw or write
                                    notes about your day, and then physically
                                    hand it to one another. This keeps the
                                    conversation going in a visual and hands-on
                                    manner.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Use Visual Storyboards and Role-Playing
                                </td>
                                <td class="border px-4 py-2">
                                    Encourage your child to use storyboards and
                                    physical role-playing to communicate their
                                    ideas.
                                </td>
                                <td class="border px-4 py-2">
                                    Ask your child to storyboard a recent
                                    experience and then act out the scenes using
                                    props or gestures. This helps them organise
                                    their thoughts visually and express
                                    themselves through physical action.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Provide Physical and Visual Feedback
                                </td>
                                <td class="border px-4 py-2">
                                    When discussing ideas or giving feedback,
                                    use visual aids and hands-on activities to
                                    facilitate the conversation.
                                </td>
                                <td class="border px-4 py-2">
                                    If your child is explaining a project idea,
                                    provide physical feedback by helping them
                                    adjust their models or drawings and use
                                    visual examples to reinforce your points.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Engage in Collaborative Projects
                                </td>
                                <td class="border px-4 py-2">
                                    Work together on visual and hands-on
                                    projects that promote communication and
                                    sharing of ideas.
                                </td>
                                <td class="border px-4 py-2">
                                    Create a family vision board together where
                                    each person adds their ideas through images
                                    and objects. This collaborative project
                                    encourages dialogue through visual and
                                    physical contributions.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Use Visual Prompts for Discussions
                                </td>
                                <td class="border px-4 py-2">
                                    During discussions, provide visual prompts
                                    to help your child express their thoughts
                                    and feelings.
                                </td>
                                <td class="border px-4 py-2">
                                    When discussing how they feel about school,
                                    ask your child to create a visual chart
                                    showing their emotions and then discuss each
                                    point together. This helps them clarify
                                    their feelings visually and verbally.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Encourage Active Participation in
                                    Discussions with Movement
                                </td>
                                <td class="border px-4 py-2">
                                    Allow your child to move around or engage in
                                    physical activities while participating in
                                    discussions.
                                </td>
                                <td class="border px-4 py-2">
                                    During a family discussion, let your child
                                    hold an object that represents their turn to
                                    speak or allow them to move around while
                                    contributing to the conversation. This helps
                                    them stay engaged and express their thoughts
                                    more freely.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <p class="mt-4">
                By incorporating these communication tips, you can create a
                supportive and engaging environment that enhances your blended
                learner's understanding and expression.
            </p>
        </section>
    </div>

    <!-- Report 15 Visual _ Reading & Writing-->
    <div v-if="style == 'Visual/Reading/Writing'">
        <!-- Content for Report 15 -->
        <section class="p-6">
            <p class="mt-4">
                Communicating effectively with your child involves engaging both
                their visual and reading/writing strengths. Here are some
                strategies to enhance communication with blended learners:
            </p>
            <h2 class="text-2xl font-semibold">
                How to Communicate Effectively with Blended Learners
            </h2>
            <div class="max-w-full overflow-x-auto shadow-md rounded-lg mb-6">
                <div class="min-w-[600px] md:min-w-full">
                    <!-- Minimum width for mobile scroll -->
                    <table
                        class="w-full border-collapse border border-gray-300"
                    >
                        <thead>
                            <tr>
                                <th class="border px-4 py-2">Activity</th>
                                <th class="border px-4 py-2">Strategy</th>
                                <th class="border px-4 py-2">Example</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border px-4 py-2">
                                    Use Visual Aids with Written Instructions
                                </td>
                                <td class="border px-4 py-2">
                                    When giving instructions, combine written
                                    guidance with visual cues, such as charts or
                                    diagrams.
                                </td>
                                <td class="border px-4 py-2">
                                    If assigning tasks, provide a written
                                    checklist along with a visual timeline or
                                    diagram to help your child see the steps and
                                    follow them in writing.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Encourage Written Summaries of Visual
                                    Discussions
                                </td>
                                <td class="border px-4 py-2">
                                    After a visual presentation or discussion,
                                    ask your child to write a summary of the key
                                    points.
                                </td>
                                <td class="border px-4 py-2">
                                    If you discuss a science concept using
                                    diagrams, ask your child to write a short
                                    summary or explanation of what was
                                    discussed. This reinforces their
                                    understanding through both visual and
                                    written engagement.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Provide Feedback Using Written and Visual
                                    Methods
                                </td>
                                <td class="border px-4 py-2">
                                    When offering feedback, use a combination of
                                    written notes and visual suggestions.
                                </td>
                                <td class="border px-4 py-2">
                                    If your child completes a project, provide
                                    written comments on their strengths and
                                    areas for improvement, and use visual aids
                                    (like arrows or highlights) to emphasise key
                                    points.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Encourage Visual Storytelling with Written
                                    Explanations
                                </td>
                                <td class="border px-4 py-2">
                                    Ask your child to explain ideas both
                                    visually and in writing to strengthen their
                                    communication skills.
                                </td>
                                <td class="border px-4 py-2">
                                    When discussing a book or event, have your
                                    child draw a visual representation of the
                                    story and write an explanation alongside it.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Use Written Prompts with Visual Support
                                </td>
                                <td class="border px-4 py-2">
                                    Help your child organise their thoughts by
                                    providing written prompts alongside visual
                                    aids.
                                </td>
                                <td class="border px-4 py-2">
                                    When asking your child to reflect on their
                                    day or an experience, provide a written
                                    prompt like, “What did you learn today?” and
                                    encourage them to use diagrams or drawings
                                    to support their response.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Incorporate Visual and Written Feedback
                                    Loops
                                </td>
                                <td class="border px-4 py-2">
                                    Create opportunities for your child to
                                    review feedback both visually and through
                                    written notes, allowing them to connect both
                                    learning styles.
                                </td>
                                <td class="border px-4 py-2">
                                    After completing a written assignment,
                                    provide a visual breakdown of their
                                    performance (like a chart or graph) and pair
                                    it with a written explanation of their
                                    strengths and improvement areas.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Encourage Note-Taking with Visual and
                                    Written Elements
                                </td>
                                <td class="border px-4 py-2">
                                    Teach your child to take notes by combining
                                    written summaries with visual elements like
                                    charts or mind maps.
                                </td>
                                <td class="border px-4 py-2">
                                    While listening to a lesson or reading a
                                    book, encourage your child to take notes and
                                    draw diagrams to reinforce key points. This
                                    will help them retain information by using
                                    both learning methods.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <div class="flex justify-center items-center">
            <img
                class="w-90 h-auto object-contain"
                :src="'/images/reports-svg-images/Kids/LearningStyles/22.svg'"
                alt=""
            />
        </div>
        <section class="p-6">
            <h2 class="text-2xl font-bold mb-4">Encouraging Open Dialogue</h2>

            <div class="max-w-full overflow-x-auto shadow-md rounded-lg mb-6">
                <div class="min-w-[600px] md:min-w-full">
                    <!-- Minimum width for mobile scroll -->
                    <table
                        class="w-full border-collapse border border-gray-300"
                    >
                        <thead>
                            <tr>
                                <th class="border px-4 py-2">Activity</th>
                                <th class="border px-4 py-2">Strategy</th>
                                <th class="border px-4 py-2">Example</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border px-4 py-2">
                                    Ask Open-Ended Questions with Visual Prompts
                                </td>
                                <td class="border px-4 py-2">
                                    Use open-ended questions and accompany them
                                    with visual aids to help your child express
                                    their thoughts clearly.
                                </td>
                                <td class="border px-4 py-2">
                                    Instead of asking, “Did you understand the
                                    lesson?” ask, “Can you show me what you
                                    learned today?” while encouraging your child
                                    to draw a diagram or take notes to explain
                                    the concept.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Create a Dialogue Journal with Written and
                                    Visual Entries
                                </td>
                                <td class="border px-4 py-2">
                                    Start a dialogue journal where both you and
                                    your child can exchange written and visual
                                    entries.
                                </td>
                                <td class="border px-4 py-2">
                                    Use a notebook where you both write or draw
                                    notes to each other about daily experiences,
                                    thoughts, or ideas. This provides your child
                                    an opportunity to express themselves both
                                    visually and in writing.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Use Storyboards to Explain Ideas
                                </td>
                                <td class="border px-4 py-2">
                                    Encourage your child to use storyboards or
                                    flowcharts to visually represent their ideas
                                    before discussing them.
                                </td>
                                <td class="border px-4 py-2">
                                    If your child is explaining a story or an
                                    idea, ask them to draw a quick storyboard to
                                    illustrate the main points, then discuss the
                                    details using written or verbal
                                    explanations.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Incorporate Written Reflections with Visual
                                    Elements
                                </td>
                                <td class="border px-4 py-2">
                                    After discussions or activities, encourage
                                    your child to write reflections and
                                    incorporate visual elements to express their
                                    thoughts.
                                </td>
                                <td class="border px-4 py-2">
                                    After a family trip or a new experience, ask
                                    your child to write about what they enjoyed
                                    and illustrate their favourite part with a
                                    drawing or diagram.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Use Visual Cues to Encourage Written
                                    Communication
                                </td>
                                <td class="border px-4 py-2">
                                    Support your child’s expression by providing
                                    visual cues that help prompt written
                                    responses.
                                </td>
                                <td class="border px-4 py-2">
                                    Show your child a photo or diagram and ask
                                    them to write a short paragraph about what
                                    it represents or how they feel about it.
                                    This combination of visual and written tasks
                                    enhances their ability to express
                                    themselves.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Encourage Collaborative Writing with Visual
                                    Planning
                                </td>
                                <td class="border px-4 py-2">
                                    When working on collaborative projects or
                                    discussions, encourage your child to
                                    visually plan their ideas before writing.
                                </td>
                                <td class="border px-4 py-2">
                                    If planning a family event or school
                                    project, use a large chart to organise tasks
                                    visually, then work with your child to write
                                    out the steps or goals together.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Encourage Written Feedback on Visual
                                    Projects
                                </td>
                                <td class="border px-4 py-2">
                                    After your child completes a visual project,
                                    encourage them to write a brief reflection
                                    or feedback on their work.
                                </td>
                                <td class="border px-4 py-2">
                                    If your child draws or creates a visual
                                    presentation, ask them to write about the
                                    process and what they learned. This helps
                                    reinforce their learning and communication
                                    skills through both writing and visuals.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <p class="mt-4">
                By incorporating these communication tips, you can create a
                supportive and engaging environment that enhances your blended
                learner's understanding and expression.
            </p>
        </section>
    </div>

    <!-- Report 16 Visual-->
    <div v-if="style == 'Visual'">
        <!-- Content for Report 16 -->
        <!-- Effective Communication with Visual Learners -->
        <section class="p-6">
            <p class="mt-4">
                Effective communication with your visual learner is essential to
                ensure they understand instructions, stay engaged, and feel
                supported. Here are some strategies to enhance communication
                with visual learners:
            </p>
            <h2 class="text-2xl font-semibold">
                How to Communicate Effectively with Visual Learners
            </h2>


            <div class="max-w-full overflow-x-auto shadow-md rounded-lg mb-6">
                <div class="min-w-[600px] md:min-w-full">
                    <!-- Minimum width for mobile scroll -->
                    <table
                        class="w-full border-collapse border border-gray-300"
                    >
                        <thead>
                            <tr>
                                <th class="border px-4 py-2">Activity</th>
                                <th class="border px-4 py-2">Strategy</th>
                                <th class="border px-4 py-2">Example</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border px-4 py-2">
                                    Use Visual Aids
                                </td>
                                <td class="border px-4 py-2">
                                    Whenever possible, use visual aids like
                                    charts, diagrams, pictures, and videos to
                                    convey information.
                                </td>
                                <td class="border px-4 py-2">
                                    If you're explaining a new concept, draw a
                                    diagram or show a video related to the
                                    topic.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">Write It Down</td>
                                <td class="border px-4 py-2">
                                    Provide written instructions, notes, or
                                    summaries to supplement verbal explanations.
                                </td>
                                <td class="border px-4 py-2">
                                    When giving a list of tasks, write them down
                                    on a whiteboard or a piece of paper that
                                    your child can refer to.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">Visual Cues</td>
                                <td class="border px-4 py-2">
                                    Use visual cues to reinforce verbal
                                    communication.
                                </td>
                                <td class="border px-4 py-2">
                                    Use gestures or point to relevant objects or
                                    diagrams while explaining something.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Illustrated Conversations
                                </td>
                                <td class="border px-4 py-2">
                                    Encourage your child to draw or sketch their
                                    thoughts and ideas during conversations.
                                </td>
                                <td class="border px-4 py-2">
                                    If your child is describing a story or an
                                    idea, ask them to draw it out as they
                                    explain.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Use Colour and Highlights
                                </td>
                                <td class="border px-4 py-2">
                                    Highlight important information using
                                    different colours or bold text.
                                </td>
                                <td class="border px-4 py-2">
                                    When reviewing notes or homework, use
                                    coloured markers to emphasise key points.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Create Visual Schedules
                                </td>
                                <td class="border px-4 py-2">
                                    Develop visual schedules and checklists to
                                    help your child stay organised.
                                </td>
                                <td class="border px-4 py-2">
                                    Create a daily or weekly schedule with
                                    images representing different activities and
                                    tasks.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Visual Feedback
                                </td>
                                <td class="border px-4 py-2">
                                    Provide feedback using visual elements such
                                    as stickers, charts, or drawings.
                                </td>
                                <td class="border px-4 py-2">
                                    Use a reward chart with stickers to track
                                    progress and achievements.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="flex justify-center items-center">
                <img
                    class="w-90 h-auto object-contain"
                    :src="'/images/reports-svg-images/Kids/LearningStyles/22.svg'"
                    alt=""
                />
            </div>
            <h2 class="text-2xl font-bold mb-4">Encouraging Open Dialogue</h2>

            <div class="max-w-full overflow-x-auto shadow-md rounded-lg mb-6">
                <div class="min-w-[600px] md:min-w-full">
                    <!-- Minimum width for mobile scroll -->
                    <table
                        class="w-full border-collapse border border-gray-300"
                    >
                        <thead>
                            <tr>
                                <th class="border px-4 py-2">Activity</th>
                                <th class="border px-4 py-2">Strategy</th>
                                <th class="border px-4 py-2">Example</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border px-4 py-2">
                                    Ask Open-Ended Questions
                                </td>
                                <td class="border px-4 py-2">
                                    Encourage your child to express their
                                    thoughts and feelings by asking open-ended
                                    questions.
                                </td>
                                <td class="border px-4 py-2">
                                    Instead of asking, "Did you like the book?"
                                    ask, "What was your favourite part of the
                                    book and why?"
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Active Listening
                                </td>
                                <td class="border px-4 py-2">
                                    Show that you are actively listening by
                                    making eye contact, nodding, and responding
                                    thoughtfully.
                                </td>
                                <td class="border px-4 py-2">
                                    When your child is explaining something,
                                    maintain eye contact and provide verbal
                                    affirmations like, "I see," or "That's
                                    interesting."
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Use Visual Prompts
                                </td>
                                <td class="border px-4 py-2">
                                    Use visual prompts to initiate conversations
                                    and discussions.
                                </td>
                                <td class="border px-4 py-2">
                                    Show your child a picture or an object and
                                    ask them to tell a story about it or explain
                                    what it means to them.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Encourage Storytelling
                                </td>
                                <td class="border px-4 py-2">
                                    Encourage your child to tell stories using
                                    both words and illustrations.
                                </td>
                                <td class="border px-4 py-2">
                                    Ask your child to draw a comic strip about
                                    their day and then explain it to you.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Create a Dialogue Journal
                                </td>
                                <td class="border px-4 py-2">
                                    Start a dialogue journal where you and your
                                    child can write and draw messages to each
                                    other.
                                </td>
                                <td class="border px-4 py-2">
                                    Use a notebook where you both can exchange
                                    written notes and drawings about daily
                                    experiences, thoughts, and ideas.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Visual Emotion Charts
                                </td>
                                <td class="border px-4 py-2">
                                    Use visual emotion charts to help your child
                                    express their feelings.
                                </td>
                                <td class="border px-4 py-2">
                                    Create a chart with different facial
                                    expressions and ask your child to point to
                                    how they are feeling.
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">
                                    Encourage Feedback
                                </td>
                                <td class="border px-4 py-2">
                                    Encourage your child to give feedback on
                                    their learning experiences and express any
                                    concerns or preferences.
                                </td>
                                <td class="border px-4 py-2">
                                    After completing a project, ask your child
                                    what they enjoyed, what they found
                                    challenging, and how they think they could
                                    improve.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="flex justify-center items-center">
                <img
                    class="w-90 h-auto object-contain"
                    :src="'/images/reports-svg-images/Kids/LearningStyles/19.svg'"
                    alt=""
                />
            </div>
            <p class="mt-4">
                By incorporating these communication tips, you can create a
                supportive and engaging environment that enhances your visual
                learner's understanding and expression.
            </p>
        </section>
    </div>
</div>

</template>

<script>
import AssessmentTypes from "@/Layouts/AssessmentTypes.vue";

export default {
    name: "Communication",
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
        margin-bottom: 2rem;
    }

    .p-6 {
        padding: 1rem;
    }

    h2 {
        font-size: 1.5rem !important;
    }

    /* Adjust image on mobile */
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
