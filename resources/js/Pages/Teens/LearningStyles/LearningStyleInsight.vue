<template>
     <div class="p-6">
    <div class="space-y-6 mt-4">
        <h2 class="text-center font-bold mb-4">Learning Style Insights</h2>
    </div>
    <!-- Report 1 Auditory -->
    <div v-if="style == 'Auditory'">
        <!-- Content for Report 1 -->
        <div class="p-4">
            <div class="row">
                <h4 class="text-2xl font-bold mb-2">How You Learn Best</h4>
                <p class="mb-4">
                    As an auditory learner, you thrive in environments where you
                    can hear and discuss information. Here’s how you can make
                    the most of your learning style:
                </p>

                <div class="col-6">
                    <ul class="pl-6 mb-4">
                        <li>
                            <strong>Engage in Group Discussions:</strong>
                            Talking through what you’ve learned helps reinforce
                            information in your mind. Join study groups or have
                            discussions with classmates to explore ideas and
                            clarify concepts.
                        </li>
                        <li>
                            <strong>Listen to Audio Resources:</strong> Auditory
                            learners benefit greatly from listening to material.
                            Try listening to audiobooks, podcasts, or recordings
                            of lectures to reinforce what you’re studying.
                        </li>
                        <li>
                            <strong>Read Aloud:</strong> When studying, read
                            your notes or textbooks aloud to yourself. Hearing
                            the information can help you process and understand
                            it more effectively.
                        </li>
                        <li>
                            <strong>Use Mnemonics and Rhymes:</strong> Auditory
                            learners can benefit from creating songs, rhymes, or
                            verbal cues to memorise facts. These techniques help
                            with recalling information during tests or
                            assignments.
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/LSInsight/5.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>

            <div class="row">
                <h4 class="text-2xl font-bold mb-2">
                    Strategies for Enhancing Learning
                </h4>
                <p class="mb-4">
                    To make the most of your auditory learning style, here are
                    some techniques you can use:
                </p>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/LSInsight/6.svg'"
                            alt=""
                        />
                    </div>
                </div>
                <div class="col-6">
                    <ul class="pl-6 mb-4">
                        <li>
                            <strong>Record and Replay Lectures:</strong> If
                            possible, record your lessons or key discussions so
                            you can listen to them later. Re-listening to
                            important sections helps reinforce understanding.
                        </li>
                        <li>
                            <strong>Participate in Oral Presentations:</strong>
                            Auditory learners often excel at speaking. Use
                            presentations, oral reports, or explaining concepts
                            out loud as a way to deepen your understanding.
                        </li>
                        <li>
                            <strong>Engage in Q&A Sessions:</strong> Asking and
                            answering questions out loud helps solidify your
                            grasp on the material. It also allows you to clarify
                            any areas where you’re unsure.
                        </li>
                        <li>
                            <strong>Use Study Apps with Audio Features:</strong>
                            Apps like Quizlet allow you to use audio for
                            flashcards. Hearing the terms and definitions helps
                            you commit them to memory.
                        </li>
                    </ul>
                </div>
            </div>

            <div class="">
                <h4 class="text-2xl font-bold mb-4">
                    Practical Tips for Auditory Learning
                </h4>
                <div class="grid-container gap-10 justify-content-center mb-6">
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500"
                            >Study in a Quiet Space</strong
                        >
                        <br />
                        <br />
                        Since you rely on sound, it’s important to minimise
                        background noise that could distract you. Find a quiet
                        space where you can focus on listening and speaking.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500"
                            >Teach What You Learn</strong
                        >
                        <br />
                        <br />
                        Explaining new concepts to someone else or teaching what
                        you’ve learned out loud helps reinforce the material in
                        your mind.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500"
                            >Use Music (Without Lyrics)</strong
                        >
                        <br />
                        <br />
                        Listening to instrumental or ambient music while
                        studying can help you concentrate without competing with
                        spoken words.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Report 2 Auditory _ Kinesthethic Blend -->
    <div v-if="style == 'Auditory/Kinesthethic'">
        <!-- Content for Report 2 -->
        <div class="p-6 rounded-lg">
            <h4 class="text-2xl font-bold mb-4">How You Learn Best</h4>
            <p class="mb-4">
                As an auditory/kinaesthetic learner, you benefit from a
                combination of hearing information and physically interacting
                with it. Here’s how you can make the most of your learning
                style:
            </p>
            <div class="row">
                <div class="col-6">
                    <ul class="pl-6 mb-4">
                        <li>
                            <strong
                                >Combine Listening with Hands-On
                                Activities:</strong
                            >
                            When studying, listen to explanations or lectures
                            and immediately follow up with hands-on activities.
                            For example, after listening to a lesson on a
                            scientific process, conduct an experiment to apply
                            what you’ve learned.
                        </li>
                        <li>
                            <strong>
                                Use Verbal and Physical Methods
                                Together:</strong
                            >
                            While engaging with auditory materials like podcasts
                            or lectures, incorporate kinaesthetic activities
                            such as drawing diagrams or using physical models.
                            This dual approach helps reinforce your
                            understanding by integrating both sensory inputs.
                        </li>
                        <li>
                            <strong
                                >Create Physical Representations of Auditory
                                Information:</strong
                            >
                            After listening to information, create physical
                            representations such as charts, diagrams, or models.
                            For instance, build a model of a historical event or
                            draw a flowchart of a process you learned about
                            through listening.
                        </li>
                        <li>
                            <strong
                                >Use Audio-Visual Resources for Review:</strong
                            >
                            Utilise resources that combine both auditory and
                            kinaesthetic elements, such as educational videos or
                            interactive simulations. These tools allow you to
                            hear explanations while actively engaging with the
                            material, reinforcing your learning through both
                            methods.
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/LSInsight/5.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>

            <div class="row">
                <h4 class="text-2xl font-bold mb-4">
                    Strategies for Enhancing Learning
                </h4>
                <p class="mb-4">
                    To maximise your blended learning style, here are some
                    additional techniques:
                </p>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/LSInsight/6.svg'"
                            alt=""
                        />
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-4">
                        <h4 class="text-2xl font-bold mb-2">
                            Record and Listen to Explanations While Engaging in
                            Physical Tasks
                        </h4>
                        <p>
                            Record verbal explanations of key concepts and
                            listen to them while participating in hands-on
                            activities. This method allows you to process
                            information through both auditory input and physical
                            engagement.
                        </p>
                    </div>

                    <div class="mb-4">
                        <h4 class="text-2xl font-bold mb-2">
                            Reflect on Learning with Both Methods
                        </h4>
                        <p>
                            After completing a study session, reflect on what
                            you’ve learned by discussing it aloud and then
                            creating physical representations, such as summaries
                            or diagrams. This dual reflection helps solidify
                            your understanding and memory of the material.
                        </p>
                    </div>

                    <div class="mb-4">
                        <h4 class="text-2xl font-bold mb-2">
                            Incorporate Verbal and Physical Feedback
                        </h4>
                        <p>
                            When practising skills or working on projects, seek
                            feedback both verbally and through physical
                            demonstrations. For example, discuss your findings
                            with a peer or mentor and then adjust your physical
                            models based on their input.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <h4 class="text-2xl font-bold mb-4">
                    Practical Tips for Auditory and Kinaesthetic Learning
                </h4>
                <div class="grid-container gap-10 justify-content-center mb-6">
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500"
                            >Use Audiobooks and Physical Notes</strong
                        >
                        <br />
                        <br />
                        Listen to audiobooks or recorded lectures and take
                        physical notes simultaneously. This combination
                        reinforces learning by engaging both auditory and
                        kinaesthetic channels.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500"
                            >Create Hands-On Study Aids</strong
                        >
                        <br />
                        <br />
                        Develop study aids like flashcards or models while
                        listening to educational content. Use these tools to
                        visually and physically interact with the material.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500"
                            >Participate in Role-Playing Activities</strong
                        >
                        <br />
                        <br />
                        Engage in role-playing exercises or simulations related
                        to your studies. This method combines auditory input
                        with physical action, making learning more interactive
                        and effective.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Report 3 Auditory _ Reading & Writing Blend-->
    <div v-if="style == 'Auditory/Reading/Writing'">
        <!-- Content for Report 3 -->
        <div class="p-6 space-y-6">
            <h4 class="text-2xl font-bold text-gray-800">How You Learn Best</h4>
            <p class="">
                As an auditory and reading/writing learner, you process
                information most effectively when you can both listen to
                explanations and reinforce that information through reading and
                writing. Here’s how you can make the most of your learning
                style:
            </p>

            <div class="row">
                <div class="col-6">
                    <ul class="space-y-4">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="font-bold text-gray-800">
                                    Listen First, Then Write
                                </h4>
                                <p class="">
                                    When studying, start by listening to
                                    lectures, discussions, or audio recordings.
                                    Once you’ve absorbed the auditory
                                    information, write down notes or summaries
                                    to further process and retain the material.
                                </p>
                            </div>
                        </li>
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="font-bold text-gray-800">
                                    Use Written Notes to Clarify What You Hear
                                </h4>
                                <p class="">
                                    After listening to a lesson or audio
                                    material, write detailed notes that help
                                    organise the information in a structured
                                    way. Your reading/writing strength allows
                                    you to turn auditory input into clear and
                                    concise written summaries.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/LSInsight/5.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>
            <ul class="">
                <li class="flex items-start space-x-4">
                    <div>
                        <h4 class="font-bold text-gray-800">
                            Read and Reorganise Written Material
                        </h4>
                        <p class="">
                            When studying from textbooks or written materials,
                            reorganise the content by creating outlines,
                            summaries, or charts. This active engagement with
                            the material helps reinforce your understanding.
                        </p>
                    </div>
                </li>
                <li class="flex items-start space-x-4">
                    <div>
                        <h4 class="font-bold text-gray-800">
                            Engage in Discussions to Reinforce Writing
                        </h4>
                        <p class="">
                            Verbal discussions are a great way for you to
                            reinforce what you’ve written. After taking notes or
                            writing summaries, participate in discussions or
                            explain the material to someone else. This allows
                            you to process information through both listening
                            and writing.
                        </p>
                    </div>
                </li>
            </ul>

            <div class="row">
                <h4 class="text-md font-bold text-gray-800">
                    Strategies for Enhancing Learning
                </h4>
                <p class="">
                    To maximise your blended learning style, here are some
                    additional techniques:
                </p>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/LSInsight/6.svg'"
                            alt=""
                        />
                    </div>
                </div>
                <div class="col-6">
                    <ul class="space-y-4">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="font-bold text-gray-800">
                                    Record and Listen to Key Concepts
                                </h4>
                                <p class="">
                                    Record yourself summarising key points from
                                    your written notes or textbook readings.
                                    Listen to these recordings during review
                                    sessions to reinforce the material through
                                    auditory learning.
                                </p>
                            </div>
                        </li>
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="font-bold text-gray-800">
                                    Engage in Verbal and Written Reflection
                                </h4>
                                <p class="">
                                    After completing a study session, reflect on
                                    what you’ve learned by writing a summary and
                                    then discussing it aloud. This combination
                                    of writing and speaking reinforces your
                                    understanding and helps identify any areas
                                    that need clarification.
                                </p>
                            </div>
                        </li>
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="font-bold text-gray-800">
                                    Use Audio Books with Written Notes
                                </h4>
                                <p class="">
                                    Supplement your reading with audiobooks or
                                    podcasts on the same topic. Take notes as
                                    you listen to reinforce the auditory content
                                    through writing. This dual engagement
                                    ensures better comprehension and retention.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <h4 class="text-md font-bold text-gray-800 mb-4">
                    Practical Tips for Auditory and Reading / Writing Learning
                </h4>

                <div class="grid-container gap-10 justify-content-center mb-6">
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500"
                            >Combine Audio and Written Resources</strong
                        >
                        <br />
                        <br />
                        Use a combination of audio recordings and written notes
                        to enhance your learning. For example, listen to
                        recorded lectures while reading along in your textbook.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500"
                            >Explain Concepts Out Loud After Writing</strong
                        >
                        <br />
                        <br />
                        After writing notes, explain the concepts out loud. This
                        practice helps reinforce what you’ve written through
                        auditory processing, making it easier to remember.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500"
                            >Use Written Study Guides with Verbal Review</strong
                        >
                        <br />
                        <br />
                        Create written study guides or outlines, and then
                        verbally review the material with a study partner or by
                        yourself. This helps reinforce learning through both
                        auditory and written channels.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Report 4 Auditory _ Visual Blend-->
    <div v-if="style == 'Auditory/Visual'">
        <!-- Content for Report 4 -->
        <div class="p-6 space-y-6">
            <h4 class="text-2xl font-bold text-gray-800">How You Learn Best</h4>
            <p class="">
                As an auditory and visual learner, you benefit from hearing
                explanations and reinforcing them with visual aids. Here’s how
                you can make the most of your learning style:
            </p>
            <div class="row">
                <div class="col-6">
                    <ul class="space-y-2">
                        <li>
                            <strong class="text-gray-800"
                                >Combine Visual Aids with Listening</strong
                            >: When studying, use visual aids like diagrams,
                            charts, and videos while listening to lectures or
                            explanations. Combining these methods allows you to
                            reinforce the material in two different ways and
                            enhances retention.
                        </li>
                        <li>
                            <strong class="text-gray-800"
                                >Take Notes While Listening to Audio</strong
                            >: Whether you're listening to a lecture, podcast,
                            or discussion, jot down notes to complement what
                            you're hearing. Use symbols, arrows, or charts to
                            visualise the information while reinforcing it
                            through writing.
                        </li>
                        <li>
                            <strong class="text-gray-800"
                                >Engage in Group Discussions with Visual
                                Tools</strong
                            >: Join study groups where you can both discuss
                            topics out loud and use visual aids to explain your
                            ideas. Verbalising concepts helps you process
                            auditory information, while visuals clarify the
                            material for you and others.
                        </li>
                        <li>
                            <strong class="text-gray-800"
                                >Use Videos and Podcasts for Review</strong
                            >: Videos that include visuals and narration, such
                            as educational YouTube channels or podcasts with
                            visuals, are perfect for your learning style. You’ll
                            absorb information better by both watching and
                            listening simultaneously.
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/LSInsight/5.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>

            <div class="row">
                <h4 class="text-md font-bold text-gray-800">
                    Strategies for Enhancing Learning
                </h4>
                <p class="">
                    To maximise your blended learning style, here are some
                    additional techniques:
                </p>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/LSInsight/6.svg'"
                            alt=""
                        />
                    </div>
                </div>
                <div class="col-6">
                    <ul class="space-y-2">
                        <li>
                            <strong class="text-gray-800"
                                >Record Lessons with Visuals</strong
                            >: If possible, record lectures and use visual aids
                            like slides or diagrams during playback. This method
                            helps you review auditory content while reinforcing
                            it with images and written notes.
                        </li>
                        <li>
                            <strong class="text-gray-800"
                                >Create Visual Summaries</strong
                            >: After listening to a lesson or lecture, create
                            visual summaries such as mind maps or diagrams. This
                            will help you better understand and recall the
                            material by seeing it laid out visually after
                            hearing it.
                        </li>
                        <li>
                            <strong class="text-gray-800"
                                >Use Audiobooks with Visual Notes</strong
                            >: When using audiobooks or recorded lectures, keep
                            a notebook nearby to sketch out visual
                            representations of the key points. This combination
                            helps you retain the information and reinforces your
                            understanding.
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <h4 class="text-md font-bold text-gray-800 mb-4">
                    Practical Tips for Auditory and Visual Learning
                </h4>

                <div class="grid-container gap-10 justify-content-center mb-6">
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500"
                            >Read Along While Listening</strong
                        >
                        <br />
                        <br />
                        When studying, try reading along with an audiobook or a
                        lecture. This way, you're both hearing the content and
                        seeing it on the page, reinforcing your understanding of
                        the material through both methods.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500"
                            >Use Audio-Visual Resources</strong
                        >
                        <br />
                        <br />
                        Take advantage of online resources that combine visuals
                        with audio, like videos, TED Talks, or animated
                        educational presentations. These are perfect for
                        reinforcing concepts because they cater to both your
                        visual and auditory strengths.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500"
                            >Repeat Aloud and Draw</strong
                        >
                        <br />
                        <br />
                        After hearing key information, repeat it out loud while
                        sketching visual representations. For example, as you
                        explain a process aloud, draw it out on paper. This
                        technique helps reinforce memory and understanding
                        through both verbal and visual pathways.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Report 5 Kinesthethic _ Auditory Blend-->
    <div v-if="style == 'Kinesthethic/Auditory'">
        <!-- Content for Report 5 -->
        <div class="p-6 space-y-6">
            <h4 class="text-2xl font-bold text-gray-800">How You Learn Best</h4>
            <p class="">
                As a kinaesthetic and auditory learner, you benefit from a
                combination of hearing information and physically interacting
                with it. Here’s how you can make the most of your learning
                style:
            </p>
            <div class="row">
                <div class="col-6">
                    <ul class="space-y-4">
                        <li>
                            <strong class="text-gray-800"
                                >Combine Listening with Hands-On
                                Activities</strong
                            >: When studying, listen to explanations or lectures
                            and immediately follow up with hands-on activities.
                            For example, after listening to a lesson on a
                            scientific process, conduct an experiment to apply
                            what you’ve learned.
                        </li>
                        <li>
                            <strong class="text-gray-800"
                                >Use Verbal and Physical Methods
                                Together</strong
                            >: While engaging with auditory materials like
                            podcasts or lectures, incorporate kinaesthetic
                            activities such as drawing diagrams or using
                            physical models. This dual approach helps reinforce
                            your understanding by integrating both sensory
                            inputs.
                        </li>
                        <li>
                            <strong class="text-gray-800"
                                >Create Physical Representations of Auditory
                                Information</strong
                            >: After listening to information, create physical
                            representations such as charts, diagrams, or models.
                            For instance, build a model of a historical event or
                            draw a flowchart of a process you learned about
                            through listening.
                        </li>
                        <li>
                            <strong class="text-gray-800"
                                >Use Audio-Visual Resources for Review</strong
                            >: Utilise resources that combine both auditory and
                            kinaesthetic elements, such as educational videos or
                            interactive simulations. These tools allow you to
                            hear explanations while actively engaging with the
                            material, reinforcing your learning through both
                            methods.
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/LSInsight/5.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>

            <div class="row">
                <h4 class="text-md font-bold text-gray-800">
                    Strategies for Enhancing Learning
                </h4>
                <p class="">
                    To maximise your blended learning style, here are some
                    additional techniques:
                </p>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/LSInsight/6.svg'"
                            alt=""
                        />
                    </div>
                </div>
                <div class="col-6">
                    <ul class="space-y-4">
                        <li>
                            <strong class="text-gray-800"
                                >Record and Listen to Explanations While
                                Engaging in Physical Tasks</strong
                            >: Record verbal explanations of key concepts and
                            listen to them while participating in hands-on
                            activities. This method allows you to process
                            information through both auditory input and physical
                            engagement.
                        </li>
                        <li>
                            <strong class="text-gray-800"
                                >Reflect on Learning with Both Methods</strong
                            >: After completing a study session, reflect on what
                            you’ve learned by discussing it aloud and then
                            creating physical representations, such as summaries
                            or diagrams. This dual reflection helps solidify
                            your understanding and memory of the material.
                        </li>
                        <li>
                            <strong class="text-gray-800"
                                >Incorporate Verbal and Physical
                                Feedback</strong
                            >: When practising skills or working on projects,
                            seek feedback both verbally and through physical
                            demonstrations. For example, discuss your findings
                            with a peer or mentor and then adjust your physical
                            models based on their input.
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <h4 class="text-md font-bold text-gray-800 mb-4">
                    Practical Tips for Kinaesthetic and Auditory Learning
                </h4>
                <div class="grid-container gap-10 justify-content-center mb-6">
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500"
                            >Use Audiobooks and Physical Notes</strong
                        >
                        <br />
                        <br />
                        Listen to audiobooks or recorded lectures and take
                        physical notes simultaneously. This combination
                        reinforces learning by engaging both auditory and
                        kinaesthetic channels.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500"
                            >Create Hands-On Study Aids</strong
                        >
                        <br />
                        <br />
                        Develop study aids like flashcards or models while
                        listening to educational content. Use these tools to
                        visually and physically interact with the material.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500"
                            >Participate in Role-Playing Activities</strong
                        >
                        <br />
                        <br />
                        Engage in role-playing exercises or simulations related
                        to your studies. This method combines auditory input
                        with physical action, making learning more interactive
                        and effective.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Report 6 Kinesthethic _ Reading & Writing -->
    <div v-if="style == 'Kinesthethic/Reading/Writing'">
        <!-- Content for Report 6 -->
        <div class="p-6 space-y-6">
            <h4 class="text-2xl font-bold text-gray-800">How You Learn Best</h4>
            <p class="">
                As a kinaesthetic and reading/writing learner, you excel when
                you can physically engage with material and then reinforce it by
                reading and writing about it. Here’s how you can make the most
                of your learning style:
            </p>
            <div class="row">
                <div class="col-6">
                    <ul class="space-y-4 ">
                        <li>
                            <strong class="text-gray-800"
                                >Start with Hands-On Activities, Then Write
                                Summaries:</strong
                            >
                            Begin your learning process by engaging in physical
                            activities like experiments, role-playing, or using
                            tactile tools. Afterwards, write detailed summaries
                            or take notes to reinforce your understanding. This
                            helps solidify the concepts you’ve interacted with
                            physically.
                        </li>
                        <li>
                            <strong class="text-gray-800"
                                >Use Movement to Stay Engaged During
                                Reading/Writing Tasks:</strong
                            >
                            When studying from books or writing essays,
                            incorporate movement into your study routine. Stand
                            while you read or take brief movement breaks between
                            writing sessions to keep yourself focused and
                            engaged.
                        </li>
                        <li>
                            <strong class="text-gray-800"
                                >Turn Physical Learning into Written
                                Material:</strong
                            >
                            After completing a hands-on activity, take the time
                            to write about it. This could involve writing a
                            summary, creating an outline, or even drafting a
                            report. Putting physical learning into written form
                            reinforces your comprehension.
                        </li>
                        <li>
                            <strong class="text-gray-800"
                                >Review Written Material Using Kinaesthetic
                                Methods:</strong
                            >
                            After reading textbooks or writing notes, engage
                            with the material physically by using tools like
                            flashcards, building diagrams, or moving around
                            while studying. This reinforces the information in a
                            way that aligns with your kinaesthetic learning
                            preferences.
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/LSInsight/5.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>

            <div class="row">
                <h4 class="text-md font-bold text-gray-800">
                    Strategies for Enhancing Learning
                </h4>
                <p class="">
                    To maximise your blended learning style, here are some
                    additional techniques:
                </p>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/LSInsight/6.svg'"
                            alt=""
                        />
                    </div>
                </div>
                <div class="col-6">
                    <ul class="space-y-4 ">
                        <li>
                            <strong class="text-gray-800"
                                >Take Notes After Physical Activities:</strong
                            >
                            After completing a hands-on activity, immediately
                            write down key insights. This reinforces the
                            physical learning experience by allowing you to
                            reflect on what you’ve done and organise the
                            information in written form.
                        </li>
                        <li>
                            <strong class="text-gray-800"
                                >Incorporate Physical Movement During Writing
                                Sessions:</strong
                            >
                            When writing summaries or notes, take short breaks
                            to engage in physical activity. Stretching or
                            walking around between writing tasks helps maintain
                            focus and keeps your kinaesthetic learning style
                            active.
                        </li>
                        <li>
                            <strong class="text-gray-800"
                                >Use Tools That Combine Writing and
                                Movement:</strong
                            >
                            Use tools that allow you to combine writing and
                            physical engagement, such as writing on a whiteboard
                            or using tactile study aids like moveable
                            flashcards. This dual approach caters to both your
                            kinaesthetic and reading/writing preferences.
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <h4 class="text-md font-bold text-gray-800 mb-4">
                    Practical Tips for Kinaesthetic and Reading/Writing Learning
                </h4>
                <div class="grid-container gap-10 justify-content-center mb-6">
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500"
                            >Combine Writing with Physical Movement</strong
                        >
                        <br />
                        <br />
                        When writing essays or taking notes, alternate between
                        sitting and standing or take frequent movement breaks to
                        keep yourself energised and focused.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500"
                            >Use Physical Models Alongside Written Notes</strong
                        >
                        <br />
                        <br />
                        Incorporate physical models or diagrams into your study
                        routine while reviewing written notes. This helps
                        connect the physical learning experience with written
                        material.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500"
                            >Alternate Between Writing and Doing</strong
                        >
                        <br />
                        <br />
                        After writing about a topic, engage in a hands-on
                        activity related to the material. This reinforces your
                        learning by helping you experience the concepts
                        physically after writing about them.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Report 7 Kinesthethic _ Visual Blend-->
    <div v-if="style == 'Kinesthethic/Visual'">
        <!-- Content for Report 7 -->
        <div class="p-6 space-y-6">
            <h4 class="text-2xl font-bold text-gray-800">How You Learn Best</h4>
            <p class="">
                As a kinaesthetic and visual learner, you thrive when you can
                physically interact with material and use visual aids to
                reinforce your understanding. Here’s how you can make the most
                of your learning style:
            </p>
            <div class="row">
                <div class="col-6">
                    <ul class="space-y-2 ">
                        <li>
                            <strong class="text-gray-800"
                                >Combine Visual Aids with Hands-On
                                Activities:</strong
                            >
                            You learn best when you can see information and
                            engage with it physically. For example, using
                            diagrams or charts alongside physical tasks like
                            building models or conducting experiments helps you
                            reinforce your understanding of complex topics.
                        </li>
                        <li>
                            <strong class="text-gray-800"
                                >Create Visual Summaries After Hands-On
                                Learning:</strong
                            >
                            After engaging in a hands-on activity, like a lab
                            experiment or a project, create visual summaries
                            such as sketches, mind maps, or diagrams. This
                            process helps you connect the physical experience
                            with the visual representation, solidifying what
                            you've learned.
                        </li>
                        <li>
                            <strong class="text-gray-800"
                                >Engage in Movement-Based Learning:</strong
                            >
                            Incorporating movement into your study routine helps
                            keep you engaged and focused. For example, pacing
                            while reviewing flashcards or using hand gestures to
                            explain concepts physically can enhance your memory
                            retention.
                        </li>
                        <li>
                            <strong class="text-gray-800"
                                >Learn Through Real-World Applications:</strong
                            >
                            You thrive when you can take abstract concepts and
                            apply them to real-life situations. Whether it's
                            using math concepts in building something or
                            applying scientific principles in experiments,
                            physical interaction combined with visual tools
                            helps you grasp the material more effectively.
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/LSInsight/5.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>

            <div class="row">
                <h4 class="text-md font-bold text-gray-800">
                    Strategies for Enhancing Learning
                </h4>
                <p class="">
                    To maximise your blended learning style, here are some
                    additional techniques:
                </p>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/LSInsight/6.svg'"
                            alt=""
                        />
                    </div>
                </div>
                <div class="col-6">
                    <ul class="space-y-2 ">
                        <li>
                            <strong class="text-gray-800"
                                >Combine Physical Manipulation with Visual
                                Learning:</strong
                            >
                            Use models, tools, or physical objects to manipulate
                            while you visualise concepts through diagrams or
                            written materials. For example, when learning about
                            geometry, use physical shapes alongside diagrams to
                            understand how they fit together.
                        </li>
                        <li>
                            <strong class="text-gray-800"
                                >Use Interactive Tools:</strong
                            >
                            Take advantage of interactive tools like virtual
                            labs or software that allow you to engage physically
                            while learning visually. Apps that include both
                            simulations and visuals, like Google Earth for
                            geography or 3D anatomy apps for biology, can
                            enhance your learning experience.
                        </li>
                        <li>
                            <strong class="text-gray-800"
                                >Visualise Concepts with Physical
                                Movement:</strong
                            >
                            When trying to memorise steps in a process or
                            sequence, incorporate body movement. For instance,
                            while learning a scientific process, act it out
                            through hand gestures or movement. This combination
                            of movement and visualisation deepens your
                            understanding of complex material.
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <h4 class="text-md font-bold text-gray-800 mb-4">
                    Practical Tips for Kinaesthetic and Visual Learning
                </h4>
                <div class="grid-container gap-10 justify-content-center mb-6">
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500"
                            >Use Flashcards with Physical Manipulation</strong
                        >
                        <br />
                        <br />
                        Create flashcards with visual diagrams or notes and
                        review them while incorporating movement—like pacing or
                        tapping your fingers. Physically interacting with the
                        cards while seeing the content helps reinforce the
                        information.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500"
                            >Apply Concepts in Real Life</strong
                        >
                        <br />
                        <br />
                        Whenever possible, take the concepts you’ve learned and
                        apply them in a hands-on way. For example, if you’re
                        learning about measurements in math, try applying those
                        measurements to a real-life scenario like cooking or
                        building something.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500"
                            >Use Interactive Learning Tools</strong
                        >
                        <br />
                        <br />
                        Find apps or tools that offer interactive, hands-on
                        experiences. Virtual simulations, 3D models, and games
                        can allow you to engage with the material physically
                        while visualising concepts.
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
                <h1 class="text-2xl font-bold text-gray-800">
                    How You Learn Best
                </h1>
                <p class="">
                    As a kinaesthetic learner, you thrive in environments where
                    you can move, engage physically, and learn through hands-on
                    experiences. Here’s how you can make the most of your
                    learning style:
                </p>
                <div class="col-6">
                    <div class="mb-4">
                        <h4 class="text-2xl font-bold mb-2">
                            Engage in Hands-On Activities
                        </h4>
                        <p class="">
                            Whenever possible, participate in projects, labs, or
                            activities that involve building, experimenting, or
                            manipulating objects. Physical interaction helps you
                            absorb and retain information more effectively.
                        </p>
                    </div>

                    <div class="mb-4">
                        <h4 class="text-2xl font-bold text-gray-800">
                            Incorporate Movement into Your Study Routine
                        </h4>
                        <p class="">
                            Don’t feel tied to sitting still while studying.
                            Take frequent breaks, walk around while reviewing
                            notes, or use physical gestures to act out key
                            concepts. Movement keeps you focused and improves
                            information retention.
                        </p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/LSInsight/5.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>
            <div class="mb-4">
                <h4 class="text-2xl font-bold text-gray-800">
                    Learn Through Real-World Experiences
                </h4>
                <p class="">
                    Apply what you’re learning to real-world situations whenever
                    possible. For example, if you’re studying science,
                    experiment with hands-on projects or fieldwork. If it’s
                    history, act out events or visit historical sites.
                    Experiencing things first hand helps deepen your
                    understanding.
                </p>
            </div>
            <div class="mb-4">
                <h4 class="text-2xl font-bold text-gray-800">
                    Use Tools and Models
                </h4>
                <p class="">
                    Visualise concepts by using models, props, or creating
                    diagrams that you can interact with. Physically moving
                    pieces around or using tools that allow for tactile
                    engagement helps reinforce ideas in your mind.
                </p>
            </div>

            <div class="row">
                <h1 class="text-2xl font-bold text-gray-800">
                    Strategies for Enhancing Learning
                </h1>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/LSInsight/6.svg'"
                            alt=""
                        />
                    </div>
                </div>
                <div class="col-6">

                    <p class="">
                        To make the most of your kinaesthetic learning style, here are some techniques you can use:

                    </p>
                    <div class="mb-4">
                        <h4 class="text-2xl font-bold text-gray-800">
                            Act It Out
                        </h4>
                        <p class="">
                            If you’re studying a complex concept, try acting it
                            out or using gestures to represent key points. For
                            example, if you’re studying biology, walk through
                            the steps of a process, or use objects to simulate
                            scientific experiments.
                        </p>
                    </div>

                    <div class="mb-4">
                        <h4 class="text-2xl font-bold text-gray-800">
                            Incorporate Physical Tools
                        </h4>
                        <p class="">
                            Utilise study aids like flashcards, models, or
                            building kits to help you engage with the material.
                            The physical interaction helps anchor the
                            information in your memory.
                        </p>
                    </div>
                </div>
            </div>
            <div class="mb-4">
                <h4 class="text-2xl font-bold text-gray-800">
                    Take Regular Movement Breaks
                </h4>
                <p class="">
                    Break up study sessions by getting up and moving. Use short
                    breaks to stretch, walk, or do light exercises. Movement
                    helps refresh your focus and prevents mental fatigue.
                </p>
            </div>

            <div class="mb-4">
                <h4 class="text-2xl font-bold text-gray-800">
                    Engage in Group Projects or Workshops
                </h4>
                <p class="">
                    Group work, workshops, and interactive learning environments
                    are ideal for kinaesthetic learners. Collaborate with others
                    in projects that require physical engagement, such as
                    building, experimenting, or role-playing.
                </p>
            </div>

            <div class="row">
                <h1 class="text-2xl font-bold text-gray-800 mb-4">
                    Practical Tips for Kinaesthetic Learning
                </h1>
                <div class="grid-container gap-10 justify-content-center mb-6">
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500"
                            >Study Actively</strong
                        >
                        <br />
                        <br />
                        Keep your hands busy while learning by using objects
                        like fidget toys or stress balls. This helps maintain
                        focus during lectures or reading sessions. You can also
                        use flashcards or other physical tools to keep your mind
                        engaged with the material.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500"
                            >Break Down Study Sessions</strong
                        >
                        <br />
                        <br />
                        Take regular breaks to move around or stretch. Breaking
                        up long study sessions with movement helps reset your
                        focus and keeps you from feeling restless.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500"
                            >Use Role-Playing or Simulations</strong
                        >
                        <br />
                        <br />
                        Act out scenarios or use simulations to deepen your
                        understanding of complex concepts. For example, if
                        you're studying history, reenact significant events, or
                        in science, perform small experiments to bring concepts
                        to life.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Report 9 Reading & Writing _ Auditory Blend -->
    <div v-if="style == 'Reading/Writing/Auditory'">
        <!-- Content for Report 9 -->
        <div class="space-y-4 p-4">
            <h1 class="text-2xl font-bold">How You Learn Best</h1>
            <p>
                As a reading/writing and auditory learner, you absorb
                information most effectively when you can first engage with
                written materials and then reinforce that knowledge by
                listening. Here’s how you can make the most of your learning
                style:
            </p>
            <div class="row">
                <div class="col-6">
                    <ul class="pl-5 space-y-1">
                        <li>
                            <strong>Listen First, Then Write:</strong> When
                            studying, start by listening to lectures,
                            discussions, or audio recordings. Once you’ve
                            absorbed the auditory information, write down notes
                            or summaries to further process and retain the
                            material.
                        </li>
                        <li>
                            <strong
                                >Use Written Notes to Clarify What You
                                Hear:</strong
                            >
                            After listening to a lesson or audio material, write
                            detailed notes that help organise the information in
                            a structured way. Your reading/writing strength
                            allows you to turn auditory input into clear and
                            concise written summaries.
                        </li>
                        <li>
                            <strong
                                >Read and Reorganise Written Material:</strong
                            >
                            When studying from textbooks or written materials,
                            reorganise the content by creating outlines,
                            summaries, or charts. This active engagement with
                            the material helps reinforce your understanding.
                        </li>
                        <li>
                            <strong
                                >Engage in Discussions to Reinforce
                                Writing:</strong
                            >
                            Verbal discussions are a great way for you to
                            reinforce what you’ve written. After taking notes or
                            writing summaries, participate in discussions or
                            explain the material to someone else. This allows
                            you to process information through both listening
                            and writing.
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/LSInsight/5.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>

            <div class="row">
                <h4 class="text-2xl font-bold">
                    Strategies for Enhancing Learning
                </h4>
                <p>
                    To maximise your blended learning style, here are some additional techniques:

                    </p>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/LSInsight/6.svg'"
                            alt=""
                        />
                    </div>
                </div>
                <div class="col-6">
                    <div>
                        <ul class="pl-5 space-y-1">
                            <li>
                                <strong
                                    >Record and Listen to Key Concepts:</strong
                                >
                                Record yourself summarising key points from your
                                written notes or textbook readings. Listen to
                                these recordings during review sessions to
                                reinforce the material through auditory
                                learning.
                            </li>
                            <li>
                                <strong
                                    >Engage in Verbal and Written
                                    Reflection:</strong
                                >
                                After completing a study session, reflect on
                                what you’ve learned by writing a summary and
                                then discussing it aloud. This combination of
                                writing and speaking reinforces your
                                understanding and helps identify any areas that
                                need clarification.
                            </li>
                            <li>
                                <strong
                                    >Use Audio Books with Written Notes:</strong
                                >
                                Supplement your reading with audiobooks or
                                podcasts on the same topic. Take notes as you
                                listen to reinforce the auditory content through
                                writing. This dual engagement ensures better
                                comprehension and retention.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <h4 class="text-2xl font-bold mb-4">
                    Practical Tips for Reading / Writing and Auditory Learning
                </h4>
                <div class="grid-container gap-10 justify-content-center mb-6">
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500"
                            >Combine Audio and Written Resources</strong
                        >
                        <br />
                        <br />
                        Use a combination of audio recordings and written notes
                        to enhance your learning. For example, listen to
                        recorded lectures while reading along in your textbook.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500"
                            >Explain Concepts Out Loud After Writing</strong
                        >
                        <br />
                        <br />
                        After writing notes, explain the concepts out loud. This
                        practice helps reinforce what you’ve written through
                        auditory processing, making it easier to remember.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500"
                            >Use Written Study Guides with Verbal Review</strong
                        >
                        <br />
                        <br />
                        Create written study guides or outlines, and then
                        verbally review the material with a study partner or by
                        yourself. This helps reinforce learning through both
                        auditory and written channels.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Report 10 Reading & Writing _ Kinesthethic Blend-->
    <div v-if="style == 'Reading/Writing/Kinesthethic'">
        <!-- Content for Report 10 -->
        <div class="p-6">
            <h4 class="text-2xl font-bold mb-4">How You Learn Best</h4>
            <p class="mb-4">
                As a reading/writing and kinaesthetic learner, you excel when
                you can physically engage with material and then reinforce it by
                reading and writing about it. Here’s how you can make the most
                of your learning style:
            </p>
            <div class="row">
                <div class="col-6">
                    <ul class="pl-5 mb-6">
                        <li>
                            <strong
                                >Start with Hands-On Activities, Then Write
                                Summaries:</strong
                            >
                            Begin your learning process by engaging in physical
                            activities like experiments, role-playing, or using
                            tactile tools. Afterwards, write detailed summaries
                            or take notes to reinforce your understanding. This
                            helps solidify the concepts you’ve interacted with
                            physically.
                        </li>
                        <li>
                            <strong
                                >Use Movement to Stay Engaged During
                                Reading/Writing Tasks:</strong
                            >
                            When studying from books or writing essays,
                            incorporate movement into your study routine. Stand
                            while you read or take brief movement breaks between
                            writing sessions to keep yourself focused and
                            engaged.
                        </li>
                        <li>
                            <strong
                                >Turn Physical Learning into Written
                                Material:</strong
                            >
                            After completing a hands-on activity, take the time
                            to write about it. This could involve writing a
                            summary, creating an outline, or even drafting a
                            report. Putting physical learning into written form
                            reinforces your comprehension.
                        </li>
                        <li>
                            <strong
                                >Review Written Material Using Kinaesthetic
                                Methods:</strong
                            >
                            After reading textbooks or writing notes, engage
                            with the material physically by using tools like
                            flashcards, building diagrams, or moving around
                            while studying. This reinforces the information in a
                            way that aligns with your kinaesthetic learning
                            preferences.
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/LSInsight/5.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>

            <div class="row">
                <h4 class="text-md font-bold mt-6 mb-2">
                    Strategies for Enhancing Learning
                </h4>
                <p class="mb-4">
                    To maximise your blended learning style, here are some
                    additional techniques:
                </p>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/LSInsight/6.svg'"
                            alt=""
                        />
                    </div>
                </div>
                <div class="col-6">
                    <ul class="pl-5 mb-6">
                        <li>
                            <strong
                                >Take Notes After Physical Activities:</strong
                            >
                            After completing a hands-on activity, immediately
                            write down key insights. This reinforces the
                            physical learning experience by allowing you to
                            reflect on what you’ve done and organise the
                            information in written form.
                        </li>
                        <li>
                            <strong
                                >Incorporate Physical Movement During Writing
                                Sessions:</strong
                            >
                            When writing summaries or notes, take short breaks
                            to engage in physical activity. Stretching or
                            walking around between writing tasks helps maintain
                            focus and keeps your kinaesthetic learning style
                            active.
                        </li>
                        <li>
                            <strong
                                >Use Tools That Combine Writing and
                                Movement:</strong
                            >
                            Use tools that allow you to combine writing and
                            physical engagement, such as writing on a whiteboard
                            or using tactile study aids like moveable
                            flashcards. This dual approach caters to both your
                            kinaesthetic and reading/writing preferences.
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <h4 class="text-md font-bold mt-6 mb-4">
                    Practical Tips for Reading/Writing and Kinaesthetic Learning
                </h4>
                <div class="grid-container gap-10 justify-content-center mb-6">
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500"
                            >Combine Writing with Physical Movement</strong
                        >
                        <br />
                        <br />
                        When writing essays or taking notes, alternate between
                        sitting and standing or take frequent movement breaks to
                        keep yourself energised and focused.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500"
                            >Use Physical Models Alongside Written Notes</strong
                        >
                        <br />
                        <br />
                        Incorporate physical models or diagrams into your study
                        routine while reviewing written notes. This helps
                        connect the physical learning experience with written
                        material.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500"
                            >Alternate Between Writing and Doing</strong
                        >
                        <br />
                        <br />
                        After writing about a topic, engage in a hands-on
                        activity related to the material. This reinforces your
                        learning by helping you experience the concepts
                        physically after writing about them.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Report 11 Reading & Writing _ Visual Blend -->
    <div v-if="style == 'Reading/Writing/Visual'">
        <!-- Content for Report 11 -->
        <div class="p-6">
            <h4 class="text-2xl font-bold mb-4">How You Learn Best</h4>

            <p class="mb-6">
                As a blended reading/writing and visual learner, you excel when
                you can both see and interact with written material. Here’s how
                you can make the most of your learning style:
            </p>
            <div class="row">
                <div class="col-6">
                    <ul class="pl-5 mb-6">
                        <li>
                            <strong
                                >Combine Visual Aids with Written Notes:</strong
                            >
                            You thrive when visual information is paired with
                            written notes. For example, using diagrams, charts,
                            or graphs while simultaneously taking notes helps
                            reinforce concepts. This dual method allows you to
                            process and retain information more effectively.
                        </li>
                        <li>
                            <strong
                                >Create Visual Summaries of Written
                                Material:</strong
                            >
                            After reading a textbook, article, or written
                            assignment, create visual summaries such as mind
                            maps, flowcharts, or diagrams. This allows you to
                            visualise key ideas and makes it easier to recall
                            information when studying.
                        </li>
                        <li>
                            <strong
                                >Take Detailed Written Notes Alongside
                                Visuals:</strong
                            >
                            While engaging with visual aids, take detailed
                            written notes. This helps you clarify your thoughts
                            and organise information in a structured way.
                            Writing down key points in your own words solidifies
                            your understanding.
                        </li>
                        <li>
                            <strong
                                >Read and Write to Reinforce Visual
                                Learning:</strong
                            >
                            After interacting with visual material, such as
                            presentations or videos, reinforce what you’ve
                            learned by reading related texts or writing
                            summaries. This layered approach helps you gain a
                            deeper understanding of the subject.
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/LSInsight/5.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>

            <div class="row">
                <h3 class="text-2xl font-bold mb-4">
                    Strategies for Enhancing Learning
                </h3>

                <p class="mb-6">
                    To maximise your blended learning style, here are some
                    additional techniques:
                </p>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/LSInsight/6.svg'"
                            alt=""
                        />
                    </div>
                </div>
                <div class="col-6">
                    <ul class="pl-5 mb-6">
                        <li>
                            <strong
                                >Use Visuals to Support Written
                                Assignments:</strong
                            >
                            When working on essays or reports, incorporate
                            visual aids such as charts or diagrams to illustrate
                            your points. This not only makes your writing more
                            engaging but also helps you grasp the material more
                            thoroughly.
                        </li>
                        <li>
                            <strong
                                >Create Study Guides with Visual and Written
                                Elements:</strong
                            >
                            When preparing for exams, create study guides that
                            combine both written explanations and visual
                            summaries. Use tools like bullet points, colour-coded
                            sections, and diagrams to organise the material
                            effectively.
                        </li>
                        <li>
                            <strong
                                >Engage in Writing-Based Study Sessions:</strong
                            >
                            After reviewing visual content, engage in writing
                            exercises such as summarising what you’ve learned or
                            answering questions in written form. This helps
                            connect the visual material with written concepts
                            for a deeper understanding.
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <h3 class="text-2xl font-bold mb-4">
                    Practical Tips for Reading/Writing and Visual Learning
                </h3>
                <div class="grid-container gap-10 justify-content-center mb-6">
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500"
                            >Summarise Texts Using Visual Tools</strong
                        >
                        <br />
                        <br />
                        After reading a chapter or article, summarise the main
                        points using mind maps or flowcharts. This helps
                        organise information visually, making it easier to
                        recall during study sessions.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500"
                            >Break Down Written Material with Visual
                            Aids</strong
                        >
                        <br />
                        <br />
                        For lengthy or complex reading material, use visuals
                        like timelines or infographics to break down the
                        information into manageable parts. This helps you see
                        the structure of the material and enhances
                        understanding.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500"
                            >Review with Written Summaries</strong
                        >
                        <br />
                        <br />
                        After engaging with visual content, write a detailed
                        summary of what you’ve learned. This writing exercise
                        reinforces the material and ensures that you’ve
                        understood it clearly.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Report 12 Reading & Writing-->
    <div v-if="style == 'Reading/Writing'">
        <!-- Content for Report 12 -->
        <div class="p-6">
            <h4 class="text-2xl font-bold mb-4">How You Learn Best</h4>

            <p class="mb-6">
                As a reading/writing learner, you thrive in environments where
                you can read, write, and interact with text-based materials.
                Here’s how to make the most of your learning style:
            </p>
            <div class="row">
                <div class="col-6">
                    <ul class="pl-5 mb-6">
                        <li>
                            <strong>Engage in Reading and Writing:</strong> You
                            process information best by reading textbooks,
                            articles, or notes. After reading, write summaries,
                            create outlines, or make lists to reinforce your
                            understanding. Organising information through
                            written methods helps solidify concepts in your
                            mind.
                        </li>
                        <li>
                            <strong>Use Note-Taking Techniques:</strong> While
                            reading, take detailed notes and organise them
                            clearly. Summarise each section in your own words
                            and use bullet points or numbered lists to keep
                            information structured. You can also re-write or
                            reorganise your notes to improve retention.
                        </li>
                        <li>
                            <strong>Reread and Review Written Material:</strong>
                            Reviewing written material multiple times helps
                            reinforce your understanding. Go back over your
                            notes, textbooks, or essays, and highlight key
                            concepts. Repetition is crucial for mastering
                            complex subjects.
                        </li>
                        <li>
                            <strong>Write Out Practice Answers:</strong> Before
                            an exam or assignment, practice by writing out
                            answers to potential questions. This allows you to
                            rehearse your understanding of the subject and
                            ensures you’re prepared to express your knowledge in
                            written form.
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/LSInsight/5.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>

            <div class="row">
                <h4 class="text-2xl font-bold mb-4">
                    Strategies for Enhancing Learning
                </h4>

                <p class="mb-6">
                    To maximise your reading/writing learning style, here are
                    some additional techniques:
                </p>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/LSInsight/6.svg'"
                            alt=""
                        />
                    </div>
                </div>
                <div class="col-6">
                    <ul class="pl-5 mb-6">
                        <li>
                            <strong>Create Written Summaries:</strong> After
                            learning a new topic, summarise what you've learned
                            in your own words. This reinforces the material and
                            makes it easier to recall later.
                        </li>
                        <li>
                            <strong
                                >Develop a Structured Study Schedule:</strong
                            >
                            Organise your study routine by breaking it into
                            sections, such as reading, note-taking, and
                            reviewing. Structure your time to ensure you’re
                            balancing both learning and review.
                        </li>
                        <li>
                            <strong
                                >Use Written Study Guides and Essays:</strong
                            >
                            Write essays, summaries, or detailed outlines as a
                            way to understand material more deeply. Use these
                            study guides to review before exams, ensuring that
                            you grasp key concepts.
                        </li>
                        <li>
                            <strong>Incorporate Written Practice Tests:</strong>
                            Practice writing answers under timed conditions.
                            This not only prepares you for exams but also
                            ensures you can recall information effectively when
                            needed.
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <h4 class="text-2xl font-bold mb-4">
                    Practical Tips for Reading/Writing Learners
                </h4>
                <div class="grid-container gap-10 justify-content-center mb-6">
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500"
                            >Summarise in Your Own Words</strong
                        >
                        <br />
                        <br />
                        After reading, write summaries of the key points in your
                        own words. This technique ensures that you’ve truly
                        understood the material and helps reinforce retention.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500"
                            >Re-Write Notes After Class</strong
                        >
                        <br />
                        <br />
                        After each class or study session, re-write your notes
                        in a more organised format. This gives you an
                        opportunity to review what you’ve learned and create a
                        clean, structured set of notes for future reference.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500"
                            >Use Reading and Writing as a Study Tool</strong
                        >
                        <br />
                        <br />
                        When preparing for exams, rely on reading and writing as
                        your primary tools. Review textbooks and notes, then
                        write summaries, essays, or practice answers to
                        reinforce your understanding of the material.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Report 13 Visual _ Auditory Blend-->
    <div v-if="style == 'Visual/Auditory'">
        <!-- Content for Report 13 -->
        <div class="p-6">
            <h4 class="text-2xl font-bold mb-4">How You Learn Best</h4>

            <p class="mb-6">
                As a visual and auditory learner, you benefit from both seeing
                information and hearing it explained. Here’s how you can make
                the most of your learning style:
            </p>
            <div class="row">
                <div class="col-6">
                    <ul class="pl-5 mb-6">
                        <li>
                            <strong>Combine Visual Aids with Listening:</strong>
                            When studying, use visual aids like diagrams,
                            charts, and videos while listening to lectures or
                            explanations. Combining these methods allows you to
                            reinforce the material in two different ways and
                            enhances retention.
                        </li>
                        <li>
                            <strong
                                >Take Notes While Listening to Audio:</strong
                            >
                            Whether you're listening to a lecture, podcast, or
                            discussion, jot down notes to complement what you're
                            hearing. Use symbols, arrows, or charts to visualise
                            the information while reinforcing it through
                            writing.
                        </li>
                        <li>
                            <strong
                                >Engage in Group Discussions with Visual
                                Tools:</strong
                            >
                            Join study groups where you can both discuss topics
                            out loud and use visual aids to explain your ideas.
                            Verbalising concepts helps you process auditory
                            information, while visuals clarify the material for
                            you and others.
                        </li>
                        <li>
                            <strong>Use Videos and Podcasts for Review:</strong>
                            Videos that include visuals and narration, such as
                            educational YouTube channels or podcasts with
                            visuals, are perfect for your learning style. You’ll
                            absorb information better by both watching and
                            listening simultaneously.
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/LSInsight/5.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>

            <div class="row">
                <h4 class="text-md font-bold mb-4">
                    Strategies for Enhancing Learning
                </h4>

                <p class="mb-6">
                    To maximise your blended learning style, here are some
                    additional techniques:
                </p>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/LSInsight/6.svg'"
                            alt=""
                        />
                    </div>
                </div>
                <div class="col-6">
                    <ul class="pl-5 mb-6">
                        <li>
                            <strong>Record Lessons with Visuals:</strong> If
                            possible, record lectures and use visual aids like
                            slides or diagrams during playback. This method
                            helps you review auditory content while reinforcing
                            it with images and written notes.
                        </li>
                        <li>
                            <strong>Create Visual Summaries:</strong> After
                            listening to a lesson or lecture, create visual
                            summaries such as mind maps or diagrams. This will
                            help you better understand and recall the material
                            by seeing it laid out visually after hearing it.
                        </li>
                        <li>
                            <strong>Use Audiobooks with Visual Notes:</strong>
                            When using audiobooks or recorded lectures, keep a
                            notebook nearby to sketch out visual representations
                            of the key points. This combination helps you retain
                            the information and reinforces your understanding.
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <h4 class="text-md font-bold mb-4">
                    Practical Tips for Visual and Auditory Learning
                </h4>
                <div class="grid-container gap-10 justify-content-center mb-6">
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500"
                            >Read Along While Listening</strong
                        >
                        <br />
                        <br />
                        When studying, try reading along with an audiobook or a
                        lecture. This way, you're both hearing the content and
                        seeing it on the page, reinforcing your understanding of
                        the material through both methods.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500"
                            >Use Audio-Visual Resources</strong
                        >
                        <br />
                        <br />
                        Take advantage of online resources that combine visuals
                        with audio, like videos, TED Talks, or animated
                        educational presentations. These are perfect for
                        reinforcing concepts because they cater to both your
                        visual and auditory strengths.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500"
                            >Repeat Aloud and Draw</strong
                        >
                        <br />
                        <br />
                        After hearing key information, repeat it out loud while
                        sketching visual representations. For example, as you
                        explain a process aloud, draw it out on paper. This
                        technique helps reinforce memory and understanding
                        through both verbal and visual pathways.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Report 14 Visual _ Kinesthethic Blend-->
    <div v-if="style == 'Visual/Kinesthethic'">
        <!-- Content for Report 14 -->
        <div class="p-6">
            <h4 class="text-2xl font-bold mb-4">How You Learn Best</h4>

            <p class="mb-6">
                As a visual and kinaesthetic learner, you benefit from seeing
                information and interacting with it physically. Here’s how you
                can make the most of your learning style:
            </p>
            <div class="row">
                <div class="col-6">
                    <ul class="pl-5 mb-6">
                        <li>
                            <strong
                                >Combine Visual Aids with Hands-On
                                Activities:</strong
                            >
                            You learn best when you can see information and
                            engage with it physically. For example, using
                            diagrams or charts alongside physical tasks like
                            building models or conducting experiments helps you
                            reinforce your understanding of complex topics.
                        </li>
                        <li>
                            <strong
                                >Create Visual Summaries After Hands-On
                                Learning:</strong
                            >
                            After engaging in a hands-on activity, like a lab
                            experiment or a project, create visual summaries
                            such as sketches, mind maps, or diagrams. This
                            process helps you connect the physical experience
                            with the visual representation, solidifying what
                            you've learned.
                        </li>
                        <li>
                            <strong>Engage in Movement-Based Learning:</strong>
                            Incorporating movement into your study routine helps
                            keep you engaged and focused. For example, pacing
                            while reviewing flashcards or using hand gestures to
                            explain concepts physically can enhance your memory
                            retention.
                        </li>
                        <li>
                            <strong
                                >Learn Through Real-World Applications:</strong
                            >
                            You thrive when you can take abstract concepts and
                            apply them to real-life situations. Whether it's
                            using math concepts in building something or
                            applying scientific principles in experiments,
                            physical interaction combined with visual tools
                            helps you grasp the material more effectively.
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/LSInsight/5.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>

            <div class="row">
                <h4 class="text-md font-bold mb-3">
                    Strategies for Enhancing Learning
                </h4>
                <p class="mb-6">
                    To maximise your blended learning style, here are some
                    additional techniques:
                </p>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/LSInsight/6.svg'"
                            alt=""
                        />
                    </div>
                </div>
                <div class="col-6">
                    <ul class="pl-5 mb-6">
                        <li>
                            <strong
                                >Combine Physical Manipulation with Visual
                                Learning:</strong
                            >
                            Use models, tools, or physical objects to manipulate
                            while you visualise concepts through diagrams or
                            written materials. For example, when learning about
                            geometry, use physical shapes alongside diagrams to
                            understand how they fit together.
                        </li>
                        <li>
                            <strong>Use Interactive Tools:</strong> Take
                            advantage of interactive tools like virtual labs or
                            software that allow you to engage physically while
                            learning visually. Apps that include both
                            simulations and visuals, like Google Earth for
                            geography or 3D anatomy apps for biology, can
                            enhance your learning experience.
                        </li>
                        <li>
                            <strong
                                >Visualise Concepts with Physical
                                Movement:</strong
                            >
                            When trying to memorise steps in a process or
                            sequence, incorporate body movement. For instance,
                            while learning a scientific process, act it out
                            through hand gestures or movement. This combination
                            of movement and visualisation deepens your
                            understanding of complex material.
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <h4 class="text-md font-bold mb-4">
                    Practical Tips for Visual and Kinaesthetic Learning
                </h4>
                <div class="grid-container gap-10 justify-content-center mb-6">
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500"
                            >Use Flashcards with Physical Manipulation</strong
                        >
                        <br />
                        <br />
                        Create flashcards with visual diagrams or notes and
                        review them while incorporating movement—like pacing or
                        tapping your fingers. Physically interacting with the
                        cards while seeing the content helps reinforce the
                        information.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500"
                            >Apply Concepts in Real Life</strong
                        >
                        <br />
                        <br />
                        Whenever possible, take the concepts you’ve learned and
                        apply them in a hands-on way. For example, if you’re
                        learning about measurements in math, try applying those
                        measurements to a real-life scenario like cooking or
                        building something.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500"
                            >Use Interactive Learning Tools</strong
                        >
                        <br />
                        <br />
                        Find apps or tools that offer interactive, hands-on
                        experiences. Virtual simulations, 3D models, and games
                        can allow you to engage with the material physically
                        while visualising concepts.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Report 15 Visual _ Reading & Writing-->
    <div v-if="style == 'Visual/Reading/Writing'">
        <!-- Content for Report 15 -->
        <div class="p-6">
            <h4 class="text-2xl font-bold mb-4">How You Learn Best</h4>

            <p class="mb-6">
                As a blended visual and reading/writing learner, you excel when
                you can both see and interact with written material. Here’s how
                you can make the most of your learning style:
            </p>

            <div class="row">
                <div class="col-6">
                    <ul class="pl-6 mb-6">
                        <li>
                            <strong
                                >Combine Visual Aids with Written Notes:</strong
                            >
                            You thrive when visual information is paired with
                            written notes. For example, using diagrams, charts,
                            or graphs while simultaneously taking notes helps
                            reinforce concepts. This dual method allows you to
                            process and retain information more effectively.
                        </li>
                        <li>
                            <strong
                                >Create Visual Summaries of Written
                                Material:</strong
                            >
                            After reading a textbook, article, or written
                            assignment, create visual summaries such as mind
                            maps, flowcharts, or diagrams. This allows you to
                            visualise key ideas and makes it easier to recall
                            information when studying.
                        </li>
                        <li>
                            <strong
                                >Take Detailed Written Notes Alongside
                                Visuals:</strong
                            >
                            While engaging with visual aids, take detailed
                            written notes. This helps you clarify your thoughts
                            and organise information in a structured way.
                            Writing down key points in your own words solidifies
                            your understanding.
                        </li>
                        <li>
                            <strong
                                >Read and Write to Reinforce Visual
                                Learning:</strong
                            >
                            After interacting with visual material, such as
                            presentations or videos, reinforce what you’ve
                            learned by reading related texts or writing
                            summaries. This layered approach helps you gain a
                            deeper understanding of the subject.
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/LSInsight/5.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>

            <div class="row">
                <h4 class="text-2xl font-bold mb-4">
                    Strategies for Enhancing Learning
                </h4>

                <p class="mb-6">
                    To maximise your blended learning style, here are some
                    additional techniques:
                </p>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/LSInsight/6.svg'"
                            alt=""
                        />
                    </div>
                </div>
                <div class="col-6">
                    <ul class="pl-6 mb-6">
                        <li>
                            <strong
                                >Use Visuals to Support Written
                                Assignments:</strong
                            >
                            When working on essays or reports, incorporate
                            visual aids such as charts or diagrams to illustrate
                            your points. This not only makes your writing more
                            engaging but also helps you grasp the material more
                            thoroughly.
                        </li>
                        <li>
                            <strong
                                >Create Study Guides with Visual and Written
                                Elements:</strong
                            >
                            When preparing for exams, create study guides that
                            combine both written explanations and visual
                            summaries. Use tools like bullet points, colour-coded
                            sections, and diagrams to organise the material
                            effectively.
                        </li>
                        <li>
                            <strong
                                >Engage in Writing-Based Study Sessions:</strong
                            >
                            After reviewing visual content, engage in writing
                            exercises such as summarising what you’ve learned or
                            answering questions in written form. This helps
                            connect the visual material with written concepts
                            for a deeper understanding.
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <h4 class="text-2xl font-bold mb-4">
                    Practical Tips for Visual and Reading/Writing Learning
                </h4>
                <div class="grid-container gap-10 justify-content-center mb-6">
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500"
                            >Summarise Texts Using Visual Tools</strong
                        >
                        <br />
                        <br />
                        After reading a chapter or article, summarise the main
                        points using mind maps or flowcharts. This helps
                        organise information visually, making it easier to
                        recall during study sessions.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500"
                            >Break Down Written Material with Visual
                            Aids</strong
                        >
                        <br />
                        <br />
                        For lengthy or complex reading material, use visuals
                        like timelines or infographics to break down the
                        information into manageable parts. This helps you see
                        the structure of the material and enhances
                        understanding.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500"
                            >Review with Written Summaries</strong
                        >
                        <br />
                        <br />
                        After engaging with visual content, write a detailed
                        summary of what you’ve learned. This writing exercise
                        reinforces the material and ensures that you’ve
                        understood it clearly.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Report 16 Visual-->
    <div v-if="style == 'Visual'">
        <!-- Content for Report 16 -->
        <div class="p-6">
            <h4 class="text-2xl font-bold mb-4">How You Learn Best</h4>
            <p>
                As a Visual learner, you thrive in environments where you can see and interact with visual information. Here’s how you can make the most of your learning style:

            </p>
            <div class="row">
                <div class="col-6">
                    <ul class="pl-6 mb-6">
                        <li>
                            <strong>Use Visual Aids:</strong> Incorporate
                            diagrams, charts, and graphs into your study
                            routine. Visual tools help you organise and
                            understand complex information more effectively. For
                            example, drawing mind maps or using colour-coded
                            notes can make key concepts stand out.
                        </li>
                        <li>
                            <strong>Create Visual Summaries:</strong> When
                            studying, create visual summaries of what you’re
                            learning. Use drawings, sketches, or infographics to
                            summarise important points. This can help you review
                            and recall information more easily.
                        </li>
                        <li>
                            <strong>Engage with Multimedia:</strong> Watch
                            educational videos, use interactive visual tools,
                            and look at visual examples related to your
                            subjects. Multimedia resources can make learning
                            more engaging and help reinforce what you’re
                            studying.
                        </li>
                        <li>
                            <strong>Organise Information Visually:</strong> Use
                            visual organisation techniques like timelines,
                            flowcharts, and tables to keep track of information
                            and see how different ideas connect. This can make
                            it easier to understand and remember material.
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/LSInsight/5.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>

            <div class="row">
                <h4 class="text-2xl font-bold mb-4">
                    Strategies for Enhancing Learning
                </h4>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/LSInsight/6.svg'"
                            alt=""
                        />
                    </div>
                </div>
                <div class="col-6">
                    <ul class="pl-6 mb-6">
                        <li>
                            <p>To enhance your learning experience and make the most of your Visual style, consider these strategies:
                            </p>
                        </li>
                        <li>
                            <strong>Incorporate Visual Learning Tools:</strong>
                            Use tools like digital mind mapping software,
                            educational apps, and visual study guides. These
                            tools can help you organise and visualise
                            information in a way that suits your learning style.
                        </li>
                        <li>
                            <strong>Practice Visualisation Techniques:</strong>
                            Develop your ability to create mental images and
                            visualise concepts. Try closing your eyes and
                            picturing the information you need to remember or
                            imagining how a process works.
                        </li>
                        <li>
                            <strong>Seek Out Visual Resources:</strong> Look for
                            resources that present information visually. Use
                            textbooks with illustrations, online resources with
                            infographics, and videos that include visual
                            explanations.
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <h4 class="text-2xl font-bold mb-4">
                    Practical Tips for Visual Learning
                </h4>
                <div class="grid-container gap-10 justify-content-center mb-6">
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500">Use Colour</strong>
                        <br />
                        <br />
                        Highlight important information using different colours
                        to make it stand out and make connections between ideas
                        clearer.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500">Draw it Out</strong>
                        <br />
                        <br />
                        Whenever you’re trying to understand a concept, draw it
                        out. Visualising it on paper can help clarify complex
                        ideas.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500"
                            >Review Visually</strong
                        >
                        <br />
                        <br />
                        Use flashcards with images or diagrams to review key
                        concepts. This helps reinforce learning through visual
                        memory.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <img
            class="w-25 h-auto object-contain"
            :src="'/images/reports-images/TeensLearningStyleImages/LSInsight/8.svg'"
            alt=""
        />
    </div>
    </div>
</template>

<script>
import AssessmentTypes from "@/Layouts/AssessmentTypes.vue";

export default {
    name: "LearningStyleInsight",
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

li > strong,
ul > li > h4,
ul > li > div > h4,
div.mb-4 > h4 {
    color: rgb(36, 168, 250);
    font-size: 17px;
}

ul > li {
    margin-bottom: 15px;
}

.grid-container {
    display: grid;
    grid-template-columns: repeat(3, 1fr); /* 4 columns */
    gap: 20px;
    width: 100%;
    max-width: 100%;
}

.grid-item {
    background: #222;
    color: #fff;
    text-align: center;
    padding: 40px;
    border-radius: 15px;
    position: relative;
}

/* Gradient border effect */
.grid-item::before {
    content: "";
    position: absolute;
    top: -1px;
    left: -1px;
    right: -1px;
    bottom: -1px;
    background: linear-gradient(45deg, #ff7e5f, #feb47b, #86a8e7, #7f00ff);
    border-radius: 16px;
    z-index: -1;
}

.grid-item::after {
    content: "";
    position: absolute;
    top: 1px;
    left: 1px;
    right: 1px;
    bottom: 1px;
    background: #222;
    border-radius: 15px;
    z-index: -1;
}

/* Responsive Styles */
@media (max-width: 1024px) {
    .grid-container {
        grid-template-columns: repeat(2, 1fr); /* 2 columns */
    }
}

@media (max-width: 600px) {
    .grid-container {
        grid-template-columns: repeat(1, 1fr); /* 1 column */
    }
}
.gradient-border > strong {
}
.gradient-border {
    position: relative;
    padding: 20px 10px;
    /* font-size: 24px; */
    color: black;
    text-align: center;
    border-radius: 22px;
    background: white;
}

.gradient-border::before {
    content: "";
    position: absolute;
    top: -2px;
    left: -2px;
    right: -2px;
    bottom: -2px;
    background: linear-gradient(63deg, #deb8ff, #fff8e3, #a6f3ff, #fff7e3);
    border-radius: 24px;
    z-index: -1;
}

.gradient-border::after {
    content: "";
    position: absolute;
    top: 1px;
    left: 1px;
    right: 1px;
    bottom: 1px;
    /* background: #111; */
    border-radius: 20px;
    z-index: -1;
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

    .p-6{
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

    li>div>h4{
        font-size: 1rem !important;
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
