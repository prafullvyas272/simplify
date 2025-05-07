<template>
    <div class="p-6">

    <div class="container mx-auto p-4">
        <h1 class="font-bold mb-4 text-center">Overview of Learning Style</h1>
    </div>
    <!-- Report 1 Auditory -->
    <div v-if="style == 'Auditory'">
        <!-- Content for Report 1 -->
        <div class="p-6">
            <h2 class="text-3xl font-semibold mb-4">
                Characteristics of Auditory Learners
            </h2>
            <p class="">
                Your child is an auditory learner, which means they understand
                and remember information best when it is presented through
                sound. Auditory learners excel when they can listen to
                information and engage in discussions. Here’s a closer look at
                what makes auditory learners unique:
            </p>
            <!-- Introduction -->
            <div></div>

            <div class="row">
                <div class="col-6">
                    <!-- Characteristics of Auditory Learners -->
                    <div>
                        <ul class="list-disc pl-6  space-y-4">
                            <li>
                                <strong>Prefers Listening:</strong> Auditory
                                learners enjoy listening to lectures,
                                discussions, and audio recordings. They absorb
                                information effectively through hearing.
                            </li>
                            <li>
                                <strong>Strong Verbal Skills:</strong> They
                                often have strong verbal communication skills.
                                They express themselves clearly and enjoy
                                engaging in conversations.
                            </li>
                            <li>
                                <strong>Good Memory for Sounds:</strong> They
                                have an excellent memory for sounds and verbal
                                instructions. They can recall spoken information
                                and remember details from conversations and
                                audio materials.
                            </li>
                            <li>
                                <strong>Enjoys Music and Rhythms:</strong> Many
                                auditory learners have a strong appreciation for
                                music and rhythms. They may use songs and rhymes
                                to help them remember information.
                            </li>
                            <li>
                                <strong>Active in Discussions:</strong> They
                                thrive in group discussions and verbal
                                interactions. They enjoy debating, asking
                                questions, and explaining concepts to others.
                            </li>
                            <li>
                                <strong>Reads Aloud:</strong> Auditory learners
                                often read aloud to help themselves understand
                                and retain information. They might also benefit
                                from listening to audiobooks.
                            </li>
                            <li>
                                <strong>Learns Through Talking:</strong> They
                                learn by talking through problems and ideas.
                                Explaining concepts to others helps reinforce
                                their understanding.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">

                        <img class="w-64 h-auto mt-5 object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/7.svg'" alt="" />

                    </div>
                    <div class="flex justify-center items-center">
                        <img class="w-64 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/3.svg'" alt="" />
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/24.svg'" alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <!-- Strengths of Auditory Learners -->
                    <div>
                        <h2 class="text-3xl font-semibold mb-4">
                            Strengths of Auditory Learners
                        </h2>
                        <ul class="list-disc pl-6  space-y-4">
                            <li>
                                <strong>Effective Communication:</strong>
                                Auditory learners are excellent communicators.
                                They can articulate their thoughts and ideas
                                clearly and persuasively.
                            </li>
                            <li>
                                <strong>Strong Listening Skills:</strong> They
                                have a keen ability to listen and understand
                                spoken information. This makes them good at
                                following verbal instructions and participating
                                in discussions.
                            </li>
                            <li>
                                <strong>Good at Remembering Verbal
                                    Information:</strong>
                                They can remember details from lectures,
                                conversations, and audio recordings. This helps
                                them retain information presented verbally.
                            </li>
                            <li>
                                <strong>Enjoys Verbal Activities:</strong>
                                Auditory learners enjoy activities that involve
                                listening and speaking, such as debates,
                                presentations, and storytelling.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <!-- Strengths of Auditory Learners -->
                    <ul class="list-disc pl-6  space-y-4">
                        <li>
                            <strong>Engaged in Group Work:</strong> They thrive
                            in group work and collaborative settings where they
                            can discuss and share ideas with others.
                        </li>
                        <li>
                            <strong>Uses Rhythms and Music:</strong> They often
                            use music, songs, and rhythms as mnemonic devices to
                            help them memorise information.
                        </li>
                        <li>
                            <strong>Learns Through Discussion:</strong> Engaging
                            in discussions and explaining concepts to others
                            reinforces their learning and understanding.
                        </li>
                    </ul>
                </div>

                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-50 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/11.svg'" alt="" />
                    </div>
                </div>
            </div>

            <div class="row">
                <h2 class="text-3xl font-semibold mb-4">
                    Potential Challenges for Auditory Learners
                </h2>
                <div class="col-6">
                    <!-- Potential Challenges for Auditory Learners -->
                    <div>
                        <ul class="list-disc pl-6  space-y-4">
                            <li>
                                <strong>Difficulty with Written
                                    Instructions:</strong>
                                Auditory learners may struggle with information
                                presented only in written form. They benefit
                                from hearing instructions in addition to reading
                                them.
                            </li>
                            <li>
                                <strong>Easily Distracted by Noise:</strong>
                                They can be easily distracted by background
                                noise and may find it challenging to concentrate
                                in noisy environments.
                            </li>
                            <li>
                                <strong>Need for Verbal Reinforcement:</strong>
                                They may need verbal reinforcement to fully
                                understand and remember concepts. Visual aids
                                alone might not be sufficient.
                            </li>
                            <li>
                                <strong>Challenges with Silent Reading:</strong>
                                Reading silently can be less effective for
                                auditory learners. They might benefit from
                                reading aloud or using audiobooks.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-64 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/20.svg'" alt="" />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-50 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/15.svg'" alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <!-- Strengths of Auditory Learners -->
                    <ul class="list-disc pl-6  space-y-4">
                        <li>
                            <strong>Over Reliance on Verbal Communication:</strong>
                            They might rely too heavily on verbal communication
                            and struggle with tasks that require strong visual
                            or kinaesthetic skills.
                        </li>
                        <li>
                            <strong>Difficulty with Visual-Spatial Tasks:</strong>
                            Auditory learners may find visual-spatial tasks,
                            such as reading maps or interpreting diagrams, more
                            challenging.
                        </li>
                        <li>
                            <strong>Need for Verbal Interaction:</strong>
                            They may become disengaged in environments that lack
                            verbal interaction and opportunities for discussion.
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Conclusion -->
            <div>
                <p class="">
                    By understanding these characteristics, strengths, and
                    potential challenges, parents and teachers can better
                    support auditory learners in their educational journey.
                </p>
            </div>
        </div>
    </div>

    <!-- Report 2 Auditory _ Kinesthethic Blend -->

    <div v-if="style == 'Auditory/Kinesthethic'">
        <!-- Content for Report 2 -->
        <div class="p-6 rounded-lg">
            <div class="row">
                <p>

                    Your child’s learning style is a blend of both <b>auditory</b> and <b>kinaesthetic</b> preferences, meaning they absorb and retain information most effectively when they can hear it and physically engage with it. Here's a closer look at what makes <b>auditory and kinaesthetic learners</b> unique:

                </p>
                <h2 class="text-3xl font-semibold">
                    Characteristics of Auditory and Kinaesthetic Learners
                </h2>
                <div class="col-6">
                    <section class="mb-8">
                        <!-- Auditory Learning Characteristics -->
                        <div class="mt-4 ">
                            <h2 class="font-semibold text-2xl">
                                Auditory Learning Characteristics:
                            </h2>
                            <ul class="list-inside list-disc mt-2 space-y-2">
                                <li>
                                    <strong>Learns Best Through Listening: </strong>
                                    Auditory learners excel when information is presented verbally. They absorb content
                                    through discussions, lectures, and audio resources like podcasts or audiobooks.

                                </li>
                                <li>
                                    <strong>Strong Verbal Memory: </strong>
                                    They often have a strong memory for spoken information, recalling details from
                                    conversations or lessons more easily than from written text.

                                </li>
                                <li><strong>Enjoys Participating in Discussions: </strong>
                                    Auditory learners tend to engage well in group discussions or debates, where they
                                    can process information by talking it through with others.

                                </li>
                                <li><strong>Uses Verbal Repetition for Recall: </strong>
                                    They often remember facts by repeating them out loud, whether it’s practising
                                    vocabulary, reciting key points, or reading aloud to reinforce their understanding.

                                </li>
                                <li><strong>Listens to Understand Complex Ideas: </strong>
                                    They can grasp abstract concepts when they hear them explained clearly, making them
                                    well-suited to learning through audio-based instruction or storytelling.

                                </li>
                                <li><strong>Benefits from Background Noise: </strong>
                                    Many auditory learners find it easier to concentrate when there is soft background
                                    noise, such as music, or when they are listening to something engaging while
                                    working.

                                </li>
                                <li><strong>Prefers Spoken Instructions: </strong>
                                    They often prefer verbal instructions to written ones, as they can better understand
                                    and follow directions that are spoken.


                                </li>
                            </ul>
                        </div>

                        <!-- Kinaesthetic Learning Characteristics -->
                        <div class="mt-4 ">
                            <h2 class="font-semibold text-2xl">
                                Kinaesthetic Learning Characteristics:
                            </h2>
                            <ul class="list-inside list-disc mt-2 space-y-2">
                                <li><strong>Learns Best by Doing: </strong>
                                    Kinaesthetic learners thrive when they can physically engage with the material,
                                    whether through building, manipulating objects, or performing tasks.

                                </li>
                                <li><strong>Enjoys Movement During Learning: </strong>
                                    Kinaesthetic learners benefit from moving around while studying or learning, such as
                                    pacing while thinking or engaging in active learning stations.

                                </li>
                                <li><strong>Strong Motor Skills: </strong>
                                    They often excel in activities that require coordination, such as sports, dance, or hands-on tasks that involve using tools or creating things.
                                </li>
                                <li><strong>
                                        Solves Problems Through Physical Interaction
                                    : </strong>
                                    Kinaesthetic learners prefer to solve problems by physically engaging with the
                                    material, whether it’s through trial and error or building models to understand a
                                    concept.

                                </li>
                                <li><strong>Physical Memory: </strong>
                                    They tend to remember information better when they’ve physically acted it out or
                                    performed a related task, such as writing, building, or moving.

                                </li>
                                <li><strong>Focuses Better When Active: </strong>
                                    They often concentrate more effectively when they are physically engaged, such as
                                    doodling during a lecture or moving around while solving a problem.

                                </li>
                                <li><strong>Enjoys Hands-On Projects: </strong>
                                    Kinaesthetic learners excel at projects that involve making, building, or doing,
                                    such as experiments, crafts, or physical demonstrations.

                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">

                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/7.svg'" alt="" />

                    </div>
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/3.svg'" alt="" />
                    </div>
                    <div data-v-dbde8ef8="" class="flex justify-center items-center"><img data-v-dbde8ef8="" class="w-120 h-auto object-contain" src="/images/reports-svg-images/Kids/LearningStyles/9.svg" alt=""></div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/24.svg'" alt="" />
                    </div>
                    <div data-v-dbde8ef8="" class="flex justify-center items-center"><img data-v-dbde8ef8="" class="w-120 h-auto object-contain" src="/images/reports-svg-images/Kids/LearningStyles/9.svg" alt=""></div>

                </div>
                <div class="col-6">
                    <section class="mb-8">
                        <h2 class="text-3xl font-semibold mb-4">
                            Strengths of Auditory and Kinaesthetic Learners
                        </h2>
                        <div class="mt-4 ">
                            <ul class="list-inside list-disc mt-2 space-y-2">
                                <li><strong>Dual Processing of Information: </strong>
                                    Your child excels at processing information by hearing it and then reinforcing their
                                    understanding through physical actions. This combination allows them to absorb
                                    content quickly and apply it through hands-on tasks.
                                </li>
                                <li><strong>
                                        Strong Memory for Spoken and Physical
                                        Activities
                                    : </strong>
                                    They have an excellent ability to recall information they’ve heard and remember
                                    tasks they’ve physically performed. This makes them particularly effective at
                                    learning through lectures, discussions, and hands-on demonstrations.

                                </li>
                                <li><strong>Engaged and Interactive Learning Style: </strong>
                                    Your child is highly engaged when learning involves both verbal explanations and physical interaction. Whether it's participating in discussions or performing experiments, they are fully immersed in the learning process.


                                </li>
                                <li><strong>
                                        Effective at Applying Theoretical Concepts
                                        Through Practice
                                    : </strong>
                                    They are good at translating what they hear into action. Auditory explanations help them grasp concepts, and kinaesthetic tasks allow them to practice and solidify their understanding by physically applying the information.

                                </li>
                                <li><strong>
                                        High Levels of Focus During Active Learning
                                    : </strong>
                                    Your child can maintain focus and engagement when they are actively involved, either by moving, performing tasks, or speaking about the material. This keeps them energised and attentive during learning sessions.


                                </li>
                                <li><strong>
                                        Quick Adaptation to Hands-On Problem Solving
                                    : </strong>
                                    When faced with challenges, your child can quickly switch from auditory input to hands-on problem-solving. This adaptability makes them excellent at solving real-world problems, especially in collaborative or hands-on environments.

                                </li>
                                <li><strong>Expressive Communication Skills: </strong>
                                    They are effective communicators, both verbally and physically. They excel in discussions, group work, and collaborative projects where they can articulate their ideas and physically demonstrate their understanding.

                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <section class="mb-8">
                        <h2 class="text-3xl font-semibold mb-4">
                            Potential Challenges
                        </h2>
                        <div class="mt-4 ">
                            <ul class="list-inside list-disc mt-2 space-y-2">
                                <li><strong>
                                        Difficulty with Silent, Independent Study
                                    : </strong>
                                    Your child may struggle with learning environments that require prolonged periods of silent, independent study, as they prefer to learn through listening and physical engagement. Reading long passages of text without auditory input or hands-on tasks may feel overwhelming or tedious for them.
                                </li>
                                <li><strong>
                                        Challenges with Written-Only Instructions
                                    : </strong>
                                    Kinaesthetic learners often find it hard to follow written instructions without a verbal explanation or demonstration. If tasks are presented only in written form, your child may need additional support to fully understand the steps involved.

                                </li>
                                <li><strong>
                                        Restlessness in Still, Passive Learning
                                        Environments
                                    : </strong>
                                    Your child may find it difficult to sit still for long periods of time during passive learning activities like lectures or watching videos. They thrive when they can move or physically engage with the content, so traditional classroom settings that limit movement can lead to restlessness or distraction.

                                </li>
                                <li><strong>
                                        Struggles with Abstract Concepts Presented
                                        Without Physical Context
                                    : </strong>
                                    Abstract or theoretical concepts that are not tied to a physical action or experience can be harder for your child to grasp. They may need hands-on activities or real-world examples to make sense of complex ideas that are taught purely through auditory or written formats.

                                </li>
                                <li><strong>
                                        Need for Frequent Breaks During Quiet Study
                                        Sessions
                                    : </strong>
                                    Your child may need regular breaks when working in quiet environments, as they learn best when they are able to move around or engage with the material physically. Long stretches of sitting still can result in loss of focus and engagement.

                                </li>
                                <li><strong>
                                        Over-Reliance on Verbal or Physical Cues
                                    : </strong>
                                    Your child may become too dependent on hearing instructions or physically engaging with materials, which could make it challenging for them to adapt to learning environments that rely heavily on visual or reading/writing methods.

                                </li>
                                <li><strong>
                                        Difficulty Retaining Visual or Written
                                        Information Without Engagement
                                    : </strong>
                                    Your child may struggle to retain information presented solely in written or visual formats, especially if they are not given the opportunity to discuss or interact with the material. They benefit most from discussing the content and engaging with it physically.

                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-64 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/20.svg'" alt="" />
                    </div>
                    <div data-v-dbde8ef8="" class="flex justify-center items-center"><img data-v-dbde8ef8="" class="w-120 h-auto object-contain" src="/images/reports-svg-images/Kids/LearningStyles/9.svg" alt=""></div>
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/3.svg'" alt="" />
                    </div>
                </div>
            </div>

            <p class="mt-4 ">
                By understanding these characteristics, strengths, and
                potential challenges, parents and teachers can better
                support blended learners in their educational journey.
            </p>
        </div>

    </div>

    <!-- Report 3 Auditory _ Reading & Writing Blend-->
    <div v-if="style == 'Auditory/Reading/Writing'">
        <!-- Content for Report 3 -->
        <div class="p-6">
            <!-- Introduction -->
            <div class="mb-6">
                <p class="">
                    Your child’s learning style is a blend of both auditory and
                    reading/writing preferences
                </p>
                <p class="mt-2">
                    This means they absorb and retain information most
                    effectively when they can listen to verbal explanations and
                    reinforce their understanding through reading and writing.
                    Here’s a closer look at what makes auditory and
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
                                    <strong>Learns Best Through Listening: </strong>
                                    Auditory learners excel when they hear information presented verbally, such as in discussions, lectures, or audio resources like podcasts or audiobooks.

                                </li>
                                <li><strong>
                                    Strong Verbal Memory
                                : </strong>
                                They often have an exceptional memory for spoken information, recalling details from lessons, conversations, or verbal instructions easily.

                            </li>
                                <li>
                                    <strong>Engages in Discussions: </strong>
                                    Auditory learners thrive in group discussions or debates, processing information by talking it through and listening to different perspectives.

                                </li>
                                <li>
                                    <strong>Uses Verbal Repetition for Recall: </strong>
                                    Repeating key points out loud helps auditory learners remember facts, whether it’s practising vocabulary, discussing ideas, or reading aloud.

                                </li>
                                <li>
                                    <strong>Understands Abstract Ideas Through Verbal
                                        Explanation: </strong>
                                        Auditory learners can grasp complex or abstract concepts when they hear them explained clearly, making verbal instruction an effective tool for learning.

                                </li>
                                <li>
                                    <strong>Prefers Verbal Instructions: </strong>
                                    They often follow tasks and lessons more easily when instructions are given verbally, helping them understand and apply information more effectively.

                                </li>
                                <li>
                                    <strong>Responds Well to Audio Resources: </strong>
                                    They benefit from listening to background music or engaging audio content while working, as it helps them concentrate and stay focused.

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
                                    <strong>Prefers Written Text
                                    : </strong>
                                    Reading/writing learners absorb information best through written text, such as books, articles, or notes, and they often take detailed notes to process new information.

                                </li>
                                <li>
                                    <strong>Strong Writing Skills
                                    : </strong>
                                    They express themselves clearly through writing, enjoying tasks like writing essays, reports, or summaries to organise their thoughts.

                                </li>
                                <li>
                                    <strong> Uses Written Notes for Memory
                                    : </strong>
                                    Writing down key points helps them clarify ideas and remember information. They often rewrite or summarise notes to reinforce their learning.

                                </li>
                                <li>
                                    <strong> Favours Text-Based Learning Resources
                                    : </strong>
                                    Reading/writing learners prefer studying with textbooks, manuals, and written guides, using these resources to deepen their understanding.

                                </li>
                                <li>
                                    <strong>Good at Retaining Written Information
                                    : </strong>
                                    They remember facts and concepts they’ve read or written down, making studying from written materials particularly effective.

                                </li>
                                <li>
                                    <strong>Prefers to Process Information by Writing
                                    : </strong>
                                    They often use writing as a way to process and organise their understanding of new material, helping them develop clearer insights through essays or reports.

                                </li>
                                <li>
                                    <strong>Uses Summaries and Rewrites to Reinforce Learning
                                    : </strong>
                                    Summarising information or rewriting notes helps reading/writing learners retain important details, strengthening their memory and understanding.
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">

                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/7.svg'" alt="" />

                    </div>
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/3.svg'" alt="" />
                    </div>
                    <div data-v-dbde8ef8="" class="flex justify-center items-center"><img data-v-dbde8ef8="" class="w-120 h-auto object-contain" src="/images/reports-svg-images/Kids/LearningStyles/9.svg" alt=""></div>

                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/24.svg'" alt="" />
                    </div>
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/3.svg'" alt="" />
                    </div>
                    <div data-v-dbde8ef8="" class="flex justify-center items-center"><img data-v-dbde8ef8="" class="w-120 h-auto object-contain" src="/images/reports-svg-images/Kids/LearningStyles/9.svg" alt=""></div>
                </div>
                <div class="col-6">
                    <!-- Strengths -->
                    <div class="mb-6">
                        <h2 class="text-3xl font-semibold mb-4">
                            Strengths of Auditory and Reading/Writing Learners:
                        </h2>
                        <ul class="list-disc pl-6 mt-2">

                            <li>
                                    <strong>Effective Processing of Verbal and Written Information
                                    : </strong>
                                    Your child can absorb information by listening to verbal explanations and discussions, and reinforce that knowledge by reading or writing. This dual approach helps them understand concepts more thoroughly and retain them for longer periods.
                                </li>
                                <li>
                                    <strong>Strong Memory for Spoken and Written Details
                                    : </strong>
                                    They have an excellent memory for both verbal and written information, easily recalling facts and concepts they’ve heard or read. This makes them particularly adept at learning from lectures, discussions, and reading materials.

                                </li>
                                <li>
                                    <strong>Excellent at Organising Thoughts Through Writing
                                    : </strong>
                                    Writing is a key strength for your child, and they can effectively organise their thoughts through essays, summaries, or notes. This allows them to process and articulate complex ideas clearly and efficiently.

                                </li>
                                <li>
                                    <strong>Engages Well in Discussions and Written Reflection
                                    : </strong>
                                    Your child excels at engaging in discussions to process new information, then reflecting on it by writing summaries or reports. This dual engagement helps them clarify and deepen their understanding of a subject.

                                </li>
                                <li>
                                    <strong> Strong Analytical Skills Through Reading and Writing
                                    : </strong>
                                    They are good at analysing information through reading and writing, breaking down complex material into understandable parts. This skill helps them interpret new concepts and apply them in practical contexts.

                                </li>
                                <li>
                                    <strong>Ability to Grasp Abstract Concepts Through Verbal Explanation
                                    : </strong>
                                    Verbal explanations help your child understand abstract or complex ideas, while writing allows them to organise these concepts into a structured format, enhancing their comprehension.

                                </li>
                                <li>
                                    <strong>Flexible Learning Style
                                    : </strong>
                                    Your child can easily switch between auditory and reading/writing methods, allowing them to adapt to different learning environments. They can learn effectively from listening or reading and are able to reinforce their knowledge through writing.

                                </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <!-- Potential Challenges -->
                    <div class="mb-6">
                        <h2 class="text-3xl font-semibold mb-4">
                            Potential Challenges:
                        </h2>
                        <ul class="list-disc pl-6 mt-2">

                            <li>
                                    <strong>Difficulty with Visual or Hands-On Learning
                                    : </strong>
                                    Your child may struggle with lessons that rely heavily on visual aids or hands-on activities without verbal instructions or written guides. They may find it harder to grasp information presented only through pictures, models, or demonstrations without accompanying text or verbal explanations.

                                </li>
                                <li>
                                    <strong>Challenges with Retaining Information from Visual-Only Presentations
                                    : </strong>
                                    When information is presented solely in visual formats (like diagrams or charts) without any written text or verbal explanations, your child may have difficulty retaining and fully understanding the material.

                                </li>
                                <li>
                                    <strong>Struggles with Kinaesthetic-Only Learning
                                    : </strong>
                                    Kinaesthetic activities that require physical interaction without any written or verbal guidance can be frustrating for your child. They may need written instructions or verbal explanations to complement the physical task in order to make sense of it.

                                </li>
                                <li>
                                    <strong>Over-Reliance on Verbal and Written Input
                                    : </strong>
                                    Your child may become too dependent on verbal explanations or written materials, making it difficult for them to adapt to learning environments that prioritise visual or hands-on learning methods. They might find it challenging to learn through demonstrations or non-verbal cues.

                                </li>
                                <li>
                                    <strong>Difficulty Engaging in Silent, Independent Work
                                    : </strong>
                                    Auditory learners often thrive in environments where they can talk through ideas or hear explanations, so silent, independent work that lacks verbal interaction may cause them to lose focus or motivation.

                                </li>
                                <li>
                                    <strong>Need for More Time to Process Information
                                    : </strong>
                                    Your child may require additional time to process information they hear or read before they feel confident in their understanding. Quick transitions between tasks without time for reflection or note-taking could leave them feeling rushed or unsure.
                                </li>
                                <li>
                                    <strong>Struggles with Abstract Concepts Without Clear Explanations
                                    : </strong>
                                    If abstract concepts are presented without clear verbal explanations or written descriptions, your child may have difficulty grasping them. They rely on hearing or reading details to make sense of complex ideas, so a lack of clarity in these areas can hinder their comprehension.

                                </li>
                        </ul>
                    </div>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/20.svg'" alt="" />
                    </div>
                    <div data-v-dbde8ef8="" class="flex justify-center items-center"><img data-v-dbde8ef8="" class="w-120 h-auto object-contain" src="/images/reports-svg-images/Kids/LearningStyles/9.svg" alt=""></div>

                </div>
            </div>

            <!-- Conclusion -->
            <div class="mt-6">
                <p>
                    By understanding these characteristics, strengths, and
                    potential challenges, parents and teachers can better
                    support blended learners in their educational journey.
                </p>
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
                    auditory and visual preferences. This means they understand
                    and remember information best when it is presented both
                    verbally and visually. Here's a closer look at what makes
                    auditory and visual learners unique:
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
                        <ul class="list-disc pl-5 ">
                            <li>
                                <strong>Remembers Verbal Instructions:</strong> Excels at
                                recalling information from conversations,
                                lectures, and discussions.
                            </li>
                            <li>
                                <strong>Engages in Discussions:</strong> Enjoys participating in
                                group discussions, debates, and verbal
                                exchanges.
                            </li>
                            <li>
                                <strong>Learns Through Listening:</strong> Absorbs information
                                effectively through audio resources like
                                podcasts and lectures.
                            </li>
                            <li><strong>
                                    Reads Aloud to Understand Concepts:</strong> Often reads
                                aloud or speaks through problems to reinforce
                                learning.
                            </li>
                            <li><strong>
                                    Uses Rhythms or Music to Learn:</strong> May use songs,
                                rhythms, or mnemonics to remember facts and
                                concepts.
                            </li>
                            <li><strong>
                                    Strong Verbal Communication Skills:</strong> Comfortable
                                explaining ideas and concepts to others
                                verbally.
                            </li>
                            <li><strong>
                                    Remembers Tone and Emotion in Speech:</strong> Can recall
                                not only what was said but also the tone and
                                emotional context of conversations.
                            </li>
                        </ul>

                        <h2 class="text-lg font-semibold mb-4">
                            Visual Learning Characteristics:
                        </h2>
                        <ul class="list-disc pl-5 ">
                            <li><strong>
                                    Prefers Visual Aids:</strong> Learns best when
                                information is presented through diagrams,
                                charts, videos, and images.
                            </li>
                            <li><strong>
                                    Strong Spatial Awareness:</strong> Easily interprets and
                                remembers spatial arrangements, maps, and visual
                                layouts.
                            </li>
                            <li><strong>
                                    Colour-Coded and Organised Notes:</strong> Tends to
                                benefit from organising notes with colours,
                                highlights, and mind maps.
                            </li>
                            <li><strong>
                                    Pays Attention to Visual Details:</strong> Notices and
                                remembers visual cues like symbols, shapes, and
                                images.
                            </li>
                            <li><strong>
                                    Reads Body Language and Visual Cues Well:</strong> Can
                                often pick up on non-verbal cues in
                                communication and learning.
                            </li>
                            <li><strong>
                                    Visualises Concepts in Mind:</strong> Can "see" concepts
                                and ideas mentally, making it easier to remember
                                and apply them.
                            </li>
                            <li><strong>
                                    Uses Images for Problem-Solving:</strong> Visualises
                                steps or uses drawings to solve complex
                                problems.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/7.svg'" alt="" />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/24.svg'" alt="" />
                    </div>
                    <div class="flex justify-center items-center">
                        <img class="w-64 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/20.svg'" alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <div>
                        <h2 class="text-3xl font-semibold mb-4">
                            Strengths of Auditory and Visual Learners
                        </h2>
                        <ul class="list-disc pl-5 ">
                            <li><strong>
                                    Dual Processing of Information:</strong>
                                Your child can process both visual and auditory input effectively. They are able to
                                understand complex ideas by seeing them represented visually and hearing explanations,
                                making it easier to grasp challenging concepts.

                            </li>
                            <li><strong>
                                    Strong Memory for Visual and Verbal Content:</strong>
                                They have the ability to remember both what they’ve seen and what they’ve heard, whether
                                it’s images, diagrams, or spoken words. This dual strength helps with recalling
                                information during exams or discussions.

                            </li>
                            <li><strong>
                                    Engaged in Visual and Verbal Learning
                                    Activities:</strong>
                                Your child enjoys activities that combine visual and auditory elements, such as watching
                                videos with verbal explanations, attending presentations, or participating in
                                interactive lessons where visuals are supported by audio.

                            </li>
                            <li><strong>
                                    Adaptable Learning Approach:</strong>
                                They can easily shift between visual and auditory learning environments, allowing them
                                to adapt to different teaching styles and materials.

                            </li>
                            <li><strong>
                                    Quick Understanding of Abstract Concepts:</strong>
                                Combining visual and auditory cues helps your child quickly grasp abstract ideas, as
                                they can "see" the concept and understand it through verbal explanation.

                            </li>
                            <li><strong>
                                    Effective in Group Discussions and
                                    Presentations: </strong>
                                With strong verbal and visual strengths, they excel in group discussions and
                                presentations where they can both see and hear information.

                            </li>
                            <li><strong>
                                    Creative and Innovative Thinking: </strong>
                                Visual and auditory learners often come up with creative solutions by blending what they
                                hear and what they visualise, making them adaptable problem-solvers.

                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div>
                        <h2 class="text-3xl font-semibold mb-4">
                            Potential Challenges
                        </h2>
                        <ul class="list-disc pl-5 ">
                            <li><strong>
                                    Difficulty When Visual and Verbal Cues Are Not
                                    Aligned:</strong>
                                Your child may struggle when visual materials don’t match the verbal explanations or
                                when they are presented independently. If they only receive one type of input, such as a
                                diagram without a verbal explanation or a spoken lecture without supporting visuals,
                                they may not absorb the information as effectively.
                            </li>
                            <li><strong>
                                    Over-reliance on Visual or Auditory Input:</strong>
                                In some cases, your child may Favour one method over the other, leading to a reliance on
                                either visual or auditory information. This could mean that they may become frustrated
                                or disengaged when required to use a different approach or when one form of input
                                (visual or auditory) is lacking.

                            </li>
                            <li><strong>
                                    Challenges with Independent Work:</strong>
                                During periods of silent or independent work, your child may struggle without verbal
                                explanations or visual stimuli. If neither style is engaged, they may find it difficult
                                to maintain focus, especially if the task is purely reading-based or requires extended
                                periods of listening.

                            </li>
                            <li><strong>
                                    Struggles in Noisy or Overly Stimulating
                                    Environments:</strong>
                                Environments with too much visual clutter or background noise can overwhelm your child.
                                They may find it hard to filter out unnecessary distractions, whether they’re visual
                                (e.g., a busy classroom wall) or auditory (e.g., loud conversations).

                            </li>
                            <li><strong>
                                    Difficulty with Text-Only or Audio-Only
                                    Materials:</strong>
                                Your child may struggle to stay engaged with materials that focus solely on text
                                (without visuals) or only audio (without visual aids). For example, a long passage of
                                written text may feel overwhelming without visuals, while listening to a podcast without
                                accompanying diagrams might leave them missing key details.

                            </li>
                            <li><strong>
                                    Need for Both Visual and Verbal Reinforcement:</strong>
                                Sometimes, your child may need the same information presented in both visual and
                                auditory formats to fully grasp it. They may have difficulty understanding concepts if
                                they are only presented in one format, making it harder for them to retain the
                                information long-term.

                            </li>
                            <li><strong>
                                    Overstimulation or Frustration with Mismatched
                                    Pacing:</strong>
                                Your child may become frustrated if the pacing of verbal instruction doesn’t match the
                                time needed to absorb accompanying visuals, or vice versa. For example, if a teacher
                                explains something too quickly before your child can fully take in a visual, or if a
                                diagram is shown without enough time for an auditory explanations, it can lead to
                                confusion or incomplete understanding.

                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-64 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/20.svg'" alt="" />
                    </div>
                    <div data-v-b2853f7f="" class="flex justify-center items-center"><img data-v-b2853f7f=""
                            class="w-64 h-auto object-contain"
                            src="/images/reports-svg-images/Kids/LearningStyles/7.svg" alt=""></div>
                    <div data-v-b2853f7f="" class="flex justify-center items-center"><img data-v-b2853f7f=""
                            class="w-120 h-auto object-contain"
                            src="/images/reports-svg-images/Kids/LearningStyles/24.svg" alt=""></div>
                </div>
            </div>

            <div>
                <p class=" mt-4">
                    By understanding these characteristics, strengths, and
                    potential challenges, parents and teachers can better
                    support blended learners in their educational journey.
                </p>
            </div>
        </div>
    </div>

    <!-- Report 5 Kinesthethic _ Auditory Blend-->
    <div v-if="style == 'Kinesthethic/Auditory'">
        <!-- Content for Report 5 -->
        <div class="p-6">
            <div>
                <h2 class="text-3xl font-semibold">
                    Your child’s learning style is a blend of both kinaesthetic
                    and auditory preferences
                </h2>
                <p class="">
                    Your child absorbs and retains information best when they
                    can physically engage with the material while also
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
                                <li><strong>Learns Best by Doing: </strong><br>
                                    Kinaesthetic learners thrive when they can
                                    physically engage with the material, whether
                                    through building, manipulating objects, or
                                    performing tasks.</li>

                                <li><strong>Enjoys Movement During Learning: </strong><br>Kinaesthetic learners benefit
                                    from moving
                                    around while studying or learning, such as
                                    pacing while thinking or engaging in active
                                    learning stations.</li>

                                <li><strong>Strong Motor Skills: </strong>
                                    They often excel in activities that require
                                    coordination, such as sports, dance, or
                                    hands-on tasks that involve using tools or
                                    creating things.</li>

                                <li>
                                    <strong>Solves Problems Through Physical Interaction: </strong>
                                    Kinaesthetic learners prefer to solve
                                    problems by physically engaging with the
                                    material, whether it’s through trial and
                                    error or building models to understand a
                                    concept.
                                </li>

                                <li><strong> Physical Memory: </strong>
                                    They tend to remember information better
                                    when they’ve physically acted it out or
                                    performed a related task, such as writing,
                                    building, or moving.
                                </li>

                                <li><strong>Focuses Better When Active: </strong>
                                    They often concentrate more effectively when
                                    they are physically engaged, such as
                                    doodling during a lecture or moving around
                                    while solving a problem.
                                </li>

                                <li>
                                    <strong>Enjoys Hands-On Projects: </strong>
                                    Kinaesthetic learners excel at projects that
                                    involve making, building, or doing, such as
                                    experiments, crafts, or physical
                                    demonstrations.
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/7.svg'" alt="" />
                    </div>
                </div>
            </div>

            <div class="row">
                <h2 class="text-3xl font-semibold mb-4">
                    Auditory Learning Characteristics:
                </h2>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/12.svg'" alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <ul class="list-disc pl-5  space-y-2">
                        <li><strong>Learns Best Through Listening: </strong>Auditory learners excel when information is
                            presented verbally. They absorb content through
                            discussions, lectures, and audio resources like
                            podcasts or audiobooks.</li>

                        <li><strong>Strong Verbal Memory: </strong> They often have a strong memory for spoken
                            information, recalling details from conversations or
                            lessons more easily than from written text.</li>

                        <li><strong>Enjoys Participating in Discussions: </strong> Auditory learners tend to engage well
                            in group
                            discussions or debates, where they can process
                            information by talking it through with others.</li>

                        <li><strong>Uses Verbal Repetition for Recall: </strong> They often remember facts by repeating
                            them out
                            loud, whether it’s practising vocabulary, reciting
                            key points, or reading aloud to reinforce their
                            understanding.</li>

                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <!-- Strengths of Auditory Learners -->
                    <ul class="list-disc pl-6  space-y-4">
                        <li><strong>Listens to Understand Complex Ideas: </strong> They can grasp abstract concepts when
                            they hear them
                            explained clearly, making them well-suited to
                            learning through audio-based instruction or
                            storytelling.</li>

                        <li><strong>Benefits from Background Noise: </strong>Many auditory learners find it easier to
                            concentrate
                            when there is soft background noise, such as music,
                            or when they are listening to something engaging
                            while working.</li>

                        <li><strong>Prefers Spoken Instructions: </strong>They often prefer verbal instructions to
                            written
                            ones, as they can better understand and follow
                            directions that are spoken.</li>

                    </ul>
                </div>

                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-95 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/21.svg'" alt="" />
                    </div>
                </div>
            </div>

            <div class="row">
                <h2 class="text-3xl font-semibold mb-4">
                    Strengths of Kinaesthetic and Auditory Learners
                </h2>
                <div class="col-6">
                    <div>
                        <ul class="list-disc pl-5  space-y-2">
                            <li><strong>Dual Processing of Information: </strong>Your child excels at processing
                                information by
                                hearing it and then reinforcing their
                                understanding through physical actions. This
                                combination allows them to absorb content
                                quickly and apply it through hands-on tasks.</li>

                            <li><strong>
                                    Strong Memory for Spoken and Physical Activities
                                    : </strong> They have an excellent ability to recall
                                information they’ve heard and remember tasks
                                they’ve physically performed. This makes them
                                particularly effective at learning through
                                lectures, discussions, and hands-on
                                demonstrations.</li>

                            <li><strong>Engaged and Interactive Learning Style: </strong> Your child is highly engaged
                                when learning
                                involves both verbal explanations and physical
                                interaction. Whether it's participating in
                                discussions or performing experiments, they are
                                fully immersed in the learning process.</li>

                            <li><strong>
                                    Effective at Applying Theoretical Concepts
                                    Through Practice
                                    : </strong>They are good at translating what they hear into
                                action. Auditory explanations help them grasp
                                concepts, and kinaesthetic tasks allow them to
                                practice and solidify their understanding by
                                physically applying the information.</li>

                        </ul>
                    </div>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/24.svg'" alt="" />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-95 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/22.svg'" alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <!-- Strengths of Auditory Learners -->
                    <ul class="list-disc pl-6  space-y-4">
                        <li><strong>High Levels of Focus During Active Learning: </strong>Your child can maintain focus
                            and engagement when
                            they are actively involved, either by moving,
                            performing tasks, or speaking about the material.
                            This keeps them energised and attentive during
                            learning sessions.</li>

                        <li><strong>Quick Adaptation to Hands-On Problem Solving: </strong> When faced with challenges,
                            your child can quickly
                            switch from auditory input to hands-on
                            problem-solving. This adaptability makes them
                            excellent at solving real-world problems, especially
                            in collaborative or hands-on environments.</li>

                        <li><strong>Expressive Communication Skills: </strong> They are effective communicators, both
                            verbally and
                            physically. They excel in discussions, group work,
                            and collaborative projects where they can articulate
                            their ideas and physically demonstrate their
                            understanding.</li>

                    </ul>
                </div>
            </div>

            <div class="row">
                <h2 class="text-3xl font-semibold mb-4">
                    Potential Challenges
                </h2>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-64 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/20.svg'" alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <div>
                        <ul class="list-disc pl-5  space-y-2">
                            <li><strong>Difficulty with Silent, Independent Study: </strong>Your child may struggle with
                                learning
                                environments that require prolonged periods of
                                silent, independent study, as they prefer to
                                learn through listening and physical engagement.
                                Reading long passages of text without auditory
                                input or hands-on tasks may feel overwhelming or
                                tedious for them.</li>

                            <li><strong>Challenges with Written-Only Instructions: </strong>Kinaesthetic learners often
                                find it hard to
                                follow written instructions without a verbal
                                explanation or demonstration. If tasks are
                                presented only in written form, your child may
                                need additional support to fully understand the
                                steps involved.</li>




                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-6">
                    <!-- Strengths of Auditory Learners -->
                    <ul class="list-disc pl-6  space-y-4">
                        <li><strong>
                                Restlessness in Still, Passive Learning
                                Environments
                                : </strong>
                            Your child may find it difficult to sit still for
                            long periods of time during passive learning
                            activities like lectures or watching videos. They
                            thrive when they can move or physically engage with
                            the content, so traditional classroom settings that
                            limit movement can lead to restlessness or
                            distraction.</li>

                        <li><strong>
                                Struggles with Abstract Concepts Presented Without
                                Physical Context
                                : </strong> Abstract or theoretical concepts that are not tied
                            to a physical action or experience can be harder for
                            your child to grasp. They may need hands-on
                            activities or real-world examples to make sense of
                            complex ideas that are taught purely through
                            auditory or written formats.</li>



                        <li><strong>
                                Need for Frequent Breaks During Quiet Study Sessions
                                : </strong> Your child may need regular breaks when working in
                            quiet environments, as they learn best when they are
                            able to move around or engage with the material
                            physically. Long stretches of sitting still can
                            result in loss of focus and engagement.</li>

                        <li><strong>Over-Reliance on Verbal or Physical Cues: </strong> Your child may become too
                            dependent on hearing
                            instructions or physically engaging with materials,
                            which could make it challenging for them to adapt to
                            learning environments that rely heavily on visual or
                            reading/writing methods.</li>

                        <li><strong>
                                Difficulty Retaining Visual or Written Information
                                Without Engagement
                                : </strong>Your child may struggle to retain information
                            presented solely in written or visual formats,
                            especially if they are not given the opportunity to
                            discuss or interact with the material. They benefit
                            most from discussing the content and engaging with
                            it physically.</li>

                    </ul>

                </div>

                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-95 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/11.svg'" alt="" />
                    </div>
                </div>
                <div class="mt-6">
                    <p>
                        By understanding these characteristics, strengths, and
                        potential challenges, parents and teachers can better
                        support blended learners in their educational journey.
                    </p>
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
                Your child’s learning style is a blend of both kinaesthetic and
                reading/writing preferences, meaning they absorb and retain
                information best when they can physically engage with the
                material while also processing auditory input. Here's a closer
                look at what makes kinaesthetic and reading/writing learners
                unique:
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
                            <strong>Learns Best by Doing:</strong> Kinaesthetic
                            learners excel when they can physically engage with
                            the material, such as through building, crafting, or
                            manipulating objects.
                        </li>
                        <li>
                            <strong>Enjoys Movement During Learning:</strong>
                            They benefit from movement during study sessions,
                            such as pacing while thinking or using hands-on
                            activities to stay engaged.
                        </li>
                        <li>
                            <strong>Strong Motor Skills:</strong> Kinaesthetic
                            learners often excel in activities that require
                            coordination, such as sports, art, or tasks
                            involving physical manipulation.
                        </li>
                        <li>
                            <strong>Physical Memory:</strong> They tend to
                            remember information better when they’ve physically
                            acted it out or performed a related task, such as
                            writing, building, or creating.
                        </li>
                        <li>
                            <strong>Problem-Solves Through Hands-On
                                Activities:</strong>
                            Kinaesthetic learners prefer to solve problems by
                            engaging physically with the material, using trial
                            and error or building models to understand
                            solutions.
                        </li>
                        <li>
                            <strong>Focuses Better When Active:</strong>
                            Movement helps them stay focused during learning, as
                            sitting still for long periods can be challenging.
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
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/7.svg'" alt="" />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-50 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/11.svg'" alt="" />
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
                            Reading/writing learners process information best
                            through written materials like books, articles, and
                            notes. They often take detailed notes to reinforce
                            what they’ve learned.
                        </li>
                        <li>
                            <strong>Strong Writing Skills:</strong> They are
                            skilled at organising and expressing ideas through
                            writing, excelling at tasks like essays, reports,
                            and written reflections.
                        </li>
                    </ul>
                    <ul class="list-disc pl-6  space-y-4">
                        <li>
                            <strong>Uses Written Notes for Memory:</strong>
                            Writing down key points or rewriting notes helps
                            them retain information and understand material more
                            deeply.
                        </li>
                        <li>
                            <strong>Favours Text-Based Learning Resources:</strong>
                            They prefer to engage with learning through
                            textbooks, manuals, and written guides, using these
                            resources to build their knowledge.
                        </li>

                        <li>
                            <strong>Good at Retaining Written Information:</strong>
                            They have a strong ability to remember facts and
                            ideas that they’ve read or written down, making
                            written materials a critical part of their learning
                            process.
                        </li>
                        <li>
                            <strong>Processes Ideas by Writing:</strong> Writing
                            helps them clarify their thoughts and understand
                            complex ideas, often leading them to use writing as
                            a tool for reflection and comprehension.
                        </li>
                        <li>
                            <strong>Summarises and Rewrites to Reinforce
                                Learning:</strong>
                            Summarising information or rewriting notes allows
                            them to better structure their understanding,
                            reinforcing key details through writing.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <h2 class="text-3xl font-semibold mb-4">
                    Strengths of Kinaesthetic and Reading/Writing Learners:
                </h2>
                <div class="col-6">
                    <ul class="list-disc pl-6 space-y-2">
                        <li>
                            <strong>Effective Physical and Written Processing of
                                Information:</strong>
                            Your child excels at physically engaging with the
                            material, such as through hands-on tasks, while
                            reinforcing their understanding by taking notes or
                            writing summaries. This dual engagement helps them
                            retain information more effectively.
                        </li>
                        <li>
                            <strong>Strong Memory for Physical and Written
                                Tasks:</strong>
                            They have a strong ability to remember tasks they
                            have physically performed and facts they have
                            written down. This makes them adept at learning
                            through both hands-on experiences and written
                            exercises.
                        </li>
                        <li>
                            <strong>Good at Organising Ideas Through Writing After
                                Hands-On Activities:</strong>
                            After completing hands-on tasks, your child can
                            effectively organise their thoughts and reflect on
                            the experience by writing. This helps them make
                            sense of what they’ve learned through action.
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/24.svg'" alt="" />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-95 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/22.svg'" alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <!-- Strengths of Auditory Learners -->
                    <ul class="list-disc pl-6  space-y-4">
                        <li>
                            <strong>Engages Well with Hands-On Projects Supported
                                by Written Resources:</strong>
                            Your child thrives in learning environments where
                            they can work on hands-on projects and follow
                            written instructions or take notes to deepen their
                            understanding.
                        </li>
                        <li>
                            <strong>Effective Problem-Solving Through Physical and
                                Written Methods:</strong>
                            Your child can approach problem-solving both
                            physically—by building, testing, or
                            experimenting—and through writing, such as by
                            outlining ideas or steps to a solution.
                        </li>
                        <li>
                            <strong>Strong Focus Through Movement and
                                Writing:</strong>
                            They can maintain focus during study sessions that
                            involve movement or physical engagement, which is
                            further enhanced when they reinforce the material by
                            writing.
                        </li>
                        <li>
                            <strong>Able to Transition Between Physical Tasks and
                                Written Reflections:</strong>
                            Your child can easily transition from hands-on tasks
                            to writing reflections or summaries, allowing them
                            to process the material in multiple ways, which
                            enhances retention and understanding.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <h2 class="text-3xl font-semibold mb-4">
                        Potential Challenges:
                    </h2>
                    <ul class="list-disc pl-6 space-y-2">
                        <li>
                            <strong>Difficulty with Visual-Only Learning:</strong>
                            Your child may struggle with learning environments
                            that rely heavily on visual aids without physical
                            engagement or written explanations. They may find it
                            difficult to understand concepts that are presented
                            only through images or diagrams without accompanying
                            text or hands-on activities.
                        </li>
                        <li>
                            <strong>Challenges with Abstract Concepts Presented
                                Without Physical Context:</strong>
                            Kinaesthetic learners often need to physically
                            interact with material to understand it. When
                            abstract concepts are taught through reading alone,
                            without an opportunity to physically engage with or
                            manipulate the material, your child may have
                            difficulty grasping the concepts fully.
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-64 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/20.svg'" alt="" />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-95 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/16.svg'" alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <!-- Strengths of Auditory Learners -->
                    <ul class="list-disc pl-6  space-y-4">
                        <li>
                            <strong>Struggles with Independent Reading Tasks
                                Without Movement:</strong>
                            Your child may find it hard to stay focused during
                            long, independent reading tasks without any
                            opportunity for movement or physical engagement.
                            Sitting still for extended periods can lead to
                            restlessness or distraction.
                        </li>
                        <li>
                            <strong>Difficulty Retaining Information from Lectures
                                Without Writing:</strong>
                            When material is presented only verbally or through
                            lectures, without any opportunity to take notes or
                            perform hands-on tasks, your child may struggle to
                            retain the information. They rely on writing and
                            physical activity to reinforce what they learn.
                        </li>
                        <li>
                            <strong>Need for More Physical Engagement in
                                Traditional Reading/Writing Tasks:</strong>
                            Reading/writing learners with a kinaesthetic
                            preference may find traditional reading and writing
                            tasks, such as essays or textbook assignments,
                            tedious without opportunities for physical
                            interaction. They may need more hands-on engagement
                            to maintain interest.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <!-- Strengths of Auditory Learners -->
                    <ul class="list-disc pl-6  space-y-4">
                        <li>
                            <strong>Challenges in Environments That Restrict
                                Movement:</strong>
                            Environments that restrict physical activity, such
                            as long classroom sessions or quiet study areas, may
                            hinder your child’s ability to focus. They may
                            become restless or lose concentration without
                            opportunities for movement or physical engagement.
                        </li>
                        <li>
                            <strong>Struggles with Long Written Assignments Without
                                Breaks:</strong>
                            Long writing tasks without breaks for physical
                            movement can be difficult for kinaesthetic learners.
                            They may need frequent breaks or opportunities to
                            engage in hands-on activities to maintain focus and
                            productivity.
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-50 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/14.svg'" alt="" />
                    </div>
                </div>
            </div>
            <p class="mt-4">
                By understanding these characteristics, strengths, and potential
                challenges, parents and teachers can better support blended
                learners in their educational journey.
            </p>
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
                Your child’s learning style is a unique blend of both kinaesthetic and visual preferences, meaning they absorb and retain information most effectively when they can physically interact with the material and also see it represented visually. Here's a closer look at what makes kinaesthetic and visual learners unique:

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
                            Kinaesthetic learners need physical engagement with the material. They thrive in hands-on activities like building, drawing, or experimenting.

                        </li>
                        <li>
                            <strong>Prefers Movement During Learning:</strong>

                            They focus better when they can move around or engage in physical activity, whether it's pacing, using tools, or working with objects.

                        </li>
                        <li>
                            <strong>Excellent Hand-Eye Coordination:</strong>
                            Kinaesthetic learners often have strong motor skills and excel at tasks that require hand-eye coordination.


                        </li>
                        <li>
                            <strong>Engages in Active Problem Solving:</strong>

                            They learn by physically interacting with materials and solving problems through trial and error, experimenting, or acting out processes.

                        </li>
                        <li>
                            <strong>Physical Memory:</strong>
                            They remember things by physically doing them—whether it's performing an experiment or writing out a solution—rather than reading or listening.



                        </li>
                        <li>
                            <strong>Enjoys Building and Creating Projects:</strong>
                            Kinaesthetic learners love tasks that involve constructing or creating something tangible, such as models, art, or physical demonstrations.

                        </li>
                        <li>
                            <strong>Benefits from Movement Breaks:</strong>
                            Taking breaks to move around helps them refocus and return to learning with renewed energy and concentration.


                        </li>
                    </ul>

                    <h4 class="text-lg font-semibold mb-2">
                        Visual Learning Characteristics:
                    </h4>
                    <ul class="list-disc pl-6 mb-6">
                        <li>
                            <strong>Enjoys Learning Through Visual Aids:</strong>
                            Visual learners prefer diagrams, pictures, charts, and videos to help them process complex information.


                        </li>
                        <li>
                            <strong>Strong Spatial Awareness:</strong>
                            They excel at interpreting spatial information, such as maps, diagrams, and layouts, and often use this skill to make sense of abstract ideas.
                        </li>
                        <li>
                            <strong>Recalls Visual Details Easily:</strong>
                            Visual learners remember information by recalling images, colours, or visual cues they’ve seen.



                        </li>
                        <li>
                            <strong>Organises Information Visually:</strong>
                            They benefit from organising their notes using mind maps, colour coding, or diagrams to better understand and retain information.


                        </li>
                        <li>
                            <strong>Thinks in Pictures:</strong>
                            Visual learners often "see" concepts in their mind, which helps them understand and process abstract ideas more effectively.


                        </li>
                        <li>
                            <strong>Prefers Quiet Study Environments:</strong>
                            They tend to focus best in calm, visually organised spaces with minimal distractions.


                        </li>
                        <li>
                            <strong>Enjoys Visualising Processes and
                                Concepts:</strong>

                                Whether it's a math problem or a history lesson, they prefer to visualise the steps or events to understand the material.

                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/7.svg'" alt="" />
                    </div>
                    <div class="flex justify-center items-center">
                        <img class="w-64 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/3.svg'" alt="" />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/24.svg'" alt="" />
                    </div>
                    <div data-v-b2853f7f="" class="flex justify-center items-center"><img data-v-b2853f7f="" class="w-120 h-auto object-contain" src="/images/reports-svg-images/Kids/LearningStyles/3.svg" alt=""></div>
                </div>
                <div class="col-6">
                    <h2 class="text-3xl font-semibold mb-4">
                        Strengths of Kinaesthetic and Visual Learners
                    </h2>
                    <ul class="list-disc pl-6 mb-6">
                        <li>
                            <strong>Dual Processing of Visual and Physical
                                Information:</strong>
                                Your child is highly capable of understanding information through both visual representations and hands-on activities. Seeing a concept visually and then reinforcing it through physical interaction leads to deeper comprehension.


                        </li>
                        <li>
                            <strong>Strong Memory for Visual and Physical
                                Details:</strong>
                                They can easily recall information that has been presented visually, such as images or diagrams, as well as through physical experiences, like hands-on projects or activities.


                        </li>
                        <li>
                            <strong>Engaged in Hands-On and Visual Learning
                                Activities:</strong>
                                Your child is most engaged when learning through both visual aids and hands-on methods. This combination keeps them focused and actively involved in the learning process.


                        </li>
                        <li>
                            <strong>Creative and Practical Problem Solvers:</strong>
                            They are able to visualise potential solutions and then test them through physical engagement, making them highly effective at solving problems creatively and practically.

                        </li>
                        <li>
                            <strong>Long-Term Retention of Information:</strong>
                            By combining visual memory with physical experiences, your child retains information more effectively. They not only remember what they saw but also what they physically did to learn the concept.


                        </li>
                        <li>
                            <strong>Adaptability to Different Learning
                                Environments:</strong>
                                They thrive in environments where visual tools (like diagrams or videos) are available and where they can apply what they learn through hands-on activities, making them flexible in various learning settings.


                        </li>
                        <li>
                            <strong>Enjoys Creating and Building:</strong>
                            Visual and kinaesthetic learners often excel in projects where they can create something tangible, such as models, diagrams, or physical demonstrations, combining their strengths to produce impressive results.


                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <h2 class="text-3xl font-semibold mb-4">
                        Potential Challenges
                    </h2>
                    <ul class="list-disc pl-6 mb-6">
                        <li>
                            <strong>Over-reliance on Visual or Physical
                                Learning:</strong>
                                Your child may struggle when required to learn from written or auditory-only resources. If information is presented without visual aids or hands-on activities, they may find it harder to process and retain the material.


                        </li>
                        <li>
                            <strong>Difficulty with Long Periods of Sitting
                                Still:</strong>
                                Kinaesthetic learners often find it difficult to remain seated for extended periods of time. Without movement or physical engagement, your child may become restless or lose focus during lessons.


                        </li>
                        <li>
                            <strong>Struggles with Abstract Concepts Without
                                Physical Engagement:</strong>
                                If an abstract concept is taught without a hands-on component, your child may find it harder to understand. They benefit from physically engaging with ideas to make sense of them.

                        </li>
                        <li>
                            <strong>Challenges with Overly Text-Heavy
                                Material:</strong>

                                Visual learners may become overwhelmed by long passages of text that lack visual breaks, diagrams, or images. Without visuals to support the content, they may struggle to stay focused and absorb the information.

                        </li>
                        <li>
                            <strong>Need for Movement During Learning:</strong>
                            Your child may find it challenging to focus if they aren’t able to move around or interact physically with the material. This can become a problem in learning environments that require long periods of stillness.


                        </li>
                        <li>
                            <strong>Difficulty Translating Physical Learning into
                                Abstract Understanding:</strong>
                                Sometimes, your child may focus more on the physical aspect of a task and find it difficult to connect the activity to an abstract or theoretical concept. They might need extra help linking hands-on activities to deeper learning.


                        </li>
                        <li>
                            <strong>Overstimulation from Visual or Physical
                                Clutter:</strong>
                                Too much visual or physical stimulation in the learning environment, such as a cluttered workspace or too many moving parts, can overwhelm your child, making it harder for them to concentrate on the key learning objectives.

                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-64 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/20.svg'" alt="" />
                    </div>
                    <div data-v-b2853f7f="" class="flex justify-center items-center"><img data-v-b2853f7f="" class="w-120 h-auto object-contain" src="/images/reports-svg-images/Kids/LearningStyles/3.svg" alt=""></div>
                </div>
            </div>

            <p class="mb-6">
                By understanding these characteristics, strengths, and potential
                challenges, parents and teachers can better support blended
                learners in their educational journey.
            </p>
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
                                <strong>Prefers Hands-On Activities:</strong>
                                Kinaesthetic learners thrive on activities that
                                involve movement and touch. They enjoy building,
                                crafting, and physically manipulating objects.
                            </li>
                            <li>
                                <strong>Strong Physical Awareness:</strong> They
                                have a keen sense of body movement and spatial
                                awareness. This makes them excel in activities
                                that require coordination and physical skills.
                            </li>
                            <li>
                                <strong>Learns by Doing:</strong> Kinaesthetic
                                learners absorb information best through active
                                participation. They understand concepts better
                                when they can physically engage with the
                                material.
                            </li>
                            <li>
                                <strong>Enjoys Physical Activities:</strong>
                                They are often energetic and enjoy sports,
                                dancing, and other physical activities. They
                                learn well in environments where they can move
                                around.
                            </li>
                            <li>
                                <strong>Good at Remembering Physical
                                    Experiences:</strong>
                                They have a strong memory for physical
                                activities and experiences. They can recall
                                details of activities they participated in and
                                use these memories to understand new
                                information.
                            </li>
                            <li>
                                <strong>Prefers Action-Based Learning:</strong>
                                Kinaesthetic learners enjoy role-playing,
                                experiments, and simulations. They benefit from
                                learning activities that involve acting out
                                scenarios and solving problems hands-on.
                            </li>
                            <li>
                                <strong>Fidgety and Restless:</strong> They may
                                have difficulty sitting still for long periods
                                and prefer to be active. Providing opportunities
                                for movement can help them stay focused and
                                engaged.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/7.svg'" alt="" />
                    </div>
                </div>
            </div>

            <div class="row">
                <h2 class="text-3xl font-semibold mb-4">
                    Strengths of Kinaesthetic Learners:
                </h2>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-64 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/24.svg'" alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <div>
                        <ul class="list-disc pl-6 space-y-2">
                            <li>
                                <strong>Excellent Coordination and Motor
                                    Skills:</strong>
                                Kinaesthetic learners often have strong
                                coordination and fine motor skills. They excel
                                in activities that require precise movements and
                                physical dexterity.
                            </li>
                            <li>
                                <strong>Quick Learners in Physical Tasks:</strong>
                                They pick up new physical skills quickly.
                                Whether it's a new sport, dance move, or craft
                                technique, kinaesthetic learners excel through
                                practice and repetition.
                            </li>
                            <li>
                                <strong>Creative Problem Solvers:</strong> Their
                                hands-on approach makes them adept at solving
                                problems creatively. They can think outside the
                                box and come up with innovative solutions during
                                physical activities.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <!-- Strengths of Auditory Learners -->
                    <ul class="list-disc pl-6  space-y-4">
                        <li>
                            <strong>High Levels of Energy:</strong>
                            Kinaesthetic learners have abundant energy, which
                            can be channelled into productive activities. Their
                            enthusiasm for movement helps them stay motivated
                            and engaged.
                        </li>
                        <li>
                            <strong>Good Spatial Awareness:</strong> They have a
                            natural ability to understand spatial relationships
                            and can visualise how parts fit together. This skill
                            is useful in subjects like geometry and physical
                            sciences.
                        </li>
                        <li>
                            <strong>Engaged in Experiential Learning:</strong>
                            They are highly engaged in learning activities that
                            involve direct experience. Hands-on experiments,
                            field trips, and interactive projects capture their
                            interest.
                        </li>
                        <li>
                            <strong>Adaptable and Flexible:</strong>
                            Kinaesthetic learners are adaptable and can adjust
                            quickly to new physical environments and activities.
                            They thrive in dynamic and ever-changing settings.
                        </li>
                    </ul>
                </div>

                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-50 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/11.svg'" alt="" />
                    </div>
                </div>
            </div>
            <div class="row">
                <h2 class="text-3xl font-semibold mb-4">
                    Potential Challenges for Kinaesthetic Learners:
                </h2>
                <div class="col-6">
                    <div>
                        <ul class="list-disc pl-6 space-y-2">
                            <li>
                                <strong>Difficulty with Traditional Classroom
                                    Settings:</strong>
                                Kinaesthetic learners may struggle in
                                traditional classroom settings that require long
                                periods of sitting and listening. They need
                                movement and physical activity to stay focused.
                            </li>
                            <li>
                                <strong>Restlessness and Fidgeting:</strong>
                                Their need for movement can sometimes be seen as
                                restlessness or fidgeting. They may need breaks
                                and opportunities to move around during learning
                                activities.
                            </li>
                            <li>
                                <strong>Struggles with Abstract Concepts:</strong>
                                They may find it challenging to grasp abstract
                                concepts that lack a physical component. They
                                need concrete examples and hands-on experiences
                                to understand these ideas.
                            </li>
                            <li>
                                <strong>Easily Distracted:</strong> Kinaesthetic
                                learners can be easily distracted by their
                                surroundings. They may have difficulty
                                concentrating in environments with limited
                                physical engagement.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-64 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/20.svg'" alt="" />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-95 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/22.svg'" alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <!-- Strengths of Auditory Learners -->
                    <ul class="list-disc pl-6  space-y-4">
                        <li>
                            <strong>Need for Physical Expression:</strong>
                            They may express themselves best through physical
                            actions rather than words. Encouraging them to act
                            out their thoughts and ideas can help them
                            communicate more effectively.
                        </li>
                        <li>
                            <strong>Challenges with Written and Verbal
                                Instructions:</strong>
                            They may struggle with instructions that are only
                            written or verbal. Combining these with physical
                            demonstrations can improve their understanding.
                        </li>
                        <li>
                            <strong>Requires Active Learning Environment:</strong>
                            They need an active learning environment that allows
                            for movement and hands-on participation. Traditional
                            teaching methods may not fully engage their learning
                            style.
                        </li>
                    </ul>
                </div>
            </div>

            <div>
                <p>
                    By understanding these characteristics, strengths, and
                    potential challenges, parents and teachers can better
                    support kinaesthetic learners in their educational journey.
                </p>
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
                    explanations or discussions. Here's a closer look at what
                    makes reading/writing and auditory learners unique:
                </p>
            </div>

            <div class="row">
                <h2 class="text-3xl font-semibold mb-4">
                    Characteristics of Reading/Writing and Auditory Learners:
                </h2>

                <h2 class="text-lg font-semibold mb-4">
                    Reading/Writing Learning Characteristics:
                </h2>
                <div class="col-6">
                    <div>
                        <ul class="list-disc ml-6">
                            <li>
                                <strong>Prefers Written Text:</strong> Reading/writing learners
                                absorb information best through written text,
                                such as books, articles, or notes, and they
                                often take detailed notes to process new
                                information.
                            </li>
                            <li>
                                <strong>Strong Writing Skills:</strong> They express themselves
                                clearly through writing, enjoying tasks like
                                writing essays, reports, or summaries to
                                organise their thoughts.
                            </li>
                            <li>
                                <strong>Uses Written Notes for Memory:</strong> Writing down key
                                points helps them clarify ideas and remember
                                information. They often rewrite or summarise
                                notes to reinforce their learning.
                            </li>
                            <li>
                                <strong>Favours Text-Based Learning Resources:</strong>
                                Reading/writing learners prefer studying with
                                textbooks, manuals, and written guides, using
                                these resources to deepen their understanding.
                            </li>
                            <li>
                                <strong>Good at Retaining Written Information:</strong> They
                                remember facts and concepts they’ve read or
                                written down, making studying from written
                                materials particularly effective.
                            </li>
                            <li>
                                <strong>Prefers to Process Information by Writing:</strong> They
                                often use writing as a way to process and
                                organise their understanding of new material,
                                helping them develop clearer insights through
                                essays or reports.
                            </li>
                            <li>
                                <strong> Uses Summaries and Rewrites to Reinforce

                                    Learning:</strong> Summarising information or rewriting

                                notes helps reading/writing learners retain
                                important details, strengthening their memory
                                and understanding.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-64 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/7.svg'" alt="" />
                    </div>
                    <div class="flex justify-center items-center">
                        <img class="w-64 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/3.svg'" alt="" />

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
                            <strong>Learns Best Through Listening:</strong> Auditory learners
                            excel when they hear information presented verbally,
                            such as in discussions, lectures, or audio resources
                            like podcasts or audiobooks.
                        </li>
                        <li>

                            <strong>Strong Verbal Memory:</strong> They often have an exceptional

                            memory for spoken information, recalling details
                            from lessons, conversations, or verbal instructions
                            easily.
                        </li>
                        <li>
                            <strong>Engages in Discussions:</strong> Auditory learners thrive in
                            group discussions or debates, processing information
                            by talking it through and listening to different
                            perspectives.
                        </li>
                        <li>
                            <strong>Uses Verbal Repetition for Recall: </strong>Repeating key
                            points out loud helps auditory learners remember
                            facts, whether it’s practising vocabulary,
                            discussing ideas, or reading aloud.
                        </li>
                        <li>
                            <strong>Understands Abstract Ideas Through Verbal
                                Explanation:</strong> Auditory learners can grasp complex or
                            abstract concepts when they hear them explained
                            clearly, making verbal instruction an effective tool
                            for learning.
                        </li>
                        <li>
                            <strong>Prefers Verbal Instructions:</strong> They often follow tasks
                            and lessons more easily when instructions are given
                            verbally, helping them understand and apply
                            information more effectively.
                        </li>
                        <li>

                            <strong>Responds Well to Audio Resources:</strong> They benefit from

                            listening to background music or engaging audio
                            content while working, as it helps them concentrate
                            and stay focused.
                        </li>
                    </ul>
                </div>

                <div class="col-6">
                    <div class="flex justify-center items-center">

                        <img class="w-90 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/11.svg'" alt="" />
                    </div>
                </div>
            </div>
            <div class="row">
                <h2 class="text-3xl font-semibold mb-4">
                    Strengths of Reading/Writing and Auditory Learners:
                </h2>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/24.svg'" alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <div>
                        <ul class="list-disc ml-6">
                            <li>
                                <strong> Effective Processing of Verbal and Written
                                    Information: </strong>Your child can absorb information
                                by listening to verbal explanations and
                                discussions and reinforce that knowledge by
                                reading or writing. This dual approach helps
                                them understand concepts more thoroughly and
                                retain them for longer periods.
                            </li>
                            <li>
                                <strong> Strong Memory for Spoken and Written Details:</strong>
                                They have an excellent memory for both verbal
                                and written information, easily recalling facts
                                and concepts they’ve heard or read. This makes
                                them particularly adept at learning from
                                lectures, discussions, and reading materials.
                            </li>
                            <li>
                                <strong> Excellent at Organising Thoughts Through
                                    Writing:</strong>
                                Writing is a key strength for your
                                child, and they can effectively organise their
                                thoughts through essays, summaries, or notes.
                                This allows them to process and articulate
                                complex ideas clearly and efficiently.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <!-- Strengths of Auditory Learners -->
                    <ul class="list-disc pl-6  space-y-4">
                        <li>
                            <strong>

                                Engages Well in Discussions and Written Reflection:


                            </strong>
                            Your child excels at engaging in discussions to
                            process new information, then reflecting on it by
                            writing summaries or reports. This dual engagement
                            helps them clarify and deepen their understanding of
                            a subject.
                        </li>
                        <li>
                            <strong>
                                Strong Analytical Skills Through Reading and
                                Writing:
                            </strong>
                            They are good at analysing information
                            through reading and writing, breaking down complex
                            material into understandable parts. This skill helps
                            them interpret new concepts and apply them in
                            practical contexts.
                        </li>
                        <li>
                            <strong>
                                Ability to Grasp Abstract Concepts Through Verbal
                                Explanation:
                            </strong>
                            Verbal explanations help your child
                            understand abstract or complex ideas, while writing
                            allows them to organise these concepts into a
                            structured format, enhancing their comprehension.
                        </li>
                        <li>
                            <strong>
                                Flexible Learning Style:
                            </strong>

                            Your child can easily

                            switch between auditory and reading/writing methods,
                            allowing them to adapt to different learning
                            environments. They can learn effectively from
                            listening or reading and are able to reinforce their
                            knowledge through writing.
                        </li>
                    </ul>
                </div>

                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-95 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/12.svg'" alt="" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div>
                        <h2 class="text-3xl font-semibold mb-4">
                            Potential Challenges:
                        </h2>
                        <ul class="list-disc ml-6">
                            <li>

                                <strong> Difficulty with Visual or Hands-On Learning:</strong>

                                Your child may struggle with lessons that rely
                                heavily on visual aids or hands-on activities
                                without verbal instructions or written guides.
                                They may find it harder to grasp information
                                presented only through pictures, models, or
                                demonstrations without accompanying text or
                                verbal explanations.
                            </li>
                            <li>
                                <strong> Challenges with Retaining Information from
                                    Visual-Only Presentations:</strong>
                                When information is
                                presented solely in visual formats (like
                                diagrams or charts) without any written text or
                                verbal explanations, your child may have
                                difficulty retaining and fully understanding the
                                material.
                            </li>
                            <li>

                                <strong> Struggles with Kinaesthetic-Only Learning:</strong>

                                Kinaesthetic activities that require physical
                                interaction without any written or verbal
                                guidance can be frustrating for your child. They
                                may need written instructions or verbal
                                explanations to complement the physical task in
                                order to make sense of it.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-64 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/20.svg'" alt="" />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-95 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/22.svg'" alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <!-- Strengths of Auditory Learners -->
                    <ul class="list-disc pl-6  space-y-4">
                        <li>
                            <strong>Over-Reliance on Verbal and Written Input:</strong>

                            Your

                            child may become too dependent on verbal
                            explanations or written materials, making it
                            difficult for them to adapt to learning environments
                            that prioritise visual or hands-on learning methods.
                            They might find it challenging to learn through
                            demonstrations or non-verbal cues.
                        </li>
                        <li>
                            <strong>Difficulty Engaging in Silent, Independent Work:</strong>
                            Auditory learners often thrive in environments where
                            they can talk through ideas or hear explanations, so
                            silent, independent work that lacks verbal
                            interaction may cause them to lose focus or
                            motivation.
                        </li>
                        <li>
                            <strong> Need for More Time to Process Information:</strong>
                            Your
                            child may require additional time to process
                            information they hear or read before they feel
                            confident in their understanding. Quick transitions
                            between tasks without time for reflection or
                            note-taking could leave them feeling rushed or
                            unsure.
                        </li>
                        <li>
                            <strong>Struggles with Abstract Concepts Without Clear
                                Explanations:</strong>

                            If abstract concepts are presented

                            without clear verbal explanations or written
                            descriptions, your child may have difficulty
                            grasping them. They rely on hearing or reading
                            details to make sense of complex ideas, so a lack of
                            clarity in these areas can hinder their
                            comprehension.
                        </li>
                    </ul>
                </div>
            </div>
            <div>
                <p>
                    By understanding these characteristics, strengths, and
                    potential challenges, parents and teachers can better
                    support blended learners in their educational journey.
                </p>
            </div>
        </div>
    </div>

    <!-- Report 10 Reading & Writing _ Kinesthethic Blend-- >
     <!-- style == 'Reading/Writing/Kinesthethic'  -->
    <div v-if="style == 'Reading/Writing/Kinesthethic'">
        <!-- Content for Report 10 -->
        <div class=" p-6">
            <h2 class="text-3xl font-bold mb-6">Your Child’s Learning Style</h2>
            <p class="mb-6">
                Your child’s learning style is a blend of both reading/writing
                and kinaesthetic preferences, meaning they absorb and retain
                information most effectively when they can combine written
                tasks, such as reading and writing, with physical activities and
                hands-on engagement. Here's a closer look at what makes
                reading/writing and kinaesthetic learners unique:
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
                                    Reading/writing learners process information
                                    best through written materials like books,
                                    articles, and notes. They often take
                                    detailed notes to reinforce what they’ve
                                    learned.
                                </li>
                                <li>
                                    <strong>Strong Writing Skills</strong>
                                    They are skilled at organising and
                                    expressing ideas through writing, excelling
                                    at tasks like essays, reports, and written
                                    reflections.
                                </li>
                                <li>
                                    <strong>Uses Written Notes for Memory</strong>
                                    Writing down key points or rewriting notes
                                    helps them retain information and understand
                                    material more deeply.
                                </li>
                                <li>
                                    <strong>Favours Text-Based Learning Resources</strong>
                                    They prefer to engage with learning through
                                    textbooks, manuals, and written guides,
                                    using these resources to build their
                                    knowledge.
                                </li>
                                <li>
                                    <strong>Good at Retaining Written Information</strong>
                                    They have a strong ability to remember facts
                                    and ideas that they’ve read or written down,
                                    making written materials a critical part of
                                    their learning process.
                                </li>
                                <li>
                                    <strong>Processes Ideas by Writing</strong>
                                    Writing helps them clarify their thoughts
                                    and understand complex ideas, often leading
                                    them to use writing as a tool for reflection
                                    and comprehension.
                                </li>
                                <li>
                                    <strong>
                                        Summarises and Rewrites to Reinforce
                                        Learning
                                    </strong>
                                    Summarising information or rewriting notes
                                    allows them to better structure their
                                    understanding, reinforcing key details
                                    through writing.
                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center">

                            <img class="w-64 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/7.svg'" alt="" />
                        </div>
                        <div class="flex justify-center items-center">
                            <img class="w-64 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/3.svg'" alt="" />

                        </div>
                    </div>

                </div>


                <div class="row">
                    <div class="col-6">
                        <div class="flex justify-center items-center">

                            <img class="w-90 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/24.svg'" alt="" />
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
                                <strong>Enjoys Movement During Learning</strong>
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
                                    Problem-Solves Through Hands-On Activities
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

                <div class="row">

                    <div class="col-6">
                        <div class="">
                            <h2 class="text-3xl font-semibold mb-4">
                                Strengths of Reading/Writing and Kinaesthetic
                                Learners
                            </h2>
                            <ul class="list-disc pl-6 space-y-2">
                                <li>
                                    <strong>
                                        Effective Physical and Written Processing of
                                        Information:
                                    </strong>
                                    Your child excels at physically engaging
                                    with the material, such as through hands-on
                                    tasks, while reinforcing their understanding
                                    by taking notes or writing summaries. This
                                    dual engagement helps them retain
                                    information more effectively.
                                </li>
                                <li>
                                    <strong>
                                        Strong Memory for Physical and Written Tasks:
                                    </strong>
                                    They have a strong ability to remember tasks
                                    they have physically performed and facts
                                    they have written down. This makes them
                                    adept at learning through both hands-on
                                    experiences and written exercises.
                                </li>
                                <li>
                                    <strong>
                                        Good at Organising Ideas Through Writing
                                        After Hands-On Activities:
                                    </strong>
                                    After completing hands-on tasks, your child
                                    can effectively organise their thoughts and
                                    reflect on the experience by writing. This
                                    helps them make sense of what they’ve
                                    learned through action.
                                </li>
                                <li>
                                    <strong>
                                        Engages Well with Hands-On Projects
                                        Supported by Written Resources:
                                    </strong>
                                    Your child thrives in learning environments
                                    where they can work on hands-on projects and
                                    follow written instructions or take notes to
                                    deepen their understanding.
                                </li>
                                <li>
                                    <strong>
                                        Effective Problem-Solving Through Physical
                                        and Written Methods:
                                    </strong>
                                    Your child can approach problem-solving both
                                    physically—by building, testing, or
                                    experimenting—and through writing, such as
                                    by outlining ideas or steps to a solution.
                                </li>
                                <li>
                                    <strong>
                                        Strong Focus Through Movement and Writing:
                                    </strong>
                                    They can maintain focus during study
                                    sessions that involve movement or physical
                                    engagement, which is further enhanced when
                                    they reinforce the material by writing.
                                </li>
                                <li>
                                    <strong>
                                        Able to Transition Between Physical Tasks
                                        and Written Reflections:
                                    </strong>
                                    Your child can easily transition from
                                    hands-on tasks to writing reflections or
                                    summaries, allowing them to process the
                                    material in multiple ways, which enhances
                                    retention and understanding.
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img class="w-120 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/24.svg'" alt="" />
                        </div>
                        <div class="flex justify-center items-center">
                            <img class="w-64 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/7.svg'" alt="" />
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="flex justify-center items-center">

                            <img class="w-120 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/24.svg'" alt="" />

                        </div>
                    </div>
                    <div class="col-6">
                        <div class="">
                            <h2 class="text-3xl font-semibold mb-4">
                                Potential Challenges
                            </h2>
                            <ul class="list-disc pl-6 space-y-2">

                                <li>
                                    <strong>Difficulty with Visual-Only Learning</strong>
                                    Your child may struggle with learning
                                    environments that rely heavily on visual
                                    aids without physical engagement or written
                                    explanations. They may find it difficult to
                                    understand concepts that are presented only
                                    through images or diagrams without
                                    accompanying text or hands-on activities.
                                </li>
                                <li>
                                    <strong>
                                        Challenges with Abstract Concepts Presented
                                        Without Physical Context
                                    </strong>
                                    Kinaesthetic learners often need to
                                    physically interact with material to
                                    understand it. When abstract concepts are
                                    taught through reading alone, without an
                                    opportunity to physically engage with or
                                    manipulate the material, your child may have
                                    difficulty grasping the concepts fully.
                                </li>
                                <li>
                                    <strong>
                                        Struggles with Independent Reading Tasks
                                        Without Movement
                                    </strong>
                                    Your child may find it hard to stay focused
                                    during long, independent reading tasks
                                    without any opportunity for movement or
                                    physical engagement. Sitting still for
                                    extended periods can lead to restlessness or
                                    distraction.
                                </li>
                            </ul>
                        </div>
                    </div>


                </div>
                <div class="row">

                    <div class="col-6">
                        <div class="">

                            <ul class="list-disc pl-6 space-y-2">

                                <li>
                                    <strong>
                                        Difficulty Retaining Information from
                                        Lectures Without Writing
                                    </strong>
                                    When material is presented only verbally or
                                    through lectures, without any opportunity to
                                    take notes or perform hands-on tasks, your
                                    child may struggle to retain the
                                    information. They rely on writing and
                                    physical activity to reinforce what they
                                    learn.
                                </li>
                                <li>
                                    <strong>
                                        Need for More Physical Engagement in
                                        Traditional Reading/Writing Tasks
                                    </strong>
                                    Reading/writing learners with a kinaesthetic
                                    preference may find traditional reading and
                                    writing tasks, such as essays or textbook
                                    assignments, tedious without opportunities
                                    for physical interaction. They may need more
                                    hands-on engagement to maintain interest.
                                </li>
                                <li>
                                    <strong>
                                        Challenges in Environments That Restrict
                                        Movement
                                    </strong>
                                    Environments that restrict physical
                                    activity, such as long classroom sessions or
                                    quiet study areas, may hinder your child’s
                                    ability to focus. They may become restless
                                    or lose concentration without opportunities
                                    for movement or physical engagement.
                                </li>
                                <li>
                                    <strong>
                                        Struggles with Long Written Assignments
                                        Without Breaks
                                    </strong>
                                    Long writing tasks without breaks for
                                    physical movement can be difficult for
                                    kinaesthetic learners. They may need
                                    frequent breaks or opportunities to engage
                                    in hands-on activities to maintain focus and
                                    productivity.
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img class="w-120 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/22.svg'" alt="" />
                        </div>
                    </div>

                </div>
            </div>

            <p class="mt-6">
                By understanding these characteristics, strengths, and potential
                challenges, parents and teachers can better support blended
                learners in their educational journey.
            </p>
        </div>
    </div>

    <!-- Report 11 Reading & Writing _ Visual Blend -->
    <div v-if="style == 'Reading/Writing/Visual'">
        <!-- Content for Report 11 -->
        <div class=" p-6">
            <h2 class="text-3xl font-bold mb-6">
                Your Child's Learning Style: A Blend of Reading/Writing and
                Visual Preferences
            </h2>
            <p class="mb-6">
                Your child’s learning style is a blend of both reading/writing
                and visual preferences. This means they understand and retain
                information best when they can see it represented visually and
                then reinforce it through reading or writing. Here's a closer
                look at what makes reading/writing and visual learners unique:
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
                            Reading/writing learners prefer reading textbooks,
                            articles, or notes to absorb information, and they
                            often take extensive notes to process what they’ve
                            read.
                        </li>
                        <li>
                            <strong>Strong Preference for Written Communication</strong>
                            They often express their thoughts more clearly
                            through writing, enjoying tasks like writing essays,
                            reports, or summaries.
                        </li>
                        <li>
                            <strong>Uses Written Notes to Organise Thoughts</strong>
                            Writing out ideas helps them clarify their thoughts
                            and retain information. They often rewrite notes or
                            summarise information to reinforce learning.
                        </li>
                        <li>
                            <strong>Prefers Text-Based Learning Materials</strong>
                            Reading/writing learners tend to favour books,
                            manuals, and written guides, and they prefer
                            studying with written resources.
                        </li>
                        <li>
                            <strong>Good at Remembering Written Information</strong>
                            They have a strong ability to remember facts and
                            concepts they’ve read or written down, which helps
                            them retain and recall details more easily.
                        </li>
                        <li>
                            <strong>Enjoys Writing to Understand Concepts</strong>
                            They often use writing as a tool to organise their
                            thoughts and make sense of new material, whether
                            through essays, reports, or notes.
                        </li>
                        <li>
                            <strong>
                                Benefits from Rewriting or Summarising Information
                            </strong>
                            Rewriting or summarising lessons helps them
                            reinforce their understanding and improves retention
                            of key concepts.
                        </li>
                    </ul>

                    <h2 class="text-lg font-semibold mt-6">
                        Visual Learning Characteristics:
                    </h2>
                    <ul class="list-disc pl-6 space-y-2">
                        <li><strong>Prefers Visual Aids</strong>Visual learners thrive when they can use diagrams,
                            charts, images, and videos to understand complex
                            ideas.</li>
                        <li><strong>Strong Spatial Awareness</strong> They have a natural ability to interpret spatial
                            information, such as maps, layouts, and diagrams,
                            which helps them understand abstract concepts.</li>
                        <li><strong>Uses Visual Cues for Memory</strong> Visual learners often recall information by
                            remembering images, colours, or visual patterns
                            they’ve seen.</li>

                        <li><strong>Organises Information Visually</strong> They are good at organising their thoughts
                            and study
                            materials using visual tools like mind maps, charts,
                            or colour-coded notes.</li>
                        <li><strong>Enjoys Calm and Organised Study Environments</strong> Visual learners work best in
                            quiet, visually

                            organised spaces with minimal distractions, where
                            they can focus on diagrams, charts, or images.</li>
                        <li><strong>Thinks in Pictures</strong>Visual learners often picture ideas in their mind,
                            helping them understand concepts that might be
                            harder to grasp through words alone.</li>
                        <li><strong>Visualises Concepts and Processes</strong>They often visualise steps or processes in
                            their

                            mind, which helps them make sense of new
                            information.</li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/7.svg'" alt="" />
                    </div>
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/24.svg'" alt="" />
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/24.svg'" alt="" />
                    </div>
                    <div class="flex justify-center items-center">
                        <img class="w-64 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/20.svg'" alt="" />
                    </div>

                </div>
                <div class="col-6">
                    <h2 class="text-3xl font-semibold mt-6 mb-4">
                        Strengths of Reading/Writing and Visual Learners:
                    </h2>
                    <ul class="list-disc pl-6 space-y-2">

                        <li>
                            <strong>
                                Dual Processing of Written and Visual Information
                            </strong>

                            Your child can efficiently absorb information
                            through both written text and visual aids. They
                            excel at understanding concepts when they can read
                            about them and then reinforce their learning with
                            diagrams, charts, or images.
                        </li>
                        <li>
                            <strong>Strong Memory for Visual and Written Details</strong>
                            They have a remarkable ability to remember both
                            visual cues and written information. They can easily
                            recall what they’ve seen (such as charts or
                            diagrams) and what they’ve read or written, which
                            makes studying more effective.
                        </li>
                        <li>
                            <strong>Effective at Breaking Down Complex Information</strong>
                            They can break down complicated topics into
                            manageable parts by combining visual tools (such as
                            mind maps) with written summaries or notes, making
                            complex material easier to understand.
                        </li>
                        <li>
                            <strong>Organised and Structured Approach to Learning</strong>
                            Your child is naturally inclined to organise their
                            thoughts and study materials both visually and in
                            writing. They benefit from creating visual
                            organisers and written outlines to structure their
                            learning, which helps them stay focused and
                            productive.
                        </li>
                        <li>
                            <strong>Strong Understanding of Abstract Concepts</strong>
                            By combining visual thinking and written
                            explanations, your child can grasp abstract concepts
                            more easily. Visual aids help them “see” the big
                            picture, while writing allows them to explain or
                            summarise those concepts in detail.
                        </li>
                        <li>
                            <strong>Good at Self-Expression Through Writing</strong>
                            Writing comes naturally to your child, and they are
                            good at expressing their thoughts and ideas in
                            written form. They are able to clarify and expand on
                            what they’ve learned by writing essays, reports, or
                            summaries.
                        </li>
                        <li>
                            <strong>Quick Recall of Written and Visual Information</strong>
                            They have a strong ability to recall key points from
                            written materials and visual aids, which makes
                            studying for tests and exams easier. They often
                            visualise what they’ve read and written, helping
                            them retain information for longer periods.
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <h2 class="text-3xl font-semibold mt-6 mb-4">
                        Potential Challenges:
                    </h2>
                    <ul class="list-disc pl-6 space-y-2">
                        <li><strong>Over-reliance on Visual and Written Information</strong>Your child may struggle when
                            information is

                            presented in auditory or kinaesthetic formats
                            without any visual or written elements. They may
                            find it hard to grasp lessons delivered through
                            lectures alone or activities that lack written
                            guides or visual support.</li>
                        <li><strong>
                                Difficulty with Oral Presentations or Verbal
                                Communication
                            </strong>
                            Reading/writing learners often prefer written

                            communication over verbal expression. This can
                            result in challenges when they are required to
                            present ideas verbally or participate in discussions
                            without having a chance to write things down first.
                        </li>
                        <li><strong>
                                Overwhelmed by Text-Heavy Materials Without Visuals</strong>

                            Your child may become overwhelmed when faced with
                            long passages of text without any accompanying
                            visual aids. Dense written materials can be
                            challenging if they don’t have diagrams, charts, or
                            images to help break up the content.
                        </li>
                        <li><strong>Struggles with Physical or Hands-On Learning</strong>
                            Kinaesthetic or hands-on activities without visual
                            or written instructions may cause frustration for
                            your child. They prefer to understand a process by
                            reading about it or seeing it visually, so physical
                            tasks without clear visual or written guidance can
                            be challenging.</li>

                        <li><strong>
                                Slow Processing of Information That’s Only Spoken</strong>

                            Your child may take longer to process information
                            that’s delivered orally without any visual aids or
                            written notes. They benefit from having visual or
                            written reinforcement to help them understand and
                            retain spoken information.
                        </li>

                        <li><strong>
                                Need for Time to Write or Draw to Process
                                Information</strong>

                            Reading/writing learners often need extra time to
                            take notes or write things down before they can
                            fully process new information. Without this
                            opportunity, they may struggle to organise their
                            thoughts or remember key points.
                        </li>

                        <li><strong>
                                Difficulty with Abstract Concepts That Lack Clear
                                Visuals or Written Explanations
                            </strong>
                            Concepts that are too abstract and lack clear visual

                            representations or detailed written explanations can
                            be harder for your child to grasp. They may need
                            visual diagrams or written summaries to fully
                            understand and retain these ideas.

                        </li>

                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-64 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/20.svg'" alt="" />
                    </div>
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/9.svg'" alt="" />
                    </div>


                </div>
            </div>

            <p class="mt-6">
                By understanding these characteristics, strengths, and potential
                challenges, parents and teachers can better support blended
                learners in their educational journey.
            </p>
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
                    <p class="mt-4 ">
                        Your child is a reading/writing learner, which means
                        they understand and remember information best when it is
                        presented in written form. They excel when they can read
                        and write about the material. Here’s a closer look at
                        what makes reading/writing learners unique:
                    </p>
                    <ol class="list-decimal list-inside mt-4 space-y-2 ">
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
                                    They often have strong writing skills and
                                    enjoy expressing their thoughts and ideas
                                    through writing. They benefit from taking
                                    detailed notes and writing essays or
                                    reports.
                                </li>
                            </ul>
                        </li>
                        <li>
                            <strong>Enjoys Reading:</strong>
                            <ul class="list-disc pl-6 space-y-2 ml-10">
                                <li>
                                    They have a love for reading and often spend
                                    a lot of time with books, whether for
                                    learning or pleasure. They are likely to
                                    excel in tasks that involve extensive
                                    reading.
                                </li>
                            </ul>
                        </li>
                        <li>
                            <strong>Good at Remembering Written
                                Information:</strong>
                            <ul class="list-disc pl-6 space-y-2 ml-10">
                                <li>
                                    They have an excellent memory for
                                    information they have read or written down.
                                    They can recall details from texts and use
                                    these to understand new information.
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
                                    organise their thoughts and reinforce their
                                    understanding.
                                </li>
                            </ul>
                        </li>
                        <li>
                            <strong>Enjoys Lists and Organisers:</strong>
                            <ul class="list-disc pl-6 space-y-2 ml-10">
                                <li>
                                    They benefit from using lists, organisers,
                                    and outlines to structure information. These
                                    tools help them visualise and organise their
                                    thoughts.
                                </li>
                            </ul>
                        </li>
                        <li>
                            <strong>Reads for Pleasure:</strong>
                            <ul class="list-disc pl-6 space-y-2 ml-10">
                                <li>
                                    They often read for pleasure and personal
                                    enrichment, enjoying a wide variety of
                                    genres and topics.
                                </li>
                            </ul>
                        </li>
                    </ol>
                </section>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-svg-images/Kids/LearningStyles/7.svg'" alt="" />
                </div>
                <div class="flex justify-center items-center">
                    <img class="w-90 h-auto object-contain"
                        :src="'/images/reports-svg-images/Kids/LearningStyles/3.svg'" alt="" />
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-svg-images/Kids/LearningStyles/24.svg'" alt="" />
                </div>
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-svg-images/Kids/LearningStyles/20.svg'" alt="" />
                </div>

            </div>
            <div class="col-6">
                <section class="mb-8">
                    <h2 class="text-3xl font-semibold">
                        Strengths of Reading/Writing Learners
                    </h2>
                    <ol class="list-decimal list-inside mt-4 space-y-2 ">
                        <li>
                            <strong>Effective Readers:</strong>
                            <ul class="list-disc pl-6 space-y-2 ml-10">
                                <li>
                                    Reading/writing learners are effective
                                    readers who can comprehend and analyse
                                    written information thoroughly.
                                </li>
                            </ul>
                        </li>
                        <li>
                            <strong>Strong Note-Taking Skills:</strong>
                            <ul class="list-disc pl-6 space-y-2 ml-10">
                                <li>
                                    They excel at taking detailed and organised
                                    notes, which helps them remember and review
                                    information.
                                </li>
                            </ul>
                        </li>
                        <li>
                            <strong>Good Researchers:</strong>
                            <ul class="list-disc pl-6 space-y-2 ml-10">
                                <li>
                                    They are skilled at conducting research
                                    using written sources. They know how to find
                                    and interpret information from books,
                                    articles, and online resources.
                                </li>
                            </ul>
                        </li>
                        <li>
                            <strong>Strong Vocabulary:</strong>
                            <ul class="list-disc pl-6 space-y-2 ml-10">
                                <li>
                                    Their extensive reading often leads to a
                                    strong vocabulary and an ability to
                                    understand complex texts.
                                </li>
                            </ul>
                        </li>
                        <li>
                            <strong>Detail-Oriented:</strong>
                            <ul class="list-disc pl-6 space-y-2 ml-10">
                                <li>
                                    They are detail-oriented and can focus on
                                    specific aspects of written material, making
                                    them thorough and meticulous in their work.
                                </li>
                            </ul>
                        </li>
                        <li>
                            <strong>Independent Learners:</strong>
                            <ul class="list-disc pl-6 space-y-2 ml-10">
                                <li>
                                    They are often independent learners who can
                                    manage their own reading and writing tasks
                                    effectively.
                                </li>
                            </ul>
                        </li>
                        <li>
                            <strong>Good Written Communicators:</strong>
                            <ul class="list-disc pl-6 space-y-2 ml-10">
                                <li>
                                    They are able to communicate their ideas
                                    clearly and effectively through writing,
                                    making them strong in written assignments
                                    and presentations.
                                </li>
                            </ul>
                        </li>
                    </ol>
                </section>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <section class="mb-8">
                    <h2 class="text-3xl font-semibold">
                        Potential Challenges for Reading/Writing Learners
                    </h2>
                    <ol class="list-decimal list-inside mt-4 space-y-2 ">
                        <li>
                            <strong>Difficulty with Verbal Instructions:</strong>
                            <ul class="list-disc pl-6 space-y-2 ml-10">
                                <li>
                                    Reading/writing learners may struggle with
                                    information presented only verbally. They
                                    benefit from having written instructions to
                                    refer to.
                                </li>
                            </ul>
                        </li>
                        <li>
                            <strong>Limited Engagement with Hands-On
                                Activities:</strong>
                            <ul class="list-disc pl-6 space-y-2 ml-10">
                                <li>
                                    They may find it challenging to engage with
                                    hands-on activities that lack a written
                                    component. Providing written guides and
                                    explanations can help.
                                </li>
                            </ul>
                        </li>
                        <li>
                            <strong>Over Reliance on Written Information:</strong>
                            <ul class="list-disc pl-6 space-y-2 ml-10">
                                <li>
                                    They might rely too heavily on written
                                    information and struggle with tasks that
                                    require strong visual or kinaesthetic
                                    skills.
                                </li>
                            </ul>
                        </li>
                        <li>
                            <strong>Easily Overwhelmed by Large Amounts of
                                Text:</strong>
                            <ul class="list-disc pl-6 space-y-2 ml-10">
                                <li>
                                    They can become overwhelmed by large amounts
                                    of text if it is not well-organised or
                                    broken down into manageable sections.
                                </li>
                            </ul>
                        </li>
                        <li>
                            <strong>Challenges with Group Discussions:</strong>
                            <ul class="list-disc pl-6 space-y-2 ml-10">
                                <li>
                                    They may find group discussions and verbal
                                    interactions less comfortable than written
                                    communication.
                                </li>
                            </ul>
                        </li>
                        <li>
                            <strong>Need for Quiet Study Environment:</strong>
                            <ul class="list-disc pl-6 space-y-2 ml-10">
                                <li>
                                    They require a quiet and focused environment
                                    for reading and writing. Distractions can
                                    hinder their concentration.
                                </li>
                            </ul>
                        </li>
                        <li>
                            <strong>Struggles with Abstract Concepts:</strong>
                            <ul class="list-disc pl-6 space-y-2 ml-10">
                                <li>
                                    They may find it difficult to grasp abstract
                                    concepts without written explanations and
                                    examples.
                                </li>
                            </ul>
                        </li>
                    </ol>
                    <p class="mt-4 ">
                        By understanding these characteristics, strengths, and
                        potential challenges, parents and teachers can better
                        support their reading/writing learners in their
                        educational journey.
                    </p>
                </section>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-svg-images/Kids/LearningStyles/20.svg'" alt="" />
                </div>
                <div class="flex justify-center items-center">
                    <img class="w-90 h-auto object-contain"
                        :src="'/images/reports-svg-images/Kids/LearningStyles/9.svg'" alt="" />
                </div>

            </div>
        </div>
    </div>

    <!-- Report 13 Visual _ Auditory Blend-->
    <div v-if="style == 'Visual/Auditory'" class="p-6">
        <!-- Content for Report 13 -->
        <section class="mb-8">
            <p class="mt-4 ">
                Your child’s learning style is a unique blend of both visual and
                auditory preferences. This means they understand and remember
                information best when it is presented both visually and
                verbally. Here's a closer look at what makes visual and auditory
                learners unique:
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
                            <strong>Prefers Visual Aids:</strong> Learns best
                            when information is presented through diagrams,
                            charts, videos, and images.
                        </li>
                        <li>
                            <strong>Strong Spatial Awareness:</strong> Easily
                            interprets and remembers spatial arrangements, maps,
                            and visual layouts.
                        </li>
                        <li>
                            <strong>Colour-Coded and Organised Notes:</strong>
                            Tends to benefit from organising notes with colours,
                            highlights, and mind maps.
                        </li>
                        <li>
                            <strong>Pays Attention to Visual Details:</strong>
                            Notices and remembers visual cues like symbols,
                            shapes, and images.
                        </li>
                        <li>
                            <strong>Reads Body Language and Visual Cues
                                Well:</strong>
                            Can often pick up on non-verbal cues in
                            communication and learning.
                        </li>
                        <li>
                            <strong>Visualises Concepts in Mind:</strong> Can
                            "see" concepts and ideas mentally, making it easier
                            to remember and apply them.
                        </li>
                        <li>
                            <strong>Uses Images for Problem-Solving:</strong>
                            Visualises steps or uses drawings to solve complex
                            problems.
                        </li>
                    </ol>
                    <strong>Auditory Learning Characteristics:</strong>
                    <ol class="list-decimal pl-6 space-y-2 ml-8">
                        <li>
                            <strong>Remembers Verbal Instructions:</strong>
                            Excels at recalling information from conversations,
                            lectures, and discussions.
                        </li>
                        <li>
                            <strong>Engages in Discussions:</strong> Enjoys
                            participating in group discussions, debates, and
                            verbal exchanges.
                        </li>
                        <li>
                            <strong>Learns Through Listening:</strong> Absorbs
                            information effectively through audio resources like
                            podcasts and lectures.
                        </li>
                        <li>
                            <strong>Reads Aloud to Understand Concepts:</strong>
                            Often reads aloud or speaks through problems to
                            reinforce learning.
                        </li>
                        <li>
                            <strong>Uses Rhythms or Music to Learn:</strong> May
                            use songs, rhythms, or mnemonics to remember facts
                            and concepts.
                        </li>
                        <li>
                            <strong>Strong Verbal Communication Skills:</strong>
                            Comfortable explaining ideas and concepts to others
                            verbally.
                        </li>
                        <li>
                            <strong>Remembers Tone and Emotion in Speech:</strong>
                            Can recall not only what was said but also the tone
                            and emotional context of conversations.
                        </li>
                    </ol>
                </section>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-svg-images/Kids/LearningStyles/7.svg'" alt="" />
                </div>



            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-svg-images/Kids/LearningStyles/24.svg'" alt="" />
                </div>
                <div class="flex justify-center items-center">
                    <img class="w-90 h-auto object-contain"
                        :src="'/images/reports-svg-images/Kids/LearningStyles/9.svg'" alt="" />
                </div>

            </div>
            <div class="col-6">
                <section class="mb-8">
                    <h2 class="text-3xl font-semibold">
                        Strengths of Visual and Auditory Learners
                    </h2>
                    <ol class="list-decimal pl-6 space-y-2 ml-8">
                        <li>
                            <strong>Dual Processing of Information:</strong><br />
                            Your child can process both visual and auditory
                            input effectively. They are able to understand
                            complex ideas by seeing them represented visually
                            and hearing explanations, making it easier to grasp
                            challenging concepts.
                        </li>
                        <li>
                            <strong>Strong Memory for Visual and Verbal
                                Content:</strong><br />
                            They have the ability to remember both what they’ve
                            seen and what they’ve heard, whether it’s images,
                            diagrams, or spoken words. This dual strength helps
                            with recalling information during exams or
                            discussions.
                        </li>
                        <li>
                            <strong>Engaged in Visual and Verbal Learning
                                Activities:</strong><br />
                            Your child enjoys activities that combine visual and
                            auditory elements, such as watching videos with
                            verbal explanations, attending presentations, or
                            participating in interactive lessons where visuals
                            are supported by audio.
                        </li>
                        <li>
                            <strong>Adaptable Learning Approach:</strong><br />
                            They can easily shift between visual and auditory
                            learning environments, allowing them to adapt to
                            different teaching styles and materials.
                        </li>
                        <li>
                            <strong>Quick Understanding of Abstract
                                Concepts:</strong><br />
                            Combining visual and auditory cues helps your child
                            quickly grasp abstract ideas, as they can "see" the
                            concept and understand it through verbal
                            explanation.
                        </li>
                        <li>
                            <strong>Effective in Group Discussions and
                                Presentations:</strong><br />
                            With strong verbal and visual strengths, they excel
                            in group discussions and presentations where they
                            can both see and hear information.
                        </li>
                        <li>
                            <strong>Creative and Innovative Thinking:</strong><br />
                            Visual and auditory learners often come up with
                            creative solutions by blending what they hear and
                            what they visualise, making them adaptable
                            problem-solvers.
                        </li>
                    </ol>
                </section>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <section class="mb-8">
                    <h2 class="text-3xl font-semibold">Potential Challenges</h2>
                    <ul class="list-disc pl-6 space-y-2 ml-10">
                        <li>
                            <strong>Difficulty When Visual and Verbal Cues Are Not
                                Aligned</strong><br />
                            Your child may struggle when visual materials don’t
                            match the verbal explanations or when they are
                            presented independently. If they only receive one
                            type of input, such as a diagram without a verbal
                            explanation or a spoken lecture without supporting
                            visuals, they may not absorb the information as
                            effectively.
                        </li>
                        <li>
                            <strong>Over-reliance on Visual or Auditory
                                Input</strong><br />
                            In some cases, your child may favour one method over
                            the other, leading to a reliance on either visual or
                            auditory information. This could mean that they may
                            become frustrated or disengaged when required to use
                            a different approach or when one form of input
                            (visual or auditory) is lacking.
                        </li>
                        <li>
                            <strong>Challenges with Independent Work</strong><br />
                            During periods of silent or independent work, your
                            child may struggle without verbal explanations or
                            visual stimuli. If neither style is engaged, they
                            may find it difficult to maintain focus, especially
                            if the task is purely reading-based or requires
                            extended periods of listening.
                        </li>
                        <li>
                            <strong>Struggles in Noisy or Overly Stimulating
                                Environments</strong><br />
                            Environments with too much visual clutter or
                            background noise can overwhelm your child. They may
                            find it hard to filter out unnecessary distractions,
                            whether they’re visual (e.g., a busy classroom wall)
                            or auditory (e.g., loud conversations).
                        </li>
                        <li>
                            <strong>Difficulty with Text-Only or Audio-Only
                                Materials</strong><br />
                            Your child may struggle to stay engaged with
                            materials that focus solely on text (without
                            visuals) or only audio (without visual aids). For
                            example, a long passage of written text may feel
                            overwhelming without visuals, while listening to a
                            podcast without accompanying diagrams might leave
                            them missing key details.
                        </li>
                        <li>
                            <strong>Need for Both Visual and Verbal
                                Reinforcement</strong><br />
                            Sometimes, your child may need the same information
                            presented in both visual and auditory formats to
                            fully grasp it. They may have difficulty
                            understanding concepts if they are only presented in
                            one format, making it harder for them to retain the
                            information long-term.
                        </li>
                        <li>
                            <strong>Overstimulation or Frustration with Mismatched
                                Pacing</strong><br />
                            Your child may become frustrated if the pacing of
                            verbal instruction doesn’t match the time needed to
                            absorb accompanying visuals, or vice versa. For
                            example, if a teacher explains something too quickly
                            before your child can fully take in a visual, or if
                            a diagram is shown without enough time for an
                            auditory explanations, it can lead to confusion or
                            incomplete understanding.
                        </li>
                    </ul>
                    <p class="mt-4 ">
                        By understanding these characteristics, strengths, and
                        potential challenges, parents and teachers can better
                        support blended learners in their educational journey.
                    </p>
                </section>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-svg-images/Kids/LearningStyles/20.svg'" alt="" />
                </div>
                <div class="flex justify-center items-center">
                    <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/ParentalInsights/7.svg'" alt="" />
                </div>
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-svg-images/Kids/LearningStyles/3.svg'" alt="" />
                </div>

            </div>
        </div>
    </div>

    <!-- Report 14 Visual _ Kinesthethic Blend-->
    <div v-if="style == 'Visual/Kinesthethic'" class="p-6">
        <!-- Content for Report 14 -->
        <section class="mb-8">
            <p class="mt-4 ">
                Your child’s learning style is a unique blend of both visual and
                kinaesthetic preferences. This means they understand and
                remember information best when they can see it and then
                physically engage with it. Here's a closer look at what makes
                visual and kinaesthetic learners unique:
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
                            <strong>Enjoys Learning Through Visual Aids</strong><br />
                            Visual learners prefer diagrams, pictures, charts,
                            and videos to help them process complex information.
                        </li>
                        <li>
                            <strong>Strong Spatial Awareness</strong><br />
                            They excel at interpreting spatial information, such
                            as maps, diagrams, and layouts, and often use this
                            skill to make sense of abstract ideas.
                        </li>
                        <li>
                            <strong>Recalls Visual Details Easily</strong><br />
                            Visual learners remember information by recalling
                            images, colours, or visual cues they’ve seen.
                        </li>
                        <li>
                            <strong>Organises Information Visually</strong><br />
                            They benefit from organising their notes using mind
                            maps, colour coding, or diagrams to better
                            understand and retain information.
                        </li>
                        <li>
                            <strong>Thinks in Pictures</strong><br />
                            Visual learners often "see" concepts in their mind,
                            which helps them understand and process abstract
                            ideas more effectively.
                        </li>
                        <li>
                            <strong>Prefers Quiet Study Environments</strong><br />
                            They tend to focus best in calm, visually organised
                            spaces with minimal distractions.
                        </li>
                        <li>
                            <strong>Enjoys Visualising Processes and
                                Concepts</strong><br />
                            Whether it's a math problem or a history lesson,
                            they prefer to visualise the steps or events to
                            understand the material.
                        </li>
                    </ol>
                    <strong>Kinaesthetic Learning Characteristics:</strong>
                    <ol class="list-decimal pl-6 space-y-2 ml-8">
                        <li>
                            <strong>Learns Best by Doing</strong><br />
                            Kinaesthetic learners need physical engagement with
                            the material. They thrive in hands-on activities
                            like building, drawing, or experimenting.
                        </li>
                        <li>
                            <strong>Prefers Movement During Learning</strong><br />
                            They focus better when they can move around or
                            engage in physical activity, whether it's pacing,
                            using tools, or working with objects.
                        </li>
                        <li>
                            <strong>Excellent Hand-Eye Coordination</strong><br />
                            Kinaesthetic learners often have strong motor skills
                            and excel at tasks that require hand-eye
                            coordination.
                        </li>
                        <li>
                            <strong>Engages in Active Problem Solving</strong><br />
                            They learn by physically interacting with materials
                            and solving problems through trial and error,
                            experimenting, or acting out processes.
                        </li>
                        <li>
                            <strong>Physical Memory</strong><br />
                            They remember things by physically doing
                            them—whether it's performing an experiment or
                            writing out a solution—rather than reading or
                            listening.
                        </li>
                        <li>
                            <strong>Enjoys Building and Creating Projects</strong><br />
                            Kinaesthetic learners love tasks that involve
                            constructing or creating something tangible, such as
                            models, art, or physical demonstrations.
                        </li>
                        <li>
                            <strong>Benefits from Movement Breaks</strong><br />
                            Taking breaks to move around helps them refocus and
                            return to learning with renewed energy and
                            concentration.
                        </li>
                    </ol>
                </section>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-svg-images/Kids/LearningStyles/7.svg'" alt="" />
                </div>
                <div class="flex justify-center items-center">
                    <img class="w-90 h-auto object-contain"
                        :src="'/images/reports-svg-images/Kids/LearningStyles/9.svg'" alt="" />
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-svg-images/Kids/LearningStyles/24.svg'" alt="" />
                </div>
                <div class="flex justify-center items-center">
                    <img class="w-90 h-auto object-contain"
                        :src="'/images/reports-svg-images/Kids/LearningStyles/9.svg'" alt="" />
                </div>

            </div>
            <div class="col-6">
                <section class="mb-8">
                    <h2 class="text-3xl font-semibold">
                        Strengths of Visual and Kinaesthetic Learners
                    </h2>
                    <ol class="list-decimal pl-6 space-y-2 ml-8">
                        <li>
                            <strong>Dual Processing of Visual and Physical
                                Information</strong><br />
                            Your child is highly capable of understanding
                            information through both visual representations and
                            hands-on activities. Seeing a concept visually and
                            then reinforcing it through physical interaction
                            leads to deeper comprehension.
                        </li>
                        <li>
                            <strong>Strong Memory for Visual and Physical
                                Details</strong><br />
                            They can easily recall information that has been
                            presented visually, such as images or diagrams, as
                            well as through physical experiences, like hands-on
                            projects or activities.
                        </li>
                        <li>
                            <strong>Engaged in Hands-On and Visual Learning
                                Activities</strong><br />
                            Your child is most engaged when learning through
                            both visual aids and hands-on methods. This
                            combination keeps them focused and actively involved
                            in the learning process.
                        </li>
                        <li>
                            <strong>Creative and Practical Problem Solvers</strong><br />
                            They are able to visualise potential solutions and
                            then test them through physical engagement, making
                            them highly effective at solving problems creatively
                            and practically.
                        </li>
                        <li>
                            <strong>Long-Term Retention of Information</strong><br />
                            By combining visual memory with physical
                            experiences, your child retains information more
                            effectively. They not only remember what they saw
                            but also what they physically did to learn the
                            concept.
                        </li>
                        <li>
                            <strong>Adaptability to Different Learning
                                Environments</strong><br />
                            They thrive in environments where visual tools (like
                            diagrams or videos) are available and where they can
                            apply what they learn through hands-on activities,
                            making them flexible in various learning settings.
                        </li>
                        <li>
                            <strong>Enjoys Creating and Building</strong><br />
                            Visual and kinaesthetic learners often excel in
                            projects where they can create something tangible,
                            such as models, diagrams, or physical
                            demonstrations, combining their strengths to produce
                            impressive results.
                        </li>
                    </ol>
                </section>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <section class="mb-8">
                    <h2 class="text-3xl font-semibold">Potential Challenges</h2>
                    <ul class="list-disc pl-6 space-y-2 ml-10">
                        <li>
                            <strong>Over-reliance on Visual or Physical
                                Learning</strong><br />
                            Your child may struggle when required to learn from
                            written or auditory-only resources. If information
                            is presented without visual aids or hands-on
                            activities, they may find it harder to process and
                            retain the material.
                        </li>
                        <li>
                            <strong>Difficulty with Long Periods of Sitting
                                Still</strong><br />
                            Kinaesthetic learners often find it difficult to
                            remain seated for extended periods of time. Without
                            movement or physical engagement, your child may
                            become restless or lose focus during lessons.
                        </li>
                        <li>
                            <strong>Struggles with Abstract Concepts Without
                                Physical Engagement</strong><br />
                            If an abstract concept is taught without a hands-on
                            component, your child may find it harder to
                            understand. They benefit from physically engaging
                            with ideas to make sense of them.
                        </li>
                        <li>
                            <strong>Challenges with Overly Text-Heavy
                                Material</strong><br />
                            Visual learners may become overwhelmed by long
                            passages of text that lack visual breaks, diagrams,
                            or images. Without visuals to support the content,
                            they may struggle to stay focused and absorb the
                            information.
                        </li>
                        <li>
                            <strong>Need for Movement During Learning</strong><br />
                            Your child may find it challenging to focus if they
                            aren’t able to move around or interact physically
                            with the material. This can become a problem in
                            learning environments that require long periods of
                            stillness.
                        </li>
                        <li>
                            <strong>Difficulty Translating Physical Learning into
                                Abstract Understanding</strong><br />
                            Sometimes, your child may focus more on the physical
                            aspect of a task and find it difficult to connect
                            the activity to an abstract or theoretical concept.
                            They might need extra help linking hands-on
                            activities to deeper learning.
                        </li>
                        <li>
                            <strong>Overstimulation from Visual or Physical
                                Clutter</strong><br />
                            Too much visual or physical stimulation in the
                            learning environment, such as a cluttered workspace
                            or too many moving parts, can overwhelm your child,
                            making it harder for them to concentrate on the key
                            learning objectives.
                        </li>
                    </ul>
                    <p class="mt-4 ">
                        By understanding these characteristics, strengths, and
                        potential challenges, parents and teachers can better
                        support blended learners in their educational journey.
                    </p>
                </section>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-svg-images/Kids/LearningStyles/20.svg'" alt="" />
                </div>
                <div class="flex justify-center items-center">
                    <img class="w-120 h-auto object-contain"
                        @error="$event.target.src = '/images/default/placeholder.png'"
                        :src="'/images/reports-svg-images/Page16.svg'" alt="" />
                </div>
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-svg-images/Kids/LearningStyles/3.svg'" alt="" />
                </div>


            </div>
        </div>
    </div>

    <!-- Report 15 Visual _ Reading & Writing-->
    <div v-if="style == 'Visual/Reading/Writing'" class="p-6">
        <!-- Content for Report 15 -->
        <section class="mb-8">
            <p class="mt-4 ">
                Your child’s learning style is a blend of both
                <strong>visual</strong> and
                <strong>reading/writing</strong> preferences. This means they
                understand and retain information best when they can see it
                represented visually and then reinforce it through reading or
                writing. Here's a closer look at what makes
                <strong>visual and reading/writing learners</strong> unique:
            </p>
        </section>

        <div class="row">
            <div class="col-6">
                <section class="mb-8">
                    <h2 class="text-3xl font-semibold">
                        Characteristics of Visual and Reading/Writing Learners
                    </h2>
                    <h2 class="text-3xl font-semibold">
                        Visual Learning Characteristics:
                    </h2>
                    <ol class="list-decimal pl-6 space-y-2 ml-8">
                        <li>
                            <strong>Prefers Visual Aids</strong><br />Visual
                            learners thrive when they can use diagrams, charts,
                            images, and videos to understand complex ideas.
                        </li>
                        <li>
                            <strong>Strong Spatial Awareness</strong><br />They
                            have a natural ability to interpret spatial
                            information, such as maps, layouts, and diagrams,
                            which helps them understand abstract concepts.
                        </li>
                        <li>
                            <strong>Uses Visual Cues for Memory</strong><br />Visual learners often recall information
                            by
                            remembering images, colours, or visual patterns
                            they’ve seen.
                        </li>
                        <li>
                            <strong>Organises Information Visually</strong><br />They are good at organising their
                            thoughts
                            and study materials using visual tools like mind
                            maps, charts, or colour-coded notes.
                        </li>
                        <li>
                            <strong>Enjoys Calm and Organised Study
                                Environments</strong><br />Visual learners work best in quiet, visually
                            organised spaces with minimal distractions, where
                            they can focus on diagrams, charts, or images.
                        </li>
                        <li>
                            <strong>Thinks in Pictures</strong><br />Visual
                            learners often picture ideas in their mind, helping
                            them understand concepts that might be harder to
                            grasp through words alone.
                        </li>
                        <li>
                            <strong>Visualises Concepts and Processes</strong><br />They often visualise steps or
                            processes in
                            their mind, which helps them make sense of new
                            information.
                        </li>
                    </ol>
                    <h2 class="text-3xl font-semibold">
                        Reading/Writing Learning Characteristics:
                    </h2>
                    <ol class="list-decimal pl-6 space-y-2 ml-8">
                        <li>
                            <strong>Learns Best Through Reading</strong><br />Reading/writing learners prefer reading
                            textbooks, articles, or notes to absorb information,
                            and they often take extensive notes to process what
                            they’ve read.
                        </li>
                        <li>
                            <strong>Strong Preference for Written
                                Communication</strong><br />They often express their thoughts more
                            clearly through writing, enjoying tasks like writing
                            essays, reports, or summaries.
                        </li>
                        <li>
                            <strong>Uses Written Notes to Organise Thoughts</strong><br />Writing out ideas helps them
                            clarify their
                            thoughts and retain information. They often rewrite
                            notes or summarise information to reinforce
                            learning.
                        </li>
                        <li>
                            <strong>Prefers Text-Based Learning Materials</strong><br />Reading/writing learners tend to
                            favour
                            books, manuals, and written guides, and they prefer
                            studying with written resources.
                        </li>
                        <li>
                            <strong>Good at Remembering Written Information</strong><br />They have a strong ability to
                            remember facts
                            and concepts they’ve read or written down, which
                            helps them retain and recall details more easily.
                        </li>
                        <li>
                            <strong>Enjoys Writing to Understand Concepts</strong><br />They often use writing as a tool
                            to organise
                            their thoughts and make sense of new material,
                            whether through essays, reports, or notes.
                        </li>
                        <li>
                            <strong>Benefits from Rewriting or Summarising
                                Information</strong><br />Rewriting or summarising lessons helps them
                            reinforce their understanding and improves retention
                            of key concepts.
                        </li>
                    </ol>
                </section>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-svg-images/Kids/LearningStyles/7.svg'" alt="" />
                </div>
                <div class="flex justify-center items-center mt-4 mb-4">
                    <img class="w-96 h-auto object-contain" :src="'/images/reports-svg-images/Page 26ab.svg'" alt="" />
                </div>
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-svg-images/Kids/LearningStyles/3.svg'" alt="" />
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-svg-images/Kids/LearningStyles/24.svg'" alt="" />
                </div>
                <div class="flex justify-center items-center mt-4 mb-4">
                    <img class="w-96 h-auto object-contain" :src="'/images/reports-svg-images/Page 26ab.svg'" alt="" />
                </div>

            </div>
            <div class="col-6">
                <section class="mb-8">
                    <h2 class="text-3xl font-semibold">
                        Strengths of Visual and Reading/Writing Learners
                    </h2>
                    <ol class="list-decimal pl-6 space-y-2 ml-8">
                        <li>
                            <strong>Dual Processing of Written and Visual
                                Information</strong><br />Your child can efficiently absorb information
                            through both written text and visual aids. They
                            excel at understanding concepts when they can read
                            about them and then reinforce their learning with
                            diagrams, charts, or images.
                        </li>
                        <li>
                            <strong>Strong Memory for Visual and Written
                                Details</strong><br />They have a remarkable ability to remember
                            both visual cues and written information. They can
                            easily recall what they’ve seen (such as charts or
                            diagrams) and what they’ve read or written, which
                            makes studying more effective.
                        </li>
                        <li>
                            <strong>Effective at Breaking Down Complex
                                Information</strong><br />They can break down complicated topics into
                            manageable parts by combining visual tools (such as
                            mind maps) with written summaries or notes, making
                            complex material easier to understand.
                        </li>
                        <li>
                            <strong>Organised and Structured Approach to
                                Learning</strong><br />Your child is naturally inclined to organise
                            their thoughts and study materials both visually and
                            in writing. They benefit from creating visual
                            organisers and written outlines to structure their
                            learning, which helps them stay focused and
                            productive.
                        </li>
                        <li>
                            <strong>Strong Understanding of Abstract
                                Concepts</strong><br />By combining visual thinking and written
                            explanations, your child can grasp abstract concepts
                            more easily. Visual aids help them “see” the big
                            picture, while writing allows them to explain or
                            summarise those concepts in detail.
                        </li>
                        <li>
                            <strong>Good at Self-Expression Through Writing</strong><br />Writing comes naturally to
                            your child, and
                            they are good at expressing their thoughts and ideas
                            in written form. They are able to clarify and expand
                            on what they’ve learned by writing essays, reports,
                            or summaries.
                        </li>
                        <li>
                            <strong>Quick Recall of Written and Visual
                                Information</strong><br />They have a strong ability to recall key
                            points from written materials and visual aids, which
                            makes studying for tests and exams easier. They
                            often visualise what they’ve read and written,
                            helping them retain information for longer periods.
                        </li>
                    </ol>
                </section>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <section class="mb-8">
                    <h2 class="text-3xl font-semibold">Potential Challenges</h2>
                    <ul class="list-disc pl-6 space-y-2 ml-10">
                        <li>
                            <strong>Over-reliance on Visual and Written
                                Information</strong><br />Your child may struggle when information is
                            presented in auditory or kinaesthetic formats
                            without any visual or written elements. They may
                            find it hard to grasp lessons delivered through
                            lectures alone or activities that lack written
                            guides or visual support.
                        </li>
                        <li>
                            <strong>Difficulty with Oral Presentations or Verbal
                                Communication</strong><br />Reading/writing learners often prefer written
                            communication over verbal expression. This can
                            result in challenges when they are required to
                            present ideas verbally or participate in discussions
                            without having a chance to write things down first.
                        </li>
                        <li>
                            <strong>Overwhelmed by Text-Heavy Materials Without
                                Visuals</strong><br />Your child may become overwhelmed when faced
                            with long passages of text without any accompanying
                            visual aids. Dense written materials can be
                            challenging if they don’t have diagrams, charts, or
                            images to help break up the content.
                        </li>
                        <li>
                            <strong>Struggles with Physical or Hands-On
                                Learning</strong><br />Kinaesthetic or hands-on activities without
                            visual or written instructions may cause frustration
                            for your child. They prefer to understand a process
                            by reading about it or seeing it visually, so
                            physical tasks without clear visual or written
                            guidance can be challenging.
                        </li>
                        <li>
                            <strong>Slow Processing of Information That’s Only
                                Spoken</strong><br />Your child may take longer to process
                            information that’s delivered orally without any
                            visual aids or written notes. They benefit from
                            having visual or written reinforcement to help them
                            understand and retain spoken information.
                        </li>
                        <li>
                            <strong>Need for Time to Write or Draw to Process
                                Information</strong><br />Reading/writing learners often need extra
                            time to take notes or write things down before they
                            can fully process new information. Without this
                            opportunity, they may struggle to organise their
                            thoughts or remember key points.
                        </li>
                        <li>
                            <strong>Difficulty with Abstract Concepts That Lack
                                Clear Visuals or Written Explanations</strong><br />Concepts that are too abstract and
                            lack clear
                            visual representations or detailed written
                            explanations can be harder for your child to grasp.
                            They may need visual diagrams or written summaries
                            to fully understand and retain these ideas.
                        </li>
                    </ul>
                    <p class="mt-4 ">
                        By understanding these characteristics, strengths, and
                        potential challenges, parents and teachers can better
                        support blended learners in their educational journey.
                    </p>
                </section>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <div class="flex justify-center items-center mt-4 mb-4">
                        <img class="w-96 h-auto object-contain" :src="'/images/reports-svg-images/Page 26ab.svg'"
                            alt="" />
                    </div>


                </div>
                <div class="flex justify-center items-center mt-4 mb-4">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-svg-images/Kids/LearningStyles/20.svg'" alt="" />
                </div>
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-svg-images/Kids/LearningStyles/3.svg'" alt="" />
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
            <p class="mt-4 ">
                Your child is a visual learner, which means they understand and
                remember information best when it is presented visually. Here’s
                a closer look at what makes visual learners unique:
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
                            <strong>Prefer Visual Information:</strong> Visual
                            learners thrive on information they can see. They
                            often prefer to read a textbook with diagrams over
                            listening to a lecture or reading plain text.
                        </li>
                        <li>
                            <strong>Love Visual Aids:</strong> They enjoy using
                            visual aids such as charts, graphs, and pictures to
                            help them understand and organise information. These
                            aids help them create a mental picture of what they
                            are learning.
                        </li>
                        <li>
                            <strong>Strong Spatial Awareness:</strong> Visual
                            learners typically have a keen sense of space and
                            how different elements relate to each other. They
                            can easily visualise objects and their movements.
                        </li>
                        <li>
                            <strong>Detail-Oriented:</strong> They pay attention
                            to details and are often good at noticing subtle
                            differences in visual presentations. This attention
                            to detail helps them remember information
                            accurately.
                        </li>
                        <li>
                            <strong>Creative Thinkers:</strong> Many visual
                            learners are creative and enjoy activities that
                            allow them to use their imagination. They often
                            excel in arts and crafts, drawing, and designing.
                        </li>
                        <li>
                            <strong>Organised and Structured:</strong> Visual
                            learners tend to be organised and like to plan their
                            tasks visually. They might use colour-coded notes or
                            planners to keep track of their assignments and
                            deadlines.
                        </li>
                        <li>
                            <strong>Enjoy Reading and Writing:</strong> While
                            they are primarily visual, these learners often
                            enjoy reading books and writing, especially when
                            they can use these activities to create mental
                            images of the content.
                        </li>
                    </ul>
                </section>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-svg-images/Kids/LearningStyles/7.svg'" alt="" />
                </div>
                <div class="flex justify-center items-center mt-4 mb-4">
                    <img class="w-96 h-auto object-contain" :src="'/images/reports-svg-images/Page 26ab.svg'" alt="" />

                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-svg-images/Kids/LearningStyles/24.svg'" alt="" />
                </div>
                <div class="flex justify-center items-center mt-4 mb-4">
                    <img class="w-96 h-auto object-contain" :src="'/images/reports-svg-images/Page 26ab.svg'" alt="" />
                </div>

            </div>
            <div class="col-6">
                <section class="mb-8">
                    <h2 class="text-3xl font-semibold">
                        Strengths of Visual Learners
                    </h2>
                    <ul class="list-disc space-y-2">
                        <li>
                            <strong>Excellent Memory for Visual
                                Information:</strong>
                            Visual learners can easily remember information
                            presented in diagrams, charts, or pictures. They can
                            recall details of a scene or a picture with great
                            accuracy.
                        </li>
                        <li>
                            <strong>Strong Comprehension of Spatial
                                Relationships:</strong>
                            They have a natural ability to understand and
                            interpret spatial relationships, making them good at
                            subjects like geometry and physics where visualising
                            spatial arrangements is key.
                        </li>
                        <li>
                            <strong>High Levels of Creativity:</strong> Visual
                            learners often excel in creative pursuits. They can
                            think outside the box and come up with innovative
                            ideas and solutions. Their creativity can be a great
                            asset in subjects like art, design, and even
                            problem-solving in science and mathematics.
                        </li>
                        <li>
                            <strong>Good Organisational Skills:</strong> Their
                            ability to visualise helps them stay organised. They
                            can plan their work effectively, set visual goals,
                            and break down complex tasks into manageable parts.
                        </li>
                        <li>
                            <strong>Detail-Oriented:</strong> Their attention to
                            detail allows them to notice small but important
                            aspects of information that others might miss. This
                            trait is beneficial in subjects that require careful
                            observation and analysis, such as science and
                            technical subjects.
                        </li>
                        <li>
                            <strong>Effective Note-Taking:</strong> Visual
                            learners often excel at taking detailed and
                            organised notes. They can use diagrams, flowcharts,
                            and other visual tools to capture information in a
                            way that makes sense to them and is easy to review
                            later.
                        </li>
                        <li>
                            <strong>Engagement in Visual Learning
                                Activities:</strong>
                            They are highly engaged in learning activities that
                            involve visual elements. This engagement leads to
                            better retention and understanding of the material.
                        </li>
                    </ul>
                </section>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <section class="mb-8">
                    <h2 class="text-3xl font-semibold">Potential Challenges</h2>
                    <ul class="list-disc space-y-2">
                        <li>
                            <strong>Difficulty with Verbal Instructions:</strong>
                            Visual learners might struggle to follow verbal
                            instructions if they are not accompanied by visual
                            aids. They may need instructions to be written down
                            or visually represented to fully understand them.
                        </li>
                        <li>
                            <strong>Easily Distracted by Visual Stimuli:</strong>
                            Since they are highly attuned to visual information,
                            visual learners can be easily distracted by
                            unnecessary visual stimuli in their environment.
                            This can make it hard for them to focus in visually
                            cluttered spaces.
                        </li>
                        <li>
                            <strong>Struggles with Auditory Information:</strong>
                            Purely auditory information can be challenging for
                            visual learners. They may find it difficult to
                            retain information from lectures or discussions
                            unless they take notes or visualise the content in
                            their mind.
                        </li>
                        <li>
                            <strong>Overwhelmed by Visual Overload:</strong>
                            While they thrive on visual information, too much of
                            it can be overwhelming. Visual learners might find
                            it hard to process information if it's presented too
                            quickly or if there are too many visual elements at
                            once.
                        </li>
                        <li>
                            <strong>Need for Visual Reinforcement:</strong> They
                            may need to see concepts and ideas reinforced
                            visually multiple times before fully understanding
                            them. Without this reinforcement, they might
                            struggle to grasp complex concepts.
                        </li>
                        <li>
                            <strong>Reliance on Visual Cues:</strong> Visual
                            learners may rely heavily on visual cues to
                            understand and remember information. If these cues
                            are absent, they might find it harder to recall
                            information.
                        </li>
                        <li>
                            <strong>Challenges with Abstract Concepts:</strong>
                            Abstract concepts that cannot be easily visualised
                            can be difficult for visual learners to understand.
                            They may need to use diagrams or create mental
                            images to make sense of abstract ideas.
                        </li>
                    </ul>
                    <p class="mt-4 ">
                        By understanding these characteristics, strengths, and
                        potential challenges, parents and teachers can better
                        support visual learners in their educational journey.
                    </p>
                </section>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain"
                        :src="'/images/reports-svg-images/Kids/LearningStyles/20.svg'" alt="" />
                </div>
                <div class="flex justify-center items-center mt-4 mb-4">
                    <img class="w-96 h-auto object-contain" :src="'/images/reports-svg-images/Page 26ab.svg'" alt="" />
                </div>

            </div>
        </div>
    </div>
    </div>
</template>

<script>
import AssessmentTypes from "@/Layouts/AssessmentTypes.vue";

export default {
    name: "AuditoryOverview",
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
div.space-y-2>h4.font-medium {
    color: rgb(36, 168, 250);
    font-weight: bold;
    color: #fa25c4;
    /* font-size: 19px; */
}

h2,
.p-6>.row>.col-6>h2,
h2.text-3xl {
    color: rgb(55 48 163);
    font-weight: bold !important;
}

ul>li {
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

    h2{
        font-size: 1.25rem !important;
    }

    /* Adjust image container on mobile */
    .col-6 .flex.justify-center.items-center {
        margin: 1rem 0;
    }

    .mb-8{
        margin-bottom: 0 !important;
    }
    .mt-4{
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
