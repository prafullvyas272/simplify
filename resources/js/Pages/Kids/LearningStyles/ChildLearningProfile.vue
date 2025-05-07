<template>
    <!-- Report 1 Auditory-->
     <div class="p-6">

    <div class="container mx-auto p-4">
        <h1 class="font-bold mb-4 text-center"> Your Child’s Learning Profile</h1>
        <div class="flex justify-around items-center">


        </div>

    </div>
    <div v-if="style == 'Auditory'">
        <!-- Content for Report 1 -->
        <div class="p-6 space-y-8">
            <!-- Summary of Scores -->
            <div>

                <h2 class="text-3xl font-bold mb-4">Summary of Scores</h2>
                <p class="">
                    Based on the assessment, your child’s scores in the
                    different learning styles are as follows:
                </p>

                <ul class="list-disc pl-6  space-y-2">
                    <li><strong>Visual Learner:</strong> {{ JSON.parse(parsedLearnScores).Visual }} points</li>
                    <li><strong>Auditory Learner:</strong> {{ JSON.parse(parsedLearnScores).Auditory }} points</li>
                    <li>
                        <strong>Kinaesthetic Learner:</strong> {{ JSON.parse(parsedLearnScores).Kinesthethic }} points
                    </li>
                    <li>
                        <strong>Reading/Writing Learner:</strong> {{ JSON.parse(parsedLearnScores)["Reading/Writing"] }}
                        points
                    </li>
                </ul>
                <Chart type="bar" :data="chart_data" :options="chart_options" />

                <div class="flex justify-center items-center">


                </div>
                <p class=" mt-4">
                    These scores help us understand which learning styles are
                    most dominant in your child’s behaviour.
                </p>
            </div>
            <div class="row">
                <div class="col-6 effective-study-box ">
                    <li class="flex items-start space-x-4">
                        <div>
                            <!-- Primary Learning Style -->
                            <div>
                                <h2 class="text-3xl font-bold mb-4">
                                    Primary Learning Style
                                </h2>
                                <p class="">
                                    Your child's primary learning style is
                                    <strong>Auditory</strong>, which means they understand and
                                    remember information best when it is presented through
                                    sound.
                                </p>
                                <p class=" font-bold mt-2">
                                    Primary Learning Style: Auditory Learner
                                </p>
                            </div>


                            <!-- Interpretation of Results -->
                            <div>
                                <h2 class="text-3xl font-bold mb-4">
                                    Interpretation of Results
                                </h2>
                                <p class="">
                                    <strong>Auditory Learner:</strong> As an auditory learner,
                                    your child prefers to listen to information and engage in
                                    discussions. They absorb information effectively through
                                    hearing and often have strong verbal communication skills.
                                    They enjoy listening to lectures, participating in
                                    discussions, and using rhythms and music to remember
                                    information.
                                </p>
                            </div>


                        </div>
                    </li>
                </div>
                <div class="col-6 effective-study-box ">
                    <li class="flex items-start space-x-4">
                        <div class="flex justify-center items-center">
                            <img class="w-90 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/9.svg'" alt="" />
                        </div>
                    </li>
                </div>
            </div>





        </div>
    </div>

    <!-- Report 2 Auditory _ Kinesthethic Blend -->

    <div v-if="style == 'Auditory/Kinesthethic'">
        <!-- Content for Report 2 -->
        <div class="p-6  ">
            <section class="mb-8">
                <h2 class="text-3xl font-bold text-indigo-500">
                    Summary of Scores
                </h2>
                <p class="mt-4 ">
                    Based on the assessment, your child’s scores in the
                    different learning styles are as follows:
                </p>
                <ul class="list-disc pl-6  space-y-2">
                    <li><strong>Visual Learner:</strong> {{ JSON.parse(parsedLearnScores).Visual }} points</li>
                    <li><strong>Auditory Learner:</strong> {{ JSON.parse(parsedLearnScores).Auditory }} points</li>
                    <li>
                        <strong>Kinaesthetic Learner:</strong> {{ JSON.parse(parsedLearnScores).Kinesthethic }} points
                    </li>
                    <li>
                        <strong>Reading/Writing Learner:</strong> {{ JSON.parse(parsedLearnScores)["Reading/Writing"] }}
                        points
                    </li>
                </ul>
                <Chart type="bar" :data="chart_data" :options="chart_options" />

                <div class="flex justify-center items-center">
                    <img class="w-90 h-auto object-contain"
                        :src="'/images/reports-svg-images/Kids/LearningStyles/8.svg'" alt="" />
                </div>
                <p class="mt-4 ">
                    These scores help us understand which learning styles are
                    most dominant in your child’s behaviour.
                </p>
            </section>

            <div class="row">
                <div class="col-6 effective-study-box ">
                    <li class="flex items-start space-x-4">
                        <div>
                            <section class="mb-8">
                                <h2 class="text-3xl font-bold text-indigo-500">
                                    Blended Learning Style: Auditory and Kinaesthetic Learner
                                </h2>
                                <p class="mt-4 ">
                                    Your child’s learning style is a blend of auditory and
                                    kinaesthetic, meaning they learn most effectively when they
                                    can engage in hands-on activities while also processing
                                    information through listening. They excel when given the
                                    opportunity to move, perform tasks, and listen to
                                    explanations or discussions to reinforce their
                                    understanding.
                                </p>
                            </section>

                            <section>
                                <h2 class="text-3xl font-bold text-indigo-500">
                                    Interpretation of Results
                                </h2>
                                <p class="mt-4 ">
                                    As an Auditory and Kinaesthetic Learner, your child
                                    processes information best through a combination of movement
                                    and auditory input. For example, they may find it helpful to
                                    listen to audio instructions while performing a hands-on
                                    task, such as a science experiment. They benefit from
                                    environments that allow them to actively engage with the
                                    material while also receiving verbal explanations or
                                    participating in discussions.
                                </p>
                            </section>

                        </div>
                    </li>
                </div>
                <div class="col-6 effective-study-box ">
                    <li class="flex items-start space-x-4">
                        <div class="flex justify-center items-center">
                            <img class="w-90 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/9.svg'" alt="" />
                        </div>
                    </li>
                </div>
            </div>



        </div>
    </div>

    <!-- Report 3 Auditory _ Reading & Writing Blend-->
    <div v-if="style == 'Auditory/Reading/Writing'">
        <!-- Content for Report 3 -->
        <div class="p-6">
            <!-- Summary of Scores -->
            <div class="mb-6">
                <h2 class="text-3xl font-bold">Summary of Scores:</h2>
                <p class="mt-2">
                    Based on the assessment, your child’s scores in the
                    different learning styles are as follows:
                </p>
                <ul class="list-disc pl-6  space-y-2">
                    <li><strong>Visual Learner:</strong> {{ JSON.parse(parsedLearnScores).Visual }} points</li>
                    <li><strong>Auditory Learner:</strong> {{ JSON.parse(parsedLearnScores).Auditory }} points</li>
                    <li>
                        <strong>Kinaesthetic Learner:</strong> {{ JSON.parse(parsedLearnScores).Kinesthethic }} points
                    </li>
                    <li>
                        <strong>Reading/Writing Learner:</strong> {{ JSON.parse(parsedLearnScores)["Reading/Writing"] }}
                        points
                    </li>
                </ul>
                <Chart type="bar" :data="chart_data" :options="chart_options" />

                <div class="flex justify-center items-center">
                    <img class="w-90 h-auto object-contain"
                        :src="'/images/reports-svg-images/Kids/LearningStyles/8.svg'" alt="" />
                </div>
                <p class="mt-4">
                    These scores help us understand which learning styles are
                    most dominant in your child’s behaviour.
                </p>
            </div>

            <div class="row">
                <div class="col-6 effective-study-box ">
                    <li class="flex items-start space-x-4">
                        <div>
                            <!-- Blended Learning Style -->
                            <div class="mb-6">
                                <h2 class="text-3xl font-bold">
                                    Blended Learning Style: Auditory and Reading/Writing Learner
                                </h2>
                                <p class="mt-2">
                                    Your child’s learning style is a blend of auditory and
                                    reading/writing, meaning they learn most effectively through
                                    listening and engaging with written materials. They excel
                                    when they can process information by listening to
                                    explanations, discussions, or audio resources and reinforce
                                    their understanding by reading, writing, or taking notes.
                                </p>
                            </div>

                            <!-- Interpretation of Results -->
                            <div>
                                <h2 class="text-3xl font-bold">
                                    Interpretation of Results:
                                </h2>
                                <p class="mt-2">
                                    As an Auditory and Reading/Writing Learner, your child
                                    processes information best when they can listen to verbal
                                    explanations and reinforce the material through reading and
                                    writing. For example, they may understand a concept by
                                    listening to a teacher explain it (auditory) and then
                                    deepening their understanding by reading about it in a book
                                    or writing notes (reading/writing). They thrive in
                                    environments that offer both verbal instruction and
                                    opportunities for written engagement.
                                </p>
                            </div>

                        </div>
                    </li>
                </div>
                <div class="col-6 effective-study-box ">
                    <li class="flex items-start space-x-4">
                        <div class="flex justify-center items-center">
                            <img class="w-90 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/9.svg'" alt="" />
                        </div>
                    </li>
                </div>
            </div>



        </div>
    </div>

    <!-- Report 4 Auditory _ Visual Blend-->
    <div v-if="style == 'Auditory/Visual'">
        <!-- Content for Report 4 -->
        <div class="space-y-8">
            <div>
                <h2 class="text-3xl font-bold">Summary of Scores:</h2>
                <p class="">
                    Based on the assessment, your child’s scores in the
                    different learning styles are as follows:
                </p>
                <ul class="list-disc pl-6  space-y-2">
                    <li><strong>Visual Learner:</strong> {{ JSON.parse(parsedLearnScores).Visual }} points</li>
                    <li><strong>Auditory Learner:</strong> {{ JSON.parse(parsedLearnScores).Auditory }} points</li>
                    <li>
                        <strong>Kinaesthetic Learner:</strong> {{ JSON.parse(parsedLearnScores).Kinesthethic }} points
                    </li>
                    <li>
                        <strong>Reading/Writing Learner:</strong> {{ JSON.parse(parsedLearnScores)["Reading/Writing"] }}
                        points
                    </li>
                </ul>
                <Chart type="bar" :data="chart_data" :options="chart_options" />

                <div class="flex justify-center items-center">
                    <img class="w-90 h-auto object-contain"
                        :src="'/images/reports-svg-images/Kids/LearningStyles/8.svg'" alt="" />
                </div>
                <p class=" mt-4">
                    These scores help us understand which learning styles are
                    most dominant in your child’s behaviour.
                </p>
            </div>

            <div class="row">
                <div class="col-6 effective-study-box ">
                    <li class="flex items-start space-x-4">
                        <div>

                            <div>
                                <h2 class="text-3xl font-bold">
                                    Blended Learning Style: Auditory and Visual Learner
                                </h2>
                                <p class="">
                                    Your child’s learning style is a blend of auditory and
                                    visual, meaning they learn most effectively when they can
                                    hear and see information. They thrive in environments where
                                    verbal explanations are reinforced with visual elements like
                                    diagrams or images, as this combination helps them absorb
                                    and retain information more fully.
                                </p>
                            </div>

                            <div>
                                <h2 class="text-3xl font-bold">
                                    Interpretation of Results:
                                </h2>
                                <p class="">
                                    As an Auditory and Visual Learner, your child processes
                                    information best when they can hear explanations and also
                                    see supporting visuals. They benefit from listening to
                                    verbal instructions, discussions, and stories, while visuals
                                    like charts, diagrams, and images help reinforce what they
                                    hear. This blend allows your child to use both sound and
                                    sight to create a deeper understanding of the material.
                                </p>
                            </div>

                        </div>
                    </li>
                </div>
                <div class="col-6 effective-study-box ">
                    <li class="flex items-start space-x-4">
                        <div class="flex justify-center items-center">
                            <img class="w-90 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/9.svg'" alt="" />
                        </div>
                    </li>
                </div>
            </div>


        </div>
    </div>

    <!-- Report 5 Kinesthethic _ Auditory Blend-->
    <div v-if="style == 'Kinesthethic/Auditory'">
        <!-- Content for Report 5 -->
        <div class="space-y-8">
            <div>
                <h2 class="text-3xl font-bold">Summary of Scores</h2>
                <p class="">
                    Based on the assessment, your child’s scores in the
                    different learning styles are as follows:
                </p>
                <ul class="list-disc pl-6  space-y-2">
                    <li><strong>Visual Learner:</strong> {{ JSON.parse(parsedLearnScores).Visual }} points</li>
                    <li><strong>Auditory Learner:</strong> {{ JSON.parse(parsedLearnScores).Auditory }} points</li>
                    <li>
                        <strong>Kinaesthetic Learner:</strong> {{ JSON.parse(parsedLearnScores).Kinesthethic }} points
                    </li>
                    <li>
                        <strong>Reading/Writing Learner:</strong> {{ JSON.parse(parsedLearnScores)["Reading/Writing"] }}
                        points
                    </li>
                </ul>
                <Chart type="bar" :data="chart_data" :options="chart_options" />

                <div class="flex justify-center items-center">
                    <img class="w-90 h-auto object-contain"
                        :src="'/images/reports-svg-images/Kids/LearningStyles/8.svg'" alt="" />
                </div>
                <p class="">
                    These scores help us understand which learning styles are
                    most dominant in your child’s behaviour.
                </p>
            </div>

            <div class="row">
                <div class="col-6 effective-study-box ">
                    <li class="flex items-start space-x-4">
                        <div>

                            <div>
                                <h2 class="text-2xl font-bold">
                                    Blended Learning Style: Kinaesthetic and Auditory Learner
                                </h2>
                                <p class="">
                                    Your child’s learning style is a blend of kinaesthetic and
                                    auditory, meaning they learn most effectively when they can
                                    engage physically with the material and listen to
                                    instructions or discussions. They excel in environments
                                    where they can combine movement, hands-on tasks, and verbal
                                    explanations to reinforce their understanding.
                                </p>
                            </div>

                            <div>
                                <h2 class="text-2xl font-bold">
                                    Interpretation of Results:
                                </h2>
                                <p class="">
                                    As a Kinaesthetic and Auditory Learner, your child processes
                                    information best when they can move or perform tasks while
                                    listening to verbal instructions. For example, they may find
                                    it helpful to listen to audio guides while engaging in
                                    hands-on activities like building, crafting, or solving
                                    problems. They thrive in learning environments that offer
                                    verbal input alongside opportunities for physical
                                    interaction with the material.
                                </p>
                            </div>

                        </div>
                    </li>
                </div>
                <div class="col-6 effective-study-box ">
                    <li class="flex items-start space-x-4">
                        <div class="flex justify-center items-center">
                            <img class="w-90 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/9.svg'" alt="" />
                        </div>
                    </li>
                </div>
            </div>


        </div>
    </div>

    <!-- Report 6 Kinesthethic _ Reading & Writing -->
    <div v-if="style == 'Kinesthethic/Reading/Writing'">
        <!-- Content for Report 6 -->
        <div class="space-y-4">
            <h2 class="text-3xl font-bold">Summary of Scores</h2>
            <p>
                Based on the assessment, your child’s scores in the different
                learning styles are as follows:
            </p>
            <ul class="list-disc pl-6  space-y-2">
                <li><strong>Visual Learner:</strong> {{ JSON.parse(parsedLearnScores).Visual }} points</li>
                <li><strong>Auditory Learner:</strong> {{ JSON.parse(parsedLearnScores).Auditory }} points</li>
                <li>
                    <strong>Kinaesthetic Learner:</strong> {{ JSON.parse(parsedLearnScores).Kinesthethic }} points
                </li>
                <li>
                    <strong>Reading/Writing Learner:</strong> {{ JSON.parse(parsedLearnScores)["Reading/Writing"] }}
                    points
                </li>
            </ul>
            <Chart type="bar" :data="chart_data" :options="chart_options" />

            <div class="flex justify-center items-center">
                <img class="w-90 h-auto object-contain" :src="'/images/reports-svg-images/Kids/LearningStyles/8.svg'"
                    alt="" />
            </div>
            <p>
                These scores help us understand which learning styles are most
                dominant in your child’s behaviour.
            </p>

            <div class="row">
                <div class="col-6 effective-study-box ">
                    <li class="flex items-start space-x-4">
                        <div>


                            <h2 class="text-3xl font-bold">
                                Blended Learning Style: Kinaesthetic and Reading/Writing Learner
                            </h2>
                            <p>
                                Your child’s learning style is a blend of kinaesthetic and
                                reading/writing, meaning they learn most effectively when they
                                can engage physically with materials and reinforce their
                                understanding through reading and writing. They excel when they
                                can perform hands-on tasks, such as building or creating, while
                                also organising and processing information through written
                                exercises.
                            </p>

                            <h2 class="text-3xl font-bold">Interpretation of Results</h2>
                            <p>
                                As a Kinesthetic and Reading/Writing Learner, your child
                                processes information best when they can combine movement with
                                writing or reading activities. For example, they may find it
                                helpful to write down steps as they physically engage with a
                                task. They thrive in environments that allow for hands-on
                                engagement while providing opportunities to read, write, and
                                organise their thoughts in written form.
                            </p>

                        </div>
                    </li>
                </div>
                <div class="col-6 effective-study-box ">
                    <li class="flex items-start space-x-4">
                        <div class="flex justify-center items-center">
                            <img class="w-90 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/9.svg'" alt="" />
                        </div>
                    </li>
                </div>
            </div>

        </div>
    </div>

    <!-- Report 7 Kinesthethic _ Visual Blend-->
    <div v-if="style == 'Kinesthethic/Visual'">
        <!-- Content for Report 7 -->
        <div class="p-6 ">
            <h2 class="text-3xl font-bold mb-6">Summary of Scores</h2>

            <p class="mb-6">
                Based on the assessment, your child’s scores in the different
                learning styles are as follows:
            </p>

            <!-- Learning Style Scores -->
            <ul class="list-disc pl-6  space-y-2">
                <li><strong>Visual Learner:</strong> {{ JSON.parse(parsedLearnScores).Visual }} points</li>
                <li><strong>Auditory Learner:</strong> {{ JSON.parse(parsedLearnScores).Auditory }} points</li>
                <li>
                    <strong>Kinaesthetic Learner:</strong> {{ JSON.parse(parsedLearnScores).Kinesthethic }} points
                </li>
                <li>
                    <strong>Reading/Writing Learner:</strong> {{ JSON.parse(parsedLearnScores)["Reading/Writing"] }}
                    points
                </li>
            </ul>
            <Chart type="bar" :data="chart_data" :options="chart_options" />

            <div class="flex justify-center items-center">
                <img class="w-90 h-auto object-contain" :src="'/images/reports-svg-images/Kids/LearningStyles/8.svg'"
                    alt="" />
            </div>

            <p class="mb-6">
                These scores help us understand which learning styles are most
                dominant in your child’s behaviour.
            </p>

            <div class="row">
                <div class="col-6 effective-study-box ">
                    <li class="flex items-start space-x-4">
                        <div>

                            <h2 class=" font-bold mb-4">
                                Blended Learning Style: Kinaesthetic and Visual Learner
                            </h2>

                            <p class="mb-6">
                                Your child’s learning style is a blend of kinaesthetic and
                                visual, meaning they grasp information best when they can
                                physically interact with it and see it represented visually.
                                They excel when they are allowed to move around, engage with
                                materials physically, and use visual aids such as diagrams,
                                charts, and images to reinforce learning.
                            </p>

                            <h3 class=" font-bold mb-4">
                                Interpretation of Results:
                            </h3>

                            <p>
                                As a Kinaesthetic and Visual Learner, your child benefits from physically engaging with the learning material while simultaneously having a visual representation of it. For example, they may understand scientific concepts more easily by building models (kinaesthetic) and looking at diagrams (visual). They retain information best when they can physically manipulate materials and see the information laid out in visual form.
                            </p>


                        </div>
                    </li>
                </div>
                <div class="col-6 effective-study-box ">
                    <li class="flex items-start space-x-4">
                        <div class="flex justify-center items-center">
                            <img class="w-90 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/9.svg'" alt="" />
                        </div>
                    </li>
                </div>
            </div>


        </div>
    </div>

    <!-- Report 8 Kinesthethic-->
    <div v-if="style == 'Kinesthethic'">
        <!-- Content for Report 8 -->
        <div class="space-y-8">
            <div>
                <h2 class="text-3xl font-bold">Summary of Scores:</h2>
                <p>
                    Based on the assessment, your child’s scores in the
                    different learning styles are as follows:
                </p>
                <ul class="list-disc pl-6  space-y-2">
                    <li><strong>Visual Learner:</strong> {{ JSON.parse(parsedLearnScores).Visual }} points</li>
                    <li><strong>Auditory Learner:</strong> {{ JSON.parse(parsedLearnScores).Auditory }} points</li>
                    <li>
                        <strong>Kinaesthetic Learner:</strong> {{ JSON.parse(parsedLearnScores).Kinesthethic }} points
                    </li>
                    <li>
                        <strong>Reading/Writing Learner:</strong> {{ JSON.parse(parsedLearnScores)["Reading/Writing"] }}
                        points
                    </li>
                </ul>
                <Chart type="bar" :data="chart_data" :options="chart_options" />

                <div class="flex justify-center items-center">
                    <img class="w-90 h-auto object-contain"
                        :src="'/images/reports-svg-images/Kids/LearningStyles/8.svg'" alt="" />
                </div>
                <p>
                    These scores help us understand which learning styles are
                    most dominant in your child’s behaviour.
                </p>
            </div>

            <div class="row">
                <div class="col-6 effective-study-box ">
                    <li class="flex items-start space-x-4">
                        <div>
                            <div>
                                <h2 class="text-3xl font-bold">Primary Learning Style:</h2>
                                <p>
                                    Your child's primary learning style is
                                    <strong>Kinaesthetic</strong>, which means they understand
                                    and remember information best when it is experienced through
                                    physical activity and hands-on involvement.
                                </p>
                            </div>

                            <div>
                                <h3 class=" font-bold">
                                    Interpretation of Results:
                                </h3>
                                <p>
                                    <strong>Kinaesthetic Learner:</strong> As a kinaesthetic
                                    learner, your child prefers to learn through physical
                                    activities and hands-on experiences. They absorb information
                                    best when they can engage their bodies in the learning
                                    process. They often have strong coordination, spatial
                                    awareness, and a natural ability to understand physical
                                    tasks and activities.
                                </p>
                            </div>

                        </div>
                    </li>
                </div>
                <div class="col-6 effective-study-box ">
                    <li class="flex items-start space-x-4">
                        <div class="flex justify-center items-center">
                            <img class="w-90 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/9.svg'" alt="" />
                        </div>
                    </li>
                </div>
            </div>



        </div>
    </div>

    <!-- Report 9 Reading & Writing _ Auditory Blend -->
    <div v-if="style == 'Reading/Writing/Auditory'">
        <!-- Content for Report 9 -->
        <div class="space-y-8">
            <div>
                <h2 class="text-3xl font-bold">Summary of Scores:</h2>
                <p>
                    Based on the assessment, your child’s scores in the
                    different learning styles are as follows:
                </p>
                <ul class="list-disc pl-6  space-y-2">
                    <li><strong>Visual Learner:</strong> {{ JSON.parse(parsedLearnScores).Visual }} points</li>
                    <li><strong>Auditory Learner:</strong> {{ JSON.parse(parsedLearnScores).Auditory }} points</li>
                    <li>
                        <strong>Kinaesthetic Learner:</strong> {{ JSON.parse(parsedLearnScores).Kinesthethic }} points
                    </li>
                    <li>
                        <strong>Reading/Writing Learner:</strong> {{ JSON.parse(parsedLearnScores)["Reading/Writing"] }}
                        points
                    </li>
                </ul>
                <Chart type="bar" :data="chart_data" :options="chart_options" />

                <div class="flex justify-center items-center">
                    <img class="w-90 h-auto object-contain"
                        :src="'/images/reports-svg-images/Kids/LearningStyles/8.svg'" alt="" />
                </div>
                <p>
                    These scores help us understand which learning styles are
                    most dominant in your child’s behaviour.
                </p>
            </div>

            <div class="row">
                <div class="col-6 effective-study-box ">
                    <li class="flex items-start space-x-4">
                        <div>

                            <div>
                                <h2 class=" font-bold">
                                    Blended Learning Style: Reading/Writing and Auditory Learner
                                </h2>
                                <p>
                                    Your child’s learning style is a blend of reading/writing
                                    and auditory, meaning they learn most effectively when they
                                    can combine listening to verbal explanations or discussions
                                    with reading and writing activities. They excel when they
                                    can process information by reading books, taking notes, or
                                    writing essays, and reinforce that understanding by hearing
                                    explanations or participating in verbal discussions.
                                </p>
                            </div>

                            <div>
                                <h3 class=" font-bold">
                                    Interpretation of Results:
                                </h3>
                                <p>
                                    As a Reading/Writing and Auditory Learner, your child
                                    processes information best when they can read or write about
                                    it, then reinforce it through auditory input, such as
                                    listening to lectures or podcasts. They thrive in
                                    environments that offer a balance of written and verbal
                                    communication, allowing them to fully engage with and retain
                                    the material.
                                </p>
                            </div>

                        </div>
                    </li>
                </div>
                <div class="col-6 effective-study-box ">
                    <li class="flex items-start space-x-4">
                        <div class="flex justify-center items-center">
                            <img class="w-90 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/9.svg'" alt="" />
                        </div>
                    </li>
                </div>
            </div>


        </div>
    </div>

    <!-- Report 10 Reading & Writing _ Kinesthethic Blend-->
    <div v-if="style == 'Reading/Writing/Kinesthethic'">
        <!-- Content for Report 10 -->
        <div class="container mx-auto p-6">
            <h2 class="text-3xl font-bold mb-6">Summary of Scores</h2>
            <p class="mb-4">
                Based on the assessment, your child’s scores in the different
                learning styles are as follows:
            </p>

            <ul class="list-disc pl-6  space-y-2">
                <li><strong>Visual Learner:</strong> {{ JSON.parse(parsedLearnScores).Visual }} points</li>
                <li><strong>Auditory Learner:</strong> {{ JSON.parse(parsedLearnScores).Auditory }} points</li>
                <li>
                    <strong>Kinaesthetic Learner:</strong> {{ JSON.parse(parsedLearnScores).Kinesthethic }} points
                </li>
                <li>
                    <strong>Reading/Writing Learner:</strong> {{ JSON.parse(parsedLearnScores)["Reading/Writing"] }}
                    points
                </li>
            </ul>
            <Chart type="bar" :data="chart_data" :options="chart_options" />

            <div class="flex justify-center items-center">
                <img class="w-90 h-auto object-contain" :src="'/images/reports-svg-images/Kids/LearningStyles/8.svg'"
                    alt="" />
            </div>

            <div class="row">
                <div class="col-6 effective-study-box ">
                    <li class="flex items-start space-x-4">
                        <div>
                            <h2 class="font-bold ">
                                Blended Learning Style: Reading/Writing and Kinaesthetic Learner
                            </h2>
                            <p class="mb-6">
                                Your child’s learning style is a blend of reading/writing and
                                kinaesthetic, meaning they learn most effectively when they can
                                combine written tasks such as reading, writing, and note-taking
                                with physical engagement or hands-on activities. They excel when
                                they can physically interact with materials and follow up with
                                written reflections, reading, or organising their thoughts
                                through writing.
                            </p>

                            <h3 class="text-3xl font-bold mb-4">
                                Interpretation of Results:
                            </h3>
                            <p class="mb-6">
                                As a Reading/Writing and Kinaesthetic Learner, your child
                                processes information best when they can physically engage with
                                learning materials and reinforce their understanding through
                                reading or writing. For example, they might benefit from taking
                                notes while performing a hands-on task or writing a reflection
                                after completing a physical activity. They thrive in
                                environments that allow for movement, hands-on learning, and
                                written tasks to help solidify their understanding.
                            </p>

                        </div>
                    </li>
                </div>
                <div class="col-6 effective-study-box ">
                    <li class="flex items-start space-x-4">
                        <div class="flex justify-center items-center">
                            <img class="w-90 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/9.svg'" alt="" />
                        </div>
                    </li>
                </div>
            </div>



        </div>
    </div>

    <!-- Report 11 Reading & Writing _ Visual Blend -->
    <div v-if="style == 'Reading/Writing/Visual'">
        <!-- Content for Report 11 -->
        <div class="container mx-auto p-6">
            <h2 class="text-3xl font-bold mb-6">Summary of Scores:</h2>
            <p class="mb-6">
                Based on the assessment, your child’s scores in the different
                learning styles are as follows:
            </p>
            <ul class="list-disc pl-6  space-y-2">
                <li><strong>Visual Learner:</strong> {{ JSON.parse(parsedLearnScores).Visual }} points</li>
                <li><strong>Auditory Learner:</strong> {{ JSON.parse(parsedLearnScores).Auditory }} points</li>
                <li>
                    <strong>Kinaesthetic Learner:</strong> {{ JSON.parse(parsedLearnScores).Kinesthethic }} points
                </li>
                <li>
                    <strong>Reading/Writing Learner:</strong> {{ JSON.parse(parsedLearnScores)["Reading/Writing"] }}
                    points
                </li>
            </ul>
            <Chart type="bar" :data="chart_data" :options="chart_options" />

            <div class="flex justify-center items-center">
                <img class="w-90 h-auto object-contain" :src="'/images/reports-svg-images/Kids/LearningStyles/8.svg'"
                    alt="" />
            </div>

            <p class="mt-6">
                These scores help us understand which learning styles are most
                dominant in your child’s behaviour.
            </p>

            <div class="row">
                <div class="col-6 effective-study-box ">
                    <li class="flex items-start space-x-4">
                        <div>
                            <h2 class="text-3xl font-bold mt-6 mb-4">
                                Blended Learning Style: Reading/Writing and Visual Learner
                            </h2>
                            <p class="mb-6">
                                Your child’s learning style is a blend of reading/writing and
                                visual, meaning they learn most effectively when they can
                                interact with written text and visualise the information. They
                                excel when reading books, taking notes, or writing essays, and
                                they benefit from supporting this learning with diagrams,
                                charts, or other visual aids.
                            </p>

                            <h3 class="text-3xl font-bold mt-6 mb-4">
                                Interpretation of Results:
                            </h3>
                            <p class="mb-6">
                                As a Reading/Writing and Visual Learner, your child understands
                                and retains information best when they can read about it or
                                write it down and support that information with visual elements.
                                For example, they may read a textbook or written notes
                                (reading/writing) and then deepen their understanding by
                                reviewing charts or diagrams (visual). They thrive in
                                environments where written and visual methods are combined to
                                support learning.
                            </p>

                        </div>
                    </li>
                </div>
                <div class="col-6 effective-study-box ">
                    <li class="flex items-start space-x-4">
                        <div class="flex justify-center items-center">
                            <img class="w-90 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/9.svg'" alt="" />
                        </div>
                    </li>
                </div>
            </div>



        </div>
    </div>

    <!-- Report 12 Reading & Writing-->
    <div v-if="style == 'Reading/Writing'">
        <!-- Content for Report 12 -->
        <section class="mb-8">
            <h2 class="text-3xl font-bold text-indigo-500">
                Summary of Scores
            </h2>
            <p class="mt-4 ">
                Based on the assessment, your child’s scores in the different
                learning styles are as follows:
            </p>
            <ul class="list-disc pl-6  space-y-2">
                <li><strong>Visual Learner:</strong> {{ JSON.parse(parsedLearnScores).Visual }} points</li>
                <li><strong>Auditory Learner:</strong> {{ JSON.parse(parsedLearnScores).Auditory }} points</li>
                <li>
                    <strong>Kinaesthetic Learner:</strong> {{ JSON.parse(parsedLearnScores).Kinesthethic }} points
                </li>
                <li>
                    <strong>Reading/Writing Learner:</strong> {{ JSON.parse(parsedLearnScores)["Reading/Writing"] }}
                    points
                </li>
            </ul>
            <Chart type="bar" :data="chart_data" :options="chart_options" />

            <div class="flex justify-center items-center">
                <img class="w-90 h-auto object-contain" :src="'/images/reports-svg-images/Kids/LearningStyles/8.svg'"
                    alt="" />
            </div>
            <p class="mt-4 ">
                These scores help us understand which learning styles are most
                dominant in your child’s behaviour.
            </p>
        </section>

        <div class="row">
            <div class="col-6 effective-study-box ">
                <li class="flex items-start space-x-4">
                    <div>
                        <section class="mb-8">
                            <h2 class="text-3xl font-bold text-indigo-500">
                                Primary Learning Style
                            </h2>
                            <p class="mt-4 ">
                                Your child's primary learning style is Reading/Writing, which
                                means they understand and remember information best when it is
                                presented in written form.
                            </p>
                            <ul class="list-inside list-disc mt-4 space-y-2 ">
                                <li>
                                    <strong>Primary Learning Style:</strong> Reading/Writing
                                    Learner
                                </li>
                            </ul>
                        </section>
                        <section class="mb-8">
                            <h2 class="text-3xl font-bold text-indigo-500">
                                Interpretation of Results
                            </h2>
                            <p class="mt-4 ">
                                <strong>Reading/Writing Learner:</strong> As a reading/writing
                                learner, your child prefers to learn through reading texts and
                                writing about what they have learned. They benefit from taking
                                detailed notes, writing summaries, and reading extensively. They
                                often have a strong vocabulary and are skilled at conducting
                                research and organising information.
                            </p>
                        </section>

                    </div>
                </li>
            </div>
            <div class="col-6 effective-study-box ">
                <li class="flex items-start space-x-4">
                    <div class="flex justify-center items-center">
                        <img class="w-90 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/9.svg'" alt="" />
                    </div>
                </li>
            </div>
        </div>


    </div>

    <!-- Report 13 Visual _ Auditory Blend-->
    <div v-if="style == 'Visual/Auditory'">
        <!-- Content for Report 13 -->
        <section class="mb-8">
            <h2 class="text-3xl font-bold text-indigo-500">
                Summary of Scores
            </h2>
            <p class="mt-4 ">
                Based on the assessment, your child’s scores in the different
                learning styles are as follows:
            </p>
            <ul class="list-disc pl-6  space-y-2">
                <li><strong>Visual Learner:</strong> {{ JSON.parse(parsedLearnScores).Visual }} points</li>
                <li><strong>Auditory Learner:</strong> {{ JSON.parse(parsedLearnScores).Auditory }} points</li>
                <li>
                    <strong>Kinaesthetic Learner:</strong> {{ JSON.parse(parsedLearnScores).Kinesthethic }} points
                </li>
                <li>
                    <strong>Reading/Writing Learner:</strong> {{ JSON.parse(parsedLearnScores)["Reading/Writing"] }}
                    points
                </li>
            </ul>
            <Chart type="bar" :data="chart_data" :options="chart_options" />

            <div class="flex justify-center items-center">
                <img class="w-90 h-auto object-contain" :src="'/images/reports-svg-images/Kids/LearningStyles/8.svg'"
                    alt="" />
            </div>
            <p class="mt-4 ">
                These scores help us understand which learning styles are most
                dominant in your child’s behaviour.
            </p>
        </section>

        <div class="row">
            <div class="col-6 effective-study-box ">
                <li class="flex items-start space-x-4">
                    <div>
                        <section class="mb-8">
                            <h2 class="text-3xl font-bold text-indigo-500">
                                Blended Learning Style: Visual and Auditory Learner
                            </h2>
                            <p class="mt-4 ">
                                Your child’s learning style is a blend of
                                <strong>visual</strong> and <strong>auditory</strong>, which
                                means they absorb information most effectively through a
                                combination of seeing and hearing it. This blended style allows
                                them to leverage both visual aids, such as diagrams and charts,
                                and auditory input, such as explanations and discussions, to
                                fully understand and retain new information.
                            </p>
                        </section>
                        <section class="mb-8">
                            <h2 class="text-3xl font-bold text-indigo-500">
                                Interpretation of Results
                            </h2>
                            <p class="mt-4 ">
                                As a <strong>Visual and Auditory Learner</strong>, your child
                                processes information best when they can see it visually and
                                hear it explained. This blend means that your child benefits
                                from seeing concepts clearly laid out in visual formats, such as
                                pictures or diagrams, while also thriving when they listen to
                                verbal instructions or discussions. By combining these two
                                learning methods, your child can make strong connections between
                                what they see and what they hear, enhancing their overall
                                learning experience.
                            </p>
                        </section>

                    </div>
                </li>
            </div>
            <div class="col-6 effective-study-box ">
                <li class="flex items-start space-x-4">
                    <div class="flex justify-center items-center">
                        <img class="w-90 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/9.svg'" alt="" />
                    </div>
                </li>
            </div>
        </div>


    </div>

    <!-- Report 14 Visual _ Kinesthethic Blend-->
    <div v-if="style == 'Visual/Kinesthethic'">
        <!-- Content for Report 14 -->
        <section class="mb-8">
            <h2 class="text-3xl font-bold text-indigo-500">
                Summary of Scores
            </h2>
            <p class="mt-4 ">
                Based on the assessment, your child’s scores in the different
                learning styles are as follows:
            </p>
            <ul class="list-disc pl-6  space-y-2">
                <li><strong>Visual Learner:</strong> {{ JSON.parse(parsedLearnScores).Visual }} points</li>
                <li><strong>Auditory Learner:</strong> {{ JSON.parse(parsedLearnScores).Auditory }} points</li>
                <li>
                    <strong>Kinaesthetic Learner:</strong> {{ JSON.parse(parsedLearnScores).Kinesthethic }} points
                </li>
                <li>
                    <strong>Reading/Writing Learner:</strong> {{ JSON.parse(parsedLearnScores)["Reading/Writing"] }}
                    points
                </li>
            </ul>
            <Chart type="bar" :data="chart_data" :options="chart_options" />

            <div class="flex justify-center items-center">
                <img class="w-90 h-auto object-contain" :src="'/images/reports-svg-images/Kids/LearningStyles/8.svg'"
                    alt="" />
            </div>
            <p class="mt-4 ">
                These scores help us understand which learning styles are most
                dominant in your child’s behaviour.
            </p>
        </section>
        <div class="row">
            <div class="col-6 effective-study-box ">
                <li class="flex items-start space-x-4">
                    <div>
                        <section class="mb-8">
                            <h2 class="text-3xl font-bold text-indigo-500">
                                Blended Learning Style: Visual and Kinaesthetic Learner
                            </h2>
                            <p class="mt-4 ">
                                Your child’s learning style is a blend of
                                <strong>visual</strong> and <strong>kinaesthetic</strong>,
                                meaning they learn most effectively through a combination of
                                seeing and physically engaging with the material. They
                                understand concepts best when they can visualise information
                                through images, charts, or diagrams, and reinforce that
                                understanding through hands-on activities, experiments, or
                                movement.
                            </p>
                        </section>
                        <section class="mb-8">
                            <h2 class="text-3xl font-bold text-indigo-500">
                                Interpretation of Results
                            </h2>
                            <p class="mt-4 ">
                                As a <strong>Visual and Kinaesthetic</strong> Learner, your
                                child benefits from seeing information represented visually and
                                then applying that knowledge through physical interaction. For
                                example, they may learn a concept by watching a demonstration or
                                studying diagrams and then solidify that learning by performing
                                an activity related to the topic, such as building a model,
                                conducting an experiment, or engaging in a hands-on project.
                            </p>
                        </section>

                    </div>
                </li>
            </div>
            <div class="col-6 effective-study-box ">
                <li class="flex items-start space-x-4">
                    <div class="flex justify-center items-center">
                        <img class="w-90 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/9.svg'" alt="" />
                    </div>
                </li>
            </div>
        </div>


    </div>

    <!-- Report 15 Visual _ Reading & Writing-->
    <div v-if="style == 'Visual/Reading/Writing'">
        <!-- Content for Report 15 -->
        <section class="mb-8">
            <h2 class="text-3xl font-bold text-indigo-500">
                Summary of Scores
            </h2>
            <p class="mt-4 ">
                Based on the assessment, your child’s scores in the different
                learning styles are as follows:
            </p>
            <ul class="list-disc pl-6  space-y-2">
                <li><strong>Visual Learner:</strong> {{ JSON.parse(parsedLearnScores).Visual }} points</li>
                <li><strong>Auditory Learner:</strong> {{ JSON.parse(parsedLearnScores).Auditory }} points</li>
                <li>
                    <strong>Kinaesthetic Learner:</strong> {{ JSON.parse(parsedLearnScores).Kinesthethic }} points
                </li>
                <li>
                    <strong>Reading/Writing Learner:</strong> {{ JSON.parse(parsedLearnScores)["Reading/Writing"] }}
                    points
                </li>
            </ul>
            <Chart type="bar" :data="chart_data" :options="chart_options" />

            <div class="flex justify-center items-center">
                <img class="w-90 h-auto object-contain" :src="'/images/reports-svg-images/Kids/LearningStyles/8.svg'"
                    alt="" />
            </div>
            <p class="mt-4 ">
                These scores help us understand which learning styles are most
                dominant in your child’s behaviour.
            </p>
        </section>
        <div class="row">
            <div class="col-6 effective-study-box ">
                <li class="flex items-start space-x-4">
                    <div>
                        <section class="mb-8">
                            <h2 class="text-3xl font-bold text-indigo-500">
                                Blended Learning Style: Visual and Reading/Writing Learner
                            </h2>
                            <p class="mt-4 ">
                                Your child’s learning style is a blend of visual and
                                reading/writing, meaning they learn most effectively when they
                                can see information represented visually and interact with it
                                through reading or writing. They excel in environments where
                                diagrams, charts, and written notes are used to explain
                                concepts, allowing them to process and reinforce the material
                                both visually and through writing.
                            </p>
                        </section>
                        <section class="mb-8">
                            <h2 class="text-3xl font-bold text-indigo-500">
                                Interpretation of Results
                            </h2>
                            <p class="mt-4 ">
                                As a Visual and Reading/Writing Learner, your child benefits
                                from seeing information clearly organised and reinforced by
                                reading or writing. For example, they may learn a concept by
                                reading about it in a textbook or notes (reading/writing) and
                                then deepening their understanding by reviewing diagrams or
                                charts (visual). They thrive on the combination of visually
                                organised information and writing to process and retain
                                knowledge.
                            </p>
                        </section>

                    </div>
                </li>
            </div>
            <div class="col-6 effective-study-box ">
                <li class="flex items-start space-x-4">
                    <div class="flex justify-center items-center">
                        <img class="w-90 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/9.svg'" alt="" />
                    </div>
                </li>
            </div>
        </div>


    </div>

    <!-- Report 16 Visual-->
    <div v-if="style == 'Visual'">
        <!-- Content for Report 16 -->
        <section class="mb-8">
            <h2 class="text-3xl font-bold text-indigo-500">
                Summary of Scores
            </h2>
            <p class="mt-4 ">
                Based on the assessment, your child’s scores in the different
                learning styles are as follows:
            </p>
            <ul class="list-disc pl-6  space-y-2">
                <li><strong>Visual Learner:</strong> {{ JSON.parse(parsedLearnScores).Visual }} points</li>
                <li><strong>Auditory Learner:</strong> {{ JSON.parse(parsedLearnScores).Auditory }} points</li>
                <li>
                    <strong>Kinaesthetic Learner:</strong> {{ JSON.parse(parsedLearnScores).Kinesthethic }} points
                </li>
                <li>
                    <strong>Reading/Writing Learner:</strong> {{ JSON.parse(parsedLearnScores)["Reading/Writing"] }}
                    points
                </li>
            </ul>
            <Chart type="bar" :data="chart_data" :options="chart_options" />

            <div class="flex justify-center items-center">
                <img class="w-90 h-auto object-contain" :src="'/images/reports-svg-images/Kids/LearningStyles/8.svg'"
                    alt="" />
            </div>
            <p class="mt-4 ">
                These scores help us understand which learning styles are most
                dominant in your child’s behaviour.
            </p>
        </section>
        <div class="row">
            <div class="col-6 effective-study-box ">
                <li class="flex items-start space-x-4">
                    <div>
                        <section class="mb-8">
                            <h2 class="text-3xl font-bold text-indigo-500">
                                Primary Learning Style
                            </h2>
                            <p class="mt-4 ">
                                Your child's primary learning style is Visual, which means they
                                understand and remember information best when it is presented
                                visually.
                            </p>
                            <ul class="list-inside list-disc mt-4 space-y-2 ">
                                <li><strong>Primary Learning Style:</strong> Visual Learner</li>
                            </ul>
                        </section>
                        <section class="mb-8">
                            <h2 class="text-3xl font-bold text-indigo-500">
                                Interpretation of Results
                            </h2>
                            <p class="mt-4 ">
                                <strong>Visual Learner:</strong> As a visual learner, your child
                                prefers to see information and visualise relationships between
                                ideas. They enjoy using visual aids like diagrams, charts, and
                                videos. They often have a strong sense of spatial awareness and
                                creativity.
                            </p>
                        </section>

                    </div>
                </li>
            </div>
            <div class="col-6 effective-study-box ">
                <li class="flex items-start space-x-4">
                    <div class="flex justify-center items-center">
                        <img class="w-90 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/9.svg'" alt="" />
                    </div>
                </li>
            </div>
        </div>


    </div>
    </div>


</template>

<script>
import AssessmentTypes from "@/Layouts/AssessmentTypes.vue";
import Chart from 'primevue/chart';

export default {
    name: "ChildLearningProfile",
    layout: AssessmentTypes,
    components: { Chart },
    props: {
        style: String,
        childName: String,
        image: String,
        learnScores: Object,
    },
    data() {
        return {
            parsedLearnScores: this.learnScores ? this.learnScores : { Visual: 0, Auditory: 0, Kinesthethic: 0, ReadingWriting: 0 },
            chart_options: {
                scales: {
                    y: {
                        ticks: {
                            stepSize: 2,
                        },
                        suggestedMax: 15
                    }
                }
            },
            chart_data: {
                labels: ['Visual', 'Auditory', 'Kinaesthetic', 'Reading/Writing'],
                datasets: [
                    {
                        label: 'Learning Score',
                        data: [],
                        backgroundColor: ['rgba(249, 115, 22, 0.2)', 'rgba(6, 182, 212, 0.2)', 'rgb(107, 114, 128, 0.2)', 'rgba(139, 92, 246, 0.2)'],
                        borderColor: ['rgb(249, 115, 22)', 'rgb(6, 182, 212)', 'rgb(107, 114, 128)', 'rgb(139, 92, 246)'],
                        borderWidth: 1
                    }
                ]
            },
            x: 0,
            y: 0
        };
    },
    watch: {
        learnScores: {
            immediate: true,
            handler(newValue) {
                this.parsedLearnScores = newValue ? newValue : { Visual: 0, Auditory: 0, Kinesthethic: 0, ReadingWriting: 0 };
            },
        },
    },
    mounted() {
        const data = JSON.parse(this.learnScores);
        this.chart_data.datasets[0].data = [data.Visual, data.Auditory, data.Kinesthethic,  data["Reading/Writing"]];
        switch (this.style) {

            case "Visual": this.x = 60; this.y = 220; break;
            case "Visual/Auditory": this.x = 60; this.y = 170; break;
            case "Visual/Kinesthethic": this.x = 60; this.y = 120; break;
            case "Visual/Reading/Writing": this.x = 60; this.y = 65; break;

            case "Auditory/Kinesthethic": this.x = 230; this.y = 220; break;
            case "Auditory/Reading/Writing": this.x = 230; this.y = 170; break;
            case "Auditory/Visual": this.x = 230; this.y = 120; break;
            case "Auditory": this.x = 230; this.y = 65; break;

            case "Kinesthethic/Auditory": this.x = 120; this.y = 220; break;
            case "Kinesthethic/Reading/Writing": this.x = 165; this.y = 220; break;
            case "Kinesthethic/Visual": this.x = 120; this.y = 50; break;
            case "Kinesthethic": this.x = 170; this.y = 50; break;

            case "Reading/Writing/Auditory": this.x = 120; this.y = 220; break;
            case "Reading/Writing/Kinesthethic": this.x = 165; this.y = 220; break;
            case "Reading/Writing/Visual": this.x = 120; this.y = 50; break;
            case "Reading/Writing": this.x = 170; this.y = 50; break;

        }
    }
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
    color: #fa25c4
        /* font-size: 19px; */
}

h2,
.p-6>.row>.col-6>h2, h3 {
    color: rgb(55 48 163);
    font-weight: bold !important;
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
        font-size: 1.5rem !important;
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
