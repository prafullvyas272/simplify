<template>
    <div class="p-6">
        <div class="container mx-auto p-4">
            <h1 class="font-bold mb-4 text-center">
                Overview of Learning Style
            </h1>
        </div>
        <!-- Report 1 Auditory -->
        <div v-if="style == 'Auditory'">
            <!-- Content for Report 1 -->
            <div class="p-6">
                <h2 class="text-3xl font-semibold mb-4">
                    Characteristics of Auditory Learners
                </h2>
                <p class="">
                    Your child is an auditory learner, which means they
                    understand and remember information best when it is
                    presented through sound. Auditory learners excel when they
                    can listen to information and engage in discussions. Here’s
                    a closer look at what makes auditory learners unique:
                </p>
                <!-- Introduction -->
                <div></div>

                <div class="row">
                    <div class="col-6">
                        <!-- Characteristics of Auditory Learners -->
                        <div>
                            <ul class="list-disc pl-6 space-y-4">
                                <li>
                                    <strong>Prefers Listening:</strong> Auditory
                                    learners enjoy listening to lectures,
                                    discussions, and audio recordings. They
                                    absorb information effectively through
                                    hearing.
                                </li>
                                <li>
                                    <strong>Strong Verbal Skills:</strong> They
                                    often have strong verbal communication
                                    skills. They express themselves clearly and
                                    enjoy engaging in conversations.
                                </li>
                                <li>
                                    <strong>Good Memory for Sounds:</strong>
                                    They have an excellent memory for sounds and
                                    verbal instructions. They can recall spoken
                                    information and remember details from
                                    conversations and audio materials.
                                </li>
                                <li>
                                    <strong>Enjoys Music and Rhythms:</strong>
                                    Many auditory learners have a strong
                                    appreciation for music and rhythms. They may
                                    use songs and rhymes to help them remember
                                    information.
                                </li>
                                <li>
                                    <strong>Active in Discussions:</strong> They
                                    thrive in group discussions and verbal
                                    interactions. They enjoy debating, asking
                                    questions, and explaining concepts to
                                    others.
                                </li>
                                <li>
                                    <strong>Reads Aloud:</strong> Auditory
                                    learners often read aloud to help themselves
                                    understand and retain information. They
                                    might also benefit from listening to
                                    audiobooks.
                                </li>
                                <li>
                                    <strong>Learns Through Talking:</strong>
                                    They learn by talking through problems and
                                    ideas. Explaining concepts to others helps
                                    reinforce their understanding.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-64 h-auto mt-5 object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/7.svg'"
                                alt=""
                            />
                        </div>
                        <div class="flex justify-center items-center">
                            <img
                                class="w-64 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/3.svg'"
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
            <div class="p-6 rounded-lg">
                <div class="row">
                    <p>
                        Your child’s learning style is a blend of both
                        <b>auditory</b> and <b>kinaesthetic</b> preferences,
                        meaning they absorb and retain information most
                        effectively when they can hear it and physically engage
                        with it. Here's a closer look at what makes
                        <b>auditory and kinaesthetic learners</b> unique:
                    </p>
                    <h2 class="text-3xl font-semibold">
                        Characteristics of Auditory and Kinaesthetic Learners
                    </h2>
                    <div class="col-6">
                        <section class="mb-8">
                            <!-- Auditory Learning Characteristics -->
                            <div class="mt-4">
                                <h2 class="font-semibold text-2xl">
                                    Auditory Learning Characteristics:
                                </h2>
                                <ul
                                    class="list-inside list-disc mt-2 space-y-2"
                                >
                                    <li>
                                        <strong
                                            >Learns Best Through Listening:
                                        </strong>
                                        Auditory learners excel when information
                                        is presented verbally. They absorb
                                        content through discussions, lectures,
                                        and audio resources like podcasts or
                                        audiobooks.
                                    </li>
                                    <li>
                                        <strong>Strong Verbal Memory: </strong>
                                        They often have a strong memory for
                                        spoken information, recalling details
                                        from conversations or lessons more
                                        easily than from written text.
                                    </li>
                                    <li>
                                        <strong
                                            >Enjoys Participating in
                                            Discussions:
                                        </strong>
                                        Auditory learners tend to engage well in
                                        group discussions or debates, where they
                                        can process information by talking it
                                        through with others.
                                    </li>
                                    <li>
                                        <strong
                                            >Uses Verbal Repetition for Recall:
                                        </strong>
                                        They often remember facts by repeating
                                        them out loud, whether it’s practising
                                        vocabulary, reciting key points, or
                                        reading aloud to reinforce their
                                        understanding.
                                    </li>
                                    <li>
                                        <strong
                                            >Listens to Understand Complex
                                            Ideas:
                                        </strong>
                                        They can grasp abstract concepts when
                                        they hear them explained clearly, making
                                        them well-suited to learning through
                                        audio-based instruction or storytelling.
                                    </li>
                                    <li>
                                        <strong
                                            >Benefits from Background Noise:
                                        </strong>
                                        Many auditory learners find it easier to
                                        concentrate when there is soft
                                        background noise, such as music, or when
                                        they are listening to something engaging
                                        while working.
                                    </li>
                                    <li>
                                        <strong
                                            >Prefers Spoken Instructions:
                                        </strong>
                                        They often prefer verbal instructions to
                                        written ones, as they can better
                                        understand and follow directions that
                                        are spoken.
                                    </li>
                                </ul>
                            </div>

                            <!-- Kinaesthetic Learning Characteristics -->
                            <div class="mt-4">
                                <h2 class="font-semibold text-2xl">
                                    Kinaesthetic Learning Characteristics:
                                </h2>
                                <ul
                                    class="list-inside list-disc mt-2 space-y-2"
                                >
                                    <li>
                                        <strong>Learns Best by Doing: </strong>
                                        Kinaesthetic learners thrive when they
                                        can physically engage with the material,
                                        whether through building, manipulating
                                        objects, or performing tasks.
                                    </li>
                                    <li>
                                        <strong
                                            >Enjoys Movement During Learning:
                                        </strong>
                                        Kinaesthetic learners benefit from
                                        moving around while studying or
                                        learning, such as pacing while thinking
                                        or engaging in active learning stations.
                                    </li>
                                    <li>
                                        <strong>Strong Motor Skills: </strong>
                                        They often excel in activities that
                                        require coordination, such as sports,
                                        dance, or hands-on tasks that involve
                                        using tools or creating things.
                                    </li>
                                    <li>
                                        <strong>
                                            Solves Problems Through Physical
                                            Interaction :
                                        </strong>
                                        Kinaesthetic learners prefer to solve
                                        problems by physically engaging with the
                                        material, whether it’s through trial and
                                        error or building models to understand a
                                        concept.
                                    </li>
                                    <li>
                                        <strong>Physical Memory: </strong>
                                        They tend to remember information better
                                        when they’ve physically acted it out or
                                        performed a related task, such as
                                        writing, building, or moving.
                                    </li>
                                    <li>
                                        <strong
                                            >Focuses Better When Active:
                                        </strong>
                                        They often concentrate more effectively
                                        when they are physically engaged, such
                                        as doodling during a lecture or moving
                                        around while solving a problem.
                                    </li>
                                    <li>
                                        <strong
                                            >Enjoys Hands-On Projects:
                                        </strong>
                                        Kinaesthetic learners excel at projects
                                        that involve making, building, or doing,
                                        such as experiments, crafts, or physical
                                        demonstrations.
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-120 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/7.svg'"
                                alt=""
                            />
                        </div>
                        <div class="flex justify-center items-center">
                            <img
                                class="w-120 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/3.svg'"
                                alt=""
                            />
                        </div>
                        <div
                            data-v-dbde8ef8=""
                            class="flex justify-center items-center"
                        >
                            <img
                                data-v-dbde8ef8=""
                                class="w-120 h-auto object-contain"
                                src="/images/reports-svg-images/Kids/LearningStyles/9.svg"
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
                    <p class="">
                        Your child’s learning style is a blend of both auditory
                        and reading/writing preferences
                    </p>
                    <p class="mt-2">
                        This means they absorb and retain information most
                        effectively when they can listen to verbal explanations
                        and reinforce their understanding through reading and
                        writing. Here’s a closer look at what makes auditory and
                        reading/writing learners unique:
                    </p>
                </div>

                <div class="row">
                    <div class="col-6">
                        <!-- Characteristics -->
                        <div class="mb-6">
                            <h2 class="text-3xl font-semibold mb-4">
                                Characteristics of Auditory and Reading/Writing
                                Learners:
                            </h2>

                            <!-- Auditory Learning Characteristics -->
                            <div class="mt-4">
                                <h4 class="font-semibold">
                                    Auditory Learning Characteristics:
                                </h4>
                                <ul class="list-disc pl-6 mt-2">
                                    <li>
                                        <strong
                                            >Learns Best Through Listening:
                                        </strong>
                                        Auditory learners excel when they hear
                                        information presented verbally, such as
                                        in discussions, lectures, or audio
                                        resources like podcasts or audiobooks.
                                    </li>
                                    <li>
                                        <strong>
                                            Strong Verbal Memory :
                                        </strong>
                                        They often have an exceptional memory
                                        for spoken information, recalling
                                        details from lessons, conversations, or
                                        verbal instructions easily.
                                    </li>
                                    <li>
                                        <strong
                                            >Engages in Discussions:
                                        </strong>
                                        Auditory learners thrive in group
                                        discussions or debates, processing
                                        information by talking it through and
                                        listening to different perspectives.
                                    </li>
                                    <li>
                                        <strong
                                            >Uses Verbal Repetition for Recall:
                                        </strong>
                                        Repeating key points out loud helps
                                        auditory learners remember facts,
                                        whether it’s practising vocabulary,
                                        discussing ideas, or reading aloud.
                                    </li>
                                    <li>
                                        <strong
                                            >Understands Abstract Ideas Through
                                            Verbal Explanation:
                                        </strong>
                                        Auditory learners can grasp complex or
                                        abstract concepts when they hear them
                                        explained clearly, making verbal
                                        instruction an effective tool for
                                        learning.
                                    </li>
                                    <li>
                                        <strong
                                            >Prefers Verbal Instructions:
                                        </strong>
                                        They often follow tasks and lessons more
                                        easily when instructions are given
                                        verbally, helping them understand and
                                        apply information more effectively.
                                    </li>
                                    <li>
                                        <strong
                                            >Responds Well to Audio Resources:
                                        </strong>
                                        They benefit from listening to
                                        background music or engaging audio
                                        content while working, as it helps them
                                        concentrate and stay focused.
                                    </li>
                                </ul>
                            </div>

                            <!-- Reading/Writing Learning Characteristics -->
                            <div class="mt-4">
                                <h4 class="font-semibold">
                                    Reading/Writing Learning Characteristics:
                                </h4>
                                <ul class="list-disc pl-6 mt-2">
                                    <li>
                                        <strong>Prefers Written Text : </strong>
                                        Reading/writing learners absorb
                                        information best through written text,
                                        such as books, articles, or notes, and
                                        they often take detailed notes to
                                        process new information.
                                    </li>
                                    <li>
                                        <strong
                                            >Strong Writing Skills :
                                        </strong>
                                        They express themselves clearly through
                                        writing, enjoying tasks like writing
                                        essays, reports, or summaries to
                                        organise their thoughts.
                                    </li>
                                    <li>
                                        <strong>
                                            Uses Written Notes for Memory :
                                        </strong>
                                        Writing down key points helps them
                                        clarify ideas and remember information.
                                        They often rewrite or summarise notes to
                                        reinforce their learning.
                                    </li>
                                    <li>
                                        <strong>
                                            Favours Text-Based Learning
                                            Resources :
                                        </strong>
                                        Reading/writing learners prefer studying
                                        with textbooks, manuals, and written
                                        guides, using these resources to deepen
                                        their understanding.
                                    </li>
                                    <li>
                                        <strong
                                            >Good at Retaining Written
                                            Information :
                                        </strong>
                                        They remember facts and concepts they’ve
                                        read or written down, making studying
                                        from written materials particularly
                                        effective.
                                    </li>
                                    <li>
                                        <strong
                                            >Prefers to Process Information by
                                            Writing :
                                        </strong>
                                        They often use writing as a way to
                                        process and organise their understanding
                                        of new material, helping them develop
                                        clearer insights through essays or
                                        reports.
                                    </li>
                                    <li>
                                        <strong
                                            >Uses Summaries and Rewrites to
                                            Reinforce Learning :
                                        </strong>
                                        Summarising information or rewriting
                                        notes helps reading/writing learners
                                        retain important details, strengthening
                                        their memory and understanding.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-120 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/7.svg'"
                                alt=""
                            />
                        </div>
                        <div class="flex justify-center items-center">
                            <img
                                class="w-120 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/3.svg'"
                                alt=""
                            />
                        </div>
                        <div
                            data-v-dbde8ef8=""
                            class="flex justify-center items-center"
                        >
                            <img
                                data-v-dbde8ef8=""
                                class="w-120 h-auto object-contain"
                                src="/images/reports-svg-images/Kids/LearningStyles/9.svg"
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
                    <h2 class="text-3xl font-semibold">
                        Your Child’s Learning Style: Auditory and Visual Learner
                    </h2>
                    <p class="">
                        Your child’s learning style is a unique blend of both
                        auditory and visual preferences. This means they
                        understand and remember information best when it is
                        presented both verbally and visually. Here's a closer
                        look at what makes auditory and visual learners unique:
                    </p>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div>
                            <h2 class="text-3xl font-semibold mb-4">
                                Characteristics of Auditory and Visual Learners
                            </h2>
                            <h2 class="text-lg font-semibold mb-4">
                                Auditory Learning Characteristics:
                            </h2>
                            <ul class="list-disc pl-5">
                                <li>
                                    <strong
                                        >Remembers Verbal Instructions:</strong
                                    >
                                    Excels at recalling information from
                                    conversations, lectures, and discussions.
                                </li>
                                <li>
                                    <strong>Engages in Discussions:</strong>
                                    Enjoys participating in group discussions,
                                    debates, and verbal exchanges.
                                </li>
                                <li>
                                    <strong>Learns Through Listening:</strong>
                                    Absorbs information effectively through
                                    audio resources like podcasts and lectures.
                                </li>
                                <li>
                                    <strong>
                                        Reads Aloud to Understand
                                        Concepts:</strong
                                    >
                                    Often reads aloud or speaks through problems
                                    to reinforce learning.
                                </li>
                                <li>
                                    <strong>
                                        Uses Rhythms or Music to Learn:</strong
                                    >
                                    May use songs, rhythms, or mnemonics to
                                    remember facts and concepts.
                                </li>
                                <li>
                                    <strong>
                                        Strong Verbal Communication
                                        Skills:</strong
                                    >
                                    Comfortable explaining ideas and concepts to
                                    others verbally.
                                </li>
                                <li>
                                    <strong>
                                        Remembers Tone and Emotion in
                                        Speech:</strong
                                    >
                                    Can recall not only what was said but also
                                    the tone and emotional context of
                                    conversations.
                                </li>
                            </ul>

                            <h2 class="text-lg font-semibold mb-4">
                                Visual Learning Characteristics:
                            </h2>
                            <ul class="list-disc pl-5">
                                <li>
                                    <strong> Prefers Visual Aids:</strong>
                                    Learns best when information is presented
                                    through diagrams, charts, videos, and
                                    images.
                                </li>
                                <li>
                                    <strong> Strong Spatial Awareness:</strong>
                                    Easily interprets and remembers spatial
                                    arrangements, maps, and visual layouts.
                                </li>
                                <li>
                                    <strong>
                                        Colour-Coded and Organised
                                        Notes:</strong
                                    >
                                    Tends to benefit from organising notes with
                                    colours, highlights, and mind maps.
                                </li>
                                <li>
                                    <strong>
                                        Pays Attention to Visual
                                        Details:</strong
                                    >
                                    Notices and remembers visual cues like
                                    symbols, shapes, and images.
                                </li>
                                <li>
                                    <strong>
                                        Reads Body Language and Visual Cues
                                        Well:</strong
                                    >
                                    Can often pick up on non-verbal cues in
                                    communication and learning.
                                </li>
                                <li>
                                    <strong>
                                        Visualises Concepts in Mind:</strong
                                    >
                                    Can "see" concepts and ideas mentally,
                                    making it easier to remember and apply them.
                                </li>
                                <li>
                                    <strong>
                                        Uses Images for Problem-Solving:</strong
                                    >
                                    Visualises steps or uses drawings to solve
                                    complex problems.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-120 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/7.svg'"
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
                    <h2 class="text-3xl font-semibold">
                        Your child’s learning style is a blend of both
                        kinaesthetic and auditory preferences
                    </h2>
                    <p class="">
                        Your child absorbs and retains information best when
                        they can physically engage with the material while also
                        processing auditory input. Here's a closer look at what
                        makes kinaesthetic and auditory learners unique:
                    </p>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div>
                            <h2 class="text-lg font-semibold mb-2">
                                Characteristics of Kinaesthetic and Auditory
                                Learners
                            </h2>

                            <div>
                                <h2 class="text-lg font-semibold mb-4">
                                    Kinaesthetic Learning Characteristics:
                                </h2>
                                <ul class="list-disc pl-5 space-y-2">
                                    <li>
                                        <strong>Learns Best by Doing: </strong
                                        ><br />
                                        Kinaesthetic learners thrive when they
                                        can physically engage with the material,
                                        whether through building, manipulating
                                        objects, or performing tasks.
                                    </li>

                                    <li>
                                        <strong
                                            >Enjoys Movement During Learning: </strong
                                        ><br />Kinaesthetic learners benefit
                                        from moving around while studying or
                                        learning, such as pacing while thinking
                                        or engaging in active learning stations.
                                    </li>

                                    <li>
                                        <strong>Strong Motor Skills: </strong>
                                        They often excel in activities that
                                        require coordination, such as sports,
                                        dance, or hands-on tasks that involve
                                        using tools or creating things.
                                    </li>

                                    <li>
                                        <strong
                                            >Solves Problems Through Physical
                                            Interaction:
                                        </strong>
                                        Kinaesthetic learners prefer to solve
                                        problems by physically engaging with the
                                        material, whether it’s through trial and
                                        error or building models to understand a
                                        concept.
                                    </li>

                                    <li>
                                        <strong> Physical Memory: </strong>
                                        They tend to remember information better
                                        when they’ve physically acted it out or
                                        performed a related task, such as
                                        writing, building, or moving.
                                    </li>

                                    <li>
                                        <strong
                                            >Focuses Better When Active:
                                        </strong>
                                        They often concentrate more effectively
                                        when they are physically engaged, such
                                        as doodling during a lecture or moving
                                        around while solving a problem.
                                    </li>

                                    <li>
                                        <strong
                                            >Enjoys Hands-On Projects:
                                        </strong>
                                        Kinaesthetic learners excel at projects
                                        that involve making, building, or doing,
                                        such as experiments, crafts, or physical
                                        demonstrations.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-120 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/7.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <h2 class="text-3xl font-semibold mb-4">
                        Auditory Learning Characteristics:
                    </h2>
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-120 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/12.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="col-6">
                        <ul class="list-disc pl-5 space-y-2">
                            <li>
                                <strong>Learns Best Through Listening: </strong
                                >Auditory learners excel when information is
                                presented verbally. They absorb content through
                                discussions, lectures, and audio resources like
                                podcasts or audiobooks.
                            </li>

                            <li>
                                <strong>Strong Verbal Memory: </strong> They
                                often have a strong memory for spoken
                                information, recalling details from
                                conversations or lessons more easily than from
                                written text.
                            </li>

                            <li>
                                <strong
                                    >Enjoys Participating in Discussions:
                                </strong>
                                Auditory learners tend to engage well in group
                                discussions or debates, where they can process
                                information by talking it through with others.
                            </li>

                            <li>
                                <strong
                                    >Uses Verbal Repetition for Recall:
                                </strong>
                                They often remember facts by repeating them out
                                loud, whether it’s practising vocabulary,
                                reciting key points, or reading aloud to
                                reinforce their understanding.
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <!-- Strengths of Auditory Learners -->
                        <ul class="list-disc pl-6 space-y-4">
                            <li>
                                <strong
                                    >Listens to Understand Complex Ideas:
                                </strong>
                                They can grasp abstract concepts when they hear
                                them explained clearly, making them well-suited
                                to learning through audio-based instruction or
                                storytelling.
                            </li>

                            <li>
                                <strong>Benefits from Background Noise: </strong
                                >Many auditory learners find it easier to
                                concentrate when there is soft background noise,
                                such as music, or when they are listening to
                                something engaging while working.
                            </li>

                            <li>
                                <strong>Prefers Spoken Instructions: </strong
                                >They often prefer verbal instructions to
                                written ones, as they can better understand and
                                follow directions that are spoken.
                            </li>
                        </ul>
                    </div>

                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-95 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/21.svg'"
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
                <h2 class="text-3xl font-semibold mb-4">
                    Your Child’s Learning Style:
                </h2>
                <p class="mb-4">
                    Your child’s learning style is a blend of both kinaesthetic
                    and reading/writing preferences, meaning they absorb and
                    retain information best when they can physically engage with
                    the material while also processing auditory input. Here's a
                    closer look at what makes kinaesthetic and reading/writing
                    learners unique:
                </p>

                <div class="row">
                    <h2 class="text-lg font-semibold mb-4">
                        Characteristics of Kinaesthetic and Reading/Writing
                        Learners:
                    </h2>

                    <h2 class="text-lg font-semibold mb-2">
                        Kinaesthetic Learning Characteristics:
                    </h2>

                    <div class="col-6">
                        <ul class="list-disc pl-6 space-y-2">
                            <li>
                                <strong>Learns Best by Doing:</strong>
                                Kinaesthetic learners excel when they can
                                physically engage with the material, such as
                                through building, crafting, or manipulating
                                objects.
                            </li>
                            <li>
                                <strong
                                    >Enjoys Movement During Learning:</strong
                                >
                                They benefit from movement during study
                                sessions, such as pacing while thinking or using
                                hands-on activities to stay engaged.
                            </li>
                            <li>
                                <strong>Strong Motor Skills:</strong>
                                Kinaesthetic learners often excel in activities
                                that require coordination, such as sports, art,
                                or tasks involving physical manipulation.
                            </li>
                            <li>
                                <strong>Physical Memory:</strong> They tend to
                                remember information better when they’ve
                                physically acted it out or performed a related
                                task, such as writing, building, or creating.
                            </li>
                            <li>
                                <strong
                                    >Problem-Solves Through Hands-On
                                    Activities:</strong
                                >
                                Kinaesthetic learners prefer to solve problems
                                by engaging physically with the material, using
                                trial and error or building models to understand
                                solutions.
                            </li>
                            <li>
                                <strong>Focuses Better When Active:</strong>
                                Movement helps them stay focused during
                                learning, as sitting still for long periods can
                                be challenging.
                            </li>
                            <li>
                                <strong>Enjoys Hands-On Projects:</strong>
                                Kinaesthetic learners are naturally drawn to
                                projects that involve creating or doing, such as
                                building models or conducting experiments.
                            </li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-120 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/7.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-50 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/11.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="col-6">
                        <h2 class="text-lg font-semibold mb-4">
                            Reading/Writing Learning Characteristics:
                        </h2>
                        <!-- Strengths of Auditory Learners -->
                        <ul class="list-disc pl-6 space-y-2">
                            <li>
                                <strong>Prefers Written Text:</strong>
                                Reading/writing learners process information
                                best through written materials like books,
                                articles, and notes. They often take detailed
                                notes to reinforce what they’ve learned.
                            </li>
                            <li>
                                <strong>Strong Writing Skills:</strong> They are
                                skilled at organising and expressing ideas
                                through writing, excelling at tasks like essays,
                                reports, and written reflections.
                            </li>
                        </ul>
                        <ul class="list-disc pl-6 space-y-4">
                            <li>
                                <strong>Uses Written Notes for Memory:</strong>
                                Writing down key points or rewriting notes helps
                                them retain information and understand material
                                more deeply.
                            </li>
                            <li>
                                <strong
                                    >Favours Text-Based Learning
                                    Resources:</strong
                                >
                                They prefer to engage with learning through
                                textbooks, manuals, and written guides, using
                                these resources to build their knowledge.
                            </li>

                            <li>
                                <strong
                                    >Good at Retaining Written
                                    Information:</strong
                                >
                                They have a strong ability to remember facts and
                                ideas that they’ve read or written down, making
                                written materials a critical part of their
                                learning process.
                            </li>
                            <li>
                                <strong>Processes Ideas by Writing:</strong>
                                Writing helps them clarify their thoughts and
                                understand complex ideas, often leading them to
                                use writing as a tool for reflection and
                                comprehension.
                            </li>
                            <li>
                                <strong
                                    >Summarises and Rewrites to Reinforce
                                    Learning:</strong
                                >
                                Summarising information or rewriting notes
                                allows them to better structure their
                                understanding, reinforcing key details through
                                writing.
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
                <h2 class="text-3xl font-semibold mb-6">
                    Your Child’s Learning Style: Kinaesthetic and Visual
                </h2>

                <p class="mb-6">
                    Your child’s learning style is a unique blend of both
                    kinaesthetic and visual preferences, meaning they absorb and
                    retain information most effectively when they can physically
                    interact with the material and also see it represented
                    visually. Here's a closer look at what makes kinaesthetic
                    and visual learners unique:
                </p>

                <div class="row">
                    <div class="col-6">
                        <h2 class="text-3xl font-semibold mb-4">
                            Characteristics of Kinaesthetic and Visual Learners
                        </h2>

                        <h4 class="text-lg font-semibold mb-2">
                            Kinaesthetic Learning Characteristics:
                        </h4>
                        <ul class="list-disc pl-6 mb-6">
                            <li>
                                <strong>Learns Best by Doing:</strong>
                                Kinaesthetic learners need physical engagement
                                with the material. They thrive in hands-on
                                activities like building, drawing, or
                                experimenting.
                            </li>
                            <li>
                                <strong
                                    >Prefers Movement During Learning:</strong
                                >

                                They focus better when they can move around or
                                engage in physical activity, whether it's
                                pacing, using tools, or working with objects.
                            </li>
                            <li>
                                <strong
                                    >Excellent Hand-Eye Coordination:</strong
                                >
                                Kinaesthetic learners often have strong motor
                                skills and excel at tasks that require hand-eye
                                coordination.
                            </li>
                            <li>
                                <strong
                                    >Engages in Active Problem Solving:</strong
                                >

                                They learn by physically interacting with
                                materials and solving problems through trial and
                                error, experimenting, or acting out processes.
                            </li>
                            <li>
                                <strong>Physical Memory:</strong>
                                They remember things by physically doing
                                them—whether it's performing an experiment or
                                writing out a solution—rather than reading or
                                listening.
                            </li>
                            <li>
                                <strong
                                    >Enjoys Building and Creating
                                    Projects:</strong
                                >
                                Kinaesthetic learners love tasks that involve
                                constructing or creating something tangible,
                                such as models, art, or physical demonstrations.
                            </li>
                            <li>
                                <strong>Benefits from Movement Breaks:</strong>
                                Taking breaks to move around helps them refocus
                                and return to learning with renewed energy and
                                concentration.
                            </li>
                        </ul>

                        <h4 class="text-lg font-semibold mb-2">
                            Visual Learning Characteristics:
                        </h4>
                        <ul class="list-disc pl-6 mb-6">
                            <li>
                                <strong
                                    >Enjoys Learning Through Visual
                                    Aids:</strong
                                >
                                Visual learners prefer diagrams, pictures,
                                charts, and videos to help them process complex
                                information.
                            </li>
                            <li>
                                <strong>Strong Spatial Awareness:</strong>
                                They excel at interpreting spatial information,
                                such as maps, diagrams, and layouts, and often
                                use this skill to make sense of abstract ideas.
                            </li>
                            <li>
                                <strong>Recalls Visual Details Easily:</strong>
                                Visual learners remember information by
                                recalling images, colours, or visual cues
                                they’ve seen.
                            </li>
                            <li>
                                <strong>Organises Information Visually:</strong>
                                They benefit from organising their notes using
                                mind maps, colour coding, or diagrams to better
                                understand and retain information.
                            </li>
                            <li>
                                <strong>Thinks in Pictures:</strong>
                                Visual learners often "see" concepts in their
                                mind, which helps them understand and process
                                abstract ideas more effectively.
                            </li>
                            <li>
                                <strong
                                    >Prefers Quiet Study Environments:</strong
                                >
                                They tend to focus best in calm, visually
                                organised spaces with minimal distractions.
                            </li>
                            <li>
                                <strong
                                    >Enjoys Visualising Processes and
                                    Concepts:</strong
                                >

                                Whether it's a math problem or a history lesson,
                                they prefer to visualise the steps or events to
                                understand the material.
                            </li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-120 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/7.svg'"
                                alt=""
                            />
                        </div>
                        <div class="flex justify-center items-center">
                            <img
                                class="w-64 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/3.svg'"
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
                <div>
                    <h2 class="text-3xl font-bold">
                        Your Child's Learning Style: Kinaesthetic Learner
                    </h2>
                    <p>
                        Your child is a kinaesthetic learner, which means they
                        understand and remember information best when it is
                        experienced through physical activity and hands-on
                        involvement. Kinaesthetic learners excel when they can
                        engage their bodies in the learning process.
                    </p>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div>
                            <h2 class="text-3xl font-semibold mb-4">
                                Characteristics of Kinaesthetic Learners:
                            </h2>
                            <ul class="list-disc pl-6 space-y-2">
                                <li>
                                    <strong
                                        >Prefers Hands-On Activities:</strong
                                    >
                                    Kinaesthetic learners thrive on activities
                                    that involve movement and touch. They enjoy
                                    building, crafting, and physically
                                    manipulating objects.
                                </li>
                                <li>
                                    <strong>Strong Physical Awareness:</strong>
                                    They have a keen sense of body movement and
                                    spatial awareness. This makes them excel in
                                    activities that require coordination and
                                    physical skills.
                                </li>
                                <li>
                                    <strong>Learns by Doing:</strong>
                                    Kinaesthetic learners absorb information
                                    best through active participation. They
                                    understand concepts better when they can
                                    physically engage with the material.
                                </li>
                                <li>
                                    <strong>Enjoys Physical Activities:</strong>
                                    They are often energetic and enjoy sports,
                                    dancing, and other physical activities. They
                                    learn well in environments where they can
                                    move around.
                                </li>
                                <li>
                                    <strong
                                        >Good at Remembering Physical
                                        Experiences:</strong
                                    >
                                    They have a strong memory for physical
                                    activities and experiences. They can recall
                                    details of activities they participated in
                                    and use these memories to understand new
                                    information.
                                </li>
                                <li>
                                    <strong
                                        >Prefers Action-Based Learning:</strong
                                    >
                                    Kinaesthetic learners enjoy role-playing,
                                    experiments, and simulations. They benefit
                                    from learning activities that involve acting
                                    out scenarios and solving problems hands-on.
                                </li>
                                <li>
                                    <strong>Fidgety and Restless:</strong> They
                                    may have difficulty sitting still for long
                                    periods and prefer to be active. Providing
                                    opportunities for movement can help them
                                    stay focused and engaged.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-120 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/7.svg'"
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
                <div>
                    <p class="">
                        Your child’s learning style is a blend of both
                        reading/writing and auditory preferences, meaning they
                        absorb and retain information best when they can combine
                        reading and writing tasks with listening to verbal
                        explanations or discussions. Here's a closer look at
                        what makes reading/writing and auditory learners unique:
                    </p>
                </div>

                <div class="row">
                    <h2 class="text-3xl font-semibold mb-4">
                        Characteristics of Reading/Writing and Auditory
                        Learners:
                    </h2>

                    <h2 class="text-lg font-semibold mb-4">
                        Reading/Writing Learning Characteristics:
                    </h2>
                    <div class="col-6">
                        <div>
                            <ul class="list-disc ml-6">
                                <li>
                                    <strong>Prefers Written Text:</strong>
                                    Reading/writing learners absorb information
                                    best through written text, such as books,
                                    articles, or notes, and they often take
                                    detailed notes to process new information.
                                </li>
                                <li>
                                    <strong>Strong Writing Skills:</strong> They
                                    express themselves clearly through writing,
                                    enjoying tasks like writing essays, reports,
                                    or summaries to organise their thoughts.
                                </li>
                                <li>
                                    <strong
                                        >Uses Written Notes for Memory:</strong
                                    >
                                    Writing down key points helps them clarify
                                    ideas and remember information. They often
                                    rewrite or summarise notes to reinforce
                                    their learning.
                                </li>
                                <li>
                                    <strong
                                        >Favours Text-Based Learning
                                        Resources:</strong
                                    >
                                    Reading/writing learners prefer studying
                                    with textbooks, manuals, and written guides,
                                    using these resources to deepen their
                                    understanding.
                                </li>
                                <li>
                                    <strong
                                        >Good at Retaining Written
                                        Information:</strong
                                    >
                                    They remember facts and concepts they’ve
                                    read or written down, making studying from
                                    written materials particularly effective.
                                </li>
                                <li>
                                    <strong
                                        >Prefers to Process Information by
                                        Writing:</strong
                                    >
                                    They often use writing as a way to process
                                    and organise their understanding of new
                                    material, helping them develop clearer
                                    insights through essays or reports.
                                </li>
                                <li>
                                    <strong>
                                        Uses Summaries and Rewrites to Reinforce
                                        Learning:</strong
                                    >
                                    Summarising information or rewriting notes
                                    helps reading/writing learners retain
                                    important details, strengthening their
                                    memory and understanding.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-64 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/7.svg'"
                                alt=""
                            />
                        </div>
                        <div class="flex justify-center items-center">
                            <img
                                class="w-64 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/3.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <h2 class="text-3xl font-semibold mb-4">
                        Auditory Learning Characteristics:
                    </h2>
                    <div class="col-6">
                        <!-- Strengths of Auditory Learners -->

                        <ul class="list-disc ml-6">
                            <li>
                                <strong>Learns Best Through Listening:</strong>
                                Auditory learners excel when they hear
                                information presented verbally, such as in
                                discussions, lectures, or audio resources like
                                podcasts or audiobooks.
                            </li>
                            <li>
                                <strong>Strong Verbal Memory:</strong> They
                                often have an exceptional memory for spoken
                                information, recalling details from lessons,
                                conversations, or verbal instructions easily.
                            </li>
                            <li>
                                <strong>Engages in Discussions:</strong>
                                Auditory learners thrive in group discussions or
                                debates, processing information by talking it
                                through and listening to different perspectives.
                            </li>
                            <li>
                                <strong
                                    >Uses Verbal Repetition for Recall: </strong
                                >Repeating key points out loud helps auditory
                                learners remember facts, whether it’s practising
                                vocabulary, discussing ideas, or reading aloud.
                            </li>
                            <li>
                                <strong
                                    >Understands Abstract Ideas Through Verbal
                                    Explanation:</strong
                                >
                                Auditory learners can grasp complex or abstract
                                concepts when they hear them explained clearly,
                                making verbal instruction an effective tool for
                                learning.
                            </li>
                            <li>
                                <strong>Prefers Verbal Instructions:</strong>
                                They often follow tasks and lessons more easily
                                when instructions are given verbally, helping
                                them understand and apply information more
                                effectively.
                            </li>
                            <li>
                                <strong
                                    >Responds Well to Audio Resources:</strong
                                >
                                They benefit from listening to background music
                                or engaging audio content while working, as it
                                helps them concentrate and stay focused.
                            </li>
                        </ul>
                    </div>

                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-90 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/11.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Report 10 Reading & Writing _ Kinesthethic Blend-- >
     <!-- style == 'Reading/Writing/Kinesthethic'  -->
        <div v-if="style == 'Reading/Writing/Kinesthethic'">
            <!-- Content for Report 10 -->
            <div class="p-6">
                <h2 class="text-3xl font-bold mb-6">
                    Your Child’s Learning Style
                </h2>
                <p class="mb-6">
                    Your child’s learning style is a blend of both
                    reading/writing and kinaesthetic preferences, meaning they
                    absorb and retain information most effectively when they can
                    combine written tasks, such as reading and writing, with
                    physical activities and hands-on engagement. Here's a closer
                    look at what makes reading/writing and kinaesthetic learners
                    unique:
                </p>

                <div class="space-y-6">
                    <div class="row">
                        <div class="col-6">
                            <div class="">
                                <h2 class="text-lg font-semibold mb-4">
                                    Reading/Writing Learning Characteristics
                                </h2>
                                <ul class="list-disc pl-6 space-y-2">
                                    <li>
                                        <strong>Prefers Written Text</strong>
                                        Reading/writing learners process
                                        information best through written
                                        materials like books, articles, and
                                        notes. They often take detailed notes to
                                        reinforce what they’ve learned.
                                    </li>
                                    <li>
                                        <strong>Strong Writing Skills</strong>
                                        They are skilled at organising and
                                        expressing ideas through writing,
                                        excelling at tasks like essays, reports,
                                        and written reflections.
                                    </li>
                                    <li>
                                        <strong
                                            >Uses Written Notes for
                                            Memory</strong
                                        >
                                        Writing down key points or rewriting
                                        notes helps them retain information and
                                        understand material more deeply.
                                    </li>
                                    <li>
                                        <strong
                                            >Favours Text-Based Learning
                                            Resources</strong
                                        >
                                        They prefer to engage with learning
                                        through textbooks, manuals, and written
                                        guides, using these resources to build
                                        their knowledge.
                                    </li>
                                    <li>
                                        <strong
                                            >Good at Retaining Written
                                            Information</strong
                                        >
                                        They have a strong ability to remember
                                        facts and ideas that they’ve read or
                                        written down, making written materials a
                                        critical part of their learning process.
                                    </li>
                                    <li>
                                        <strong
                                            >Processes Ideas by Writing</strong
                                        >
                                        Writing helps them clarify their
                                        thoughts and understand complex ideas,
                                        often leading them to use writing as a
                                        tool for reflection and comprehension.
                                    </li>
                                    <li>
                                        <strong>
                                            Summarises and Rewrites to Reinforce
                                            Learning
                                        </strong>
                                        Summarising information or rewriting
                                        notes allows them to better structure
                                        their understanding, reinforcing key
                                        details through writing.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="flex justify-center items-center">
                                <img
                                    class="w-64 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Kids/LearningStyles/7.svg'"
                                    alt=""
                                />
                            </div>
                            <div class="flex justify-center items-center">
                                <img
                                    class="w-64 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Kids/LearningStyles/3.svg'"
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
                                    :src="'/images/reports-svg-images/Kids/LearningStyles/24.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                        <div class="col-6">
                            <h2 class="text-lg font-semibold mb-4">
                                Kinaesthetic Learning Characteristics
                            </h2>
                            <ul class="list-disc pl-6 space-y-2">
                                <li>
                                    <strong>Learns Best by Doing</strong>
                                    Kinaesthetic learners excel when they can
                                    physically engage with the material, such as
                                    through building, crafting, or manipulating
                                    objects.
                                </li>
                                <li>
                                    <strong
                                        >Enjoys Movement During Learning</strong
                                    >
                                    They benefit from movement during study
                                    sessions, such as pacing while thinking or
                                    using hands-on activities to stay engaged.
                                </li>
                                <li>
                                    <strong>Strong Motor Skills</strong>
                                    Kinaesthetic learners often excel in
                                    activities that require coordination, such
                                    as sports, art, or tasks involving physical
                                    manipulation.
                                </li>
                                <li>
                                    <strong>Physical Memory</strong>
                                    They tend to remember information better
                                    when they’ve physically acted it out or
                                    performed a related task, such as writing,
                                    building, or creating.
                                </li>
                                <li>
                                    <strong>
                                        Problem-Solves Through Hands-On
                                        Activities
                                    </strong>
                                    Kinaesthetic learners prefer to solve
                                    problems by engaging physically with the
                                    material, using trial and error or building
                                    models to understand solutions.
                                </li>
                                <li>
                                    <strong>Focuses Better When Active</strong>
                                    Movement helps them stay focused during
                                    learning, as sitting still for long periods
                                    can be challenging.
                                </li>
                                <li>
                                    <strong>Enjoys Hands-On Projects</strong>
                                    Kinaesthetic learners are naturally drawn to
                                    projects that involve creating or doing,
                                    such as building models or conducting
                                    experiments.
                                </li>
                            </ul>
                        </div>
                    </div>



                </div>


            </div>
        </div>

        <!-- Report 11 Reading & Writing _ Visual Blend -->
        <div v-if="style == 'Reading/Writing/Visual'">
            <!-- Content for Report 11 -->
            <div class="p-6">
                <h2 class="text-3xl font-bold mb-6">
                    Your Child's Learning Style: A Blend of Reading/Writing and
                    Visual Preferences
                </h2>
                <p class="mb-6">
                    Your child’s learning style is a blend of both
                    reading/writing and visual preferences. This means they
                    understand and retain information best when they can see it
                    represented visually and then reinforce it through reading
                    or writing. Here's a closer look at what makes
                    reading/writing and visual learners unique:
                </p>

                <div class="row">
                    <h2 class="text-3xl font-semibold mt-6 mb-4">
                        Characteristics of Reading/Writing and Visual Learners:
                    </h2>
                    <div class="col-6">
                        <h2 class="text-lg font-semibold mt-6">
                            Reading/Writing Learning Characteristics:
                        </h2>
                        <ul class="list-disc pl-6 space-y-2">
                            <li>
                                <strong>Learns Best Through Reading</strong>
                                Reading/writing learners prefer reading
                                textbooks, articles, or notes to absorb
                                information, and they often take extensive notes
                                to process what they’ve read.
                            </li>
                            <li>
                                <strong
                                    >Strong Preference for Written
                                    Communication</strong
                                >
                                They often express their thoughts more clearly
                                through writing, enjoying tasks like writing
                                essays, reports, or summaries.
                            </li>
                            <li>
                                <strong
                                    >Uses Written Notes to Organise
                                    Thoughts</strong
                                >
                                Writing out ideas helps them clarify their
                                thoughts and retain information. They often
                                rewrite notes or summarise information to
                                reinforce learning.
                            </li>
                            <li>
                                <strong
                                    >Prefers Text-Based Learning
                                    Materials</strong
                                >
                                Reading/writing learners tend to favour books,
                                manuals, and written guides, and they prefer
                                studying with written resources.
                            </li>
                            <li>
                                <strong
                                    >Good at Remembering Written
                                    Information</strong
                                >
                                They have a strong ability to remember facts and
                                concepts they’ve read or written down, which
                                helps them retain and recall details more
                                easily.
                            </li>
                            <li>
                                <strong
                                    >Enjoys Writing to Understand
                                    Concepts</strong
                                >
                                They often use writing as a tool to organise
                                their thoughts and make sense of new material,
                                whether through essays, reports, or notes.
                            </li>
                            <li>
                                <strong>
                                    Benefits from Rewriting or Summarising
                                    Information
                                </strong>
                                Rewriting or summarising lessons helps them
                                reinforce their understanding and improves
                                retention of key concepts.
                            </li>
                        </ul>

                        <h2 class="text-lg font-semibold mt-6">
                            Visual Learning Characteristics:
                        </h2>
                        <ul class="list-disc pl-6 space-y-2">
                            <li>
                                <strong>Prefers Visual Aids</strong>Visual
                                learners thrive when they can use diagrams,
                                charts, images, and videos to understand complex
                                ideas.
                            </li>
                            <li>
                                <strong>Strong Spatial Awareness</strong> They
                                have a natural ability to interpret spatial
                                information, such as maps, layouts, and
                                diagrams, which helps them understand abstract
                                concepts.
                            </li>
                            <li>
                                <strong>Uses Visual Cues for Memory</strong>
                                Visual learners often recall information by
                                remembering images, colours, or visual patterns
                                they’ve seen.
                            </li>

                            <li>
                                <strong>Organises Information Visually</strong>
                                They are good at organising their thoughts and
                                study materials using visual tools like mind
                                maps, charts, or colour-coded notes.
                            </li>
                            <li>
                                <strong
                                    >Enjoys Calm and Organised Study
                                    Environments</strong
                                >
                                Visual learners work best in quiet, visually
                                organised spaces with minimal distractions,
                                where they can focus on diagrams, charts, or
                                images.
                            </li>
                            <li>
                                <strong>Thinks in Pictures</strong>Visual
                                learners often picture ideas in their mind,
                                helping them understand concepts that might be
                                harder to grasp through words alone.
                            </li>
                            <li>
                                <strong
                                    >Visualises Concepts and Processes</strong
                                >They often visualise steps or processes in
                                their mind, which helps them make sense of new
                                information.
                            </li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-120 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/7.svg'"
                                alt=""
                            />
                        </div>
                        <div class="flex justify-center items-center">
                            <img
                                class="w-120 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/24.svg'"
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
                        <h2 class="text-3xl font-semibold">
                            Characteristics of Reading/Writing Learners
                        </h2>
                        <p class="mt-4">
                            Your child is a reading/writing learner, which means
                            they understand and remember information best when
                            it is presented in written form. They excel when
                            they can read and write about the material. Here’s a
                            closer look at what makes reading/writing learners
                            unique:
                        </p>
                        <ol class="list-decimal list-inside mt-4 space-y-2">
                            <li>
                                <strong>Prefers Written Information:</strong>
                                <ul class="list-disc pl-6 space-y-2 ml-10">
                                    <li>
                                        Reading/writing learners enjoy reading
                                        books, articles, and other written
                                        materials. They understand and retain
                                        information best when it is presented in
                                        text.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <strong>Strong Writing Skills:</strong>
                                <ul class="list-disc pl-6 space-y-2 ml-10">
                                    <li>
                                        They often have strong writing skills
                                        and enjoy expressing their thoughts and
                                        ideas through writing. They benefit from
                                        taking detailed notes and writing essays
                                        or reports.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <strong>Enjoys Reading:</strong>
                                <ul class="list-disc pl-6 space-y-2 ml-10">
                                    <li>
                                        They have a love for reading and often
                                        spend a lot of time with books, whether
                                        for learning or pleasure. They are
                                        likely to excel in tasks that involve
                                        extensive reading.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <strong
                                    >Good at Remembering Written
                                    Information:</strong
                                >
                                <ul class="list-disc pl-6 space-y-2 ml-10">
                                    <li>
                                        They have an excellent memory for
                                        information they have read or written
                                        down. They can recall details from texts
                                        and use these to understand new
                                        information.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <strong>Learns Through Writing:</strong>
                                <ul class="list-disc pl-6 space-y-2 ml-10">
                                    <li>
                                        They learn by writing about topics,
                                        summarising information, and creating
                                        written explanations. Writing helps them
                                        organise their thoughts and reinforce
                                        their understanding.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <strong>Enjoys Lists and Organisers:</strong>
                                <ul class="list-disc pl-6 space-y-2 ml-10">
                                    <li>
                                        They benefit from using lists,
                                        organisers, and outlines to structure
                                        information. These tools help them
                                        visualise and organise their thoughts.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <strong>Reads for Pleasure:</strong>
                                <ul class="list-disc pl-6 space-y-2 ml-10">
                                    <li>
                                        They often read for pleasure and
                                        personal enrichment, enjoying a wide
                                        variety of genres and topics.
                                    </li>
                                </ul>
                            </li>
                        </ol>
                    </section>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-64 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/7.svg'"
                            alt=""
                        />
                    </div>
                    <div class="flex justify-center items-center">
                        <img
                            class="w-90 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/3.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>


        </div>

        <!-- Report 13 Visual _ Auditory Blend-->
        <div v-if="style == 'Visual/Auditory'" class="p-6">
            <!-- Content for Report 13 -->
            <section class="mb-8">
                <p class="mt-4">
                    Your child’s learning style is a unique blend of both visual
                    and auditory preferences. This means they understand and
                    remember information best when it is presented both visually
                    and verbally. Here's a closer look at what makes visual and
                    auditory learners unique:
                </p>
            </section>

            <div class="row">
                <div class="col-6">
                    <section class="mb-8">
                        <h2 class="text-3xl font-semibold">
                            Characteristics of Visual and Auditory Learners
                        </h2>
                        <strong>Visual Learning Characteristics:</strong>
                        <ol class="list-decimal pl-6 space-y-2 ml-8">
                            <li>
                                <strong>Prefers Visual Aids:</strong> Learns
                                best when information is presented through
                                diagrams, charts, videos, and images.
                            </li>
                            <li>
                                <strong>Strong Spatial Awareness:</strong>
                                Easily interprets and remembers spatial
                                arrangements, maps, and visual layouts.
                            </li>
                            <li>
                                <strong
                                    >Colour-Coded and Organised Notes:</strong
                                >
                                Tends to benefit from organising notes with
                                colours, highlights, and mind maps.
                            </li>
                            <li>
                                <strong
                                    >Pays Attention to Visual Details:</strong
                                >
                                Notices and remembers visual cues like symbols,
                                shapes, and images.
                            </li>
                            <li>
                                <strong
                                    >Reads Body Language and Visual Cues
                                    Well:</strong
                                >
                                Can often pick up on non-verbal cues in
                                communication and learning.
                            </li>
                            <li>
                                <strong>Visualises Concepts in Mind:</strong>
                                Can "see" concepts and ideas mentally, making it
                                easier to remember and apply them.
                            </li>
                            <li>
                                <strong
                                    >Uses Images for Problem-Solving:</strong
                                >
                                Visualises steps or uses drawings to solve
                                complex problems.
                            </li>
                        </ol>
                        <strong>Auditory Learning Characteristics:</strong>
                        <ol class="list-decimal pl-6 space-y-2 ml-8">
                            <li>
                                <strong>Remembers Verbal Instructions:</strong>
                                Excels at recalling information from
                                conversations, lectures, and discussions.
                            </li>
                            <li>
                                <strong>Engages in Discussions:</strong> Enjoys
                                participating in group discussions, debates, and
                                verbal exchanges.
                            </li>
                            <li>
                                <strong>Learns Through Listening:</strong>
                                Absorbs information effectively through audio
                                resources like podcasts and lectures.
                            </li>
                            <li>
                                <strong
                                    >Reads Aloud to Understand Concepts:</strong
                                >
                                Often reads aloud or speaks through problems to
                                reinforce learning.
                            </li>
                            <li>
                                <strong>Uses Rhythms or Music to Learn:</strong>
                                May use songs, rhythms, or mnemonics to remember
                                facts and concepts.
                            </li>
                            <li>
                                <strong
                                    >Strong Verbal Communication Skills:</strong
                                >
                                Comfortable explaining ideas and concepts to
                                others verbally.
                            </li>
                            <li>
                                <strong
                                    >Remembers Tone and Emotion in
                                    Speech:</strong
                                >
                                Can recall not only what was said but also the
                                tone and emotional context of conversations.
                            </li>
                        </ol>
                    </section>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-120 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/7.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>


        </div>

        <!-- Report 14 Visual _ Kinesthethic Blend-->
        <div v-if="style == 'Visual/Kinesthethic'" class="p-6">
            <!-- Content for Report 14 -->
            <section class="mb-8">
                <p class="mt-4">
                    Your child’s learning style is a unique blend of both visual
                    and kinaesthetic preferences. This means they understand and
                    remember information best when they can see it and then
                    physically engage with it. Here's a closer look at what
                    makes visual and kinaesthetic learners unique:
                </p>
            </section>

            <div class="row">
                <div class="col-6">
                    <section class="mb-8">
                        <h2 class="text-3xl font-semibold">
                            Characteristics of Visual and Kinaesthetic Learners
                        </h2>
                        <strong>Visual Learning Characteristics:</strong>
                        <ol class="list-decimal pl-6 space-y-2 ml-8">
                            <li>
                                <strong
                                    >Enjoys Learning Through Visual Aids</strong
                                ><br />
                                Visual learners prefer diagrams, pictures,
                                charts, and videos to help them process complex
                                information.
                            </li>
                            <li>
                                <strong>Strong Spatial Awareness</strong><br />
                                They excel at interpreting spatial information,
                                such as maps, diagrams, and layouts, and often
                                use this skill to make sense of abstract ideas.
                            </li>
                            <li>
                                <strong>Recalls Visual Details Easily</strong
                                ><br />
                                Visual learners remember information by
                                recalling images, colours, or visual cues
                                they’ve seen.
                            </li>
                            <li>
                                <strong>Organises Information Visually</strong
                                ><br />
                                They benefit from organising their notes using
                                mind maps, colour coding, or diagrams to better
                                understand and retain information.
                            </li>
                            <li>
                                <strong>Thinks in Pictures</strong><br />
                                Visual learners often "see" concepts in their
                                mind, which helps them understand and process
                                abstract ideas more effectively.
                            </li>
                            <li>
                                <strong>Prefers Quiet Study Environments</strong
                                ><br />
                                They tend to focus best in calm, visually
                                organised spaces with minimal distractions.
                            </li>
                            <li>
                                <strong
                                    >Enjoys Visualising Processes and
                                    Concepts</strong
                                ><br />
                                Whether it's a math problem or a history lesson,
                                they prefer to visualise the steps or events to
                                understand the material.
                            </li>
                        </ol>
                        <strong>Kinaesthetic Learning Characteristics:</strong>
                        <ol class="list-decimal pl-6 space-y-2 ml-8">
                            <li>
                                <strong>Learns Best by Doing</strong><br />
                                Kinaesthetic learners need physical engagement
                                with the material. They thrive in hands-on
                                activities like building, drawing, or
                                experimenting.
                            </li>
                            <li>
                                <strong>Prefers Movement During Learning</strong
                                ><br />
                                They focus better when they can move around or
                                engage in physical activity, whether it's
                                pacing, using tools, or working with objects.
                            </li>
                            <li>
                                <strong>Excellent Hand-Eye Coordination</strong
                                ><br />
                                Kinaesthetic learners often have strong motor
                                skills and excel at tasks that require hand-eye
                                coordination.
                            </li>
                            <li>
                                <strong
                                    >Engages in Active Problem Solving</strong
                                ><br />
                                They learn by physically interacting with
                                materials and solving problems through trial and
                                error, experimenting, or acting out processes.
                            </li>
                            <li>
                                <strong>Physical Memory</strong><br />
                                They remember things by physically doing
                                them—whether it's performing an experiment or
                                writing out a solution—rather than reading or
                                listening.
                            </li>
                            <li>
                                <strong
                                    >Enjoys Building and Creating
                                    Projects</strong
                                ><br />
                                Kinaesthetic learners love tasks that involve
                                constructing or creating something tangible,
                                such as models, art, or physical demonstrations.
                            </li>
                            <li>
                                <strong>Benefits from Movement Breaks</strong
                                ><br />
                                Taking breaks to move around helps them refocus
                                and return to learning with renewed energy and
                                concentration.
                            </li>
                        </ol>
                    </section>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-120 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/7.svg'"
                            alt=""
                        />
                    </div>
                    <div class="flex justify-center items-center">
                        <img
                            class="w-90 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/9.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>

        </div>

        <!-- Report 15 Visual _ Reading & Writing-->
        <div v-if="style == 'Visual/Reading/Writing'" class="p-6">
            <!-- Content for Report 15 -->
            <section class="mb-8">
                <p class="mt-4">
                    Your child’s learning style is a blend of both
                    <strong>visual</strong> and
                    <strong>reading/writing</strong> preferences. This means
                    they understand and retain information best when they can
                    see it represented visually and then reinforce it through
                    reading or writing. Here's a closer look at what makes
                    <strong>visual and reading/writing learners</strong> unique:
                </p>
            </section>

            <div class="row">
                <div class="col-6">
                    <section class="mb-8">
                        <h2 class="text-3xl font-semibold">
                            Characteristics of Visual and Reading/Writing
                            Learners
                        </h2>
                        <h2 class="text-3xl font-semibold">
                            Visual Learning Characteristics:
                        </h2>
                        <ol class="list-decimal pl-6 space-y-2 ml-8">
                            <li>
                                <strong>Prefers Visual Aids</strong><br />Visual
                                learners thrive when they can use diagrams,
                                charts, images, and videos to understand complex
                                ideas.
                            </li>
                            <li>
                                <strong>Strong Spatial Awareness</strong
                                ><br />They have a natural ability to interpret
                                spatial information, such as maps, layouts, and
                                diagrams, which helps them understand abstract
                                concepts.
                            </li>
                            <li>
                                <strong>Uses Visual Cues for Memory</strong
                                ><br />Visual learners often recall information
                                by remembering images, colours, or visual
                                patterns they’ve seen.
                            </li>
                            <li>
                                <strong>Organises Information Visually</strong
                                ><br />They are good at organising their
                                thoughts and study materials using visual tools
                                like mind maps, charts, or colour-coded notes.
                            </li>
                            <li>
                                <strong
                                    >Enjoys Calm and Organised Study
                                    Environments</strong
                                ><br />Visual learners work best in quiet,
                                visually organised spaces with minimal
                                distractions, where they can focus on diagrams,
                                charts, or images.
                            </li>
                            <li>
                                <strong>Thinks in Pictures</strong><br />Visual
                                learners often picture ideas in their mind,
                                helping them understand concepts that might be
                                harder to grasp through words alone.
                            </li>
                            <li>
                                <strong
                                    >Visualises Concepts and Processes</strong
                                ><br />They often visualise steps or processes
                                in their mind, which helps them make sense of
                                new information.
                            </li>
                        </ol>
                        <h2 class="text-3xl font-semibold">
                            Reading/Writing Learning Characteristics:
                        </h2>
                        <ol class="list-decimal pl-6 space-y-2 ml-8">
                            <li>
                                <strong>Learns Best Through Reading</strong
                                ><br />Reading/writing learners prefer reading
                                textbooks, articles, or notes to absorb
                                information, and they often take extensive notes
                                to process what they’ve read.
                            </li>
                            <li>
                                <strong
                                    >Strong Preference for Written
                                    Communication</strong
                                ><br />They often express their thoughts more
                                clearly through writing, enjoying tasks like
                                writing essays, reports, or summaries.
                            </li>
                            <li>
                                <strong
                                    >Uses Written Notes to Organise
                                    Thoughts</strong
                                ><br />Writing out ideas helps them clarify
                                their thoughts and retain information. They
                                often rewrite notes or summarise information to
                                reinforce learning.
                            </li>
                            <li>
                                <strong
                                    >Prefers Text-Based Learning
                                    Materials</strong
                                ><br />Reading/writing learners tend to favour
                                books, manuals, and written guides, and they
                                prefer studying with written resources.
                            </li>
                            <li>
                                <strong
                                    >Good at Remembering Written
                                    Information</strong
                                ><br />They have a strong ability to remember
                                facts and concepts they’ve read or written down,
                                which helps them retain and recall details more
                                easily.
                            </li>
                            <li>
                                <strong
                                    >Enjoys Writing to Understand
                                    Concepts</strong
                                ><br />They often use writing as a tool to
                                organise their thoughts and make sense of new
                                material, whether through essays, reports, or
                                notes.
                            </li>
                            <li>
                                <strong
                                    >Benefits from Rewriting or Summarising
                                    Information</strong
                                ><br />Rewriting or summarising lessons helps
                                them reinforce their understanding and improves
                                retention of key concepts.
                            </li>
                        </ol>
                    </section>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-120 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/7.svg'"
                            alt=""
                        />
                    </div>
                    <div class="flex justify-center items-center mt-4 mb-4">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-svg-images/Page 26ab.svg'"
                            alt=""
                        />
                    </div>
                    <div class="flex justify-center items-center">
                        <img
                            class="w-64 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/3.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>
        </div>

        <!-- Report 16 Visual-->
        <div v-if="style == 'Visual'" class="p-6">
            <!-- Content for Report 16 -->
            <!-- Content for Report 16 Visual -->
            <section class="mb-8">
                <h2 class="text-3xl font-semibold">Overview</h2>
                <p class="mt-4">
                    Your child is a visual learner, which means they understand
                    and remember information best when it is presented visually.
                    Here’s a closer look at what makes visual learners unique:
                </p>
            </section>

            <div class="row">
                <div class="col-6">
                    <section class="mb-8">
                        <h2 class="text-3xl font-semibold">
                            Characteristics of Visual Learners
                        </h2>
                        <ul class="list-disc space-y-2">
                            <li>
                                <strong>Prefer Visual Information:</strong>
                                Visual learners thrive on information they can
                                see. They often prefer to read a textbook with
                                diagrams over listening to a lecture or reading
                                plain text.
                            </li>
                            <li>
                                <strong>Love Visual Aids:</strong> They enjoy
                                using visual aids such as charts, graphs, and
                                pictures to help them understand and organise
                                information. These aids help them create a
                                mental picture of what they are learning.
                            </li>
                            <li>
                                <strong>Strong Spatial Awareness:</strong>
                                Visual learners typically have a keen sense of
                                space and how different elements relate to each
                                other. They can easily visualise objects and
                                their movements.
                            </li>
                            <li>
                                <strong>Detail-Oriented:</strong> They pay
                                attention to details and are often good at
                                noticing subtle differences in visual
                                presentations. This attention to detail helps
                                them remember information accurately.
                            </li>
                            <li>
                                <strong>Creative Thinkers:</strong> Many visual
                                learners are creative and enjoy activities that
                                allow them to use their imagination. They often
                                excel in arts and crafts, drawing, and
                                designing.
                            </li>
                            <li>
                                <strong>Organised and Structured:</strong>
                                Visual learners tend to be organised and like to
                                plan their tasks visually. They might use
                                colour-coded notes or planners to keep track of
                                their assignments and deadlines.
                            </li>
                            <li>
                                <strong>Enjoy Reading and Writing:</strong>
                                While they are primarily visual, these learners
                                often enjoy reading books and writing,
                                especially when they can use these activities to
                                create mental images of the content.
                            </li>
                        </ul>
                    </section>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-64 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/7.svg'"
                            alt=""
                        />
                    </div>
                    <div class="flex justify-center items-center mt-4 mb-4">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-svg-images/Page 26ab.svg'"
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
    name: "AuditoryOverviewFirst",
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
.p-6 > .row > .col-6 > h2,
h2.text-3xl {
    color: rgb(55 48 163);
    font-weight: bold !important;
}

ul > li {
    margin-top: 10px;
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
        /* margin-bottom: 2rem; */
    }

    .p-6 {
        padding: 1rem;
    }

    h2 {
        font-size: 1.25rem !important;
    }

    /* Adjust image container on mobile */
    .col-6 .flex.justify-center.items-center {
        margin: 1rem 0;
    }

    .mb-8 {
        margin-bottom: 0 !important;
    }
    .mt-4 {
        margin-top: 2px !important;
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
