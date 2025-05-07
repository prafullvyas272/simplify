<template>
    <div class="p-4 md:p-6">

    <div class="space-y-6 mt-4">
        <h2 class="text-center font-bold mb-4">Teacher Insights</h2>
    </div>
    <!-- Report 1 Auditory -->
    <div v-if="style == 'Auditory'">
        <!-- Content for Report 1 -->
        <div class="space-y-6">
            <h4 class="text-2xl font-bold">Supporting Auditory Learners in the Classroom</h4>
            <p>
                As a teacher, understanding how to support auditory learners can enhance their academic engagement and
                performance. Here are strategies designed to help auditory learners thrive in the classroom:
            </p>

            <div class="row">
                <div class="col-6">
                    <h4 class=" font-bold">Incorporating Auditory Teaching Methods</h4>
                    <h4 class="font-medium text-lg">Use Verbal Instructions and Explanations</h4>
                    <p>
                        Auditory learners benefit most from clear verbal instructions. Whenever you introduce a new
                        topic or
                        assignment, explain it verbally in addition to providing written instructions. Repeating key
                        points out
                        loud and summarising verbally will help auditory learners process the information more
                        effectively.
                    </p>

                    <h4 class="font-medium text-lg">Engage Students in Group Discussions</h4>
                    <p>
                        Group discussions and verbal participation are excellent for auditory learners. Incorporate
                        opportunities for students to discuss topics, explain concepts aloud, or debate ideas. This
                        encourages
                        auditory learners to process and reinforce their understanding through speaking and listening.
                    </p>

                    <h4 class="font-medium text-lg">Provide Access to Audio Resources</h4>
                    <p>
                        Offer students the option to listen to recorded lectures, audiobooks, or educational podcasts as
                        supplementary material. Auditory learners will benefit from hearing explanations multiple times
                        and in
                        different formats. If possible, allow students to record class lectures for review at home.
                    </p>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/Teaching/20.svg'" alt="" />
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/Teaching/21.svg'" alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <h4 class=" font-bold">Effective Exercises for Auditory Learners</h4>
                    <h4 class="font-medium text-lg">Encourage Verbal Presentations</h4>
                    <p>
                        Assign verbal presentations or oral reports where students can explain concepts out loud.
                        Auditory
                        learners excel in activities that require speaking, and this will reinforce their learning while
                        also
                        improving communication skills.
                    </p>

                    <h4 class="font-medium text-lg">Incorporate Verbal Q&A Sessions</h4>
                    <p>
                        Use verbal question-and-answer sessions to reinforce material. Auditory learners will benefit
                        from
                        hearing both the questions and the verbal responses, helping them to retain information and
                        clarify
                        concepts.
                    </p>

                    <h4 class="font-medium text-lg">Use Audio Study Guides</h4>
                    <p>
                        Offer audio study guides or recorded summaries of key lessons. These resources provide auditory
                        learners
                        with a way to review material in their preferred learning style, enhancing their comprehension
                        and
                        retention.
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-6">

                    <h4 class=" font-bold">Practical Tips for Teachers</h4>
                    <h4 class="font-medium text-lg">Provide Verbal Feedback</h4>
                    <p>
                        When giving feedback to auditory learners, try to include verbal feedback alongside written
                        comments.
                        Hearing feedback directly helps them understand where they excel and where improvements can be
                        made.
                    </p>

                    <h4 class="font-medium text-lg">Incorporate Verbal Group Work</h4>
                    <p>
                        Encourage auditory learners to participate in group work that involves verbal communication.
                        Activities
                        like brainstorming sessions or group debates will allow them to process information and
                        collaborate
                        effectively.
                    </p>

                    <h4 class="font-medium text-lg">Offer Audio-Recorded Materials</h4>
                    <p>
                        Whenever possible, offer auditory learners recorded lectures, podcasts, or audio-based
                        materials. This
                        ensures they have the resources they need to review and engage with the material in their
                        preferred
                        format.
                    </p>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/Teaching/20.svg'" alt="" />
                    </div>
                </div>
            </div>





        </div>

    </div>

    <!-- Report 2 Auditory _ Kinesthethic Blend -->
    <div v-if="style == 'Auditory/Kinesthethic'">
        <!-- Content for Report 2 -->
        <div class=" space-y-6">
            <h4 class="text-2xl font-bold text-gray-800">Supporting Auditory and Kinaesthetic Learners in the
                Classroom</h4>
            <p class="">As a teacher, understanding how to support auditory and kinaesthetic learners can
                significantly enhance their engagement and academic success. Here are strategies designed to help
                auditory and kinaesthetic learners thrive in your classroom:</p>

            <div class="row">
                <div class="col-6">
                    <h4 class=" font-bold text-gray-800">Incorporating Auditory and Kinaesthetic Teaching Methods
                    </h4>
                    <ul class="space-y-4">
                        <li class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <span class="text-green-500 text-2xl"></span>
                            </div>
                            <div>
                                <h4 class="font-bold">Provide Clear Verbal Instructions with Hands-On Activities
                                </h4>
                                <p class="">Give verbal instructions and explanations for tasks, and then
                                    follow up
                                    with hands-on activities. For example, explain a concept verbally before having
                                    students
                                    engage in a related physical activity or experiment.</p>
                            </div>
                        </li>
                        <li class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <span class="text-green-500 text-2xl"></span>
                            </div>
                            <div>
                                <h4 class="font-bold">Use Interactive Discussions and Physical Tasks</h4>
                                <p class="">Incorporate group discussions and verbal interactions into
                                    lessons.
                                    Pair these with physical tasks such as building models or conducting experiments to
                                    help
                                    students process and retain information through both hearing and doing.</p>
                            </div>
                        </li>
                        <li class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <span class="text-green-500 text-2xl"></span>
                            </div>
                            <div>
                                <h4 class="font-bold">Offer Audio Resources and Physical Tools</h4>
                                <p class="">Provide access to audio resources such as recorded lectures or
                                    educational podcasts, and pair these with physical tools like manipulatives or
                                    models. This
                                    combination allows students to hear information and then physically interact with
                                    it.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/Teaching/20.svg'" alt="" />
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/Teaching/21.svg'" alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <h4 class=" font-bold text-gray-800">Effective Exercises for Auditory and Kinaesthetic Learners
                    </h4>
                    <ul class="space-y-4">
                        <li class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <span class="text-green-500 text-2xl"></span>
                            </div>
                            <div>
                                <h4 class="font-bold">Assign Oral Presentations with Physical Components</h4>
                                <p class="">Encourage students to give oral presentations or participate in
                                    discussions that include physical elements, such as using props or creating models.
                                    This
                                    helps reinforce their learning through both verbal and hands-on engagement.</p>
                            </div>
                        </li>
                        <li class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <span class="text-green-500 text-2xl"></span>
                            </div>
                            <div>
                                <h4 class="font-bold">Incorporate Physical Movement in Lessons</h4>
                                <p class="">Design lessons that allow for physical movement. For example,
                                    use
                                    activities that involve moving around the classroom, such as station rotations or
                                    role-playing exercises, to help students learn through action.</p>
                            </div>
                        </li>
                        <li class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <span class="text-green-500 text-2xl"></span>
                            </div>
                            <div>
                                <h4 class="font-bold">Use Audio and Physical Study Aids</h4>
                                <p class="">Provide study aids that combine auditory and kinaesthetic
                                    elements. For
                                    example, use flashcards with audio features and physical activities like sorting or
                                    arranging to help reinforce key concepts.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-6">

                    <h4 class=" font-bold text-gray-800">Practical Tips for Teachers</h4>
                    <ul class="space-y-4">
                        <li class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <span class="text-green-500 text-2xl"></span>
                            </div>
                            <div>
                                <h4 class="font-bold">Provide Verbal Feedback with Physical Demonstrations</h4>
                                <p class="">When giving feedback, use both verbal explanations and physical
                                    demonstrations. For example, verbally explain a concept and then show a physical
                                    example or
                                    model to clarify the feedback.</p>
                            </div>
                        </li>
                        <li class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <span class="text-green-500 text-2xl"></span>
                            </div>
                            <div>
                                <h4 class="font-bold">Encourage Interactive and Hands-On Learning</h4>
                                <p class="">Incorporate interactive activities that require both verbal and
                                    physical engagement. Use group discussions, role-playing, and physical manipulatives
                                    to
                                    support learning in a way that caters to both auditory and kinaesthetic preferences.
                                </p>
                            </div>
                        </li>
                        <li class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <span class="text-green-500 text-2xl"></span>
                            </div>
                            <div>
                                <h4 class="font-bold">Create Opportunities for Verbal and Physical Interaction</h4>
                                <p class="">Design classroom activities that allow students to discuss
                                    concepts and
                                    physically interact with the material. This could include group projects, hands-on
                                    experiments, or verbal debates combined with physical activities.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/Teaching/20.svg'" alt="" />
                    </div>
                </div>
            </div>





        </div>

    </div>

    <!-- Report 3 Auditory _ Reading & Writing Blend-->
    <div v-if="style == 'Auditory/Reading/Writing'">
        <!-- Content for Report 3 -->
        <div class=" space-y-6">
            <h4 class="text-2xl font-bold text-gray-800">Supporting Auditory and Reading/Writing Learners in the
                Classroom</h4>
            <p class="">As a teacher, understanding how to support auditory and reading/writing learners
                can significantly enhance their engagement and academic success. Here are strategies designed to help
                auditory and reading/writing learners thrive in your classroom:</p>

            <div class="row">
                <div class="col-6">
                    <h4 class=" font-bold text-gray-800">Incorporating Auditory and Reading/Writing Teaching Methods
                    </h4>
                    <ul class="space-y-4">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="font-bold text-gray-800">Provide Verbal Instructions Alongside Written
                                    Materials
                                </h4>
                                <p class="">Always pair verbal instructions with written handouts, slides,
                                    or
                                    notes. Auditory learners process information through listening, while
                                    reading/writing
                                    learners benefit from having access to text they can read and write about.</p>
                            </div>
                        </li>
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="font-bold text-gray-800">Encourage Notetaking During Auditory Lessons
                                </h4>
                                <p class="">Encourage students to take detailed notes while listening to
                                    lectures
                                    or discussions. This practice not only reinforces auditory input but also helps them
                                    organise and retain the information through writing.</p>
                            </div>
                        </li>
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="font-bold text-gray-800">Use Audiobooks and Written Texts Together</h4>
                                <p class="">When assigning reading materials, offer complementary
                                    audiobooks or
                                    podcasts. This allows students to listen to key concepts and then reinforce their
                                    learning
                                    by reading the material and writing summaries or reflections.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/Teaching/20.svg'" alt="" />
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/Teaching/21.svg'" alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <h4 class=" font-bold text-gray-800">Effective Exercises for Auditory and Reading/Writing
                        Learners</h4>
                    <ul class="space-y-4">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="font-bold text-gray-800">Assign Verbal Presentations with Written
                                    Outlines</h4>
                                <p class="">Encourage students to give oral presentations that are
                                    supported by
                                    detailed written outlines. This approach allows auditory learners to speak about
                                    their
                                    understanding, while reading/writing learners benefit from organising their thoughts
                                    in
                                    writing first.</p>
                            </div>
                        </li>
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="font-bold text-gray-800">Provide Audio Resources with Written Notes</h4>
                                <p class="">Offer audio resources, such as podcasts or recorded lectures,
                                    alongside
                                    written materials like transcripts, articles, or study guides. This combination
                                    allows
                                    students to absorb information through both listening and reading.</p>
                            </div>
                        </li>
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="font-bold text-gray-800">Incorporate Written and Verbal Group Activities
                                </h4>
                                <p class="">During group activities, ask students to discuss a topic
                                    verbally and
                                    then write down their conclusions. This process helps auditory learners engage in
                                    discussions while reading/writing learners benefit from writing their thoughts.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-6">

                    <h4 class=" font-bold text-gray-800">Practical Tips for Teachers</h4>
                    <ul class="space-y-4">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="font-bold text-gray-800">Give Verbal and Written Feedback</h4>
                                <p class="">When providing feedback, use both verbal explanations and
                                    written
                                    comments. Verbal feedback helps auditory learners understand areas of improvement,
                                    while
                                    written feedback allows reading/writing learners to reflect on their progress.</p>
                            </div>
                        </li>
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="font-bold text-gray-800">Encourage Active Listening and Writing</h4>
                                <p class="">During class, encourage active listening by asking students to
                                    summarise what they’ve heard in writing. This practice reinforces both auditory and
                                    reading/writing learning methods and helps students stay engaged.</p>
                            </div>
                        </li>
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="font-bold text-gray-800">Use Written and Verbal Study Aids</h4>
                                <p class="">Provide study aids that combine both auditory and written
                                    elements,
                                    such as audio recordings paired with written study guides. This allows students to
                                    review
                                    material in multiple formats, reinforcing their understanding.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/Teaching/20.svg'" alt="" />
                    </div>
                </div>
            </div>





        </div>

    </div>

    <!-- Report 4 Auditory _ Visual Blend-->
    <div v-if="style == 'Auditory/Visual'">
        <!-- Content for Report 4 -->
        <div class=" space-y-6">
            <h4 class="text-2xl font-bold text-gray-800">Supporting Auditory and Visual Learners in the Classroom
            </h4>
            <p class="">As a teacher, understanding how to support auditory and visual learners can
                significantly enhance their engagement and academic success. Here are strategies designed to help
                auditory and visual learners thrive in your classroom:</p>

            <div class="row">
                <div class="col-6">
                    <h4 class=" font-bold text-gray-800">Incorporating Auditory and Visual Teaching Methods</h4>
                    <ul class="space-y-2">
                        <li><strong class="text-gray-800">Use Both Visual Aids and Verbal Explanations</strong><br>
                            These learners
                            benefit from seeing and hearing information. Provide clear verbal explanations paired with
                            visual
                            aids such as diagrams, slides, or videos. This dual approach helps visual and auditory
                            learners
                            process and retain the material more effectively.</li>
                        <li><strong class="text-gray-800">Engage Students in Discussions with Visuals</strong><br>
                            Encourage verbal
                            participation through group discussions and debates, while also using visual tools like
                            whiteboards,
                            handouts, or slides. This combination allows students to process information through both
                            hearing
                            and seeing, reinforcing their understanding.</li>
                        <li><strong class="text-gray-800">Provide Access to Audio-Visual Resources</strong><br> Offer
                            students
                            audio-visual resources, such as recorded lectures, podcasts with visual slides, or
                            educational
                            videos. These resources engage both learning styles, allowing students to review material
                            using both
                            their auditory and visual strengths.</li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/Teaching/20.svg'" alt="" />
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/Teaching/21.svg'" alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <h4 class=" font-bold text-gray-800">Effective Exercises for Auditory and Visual Learners</h4>
                    <ul class="space-y-2">
                        <li><strong class="text-gray-800">Presentations with Visual and Verbal Components</strong><br>
                            Assign
                            presentations where students explain concepts verbally while using visual aids like slides,
                            charts,
                            or diagrams. This reinforces their learning by combining verbal explanations with visual
                            elements.
                        </li>
                        <li><strong class="text-gray-800">Interactive Q&A Sessions with Visual Summaries</strong><br>
                            Use verbal
                            Q&A sessions to reinforce material, and summarise key points visually on the board or
                            handouts. This
                            approach allows students to understand and retain information through both auditory and
                            visual
                            methods.</li>
                        <li><strong class="text-gray-800">Group Projects Combining Visual and Auditory
                                Elements</strong><br> Assign
                            group projects that require students to collaborate on both verbal discussions and visual
                            elements,
                            such as creating videos, podcasts with visuals, or interactive presentations. This method
                            engages
                            both learning styles and enhances creativity.</li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <h4 class=" font-bold text-gray-800">Practical Tips for Teachers</h4>
                    <ul class="space-y-2">
                        <li><strong class="text-gray-800">Provide Both Verbal and Written Feedback</strong><br> Combine
                            verbal and
                            written feedback on assignments. Visual learners benefit from seeing written comments, while
                            auditory learners absorb verbal explanations better. Offering feedback in both formats
                            supports
                            their growth.</li>
                        <li><strong class="text-gray-800">Use Audio-Visual Study Materials</strong><br> Provide study
                            guides that
                            include both visual and auditory elements, such as recorded summaries with accompanying
                            slides or
                            diagrams. This dual approach ensures students can engage with the material through their
                            preferred
                            learning styles.</li>
                        <li><strong class="text-gray-800">Encourage Group Work with Verbal and Visual
                                Interaction</strong><br> In
                            group activities, encourage students to engage in verbal discussions while using visual aids
                            like
                            charts or mind maps. This encourages collaboration and reinforces their understanding
                            through both
                            auditory and visual inputs.</li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/Teaching/20.svg'" alt="" />
                    </div>
                </div>
            </div>






        </div>

    </div>

    <!-- Report 5 Kinesthethic _ Auditory Blend-->
    <div v-if="style == 'Kinesthethic/Auditory'">
        <!-- Content for Report 5 -->
        <div class=" space-y-6">
            <h4 class="text-2xl font-bold text-gray-800">Supporting Kinaesthetic and Auditory Learners in the
                Classroom</h4>
            <p class="">As a teacher, understanding how to support kinaesthetic and auditory learners can
                significantly enhance their engagement and academic success. Here are strategies designed to help
                kinaesthetic and auditory learners thrive in your classroom:</p>

            <div class="row">
                <div class="col-6">
                    <h4 class=" font-bold text-gray-800">Incorporating Kinaesthetic and Auditory Teaching Methods
                    </h4>
                    <ul class="space-y-4">
                        <li><strong class="text-gray-800">Provide Clear Verbal Instructions with Hands-On
                                Activities</strong><br>
                            Give verbal instructions and explanations for tasks and then follow up with hands-on
                            activities. For
                            example, explain a concept verbally before having students engage in a related physical
                            activity or
                            experiment.</li>
                        <li><strong class="text-gray-800">Use Interactive Discussions and Physical Tasks</strong><br>
                            Incorporate
                            group discussions and verbal interactions into lessons. Pair these with physical tasks such
                            as
                            building models or conducting experiments to help students process and retain information
                            through
                            both hearing and doing.</li>
                        <li><strong class="text-gray-800">Offer Audio Resources and Physical Tools</strong><br> Provide
                            access to
                            audio resources such as recorded lectures or educational podcasts, and pair these with
                            physical
                            tools like manipulatives or models. This combination allows students to hear information and
                            then
                            physically interact with it.</li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/Teaching/20.svg'" alt="" />
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/Teaching/21.svg'" alt="" />
                    </div>
                </div>
                <div class="col-6">

                    <h4 class=" font-bold text-gray-800">Effective Exercises for Kinaesthetic and Auditory Learners
                    </h4>
                    <ul class="space-y-4">
                        <li><strong class="text-gray-800">Assign Oral Presentations with Physical
                                Components</strong><br> Encourage
                            students to give oral presentations or participate in discussions that include physical
                            elements,
                            such as using props or creating models. This helps reinforce their learning through both
                            verbal and
                            hands-on engagement.</li>
                        <li><strong class="text-gray-800">Incorporate Physical Movement in Lessons</strong><br> Design
                            lessons that
                            allow for physical movement. For example, use activities that involve moving around the
                            classroom,
                            such as station rotations or role-playing exercises, to help students learn through action.
                        </li>
                        <li><strong class="text-gray-800">Use Audio and Physical Study Aids</strong><br> Provide study
                            aids that
                            combine auditory and kinaesthetic elements. For example, use flashcards with audio features
                            and
                            physical activities like sorting or arranging to help reinforce key concepts.</li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-6">

                    <h4 class=" font-bold text-gray-800">Practical Tips for Teachers</h4>
                    <ul class="space-y-4">
                        <li><strong class="text-gray-800">Provide Verbal Feedback with Physical
                                Demonstrations</strong><br> When
                            giving feedback, use both verbal explanations and physical demonstrations. For example,
                            verbally
                            explain a concept and then show a physical example or model to clarify the feedback.</li>
                        <li><strong class="text-gray-800">Encourage Interactive and Hands-On Learning</strong><br>
                            Incorporate
                            interactive activities that require both verbal and physical engagement. Use group
                            discussions,
                            role-playing, and physical manipulatives to support learning in a way that caters to both
                            auditory
                            and kinaesthetic preferences.</li>
                        <li><strong class="text-gray-800">Create Opportunities for Verbal and Physical
                                Interaction</strong><br>
                            Design classroom activities that allow students to discuss concepts and physically interact
                            with the
                            material. This could include group projects, hands-on experiments, or verbal debates
                            combined with
                            physical activities.</li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/Teaching/20.svg'" alt="" />
                    </div>
                </div>
            </div>




        </div>

    </div>

    <!-- Report 6 Kinesthethic _ Reading & Writing -->
    <div v-if="style == 'Kinesthethic/Reading/Writing'">
        <!-- Content for Report 6 -->
        <div class=" space-y-6">
            <h4 class="text-2xl font-bold text-gray-800">Supporting Kinaesthetic and Reading/Writing Learners in the
                Classroom</h4>
            <p class="">As a teacher, understanding how to support kinaesthetic and reading/writing
                learners can significantly enhance their engagement and academic success. Here are strategies designed
                to help kinaesthetic and visual learners thrive in your classroom:</p>

            <div class="row">
                <div class="col-6">
                    <h4 class=" font-bold text-gray-800">Incorporating Kinaesthetic and Reading/Writing Teaching
                        Methods</h4>
                    <ul class="space-y-4 ">
                        <li><strong class="text-gray-800">Pair Written Instructions with Hands-On
                                Activities</strong><br> Provide
                            written handouts or reading materials alongside physical tasks. For example, after
                            explaining a
                            concept, have students engage in a hands-on activity like building a model or conducting an
                            experiment, followed by written reflections or reports.</li>
                        <li><strong class="text-gray-800">Encourage Notetaking During Physical Activities</strong><br>
                            Ask students
                            to take notes or write down observations during hands-on activities. Writing while engaging
                            physically helps them process and retain information, reinforcing both learning methods.
                        </li>
                        <li><strong class="text-gray-800">Use Tactile Study Tools Alongside Written Work</strong><br>
                            Provide
                            students with tactile tools such as flashcards, diagrams, or interactive models that they
                            can
                            manipulate while studying written materials. This combination of physical and written
                            interaction
                            deepens their understanding of complex concepts.</li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/Teaching/20.svg'" alt="" />
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/Teaching/21.svg'" alt="" />
                    </div>
                </div>
                <div class="col-6">

                    <h4 class=" font-bold text-gray-800">Effective Exercises for Kinaesthetic and Reading/Writing
                        Learners</h4>
                    <ul class="space-y-4 ">
                        <li><strong class="text-gray-800">Assign Essays with Interactive Components</strong><br> When
                            assigning
                            essays or written reports, offer the option to include an interactive component. For
                            example,
                            students could build a model or conduct an experiment that complements their written
                            analysis.</li>
                        <li><strong class="text-gray-800">Incorporate Physical Movement into Group
                                Discussions</strong><br> During
                            group discussions or class debates, encourage students to use physical props, move around
                            the room,
                            or engage in active participation. Following the discussion, have students write a summary
                            of what
                            they’ve learned.</li>
                        <li><strong class="text-gray-800">Use Visual and Tactile Study Aids</strong><br> Incorporate
                            study aids
                            like flowcharts, diagrams, or models during lessons. These aids allow kinaesthetic learners
                            to
                            interact with the material physically, while reading/writing learners can complement this by
                            taking
                            notes or writing summaries.</li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-6">

                    <h4 class=" font-bold text-gray-800">Practical Tips for Teachers</h4>
                    <ul class="space-y-4 ">
                        <li><strong class="text-gray-800">Provide Both Written and Hands-On Feedback</strong><br> When
                            offering
                            feedback, provide both written comments and opportunities for hands-on improvement. For
                            example,
                            give written suggestions for an essay while also allowing the student to revise through a
                            practical
                            demonstration or project.</li>
                        <li><strong class="text-gray-800">Encourage Written Reflections After Physical
                                Activities</strong><br>
                            After students complete physical tasks, ask them to write reflections or summaries. This
                            reinforces
                            learning by combining physical engagement with written analysis.</li>
                        <li><strong class="text-gray-800">Offer a Flexible Classroom Setup</strong><br> Create a
                            classroom
                            environment that allows students to move between writing tasks and physical activities. This
                            flexible setup helps kinaesthetic learners stay engaged while supporting reading/writing
                            learners
                            with quiet spaces for focused work.</li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/Teaching/20.svg'" alt="" />
                    </div>
                </div>
            </div>




        </div>

    </div>

    <!-- Report 7 Kinesthethic _ Visual Blend-->
    <div v-if="style == 'Kinesthethic/Visual'">
        <!-- Content for Report 7 -->
        <div class=" space-y-6">
            <h4 class="text-2xl font-bold text-gray-800">Supporting Kinaesthetic and Visual Learners in the
                Classroom
            </h4>
            <p class="">As a teacher, understanding how to support kinaesthetic and visual learners can
                significantly enhance their engagement and academic success. Here are strategies designed to help
                kinaesthetic and visual learners thrive in your classroom:</p>

            <div class="row">
                <div class="col-6">
                    <h4 class=" font-bold text-gray-800">Incorporating Kinaesthetic and Visual Teaching Methods</h4>
                    <ul class="space-y-2 ">
                        <li><strong class="text-gray-800">Use Visual Aids Alongside Hands-On Activities</strong><br>
                            Visual and
                            kinaesthetic learners benefit from seeing information and physically interacting with it.
                            Incorporate diagrams, charts, and visual presentations while encouraging students to engage
                            with the
                            material through hands-on tasks like experiments or building models. This blend of visual
                            and
                            physical learning helps them retain concepts more effectively.</li>
                        <li><strong class="text-gray-800">Engage Students with Interactive Lessons</strong><br> These
                            learners
                            excel when they can actively participate in lessons. Plan activities where students can use
                            physical
                            tools or manipulatives to explore concepts. For example, using props in science lessons or
                            creating
                            3D models in geography can help reinforce abstract ideas through tactile experiences.</li>
                        <li><strong class="text-gray-800">Provide Opportunities for Movement</strong><br> Kinaesthetic
                            learners
                            need opportunities to move during lessons. Incorporate movement-based activities, such as
                            role-playing or using gestures to represent key concepts. Allowing students to move around,
                            even in
                            small ways, keeps them engaged and helps them process the information more deeply.</li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/Teaching/20.svg'" alt="" />
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/Teaching/21.svg'" alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <h4 class=" font-bold text-gray-800">Effective Exercises for Kinaesthetic and Visual Learners
                    </h4>
                    <ul class="space-y-2 ">
                        <li><strong class="text-gray-800">Presentations with Visual and Hands-On Components</strong><br>
                            Assign
                            projects or presentations that involve both visual elements (such as slides or diagrams) and
                            hands-on tasks. This type of project allows students to blend their need for visual learning
                            with
                            physical engagement, reinforcing what they've learned.</li>
                        <li><strong class="text-gray-800">Interactive Group Projects</strong><br> Organise group
                            projects where
                            students can collaborate on building models, creating posters, or designing interactive
                            displays.
                            This type of learning promotes teamwork while also addressing the need for both visual and
                            hands-on
                            engagement.</li>
                        <li><strong class="text-gray-800">Simulated Real-World Scenarios</strong><br> Use real-world
                            simulations,
                            like role-playing activities or practical tasks, to help students apply what they’ve
                            learned. Visual
                            learners will benefit from seeing the concept come to life, while kinaesthetic learners will
                            thrive
                            through active participation.</li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-6">

                    <h4 class=" font-bold text-gray-800">Practical Tips for Teachers</h4>
                    <ul class="space-y-2 ">
                        <li><strong class="text-gray-800">Provide Visual and Physical Feedback</strong><br> When giving
                            feedback,
                            combine written (visual) and practical (hands-on) responses. For example, if students are
                            working on
                            a project, provide feedback on their visual work (like diagrams or posters) and also suggest
                            improvements on how they physically engage with the material (like constructing models).
                        </li>
                        <li><strong class="text-gray-800">Use Hands-On Study Materials</strong><br> For revision or
                            homework,
                            provide students with materials they can manipulate, like building kits or 3D puzzles,
                            alongside
                            traditional visual tools like flashcards or diagrams. This helps reinforce learning through
                            both
                            visual and kinaesthetic channels.</li>
                        <li><strong class="text-gray-800">Incorporate Movement into Lessons</strong><br> Try to
                            integrate short
                            movement breaks or activities into your lessons. Kinaesthetic learners focus better when
                            they can
                            move around, so activities like moving between learning stations or participating in active
                            discussions can help maintain their engagement.</li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/Teaching/20.svg'" alt="" />
                    </div>
                </div>
            </div>





        </div>

    </div>

    <!-- Report 8 Kinesthethic-->
    <div v-if="style == 'Kinesthethic'">
        <!-- Content for Report 8 -->
        <div class="space-y-4 ">
            <h1 class="text-2xl font-bold">Supporting Kinaesthetic Learners in the Classroom</h1>
            <p>As a teacher, it’s important to provide kinaesthetic learners with opportunities to engage physically
                with the material. Here are strategies designed to help kinaesthetic learners thrive in your classroom:
            </p>

            <div class="row">
                <div class="col-6">
                    <div>
                        <h4 class="text-2xl font-bold">Incorporating Kinaesthetic Teaching Methods</h4>
                        <div class="space-y-2">
                            <h4 class="font-medium text-lg">Use Hands-On Activities and Experiments</h4>
                            <p>Kinaesthetic learners excel when they can manipulate objects or engage in physical tasks.
                                Incorporate activities like experiments, building projects, and role-playing exercises
                                that
                                allow them to engage directly with the content. These methods ensure that they can
                                actively
                                interact with the material rather than passively listening or reading.</p>

                            <h4 class="font-medium text-lg">Encourage Movement During Lessons</h4>
                            <p>For kinaesthetic learners, sitting still for long periods can hinder focus. Encourage
                                movement by
                                allowing them to walk around, use standing desks, or even participate in short movement
                                breaks
                                between activities. Integrating movement into your lessons can help them stay focused
                                and
                                engaged.</p>

                            <h4 class="font-medium text-lg">Provide Physical Learning Tools</h4>
                            <p>Offering physical tools like models, flashcards, or other manipulatives is beneficial for
                                kinaesthetic learners. These learners process information best when they can touch and
                                interact
                                with objects. Providing materials that they can use to visualise concepts and make
                                abstract
                                ideas concrete will significantly enhance their learning experience.</p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/Teaching/20.svg'" alt="" />
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/Teaching/21.svg'" alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <div>
                        <h4 class="text-2xl font-bold">Effective Exercises for Kinaesthetic Learners</h4>
                        <div class="space-y-2">
                            <h4 class="font-medium text-lg">Hands-On Group Projects</h4>
                            <p>Group projects that involve building, experimenting, or crafting are ideal for
                                kinaesthetic
                                learners. Allow students to work together on projects that require physical engagement,
                                such as
                                building models, conducting science experiments, or constructing timelines for
                                historical
                                events.</p>

                            <h4 class="font-medium text-lg">Interactive Simulations and Role-Playing</h4>
                            <p>Engage kinaesthetic learners with role-playing activities or simulations where they can
                                physically act out scenarios. Whether it’s reenacting historical events, simulating
                                business
                                decisions, or acting out biological processes, these methods will help them understand
                                and
                                retain the material.</p>

                            <h4 class="font-medium text-lg">Outdoor Learning and Fieldwork</h4>
                            <p>Incorporate field trips or outdoor lessons into your curriculum. Kinaesthetic learners
                                thrive
                                when they can explore concepts in real-world settings. Outdoor activities and learning
                                experiences tied to physical spaces or tasks will give them a deeper understanding of
                                the
                                subject matter.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">

                    <div>
                        <h4 class="text-2xl font-bold">Practical Tips for Teachers</h4>
                        <div class="space-y-2">
                            <h4 class="font-medium text-lg">Use Movement to Reinforce Learning</h4>
                            <p>Allow kinaesthetic learners to stand, walk, or engage in light movement while learning.
                                Movement-based activities, such as acting out vocabulary words or using physical objects
                                to
                                explain a concept, can be highly beneficial in reinforcing material.</p>

                            <h4 class="font-medium text-lg">Provide Hands-On Materials for Studying</h4>
                            <p>Encourage kinaesthetic learners to use flashcards, diagrams, and models during study
                                sessions.
                                When reviewing lessons, allow them to engage physically by manipulating objects or using
                                tactile
                                aids that bring learning to life.</p>

                            <h4 class="font-medium text-lg">Create Physical Challenges or Puzzles</h4>
                            <p>Engage kinaesthetic learners with learning games, challenges, or puzzles that require
                                physical
                                interaction. Breaking down concepts into fun, physical challenges will help these
                                students stay
                                motivated and focused.</p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/Teaching/20.svg'" alt="" />
                    </div>
                </div>
            </div>






        </div>

    </div>

    <!-- Report 9 Reading & Writing _ Auditory Blend -->
    <div v-if="style == 'Reading/Writing/Auditory'">
        <!-- Content for Report 9 -->
        <div class="space-y-4 ">
            <h1 class="text-2xl font-bold">Supporting Reading/Writing and Auditory Learners in the Classroom</h1>
            <p>As a teacher, understanding how to support reading/writing and auditory learners can significantly
                enhance their engagement and academic success. Here are strategies designed to help reading/writing and
                auditory learners thrive in your classroom:</p>

            <div class="row">
                <div class="col-6">
                    <h4 class="text-2xl font-bold">Incorporating Reading/Writing and Auditory Teaching Methods</h4>
                    <ul class=" pl-5 space-y-2">
                        <li><strong>Provide Verbal Instructions Alongside Written Materials</strong><br> Always pair
                            verbal
                            instructions with written handouts, slides, or notes. Auditory learners process information
                            through
                            listening, while reading/writing learners benefit from having access to text they can read
                            and write
                            about.</li>
                        <li><strong>Encourage Notetaking During Auditory Lessons</strong><br> Encourage students to take
                            detailed
                            notes while listening to lectures or discussions. This practice not only reinforces auditory
                            input
                            but also helps them organise and retain the information through writing.</li>
                        <li><strong>Use Audiobooks and Written Texts Together</strong><br> When assigning reading
                            materials, offer
                            complementary audiobooks or podcasts. This allows students to listen to key concepts and
                            then
                            reinforce their learning by reading the material and writing summaries or reflections.</li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/Teaching/20.svg'" alt="" />
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/Teaching/21.svg'" alt="" />
                    </div>
                </div>
                <div class="col-6">

                    <h4 class="text-2xl font-bold">Effective Exercises for Reading/Writing and Auditory Learners
                    </h4>
                    <ul class=" pl-5 space-y-2">
                        <li><strong>Assign Verbal Presentations with Written Outlines</strong><br> Encourage students to
                            give oral
                            presentations that are supported by detailed written outlines. This approach allows auditory
                            learners to speak about their understanding, while reading/writing learners benefit from
                            organising
                            their thoughts in writing first.</li>
                        <li><strong>Provide Audio Resources with Written Notes</strong><br> Offer audio resources, such
                            as podcasts
                            or recorded lectures, alongside written materials like transcripts, articles, or study
                            guides. This
                            combination allows students to absorb information through both listening and reading.</li>
                        <li><strong>Incorporate Written and Verbal Group Activities</strong><br> During group
                            activities, ask
                            students to discuss a topic verbally and then write down their conclusions. This process
                            helps
                            auditory learners engage in discussions while reading/writing learners benefit from writing
                            their
                            thoughts.</li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <h4 class="text-2xl font-bold">Practical Tips for Teachers</h4>
                    <ul class=" pl-5 space-y-2">
                        <li><strong>Give Verbal and Written Feedback</strong><br> When providing feedback, use both
                            verbal
                            explanations and written comments. Verbal feedback helps auditory learners understand areas
                            of
                            improvement, while written feedback allows reading/writing learners to reflect on their
                            progress.
                        </li>
                        <li><strong>Encourage Active Listening and Writing</strong><br> During class, encourage active
                            listening by
                            asking students to summarise what they’ve heard in writing. This practice reinforces both
                            auditory
                            and reading/writing learning methods and helps students stay engaged.</li>
                        <li><strong>Use Written and Verbal Study Aids</strong><br> Provide study aids that combine both
                            auditory
                            and written elements, such as audio recordings paired with written study guides. This allows
                            students to review material in multiple formats, reinforcing their understanding.</li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/Teaching/20.svg'" alt="" />
                    </div>
                </div>
            </div>





        </div>

    </div>

    <!-- Report 10 Reading & Writing _ Kinesthethic Blend-->
    <div v-if="style == 'Reading/Writing/Kinesthethic'">
        <!-- Content for Report 10 -->
        <div class="  ">
            <h4 class="text-2xl font-bold mb-4">Supporting Reading/Writing and Kinaesthetic Learners in the
                Classroom
            </h4>
            <p class="mb-4">As a teacher, understanding how to support reading/writing and kinaesthetic learners can
                significantly enhance their engagement and academic success. Here are strategies designed to help
                kinaesthetic and visual learners thrive in your classroom:</p>

            <div class="row">
                <div class="col-6">
                    <h4 class=" font-bold mb-2">Incorporating Reading/Writing and Kinaesthetic Teaching Methods</h4>
                    <ul class=" pl-5 mb-6">
                        <li><strong>Pair Written Instructions with Hands-On Activities</strong><br> Provide written
                            handouts or
                            reading materials alongside physical tasks. For example, after explaining a concept, have
                            students
                            engage in a hands-on activity like building a model or conducting an experiment, followed by
                            written
                            reflections or reports.</li>
                        <li><strong>Encourage Notetaking During Physical Activities</strong><br> Ask students to take
                            notes or
                            write down observations during hands-on activities. Writing while engaging physically helps
                            them
                            process and retain information, reinforcing both learning methods.</li>
                        <li><strong>Use Tactile Study Tools Alongside Written Work</strong><br> Provide students with
                            tactile tools
                            such as flashcards, diagrams, or interactive models that they can manipulate while studying
                            written
                            materials. This combination of physical and written interaction deepens their understanding
                            of
                            complex concepts.</li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/Teaching/20.svg'" alt="" />
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/Teaching/21.svg'" alt="" />
                    </div>
                </div>
                <div class="col-6">

                    <h4 class=" font-bold mb-2">Effective Exercises for Reading/Writing and Kinaesthetic Learners
                    </h4>
                    <ul class=" pl-5 mb-6">
                        <li><strong>Assign Essays with Interactive Components</strong><br> When assigning essays or
                            written
                            reports, offer the option to include an interactive component. For example, students could
                            build a
                            model or conduct an experiment that complements their written analysis.</li>
                        <li><strong>Incorporate Physical Movement into Group Discussions</strong><br> During group
                            discussions or
                            class debates, encourage students to use physical props, move around the room, or engage in
                            active
                            participation. Following the discussion, have students write a summary of what they’ve
                            learned.</li>
                        <li><strong>Use Visual and Tactile Study Aids</strong><br> Incorporate study aids like
                            flowcharts,
                            diagrams, or models during lessons. These aids allow kinaesthetic learners to interact with
                            the
                            material physically, while reading/writing learners can complement this by taking notes or
                            writing
                            summaries.</li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-6">


                    <h4 class=" font-bold mb-2">Practical Tips for Teachers</h4>
                    <ul class=" pl-5 mb-6">
                        <li><strong>Provide Both Written and Hands-On Feedback</strong><br> When offering feedback,
                            provide both
                            written comments and opportunities for hands-on improvement. For example, give written
                            suggestions
                            for an essay while also allowing the student to revise through a practical demonstration or
                            project.
                        </li>
                        <li><strong>Encourage Written Reflections After Physical Activities</strong><br> After students
                            complete
                            physical tasks, ask them to write reflections or summaries. This reinforces learning by
                            combining
                            physical engagement with written analysis.</li>
                        <li><strong>Offer a Flexible Classroom Setup</strong><br> Create a classroom environment that
                            allows
                            students to move between writing tasks and physical activities. This flexible setup helps
                            kinaesthetic learners stay engaged while supporting reading/writing learners with quiet
                            spaces for
                            focused work.</li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/Teaching/20.svg'" alt="" />
                    </div>
                </div>
            </div>



        </div>

    </div>

    <!-- Report 11 Reading & Writing _ Visual Blend -->
    <div v-if="style == 'Reading/Writing/Visual'">
        <!-- Content for Report 11 -->
        <div class="  ">
            <h4 class="text-2xl font-bold mb-4">Supporting Reading/Writing and Visual Learners in the Classroom</h4>

            <p class="mb-6">As a teacher, understanding how to support reading/writing and visual learners can
                significantly enhance their engagement and academic success. Here are strategies designed to help
                reading/writing and visual learners thrive in your classroom:</p>

            <div class="row">
                <div class="col-6">
                    <h4 class=" font-bold mb-4">Incorporating Reading/Writing and Visual Teaching Methods</h4>
                    <ul class=" pl-5 mb-6">
                        <li><strong>Provide Written and Visual Instructions</strong><br> Always offer written
                            instructions
                            alongside visual aids such as charts, diagrams, or examples. This combination allows visual
                            and
                            reading/writing learners to see the information in different formats, helping them process
                            and
                            retain it more effectively.</li>
                        <li><strong>Encourage Notetaking with Visual Summaries</strong><br> Visual and reading/writing
                            learners
                            benefit from taking detailed notes and then summarising the material using visual elements
                            like mind
                            maps, flowcharts, or timelines. Encourage students to write down key points and create
                            visual
                            summaries of what they’ve learned to reinforce the material.</li>
                        <li><strong>Incorporate Visuals in Reading Assignments</strong><br> When assigning reading
                            tasks, provide
                            supplemental visual aids such as graphs, illustrations, or charts to help students visualise
                            the
                            material. For example, when studying historical events, timelines and maps can help students
                            organise the information visually while also engaging with written content.</li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/Teaching/20.svg'" alt="" />
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/Teaching/21.svg'" alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <h4 class=" font-bold mb-4">Effective Exercises for Reading/Writing and Visual Learners</h4>
                    <ul class=" pl-5 mb-6">
                        <li><strong>Combine Written and Visual Study Guides</strong><br> Provide study guides that
                            combine written
                            explanations with visual aids like diagrams or charts. This will help visual and
                            reading/writing
                            learners engage more deeply with the content by seeing and reading the material in different
                            formats.</li>
                        <li><strong>Assign Projects with Written and Visual Components</strong><br> Encourage students
                            to complete
                            projects that include both written and visual components, such as research papers paired
                            with
                            diagrams, infographics, or presentations that blend text with visuals. This allows them to
                            use both
                            of their learning strengths in a meaningful way.</li>
                        <li><strong>Incorporate Written and Visual Feedback</strong><br> When providing feedback, offer
                            written
                            comments alongside visual annotations, like highlighting or marking up diagrams or text.
                            Visual
                            learners benefit from seeing feedback in a clear, organised way, while reading/writing
                            learners
                            appreciate the detailed written explanations.</li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <h4 class=" font-bold mb-4">Practical Tips for Teachers</h4>
                    <ul class=" pl-5 mb-6">
                        <li><strong>Provide Written and Visual Resources</strong><br> Ensure that students have access
                            to both
                            written and visual materials, such as textbooks, articles, and visual aids like charts or
                            infographics. Encourage them to use these resources together to fully understand the
                            material.</li>
                        <li><strong>Encourage Visual Summaries of Written Content</strong><br> After reading assignments
                            or
                            lessons, ask students to summarise the material visually. This could involve creating
                            flowcharts,
                            diagrams, or mind maps that help them organise and visualise what they’ve read.</li>
                        <li><strong>Use Visual Tools in Written Assignments</strong><br> Allow students to incorporate
                            visual
                            elements like diagrams, tables, or graphs in their written work. This helps them convey
                            complex
                            ideas in a way that aligns with their learning style and reinforces their understanding of
                            the
                            subject matter.</li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/Teaching/20.svg'" alt="" />
                    </div>
                </div>
            </div>






        </div>

    </div>

    <!-- Report 12 Reading & Writing-->
    <div v-if="style == 'Reading/Writing'">
        <!-- Content for Report 12 -->
        <div class="  ">
            <h4 class="text-2xl font-bold mb-4">Supporting Reading/Writing Learners in the Classroom</h4>

            <p class="mb-6">As a teacher, understanding the needs of reading/writing learners will help them engage more
                deeply with the material and succeed academically. Here are strategies designed to help reading/writing
                learners thrive in your classroom:</p>

            <div class="row">
                <div class="col-6">

                    <h4 class=" font-bold mb-2">Incorporating Reading/Writing Teaching Methods</h4>
                    <ul class=" pl-5 mb-6">
                        <li><strong>Provide Text-Based Instructions and Resources</strong><br> Reading/writing learners
                            excel when
                            they can engage with written materials. Always provide written instructions, handouts, and
                            reading
                            assignments. Supplement verbal explanations with written resources that the student can
                            refer to
                            later.</li>
                        <li><strong>Encourage Notetaking and Summarising</strong><br> Encourage reading/writing learners
                            to take
                            detailed notes and summarise lessons in their own words. This process helps them internalise
                            the
                            material and gives them a text-based reference to review later. Writing summaries reinforces
                            their
                            learning.</li>
                        <li><strong>Use Written Assessments and Assignments</strong><br> Reading/writing learners
                            perform well in
                            assignments that involve writing, such as essays, reports, and written exams. Incorporate
                            these
                            types of assessments regularly to allow them to express their understanding through writing.
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/Teaching/20.svg'" alt="" />
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/Teaching/21.svg'" alt="" />
                    </div>
                </div>
                <div class="col-6">

                    <h4 class=" font-bold mb-2">Effective Exercises for Reading/Writing Learners</h4>
                    <ul class=" pl-5 mb-6">
                        <li><strong>Written Study Guides and Outlines</strong><br> Create written study guides that
                            break down the
                            material into key points and detailed explanations. Reading/writing learners benefit from
                            having
                            structured, text-based guides that they can use to organise their thoughts and review key
                            concepts.
                        </li>
                        <li><strong>Essay Assignments and Written Projects</strong><br> Assign essays, reports, and
                            writing-based
                            projects that allow reading/writing learners to express their understanding through words.
                            These
                            assignments help them process information more deeply and demonstrate their grasp of the
                            material.
                        </li>
                        <li><strong>Encourage Written Reflections and Journals</strong><br> Incorporating written
                            reflections or
                            journaling activities helps reading/writing learners organise their thoughts. This can be a
                            great
                            way to get them to engage more thoughtfully with the material and reflect on their learning
                            process.
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <h4 class=" font-bold mb-2">Practical Tips for Teachers</h4>
                    <ul class=" pl-5 mb-6">
                        <li><strong>Provide Written Feedback</strong><br> Along with verbal feedback, make sure to
                            provide written
                            feedback on assignments and assessments. Written comments allow reading/writing learners to
                            review
                            your suggestions and incorporate them into their next project.</li>
                        <li><strong>Encourage Independent Reading</strong><br> Recommend additional reading resources
                            related to
                            the subject matter. Reading/writing learners benefit from engaging with supplementary
                            material that
                            allows them to deepen their understanding of a topic through reading.</li>
                        <li><strong>Promote Written Self-Assessments</strong><br> Encourage reading/writing learners to
                            write
                            self-assessments after completing an assignment. This exercise helps them reflect on what
                            they’ve
                            learned, how they approached the task, and where they can improve.</li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/Teaching/20.svg'" alt="" />
                    </div>
                </div>
            </div>





        </div>

    </div>

    <!-- Report 13 Visual _ Auditory Blend-->
    <div v-if="style == 'Visual/Auditory'">
        <!-- Content for Report 13 -->
        <div class="  ">
            <h4 class="text-2xl font-bold mb-4">Supporting Visual and Auditory Learners in the Classroom</h4>

            <p class="mb-6">As a teacher, understanding how to support visual and auditory learners can significantly
                enhance their engagement and academic success. Here are strategies designed to help visual and auditory
                learners thrive in your classroom:</p>

            <div class="row">
                <div class="col-6">
                    <h4 class=" font-bold mb-3">Incorporating Visual and Auditory Teaching Methods</h4>
                    <ul class=" pl-5 mb-6">
                        <li><strong>Use Both Visual Aids and Verbal Explanations</strong><br> These learners benefit
                            from seeing
                            and hearing information. Provide clear verbal explanations paired with visual aids such as
                            diagrams,
                            slides, or videos. This dual approach helps visual and auditory learners process and retain
                            the
                            material more effectively.</li>
                        <li><strong>Engage Students in Discussions with Visuals</strong><br> Encourage verbal
                            participation through
                            group discussions and debates, while also using visual tools like whiteboards, handouts, or
                            slides.
                            This combination allows students to process information through both hearing and seeing,
                            reinforcing
                            their understanding.</li>
                        <li><strong>Provide Access to Audio-Visual Resources</strong><br> Offer students audio-visual
                            resources,
                            such as recorded lectures, podcasts with visual slides, or educational videos. These
                            resources
                            engage both learning styles, allowing students to review material using both their auditory
                            and
                            visual strengths.</li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/Teaching/20.svg'" alt="" />
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/Teaching/21.svg'" alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <h4 class=" font-bold mb-3">Effective Exercises for Visual and Auditory Learners</h4>
                    <ul class=" pl-5 mb-6">
                        <li><strong>Presentations with Visual and Verbal Components</strong><br> Assign presentations
                            where
                            students explain concepts verbally while using visual aids like slides, charts, or diagrams.
                            This
                            reinforces their learning by combining verbal explanations with visual elements.</li>
                        <li><strong>Interactive Q&A Sessions with Visual Summaries</strong><br> Use verbal Q&A sessions
                            to
                            reinforce material and summarise key points visually on the board or handouts. This approach
                            allows
                            students to understand and retain information through both auditory and visual methods.</li>
                        <li><strong>Group Projects Combining Visual and Auditory Elements</strong><br> Assign group
                            projects that
                            require students to collaborate on both verbal discussions and visual elements, such as
                            creating
                            videos, podcasts with visuals, or interactive presentations. This method engages both
                            learning
                            styles and enhances creativity.</li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <h4 class=" font-bold mb-3">Practical Tips for Teachers</h4>
                    <ul class=" pl-5 mb-6">
                        <li><strong>Provide Both Verbal and Written Feedback</strong><br> Combine verbal and written
                            feedback on
                            assignments. Visual learners benefit from seeing written comments, while auditory learners
                            absorb
                            verbal explanations better. Offering feedback in both formats supports their growth.</li>
                        <li><strong>Use Audio-Visual Study Materials</strong><br> Provide study guides that include both
                            visual and
                            auditory elements, such as recorded summaries with accompanying slides or diagrams. This
                            dual
                            approach ensures students can engage with the material through their preferred learning
                            styles.</li>
                        <li><strong>Encourage Group Work with Verbal and Visual Interaction</strong><br> In group
                            activities,
                            encourage students to engage in verbal discussions while using visual aids like charts or
                            mind maps.
                            This encourages collaboration and reinforces their understanding through both auditory and
                            visual
                            inputs.</li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/Teaching/20.svg'" alt="" />
                    </div>
                </div>
            </div>






        </div>

    </div>

    <!-- Report 14 Visual _ Kinesthethic Blend-->
    <div v-if="style == 'Visual/Kinesthethic'">
        <!-- Content for Report 14 -->
        <div class="  ">
            <h4 class="text-2xl font-bold mb-4">Supporting Visual and Kinaesthetic Learners in the Classroom</h4>

            <p class="mb-6">As a teacher, understanding how to support visual and kinaesthetic learners can
                significantly enhance their engagement and academic success. Here are strategies designed to help visual
                and kinaesthetic learners thrive in your classroom:</p>

            <div class="row">
                <div class="col-6">

                    <h4 class=" font-bold mb-4">Incorporating Visual and Kinaesthetic Teaching Methods</h4>
                    <ul class=" pl-5 mb-6">
                        <li><strong>Use Visual Aids Alongside Hands-On Activities</strong><br> Visual and kinaesthetic
                            learners
                            benefit from seeing information and physically interacting with it. Incorporate diagrams,
                            charts,
                            and visual presentations while encouraging students to engage with the material through
                            hands-on
                            tasks like experiments or building models. This blend of visual and physical learning helps
                            them
                            retain concepts more effectively.</li>
                        <li><strong>Engage Students with Interactive Lessons</strong><br> These learners excel when they
                            can
                            actively participate in lessons. Plan activities where students can use physical tools or
                            manipulatives to explore concepts. For example, using props in science lessons or creating
                            3D models
                            in geography can help reinforce abstract ideas through tactile experiences.</li>
                        <li><strong>Provide Opportunities for Movement</strong><br> Kinaesthetic learners need
                            opportunities to
                            move during lessons. Incorporate movement-based activities, such as role-playing or using
                            gestures
                            to represent key concepts. Allowing students to move around, even in small ways, keeps them
                            engaged
                            and helps them process the information more deeply.</li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/Teaching/20.svg'" alt="" />
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/Teaching/21.svg'" alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <h4 class=" font-bold mb-4">Effective Exercises for Visual and Kinaesthetic Learners</h4>
                    <ul class=" pl-5 mb-6">
                        <li><strong>Presentations with Visual and Hands-On Components</strong><br> Assign projects or
                            presentations
                            that involve both visual elements (such as slides or diagrams) and hands-on tasks. This type
                            of
                            project allows students to blend their need for visual learning with physical engagement,
                            reinforcing what they've learned.</li>
                        <li><strong>Interactive Group Projects</strong><br> Organise group projects where students can
                            collaborate
                            on building models, creating posters, or designing interactive displays. This type of
                            learning
                            encourages teamwork while also addressing the need for both visual and hands-on engagement.
                        </li>
                        <li><strong>Simulated Real-World Scenarios</strong><br> Use real-world simulations, like
                            role-playing
                            activities or practical tasks, to help students apply what they’ve learned. Visual learners
                            will
                            benefit from seeing the concept come to life, while kinaesthetic learners will thrive
                            through active
                            participation.</li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <h4 class=" font-bold mb-4">Practical Tips for Teachers</h4>
                    <ul class=" pl-5 mb-6">
                        <li><strong>Provide Visual and Physical Feedback</strong><br> When giving feedback, combine
                            written
                            (visual) and practical (hands-on) responses. For example, if students are working on a
                            project,
                            provide feedback on their visual work (like diagrams or posters) and also suggest
                            improvements on
                            how they physically engage with the material (like constructing models).</li>
                        <li><strong>Use Hands-On Study Materials</strong><br> For revision or homework, provide students
                            with
                            materials they can manipulate, like building kits or 3D puzzles, alongside traditional
                            visual tools
                            like flashcards or diagrams. This helps reinforce learning through both visual and
                            kinaesthetic
                            channels.</li>
                        <li><strong>Incorporate Movement into Lessons</strong><br> Try to integrate short movement
                            breaks or
                            activities into your lessons. Kinaesthetic learners focus better when they can move around,
                            so
                            activities like moving between learning stations or participating in active discussions can
                            help
                            maintain their engagement.</li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/Teaching/20.svg'" alt="" />
                    </div>
                </div>
            </div>





        </div>

    </div>

    <!-- Report 15 Visual _ Reading & Writing-->
    <div v-if="style == 'Visual/Reading/Writing'">
        <!-- Content for Report 15 -->
        <div class="  ">
            <h4 class="text-2xl font-bold mb-4">Supporting Visual and Reading/Writing Learners in the Classroom</h4>

            <p class="mb-6">As a teacher, understanding how to support visual and reading/writing learners can
                significantly enhance their engagement and academic success. Here are strategies designed to help visual
                and reading/writing learners thrive in your classroom:</p>

            <div class="row">
                <div class="col-6">

                    <h4 class=" font-bold mb-4">Incorporating Visual and Reading/Writing Teaching Methods</h4>
                    <ul class="  mb-6">
                        <li><strong>Provide Written and Visual Instructions</strong><br> Always offer written
                            instructions
                            alongside visual aids such as charts, diagrams, or examples. This combination allows visual
                            and
                            reading/writing learners to see the information in different formats, helping them process
                            and
                            retain it more effectively.</li>
                        <li><strong>Encourage Note-Taking with Visual Summaries</strong><br> Visual and reading/writing
                            learners
                            benefit from taking detailed notes and then summarising the material using visual elements
                            like mind
                            maps, flowcharts, or timelines. Encourage students to write down key points and create
                            visual
                            summaries of what they’ve learned to reinforce the material.</li>
                        <li><strong>Incorporate Visuals in Reading Assignments</strong><br> When assigning reading
                            tasks, provide
                            supplemental visual aids such as graphs, illustrations, or charts to help students visualise
                            the
                            material. For example, when studying historical events, timelines and maps can help students
                            organise the information visually while also engaging with written content.</li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/Teaching/20.svg'" alt="" />
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/Teaching/21.svg'" alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <h4 class=" font-bold mb-4">Effective Exercises for Visual and Reading/Writing Learners</h4>
                    <ul class="  mb-6">
                        <li><strong>Combine Written and Visual Study Guides</strong><br> Provide study guides that
                            combine written
                            explanations with visual aids like diagrams or charts. This will help visual and
                            reading/writing
                            learners engage more deeply with the content by seeing and reading the material in different
                            formats.</li>
                        <li><strong>Assign Projects with Written and Visual Components</strong><br> Encourage students
                            to complete
                            projects that include both written and visual components, such as research papers paired
                            with
                            diagrams, infographics, or presentations that blend text with visuals. This allows them to
                            use both
                            of their learning strengths in a meaningful way.</li>
                        <li><strong>Incorporate Written and Visual Feedback</strong><br> When providing feedback, offer
                            written
                            comments alongside visual annotations, like highlighting or marking up diagrams or text.
                            Visual
                            learners benefit from seeing feedback in a clear, organised way, while reading/writing
                            learners
                            appreciate the detailed written explanations.</li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-6">


                    <h4 class=" font-bold mb-4">Practical Tips for Teachers</h4>
                    <ul class=" ">
                        <li><strong>Provide Written and Visual Resources</strong><br> Ensure that students have access
                            to both
                            written and visual materials, such as textbooks, articles, and visual aids like charts or
                            infographics. Encourage them to use these resources together to fully understand the
                            material.</li>
                        <li><strong>Encourage Visual Summaries of Written Content</strong><br> After reading assignments
                            or
                            lessons, ask students to summarise the material visually. This could involve creating
                            flowcharts,
                            diagrams, or mind maps that help them organise and visualise what they’ve read.</li>
                        <li><strong>Use Visual Tools in Written Assignments</strong><br> Allow students to incorporate
                            visual
                            elements like diagrams, tables, or graphs in their written work. This helps them convey
                            complex
                            ideas in a way that aligns with their learning style and reinforces their understanding of
                            the
                            subject matter.</li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/Teaching/20.svg'" alt="" />
                    </div>
                </div>
            </div>




        </div>

    </div>

    <!-- Report 16 Visual-->
    <div v-if="style == 'Visual'">
        <!-- Content for Report 16 -->
        <div class="  ">
            <h4 class="text-2xl font-bold mb-4">Supporting Visual Learners in the Classroom</h4>
            <p class="mb-6">As a teacher, understanding how to effectively support Visual learners can enhance their
                academic performance and engagement. Here’s how you can tailor your teaching methods to best support
                students with a Visual learning style:</p>

            <div class="row">
                <div class="col-6">

                    <h4 class=" font-bold mb-4">Incorporate Visual Teaching Methods</h4>
                    <ul class="  mb-6">
                        <li><strong>Use Visual Aids</strong><br> Integrate diagrams, charts, infographics, and other
                            visual tools
                            into your lessons. Visual aids help Visual learners grasp complex concepts and retain
                            information
                            more effectively. For example, use flowcharts to explain processes or diagrams to illustrate
                            relationships between ideas.</li>
                        <li><strong>Provide Visual Summaries</strong><br> Offer visual summaries of key points during
                            lectures or
                            discussions. Create slides with bullet points, images, and diagrams to highlight important
                            information. This helps Visual learners review and understand the material better.</li>
                        <li><strong>Design Visual Projects</strong><br> Assign projects that allow students to create
                            visual
                            presentations, such as posters, infographics, or multimedia slideshows. These projects
                            enable Visual
                            learners to express their understanding through visual means and reinforce their learning.
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/Teaching/20.svg'" alt="" />
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/Teaching/21.svg'" alt="" />
                    </div>
                </div>
                <div class="col-6">

                    <h4 class=" font-bold mb-4">Effective Exercises for Visual Learners</h4>
                    <ul class="  mb-6">
                        <li><strong>Create Mind Maps</strong><br> Encourage students to develop mind maps to organise
                            their
                            thoughts and understand connections between concepts. Mind maps help Visual learners see the
                            structure of information and make it easier to recall details.</li>
                        <li><strong>Use Interactive Visuals</strong><br> Incorporate interactive visual tools and
                            educational apps
                            into your teaching. Tools like interactive diagrams or virtual whiteboards can enhance
                            engagement
                            and understanding by providing hands-on visual experiences.</li>
                        <li><strong>Develop Visual Study Guides</strong><br> Provide students with visual study guides,
                            including
                            charts, diagrams, and visual outlines. These guides help students review and consolidate
                            their
                            knowledge in a format that suits their learning style.</li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-6">

                    <h4 class=" font-bold mb-4">Practical Tips for Teachers</h4>
                    <ul class="  mb-6">
                        <li><strong>Integrate Visual Elements</strong><br> Regularly include visual elements in your
                            teaching
                            materials and presentations. This helps Visual learners connect with the content and retain
                            information more effectively.</li>
                        <li><strong>Encourage Creative Visual Work</strong><br> Create opportunities for students to
                            engage in
                            creative visual work. Allow them to use visual tools and methods in assignments and projects
                            to
                            express their understanding.</li>
                        <li><strong>Provide Clear Visual Feedback</strong><br> When giving feedback, use visual examples
                            to
                            illustrate points. Provide annotated diagrams or visual guides to help students understand
                            their
                            strengths and areas for improvement.</li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/Teaching/20.svg'" alt="" />
                    </div>
                </div>
            </div>



        </div>

    </div>
    </div>
</template>

<script>
import AssessmentTypes from "@/Layouts/AssessmentTypes.vue";

export default {
    name: "TeacherInsight",
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
h1,
h3,
h4 {
    color: rgb(55 48 163);
}

div.col-6>h4.font-medium,
li>div>h4,
strong,
div.space-y-2>h4.font-medium {
    color: rgb(36, 168, 250);
    font-weight: bold;
    font-size: 19px;
}

ul > li {
    margin-top: 17px;
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
        line-height: 2rem;
    }

    strong{
        font-size: 1rem  !important;
    }

    /* Adjust image container on mobile */
    .col-6 .flex.justify-center.items-center {
        margin: 1rem 0;
    }

    /* Adjust spacing between sections */
    .row + .row {
        margin-top: 1rem;
    }

    img{
        width: 50% !important;
    }

    ul.list-disc {
        padding-left: 1rem;
    }
}
ul{
    padding: 0;
}
</style>
