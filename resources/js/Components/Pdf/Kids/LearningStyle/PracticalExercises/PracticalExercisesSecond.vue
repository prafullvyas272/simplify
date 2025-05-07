<template>
    <div class="p-6">
        <div class="container mx-auto p-4">
            <h1 class="font-bold mb-4 text-center">
            </h1>
        </div>

        <!-- Report 1 Auditory -->
        <div v-if="style == 'Auditory'">
            <!-- Content for Report 1 -->
            <div class="p-6">


                <div class="row">
                    <h2 class="text-md font-bold mb-4">Creative Projects</h2>
                    <p class="mb-4">
                        Engaging in creative projects allows auditory learners
                        to express themselves and apply their learning in
                        innovative ways. Here are some project ideas:
                    </p>
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-90 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/2.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="col-6">
                        <!-- Creative Projects Section -->
                        <div>
                            <ul class="list-none pl-6 space-y-4">
                                <li>
                                    <strong>Podcast Creation:</strong>
                                    <p class="">
                                        <strong>Activity: </strong>Encourage
                                        your child to create their own podcast
                                        on a topic they are passionate about.
                                        They can write scripts, record, and edit
                                        episodes. <br /><strong
                                            >Purpose: </strong
                                        >This combines verbal creativity with
                                        technical skills, making learning
                                        interactive and fun.
                                    </p>
                                </li>
                                <li>
                                    <strong>Musical Projects:</strong>
                                    <p class="">
                                        <strong>Activity: </strong>Have your
                                        child create songs or musical
                                        compositions related to their studies.
                                        They can write lyrics that summarise key
                                        concepts. <br /><strong>Purpose:</strong
                                        >This leverages their love for music and
                                        helps reinforce learning through
                                        auditory means.
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <ul class="list-none pl-6 space-y-4 pink-ul">
                        <li>
                            <strong>Audio Books and Narration:</strong>
                            <p class="">
                                <strong>Activity: </strong>Encourage your child
                                to record themselves reading books aloud. They
                                can also create their own audiobooks by
                                narrating stories they’ve written. <br /><strong
                                    >Purpose: </strong
                                >This enhances their reading and verbal skills
                                while allowing them to practice expression and
                                pacing.
                            </p>
                        </li>
                        <li>
                            <strong>Debate Club:</strong>
                            <p class="">
                                <strong>Activity: </strong>Start a small debate
                                club where your child and their friends can
                                discuss and debate various topics. Provide them
                                with guidelines and encourage structured
                                arguments. <br /><strong>Purpose:</strong>This
                                helps improve their critical thinking,
                                listening, and verbal expression skills.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Report 2 Auditory _ Kinesthethic Blend -->

        <div v-if="style == 'Auditory/Kinesthethic'">
            <!-- Content for Report 2 -->
            <div class="p-6">


                <div class="row">
                    <h2 class="text-md font-bold mb-4">Creative Projects</h2>
                    <p class="">
                        These creative projects will help your child combine
                        their auditory and kinaesthetic learning preferences,
                        allowing them to explore subjects in engaging and
                        innovative ways:
                    </p>
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
                                :src="'/images/reports-svg-images/Kids/LearningStyles/14.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="col-6">
                        <section class="mb-8">
                            <div class="mt-4 space-y-6">
                                <ul class="list-none pl-6 space-y-4 pink-ul">
                                    <li>
                                        <span class="font-semibold"
                                            >Create an Audio Story with Physical
                                            Props:</span
                                        >
                                        <p class="mt-2">
                                            <strong>Activity: </strong>Have your
                                            child create and record an audio
                                            story or podcast and use props to
                                            act out or build scenes from the
                                            story.
                                        </p>
                                        <p class="mt-2">
                                            <strong>Purpose: </strong>This
                                            project allows your child to combine
                                            verbal creativity with hands-on
                                            interaction, helping them express
                                            their ideas through both listening
                                            and doing.
                                        </p>
                                    </li>
                                    <li>
                                        <span class="font-semibold"
                                            >Build a Model Based on Audio
                                            Instructions:</span
                                        >
                                        <p class="mt-2">
                                            <strong>Activity: </strong>Provide
                                            your child with an audio guide or
                                            podcast that explains how to build a
                                            model, such as a structure or
                                            scientific process.
                                        </p>
                                        <p class="mt-2">
                                            <strong>Purpose: </strong>This
                                            combines auditory learning with
                                            hands-on construction, allowing your
                                            child to follow verbal instructions
                                            while actively building something.
                                        </p>
                                    </li>
                                    <li>
                                        <span class="font-semibold"
                                            >Develop a Role-Playing
                                            Performance:</span
                                        >
                                        <p class="mt-2">
                                            <strong>Activity: </strong>Ask your
                                            child to write and perform a
                                            role-playing script based on a
                                            lesson or story they’ve heard. They
                                            can create props or build a stage to
                                            act out the story.
                                        </p>
                                        <p class="mt-2">
                                            <strong>Purpose: </strong>This
                                            project engages both auditory and
                                            physical skills, as your child must
                                            listen, create, and physically act
                                            out what they’ve learned.
                                        </p>
                                    </li>
                                    <li>
                                        <span class="font-semibold"
                                            >Create a Soundtrack for a Hands-On
                                            Project:</span
                                        >
                                        <p class="mt-2">
                                            <strong>Activity: </strong>Encourage
                                            your child to create a custom
                                            soundtrack or playlist that
                                            complements a hands-on project, such
                                            as building, painting, or crafting.
                                        </p>
                                        <p class="mt-2">
                                            <strong>Purpose: </strong>Listening
                                            to music or sound effects while
                                            working on a physical project
                                            enhances focus and reinforces the
                                            connection between auditory and
                                            kinaesthetic learning.
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                    <ul class="p-6 list-none pl-6 pink-ul">
                        <li>
                            <span class="font-semibold"
                                >Record an Educational Podcast:</span
                            >
                            <p class="mt-2">
                                <strong>Activity: </strong>Have your child
                                research a topic and create an educational
                                podcast episode, complete with audio clips and
                                explanations. They can also build a visual
                                display or physical model to support their
                                podcast.
                            </p>
                            <p class="mt-2">
                                <strong>Purpose: </strong>This project helps
                                them process information through both auditory
                                and kinaesthetic methods, allowing them to speak
                                about a topic while physically engaging with
                                related materials.
                            </p>
                        </li>
                        <li>
                            <span class="font-semibold"
                                >Act Out Historical or Scientific Events:</span
                            >
                            <p class="mt-2">
                                <strong>Activity: </strong>Ask your child to
                                listen to a history or science lesson and then
                                act out the events using costumes, props, or
                                models they create.
                            </p>
                            <p class="mt-2">
                                <strong>Purpose: </strong>This combines
                                listening with physical creativity, helping your
                                child better understand and retain the material
                                by actively participating in it.
                            </p>
                        </li>
                        <li>
                            <span class="font-semibold"
                                >Build a Learning Station with Audio
                                Guides:</span
                            >
                            <p class="mt-2">
                                <strong>Activity: </strong>Create different
                                learning stations where your child can listen to
                                audio instructions or lessons and then complete
                                a physical task at each station, such as
                                building, drawing, or solving a puzzle.
                            </p>
                            <p class="mt-2">
                                <strong>Purpose: </strong>This project
                                encourages both listening and physical
                                engagement, making the learning experience more
                                interactive and fun.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Report 3 Auditory _ Reading & Writing Blend-->
        <div v-if="style == 'Auditory/Reading/Writing'">
            <!-- Content for Report 3 -->
            <div class="p-6">


                <div class="row">
                    <h2 class="text-md font-semibold">Creative Projects:</h2>
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-90 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/2.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="col-6">
                        <!-- Creative Projects -->
                        <div class="mb-6">
                            <ul class="list-none pl-6 space-y-4 pink-ul">
                                <li>
                                    <span class="font-semibold"
                                        >Write and Record an Educational
                                        Podcast:</span
                                    >
                                    <p class="mt-2">
                                        <strong>Activity: </strong> Have your
                                        child research a topic and write a
                                        script, then record their own
                                        educational podcast.
                                    </p>
                                    <p class="mt-2">
                                        <strong>Purpose: </strong> This project
                                        allows them to explore a subject through
                                        writing and verbal expression, combining
                                        their reading/writing and auditory
                                        skills.
                                    </p>
                                </li>
                                <li>
                                    <span class="font-semibold"
                                        >Create a Research Paper with Audio
                                        Elements:</span
                                    >
                                    <p class="mt-2">
                                        <strong>Activity: </strong> Encourage
                                        your child to write a research paper on
                                        a subject and include audio elements
                                        like interviews or sound clips.
                                    </p>
                                    <p class="mt-2">
                                        <strong>Purpose: </strong> This project
                                        merges research and writing with
                                        auditory engagement, helping your child
                                        dive deeper into a topic using multiple
                                        methods.
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <ul class="list-none pl-6 space-y-4 pink-ul">
                    <li>
                        <span class="font-semibold"
                            >Write and Perform a Radio Drama:</span
                        >
                        <p class="mt-2">
                            <strong>Activity: </strong> Ask your child to write
                            a script for a radio drama based on a historical
                            event or story, then perform and record it.
                        </p>
                        <p class="mt-2">
                            <strong>Purpose: </strong> This allows them to
                            express their ideas through writing and verbal
                            performance, combining creativity with both learning
                            styles.
                        </p>
                    </li>
                    <li>
                        <span class="font-semibold"
                            >Record Verbal Reflections and Turn Them Into
                            Essays:</span
                        >
                        <p class="mt-2">
                            <strong>Activity: </strong> Have your child record
                            verbal reflections on a subject they’ve learned,
                            then transcribe their thoughts into a written essay.
                        </p>
                        <p class="mt-2">
                            <strong>Purpose: </strong> This exercise engages
                            both auditory and written processing, helping them
                            organise and expand on their verbal ideas.
                        </p>
                    </li>

                    <li>
                        <span class="font-semibold"
                            >Write and Present an Oral Report:</span
                        >
                        <p class="mt-2">
                            <strong>Activity: </strong> Encourage your child to
                            write a detailed report on a topic of interest, then
                            present it orally.
                        </p>
                        <p class="mt-2">
                            <strong>Purpose: </strong> This combines written
                            preparation with verbal presentation, enhancing
                            their ability to express ideas through both speaking
                            and writing.
                        </p>
                    </li>
                    <li>
                        <span class="font-semibold"
                            >Create an Audiobook with Written Annotations:</span
                        >
                        <p class="mt-2">
                            <strong>Activity: </strong> Have your child create
                            an audiobook of a short story they’ve written and
                            add written annotations or notes to explain key
                            ideas.
                        </p>
                        <p class="mt-2">
                            <strong>Purpose: </strong> This allows them to blend
                            their storytelling skills with auditory and
                            reading/writing elements.
                        </p>
                    </li>
                    <li>
                        <span class="font-semibold"
                            >Develop a Visual Presentation with Written and
                            Audio Components:</span
                        >
                        <p class="mt-2">
                            <strong>Activity: </strong> Encourage your child to
                            create a slideshow or visual presentation on a
                            topic, adding written summaries and recorded audio
                            commentary.
                        </p>
                        <p class="mt-2">
                            <strong>Purpose: </strong> This project engages both
                            writing and speaking skills, allowing your child to
                            showcase their understanding of a topic creatively.
                        </p>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Report 4 Auditory _ Visual Blend-->
        <div v-if="style == 'Auditory/Visual'">
            <!-- Content for Report 4 -->
            <div class="p-6">


                <div class="row">
                    <h2 class="text-md font-semibold">Creative Projects</h2>
                    <p>
                        These creative projects will help your child combine
                        their auditory and visual learning preferences, allowing
                        them to explore subjects in engaging and innovative
                        ways.
                    </p>
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-90 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/2.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="col-6">
                        <ul class="list-none space-y-4">
                            <li>
                                <strong>Create an Educational Video:</strong>
                                <br /><strong>Activity: </strong>Have your child
                                create a short educational video on a topic of
                                their choice. They can script and narrate the
                                video while using visual elements such as
                                images, diagrams, or animations. <br /><strong
                                    >Purpose:
                                </strong>
                                This project strengthens both verbal
                                communication and visual presentation skills,
                                allowing your child to explain complex ideas
                                through multiple mediums.
                            </li>
                            <li>
                                <strong
                                    >Make a Podcast with Visual Notes:</strong
                                >
                                <br /><strong>Activity: </strong>Encourage your
                                child to create their own podcast on a subject
                                they enjoy. While recording their audio, they
                                can create visual notes or illustrations to
                                accompany the episodes. <br /><strong
                                    >Purpose: </strong
                                >This blends verbal creativity with visual
                                organisation, helping your child connect
                                auditory learning with visual reinforcement.
                            </li>
                            <li>
                                <strong
                                    >Illustrate a Story with an Audio
                                    Narration:</strong
                                >
                                <br /><strong>Activity: </strong> Have your
                                child write and illustrate a short story. Then,
                                they can record an audio narration of the story,
                                combining their verbal and visual talents.
                                <br /><strong>Purpose: </strong>This project
                                allows your child to practice both storytelling
                                and visualisation, strengthening their ability
                                to express ideas clearly.
                            </li>
                        </ul>
                    </div>
                </div>
                <ul class="space-y-4">
                    <li>
                        <strong
                            >Design a Visual Presentation with Audio
                            Commentary:</strong
                        >
                        <br /><strong>Activity: </strong>Ask your child to
                        design a presentation (using PowerPoint or poster
                        boards) and record an audio commentary explaining each
                        slide or visual element. <br /><strong
                            >Purpose:
                        </strong>
                        This project improves their ability to integrate visual
                        content with verbal explanations, reinforcing their
                        understanding of the material.
                    </li>
                    <li>
                        <strong
                            >Create Flashcards with Drawings and Verbal
                            Explanations:</strong
                        >
                        <br /><strong>Activity: </strong>Have your child create
                        flashcards for subjects they are studying. Each card can
                        feature a drawing or diagram on one side, and your child
                        can provide a verbal explanation of the concept while
                        reviewing the cards. <br /><strong>Purpose: </strong>
                        This strengthens their memory by combining visual aids
                        with verbal practice, engaging both learning styles.
                    </li>
                    <li>
                        <strong
                            >Build a Visual Timeline with a Storytelling
                            Element:</strong
                        >
                        <br /><strong>Activity: </strong>Ask your child to
                        create a visual timeline of a historical event,
                        scientific process, or book plot. As they build the
                        timeline, encourage them to verbally explain the key
                        points in chronological order. <br /><strong
                            >Purpose:
                        </strong>
                        This activity improves their ability to organise and
                        explain information, combining visual sequencing with
                        verbal articulation.
                    </li>
                    <li>
                        <strong
                            >Organise a Group Project with Visual and Verbal
                            Contributions:</strong
                        >
                        <br /><strong>Activity: </strong>Encourage your child to
                        work on a group project where they contribute both
                        visually and verbally. They can create visual displays
                        while leading discussions or explaining parts of the
                        project. <br /><strong>Purpose: </strong> This project
                        helps your child practice teamwork while using both
                        their visual and auditory strengths to communicate and
                        organise information.
                    </li>
                </ul>
            </div>
        </div>

        <!-- Report 5 Kinesthethic _ Auditory Blend-->
        <div v-if="style == 'Kinesthethic/Auditory'">
            <!-- Content for Report 5 -->

            <div class="p-6">


                <div class="row">
                    <h2 class="text-md font-bold mb-4">Creative Projects</h2>
                    <p class="mb-4">
                        These creative projects will help your child combine
                        their kinaesthetic and auditory learning preferences,
                        allowing them to explore subjects in engaging and
                        innovative ways.
                    </p>
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-90 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/2.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="col-6">
                        <!-- Creative Projects Section -->
                        <div>
                            <ul class="list-none pl-6 space-y-4">
                                <li>
                                    <strong
                                        >Create an Audio Story with Physical
                                        Props:</strong
                                    >
                                    <p class="">
                                        <strong>Activity: </strong>
                                        Have your child create and record an
                                        audio story or podcast and use props to
                                        act out or build scenes from the story.

                                        <br /><strong>Purpose: </strong>
                                        This project allows your child to
                                        combine verbal creativity with hands-on
                                        interaction, helping them express their
                                        ideas through both listening and doing.
                                    </p>
                                </li>
                                <li>
                                    <strong
                                        >Build a Model Based on Audio
                                        Instructions:</strong
                                    >
                                    <p class="">
                                        <strong>Activity: </strong>
                                        Provide your child with an audio guide
                                        or podcast that explains how to build a
                                        model, such as a structure or scientific
                                        process.

                                        <br /><strong>Purpose: </strong>
                                        This combines auditory learning with
                                        hands-on construction, allowing your
                                        child to follow verbal instructions
                                        while actively building something.
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <ul class="list-none pl-6 space-y-4 pink-ul">
                        <li>
                            <strong>Develop a Role-Playing Performance:</strong>
                            <p class="">
                                <strong>Activity: </strong>
                                Ask your child to write and perform a
                                role-playing script based on a lesson or story
                                they’ve heard. They can create props or build a
                                stage to act out the story.

                                <br /><strong>Purpose: </strong>
                                This project engages both auditory and physical
                                skills, as your child must listen, create, and
                                physically act out what they’ve learned.
                            </p>
                        </li>
                        <li>
                            <strong
                                >Create a Soundtrack for a Hands-On
                                Project:</strong
                            >
                            <p class="">
                                <strong>Activity: </strong>
                                Encourage your child to create a custom
                                soundtrack or playlist that complements a
                                hands-on project, such as building, painting, or
                                crafting.

                                <br /><strong>Purpose: </strong>
                                Listening to music or sound effects while
                                working on a physical project enhances focus and
                                reinforces the connection between auditory and
                                kinaesthetic learning.
                            </p>
                        </li>
                        <li>
                            <strong> Record an Educational Podcast:</strong>
                            <p class="">
                                <strong>Activity: </strong>
                                Have your child research a topic and create an
                                educational podcast episode, complete with audio
                                clips and explanations. They can also build a
                                visual display or physical model to support
                                their podcast.

                                <br /><strong>Purpose: </strong>
                                This project helps them process information
                                through both auditory and kinaesthetic methods,
                                allowing them to speak about a topic while
                                physically engaging with related materials.
                            </p>
                        </li>
                        <li>
                            <strong
                                >Act Out Historical or Scientific
                                Events:</strong
                            >
                            <p class="">
                                <strong>Activity: </strong>
                                Ask your child to listen to a history or science
                                lesson and then act out the events using
                                costumes, props, or models they create.

                                <br /><strong>Purpose: </strong>
                                This combines listening with physical
                                creativity, helping your child better understand
                                and retain the material by actively
                                participating in it.
                            </p>
                        </li>
                        <li>
                            <strong
                                >Build a Learning Station with Audio
                                Guides:</strong
                            >
                            <p class="">
                                <strong>Activity: </strong>
                                Create different learning stations where your
                                child can listen to audio instructions or
                                lessons and then complete a physical task at
                                each station, such as building, drawing, or
                                solving a puzzle.

                                <br /><strong>Purpose: </strong>
                                This project encourages both listening and
                                physical engagement, making the learning
                                experience more interactive and fun.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Report 6 Kinesthethic _ Reading & Writing -->
        <div v-if="style == 'Kinesthethic/Reading/Writing'">
            <!-- Content for Report 6 -->
            <div class="p-6">

                <div class="row">
                    <h2 class="text-md font-bold mb-2">Creative Projects</h2>
                    <p class="mb-4">
                        These creative projects will help your child combine
                        their kinaesthetic and reading/writing learning
                        preferences, allowing them to explore subjects in
                        engaging and innovative ways.
                    </p>
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-90 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/2.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="col-6">
                        <ul class="list-none pl-6">
                            <li>
                                <strong class="font-semibold"
                                    >Build a Model and Write a Report:</strong
                                >
                                <p class="mt-2">
                                    <strong>Activity: </strong> Have your child
                                    build a model related to a subject they’re
                                    learning (e.g., a historical landmark, a
                                    science concept), and then write a detailed
                                    report explaining the process and what they
                                    learned.
                                </p>
                                <p class="mt-2">
                                    <strong>Purpose: </strong> This project
                                    combines physical creativity with written
                                    expression, reinforcing learning through
                                    both movement and writing.
                                </p>
                            </li>
                            <li>
                                <strong class="font-semibold"
                                    >Create a How-To Guide for a Physical
                                    Task:</strong
                                >
                                <p class="mt-2">
                                    <strong>Activity: </strong> Ask your child
                                    to complete a hands-on project, like a DIY
                                    craft or experiment, and then write a
                                    step-by-step how-to guide based on the task.
                                </p>
                                <p class="mt-2">
                                    <strong>Purpose: </strong> This activity
                                    encourages them to physically engage with
                                    the material and organise their thoughts in
                                    writing.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <ul>
                            <li>
                                <strong class="font-semibold"
                                    >Design an Interactive Learning
                                    Station:</strong
                                >
                                <p class="mt-2">
                                    <strong>Activity: </strong> Have your child
                                    create a learning station with physical
                                    objects (e.g., a science experiment, art
                                    project) and write instructions or
                                    descriptions for each station.
                                </p>
                                <p class="mt-2">
                                    <strong>Purpose: </strong> This project lets
                                    them physically engage while reinforcing
                                    learning through writing detailed
                                    instructions.
                                </p>
                            </li>
                            <li>
                                <strong class="font-semibold"
                                    >Write a Story with Physical Props:</strong
                                >
                                <p class="mt-2">
                                    <strong>Activity: </strong> Encourage your
                                    child to write a story and create physical
                                    props or a diorama to accompany their
                                    narrative.
                                </p>
                                <p class="mt-2">
                                    <strong>Purpose: </strong> This combines
                                    storytelling with hands-on creativity,
                                    allowing them to express their ideas in
                                    writing and through physical representation.
                                </p>
                            </li>

                            <li>
                                <strong class="font-semibold"
                                    >Create a Journal to Document Hands-On
                                    Learning:</strong
                                >
                                <p class="mt-2">
                                    <strong>Activity: </strong> Have your child
                                    keep a journal where they document their
                                    hands-on activities, including descriptions
                                    and reflections on what they’ve learned.
                                </p>
                                <p class="mt-2">
                                    <strong>Purpose: </strong> This activity
                                    helps them reflect on physical experiences
                                    and reinforce understanding through writing.
                                </p>
                            </li>
                            <li>
                                <strong class="font-semibold"
                                    >Build a Puzzle or Game and Write the
                                    Rules:</strong
                                >
                                <p class="mt-2">
                                    <strong>Activity: </strong> Have your child
                                    design and build a physical puzzle or game,
                                    then write detailed instructions or rules
                                    for playing it.
                                </p>
                                <p class="mt-2">
                                    <strong>Purpose: </strong> This combines
                                    problem-solving and creativity with writing,
                                    allowing them to engage both kinaesthetic
                                    and writing skills.
                                </p>
                            </li>
                            <li>
                                <strong class="font-semibold"
                                    >Research and Build a Physical Display with
                                    Written Information:</strong
                                >
                                <p class="mt-2">
                                    <strong>Activity: </strong> Ask your child
                                    to research a topic, build a related display
                                    or project, and write a description to
                                    accompany it.
                                </p>
                                <p class="mt-2">
                                    <strong>Purpose: </strong> This project
                                    combines research, hands-on creation, and
                                    writing, helping them understand and present
                                    information through multiple formats.
                                </p>
                            </li>
                        </ul>
                    </div>
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
                </div>
            </div>
        </div>

        <!-- Report 7 Kinesthethic _ Visual Blend-->
        <div v-if="style == 'Kinesthethic/Visual'">
            <!-- Content for Report 7 -->
            <div class="p-6">


                <div class="row">
                    <h2 class="text-md font-semibold">Creative Projects</h2>
                    <p class="text-lg">
                        These creative projects will help your child combine
                        their kinaesthetic and visual learning preferences,
                        allowing them to explore subjects in engaging and
                        innovative ways.
                    </p>
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
                                :src="'/images/reports-svg-images/Page21.svg'"
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
                        <!-- Creative Projects Section -->
                        <section class="space-y-6">
                            <ul class="space-y-6">
                                <li>
                                    <strong>Design and Build a Model</strong>
                                    <p>
                                        <strong>Activity: </strong> Have your
                                        child design and build a model of
                                        something they are learning about, such
                                        as a historical building, a scene from a
                                        book, or a scientific process like the
                                        solar system.
                                    </p>
                                    <p>
                                        <strong>Purpose: </strong> This project
                                        allows your child to plan visually while
                                        engaging their hands through
                                        construction, making abstract concepts
                                        tangible and easier to understand.
                                    </p>
                                </li>

                                <li>
                                    <strong
                                        >Create an Illustrated Storybook</strong
                                    >
                                    <p>
                                        <strong>Activity: </strong> Ask your
                                        child to write and illustrate their own
                                        story or recount a historical event
                                        through drawings. Once the book is
                                        complete, have them create a physical
                                        version using materials like paper,
                                        fabric, or other craft supplies.
                                    </p>
                                    <p>
                                        <strong>Purpose: </strong> This project
                                        combines storytelling with visual and
                                        kinaesthetic activities, helping your
                                        child express creativity while
                                        reinforcing their knowledge of the
                                        subject.
                                    </p>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <strong
                                        >Film a Stop-Motion Animation</strong
                                    >
                                    <p>
                                        <strong>Activity: </strong> Encourage
                                        your child to create a stop-motion
                                        animation using models or drawings. They
                                        can create characters out of clay or
                                        other materials and capture each
                                        movement with a camera to tell a story
                                        visually and physically.
                                    </p>
                                    <p>
                                        <strong>Purpose: </strong> This project
                                        promotes creativity by engaging both
                                        their visual planning skills and their
                                        kinaesthetic talents in building and
                                        manipulating objects.
                                    </p>
                                </li>

                                <li>
                                    <strong
                                        >Design and Paint a Mural or
                                        Poster</strong
                                    >
                                    <p>
                                        <strong>Activity: </strong> Have your
                                        child design and paint a large mural or
                                        poster that represents a topic they are
                                        studying, such as ecosystems, a
                                        historical event, or a timeline of a
                                        book they are reading.
                                    </p>
                                    <p>
                                        <strong>Purpose: </strong> This project
                                        allows them to use their visual skills
                                        in planning and their kinaesthetic
                                        abilities in painting or drawing, making
                                        learning more interactive and enjoyable.
                                    </p>
                                </li>

                                <li>
                                    <strong>Create a Diorama</strong>
                                    <p>
                                        <strong>Activity: </strong> Have your
                                        child create a diorama of a scene from
                                        history, a book, or a scientific
                                        concept. Using materials like cardboard,
                                        paint, and clay, they can build a 3D
                                        representation of the topic.
                                    </p>
                                    <p>
                                        <strong>Purpose: </strong> This project
                                        combines visual planning with hands-on
                                        crafting, giving your child a way to
                                        physically interact with the material
                                        and reinforce their understanding
                                        through creative work.
                                    </p>
                                </li>

                                <li>
                                    <strong>Build a Time Capsule</strong>
                                    <p>
                                        <strong>Activity: </strong> Encourage
                                        your child to create a time capsule that
                                        reflects their current learning. They
                                        can gather objects, drawings, and
                                        written notes related to their studies,
                                        place them in a box, and bury it or
                                        store it for future discovery.
                                    </p>
                                    <p>
                                        <strong>Purpose: </strong> This project
                                        blends visual creativity with physical
                                        engagement, allowing your child to
                                        reflect on their learning in a tangible
                                        way while planning and creating
                                        something personal.
                                    </p>
                                </li>

                                <li>
                                    <strong
                                        >Create a Physical Timeline with Visual
                                        Elements</strong
                                    >
                                    <p>
                                        <strong>Activity: </strong> Have your
                                        child create a physical timeline of a
                                        historical event, scientific discovery,
                                        or a book plot using materials like
                                        string, paper, and craft supplies. They
                                        can hang the timeline in their room and
                                        add visual elements such as pictures or
                                        models along the way.
                                    </p>
                                    <p>
                                        <strong>Purpose: </strong> This project
                                        helps your child organise information
                                        visually while engaging in hands-on
                                        crafting, making abstract events or
                                        sequences easier to understand.
                                    </p>
                                </li>
                            </ul>
                        </section>
                    </div>
                </div>
            </div>
        </div>

        <!-- Report 8 Kinesthethic-->
        <div v-if="style == 'Kinesthethic'">
            <!-- Content for Report 8 -->
            <div class="p-6">

                <div class="row">
                    <h2 class="text-md font-bold">Creative Projects</h2>
                    <p>
                        Engaging in creative projects allows kinaesthetic
                        learners to express themselves and apply their learning
                        in innovative ways. Here are some project ideas:
                    </p>
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
                                class="w-64 h-auto object-contain"
                                :src="'/images/reports-svg-images/Page17.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="col-6">
                        <ul class="space-y-4">
                            <li>
                                <strong>DIY Projects:</strong>
                                <p>
                                    <strong>Activity: </strong> Encourage your
                                    child to take on DIY projects like building
                                    furniture, creating art installations, or
                                    making costumes.
                                </p>
                                <p>
                                    <strong>Purpose: </strong> DIY projects
                                    provide opportunities for hands-on learning
                                    and creativity.
                                </p>
                            </li>

                            <li>
                                <strong>Gardening:</strong>
                                <p>
                                    <strong>Activity: </strong> Start a garden
                                    where your child can plant, water, and care
                                    for different plants.
                                </p>
                                <p>
                                    <strong>Purpose: </strong> Gardening teaches
                                    responsibility, biology, and the value of
                                    hard work through physical activity.
                                </p>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <strong>Cooking and Baking:</strong>
                                <p>
                                    <strong>Activity: </strong> Involve your
                                    child in cooking and baking activities where
                                    they follow recipes and create meals.
                                </p>
                                <p>
                                    <strong>Purpose: </strong> Cooking combines
                                    science, math, and reading with hands-on
                                    experience.
                                </p>
                            </li>

                            <li>
                                <strong>Physical Science Projects:</strong>
                                <p>
                                    <strong>Activity: </strong> Create projects
                                    that involve physical science principles,
                                    such as building a volcano, making a balloon
                                    rocket, or creating a simple circuit.
                                </p>
                                <p>
                                    <strong>Purpose: </strong> These projects
                                    provide a hands-on way to learn scientific
                                    concepts and encourage exploration.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Report 9 Reading & Writing _ Auditory Blend -->
        <div v-if="style == 'Reading/Writing/Auditory'">
            <!-- Content for Report 9 -->
            <div class="p-6">


                <div class="row">
                    <h2 class="text-md font-bold mt-8 mb-4">
                        Creative Projects
                    </h2>
                    <p class="mb-6">
                        These creative projects will help your child combine
                        their reading/writing and auditory learning preferences,
                        allowing them to explore subjects in engaging and
                        innovative ways.
                    </p>
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
                    <div class="col-6">
                        <div class="space-y-4">
                            <ul class="space-y-4">
                                <li>
                                    <strong>
                                        Write and Record an Educational
                                        Podcast</strong
                                    >
                                    <p>
                                        <strong>Activity: </strong> Have your
                                        child research a topic and write a
                                        script, then record their own
                                        educational podcast.
                                    </p>
                                    <p>
                                        <strong>Purpose: </strong> This project
                                        allows them to explore a subject through
                                        writing and verbal expression, combining
                                        their reading/writing and auditory
                                        skills.
                                    </p>
                                </li>

                                <li>
                                    <strong>
                                        Create a Research Paper with Audio
                                        Elements</strong
                                    >
                                    <p>
                                        <strong>Activity: </strong> Encourage
                                        your child to write a research paper on
                                        a subject and include audio elements
                                        like interviews or sound clips.
                                    </p>
                                    <p>
                                        <strong>Purpose: </strong> This project
                                        merges research and writing with
                                        auditory engagement, helping your child
                                        dive deeper into a topic using multiple
                                        methods.
                                    </p>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <strong>
                                        Write and Perform a Radio Drama</strong
                                    >
                                    <p>
                                        <strong>Activity: </strong> Ask your
                                        child to write a script for a radio
                                        drama based on a historical event or
                                        story, then perform and record it.
                                    </p>
                                    <p>
                                        <strong>Purpose: </strong> This allows
                                        them to express their ideas through
                                        writing and verbal performance,
                                        combining creativity with both learning
                                        styles.
                                    </p>
                                </li>

                                <li>
                                    <strong>
                                        Record Verbal Reflections and Turn Them
                                        into Essays</strong
                                    >
                                    <p>
                                        <strong>Activity: </strong> Have your
                                        child record verbal reflections on a
                                        subject they’ve learned, then transcribe
                                        their thoughts into a written essay.
                                    </p>
                                    <p>
                                        <strong>Purpose: </strong> This exercise
                                        engages both auditory and written
                                        processing, helping them organise and
                                        expand on their verbal ideas.
                                    </p>
                                </li>

                                <li>
                                    <strong>
                                        Write and Present an Oral Report</strong
                                    >
                                    <p>
                                        <strong>Activity: </strong> Encourage
                                        your child to write a detailed report on
                                        a topic of interest, then present it
                                        orally.
                                    </p>
                                    <p>
                                        <strong>Purpose: </strong> This combines
                                        written preparation with verbal
                                        presentation, enhancing their ability to
                                        express ideas through both speaking and
                                        writing.
                                    </p>
                                </li>

                                <li>
                                    <strong>
                                        Create an Audiobook with Written
                                        Annotations</strong
                                    >
                                    <p>
                                        <strong>Activity: </strong> Have your
                                        child create an audiobook of a short
                                        story they’ve written and add written
                                        annotations or notes to explain key
                                        ideas.
                                    </p>
                                    <p>
                                        <strong>Purpose: </strong> This allows
                                        them to blend their storytelling skills
                                        with auditory and reading/writing
                                        elements.
                                    </p>
                                </li>

                                <li>
                                    <strong>
                                        Develop a Visual Presentation with
                                        Written and Audio Components</strong
                                    >
                                    <p>
                                        <strong>Activity: </strong> Encourage
                                        your child to create a slideshow or
                                        visual presentation on a topic, adding
                                        written summaries and recorded audio
                                        commentary.
                                    </p>
                                    <p>
                                        <strong>Purpose: </strong> This project
                                        engages both writing and speaking
                                        skills, allowing your child to showcase
                                        their understanding of a topic
                                        creatively.
                                    </p>
                                </li>
                            </ul>
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
                                :src="'/images/reports-svg-images/Page21.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="col-6">
                        <h2 class="text-md font-semibold mt-6 mb-4">
                            Creative Projects
                        </h2>
                        <p class="mb-6">
                            These creative projects will help your child combine
                            their reading/writing and kinaesthetic learning
                            preferences, allowing them to explore subjects in
                            engaging and innovative ways:
                        </p>

                        <ul class="list-none pl-6 space-y-4">
                            <li>
                                <strong
                                    >Build a Model and Write a Report:</strong
                                >
                                <p>
                                    <strong>Activity: </strong> Have your child
                                    build a model related to a subject they’re
                                    learning (e.g., a historical landmark, a
                                    science concept), and then write a detailed
                                    report explaining the process and what they
                                    learned.
                                </p>
                                <p>
                                    <strong>Purpose: </strong> This project
                                    combines physical creativity with written
                                    expression, reinforcing learning through
                                    both movement and writing.
                                </p>
                            </li>
                        </ul>

                        <ul>
                            <li>
                                <strong
                                    >Create a How-To Guide for a Physical
                                    Task:</strong
                                >
                                <p>
                                    <strong>Activity: </strong> Ask your child
                                    to complete a hands-on project, like a DIY
                                    craft or experiment, and then write a
                                    step-by-step how-to guide based on the task.
                                </p>
                                <p>
                                    <strong>Purpose: </strong> This activity
                                    encourages them to physically engage with
                                    the material and organise their thoughts in
                                    writing.
                                </p>
                            </li>
                            <li>
                                <strong
                                    >Design an Interactive Learning
                                    Station:</strong
                                >
                                <p>
                                    <strong>Activity: </strong> Have your child
                                    create a learning station with physical
                                    objects (e.g., a science experiment, art
                                    project) and write instructions or
                                    descriptions for each station.
                                </p>
                                <p>
                                    <strong>Purpose: </strong> This project lets
                                    them physically engage while reinforcing
                                    learning through writing detailed
                                    instructions.
                                </p>
                            </li>
                            <li>
                                <strong
                                    >Write a Story with Physical Props:</strong
                                >
                                <p>
                                    <strong>Activity: </strong> Encourage your
                                    child to write a story and create physical
                                    props or a diorama to accompany their
                                    narrative.
                                </p>
                                <p>
                                    <strong>Purpose: </strong> This combines
                                    storytelling with hands-on creativity,
                                    allowing them to express their ideas in
                                    writing and through physical representation.
                                </p>
                            </li>
                            <li>
                                <strong
                                    >Create a Journal to Document Hands-On
                                    Learning:</strong
                                >
                                <p>
                                    <strong>Activity: </strong> Have your child
                                    keep a journal where they document their
                                    hands-on activities, including descriptions
                                    and reflections on what they’ve learned.
                                </p>
                                <p>
                                    <strong>Purpose: </strong> This activity
                                    helps them reflect on physical experiences
                                    and reinforce understanding through writing.
                                </p>
                            </li>
                            <li>
                                <strong
                                    >Build a Puzzle or Game and Write the
                                    Rules:</strong
                                >
                                <p>
                                    <strong>Activity: </strong> Have your child
                                    design and build a physical puzzle or game,
                                    then write detailed instructions or rules
                                    for playing it.
                                </p>
                                <p>
                                    <strong>Purpose: </strong> This combines
                                    problem-solving and creativity with writing,
                                    allowing them to engage both kinaesthetic
                                    and writing skills.
                                </p>
                            </li>
                            <li>
                                <strong
                                    >Research and Build a Physical Display with
                                    Written Information:</strong
                                >
                                <p>
                                    <strong>Activity: </strong> Ask your child
                                    to research a topic, build a related display
                                    or project, and write a description to
                                    accompany it.
                                </p>
                                <p>
                                    <strong>Purpose: </strong> This project
                                    combines research, hands-on creation, and
                                    writing, helping them understand and present
                                    information through multiple formats.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Report 11 Reading & Writing _ Visual Blend -->
        <div v-if="style == 'Reading/Writing/Visual'">
            <!-- Content for Report 11 -->
            <div class="p-6">


                <div class="row">
                    <h2 class="text-md font-semibold mb-3">
                        Creative Projects:
                    </h2>

                    <p>
                        These creative projects will help your child combine
                        their reading/writing and visual learning preferences,
                        allowing them to explore subjects in engaging and
                        innovative ways.
                    </p>
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
                                :src="'/images/reports-svg-images/Page21.svg'"
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
                                class="w-64 h-auto object-contain"
                                :src="'/images/reports-svg-images/Page17.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="col-6">
                        <section class="mb-6">
                            <ul class="list-inside">
                                <li class="mb-6">
                                    <strong>
                                        1. Create an Illustrated Storybook
                                    </strong>
                                    <p>
                                        <strong>Activity: </strong> Have your
                                        child write a short story or narrative
                                        and illustrate it with drawings or
                                        diagrams.
                                    </p>
                                    <p>
                                        <strong>Purpose: </strong> This combines
                                        their writing skills with visual
                                        creativity, allowing them to express
                                        their ideas both in words and pictures.
                                    </p>
                                </li>
                                <li class="mb-6">
                                    <strong>
                                        2. Design and Write a Magazine
                                    </strong>
                                    <p>
                                        <strong>Activity: </strong> Ask your
                                        child to design a magazine on a topic of
                                        interest, including written articles,
                                        interviews, and visually appealing
                                        layouts with images, charts, or
                                        infographics.
                                    </p>
                                    <p>
                                        <strong>Purpose: </strong> This project
                                        encourages both writing and visual
                                        design, helping them organise
                                        information visually while practising
                                        writing and communication skills.
                                    </p>
                                </li>
                                <li class="mb-6">
                                    <strong>
                                        3. Build a Visual and Written
                                        Presentation
                                    </strong>
                                    <p>
                                        <strong>Activity: </strong> Have your
                                        child create a presentation on a subject
                                        they are studying, combining visual
                                        elements like slides or posters with
                                        written summaries or key points.
                                    </p>
                                    <p>
                                        <strong>Purpose: </strong> This allows
                                        them to structure their knowledge both
                                        visually and in writing, improving their
                                        understanding and ability to communicate
                                        complex ideas.
                                    </p>
                                </li>
                                <li class="mb-6">
                                    <strong>
                                        4. Write and Illustrate a Comic Book
                                    </strong>
                                    <p>
                                        <strong>Activity: </strong> Encourage
                                        your child to write and illustrate a
                                        comic book or graphic novel based on a
                                        story or lesson they’ve learned.
                                    </p>
                                    <p>
                                        <strong>Purpose: </strong> This project
                                        promotes creative writing while allowing
                                        your child to express ideas visually,
                                        combining storytelling with visual
                                        representation.
                                    </p>
                                </li>
                                <li class="mb-6">
                                    <strong>
                                        5. Develop a Visual Study Guide with
                                        Written Notes
                                    </strong>
                                    <p>
                                        <strong>Activity: </strong> Ask your
                                        child to create a study guide that
                                        includes both written notes and visual
                                        elements like diagrams, charts, or
                                        timelines for an upcoming test or
                                        project.
                                    </p>
                                    <p>
                                        <strong>Purpose: </strong> This helps
                                        them visually organise information while
                                        reinforcing it through written
                                        explanations, ensuring a deeper
                                        understanding of the material.
                                    </p>
                                </li>
                                <li class="mb-6">
                                    <strong>
                                        6. Create an Illustrated Research Poster
                                    </strong>
                                    <p>
                                        <strong>Activity: </strong> Have your
                                        child conduct research on a specific
                                        topic and create a poster that includes
                                        both written facts and visual
                                        representations such as graphs, charts,
                                        and images.
                                    </p>
                                    <p>
                                        <strong>Purpose: </strong> This project
                                        strengthens their ability to gather and
                                        present information in a way that
                                        combines visual and written formats.
                                    </p>
                                </li>
                                <li class="mb-6">
                                    <strong>
                                        7. Write a Script and Design Visual
                                        Storyboards
                                    </strong>
                                    <p>
                                        <strong>Activity: </strong> Encourage
                                        your child to write a script for a play,
                                        movie, or presentation, then create
                                        visual storyboards to plan out the
                                        scenes.
                                    </p>
                                    <p>
                                        <strong>Purpose: </strong> This project
                                        helps them organise their thoughts in
                                        writing while visualising the narrative,
                                        engaging both their creative writing and
                                        visual skills.
                                    </p>
                                </li>
                            </ul>
                        </section>
                    </div>
                </div>
            </div>
        </div>

        <!-- Report 12 Reading & Writing-->
        <div v-if="style == 'Reading/Writing'">


            <div class="row p-6">
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
                            :src="'/images/reports-svg-images/Page21.svg'"
                            alt=""
                        />
                    </div>
                </div>
                <div class="col-6">
                    <section class="mb-8">
                        <h2 class="text-md font-bold mb-4">
                            Creative Projects
                        </h2>
                        <p class="mt-4">
                            Engaging in creative projects allows reading/writing
                            learners to express themselves and apply their
                            learning in innovative ways. Here are some project
                            ideas:
                        </p>
                        <ol class="list-decimal list-inside mt-4 space-y-2">
                            <li>
                                <strong>Create a Magazine:</strong>
                                <ul class="list-none pl-6 space-y-2 ml-10">
                                    <li>
                                        <strong>Activity: </strong> Encourage
                                        your child to create their own magazine
                                        with articles, stories, interviews, and
                                        illustrations.
                                    </li>
                                    <li>
                                        <strong>Purpose: </strong> This combines
                                        writing, research, and visual
                                        creativity, providing a comprehensive
                                        learning experience.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <strong>Writing Contests:</strong>
                                <ul class="list-none pl-6 space-y-2 ml-10">
                                    <li>
                                        <strong>Activity: </strong> Enter your
                                        child in writing contests where they can
                                        submit essays, stories, or poems.
                                    </li>
                                    <li>
                                        <strong>Purpose: </strong> Participating
                                        in contests motivates them to improve
                                        their writing skills and provides an
                                        opportunity for recognition.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <strong>Family Newsletter:</strong>
                                <ul class="list-none pl-6 space-y-2 ml-10">
                                    <li>
                                        <strong>Activity: </strong> Start a
                                        family newsletter where your child can
                                        write articles, updates, and stories
                                        about family events.
                                    </li>
                                    <li>
                                        <strong>Purpose: </strong> This
                                        reinforces writing practice and keeps
                                        them engaged with family activities.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <strong>Research and Present:</strong>
                                <ul class="list-none pl-6 space-y-2 ml-10">
                                    <li>
                                        <strong>Activity: </strong> Have your
                                        child choose a topic of interest,
                                        conduct research, write a report, and
                                        present their findings to the family.
                                    </li>
                                    <li>
                                        <strong>Purpose: </strong> This activity
                                        enhances research, writing, and
                                        presentation skills.
                                    </li>
                                </ul>
                            </li>
                        </ol>
                    </section>
                </div>
            </div>
        </div>

        <!-- Report 13 Visual _ Auditory Blend-->
        <div v-if="style == 'Visual/Auditory'">
            <!-- Content for Report 13 -->


            <div class="row p-6">
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
                    <div class="flex justify-center items-center">
                        <img
                            class="w-90 h-auto object-contain"
                            :src="'/images/reports-svg-images/Page21.svg'"
                            alt=""
                        />
                    </div>
                </div>
                <div class="col-6">
                    <section class="mb-8">
                        <h2 class="text-md font-bold mb-4">
                            Creative Projects
                        </h2>
                        <p class="mt-4">
                            These creative projects will help your child combine
                            their visual and auditory learning preferences,
                            allowing them to explore subjects in engaging and
                            innovative ways.
                        </p>
                        <ol class="va-tips">
                            <li>
                                <strong>Create an Educational Video</strong
                                ><br /><strong>Activity: </strong> Have your
                                child create a short educational video on a
                                topic of their choice. They can script and
                                narrate the video while using visual elements
                                such as images, diagrams, or animations.<br /><strong
                                    >Purpose:</strong
                                >This project strengthens both verbal
                                communication and visual presentation skills,
                                allowing your child to explain complex ideas
                                through multiple mediums.
                            </li>
                            <li>
                                <strong>Make a Podcast with Visual Notes</strong
                                ><br /><strong>Activity: </strong>Encourage your
                                child to create their own podcast on a subject
                                they enjoy. While recording their audio, they
                                can create visual notes or illustrations to
                                accompany the episodes.<br /><strong
                                    >Purpose: </strong
                                >This blends verbal creativity with visual
                                organisation, helping your child connect
                                auditory learning with visual reinforcement.
                            </li>
                            <li>
                                <strong
                                    >Illustrate a Story with an Audio
                                    Narration</strong
                                ><br /><strong>Activity: </strong>Have your
                                child write and illustrate a short story. Then,
                                they can record an audio narration of the story,
                                combining their verbal and visual talents.<br /><strong
                                    >Purpose:</strong
                                >
                                This project allows your child to practice both
                                storytelling and visualisation, strengthening
                                their ability to express ideas clearly.
                            </li>
                            <li>
                                <strong
                                    >Design a Visual Presentation with Audio
                                    Commentary</strong
                                ><br /><strong>Activity: </strong>Ask your child
                                to design a presentation (using PowerPoint or
                                poster boards) and record an audio commentary
                                explaining each slide or visual element.<br /><strong
                                    >Purpose:</strong
                                >
                                This project improves their ability to integrate
                                visual content with verbal explanations,
                                reinforcing their understanding of the material.
                            </li>
                            <li>
                                <strong
                                    >Create Flashcards with Drawings and Verbal
                                    Explanations</strong
                                ><br /><strong>Activity: </strong>Have your
                                child create flashcards for subjects they are
                                studying. Each card can feature a drawing or
                                diagram on one side, and your child can provide
                                a verbal explanation of the concept while
                                reviewing the cards.<br /><strong
                                    >Purpose:</strong
                                >
                                This strengthens their memory by combining
                                visual aids with verbal practice, engaging both
                                learning styles.
                            </li>
                            <li>
                                <strong
                                    >Build a Visual Timeline with a Storytelling
                                    Element</strong
                                ><br /><strong>Activity: </strong>Ask your child
                                to create a visual timeline of a historical
                                event, scientific process, or book plot. As they
                                build the timeline, encourage them to verbally
                                explain the key points in chronological
                                order.<br /><strong>Purpose:</strong>
                                This activity improves their ability to organise
                                and explain information, combining visual
                                sequencing with verbal articulation.
                            </li>
                            <li>
                                <strong
                                    >Organise a Group Project with Visual and
                                    Verbal Contributions</strong
                                ><br /><strong>Activity: </strong>Encourage your
                                child to work on a group project where they
                                contribute both visually and verbally. They can
                                create visual displays while leading discussions
                                or explaining parts of the project.<br /><strong
                                    >Purpose:</strong
                                >
                                This project helps your child practice teamwork
                                while using both their visual and auditory
                                strengths to communicate and organise
                                information.
                            </li>
                        </ol>
                    </section>
                </div>
            </div>
        </div>

        <!-- Report 14 Visual _ Kinesthethic Blend-->
        <div v-if="style == 'Visual/Kinesthethic'">


            <div class="row p-6">
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
                            :src="'/images/reports-svg-images/Page21.svg'"
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
                    <section class="mb-8">
                        <h2 class="text-md font-bold mb-4">
                            Creative Projects
                        </h2>
                        <p class="mt-4">
                            These creative projects will help your child combine
                            their visual and kinaesthetic learning preferences,
                            allowing them to explore subjects in engaging and
                            innovative ways.
                        </p>
                        <ol class="vk-tips">
                            <li>
                                <strong>Design and Build a Model</strong
                                ><br /><strong>Activity: </strong> Have your
                                child design and build a model of something they
                                are learning about, such as a historical
                                building, a scene from a book, or a scientific
                                process like the solar system.<br /><strong
                                    >Purpose:
                                </strong>
                                This project allows your child to plan visually
                                while engaging their hands through construction,
                                making abstract concepts tangible and easier to
                                understand.
                            </li>
                            <li>
                                <strong>Create an Illustrated Storybook</strong
                                ><br /><strong>Activity: </strong> Ask your
                                child to write and illustrate their own story or
                                recount a historical event through drawings.
                                Once the book is complete, have them create a
                                physical version using materials like paper,
                                fabric, or other craft supplies.<br /><strong
                                    >Purpose:
                                </strong>
                                This project combines storytelling with visual
                                and kinaesthetic activities, helping your child
                                express creativity while reinforcing their
                                knowledge of the subject.
                            </li>
                            <li>
                                <strong>Film a Stop-Motion Animation</strong
                                ><br /><strong>Activity: </strong> Encourage
                                your child to create a stop-motion animation
                                using models or drawings. They can create
                                characters out of clay or other materials and
                                capture each movement with a camera to tell a
                                story visually and physically.<br /><strong
                                    >Purpose:</strong
                                >
                                This project promotes creativity by engaging
                                both their visual planning skills and their
                                kinaesthetic talents in building and
                                manipulating objects.
                            </li>
                            <li>
                                <strong
                                    >Design and Paint a Mural or Poster</strong
                                ><br /><strong>Activity: </strong> Have your
                                child design and paint a large mural or poster
                                that represents a topic they are studying, such
                                as ecosystems, a historical event, or a timeline
                                of a book they are reading.<br /><strong
                                    >Purpose:</strong
                                >
                                This project allows them to use their visual
                                skills in planning and their kinaesthetic
                                abilities in painting or drawing, making
                                learning more interactive and enjoyable.
                            </li>
                            <li>
                                <strong>Create a Diorama</strong><br /><strong
                                    >Activity:</strong
                                >
                                Have your child create a diorama of a scene from
                                history, a book, or a scientific concept. Using
                                materials like cardboard, paint, and clay, they
                                can build a 3D representation of the topic.<br /><strong
                                    >Purpose:</strong
                                >
                                This project combines visual planning with
                                hands-on crafting, giving your child a way to
                                physically interact with the material and
                                reinforce their understanding through creative
                                work.
                            </li>
                            <li>
                                <strong>Build a Time Capsule</strong
                                ><br /><strong>Activity:</strong> Encourage your
                                child to create a time capsule that reflects
                                their current learning. They can gather objects,
                                drawings, and written notes related to their
                                studies, place them in a box, and bury it or
                                store it for future discovery.<br /><strong
                                    >Purpose:</strong
                                >
                                This project blends visual creativity with
                                physical engagement, allowing your child to
                                reflect on their learning in a tangible way
                                while planning and creating something personal.
                            </li>
                            <li>
                                <strong
                                    >Create a Physical Timeline with Visual
                                    Elements</strong
                                ><br /><strong>Activity: </strong> Have your
                                child create a physical timeline of a historical
                                event, scientific discovery, or a book plot
                                using materials like string, paper, and craft
                                supplies. They can hang the timeline in their
                                room and add visual elements such as pictures or
                                models along the way.<br /><strong
                                    >Purpose:
                                </strong>
                                This project helps your child organise
                                information visually while engaging in hands-on
                                crafting, making abstract events or sequences
                                easier to understand.
                            </li>
                        </ol>
                    </section>
                </div>
            </div>
        </div>

        <!-- Report 15 Visual _ Reading & Writing-->
        <div v-if="style == 'Visual/Reading/Writing'">


            <div class="row p-6">
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
                <div class="col-6">
                    <section class="mb-8">
                        <h2 class="text-md font-bold mb-4">
                            Creative Projects
                        </h2>
                        <p class="mt-4">
                            These creative projects will help your child combine
                            their visual and reading/writing learning
                            preferences, allowing them to explore subjects in
                            engaging and innovative ways.
                        </p>
                        <ol class="vrw-tips">
                            <li>
                                <strong>Create an Illustrated Storybook</strong
                                ><br /><strong>Activity: </strong> Have your
                                child write a short story or narrative and
                                illustrate it with drawings or diagrams.<br /><strong
                                    >Purpose:</strong
                                >
                                This combines their writing skills with visual
                                creativity, allowing them to express their ideas
                                both in words and pictures.
                            </li>
                            <li>
                                <strong>Design and Write a Magazine</strong
                                ><br /><strong>Activity: </strong> Ask your
                                child to design a magazine on a topic of
                                interest, including written articles,
                                interviews, and visually appealing layouts with
                                images, charts, or infographics.<br /><strong
                                    >Purpose:</strong
                                >
                                This project encourages both writing and visual
                                design, helping them organise information
                                visually while practising writing and
                                communication skills.
                            </li>
                            <li>
                                <strong
                                    >Build a Visual and Written
                                    Presentation</strong
                                ><br /><strong>Activity: </strong> Have your
                                child create a presentation on a subject they
                                are studying, combining visual elements like
                                slides or posters with written summaries or key
                                points.<br /><strong>Purpose:</strong>
                                This allows them to structure their knowledge
                                both visually and in writing, improving their
                                understanding and ability to communicate complex
                                ideas.
                            </li>
                            <li>
                                <strong
                                    >Write and Illustrate a Comic Book</strong
                                ><br /><strong>Activity: </strong> Encourage
                                your child to write and illustrate a comic book
                                or graphic novel based on a story or lesson
                                they’ve learned.<br /><strong>Purpose: </strong>
                                This project promotes creative writing while
                                allowing your child to express ideas visually,
                                combining storytelling with visual
                                representation.
                            </li>
                            <li>
                                <strong
                                    >Develop a Visual Study Guide with Written
                                    Notes</strong
                                ><br /><strong>Activity: </strong> Ask your
                                child to create a study guide that includes both
                                written notes and visual elements like diagrams,
                                charts, or timelines for an upcoming test or
                                project.<br /><strong>Purpose:</strong>
                                This helps them visually organise information
                                while reinforcing it through written
                                explanations, ensuring a deeper understanding of
                                the material.
                            </li>
                            <li>
                                <strong
                                    >Create an Illustrated Research
                                    Poster</strong
                                ><br /><strong>Activity: </strong> Have your
                                child conduct research on a specific topic and
                                create a poster that includes both written facts
                                and visual representations such as graphs,
                                charts, and images.<br /><strong
                                    >Purpose:
                                </strong>
                                This project strengthens their ability to gather
                                and present information in a way that combines
                                visual and written formats.
                            </li>
                            <li>
                                <strong
                                    >Write a Script and Design Visual
                                    Storyboards</strong
                                ><br /><strong>Activity: </strong> Encourage
                                your child to write a script for a play, movie,
                                or presentation, then create visual storyboards
                                to plan out the scenes.<br /><strong
                                    >Purpose:
                                </strong>
                                This project helps them organise their thoughts
                                in writing while visualising the narrative,
                                engaging both their creative writing and visual
                                skills.
                            </li>
                        </ol>
                    </section>
                </div>
            </div>
        </div>

        <!-- Report 16 Visual-->
        <div v-if="style == 'Visual'">


            <div class="row p-6">
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
                            :src="'/images/reports-svg-images/Page21.svg'"
                            alt=""
                        />
                    </div>
                </div>
                <div class="col-6">
                    <!-- Visual Learning Exercises -->
                    <section class="mb-8">
                        <h2 class="text-md font-semibold text-indigo-500">
                            Creative Projects
                        </h2>
                        <ol class="vrw-tips">
                            <li>
                                <strong>Art Projects:</strong>
                                <ul class="list-none pl-6 space-y-2 ml-8">
                                    <li>
                                        <strong>Activity: </strong> Create art
                                        projects related to subjects they are
                                        learning in school. For example, they
                                        can paint scenes from history, draw
                                        diagrams of scientific concepts, or
                                        design posters for book reports.
                                    </li>
                                    <li>
                                        <strong>Purpose: </strong> Art projects
                                        help visual learners connect with the
                                        material on a deeper level through
                                        creative expression.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <strong>Video Presentations:</strong>
                                <ul class="list-none pl-6 space-y-2 ml-8">
                                    <li>
                                        <strong>Activity: </strong> Have your
                                        child create video presentations on
                                        topics they are passionate about. They
                                        can use visuals, narrate the content,
                                        and edit the videos to include images
                                        and diagrams.
                                    </li>
                                    <li>
                                        <strong>Purpose: </strong> This combines
                                        visual creativity with technology,
                                        making learning interactive and fun.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <strong>Graphic Novels:</strong>
                                <ul class="list-none pl-6 space-y-2 ml-8">
                                    <li>
                                        <strong>Activity: </strong> Encourage
                                        your child to create their own graphic
                                        novels or comic strips based on stories
                                        they read or subjects they study.
                                    </li>
                                    <li>
                                        <strong>Purpose: </strong> This combines
                                        storytelling with visual art, enhancing
                                        comprehension and engagement.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <strong>Science Fair Projects:</strong>
                                <ul class="list-none pl-6 space-y-2 ml-8">
                                    <li>
                                        <strong>Activity: </strong> Participate
                                        in science fairs with visually rich
                                        presentations. Create detailed posters,
                                        models, and demonstrations to explain
                                        their experiments and findings.
                                    </li>
                                    <li>
                                        <strong>Purpose: </strong> This hands-on
                                        project combines visual learning with
                                        scientific inquiry, making learning
                                        comprehensive and enjoyable.
                                    </li>
                                </ul>
                            </li>
                        </ol>
                    </section>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
import AssessmentTypes from "@/Layouts/AssessmentTypes.vue";

export default {
    name: "PracticalExercisesSecond",
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
