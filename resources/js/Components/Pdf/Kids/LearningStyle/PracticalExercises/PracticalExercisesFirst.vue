<template>
    <div class="p-6">
        <div class="container mx-auto p-4">
            <h1 class="font-bold mb-4 text-center">
                Practical Exercises and Activities
            </h1>
        </div>

        <!-- Report 1 Auditory -->
        <div v-if="style == 'Auditory'">
            <!-- Content for Report 1 -->
            <div class="p-6">
                <div class="row">
                    <h2 class="text-md font-bold mb-4">
                        Auditory Learning Exercises
                    </h2>
                    <p class="mb-4">
                        Engaging your auditory learner in specific exercises can
                        help reinforce their strengths and improve their
                        understanding of various subjects. Here are some
                        practical activities tailored for auditory learners:
                    </p>
                    <div class="col-6">
                        <!-- Auditory Learning Exercises Section -->
                        <div>
                            <ul class="list-none pl-6 space-y-4">
                                <li>
                                    <strong
                                        >Listening Comprehension
                                        Activities:</strong
                                    >
                                    <p class="">
                                        <strong>Activity: </strong>Have your
                                        child listen to a story or a passage and
                                        then answer questions about it.
                                        <br /><strong>Purpose:</strong>This
                                        improves their ability to retain and
                                        comprehend spoken information.
                                    </p>
                                </li>
                                <li>
                                    <strong>Oral Presentations:</strong>
                                    <p class="">
                                        <strong>Activity: </strong>Encourage
                                        your child to prepare and deliver oral
                                        presentations on topics they are
                                        studying. <br /><strong
                                            >Purpose: </strong
                                        >This enhances their verbal
                                        communication skills and helps them
                                        organise their thoughts.
                                    </p>
                                </li>
                                <div class="flex justify-center items-center">
                                    <img
                                        class="w-90 h-auto object-contain"
                                        alt=""
                                    />
                                </div>
                                <li>
                                    <strong>Group Discussions:</strong>
                                    <p class="">
                                        <strong>Activity: </strong>Organise
                                        group discussions or debates on various
                                        topics. Encourage your child to
                                        participate actively. <br /><strong
                                            >Purpose:</strong
                                        >This helps them articulate their ideas
                                        and engage with different perspectives.
                                    </p>
                                </li>
                                <li>
                                    <strong>Storytelling:</strong>
                                    <p class="">
                                        <strong>Activity: </strong>Encourage
                                        your child to tell stories, either from
                                        their imagination or based on books
                                        they’ve read. <br /><strong
                                            >Purpose: </strong
                                        >Storytelling improves their verbal
                                        expression and creativity.
                                    </p>
                                </li>
                                <li>
                                    <strong>Rhymes and Mnemonics:</strong>
                                    <p class="">
                                        <strong>Activity: </strong>Use rhymes,
                                        songs, and mnemonic devices to help your
                                        child remember facts and concepts.
                                        <br /><strong>Purpose:</strong>This
                                        leverages their auditory strengths to
                                        enhance memory retention.
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-90 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/14.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Report 2 Auditory _ Kinesthethic Blend -->

        <div v-if="style == 'Auditory/Kinesthethic'">
            <!-- Content for Report 2 -->
            <div class="p-6">
                <div class="row">
                    <h2 class="text-md font-bold mb-4">
                        Blended Learning Exercises
                    </h2>
                    <p class="">
                        To reinforce your child’s learning, engaging them in
                        exercises that blend auditory and kinaesthetic elements
                        can greatly enhance their retention and understanding of
                        new material. Here are some practical activities
                        tailored to your child’s blended learning style:
                    </p>
                    <div class="col-6">
                        <section class="mb-8">
                            <div class="mt-4">
                                <ul class="list-none pl-6 space-y-4 pink-ul">
                                    <li>
                                        <span class="font-semibold"
                                            >Listen and Build:</span
                                        >
                                        <p class="mt-2">
                                            <strong>Activity: </strong>Play an
                                            audio recording or podcast on a
                                            specific topic while your child
                                            builds a related model or structure.
                                        </p>
                                        <p class="mt-2">
                                            <strong>Purpose: </strong>This
                                            allows your child to process
                                            information through listening while
                                            staying physically active, helping
                                            them retain the material.
                                        </p>
                                    </li>
                                    <li>
                                        <span class="font-semibold"
                                            >Role-Playing with Verbal
                                            Instructions:</span
                                        >
                                        <p class="mt-2">
                                            <strong>Activity: </strong>Have your
                                            child role-play or act out scenarios
                                            based on what they hear in stories,
                                            lessons, or verbal instructions.
                                        </p>
                                        <p class="mt-2">
                                            <strong>Purpose: </strong>This
                                            encourages both active listening and
                                            physical engagement, making the
                                            learning experience more interactive
                                            and memorable.
                                        </p>
                                    </li>
                                    <div
                                        class="flex justify-center items-center"
                                    >
                                        <img
                                            class="w-90 h-auto object-contain"
                                            alt=""
                                        />
                                    </div>
                                    <li>
                                        <span class="font-semibold"
                                            >Listen to Instructions and Complete
                                            a Physical Task:</span
                                        >
                                        <p class="mt-2">
                                            <strong>Activity: </strong>Provide
                                            verbal instructions for a physical
                                            task, such as assembling a puzzle or
                                            building a model, and ask your child
                                            to follow the steps based on what
                                            they hear.
                                        </p>
                                        <p class="mt-2">
                                            <strong>Purpose: </strong>This
                                            strengthens their ability to follow
                                            auditory cues while engaging in
                                            hands-on learning.
                                        </p>
                                    </li>
                                    <li>
                                        <span class="font-semibold"
                                            >Kinaesthetic Storytelling:</span
                                        >
                                        <p class="mt-2">
                                            <strong>Activity: </strong>Ask your
                                            child to listen to a story or
                                            audiobook and then physically act
                                            out or create a scene from the story
                                            using props or building materials.
                                        </p>
                                        <p class="mt-2">
                                            <strong>Purpose: </strong>This
                                            combines auditory learning with
                                            physical creativity, helping your
                                            child understand and remember the
                                            story more effectively.
                                        </p>
                                    </li>
                                    <li>
                                        <span class="font-semibold"
                                            >Music and Movement Learning:</span
                                        >
                                        <p class="mt-2">
                                            <strong>Activity: </strong>Use
                                            rhythmic learning by playing music
                                            while your child performs tasks like
                                            counting, spelling, or learning
                                            sequences through movement.
                                        </p>
                                        <p class="mt-2">
                                            <strong>Purpose: </strong>Engaging
                                            with music and physical movement
                                            enhances their retention of
                                            information through rhythm and
                                            action.
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-90 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/14.svg'"
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
                    </div>
                </div>
                <ul class="list-none p-6 pink-ul">
                    <li>
                        <span class="font-semibold"
                            >Audio-Driven Projects:</span
                        >
                        <p class="mt-2">
                            <strong>Activity: </strong>Provide your child with
                            verbal instructions or an audio guide for a project,
                            such as creating a science experiment or art
                            project.
                        </p>
                        <p class="mt-2">
                            <strong>Purpose: </strong>This allows them to absorb
                            information through listening while following the
                            instructions physically, reinforcing the learning
                            process.
                        </p>
                    </li>
                    <li>
                        <span class="font-semibold"
                            >Group Discussions with Hands-On Work:</span
                        >
                        <p class="mt-2">
                            <strong>Activity: </strong>Organise group
                            discussions where your child can talk through ideas
                            while working on collaborative hands-on tasks.
                        </p>
                        <p class="mt-2">
                            <strong>Purpose: </strong>This activity helps your
                            child process information verbally while staying
                            physically engaged, combining both auditory and
                            kinaesthetic learning.
                        </p>
                    </li>
                </ul>

            </div>
        </div>

        <!-- Report 3 Auditory _ Reading & Writing Blend-->
        <div v-if="style == 'Auditory/Reading/Writing'">
            <!-- Content for Report 3 -->
            <div class="p-6">
                <div class="row">
                    <h2 class="text-md font-semibold">
                        Blended Learning Exercises:
                    </h2>
                    <div class="col-6">
                        <!-- Blended Learning Exercises -->
                        <div class="mb-6">
                            <ul class="list-none pl-6 space-y-4 pink-ul">
                                <li>
                                    <span class="font-semibold"
                                        >Listen to a Podcast and Write a
                                        Summary:</span
                                    >
                                    <p class="mt-2">
                                        <strong>Activity: </strong> Have your
                                        child listen to an educational podcast
                                        or audio lesson and write a summary of
                                        the key points.
                                    </p>
                                    <p class="mt-2">
                                        <strong>Purpose: </strong> This allows
                                        them to engage with auditory information
                                        and reinforce their understanding
                                        through writing.
                                    </p>
                                </li>
                                <li>
                                    <span class="font-semibold"
                                        >Read Aloud and Take Notes:</span
                                    >
                                    <p class="mt-2">
                                        <strong>Activity: </strong> Encourage
                                        your child to read aloud from a textbook
                                        or story and take notes on the main
                                        ideas.
                                    </p>
                                    <p class="mt-2">
                                        <strong>Purpose: </strong> Reading aloud
                                        reinforces auditory learning, while
                                        note-taking engages their
                                        reading/writing skills, strengthening
                                        comprehension.
                                    </p>
                                </li>
                                <div class="flex justify-center items-center">
                                    <img
                                        class="w-90 h-auto object-contain"
                                        alt=""
                                    />
                                </div>
                                <li>
                                    <span class="font-semibold"
                                        >Group Discussions Followed by Written
                                        Reflections:</span
                                    >
                                    <p class="mt-2">
                                        <strong>Activity: </strong> Engage your
                                        child in group discussions on a subject
                                        and then have them write a reflection or
                                        essay.
                                    </p>
                                    <p class="mt-2">
                                        <strong>Purpose: </strong> This
                                        combination helps them process verbal
                                        information and organise their thoughts
                                        in written form.
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-90 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/14.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                </div>
                <ul class="list-none pl-6 space-y-4 pink-ul">
                    <li>
                        <span class="font-semibold"
                            >Listen to Audiobooks While Reading Along:</span
                        >
                        <p class="mt-2">
                            <strong>Activity: </strong> Pair audiobooks with
                            written texts and have your child follow along with
                            the reading.
                        </p>
                        <p class="mt-2">
                            <strong>Purpose: </strong> Listening and reading
                            simultaneously strengthens both auditory and
                            reading/writing skills, improving overall retention.
                        </p>
                    </li>
                    <li>
                        <span class="font-semibold"
                            >Write Summaries After Listening to Lectures:</span
                        >
                        <p class="mt-2">
                            <strong>Activity: </strong> After your child listens
                            to a lecture or lesson, ask them to write a summary
                            or outline of the main points.
                        </p>
                        <p class="mt-2">
                            <strong>Purpose: </strong> This exercise reinforces
                            auditory input with written processing, making the
                            material easier to remember.
                        </p>
                    </li>
                    <li>
                        <span class="font-semibold"
                            >Record Verbal Reflections and Write
                            Transcripts:</span
                        >
                        <p class="mt-2">
                            <strong>Activity: </strong> Have your child record
                            verbal reflections on what they’ve learned, then
                            write a transcript or summary of their own words.
                        </p>
                        <p class="mt-2">
                            <strong>Purpose: </strong> This combines speaking
                            and writing, helping them process information more
                            deeply.
                        </p>
                    </li>
                    <li>
                        <span class="font-semibold"
                            >Create Written Study Guides from Audio
                            Lessons:</span
                        >
                        <p class="mt-2">
                            <strong>Activity: </strong> Encourage your child to
                            listen to an audio lesson and create a written study
                            guide or outline based on what they’ve heard.
                        </p>
                        <p class="mt-2">
                            <strong>Purpose: </strong> This activity engages
                            both auditory and writing skills, helping them
                            prepare for exams or assignments.
                        </p>
                    </li>
                </ul>


            </div>
        </div>

        <!-- Report 4 Auditory _ Visual Blend-->
        <div v-if="style == 'Auditory/Visual'">
            <!-- Content for Report 4 -->
            <div class="p-6">
                <div>
                    <h2 class="text-md font-semibold">
                        Blended Learning Exercises
                    </h2>
                    <p class="">
                        To reinforce your child’s learning, engaging them in
                        exercises that blend auditory and visual elements can
                        greatly enhance their retention and understanding of new
                        material. Here are some practical activities tailored to
                        your child’s blended learning style.
                    </p>
                </div>
                <div class="row">
                    <div class="col-6">
                        <ul class="list-none space-y-4">
                            <li>
                                <strong>Mind Mapping:</strong>
                                <br /><strong>Activity: </strong> Have your
                                child create mind maps to organise their
                                thoughts and ideas. Use colourful branches and
                                include key terms while discussing them aloud.

                                <br /><strong>Purpose: </strong>
                                This helps them visualise relationships between
                                ideas while verbally reinforcing concepts,
                                improving memory retention through both visual
                                and auditory cues.
                            </li>
                            <li>
                                <strong
                                    >Oral Presentations with Visual
                                    Aids:</strong
                                >
                                <br /><strong>Activity: </strong> Encourage your
                                child to create visual aids such as slides,
                                posters, or charts for oral presentations. They
                                can explain each visual element aloud as they
                                present. <br /><strong>Purpose: </strong>
                                Combining visual elements with verbal
                                explanations reinforces understanding and builds
                                confidence in presenting information.
                            </li>
                            <div class="flex justify-center items-center">
                                <img
                                    class="w-90 h-auto object-contain"
                                    alt=""
                                />
                            </div>
                            <li>
                                <strong
                                    >Listening to Audiobooks with Visual
                                    Summaries:</strong
                                >
                                <br /><strong>Activity: </strong> While
                                listening to an audiobook, ask your child to
                                take visual notes or create a summary using
                                charts or diagrams to represent what they hear.
                                <br /><strong>Purpose: </strong>This activity
                                helps link auditory information to visual
                                organisation, strengthening comprehension and
                                recall of material.
                            </li>
                            <li>
                                <strong
                                    >Flashcard Creation with Verbal
                                    Practice:</strong
                                >
                                <br /><strong>Activity: </strong>Create
                                flashcards with images on one side and key
                                concepts or terms on the other. Have your child
                                verbally explain the information while reviewing
                                the cards. <br /><strong>Purpose: </strong>This
                                reinforces learning through visual aids and
                                repetition while also engaging their auditory
                                learning through verbal explanation.
                            </li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-90 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/14.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                </div>
                <ul class="space-y-4">
                    <li>
                        <strong
                            >Diagram Drawing with Audio Descriptions:</strong
                        >
                        <br /><strong>Activity: </strong> Ask your child to draw
                        diagrams to explain scientific processes, historical
                        events, or mathematical concepts. Have them describe the
                        diagram aloud as they draw. <br /><strong
                            >Purpose:
                        </strong>
                        Visualising complex information while verbally
                        describing it enhances understanding and recall by
                        activating both learning styles.
                    </li>
                    <li>
                        <strong
                            >Interactive Quizzes with Visual and Audio
                            Cues:</strong
                        >
                        <br /><strong>Activity: </strong>Use online or printed
                        quizzes that feature both visual elements (such as
                        pictures or graphs) and audio questions or prompts.
                        <br /><strong>Purpose: </strong> This engages your
                        child’s auditory and visual learning, helping them
                        connect what they see and hear to strengthen retention.
                    </li>
                    <li>
                        <strong>Storytelling with Visual Props:</strong>
                        <br /><strong>Activity: </strong>Encourage your child to
                        tell stories while using visual props such as drawings,
                        objects, or flashcards to represent the key elements.
                        <br /><strong>Purpose: </strong> Combining verbal
                        storytelling with visual props makes learning more
                        dynamic and helps reinforce both listening and visual
                        comprehension.
                    </li>
                </ul>

            </div>
        </div>

        <!-- Report 5 Kinesthethic _ Auditory Blend-->
        <div v-if="style == 'Kinesthethic/Auditory'">
            <!-- Content for Report 5 -->

            <div class="p-6">
                <div class="row">
                    <h2 class="text-md font-bold mb-4">
                        Blended Learning Exercises
                    </h2>
                    <p class="mb-4">
                        To reinforce your child’s learning, engaging them in
                        exercises that blend kinaesthetic and auditory elements
                        can greatly enhance their retention and understanding of
                        new material. Here are some practical activities
                        tailored to your child’s blended learning style.
                    </p>
                    <div class="col-6">
                        <!-- Auditory Learning Exercises Section -->
                        <div>
                            <ul class="list-none pl-6 space-y-4">
                                <li>
                                    <strong>Listen and Build:</strong>
                                    <p class="">
                                        <strong>Activity: </strong>
                                        Play an audio recording or podcast on a
                                        specific topic while your child builds a
                                        related model or structure.

                                        <br /><strong>Purpose:</strong>
                                        This allows your child to process
                                        information through listening while
                                        staying physically active, helping them
                                        retain the material.
                                    </p>
                                </li>
                                <li>
                                    <strong
                                        >Role-Playing with Verbal
                                        Instructions:</strong
                                    >
                                    <p class="">
                                        <strong>Activity: </strong>
                                        Have your child role-play or act out
                                        scenarios based on what they hear in
                                        stories, lessons, or verbal
                                        instructions.

                                        <br /><strong>Purpose: </strong>
                                        This encourages both active listening
                                        and physical engagement, making the
                                        learning experience more interactive and
                                        memorable.
                                    </p>
                                </li>
                                <div class="flex justify-center items-center">
                                    <img
                                        class="w-90 h-auto object-contain"
                                        alt=""
                                    />
                                </div>
                                <li>
                                    <strong
                                        >Listen to Instructions and Complete a
                                        Physical Task:</strong
                                    >
                                    <p class="">
                                        <strong>Activity: </strong>
                                        Provide verbal instructions for a
                                        physical task, such as assembling a
                                        puzzle or building a model, and ask your
                                        child to follow the steps based on what
                                        they hear.

                                        <br /><strong>Purpose:</strong>
                                        This strengthens their ability to follow
                                        auditory cues while engaging in hands-on
                                        learning.
                                    </p>
                                </li>
                                <li>
                                    <strong>Kinaesthetic Storytelling:</strong>
                                    <p class="">
                                        <strong>Activity: </strong>
                                        Ask your child to listen to a story or
                                        audiobook and then physically act out or
                                        create a scene from the story using
                                        props or building materials.

                                        <br /><strong>Purpose: </strong>
                                        This combines auditory learning with
                                        physical creativity, helping your child
                                        understand and remember the story more
                                        effectively.
                                    </p>
                                </li>
                                <li>
                                    <strong>Music and Movement Learning</strong>
                                    <p class="">
                                        <strong>Activity: </strong>
                                        Use rhythmic learning by playing music
                                        while your child performs tasks like
                                        counting, spelling, or learning
                                        sequences through movement.

                                        <br />
                                        <strong>Purpose:</strong>
                                        Engaging with music and physical
                                        movement enhances their retention of
                                        information through rhythm and action.
                                    </p>
                                </li>
                                <li>
                                    <strong>Audio-Driven Projects</strong>
                                    <p class="">
                                        <strong>Activity: </strong>
                                        Provide your child with verbal
                                        instructions or an audio guide for a
                                        project, such as creating a science
                                        experiment or art project.

                                        <br />
                                        <strong>Purpose:</strong>
                                        This allows them to absorb information
                                        through listening while following the
                                        instructions physically, reinforcing the
                                        learning process.
                                    </p>
                                </li>
                                <li>
                                    <strong
                                        >Group Discussions with Hands-On
                                        Work</strong
                                    >
                                    <p class="">
                                        <strong>Activity: </strong>
                                        Organise group discussions where your
                                        child can talk through ideas while
                                        working on collaborative hands-on tasks.

                                        <br />
                                        <strong>Purpose:</strong>
                                        This activity helps your child process
                                        information verbally while staying
                                        physically engaged, combining both
                                        auditory and kinaesthetic learning.
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-90 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/14.svg'"
                                alt=""
                            />
                        </div>
                        <div class="flex justify-center items-center">
                            <img
                                class="w-90 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/12.svg'"
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
                <h2 class="text-md font-bold mb-4">
                    Blended Learning Exercises
                </h2>
                <p class="mb-4">
                    To reinforce your child’s learning, engaging them in
                    exercises that blend kinaesthetic and reading/writing
                    elements can greatly enhance their retention and
                    understanding of new material. Here are some practical
                    activities tailored to your child’s blended learning style:
                </p>

                <div class="row">
                    <div class="col-6">
                        <ul>
                            <li>
                                <strong
                                    >Write Instructions for Hands-On
                                    Tasks</strong
                                >
                                <p>
                                    <strong>Activity: </strong> Have your child
                                    write out instructions before starting a
                                    hands-on project, such as building a model
                                    or conducting an experiment.
                                </p>
                                <p>
                                    <strong>Purpose: </strong> This helps them
                                    organise their thoughts through writing
                                    before engaging physically with the
                                    material.
                                </p>
                            </li>
                            <li>
                                <strong
                                    >Create a Study Guide After Physical
                                    Projects</strong
                                >
                                <p>
                                    <strong>Activity: </strong> After completing
                                    a physical project, ask your child to write
                                    a study guide or summary of the steps they
                                    took.
                                </p>
                                <p>
                                    <strong>Purpose: </strong> This reinforces
                                    what they’ve learned through hands-on
                                    experience by processing it in writing.
                                </p>
                            </li>
                            <li>
                                <strong
                                    >Take Notes While Completing Physical
                                    Tasks</strong
                                >
                                <p>
                                    <strong>Activity: </strong> Encourage your
                                    child to take notes or write reflections
                                    while engaging in physical tasks like
                                    building or crafting.
                                </p>
                                <p>
                                    <strong>Purpose: </strong> This exercise
                                    combines physical activity with writing,
                                    helping them retain information and improve
                                    focus.
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-90 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/14.svg'"
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
                    <div class="col-6">
                        <ul>
                            <li>
                                <strong
                                    >Write and Follow a Step-by-Step Plan for
                                    Physical Tasks</strong
                                >
                                <p>
                                    <strong>Activity: </strong> Have your child
                                    write a step-by-step plan before starting a
                                    physical project, then follow the plan as
                                    they complete the task.
                                </p>
                                <p>
                                    <strong>Purpose: </strong> Writing the plan
                                    helps them stay organised and reinforces
                                    their understanding as they work.
                                </p>
                            </li>
                            <li>
                                <strong
                                    >Read Instructions and Perform Physical
                                    Activities</strong
                                >
                                <p>
                                    <strong>Activity: </strong> Provide written
                                    instructions for a hands-on project and have
                                    your child perform the task based on what
                                    they’ve read.
                                </p>
                                <p>
                                    <strong>Purpose: </strong> This exercise
                                    helps them process written information and
                                    apply it in a physical context.
                                </p>
                            </li>
                            <li>
                                <strong
                                    >Create Visual Aids to Accompany Written
                                    Reflections</strong
                                >
                                <p>
                                    <strong>Activity: </strong> After completing
                                    a physical task, have your child create a
                                    diagram or visual aid to go along with their
                                    written reflection.
                                </p>
                                <p>
                                    <strong>Purpose: </strong> This combination
                                    strengthens their ability to process
                                    information both physically and through
                                    writing.
                                </p>
                            </li>
                            <li>
                                <strong
                                    >Combine Physical Movement with Writing
                                    Tasks</strong
                                >
                                <p>
                                    <strong>Activity: </strong> Encourage your
                                    child to engage in physical activities, like
                                    pacing or using a standing desk, while
                                    writing or brainstorming ideas.
                                </p>
                                <p>
                                    <strong>Purpose: </strong> Movement helps
                                    kinaesthetic learners stay focused, making
                                    writing tasks more engaging and productive.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <!-- Report 7 Kinesthethic _ Visual Blend-->
        <div v-if="style == 'Kinesthethic/Visual'">
            <!-- Content for Report 7 -->
            <div class="p-6">
                <div class="row">
                    <h2 class="text-md font-semibold">
                        Blended Learning Exercises
                    </h2>
                    <p class="text-lg">
                        To reinforce your child’s learning, engaging them in
                        exercises that blend kinaesthetic and visual elements
                        can greatly enhance their retention and understanding of
                        new material. Here are some practical activities
                        tailored to your child’s blended learning style.
                    </p>
                    <div class="col-6">
                        <!-- Blended Learning Exercises Section -->
                        <ul class="space-y-6">
                            <li>
                                <strong>Mind Mapping and Model Building</strong>
                                <p>
                                    <strong>Activity: </strong> Have your child
                                    create a mind map on a subject they are
                                    learning, such as the water cycle, and then
                                    build a physical model representing the
                                    stages.
                                </p>
                                <p>
                                    <strong>Purpose: </strong> This combines
                                    visual organisation with hands-on
                                    construction, helping your child understand
                                    and remember complex processes through both
                                    visualisation and physical creation.
                                </p>
                            </li>

                            <li>
                                <strong>Storyboarding and Role-Playing</strong>
                                <p>
                                    <strong>Activity: </strong> Ask your child
                                    to storyboard a short story or historical
                                    event using drawings, and then act out the
                                    scenes with props or by building models of
                                    the setting.
                                </p>
                                <p>
                                    <strong>Purpose: </strong>
                                    Storyboarding engages their visual skills
                                    while role-playing or building models helps
                                    them physically interact with the material,
                                    reinforcing their understanding through
                                    active participation.
                                </p>
                            </li>

                            <li>
                                <strong>Flashcard Sorting with Movement</strong>
                                <p>
                                    <strong>Activity: </strong> Create
                                    flashcards with visual aids (such as
                                    diagrams or pictures) and have your child
                                    sort them while walking around or moving
                                    between different areas.
                                </p>
                                <p>
                                    <strong>Purpose: </strong> This activity
                                    reinforces visual memory while incorporating
                                    movement, helping your child stay engaged
                                    and energised during study sessions.
                                </p>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <strong
                                    >Diagram Drawing and Object
                                    Construction</strong
                                >
                                <p>
                                    <strong>Activity: </strong> Encourage your
                                    child to draw diagrams for scientific
                                    concepts (such as the solar system) and then
                                    build a model of the diagram using craft
                                    materials or building blocks.
                                </p>
                                <p>
                                    <strong>Purpose: </strong> This helps your
                                    child visualise abstract concepts and apply
                                    their understanding through hands-on
                                    creation, strengthening both their visual
                                    and kinaesthetic learning.
                                </p>
                            </li>

                            <li>
                                <strong
                                    >Visual Puzzle Solving with Physical
                                    Manipulation</strong
                                >
                                <p>
                                    <strong>Activity: </strong> Provide puzzles
                                    or brain teasers that involve visual
                                    problem-solving, such as a jigsaw puzzle or
                                    a physical puzzle box.
                                </p>
                                <p>
                                    <strong>Purpose: </strong> Visual puzzles
                                    challenge your child’s problem-solving
                                    skills, while the hands-on nature of the
                                    activity keeps them physically engaged and
                                    focused.
                                </p>
                            </li>
                            <li>
                                <strong>Interactive Learning Stations</strong>
                                <p>
                                    <strong>Activity: </strong> Set up learning
                                    stations around your home with visual aids
                                    at each station, along with a physical task
                                    to complete (such as assembling a model,
                                    solving a visual puzzle, or drawing a
                                    diagram)
                                </p>
                                <p>
                                    <strong>Purpose: </strong> This keeps your
                                    child moving and interacting with different
                                    learning materials, making the learning
                                    process more dynamic and enjoyable.
                                </p>
                            </li>
                            <li>
                                <strong
                                    >Visual and Kinaesthetic
                                    Storytelling</strong
                                >
                                <p>
                                    <strong>Activity: </strong> Have your child
                                    create a visual story by drawing the scenes
                                    and then acting them out using props or
                                    physical actions.
                                </p>
                                <p>
                                    <strong>Purpose: </strong> Combining
                                    storytelling with physical performance
                                    engages both their visual and kinaesthetic
                                    skills, making the learning experience more
                                    immersive and memorable.
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-90 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/14.svg'"
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

        <!-- Report 8 Kinesthethic-->
        <div v-if="style == 'Kinesthethic'">
            <!-- Content for Report 8 -->
            <div class="p-6">
                <div class="row">
                    <h2 class="text-md font-bold">
                        Kinaesthetic Learning Exercises
                    </h2>
                    <p>
                        Engaging your kinaesthetic learner in specific exercises
                        can help reinforce their strengths and improve their
                        understanding of various subjects. Here are some
                        practical activities tailored for kinaesthetic learners:
                    </p>
                    <div class="col-6">
                        <ul class="space-y-4">
                            <li>
                                <strong>Building and Construction:</strong>
                                <p>
                                    <strong>Activity: </strong> Encourage your
                                    child to build models using LEGO, blocks, or
                                    other construction materials.
                                </p>
                                <p>
                                    <strong>Purpose: </strong> This helps them
                                    understand spatial relationships and develop
                                    problem-solving skills through hands-on
                                    engagement.
                                </p>
                            </li>

                            <li>
                                <strong>Craft Projects:</strong>
                                <p>
                                    <strong>Activity: </strong> Provide
                                    materials for craft projects such as
                                    sculpting with clay, making jewellery, or
                                    creating collages.
                                </p>
                                <p>
                                    <strong>Purpose: </strong> Crafting allows
                                    kinaesthetic learners to express creativity
                                    and learn through tactile experiences.
                                </p>
                            </li>

                            <li>
                                <strong>Role-Playing Games:</strong>
                                <p>
                                    <strong>Activity: </strong> Engage in
                                    role-playing games where your child can act
                                    out scenarios related to their studies.
                                </p>
                                <p>
                                    <strong>Purpose: </strong> Role-playing
                                    helps them internalise information by
                                    physically acting it out.
                                </p>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <strong>Outdoor Exploration:</strong>
                                <p>
                                    <strong>Activity: </strong> Take your child
                                    on nature walks, hikes, or trips to the park
                                    where they can explore and learn about the
                                    environment.
                                </p>
                                <p>
                                    <strong>Purpose: </strong> Outdoor
                                    activities provide opportunities for
                                    experiential learning and physical
                                    engagement.
                                </p>
                            </li>

                            <li>
                                <strong
                                    >Interactive Science Experiments:</strong
                                >
                                <p>
                                    <strong>Activity: </strong> Conduct science
                                    experiments at home using simple materials
                                    to demonstrate scientific concepts.
                                </p>
                                <p>
                                    <strong>Purpose: </strong> Hands-on
                                    experiments help kinaesthetic learners
                                    understand scientific principles through
                                    direct experience.
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-90 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/14.svg'"
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

        <!-- Report 9 Reading & Writing _ Auditory Blend -->
        <div v-if="style == 'Reading/Writing/Auditory'">
            <!-- Content for Report 9 -->
            <div class="p-6">
                <div class="row">
                    <h2 class="text-md font-bold mb-4">
                        Blended Learning Exercises
                    </h2>
                    <p class="mb-6">
                        To reinforce your child’s learning, engaging them in
                        exercises that blend reading/writing and auditory
                        elements can greatly enhance their retention and
                        understanding of new material. Here are some practical
                        activities tailored to your child’s blended learning
                        style.
                    </p>
                    <div class="col-6">
                        <div class="space-y-4">
                            <ul class="space-y-4">
                                <li>
                                    <strong
                                        >Listen to a Podcast and Write a
                                        Summary</strong
                                    >
                                    <p>
                                        <strong>Activity: </strong> Have your
                                        child listen to an educational podcast
                                        or audio lesson and write a summary of
                                        the key points.
                                    </p>
                                    <p>
                                        <strong>Purpose: </strong> This allows
                                        them to engage with auditory information
                                        and reinforce their understanding
                                        through writing.
                                    </p>
                                </li>

                                <li>
                                    <strong>Read Aloud and Take Notes</strong>
                                    <p>
                                        <strong>Activity: </strong> Encourage
                                        your child to read aloud from a textbook
                                        or story and take notes on the main
                                        ideas.
                                    </p>
                                    <p>
                                        <strong>Purpose: </strong> Reading aloud
                                        reinforces auditory learning, while
                                        note-taking engages their
                                        reading/writing skills, strengthening
                                        comprehension.
                                    </p>
                                </li>
                                <li>
                                    <strong
                                        >Group Discussions Followed by Written
                                        Reflections</strong
                                    >
                                    <p>
                                        <strong>Activity: </strong> Engage your
                                        child in group discussions on a subject
                                        and then have them write a reflection or
                                        essay.
                                    </p>
                                    <p>
                                        <strong>Purpose: </strong> This
                                        combination helps them process verbal
                                        information and organise their thoughts
                                        in written form.
                                    </p>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <strong
                                        >Listen to Audiobooks While Reading
                                        Along</strong
                                    >
                                    <p>
                                        <strong>Activity: </strong> Pair
                                        audiobooks with written texts and have
                                        your child follow along with the
                                        reading.
                                    </p>
                                    <p>
                                        <strong>Purpose: </strong> Listening and
                                        reading simultaneously strengthens both
                                        auditory and reading/writing skills,
                                        improving overall retention.
                                    </p>
                                </li>

                                <li>
                                    <strong
                                        >Write Summaries After Listening to
                                        Lectures</strong
                                    >
                                    <p>
                                        <strong>Activity: </strong> After your
                                        child listens to a lecture or lesson,
                                        ask them to write a summary or outline
                                        of the main points.
                                    </p>
                                    <p>
                                        <strong>Purpose: </strong> This exercise
                                        reinforces auditory input with written
                                        processing, making the material easier
                                        to remember.
                                    </p>
                                </li>

                                <li>
                                    <strong
                                        >Record Verbal Reflections and Write
                                        Transcripts</strong
                                    >
                                    <p>
                                        <strong>Activity: </strong> Have your
                                        child record verbal reflections on what
                                        they’ve learned, then write a transcript
                                        or summary of their own words.
                                    </p>
                                    <p>
                                        <strong>Purpose: </strong> This combines
                                        speaking and writing, helping them
                                        process information more deeply.
                                    </p>
                                </li>

                                <li>
                                    <strong
                                        >Create Written Study Guides from Audio
                                        Lessons</strong
                                    >
                                    <p>
                                        <strong>Activity: </strong> Encourage
                                        your child to listen to an audio lesson
                                        and create a written study guide or
                                        outline based on what they’ve heard.
                                    </p>
                                    <p>
                                        <strong>Purpose: </strong> This activity
                                        engages both auditory and writing
                                        skills, helping them prepare for exams
                                        or assignments.
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-90 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/14.svg'"
                                alt=""
                            />
                        </div>
                        <div class="flex justify-center items-center">
                            <img
                                class="w-90 h-auto object-contain"
                                :src="'/images/reports-svg-images/Page21.svg'"
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
                        <h2 class="text-md font-bold mb-6">
                            Blended Learning Exercises
                        </h2>
                        <p class="mb-6">
                            To reinforce your child’s learning, engaging them in
                            exercises that blend reading/writing and
                            kinaesthetic elements can greatly enhance their
                            retention and understanding of new material. Here
                            are some practical activities tailored for your
                            child’s blended learning style:
                        </p>

                        <ul class="list-none">
                            <li>
                                <strong
                                    >Write Instructions for Hands-On
                                    Tasks:</strong
                                >
                                <p>
                                    <strong>Activity: </strong> Have your child
                                    write out instructions before starting a
                                    hands-on project, such as building a model
                                    or conducting an experiment.
                                </p>
                                <p>
                                    <strong>Purpose: </strong> This helps them
                                    organise their thoughts through writing
                                    before engaging physically with the
                                    material.
                                </p>
                            </li>
                            <li>
                                <strong
                                    >Create a Study Guide After Physical
                                    Projects:</strong
                                >
                                <p>
                                    <strong>Activity: </strong> After completing
                                    a physical project, ask your child to write
                                    a study guide or summary of the steps they
                                    took.
                                </p>
                                <p>
                                    <strong>Purpose: </strong> This reinforces
                                    what they’ve learned through hands-on
                                    experience by processing it in writing.
                                </p>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <strong
                                    >Take Notes While Completing Physical
                                    Tasks:</strong
                                >
                                <p>
                                    <strong>Activity: </strong> Encourage your
                                    child to take notes or write reflections
                                    while engaging in physical tasks like
                                    building or crafting.
                                </p>
                                <p>
                                    <strong>Purpose: </strong> This exercise
                                    combines physical activity with writing,
                                    helping them retain information and improve
                                    focus.
                                </p>
                            </li>
                            <li>
                                <strong
                                    >Write and Follow a Step-by-Step Plan for
                                    Physical Tasks:</strong
                                >
                                <p>
                                    <strong>Activity: </strong> Have your child
                                    write a step-by-step plan before starting a
                                    physical project, then follow the plan as
                                    they complete the task.
                                </p>
                                <p>
                                    <strong>Purpose: </strong> Writing the plan
                                    helps them stay organised and reinforces
                                    their understanding as they work.
                                </p>
                            </li>
                            <li>
                                <strong
                                    >Read Instructions and Perform Physical
                                    Activities:</strong
                                >
                                <p>
                                    <strong>Activity: </strong> Provide written
                                    instructions for a hands-on project and have
                                    your child perform the task based on what
                                    they’ve read.
                                </p>
                                <p>
                                    <strong>Purpose: </strong> This exercise
                                    helps them process written information and
                                    apply it in a physical context.
                                </p>
                            </li>
                            <li>
                                <strong
                                    >Create Visual Aids to Accompany Written
                                    Reflections:</strong
                                >
                                <p>
                                    <strong>Activity: </strong> After completing
                                    a physical task, have your child create a
                                    diagram or visual aid to go along with their
                                    written reflection.
                                </p>
                                <p>
                                    <strong>Purpose: </strong> This combination
                                    strengthens their ability to process
                                    information both physically and through
                                    writing.
                                </p>
                            </li>
                            <li>
                                <strong
                                    >Combine Physical Movement with Writing
                                    Tasks:</strong
                                >
                                <p>
                                    <strong>Activity: </strong> Encourage your
                                    child to engage in physical activities, like
                                    pacing or using a standing desk, while
                                    writing or brainstorming ideas.
                                </p>
                                <p>
                                    <strong>Purpose: </strong> Movement helps
                                    kinaesthetic learners stay focused, making
                                    writing tasks more engaging and productive.
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-90 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/14.svg'"
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
                                :src="'/images/reports-svg-images/Page21.svg'"
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
                <h2 class="text-md font-bold mb-4">
                    Blended Learning Exercises
                </h2>
                <p>
                    To reinforce your child’s learning, engaging them in
                    exercises that blend reading/writing and visual elements can
                    greatly enhance their retention and understanding of new
                    material. Here are some practical activities tailored to
                    your child’s blended learning style.
                </p>
                <div class="row">
                    <div class="col-6">
                        <section class="mb-6">
                            <ul class="list-inside">
                                <li class="mb-6">
                                    <strong>
                                        Mind Mapping and Written Summaries
                                    </strong>
                                    <p>
                                        <strong>Activity: </strong> Have your
                                        child create a mind map of a topic they
                                        are studying, such as a chapter from a
                                        textbook, and follow it up with a
                                        written summary of the key points.
                                    </p>
                                    <p>
                                        <strong>Purpose: </strong> This combines
                                        visual organisation with writing,
                                        helping your child process the
                                        information more effectively by using
                                        both their visual and written strengths.
                                    </p>
                                </li>
                                <li class="mb-6">
                                    <strong>
                                        Diagram Creation with Written
                                        Explanations
                                    </strong>
                                    <p>
                                        <strong>Activity: </strong> Ask your
                                        child to draw diagrams of processes or
                                        concepts they are learning, such as the
                                        water cycle or the digestive system, and
                                        write brief explanations alongside the
                                        diagrams.
                                    </p>
                                    <p>
                                        <strong>Purpose: </strong> This activity
                                        reinforces their understanding through
                                        visual representation while enhancing
                                        their comprehension with written
                                        explanations.
                                    </p>
                                </li>
                                <li class="mb-6">
                                    <strong>
                                        Reading and Annotating with Visual Aids
                                    </strong>
                                    <p>
                                        <strong>Activity: </strong> Encourage
                                        your child to read an article or chapter
                                        and annotate it with visual aids, such
                                        as drawings, symbols, or highlighting
                                        key ideas.
                                    </p>
                                    <p>
                                        <strong>Purpose: </strong> Annotating
                                        with visuals helps them break down
                                        complex text and reinforces learning
                                        through written and visual engagement.
                                    </p>
                                </li>
                                <li class="mb-6">
                                    <strong>
                                        Create a Visual Timeline with Written
                                        Descriptions
                                    </strong>
                                    <p>
                                        <strong>Activity: </strong> Have your
                                        child create a timeline of historical
                                        events or the plot of a book, adding
                                        written descriptions to each event or
                                        milestone.
                                    </p>
                                    <p>
                                        <strong>Purpose: </strong> This activity
                                        allows them to visually organise
                                        information while practising written
                                        communication, ensuring a deeper
                                        understanding of the material.
                                    </p>
                                </li>
                                <li class="mb-6">
                                    <strong>
                                        Storyboarding and Essay Writing
                                    </strong>
                                    <p>
                                        <strong>Activity: </strong> Ask your
                                        child to create a storyboard of a topic
                                        or narrative they are studying, then
                                        write an essay or report based on the
                                        storyboard.
                                    </p>
                                    <p>
                                        <strong>Purpose: </strong> This combines
                                        visual planning with written expression,
                                        helping your child organise their ideas
                                        visually before translating them into
                                        written form.
                                    </p>
                                </li>
                                <li class="mb-6">
                                    <strong>
                                        Use Flashcards with Written Definitions
                                        and Visual Cues
                                    </strong>
                                    <p>
                                        <strong>Activity: </strong> Create
                                        flashcards with visual cues on one side
                                        and written definitions or key terms on
                                        the other.
                                    </p>
                                    <p>
                                        <strong>Purpose: </strong> This activity
                                        engages both their visual memory and
                                        written processing skills, reinforcing
                                        their understanding through active
                                        recall.
                                    </p>
                                </li>
                                <li class="mb-6">
                                    <strong>
                                        Combine Visual Presentations with
                                        Written
                                    </strong>
                                    <p>
                                        <strong>Activity: </strong> Ask your
                                        child to prepare a visual presentation
                                        (such as a poster or slideshow) on a
                                        topic, followed by a written report
                                        summarising their findings.
                                    </p>
                                    <p>
                                        <strong>Purpose: </strong> This allows
                                        them to process information visually and
                                        express their understanding through
                                        writing, deepening their grasp of the
                                        subject.
                                    </p>
                                </li>
                            </ul>
                        </section>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-90 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/14.svg'"
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
            <div class="row p-6">
                <div class="col-6">
                    <!-- Content for Report 12 -->
                    <section class="mb-8">
                        <h2 class="text-md font-bold mb-4">
                            Reading/Writing Learning Exercises
                        </h2>
                        <p class="mt-4">
                            Engaging your reading/writing learner in specific
                            exercises can help reinforce their strengths and
                            improve their understanding of various subjects.
                            Here are some practical activities tailored to
                            reading/writing learners:
                        </p>
                        <ol class="list-decimal list-inside mt-4 space-y-2">
                            <li>
                                <strong>Daily Journaling:</strong>
                                <ul class="list-none pl-6 space-y-2 ml-10">
                                    <li>
                                        <strong>Activity: </strong> Encourage
                                        your child to keep a daily journal where
                                        they write about their thoughts,
                                        experiences, and reflections.
                                    </li>
                                    <li>
                                        <strong>Purpose: </strong> This helps
                                        them practice writing regularly and
                                        enhances their ability to express
                                        themselves in written form.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <strong>Book Reports:</strong>
                                <ul class="list-none pl-6 space-y-2 ml-10">
                                    <li>
                                        <strong>Activity: </strong> Have your
                                        child read books and write reports or
                                        summaries about them.
                                    </li>
                                    <li>
                                        <strong>Purpose: </strong> This
                                        reinforces reading comprehension and
                                        analytical skills while allowing them to
                                        practice organising and presenting
                                        information.
                                    </li>
                                </ul>
                            </li>
                            <div class="flex justify-center items-center">
                                <img
                                    class="w-90 h-auto object-contain"
                                    alt=""
                                />
                            </div>
                            <li>
                                <strong>Research Projects:</strong>
                                <ul class="list-none pl-6 space-y-2 ml-10">
                                    <li>
                                        <strong>Activity: </strong> Assign
                                        research projects on topics of interest.
                                        Your child can gather information from
                                        various written sources and create a
                                        detailed report.
                                    </li>
                                    <li>
                                        <strong>Purpose: </strong> This enhances
                                        their research skills and their ability
                                        to synthesise and present information.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <strong>Creative Writing:</strong>
                                <ul class="list-none pl-6 space-y-2 ml-10">
                                    <li>
                                        <strong>Activity: </strong> Encourage
                                        creative writing activities such as
                                        story writing, poetry, or creating their
                                        own books.
                                    </li>
                                    <li>
                                        <strong>Purpose: </strong> Creative
                                        writing stimulates imagination and
                                        improves writing skills.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <strong>Interactive Reading Activities:</strong>
                                <ul class="list-none pl-6 space-y-2 ml-10">
                                    <li>
                                        <strong>Activity: </strong> Use
                                        interactive reading activities like
                                        reading aloud, discussing books, and
                                        annotating texts.
                                    </li>
                                    <li>
                                        <strong>Purpose: </strong> These
                                        activities improve comprehension and
                                        critical thinking skills.
                                    </li>
                                </ul>
                            </li>
                        </ol>
                    </section>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-90 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/14.svg'"
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

        <!-- Report 13 Visual _ Auditory Blend-->
        <div v-if="style == 'Visual/Auditory'">
            <!-- Content for Report 13 -->
            <div class="row p-6">
                <div class="col-6">
                    <section class="mb-8">
                        <h2 class="text-md font-bold mb-4">
                            Blended Learning Exercises
                        </h2>
                        <p class="mt-4">
                            To reinforce your child’s learning, engaging them in
                            exercises that blend visual and auditory elements
                            can greatly enhance their retention and
                            understanding of new material. Here are some
                            practical activities tailored to your child’s
                            blended learning style.
                        </p>
                        <ol class="va-tips">
                            <li>
                                <strong>Mind Mapping</strong><br /><strong
                                    >Activity:</strong
                                >Have your child create mind maps to organise
                                their thoughts and ideas. Use colourful branches
                                and include key terms while discussing them
                                aloud.<br /><strong>Purpose: </strong>This helps
                                them visualise relationships between ideas while
                                verbally reinforcing concepts, improving memory
                                retention through both visual and auditory cues.
                            </li>
                            <li>
                                <strong
                                    >Oral Presentations with Visual Aids</strong
                                ><br /><strong>Activity: </strong>Encourage your
                                child to create visual aids such as slides,
                                posters, or charts for oral presentations. They
                                can explain each visual element aloud as they
                                present.<br /><strong>Purpose:</strong>Combining
                                visual elements with verbal explanations
                                reinforces understanding and builds confidence
                                in presenting information.
                            </li>
                            <div class="flex justify-center items-center">
                                <img
                                    class="w-90 h-auto object-contain"
                                    alt=""
                                />
                            </div>
                            <li>
                                <strong
                                    >Listening to Audiobooks with Visual
                                    Summaries</strong
                                ><br /><strong>Activity: </strong>While
                                listening to an audiobook, ask your child to
                                take visual notes or create a summary using
                                charts or diagrams to represent what they
                                hear.<br /><strong>Purpose: </strong>This
                                activity helps link auditory information to
                                visual organisation, strengthening comprehension
                                and recall of material.
                            </li>
                            <li>
                                <strong
                                    >Flashcard Creation with Verbal
                                    Practice</strong
                                ><br /><strong>Activity: </strong>Create
                                flashcards with images on one side and key
                                concepts or terms on the other. Have your child
                                verbally explain the information while reviewing
                                the cards.<br /><strong>Purpose: </strong>This
                                reinforces learning through visual aids and
                                repetition while also engaging their auditory
                                learning through verbal explanation.
                            </li>
                            <li>
                                <strong
                                    >Diagram Drawing with Audio
                                    Descriptions</strong
                                ><br /><strong>Activity: </strong>Ask your child
                                to draw diagrams to explain scientific
                                processes, historical events, or mathematical
                                concepts. Have them describe the diagram aloud
                                as they draw.<br /><strong>Purpose: </strong
                                >Visualising complex information while verbally
                                describing it enhances understanding and recall
                                by activating both learning styles.
                            </li>
                            <li>
                                <strong
                                    >Interactive Quizzes with Visual and Audio
                                    Cues</strong
                                ><br /><strong>Activity: </strong>Use online or
                                printed quizzes that feature both visual
                                elements (such as pictures or graphs) and audio
                                questions or prompts.<br /><strong
                                    >Purpose: </strong
                                >This engages your child’s auditory and visual
                                learning, helping them connect what they see and
                                hear to strengthen retention.
                            </li>
                            <li>
                                <strong>Storytelling with Visual Props</strong
                                ><br /><strong>Activity: </strong>Encourage your
                                child to tell stories while using visual props
                                such as drawings, objects, or flashcards to
                                represent the key elements.<br /><strong
                                    >Purpose:</strong
                                >
                                Combining verbal storytelling with visual props
                                makes learning more dynamic and helps reinforce
                                both listening and visual comprehension.
                            </li>
                        </ol>
                    </section>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-90 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/14.svg'"
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
                <div class="col-6">
                    <section class="mb-8">
                        <h2 class="text-md font-bold mb-4">
                            Blended Learning Exercises
                        </h2>
                        <p class="mt-4">
                            To reinforce your child’s learning, engaging them in
                            exercises that blend visual and kinaesthetic
                            elements can greatly enhance their retention and
                            understanding of new material. Here are some
                            practical activities tailored for your child’s
                            blended learning style.
                        </p>
                        <ol class="vk-tips">
                            <li>
                                <strong>Mind Mapping and Model Building</strong
                                ><br /><strong>Activity: </strong> Have your
                                child create a mind map on a subject they are
                                learning, such as the water cycle, and then
                                build a physical model representing the
                                stages.<br /><strong>Purpose:</strong>
                                This combines visual organisation with hands-on
                                construction, helping your child understand and
                                remember complex processes through both
                                visualisation and physical creation.
                            </li>
                            <li>
                                <strong>Storyboarding and Role-Playing</strong
                                ><br /><strong>Activity: </strong> Ask your
                                child to storyboard a short story or historical
                                event using drawings, and then act out the
                                scenes with props or by building models of the
                                setting.<br /><strong>Purpose:</strong>
                                Storyboarding engages their visual skills while
                                role-playing or building models helps them
                                physically interact with the material,
                                reinforcing their understanding through active
                                participation.
                            </li>
                            <div class="flex justify-center items-center">
                                <img
                                    class="w-90 h-auto object-contain"
                                    alt=""
                                />
                            </div>
                            <li>
                                <strong>Flashcard Sorting with Movement</strong
                                ><br /><strong>Activity: </strong> Create
                                flashcards with visual aids (such as diagrams or
                                pictures) and have your child sort them while
                                walking around or moving between different
                                areas.<br /><strong>Purpose:</strong>
                                This activity reinforces visual memory while
                                incorporating movement, helping your child stay
                                engaged and energised during study sessions.
                            </li>
                            <li>
                                <strong
                                    >Diagram Drawing and Object
                                    Construction</strong
                                ><br /><strong>Activity: </strong> Encourage
                                your child to draw diagrams for scientific
                                concepts (such as the solar system) and then
                                build a model of the diagram using craft
                                materials or building blocks.<br /><strong
                                    >Purpose:</strong
                                >
                                This helps your child visualise abstract
                                concepts and apply their understanding through
                                hands-on creation, strengthening both their
                                visual and kinaesthetic learning.
                            </li>
                            <li>
                                <strong
                                    >Visual Puzzle Solving with Physical
                                    Manipulation</strong
                                ><br /><strong>Activity: </strong> Provide
                                puzzles or brain teasers that involve visual
                                problem-solving, such as a jigsaw puzzle or a
                                physical puzzle box.<br /><strong
                                    >Purpose:</strong
                                >
                                Visual puzzles challenge your child’s
                                problem-solving skills, while the hands-on
                                nature of the activity keeps them physically
                                engaged and focused.
                            </li>
                            <li>
                                <strong>Interactive Learning Stations</strong
                                ><br /><strong>Activity: </strong> Set up
                                learning stations around your home with visual
                                aids at each station, along with a physical task
                                to complete (such as assembling a model, solving
                                a visual puzzle, or drawing a diagram).<br /><strong
                                    >Purpose:</strong
                                >
                                This keeps your child moving and interacting
                                with different learning materials, making the
                                learning process more dynamic and enjoyable.
                            </li>
                            <li>
                                <strong
                                    >Visual and Kinaesthetic
                                    Storytelling</strong
                                ><br /><strong>Activity: </strong> Have your
                                child create a visual story by drawing the
                                scenes and then acting them out using props or
                                physical actions.<br /><strong>Purpose:</strong>
                                Combining storytelling with physical performance
                                engages both their visual and kinaesthetic
                                skills, making the learning experience more
                                immersive and memorable.
                            </li>
                        </ol>
                    </section>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-90 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/14.svg'"
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

        <!-- Report 15 Visual _ Reading & Writing-->
        <div v-if="style == 'Visual/Reading/Writing'">
            <!-- Content for Report 15 -->
            <div class="row p-6">
                <div class="col-6">
                    <section class="mb-8">
                        <h2 class="text-md font-bold mb-4">
                            Blended Learning Exercises
                        </h2>
                        <p class="mt-4">
                            To reinforce your child’s learning, engaging them in
                            exercises that blend visual and reading/writing
                            elements can greatly enhance their retention and
                            understanding of new material. Here are some
                            practical activities tailored for your child’s
                            blended learning style.
                        </p>
                        <ol class="vrw-tips">
                            <li>
                                <strong
                                    >Mind Mapping and Written Summaries</strong
                                ><br /><strong>Activity: </strong> Have your
                                child create a mind map of a topic they are
                                studying, such as a chapter from a textbook, and
                                follow it up with a written summary of the key
                                points.<br /><strong>Purpose:</strong>
                                This combines visual organisation with writing,
                                helping your child process the information more
                                effectively by using both their visual and
                                written strengths.
                            </li>
                            <li>
                                <strong
                                    >Diagram Creation with Written
                                    Explanations</strong
                                ><br /><strong>Activity: </strong> Ask your
                                child to draw diagrams of processes or concepts
                                they are learning, such as the water cycle or
                                the digestive system, and write brief
                                explanations alongside the diagrams.<br /><strong
                                    >Purpose:
                                </strong>
                                This activity reinforces their understanding
                                through visual representation while enhancing
                                their comprehension with written explanations.
                            </li>
                            <div class="flex justify-center items-center">
                                <img
                                    class="w-90 h-auto object-contain"
                                    alt=""
                                />
                            </div>
                            <li>
                                <strong
                                    >Reading and Annotating with Visual
                                    Aids</strong
                                ><br /><strong>Activity: </strong> Encourage
                                your child to read an article or chapter and
                                annotate it with visual aids, such as drawings,
                                symbols, or highlighting key ideas.<br /><strong
                                    >Purpose:</strong
                                >
                                Annotating with visuals helps them break down
                                complex text and reinforces learning through
                                written and visual engagement.
                            </li>
                            <li>
                                <strong
                                    >Create a Visual Timeline with Written
                                    Descriptions</strong
                                ><br /><strong>Activity: </strong> Have your
                                child create a timeline of historical events or
                                the plot of a book, adding written descriptions
                                to each event or milestone.<br /><strong
                                    >Purpose:
                                </strong>
                                This activity allows them to visually organise
                                information while practising written
                                communication, ensuring a deeper understanding
                                of the material.
                            </li>
                            <li>
                                <strong>Storyboarding and Essay Writing</strong
                                ><br /><strong>Activity: </strong> Ask your
                                child to create a storyboard of a topic or
                                narrative they are studying, then write an essay
                                or report based on the storyboard.<br /><strong
                                    >Purpose:
                                </strong>
                                This combines visual planning with written
                                expression, helping your child organise their
                                ideas visually before translating them into
                                written form.
                            </li>
                            <li>
                                <strong
                                    >Use Flashcards with Written Definitions and
                                    Visual Cues</strong
                                ><br /><strong>Activity: </strong> Create
                                flashcards with visual cues on one side and
                                written definitions or key terms on the
                                other.<br /><strong>Purpose:</strong>
                                This activity engages both their visual memory
                                and written processing skills, reinforcing their
                                understanding through active recall.
                            </li>
                            <li>
                                <strong
                                    >Combine Visual Presentations with Written
                                    Reports</strong
                                ><br /><strong>Activity: </strong> Ask your
                                child to prepare a visual presentation (such as
                                a poster or slideshow) on a topic, followed by a
                                written report summarising their findings.<br /><strong
                                    >Purpose:</strong
                                >
                                This allows them to process information visually
                                and express their understanding through writing,
                                deepening their grasp of the subject.
                            </li>
                        </ol>
                    </section>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-90 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/14.svg'"
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
            <div class="row p-6">
                <div class="col-6">
                    <section class="mb-8">
                        <h2 class="text-md font-bold mb-4">
                            Visual Learning Exercises
                        </h2>
                        <p class="mt-4">
                            Engaging your visual learner in specific exercises
                            can help reinforce their strengths and improve their
                            understanding of various subjects. Here are some
                            practical activities tailored to visual learners:
                        </p>
                        <ol class="vrw-tips">
                            <li>
                                <strong>Mind Mapping:</strong>
                                <ul class="list-none pl-6 space-y-2 ml-8">
                                    <li>
                                        <strong>Activity: </strong> Have your
                                        child create mind maps to organise their
                                        thoughts and ideas. Use colourful
                                        branches to represent different topics
                                        or concepts.
                                    </li>
                                    <li>
                                        <strong>Purpose: </strong> This helps
                                        them visualise relationships between
                                        ideas and improves memory retention.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <strong>Diagram Drawing:</strong>
                                <ul class="list-none pl-6 space-y-2 ml-8">
                                    <li>
                                        <strong>Activity: </strong> Encourage
                                        your child to draw diagrams to explain
                                        scientific processes, historical events,
                                        or mathematical concepts.
                                    </li>
                                    <li>
                                        <strong>Purpose: </strong> Visualising
                                        complex information helps in better
                                        understanding and recall.
                                    </li>
                                </ul>
                            </li>
                            <div class="flex justify-center items-center">
                                <img
                                    class="w-90 h-auto object-contain"
                                    alt=""
                                />
                            </div>
                            <li>
                                <strong>Flashcard Creation:</strong>
                                <ul class="list-none pl-6 space-y-2 ml-8">
                                    <li>
                                        <strong>Activity: </strong> Create
                                        flashcards with images on one side and
                                        key information on the other. Use these
                                        flashcards for subjects like vocabulary,
                                        math facts, or historical dates.
                                    </li>
                                    <li>
                                        <strong>Purpose: </strong> This
                                        reinforces learning through visual aids
                                        and repetition.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <strong>Storyboarding:</strong>
                                <ul class="list-none pl-6 space-y-2 ml-8">
                                    <li>
                                        <strong>Activity: </strong> Have your
                                        child create storyboards to summarise
                                        stories, plan writing projects, or
                                        outline presentations.
                                    </li>
                                    <li>
                                        <strong>Purpose: </strong> Storyboarding
                                        helps in organising thoughts and
                                        presenting information visually.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <strong>Educational Apps:</strong>
                                <ul class="list-none pl-6 space-y-2 ml-8">
                                    <li>
                                        <strong>Activity: </strong> Use
                                        educational apps and software that
                                        incorporate visual learning techniques.
                                        Many apps offer interactive and visually
                                        rich content for various subjects.
                                    </li>
                                    <li>
                                        <strong>Purpose: </strong> These digital
                                        tools engage visual learners and make
                                        learning fun and interactive.
                                    </li>
                                </ul>
                            </li>
                        </ol>
                    </section>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-90 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/14.svg'"
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
    name: "PracticalExercisesFirst",
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
li > div > h2,
div.space-y-2 > h4.font-medium {
    color: rgb(36, 168, 250);
    font-weight: bold;
    font-size: 19px;
}

div.col-6 > h4.font-medium,
li > div > h4,
li > p > strong,
li > strong,
div.space-y-2 > h4.font-medium {
    color: rgb(36, 168, 250);
    font-weight: bold;
    color: #fa25c4;
    /* font-size: 19px; */
}

.pink-ul > li > span {
    font-weight: bold;
    color: #fa25c4;
    font-size: 19px;
}

h2,
.p-6 > .row > .col-6 > h2 {
    color: rgb(55 48 163);
    font-weight: bold !important;
}

.va-tips > li,
.vk-tips > li,
.vrw-tips > li {
    margin-top: 17px;
}

/* Add these new mobile responsive styles */
@media (max-width: 768px) {
    .row {
        display: flex;
        flex-direction: column;
    }

    .row:nth-of-type(2) {
        /* flex-direction: column-reverse; */
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
