<template>
    <div class="p-4 md:p-6">
    <div class="space-y-6 mt-4">
        <h2 class="text-center font-bold mb-4">
            How to Best Study for Exams
        </h2>
    </div>
   
    <!-- Report 1 Auditory -->
    <div v-if="style == 'Auditory'">
        <!-- Content for Report 1 -->
        <div class="space-y-6">
            <h4 class="text-2xl font-bold">
                Effective Study Strategies for Auditory Learners
            </h4>
            <p>
                As an auditory learner, using sound and verbal techniques during
                exam preparation can greatly improve your retention and recall.
                Here are some tailored strategies to help you succeed:
            </p>

            <div class="row justify-center">
                <div class=" effective-study-box">
                    <li class="flex items-start space-x-4">
                        <div>
                            <h4 class="text-md font-medium">
                                Record and Listen to Key Information
                            </h4>
                            <p>
                                One of the most effective ways to review
                                material is by recording your notes or
                                summarising key concepts in your own words.
                                Listen to these recordings while commuting,
                                exercising, or during any downtime. Repeatedly
                                hearing the information helps it stick in your
                                memory and allows you to absorb it without
                                needing to read or write.
                            </p>
                        </div>
                    </li>
                </div>
                <div class=" effective-study-box">
                    <li class="flex items-start space-x-4">
                        <div>
                            <h4 class="text-md font-medium">
                                Engage in Group Discussions
                            </h4>
                            <p>
                                Study groups are perfect for auditory learners.
                                Participating in discussions allows you to talk
                                through ideas, ask questions, and explain topics
                                to others. When you explain a concept out loud,
                                it helps solidify your understanding. Hearing
                                others' perspectives and answers also reinforces
                                your learning and helps you approach problems in
                                new ways.
                            </p>
                        </div>
                    </li>
                </div>
                <div class=" effective-study-box">
                    <li class="flex items-start space-x-4">
                        <div>
                            <h4 class="text-md font-medium">
                                Use Verbal Mnemonics and Rhythms
                            </h4>
                            <p>
                                Create verbal tricks, such as rhymes, songs, or
                                acronyms, to remember facts or concepts. Turning
                                information into something you can verbally
                                recite helps during exam time when you need to
                                recall details. Auditory learners often find
                                that rhythmic repetition, like a catchy song or
                                phrase, makes remembering information much
                                easier.
                            </p>
                        </div>
                    </li>
                </div>
                <div class=" effective-study-box">
                    <li class="flex items-start space-x-4">
                        <div>
                            <h4 class="text-md font-medium">
                                Speak Out Loud When Studying
                            </h4>
                            <p>
                                As an auditory learner, talking through your
                                notes and summarising key points out loud is an
                                excellent strategy. Whether you’re reading
                                textbook passages or explaining concepts to
                                yourself, verbalising helps reinforce what
                                you’ve learned. It can be helpful to pretend
                                you're teaching the material to someone else, as
                                this forces you to organise your thoughts and
                                fully understand the concepts.
                            </p>
                        </div>
                    </li>
                </div>
                <div class=" effective-study-box">
                    <li class="flex items-start space-x-4">
                        <div>
                            <h4 class="text-md font-medium">
                                Listen to Educational Podcasts or Lectures
                            </h4>
                            <p>
                                When preparing for exams, use audio resources
                                such as podcasts or recorded lectures on your
                                subject matter. Listening to these while
                                reviewing notes or relaxing can help you absorb
                                more information. Hearing concepts explained in
                                different ways enhances your comprehension and
                                reinforces what you’ve already learned.
                            </p>
                        </div>
                    </li>
                </div>
            </div>

            <div class="row">

                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                        class="w-80 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/study/13.png'"
                        alt=""
                        />
                    </div>
                </div>
                <div class="col-6">
                    <h4 class="text-2xl font-bold">
                        Practical Tips for Exam Preparation
                    </h4>
                    <h4 class="text-md font-medium">
                        Review with Audio Recordings
                    </h4>
                    <p>
                        Create recordings of yourself reading important notes,
                        summarising chapters, or explaining concepts. Listen to
                        these recordings repeatedly as part of your revision,
                        especially when you're on the move or during downtime.
                        Replaying audio reinforces your memory and helps you
                        absorb the information passively.
                    </p>

                    <h4 class="text-md font-medium">
                        Recite Information Aloud
                    </h4>
                    <p>
                        When studying, say key points and definitions out loud.
                        By hearing yourself speak, you’ll strengthen your recall
                        during the exam. You can also try explaining concepts to
                        someone else, which will help deepen your understanding
                        and ensure you can explain it clearly during the test.
                    </p>
                </div>
                <div class="col-6">
                    <h4 class="text-md font-medium">
                        Practice with Mock Oral Exams
                    </h4>
                    <p>
                        Simulate an oral exam or study session where you
                        verbally explain your answers. You can do this alone by
                        pretending you're answering an exam question aloud, or
                        with a study partner where you ask each other questions.
                        Speaking your answers helps reinforce key ideas and
                        prepares you for any verbal components of your test.
                    </p>
                    <h4 class="text-md font-medium">
                        Listen to Educational Podcasts or Lectures
                    </h4>
                    <p>
                        In the lead-up to exams, supplement your study materials
                        with subject-related podcasts, audiobooks, or recorded
                        lectures. Hearing different explanations of the same
                        topics can improve your understanding and provide new
                        perspectives that might help during the exam.
                    </p>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-80 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/study/14.png'"
                            alt=""
                        />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h4 class="text-2xl font-bold">
                        Online Tools for Auditory Learners
                    </h4>
                    <ul class="list-inside space-y-2">
                        <div class="row justify-center">
                            <div class=" online-tool-box bg-red-100">
                                <li class="flex items-start space-x-4">
                                    <div>
                                        <h5>Audible:</h5>
                                        Listen to audiobooks on various subjects
                                        to reinforce learning through sound.
                                        Audible offers a vast library of
                                        educational books, making it easy to
                                        study by listening to lectures,
                                        literature, or educational content.
                                    </div>
                                </li>
                            </div>
                            <div class=" online-tool-box bg-blue-100">
                                <li class="flex items-start space-x-4">
                                    <div>
                                        <h5>
                                            Quizlet (with Audio Flashcards):
                                        </h5>
                                        Use Quizlet to create flashcards with
                                        audio. You can record terms or
                                        definitions and listen to them
                                        repeatedly. Quizlet also offers pre-made
                                        flashcards on a variety of topics, with
                                        an audio option to aid auditory
                                        learners.
                                    </div>
                                </li>
                            </div>
                            <div class=" online-tool-box bg-green-100">
                                <li class="flex items-start space-x-4">
                                    <div>
                                        <h5>Google Podcasts:</h5>
                                        Google Podcasts offers a wide selection
                                        of educational podcasts. From history to
                                        science and language learning, listening
                                        to subject-specific podcasts enhances
                                        your understanding and reinforces
                                        material through auditory learning.
                                    </div>
                                </li>
                            </div>
                            <div class=" online-tool-box bg-yellow-100">
                                <li class="flex items-start space-x-4">
                                    <div>
                                        <h5>TED Talks:</h5>
                                        TED Talks cover a range of subjects with
                                        engaging speakers who explain complex
                                        topics in simple, accessible ways.
                                        Listening to TED Talks can provide
                                        deeper insight into topics you’re
                                        studying and help reinforce information
                                        audibly.
                                    </div>
                                </li>
                            </div>
                            <div class=" online-tool-box bg-pink-200">
                                <li class="flex items-start space-x-4">
                                    <div>
                                        <h5>
                                            Notion and Evernote (with Voice
                                            Notes):
                                        </h5>
                                        Both Notion and Evernote allow you to
                                        attach voice recordings to your notes.
                                        This feature is ideal for organising
                                        your study material with the added
                                        benefit of recording verbal explanations
                                        or key points, so you can review them
                                        later by listening.
                                    </div>
                                </li>
                            </div>
                            <div class=" online-tool-box bg-green-50">
                                <li class="flex items-start space-x-4">
                                    <div>
                                        <h5>Otter.ai (Voice Notes):</h5>
                                        Otter.ai allows you to record and
                                        transcribe lectures, discussions, or
                                        your own voice notes. You can listen to
                                        these recordings as you review, ensuring
                                        that auditory learners can revisit
                                        spoken content for better retention.
                                    </div>
                                </li>
                            </div>
                        </div>

                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Report 2 Auditory _ Kinesthethic Blend -->
    <div v-if="style == 'Auditory/Kinesthethic'">
        <!-- Content for Report 2 -->
        <div class="p-6 rounded-lg">
            <h4 class="text-2xl font-bold mb-4">
                Effective Study Strategies for Auditory and Kinaesthetic
                Learners
            </h4>
            <p class="mb-4">
                As an auditory and kinaesthetic learner, you can enhance your
                exam preparation by integrating both auditory and physical
                methods. Here are five strategies to help you prepare for exams:
            </p>
            <div class="row justify-center">
                <div class=" effective-study-box">
                    <li class="flex items-start space-x-4">
                        <div>
                            <h4 class="text-md font-medium">
                                Combine Auditory Resources with Hands-On
                                Practice
                            </h4>
                            <p>
                                Use auditory materials like recorded lectures or
                                podcasts while engaging in hands-on activities
                                related to the content. For example, listen to
                                an explanation of a scientific process while
                                conducting related experiments or building
                                models.
                            </p>
                        </div>
                    </li>
                </div>

                <div class=" effective-study-box">
                    <li class="flex items-start space-x-4">
                        <div>
                            <h4 class="text-md font-medium">
                                Record and Listen to Key Concepts
                            </h4>
                            <p>
                                Record yourself summarising important topics or
                                explanations. Listen to these recordings during
                                study breaks or while performing physical tasks.
                                Repeatedly hearing the material reinforces
                                learning and aids retention.
                            </p>
                        </div>
                    </li>
                </div>

                <div class=" effective-study-box">
                    <li class="flex items-start space-x-4">
                        <div>
                            <h4 class="text-md font-medium">
                                Engage in Verbal and Physical Review Sessions
                            </h4>
                            <p>
                                Organise study sessions where you verbally
                                discuss key concepts and physically interact
                                with study materials. For instance, explain a
                                topic out loud while manipulating diagrams or
                                using physical models to illustrate your points.
                            </p>
                        </div>
                    </li>
                </div>

                <div class=" effective-study-box">
                    <li class="flex items-start space-x-4">
                        <div>
                            <h4 class="text-md font-medium">
                                Use Interactive Study Tools
                            </h4>
                            <p>
                                Incorporate interactive study tools that combine
                                auditory and kinaesthetic elements. For example,
                                use educational apps or simulations that include
                                both verbal instructions and physical
                                interaction, such as virtual labs or interactive
                                diagrams.
                            </p>
                        </div>
                    </li>
                </div>

                <div class=" effective-study-box">
                    <li class="flex items-start space-x-4">
                        <div>
                            <h4 class="text-md font-medium">
                                Participate in Study Groups with Physical and
                                Verbal Elements
                            </h4>
                            <p>
                                Join or form study groups where you can discuss
                                topics verbally and engage in hands-on
                                activities. Working with peers to explain
                                concepts and perform physical tasks helps
                                reinforce your understanding and enhances
                                retention.
                            </p>
                        </div>
                    </li>
                </div>
            </div>

            <div class="row mt-4">


                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                        class="w-80 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/study/12.svg'"
                        alt=""
                        />
                    </div>
                </div>
                <div class="col-6 mt-4">
                    <h4 class="text-2xl font-bold mb-4">
                        Practical Tips for Exam Preparation
                    </h4>
                    <div class="mb-4">
                        <h4 class="text-md font-medium">
                            Alternate Between Listening and Doing
                        </h4>
                        <p>
                            Break your study sessions into segments where you
                            first listen to audio materials and then apply the
                            information through physical tasks. For instance,
                            listen to a podcast about a historical event and
                            then create a timeline to visualise the sequence of
                            events.
                        </p>
                    </div>

                    <div class="mb-4">
                        <h4 class="text-md font-medium">
                            Create Verbal and Physical Study Aids
                        </h4>
                        <p>
                            Develop study aids that incorporate both auditory
                            and kinaesthetic elements. For example, make
                            flashcards with key terms and record yourself
                            reading them aloud, then use these flashcards to
                            practice physical recall through hands-on
                            activities.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="mb-4">
                        <h4 class="text-md font-medium">
                            Practice Explaining Concepts Out Loud While Using
                            Physical Tools
                        </h4>
                        <p>
                            As you study, explain concepts out loud while
                            working with physical tools like models or diagrams.
                            This technique helps integrate auditory and
                            kinaesthetic learning, reinforcing your
                            understanding of the material.
                        </p>
                    </div>

                    <div class="mb-4">
                        <h4 class="text-md font-medium">
                            Utilise Study Apps with Audio and Interactive
                            Features
                        </h4>
                        <p>
                            Take advantage of study apps that offer both
                            auditory and interactive features. For example, use
                            apps that provide verbal explanations and require
                            physical interaction, such as simulations or
                            interactive quizzes.
                        </p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/study/15.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h4 class="text-2xl font-bold mb-4">
                        Online Tools for Blended Learners
                    </h4>
                    <p class="mb-4">
                        Here are some online tools that can help you engage both
                        your auditory and kinaesthetic learning styles:
                    </p>

                    <div class="row justify-center">
                        <div class=" online-tool-box bg-red-100">
                            <li class="flex items-start space-x-4">
                                <div>
                                    <div class="mb-4">
                                        <h4 class="text-md font-medium">
                                            YouTube Educational Channels
                                        </h4>
                                        <p>
                                            Educational YouTube channels like
                                            CrashCourse and SciShow provide
                                            videos with auditory explanations
                                            and visual demonstrations. These
                                            videos often include demonstrations
                                            or experiments that cater to
                                            kinaesthetic learners by showing
                                            practical applications.
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </div>
                        <div class=" online-tool-box bg-blue-100">
                            <li class="flex items-start space-x-4">
                                <div>
                                    <div class="mb-4">
                                        <h4 class="text-md font-medium">
                                            Audible
                                        </h4>
                                        <p>
                                            Audible offers audiobooks that you
                                            can listen to while engaging in
                                            kinaesthetic activities. Audiobooks
                                            are perfect for auditory learners,
                                            and you can pair them with physical
                                            activities like taking notes or
                                            creating models related to the
                                            content.
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </div>
                        <div class=" online-tool-box bg-green-100">
                            <li class="flex items-start space-x-4">
                                <div>
                                    <div class="mb-4">
                                        <h4 class="text-md font-medium">
                                            Notion
                                        </h4>
                                        <p>
                                            Notion is a versatile tool where you
                                            can create detailed notes and
                                            integrate voice recordings. You can
                                            record verbal explanations of
                                            concepts and use visual aids such as
                                            diagrams or tables, supporting both
                                            auditory and kinaesthetic learning
                                            methods.
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </div>
                        <div class=" online-tool-box bg-yellow-100">
                            <li class="flex items-start space-x-4">
                                <div>
                                    <div class="mb-4">
                                        <h4 class="text-md font-medium">
                                            MindMeister
                                        </h4>
                                        <p>
                                            MindMeister allows you to create
                                            mind maps that visually organise
                                            information. You can add notes and
                                            verbal explanations to your mind
                                            maps, which helps combine visual and
                                            auditory elements while also
                                            engaging in the physical act of
                                            creating the maps.
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </div>
                        <div class=" online-tool-box bg-pink-200">
                            <li class="flex items-start space-x-4">
                                <div>
                                    <div class="mb-4">
                                        <h4 class="text-md font-medium">
                                            Trello
                                        </h4>
                                        <p>
                                            Trello is a project management tool
                                            that helps you organise tasks using
                                            boards and cards. You can add
                                            checklists, attach audio notes, and
                                            use interactive elements to keep
                                            track of your study progress, making
                                            it useful for kinaesthetic learners
                                            who benefit from organising tasks
                                            physically.
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </div>
                        <div class=" online-tool-box bg-green-50">
                            <li class="flex items-start space-x-4">
                                <div>
                                    <div class="mb-4">
                                        <h4 class="text-md font-medium">
                                            Otter.ai
                                        </h4>
                                        <p>
                                            Otter.ai provides transcription
                                            services where you can record and
                                            transcribe lectures or discussions.
                                            You can review these transcripts
                                            while engaging in kinaesthetic
                                            activities, reinforcing your
                                            auditory learning with written and
                                            interactive elements.
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Report 3 Auditory _ Reading & Writing Blend-->
    <div v-if="style == 'Auditory/Reading/Writing'">
        <!-- Content for Report 3 -->
        <div class="p-6 space-y-6">
            <h4 class="text-2xl font-bold ">
                Effective Study Strategies for Auditory and Reading/Writing
                Learners
            </h4>
            <p class="">
                As an auditory and reading/writing learner, you can enhance your
                exam preparation by incorporating both listening and writing
                techniques. Here are five strategies to help you prepare for
                exams:
            </p>

            <div class="row">
                <div class="row justify-center">
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Listen to Lectures and Summarise in Writing
                                </h4>
                                <p>
                                    Start by listening to recorded lectures or
                                    podcasts on the subject matter. Afterwards,
                                    write summaries or detailed notes. This
                                    helps reinforce what you’ve heard through
                                    the act of writing, allowing you to retain
                                    key points for exams.
                                </p>
                            </div>
                        </li>
                    </div>
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Record Yourself Reading Notes and Listen for
                                    Review
                                </h4>
                                <p>
                                    Record yourself reading out your notes or
                                    key concepts, then listen to these
                                    recordings during your review sessions. This
                                    approach engages both your auditory and
                                    reading/writing strengths and reinforces the
                                    material through repetition.
                                </p>
                            </div>
                        </li>
                    </div>
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Create Written Summaries After Listening
                                    Sessions
                                </h4>
                                <p>
                                    After a study session involving audio
                                    materials (e.g., lectures or discussions),
                                    write summaries to consolidate your
                                    understanding. Writing down what you’ve
                                    heard helps transfer auditory input into
                                    written memory.
                                </p>
                            </div>
                        </li>
                    </div>
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Combine Written Practice with Verbal Review
                                </h4>
                                <p>
                                    Write practice essays, outlines, or
                                    summaries, then review them aloud to
                                    yourself or a study partner. This verbal
                                    review helps you clarify and reinforce the
                                    written material, making it easier to
                                    remember during exams.
                                </p>
                            </div>
                        </li>
                    </div>
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Use Flashcards with Written and Audio
                                    Elements
                                </h4>
                                <p>
                                    Create flashcards that combine written key
                                    terms with audio explanations. Record
                                    yourself explaining the concepts, then use
                                    these recordings to review the content while
                                    reading the flashcards. This integration
                                    helps solidify the material in your memory.
                                </p>
                            </div>
                        </li>
                    </div>
                </div>
            </div>

            <div class="row">


                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                        class="w-80 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/study/12.svg'"
                        alt=""
                        />
                    </div>
                </div>
                <div class="col-6">
                    <h4 class="text-2xl font-bold ">
                        Practical Tips for Exam Preparation
                    </h4>
                    <ul class="space-y-4">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="font-bold ">
                                    Create Audio Notes for Key Concepts
                                </h4>
                                <p class="">
                                    Record audio notes of essential topics and
                                    listen to them while on the go or during
                                    study breaks. This helps reinforce auditory
                                    learning, while you can refer to written
                                    notes later for deeper understanding.
                                </p>
                            </div>
                        </li>
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="font-bold ">
                                    Use Written Outlines and Audio Summaries
                                </h4>
                                <p class="">
                                    Outline each chapter or topic in written
                                    form and then create short audio summaries
                                    of the most important points. Listening to
                                    these summaries before an exam reinforces
                                    the material, while the outlines provide
                                    detailed structure for review.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <ul class="space-y-4">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="font-bold ">
                                    Practice Writing Timed Essays and Review
                                    Them Verbally
                                </h4>
                                <p class="">
                                    Practice writing essays under timed
                                    conditions, then review your work by reading
                                    it aloud. This verbal review helps improve
                                    your ability to recall information during
                                    the actual exam and ensures clarity in your
                                    writing.
                                </p>
                            </div>
                        </li>
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="font-bold ">
                                    Listen to Recordings During Breaks
                                </h4>
                                <p class="">
                                    During study breaks, listen to recorded
                                    summaries or key points to keep the material
                                    fresh in your mind. This practice reinforces
                                    your auditory learning while allowing you to
                                    rest from writing tasks.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-80 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/study/11.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h4 class="text-2xl font-bold ">
                        Online Tools for Blended Learners
                    </h4>
                    <p class="">
                        Here are some online tools that can help you engage both
                        your auditory and reading/writing learning styles:
                    </p>

                    <ul class="space-y-4">
                        <div class="row justify-center">
                            <div class=" online-tool-box bg-red-100">
                                <li class="flex items-start space-x-4">
                                    <div>
                                        <h4
                                            class="font-bold text-center "
                                        >
                                            Audible
                                        </h4>
                                        <p class="">
                                            Audible offers a vast library of
                                            audiobooks, making it easy to listen
                                            to educational content on the go.
                                            Use this tool to listen to
                                            subject-related books or summaries
                                            and complement it by taking written
                                            notes to reinforce the material.
                                        </p>
                                    </div>
                                </li>
                            </div>
                            <div class=" online-tool-box bg-blue-100">
                                <li class="flex items-start space-x-4">
                                    <div>
                                        <h4
                                            class="font-bold text-center "
                                        >
                                            Notion
                                        </h4>
                                        <p class="">
                                            Notion allows you to create detailed
                                            study plans, write notes, and embed
                                            audio recordings. You can organise
                                            your learning materials by subject,
                                            making it easy to switch between
                                            written content and auditory
                                            reviews.
                                        </p>
                                    </div>
                                </li>
                            </div>
                            <div class=" online-tool-box bg-green-100">
                                <li class="flex items-start space-x-4">
                                    <div>
                                        <h4
                                            class="font-bold text-center "
                                        >
                                            Google Keep
                                        </h4>
                                        <p class="">
                                            Google Keep is a note-taking tool
                                            that supports both written and audio
                                            features. You can take quick written
                                            notes and also record verbal
                                            reminders or explanations, helping
                                            you reinforce key concepts with both
                                            auditory and written elements.
                                        </p>
                                    </div>
                                </li>
                            </div>
                            <div class=" online-tool-box bg-yellow-100">
                                <li class="flex items-start space-x-4">
                                    <div>
                                        <h4
                                            class="font-bold text-center "
                                        >
                                            Microsoft OneNote
                                        </h4>
                                        <p class="">
                                            OneNote allows you to organise your
                                            notes and embed audio clips into
                                            your written materials. This helps
                                            you combine both auditory and
                                            written learning methods, offering
                                            an integrated space for reviewing
                                            lecture notes and your own
                                            recordings.
                                        </p>
                                    </div>
                                </li>
                            </div>
                            <div class=" online-tool-box bg-pink-200">
                                <li class="flex items-start space-x-4">
                                    <div>
                                        <h4
                                            class="font-bold text-center "
                                        >
                                            Otter.ai
                                        </h4>
                                        <p class="">
                                            Otter.ai transcribes lectures,
                                            discussions, or audio recordings
                                            into written text, allowing you to
                                            review what you’ve heard in written
                                            form. This tool helps you convert
                                            auditory input into written
                                            summaries, reinforcing both learning
                                            methods.
                                        </p>
                                    </div>
                                </li>
                            </div>
                            <div class=" online-tool-box bg-green-50">
                                <li class="flex items-start space-x-4">
                                    <div>
                                        <h4
                                            class="font-bold text-center "
                                        >
                                            Speechify
                                        </h4>
                                        <p class="">
                                            Speechify is a text-to-speech app
                                            that reads written content aloud.
                                            You can use this tool to listen to
                                            articles, essays, or study notes
                                            while taking additional written
                                            notes to reinforce your
                                            understanding.
                                        </p>
                                    </div>
                                </li>
                            </div>
                        </div>
                     
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Report 4 Auditory _ Visual Blend-->
    <div v-if="style == 'Auditory/Visual'">
        <!-- Content for Report 4 -->
        <div class="p-6 space-y-6">
            <h4 class="text-2xl font-bold ">
                Effective Study Strategies for Auditory and Visual Learners
            </h4>
            <p class="">
                As a blended auditory and visual learner, you process
                information best when you can hear explanations and reinforce
                them with visual aids. Here are five strategies to help you
                prepare for exams:
            </p>
            <div class="row">
                <div class="row justify-center">
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Combine Visual and Audio Resources
                                </h4>
                                <p>
                                    Use resources that engage both your visual
                                    and auditory learning styles. For example,
                                    watch videos that include both diagrams and
                                    spoken explanations, or listen to
                                    educational podcasts while reviewing your
                                    notes or charts. This dual approach
                                    strengthens your understanding.
                                </p>
                            </div>
                        </li>
                    </div>
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Create Visual Notes While Listening to
                                    Lectures
                                </h4>
                                <p>
                                    When listening to a recorded lecture or
                                    explanations, draw diagrams, charts, or mind
                                    maps to visually organise the information.
                                    Writing or drawing while listening helps
                                    solidify the material in your memory, as
                                    you're engaging both learning styles
                                    simultaneously.
                                </p>
                            </div>
                        </li>
                    </div>
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Use Flashcards with Audio
                                </h4>
                                <p>
                                    Make flashcards for key terms or concepts
                                    but also add an auditory component by
                                    reading them aloud or recording your voice.
                                    Reviewing flashcards both visually and
                                    audibly helps reinforce the information in
                                    multiple ways.
                                </p>
                            </div>
                        </li>
                    </div>
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Summarise Concepts Out Loud with Visual Aids
                                </h4>
                                <p>
                                    After reading or reviewing a topic, explain
                                    the concepts out loud using visual aids like
                                    diagrams, charts, or written summaries.
                                    Speaking the information while looking at
                                    visuals ensures that you’re processing it
                                    through both learning channels.
                                </p>
                            </div>
                        </li>
                    </div>
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Study in Groups with Visual and Verbal
                                    Interaction
                                </h4>
                                <p>
                                    Group study sessions are highly effective
                                    for blended learners. Discuss the material
                                    out loud with peers while also using visual
                                    aids such as slides or charts. Engaging in
                                    both verbal discussions and reviewing visual
                                    materials will enhance your exam
                                    preparation.
                                </p>
                            </div>
                        </li>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                        class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/study/12.svg'"
                        alt=""
                        />
                    </div>
                </div>
                <div class="col-6">
                    <h4 class="text-md font-bold ">
                        Practical Tips for Exam Preparation
                    </h4>
                    <p class="">
                        Here are additional techniques to boost your exam
                        preparation:
                    </p>
                    <ul class="space-y-2">
                        <li>
                            <strong class=""
                                >Review Using Visual and Audio Resources</strong
                            ><br />
                            Use online resources such as videos or podcasts that
                            combine visual and auditory elements. Watching and
                            listening to explanations repeatedly reinforces the
                            material in both formats.
                        </li>
                        <li>
                            <strong class=""
                                >Record Your Own Notes</strong
                            ><br />
                            Record yourself reading key points or summaries of
                            important topics. Listening to these recordings
                            while reviewing written notes or visual aids will
                            strengthen your recall during the exam.
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <ul class="space-y-2">
                        <li>
                            <strong class=""
                                >Test Yourself Using Both Methods</strong
                            ><br />
                            Practice answering exam questions out loud, using
                            visuals like charts or notes to guide your
                            responses. This method mimics the combination of
                            visual and auditory input that works best for your
                            learning style.
                        </li>
                        <li>
                            <strong class=""
                                >Use Time Blocking for Visual and Auditory
                                Study</strong
                            ><br />
                            Divide your study time between visual and auditory
                            activities. For example, spend 30 minutes listening
                            to a recorded lecture, followed by 30 minutes of
                            reviewing your notes or diagrams. Alternating
                            between the two ensures that you're engaging both
                            learning styles effectively.
                        </li>
                    </ul>
                </div>

                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/study/11.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h4 class="text-md font-bold ">
                        Online Tools for Blended Learners
                    </h4>
                    <p class="">
                        Here are some online tools that can help you engage both
                        your auditory and visual learning styles:
                    </p>

                    <ul class="space-y-2">
                        <div class="row justify-center">
                            <div class=" online-tool-box bg-red-100">
                                <li class="flex items-start space-x-4">
                                    <div>
                                        <strong
                                            class=" text-center"
                                            >Khan Academy</strong
                                        ><br />
                                        Khan Academy offers a wide range of
                                        educational videos and tutorials that
                                        combine visual explanations with verbal
                                        narration. This is ideal for visual and
                                        auditory learners who benefit from
                                        seeing and hearing information
                                        simultaneously.
                                    </div>
                                </li>
                            </div>
                            <div class=" online-tool-box bg-blue-100">
                                <li class="flex items-start space-x-4">
                                    <div>
                                        <strong class=""
                                            >Quizlet</strong
                                        ><br />
                                        Quizlet allows you to create flashcards and use both visual and auditory features. You can create flashcards with text and record audio to listen to the terms and definitions, reinforcing learning through both sight and sound.

                                    </div>
                                </li>
                            </div>
                            <div class=" online-tool-box bg-blue-100">
                                <li class="flex items-start space-x-4">
                                    <div>
                                        <strong class=""
                                            >YouTube Educational
                                            Channels</strong
                                        ><br />
                                        Many YouTube channels offer educational
                                        videos that combine visual presentations
                                        with auditory explanations. Channels
                                        like CrashCourse and SciShow are
                                        excellent for engaging both your visual
                                        and auditory senses.
                                    </div>
                                </li>
                            </div>
                            <div class=" online-tool-box bg-yellow-100">
                                <li class="flex items-start space-x-4">
                                    <div>
                                        <strong class=""
                                            >Audible</strong
                                        ><br />
                                        Audible offers audiobooks that are great
                                        for auditory learners. You can listen to
                                        educational content while taking visual
                                        notes or creating diagrams, combining
                                        both styles for a stronger learning
                                        experience.
                                    </div>
                                </li>
                            </div>
                            <div class=" online-tool-box bg-yellow-100">
                                <li class="flex items-start space-x-4">
                                    <div>
                                        <strong class=""
                                            >Notion</strong
                                        ><br />
                                        Notion is a digital workspace where you
                                        can organise notes and add voice
                                        recordings. You can listen to audio
                                        files while reviewing written or visual
                                        notes, making it ideal for blending
                                        auditory and visual learning techniques.
                                    </div>
                                </li>
                            </div>
                            <div class=" online-tool-box bg-green-50">
                                <li class="flex items-start space-x-4">
                                    <div>
                                        <strong class=""
                                            >MindMeister</strong
                                        ><br />
                                        MindMeister allows you to create mind
                                        maps that visually represent your
                                        thoughts while also providing the
                                        ability to add notes and audio files.
                                        This combination of visual and auditory
                                        features helps reinforce your
                                        understanding of the material.
                                    </div>
                                </li>
                            </div>
                        </div>
                     
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Report 5 Kinesthethic _ Auditory Blend-->
    <div v-if="style == 'Kinesthethic/Auditory'">
        <!-- Content for Report 5 -->
        <div class="p-6 space-y-6">
            <h4 class="text-2xl font-bold ">
                Effective Study Strategies for Kinaesthetic and Auditory
                Learners
            </h4>
            <p class="">
                As a kinaesthetic and auditory learner, you can enhance your
                exam preparation by integrating both physical and auditory
                methods. Here are five strategies to help you prepare for exams:
            </p>
                <div class="row justify-center">
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Combine Auditory Resources with Hands-On
                                    Practice
                                </h4>
                                <p>
                                    Use auditory materials like recorded
                                    lectures or podcasts while engaging in
                                    hands-on activities related to the content.
                                    For example, listen to an explanation of a
                                    scientific process while conducting related
                                    experiments or building models.
                                </p>
                            </div>
                        </li>
                    </div>
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Record and Listen to Key Concepts
                                </h4>
                                <p>
                                    Record yourself summarising important topics
                                    or explanations. Listen to these recordings
                                    during study breaks or while performing
                                    physical tasks. Repeatedly hearing the
                                    material reinforces learning and aids
                                    retention.
                                </p>
                            </div>
                        </li>
                    </div>
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Engage in Verbal and Physical Review
                                    Sessions
                                </h4>
                                <p>
                                    Organise study sessions where you verbally
                                    discuss key concepts and physically interact
                                    with study materials. For instance, explain
                                    a topic out loud while manipulating diagrams
                                    or using physical models to illustrate your
                                    points.
                                </p>
                            </div>
                        </li>
                    </div>
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Use Interactive Study Tools
                                </h4>
                                <p>
                                    Incorporate interactive study tools that
                                    combine auditory and kinaesthetic elements.
                                    For example, use educational apps or
                                    simulations that include both verbal
                                    instructions and physical interaction, such
                                    as virtual labs or interactive diagrams.
                                </p>
                            </div>
                        </li>
                    </div>
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Participate in Study Groups with Physical
                                    and Verbal Elements
                                </h4>
                                <p>
                                    Join or form study groups where you can
                                    discuss topics verbally and engage in
                                    hands-on activities. Working with peers to
                                    explain concepts and perform physical tasks
                                    helps reinforce your understanding and
                                    enhances retention.
                                </p>
                            </div>
                        </li>
                    </div>
                </div>

            <div class="row">


                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                        class="w-80 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/study/12.svg'"
                        alt=""
                        />
                    </div>
                </div>
                <div class="col-6">
                    <h4 class="text-md font-bold ">
                        Practical Tips for Exam Preparation
                    </h4>
                    <ul class="space-y-4">
                        <li>
                            <strong class=""
                                >
                                Alternate Between Listening and Doing
                                </strong
                            ><br />
                            Break your study sessions into segments where you first listen to audio materials and then apply the information through physical tasks. For instance, listen to a podcast about a historical event and then create a timeline to visualise the sequence of events.


                        </li>
                        <li>
                            <strong class=""
                                >
                                Create Verbal and Physical Study Aids

                                </strong
                            ><br />
                            Develop study aids that incorporate both auditory and kinaesthetic elements. For example, make flashcards with key terms and record yourself reading them aloud, then use these flashcards to practice physical recall through hands-on activities.


                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <ul class="space-y-4">
                        <li>
                            <strong class=""
                                >Practice Explaining Concepts Out Loud While
                                Using Physical Tools</strong
                            ><br />
                            As you study, explain concepts out loud while
                            working with physical tools like models or diagrams.
                            This technique helps integrate auditory and
                            kinaesthetic learning, reinforcing your
                            understanding of the material.
                        </li>
                        <li>
                            <strong class=""
                                >Utilise Study Apps with Audio and Interactive
                                Features</strong
                            ><br />
                            Take advantage of study apps that offer both
                            auditory and interactive features. For example, use
                            apps that provide verbal explanations and require
                            physical interaction, such as simulations or
                            interactive quizzes.
                        </li>
                    </ul>
                </div>

                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-80 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/study/11.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h4 class="text-md font-bold ">
                        Online Tools for Blended Learners
                    </h4>
                    <p class="">
                        Here are some online tools that can help you engage both
                        your kinaesthetic and auditory learning styles:
                    </p>

                    <ul class="space-y-4">
                        <div class="row justify-center">
                            <div class=" online-tool-box bg-red-100">
                                <li class="flex items-start space-x-4">
                                    <div>
                                        <h5 class="">
                                            YouTube Educational Channels
                                        </h5>
                                        Educational YouTube channels like
                                        CrashCourse and SciShow provide videos
                                        with auditory explanations and visual
                                        demonstrations. These videos often
                                        include demonstrations or experiments
                                        that cater to kinaesthetic learners by
                                        showing practical applications.
                                    </div>
                                </li>
                            </div>
                            <div class=" online-tool-box bg-blue-100">
                                <li class="flex items-start space-x-4">
                                    <div>
                                        <h5 class="">Audible</h5>
                                        Audible offers audiobooks that you can
                                        listen to while engaging in kinaesthetic
                                        activities. Audiobooks are perfect for
                                        auditory learners, and you can pair them
                                        with physical activities like taking
                                        notes or creating models related to the
                                        content.
                                    </div>
                                </li>
                            </div>
                            <div class=" online-tool-box bg-green-100">
                                <li class="flex items-start space-x-4">
                                    <div>
                                        <h5 class="">Notion</h5>
                                        Notion is a versatile tool where you
                                        can create detailed notes and integrate
                                        voice recordings. You can record verbal
                                        explanations of concepts and use visual
                                        aids such as diagrams or tables,
                                        supporting both auditory and
                                        kinaesthetic learning methods.
                                    </div>
                                </li>
                            </div>
                            <div class=" online-tool-box bg-yellow-100">
                                <li class="flex items-start space-x-4">
                                    <div>
                                        <h5 class="">
                                            MindMeister
                                        </h5>
                                        MindMeister allows you to create mind
                                        maps that visually organise information.
                                        You can add notes and verbal
                                        explanations to your mind maps, which
                                        helps combine visual and auditory
                                        elements while also engaging in the
                                        physical act of creating the maps.
                                    </div>
                                </li>
                            </div>
                            <div class=" online-tool-box bg-pink-200">
                                <li class="flex items-start space-x-4">
                                    <div>
                                        <h5 class="">Trello</h5>
                                        Trello is a project management tool
                                        that helps you organise tasks using
                                        boards and cards. You can add
                                        checklists, attach audio notes, and use
                                        interactive elements to keep track of
                                        your study progress, making it useful
                                        for kinaesthetic learners who benefit
                                        from organising tasks physically.
                                    </div>
                                </li>
                            </div>
                            <div class=" online-tool-box bg-green-50">
                                <li class="flex items-start space-x-4">
                                    <div>
                                        <h5 class="">Otter.ai</h5>
                                        Otter.ai provides transcription
                                        services where you can record and
                                        transcribe lectures or discussions. You
                                        can review these transcripts while
                                        engaging in kinaesthetic activities,
                                        reinforcing your auditory learning with
                                        written and interactive elements.
                                    </div>
                                </li>
                            </div>
                        </div>
                       
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Report 6 Kinesthethic _ Reading & Writing -->
    <div v-if="style == 'Kinesthethic/Reading/Writing'">
        <!-- Content for Report 6 -->
        <div class="p-6 space-y-6">
            <div class="row">
                <h4 class="text-2xl font-bold ">
                    Effective Study Strategies for Kinaesthetic and
                    Reading/Writing Learners
                </h4>
                <p>
                    As a blended kinaesthetic and reading/writing learner, you can enhance your exam preparation by incorporating both physical activities and written techniques. Here are five strategies to help you prepare for exams:

                </p>
                <div class="row justify-center">
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Use Hands-On Learning Before Writing
                                    Summaries
                                </h4>
                                <p>
                                    Start by engaging in hands-on activities or
                                    experiments related to the material.
                                    Afterwards, write detailed summaries or notes
                                    about what you’ve learned. This combination
                                    of physical learning followed by writing
                                    reinforces your understanding.
                                </p>
                            </div>
                        </li>
                    </div>
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Incorporate Movement While Reviewing Written
                                    Notes
                                </h4>
                                <p>
                                    While reviewing your written notes, try
                                    moving around or using a standing desk to
                                    keep yourself engaged. Pacing or engaging in
                                    light physical activity helps maintain your
                                    focus and energy levels during long study
                                    sessions.
                                </p>
                            </div>
                        </li>
                    </div>
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Create Flashcards with Kinaesthetic
                                    Interaction
                                </h4>
                                <p>
                                    Use flashcards to review key concepts and
                                    add a kinaesthetic element by physically
                                    moving them around, organising them into
                                    categories, or using them in a tactile way
                                    (e.g., shuffling them). This helps reinforce
                                    the material through both physical and
                                    written methods.
                                </p>
                            </div>
                        </li>
                    </div>
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Alternate Between Writing and Physical Study
                                    Methods
                                </h4>
                                <p>
                                    Break your study sessions into segments
                                    where you alternate between writing notes or
                                    summaries and engaging in physical
                                    activities, like building models or acting
                                    out scenarios. This dual approach keeps you
                                    focused and reinforces the material in
                                    multiple ways.
                                </p>
                            </div>
                        </li>
                    </div>
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Summarise Hands-On Activities in Writing
                                </h4>
                                <p>
                                    After engaging in physical learning
                                    activities, such as conducting experiments
                                    or building diagrams, write a detailed
                                    summary or reflection. This process helps
                                    you process and retain information by
                                    converting physical experiences into written
                                    knowledge.
                                </p>
                            </div>
                        </li>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                        class="w-80 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/study/11.svg'"
                        alt=""
                        />
                    </div>
                </div>
                <div class="col-6">
                    <h4 class="text-md font-bold ">
                        Practical Tips for Exam Preparation
                    </h4>
                    <ul class="space-y-4 ">
                        <li>
                            <strong class=""
                                >Write Summaries After Physical
                                Engagement</strong
                            ><br />
                            After each kinaesthetic learning session, such as a
                            lab experiment or hands-on task, write a summary to
                            reinforce what you’ve learned. This combination of
                            physical activity and writing ensures better
                            retention of the material.
                        </li>
                        <li>
                            <strong class=""
                                >Use Written Outlines with Kinaesthetic Study
                                Aids</strong
                            ><br />
                            Create written outlines of key concepts and pair
                            them with kinaesthetic study aids, such as building
                            models or acting out processes. This blend of
                            learning styles helps solidify your understanding
                            before exams.
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <ul class="space-y-4 ">
                        <li>
                            <strong class=""
                                >Take Breaks to Move During Long Writing
                                Sessions</strong
                            ><br />
                            When studying for exams, break up long reading and
                            writing sessions with short physical breaks. Engage
                            in light movement or stretch to reset your focus
                            before returning to writing tasks.
                        </li>
                        <li>
                            <strong class=""
                                >Incorporate Active Learning with Written
                                Notes</strong
                            ><br />
                            Use active learning techniques, such as role-playing
                            or interactive models, to understand complex
                            concepts. Afterwards, write down the key points or
                            take notes to reinforce the material in written
                            form.
                        </li>
                    </ul>
                </div>

                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-80 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/study/12.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h4 class="text-md font-bold ">
                        Online Tools for Blended Learners
                    </h4>
                    <p class="">
                        Here are some online tools that can help you engage both
                        your kinaesthetic and reading/writing learning styles:
                    </p>

                    <ul class="space-y-4 ">
                        <div class="row justify-center">
                            <div class=" online-tool-box bg-red-100">
                                <div>
                                    <h5 class="">Evernote:</h5>
                                    Evernote is an excellent tool for organising
                                    your notes and writing summaries. You can
                                    create detailed study plans and written
                                    outlines while using the app's features to
                                    add visual and interactive elements like
                                    checklists or diagrams.
                                </div>
                            </div>
                            <div class=" online-tool-box bg-blue-100">
                                <div>
                                    <h5 class="">Notion:</h5>
                                    Notion allows you to create comprehensive
                                    study databases, including written notes,
                                    study schedules, and visual tools like
                                    tables and timelines. You can use it to
                                    organise both reading/writing tasks and
                                    track hands-on learning activities.
                                </div>
                            </div>
                            <div class=" online-tool-box bg-green-100">
                                <div>
                                    <h5 class="">GoConqr:</h5>
                                    GoConqr provides an interactive platform
                                    where you can create mind maps, flashcards,
                                    and quizzes. These tools cater to both
                                    kinaesthetic and reading/writing learners by
                                    combining physical interaction with written
                                    content.
                                </div>
                            </div>
                            <div class=" online-tool-box bg-yellow-100">
                                <div>
                                    <h5 class="">MindMeister:</h5>
                                    MindMeister is a mind-mapping tool that
                                    helps you visually organise complex
                                    concepts. It engages your kinaesthetic
                                    learning by allowing you to build diagrams,
                                    while also reinforcing reading/writing
                                    skills through written summaries and
                                    explanations.
                                </div>
                            </div>
                            <div class=" online-tool-box bg-pink-200">
                                <div>
                                    <h5 class="">Trello:</h5>
                                    Trello is a project management tool that can
                                    be used to organise study tasks. You can
                                    create boards and lists for your
                                    reading/writing tasks and use its
                                    interactive features to physically move
                                    cards as you complete assignments.
                                </div>
                            </div>
                            <div class=" online-tool-box bg-green-50">
                                <div>
                                    <h5 class="">Coggle:</h5>
                                    Coggle allows you to create flowcharts and
                                    diagrams that visually represent complex
                                    information. You can use it to map out
                                    ideas, combining kinaesthetic engagement
                                    with reading/writing by creating detailed
                                    visual representations.
                                </div>
                            </div>
                        </div>
                      
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Report 7 Kinesthethic _ Visual Blend-->
    <div v-if="style == 'Kinesthethic/Visual'">
        <!-- Content for Report 7 -->
        <div class="p-6 space-y-6">
            <div class="row">
                <h4 class="text-2xl font-bold ">
                    Effective Study Strategies for Kinaesthetic and Visual
                    Learners
                </h4>
                <p>
                    As a blended kinaesthetic and visual learner, you benefit from seeing information and interacting with it physically. Here are five strategies to help you prepare for exams:

                </p>
                <div class="row justify-center">
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Use Visual Aids During Hands-On Practice
                                </h4>
                                <p>
                                    Combine visual aids like diagrams, charts,
                                    and illustrations with hands-on practice.
                                    For example, use physical models or props to
                                    demonstrate the concepts you're learning
                                    while reviewing visual summaries. This
                                    combination helps reinforce understanding
                                    through both seeing and doing.
                                </p>
                            </div>
                        </li>
                    </div>
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Create Visual Summaries After Hands-On
                                    Learning
                                </h4>
                                <p>
                                    After completing hands-on activities like
                                    lab experiments or practical exercises,
                                    create visual summaries, such as mind maps
                                    or flowcharts. These summaries will help you
                                    consolidate what you've learned and give you
                                    a clear visual reference to review before
                                    the exam.
                                </p>
                            </div>
                        </li>
                    </div>
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Use Movement While Reviewing Material
                                </h4>
                                <p>
                                    Incorporate movement into your study routine
                                    to help you focus and retain information.
                                    For example, walk around or use gestures
                                    while reviewing notes or flashcards.
                                    Movement helps kinaesthetic learners stay
                                    engaged and absorb information more
                                    effectively.
                                </p>
                            </div>
                        </li>
                    </div>
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Simulate Real-World Applications
                                </h4>
                                <p>
                                    Apply concepts you're studying to real-life
                                    situations whenever possible. For example,
                                    if you're studying geometry, try building
                                    shapes or measuring objects. This hands-on
                                    approach helps you understand abstract
                                    concepts by relating them to physical tasks.
                                </p>
                            </div>
                        </li>
                    </div>
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Organise Study Materials Visually
                                </h4>
                                <p>
                                    Use tools like colour-coded notes, diagrams,
                                    or visual checklists to organise your study
                                    materials. This allows you to see the
                                    material in a structured way, which helps
                                    reinforce the content visually while you
                                    engage physically with the material.
                                </p>
                            </div>
                        </li>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                        class="w-80 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/study/12.svg'"
                        alt=""
                        />
                    </div>
                </div>
                <div class="col-6">
                    <h4 class="text-md font-bold ">
                        Practical Tips for Exam Preparation
                    </h4>
                    <ul class="space-y-2 ">
                        <li>
                            <strong class=""
                                >Combine Physical and Visual Study Tools</strong
                            ><br />
                            Create visual aids like charts, diagrams, or
                            flashcards and use them during hands-on activities,
                            such as building models or conducting experiments.
                            This reinforces information through both visual and
                            physical methods.
                        </li>
                        <li>
                            <strong class=""
                                >Review Information While Moving</strong
                            ><br />
                            Incorporate movement into your study sessions, such
                            as pacing while reading notes or using gestures to
                            recall key information. Movement keeps you focused
                            and helps kinaesthetic learners retain the material
                            more effectively.
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <ul class="space-y-2 ">
                        <li>
                            <strong class=""
                                >Simulate Exam Conditions</strong
                            ><br />
                            Practice answering exam questions in a way that
                            mimics the exam environment. For example, time
                            yourself as you answer questions and use visual aids
                            or physical materials to simulate real-world tasks.
                        </li>
                        <li>
                            <strong class=""
                                >Break Down Complex Concepts Visually</strong
                            ><br />
                            Use diagrams or flowcharts to break down complex
                            ideas into smaller, more manageable pieces.
                            Reviewing these visual aids while engaging in
                            hands-on tasks will help solidify your understanding
                            of the material.
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-80 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/study/11.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h4 class="text-md font-bold ">
                        Online Tools for Blended Learners
                    </h4>
                    <p class="">
                        Here are some online tools that can help you engage both
                        your kinaesthetic and visual learning styles:
                    </p>
                    <ul class="space-y-2 ">
                        <div class="row justify-center">
                            <div class=" online-tool-box bg-red-100">
                                <div>
                                    <h5 class="">Khan Academy</h5>
                                    Khan Academy offers a wide range of
                                    educational content with visual explanations
                                    like videos, diagrams, and interactive
                                    lessons. For kinaesthetic learners, hands-on
                                    exercises and challenges let you apply what
                                    you’ve learned in a practical way.
                                </div>
                            </div>
                            <div class=" online-tool-box bg-blue-100">
                                <div>
                                    <h5 class="">SketchUp</h5>
                                    SketchUp is a 3D modelling tool perfect for
                                    kinaesthetic learners who enjoy building and
                                    manipulating structures. It allows you to
                                    create detailed models while visualising the
                                    outcome in real-time, combining both visual
                                    and hands-on learning.
                                </div>
                            </div>
                            <div class=" online-tool-box bg-green-100">
                                <div>
                                    <h5 class="">GeoGebra</h5>
                                    GeoGebra provides interactive geometry,
                                    algebra, and calculus tools that combine
                                    visual learning with hands-on manipulation
                                    of mathematical objects. It’s ideal for
                                    kinaesthetic learners who benefit from
                                    engaging with mathematical concepts
                                    actively.
                                </div>
                            </div>
                            <div class=" online-tool-box bg-yellow-100">
                                <div>
                                    <h5 class="">Tinkercad</h5>
                                    Tinkercad is a 3D design and modelling tool
                                    where kinaesthetic learners can create and
                                    interact with models, reinforcing learning
                                    through hands-on projects while visualising
                                    concepts.
                                </div>
                            </div>
                            <div class=" online-tool-box bg-pink-200">
                                <div>
                                    <h5 class="">MindMeister</h5>
                                    MindMeister allows you to create mind maps
                                    to visualise complex ideas and break down
                                    concepts visually. For kinaesthetic
                                    learners, interacting with and reorganising
                                    the mind maps helps reinforce information
                                    through physical engagement.
                                </div>
                            </div>
                            <div class=" online-tool-box bg-green-50">
                                <div>
                                    <h5 class="">Quizlet</h5>
                                    Use Quizlet to create flashcards with both
                                    visual and interactive elements. You can
                                    pair images with terms and test yourself
                                    through interactive games, engaging both
                                    visual and kinaesthetic learning styles.
                                </div>
                            </div>
                        </div>
                       
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Report 8 Kinesthethic-->
    <div v-if="style == 'Kinesthethic'">
        <!-- Content for Report 8 -->
        <div class="space-y-6 p-6">
            <div class="row">
                <h1 class="text-2xl font-bold ">
                    Effective Study Strategies for Kinaesthetic Learners
                </h1>
                <p class="">
                    As a kinaesthetic learner, you excel when you can engage
                    physically with the material. Here are some tailored
                    strategies to help you prepare for exams:
                </p>
                <div class="row justify-center">
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Use Hands-On Learning Methods
                                </h4>
                                <p>
                                    When studying, incorporate physical
                                    activities like building models, drawing
                                    diagrams, or using tools that allow you to
                                    manipulate objects. Engaging physically with
                                    the material helps reinforce your learning.
                                </p>
                            </div>
                        </li>
                    </div>
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Take Frequent Movement Breaks
                                </h4>
                                <p>
                                    Sitting for long periods may hinder your
                                    focus. Break up study sessions by moving
                                    every 20-30 minutes. A short walk or stretch
                                    helps re-energise you, keeping your mind
                                    sharp and ready to absorb more information.
                                </p>
                            </div>
                        </li>
                    </div>
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Create Physical Study Tools
                                </h4>
                                <p>
                                    Make study aids such as flashcards, mind
                                    maps, or 3D models. Creating and using these
                                    tools will help you engage both physically
                                    and mentally with the material, improving
                                    memory and understanding.
                                </p>
                            </div>
                        </li>
                    </div>
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Simulate or Act Out Key Concepts
                                </h4>
                                <p>
                                    For topics that involve processes or
                                    sequences, act them out or use gestures to
                                    mimic the steps. This kinaesthetic
                                    engagement helps you grasp concepts more
                                    deeply and makes recall easier during exams.
                                </p>
                            </div>
                        </li>
                    </div>
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Study with Real-World Examples
                                </h4>
                                <p>
                                    Try connecting what you’re studying to
                                    real-life situations. For instance, if
                                    studying math, use objects around you to
                                    practice solving problems. This hands-on
                                    approach helps you visualise and remember
                                    the material better.
                                </p>
                            </div>
                        </li>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                        class="w-80 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/study/12.svg'"
                        alt=""
                        />
                    </div>
                </div>
                <div class="col-6">
                    <h1 class="text-2xl font-bold ">
                        Practical Tips for Exam Preparation
                    </h1>
                    <ul class="pl-5 space-y-1">

                        <li>
                            <strong>Review Using Movement</strong><br />
                            Try studying while walking or moving around.
                            Reviewing notes while you walk or pacing during
                            study sessions helps you stay engaged and process
                            information more effectively.
                        </li>
                        <li>
                            <strong>Use Real-Life Examples</strong><br />
                            Apply what you’re studying to real-life scenarios.
                            For example, if you’re learning about historical
                            events, try acting out key moments or connecting
                            them to something physical. This will help you
                            internalise the material and recall it during the
                            exam.
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <ul class="pl-5 space-y-1">
                        <li>
                            <strong
                                >Break Down Study Time with Physical
                                Activity</strong
                            ><br />
                            Alternate between studying and short bursts of
                            physical activity. Set a timer for 25-30 minutes of
                            focused study time, followed by a 5-minute break to
                            move around. This keeps your body engaged and
                            refreshes your concentration.
                        </li>
                        <li>
                            <strong>Utilise Fidget Tools</strong><br />
                            Using a fidget tool or stress ball while studying
                            can help you stay focused. It allows you to engage
                            in minor physical activity, which can aid your
                            concentration during long study sessions.
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-80 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/study/11.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h1 class="text-2xl font-bold ">
                        Online Tools for Kinaesthetic Learners
                    </h1>

                    <ul class="pl-6  space-y-2">
                        <div class="row justify-center">
                            <div class=" online-tool-box bg-red-100">
                                <div>
                                    <h5>Brilliant:</h5>
                                    Brilliant offers interactive, problem-solving courses in math, science, and computer science. Kinaesthetic learners can benefit from the hands-on approach to learning, engaging with real-world problems through interactive lessons and simulations.

                                </div>
                            </div>
                            <div class=" online-tool-box bg-blue-100">
                                <div>
                                    <h5>Quizlet:</h5>
                                    Quizlet provides flashcards, games, and interactive study tools. Kinaesthetic learners can make use of the learning games, writing out flashcards, and testing themselves with physical interaction. It's a great way to add some tactile engagement to studying.

                                </div>
                            </div>
                            <div class=" online-tool-box bg-green-100">
                                <div>
                                    <h5>Tinkercad:</h5>
                                    Tinkercad allows you to create 3D models and engage with design projects. This tool is ideal for kinaesthetic learners who enjoy working hands-on, whether for creative projects or for learning design and engineering concepts.

                                </div>
                            </div>
                            <div class=" online-tool-box bg-yellow-100">
                                <div>
                                    <h5>Khan Academy:</h5>
                                    Khan Academy provides exercises and interactive challenges, particularly in math and science. Kinaesthetic learners can benefit from actively solving problems and engaging with material through hands-on practice.
    
                                </div>
                            </div>
                            <div class=" online-tool-box bg-pink-200">
                                <div>
                                    <h5>Code.org:</h5>
                                    Code.org teaches coding through interactive lessons and challenges. Kinaesthetic learners can engage with coding puzzles, drag-and-drop activities, and games to learn coding in a hands-on, applied manner.
                                </div>
                            </div>
                            <div class=" online-tool-box bg-green-50">
                                <div>
                                    <h5>Scratch:</h5>
                                    Scratch is a creative platform for building games and animations. It's perfect for teens who enjoy interactive learning and want to explore programming and storytelling by creating and testing their own projects.
    
                                </div>
                            </div>
                        </div>
                      
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Report 9 Reading & Writing _ Auditory Blend -->
    <div v-if="style == 'Reading/Writing/Auditory'">
        <!-- Content for Report 9 -->
        <div class="space-y-4 p-4">
            <div class="row">
                <h1 class="text-2xl font-bold">
                    Effective Study Strategies for Reading/Writing and Auditory
                    Learners
                </h1>
                <p>
                    As a reading/writing and auditory learner, you can enhance your exam preparation by incorporating both listening and writing techniques. Here are five strategies to help you prepare for exams:

                </p>
                <div class="row justify-center">



                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Listen to Lectures and Summarise in Writing
                                </h4>
                                <p>
                                    Start by listening to recorded lectures or
                                    podcasts on the subject matter. Afterwards,
                                    write summaries or detailed notes. This
                                    helps reinforce what you’ve heard through
                                    the act of writing, allowing you to retain
                                    key points for exams.
                                </p>
                            </div>
                        </li>
                    </div>
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Record Yourself Reading Notes and Listen for
                                    Review
                                </h4>
                                <p>
                                    Record yourself reading out your notes or
                                    key concepts, then listen to these
                                    recordings during your review sessions. This
                                    approach engages both your auditory and
                                    reading/writing strengths and reinforces the
                                    material through repetition.
                                </p>
                            </div>
                        </li>
                    </div>
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Create Written Summaries After Listening
                                    Sessions
                                </h4>
                                <p>
                                    After a study session involving audio
                                    materials (e.g., lectures or discussions),
                                    write summaries to consolidate your
                                    understanding. Writing down what you’ve
                                    heard helps transfer auditory input into
                                    written memory.
                                </p>
                            </div>
                        </li>
                    </div>
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Combine Written Practice with Verbal Review
                                </h4>
                                <p>
                                    Write practice essays, outlines, or
                                    summaries, then review them aloud to
                                    yourself or a study partner. This verbal
                                    review helps you clarify and reinforce the
                                    written material, making it easier to
                                    remember during exams.
                                </p>
                            </div>
                        </li>
                    </div>
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Use Flashcards with Written and Audio
                                    Elements
                                </h4>
                                <p>
                                    Create flashcards that combine written key
                                    terms with audio explanations. Record
                                    yourself explaining the concepts, then use
                                    these recordings to review the content while
                                    reading the flashcards. This integration
                                    helps solidify the material in your memory.
                                </p>
                            </div>
                        </li>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                        class="w-80 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/study/12.svg'"
                        alt=""
                        />
                    </div>
                </div>
                <div class="col-6">
                    <h4 class="text-2xl font-bold">
                        Practical Tips for Exam Preparation
                    </h4>
                    <div>
                        <ul class="pl-5 space-y-1">
                            <li>
                                <strong
                                    >Create Audio Notes for Key Concepts</strong
                                ><br />
                                Record audio notes of essential topics and
                                listen to them while on the go or during study
                                breaks. This helps reinforce auditory learning,
                                while you can refer to written notes later for
                                deeper understanding.
                            </li>
                            <li>
                                <strong
                                    >Use Written Outlines and Audio
                                    Summaries</strong
                                ><br />
                                Outline each chapter or topic in written form
                                and then create short audio summaries of the
                                most important points. Listening to these
                                summaries before an exam reinforces the
                                material, while the outlines provide detailed
                                structure for review.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div>
                        <ul class="pl-5 space-y-1">
                            <li>
                                <strong
                                    >Practice Writing Timed Essays and Review
                                    Them Verbally</strong
                                ><br />
                                Practice writing essays under timed conditions,
                                then review your work by reading it aloud. This
                                verbal review helps improve your ability to
                                recall information during the actual exam and
                                ensures clarity in your writing.
                            </li>
                            <li>
                                <strong
                                    >Listen to Recordings During Breaks</strong
                                ><br />
                                During study breaks, listen to recorded
                                summaries or key points to keep the material
                                fresh in your mind. This practice reinforces
                                your auditory learning while allowing you to
                                rest from writing tasks.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/study/11.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div>
                        <h4 class="text-2xl font-bold">
                            Online Tools for Blended Learners
                        </h4>
                        <p>
                            Here are some online tools that can help you engage
                            both your reading/writing and auditory learning
                            styles:
                        </p>
                        <ul class="pl-5 space-y-1">
                            <div class="row justify-center">
                                <div class=" online-tool-box bg-red-100">
                                    <div>
                                        <h5>Audible</h5>
                                        Audible offers a vast library of
                                        audiobooks, making it easy to listen to
                                        educational content on the go. Use this
                                        tool to listen to subject-related books
                                        or summaries and complement it by taking
                                        written notes to reinforce the material.
                                    </div>
                                </div>
                                <div class=" online-tool-box bg-blue-100">
                                    <div>
                                        <h5>Notion</h5>
                                        Notion allows you to create detailed
                                        study plans, write notes, and embed
                                        audio recordings. You can organise your
                                        learning materials by subject, making it
                                        easy to switch between written content
                                        and auditory reviews.
                                    </div>
                                </div>
                                <div class=" online-tool-box bg-green-100">
                                    <div>
                                        <h5>Google Keep</h5>
                                        Google Keep is a note-taking tool that
                                        supports both written and audio
                                        features. You can take quick written
                                        notes and also record verbal reminders
                                        or explanations, helping you reinforce
                                        key concepts with both auditory and
                                        written elements.
                                    </div>
                                </div>
                                <div
                                    class=" online-tool-box bg-yellow-100"
                                >
                                    <div>
                                        <h5>Microsoft OneNote</h5>
                                        OneNote allows you to organise your
                                        notes and embed audio clips into your
                                        written materials. This helps you
                                        combine both auditory and written
                                        learning methods, offering an integrated
                                        space for reviewing lecture notes and
                                        your own recordings.
                                    </div>
                                </div>
                                <div class=" online-tool-box bg-pink-200">
                                    <div>
                                        <h5>Otter.ai</h5>
                                        Otter.ai transcribes lectures,
                                        discussions, or audio recordings into
                                        written text, allowing you to review
                                        what you’ve heard in written form. This
                                        tool helps you convert auditory input
                                        into written summaries, reinforcing both
                                        learning methods.
                                    </div>
                                </div>
                                <div class=" online-tool-box bg-green-50">
                                    <div>
                                        <h5>Speechify</h5>
                                        Speechify is a text-to-speech app that
                                        reads written content aloud. You can use
                                        this tool to listen to articles, essays,
                                        or study notes while taking additional
                                        written notes to reinforce your
                                        understanding.
                                    </div>
                                </div>
                            </div>
                          
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
                <h4 class="text-2xl font-bold mb-4">
                    Effective Study Strategies for Reading / Writing and
                    Kinaesthetic Learners
                </h4>
                <p class="mb-4">
                    As a blended reading/writing and kinaesthetic learner, you
                    can enhance your exam preparation by incorporating both
                    physical activities and written techniques. Here are five
                    strategies to help you prepare for exams:
                </p>
                <div class="row justify-center">
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Use Hands-On Learning Before Writing
                                    Summaries
                                </h4>
                                <p>
                                    Start by engaging in hands-on activities or
                                    experiments related to the material.
                                    Afterwards, write detailed summaries or notes
                                    about what you’ve learned. This combination
                                    of physical learning followed by writing
                                    reinforces your understanding.
                                </p>
                            </div>
                        </li>
                    </div>
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Incorporate Movement While Reviewing Written
                                    Notes
                                </h4>
                                <p>
                                    While reviewing your written notes, try
                                    moving around or using a standing desk to
                                    keep yourself engaged. Pacing or engaging in
                                    light physical activity helps maintain your
                                    focus and energy levels during long study
                                    sessions.
                                </p>
                            </div>
                        </li>
                    </div>
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Create Flashcards with Kinaesthetic
                                    Interaction
                                </h4>
                                <p>
                                    Use flashcards to review key concepts and
                                    add a kinaesthetic element by physically
                                    moving them around, organising them into
                                    categories, or using them in a tactile way
                                    (e.g., shuffling them). This helps reinforce
                                    the material through both physical and
                                    written methods.
                                </p>
                            </div>
                        </li>
                    </div>
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Alternate Between Writing and Physical Study
                                    Methods
                                </h4>
                                <p>
                                    Break your study sessions into segments
                                    where you alternate between writing notes or
                                    summaries and engaging in physical
                                    activities, like building models or acting
                                    out scenarios. This dual approach keeps you
                                    focused and reinforces the material in
                                    multiple ways.
                                </p>
                            </div>
                        </li>
                    </div>
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Summarise Hands-On Activities in Writing
                                </h4>
                                <p>
                                    After engaging in physical learning
                                    activities, such as conducting experiments
                                    or building diagrams, write a detailed
                                    summary or reflection. This process helps
                                    you process and retain information by
                                    converting physical experiences into written
                                    knowledge.
                                </p>
                            </div>
                        </li>
                    </div>
                </div>
            </div>

            <div class="row">


                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                        class="w-80 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/study/12.svg'"
                        alt=""
                        />
                    </div>
                </div>
                <div class="col-6">
                    <h4 class="text-md font-bold mt-6 mb-2">
                        Practical Tips for Exam Preparation
                    </h4>
                    <ul class="pl-5 mb-6">
                        <li>
                            <strong
                                >Write Summaries After Physical
                                Engagement</strong
                            ><br />
                            After each kinaesthetic learning session, such as a
                            lab experiment or hands-on task, write a summary to
                            reinforce what you’ve learned. This combination of
                            physical activity and writing ensures better
                            retention of the material.
                        </li>
                        <li>
                            <strong
                                >Use Written Outlines with Kinaesthetic Study
                                Aids</strong
                            ><br />
                            Create written outlines of key concepts and pair
                            them with kinaesthetic study aids, such as building
                            models or acting out processes. This blend of
                            learning styles helps solidify your understanding
                            before exams.
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <ul class="pl-5 mb-6">
                        <li>
                            <strong
                                >Take Breaks to Move During Long Writing
                                Sessions</strong
                            ><br />
                            When studying for exams, break up long reading and
                            writing sessions with short physical breaks. Engage
                            in light movement or stretch to reset your focus
                            before returning to writing tasks.
                        </li>
                        <li>
                            <strong
                                >Incorporate Active Learning with Written
                                Notes</strong
                            ><br />
                            Use active learning techniques, such as role-playing
                            or interactive models, to understand complex
                            concepts. Afterwards, write down the key points or
                            take notes to reinforce the material in written
                            form.
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-80 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/study/11.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h4 class="text-md font-bold mt-6 mb-2">
                        Online Tools for Blended Learners
                    </h4>
                    <p class="mb-4">
                        Here are some online tools that can help you engage both
                        your reading/writing and kinaesthetic learning styles:
                    </p>
                    <ul class="pl-5 mb-6">
                        <div class="row justify-center">
                            <div class=" online-tool-box bg-red-100">
                                <div>
                                    <h5>Evernote</h5>
                                    Evernote is an excellent tool for organising
                                    your notes and writing summaries. You can
                                    create detailed study plans and written
                                    outlines while using the app's features to
                                    add visual and interactive elements like
                                    checklists or diagrams.
                                </div>
                            </div>
                            <div class=" online-tool-box bg-blue-100">
                                <div>
                                    <h5>Notion</h5>
                                    Notion allows you to create comprehensive
                                    study databases, including written notes,
                                    study schedules, and visual tools like
                                    tables and timelines. You can use it to
                                    organise both reading/writing tasks and
                                    track hands-on learning activities.
                                </div>
                            </div>
                            <div class=" online-tool-box bg-green-100">
                                <div>
                                    <h5>GoConqr</h5>
                                    GoConqr provides an interactive platform
                                    where you can create mind maps, flashcards,
                                    and quizzes. These tools cater to both
                                    kinaesthetic and reading/writing learners by
                                    combining physical interaction with written
                                    content.
                                </div>
                            </div>
                            <div class=" online-tool-box bg-yellow-100">
                                <div>
                                    <h5>MindMeister</h5>
                                    MindMeister is a mind-mapping tool that
                                    helps you visually organise complex
                                    concepts. It engages your kinaesthetic
                                    learning by allowing you to build diagrams,
                                    while also reinforcing reading/writing
                                    skills through written summaries and
                                    explanations.
                                </div>
                            </div>
                            <div class=" online-tool-box bg-pink-200">
                                <div>
                                    <h5>Trello</h5>
                                    Trello is a project management tool that can
                                    be used to organise study tasks. You can
                                    create boards and lists for your
                                    reading/writing tasks and use its
                                    interactive features to physically move
                                    cards as you complete assignments.
                                </div>
                            </div>
                            <div class=" online-tool-box bg-green-50">
                                <div>
                                    <h5>Coggle</h5>
                                    Coggle allows you to create flowcharts and
                                    diagrams that visually represent complex
                                    information. You can use it to map out
                                    ideas, combining kinaesthetic engagement
                                    with reading/writing by creating detailed
                                    visual representations.
                                </div>
                            </div>
                        </div>
                    
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
                <h4 class="text-2xl font-bold mb-4">
                    Effective Study Strategies for Reading/Writing and Visual
                    Learners
                </h4>
                <p class="mb-6">
                    As a reading/writing and visual learner, you perform best
                    when you can combine both visual aids and written methods in
                    your exam preparation. Here are five strategies to help you
                    prepare for exams:
                </p>
                <div class="row justify-center">
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Create Visual Study Aids with Written Notes
                                </h4>
                                <p>
                                    Combine visual aids such as diagrams, mind
                                    maps, or charts with detailed written notes.
                                    The act of writing down your thoughts while
                                    using visuals helps reinforce key concepts
                                    and creates a more engaging study
                                    experience.
                                </p>
                            </div>
                        </li>
                    </div>
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Write Summaries with Visuals
                                </h4>
                                <p>
                                    After studying a topic, write a detailed
                                    summary of the material and pair it with a
                                    visual representation (such as a flowchart
                                    or timeline). This combination helps you
                                    process information both visually and
                                    textually, making it easier to remember.
                                </p>
                            </div>
                        </li>
                    </div>
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Practice Writing Exam Answers
                                </h4>
                                <p>
                                    Prepare for exams by writing out answers to
                                    practice questions. This strengthens your
                                    ability to articulate your knowledge in
                                    written form and ensures you can respond
                                    effectively during the exam.
                                </p>
                            </div>
                        </li>
                    </div>
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Review Visual and Written Materials
                                    Alternately
                                </h4>
                                <p>
                                    Alternate between reviewing visual aids and
                                    reading or writing notes. For instance,
                                    review a chart or diagram and then summarise
                                    the information in writing. This approach
                                    reinforces concepts by engaging multiple
                                    aspects of your learning style.
                                </p>
                            </div>
                        </li>
                    </div>
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Use Flashcards with Diagrams
                                </h4>
                                <p>
                                    Create flashcards that include both text and
                                    visuals. On one side, write a definition or
                                    key term, and on the other, include a
                                    diagram or chart. This method uses both your
                                    visual and reading/writing strengths to aid
                                    recall during exams.
                                </p>
                            </div>
                        </li>
                    </div>
                </div>
            </div>

            <div class="row mt-4">

                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                        class="w-80 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/study/12.svg'"
                        alt=""
                        />
                    </div>
                </div>
                <div class="col-6">
                    <h4 class="text-md font-bold mb-4">
                        Practical Tips for Exam Preparation
                    </h4>
                    <ul class="pl-5 mb-6">
                        <li>
                            <strong>Create Visual Study Guides</strong><br />
                            Develop study guides that merge both written explanations and visual aids. Break down complex ideas by using bullet points for written summaries and adding charts, graphs, or diagrams to illustrate key concepts. These study guides will serve as comprehensive, easy-to-review materials before exams.

                        </li>
                        <li>
                            <strong
                                >Use Flashcards with Both Text and
                                Visuals</strong
                            ><br />
                            When creating flashcards, include not only key terms
                            and definitions but also visual elements like
                            symbols, charts, or quick diagrams. Reviewing these
                            flashcards helps you process the material through
                            both your reading/writing and visual learning
                            strengths. Use them frequently to test yourself and
                            reinforce memory retention.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <ul class="pl-5 mb-6">
                        <li>
                            <strong>Take Notes While Reviewing Visuals</strong
                            ><br />
                            While engaging with visual aids (such as videos,
                            infographics, or diagrams), take detailed notes to
                            summarise the key points. Writing down your thoughts
                            after viewing a visual aid helps deepen your
                            understanding and reinforces the content, making it
                            easier to recall during exams.
                        </li>
                        <li>
                            <strong
                                >Test Yourself with Timed Writing
                                Exercises</strong
                            ><br />
                            Simulate the exam environment by writing answers to
                            practice questions under timed conditions. Not only
                            will this help you get used to time management, but
                            it will also give you the confidence to articulate
                            your knowledge clearly in written form. Review your
                            answers afterwards to identify areas for improvement.
                        </li>
                    </ul>
                </div>

                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-80 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/study/11.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h4 class="text-md font-bold mb-4">
                        Online Tools for Blended Learners

                    </h4>
                    <p class="mb-6">
                        Here are some online tools that can help you engage both
                        your reading/writing and visual learning styles:
                    </p>

                    <ul class="pl-5 mb-6">
                        <div class="row justify-center">
                            <div class=" online-tool-box bg-red-100">
                                <div>
                                    <h5>Canva</h5>
                                    Canva is a powerful graphic design tool that allows you to create visual study aids like infographics, diagrams, and mind maps. It’s especially useful for visual learners who need to break down complex information into easy-to-understand visuals. You can also incorporate written notes into your designs, creating a blend of visual and text-based learning tools.
                                </div>
                            </div>
                            <div class=" online-tool-box bg-blue-100">
                                <div>
                                    <h5>Evernote</h5>
                                    Evernote is a comprehensive note-taking app that allows you to organise your written notes while integrating visual elements like images, charts, and PDFs. You can create notebooks for different subjects, annotate documents, and search through your notes to quickly find key information. This tool helps you combine your reading/writing strengths with visual learning by embedding visuals alongside your notes.
                                </div>
                            </div>
                            <div class=" online-tool-box bg-green-100">
                                <div>
                                    <h5>Quizlet</h5>
                                    Quizlet allows you to create flashcards that combine both text and visuals. You can create study sets for any subject, using text-based questions and answers on one side and images or diagrams on the other. The app also offers interactive study modes, including games and quizzes, that engage both your reading/writing and visual learning styles.


                                </div>
                            </div>
                            <div class=" online-tool-box bg-yellow-100">
                                <div>
                                    <h5>Notion</h5>
                                    Notion is an all-in-one workspace where you can write notes, organise tasks, and incorporate visual elements. You can create comprehensive study guides with both written and visual components, such as embedded images, tables, and diagrams. Notion’s flexibility allows you to combine your reading/writing and visual preferences in a seamless way, helping you stay organised and engaged with your studies.
    
    
                                </div>
                            </div>
                            <div class=" online-tool-box bg-pink-200">
                                <div>
                                    <h5>Hemingway Editor</h5>
                                    The Hemingway Editor is a great tool for improving your writing. It highlights complex sentences and suggests simpler alternatives, ensuring that your written work is clear and concise. This is particularly useful for reading/writing learners who need to fine-tune essays, reports, or written summaries.
    
    
                                </div>
                            </div>
                            <div class=" online-tool-box bg-green-50">
                                <div>
                                    <h5>Lucidchart</h5>
                                    Lucidchart is an online diagramming tool that lets you create flowcharts, Venn diagrams, mind maps, and other visual tools. It’s perfect for visual learners who need to break down complex processes or organise ideas into easy-to-follow visuals. By using Lucidchart, you can turn written information into visual representations, enhancing your understanding of the material.
    
    
                                </div>
                            </div>
                        </div>
                       
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Report 12 Reading & Writing-->
    <div v-if="style == 'Reading/Writing'">
        <!-- Content for Report 12 -->
        <div class="p-6">
            <div class="row">
                <h4 class="text-2xl font-bold mb-4">
                    Effective Study Strategies for Reading/Writing Learners
                </h4>
                <p class="mb-6">
                    As a reading/writing learner, you process and retain
                    information best by engaging with text. Here are some
                    tailored strategies to help you prepare for exams:
                </p>
                <div class="row justify-center">
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Create Detailed Written Notes
                                </h4>
                                <p>
                                    As you study, write out detailed notes in
                                    your own words. Summarise key points, create
                                    outlines, and organise information into
                                    lists or bullet points. The process of
                                    writing helps reinforce the material in your
                                    memory.
                                </p>
                            </div>
                        </li>
                    </div>
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Review and Rewrite Notes
                                </h4>
                                <p>
                                    After taking notes, review and rewrite them
                                    in a more concise or organised format. This
                                    second pass helps reinforce your
                                    understanding and highlights important
                                    details that may have been missed during the
                                    initial notetaking.
                                </p>
                            </div>
                        </li>
                    </div>
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Practice with Written Summaries
                                </h4>
                                <p>
                                    After reading or reviewing a topic, write a
                                    summary of what you’ve learned. Focus on key
                                    concepts and explanations. Writing out
                                    summaries forces you to recall the material,
                                    ensuring you’ve fully understood it.
                                </p>
                            </div>
                        </li>
                    </div>
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Test Yourself with Written Practice
                                    Questions
                                </h4>
                                <p>
                                    Write out potential exam questions and
                                    practice answering them. This not only helps
                                    you familiarise yourself with the type of
                                    questions you might face but also allows you
                                    to express your knowledge in written form.
                                </p>
                            </div>
                        </li>
                    </div>
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Use Flashcards for Key Terms
                                </h4>
                                <p>
                                    Write out flashcards for important terms,
                                    definitions, and key concepts. The act of
                                    writing the cards and reviewing them
                                    repeatedly helps solidify your understanding
                                    of the material.
                                </p>
                            </div>
                        </li>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                        class="w-80 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/study/12.svg'"
                        alt=""
                        />
                    </div>
                </div>
                <div class="col-6">
                    <h4 class="text-2xl font-bold mb-4">
                        Practical Tips for Exam Preparation
                    </h4>
                    <ul class="pl-5 mb-6">
                        <li>
                            <strong
                                >Break Down Material into Smaller
                                Segments</strong
                            ><br />
                            Instead of trying to study large sections at once,
                            break down your material into smaller, more
                            manageable pieces. This will help prevent
                            information overload and make it easier to review
                            each section thoroughly.
                        </li>
                        <li>
                            <strong
                                >Use Written Outlines for Planning
                                Essays</strong
                            ><br />
                            If you have essay-based exams, practice outlining
                            your answers. Write down the key points you want to
                            cover, organise them logically, and practice
                            developing your thoughts in writing before the exam.
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <ul class="pl-5 mb-6">
                        <li>
                            <strong
                                >Use Time-Blocking for Focused Study
                                Sessions</strong
                            ><br />
                            Set a timer for 30-45 minutes of focused study,
                            followed by a short break. During each block, focus
                            on reading and writing, and after the break, review
                            what you’ve just studied to reinforce it in your
                            memory.
                        </li>
                        <li>
                            <strong>Organise a Study Schedule</strong><br />
                            Plan your study schedule in writing. Organise your
                            tasks by subject and time, ensuring that you cover
                            all key material before the exam. This helps keep
                            you on track and reduces stress as the exam date
                            approaches.
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-80 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/study/11.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h4 class="text-2xl font-bold mb-4">
                        Online Tools for Reading/Writing Learners
                    </h4>
                    <p>
                        Here are some online tools that can help reading/writing learners with their studies:

                    </p>

                    <ul class="pl-5 mb-6">
                        <div class="row justify-center">
                            <div class=" online-tool-box bg-gray-100">
                                <div>
                                    <h5>Grammarly:</h5>
                                    Grammarly helps with writing by providing grammar, spelling, and style suggestions. Reading/writing learners can benefit from using Grammarly to ensure their writing is clear and well-structured, making it a great tool for reviewing essays, notes, and written assignments.


                                </div>
                            </div>
                            <div class=" online-tool-box bg-blue-100">
                                <div>
                                    <h5>Notion:</h5>
                                    Notion is an all-in-one workspace for taking notes, writing essays, and organising study materials. It's perfect for reading/writing learners who enjoy creating detailed notes, lists, and outlines. It also offers the ability to write and store documents in one place.


                                </div>
                            </div>
                            <div class=" online-tool-box bg-green-100">
                                <div>
                                    <h5>Evernote:</h5>
                                    Evernote allows you to organise notes, create to-do lists, and store written materials in one place. It's a great tool for reading/writing learners who need a structured system to keep track of their written assignments, study notes, and reading materials.


                                </div>
                            </div>
                            <div class=" online-tool-box bg-yellow-100">
                                <div>
                                    <h5>ProWritingAid:</h5>
                                    ProWritingAid offers grammar and style checks, helping reading/writing learners improve the quality of their writing. It also offers detailed reports on readability and writing style, making it a useful tool for refining essays and written assignments.
    
                                </div>
                            </div>
                            <div class=" online-tool-box bg-pink-200">
                                <div>
                                    <h5>StudyBlue:</h5>
    
                                    StudyBlue is a study tool that allows students to create flashcards, take quizzes, and organise study materials. Reading/writing learners can use it to create and review text-based flashcards and study sets that reinforce their reading material.
    
                                </div>
                            </div>
                            <div class=" online-tool-box bg-green-50">
                                <div>
                                    <h5>Hemingway Editor:</h5>
                                    Hemingway Editor helps students improve their writing by highlighting complex sentences and suggesting simpler alternatives. This tool is ideal for reading/writing learners who want to refine their written work and ensure clarity in their essays or assignments.
    
    
                                </div>
                            </div>
                        </div>
                      
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Report 13 Visual _ Auditory Blend-->
    <div v-if="style == 'Visual/Auditory'">
        <!-- Content for Report 13 -->
        <div class="p-6">
            <div class="row">
                <h4 class="text-2xl font-bold mb-4">
                    Effective Study Strategies for Visual and Auditory Learners
                </h4>
                <p>
                    As a blended visual and auditory learner, you benefit from both seeing information and hearing it explained. Here are five strategies to help you prepare for exams:

                </p>
                <div class="row justify-center">
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Combine Visual and Audio Resources
                                </h4>
                                <p>
                                    When studying for exams, use resources that
                                    engage both your visual and auditory
                                    learning styles. For example, watch videos
                                    that include both diagrams and spoken
                                    explanations, or listen to educational
                                    podcasts while reviewing your notes or
                                    charts. This dual approach strengthens your
                                    understanding.
                                </p>
                            </div>
                        </li>
                    </div>
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Create Visual Notes While Listening to
                                    Lectures
                                </h4>
                                <p>
                                    When listening to a recorded lecture or
                                    explanations, draw diagrams, charts, or mind
                                    maps to visually organise the information.
                                    Writing or drawing while listening helps
                                    solidify the material in your memory, as
                                    you're engaging both learning styles
                                    simultaneously.
                                </p>
                            </div>
                        </li>
                    </div>
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Use Flashcards with Audio
                                </h4>
                                <p>
                                    Make flashcards for key terms or concepts
                                    but also add an auditory component by
                                    reading them aloud or recording your voice.
                                    Reviewing flashcards both visually and
                                    audibly helps reinforce the information in
                                    multiple ways.
                                </p>
                            </div>
                        </li>
                    </div>
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Summarise Concepts Out Loud with Visual Aids
                                </h4>
                                <p>
                                    After reading or reviewing a topic, explain
                                    the concepts out loud using visual aids like
                                    diagrams, charts, or written summaries.
                                    Speaking the information while looking at
                                    visuals ensures that you’re processing it
                                    through both learning channels.
                                </p>
                            </div>
                        </li>
                    </div>
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Study in Groups with Visual and Verbal
                                    Interaction
                                </h4>
                                <p>
                                    Group study sessions are highly effective
                                    for blended learners. Discuss the material
                                    out loud with peers while also using visual
                                    aids such as slides or charts. Engaging in
                                    both verbal discussions and reviewing visual
                                    materials will enhance your exam
                                    preparation.
                                </p>
                            </div>
                        </li>
                    </div>
                </div>
            </div>

            <div class="row">



                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                        class="w-80 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/study/12.svg'"
                        alt=""
                        />
                    </div>
                </div>
                <div class="col-6">
                    <h4 class="text-md font-bold mb-4">
                        Practical Tips for Exam Preparation
                    </h4>
                    <ul class="pl-5 mb-6">
                        <li>
                            <strong
                                >Review Using Visual and Audio Resources</strong
                            ><br />
                            Use online resources such as videos or podcasts that
                            combine visual and auditory elements. Watching and
                            listening to explanations repeatedly reinforces the
                            material in both formats.
                        </li>
                        <li>
                            <strong>Record Your Own Notes</strong><br />
                            Record yourself reading key points or summaries of
                            important topics. Listening to these recordings
                            while reviewing written notes or visual aids will
                            strengthen your recall during the exam.
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <ul class="pl-5 mb-6">
                        <li>
                            <strong>Test Yourself Using Both Methods</strong
                            ><br />
                            Practice answering exam questions out loud, using
                            visuals like charts or notes to guide your
                            responses. This method mimics the combination of
                            visual and auditory input that works best for your
                            learning style.
                        </li>
                        <li>
                            <strong
                                >Use Time Blocking for Visual and Auditory
                                Study</strong
                            ><br />
                            Divide your study time between visual and auditory
                            activities. For example, spend 30 minutes listening
                            to a recorded lecture, followed by 30 minutes of
                            reviewing your notes or diagrams. Alternating
                            between the two ensures that you're engaging both
                            learning styles effectively.
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-80 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/study/11.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h4 class="text-md font-bold mb-4">
                        Online Tools for Blended Learners
                    </h4>

                    <p class="mb-6">
                        Here are some online tools that can help you engage both
                        your visual and auditory learning styles:
                    </p>

                    <ul class="pl-5 mb-6">
                        <div class="row justify-center">
                            <div class=" online-tool-box bg-gray-100">
                                <div>
                                    <h5>Khan Academy:</h5>
                                    Khan Academy offers a wide range of educational videos and tutorials that combine visual explanations with verbal narration. This is ideal for visual and auditory learners who benefit from seeing and hearing information simultaneously.

                                </div>
                            </div>
                            <div class=" online-tool-box bg-blue-100">
                                <div>
                                    <h5>Quizlet:</h5>
                                    Quizlet allows you to create flashcards and use both visual and auditory features. You can create flashcards with text and record audio to listen to the terms and definitions, reinforcing learning through both sight and sound.

                                </div>
                            </div>
                            <div class=" online-tool-box bg-green-100">
                                <div>
                                    <h5>YouTube Educational Channels:</h5>
                                    Many YouTube channels offer educational videos that combine visual presentations with auditory explanations. Channels like CrashCourse and SciShow are excellent for engaging both your visual and auditory senses.

                                </div>
                            </div>
                            <div class=" online-tool-box bg-yellow-100">
                                <div>
                                    <h5>Audible:</h5>
                                    Audible offers audiobooks that are great for auditory learners. You can listen to educational content while taking visual notes or creating diagrams, combining both styles for a stronger learning experience.
    
                                </div>
                            </div>
                            <div class=" online-tool-box bg-pink-200">
                                <div>
                                    <h5>Notion:</h5>
                                    Notion is a digital workspace where you can organise notes and add voice recordings. You can listen to audio files while reviewing written or visual notes, making it ideal for blending auditory and visual learning techniques.
    
                                </div>
                            </div>
                            <div class=" online-tool-box bg-green-50">
                                <div>
                                    <h5>MindMeister:</h5>
                                    MindMeister allows you to create mind maps that visually represent your thoughts while also providing the ability to add notes and audio files. This combination of visual and auditory features helps reinforce your understanding of the material.
    
                                </div>
                            </div>
                        </div>
                     
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Report 14 Visual _ Kinesthethic Blend-->
    <div v-if="style == 'Visual/Kinesthethic'">
        <!-- Content for Report 14 -->
        <div class="p-6">
            <div class="row">
                <h4 class="text-2xl font-bold mb-4">
                    Effective Study Strategies for Visual and Kinaesthetic
                    Learners
                </h4>
                <p class="mb-6">
                    As a blended visual and kinaesthetic learner, you benefit
                    from seeing information and interacting with it physically.
                    Here are five strategies to help you prepare for exams:
                </p>
                <div class="row justify-center">
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Use Visual Aids During Hands-On Practice
                                </h4>
                                <p>
                                    Combine visual aids like diagrams, charts,
                                    and illustrations with hands-on practice.
                                    For example, use physical models or props to
                                    demonstrate the concepts you're learning
                                    while reviewing visual summaries. This
                                    combination helps reinforce understanding
                                    through both seeing and doing.
                                </p>
                            </div>
                        </li>
                    </div>
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Create Visual Summaries After Hands-On
                                    Learning
                                </h4>
                                <p>
                                    After completing hands-on activities like
                                    lab experiments or practical exercises,
                                    create visual summaries, such as mind maps
                                    or flowcharts. These summaries will help you
                                    consolidate what you've learned and give you
                                    a clear visual reference to review before
                                    the exam.
                                </p>
                            </div>
                        </li>
                    </div>
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Use Movement While Reviewing Material
                                </h4>
                                <p>
                                    Incorporate movement into your study routine
                                    to help you focus and retain information.
                                    For example, walk around or use gestures
                                    while reviewing notes or flashcards.
                                    Movement helps kinaesthetic learners stay
                                    engaged and absorb information more
                                    effectively.
                                </p>
                            </div>
                        </li>
                    </div>
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Simulate Real-World Applications
                                </h4>
                                <p>
                                    Apply concepts you're studying to real-life
                                    situations whenever possible. For example,
                                    if you're studying geometry, try building
                                    shapes or measuring objects. This hands-on
                                    approach helps you understand abstract
                                    concepts by relating them to physical tasks.
                                </p>
                            </div>
                        </li>
                    </div>
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Organise Study Materials Visually
                                </h4>
                                <p>
                                    Use tools like colour-coded notes, diagrams,
                                    or visual checklists to organise your study
                                    materials. This allows you to see the
                                    material in a structured way, which helps
                                    reinforce the content visually while you
                                    engage physically with the material.
                                </p>
                            </div>
                        </li>
                    </div>
                </div>
            </div>

            <div class="row">


                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                        class="w-80 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/study/12.svg'"
                        alt=""
                        />
                    </div>
                </div>
                <div class="col-6">
                    <h4 class="text-md font-bold mb-3">
                        Practical Tips for Exam Preparation
                    </h4>
                    <ul class="pl-5 mb-6">
                        <li>
                            <strong
                                >Combine Physical and Visual Study Tools</strong
                            ><br />
                            Create visual aids like charts, diagrams, or
                            flashcards and use them during hands-on activities,
                            such as building models or conducting experiments.
                            This reinforces information through both visual and
                            physical methods.
                        </li>
                        <li>
                            <strong>Review Information While Moving</strong
                            ><br />
                            Incorporate movement into your study sessions, such
                            as pacing while reading notes or using gestures to
                            recall key information. Movement keeps you focused
                            and helps kinaesthetic learners retain the material
                            more effectively.
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <ul class="pl-5 mb-6">
                        <li>
                            <strong>Simulate Exam Conditions</strong><br />
                            Practice answering exam questions in a way that
                            mimics the exam environment. For example, time
                            yourself as you answer questions and use visual aids
                            or physical materials to simulate real-world tasks.
                        </li>
                        <li>
                            <strong>Break Down Complex Concepts Visually</strong
                            ><br />
                            Use diagrams or flowcharts to break down complex
                            ideas into smaller, more manageable pieces.
                            Reviewing these visual aids while engaging in
                            hands-on tasks will help solidify your understanding
                            of the material.
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-80 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/study/11.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h4 class="text-md font-bold mb-3">
                        Online Tools for Blended Learners
                    </h4>
                    <p class="mb-6">
                        Here are some online tools that can help you engage both
                        your visual and kinaesthetic learning styles:
                    </p>

                    <ul class="pl-5 mb-6">
                        <div class="row justify-center">
                            <div class=" online-tool-box bg-gray-100">
                                <div>
                                    <h5>Khan Academy:</h5>
                                    Khan Academy offers a wide range of educational content with visual explanations like videos, diagrams, and interactive lessons. For kinaesthetic learners, hands-on exercises and challenges let you apply what you’ve learned in a practical way.


                                </div>
                            </div>
                            <div class=" online-tool-box bg-blue-100">
                                <div>
                                    <h5>SketchUp:</h5>
                                    SketchUp is a 3D modelling tool perfect for kinaesthetic learners who enjoy building and manipulating structures. It allows you to create detailed models while visualising the outcome in real-time, combining both visual and hands-on learning.

                                </div>
                            </div>
                            <div class=" online-tool-box bg-green-100">
                                <div>
                                    <h5>GeoGebra:</h5>
                                    GeoGebra provides interactive geometry, algebra, and calculus tools that combine visual learning with hands-on manipulation of mathematical objects. It’s ideal for kinaesthetic learners who benefit from engaging with mathematical concepts actively.


                                </div>
                            </div>
                            <div class=" online-tool-box bg-yellow-100">
                                <div>
                                    <h5>Tinkercad:</h5>
                                    Tinkercad is a 3D design and modelling tool where kinaesthetic learners can create and interact with models, reinforcing learning through hands-on projects while visualising concepts.
    
    
                                </div>
                            </div>
                            <div class=" online-tool-box bg-pink-200">
                                <div>
                                    <h5>MindMeister:</h5>
                                    MindMeister allows you to create mind maps to visualise complex ideas and break down concepts visually. For kinaesthetic learners, interacting with and reorganising the mind maps helps reinforce information through physical engagement.
    
    
                                </div>
                            </div>
                            <div class=" online-tool-box bg-green-50">
                                <div>
                                    <h5>Quizlet:</h5>
                                    Use Quizlet to create flashcards with both visual and interactive elements. You can pair images with terms and test yourself through interactive games, engaging both visual and kinaesthetic learning styles.
    
    
                                </div>
                            </div>
                        </div>
                       
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Report 15 Visual _ Reading & Writing-->
    <div v-if="style == 'Visual/Reading/Writing'">
        <!-- Content for Report 15 -->
        <div class="p-6">
            <h4 class="text-2xl font-bold mb-4">
                Effective Study Strategies for Visual and Reading/Writing
                Learners
            </h4>
            <p class="mb-6">
                As a visual and reading/writing learner, you perform best when
                you can combine both visual aids and written methods in your
                exam preparation. Here are five strategies to help you prepare
                for exams:
            </p>
            <div class="row">
                <div class="row justify-center">
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Create Visual Study Aids with Written Notes
                                </h4>
                                <p>
                                    Combine visual aids such as diagrams, mind
                                    maps, or charts with detailed written notes.
                                    The act of writing down your thoughts while
                                    using visuals helps reinforce key concepts
                                    and creates a more engaging study
                                    experience.
                                </p>
                            </div>
                        </li>
                    </div>
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Write Summaries with Visuals
                                </h4>
                                <p>
                                    After studying a topic, write a detailed
                                    summary of the material and pair it with a
                                    visual representation (such as a flowchart
                                    or timeline). This combination helps you
                                    process information both visually and
                                    textually, making it easier to remember.
                                </p>
                            </div>
                        </li>
                    </div>
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Practice Writing Exam Answers
                                </h4>
                                <p>
                                    Prepare for exams by writing out answers to
                                    practice questions. This strengthens your
                                    ability to articulate your knowledge in
                                    written form and ensures you can respond
                                    effectively during the exam.
                                </p>
                            </div>
                        </li>
                    </div>
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Review Visual and Written Materials
                                    Alternately
                                </h4>
                                <p>
                                    Alternate between reviewing visual aids and
                                    reading or writing notes. For instance,
                                    review a chart or diagram and then summarise
                                    the information in writing. This approach
                                    reinforces concepts by engaging multiple
                                    aspects of your learning style.
                                </p>
                            </div>
                        </li>
                    </div>
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Use Flashcards with Diagrams
                                </h4>
                                <p>
                                    Create flashcards that include both text and
                                    visuals. On one side, write a definition or
                                    key term, and on the other, include a
                                    diagram or chart. This method uses both your
                                    visual and reading/writing strengths to aid
                                    recall during exams.
                                </p>
                            </div>
                        </li>
                    </div>
                </div>
            </div>

            <div class="row">



                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                        class="w-80 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/study/12.svg'"
                        alt=""
                        />
                    </div>
                </div>
                <div class="col-6">
                    <h4 class="text-2xl font-bold mb-4">
                        Practical Tips for Exam Preparation
                    </h4>
                    <ul class="pl-6 mb-6">
                        <li>
                            <strong>Create Visual Study Guides</strong><br />
                            Develop study guides that merge both written
                            explanations and visual aids. Break down complex
                            ideas by using bullet points for written summaries
                            and adding charts, graphs, or diagrams to illustrate
                            key concepts. These study guides will serve as
                            comprehensive, easy-to-review materials before
                            exams.
                        </li>
                        <li>
                            <strong
                                >Use Flashcards with Both Text and
                                Visuals</strong
                            ><br />
                            When creating flashcards, include not only key terms
                            and definitions but also visual elements like
                            symbols, charts, or quick diagrams. Reviewing these
                            flashcards helps you process the material through
                            both your reading/writing and visual learning
                            strengths. Use them frequently to test yourself and
                            reinforce memory retention.
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <ul class="pl-6 mb-6">
                        <li>
                            <strong>Take Notes While Reviewing Visuals</strong
                            ><br />
                            While engaging with visual aids (such as videos,
                            infographics, or diagrams), take detailed notes to
                            summarise the key points. Writing down your thoughts
                            after viewing a visual aid helps deepen your
                            understanding and reinforces the content, making it
                            easier to recall during exams.
                        </li>
                        <li>
                            <strong
                                >Test Yourself with Timed Writing
                                Exercises</strong
                            ><br />
                            Simulate the exam environment by writing answers to
                            practice questions under timed conditions. Not only
                            will this help you get used to time management, but
                            it will also give you the confidence to articulate
                            your knowledge clearly in written form. Review your
                            answers afterwards to identify areas for improvement.
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-80 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/study/11.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h4 class="text-2xl font-bold mb-4">
                        Online Tools for Blended Learners
                    </h4>

                    <p class="mb-6">
                        Here are some online tools that can help you engage both
                        your visual and reading/writing learning styles:
                    </p>

                    <ul class="pl-6 mb-6">
                        <div class="row justify-center">
                            <div class=" online-tool-box bg-grey-50">
                                <div>
                                    <h5>Canva:</h5>
                                    Canva is a powerful graphic design tool that
                                    allows you to create visual study aids like
                                    infographics, diagrams, and mind maps. It's
                                    especially useful for visual learners who
                                    need to break down complex information into
                                    easy-to-understand visuals. You can also
                                    incorporate written notes into your designs,
                                    creating a blend of visual and text-based
                                    learning tools.
                                </div>
                            </div>
                            <div class=" online-tool-box bg-blue-50">
                                <div>
                                    <h5>Evernote:</h5>
                                    Evernote is a comprehensive note-taking app
                                    that allows you to organise your written
                                    notes while integrating visual elements like
                                    images, charts, and PDFs. You can create
                                    notebooks for different subjects, annotate
                                    documents, and search through your notes to
                                    quickly find key information. This tool
                                    helps you combine your reading/writing
                                    strengths with visual learning by embedding
                                    visuals alongside your notes.
                                </div>
                            </div>
                            <div class=" online-tool-box bg-green-50">
                                <div>
                                    <h5>Quizlet:</h5>
                                    Quizlet allows you to create flashcards that
                                    combine both text and visuals. You can
                                    create study sets for any subject, using
                                    text-based questions and answers on one side
                                    and images or diagrams on the other. The app
                                    also offers interactive study modes,
                                    including games and quizzes, that engage
                                    both your reading/writing and visual
                                    learning styles.
                                </div>
                            </div>
                            <div class=" online-tool-box bg-yellow-50">
                                <div>
                                    <h5>Notion:</h5>
                                    Notion is an all-in-one workspace where you
                                    can write notes, organise tasks, and
                                    incorporate visual elements. You can create
                                    comprehensive study guides with both written
                                    and visual components, such as embedded
                                    images, tables, and diagrams. Notion’s
                                    flexibility allows you to combine your
                                    reading/writing and visual preferences in a
                                    seamless way, helping you stay organised and
                                    engaged with your studies.
                                </div>
                            </div>
                            <div class=" online-tool-box bg-pink-50">
                                <div>
                                    <h5>Hemingway Editor:</h5>
                                    The Hemingway Editor is a great tool for
                                    improving your writing. It highlights
                                    complex sentences and suggests simpler
                                    alternatives, ensuring that your written
                                    work is clear and concise. This is
                                    particularly useful for reading/writing
                                    learners who need to fine-tune essays,
                                    reports, or written summaries.
                                </div>
                            </div>
                            <div class=" online-tool-box bg-green-50">
                                <div>
                                    <h5>Lucidchart:</h5>
                                    Lucidchart is an online diagramming tool
                                    that lets you create flowcharts, Venn
                                    diagrams, mind maps, and other visual tools.
                                    It’s perfect for visual learners who need to
                                    break down complex processes or organise
                                    ideas into easy-to-follow visuals. By using
                                    Lucidchart, you can turn written information
                                    into visual representations, enhancing your
                                    understanding of the material.
                                </div>
                            </div>
                        </div>
                       
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Report 16 Visual-->
    <div v-if="style == 'Visual'">
        <!-- Content for Report 16 -->
        <div class="p-6">
            <div class="row">
                <h4 class="text-2xl font-bold mb-4">
                    Effective Study Strategies for Visual Learners
                </h4>
                <p>
                    As a Visual learner, you can maximise your exam preparation by using techniques that leverage your strength in processing visual information. Here are some strategies to help you study more effectively:

                </p>
                <div class="row justify-center">
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Create Visual Study Aids
                                </h4>
                                <p>
                                    Develop visual study aids such as flashcards
                                    with images, charts, and diagrams to help
                                    reinforce key concepts. Visual aids can make
                                    it easier to recall information and
                                    understand complex topics. For example,
                                    drawing out processes or creating visual
                                    summaries of chapters can help solidify your
                                    understanding.
                                </p>
                            </div>
                        </li>
                    </div>
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Use Visual Summaries
                                </h4>
                                <p>
                                    Summarise your notes and study materials
                                    using visual formats. Create mind maps,
                                    infographics, or colourful outlines that
                                    visually represent the information you need
                                    to know. This approach can help you see
                                    connections between different concepts and
                                    improve your ability to remember details.
                                </p>
                            </div>
                        </li>
                    </div>
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Incorporate Multimedia Resources
                                </h4>
                                <p>
                                    Use multimedia resources that include visual
                                    elements, such as educational videos,
                                    interactive diagrams, or online visual
                                    tutorials. Engaging with these resources can
                                    provide a more dynamic learning experience
                                    and enhance your grasp of the material.
                                </p>
                            </div>
                        </li>
                    </div>
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Practice with Visual Tools
                                </h4>
                                <p>
                                    Engage in practice tests or exercises that
                                    use visual formats. For instance, practice
                                    with mock exams that include diagrams and
                                    visual questions. This can help you become
                                    familiar with the type of visual information
                                    you will encounter during the actual exam.
                                </p>
                            </div>
                        </li>
                    </div>
                    <div class=" effective-study-box">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="text-md font-medium">
                                    Develop a Visual Study Plan
                                </h4>
                                <p>
                                    Create a visual study schedule or planner to
                                    organise your study sessions. Use a calendar
                                    or planner with visual elements to allocate
                                    time for different subjects and topics. A
                                    well-organised visual study plan helps you
                                    stay on track and manage your study time
                                    effectively.
                                </p>
                            </div>
                        </li>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                        class="w-80 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/study/12.svg'"
                        alt=""
                        />
                    </div>
                </div>
                <div class="col-6">
                    <h4 class="text-2xl font-bold mb-4">
                        Practical Tips for Exam Preparation
                    </h4>
                    <ul class="pl-6 mb-6">
                        <li>
                            <strong>Visualise Key Concepts</strong><br />
                            Before the exam, take time to visualise key concepts
                            and processes. Picture the information in your mind,
                            use diagrams, and review visual aids to reinforce
                            your memory and understanding.
                        </li>
                        <li>
                            <strong>Review with Visual Tools</strong><br />
                            Regularly review your study materials using visual
                            tools like flashcards, charts, and mind maps. This
                            helps reinforce your learning and makes it easier to
                            recall information during the exam.
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <ul class="pl-6 mb-6">
                        <li>
                            <strong>Take Breaks and Relax</strong><br />
                            Incorporate short breaks into your study sessions to
                            avoid visual fatigue. During breaks, engage in
                            relaxing activities that involve visual elements,
                            such as watching a short video or looking at calming
                            images, to refresh your mind.
                        </li>
                        <li>
                            <strong>Create a Study Space</strong><br />
                            Set up a study space that includes visual tools and
                            aids. Ensure your space is well-lit, organised, and
                            free from distractions to enhance your focus and
                            productivity during study sessions.
                        </li>
                    </ul>
                </div>

                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-80 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/study/11.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h4 class="text-2xl font-bold mb-4">
                        Online Tools for Visual Learners
                    </h4>
                    <p>
                        Here are some online tools that can help Visual learners with their studies:

                    </p>
                    <ul class="pl-6 space-y-2">
                        <div class="row justify-center">
                            <div class=" online-tool-box bg-grey-50">
                                <div>
                                    <h5>Canva:</h5>
                                    Create visual aids like infographics,
                                    posters, and mind maps. Canva offers a wide
                                    range of templates and design tools to help
                                    you visualise your study material.
                                </div>
                            </div>
                            <div class=" online-tool-box bg-blue-50">
                                <div>
                                    <h5>Quizlet:</h5>
                                    Use Quizlet to make flashcards with images
                                    and diagrams. You can also find pre-made
                                    flashcards and study sets on various topics.
                                </div>
                            </div>
                            <div class=" online-tool-box bg-green-50">
                                <div>
                                    <h5>MindMeister:</h5>
                                    Create mind maps to organise and visualise
                                    information. MindMeister helps you map out
                                    ideas and concepts in a visual format.
                                </div>
                            </div>
                            <div class=" online-tool-box bg-yellow-50">
                                <div>
                                    <h5>Prezi:</h5>
                                    Design interactive presentations and visual
                                    summaries. Prezi’s dynamic presentations
                                    help you present information in an engaging
                                    way.
                                </div>
                            </div>
                            <div class=" online-tool-box bg-pink-50">
                                <div>
                                    <h5>Khan Academy:</h5>
                                    Access educational videos and interactive
                                    diagrams on a variety of subjects. Khan
                                    Academy provides visual explanations and
                                    tutorials to enhance understanding.
                                </div>
                            </div>
                            <div class=" online-tool-box bg-green-50">
                                <div>
                                    <h5>Coggle:</h5>
                                    Create colourful mind maps and diagrams.
                                    Coggle helps you visualise information and
                                    connect ideas visually.
                                </div>
                            </div>
                        </div>
                       
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </div>
</template>

<script>
import AssessmentTypes from "@/Layouts/AssessmentTypes.vue";

export default {
    name: "BestStudyForExams",
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

div.col-12 > h4,
div.mb-4 > h4,
li > div > h4,
ul.space-y-2 > li > h4,
li > strong,
div.online-tool-box > div > h5,
div.col-6 > h4.text-md {
    color: rgb(36, 168, 250);
    font-size: 17px;
    font-weight: bold;
}

/* Online Tool Box Styles */
.online-tool-box {
    padding: 20px;
    margin: 5px;
    margin-left: 38px;
    position: relative;
    border-radius: 30px;
    z-index: 1;
    width: 100%; /* Full width on mobile */
    margin-bottom: 1rem;
}

.online-tool-box::before {
    content: "";
    position: absolute;
    inset: 0;
    padding: 2px;
    border-radius: 30px;
    background: linear-gradient(to right, #ddb7ff, #ffd7f5, #fff8e3, #ff83df);
    -webkit-mask: linear-gradient(white 0 0) content-box,
        linear-gradient(white 0 0);
    -webkit-mask-composite: xor;
    mask-composite: exclude;
    z-index: -1;
}

.online-tool-box > div {
    text-align: center;
}

.online-tool-box > div > h5 {
    text-align: center;
    color: rgb(36, 168, 250);
    font-size: 17px;
    font-weight: bold;
}

.effective-study-box {
    position: relative;
    padding: 20px;
    margin: 5px;
    margin-left: 38px;
    border-radius: 30px;
    background: white;
    z-index: 1;
    width: 100%; /* Full width on mobile */
    margin-bottom: 1rem;
}

/* Gradient border effect */
.effective-study-box::before {
    content: "";
    position: absolute;
    inset: 0;
    padding: 2px;
    border-radius: 30px;
    background: linear-gradient(to right, #ddb7ff, #ffd7f5, #fff8e3, #ff83df);
    -webkit-mask: linear-gradient(white 0 0) content-box,
        linear-gradient(white 0 0);
    -webkit-mask-composite: xor;
    mask-composite: exclude;
    z-index: -1;
}

/* Text alignment */
.effective-study-box li {
    text-align: center;
}

.effective-study-box h4 {
    text-align: center;
    color: rgb(36, 168, 250);
    font-size: 17px;
    font-weight: bold;
}
/* Media Queries for both boxes */
@media (min-width: 768px) {
    .effective-study-box,
    .online-tool-box {
        width: 40%; /* 25% width minus margins */
        margin: 15px;
    }
}

@media (max-width: 767px) {
    .row.justify-center {
        flex-direction: column;
        align-items: center;
    }

    .effective-study-box,
    .online-tool-box {
        max-width: 90%; /* Prevent boxes from touching screen edges */
        margin: 10px auto;
    }
}



div.effective-study-box > li > div > h4 {
    text-align: center;
}

/* li {
    text-align: center;
} */

div > h5 {
    font-weight: bold;
}

.col-6 > div > h4 {
    margin-bottom: 10px;
}

.col-6 > ul > li {
    margin-top: 10px;
}

.col-6>ul>li>div{
    text-align: left;
}
.online-tool-box > div  {
    text-align: center;
}


/* Add these new mobile responsive styles */
@media (max-width: 768px) {
    .row {
        display: flex;
        flex-direction: column;
    }

    .row > .col-6:nth-child(1) {
        order: 2;
    }
    .row > div:nth-child(2) {
        order: 1;
    }

    /* .row:nth-of-type(3) {
        flex-direction: column-reverse;
    } */

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

    /* Adjust spacing between sections */
    .row + .row {
        margin-top: 1rem;
    }


    ul.list-disc {
        padding-left: 1rem;
    }
}
</style>
