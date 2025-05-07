<template>
     <div class="p-6">
    <div class="space-y-6 mt-4">
        <h2 class="text-center font-bold mb-4">Environment Preferences</h2>
    </div>
    <!-- Report 1 Auditory -->
    <div v-if="style == 'Auditory'">
        <!-- Content for Report 1 -->
        <div class="p-4">
            <h4 class="text-2xl font-bold mb-2">
                Your Ideal Learning Environment
            </h4>
            <p class="mb-4">
                As an auditory learner, designing the right environment is
                essential to help you stay focused and absorb information
                effectively. Here are four key elements for creating your ideal
                study space:
            </p>
            <div class="row">
                <div class="grid-container gap-10 justify-content-center mb-6">
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500">Quiet and Focused Space</strong>
                        <br />
                        <br />
                        As an auditory learner, you’re particularly sensitive to
                        sound, so it’s important to minimise background noise.
                        Studying in a quiet place like a library or a quiet room
                        at home helps you focus. If complete silence is not
                        possible, consider using noise-cancelling headphones or
                        earplugs to block out distractions. The less noise there
                        is around you, the easier it will be to concentrate on
                        listening to lectures, podcasts, or discussions.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500">Use of Audio Tools</strong>
                        <br />
                        <br />
                        Make sure your study space has easy access to tools like
                        headphones, speakers, or audio devices. Listening to
                        recorded lectures, audiobooks, or podcasts helps you
                        engage with the material in a way that suits your
                        learning style. You can even record yourself reading
                        notes or explaining concepts and play them back later.
                        This method reinforces what you’re learning through
                        hearing.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500">Verbalising Concepts</strong>
                        <br />
                        <br />
                        Speaking out loud is a powerful tool for auditory
                        learners. In your ideal environment, you’ll want the
                        freedom to talk through ideas and explain concepts out
                        loud. Whether you're reviewing notes or trying to
                        understand new information, verbalising helps you
                        process and retain what you’re studying. Joining study
                        groups or discussing topics with a friend can also
                        reinforce your understanding.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500">Soft Background Noise or Music</strong>
                        <br />
                        <br />
                        For some auditory learners, soft background music or
                        ambient noise can help improve focus. Try listening to
                        instrumental music or nature sounds while you study.
                        Avoid music with lyrics that might distract you. You can
                        also use audio cues like timers or alarms to structure
                        your study sessions and remind you when it’s time to
                        switch tasks or take breaks.
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-95 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/EnvironmentPreference/10.svg'"
                        alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <h3 class="text-2xl font-bold mb-2">
                        Suggestions for Creating an Effective Learning Space
                    </h3>
                    <ul class="pl-6">
                        <li>
                            <p>
                                To create your ideal learning environment as an Auditory learner, consider these
                                detailed tips:
                            </p>
                        </li>
                        <li>
                            <strong>Use Audio Resources Regularly:</strong> Make
                            sure your study space includes easy access to tools
                            like headphones, speakers, or voice recorders.
                            Listening to recorded lectures, audiobooks, or
                            relevant podcasts can reinforce the material you’re
                            studying. You might also record your own voice
                            reading important notes and play them back during
                            your study sessions. By surrounding yourself with
                            these auditory resources, you’ll make the most of
                            your learning strengths.
                        </li>
                        <li>
                            <strong>Designate a Quiet Study Zone:</strong> A
                            quiet environment is crucial for an auditory
                            learner. External noise and distractions can easily
                            interrupt your focus. Set up your study area in a
                            location that is relatively free from loud sounds or
                            disruptions. If quiet spaces aren’t available,
                            noise-cancelling headphones can be a great
                            investment to block out background noise and keep
                            you focused on the material you need to hear.
                        </li>
                        <li>
                            <strong>Integrate Verbal Practice into Your
                                Routine:</strong>
                            Your study space should encourage you to verbalise
                            concepts as you work. Set up a comfortable area
                            where you can speak aloud without interruptions or
                            distractions. You can talk through ideas, explain
                            key points to yourself, or even role-play teaching
                            the material. Having a space where you feel
                            comfortable speaking out loud will allow you to take
                            full advantage of your auditory learning strengths.
                        </li>
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
                Your Ideal Learning Environment
            </h4>
            <p class="mb-4">
                As an auditory and kinaesthetic learner, your ideal study space
                should cater to both your need for auditory input and physical
                interaction. Here are four key elements for creating your ideal
                study space:
            </p>
            <div class="row">
                <div class="grid-container gap-10 justify-content-center mb-6">
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500">Quiet and Organised Space with Physical Tools</strong>
                        <br />
                        <br />
                        Choose a quiet study area to minimise distractions. This space should be organised and equipped
                        with physical tools like models, diagrams, or hands-on materials. While you need a peaceful
                        environment for listening, having physical tools at hand supports your kinaesthetic learning.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500">Access to Audio Resources</strong>
                        <br />
                        <br />
                        Ensure your study area has access to audio resources such as headphones, speakers, or devices
                        for playing recordings. Being able to listen to lectures, podcasts, or educational videos is
                        crucial for auditory learning.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500">Room for Movement and Physical Interaction</strong>
                        <br />
                        <br />
                        Design your study space to accommodate physical activities. Have enough room to move around, use
                        standing desks, or work with hands-on materials. This allows you to engage physically with the
                        material, enhancing your kinaesthetic learning.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500">Verbal and Physical Interaction Opportunities</strong>
                        <br />
                        <br />
                        Create an environment where you can freely talk through concepts and engage in physical
                        activities. This might include using a whiteboard for explaining ideas or setting up areas for
                        building models and conducting experiments.
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/EnvironmentPreference/10.svg'"
                            alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <h3 class="text-2xl font-bold mb-4">
                        Suggestions for Creating an Effective Learning Space
                    </h3>
                    <p class="mb-4">
                        To create your ideal learning environment as a blended
                        learner, consider these detailed tips:
                    </p>

                    <div class="mb-4">
                        <h4 class="text-2xl font-bold mb-2">
                            Combine Quiet Study Areas with Interactive Tools
                        </h4>
                        <p>
                            Set up a quiet area for listening to audio
                            resources, and have interactive tools nearby for
                            hands-on activities. This setup allows you to
                            alternate between auditory learning and kinaesthetic
                            engagement seamlessly.
                        </p>
                    </div>

                    <div class="mb-4">
                        <h4 class="text-2xl font-bold mb-2">
                            Use Headphones and Physical Aids
                        </h4>
                        <p>
                            Equip your study space with high-quality headphones
                            for clear audio and physical aids like models or
                            diagrams. This combination supports both auditory
                            and kinaesthetic learning preferences.
                        </p>
                    </div>

                    <div class="mb-4">
                        <h4 class="text-2xl font-bold mb-2">
                            Designate Zones for Different Activities
                        </h4>
                        <p>
                            Create distinct zones in your study area for
                            different activities. For example, one zone for
                            listening to recordings and another for engaging in
                            physical tasks or experiments. This organisation
                            helps you focus on each learning style effectively.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Report 3 Auditory _ Reading & Writing Blend-->
    <div v-if="style == 'Auditory/Reading/Writing'">
        <!-- Content for Report 3 -->
        <div class="p-6 space-y-6">
            <h4 class="text-2xl font-bold text-gray-800">
                Your Ideal Learning Environment
            </h4>
            <p class="">
                As an auditory and reading/writing learner, your optimal study
                space should support both your listening and writing needs. Here
                are four key elements for creating your ideal study space:
            </p>
            <div class="row">
                <div class="grid-container gap-10 justify-content-center mb-6">
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500">Quiet Space with Access to Audio Resources</strong>
                        <br />
                        <br />
                        Choose a quiet area where you can focus on listening to lectures, podcasts, or audio recordings
                        without distractions. Equip the space with headphones or speakers to enhance your auditory
                        experience.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500">Organised Space for Writing</strong>
                        <br />
                        <br />
                        Ensure your study area has ample room for writing. Keep it organised with notebooks, pens,
                        highlighters, and devices for digital note-taking. Having a clutter-free, well-organised space
                        helps you focus and improves your writing efficiency.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500">Access to Reading Materials</strong>
                        <br />
                        <br />
                        Your study space should have easy access to books, articles, and online reading platforms. This
                        allows you to seamlessly transition from listening to reading and writing, reinforcing your
                        learning through multiple methods.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500">Combination of Digital and Physical Tools</strong>
                        <br />
                        <br />
                        Incorporate both digital tools, such as laptops or tablets for listening and note-taking, and
                        physical tools like notebooks and printed articles. This blend allows you to engage with both
                        auditory and written material effectively.
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/EnvironmentPreference/10.svg'"
                        alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <h3 class="text-2xl font-bold text-gray-800">
                        Suggestions for Creating an Effective Learning Space
                    </h3>
                    <p class="">
                        To create your ideal learning environment as a blended
                        learner, consider these detailed tips:
                    </p>

                    <ul class="space-y-4">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="font-bold text-gray-800">
                                    Incorporate Audio-Listening Devices
                                </h4>
                                <p class="">
                                    Use quality headphones or speakers to listen
                                    to recorded lectures, podcasts, or audio
                                    summaries. This helps you focus on auditory
                                    input without external distractions.
                                </p>
                            </div>
                        </li>
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="font-bold text-gray-800">
                                    Organise Written and Audio Resources
                                </h4>
                                <p class="">
                                    Keep your written materials (books, notes,
                                    articles) organised and easily accessible.
                                    Use apps or devices to store and organise
                                    audio recordings, ensuring a smooth
                                    transition between listening and writing
                                    tasks.
                                </p>
                            </div>
                        </li>
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="font-bold text-gray-800">
                                    Use Digital Note-Taking Tools with Audio
                                    Features
                                </h4>
                                <p class="">
                                    Utilise digital tools like Notion or
                                    Evernote, which allow you to take notes and
                                    embed audio recordings. This lets you
                                    combine auditory and written learning in one
                                    place.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Report 4 Auditory _ Visual Blend-->
    <div v-if="style == 'Auditory/Visual'">
        <!-- Content for Report 4 -->
        <div class="p-6 space-y-6">
            <h4 class="text-2xl font-bold text-gray-800">
                Your Ideal Learning Environment
            </h4>
            <p class="">
                As an auditory and visual learner, your study space should
                accommodate both your need for a sound-friendly environment and
                visual aids. Here are four key elements for creating your ideal
                study space:
            </p>
            <div class="row">
                <div class="grid-container gap-10 justify-content-center mb-6">
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500">
                         Quiet, Organised Space with Visual Tools

                        </strong>
                        <br />
                        <br />
                        A quiet, distraction-free space is important for auditory learners, while a well-organised environment with visual tools like whiteboards, charts, or diagrams supports your visual learning. Make sure your space includes visual aids to reference while you listen to lectures or discussions.


                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500">
                            Access to Audio and Visual Resources
                        </strong>
                        <br />
                        <br />
                        Ensure that your study space has access to audio resources like headphones, speakers, and devices for playing podcasts or lectures. At the same time, keep visual materials like textbooks, diagrams, and online videos available to help reinforce the information.


                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500">
                            Combining Visual and Auditory Study Aids

                        </strong>
                        <br />
                        <br />
                        Make use of tools that combine visual and auditory elements, such as watching educational videos or listening to podcasts that include charts and diagrams. This allows you to process information through both listening and visual engagement.


                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500">
                            Freedom to Speak Out Loud and Visualise

                        </strong>
                        <br />
                        <br />

                        As an auditory learner, verbalising concepts helps you learn, so make sure your study space allows you to speak aloud without interruptions. You should also have visual aids, such as a whiteboard, where you can draw or write down key points as you talk through them.

                    </div>


                </div>

            </div>

            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/EnvironmentPreference/10.svg'"
                        alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <h3 class="text-2xl font-bold text-gray-800">
                        Suggestions for Creating an Effective Learning Space
                    </h3>
                    <p class="">
                        To create your ideal learning environment as a blended
                        learner, consider these detailed tips:
                    </p>

                    <ul class="space-y-2">
                        <li>
                            <strong class="text-gray-800">Use Both Audio and Visual Study Tools</strong>: Keep a balance
                            between visual and auditory tools
                            in your study space. Have a set of headphones for
                            listening to lectures or podcasts while reviewing
                            notes or diagrams visually. This helps reinforce
                            your learning by engaging both styles
                            simultaneously.
                        </li>
                        <li>
                            <strong class="text-gray-800">Design a Quiet and Organised Space</strong>: For auditory
                            learners, external noise can be
                            distracting, so choose a study space that minimises
                            background noise. At the same time, ensure that
                            visual learners benefit from an organised area where
                            they can easily access written materials or
                            diagrams.
                        </li>
                        <li>
                            <strong class="text-gray-800">Incorporate Verbal and Visual Practice</strong>: Create a
                            comfortable space where you can speak
                            aloud and visualise at the same time. For example,
                            while reviewing visual diagrams, talk through the
                            information, using the combination of auditory and
                            visual elements to reinforce your learning.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Report 5 Kinesthethic _ Auditory Blend-->
    <div v-if="style == 'Kinesthethic/Auditory'">
        <!-- Content for Report 5 -->

        <div class="p-6 space-y-6">
            <h4 class="text-2xl font-bold text-gray-800">
                Your Ideal Learning Environment
            </h4>
            <p class="">
                As a kinaesthetic and auditory learner, your ideal study space
                should cater to both your need for physical interaction and
                auditory input. Here are four key elements for creating your
                ideal study space:
            </p>
            <div class="row">
                <div class="grid-container gap-10 justify-content-center mb-6">
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500">Quiet and Organised Space with Physical Tools</strong>
                        <br />
                        <br />
                        Choose a quiet study area to minimise distractions. This space should be organised and equipped
                        with physical tools like models, diagrams, or hands-on materials. While you need a peaceful
                        environment for listening, having physical tools at hand supports your kinaesthetic learning.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500">Access to Audio Resources</strong>
                        <br />
                        <br />
                        Ensure your study area has access to audio resources such as headphones, speakers, or devices
                        for playing recordings. Being able to listen to lectures, podcasts, or educational videos is
                        crucial for auditory learning.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500">Room for Movement and Physical Interaction</strong>
                        <br />
                        <br />
                        Design your study space to accommodate physical activities. Have enough room to move around, use
                        standing desks, or work with hands-on materials. This allows you to engage physically with the
                        material, enhancing your kinaesthetic learning.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500">Verbal and Physical Interaction Opportunities</strong>
                        <br />
                        <br />
                        Create an environment where you can freely talk through concepts and engage in physical
                        activities. This might include using a whiteboard for explaining ideas or setting up areas for
                        building models and conducting experiments.
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/EnvironmentPreference/10.svg'"
                        alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <h3 class="text-2xl font-bold text-gray-800">
                        Suggestions for Creating an Effective Learning Space
                    </h3>
                    <p class="">
                        To create your ideal learning environment as a blended
                        learner, consider these detailed tips:
                    </p>

                    <ul class="space-y-4">
                        <li>
                            <strong class="text-gray-800">Combine Quiet Study Areas with Interactive
                                Tools</strong>: Set up a quiet area for listening to audio
                            resources and have interactive tools nearby for
                            hands-on activities. This setup allows you to
                            alternate between auditory learning and kinaesthetic
                            engagement seamlessly.
                        </li>
                        <li>
                            <strong class="text-gray-800">Use Headphones and Physical Aids</strong>: Equip your study
                            space with high-quality
                            headphones for clear audio and physical aids like
                            models or diagrams. This combination supports both
                            auditory and kinaesthetic learning preferences.
                        </li>
                        <li>
                            <strong class="text-gray-800">Designate Zones for Different
                                Activities</strong>: Create distinct zones in your study area for
                            different activities. For example, one zone for
                            listening to recordings and another for engaging in
                            physical tasks or experiments. This organisation
                            helps you focus on each learning style effectively.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Report 6 Kinesthethic _ Reading & Writing -->
    <div v-if="style == 'Kinesthethic/Reading/Writing'">
        <!-- Content for Report 6 -->
        <div class="p-6 space-y-6">
            <h4 class="text-2xl font-bold text-gray-800">
                Your Ideal Learning Environment
            </h4>
            <p class="">
                As a kinaesthetic and reading/writing learner, your optimal
                study space should support both physical engagement and written
                tasks. Here are four key elements for creating your ideal study
                space:
            </p>
            <div class="row">
                <div class="grid-container gap-10 justify-content-center mb-6">
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500">Space for Movement and Physical Interaction</strong>
                        <br />
                        <br />
                        Your study area should provide room for movement, allowing you to physically interact with study
                        materials. Whether it’s a standing desk, room to walk around, or space for hands-on tools like
                        models or charts, having a dynamic environment helps you stay engaged.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500">Organised Area for Reading and Writing</strong>
                        <br />
                        <br />
                        Ensure your workspace is well-organised with all necessary reading and writing tools—such as
                        textbooks, notebooks, pens, and highlighters—easily accessible. A clear, uncluttered desk helps
                        you focus during reading and writing sessions.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500">Access to Both Digital and Physical Learning Tools</strong>
                        <br />
                        <br />
                        Combine digital tools for reading and note-taking with physical resources like flashcards,
                        diagrams, or tactile models. Switching between these tools allows you to engage with material
                        both physically and mentally.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500">Quiet Space for Writing and Reflection</strong>
                        <br />
                        <br />
                        While movement and physical interaction are important, having a quiet area for focused reading
                        and writing is also essential. Balance physical activity with moments of quiet reflection where
                        you can write detailed notes or summaries without distractions.
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/EnvironmentPreference/10.svg'"
                        alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <h3 class="text-2xl font-bold text-gray-800">
                        Suggestions for Creating an Effective Learning Space
                    </h3>
                    <p class="">
                        To create your ideal learning environment as a blended
                        learner, consider these detailed tips:
                    </p>

                    <ul class="space-y-4 ">
                        <li>
                            <strong class="text-gray-800">Use Digital Tools for Writing and Physical
                                Interaction for Review:</strong>
                            Take advantage of digital note-taking tools like
                            laptops or tablets for writing, while using physical
                            tools like flashcards or building models during
                            review sessions. This allows you to combine both
                            learning preferences effectively.
                        </li>
                        <li>
                            <strong class="text-gray-800">Use Movement Tools While Writing:</strong>
                            Incorporate tools like a standing desk or a
                            stability ball chair to encourage movement while
                            writing or reading. This helps keep your
                            kinaesthetic learning active, even during stationary
                            tasks.
                        </li>
                        <li>
                            <strong class="text-gray-800">Incorporate Physical Study Aids:</strong>
                            Use physical study aids like flashcards, tactile
                            models, or diagrams alongside written materials.
                            This lets you engage with the material physically,
                            reinforcing the information you’ve read or written
                            about.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Report 7 Kinesthethic _ Visual Blend-->
    <div v-if="style == 'Kinesthethic/Visual'">
        <!-- Content for Report 7 -->
        <div class="p-6 space-y-6">
            <h4 class="text-2xl font-bold text-gray-800">
                Your Ideal Learning Environment
            </h4>
            <p class="">
                As a kinaesthetic and visual learner, your study space should
                accommodate both visual aids and opportunities for physical
                engagement. Here are four key elements for creating your ideal
                study space:
            </p>
            <div class="row">
                <div class="grid-container gap-10 justify-content-center mb-6">
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500">Space for Movement and Hands-On Activities</strong>
                        <br />
                        <br />
                        You learn best when you can move around and engage physically with the material. Ensure your
                        study area has enough space to perform hands-on activities like building models, conducting
                        experiments, or using manipulatives. A spacious area allows you to incorporate movement into
                        your study sessions, keeping you engaged and enhancing retention.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500">Availability of Visual Learning Materials</strong>
                        <br />
                        <br />
                        Keep visual aids such as charts, diagrams, posters, and colour-coded notes within easy reach.
                        Having these materials visible helps you process information visually. Organise your study space
                        with visual elements that reinforce the material you're learning, like pinning up key diagrams
                        or creating a visual study board.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500">Organised and Clutter-Free Environment</strong>
                        <br />
                        <br />
                        While you need space for physical activities, maintaining an organised environment is essential.
                        A clutter-free space helps prevent distractions and allows you to focus on your visual materials
                        and hands-on tasks. Use shelves, containers, or organisers to keep your materials tidy and
                        easily accessible.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500">Comfortable and Flexible Furniture</strong>
                        <br />
                        <br />
                        Use furniture that adapts to your need for movement and different study positions. Consider
                        options like standing desks, adjustable chairs, or floor cushions that allow you to change
                        positions easily. Being comfortable while studying enables you to concentrate better and
                        incorporate movement without discomfort.
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/EnvironmentPreference/10.svg'"
                        alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <h3 class="text-2xl font-bold text-gray-800">
                        Suggestions for Creating an Effective Learning Space
                    </h3>
                    <p class="">
                        To create your ideal learning environment as a blended
                        learner, consider these detailed tips:
                    </p>
                    <ul class="space-y-2 ">
                        <li>
                            <strong class="text-gray-800">Integrate Visual Displays:</strong>
                            Decorate your study area with visual displays
                            related to your subjects. This could include
                            posters, mind maps, infographics, or timelines.
                            These visual elements keep you engaged and serve as
                            constant reminders of key concepts.
                        </li>
                        <li>
                            <strong class="text-gray-800">Incorporate Hands-On Learning Tools:</strong>
                            Equip your study space with tools that facilitate
                            hands-on learning, such as models, building kits, or
                            art supplies. For subjects like math or science,
                            physical objects like geometric shapes or molecular
                            models can help you understand abstract concepts
                            through tactile experience.
                        </li>
                        <li>
                            <strong class="text-gray-800">Allow for Movement:</strong>
                            Don't feel confined to a desk. Set up areas where
                            you can stand, pace, or even exercise lightly while
                            studying. Movement helps kinaesthetic learners
                            process information, so feel free to incorporate
                            activities like walking while reviewing flashcards
                            or using gestures to memorise information.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Report 8 Kinesthethic-->
    <div v-if="style == 'Kinesthethic'">
        <!-- Content for Report 8 -->
        <div class="space-y-6 p-6">
            <h1 class="text-2xl font-bold text-gray-800">
                Your Ideal Learning Environment
            </h1>
            <p class="">
                As a kinaesthetic learner, creating an environment that
                encourages movement and hands-on engagement is key to your
                success. Here’s how to build a study space that suits your
                learning style:
            </p>
            <div class="row">
                <div class="grid-container gap-10 justify-content-center mb-6">
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500">Incorporate Movement-Friendly Spaces</strong>
                        <br />
                        <br />
                        You learn best when you can move around and engage physically with the material. Set up your
                        study area so that you have space to walk, stretch, or move during study breaks. Try pacing
                        while reviewing notes or setting up stations for different tasks that allow you to shift between
                        activities.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500">Use Hands-On Tools</strong>
                        <br />
                        <br />
                        Equip your study area with tools and materials that let you interact physically with the
                        content. Whether it’s building models, sketching diagrams, or using physical objects to
                        represent concepts, having hands-on learning tools nearby will keep you engaged and reinforce
                        what you’re learning.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500">Incorporate Tactile Learning Aids</strong>
                        <br />
                        <br />
                        For kinaesthetic learners, using tactile aids like stress balls, fidget tools, or textured
                        surfaces can help maintain focus. These small items can be used while studying to channel energy
                        productively without distracting you from the material at hand.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500">Active Learning Stations</strong>
                        <br />
                        <br />
                        Set up different stations around your study space for various tasks. For example, have one area
                        for writing or drawing out concepts, another for building models or hands-on activities, and a
                        third for reviewing material while standing or moving around. Switching between stations allows
                        you to stay active and focused.
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/EnvironmentPreference/10.svg'"
                        alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <h3 class="text-2xl font-bold text-gray-800">
                        Suggestions for Creating an Effective Learning Space
                    </h3>
                    <p class="">
                        To create your ideal learning environment as a Kinaesthetic learner, consider these detailed
                        tips:

                    </p>

                    <h4 class="text-2xl font-bold text-gray-800">
                        Design a Flexible, Open Layout
                    </h4>
                    <p class="">
                        Create a study area with an open layout that allows for
                        movement between tasks. You can switch between different
                        learning activities without feeling confined to one
                        spot.
                    </p>

                    <h4 class="text-2xl font-bold text-gray-800">
                        Use Movement-Based Study Methods
                    </h4>
                    <p class="">
                        Incorporate activities like walking while reviewing
                        notes, acting out processes, or using hand motions to
                        symbolise key concepts. This approach helps you stay
                        engaged and reinforces memory.
                    </p>

                    <h4 class="text-2xl font-bold text-gray-800">
                        Integrate Physical Study Aids
                    </h4>
                    <p class="">
                        Tools like whiteboards, building blocks, or interactive
                        kits make learning more dynamic. Having materials that
                        require physical interaction keeps your mind engaged and
                        strengthens your understanding of concepts.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Report 9 Reading & Writing _ Auditory Blend -->
    <div v-if="style == 'Reading/Writing/Auditory'">
        <!-- Content for Report 9 -->
        <div class="space-y-4 p-4">
            <h1 class="text-2xl font-bold">Your Ideal Learning Environment</h1>
            <p>
                As a reading/writing and auditory learner, your optimal study
                environment should support both written and auditory learning
                methods. Here are four key elements for creating your ideal
                study space:
            </p>
            <div class="row">
                <div class="grid-container gap-10 justify-content-center mb-6">
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500">Quiet Space with Access to Audio Resources</strong>
                        <br />
                        <br />
                        Choose a quiet area where you can focus on listening to lectures, podcasts, or audio recordings
                        without distractions. Equip the space with headphones or speakers to enhance your auditory
                        experience.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500">Organised Space for Writing</strong>
                        <br />
                        <br />
                        Ensure your study area has ample room for writing. Keep it organised with notebooks, pens,
                        highlighters, and devices for digital notetaking. Having a clutter-free, well-organised space
                        helps you focus and improves your writing efficiency.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500">Access to Reading Materials</strong>
                        <br />
                        <br />
                        Your study space should have easy access to books, articles, and online reading platforms. This
                        allows you to seamlessly transition from listening to reading and writing, reinforcing your
                        learning through multiple methods.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500">Combination of Digital and Physical Tools</strong>
                        <br />
                        <br />
                        Incorporate both digital tools, such as laptops or tablets for listening and note-taking, and
                        physical tools like notebooks and printed articles. This blend allows you to engage with both
                        auditory and written material effectively.
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/EnvironmentPreference/10.svg'"
                        alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <h3 class="text-2xl font-bold">
                        Suggestions for Creating an Effective Learning Space
                    </h3>
                    <p>
                        To create your ideal learning environment as a blended learner, consider these detailed tips:

                    </p>
                    <div>
                        <ul class="pl-5 space-y-1">
                            <li>
                                <strong>Incorporate Audio-Listening
                                    Devices:</strong>
                                Use quality headphones or speakers to listen to
                                recorded lectures, podcasts, or audio summaries.
                                This helps you focus on auditory input without
                                external distractions.
                            </li>
                            <li>
                                <strong>Organise Written and Audio
                                    Resources:</strong>
                                Keep your written materials (books, notes,
                                articles) organised and easily accessible. Use
                                apps or devices to store and organise audio
                                recordings, ensuring a smooth transition between
                                listening and writing tasks.
                            </li>
                            <li>
                                <strong>Use Digital Note-Taking Tools with Audio
                                    Features:</strong>
                                Utilise digital tools like Notion or Evernote,
                                which allow you to take notes and embed audio
                                recordings. This lets you combine auditory and
                                written learning in one place.
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
            <h4 class="text-2xl font-bold mb-4">
                Your Ideal Learning Environment
            </h4>
            <p class="mb-4">
                As a reading/writing and kinaesthetic learner, your optimal
                study space should support both physical engagement and written
                tasks. Here are four key elements for creating your ideal study
                space:
            </p>
            <div class="row">
                <div class="grid-container gap-10 justify-content-center mb-6">
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500">Space for Movement and Physical Interaction</strong>
                        <br />
                        <br />
                        Your study area should provide room for movement, allowing you to physically interact with study
                        materials. Whether it’s a standing desk, room to walk around, or space for hands-on tools like
                        models or charts, having a dynamic environment helps you stay engaged.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500">Organised Area for Reading and Writing</strong>
                        <br />
                        <br />
                        Ensure your workspace is well-organised with all necessary reading and writing tools—such as
                        textbooks, notebooks, pens, and highlighters—easily accessible. A clear, uncluttered desk helps
                        you focus during reading and writing sessions.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500">Access to Both Digital and Physical Learning Tools</strong>
                        <br />
                        <br />
                        Combine digital tools for reading and note-taking with physical resources like flashcards,
                        diagrams, or tactile models. Switching between these tools allows you to engage with material
                        both physically and mentally.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500">Quiet Space for Writing and Reflection</strong>
                        <br />
                        <br />
                        While movement and physical interaction are important, having a quiet area for focused reading
                        and writing is also essential. Balance physical activity with moments of quiet reflection where
                        you can write detailed notes or summaries without distractions.
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/EnvironmentPreference/10.svg'"
                        alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <h3 class="text-2xl font-bold mt-6 mb-2">
                        Suggestions for Creating an Effective Learning Space
                    </h3>
                    <p class="mb-4">
                        To create your ideal learning environment as a blended
                        learner, consider these detailed tips:
                    </p>
                    <ul class="pl-5 mb-6">
                        <li>
                            <strong>Use Digital Tools for Writing and Physical
                                Interaction for Review:</strong>
                            Take advantage of digital note-taking tools like
                            laptops or tablets for writing, while using physical
                            tools like flashcards or building models during
                            review sessions. This allows you to combine both
                            learning preferences effectively.
                        </li>
                        <li>
                            <strong>Use Movement Tools While Writing:</strong>
                            Incorporate tools like a standing desk or a
                            stability ball chair to encourage movement while
                            writing or reading. This helps keep your
                            kinaesthetic learning active, even during stationary
                            tasks.
                        </li>
                        <li>
                            <strong>Incorporate Physical Study Aids:</strong>
                            Use physical study aids like flashcards, tactile
                            models, or diagrams alongside written materials.
                            This lets you engage with the material physically,
                            reinforcing the information you’ve read or written
                            about.
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
            <h4 class="text-2xl font-bold mb-4">
                Your Ideal Learning Environment
            </h4>

            <p class="mb-6">
                As a reading/writing and visual learner, your study space should
                accommodate both visual aids and your preference for written
                material. Here are four key elements for creating your ideal
                study space:
            </p>
            <div class="row">
                <div class="grid-container gap-10 justify-content-center mb-6">
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500">Incorporate Visual Learning Tools</strong>
                        <br />
                        <br />
                        Surround yourself with visual aids like charts, diagrams, and infographics. These tools help you
                        see and organise complex ideas. Pinning up key concepts or timelines in your study space can
                        serve as a constant reminder of what you're learning.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500">Access to Writing and Reading Materials</strong>
                        <br />
                        <br />
                        Ensure you have easy access to books, articles, and writing tools like notebooks, pens, and
                        digital devices. Being able to quickly read and write down ideas will help you stay engaged and
                        organised while learning.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500">Quiet, Distraction-Free Study Area</strong>
                        <br />
                        <br />
                        You benefit from a quiet space where you can focus on both reading and writing tasks without
                        interruptions. A distraction-free zone helps you concentrate on absorbing and processing
                        information in written form and through visual aids.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500">Organised, Clutter-Free Workspace</strong>
                        <br />
                        <br />
                        Maintaining an organised study space is important for keeping track of both visual and written
                        materials. Ensure your workspace has plenty of room for notebooks, textbooks, and visual aids
                        like mind maps or charts. Keep everything neat to avoid distractions.
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/EnvironmentPreference/10.svg'"
                        alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <h3 class="text-2xl font-bold mb-4">
                        Suggestions for Creating an Effective Learning Space
                    </h3>

                    <p class="mb-6">
                        To create your ideal learning environment as a blended
                        learner, consider these detailed tips:
                    </p>

                    <ul class="pl-5 mb-6">
                        <li>
                            <strong>Display Visual Summaries:</strong> Use a
                            bulletin board or wall space to display visual
                            summaries of key concepts you’re studying. This
                            keeps important information in front of you,
                            reinforcing your visual learning preferences.
                        </li>
                        <li>
                            <strong>Organise Written Notes and Materials:</strong>
                            Keep your notebooks, reading materials, and digital
                            devices well-organised in your workspace. Use
                            folders or storage solutions to ensure everything is
                            easily accessible. This helps you transition
                            smoothly between reading, writing, and using visual
                            tools.
                        </li>
                        <li>
                            <strong>Use a Combination of Digital and Paper
                                Tools:</strong>
                            While you may enjoy writing on paper, digital tools
                            like note-taking apps (Evernote, OneNote) allow you
                            to integrate both text and visual elements
                            seamlessly. You can create digital diagrams and
                            charts while also organising your written notes in
                            one place.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Report 12 Reading & Writing-->
    <div v-if="style == 'Reading/Writing'">
        <!-- Content for Report 12 -->
        <div class="p-6">
            <h4 class="text-2xl font-bold mb-4">
                Your Ideal Learning Environment
            </h4>

            <p class="mb-6">
                As a reading/writing learner, your ideal study space should be
                designed to support text-based learning. Here’s how to build a
                study space that suits your learning style:
            </p>
            <div class="row">
                <div class="grid-container gap-10 justify-content-center mb-6">
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500">Quiet, Distraction-Free Space</strong>
                        <br />
                        <br />
                        Reading/writing learners benefit from a quiet environment that allows them to concentrate on
                        their reading and writing tasks without interruption. Set up a designated study area where you
                        can focus, free from noise or distractions. This will help you stay focused on the material
                        you're engaging with.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500">Access to Writing Tools</strong>
                        <br />
                        <br />
                        Make sure your study area is equipped with plenty of writing supplies such as pens, paper,
                        notebooks, and digital tools like word processors or note-taking apps. Having these materials
                        easily accessible will allow you to take notes, organise your thoughts, and review information
                        effectively.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500">Comfortable Seating and Desk Space</strong>
                        <br />
                        <br />
                        Since reading and writing can be time-intensive, ensure your seating and desk area are
                        comfortable and well-organised. A well-lit, ergonomic workspace will help you concentrate and
                        work efficiently for extended periods without feeling fatigued.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500">Organised, Text-Based Study Materials</strong>
                        <br />
                        <br />
                        Surround yourself with the books, articles, and notes you need for studying. Keep your materials
                        organised and within easy reach, so you can quickly access information as you need it. An
                        organised space helps reduce stress and improves your ability to focus on your work.
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/EnvironmentPreference/10.svg'"
                        alt="" />
                    </div>
                </div>
                <div class="col-6">

                    <h3 class="text-2xl font-bold mb-4">
                        Suggestions for Creating an Effective Learning Space
                    </h3>
                    <ul class="pl-5 mb-6">
                        <p>
                            To create your ideal learning environment as a Reading/Writing learner, consider these
                            detailed tips:
                        </p>
                        <li>
                            <strong>Prioritise Quiet Zones:</strong> Since
                            concentration is key for reading/writing learners,
                            try to find a study area that’s free from noise or
                            disturbances. Libraries, quiet rooms, or study nooks
                            at home can help create the peaceful environment you
                            need to stay focused on reading and writing.
                        </li>
                        <li>
                            <strong>Use Digital Note-Taking Tools:</strong> In
                            addition to traditional notebooks, digital tools
                            like Google Docs, Evernote, or Microsoft OneNote can
                            help you organise your notes. These apps also allow
                            you to search through your notes quickly and make
                            revisions, which supports your text-based learning
                            style.
                        </li>
                        <li>
                            <strong>Establish a Structured Reading Routine:</strong>
                            Set up a schedule that allows for dedicated reading
                            and writing time, breaking down large tasks into
                            manageable sections. Structure your study time to
                            include periods for reading, summarising, and
                            reviewing to ensure you fully engage with the
                            material.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Report 13 Visual _ Auditory Blend-->
    <div v-if="style == 'Visual/Auditory'">
        <!-- Content for Report 13 -->
        <div class="p-6">
            <h4 class="text-2xl font-bold mb-4">
                Your Ideal Learning Environment
            </h4>

            <p class="mb-6">
                As a visual and auditory learner, your study space should
                accommodate both your need for visual aids and a sound-friendly
                environment. Here are four key elements for creating your ideal
                study space:
            </p>
            <div class="row">
                <div class="grid-container gap-10 justify-content-center mb-6">
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500">Quiet, Organised Space with Visual Tools</strong>
                        <br />
                        <br />
                        A quiet, distraction-free space is important for auditory learners, while a well-organised
                        environment with visual tools like whiteboards, charts, or diagrams supports your visual
                        learning. Make sure your space includes visual aids to reference while you listen to lectures or
                        discussions.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500">Access to Audio and Visual Resources</strong>
                        <br />
                        <br />
                        Ensure that your study space has access to audio resources like headphones, speakers, and
                        devices for playing podcasts or lectures. At the same time, keep visual materials like
                        textbooks, diagrams, and online videos available to help reinforce the information.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500">Combining Visual and Auditory Study Aids</strong>
                        <br />
                        <br />
                        Make use of tools that combine visual and auditory elements, such as watching educational videos
                        or listening to podcasts that include charts and diagrams. This allows you to process
                        information through both listening and visual engagement.
                    </div>
                    <div class="grid-item gradient-border">
                        <strong class="mb-2 text-blue-500">Freedom to Speak Out Loud and Visualise</strong>
                        <br />
                        <br />
                        As an auditory learner, verbalising concepts helps you learn, so make sure your study space
                        allows you to speak aloud without interruptions. You should also have visual aids, such as a
                        whiteboard, where you can draw or write down key points as you talk through them.
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/EnvironmentPreference/10.svg'"
                        alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <h3 class="text-2xl font-bold mb-4">
                        Suggestions for Creating an Effective Learning Space
                    </h3>

                    <p class="mb-6">
                        To create your ideal learning environment as a blended
                        learner, consider these detailed tips:
                    </p>

                    <ul class="pl-5 mb-6">
                        <li>
                            <strong>Use Both Audio and Visual Study Tools:</strong>
                            Keep a balance between visual and auditory tools in
                            your study space. Have a set of headphones for
                            listening to lectures or podcasts while reviewing
                            notes or diagrams visually. This helps reinforce
                            your learning by engaging both styles
                            simultaneously.
                        </li>
                        <li>
                            <strong>Design a Quiet and Organised Space:</strong>
                            For auditory learners, external noise can be
                            distracting, so choose a study space that minimises
                            background noise. At the same time, ensure that
                            visual learners benefit from an organised area where
                            they can easily access written materials or
                            diagrams.
                        </li>
                        <li>
                            <strong>Incorporate Verbal and Visual Practice:</strong>
                            Create a comfortable space where you can speak aloud
                            and visualise at the same time. For example, while
                            reviewing visual diagrams, talk through the
                            information, using the combination of auditory and
                            visual elements to reinforce your learning.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Report 14 Visual _ Kinesthethic Blend-->
    <div v-if="style == 'Visual/Kinesthethic'">
        <!-- Content for Report 14 -->
        <div class="p-6">
            <h4 class="text-2xl font-bold mb-4">
                Your Ideal Learning Environment
            </h4>

            <p class="mb-6">
                As a visual and kinaesthetic learner, your study space should
                accommodate both visual aids and opportunities for physical
                engagement. Here are four key elements for creating your ideal
                study space:
            </p>
            <div class="row">
                <ul class="pl-5 mb-6">
                    <li>
                        <strong>Space for Movement and Hands-On Activities:</strong>
                        You learn best when you can move around and engage physically with the material. Ensure your
                        study area has enough space to perform hands-on activities like building models, conducting
                        experiments, or using manipulatives. A spacious area allows you to incorporate movement into
                        your study sessions, keeping you engaged and enhancing retention.
                    </li>
                    <li>
                        <strong>Availability of Visual Learning Materials:</strong>
                        Keep visual aids such as charts, diagrams, posters, and colour-coded notes within easy reach.
                        Having these materials visible helps you process information visually. Organise your study space
                        with visual elements that reinforce the material you're learning, like pinning up key diagrams
                        or creating a visual study board.
                    </li>
                    <li>
                        <strong>Organised and Clutter-Free Environment:</strong>
                        While you need space for physical activities, maintaining an organised environment is essential.
                        A clutter-free space helps prevent distractions and allows you to focus on your visual materials
                        and hands-on tasks. Use shelves, containers, or organisers to keep your materials tidy and
                        easily accessible.
                    </li>
                    <li>
                        <strong>Comfortable and Flexible Furniture:</strong>
                        Use furniture that adapts to your need for movement and different study positions. Consider
                        options like standing desks, adjustable chairs, or floor cushions that allow you to change
                        positions easily. Being comfortable while studying enables you to concentrate better and
                        incorporate movement without discomfort.
                    </li>
                </ul>

            </div>

            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/EnvironmentPreference/10.svg'"
                        alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <h3 class="text-2xl font-bold mb-3">
                        Suggestions for Creating an Effective Learning Space
                    </h3>
                    <p class="mb-6">
                        To create your ideal learning environment as a blended
                        learner, consider these detailed tips:
                    </p>

                    <ul class="pl-5 mb-6">
                        <li>
                            <strong>Integrate Visual Displays:</strong> Decorate
                            your study area with visual displays related to your
                            subjects. This could include posters, mind maps,
                            infographics, or timelines. These visual elements
                            keep you engaged and serve as constant reminders of
                            key concepts.
                        </li>
                        <li>
                            <strong>Incorporate Hands-On Learning Tools:</strong>
                            Equip your study space with tools that facilitate
                            hands-on learning, such as models, building kits, or
                            art supplies. For subjects like math or science,
                            physical objects like geometric shapes or molecular
                            models can help you understand abstract concepts
                            through tactile experience.
                        </li>
                        <li>
                            <strong>Allow for Movement:</strong> Don't feel
                            confined to a desk. Set up areas where you can
                            stand, pace, or even exercise lightly while
                            studying. Movement helps kinaesthetic learners
                            process information, so feel free to incorporate
                            activities like walking while reviewing flashcards
                            or using gestures to memorise information.
                        </li>
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
                Your Ideal Learning Environment
            </h4>

            <p class="mb-6">
                As a visual and reading/writing learner, your study space should
                accommodate both visual aids and your preference for written
                material. Here are four key elements for creating your ideal
                study space:
            </p>
            <div class="row">
                <ul class="pl-6 mb-6">
                    <li>
                        <strong>Incorporate Visual Learning Tools:</strong>
                        Surround yourself with visual aids like charts, diagrams, and infographics. These tools help you
                        see and organise complex ideas. Pinning up key concepts or timelines in your study space can
                        serve as a constant reminder of what you're learning.
                    </li>
                    <li>
                        <strong>Access to Writing and Reading Materials:</strong>
                        Ensure you have easy access to books, articles, and writing tools like notebooks, pens, and
                        digital devices. Being able to quickly read and write down ideas will help you stay engaged and
                        organised while learning.
                    </li>
                    <li>
                        <strong>Quiet, Distraction-Free Study Area:</strong>
                        You benefit from a quiet space where you can focus on both reading and writing tasks without
                        interruptions. A distraction-free zone helps you concentrate on absorbing and processing
                        information in written form and through visual aids.
                    </li>
                    <li>
                        <strong>Organised, Clutter-Free Workspace:</strong>
                        Maintaining an organised study space is important for keeping track of both visual and written
                        materials. Ensure your workspace has plenty of room for notebooks, textbooks, and visual aids
                        like mind maps or charts. Keep everything neat to avoid distractions.
                    </li>
                </ul>

            </div>

            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/EnvironmentPreference/10.svg'"
                        alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <h3 class="text-2xl font-bold mb-4">
                        Suggestions for Creating an Effective Learning Space
                    </h3>

                    <p class="mb-6">
                        To create your ideal learning environment as a blended
                        learner, consider these detailed tips:
                    </p>

                    <ul class="pl-6 mb-6">
                        <li>
                            <strong>Display Visual Summaries:</strong> Use a
                            bulletin board or wall space to display visual
                            summaries of key concepts you’re studying. This
                            keeps important information in front of you,
                            reinforcing your visual learning preferences.
                        </li>
                        <li>
                            <strong>Organise Written Notes and Materials:</strong>
                            Keep your notebooks, reading materials, and digital
                            devices well-organised in your workspace. Use
                            folders or storage solutions to ensure everything is
                            easily accessible. This helps you transition
                            smoothly between reading, writing, and using visual
                            tools.
                        </li>
                        <li>
                            <strong>Use a Combination of Digital and Paper
                                Tools:</strong>
                            While you may enjoy writing on paper, digital tools
                            like note-taking apps (Evernote, OneNote) allow you
                            to integrate both text and visual elements
                            seamlessly. You can create digital diagrams and
                            charts while also organising your written notes in
                            one place.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Report 16 Visual-->
    <div v-if="style == 'Visual'">
        <!-- Content for Report 16 -->
        <div class="p-6">
            <h4 class="text-2xl font-bold mb-4">
                Your Ideal Learning Environment
            </h4>
            <p>
                As a Visual learner, creating an environment that caters to your visual processing strengths can
                significantly enhance your ability to study and retain information. Here’s how to optimise your study
                space and learning conditions to best support your Visual learning style:

            </p>

            <div class="row">
                <ul class="pl-6 mb-6">
                    <li>
                        <strong>Organised and Visual:</strong> An organised study space with a focus on visual aids can
                        help you manage information more effectively. Use tools like charts, diagrams, mind maps, and
                        colour-coded notes to create a visually structured environment. Display key concepts and
                        reminders in visual formats to reinforce learning and make important information easily
                        accessible.
                    </li>
                    <li>
                        <strong>Well-Lit and Comfortable:</strong> Good lighting is crucial for reducing eye strain and
                        improving your ability to see visual materials clearly. Ensure your study area is well-lit with
                        natural or bright artificial light. Additionally, make sure your study space is comfortable,
                        with a good chair and desk setup that allows you to focus without physical discomfort.
                    </li>
                    <li>
                        <strong>Minimise Distractions:</strong> Keep your study area free from visual distractions that
                        might interrupt your focus. This includes reducing clutter, avoiding excessive decorations, and
                        maintaining a clean workspace. A tidy environment helps you concentrate on visual tasks and
                        prevents interruptions that can disrupt your learning process.
                    </li>
                    <li>
                        <strong>Incorporate Visual Aids:</strong> Surround yourself with visual aids that support your
                        learning. This could include posters with key concepts, infographics summarising important
                        information, and visual schedules outlining your study plan. These aids act as constant visual
                        reminders and help reinforce what you are learning.
                    </li>
                </ul>

            </div>

            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/EnvironmentPreference/10.svg'"
                        alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <h3 class="text-2xl font-bold mb-4">
                        Suggestions for Creating an Effective Learning Space
                    </h3>
                    <ul class="pl-6 mb-6">
                        <li>
                            <p>
                                To create your ideal learning environment as a Visual learner, consider these detailed
                                tips:

                            </p>
                        </li>
                        <li>
                            <strong>Design a Visual Study Zone:</strong> Set up
                            a dedicated study area with visual tools such as
                            whiteboards or bulletin boards. Use these tools to
                            jot down important dates, deadlines, and key
                            concepts. Having a designated visual study zone
                            helps you stay organised and keeps your study
                            materials within easy reach.
                        </li>
                        <li>
                            <strong>Create Visual Study Materials:</strong> Make
                            use of visual study aids like flashcards with
                            images, diagrams, and charts. These materials can
                            help you review and memorise information more
                            effectively. Consider using apps or tools that allow
                            you to create digital visual aids for easier access
                            and revision.
                        </li>
                        <li>
                            <strong>Establish a Visual Study Routine:</strong>
                            Develop a study routine that incorporates visual
                            elements. For example, create visual study guides or
                            use colour-coded notes to differentiate between
                            various subjects or topics. Integrating these
                            elements into your routine can make studying more
                            engaging and help you retain information better.
                        </li>
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
    name: "EnvironmentPreference",
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

div.row>div.col-6>h4,
ul>li>strong {
    color: rgb(36, 168, 250);
    font-size: 17px;
}

div.mb-4>h4,
li.flex>div>h4 {
    color: rgb(36, 168, 250);
    font-size: 17px;
}

.grid-container {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    /* 4 columns */
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
        grid-template-columns: repeat(1, 1fr);
        /* 2 columns */
    }
}

@media (max-width: 600px) {
    .grid-container {
        grid-template-columns: repeat(1, 1fr);
        /* 1 column */
    }
}

.gradient-border>strong {}

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

ul>li {
    margin-bottom: 15px;

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
