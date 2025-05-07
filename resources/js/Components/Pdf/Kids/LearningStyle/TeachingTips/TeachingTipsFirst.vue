<template>
    <div class="p-6">
        <div class="p-4">
            <h1 class="font-bold mb-4 text-center">Teaching Tips</h1>
        </div>

        <!-- Report 1 Auditory-->
        <div v-if="style == 'Auditory'">
            <!-- Content for Report 1 -->
            <div class="p-6 space-y-8">
                <div class="row">
                    <div class="col-6">
                        <!-- Classroom Strategies Section -->
                        <div>
                            <h2 class="text-3xl font-semibold mb-4">
                                Classroom Strategies
                            </h2>
                            <p class="mb-4">
                                Auditory learners thrive in environments where
                                they can listen and engage in verbal
                                interactions. Here are some effective classroom
                                strategies to support auditory learners:
                            </p>
                            <ul class="list-disc pl-6 space-y-4">
                                <li>
                                    <strong>Use Verbal Instructions:</strong>
                                    Provide clear and detailed verbal
                                    instructions. Repeat important points to
                                    ensure understanding. Encourage students to
                                    ask questions and clarify instructions
                                    verbally.
                                </li>
                                <li>
                                    <strong>Incorporate Discussions:</strong>
                                    Facilitate group discussions and debates to
                                    help auditory learners process and retain
                                    information. Use think-pair-share activities
                                    to encourage students to discuss concepts
                                    with a partner before sharing with the
                                    class.
                                </li>
                                <li>
                                    <strong>Utilise Audio Resources:</strong>
                                    Incorporate audiobooks, podcasts, and
                                    recorded lectures into the curriculum. Use
                                    audio recordings to reinforce key concepts
                                    and provide additional learning
                                    opportunities.
                                </li>
                                <li>
                                    <strong>Interactive Lectures:</strong> Make
                                    lectures interactive by asking questions and
                                    encouraging student participation. Use
                                    storytelling techniques to make the content
                                    more engaging and memorable.
                                </li>
                                <li>
                                    <strong>Rhymes and Mnemonics:</strong> Use
                                    rhymes, songs, and mnemonic devices to help
                                    students remember information. Encourage
                                    students to create their own rhymes or songs
                                    to aid in memorisation.
                                </li>
                                <li>
                                    <strong>Verbal Summaries:</strong> Have
                                    students summarise what they’ve learned
                                    verbally. This can be done through
                                    presentations, oral reports, or classroom
                                    discussions. Use verbal exit tickets where
                                    students share one thing they learned at the
                                    end of a lesson.
                                </li>
                                <li>
                                    <strong
                                        >Role-Playing and Simulations:</strong
                                    >
                                    Use role-playing and simulations to help
                                    students understand and remember concepts
                                    through active verbal engagement. Encourage
                                    students to act out scenarios or historical
                                    events to deepen their understanding.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-120 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/15.svg'"
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
            <div class="">
                <div class="row">
                    <div class="col-6">
                        <section class="mb-8">
                            <h2 class="text-3xl font-semibold text-indigo-500">
                                Classroom Strategies
                            </h2>
                            <div class="mt-4 space-y-6">
                                <p class="">
                                    Supporting a child with a blended auditory
                                    and kinaesthetic learning style in the
                                    classroom requires a combination of
                                    strategies that engage both their auditory
                                    and kinaesthetic strengths. Here are some
                                    effective teaching tips to support blended
                                    learners.
                                </p>

                                <ul class="list-inside list-decimal space-y-4">
                                    <li>
                                        <span class="font-semibold"
                                            >Combine Verbal Instructions with
                                            Hands-On Tasks:</span
                                        >
                                        Provide verbal explanations while your
                                        child engages in hands-on activities.
                                        This helps them process auditory
                                        information while reinforcing it through
                                        physical engagement, such as listening
                                        to instructions while building a model
                                        or performing an experiment.
                                    </li>
                                    <li>
                                        <span class="font-semibold"
                                            >Use Audiobooks and Podcasts During
                                            Physical Activities:</span
                                        >
                                        Encourage your child to listen to
                                        audiobooks or podcasts while engaging in
                                        kinaesthetic tasks, such as drawing or
                                        building. This dual engagement helps
                                        them focus and retain auditory
                                        information while staying physically
                                        active.
                                    </li>
                                    <li>
                                        <span class="font-semibold"
                                            >Reinforce Learning with Verbal
                                            Repetition and Physical
                                            Actions:</span
                                        >
                                        Repeating key information verbally while
                                        having your child perform a physical
                                        task, such as writing or manipulating
                                        objects, helps them retain information.
                                        This combination of auditory input and
                                        physical activity reinforces
                                        understanding and memory.
                                    </li>
                                    <li>
                                        <span class="font-semibold"
                                            >Incorporate Movement into Study
                                            Sessions:</span
                                        >
                                        Allow your child to move around during
                                        study sessions, such as pacing while
                                        listening to a lesson or alternating
                                        between listening activities and
                                        hands-on tasks. Movement keeps them
                                        engaged and helps them absorb
                                        information more effectively.
                                    </li>
                                    <li>
                                        <span class="font-semibold"
                                            >Break Instructions into Verbal and
                                            Physical Steps:</span
                                        >
                                        Give multi-step instructions verbally
                                        while allowing your child to physically
                                        check off completed steps or perform
                                        actions related to each step. This makes
                                        complex tasks easier to follow by
                                        engaging both auditory and kinaesthetic
                                        processes.
                                    </li>
                                    <li>
                                        <span class="font-semibold"
                                            >Encourage Group Discussions with
                                            Physical Interaction:</span
                                        >
                                        Engage your child in group discussions
                                        where they can talk through ideas while
                                        participating in hands-on activities.
                                        This approach allows them to process
                                        information verbally while reinforcing
                                        it through physical involvement.
                                    </li>
                                    <li>
                                        <span class="font-semibold"
                                            >Use Interactive Tools that Combine
                                            Listening and Movement:</span
                                        >
                                        Provide learning tools or apps that
                                        require both auditory input and physical
                                        interaction, such as games where your
                                        child listens to instructions and moves
                                        objects accordingly. This helps them
                                        engage fully by combining their auditory
                                        and kinaesthetic strengths.
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-120 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/15.svg'"
                                alt=""
                            />
                        </div>
                        <div class="flex justify-center items-center">
                            <img
                                class="w-120 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/21.svg'"
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
                <div class="row">
                    <div class="col-6">
                        <!-- Introduction -->
                        <div class="mb-6">
                            <h2 class="text-md font-semibold">
                                Classroom Strategies
                            </h2>
                            <p class="mt-2">
                                Supporting a child with a blended auditory and
                                reading/writing learning style in the classroom
                                requires a combination of strategies that engage
                                both their auditory and reading/writing
                                strengths. Here are some effective teaching tips
                                to support blended learners.
                            </p>
                        </div>

                        <!-- Classroom Strategies -->
                        <div class="mb-6">
                            <h3 class="text-lg font-semibold">
                                1. Use Verbal Instructions and Written Summaries
                            </h3>
                            <p class="mt-2">
                                Provide verbal explanations along with written
                                summaries or notes. This helps your child follow
                                along while reinforcing information through both
                                auditory and written input. Having both formats
                                allows them to refer back to written notes when
                                needed.
                            </p>

                            <h3 class="text-lg font-semibold mt-4">
                                2. Encourage Note-Taking During Lectures
                            </h3>
                            <p class="mt-2">
                                Teach your child to take notes during lectures
                                or discussions. This allows them to engage with
                                the material through listening and then
                                reinforce it by writing key points. Writing down
                                key ideas also helps them retain information
                                more effectively.
                            </p>

                            <h3 class="text-lg font-semibold mt-4">
                                3. Combine Reading Assignments with Audio
                                Resources
                            </h3>
                            <p class="mt-2">
                                Provide both written reading materials and
                                auditory resources. Listening to audio versions
                                of texts enhances their comprehension and helps
                                them retain information more effectively. The
                                combination supports better recall of complex
                                material.
                            </p>

                            <h3 class="text-lg font-semibold mt-4">
                                4. Use Discussions Followed by Written
                                Reflections
                            </h3>
                            <p class="mt-2">
                                After group discussions or lectures, have your
                                child write reflections or summaries. This
                                reinforces verbal learning through writing and
                                deepens their understanding of the material.
                                Writing reflections also allows them to organise
                                their thoughts clearly.
                            </p>

                            <h3 class="text-lg font-semibold mt-4">
                                5. Provide Written and Verbal Feedback
                            </h3>
                            <p class="mt-2">
                                Offer feedback both verbally and in writing.
                                This dual approach ensures your child processes
                                the feedback more effectively, helping them
                                improve and stay engaged. Written feedback
                                allows them to revisit suggestions and continue
                                refining their work.
                            </p>

                            <h3 class="text-lg font-semibold mt-4">
                                6. Incorporate Audio and Written Exercises
                            </h3>
                            <p class="mt-2">
                                Blend auditory and written exercises, such as
                                listening to audio lessons and writing
                                summaries. This approach helps your child
                                process the material using both learning
                                methods. It also strengthens their ability to
                                recall and explain concepts.
                            </p>

                            <h3 class="text-lg font-semibold mt-4">
                                7. Encourage Verbal Presentations with Written
                                Support
                            </h3>
                            <p class="mt-2">
                                Allow your child to use written notes or
                                outlines during verbal presentations. This
                                combination of verbal and written preparation
                                helps them stay organised and confident.
                                Presenting with structured notes builds both
                                their speaking and writing skills.
                            </p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-120 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/15.svg'"
                                alt=""
                            />
                        </div>
                        <div class="flex justify-center items-center">
                            <img
                                class="w-120 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/21.svg'"
                                alt=""
                            />
                        </div>
                        <div
                            data-v-dbde8ef8=""
                            class="flex justify-center items-center"
                        >
                            <img
                                data-v-dbde8ef8=""
                                class="w-90 h-auto object-contain"
                                src="/images/reports-svg-images/Kids/LearningStyles/9.svg"
                                alt=""
                            />
                        </div>
                    </div>
                </div>
                <!-- Conclusion -->
            </div>
        </div>

        <!-- Report 4 Auditory _ Visual Blend-->
        <div v-if="style == 'Auditory/Visual'">
            <!-- Content for Report 4 -->
            <div class="space-y-8">
                <div class="row">
                    <div>
                        <h2 class="text-md font-semibold">
                            Classroom Strategies
                        </h2>
                        <p class="">
                            Supporting a child with a blended auditory and
                            visual learning style in the classroom requires a
                            combination of strategies that engage both their
                            auditory and visual strengths. Here are some
                            effective teaching tips to support blended learners.
                        </p>
                    </div>
                    <div class="col-6">
                        <div>
                            <ul
                                class="list-disc pl-5 auditory-visual-tips av-tips"
                            >
                                <li>
                                    <strong
                                        >Combine Visual Aids with Verbal
                                        Explanations:</strong
                                    >
                                    Always pair visual materials (like diagrams,
                                    charts, and images) with verbal
                                    explanations. This dual approach ensures
                                    that your child can process the material
                                    through both sight and sound. For example,
                                    when using a diagram, explain each part
                                    verbally to reinforce understanding.
                                </li>
                                <li>
                                    <strong>Use Multimedia Resources:</strong>
                                    Integrate multimedia resources such as
                                    educational videos, presentations, and
                                    podcasts. Videos that include both spoken
                                    explanations and visual elements are
                                    particularly beneficial. Ensure that the
                                    auditory and visual components align and
                                    complement each other.
                                </li>
                                <li>
                                    <strong
                                        >Interactive Learning with Visual and
                                        Auditory Cues:</strong
                                    >
                                    Use interactive tools like interactive
                                    whiteboards or apps that provide both visual
                                    and auditory engagement. For example, use an
                                    interactive board to write key points while
                                    discussing them aloud, or use educational
                                    software that plays audio while showing
                                    visual illustrations.
                                </li>
                                <li>
                                    <strong
                                        >Encourage Active Note-Taking with
                                        Visual Organisation:</strong
                                    >
                                    Encourage your child to take notes in a
                                    visually organised manner while listening to
                                    lectures or discussions. They can use mind
                                    maps, charts, or colour-coded notes to
                                    capture both what they hear and see. This
                                    engages both visual and auditory learning
                                    styles simultaneously.
                                </li>
                                <li>
                                    <strong
                                        >Facilitate Group Discussions with
                                        Visual Supports:</strong
                                    >
                                    During group discussions or presentations,
                                    use visual supports like posters,
                                    infographics, or slides to reinforce spoken
                                    points. Encourage your child to explain
                                    visual elements verbally, as this helps them
                                    connect the two methods of learning.
                                </li>
                                <li>
                                    <strong
                                        >Storytelling with Visual Props:</strong
                                    >
                                    When teaching complex topics, use
                                    storytelling techniques that are accompanied
                                    by visual props, such as images or objects
                                    that represent key concepts. This helps
                                    bring the story to life for your child,
                                    enhancing both their listening and visual
                                    comprehension.
                                </li>
                                <li>
                                    <strong
                                        >Incorporate Rhymes, Songs, and Visual
                                        Mnemonics:</strong
                                    >
                                    To help your child remember key facts,
                                    combine auditory tools like songs or rhymes
                                    with visual mnemonics (e.g., symbols,
                                    pictures, or diagrams). This dual approach
                                    reinforces memory retention and keeps
                                    learning engaging.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-120 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/15.svg'"
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
            <div class="space-y-8">
                <div class="row">
                    <div class="col-6 auditory-visual-tips">
                        <div>
                            <h2 class="text-md font-semibold">
                                Classroom Strategies
                            </h2>
                            <p class="">
                                Supporting a child with a blended kinaesthetic
                                and auditory learning style in the classroom
                                requires a combination of strategies that engage
                                both their kinaesthetic and auditory strengths.
                                Here are some effective teaching tips to support
                                blended learners:
                            </p>
                        </div>

                        <div class="space-y-4">
                            <h3 class="text-lg font-semibold">
                                1. Combine Verbal Instructions with Hands-On
                                Tasks
                            </h3>
                            <p class="">
                                Provide verbal explanations while your child
                                engages in hands-on activities. This helps them
                                process auditory information while reinforcing
                                it through physical engagement, such as
                                listening to instructions while building a model
                                or performing an experiment.
                            </p>
                        </div>

                        <div class="space-y-4 mt-3">
                            <h3 class="text-lg font-semibold">
                                2. Use Audiobooks and Podcasts During Physical
                                Activities
                            </h3>
                            <p class="">
                                Encourage your child to listen to audiobooks or
                                podcasts while engaging in kinaesthetic tasks,
                                such as drawing or building. This dual
                                engagement helps them focus and retain auditory
                                information while staying physically active.
                            </p>
                        </div>

                        <div class="space-y-4 mt-3">
                            <h3 class="text-lg font-semibold">
                                3. Reinforce Learning with Verbal Repetition and
                                Physical Actions
                            </h3>
                            <p class="">
                                Repeating key information verbally while having
                                your child perform a physical task, such as
                                writing or manipulating objects, helps them
                                retain information. This combination of auditory
                                input and physical activity reinforces
                                understanding and memory.
                            </p>
                        </div>

                        <div class="space-y-4 mt-3">
                            <h3 class="text-lg font-semibold">
                                4. Incorporate Movement into Study Sessions
                            </h3>
                            <p class="">
                                Allow your child to move around during study
                                sessions, such as pacing while listening to a
                                lesson or alternating between listening
                                activities and hands-on tasks. Movement keeps
                                them engaged and helps them absorb information
                                more effectively.
                            </p>
                        </div>

                        <div class="space-y-4 mt-3">
                            <h3 class="text-lg font-semibold">
                                5. Break Instructions into Verbal and Physical
                                Steps
                            </h3>
                            <p class="">
                                Give multi-step instructions verbally while
                                allowing your child to physically check off
                                completed steps or perform actions related to
                                each step. This makes complex tasks easier to
                                follow by engaging both auditory and
                                kinaesthetic processes.
                            </p>
                        </div>

                        <div class="space-y-4 mt-3">
                            <h3 class="text-lg font-semibold">
                                6. Encourage Group Discussions with Physical
                                Interaction
                            </h3>
                            <p class="">
                                Engage your child in group discussions where
                                they can talk through ideas while participating
                                in hands-on activities. This approach allows
                                them to process information verbally while
                                reinforcing it through physical involvement.
                            </p>
                        </div>

                        <div class="space-y-4 mt-3">
                            <h3 class="text-lg font-semibold">
                                7. Use Interactive Tools that Combine Listening
                                and Movement
                            </h3>
                            <p class="">
                                Provide learning tools or apps that require both
                                auditory input and physical interaction, such as
                                games where your child listens to instructions
                                and moves objects accordingly. This helps them
                                engage fully by combining their auditory and
                                kinaesthetic strengths.
                            </p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-120 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/15.svg'"
                                alt=""
                            />
                        </div>
                        <div class="flex justify-center items-center">
                            <img
                                class="w-120 h-auto object-contain"
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
                <div class="row">
                    <h2 class="text-md font-bold mb-4">
                        Classroom Strategies:
                    </h2>
                    <p class="mb-4">
                        Supporting a child with a blended kinaesthetic and
                        reading/writing learning style in the classroom requires
                        a combination of strategies that engage both their
                        kinaesthetic and reading/writing strengths. Here are
                        some effective teaching tips to support blended
                        learners.
                    </p>
                    <div class="col-6">
                        <h3 class="text-lg font-semibold mb-2">
                            1. Combine Hands-On Activities with Writing Tasks
                        </h3>
                        <p class="mb-4">
                            Encourage your child to engage in hands-on
                            activities while taking notes or writing
                            reflections. This allows them to process information
                            through physical engagement and reinforce it through
                            writing.
                        </p>

                        <h3 class="text-lg font-semibold mb-2">
                            2. Use Written Instructions with Physical Engagement
                        </h3>
                        <p class="mb-4">
                            Provide written instructions alongside physical
                            activities. For example, give your child a written
                            guide to follow while they complete a hands-on
                            project. This helps them stay organised while
                            engaging physically with the task.
                        </p>

                        <h3 class="text-lg font-semibold mb-2">
                            3. Encourage Active Learning with Note-Taking
                        </h3>
                        <p class="mb-4">
                            During kinaesthetic learning activities, ask your
                            child to take notes on what they are doing or write
                            down steps as they complete tasks. This helps them
                            reflect on their physical actions and reinforce
                            their learning through writing.
                        </p>

                        <h3 class="text-lg font-semibold mb-2">
                            4. Incorporate Movement into Writing Tasks
                        </h3>
                        <p class="mb-4">
                            Allow your child to move around or take breaks
                            during writing assignments. This keeps them
                            physically engaged and helps them focus better on
                            the writing task at hand.
                        </p>

                        <h3 class="text-lg font-semibold mb-2">
                            5. Use Hands-On Learning Aids with Written Summaries
                        </h3>
                        <p class="mb-4">
                            Provide tools like models or manipulatives during
                            lessons and have your child write summaries or
                            reflections afterwards. This combination allows them
                            to physically engage with the material and reinforce
                            their understanding through writing.
                        </p>

                        <h3 class="text-lg font-semibold mb-2">
                            6. Blend Writing with Physical Problem-Solving
                        </h3>
                        <p class="mb-4">
                            After your child completes a hands-on task, such as
                            building or experimenting, encourage them to write
                            about the process or the solution they found.
                            Writing down their thoughts after physical
                            engagement helps solidify their understanding.
                        </p>

                        <h3 class="text-lg font-semibold mb-2">
                            7. Offer Projects that Combine Writing and
                            Kinaesthetic Learning
                        </h3>
                        <p class="mb-4">
                            Assign projects that require both writing and
                            hands-on engagement, such as building a model and
                            writing a report on it. This ensures your child is
                            using both learning styles to process and present
                            their understanding.
                        </p>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-120 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/15.svg'"
                                alt=""
                            />
                        </div>
                        <div class="flex justify-center items-center">
                            <img
                                class="w-120 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/21.svg'"
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
                <p class="mt-4 text-lg">
                    Supporting a child with a blended kinaesthetic and visual
                    learning style in the classroom requires a combination of
                    strategies that engage both their kinaesthetic and visual
                    strengths. Here are some effective teaching tips to support
                    blended learners.
                </p>
                <div class="row">
                    <div class=""></div>
                    <div class="col-6">
                        <div class="mt-8">
                            <h2 class="text-3xl font-semibold mb-4">
                                Classroom Strategies:
                            </h2>
                            <div class="space-y-6">
                                <!-- Strategy 1 -->
                                <div class="">
                                    <h3 class="font-semibold text-lg">
                                        1. Use Visual Aids with Hands-On
                                        Activities
                                    </h3>
                                    <p class="mt-2">
                                        When teaching new concepts, combine
                                        visual elements such as diagrams,
                                        charts, or images with hands-on tasks.
                                        For example, while teaching the water
                                        cycle, you can show a visual diagram of
                                        the process and have your child build a
                                        model representing each stage. This
                                        combination allows them to process
                                        information visually and physically,
                                        reinforcing their understanding through
                                        both methods.
                                    </p>
                                </div>

                                <!-- Strategy 2 -->
                                <div class="">
                                    <h3 class="font-semibold text-lg">
                                        2. Encourage Learning Through Building
                                        and Drawing
                                    </h3>
                                    <p class="mt-2">
                                        Allow your child to draw, build, or
                                        create models to enhance their
                                        understanding of visual concepts. For
                                        instance, when learning geometry, ask
                                        your child to draw or construct shapes
                                        using physical materials like clay or
                                        building blocks. This hands-on approach
                                        makes abstract concepts more concrete
                                        and easier to grasp.
                                    </p>
                                </div>

                                <!-- Strategy 3 -->
                                <div class="">
                                    <h3 class="font-semibold text-lg">
                                        3. Incorporate Movement into Learning
                                    </h3>
                                    <p class="mt-2">
                                        Kinaesthetic learners benefit from
                                        movement during learning, so
                                        incorporating physical activities into
                                        lessons helps them focus. Set up
                                        learning stations where they can move
                                        between visual aids (like flashcards or
                                        diagrams) and hands-on tasks (such as
                                        assembling a puzzle related to the
                                        lesson). This keeps them physically
                                        engaged while reinforcing the material
                                        visually.
                                    </p>
                                </div>

                                <!-- Strategy 4 -->
                                <div class="">
                                    <h3 class="font-semibold text-lg">
                                        4. Visualise Processes with Diagrams and
                                        Hands-On Demonstrations
                                    </h3>
                                    <p class="mt-2">
                                        Pair visual representations with
                                        physical demonstrations to help your
                                        child grasp complex processes. For
                                        example, when learning about plant
                                        growth, use a diagram showing the stages
                                        of growth, and have your child
                                        physically plant seeds and monitor their
                                        development. This approach reinforces
                                        their learning by engaging both their
                                        visual and kinaesthetic strengths.
                                    </p>
                                </div>

                                <!-- Strategy 5 -->
                                <div class="">
                                    <h3 class="font-semibold text-lg">
                                        5. Break Down Instructions into Visual
                                        and Physical Steps
                                    </h3>
                                    <p class="mt-2">
                                        When giving instructions, break tasks
                                        down into both visual and physical steps
                                        to make them more manageable. Show your
                                        child what the final product should look
                                        like and guide them step-by-step through
                                        the process while allowing them to
                                        physically engage with each part of the
                                        task. This method enhances their focus
                                        and helps them stay on track.
                                    </p>
                                </div>

                                <!-- Strategy 6 -->
                                <div class="">
                                    <h3 class="font-semibold text-lg">
                                        6. Encourage Visual Note-Taking with
                                        Physical Movement
                                    </h3>
                                    <p class="mt-2">
                                        Teach your child to take visual notes
                                        while engaging in physical movement. For
                                        example, ask them to draw or sketch what
                                        they’re learning while moving between
                                        different activities or locations. This
                                        helps them process information through
                                        both drawing and movement, reinforcing
                                        their retention of the material.
                                    </p>
                                </div>

                                <div class="">
                                    <h3 class="font-semibold text-lg">
                                        7. Use Learning Tools that Combine
                                        Visual and Physical Interaction
                                    </h3>
                                    <p class="mt-2">
                                        Incorporate hands-on learning tools,
                                        such as building sets, models, or craft
                                        projects, supported by visual aids like
                                        images or diagrams. For example, when
                                        learning about architecture, provide
                                        materials for building models and show
                                        visual examples of different structures
                                        to inspire creativity. This dual
                                        approach encourages them to engage
                                        deeply with the content.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-120 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/15.svg'"
                                alt=""
                            />
                        </div>
                        <div class="flex justify-center items-center">
                            <img
                                class="w-120 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/21.svg'"
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
            <div class="space-y-8">
                <div class="row">
                    <div class="col-6 tip">
                        <div>
                            <h2 class="text-3xl font-bold">
                                Classroom Strategies for Kinaesthetic Learners
                            </h2>
                            <p>
                                <strong>Example:</strong>
                                Kinaesthetic learners thrive in environments
                                where they can move and engage physically with
                                the material. Here are some effective classroom
                                strategies to support kinaesthetic learners:
                            </p>
                        </div>

                        <div>
                            <h3 class="text-lg font-semibold">
                                Incorporate Movement:
                            </h3>
                            <ul class="list-disc pl-6 space-y-2">
                                <li>
                                    <strong>Strategy:</strong> Integrate
                                    physical activities into lessons to keep
                                    kinaesthetic learners engaged.
                                </li>
                                <li>
                                    <strong>Example:</strong>
                                    Use activities that involve moving around
                                    the classroom, such as scavenger hunts or
                                    stations for different tasks.
                                </li>
                            </ul>
                        </div>

                        <div>
                            <h3 class="text-lg font-semibold">
                                Hands-On Activities:
                            </h3>
                            <ul class="list-disc pl-6 space-y-2">
                                <li>
                                    <strong>Strategy:</strong> Include hands-on
                                    projects and experiments in the curriculum.
                                </li>
                                <li>
                                    <strong>Example:</strong>
                                    Use science experiments, art projects, and
                                    building models to teach concepts.
                                </li>
                            </ul>
                        </div>

                        <div>
                            <h3 class="text-lg font-semibold">
                                Role-Playing and Simulations:
                            </h3>
                            <ul class="list-disc pl-6 space-y-2">
                                <li>
                                    <strong>Strategy:</strong> Use role-playing
                                    and simulations to help students understand
                                    and remember concepts.
                                </li>
                                <li>
                                    <strong>Example:</strong>
                                    Act out historical events, scientific
                                    processes, or literary scenes.
                                </li>
                            </ul>
                        </div>

                        <div>
                            <h3 class="text-lg font-semibold">
                                Interactive Lessons:
                            </h3>
                            <ul class="list-disc pl-6 space-y-2">
                                <li>
                                    <strong>Strategy:</strong> Make lessons
                                    interactive by involving students in
                                    demonstrations and activities.
                                </li>
                                <li>
                                    <strong>Example:</strong>
                                    Use manipulatives in math, interactive
                                    whiteboards, and physical objects to
                                    illustrate points.
                                </li>
                            </ul>
                        </div>

                        <div>
                            <h3 class="text-lg font-semibold">
                                Frequent Breaks:
                            </h3>
                            <ul class="list-disc pl-6 space-y-2">
                                <li>
                                    <strong>Strategy:</strong> Provide frequent
                                    breaks to allow kinaesthetic learners to
                                    move around.
                                </li>
                                <li>
                                    <strong>Example:</strong>
                                    Incorporate short physical activities or
                                    "brain breaks" between lessons.
                                </li>
                            </ul>
                        </div>

                        <div>
                            <h3 class="text-lg font-semibold">
                                Learning Stations:
                            </h3>
                            <ul class="list-disc pl-6 space-y-2">
                                <li>
                                    <strong>Strategy:</strong> Set up learning
                                    stations with different hands-on activities
                                    for students to rotate through.
                                </li>
                                <li>
                                    <strong>Example:</strong>
                                    Create stations for reading, science
                                    experiments, art projects, and interactive
                                    games.
                                </li>
                            </ul>
                        </div>

                        <div>
                            <h3 class="text-lg font-semibold">
                                Outdoor Learning:
                            </h3>
                            <ul class="list-disc pl-6 space-y-2">
                                <li>
                                    <strong>Strategy:</strong> Take learning
                                    outside whenever possible.
                                </li>
                                <li>
                                    <strong>Example:</strong>
                                    Use nature walks, outdoor experiments, and
                                    field trips to engage students physically.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-120 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/15.svg'"
                                alt=""
                            />
                        </div>
                        <div class="flex justify-center items-center">
                            <img
                                class="w-120 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/21.svg'"
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
                    <h2 class="text-3xl font-bold mb-4">
                        Classroom Strategies for Blended Learners
                    </h2>
                    <p class="mb-6">
                        Supporting a child with a blended reading/writing and
                        auditory learning style in the classroom requires a
                        combination of strategies that engage both their
                        auditory and reading/writing strengths. Here are some
                        effective teaching tips to support blended learners.
                    </p>
                    <div class="col-6 tip">
                        <div class="">
                            <h3 class="text-lg font-semibold mb-2">
                                1. Use Verbal Instructions and Written Summaries
                            </h3>
                            <p class="">
                                Provide verbal explanations along with written
                                summaries or notes. This helps your child follow
                                along while reinforcing information through both
                                auditory and written input. Having both formats
                                allows them to refer back to written notes when
                                needed.
                            </p>
                        </div>

                        <div class="mt-4">
                            <h3 class="text-lg font-semibold mb-2">
                                2. Encourage Notetaking During Lectures
                            </h3>
                            <p class="">
                                Teach your child to take notes during lectures
                                or discussions. This allows them to engage with
                                the material through listening and then
                                reinforce it by writing key points. Writing down
                                key ideas also helps them retain information
                                more effectively.
                            </p>
                        </div>

                        <div class="mt-4">
                            <h3 class="text-lg font-semibold mb-2">
                                3. Combine Reading Assignments with Audio
                                Resources
                            </h3>
                            <p class="">
                                Provide both written reading materials and
                                auditory resources. Listening to audio versions
                                of texts enhances their comprehension and helps
                                them retain information more effectively. The
                                combination supports better recall of complex
                                material.
                            </p>
                        </div>

                        <div class="mt-4">
                            <h3 class="text-lg font-semibold mb-2">
                                4. Use Discussions Followed by Written
                                Reflections
                            </h3>
                            <p class="">
                                After group discussions or lectures, have your
                                child write reflections or summaries. This
                                reinforces verbal learning through writing and
                                deepens their understanding of the material.
                                Writing reflections also allows them to organise
                                their thoughts clearly.
                            </p>
                        </div>

                        <div class="mt-4">
                            <h3 class="text-lg font-semibold mb-2">
                                5. Provide Written and Verbal Feedback
                            </h3>
                            <p class="">
                                Offer feedback both verbally and in writing.
                                This dual approach ensures your child processes
                                the feedback more effectively, helping them
                                improve and stay engaged. Written feedback
                                allows them to revisit suggestions and continue
                                refining their work.
                            </p>
                        </div>

                        <div class="mt-4">
                            <h3 class="text-lg font-semibold mb-2">
                                6. Incorporate Audio and Written Exercises
                            </h3>
                            <p class="">
                                Blend auditory and written exercises, such as
                                listening to audio lessons and writing
                                summaries. This approach helps your child
                                process the material using both learning
                                methods. It also strengthens their ability to
                                recall and explain concepts.
                            </p>
                        </div>

                        <div class="mt-4">
                            <h3 class="text-lg font-semibold mb-2">
                                7. Encourage Verbal Presentations with Written
                                Support
                            </h3>
                            <p class="">
                                Allow your child to use written notes or
                                outlines during verbal presentations. This
                                combination of verbal and written preparation
                                helps them stay organised and confident.
                                Presenting with structured notes builds both
                                their speaking and writing skills.
                            </p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-120 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/15.svg'"
                                alt=""
                            />
                        </div>
                        <div class="flex justify-center items-center">
                            <img
                                class="w-120 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/21.svg'"
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
                        <h2 class="text-3xl font-bold mb-6">
                            Classroom Strategies
                        </h2>
                        <p class="mb-6">
                            Supporting a child with a blended reading/writing
                            and kinaesthetic learning style in the classroom
                            requires a combination of strategies that engage
                            both their reading/writing and kinaesthetic
                            strengths. Here are some effective teaching tips to
                            support blended learners:
                        </p>

                        <ul class="list-disc pl-6 space-y-4">
                            <li>
                                <strong
                                    >Combine Hands-On Activities with Writing
                                    Tasks:</strong
                                >
                                Encourage your child to engage in hands-on
                                activities while taking notes or writing
                                reflections. This allows them to process
                                information through physical engagement and
                                reinforce it through writing.
                            </li>
                            <li>
                                <strong
                                    >Use Written Instructions with Physical
                                    Engagement:</strong
                                >
                                Provide written instructions alongside physical
                                activities. For example, give your child a
                                written guide to follow while they complete a
                                hands-on project. This helps them stay organised
                                while engaging physically with the task.
                            </li>
                            <li>
                                <strong
                                    >Encourage Active Learning with
                                    Note-Taking:</strong
                                >
                                During kinaesthetic learning activities, ask
                                your child to take notes on what they are doing
                                or write down steps as they complete tasks. This
                                helps them reflect on their physical actions and
                                reinforce their learning through writing.
                            </li>
                            <li>
                                <strong
                                    >Incorporate Movement into Writing
                                    Tasks:</strong
                                >
                                Allow your child to move around or take breaks
                                during writing assignments. This keeps them
                                physically engaged and helps them focus better
                                on the writing task at hand.
                            </li>
                            <li>
                                <strong
                                    >Use Hands-On Learning Aids with Written
                                    Summaries:</strong
                                >
                                Provide tools like models or manipulatives
                                during lessons and have your child write
                                summaries or reflections afterwards. This
                                combination allows them to physically engage
                                with the material and reinforce their
                                understanding through writing.
                            </li>
                            <li>
                                <strong
                                    >Blend Writing with Physical
                                    Problem-Solving:</strong
                                >
                                After your child completes a hands-on task, such
                                as building or experimenting, encourage them to
                                write about the process or the solution they
                                found. Writing down their thoughts after
                                physical engagement helps solidify their
                                understanding.
                            </li>
                            <li>
                                <strong
                                    >Offer Projects that Combine Writing and
                                    Kinaesthetic Learning:</strong
                                >
                                Assign projects that require both writing and
                                hands-on engagement, such as building a model
                                and writing a report on it. This ensures your
                                child is using both learning styles to process
                                and present their understanding.
                            </li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-120 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/15.svg'"
                                alt=""
                            />
                        </div>
                        <div class="flex justify-center items-center">
                            <img
                                class="w-120 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/21.svg'"
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
                <div class="row">
                    <h2 class="text-3xl font-bold mb-6">
                        Classroom Strategies
                    </h2>
                    <p class="mb-6">
                        Supporting a child with a blended reading/writing and
                        visual learning style in the classroom requires a
                        combination of strategies that engage both their
                        reading/writing and visual strengths. Here are some
                        effective teaching tips to support blended learners.
                    </p>

                    <div class="col-6">
                        <h2 class="text-xl font-semibold">
                            1. Use Visual Aids with Written Explanations
                        </h2>
                        <p>
                            <strong>Strategy:</strong> Combine visual elements
                            like diagrams, charts, and images with written
                            explanations to help your child fully grasp the
                            material.
                        </p>
                        <p>
                            <strong>Example:</strong> When teaching about
                            ecosystems, show a diagram of the food chain and ask
                            your child to write a brief explanation of how it
                            works. This reinforces the concept through both
                            visual understanding and written processing.
                        </p>

                        <h2 class="text-xl font-semibold">
                            2. Encourage Note-Taking with Visuals
                        </h2>
                        <p>
                            <strong>Strategy:</strong> Teach your child to take
                            notes by combining written summaries with visual
                            aids like diagrams, flowcharts, or mind maps.
                        </p>
                        <p>
                            <strong>Example:</strong> While reading a chapter in
                            a textbook, have your child draw a mind map to
                            visualise the key points while taking notes
                            alongside the diagram. This method engages both
                            their visual and writing skills.
                        </p>

                        <h2 class="text-xl font-semibold">
                            3. Use Written Instructions with Visual Steps
                        </h2>
                        <p>
                            <strong>Strategy:</strong> Break tasks into visual
                            and written steps to make the instructions more
                            digestible and clear.
                        </p>
                        <p>
                            <strong>Example:</strong> When working on a science
                            experiment, provide a written guide of the steps and
                            include visual diagrams to show how each step should
                            look. This helps your child follow along more
                            easily.
                        </p>

                        <h2 class="text-xl font-semibold">
                            4. Provide Visual and Written Study Guides
                        </h2>
                        <p>
                            <strong>Strategy:</strong> When preparing for tests
                            or projects, give your child a combination of visual
                            study guides (such as charts or infographics) and
                            written summaries.
                        </p>
                        <p>
                            <strong>Example:</strong> Create a study guide that
                            includes diagrams of key concepts along with written
                            explanations. Your child can use both the visual and
                            written elements to reinforce their understanding.
                        </p>

                        <h2 class="text-xl font-semibold">
                            5. Encourage Written Reflection on Visual Materials
                        </h2>
                        <p>
                            <strong>Strategy:</strong> After reviewing visual
                            materials like charts or diagrams, ask your child to
                            write a reflection or summary of what they’ve
                            learned.
                        </p>
                        <p>
                            <strong>Example:</strong> After reviewing a visual
                            timeline of historical events, have your child write
                            a short summary explaining the sequence of events
                            and their significance. This helps reinforce the
                            visual information through writing.
                        </p>

                        <h2 class="text-xl font-semibold">
                            6. Use Technology to Blend Visual and Written
                            Learning
                        </h2>
                        <p>
                            <strong>Strategy:</strong> Leverage educational apps
                            or online tools that combine visual elements with
                            reading and writing tasks.
                        </p>
                        <p>
                            <strong>Example:</strong> Use an interactive
                            learning app that allows your child to view visual
                            demonstrations and write responses or explanations.
                            This encourages them to process information both
                            visually and through writing.
                        </p>

                        <h2 class="text-xl font-semibold">
                            7. Encourage Visual Planning and Written Execution
                        </h2>
                        <p>
                            <strong>Strategy:</strong> When working on projects
                            or assignments, encourage your child to first plan
                            visually and then write out their ideas.
                        </p>
                        <p>
                            <strong>Example:</strong> Before starting a writing
                            project, have your child sketch out their ideas in a
                            mind map and then write their essay or report based
                            on the visual plan. This helps them organise their
                            thoughts visually and structure their writing more
                            effectively.
                        </p>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-120 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/15.svg'"
                                alt=""
                            />
                        </div>
                        <div class="flex justify-center items-center">
                            <img
                                class="w-120 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/21.svg'"
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
        </div>

        <!-- Report 12 Reading & Writing-->
        <div v-if="style == 'Reading/Writing'">
            <!-- Content for Report 12 -->
            <div class="row">
                <div class="col-6">
                    <section class="mb-8">
                        <h2 class="text-3xl font-semibold text-indigo-500">
                            Classroom Strategies
                        </h2>
                        <p class="mt-4">
                            Reading/writing learners thrive in environments
                            where they can engage with written materials and
                            express their thoughts through writing. Here are
                            some effective classroom strategies to support
                            reading/writing learners:
                        </p>
                        <ul class="list-decimal list-inside mt-4 space-y-2">
                            <li>
                                <strong>Provide Written Instructions:</strong>
                                <ul class="list-disc space-y-2">
                                    <li>
                                        <strong>Strategy:</strong>Always provide
                                        written instructions and guidelines for
                                        assignments and projects.
                                    </li>
                                    <li>
                                        <strong>Example:</strong> Give handouts
                                        or post instructions on the classroom
                                        board.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <strong>Encourage Note-Taking:</strong>
                                <ul class="list-disc space-y-2">
                                    <li>
                                        <strong>Strategy:</strong>Encourage
                                        students to take detailed notes during
                                        lectures and while reading.
                                    </li>
                                    <li>
                                        <strong>Example:</strong>Teach
                                        note-taking strategies such as
                                        outlining, summarising, and using bullet
                                        points.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <strong>Use Reading Materials:</strong>
                                <ul class="list-disc space-y-2">
                                    <li>
                                        <strong>Strategy:</strong> Incorporate a
                                        variety of reading materials, including
                                        textbooks, articles, and literature.
                                    </li>
                                    <li>
                                        <strong>Example:</strong> Assign reading
                                        from different genres and sources to
                                        enhance comprehension and critical
                                        thinking.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <strong
                                    >Incorporate Writing Assignments:</strong
                                >
                                <ul class="list-disc space-y-2">
                                    <li>
                                        <strong>Strategy:</strong>Include
                                        frequent writing assignments such as
                                        essays, reports, and journals.
                                    </li>
                                    <li>
                                        <strong>Example:</strong> Assign weekly
                                        journals where students reflect on what
                                        they have learned.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <strong>Reading and Writing Workshops:</strong>
                                <ul class="list-disc space-y-2">
                                    <li>
                                        <strong>Strategy:</strong>Conduct
                                        workshops focused on improving reading
                                        comprehension and writing skills.
                                    </li>
                                    <li>
                                        <strong>Example:</strong> Hold peer
                                        review sessions where students give
                                        feedback on each other’s writing.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <strong>Encourage Research Projects:</strong>
                                <ul class="list-disc space-y-2">
                                    <li>
                                        <strong>Strategy:</strong>Assign
                                        research projects that require students
                                        to gather information from written
                                        sources.
                                    </li>
                                    <li>
                                        <strong>Example:</strong> Have students
                                        create research papers or presentations
                                        based on their findings.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <strong>Use Graphic Organisers:</strong>
                                <ul class="list-disc space-y-2">
                                    <li>
                                        <strong>Strategy:</strong>Provide
                                        graphic organisers like charts, mind
                                        maps, and outlines to help students
                                        organise information.
                                    </li>
                                    <li>
                                        <strong>Example:</strong>Use Venn
                                        diagrams to compare and contrast
                                        concepts.
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </section>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-120 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/15.svg'"
                            alt=""
                        />
                    </div>
                    <div class="flex justify-center items-center">
                        <img
                            class="w-120 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/21.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>

        </div>

        <!-- Report 13 Visual _ Auditory Blend-->
        <div v-if="style == 'Visual/Auditory'">
            <!-- Content for Report 13 -->

            <div class="row">
                <div class="col-6">
                    <section class="mb-8">
                        <h2 class="text-3xl font-semibold text-indigo-500">
                            Classroom Strategies
                        </h2>
                        <p class="mt-4">
                            Supporting a child with a blended visual and
                            auditory learning style in the classroom requires a
                            combination of strategies that engage both their
                            visual and auditory strengths. Here are some
                            effective teaching tips to support blended learners.
                        </p>
                        <ul class="va-tips">
                            <li>
                                <strong
                                    >Combine Visual Aids with Verbal
                                    Explanations</strong
                                ><br />
                                Always pair visual materials (like diagrams,
                                charts, and images) with verbal explanations.
                                This dual approach ensures that your child can
                                process the material through both sight and
                                sound. For example, when using a diagram,
                                explain each part verbally to reinforce
                                understanding.
                            </li>
                            <li>
                                <strong>Use Multimedia Resources</strong><br />
                                Integrate multimedia resources such as
                                educational videos, presentations, and podcasts.
                                Videos that include both spoken explanations and
                                visual elements are particularly beneficial.
                                Ensure that the auditory and visual components
                                align and complement each other.
                            </li>
                            <li>
                                <strong
                                    >Interactive Learning with Visual and
                                    Auditory Cues</strong
                                ><br />
                                Use interactive tools like interactive
                                whiteboards or apps that provide both visual and
                                auditory engagement. For example, use an
                                interactive board to write key points while
                                discussing them aloud, or use educational
                                software that plays audio while showing visual
                                illustrations.
                            </li>
                            <li>
                                <strong
                                    >Encourage Active Note-Taking with Visual
                                    Organisation</strong
                                ><br />
                                Encourage your child to take notes in a visually
                                organised manner while listening to lectures or
                                discussions. They can use mind maps, charts, or
                                colour-coded notes to capture both what they
                                hear and see. This engages both visual and
                                auditory learning styles simultaneously.
                            </li>
                            <li>
                                <strong
                                    >Facilitate Group Discussions with Visual
                                    Supports</strong
                                ><br />
                                During group discussions or presentations, use
                                visual supports like posters, infographics, or
                                slides to reinforce spoken points. Encourage
                                your child to explain visual elements verbally,
                                as this helps them connect the two methods of
                                learning.
                            </li>
                            <li>
                                <strong>Storytelling with Visual Props</strong
                                ><br />
                                When teaching complex topics, use storytelling
                                techniques that are accompanied by visual props,
                                such as images or objects that represent key
                                concepts. This helps bring the story to life for
                                your child, enhancing both their listening and
                                visual comprehension.
                            </li>
                            <li>
                                <strong
                                    >Incorporate Rhymes, Songs, and Visual
                                    Mnemonics</strong
                                ><br />
                                To help your child remember key facts, combine
                                auditory tools like songs or rhymes with visual
                                mnemonics (e.g., symbols, pictures, or
                                diagrams). This dual approach reinforces memory
                                retention and keeps learning engaging.
                            </li>
                        </ul>
                    </section>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-120 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/15.svg'"
                            alt=""
                        />
                    </div>
                    <div class="flex justify-center items-center">
                        <img
                            class="w-120 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/21.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>

        </div>

        <!-- Report 14 Visual _ Kinesthethic Blend-->
        <div v-if="style == 'Visual/Kinesthethic'">
            <div class="row">
                <div class="col-6">
                    <!-- Content for Report 14 -->
                    <section class="mb-8">
                        <h2 class="text-3xl font-semibold text-indigo-500">
                            Classroom Strategies
                        </h2>
                        <p class="mt-4">
                            Supporting a child with a blended visual and
                            kinaesthetic learning style in the classroom
                            requires a combination of strategies that engage
                            both their visual and kinaesthetic strengths. Here
                            are some effective teaching tips to support blended
                            learners.
                        </p>
                        <ul class="vk-tips">
                            <li>
                                <strong
                                    >Use Visual Aids with Hands-On
                                    Activities</strong
                                ><br />
                                <strong>Strategy: </strong>When teaching new
                                concepts, combine visual elements such as
                                diagrams, charts, or images with hands-on
                                tasks.<br />
                                <strong>Example: </strong> For example, while
                                teaching the water cycle, you can show a visual
                                diagram of the process and have your child build
                                a model representing each stage. This
                                combination allows them to process information
                                visually and physically, reinforcing their
                                understanding through both methods.
                            </li>
                            <li>
                                <strong
                                    >Encourage Learning Through Building and
                                    Drawing</strong
                                ><br />
                                <strong>Strategy: </strong> Allow your child to
                                draw, build, or create models to enhance their
                                understanding of visual concepts. <br />
                                <strong>Example: </strong> For instance, when
                                learning geometry, ask your child to draw or
                                construct shapes using physical materials like
                                clay or building blocks. This hands-on approach
                                makes abstract concepts more concrete and easier
                                to grasp.
                            </li>
                            <li>
                                <strong
                                    >Incorporate Movement into Learning</strong
                                ><br />
                                <strong>Strategy: </strong>Kinaesthetic learners
                                benefit from movement during learning, so
                                incorporating physical activities into lessons
                                helps them focus. <br />
                                <strong>Example: </strong> Set up learning
                                stations where they can move between visual aids
                                (like flashcards or diagrams) and hands-on tasks
                                (such as assembling a puzzle related to the
                                lesson). This keeps them physically engaged
                                while reinforcing the material visually.
                            </li>
                            <li>
                                <strong
                                    >Visualise Processes with Diagrams and
                                    Hands-On Demonstrations</strong
                                ><br />
                                <strong>Strategy: </strong>Pair visual
                                representations with physical demonstrations to
                                help your child grasp complex processes.<br />
                                <strong>Example: </strong> For example, when
                                learning about plant growth, use a diagram
                                showing the stages of growth, and have your
                                child physically plant seeds and monitor their
                                development. This approach reinforces their
                                learning by engaging both their visual and
                                kinaesthetic strengths.
                            </li>
                            <li>
                                <strong
                                    >Break Down Instructions into Visual and
                                    Physical Steps</strong
                                ><br />
                                <strong>Strategy: </strong>When giving
                                instructions, break tasks down into both visual
                                and physical steps to make them more manageable.
                                <br />
                                <strong>Example: </strong> Show your child what
                                the final product should look like and guide
                                them step-by-step through the process while
                                allowing them to physically engage with each
                                part of the task. This method enhances their
                                focus and helps them stay on track.
                            </li>
                            <li>
                                <strong
                                    >Encourage Visual Note-Taking with Physical
                                    Movement</strong
                                ><br />
                                <strong>Strategy: </strong>Teach your child to
                                take visual notes while engaging in physical
                                movement. <br />
                                <strong>Example: </strong>For example, ask them
                                to draw or sketch what they’re learning while
                                moving between different activities or
                                locations. This helps them process information
                                through both drawing and movement, reinforcing
                                their retention of the material.
                            </li>
                            <li>
                                <strong
                                    >Use Learning Tools that Combine Visual and
                                    Physical Interaction</strong
                                ><br />
                                <strong>Strategy: </strong>Incorporate hands-on
                                learning tools, such as building sets, models,
                                or craft projects, supported by visual aids like
                                images or diagrams.<br />
                                <strong>Example: </strong> For example, when
                                learning about architecture, provide materials
                                for building models and show visual examples of
                                different structures to inspire creativity. This
                                dual approach encourages them to engage deeply
                                with the content.
                            </li>
                        </ul>
                    </section>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-120 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/15.svg'"
                            alt=""
                        />
                    </div>
                    <div class="flex justify-center items-center">
                        <img
                            class="w-120 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/21.svg'"
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

        <!-- Report 15 Visual _ Reading & Writing-->
        <div v-if="style == 'Visual/Reading/Writing'">
            <div class="row">
                <h2 class="text-3xl font-semibold text-indigo-500">
                    Classroom Strategies
                </h2>
                <p class="mt-4">
                    Supporting a child with a blended visual and reading/writing
                    learning style in the classroom requires a combination of
                    strategies that engage both their visual and reading/writing
                    strengths. Here are some effective teaching tips to support
                    blended learners.
                </p>
                <div class="col-6">
                    <!-- Content for Report 15 -->
                    <section class="mb-8">
                        <ul class="vrw-tips">
                            <li>
                                <strong
                                    >Use Visual Aids with Written
                                    Explanations</strong
                                ><br /><strong>Strategy:</strong> Combine visual
                                elements like diagrams, charts, and images with
                                written explanations to help your child fully
                                grasp the material.<br /><strong
                                    >Example:</strong
                                >
                                When teaching about ecosystems, show a diagram
                                of the food chain and ask your child to write a
                                brief explanation of how it works. This
                                reinforces the concept through both visual
                                understanding and written processing.
                            </li>
                            <li>
                                <strong
                                    >Encourage Note-Taking with Visuals</strong
                                ><br /><strong>Strategy:</strong> Teach your
                                child to take notes by combining written
                                summaries with visual aids like diagrams,
                                flowcharts, or mind maps.<br /><strong
                                    >Example:</strong
                                >
                                While reading a chapter in a textbook, have your
                                child draw a mind map to visualise the key
                                points while taking notes alongside the diagram.
                                This method engages both their visual and
                                writing skills.
                            </li>
                            <li>
                                <strong
                                    >Use Written Instructions with Visual
                                    Steps</strong
                                ><br /><strong>Strategy:</strong> Break tasks
                                into visual and written steps to make the
                                instructions more digestible and clear.<br /><strong
                                    >Example:</strong
                                >
                                When working on a science experiment, provide a
                                written guide of the steps and include visual
                                diagrams to show how each step should look. This
                                helps your child follow along more easily.
                            </li>
                            <li>
                                <strong
                                    >Provide Visual and Written Study
                                    Guides</strong
                                ><br /><strong>Strategy:</strong> When preparing
                                for tests or projects, give your child a
                                combination of visual study guides (such as
                                charts or infographics) and written
                                summaries.<br /><strong>Example:</strong> Create
                                a study guide that includes diagrams of key
                                concepts along with written explanations. Your
                                child can use both the visual and written
                                elements to reinforce their understanding.
                            </li>
                            <li>
                                <strong
                                    >Encourage Written Reflection on Visual
                                    Materials</strong
                                ><br /><strong>Strategy:</strong> After
                                reviewing visual materials like charts or
                                diagrams, ask your child to write a reflection
                                or summary of what they’ve learned.<br /><strong
                                    >Example:</strong
                                >
                                After reviewing a visual timeline of historical
                                events, have your child write a short summary
                                explaining the sequence of events and their
                                significance. This helps reinforce the visual
                                information through writing.
                            </li>
                            <li>
                                <strong
                                    >Use Technology to Blend Visual and Written
                                    Learning</strong
                                ><br /><strong>Strategy:</strong> Leverage
                                educational apps or online tools that combine
                                visual elements with reading and writing
                                tasks.<br /><strong>Example:</strong> Use an
                                interactive learning app that allows your child
                                to view visual demonstrations and write
                                responses or explanations. This encourages them
                                to process information both visually and through
                                writing.
                            </li>
                            <li>
                                <strong
                                    >Encourage Visual Planning and Written
                                    Execution</strong
                                ><br /><strong>Strategy:</strong> When working
                                on projects or assignments, encourage your child
                                to first plan visually and then write out their
                                ideas.<br /><strong>Example:</strong>
                                Before starting a writing project, have your
                                child sketch out their ideas in a mind map and
                                then write their essay or report based on the
                                visual plan. This helps them organise their
                                thoughts visually and structure their writing
                                more effectively.
                            </li>
                        </ul>
                    </section>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-120 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/15.svg'"
                            alt=""
                        />
                    </div>
                    <div class="flex justify-center items-center">
                        <img
                            class="w-120 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/21.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>


        </div>

        <!-- Report 16 Visual-->
        <div v-if="style == 'Visual'">
            <!-- Content for Report 16 -->
            <!-- Classroom Strategies -->

            <div class="row">
                <div class="col-6">
                    <section class="mb-8">
                        <h2 class="text-3xl font-semibold text-indigo-500">
                            Classroom Strategies
                        </h2>
                        <p class="mt-4">
                            Visual learners thrive in environments where they
                            can see and visualise information. Here are some
                            effective classroom strategies to support visual
                            learners:
                        </p>
                        <ul class="list-inside list-decimal mt-4 space-y-2">
                            <li>
                                <strong>Use Visual Aids:</strong>
                                <ul class="list-disc pl-6 space-y-2 ml-8">
                                    <li>
                                        <strong>Strategy: </strong>
                                        Incorporate diagrams, charts, and graphs
                                        into your lessons to help visual
                                        learners understand and organise
                                        information.
                                    </li>
                                    <li>
                                        <strong>Example: </strong>
                                        Use multimedia presentations that
                                        include images and videos to reinforce
                                        key concepts.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <strong>Colour-Coded Notes:</strong>
                                <ul class="list-disc pl-6 space-y-2 ml-8">
                                    <li>
                                        <strong>Strategy: </strong>
                                        Encourage the use of colour-coded notes
                                        to help visual learners categorise and
                                        prioritise information.
                                    </li>
                                    <li>
                                        <strong>Example: </strong>
                                        Provide handouts with highlighted or
                                        colour-coded sections to emphasise
                                        important points.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <strong>Visual Organisers:</strong>
                                <ul class="list-disc pl-6 space-y-2 ml-8">
                                    <li>
                                        <strong>Strategy: </strong>
                                        Utilise graphic organisers such as mind
                                        maps, flowcharts, and Venn diagrams to
                                        help students organise their thoughts
                                        and ideas.
                                    </li>
                                    <li>
                                        <strong>Example: </strong>
                                        Create visual timelines for historical
                                        events or processes to show sequences
                                        and relationships.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <strong>Interactive Whiteboards:</strong>
                                <ul class="list-disc pl-6 space-y-2 ml-8">
                                    <li>
                                        <strong>Strategy: </strong>
                                        Use interactive whiteboards to display
                                        visual content and allow students to
                                        interact with the material.
                                    </li>
                                    <li>
                                        <strong>Example: </strong>
                                        Incorporate drawing and diagramming
                                        activities during lessons to engage
                                        visual learners.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <strong>Illustrated Instructions:</strong>
                                <ul class="list-disc pl-6 space-y-2 ml-8">
                                    <li>
                                        <strong>Strategy: </strong>
                                        Provide step-by-step instructions with
                                        accompanying illustrations or images.
                                    </li>
                                    <li>
                                        <strong>Example: </strong>
                                        Use visual schedules and charts to
                                        outline daily tasks and classroom
                                        routines.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <strong
                                    >Encourage Drawing and Sketching:</strong
                                >
                                <ul class="list-disc pl-6 space-y-2 ml-8">
                                    <li>
                                        <strong>Strategy: </strong>
                                        Allow students to draw or sketch their
                                        understanding of concepts, whether it's
                                        in their notes or as part of class
                                        activities.
                                    </li>
                                    <li>
                                        <strong>Example: </strong>
                                        Use art projects to reinforce learning
                                        in subjects such as science, history,
                                        and literature.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <strong>Visual Storytelling:</strong>
                                <ul class="list-disc pl-6 space-y-2 ml-8">
                                    <li>
                                        <strong>Strategy: </strong>
                                        Incorporate visual storytelling
                                        techniques in lessons. Use storyboards,
                                        comic strips, and picture books to
                                        convey information.
                                    </li>
                                    <li>
                                        <strong>Example: </strong>
                                        Encourage students to create their own
                                        visual stories or presentations on the
                                        topics they are learning.
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </section>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-120 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/15.svg'"
                            alt=""
                        />
                    </div>
                    <div class="flex justify-center items-center">
                        <img
                            class="w-120 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/21.svg'"
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
    name: "TeachingTipsFirst",
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
div.col-6 > div.mb-6 > h3,
div.space-y-4 > h3,
div.p-6 > div.row > div.col-6 > h3,
div.space-y-6 > div > h3 {
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

div.tip > div > h3,
.pink {
    color: rgb(36, 168, 250);
    font-weight: bold;
    color: #fa25c4;
}
.av-tips > li,
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
