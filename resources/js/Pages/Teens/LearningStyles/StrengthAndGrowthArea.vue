<template>
 <div class="p-6">
    <div class="space-y-6 mt-4">
        <h2 class="text-center font-bold mb-4">Strength and Growth Areas</h2>
    </div>
    <!-- Report 1 Auditory -->
    <div v-if="style == 'Auditory'">
        <!-- Content for Report 1 -->
        <div class="p-4">
            <div class="row">
                <div class="col-6">
                    <h4 class="text-md font-bold mb-2">Strengths of an Auditory Learner</h4>
                    <p class="mb-4">
                        As an auditory learner, you have some awesome strengths that make studying and understanding new
                        things
                        easier for you:
                    </p>
                    <ul class=" pl-6 mb-4">
                        <li><strong>Great Memory for Spoken Information:</strong> You remember things best when you hear
                            them.
                            Whether it’s through lectures, discussions, or podcasts, auditory information sticks with
                            you better
                            than reading or seeing.</li>
                        <li><strong>Strong Verbal Communication:</strong> You are great at expressing yourself through
                            words.
                            Whether it's explaining something to a friend or answering questions in class, talking
                            through
                            information helps you understand it better.</li>
                        <li><strong>Excellent Listening Skills:</strong> You pay close attention to what people are
                            saying, and
                            you can recall key details from conversations or presentations with ease.</li>
                        <li><strong>Engagement in Discussions:</strong> Group discussions, debates, and verbal
                            explanations are
                            where you shine. Talking through ideas helps reinforce your understanding and allows you to
                            clarify
                            concepts in real-time.</li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/StrengthsGrowthAreas/2.svg'"
                            alt="" />
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-6">

                    <div class="flex justify-center items-center">
                        <img class="w-50 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/StrengthsGrowthAreas/3.svg'"
                        alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <h4 class="text-md font-bold mb-2">Areas for Growth</h4>

                    <p class="mb-4">
                        While you have many strengths, here are some areas where you can work on improving:
                    </p>
                    <ul class=" pl-6 mb-4">
                        <li><strong>Explore Different Learning Styles:</strong> While auditory learning works best for
                            you,
                            mixing in visual or kinaesthetic methods—like using diagrams or engaging in hands-on
                            activities—can
                            give you a deeper understanding of topics.</li>
                        <li><strong>Balance Listening with Notetaking:</strong> Since you absorb information by
                            listening, it’s
                            important to also take notes. Writing things down while you listen can help you retain the
                            information and review it later.</li>
                        <li><strong>Develop Focus in Noisy Environments:</strong> As an auditory learner, you may find
                            it harder
                            to concentrate in noisy environments. Developing strategies to manage distractions will help
                            you
                            stay focused when studying.</li>
                    </ul>
                </div>

            </div>

            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-50 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/StrengthsGrowthAreas/4.svg'"
                        alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <h4 class="text-md font-bold mb-4">Tips for Personal Development</h4>
                    <ul class=" pl-6 mb-4">
                        <li><strong>Mix Up Your Learning Methods:</strong> Add some variety to your study routine by
                            trying out
                            visual aids or hands-on projects along with listening. This will give you a more rounded
                            approach
                            and help you remember more.</li>
                        <li><strong>Practice Taking Notes:</strong> Improve your note-taking skills by jotting down key
                            points
                            during lectures or while listening to recordings. This will reinforce your understanding and
                            give
                            you material to review later.</li>
                        <li><strong>Strengthen Focus in Loud Spaces:</strong> Work on strategies to block out background
                            noise,
                            like using earplugs or finding a quiet study space, so you can focus better when you're in
                            noisy
                            environments.</li>
                    </ul>
                </div>
            </div>


        </div>

    </div>

    <!-- Report 2 Auditory _ Kinesthethic Blend -->
    <div v-if="style == 'Auditory/Kinesthethic'">
        <!-- Content for Report 2 -->
        <div class=" mx-auto p-6">
            <div class="row">

                <div class="col-6">

                    <h1 class="text-2xl font-bold mb-4">Strengths of a Blended Auditory and Kinaesthetic Learner
                        </h1>
                        <p class="mb-4">As a blended learner, you have unique strengths that draw from both auditory and
                            kinaesthetic learning styles. Here are four key strengths:</p>

                    <ul class=" pl-6 mb-4">
                        <li class="mb-2">
                            <h4 class="text-md font-bold">Enhanced Understanding Through Multi-Sensory Input</h4>
                            <p>You grasp concepts more effectively when you can both hear and physically engage with the
                                material. Listening to explanations and then applying them through hands-on activities
                                solidifies your understanding.</p>
                        </li>
                        <li class="mb-2">
                            <h4 class="text-md font-bold">Strong Memory for Auditory and Physical Tasks</h4>
                            <p>You remember information well when it is delivered verbally and reinforced through
                                physical
                                interaction. Combining listening with hands-on tasks helps you retain details better.
                            </p>
                        </li>
                        <li class="mb-2">
                            <h4 class="text-md font-bold">Versatility in Learning Methods</h4>
                            <p>You can adapt to various learning environments by using both auditory and kinaesthetic
                                methods.
                                Whether listening to a lecture or participating in a practical activity, you can switch
                                between
                                these methods as needed.</p>
                        </li>
                        <li class="mb-2">
                            <h4 class="text-md font-bold">Effective Participation in Group Activities</h4>
                            <p>Engaging in group discussions and hands-on projects allows you to process information
                                through
                                both hearing and doing. You excel in collaborative settings where you can both discuss
                                and
                                physically interact with the material.</p>
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/StrengthsGrowthAreas/2.svg'"
                            alt="" />
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-50 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/StrengthsGrowthAreas/3.svg'"
                        alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <h4 class="text-md font-bold mb-4">Areas for Growth</h4>

                    <p class="mb-4">While you have many strengths, there are also some areas where you can work on
                        improving:
                    </p>

                    <ul class=" pl-6 mb-4">
                        <li class="mb-2">
                            <h4 class="text-md font-bold">Balancing Auditory and Kinaesthetic Techniques</h4>
                            <p>At times, you may rely more on one method over the other. Work on balancing your use of
                                auditory
                                and kinaesthetic techniques to ensure you are integrating both effectively.</p>
                        </li>
                        <li class="mb-2">
                            <h4 class="text-md font-bold">Improving Focus in Static Environments</h4>
                            <p>Environments that lack physical activity or auditory stimulation may be challenging.
                                Develop
                                strategies to stay focused in these settings, such as incorporating brief physical
                                activities or
                                using auditory aids.</p>
                        </li>
                        <li class="mb-2">
                            <h4 class="text-md font-bold">Combining Learning Styles More Consistently</h4>
                            <p>Ensure you are consistently using both auditory and kinaesthetic methods when studying.
                                For
                                example, integrate verbal explanations with hands-on practice to enhance your overall
                                learning
                                experience.</p>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-50 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/StrengthsGrowthAreas/4.svg'"
                        alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <h4 class="text-md font-bold mb-4">Tips for Personal Development</h4>

                    <ul class=" pl-6 mb-4">
                        <li class="mb-2">
                            <h4 class="text-md font-bold">Combine Auditory and Kinaesthetic Activities</h4>
                            <p>When studying, use both auditory and kinaesthetic methods. For example, listen to a
                                lecture or
                                podcast while engaging in related hands-on activities, such as drawing diagrams or
                                building
                                models.</p>
                        </li>
                        <li class="mb-2">
                            <h4 class="text-md font-bold">Create Verbal and Physical Study Aids</h4>
                            <p>Develop study aids that incorporate both auditory and kinaesthetic elements. For
                                instance, create
                                flashcards with key points that you can read aloud while using physical objects or
                                gestures to
                                represent concepts.</p>
                        </li>
                        <li class="mb-2">
                            <h4 class="text-md font-bold">Record and Replay Explanations</h4>
                            <p>Record yourself explaining key concepts or summarising lessons. Listen to these
                                recordings while
                                engaging in physical activities, like reviewing notes or practising skills, to reinforce
                                learning through both methods.</p>
                        </li>
                    </ul>
                </div>
            </div>






        </div>

    </div>

    <!-- Report 3 Auditory _ Reading & Writing Blend-->
    <div v-if="style == 'Auditory/Reading/Writing'">
        <!-- Content for Report 3 -->
        <div class="p-6 space-y-6">
            <div class="row">
                <div class="col-6">

                    <h4 class="text-2xl font-bold text-gray-800">Strengths of a Blended Auditory and Reading/Writing
                        Learner
                    </h4>
                    <p class="">As a blended learner, you have unique strengths that draw from both
                        auditory and
                        reading/writing learning styles. Here are four key strengths:</p>
                    <ul class="space-y-4">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="font-bold text-gray-800">Strong Comprehension Through Listening and
                                    Writing</h4>
                                <p class="">You absorb information well when you listen to explanations or
                                    discussions and then reinforce that knowledge through writing. Combining auditory
                                    input with
                                    writing helps you better understand and organise the material.</p>
                            </div>
                        </li>
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="font-bold text-gray-800">Effective Note-Taking and Listening Skills</h4>
                                <p class="">You have a natural ability to take effective notes while
                                    listening to
                                    lectures or discussions. This skill allows you to process information in real-time,
                                    ensuring
                                    that you capture key points and retain them for future reference.</p>
                            </div>
                        </li>
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="font-bold text-gray-800">Ability to Learn from Multiple Sources</h4>
                                <p class="">You excel when you can learn through various formats, such as
                                    audio
                                    materials, textbooks, and written summaries. This flexibility helps you adapt to
                                    different
                                    learning environments and styles, ensuring a deeper understanding of the material.
                                </p>
                            </div>
                        </li>
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="font-bold text-gray-800">Structured Approach to Learning</h4>
                                <p class="">Your reading/writing preference gives you the ability to
                                    organise and
                                    structure information clearly. You are skilled at synthesising auditory input into
                                    written
                                    summaries, outlines, or essays, which helps reinforce and solidify your
                                    understanding.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/StrengthsGrowthAreas/2.svg'"
                            alt="" />
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-50 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/StrengthsGrowthAreas/3.svg'"
                        alt="" />
                    </div>
                </div>
                <div class="col-6">

                    <h4 class="text-2xl font-bold text-gray-800">Areas for Growth</h4>
                    <p class="">While you have many strengths, there are also some areas where you can work
                        on
                        improving:</p>
                    <ul class="space-y-4">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="font-bold text-gray-800">Balancing Listening and Writing Techniques</h4>
                                <p class="">At times, you may focus more on one method over the other. Work
                                    on
                                    balancing your use of auditory and writing techniques to ensure you’re fully
                                    engaging both
                                    learning styles.</p>
                            </div>
                        </li>
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="font-bold text-gray-800">Improving Retention Through Active Participation
                                </h4>
                                <p class="">While listening and writing are effective methods for you,
                                    participating actively in discussions or teaching concepts to others can further
                                    reinforce
                                    your learning. Engage more actively in verbal discussions to deepen your
                                    understanding.</p>
                            </div>
                        </li>
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="font-bold text-gray-800">Enhancing Focus During Long Reading Sessions
                                </h4>
                                <p class="">You may sometimes struggle to maintain focus during extended
                                    reading
                                    sessions. To address this, take breaks to review what you’ve learned by listening to
                                    audio
                                    resources or summarising the material in writing.</p>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>


            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-50 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/StrengthsGrowthAreas/4.svg'"
                        alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <h4 class="text-2xl font-bold text-gray-800 mb-4">Tips for Personal Development</h4>
                    <ul class="space-y-4">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="font-bold text-gray-800">Combine Auditory and Written Techniques</h4>
                                <p class="">When studying, use both auditory and written methods. Listen to
                                    audio
                                    recordings of lectures or read textbooks, then write summaries or notes to reinforce
                                    your
                                    understanding of the material.</p>
                            </div>
                        </li>
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="font-bold text-gray-800">Explain Concepts Aloud After Writing</h4>
                                <p class="">After writing notes or summaries, explain the concepts out loud
                                    to
                                    yourself or others. This helps reinforce the material by engaging both your auditory
                                    and
                                    reading/writing strengths.</p>
                            </div>
                        </li>
                        <li class="flex items-start space-x-4">
                            <div>
                                <h4 class="font-bold text-gray-800">Record Verbal Summaries of Written Material</h4>
                                <p class="">Record yourself reading key points or summarising written
                                    content aloud
                                    and listen to the recordings during review sessions. This practice helps strengthen
                                    both
                                    your auditory and reading/writing skills.</p>
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

            <div class="row">
                <div class="col-6">
                    <h4 class="text-md font-bold text-gray-800">Strengths of a Blended Auditory and Visual Learner
                    </h4>
                    <p class="">As a blended learner, you have unique strengths that draw from both
                        auditory and
                        visual learning styles. Here are four key strengths:</p>

                    <ul class="space-y-2">
                        <li><strong class="text-gray-800">Excellent at Understanding Concepts through Visual
                                Aids</strong>: You
                            excel when information is presented visually, such as through diagrams, charts, or videos.
                            Visual
                            materials help you quickly grasp and retain complex ideas.</li>
                        <li><strong class="text-gray-800">Strong Recall of Spoken Information</strong>: You can remember
                            information well when you hear it, whether through lectures, podcasts, or discussions.
                            Hearing
                            explanations helps reinforce your understanding of the material.</li>
                        <li><strong class="text-gray-800">Versatility in Learning Approaches</strong>: You can switch
                            between
                            visual and auditory methods depending on the situation. For example, you might listen to a
                            lecture
                            while taking notes or review a diagram while listening to an explanations, using both methods
                            to
                            reinforce your understanding.</li>
                        <li><strong class="text-gray-800">Effective in Group Discussions and Presentations</strong>:
                            Engaging in
                            group discussions or delivering presentations helps you learn by combining verbal
                            explanations with
                            visual aids. This method allows you to absorb information more effectively.</li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/StrengthsGrowthAreas/2.svg'"
                            alt="" />
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-50 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/StrengthsGrowthAreas/3.svg'"
                        alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <h4 class="text-md font-bold text-gray-800">Areas for Growth</h4>
                    <p class="">While you have many strengths, there are also some areas where you can work
                        on
                        improving:</p>

                    <ul class="space-y-2">
                        <li><strong class="text-gray-800">Balancing Visual and Auditory Methods</strong>: At times, you
                            may rely
                            too heavily on one style. Practice balancing your visual and auditory methods to ensure
                            you’re using
                            both effectively in different situations.</li>
                        <li><strong class="text-gray-800">Improving Focus in Noisy or Overly Visual
                                Environments</strong>: In
                            environments with too much noise or visual clutter, it can be challenging to focus. Develop
                            strategies to block out distractions, such as using noise-cancelling headphones or
                            simplifying your
                            visual aids.</li>
                        <li><strong class="text-gray-800">Combining Both Styles More Consistently</strong>: Work on
                            consistently
                            integrating both visual and auditory techniques when studying or learning new information.
                            For
                            example, try creating diagrams while listening to a recorded lecture to make the most of
                            both
                            styles.</li>
                    </ul>
                </div>
            </div>


            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-50 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/StrengthsGrowthAreas/4.svg'"
                        alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <h4 class="text-md font-bold text-gray-800 mb-4">Tips for Personal Development</h4>
                    <ul class="space-y-2">
                        <li><strong class="text-gray-800">Use Audio and Visuals Together</strong>: When studying,
                            combine visual
                            aids like diagrams or charts with audio resources like podcasts or recorded lectures. This
                            dual
                            approach reinforces learning.</li>
                        <li><strong class="text-gray-800">Practice Explaining Concepts Aloud</strong>: After reviewing a
                            diagram
                            or visual aid, explain it aloud to yourself or someone else. This will help you integrate
                            both
                            learning styles and solidify your understanding.</li>
                        <li><strong class="text-gray-800">Refine Your Focus Techniques</strong>: Use tools like
                            headphones, soft
                            background music, or clean visual aids to help you focus in noisy or cluttered environments.
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
            <div class="row">
                <div class="col-6">
                    <h4 class="text-md font-bold text-gray-800">Strengths of a Blended Kinaesthetic and Auditory
                        Learner
                    </h4>
                    <p class="">As a blended learner, you have unique strengths that draw from both
                        kinaesthetic
                        and auditory learning styles. Here are four key strengths:</p>

                    <ul class="space-y-4">
                        <li><strong class="text-gray-800">Enhanced Understanding Through Multi-Sensory Input</strong>:
                            You grasp
                            concepts more effectively when you can both hear and physically engage with the material.
                            Listening
                            to explanations and then applying them through hands-on activities solidifies your
                            understanding.
                        </li>
                        <li><strong class="text-gray-800">Strong Memory for Auditory and Physical Tasks</strong>: You
                            remember
                            information well when it is delivered verbally and reinforced through physical interaction.
                            Combining listening with hands-on tasks helps you retain details better.</li>
                        <li><strong class="text-gray-800">Versatility in Learning Methods</strong>: You can adapt to
                            various
                            learning environments by using both auditory and kinaesthetic methods. Whether listening to
                            a
                            lecture or participating in a practical activity, you can switch between these methods as
                            needed.
                        </li>
                        <li><strong class="text-gray-800">Effective Participation in Group Activities</strong>: Engaging
                            in
                            group discussions and hands-on projects allows you to process information through both
                            hearing and
                            doing. You excel in collaborative settings where you can both discuss and physically
                            interact with
                            the material.</li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/StrengthsGrowthAreas/2.svg'"
                            alt="" />
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-50 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/StrengthsGrowthAreas/3.svg'"
                        alt="" />
                    </div>
                </div>
                <div class="col-6">

                    <h4 class="text-md font-bold text-gray-800">Areas for Growth</h4>
                    <p class="">While you have many strengths, there are also some areas where you can work
                        on
                        improving:</p>
                    <ul class="space-y-4">
                        <li><strong class="text-gray-800">Balancing Auditory and Kinaesthetic Techniques</strong>: At
                            times, you
                            may rely more on one method over the other. Work on balancing your use of auditory and
                            kinaesthetic
                            techniques to ensure you are integrating both effectively.</li>
                        <li><strong class="text-gray-800">Improving Focus in Static Environments</strong>: Environments
                            that
                            lack physical activity or auditory stimulation may be challenging. Develop strategies to
                            stay
                            focused in these settings, such as incorporating brief physical activities or using auditory
                            aids.
                        </li>
                        <li><strong class="text-gray-800">Combining Learning Styles More Consistently</strong>: Ensure
                            you are
                            consistently using both auditory and kinaesthetic methods when studying. For example,
                            integrate
                            verbal explanations with hands-on practice to enhance your overall learning experience.</li>
                    </ul>
                </div>
            </div>


            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-50 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/StrengthsGrowthAreas/4.svg'"
                        alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <h4 class="text-md font-bold text-gray-800 mb-4">Tips for Personal Development</h4>
                    <ul class="space-y-4">
                        <li><strong class="text-gray-800">Combine Auditory and Kinaesthetic Activities</strong>: When
                            studying,
                            use both auditory and kinaesthetic methods. For example, listen to a lecture or podcast
                            while
                            engaging in related hands-on activities, such as drawing diagrams or building models.</li>
                        <li><strong class="text-gray-800">Create Verbal and Physical Study Aids</strong>: Develop study
                            aids
                            that incorporate both auditory and kinaesthetic elements. For instance, create flashcards
                            with key
                            points that you can read aloud while using physical objects or gestures to represent
                            concepts.</li>
                        <li><strong class="text-gray-800">Record and Replay Explanations</strong>: Record yourself
                            explaining
                            key concepts or summarising lessons. Listen to these recordings while engaging in physical
                            activities, like reviewing notes or practising skills, to reinforce learning through both
                            methods.
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
            <div class="row">
                <div class="col-6">
                    <h4 class="text-md font-bold text-gray-800">Strengths of a Blended Kinaesthetic and
                        Reading/Writing
                        Learner</h4>
                    <p class="">As a blended learner, you have unique strengths that combine both
                        kinaesthetic and
                        reading/writing learning approaches. Here are four key strengths:</p>

                    <ul class="space-y-4 ">
                        <li><strong class="text-gray-800">Active Learning Through Movement and Writing:</strong> You
                            excel when
                            you can engage in physical activities to learn new concepts and then reinforce that learning
                            by
                            writing summaries or notes. Combining movement with written tasks helps solidify your
                            understanding.
                        </li>
                        <li><strong class="text-gray-800">Strong Memory for Hands-On and Written Tasks:</strong> You
                            remember
                            information well when you can physically engage with it through hands-on activities and
                            follow up by
                            writing about the experience. This combination helps you retain details better and apply
                            concepts in
                            real-world situations.</li>
                        <li><strong class="text-gray-800">Ability to Learn from Multiple Sources:</strong> You have the
                            flexibility to learn through various formats, such as physical activities, reading
                            textbooks, and
                            taking notes. This versatility helps you adapt to different learning environments and
                            ensures deeper
                            understanding.</li>
                        <li><strong class="text-gray-800">Organised and Active Learning Approach:</strong> Your
                            reading/writing
                            preference allows you to organise and structure information clearly, while your kinaesthetic
                            style
                            helps you actively engage with the material. This balance of physical and mental engagement
                            reinforces your learning.</li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/StrengthsGrowthAreas/2.svg'"
                            alt="" />
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-50 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/StrengthsGrowthAreas/3.svg'"
                        alt="" />
                    </div>
                </div>
                <div class="col-6">

                    <h4 class="text-md font-bold text-gray-800">Areas for Growth</h4>
                    <p class="">While you have many strengths, there are also some areas where you can work
                        on
                        improving:</p>
                    <ul class="space-y-4 ">
                        <li><strong class="text-gray-800">Balancing Physical and Written Techniques:</strong> Sometimes
                            you may
                            rely too much on physical activities or writing. Work on balancing both techniques to ensure
                            you’re
                            fully engaging both kinaesthetic and reading/writing methods for optimal learning.</li>
                        <li><strong class="text-gray-800">Improving Focus During Reading-Heavy Tasks:</strong> Extended
                            reading
                            or writing sessions without physical engagement may be challenging for you. To stay focused,
                            take
                            short movement breaks or find ways to incorporate kinaesthetic learning into your
                            reading/writing
                            tasks.</li>
                        <li><strong class="text-gray-800">Using Written Reflections After Hands-On Experiences:</strong>
                            Kinaesthetic learners can sometimes struggle to convert hands-on experiences into written
                            formats.
                            Practice reflecting on physical tasks by writing summaries or reports to improve your
                            ability to
                            articulate what you’ve learned.</li>
                    </ul>
                </div>
            </div>


            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-50 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/StrengthsGrowthAreas/4.svg'"
                        alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <h4 class="text-md font-bold text-gray-800 mb-4">Tips for Personal Development</h4>

                    <ul class="space-y-4 ">
                        <li><strong class="text-gray-800">Integrate Writing and Movement:</strong> When studying,
                            combine
                            physical movement with writing. For example, after a hands-on experiment, immediately write
                            a
                            summary or take notes about what you’ve learned to reinforce the material.</li>
                        <li><strong class="text-gray-800">Summarise Physical Learning in Writing:</strong> After
                            engaging in a
                            kinaesthetic activity, such as a science experiment or building a model, write a detailed
                            summary.
                            This reinforces your understanding and allows you to reflect on the physical task.</li>
                        <li><strong class="text-gray-800">Create Flashcards with Hands-On Elements:</strong> Use
                            flashcards to
                            review key concepts but add a kinaesthetic element by moving around while studying. Engage
                            with the
                            material physically by sorting or shuffling the cards as you review.</li>
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
                <div class="col-6">
                    <h4 class="text-md font-bold text-gray-800">Strengths of a Blended Kinaesthetic and Visual
                        Learner</h4>
                    <p class="">As a blended learner, you have unique strengths that combine both
                        kinaesthetic and
                        visual learning approaches. Here are four key strengths:</p>
                    <ul class="space-y-2 ">
                        <li><strong class="text-gray-800">Strong Understanding Through Visual Aids:</strong> You grasp
                            concepts
                            quickly when they are presented visually. Charts, diagrams, and illustrations help you break
                            down
                            complex ideas and understand them more clearly.</li>
                        <li><strong class="text-gray-800">Effective Learning Through Hands-On Activities:</strong> You
                            learn
                            best by doing. Engaging in physical tasks, building models, conducting experiments, or using
                            other
                            hands-on tools helps you absorb and retain information more effectively.</li>
                        <li><strong class="text-gray-800">Ability to Visualise and Apply Concepts:</strong> You excel at
                            both
                            visualising abstract ideas and applying them in a practical, hands-on way. This makes you
                            particularly strong at problem-solving tasks where you can see the concept and then apply it
                            through
                            action.</li>
                        <li><strong class="text-gray-800">Versatile Learning Style:</strong> You are able to switch
                            between
                            visual and kinaesthetic methods depending on the task. Whether you’re looking at a diagram
                            or
                            actively participating in a hands-on project, your versatility allows you to excel in
                            different
                            learning environments.</li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/StrengthsGrowthAreas/2.svg'"
                            alt="" />
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-50 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/StrengthsGrowthAreas/3.svg'"
                        alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <h4 class="text-md font-bold text-gray-800">Areas for Growth</h4>
                    <p class="">While you have many strengths, there are also some areas where you can work
                        on
                        improving:</p>
                    <ul class="space-y-2 ">
                        <li><strong class="text-gray-800">Balancing Both Styles:</strong> At times, you may rely more on
                            one
                            style over the other. Work on balancing your visual and kinaesthetic approaches to ensure
                            you're
                            using both effectively, depending on the task at hand.</li>
                        <li><strong class="text-gray-800">Improving Focus in Static Environments:</strong> In
                            environments where
                            you can't move around or interact physically, it can be difficult to stay focused. Develop
                            strategies to engage visually when movement isn’t possible, such as drawing diagrams or
                            creating
                            visual summaries.</li>
                        <li><strong class="text-gray-800">Using Visuals to Reinforce Physical Tasks:</strong> While
                            hands-on
                            learning is your strength, try to incorporate visual aids alongside physical tasks to ensure
                            you're
                            seeing and doing at the same time for maximum understanding.</li>
                    </ul>
                </div>
            </div>


            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-50 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/StrengthsGrowthAreas/4.svg'"
                        alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <h4 class="text-md font-bold text-gray-800 mb-4">Tips for Personal Development</h4>
                    <ul class="space-y-2 ">
                        <li><strong class="text-gray-800">Combine Kinaesthetic and Visual Techniques:</strong> For tasks
                            that
                            allow for hands-on engagement, supplement them with diagrams or charts to see the connection
                            between
                            concepts and actions.</li>
                        <li><strong class="text-gray-800">Use Movement While Visualising Concepts:</strong> For example,
                            while
                            studying a diagram or chart, try walking around or using gestures to mimic the process. This
                            will
                            help reinforce your learning.</li>
                        <li><strong class="text-gray-800">Create Visual Summaries of Physical Tasks:</strong> After
                            engaging in
                            a hands-on activity, create a visual representation of what you’ve learned. This allows you
                            to
                            connect your physical experience with visual learning.</li>
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
                <div class="col-6">
                    <h1 class="text-2xl font-bold text-gray-800">Strengths of a Kinaesthetic Learner</h1>
                    <p class="">
                        As a kinaesthetic learner, you have unique strengths that allow you to thrive in hands-on,
                        interactive
                        learning environments:
                    </p>
                    <ul class=" list-inside space-y-2 ">
                        <li>
                            <strong class="text-gray-800">Hands-On Problem Solving:</strong>
                            You excel when you can learn by doing. Whether it’s through experiments, building projects,
                            or
                            physically manipulating materials, you grasp concepts best by actively engaging with the
                            material.
                        </li>
                        <li>
                            <strong class="text-gray-800">Great Memory for Physical Tasks:</strong>
                            You remember information well when it’s tied to physical actions or experiences. Tasks like
                            role-playing, building models, or using real-world examples help solidify your
                            understanding.
                        </li>
                        <li>
                            <strong class="text-gray-800">Strong Coordination and Practical Skills:</strong>
                            Kinaesthetic learners tend to have excellent physical coordination and fine motor skills.
                            You might
                            excel in sports, arts and crafts, or any activity that requires precision and hands-on
                            interaction.
                        </li>
                        <li>
                            <strong class="text-gray-800">High Engagement in Active Learning Environments:</strong>
                            You are fully engaged when learning in environments where movement and physical activities
                            are
                            involved. Classes that involve labs, projects, or physical involvement help you stay focused
                            and
                            motivated.
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/StrengthsGrowthAreas/2.svg'"
                            alt="" />
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-50 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/StrengthsGrowthAreas/3.svg'"
                        alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <h4 class="text-md font-bold text-gray-800">Areas for Growth</h4>
                    <p class="">
                        While you have many strengths, here are some areas where you can work on improving:
                    </p>
                    <ul class=" list-inside space-y-2 ">
                        <li>
                            <strong class="text-gray-800">Balancing Movement with Focus:</strong>
                            Since you learn best through movement, sitting still for long periods can be challenging.
                            Developing
                            techniques to focus during more stationary activities, such as lectures, will help improve
                            your
                            overall learning experience.
                        </li>
                        <li>
                            <strong class="text-gray-800">Incorporating Other Learning Styles:</strong>
                            While kinaesthetic learning is your strength, combining it with visual or auditory methods,
                            like
                            diagrams or verbal explanations, can help you understand complex subjects more deeply and
                            thoroughly.
                        </li>
                        <li>
                            <strong class="text-gray-800">Organising Your Thoughts:</strong>
                            Kinaesthetic learners sometimes struggle to organise thoughts in written form. Improving
                            your
                            ability to translate your hands-on knowledge into written or verbal formats can strengthen
                            your
                            overall academic performance.
                        </li>
                    </ul>
                </div>
            </div>


            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-50 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/StrengthsGrowthAreas/4.svg'"
                        alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <h4 class="text-md font-bold text-gray-800 mb-4">Tips for Personal Development</h4>
                    <ul class=" list-inside space-y-2 ">
                        <li>
                            <strong class="text-gray-800">Incorporate Movement into Study Sessions:</strong>
                            Take breaks to stretch or move around during study sessions, which will help you stay
                            focused.
                        </li>
                        <li>
                            <strong class="text-gray-800">Use Hands-On Study Tools:</strong>
                            Utilise tools like models, flashcards, or drawing out concepts to actively engage with
                            material.
                        </li>
                        <li>
                            <strong class="text-gray-800">Improve Note-Taking Skills:</strong>
                            Practice taking notes during lectures or record your thoughts immediately after hands-on
                            activities
                            to capture your learning in a more organised format.
                        </li>
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
                <div class="col-6">
                    <h1 class="text-2xl font-bold">Strengths of a Blended Reading/Writing and Auditory Learner</h1>
                    <p>As a blended learner, you have unique strengths that draw from both auditory and reading/writing
                        learning
                        styles. Here are four key strengths:</p>
                    <ul class=" pl-5 space-y-1">
                        <li><strong>Strong Comprehension Through Listening and Writing:</strong> You absorb information
                            well
                            when you listen to explanations or discussions and then reinforce that knowledge through
                            writing.
                            Combining auditory input with writing helps you better understand and organise the material.
                        </li>
                        <li><strong>Effective Notetaking and Listening Skills:</strong> You have a natural ability to
                            take
                            effective notes while listening to lectures or discussions. This skill allows you to process
                            information in real-time, ensuring that you capture key points and retain them for future
                            reference.
                        </li>
                        <li><strong>Ability to Learn from Multiple Sources:</strong> You excel when you can learn
                            through
                            various formats, such as audio materials, textbooks, and written summaries. This flexibility
                            helps
                            you adapt to different learning environments and styles, ensuring a deeper understanding of
                            the
                            material.</li>
                        <li><strong>Structured Approach to Learning:</strong> Your reading/writing preference gives you
                            the
                            ability to organise and structure information clearly. You are skilled at synthesising
                            auditory
                            input into written summaries, outlines, or essays, which helps reinforce and solidify your
                            understanding.</li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/StrengthsGrowthAreas/2.svg'"
                            alt="" />
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-50 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/StrengthsGrowthAreas/3.svg'"
                        alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <h4 class="text-md font-bold">Areas for Growth</h4>
                    <p>While you have many strengths, there are also some areas where you can work on improving:</p>
                    <div>
                        <ul class=" pl-5 space-y-1">
                            <li><strong>Balancing Listening and Writing Techniques:</strong> At times, you may focus
                                more on one
                                method over the other. Work on balancing your use of auditory and writing techniques to
                                ensure
                                you’re fully engaging both learning styles.</li>
                            <li><strong>Improving Retention Through Active Participation:</strong> While listening and
                                writing
                                are effective methods for you, participating actively in discussions or teaching
                                concepts to
                                others can further reinforce your learning. Engage more actively in verbal discussions
                                to deepen
                                your understanding.</li>
                            <li><strong>Enhancing Focus During Long Reading Sessions:</strong> You may sometimes
                                struggle to
                                maintain focus during extended reading sessions. To address this, take breaks to review
                                what
                                you’ve learned by listening to audio resources or summarising the material in writing.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-50 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/StrengthsGrowthAreas/4.svg'"
                        alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <h4 class="text-md font-bold mb-4">Tips for Personal Development</h4>
                    <div>
                        <ul class=" pl-5 space-y-1">
                            <li><strong>Combine Auditory and Written Techniques:</strong> When studying, use both
                                auditory and
                                written methods. Listen to audio recordings of lectures or read textbooks, then write
                                summaries
                                or notes to reinforce your understanding of the material.</li>
                            <li><strong>Explain Concepts Aloud After Writing:</strong> After writing notes or summaries,
                                explain
                                the concepts out loud to yourself or others. This helps reinforce the material by
                                engaging both
                                your auditory and reading/writing strengths.</li>
                            <li><strong>Record Verbal Summaries of Written Material:</strong> Record yourself reading
                                key points
                                or summarising written content aloud and listen to the recordings during review
                                sessions. This
                                practice helps strengthen both your auditory and reading/writing skills.</li>
                        </ul>
                    </div>
                </div>
            </div>







        </div>

    </div>

    <!-- Report 10 Reading & Writing _ Kinesthethic Blend-->
    <div v-if="style == 'Reading/Writing/Kinesthethic'">
        <!-- Content for Report 10 -->
        <div class="p-6  ">
            <div class="row">
                <div class="col-6">
                    <h4 class="text-md font-bold mb-4">Strengths of a Blended Reading/Writing and Kinaesthetic
                        Learner</h4>
                    <p class="mb-4">As a blended learner, you have unique strengths that combine both reading/writing
                        and
                        kinaesthetic learning approaches. Here are four key strengths:</p>

                    <ul class=" pl-5 mb-6">
                        <li><strong>Active Learning Through Movement and Writing:</strong> You excel when you can engage
                            in
                            physical activities to learn new concepts and then reinforce that learning by writing
                            summaries or
                            notes. Combining movement with written tasks helps solidify your understanding.</li>
                        <li><strong>Strong Memory for Hands-On and Written Tasks:</strong> You remember information well
                            when
                            you can physically engage with it through hands-on activities and follow up by writing about
                            the
                            experience. This combination helps you retain details better and apply concepts in
                            real-world
                            situations.</li>
                        <li><strong>Ability to Learn from Multiple Sources:</strong> You have the flexibility to learn
                            through
                            various formats, such as physical activities, reading textbooks, and taking notes. This
                            versatility
                            helps you adapt to different learning environments and ensures deeper understanding.</li>
                        <li><strong>Organised and Active Learning Approach:</strong> Your reading/writing preference
                            allows you
                            to organise and structure information clearly, while your kinaesthetic style helps you
                            actively
                            engage with the material. This balance of physical and mental engagement reinforces your
                            learning.
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/StrengthsGrowthAreas/2.svg'"
                            alt="" />
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-50 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/StrengthsGrowthAreas/3.svg'"
                        alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <h4 class="text-md font-bold mt-6 mb-2">Areas for Growth</h4>
                    <p class="mb-4">While you have many strengths, there are also some areas where you can work on
                        improving:
                    </p>
                    <ul class=" pl-5 mb-6">
                        <li><strong>Balancing Physical and Written Techniques:</strong> Sometimes you may rely too much
                            on
                            physical activities or writing. Work on balancing both techniques to ensure you’re fully
                            engaging
                            both kinaesthetic and reading/writing methods for optimal learning.</li>
                        <li><strong>Improving Focus During Reading-Heavy Tasks:</strong> Extended reading or writing
                            sessions
                            without physical engagement may be challenging for you. To stay focused, take short movement
                            breaks
                            or find ways to incorporate kinaesthetic learning into your reading/writing tasks.</li>
                        <li><strong>Using Written Reflections After Hands-On Experiences:</strong> Kinaesthetic learners
                            can
                            sometimes struggle to convert hands-on experiences into written formats. Practice reflecting
                            on
                            physical tasks by writing summaries or reports to improve your ability to articulate what
                            you’ve
                            learned.</li>
                    </ul>
                </div>
            </div>


            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-50 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/StrengthsGrowthAreas/4.svg'"
                        alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <h4 class="text-md font-bold mt-6 mb-4">Tips for Personal Development</h4>

                    <ul class=" pl-5 mb-6">
                        <li><strong>Integrate Writing and Movement:</strong> When studying, combine physical movement
                            with
                            writing. For example, after a hands-on experiment, immediately write a summary or take notes
                            about
                            what you’ve learned to reinforce the material.</li>
                        <li><strong>Summarise Physical Learning in Writing:</strong> After engaging in a kinaesthetic
                            activity,
                            such as a science experiment or building a model, write a detailed summary. This reinforces
                            your
                            understanding and allows you to reflect on the physical task.</li>
                        <li><strong>Create Flashcards with Hands-On Elements:</strong> Use flashcards to review key
                            concepts but
                            add a kinaesthetic element by moving around while studying. Engage with the material
                            physically by
                            sorting or shuffling the cards as you review.</li>
                    </ul>
                </div>
            </div>





        </div>

    </div>

    <!-- Report 11 Reading & Writing _ Visual Blend -->
    <div v-if="style == 'Reading/Writing/Visual'">
        <!-- Content for Report 11 -->
        <div class="p-6  ">
            <div class="row">
                <div class="col-6">
                    <h4 class="text-md font-bold mb-4">Strengths of a Blended Reading/Writing and Visual Learner
                    </h4>

                    <p class="mb-6">As a blended learner, you have unique strengths that combine both reading/writing
                        and visual
                        learning approaches. Here are four key strengths:</p>

                    <ul class=" pl-5 mb-6">
                        <li><strong>Strong Comprehension Through Visual and Text-Based Information:</strong> You absorb
                            concepts
                            quickly when they are presented visually and through written text. Diagrams, charts, and
                            reading
                            assignments help you break down complex ideas and understand them more clearly.</li>
                        <li><strong>Effective Learning Through Note-Taking and Visual Summaries:</strong> You learn best
                            by
                            reading, writing, and using visual aids like charts and diagrams. Writing detailed notes and
                            creating visual summaries helps reinforce your understanding of the material.</li>
                        <li><strong>Ability to Organise and Visualise Concepts:</strong> You excel at organising
                            information in
                            a clear, structured way through written notes and visual aids. This dual approach helps you
                            see the
                            big picture and organise complex details, making it easier to recall information later.</li>
                        <li><strong>Versatile Learning Style:</strong> Your ability to switch between reading/writing
                            and visual
                            learning methods allows you to excel in various academic environments. Whether you’re
                            reading a
                            textbook or creating a mind map, your versatility helps you engage deeply with the material.
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/StrengthsGrowthAreas/2.svg'"
                            alt="" />
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-50 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/StrengthsGrowthAreas/3.svg'"
                        alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <h4 class="text-md font-bold mb-4">Areas for Growth</h4>
                    <p class="mb-6">While you have many strengths, there are also some areas where you can work on
                        improving:
                    </p>

                    <ul class=" pl-5 mb-6">
                        <li><strong>Balancing Both Styles:</strong> At times, you may rely more on one style over the
                            other. Try
                            to strike a balance between visual aids and text-based learning to ensure you're fully using
                            both
                            styles depending on the task at hand.</li>
                        <li><strong>Enhancing Visual Learning with Written Summaries:</strong> After working with visual
                            aids,
                            create written summaries to reinforce your understanding. Combining both styles will help
                            you retain
                            information more effectively.</li>
                        <li><strong>Engaging in More Active Learning:</strong> While you excel in reading and writing,
                            incorporating discussions or hands-on activities can help you engage with the material in
                            new ways.
                            This can deepen your understanding of difficult topics.</li>
                    </ul>
                </div>
            </div>


            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-50 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/StrengthsGrowthAreas/4.svg'"
                        alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <h4 class="text-md font-bold mb-4">Tips for Personal Development</h4>
                    <ul class=" pl-5 mb-6">
                        <li><strong>Combine Visuals with Writing:</strong> For every visual aid you encounter, write a
                            summary
                            or explanation to reinforce what you’ve learned. This will help solidify your understanding
                            by
                            engaging both your visual and reading/writing strengths.</li>
                        <li><strong>Create Visual Organisers for Written Content:</strong> Use mind maps, charts, or
                            diagrams to
                            organise complex written material. This technique allows you to connect the visual with the
                            written
                            word for better comprehension.</li>
                        <li><strong>Practice Writing with Visual Support:</strong> After reading or viewing visual aids,
                            practice writing essays or summaries that include references to the visuals. This approach
                            helps
                            connect the written and visual content, making it easier to recall late.</li>
                    </ul>
                </div>
            </div>






        </div>

    </div>

    <!-- Report 12 Reading & Writing-->
    <div v-if="style == 'Reading/Writing'">
        <!-- Content for Report 12 -->
        <div class="p-6  ">
            <div class="row">
                <div class="col-6">
                    <h4 class="text-md font-bold mb-4">Strengths of a Reading/Writing Learner</h4>

                    <p class="mb-6">As a reading/writing learner, you have unique strengths that allow you to excel in
                        environments that emphasise text-based learning:</p>

                    <ul class=" pl-5 mb-6">
                        <li><strong>Excellent at Processing Written Information:</strong> You learn best when you can
                            read and
                            write about the material. Written information, such as textbooks, articles, and notes, helps
                            you
                            absorb and retain complex concepts easily.</li>
                        <li><strong>Strong Organisational Skills:</strong> You are skilled at organising your thoughts
                            through
                            writing. You likely find it helpful to take notes, create lists, or outline key concepts
                            when
                            studying, which allows you to structure information effectively.</li>
                        <li><strong>Great at Learning Through Reading:</strong> You excel when it comes to reading and
                            understanding text-heavy materials. Whether it's reading textbooks, reports, or articles,
                            you have a
                            natural ability to comprehend and recall written content.</li>
                        <li><strong>Effective at Writing and Summarising:</strong> You find it easy to write summaries,
                            essays,
                            and reports that help clarify your understanding of subjects. Writing helps you reinforce
                            what
                            you've learned, and you likely enjoy expressing your knowledge through written formats.</li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/StrengthsGrowthAreas/2.svg'"
                            alt="" />
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-50 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/StrengthsGrowthAreas/3.svg'"
                        alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <h4 class="text-md font-bold mb-4">Areas for Growth</h4>
                    <p class="mb-6">While you have many strengths, here are some areas where you can work on improving:
                    </p>

                    <ul class=" pl-5 mb-6">
                        <li><strong>Incorporating Other Learning Styles:</strong> While reading and writing are your
                            strengths,
                            it can be helpful to incorporate visual aids, verbal discussions, or hands-on activities to
                            further
                            enhance your understanding of difficult topics.</li>
                        <li><strong>Improving Note-Taking Efficiency:</strong> Although you're good at taking notes, try
                            to
                            refine your note-taking process by focusing on key points instead of writing down
                            everything. This
                            will help you stay efficient and avoid feeling overwhelmed with too much information.</li>
                        <li><strong>Balancing Text-Based Learning with Active Engagement:</strong> Reading and writing
                            can
                            sometimes be solitary activities. To keep yourself engaged, try discussing what you've
                            learned with
                            others or finding ways to connect the written material with real-life applications.</li>
                    </ul>
                </div>
            </div>


            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-50 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/StrengthsGrowthAreas/4.svg'"
                        alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <h4 class="text-md font-bold mb-4">Tips for Personal Development</h4>

                    <ul class=" pl-5 mb-6">
                        <li><strong>Summarise and Reorganise Notes: </strong> After reading, write summaries in your own words to ensure
                            you've
                            understood the material. Reorganise your notes to structure the information clearly.</li>
                        <li><strong>Incorporate Visual Tools: </strong> Complement your reading and writing with visual aids like charts
                            or mind
                            maps to reinforce understanding.</li>
                        <li><strong>Engage in Group Discussions: </strong> While you may prefer written learning, try engaging in group
                            discussions or verbalising your notes to strengthen your understanding.</li>
                    </ul>
                </div>
            </div>





        </div>

    </div>

    <!-- Report 13 Visual _ Auditory Blend-->
    <div v-if="style == 'Visual/Auditory'">
        <!-- Content for Report 13 -->
        <div class="p-6  ">

            <div class="row">
                <div class="col-6">
                    <h4 class="text-md font-bold mb-4">Strengths of a Blended Visual and Auditory Learner</h4>

                    <p class="mb-6">As a blended learner, you have unique strengths that draw from both visual and
                        auditory
                        learning styles. Here are four key strengths:</p>

                    <ul class=" pl-5 mb-6">
                        <li><strong>Excellent at Understanding Concepts through Visual Aids:</strong> You excel when
                            information
                            is presented visually, such as through diagrams, charts, or videos. Visual materials help
                            you
                            quickly grasp and retain complex ideas.</li>
                        <li><strong>Strong Recall of Spoken Information:</strong> You can remember information well when
                            you
                            hear it, whether through lectures, podcasts, or discussions. Hearing explanations helps
                            reinforce
                            your understanding of the material.</li>
                        <li><strong>Versatility in Learning Approaches:</strong> You can switch between visual and
                            auditory
                            methods depending on the situation. For example, you might listen to a lecture while taking
                            notes or
                            review a diagram while listening to an explanations, using both methods to reinforce your
                            understanding.</li>
                        <li><strong>Effective in Group Discussions and Presentations:</strong> Engaging in group
                            discussions or
                            delivering presentations helps you learn by combining verbal explanations with visual aids.
                            This
                            method allows you to absorb information more effectively.</li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/StrengthsGrowthAreas/2.svg'"
                            alt="" />
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-50 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/StrengthsGrowthAreas/3.svg'"
                        alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <h4 class="text-md font-bold mb-4">Areas for Growth</h4>
                    <p class="mb-6">While you have many strengths, there are also some areas where you can work on
                        improving:
                    </p>

                    <ul class=" pl-5 mb-6">
                        <li><strong>Balancing Visual and Auditory Methods:</strong> At times, you may rely too heavily
                            on one
                            style. Practice balancing your visual and auditory methods to ensure you’re using both
                            effectively
                            in different situations.</li>
                        <li><strong>Improving Focus in Noisy or Overly Visual Environments:</strong> In environments
                            with too
                            much noise or visual clutter, it can be challenging to focus. Develop strategies to block
                            out
                            distractions, such as using noise-cancelling headphones or simplifying your visual aids.
                        </li>
                        <li><strong>Combining Both Styles More Consistently:</strong> Work on consistently integrating
                            both
                            visual and auditory techniques when studying or learning new information. For example, try
                            creating
                            diagrams while listening to a recorded lecture to make the most of both styles.</li>
                    </ul>
                </div>
            </div>


            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-50 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/StrengthsGrowthAreas/4.svg'"
                        alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <h4 class="text-md font-bold mb-4">Tips for Personal Development</h4>

                    <ul class=" pl-5">
                        <li><strong>Use Visuals and Audio Together:</strong> When studying, combine visual aids like
                            diagrams or
                            charts with audio resources like podcasts or recorded lectures. This dual approach
                            reinforces
                            learning.</li>
                        <li><strong>Practice Explaining Concepts Aloud:</strong> After reviewing a diagram or visual
                            aid,
                            explain it aloud to yourself or someone else. This will help you integrate both learning
                            styles and
                            solidify your understanding.</li>
                        <li><strong>Refine Your Focus Techniques:</strong> Use tools like headphones, soft background
                            music, or
                            clean visual aids to help you focus in noisy or cluttered environments.</li>
                    </ul>
                </div>
            </div>





        </div>

    </div>

    <!-- Report 14 Visual _ Kinesthethic Blend-->
    <div v-if="style == 'Visual/Kinesthethic'">
        <!-- Content for Report 14 -->

        <div class="p-6  ">
            <div class="row">
                <div class="col-6">
                    <h4 class="text-md font-bold mb-4">Strengths of a Blended Visual and Kinaesthetic Learner</h4>

                    <p class="mb-6">As a blended learner, you have unique strengths that combine both visual and
                        kinaesthetic
                        learning approaches. Here are four key strengths:</p>

                    <ul class=" pl-5 mb-6">
                        <li><strong>Strong Understanding Through Visual Aids:</strong> You grasp concepts quickly when
                            they are
                            presented visually. Charts, diagrams, and illustrations help you break down complex ideas
                            and
                            understand them more clearly.</li>
                        <li><strong>Effective Learning Through Hands-On Activities:</strong> You learn best by doing.
                            Engaging
                            in physical tasks, building models, conducting experiments, or using other hands-on tools
                            helps you
                            absorb and retain information more effectively.</li>
                        <li><strong>Ability to Visualise and Apply Concepts:</strong> You excel at both visualising
                            abstract
                            ideas and applying them in a practical, hands-on way. This makes you particularly strong at
                            problem-solving tasks where you can see the concept and then apply it through action.</li>
                        <li><strong>Versatile Learning Style:</strong> You are able to switch between visual and
                            kinaesthetic
                            methods depending on the task. Whether you’re looking at a diagram or actively participating
                            in a
                            hands-on project, your versatility allows you to excel in different learning environments.
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/StrengthsGrowthAreas/2.svg'"
                            alt="" />
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-50 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/StrengthsGrowthAreas/3.svg'"
                        alt="" />
                    </div>
                </div>
                <div class="col-6">

                    <h4 class="text-md font-bold mb-3">Areas for Growth</h4>
                    <p class="mb-6">While you have many strengths, there are also some areas where you can work on
                        improving:
                    </p>
                    <ul class=" pl-5 mb-6">
                        <li><strong>Balancing Both Styles:</strong> At times, you may rely more on one style over the
                            other.
                            Work on balancing your visual and kinaesthetic approaches to ensure you're using both
                            effectively,
                            depending on the task at hand.</li>
                        <li><strong>Improving Focus in Static Environments:</strong> In environments where you can't
                            move around
                            or interact physically, it can be difficult to stay focused. Develop strategies to engage
                            visually
                            when movement isn’t possible, such as drawing diagrams or creating visual summaries.</li>
                        <li><strong>Using Visuals to Reinforce Physical Tasks:</strong> While hands-on learning is your
                            strength, try to incorporate visual aids alongside physical tasks to ensure you're seeing
                            and doing
                            at the same time for maximum understanding.</li>
                    </ul>
                </div>
            </div>


            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-50 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/StrengthsGrowthAreas/4.svg'"
                        alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <h4 class="text-md font-bold mb-4">Tips for Personal Development</h4>
                    <ul class=" pl-5 mb-6">
                        <li><strong>Combine Visual and Kinaesthetic Techniques:</strong> For tasks that allow for
                            hands-on
                            engagement, supplement them with diagrams or charts to see the connection between concepts
                            and
                            actions.</li>
                        <li><strong>Use Movement While Visualising Concepts:</strong> For example, while studying a
                            diagram or
                            chart, try walking around or using gestures to mimic the process. This will help reinforce
                            your
                            learning.</li>
                        <li><strong>Create Visual Summaries of Physical Tasks:</strong> After engaging in a hands-on
                            activity,
                            create a visual representation of what you’ve learned. This allows you to connect your
                            physical
                            experience with visual learning.</li>
                    </ul>
                </div>
            </div>






        </div>

    </div>

    <!-- Report 15 Visual _ Reading & Writing-->
    <div v-if="style == 'Visual/Reading/Writing'">
        <!-- Content for Report 15 -->
        <div class="p-6  ">
            <div class="row">
                <div class="col-6">
                    <h4 class="text-md font-bold mb-4">Strengths of a Blended Visual and Reading/Writing Learner
                    </h4>

                    <p class="mb-6">As a blended learner, you have unique strengths that combine both visual and
                        reading/writing
                        learning approaches. Here are four key strengths:</p>

                    <ul class=" pl-6 mb-6">
                        <li><strong>Strong Comprehension Through Visual and Text-Based Information:</strong> You absorb
                            concepts
                            quickly when they are presented visually and through written text. Diagrams, charts, and
                            reading
                            assignments help you break down complex ideas and understand them more clearly.</li>
                        <li><strong>Effective Learning Through Note-Taking and Visual Summaries:</strong> You learn best
                            by
                            reading, writing, and using visual aids like charts and diagrams. Writing detailed notes and
                            creating visual summaries helps reinforce your understanding of the material.</li>
                        <li><strong>Ability to Organise and Visualise Concepts:</strong> You excel at organising
                            information in
                            a clear, structured way through written notes and visual aids. This dual approach helps you
                            see the
                            big picture and organise complex details, making it easier to recall information later.</li>
                        <li><strong>Versatile Learning Style:</strong> Your ability to switch between reading/writing
                            and visual
                            learning methods allows you to excel in various academic environments. Whether you’re
                            reading a
                            textbook or creating a mind map, your versatility helps you engage deeply with the material.
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/StrengthsGrowthAreas/2.svg'"
                            alt="" />
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-50 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/StrengthsGrowthAreas/3.svg'"
                        alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <h4 class="text-md font-bold mb-4">Areas for Growth</h4>
                    <p class="mb-6">While you have many strengths, there are also some areas where you can work on
                        improving:
                    </p>

                    <ul class=" pl-6 mb-6">
                        <li><strong>Balancing Both Styles:</strong> At times, you may rely more on one style over the
                            other. Try
                            to strike a balance between visual aids and text-based learning to ensure you're fully using
                            both
                            styles depending on the task at hand.</li>
                        <li><strong>Enhancing Visual Learning with Written Summaries:</strong> After working with visual
                            aids,
                            create written summaries to reinforce your understanding. Combining both styles will help
                            you retain
                            information more effectively.</li>
                        <li><strong>Engaging in More Active Learning:</strong> While you excel in reading and writing,
                            incorporating discussions or hands-on activities can help you engage with the material in
                            new ways.
                            This can deepen your understanding of difficult topics.</li>
                    </ul>
                </div>
            </div>


            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-50 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/StrengthsGrowthAreas/4.svg'"
                        alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <h4 class="text-md font-bold mb-4">Tips for Personal Development</h4>

                    <ul class=" pl-6">
                        <li><strong>Combine Visuals with Writing:</strong> For every visual aid you encounter, write a
                            summary
                            or explanation to reinforce what you’ve learned. This will help solidify your understanding
                            by
                            engaging both your visual and reading/writing strengths.</li>
                        <li><strong>Create Visual Organisers for Written Content:</strong> Use mind maps, charts, or
                            diagrams to
                            organise complex written material. This technique allows you to connect the visual with the
                            written
                            word for better comprehension.</li>
                        <li><strong>Practice Writing with Visual Support:</strong> After reading or viewing visual aids,
                            practice writing essays or summaries that include references to the visuals. This approach
                            helps
                            connect the written and visual content, making it easier to recall late.</li>
                    </ul>
                </div>
            </div>






        </div>

    </div>

    <!-- Report 16 Visual-->
    <div v-if="style == 'Visual'">
        <!-- Content for Report 16 -->
        <div class="p-6  ">
            <div class="row">

                <div class="col-6">
                    <h4 class="text-md font-bold mb-4">Strengths of a Visual Learner</h4>
                    <ul class=" pl-6 mb-6">
                        <li>
                            <p>
                                As a Visual learner, you have some awesome strengths that make studying and understanding new things easier for you:
                            </p>
                        </li>
                        <li><strong>Great Memory with Visuals:</strong> You remember things best when you see them.
                            Whether it's
                            through diagrams, charts, or pictures, visual aids help you keep track of details and
                            understand
                            concepts better. This makes it easier for you to recall information when you need it.</li>
                        <li><strong>Organised and Structured:</strong> You’ve got a knack for keeping things neat and
                            organised.
                            Using colour-coded notes, mind maps, and other visual tools helps you keep track of your
                            thoughts and
                            manage your tasks efficiently. This organisation can help you stay on top of your
                            schoolwork.</li>
                        <li><strong>Creative Problem-Solving:</strong> You’re good at coming up with creative solutions
                            because
                            you can picture problems and solutions in your mind. Visualising different scenarios helps
                            you find
                            new and innovative ways to tackle challenges.</li>
                        <li><strong>Clear Communication Through Visuals:</strong> You excel at sharing ideas through
                            visuals.
                            Whether it’s drawing, making presentations, or using charts, you can explain complex ideas
                            clearly
                            and make them easier for others to understand.</li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/StrengthsGrowthAreas/2.svg'"
                            alt="" />
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-50 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/StrengthsGrowthAreas/3.svg'"
                        alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <h4 class="text-md font-bold mb-4">Areas for Growth</h4>
                    <ul class=" pl-6 mb-6">
                        <li>
                            <p>While you have many strengths, there are also some areas where you can work on improving:
                            </p>
                        </li>
                        <li><strong>Explore Different Learning Styles:</strong> It’s helpful to mix things up and use
                            different
                            learning styles alongside visual ones. Adding some auditory (listening) or kinaesthetic
                            (hands-on)
                            activities to your study routine can make learning even more effective.</li>
                        <li><strong>Enhance Your Verbal Skills:</strong> Since you rely a lot on visuals, you might find
                            it
                            challenging to explain things verbally. Practice talking about your ideas or explaining
                            concepts out
                            loud to improve your communication skills.</li>
                        <li><strong>Balance Visual Tools with Other Methods:</strong> While visuals are great, balancing
                            them
                            with reading and hands-on activities can give you a fuller understanding of a subject.
                            Mixing in
                            different methods helps cover all the bases and keeps your learning experience well-rounded.
                        </li>
                    </ul>
                </div>
            </div>


            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-50 h-auto object-contain"
                        :src="'/images/reports-images/TeensLearningStyleImages/StrengthsGrowthAreas/4.svg'"
                        alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <h4 class="text-md font-bold mb-4">Tips for Personal Development</h4>
                    <ul class=" pl-6 mb-6">
                        <li><strong>Mix Up Your Learning Methods:</strong> Try adding different ways of learning to your
                            routine. Listening to podcasts or doing hands-on activities can complement your visual
                            learning and
                            make studying more interesting.</li>
                        <li><strong>Practice Explaining Ideas:</strong> Work on explaining your ideas out loud or
                            teaching them
                            to someone else. This helps you get better at verbalising concepts and improves your overall
                            communication skills.</li>
                        <li><strong>Use a Variety of Tools:</strong> Combine your favourite visual tools with reading
                            and
                            practical exercises. This approach helps you get a deeper understanding of what you’re
                            studying and
                            keeps things fresh.</li>
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
    name: "StrengthAndGrowthArea",
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
h1,  h3, h4 {
    color: rgb(55 48 163 );
}
li>strong, ul>li>h4, ul>li>div>h4 ,h5{
    color: rgb(36, 168, 250);
    font-size: 17px;
}

ul>li{
    margin-bottom: 15px;

}
.row:nth-of-type(3) {
flex-direction: row-reverse;

}
/* Add these new mobile responsive styles */
@media (max-width: 768px) {
    .row {
        display: flex;
        flex-direction: column;
    }

    li>div>h4{
        font-size: 1rem !important;
    }

    .row:nth-of-type(2) {
        flex-direction: column-reverse;
    }
    .row:nth-of-type(3) {
        flex-direction: column-reverse;
    }

    .col-6 {
        width: 100%;
        margin-bottom: 2rem;
    }

    .p-6{
        padding: 1rem;
    }



    /* Adjust image container on mobile */
    .col-6 .flex.justify-center.items-center {
        margin: 1rem 0;
    }

    /* Adjust spacing between sections */
    .row + .row {
        margin-top: 1rem;
    }


    h2 {
        font-size: 1.5rem !important;
        line-height: 2rem;
    }

    strong{
        font-size: 1rem  !important;
    }

    ul.list-disc {
        padding-left: 1rem;
    }
}
</style>
