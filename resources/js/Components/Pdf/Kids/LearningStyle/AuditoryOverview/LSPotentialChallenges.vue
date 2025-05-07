<template>
    <div class="p-6">

    <div class="container mx-auto p-4">
    </div>
    <!-- Report 1 Auditory -->
    <div v-if="style == 'Auditory'">
        <!-- Content for Report 1 -->
        <div class="p-6">

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
            <div class="space-y-6">


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
    name: "LSPotentialChallenges",
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
