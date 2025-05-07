<template>
    <div class="container mx-auto p-4">
        <h1 class="font-bold mb-4 text-center">Home Support Strategies</h1>
    </div>

    <div class="p-6">
        <!-- Report 1 Auditory-->
        <div v-if="style == 'Auditory'">
            <!-- Content for Report 1 -->
            <div class="p-6">
                <div class="row">
                    <div class="col-6">
                        <!-- Activities to Enhance Auditory Learning Section -->
                        <div>
                            <h2 class="font-semibold mb-4">
                                Activities to Enhance Auditory Learning
                            </h2>
                            <p class="mb-4">
                                Supporting your auditory learner at home is
                                crucial for their academic success and overall
                                development. Here are some effective strategies
                                to create a supportive home environment that
                                caters to their learning style:
                            </p>
                            <ul class="list-disc pl-6 space-y-4">
                                <li>
                                    <strong>Audiobooks and Podcasts:</strong>
                                    Encourage your child to listen to audiobooks
                                    and educational podcasts. This helps them
                                    absorb information through listening. Choose
                                    topics that interest your child and relate
                                    to their school subjects.
                                </li>
                                <li>
                                    <strong>Music and Rhythms:</strong> Use
                                    music and rhythms to reinforce learning.
                                    Create songs or rhymes to help your child
                                    remember facts and concepts. Encourage your
                                    child to play musical instruments or
                                    participate in musical activities.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-90 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/2.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-90 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/18.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="col-6">
                        <ul class="list-disc pl-6 space-y-4">
                            <li>
                                <strong>Interactive Read-Alouds:</strong> Read
                                books aloud with your child and discuss the
                                stories. Ask questions and encourage them to
                                express their thoughts. Use expressive voices
                                and sound effects to make the reading sessions
                                more engaging.
                            </li>
                            <li>
                                <strong>Verbal Games and Activities:</strong>
                                Play verbal games such as "20 Questions," "Simon
                                Says," and "I Spy" to enhance listening and
                                verbal skills. Use word association games and
                                storytelling prompts to stimulate creativity and
                                language development.
                            </li>
                            <li>
                                <strong>Discussion-Based Learning:</strong>
                                Engage in discussions about topics your child is
                                learning in school. Ask open-ended questions and
                                encourage them to explain concepts in their own
                                words. Use dinner time or car rides as
                                opportunities for educational conversations.
                            </li>
                            <li>
                                <strong>Storytelling and Role-Playing:</strong>
                                Encourage your child to tell stories or
                                participate in role-playing activities. This
                                helps them develop verbal expression and
                                creativity. Use props and costumes to make
                                role-playing more fun and immersive.
                            </li>
                        </ul>
                    </div>
                </div>


            </div>
        </div>

        <!-- Report 2 Auditory _ Kinesthethic Blend -->

        <div v-if="style == 'Auditory/Kinesthethic'">
            <!-- Content for Report 2 -->
            <div class="p-6">
                <h2 class="font-semibold">
                    Creating a Supportive Home Environment
                </h2>
                <p class="   ">
                    Creating a supportive home environment that caters to both
                    auditory and kinaesthetic learning styles is essential for
                    helping your child succeed. Here are some effective
                    strategies to create a supportive home environment that
                    caters to their learning style:
                </p>
                <div class="row">
                    <div class="col-6">
                        <section class="mb-8">
                            <div class="mt-4 space-y-6">
                                <h3 class="font-semibold">
                                    Blended Activities to Enhance Auditory and
                                    Kinaesthetic Learning
                                </h3>
                                <ul class="list-inside space-y-4">
                                    <li>
                                        <span class="font-semibold"
                                            >Create an Interactive Learning
                                            Space:</span
                                        >
                                        Design a study space where your child
                                        can listen to audiobooks, podcasts, or
                                        verbal instructions while engaging in
                                        hands-on tasks like building, crafting,
                                        or drawing. This encourages them to
                                        combine auditory learning with physical
                                        engagement.
                                    </li>
                                    <li>
                                        <span class="font-semibold"
                                            >Encourage Movement During
                                            Learning:</span
                                        >
                                        Allow your child to move around during
                                        study sessions. Let them walk or pace
                                        while listening to audio lessons or
                                        verbal instructions, helping them stay
                                        focused while engaging in kinaesthetic
                                        learning.
                                    </li>
                                    <li>
                                        <span class="font-semibold"
                                            >Use Hands-On Learning Tools with
                                            Audio Support:</span
                                        >
                                        Provide resources like building kits,
                                        craft materials, or educational toys
                                        that encourage physical interaction.
                                        Play educational audio resources such as
                                        podcasts or recordings that explain the
                                        concepts as your child works with these
                                        tools.
                                    </li>
                                    <li>
                                        <span class="font-semibold"
                                            >Reinforce Verbal Instructions with
                                            Physical Demonstrations:</span
                                        >
                                        Whenever possible, accompany verbal
                                        instructions with physical actions. For
                                        example, when explaining how to complete
                                        a task, perform the steps yourself or
                                        use a hands-on demonstration so your
                                        child can follow along.
                                    </li>
                                    <li>
                                        <span class="font-semibold"
                                            >Incorporate Verbal Repetition and
                                            Physical Practice:</span
                                        >
                                        Encourage your child to verbally repeat
                                        information while performing physical
                                        tasks. For instance, have them repeat
                                        key concepts while building a model or
                                        solving a puzzle, reinforcing the
                                        material through both speech and action.
                                    </li>
                                    <li>
                                        <span class="font-semibold"
                                            >Offer Breaks That Include Physical
                                            Activity:</span
                                        >
                                        Since kinaesthetic learners need to
                                        move, allow your child to take short
                                        breaks between study sessions to engage
                                        in physical activities like stretching
                                        or playing outside. This will help them
                                        recharge and return to learning with
                                        renewed focus.
                                    </li>
                                    <li>
                                        <span class="font-semibold"
                                            >Use Technology That Engages Both
                                            Auditory and Kinaesthetic
                                            Skills:</span
                                        >
                                        Leverage apps or games that require your
                                        child to listen to instructions and
                                        respond through physical interaction,
                                        such as moving objects or solving
                                        puzzles. This helps reinforce learning
                                        by engaging both auditory and
                                        kinaesthetic processes simultaneously.
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-90 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/2.svg'"
                                alt=""
                            />
                        </div>
                        <div class="flex justify-center items-center">
                            <img
                                class="w-90 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/18.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Report 3 Auditory _ Reading & Writing Blend-->
        <div v-if="style == 'Auditory/Reading/Writing'">
            <!-- Content for Report 3 -->
            <div class="p-6">
                <!-- Introduction -->
                <div class="mb-6">
                    <h2 class="font-semibold">
                        Creating a Supportive Home Environment
                    </h2>
                    <p class="mt-2">
                        Creating a supportive home environment that caters to
                        both auditory and reading/writing learning styles is
                        essential for helping your child succeed. Here are some
                        effective strategies to create a supportive home
                        environment that caters to their learning style:
                    </p>
                </div>

                <div class="row">
                    <div class="col-6">
                        <!-- Blended Activities to Enhance Auditory and Reading/Writing Learning -->
                        <div class="mb-6 main-heading-tip-report-3">
                            <h3 class="font-semibold">
                                Blended Activities to Enhance Auditory and
                                Reading/Writing Learning:
                            </h3>

                            <h4 class="text-md font-semibold mt-4">
                                1. Provide Written and Verbal Study Materials
                            </h4>
                            <p class="mt-2">
                                Offer a combination of written textbooks, notes,
                                and verbal resources like audiobooks or
                                podcasts. This allows your child to engage with
                                the material through both listening and reading,
                                enhancing retention.
                            </p>

                            <h4 class="text-md font-semibold mt-4">
                                2. Encourage Listening While Taking Notes
                            </h4>
                            <p class="mt-2">
                                Encourage your child to take notes while
                                listening to verbal explanations, such as during
                                lessons, podcasts, or discussions. Writing down
                                key points reinforces auditory input and helps
                                with memory retention.
                            </p>

                            <h4 class="text-md font-semibold mt-4">
                                3. Use Audiobooks for Reading Assignments
                            </h4>
                            <p class="mt-2">
                                Incorporate audiobooks alongside traditional
                                reading assignments. Listening to an audio
                                version of a text while following along in a
                                book helps your child stay focused and retain
                                information more effectively.
                            </p>

                            <h4 class="text-md font-semibold mt-4">
                                4. Practice Verbal Reflection Followed by
                                Writing
                            </h4>
                            <p class="mt-2">
                                After discussing a topic verbally, have your
                                child reflect on it by writing down their
                                thoughts. This helps them organise their ideas
                                and reinforce verbal learning through written
                                expression.
                            </p>

                            <h4 class="text-md font-semibold mt-4">
                                5. Incorporate Technology that Combines Audio
                                and Writing
                            </h4>
                            <p class="mt-2">
                                Use apps or online tools that combine listening
                                with writing activities. For example, they can
                                listen to a podcast and type a response, helping
                                them engage with the content using both learning
                                styles.
                            </p>

                            <h4 class="text-md font-semibold mt-4">
                                6. Set Up a Quiet Study Space for Writing
                            </h4>
                            <p class="mt-2">
                                Create a quiet space at home where your child
                                can focus on reading and writing assignments
                                without distractions. This helps them
                                concentrate on written tasks while allowing for
                                auditory resources if needed.
                            </p>

                            <h4 class="text-md font-semibold mt-4">
                                7. Encourage Review of Written Notes After
                                Listening
                            </h4>
                            <p class="mt-2">
                                Have your child review their written notes after
                                listening to a lesson or discussion. This
                                reinforces the material they’ve heard, allowing
                                them to process and retain information more
                                effectively.
                            </p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-90 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/2.svg'"
                                alt=""
                            />
                        </div>
                        <div class="flex justify-center items-center">
                            <img
                                class="w-90 h-auto object-contain"
                                :src="'/images/reports-svg-images/Page 7.svg'"
                                alt=""
                            />
                        </div>
                        <div class="flex justify-center items-center">
                            <img
                                class="w-90 h-auto object-contain"
                                :src="'/images/reports-svg-images/Page17.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Report 4 Auditory _ Visual Blend-->
        <div v-if="style == 'Auditory/Visual'">
            <!-- Content for Report 4 -->
            <div class="p-6">
                <div>
                    <h2 class="font-semibold">
                        Creating a Supportive Home Environment for Blended
                        Learners
                    </h2>
                    <p class="">
                        Creating a supportive home environment that caters to
                        both auditory and visual learning styles is essential
                        for helping your child succeed. Here are some effective
                        strategies to create a supportive home environment that
                        caters to their learning style:
                    </p>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div>
                            <h2 class="font-semibold">
                                Blended Activities to Enhance Auditory and
                                Visual Learning
                            </h2>
                            <ul class="list-disc pl-5">
                                <li>
                                    <strong
                                        >Watch Educational Videos Together and
                                        Discuss:</strong
                                    >
                                    Choose educational videos that combine
                                    visual elements with verbal explanations.
                                    After watching, engage your child in a
                                    discussion about what they’ve seen and
                                    heard, encouraging them to verbalise key
                                    points while referring to visuals.
                                </li>
                                <li>
                                    <strong
                                        >Listen to Audiobooks While Following
                                        Along with Text or Visual Aids:</strong
                                    >
                                    Use audiobooks or podcasts that align with
                                    your child’s school subjects or interests,
                                    and pair them with visuals such as written
                                    notes, diagrams, or images. Following along
                                    visually while listening helps your child
                                    retain both types of information.
                                </li>
                                <li>
                                    <strong
                                        >Create Flashcards with Visual and
                                        Verbal Cues:</strong
                                    >
                                    When studying, create flashcards that
                                    include both visual elements (such as images
                                    or diagrams) and key terms. Have your child
                                    verbally explain the concepts behind each
                                    card, linking the visual representation to
                                    auditory reinforcement.
                                </li>
                                <li>
                                    <strong
                                        >Use Colour-Coded Notes with Verbal
                                        Summaries:</strong
                                    >
                                    Encourage your child to organise their notes
                                    with colors and diagrams, and then ask them
                                    to explain what they’ve written aloud. This
                                    reinforces the connection between visual
                                    organisation and verbal comprehension.
                                </li>
                                <li>
                                    <strong
                                        >Engage in Storytelling with Visual
                                        Props:</strong
                                    >
                                    During reading or storytelling time,
                                    encourage your child to use visual props
                                    like drawings or models to represent key
                                    ideas. Ask them to explain the story or
                                    concept aloud, blending verbal and visual
                                    engagement.
                                </li>
                                <li>
                                    <strong
                                        >Incorporate Music and Rhythms with
                                        Visual Learning:</strong
                                    >
                                    When helping your child study, use songs or
                                    rhythms to reinforce facts, and pair them
                                    with visual aids like charts or
                                    illustrations. This technique helps blend
                                    auditory learning with visual cues, making
                                    the material more memorable.
                                </li>
                                <li>
                                    <strong
                                        >Interactive Read-Alouds with
                                        Visuals:</strong
                                    >
                                    Read aloud with your child, using expressive
                                    voices to engage their auditory learning,
                                    while also pointing to visual elements like
                                    pictures, charts, or text. This helps them
                                    connect the visual and auditory components
                                    of the story or lesson.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-90 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/2.svg'"
                                alt=""
                            />
                        </div>
                        <div class="flex justify-center items-center">
                            <img
                                class="w-90 h-auto object-contain"
                                :src="'/images/reports-svg-images/Page 7.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Report 5 Kinesthethic _ Auditory Blend-->
        <div v-if="style == 'Kinesthethic/Auditory'">
            <!-- Content for Report 5 -->
            <div class="p-6">
                <div>
                    <h2 class="font-semibold">
                        Creating a Supportive Home Environment
                    </h2>
                    <p class="">
                        Creating a supportive home environment that caters to
                        both kinaesthetic and auditory learning styles is
                        essential for helping your child succeed. Here are some
                        effective strategies to create a supportive home
                        environment that caters to their learning style:
                    </p>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="space-y-4">
                            <h2 class="font-semibold">
                                Blended Activities to Enhance Kinaesthetic and
                                Auditory Learning
                            </h2>
                        </div>

                        <div class="space-y-4 main-heading-tip-report-3">
                            <h4 class="text-lg font-semibold">
                                1. Create an Interactive Learning Space
                            </h4>
                            <p class="">
                                Design a study space where your child can listen
                                to audiobooks, podcasts, or verbal instructions
                                while engaging in hands-on tasks like building,
                                crafting, or drawing. This encourages them to
                                combine auditory learning with physical
                                engagement.
                            </p>
                        </div>

                        <div class="space-y-4 main-heading-tip-report-3">
                            <h4 class="text-lg font-semibold">
                                2. Encourage Movement During Learning
                            </h4>
                            <p class="">
                                Allow your child to move around during study
                                sessions. Let them walk or pace while listening
                                to audio lessons or verbal instructions, helping
                                them stay focused while engaging in kinaesthetic
                                learning.
                            </p>
                        </div>

                        <div class="space-y-4 main-heading-tip-report-3">
                            <h4 class="text-lg font-semibold">
                                3. Use Hands-On Learning Tools with Audio
                                Support
                            </h4>
                            <p class="">
                                Provide resources like building kits, craft
                                materials, or educational toys that encourage
                                physical interaction. Play educational audio
                                resources such as podcasts or recordings that
                                explain the concepts as your child works with
                                these tools.
                            </p>
                        </div>

                        <div class="space-y-4 main-heading-tip-report-3">
                            <h4 class="text-lg font-semibold">
                                4. Reinforce Verbal Instructions with Physical
                                Demonstrations
                            </h4>
                            <p class="">
                                Whenever possible, accompany verbal instructions
                                with physical actions. For example, when
                                explaining how to complete a task, perform the
                                steps yourself or use a hands-on demonstration
                                so your child can follow along.
                            </p>
                        </div>

                        <div class="space-y-4 main-heading-tip-report-3">
                            <h4 class="text-lg font-semibold">
                                5. Incorporate Verbal Repetition and Physical
                                Practice
                            </h4>
                            <p class="">
                                Encourage your child to verbally repeat
                                information while performing physical tasks. For
                                instance, have them repeat key concepts while
                                building a model or solving a puzzle,
                                reinforcing the material through both speech and
                                action.
                            </p>
                        </div>

                        <div class="space-y-4 main-heading-tip-report-3">
                            <h4 class="text-lg font-semibold">
                                6. Offer Breaks That Include Physical Activity
                            </h4>
                            <p class="">
                                Since kinaesthetic learners need to move, allow
                                your child to take short breaks between study
                                sessions to engage in physical activities like
                                stretching or playing outside. This will help
                                them recharge and return to learning with
                                renewed focus.
                            </p>
                        </div>

                        <div class="space-y-4 main-heading-tip-report-3">
                            <h4 class="text-lg font-semibold">
                                7. Use Technology That Engages Both Auditory and
                                Kinaesthetic Skills
                            </h4>
                            <p class="">
                                Leverage apps or games that require your child
                                to listen to instructions and respond through
                                physical interaction, such as moving objects or
                                solving puzzles. This helps reinforce learning
                                by engaging both auditory and kinaesthetic
                                processes simultaneously.
                            </p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-90 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/2.svg'"
                                alt=""
                            />
                        </div>
                        <div class="flex justify-center items-center">
                            <img
                                class="w-90 h-auto object-contain"
                                :src="'/images/reports-svg-images/Page 7.svg'"
                                alt=""
                            />
                        </div>
                        <div class="flex justify-center items-center">
                            <img
                                class="w-90 h-auto object-contain"
                                :src="'/images/reports-svg-images/Page17.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <!-- Report 6 Kinesthethic _ Reading & Writing -->
        <div v-if="style == 'Kinesthethic/Reading/Writing'">
            <!-- Content for Report 6 -->
            <div class="p-6">
                <h2 class="text-2xl font-bold mb-4">
                    Creating a Supportive Home Environment for Kinaesthetic and
                    Reading/Writing Learning Styles
                </h2>
                <p class="mb-4">
                    Creating a supportive home environment that caters to both
                    kinaesthetic and reading/writing learning styles is
                    essential for helping your child succeed. Here are some
                    effective strategies to create a supportive home environment
                    that caters to their learning style:
                </p>

                <div class="row">
                    <div class="col-6 main-heading-tip-report-3">
                        <h2 class="text-2xl font-semibold mb-2">
                            Blended Activities to Enhance Kinaesthetic and
                            Reading/Writing Learning:
                        </h2>

                        <h4 class="text-lg font-semibold mb-2">
                            1. Provide Written Instructions for Hands-On
                            Activities
                        </h4>
                        <p class="mb-4">
                            Give your child written instructions to follow when
                            they’re engaging in hands-on tasks at home. This
                            helps them stay organised while they perform
                            physical activities, reinforcing the material
                            through written and physical engagement.
                        </p>

                        <h4 class="text-lg font-semibold mb-2">
                            2. Encourage Writing Reflections After Physical
                            Tasks
                        </h4>
                        <p class="mb-4">
                            After your child completes a physical task,
                            encourage them to write a reflection on what they
                            did and what they learned. This allows them to
                            process the information by combining kinaesthetic
                            learning with written expression.
                        </p>

                        <h4 class="text-lg font-semibold mb-2">
                            3. Set Up a Space for Movement and Writing
                        </h4>
                        <p class="mb-4">
                            Create a home environment where your child can move
                            around while also having access to a writing space.
                            For example, set up a standing desk or a table with
                            plenty of room for both physical and writing tasks,
                            helping them switch between movement and written
                            work easily.
                        </p>

                        <h4 class="text-lg font-semibold mb-2">
                            4. Use Physical Breaks During Writing Tasks
                        </h4>
                        <p class="mb-4">
                            Allow your child to take short, frequent breaks
                            during long writing tasks to move around or engage
                            in physical activities. Movement keeps kinaesthetic
                            learners focused, helping them return to their
                            written work with renewed energy.
                        </p>

                        <h4 class="text-lg font-semibold mb-2">
                            5. Blend Reading/Writing with Hands-On Learning
                        </h4>
                        <p class="mb-4">
                            Encourage your child to use written notes or reading
                            materials while working on hands-on projects. This
                            allows them to integrate reading and writing into
                            their physical tasks, helping them understand the
                            connection between the two.
                        </p>

                        <h4 class="text-lg font-semibold mb-2">
                            6. Use Physical Prompts to Inspire Writing
                        </h4>
                        <p class="mb-4">
                            Incorporate physical objects or models to inspire
                            your child’s writing tasks. For example, after
                            engaging with a model or performing an experiment,
                            ask your child to write a report or reflection about
                            the experience.
                        </p>

                        <h4 class="text-lg font-semibold mb-2">
                            7. Combine Hands-On Projects with Written Reports
                        </h4>
                        <p class="mb-4">
                            Assign projects that require both physical and
                            written tasks, such as building a model and writing
                            an accompanying report. This helps your child see
                            the value of writing while reinforcing kinaesthetic
                            learning.
                        </p>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-90 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/2.svg'"
                                alt=""
                            />
                        </div>
                        <div class="flex justify-center items-center">
                            <img
                                class="w-90 h-auto object-contain"
                                :src="'/images/reports-svg-images/Page 7.svg'"
                                alt=""
                            />
                        </div>
                        <div class="flex justify-center items-center">
                            <img
                                class="w-90 h-auto object-contain"
                                :src="'/images/reports-svg-images/Page17.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <!-- Report 7 Kinesthethic _ Visual Blend-->
        <div v-if="style == 'Kinesthethic/Visual'">
            <!-- Content for Report 7 -->
            <div class="p-6">
                <div class="">
                    <h2 class="text-2xl font-semibold">
                        Home Support Strategies for Blended Learners
                    </h2>
                    <p class="mt-4 text-lg">
                        Creating a supportive home environment that caters to
                        both kinaesthetic and visual learning styles is
                        essential for helping your child succeed. Here are some
                        effective strategies to create a supportive home
                        environment that caters to their learning style:
                    </p>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="mt-8">
                            <h2 class="text-2xl font-semibold mb-4">
                                Blended Activities to Enhance Kinaesthetic and
                                Visual Learning:
                            </h2>
                            <div class="space-y-6 main-heading-tip-report-7">
                                <!-- Activity 1 -->
                                <div class="">
                                    <h4 class="font-semibold text-lg">
                                        1. Create a Visually Engaging Study
                                        Space with Physical Tools
                                    </h4>
                                    <p class="mt-2">
                                        Set up a study area with plenty of
                                        visual aids such as posters, charts, and
                                        colourful organisational tools.
                                        Incorporate hands-on materials like
                                        building blocks, art supplies, and
                                        tactile learning tools. This allows your
                                        child to both see and touch the concepts
                                        they are learning, reinforcing their
                                        understanding through active engagement.
                                    </p>
                                </div>

                                <!-- Activity 2 -->
                                <div class="">
                                    <h4 class="font-semibold text-lg">
                                        2. Encourage Drawing and Model Building
                                    </h4>
                                    <p class="mt-2">
                                        Incorporate opportunities for your child
                                        to draw diagrams or build models related
                                        to their studies. For example, after
                                        reading a book, ask your child to create
                                        a visual representation of the story or
                                        build a scene using craft materials.
                                        These activities engage both their
                                        visual and kinaesthetic strengths,
                                        helping them process and remember the
                                        material.
                                    </p>
                                </div>

                                <!-- Activity 3 -->
                                <div class="">
                                    <h4 class="font-semibold text-lg">
                                        3. Incorporate Movement into Learning
                                    </h4>
                                    <p class="mt-2">
                                        Allow your child to move around while
                                        studying or reviewing material.
                                        Encourage them to pace or use physical
                                        objects like flashcards or learning
                                        stations to reinforce key concepts. For
                                        instance, setting up different stations
                                        around the house where they can engage
                                        with visual aids and physical tasks will
                                        keep them energised and focused.
                                    </p>
                                </div>

                                <!-- Activity 4 -->
                                <div class="">
                                    <h4 class="font-semibold text-lg">
                                        4. Use Hands-On Learning Resources
                                    </h4>
                                    <p class="mt-2">
                                        Provide your child with access to
                                        resources that encourage physical
                                        interaction, such as educational kits,
                                        building sets, or art supplies. When
                                        studying science, for example, hands-on
                                        kits like chemistry sets or
                                        model-building activities can help them
                                        better understand abstract concepts
                                        through physical engagement.
                                    </p>
                                </div>

                                <!-- Activity 5 -->
                                <div class="">
                                    <h4 class="font-semibold text-lg">
                                        5. Break Down Tasks into Visual and
                                        Physical Steps
                                    </h4>
                                    <p class="mt-2">
                                        When giving your child instructions for
                                        homework or chores, break tasks into
                                        both visual and physical steps. Show
                                        them what the final product should look
                                        like and guide them through each step
                                        while encouraging them to physically
                                        interact with the task. This could
                                        involve visually organising their study
                                        materials and physically completing each
                                        task.
                                    </p>
                                </div>

                                <!-- Activity 6 -->
                                <div class="">
                                    <h4 class="font-semibold text-lg">
                                        6. Use Technology That Combines Visual
                                        and Kinaesthetic Learning
                                    </h4>
                                    <p class="mt-2">
                                        Incorporate educational apps or online
                                        tools that allow your child to engage
                                        with both visual and physical elements.
                                        Many interactive learning tools combine
                                        visual demonstrations with touch-based
                                        activities, allowing your child to
                                        manipulate objects on the screen while
                                        seeing the impact of their actions.
                                    </p>
                                </div>

                                <!-- Activity 7 -->
                                <div class="">
                                    <h4 class="font-semibold text-lg">
                                        7. Encourage Visual Storytelling and
                                        Physical Role-Playing
                                    </h4>
                                    <p class="mt-2">
                                        Encourage your child to combine
                                        storytelling with visual aids and
                                        physical action. They could create
                                        storyboards or mind maps for a topic and
                                        then act out or build elements of the
                                        story. This allows them to reinforce
                                        their understanding of the material by
                                        engaging with it through both sight and
                                        touch.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-90 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/18.svg'"
                                alt=""
                            />
                        </div>
                        <div class="flex justify-center items-center">
                            <img
                                class="w-90 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/2.svg'"
                                alt=""
                            />
                        </div>
                        <div class="flex justify-center items-center">
                            <img
                                class="w-90 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/18.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <!-- Report 8 Kinesthethic-->
        <div v-if="style == 'Kinesthethic'">
            <!-- Content for Report 8 -->
            <div class="p-6">
                <div class="row">
                    <div class="col-6">
                        <div>
                            <h2 class="text-2xl font-bold">
                                Supporting Kinaesthetic Learners at Home
                            </h2>
                            <p>
                                Supporting your kinaesthetic learner at home is
                                crucial for their academic success and overall
                                development. Here are some effective strategies
                                to create a supportive home environment that
                                caters to their learning style:
                            </p>
                        </div>

                        <div>
                            <h2 class="text-2xl font-semibold">
                                Activities to Enhance Kinaesthetic Learning
                            </h2>
                            <ul class="list-disc pl-6 space-y-2">
                                <li>
                                    <strong>Hands-On Projects:</strong>
                                    <p>
                                        Encourage your child to engage in
                                        hands-on projects such as building
                                        models, crafting, or cooking. These
                                        activities help them learn through
                                        direct physical involvement and enhance
                                        their problem-solving skills.
                                    </p>
                                </li>
                                <li>
                                    <strong>Interactive Games:</strong>
                                    <p>
                                        Play interactive games that involve
                                        movement and physical activity. Games
                                        like scavenger hunts, charades, or
                                        building challenges help reinforce
                                        learning through active participation.
                                    </p>
                                </li>
                                <li>
                                    <strong>Outdoor Activities:</strong>
                                    <p>
                                        Incorporate outdoor activities such as
                                        nature walks, gardening, or sports.
                                        Physical activities in nature can help
                                        kinaesthetic learners connect with the
                                        material and stay engaged.
                                    </p>
                                </li>
                                <li>
                                    <strong>Science Experiments:</strong>
                                    <p>
                                        Conduct simple science experiments at
                                        home using everyday materials. Hands-on
                                        experiments help kinaesthetic learners
                                        understand scientific concepts through
                                        direct experience.
                                    </p>
                                </li>
                                <li>
                                    <strong>Dance and Movement:</strong>
                                    <p>
                                        Encourage your child to learn through
                                        dance, yoga, or other movement-based
                                        activities. Movement-based learning
                                        helps kinaesthetic learners internalise
                                        information while staying active.
                                    </p>
                                </li>
                                <li>
                                    <strong>Art and Craft Projects:</strong>
                                    <p>
                                        Provide opportunities for creative
                                        expression through art and craft
                                        projects. Activities like drawing,
                                        painting, and sculpting allow
                                        kinaesthetic learners to engage
                                        physically while expressing their
                                        creativity.
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-90 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/2.svg'"
                                alt=""
                            />
                        </div>

                        <div class="flex justify-center items-center">
                            <img
                                class="w-90 h-auto object-contain"
                                :src="'/images/reports-svg-images/Page17.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Report 9 Reading & Writing _ Auditory Blend -->
        <div v-if="style == 'Reading/Writing/Auditory'">
            <!-- Content for Report 9 -->
            <div class="p-6">
                <h2 class="text-2xl font-bold mb-4">
                    Creating a Supportive Home Environment for Blended Learners
                </h2>
                <p class="mb-6">
                    Creating a supportive home environment that caters to both
                    reading/writing and auditory learning styles is essential
                    for helping your child succeed. Here are some effective
                    strategies to create a supportive home environment that
                    caters to their learning style:
                </p>
                <div class="row">
                    <div class="col-6 main-heading-tip-report-7">
                        <h2 class="text-2xl font-semibold mb-4">
                            Blended Activities to Enhance Reading/Writing and
                            Auditory Learning:
                        </h2>

                        <div class="">
                            <h4 class="text-lg font-semibold mb-2">
                                1. Provide Written and Verbal Study Materials
                            </h4>
                            <p class="">
                                Offer a combination of written textbooks, notes,
                                and verbal resources like audiobooks or
                                podcasts. This allows your child to engage with
                                the material through both listening and reading,
                                enhancing retention.
                            </p>
                        </div>

                        <div class="">
                            <h4 class="text-lg font-semibold mb-2">
                                2. Encourage Listening While Taking Notes
                            </h4>
                            <p class="">
                                Encourage your child to take notes while
                                listening to verbal explanations, such as during
                                lessons, podcasts, or discussions. Writing down
                                key points reinforces auditory input and helps
                                with memory retention.
                            </p>
                        </div>

                        <div class="">
                            <h4 class="text-lg font-semibold mb-2">
                                3. Use Audiobooks for Reading Assignments
                            </h4>
                            <p class="">
                                Incorporate audiobooks alongside traditional
                                reading assignments. Listening to an audio
                                version of a text while following along in a
                                book helps your child stay focused and retain
                                information more effectively.
                            </p>
                        </div>

                        <div class="">
                            <h4 class="text-lg font-semibold mb-2">
                                4. Practice Verbal Reflection Followed by
                                Writing
                            </h4>
                            <p class="">
                                After discussing a topic verbally, have your
                                child reflect on it by writing down their
                                thoughts. This helps them organise their ideas
                                and reinforce verbal learning through written
                                expression.
                            </p>
                        </div>

                        <div class="">
                            <h4 class="text-lg font-semibold mb-2">
                                5. Incorporate Technology that Combines Audio
                                and Writing
                            </h4>
                            <p class="">
                                Use apps or online tools that combine listening
                                with writing activities. For example, they can
                                listen to a podcast and type a response, helping
                                them engage with the content using both learning
                                styles.
                            </p>
                        </div>

                        <div class="">
                            <h4 class="text-lg font-semibold mb-2">
                                6. Set Up a Quiet Study Space for Writing
                            </h4>
                            <p class="">
                                Create a quiet space at home where your child
                                can focus on reading and writing assignments
                                without distractions. This helps them
                                concentrate on written tasks while allowing for
                                auditory resources if needed.
                            </p>
                        </div>

                        <div class="">
                            <h4 class="text-lg font-semibold mb-2">
                                7. Encourage Review of Written Notes After
                                Listening
                            </h4>
                            <p class="">
                                Have your child review their written notes after
                                listening to a lesson or discussion. This
                                reinforces the material they’ve heard, allowing
                                them to process and retain information more
                                effectively.
                            </p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-90 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/2.svg'"
                                alt=""
                            />
                        </div>
                        <div class="flex justify-center items-center">
                            <img
                                class="w-90 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/18.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <!-- Report 10 Reading & Writing _ Kinesthethic Blend-->
        <div v-if="style == 'Reading/Writing/Kinesthethic'">
            <!-- Content for Report 10 -->
            <div class="p-6">
                <div class="row">
                    <div class="col-6">
                        <h2 class="text-2xl font-bold mb-6">
                            Creating a Supportive Home Environment
                        </h2>
                        <p class="mb-6">
                            Creating a supportive home environment that caters
                            to both reading/writing and kinaesthetic learning
                            styles is essential for helping your child succeed.
                            Here are some effective strategies to create a
                            supportive home environment that caters to their
                            learning style:
                        </p>

                        <h2 class="text-2xl font-semibold mb-4">
                            Blended Activities to Enhance Reading/Writing and
                            Kinaesthetic Learning
                        </h2>
                        <ul class="list-disc pl-6 space-y-4">
                            <li>
                                <strong
                                    >Provide Written Instructions for Hands-On
                                    Activities:</strong
                                >
                                Give your child written instructions to follow
                                when they’re engaging in hands-on tasks at home.
                                This helps them stay organised while they
                                perform physical activities, reinforcing the
                                material through written and physical
                                engagement.
                            </li>
                            <li>
                                <strong
                                    >Encourage Writing Reflections After
                                    Physical Tasks:</strong
                                >
                                After your child completes a physical task,
                                encourage them to write a reflection on what
                                they did and what they learned. This allows them
                                to process the information by combining
                                kinaesthetic learning with written expression.
                            </li>
                            <li>
                                <strong
                                    >Set Up a Space for Movement and
                                    Writing:</strong
                                >
                                Create a home environment where your child can
                                move around while also having access to a
                                writing space. For example, set up a standing
                                desk or a table with plenty of room for both
                                physical and writing tasks, helping them switch
                                between movement and written work easily.
                            </li>
                            <li>
                                <strong
                                    >Use Physical Breaks During Writing
                                    Tasks:</strong
                                >
                                Allow your child to take short, frequent breaks
                                during long writing tasks to move around or
                                engage in physical activities. Movement keeps
                                kinaesthetic learners focused, helping them
                                return to their written work with renewed
                                energy.
                            </li>
                            <li>
                                <strong
                                    >Blend Reading/Writing with Hands-On
                                    Learning:</strong
                                >
                                Encourage your child to use written notes or
                                reading materials while working on hands-on
                                projects. This allows them to integrate reading
                                and writing into their physical tasks, helping
                                them understand the connection between the two.
                            </li>
                            <li>
                                <strong
                                    >Use Physical Prompts to Inspire
                                    Writing:</strong
                                >
                                Incorporate physical objects or models to
                                inspire your child’s writing tasks. For example,
                                after engaging with a model or performing an
                                experiment, ask your child to write a report or
                                reflection about the experience.
                            </li>
                            <li>
                                <strong
                                    >Combine Hands-On Projects with Written
                                    Reports:</strong
                                >
                                Assign projects that require both physical and
                                written tasks, such as building a model and
                                writing an accompanying report. This helps your
                                child see the value of writing while reinforcing
                                kinaesthetic learning.
                            </li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-90 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/2.svg'"
                                alt=""
                            />
                        </div>
                        <div class="flex justify-center items-center">
                            <img
                                class="w-90 h-auto object-contain"
                                :src="'/images/reports-svg-images/Page 7.svg'"
                                alt=""
                            />
                        </div>
                        <div class="flex justify-center items-center">
                            <img
                                class="w-90 h-auto object-contain"
                                :src="'/images/reports-svg-images/Page17.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <!-- Report 11 Reading & Writing _ Visual Blend -->
        <div v-if="style == 'Reading/Writing/Visual'">
            <!-- Content for Report 11 -->
            <div class="p-6">
                <h2 class="text-3xl font-bold mb-4">
                    Creating a Supportive Home Environment for Blended Learners
                </h2>
                <p class="mt-4 text-lg">
                    Creating a supportive home environment that caters to both
                    reading/writing and visual learning styles is essential for
                    helping your child succeed. Here are some effective
                    strategies to create a supportive home environment that
                    caters to their learning style:
                </p>
                <div class="row">
                    <div class="col-6">
                        <section class="mb-6">
                            <h2 class="text-2xl font-semibold mb-3">
                                Blended Activities to Enhance Reading/Writing
                                and Visual Learning:
                            </h2>
                            <ul class="list-inside pink-ul">
                                <li class="mb-4">
                                    <p class="font-semibold">
                                        1. Create a Visually Organised Study
                                        Space
                                    </p>
                                    <p>
                                        Set up a dedicated study area that is
                                        visually organised with charts,
                                        diagrams, and calendars. Include plenty
                                        of written materials, such as books and
                                        notebooks, to encourage both visual and
                                        reading/writing engagement. A
                                        clutter-free environment helps your
                                        child focus and makes it easier to
                                        access resources.
                                    </p>
                                </li>
                                <li class="mb-4">
                                    <p class="font-semibold">
                                        2. Encourage Note-Taking and Diagramming
                                    </p>
                                    <p>
                                        Promote the habit of taking notes and
                                        creating diagrams while studying.
                                        Provide them with tools like coloured
                                        pens, highlighters, and mind-mapping
                                        paper so they can visually organise
                                        their thoughts while reinforcing
                                        learning through writing.
                                    </p>
                                </li>
                                <li class="mb-4">
                                    <p class="font-semibold">
                                        3. Use Written Instructions with Visual
                                        Prompts
                                    </p>
                                    <p>
                                        When helping your child with tasks or
                                        study sessions, provide written
                                        instructions along with visual prompts.
                                        For example, when assigning chores,
                                        create a visual checklist they can
                                        follow. This supports their need for
                                        both written guidance and visual
                                        clarity.
                                    </p>
                                </li>
                                <li class="mb-4">
                                    <p class="font-semibold">
                                        4. Reinforce Learning with Writing
                                        Activities
                                    </p>
                                    <p>
                                        Encourage your child to write summaries
                                        or reflections after reading or watching
                                        educational content. Whether it’s a
                                        chapter in a book or an educational
                                        video, ask them to write a brief summary
                                        and accompany it with a diagram or
                                        visual representation.
                                    </p>
                                </li>
                                <li class="mb-4">
                                    <p class="font-semibold">
                                        5. Leverage Technology for Visual and
                                        Written Learning
                                    </p>
                                    <p>
                                        Use educational apps and websites that
                                        combine visual content with writing
                                        tasks. Interactive learning tools that
                                        involve reading and creating visual
                                        summaries can help your child engage
                                        with the material in a way that
                                        complements both learning styles.
                                    </p>
                                </li>
                                <li class="mb-4">
                                    <p class="font-semibold">
                                        6. Set Up Study Timelines and Planners
                                    </p>
                                    <p>
                                        Help your child organise their study
                                        time by using written planners and
                                        visual timelines. Encourage them to
                                        visually map out their study schedule,
                                        incorporating deadlines, reading goals,
                                        and key concepts to review. This helps
                                        them stay on track and process
                                        information more effectively.
                                    </p>
                                </li>
                                <li class="mb-4">
                                    <p class="font-semibold">
                                        7. Provide Opportunities for Written and
                                        Visual Expression
                                    </p>
                                    <p>
                                        Encourage your child to express their
                                        learning both visually and in writing.
                                        Whether through keeping a journal,
                                        creating storyboards, or writing essays
                                        with visual aids, giving them diverse
                                        opportunities to blend these two
                                        approaches helps reinforce their
                                        understanding.
                                    </p>
                                </li>
                            </ul>
                        </section>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-90 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/2.svg'"
                                alt=""
                            />
                        </div>

                        <div class="flex justify-center items-center">
                            <img
                                class="w-90 h-auto object-contain"
                                :src="'/images/reports-svg-images/Page17.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Report 12 Reading & Writing-->
        <div v-if="style == 'Reading/Writing'">
            <!-- Content for Report 12 -->

            <div class="row p-6">
                <div class="col-6">
                    <section class="mb-8">
                        <p class="mt-4">
                            Supporting your reading/writing learner at home is
                            crucial for their academic success and overall
                            development. Here are some effective strategies to
                            create a supportive home environment that caters to
                            their learning style:
                        </p>
                        <h2 class="text-2xl font-semibold">
                            Activities to Enhance Reading/Writing Learning
                        </h2>
                        <ul class="list-inside mt-4 space-y-2">
                            <li>
                                <strong>Daily Reading Time:</strong>
                                <ul class="list-disc pl-6 space-y-2 ml-10">
                                    <li>
                                        <i>Activity:</i> Set aside dedicated
                                        time each day for your child to read
                                        books, articles, or other written
                                        materials.
                                    </li>
                                    <li>
                                        <i>Purpose:</i> Regular reading helps
                                        improve comprehension, vocabulary, and
                                        critical thinking skills.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <strong>Journal Writing:</strong>
                                <ul class="list-disc pl-6 space-y-2 ml-10">
                                    <li>
                                        <i>Activity:</i> Encourage your child to
                                        keep a daily journal where they can
                                        write about their thoughts, experiences,
                                        and reflections.
                                    </li>
                                    <li>
                                        <i>Purpose:</i> Writing in a journal
                                        helps reinforce their writing skills and
                                        allows for personal expression.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <strong>Book Discussions:</strong>
                                <ul class="list-disc pl-6 space-y-2 ml-10">
                                    <li>
                                        <i>Activity:</i> Have regular
                                        discussions about the books your child
                                        is reading. Ask questions and encourage
                                        them to share their opinions and
                                        interpretations.
                                    </li>
                                    <li>
                                        <i>Purpose:</i> Discussing books helps
                                        improve comprehension and analytical
                                        skills while nurturing a love for
                                        reading.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <strong>Research Projects:</strong>
                                <ul class="list-disc pl-6 space-y-2 ml-10">
                                    <li>
                                        <i>Activity:</i> Assign research
                                        projects on topics of interest to your
                                        child. Have them gather information from
                                        books, articles, and online sources, and
                                        then write a report or presentation.
                                    </li>
                                    <li>
                                        <i>Purpose:</i> Research projects
                                        enhance their ability to find,
                                        interpret, and present information.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <strong>Creative Writing:</strong>
                                <ul class="list-disc pl-6 space-y-2 ml-10">
                                    <li>
                                        <i>Activity:</i> Encourage creative
                                        writing activities such as story
                                        writing, poetry, or creating their own
                                        books.
                                    </li>
                                    <li>
                                        <i>Purpose:</i> Creative writing
                                        stimulates imagination and improves
                                        writing skills.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <strong>Reading and Writing Games:</strong>
                                <ul class="list-disc pl-6 space-y-2 ml-10">
                                    <li>
                                        <i>Activity:</i> Play games that involve
                                        reading and writing, such as word
                                        searches, crossword puzzles, and writing
                                        prompts.
                                    </li>
                                    <li>
                                        <i>Purpose:</i> These games make
                                        learning fun and reinforce literacy
                                        skills.
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </section>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-90 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/2.svg'"
                            alt=""
                        />
                    </div>
                    <div class="flex justify-center items-center">
                        <img
                            class="w-90 h-auto object-contain"
                            :src="'/images/reports-svg-images/Page 7.svg'"
                            alt=""
                        />
                    </div>
                    <div class="flex justify-center items-center">
                        <img
                            class="w-90 h-auto object-contain"
                            :src="'/images/reports-svg-images/Page17.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>

        </div>

        <!-- Report 13 Visual _ Auditory Blend-->
        <div v-if="style == 'Visual/Auditory'">
            <!-- Content for Report 13 -->

            <div class="row p-6">
                <div class="col-6">
                    <section class="mb-8">
                        <p class="mt-4">
                            Creating a supportive home environment that caters
                            to both visual and auditory learning styles is
                            essential for helping your child succeed. Here are
                            some effective strategies to create a supportive
                            home environment that caters to their learning
                            style:
                        </p>
                        <h2 class="test-md font-semibold text-indigo-500">
                            Blended Activities to Enhance Visual and Auditory
                            Learning:
                        </h2>
                        <ul class="pl-6 space-y-2 ml-8">
                            <li>
                                <strong
                                    >Watch Educational Videos Together and
                                    Discuss</strong
                                ><br />
                                Choose educational videos that combine visual
                                elements with verbal explanations. After
                                watching, engage your child in a discussion
                                about what they’ve seen and heard, encouraging
                                them to verbalise key points while referring to
                                visuals.
                            </li>
                            <li>
                                <strong
                                    >Listen to Audiobooks While Following Along
                                    with Text or Visual Aids</strong
                                ><br />
                                Use audiobooks or podcasts that align with your
                                child’s school subjects or interests, and pair
                                them with visuals such as written notes,
                                diagrams, or images. Following along visually
                                while listening helps your child retain both
                                types of information.
                            </li>
                            <li>
                                <strong
                                    >Create Flashcards with Visual and Verbal
                                    Cues</strong
                                ><br />
                                When studying, create flashcards that include
                                both visual elements (such as images or
                                diagrams) and key terms. Have your child
                                verbally explain the concepts behind each card,
                                linking the visual representation to auditory
                                reinforcement.
                            </li>
                            <li>
                                <strong
                                    >Use Colour-Coded Notes with Verbal
                                    Summaries</strong
                                ><br />
                                Encourage your child to organise their notes
                                with colours and diagrams, and then ask them to
                                explain what they’ve written aloud. This
                                reinforces the connection between visual
                                organisation and verbal comprehension.
                            </li>
                            <li>
                                <strong
                                    >Engage in Storytelling with Visual
                                    Props</strong
                                ><br />
                                During reading or storytelling time, encourage
                                your child to use visual props like drawings or
                                models to represent key ideas. Ask them to
                                explain the story or concept aloud, blending
                                verbal and visual engagement.
                            </li>
                            <li>
                                <strong
                                    >Incorporate Music and Rhythms with Visual
                                    Learning</strong
                                ><br />
                                When helping your child study, use songs or
                                rhythms to reinforce facts, and pair them with
                                visual aids like charts or illustrations. This
                                technique helps blend auditory learning with
                                visual cues, making the material more memorable.
                            </li>
                            <li>
                                <strong
                                    >Interactive Read-Alouds with
                                    Visuals</strong
                                ><br />
                                Read aloud with your child, using expressive
                                voices to engage their auditory learning, while
                                also pointing to visual elements like pictures,
                                charts, or text. This helps them connect the
                                visual and auditory components of the story or
                                lesson.
                            </li>
                        </ul>
                    </section>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-90 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/2.svg'"
                            alt=""
                        />
                    </div>
                    <div class="flex justify-center items-center">
                        <img
                            class="w-90 h-auto object-contain"
                            :src="'/images/reports-svg-images/Page 7.svg'"
                            alt=""
                        />
                    </div>
                    <div class="flex justify-center items-center">
                        <img
                            class="w-90 h-auto object-contain"
                            :src="'/images/reports-svg-images/Page17.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>

        </div>

        <!-- Report 14 Visual _ Kinesthethic Blend-->
        <div v-if="style == 'Visual/Kinesthethic'">
            <!-- Content for Report 14 -->

            <div class="row p-6">
                <p class="mt-4">
                    Creating a supportive home environment that caters to both
                    visual and kinaesthetic learning styles is essential for
                    helping your child succeed. Here are some effective
                    strategies to create a supportive home environment that
                    caters to their learning style:
                </p>
                <div class="col-6">
                    <section class="mb-8">
                        <h2 class="font-semibold text-indigo-500">
                            Blended Activities to Enhance Visual and
                            Kinaesthetic Learning:
                        </h2>
                        <ul class="pl-6 space-y-2 ml-8">
                            <li>
                                <strong
                                    >Create a Visually Engaging Study Space with
                                    Physical Tools</strong
                                ><br />Set up a study area with plenty of visual
                                aids such as posters, charts, and colourful
                                organisational tools. Incorporate hands-on
                                materials like building blocks, art supplies,
                                and tactile learning tools. This allows your
                                child to both see and touch the concepts they
                                are learning, reinforcing their understanding
                                through active engagement.
                            </li>
                            <li>
                                <strong
                                    >Encourage Drawing and Model
                                    Building</strong
                                ><br />Incorporate opportunities for your child
                                to draw diagrams or build models related to
                                their studies. For example, after reading a
                                book, ask your child to create a visual
                                representation of the story or build a scene
                                using craft materials. These activities engage
                                both their visual and kinaesthetic strengths,
                                helping them process and remember the material.
                            </li>
                            <li>
                                <strong
                                    >Incorporate Movement into Learning</strong
                                ><br />Allow your child to move around while
                                studying or reviewing material. Encourage them
                                to pace or use physical objects like flashcards
                                or learning stations to reinforce key concepts.
                                For instance, setting up different stations
                                around the house where they can engage with
                                visual aids and physical tasks will keep them
                                energised and focused.
                            </li>
                            <li>
                                <strong>Use Hands-On Learning Resources</strong
                                ><br />Provide your child with access to
                                resources that encourage physical interaction,
                                such as educational kits, building sets, or art
                                supplies. When studying science, for example,
                                hands-on kits like chemistry sets or
                                model-building activities can help them better
                                understand abstract concepts through physical
                                engagement.
                            </li>
                            <li>
                                <strong
                                    >Break Down Tasks into Visual and Physical
                                    Steps</strong
                                ><br />When giving your child instructions for
                                homework or chores, break tasks into both visual
                                and physical steps. Show them what the final
                                product should look like and guide them through
                                each step while encouraging them to physically
                                interact with the task. This could involve
                                visually organising their study materials and
                                physically completing each task.
                            </li>
                            <li>
                                <strong
                                    >Use Technology That Combines Visual and
                                    Kinaesthetic Learning</strong
                                ><br />Incorporate educational apps or online
                                tools that allow your child to engage with both
                                visual and physical elements. Many interactive
                                learning tools combine visual demonstrations
                                with touch-based activities, allowing your child
                                to manipulate objects on the screen while seeing
                                the impact of their actions.
                            </li>
                            <li>
                                <strong
                                    >Encourage Visual Storytelling and Physical
                                    Role-Playing</strong
                                ><br />Encourage your child to combine
                                storytelling with visual aids and physical
                                action. They could create storyboards or mind
                                maps for a topic and then act out or build
                                elements of the story. This allows them to
                                reinforce their understanding of the material by
                                engaging with it through both sight and touch.
                            </li>
                        </ul>
                    </section>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-90 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/2.svg'"
                            alt=""
                        />
                    </div>

                    <div class="flex justify-center items-center">
                        <img
                            class="w-90 h-auto object-contain"
                            :src="'/images/reports-svg-images/Page17.svg'"
                            alt=""
                        />
                    </div>
                    <div class="flex justify-center items-center">
                        <img
                            class="w-90 h-auto object-contain"
                            :src="'/images/reports-svg-images/Page 7.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>


        </div>

        <!-- Report 15 Visual _ Reading & Writing-->
        <div v-if="style == 'Visual/Reading/Writing'">
            <!-- Content for Report 15 -->
            <div class="row p-6">
                <div class="col-6">
                    <section class="mb-8">
                        <p class="mt-4">
                            Creating a supportive home environment that caters
                            to both visual and reading/writing learning styles
                            is essential for helping your child succeed. Here
                            are some effective strategies to create a supportive
                            home environment that caters to their learning
                            style:
                        </p>
                        <h2 class="font-semibold text-indigo-500">
                            Blended Activities to Enhance Visual and
                            Reading/Writing Learning:
                        </h2>
                        <ul class="pl-6 space-y-2 ml-8">
                            <li>
                                <strong
                                    >Create a Visually Organised Study
                                    Space</strong
                                ><br />Set up a dedicated study area that is
                                visually organised with charts, diagrams, and
                                calendars. Include plenty of written materials,
                                such as books and notebooks, to encourage both
                                visual and reading/writing engagement. A
                                clutter-free environment helps your child focus
                                and makes it easier to access resources.
                            </li>
                            <li>
                                <strong
                                    >Encourage Note-Taking and
                                    Diagramming</strong
                                ><br />Promote the habit of taking notes and
                                creating diagrams while studying. Provide them
                                with tools like coloured pens, highlighters, and
                                mind-mapping paper so they can visually organise
                                their thoughts while reinforcing learning
                                through writing.
                            </li>
                            <li>
                                <strong
                                    >Use Written Instructions with Visual
                                    Prompts</strong
                                ><br />When helping your child with tasks or
                                study sessions, provide written instructions
                                along with visual prompts. For example, when
                                assigning chores, create a visual checklist they
                                can follow. This supports their need for both
                                written guidance and visual clarity.
                            </li>
                            <li>
                                <strong
                                    >Reinforce Learning with Writing
                                    Activities</strong
                                ><br />Encourage your child to write summaries
                                or reflections after reading or watching
                                educational content. Whether it’s a chapter in a
                                book or an educational video, ask them to write
                                a brief summary and accompany it with a diagram
                                or visual representation.
                            </li>
                            <li>
                                <strong
                                    >Leverage Technology for Visual and Written
                                    Learning</strong
                                ><br />Use educational apps and websites that
                                combine visual content with writing tasks.
                                Interactive learning tools that involve reading
                                and creating visual summaries can help your
                                child engage with the material in a way that
                                complements both learning styles.
                            </li>
                            <li>
                                <strong
                                    >Set Up Study Timelines and Planners</strong
                                ><br />Help your child organise their study time
                                by using written planners and visual timelines.
                                Encourage them to visually map out their study
                                schedule, incorporating deadlines, reading
                                goals, and key concepts to review. This helps
                                them stay on track and process information more
                                effectively.
                            </li>
                            <li>
                                <strong
                                    >Provide Opportunities for Written and
                                    Visual Expression</strong
                                ><br />Encourage your child to express their
                                learning both visually and in writing. Whether
                                through keeping a journal, creating storyboards,
                                or writing essays with visual aids, giving them
                                diverse opportunities to blend these two
                                approaches helps reinforce their understanding.
                            </li>
                        </ul>
                    </section>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-90 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/2.svg'"
                            alt=""
                        />
                    </div>
                    <div class="flex justify-center items-center">
                        <img
                            class="w-90 h-auto object-contain"
                            :src="'/images/reports-svg-images/Page 7.svg'"
                            alt=""
                        />
                    </div>
                    <div class="flex justify-center items-center">
                        <img
                            class="w-90 h-auto object-contain"
                            :src="'/images/reports-svg-images/Page17.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>

        </div>

        <!-- Report 16 Visual-->
        <div v-if="style == 'Visual'">
            <!-- Content for Report 16 -->
            <!-- Home Support Strategies -->

            <div class="row p-6">
                <p class="mt-4">
                    Supporting your visual learner at home is crucial for their
                    academic success and overall development. Here are some
                    effective strategies to create a supportive home environment
                    that caters to their learning style:
                </p>
                <div class="col-6">
                    <h2 class="font-semibold text-indigo-500">
                        Activities to Enhance Visual Learning
                    </h2>
                    <ul class="list-inside mt-4 space-y-2">
                        <li>
                            <strong>Art Projects:</strong>
                            <ul class="list-disc pl-6 space-y-2 ml-8">
                                <li>
                                    Encourage your child to engage in drawing,
                                    painting, and other creative arts. These
                                    activities help them express ideas visually
                                    and develop their creativity.
                                </li>
                                <li>
                                    Provide various art supplies such as
                                    coloured pencils, markers, paints, and
                                    sketchbooks.
                                </li>
                            </ul>
                        </li>
                        <li>
                            <strong>Educational Videos:</strong>
                            <ul class="list-disc pl-6 space-y-2 ml-8">
                                <li>
                                    Use educational videos and documentaries to
                                    supplement their learning. Visual learners
                                    benefit from seeing concepts in action.
                                </li>
                                <li>
                                    Websites like YouTube, Khan Academy, and
                                    educational streaming services offer a wide
                                    range of visual content on various subjects.
                                </li>
                            </ul>
                        </li>
                        <li>
                            <strong>Visual Puzzles and Games:</strong>
                            <ul class="list-disc pl-6 space-y-2 ml-8">
                                <li>
                                    Introduce puzzles, such as jigsaw puzzles,
                                    Sudoku, and crosswords, to help them develop
                                    problem-solving skills.
                                </li>
                                <li>
                                    Play games that involve visual-spatial
                                    skills, like memory matching games or
                                    building with LEGO.
                                </li>
                            </ul>
                        </li>
                        <li>
                            <strong>Visual Schedules and Charts:</strong>
                            <ul class="list-disc pl-6 space-y-2 ml-8">
                                <li>
                                    Create visual schedules and charts to help
                                    your child stay organised. Use pictures and
                                    symbols to represent daily tasks and
                                    routines.
                                </li>
                                <li>
                                    Involve your child in creating these
                                    schedules to ensure they understand and
                                    engage with them.
                                </li>
                            </ul>
                        </li>
                        <li>
                            <strong>Reading with Illustrations:</strong>
                            <ul class="list-disc pl-6 space-y-2 ml-8">
                                <li>
                                    Choose books with plenty of illustrations
                                    and pictures to make reading more engaging.
                                </li>
                                <li>
                                    Graphic novels, picture books, and
                                    illustrated encyclopedias are excellent
                                    choices for visual learners.
                                </li>
                            </ul>
                        </li>
                        <li>
                            <strong>Hands-On Science Experiments:</strong>
                            <ul class="list-disc pl-6 space-y-2 ml-8">
                                <li>
                                    Conduct simple science experiments at home
                                    using everyday materials. Document the
                                    process with drawings and photos.
                                </li>
                                <li>
                                    Resources like science experiment kits or
                                    online tutorials can provide guidance and
                                    inspiration.
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-90 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/2.svg'"
                            alt=""
                        />
                    </div>

                    <div class="flex justify-center items-center">
                        <img
                            class="w-90 h-auto object-contain"
                            :src="'/images/reports-svg-images/Page17.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
import AssessmentTypes from "@/Layouts/AssessmentTypes.vue";

export default {
    name: "HomeSupportStrategiesFirst",
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
div.space-y-2 > h4.font-medium,
ul > li > span,
div.main-heading-tip-report-3 > h4,
div.main-heading-tip-report-7 > div > h4 {
    color: rgb(36, 168, 250);
    font-weight: bold;
    /* font-size: 20px; */
    color: #fa25c4;
    /* font-size: 19px; */
}

h2,
.p-6 > .row > .col-6 > h2,
h3 {
    color: rgb(55 48 163);
    font-weight: bold !important;
}

.main-heading-tip,
ul.pink-ul > li.mb-4 > p.font-semibold,
i {
    color: rgb(36, 168, 250);
    font-weight: bold;
    /* font-size: 20px; */
    color: #fa25c4;
}

div.space-y-4.main-heading-tip-report-3,
div.p-6 > div.row > li,
ul > li {
    margin-bottom: 20px;
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

ul {
    padding-left: 0rem;
}
</style>
