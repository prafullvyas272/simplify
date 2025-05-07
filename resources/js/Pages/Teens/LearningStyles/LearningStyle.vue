<template>
     <div class="p-6">
    <div class="space-y-6 mt-4">
        <h2 class="text-center font-bold mb-4">Your Learning Style</h2>
    </div>
    <!-- Report 1 Auditory -->
    <div v-if="style == 'Auditory'">
        <!-- Content for Report 1 -->
        <div class="p-4">
            <h4 class="text-md font-bold mb-2">
                Introduction to Your Learning Style
            </h4>
            <p class="mb-4">
                Based on the assessment, your scores in the different learning
                styles are as follows:
            </p>
            <ul class="list-disc pl-6 mb-4">
                <li>
                    Visual Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores).Visual
                    }}</span>
                    points
                </li>
                <li>
                    Auditory Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores).Auditory
                    }}</span>
                    points
                </li>
                <li>
                    Kinaesthetic Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores).Kinesthethic
                    }}</span>
                    points
                </li>
                <li>
                    Reading/Writing Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores)["Reading/Writing"]
                    }}</span>
                    points
                </li>
            </ul>
            <p class="mb-4">
                These scores help us understand which learning styles are most
                dominant in your behaviour.
            </p>

            <h4 class="text-md font-bold mb-2">Score Graph</h4>
            <Chart type="bar" :data="chart_data" :options="chart_options" />
            <p class="mb-4">
                The score graph shows your total scores for each learning style.
                Your Auditory Learning Style score is highlighted to demonstrate
                how it compares to other styles.
            </p>

            <h4 class="text-md font-bold mb-2">Primary Learning Style</h4>

            <div class="row">
                <div class="col-6">
                    <p class="mb-4">
                        Your primary learning style is
                        <strong>Auditory</strong>, meaning you learn best when
                        you hear information. Auditory learners excel when
                        information is presented through lectures, discussions,
                        and audio recordings. You likely enjoy conversations,
                        music, and using your listening skills to retain
                        knowledge.
                    </p>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-40 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/YourLearningStyle/1.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>

            <div class="row">
                <h4 class="text-md font-bold mb-4">
                    Interpretation of Results
                </h4>
                <h5 class="text-md font-bold mb-2">Auditory Learner</h5>
                <p class="mb-4">
                    As an Auditory Learner, you prefer to process information by
                    hearing it. Whether it’s listening to a teacher explain a
                    topic, participating in a group discussion, or reviewing
                    material by listening to recordings, you learn best when you
                    can engage with sound.
                </p>
                <h5 class="text-md font-bold mb-2">Characteristics</h5>
                <p>
                    You likely find that listening to explanations or discussing
                    ideas helps you absorb information more effectively. You may
                    enjoy conversations, audiobooks, and podcasts as ways to
                    gather and retain knowledge. Engaging with auditory material
                    keeps you focused and enhances your learning experience.
                </p>
            </div>
        </div>
    </div>

    <!-- Report 2 Auditory _ Kinesthethic Blend -->
    <div v-if="style == 'Auditory/Kinesthethic'">
        <!-- Content for Report 2 -->
        <div class="p-6">
            <h1 class="text-2xl font-bold mb-4">
                Introduction to Your Learning Style
            </h1>

            <p class="mb-4">
                Based on the assessment, your scores in the different learning
                styles are as follows:
            </p>

            <ul class="list-disc pl-6 mb-4">
                <li>
                    Visual Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores).Visual
                    }}</span>
                    points
                </li>
                <li>
                    Auditory Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores).Auditory
                    }}</span>
                    points
                </li>
                <li>
                    Kinaesthetic Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores).Kinesthethic
                    }}</span>
                    points
                </li>
                <li>
                    Reading/Writing Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores)["Reading/Writing"]
                    }}</span>
                    points
                </li>
            </ul>

            <p class="mb-4">
                These scores help us understand which learning styles are most
                dominant in your behaviour.
            </p>

            <div class="mb-4">
                <h4 class="text-xl font-bold">Score Graph:</h4>
                <Chart type="bar" :data="chart_data" :options="chart_options" />
            </div>

            <p class="mb-4">
                The score graph shows your total scores for each learning style.
                Your Auditory and Kinaesthetic scores are highlighted to show
                how they compare to other styles.
            </p>

            <h4 class="text-xl font-bold mb-4">Blended Learning Styles</h4>

            <div class="row">
                <div class="col-6">
                    <p class="mb-4">
                        Your learning style is a blend of Auditory and
                        Kinaesthetic, which means you excel when you can engage
                        both your listening skills and your physical senses in
                        the learning process. Auditory learners process
                        information best by hearing it, whether through
                        lectures, discussions, or audio recordings. Kinaesthetic
                        learners need to physically interact with the material
                        to fully absorb and retain it. Together, these styles
                        allow you to process and retain information by listening
                        while physically engaging with the content.
                    </p>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-40 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/YourLearningStyle/1.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h4 class="text-xl font-bold mb-4">
                        Interpretation of Results
                    </h4>

                    <p class="mb-4">
                        <strong>Auditory and Kinaesthetic Learner:</strong> As
                        an auditory-kinaesthetic learner, you benefit from both
                        hearing information and engaging in physical activity to
                        reinforce your understanding. You may find that spoken
                        explanations or discussions help you grasp concepts
                        clearly, and pairing these auditory inputs with hands-on
                        activities or movement allows you to retain the
                        information more effectively. This combination of
                        listening and doing enhances your learning experience
                        and helps you stay engaged with the material.
                    </p>

                    <h4 class="text-md font-bold mb-2">Characteristics:</h4>
                    <ul class="list-disc pl-6 mb-4">
                        <li class="mb-2">
                            <strong>Auditory:</strong> You learn best by
                            listening to spoken information. Lectures,
                            discussions, and audio recordings help you
                            understand and remember material.
                        </li>
                        <li>
                            <strong>Kinaesthetic:</strong> You excel through
                            hands-on activities. Engaging in experiments,
                            building models, and physical tasks aid your
                            comprehension and retention.
                        </li>
                    </ul>
                </div>
            </div>

            <p>
                By using both auditory and kinaesthetic strategies, you’ll be
                able to enhance your learning by receiving information in two
                complementary ways.
            </p>
        </div>
    </div>

    <!-- Report 3 Auditory _ Reading & Writing Blend-->
    <div v-if="style == 'Auditory/Reading/Writing'">
        <!-- Content for Report 3 -->
        <div class="p-6 space-y-6">
            <h4 class="text-md font-bold mb-2">
                Introduction to Your Learning Style
            </h4>
            <p class="">
                Based on the assessment, your scores in the different learning
                styles are as follows:
            </p>

            <ul class="list-disc pl-6 mb-4">
                <li>
                    Visual Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores).Visual
                    }}</span>
                    points
                </li>
                <li>
                    Auditory Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores).Auditory
                    }}</span>
                    points
                </li>
                <li>
                    Kinaesthetic Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores).Kinesthethic
                    }}</span>
                    points
                </li>
                <li>
                    Reading/Writing Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores)["Reading/Writing"]
                    }}</span>
                    points
                </li>
            </ul>

            <p class="">
                These scores help us understand which learning styles are most
                dominant in your behaviour.
            </p>

            <h1 class="text-xl font-bold text-gray-800">Score Graph:</h1>
            <Chart type="bar" :data="chart_data" :options="chart_options" />

            <p class="">
                The score graph shows your total scores for each learning style.
                Your Auditory and Reading/Writing scores are highlighted to show
                how they compare to other learning preferences.
            </p>

            <h1 class="text-xl font-bold text-gray-800">
                Blended Learning Styles
            </h1>

            <div class="row">
                <div class="col-6">
                    <p class="">
                        Your learning style is a combination of Auditory and
                        Reading/Writing, which means you excel when you can both
                        hear information and engage with it in written form. As
                        an Auditory Learner, you absorb information effectively
                        by listening to lectures, discussions, or audio
                        recordings. As a Reading/Writing Learner, you process
                        information by reading and writing, which helps you
                        understand and retain concepts. Combining these two
                        styles allows you to fully grasp material by hearing it
                        and then reinforcing it through writing.
                    </p>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-40 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/YourLearningStyle/1.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h1 class="text-xl font-bold text-gray-800">
                        Interpretation of Results
                    </h1>
                    <p class="">
                        <strong>Auditory and Reading/Writing Learner:</strong>
                        As a Blended Auditory and Reading/Writing Learner, you
                        benefit from listening to explanations and then
                        reinforcing that information through reading and
                        writing. Listening to lectures, podcasts, or discussions
                        helps you understand concepts; while writing notes,
                        summaries, or essays ensures you retain and organise the
                        information effectively. This blend allows you to
                        process information in multiple ways, improving both
                        comprehension and retention.
                    </p>

                    <h1 class="text-xl font-bold text-gray-800">
                        Characteristics
                    </h1>
                    <ul class="space-y-4">
                        <li class="flex items-start space-x-4">
                            <div>
                                <h5 class="font-bold text-gray-800">
                                    Auditory:
                                </h5>
                                <p class="">
                                    You learn best when you listen to spoken
                                    explanations. Verbal instructions,
                                    discussions, and audio materials help you
                                    grasp ideas quickly and effectively.
                                </p>
                            </div>
                        </li>
                        <li class="flex items-start space-x-4">
                            <div>
                                <h5 class="font-bold text-gray-800">
                                    Reading/Writing:
                                </h5>
                                <p class="">
                                    You excel when you can read and write about
                                    the material. You process information best
                                    through reading textbooks, taking notes, and
                                    organising your thoughts in written form.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <p class="">
                By using both auditory and reading/writing strategies, you’ll be
                able to enhance your learning by receiving information in two
                complementary ways.
            </p>
        </div>
    </div>

    <!-- Report 4 Auditory _ Visual Blend-->
    <div v-if="style == 'Auditory/Visual'">
        <!-- Content for Report 4 -->
        <div class="p-6 space-y-6">
            <h4 class="text-md font-bold mb-2">
                Introduction to Your Learning Style
            </h4>
            <p class="">
                Based on the assessment, your scores in the different learning
                styles are as follows:
            </p>
            <ul class="list-disc pl-6 mb-4">
                <li>
                    Visual Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores).Visual
                    }}</span>
                    points
                </li>
                <li>
                    Auditory Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores).Auditory
                    }}</span>
                    points
                </li>
                <li>
                    Kinaesthetic Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores).Kinesthethic
                    }}</span>
                    points
                </li>
                <li>
                    Reading/Writing Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores)["Reading/Writing"]
                    }}</span>
                    points
                </li>
            </ul>

            <p class="">
                These scores help us understand which learning styles are most
                dominant in your behaviour.
            </p>

            <h4 class="text-md font-bold text-gray-800">Score Graph</h4>
            <Chart type="bar" :data="chart_data" :options="chart_options" />

            <p class="">
                The score graph shows your total scores for each learning style.
                Your Auditory and Visual Learning Styles are highlighted to
                demonstrate how they compare to other styles.
            </p>

            <h4 class="text-md font-bold text-gray-800">
                Blended Learning Styles
            </h4>
            <div class="row">
                <div class="col-6">
                    <p class="">
                        Your learning style is a combination of Auditory and
                        Visual, meaning you learn best when you can hear
                        explanations and reinforce them by seeing the
                        information. Auditory learners absorb information
                        effectively through listening—whether in lectures,
                        podcasts, or discussions—while visual learners grasp
                        concepts by seeing them, through charts, diagrams, and
                        written materials. Combining these two styles allows you
                        to process and understand material in complementary
                        ways.
                    </p>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-40 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/YourLearningStyle/1.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h4 class="text-md font-bold text-gray-800">
                        Interpretation of Results
                    </h4>
                    <h5 class="font-bold text-xl text-gray-800">
                        Auditory and Visual Learner
                    </h5>
                    <p class="">
                        As an auditory and visual learner, you benefit from
                        hearing information and pairing it with visual aids. You
                        may find that spoken explanations help you understand
                        topics clearly, but you can enhance that understanding
                        by looking at related visuals like diagrams or notes.
                    </p>

                    <h5 class="text-md font-bold text-gray-800">
                        Characteristics
                    </h5>
                    <ul class="space-y-2">
                        <li>
                            <strong class="text-gray-800">Auditory</strong>: You
                            learn best when you listen to discussions, lectures,
                            or podcasts. Verbal explanations help you grasp
                            ideas quickly.
                        </li>
                        <li>
                            <strong class="text-gray-800">Visual</strong>:
                            Visual aids like diagrams, charts, and notes help
                            reinforce what you’ve heard, giving you a
                            well-rounded understanding.
                        </li>
                    </ul>
                </div>
            </div>

            <p class="">
                By using both auditory and visual strategies, you’ll be able to
                enhance your learning by receiving information in two
                complementary ways.
            </p>
        </div>
    </div>

    <!-- Report 5 Kinesthethic _ Auditory Blend-->
    <div v-if="style == 'Kinesthethic/Auditory'">
        <!-- Content for Report 5 -->
        <div class="p-6 space-y-6">
            <h4 class="text-md font-bold mb-2">
                Introduction to Your Learning Style
            </h4>
            <p class="">
                Based on the assessment, your scores in the different learning
                styles are as follows:
            </p>
            <ul class="list-disc pl-6 mb-4">
                <li>
                    Visual Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores).Visual
                    }}</span>
                    points
                </li>
                <li>
                    Auditory Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores).Auditory
                    }}</span>
                    points
                </li>
                <li>
                    Kinaesthetic Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores).Kinesthethic
                    }}</span>
                    points
                </li>
                <li>
                    Reading/Writing Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores)["Reading/Writing"]
                    }}</span>
                    points
                </li>
            </ul>

            <p class="">
                These scores help us understand which learning styles are most
                dominant in your behaviour.
            </p>

            <h4 class="text-md font-bold text-gray-800">Score Graph</h4>
            <Chart type="bar" :data="chart_data" :options="chart_options" />

            <p class="">
                The score graph shows your total scores for each learning style.
                Your Kinaesthetic and Auditory scores are highlighted to
                illustrate how they compare to other learning preferences.
            </p>

            <h4 class="text-md font-bold text-gray-800">
                Blended Learning Styles
            </h4>
            <div class="row">
                <div class="col-6">
                    <p class="">
                        Your learning style is a blend of Kinaesthetic and
                        Auditory methods, which means you excel when you can
                        both physically interact with the material and hear
                        information. As a Kinaesthetic Learner, you benefit from
                        hands-on activities and physical engagement, while as an
                        Auditory Learner, you gain from listening to
                        explanations, discussions, and audio resources. This
                        combination allows you to understand and retain
                        information by integrating both physical and auditory
                        elements.
                    </p>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-40 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/YourLearningStyle/1.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h4 class="text-md font-bold text-gray-800">
                        Interpretation of Results
                    </h4>
                    <p class="">
                        <h5 class=""><strong>Kinaesthetic and Auditory Learner: </strong></h5> As a Blended
                        Kinaesthetic and Auditory Learner, you process
                        information most effectively when combining physical
                        interaction with auditory input. You benefit from
                        listening to explanations or discussions while actively
                        engaging in related physical tasks or experiments. This
                        dual approach helps reinforce your understanding by
                        involving both sensory modalities—hearing and
                        doing—thereby enhancing your overall learning
                        experience.
                    </p>

                    <h4 class="text-md font-bold text-gray-800">
                        Characteristics
                    </h4>
                    <ul class="space-y-2">
                        <li>
                            <h5 class=""><strong>Kinaesthetic</strong></h5>
                            You learn best through physical activities and
                            hands-on experiences. Engaging in tasks like
                            building models, conducting experiments, or using
                            physical manipulatives helps you grasp and retain
                            information.
                        </li>
                        <li>
                            <h5 class=""><strong>Auditory</strong></h5>
                            You excel when learning through listening. Verbal
                            instructions, discussions, and audio materials help
                            you understand and remember content. You benefit
                            from hearing concepts explained and engaging in
                            verbal exchanges.
                        </li>
                    </ul>
                </div>
            </div>

            <p class="">
                By using both kinaesthetic and auditory strategies, you’ll be
                able to enhance your learning by receiving information in two
                complementary ways.
            </p>
        </div>
    </div>

    <!-- Report 6 Kinesthethic _ Reading & Writing -->
    <div v-if="style == 'Kinesthethic/Reading/Writing'">
        <!-- Content for Report 6 -->
        <div class="p-6 space-y-6">
            <h4 class="text-md font-bold mb-2">
                Introduction to Your Learning Style
            </h4>
            <p class="">
                Based on the assessment, your scores in the different learning
                styles are as follows:
            </p>
            <ul class="list-disc pl-6 mb-4">
                <li>
                    Visual Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores).Visual
                    }}</span>
                    points
                </li>
                <li>
                    Auditory Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores).Auditory
                    }}</span>
                    points
                </li>
                <li>
                    Kinaesthetic Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores).Kinesthethic
                    }}</span>
                    points
                </li>
                <li>
                    Reading/Writing Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores)["Reading/Writing"]
                    }}</span>
                    points
                </li>
            </ul>
            <p class="">
                These scores help us understand which learning styles are most
                dominant in your behaviour.
            </p>

            <h4 class="text-md font-bold text-gray-800">Score Graph:</h4>
            <Chart type="bar" :data="chart_data" :options="chart_options" />
            <p class="">
                The score graph shows your total scores for each learning style.
                Your Kinaesthetic and Reading/Writing scores are highlighted to
                show how they compare to other learning preferences.
            </p>

            <h4 class="text-md font-bold text-gray-800">
                Blended Learning Styles
            </h4>
            <div class="row">
                <div class="col-6">
                    <p class="">
                        Your learning style is a combination of <b>Kinaesthetic</b> and
                        <b>Reading/Writing</b> methods. This means you excel when you
                        can physically engage with the material, such as through
                        hands-on activities, and when you read and write about
                        the content.<br> As a <b>Kinaesthetic Learner</b>, you thrive in
                        environments where you can physically interact with
                        concepts, using movement, tools, and tactile experiences
                        to grasp information. <br>As a <b>Reading/Writing Learner</b>, you
                        prefer to process information through reading texts,
                        taking detailed notes, and writing summaries. Combining
                        these two styles allows you to deeply understand
                        material by first engaging with it physically and then
                        reinforcing it through written methods.
                    </p>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-40 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/YourLearningStyle/1.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h4 class="text-md font-bold text-gray-800">
                        Interpretation of Results
                    </h4>
                    <p class="">
                        <h5 class="text-lg font-bold text-gray-800"
                            >Kinaesthetic and Reading/Writing Learner:</h5
                        >
                        As a Blended <b>Kinaesthetic</b> and <b>Reading/Writing Learner</b>,
                        you benefit from physically engaging with material
                        before processing it in written form. This approach
                        allows you to internalise concepts through hands-on
                        activities and then reinforce your learning by reading
                        textbooks, taking notes, and writing summaries. You
                        might find it helpful to move around while reviewing
                        written material or to use tools like flashcards or
                        physical models to stay engaged. This combination of
                        learning styles ensures you retain information more
                        effectively by engaging both your physical and mental
                        faculties.
                    </p>

                    <ul class="space-y-4 ">
                        <h5 class="text-lg font-bold text-gray-800">
                            Characteristics:
                        </h5>

                        <li>
                            <strong class="text-gray-800">Kinaesthetic:</strong>
                            You learn best by doing and moving. Physical
                            activities such as building, acting out scenarios,
                            or using tactile tools help you understand concepts
                            more easily.
                        </li>
                        <li>
                            <strong class="text-gray-800"
                                >Reading/Writing:</strong
                            >
                            You excel when you can write about what you’ve
                            learned. Taking detailed notes, writing essays, and
                            summarising key points help reinforce your
                            understanding.
                        </li>
                    </ul>
                </div>
            </div>

            <p class="">
                By using both kinaesthetic and reading/writing strategies,
                you’ll be able to enhance your learning by receiving information
                in two complementary ways.
            </p>
        </div>
    </div>

    <!-- Report 7 Kinesthethic _ Visual Blend-->
    <div v-if="style == 'Kinesthethic/Visual'">
        <!-- Content for Report 7 -->
        <div class="p-6 space-y-6">
            <h4 class="text-md font-bold mb-2">
                Introduction to Your Learning Style
            </h4>
            <p class="">
                Based on the assessment, your scores in the different learning
                styles are as follows:
            </p>
            <ul class="list-disc pl-6 mb-4">
                <li>
                    Visual Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores).Visual
                    }}</span>
                    points
                </li>
                <li>
                    Auditory Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores).Auditory
                    }}</span>
                    points
                </li>
                <li>
                    Kinaesthetic Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores).Kinesthethic
                    }}</span>
                    points
                </li>
                <li>
                    Reading/Writing Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores)["Reading/Writing"]
                    }}</span>
                    points
                </li>
            </ul>

            <p class="">
                These scores help us understand which learning styles are most
                dominant in your behaviour.
            </p>

            <h4 class="text-md font-bold text-gray-800">Score Graph:</h4>
            <Chart type="bar" :data="chart_data" :options="chart_options" />

            <p class="">
                The score graph shows your total scores for each learning style.
                Your Kinaesthetic and Visual Learning Styles are highlighted to
                demonstrate how they compare to other styles.
            </p>

            <h4 class="text-md font-bold text-gray-800">
                Blended Learning Styles
            </h4>
            <div class="row">
                <div class="col-6">
                    <p class="">
                        Your learning style is a combination of Kinaesthetic and
                        Visual, meaning you learn best when you can physically
                        engage with the material and reinforce it with visual
                        aids. Kinaesthetic learners thrive on hands-on
                        activities, learning by doing and movement, while visual
                        learners absorb information by seeing diagrams, charts,
                        and images. Blending these styles allows you to actively
                        engage with material while using visuals to support your
                        learning.
                    </p>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-40 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/YourLearningStyle/1.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h4 class="text-md font-bold text-gray-800">
                        Interpretation of Results
                    </h4>
                    <p class="">
                        <h5 class="text-md font-bold text-gray-800"
                            >Kinaesthetic and Visual Learner:</h5
                        >
                        As a kinaesthetic and visual learner, you process
                        information most effectively through physical engagement
                        and visual aids. You learn best by moving, handling
                        objects, or performing tasks while reinforcing these
                        concepts through visual tools like charts or diagrams.
                    </p>

                    <ul class="space-y-2 ">
                        <h5 class="text-md font-bold text-gray-800">
                            Characteristics
                        </h5>

                        <li>
                            <strong class="text-gray-800">Kinaesthetic:</strong>
                            You excel when you can interact with material
                            through hands-on activities or movement, such as
                            building, experimenting, or performing actions.
                        </li>
                        <li>
                            <strong class="text-gray-800">Visual:</strong> You
                            strengthen your understanding by seeing visual
                            representations of concepts, including diagrams,
                            written notes, or illustrations.
                        </li>
                    </ul>
                </div>
            </div>

            <p class="">
                By using both kinaesthetic and visual strategies, you’ll be able
                to enhance your learning by receiving information in two
                complementary ways.
            </p>
        </div>
    </div>

    <!-- Report 8 Kinesthethic-->
    <div v-if="style == 'Kinesthethic'">
        <!-- Content for Report 8 -->
        <div class="space-y-6 p-6">
            <h1 class="text-2xl font-bold text-gray-800">
                Introduction to Your Learning Style
            </h1>
            <p class="">
                Based on the assessment, your scores in the different learning
                styles are as follows:
            </p>
            <ul class="list-disc pl-6 mb-4">
                <li>
                    Visual Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores).Visual
                    }}</span>
                    points
                </li>
                <li>
                    Auditory Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores).Auditory
                    }}</span>
                    points
                </li>
                <li>
                    Kinaesthetic Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores).Kinesthethic
                    }}</span>
                    points
                </li>
                <li>
                    Reading/Writing Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores)["Reading/Writing"]
                    }}</span>
                    points
                </li>
            </ul>
            <p class="">
                These scores help us understand which learning styles are most
                dominant in your behaviour.
            </p>

            <h4 class="text-2xl font-bold text-gray-800">Score Graph</h4>
            <Chart type="bar" :data="chart_data" :options="chart_options" />
            <p class="">
                The score graph shows your total scores for each learning style.
                Your Kinaesthetic Learning Style score is highlighted to
                demonstrate how it compares to other styles.
            </p>

            <h4 class="text-xl font-bold text-gray-800">
                Primary Learning Style
            </h4>
            <div class="row">
                <div class="col-6">
                    <p class="">
                        Your primary learning style is
                        <strong class="text-gray-800">Kinaesthetic</strong>,
                        meaning you learn best when you hear information.
                        Kinaesthetic learners excel through hands-on activities,
                        movement, and real-world experiences. You likely enjoy
                        learning by doing and often prefer interactive projects
                        over listening or watching.
                    </p>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-40 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/YourLearningStyle/1.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h4 class="text-xl font-bold text-gray-800">
                        Interpretation of Results
                    </h4>
                    <p class="">
                        <strong class="text-gray-800"
                            >Kinaesthetic Learner:</strong
                        >
                        As a Kinaesthetic Learner, you process information by
                        using your body and interacting physically with the
                        material. Whether it’s building models, performing
                        experiments, or physically engaging with your
                        environment, you learn best when you're actively doing
                        something.
                    </p>
                    <p class="">
                        <strong class="text-gray-800">Characteristics:</strong>
                        You may find it easier to understand concepts through
                        hands-on experiences, such as role-playing, building, or
                        manipulating objects. You’re likely to excel in
                        practical tasks that involve movement and enjoy learning
                        through activities that require you to be physically
                        engaged.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Report 9 Reading & Writing _ Auditory Blend -->
    <div v-if="style == 'Reading/Writing/Auditory'">
        <!-- Content for Report 9 -->
        <div class="space-y-4 p-4">
            <h1 class="text-2xl font-bold">
                Introduction to Your Learning Style
            </h1>
            <p>
                Based on the assessment, your scores in the different learning
                styles are as follows:
            </p>
            <ul class="list-disc pl-6 mb-4">
                <li>
                    Visual Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores).Visual
                    }}</span>
                    points
                </li>
                <li>
                    Auditory Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores).Auditory
                    }}</span>
                    points
                </li>
                <li>
                    Kinaesthetic Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores).Kinesthethic
                    }}</span>
                    points
                </li>
                <li>
                    Reading/Writing Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores)["Reading/Writing"]
                    }}</span>
                    points
                </li>
            </ul>
            <p>
                These scores help us understand which learning styles are most
                dominant in your behaviour.
            </p>

            <div>
                <h4 class="text-xl font-bold">Score Graph:</h4>
                <Chart type="bar" :data="chart_data" :options="chart_options" />

                <p>
                    The score graph shows your total scores for each learning
                    style. Your Reading/Writing and Auditory learning styles are
                    highlighted to show how they compare to other learning
                    preferences.
                </p>
            </div>

            <div>
                <h4 class="text-xl font-bold">Blended Learning Styles</h4>
                <div class="row">
                    <div class="col-6">
                        <p>
                            Your learning style is a combination of
                            <b>Reading/Writing</b> and <b> Auditory</b>, which means you excel
                            when you can read and write about information and
                            then reinforce it by listening to explanations or
                            discussions.<br> As a <b>Reading/Writing Learner</b>, you
                            process information effectively through reading
                            books, articles, and taking notes. <br>As an <b>Auditory
                                Learner </b>, you retain information by listening to
                            lectures, podcasts, or group discussions. Combining
                            these two styles allows you to absorb material more
                            thoroughly by first reading and writing, then
                            reviewing the content through listening.
                        </p>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-40 h-auto object-contain"
                                :src="'/images/reports-images/TeensLearningStyleImages/YourLearningStyle/1.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div>
                        <h4 class="text-xl font-bold">
                            Interpretation of Results
                        </h4>
                        <p>
                            <h5 class="text-xl font-bold"
                                >Reading/Writing and Auditory Learner:</h5
                            >
                            As a Blended Reading/Writing and Auditory Learner,
                            you benefit from reading and writing about a topic
                            before listening to explanations or discussions to
                            reinforce your understanding. You are likely to
                            succeed when you read textbooks, take detailed
                            notes, and summarise your findings in writing.
                            Following this, listening to audio recordings or
                            engaging in discussions helps clarify and deepen
                            your comprehension. This blend of learning styles
                            ensures that you grasp material through both written
                            and auditory methods, which helps you retain
                            information effectively.
                        </p>
                    </div>

                    <div>
                        <h5 class="text-xl font-bold">Characteristics:</h5>
                        <div class="space-y-2">
                            <h4 class="text-lg font-bold">Reading/Writing:</h4>
                            <p>
                                You process information best when you can read
                                it and write about it. Taking notes, summarising
                                material, and organising thoughts in written
                                form help you retain information.
                            </p>

                            <h4 class="font-bold text-lg">Auditory:</h4>
                            <p>
                                You also benefit from hearing concepts explained
                                aloud. Listening to verbal instructions,
                                lectures, or discussions further reinforces your
                                understanding.
                            </p>

                            <p>
                                By using both reading/writing and auditory
                                strategies, you’ll be able to enhance your
                                learning by receiving information in two
                                complementary ways.
                            </p>
                        </div>
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
                Introduction to Your Learning Style
            </h4>
            <p class="mb-4">
                Based on the assessment, your scores in the different learning
                styles are as follows:
            </p>

            <ul class="list-disc pl-6 mb-4">
                <li>
                    Visual Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores).Visual
                    }}</span>
                    points
                </li>
                <li>
                    Auditory Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores).Auditory
                    }}</span>
                    points
                </li>
                <li>
                    Kinaesthetic Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores).Kinesthethic
                    }}</span>
                    points
                </li>
                <li>
                    Reading/Writing Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores)["Reading/Writing"]
                    }}</span>
                    points
                </li>
            </ul>

            <h4 class="text-md font-bold mt-6 mb-2">Score Graph</h4>
            <Chart type="bar" :data="chart_data" :options="chart_options" />

            <p class="mt-6 mb-4">
                The score graph displays your total scores for each learning
                style. Your <strong>Reading/Writing</strong> and
                <strong>Kinaesthetic</strong> learning styles are highlighted to
                show how they compare to other preferences.
            </p>

            <h4 class="text-md font-bold mt-6 mb-2">Blended Learning Styles</h4>
            <div class="row">
                <div class="col-6">
                    <p class="mb-4">
                        Your learning style is a combination of
                        <strong>Reading/Writing</strong> and
                        <strong>Kinaesthetic</strong> methods. You excel when
                        you can read and write about information and then
                        reinforce it by engaging in physical activities. As a
                        <strong>Reading/Writing Learner</strong>, you process
                        information effectively by reading books, articles, and
                        writing notes or summaries. As a
                        <strong>Kinaesthetic Learner</strong>, you retain
                        information by interacting physically with the material,
                        whether through hands-on activities, building models, or
                        engaging in role-playing. This blend allows you to first
                        absorb material through reading and writing and then
                        solidify your understanding through physical engagement.
                    </p>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-40 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/YourLearningStyle/1.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h4 class="text-md font-bold mt-6 mb-2">
                        Interpretation of Results
                    </h4>
                    <p class="mb-4">
                        <h5 class="text-md font-bold mt-6 mb-2"
                            >Reading/Writing and Kinaesthetic Learner:</h5
                        >
                        As a Blended <strong>Reading/Writing</strong> and
                        <strong>Kinaesthetic Learner</strong>, you benefit from
                        reading and writing about a topic before reinforcing
                        that knowledge with physical interaction. You may find
                        it helpful to write notes, outlines, or summaries after
                        reading textbooks or handouts. Then, applying that
                        knowledge through hands-on activities or physical
                        engagement further solidifies your learning. This
                        combination ensures that you fully grasp material by
                        engaging both your reading/writing and kinaesthetic
                        strengths.
                    </p>

                    <h5 class="text-md font-bold mt-6 mb-2">Characteristics</h5>
                    <ul class="list-disc pl-5">
                        <li>
                            <strong>Reading/Writing:</strong> You learn best
                            when you can read and write about what you’ve
                            learned. Taking notes, summarising information, and
                            organising your thoughts in writing help you process
                            and retain material.
                        </li>
                        <li class="mt-2">
                            <strong>Kinaesthetic:</strong> You also thrive when
                            learning through hands-on activities. Engaging
                            physically with concepts through movement, building,
                            or experimentation reinforces your understanding of
                            the material.
                        </li>
                    </ul>
                </div>
            </div>

            <p class="mt-6">
                By using both reading/writing and kinaesthetic strategies,
                you’ll be able to enhance your learning by receiving information
                in two complementary ways.
            </p>
        </div>
    </div>

    <!-- Report 11 Reading & Writing _ Visual Blend -->
    <div v-if="style == 'Reading/Writing/Visual'">
        <!-- Content for Report 11 -->
        <div class="p-6">
            <h4 class="text-2xl font-bold mb-4">
                Introduction to Your Learning Style
            </h4>
            <p class="mb-4">
                Based on the assessment, your scores in the different learning
                styles are as follows:
            </p>

            <ul class="list-disc pl-6 mb-4">
                <li>
                    Visual Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores).Visual
                    }}</span>
                    points
                </li>
                <li>
                    Auditory Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores).Auditory
                    }}</span>
                    points
                </li>
                <li>
                    Kinaesthetic Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores).Kinesthethic
                    }}</span>
                    points
                </li>
                <li>
                    Reading/Writing Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores)["Reading/Writing"]
                    }}</span>
                    points
                </li>
            </ul>

            <p class="mb-4">
                These scores help us understand which learning styles are most
                dominant in your behaviour.
            </p>

            <h4 class="text-md font-bold mb-2">Score Graph:</h4>
            <Chart type="bar" :data="chart_data" :options="chart_options" />

            <p class="mb-6">
                The score graph shows your total scores for each learning style.
                Your Reading/Writing and Visual learning style scores are
                highlighted to demonstrate how they compare to other styles.
            </p>

            <h4 class="text-md font-bold mb-2">Blended Learning Styles</h4>
            <div class="row">
                <div class="col-6">
                    <p class="mb-4">
                        Your learning style is a combination of <b>Reading/Writing</b>
                        and <b>Visual</b>, which means you learn best when you interact
                        with written material while also using visual aids to
                        reinforce your understanding. As a <b>reading/writing
                            learner</b>, you excel with text-based resources like books,
                        notes, and written summaries. However, visual tools such
                        as charts, diagrams, and infographics are also valuable
                        to help you organise and retain information.
                    </p>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-40 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/YourLearningStyle/1.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h4 class="text-md font-bold mb-2">
                        Interpretation of Results
                    </h4>
                    <p class="mb-4">
                        As a <b>Reading/Writing and Visual learner</b>, you process
                        information most effectively through written text, such
                        as reading textbooks and writing notes, but you also
                        benefit from seeing information visually. This means
                        that while reading and writing are your primary
                        strengths, adding visual aids like diagrams and charts
                        enhances your understanding of complex concepts. You
                        excel when you combine both approaches—reading or
                        writing to internalise details and then using visual
                        elements to organise and reinforce those ideas.
                    </p>

                    <h5 class="text-md font-bold mb-2">Characteristics</h5>
                    <ul class="list-disc pl-5 mb-6">
                        <li>
                            <strong>Reading/Writing:</strong> You likely prefer
                            written instructions, enjoy reading for learning,
                            and thrive in environments where written material is
                            provided. Writing down key points helps solidify
                            your understanding.
                        </li>
                        <li class="mt-2">
                            <strong>Visual:</strong> You excel when information
                            is presented through visual formats like diagrams
                            and mind maps. Visual aids allow you to see the
                            structure of information and make it easier to
                            recall.
                        </li>
                    </ul>
                </div>
            </div>

            <p class="mb-4">
                By combining these two styles, you can strengthen your learning
                by seeing information and then expressing it in writing,
                enhancing your ability to understand and retain material.
            </p>
        </div>
    </div>

    <!-- Report 12 Reading & Writing-->
    <div v-if="style == 'Reading/Writing'">
        <!-- Content for Report 12 -->
        <div class="p-6">
            <h4 class="text-2xl font-bold mb-4">
                Introduction to Your Learning Style
            </h4>

            <p class="mb-6">
                Based on the assessment, your scores in the different learning
                styles are as follows:
            </p>
            <ul class="list-disc pl-6 mb-4">
                <li>
                    Visual Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores).Visual
                    }}</span>
                    points
                </li>
                <li>
                    Auditory Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores).Auditory
                    }}</span>
                    points
                </li>
                <li>
                    Kinaesthetic Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores).Kinesthethic
                    }}</span>
                    points
                </li>
                <li>
                    Reading/Writing Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores)["Reading/Writing"]
                    }}</span>
                    points
                </li>
            </ul>

            <p class="mb-6">
                These scores help us understand which learning styles are most
                dominant in your behaviour.
            </p>

            <h4 class="text-md font-bold mb-4">Score Graph:</h4>
            <div class="mb-6">
                <Chart type="bar" :data="chart_data" :options="chart_options" />
            </div>

            <p class="mb-6">
                The score graph shows your total scores for each learning style.
                Reading/Writing Learning Style score is highlighted to
                demonstrate how it compares to other styles.
            </p>

            <h4 class="text-md font-bold mb-4">Primary Learning Style</h4>
            <div class="row">
                <div class="col-6">
                    <p class="mb-6">
                        Your primary learning style is
                        <strong>Reading/Writing</strong>, which means you learn
                        best when you interact with written material. Whether
                        through reading textbooks, writing notes, or organising
                        thoughts into written formats, you absorb information
                        most effectively by engaging with the text.
                    </p>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-40 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/YourLearningStyle/1.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h4 class="text-md font-bold mb-4">
                        Interpretation of Results
                    </h4>
                    <h5 class="text-md font-bold mb-2">
                        Reading/Writing Learner
                    </h5>
                    <p class="mb-6">
                        As a Reading/Writing Learner, you process information by
                        engaging with written words. You excel when reading
                        books, taking detailed notes, and organising your
                        thoughts in writing. You likely enjoy reading and may
                        find it easier to understand material through written
                        explanations rather than hands-on or verbal approaches.
                    </p>

                    <h5 class="text-md font-bold mb-2">Characteristics</h5>
                    <ul class="list-disc pl-5 mb-6">
                        <li>
                            You are likely drawn to reading books, writing
                            summaries, and expressing your understanding through
                            essays or reports.
                        </li>
                        <li>
                            Writing down key concepts helps you retain
                            information, and you're good at recalling material
                            that you've read or written about.
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
                Introduction to Your Learning Style
            </h4>

            <p class="mb-4">
                Based on the assessment, your scores in the different learning
                styles are as follows:
            </p>

            <ul class="list-disc pl-6 mb-4">
                <li>
                    Visual Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores).Visual
                    }}</span>
                    points
                </li>
                <li>
                    Auditory Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores).Auditory
                    }}</span>
                    points
                </li>
                <li>
                    Kinaesthetic Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores).Kinesthethic
                    }}</span>
                    points
                </li>
                <li>
                    Reading/Writing Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores)["Reading/Writing"]
                    }}</span>
                    points
                </li>
            </ul>

            <p class="mb-6">
                These scores help us understand which learning styles are most
                dominant in your behaviour.
            </p>

            <h4 class="text-md font-bold mb-2">Score Graph:</h4>

            <Chart type="bar" :data="chart_data" :options="chart_options" />

            <p class="mb-6">
                The score graph shows your total scores for each learning style.
                Your Visual and Auditory Learning Styles are highlighted to
                demonstrate how they compare to other styles.
            </p>

            <h4 class="text-md font-bold mb-2">Blended Learning Styles</h4>
            <div class="row">
                <div class="col-6">
                    <p class="mb-6">
                        Your learning style is a combination of both Visual and
                        Auditory, meaning you learn best when you can see
                        information and hear it discussed. Visual learners
                        thrive with images, diagrams, and written notes, while
                        auditory learners excel when they hear lectures,
                        discussions, and explanations. Combining these two
                        styles allows you to take in information in different
                        ways, enhancing your overall understanding.
                    </p>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-40 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/YourLearningStyle/1.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h4 class="text-md font-bold mb-2">
                        Interpretation of Results
                    </h4>
                    <p class="mb-6">
                        <strong>Visual and Auditory Learner:</strong> As a
                        blended learner, you process information by seeing and
                        hearing it. You likely find that you remember
                        information best when you can both visualise it and hear
                        someone explain it. Watching videos, using visual aids
                        like charts and diagrams, and listening to lectures or
                        discussions helps reinforce your learning.
                    </p>

                    <h5 class="text-md font-bold mb-2">Characteristics:</h5>
                    <ul class="list-disc pl-5 mb-6">
                        <li>
                            <strong>Visual:</strong> You benefit from seeing
                            concepts presented visually, such as diagrams,
                            charts, or written instructions.
                        </li>
                        <li>
                            <strong>Auditory:</strong> You also excel when
                            hearing explanations or engaging in discussions,
                            whether through lectures, podcasts, or group
                            conversations.
                        </li>
                    </ul>
                </div>
            </div>

            <p class="mb-6">
                By using both visual and auditory strategies, you’ll be able to
                enhance your learning by receiving information in two
                complementary ways.
            </p>
        </div>
    </div>

    <!-- Report 14 Visual _ Kinesthethic Blend-->
    <div v-if="style == 'Visual/Kinesthethic'">
        <!-- Content for Report 14 -->
        <div class="p-6">
            <h4 class="text-2xl font-bold mb-4">
                Introduction to Your Learning Style
            </h4>

            <p class="mb-6">
                Based on the assessment, your scores in the different learning
                styles are as follows:
            </p>

            <ul class="list-disc pl-6 mb-4">
                <li>
                    Visual Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores).Visual
                    }}</span>
                    points
                </li>
                <li>
                    Auditory Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores).Auditory
                    }}</span>
                    points
                </li>
                <li>
                    Kinaesthetic Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores).Kinesthethic
                    }}</span>
                    points
                </li>
                <li>
                    Reading/Writing Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores)["Reading/Writing"]
                    }}</span>
                    points
                </li>
            </ul>

            <p class="mb-6">
                These scores help us understand which learning styles are most
                dominant in your behaviour.
            </p>

            <h4 class="text-md font-bold mb-3">Score Graph:</h4>
            <Chart type="bar" :data="chart_data" :options="chart_options" />

            <p class="mb-6">
                The score graph shows your total scores for each learning style.
                Your Visual and Kinaesthetic Learning Styles are highlighted to
                demonstrate how they compare to other styles.
            </p>

            <h4 class="text-md font-bold mb-3">Blended Learning Styles</h4>
            <div class="row">
                <div class="col-6">
                    <p class="mb-6">
                        Your learning style is a combination of Visual and
                        Kinaesthetic, which means you learn best when you can
                        see and interact with the material. Visual learners
                        grasp concepts through diagrams, images, and charts,
                        while kinaesthetic learners excel when they can engage
                        physically with the subject, such as through hands-on
                        activities or movement. By combining these two styles,
                        you reinforce your learning by seeing information and
                        actively interacting with it.
                    </p>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-40 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/YourLearningStyle/1.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h4 class="text-md font-bold mb-3">
                        Interpretation of Results
                    </h4>
                    <p class="mb-6">
                        <h5 class="text-md font-bold mb-3">Visual and Kinaesthetic Learner: </h5> As a visual and
                        kinaesthetic learner, you benefit from using both sight
                        and physical activity to process and retain information.
                        You likely remember material best when you can see it
                        displayed visually, like in charts or diagrams, and when
                        you can apply it physically through movement,
                        experiments, or hands-on activities.
                    </p>

                    <h5 class="text-md font-bold mb-3">Characteristics:</h5>
                    <ul class="list-disc pl-5 mb-6">
                        <li>
                            <strong>Visual:</strong> You understand concepts
                            more effectively by seeing visual representations
                            such as diagrams, charts, or written notes.
                        </li>
                        <li class="mt-2">
                            <strong>Kinaesthetic:</strong> You excel when you
                            can physically engage with learning tasks, such as
                            building models, conducting experiments, or using
                            hands-on tools.
                        </li>
                    </ul>
                </div>
            </div>

            <p class="mb-6">
                By using both visual and kinaesthetic strategies, you’ll be able
                to enhance your learning by receiving information in two
                complementary ways.
            </p>
        </div>
    </div>

    <!-- Report 15 Visual _ Reading & Writing-->
    <div v-if="style == 'Visual/Reading/Writing'">
        <!-- Content for Report 15 -->
        <div class="p-6">
            <h4 class="text-2xl font-bold mb-4">
                Introduction to Your Learning Style
            </h4>

            <p class="mb-4">
                Based on the assessment, your scores in the different learning
                styles are as follows:
            </p>
            <ul class="list-disc pl-6 mb-4">
                <li>
                    Visual Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores).Visual
                    }}</span>
                    points
                </li>
                <li>
                    Auditory Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores).Auditory
                    }}</span>
                    points
                </li>
                <li>
                    Kinaesthetic Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores).Kinesthethic
                    }}</span>
                    points
                </li>
                <li>
                    Reading/Writing Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores)["Reading/Writing"]
                    }}</span>
                    points
                </li>
            </ul>

            <p class="mb-4">
                These scores help us understand which learning styles are most
                dominant in your behaviour.
            </p>

            <h4 class="text-md font-bold mb-4">Score Graph:</h4>
            <Chart type="bar" :data="chart_data" :options="chart_options" />

            <p class="mb-6">
                The score graph shows your total scores for each learning style.
                Your Visual and Reading/Writing Learning Styles are highlighted
                to demonstrate how they compare to other styles.
            </p>

            <h4 class="text-md font-bold mb-4">Blended Learning Styles</h4>
            <p>
                Your learning style is a combination of Visual and Reading/Writing, which means you learn best by seeing information and engaging with text. Visual learners excel when they can see concepts through images, diagrams, and charts, while Reading/Writing learners absorb information most effectively by reading, writing, and organising text. This blend allows you to absorb information visually while reinforcing it through written summaries or notes.

            </p>

            <div class="row">
                <div class="col-12">
                    <h4 class="text-md font-bold mb-4">
                        Interpretation of Results
                    </h4>
                    <p class="mb-6">
                        <h5 class="text-md font-bold mb-4">Visual and Reading/Writing Learner:</h5> As
                        a visual and reading/writing learner, you benefit from
                        seeing concepts presented visually and reinforcing your
                        understanding by reading and writing about them. You are
                        likely to perform well when you can read textbooks or
                        articles, take notes, and create visual summaries like
                        charts or diagrams.
                    </p>

                    <h5 class="text-md font-bold mb-4">Characteristics:</h5>
                    <ul class="list-disc pl-5 mb-6">
                        <li>
                            <strong>Visual:</strong> You learn best when
                            concepts are presented visually, through diagrams,
                            charts, and other visual aids.
                        </li>
                        <li class="mt-2">
                            <strong>Reading/Writing:</strong> You reinforce your
                            understanding by reading about topics and writing
                            summaries, notes, or essays that help organise and
                            clarify your thoughts.
                        </li>
                    </ul>
                </div>
            </div>

            <p>
                By combining these two styles, you can strengthen your learning
                by seeing information and then expressing it in writing,
                enhancing your ability to understand and retain material.
            </p>
        </div>
    </div>

    <!-- Report 16 Visual-->
    <div v-if="style == 'Visual'">
        <!-- Content for Report 16 -->
        <div class="p-6">
            <h4 class="text-2xl font-bold mb-4">
                Introduction to Your Learning Style
            </h4>

            <p class="mb-4">
                Based on the assessment, your scores in the different learning
                styles are as follows:
            </p>
            <ul class="list-disc pl-6 mb-4">
                <li>
                    Visual Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores).Visual
                    }}</span>
                    points
                </li>
                <li>
                    Auditory Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores).Auditory
                    }}</span>
                    points
                </li>
                <li>
                    Kinaesthetic Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores).Kinesthethic
                    }}</span>
                    points
                </li>
                <li>
                    Reading/Writing Learner:
                    <span class="font-bold">{{
                        JSON.parse(parsedLearnScores)["Reading/Writing"]
                    }}</span>
                    points
                </li>
            </ul>

            <p class="mb-4">
                These scores help us understand which learning styles are most
                dominant in your behaviour.
            </p>

            <h4 class="text-md font-bold mb-4">Score Graph:</h4>
            <Chart type="bar" :data="chart_data" :options="chart_options" />

            <p class="mb-4">
                The score graph shows your total scores for each learning style.
                Your Visual Learning Style score is highlighted to demonstrate
                how it compares to other styles.
            </p>

            <h4 class="text-md font-bold mb-4">Primary Learning Style</h4>
            <div class="row">
                <div class="col-6">
                    <p>
                        Your primary learning style is Visual. This means that
                        you learn best when information is presented in a way
                        that you can see and visualise. Visual learners like you
                        tend to excel with materials such as diagrams, charts,
                        and images, which help you understand and remember
                        concepts more effectively.
                    </p>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-40 h-auto object-contain"
                            :src="'/images/reports-images/TeensLearningStyleImages/YourLearningStyle/1.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h4 class="text-md font-bold mb-4">
                        Interpretation of Results
                    </h4>
                    <ul class="list-disc pl-6 mb-6 space-y-2">
                        <li>
                            <strong>Visual Learner:</strong> As a Visual
                            learner, you prefer to see information and visualise
                            relationships between ideas. Visual aids like
                            diagrams, charts, and videos are particularly
                            effective for you. You often have a strong sense of
                            spatial awareness and creativity, which helps you in
                            organising and recalling information.
                        </li>
                        <li>
                            <strong>Characteristics:</strong> You likely find
                            that visual content helps you learn more
                            effectively. You may have a keen ability to recall
                            visual details and use them to solve problems or
                            understand complex concepts. Engaging with visual
                            materials keeps you focused and enhances your
                            learning experience.
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
import Chart from "primevue/chart";

export default {
    name: "LearningStyle",
    layout: AssessmentTypes,
    components: { Chart },
    props: {
        style: String,
        childName: String,
        image: String,
        graph: Object,
        type: String,
        learnScores: Object,
    },
    data() {
        return {
            parsedLearnScores: this.learnScores
                ? this.learnScores
                : {
                      Visual: 0,
                      Auditory: 0,
                      Kinesthethic: 0,
                      ReadingWriting: 0,
                  },
            chart_options: {
                scales: {
                    y: {
                        ticks: {
                            stepSize: 2,
                        },
                        suggestedMax: 15,
                    },
                },
            },
            chart_data: {
                labels: [
                    "Visual",
                    "Auditory",
                    "Kinaesthetic",
                    "Reading/Writing",
                ],
                datasets: [
                    {
                        label: "Learning Score",
                        data: [],
                        backgroundColor: [
                            "rgba(249, 115, 22, 0.2)",
                            "rgba(6, 182, 212, 0.2)",
                            "rgb(107, 114, 128, 0.2)",
                            "rgba(139, 92, 246, 0.2)",
                        ],
                        borderColor: [
                            "rgb(249, 115, 22)",
                            "rgb(6, 182, 212)",
                            "rgb(107, 114, 128)",
                            "rgb(139, 92, 246)",
                        ],
                        borderWidth: 1,
                    },
                ],
            },
            x: 0,
            y: 0,
        };
    },
    watch: {
        learnScores: {
            immediate: true,
            handler(newValue) {
                this.parsedLearnScores = newValue
                    ? newValue
                    : {
                          Visual: 0,
                          Auditory: 0,
                          Kinesthethic: 0,
                          ReadingWriting: 0,
                      };
            },
        },
    },
    mounted() {
        const data = JSON.parse(this.learnScores);
        this.chart_data.datasets[0].data = [
            data.Visual,
            data.Auditory,
            data.Kinesthethic,
            data["Reading/Writing"],
        ];
        switch (this.style) {
            case "Visual":
                this.x = 60;
                this.y = 220;
                break;
            case "Visual/Auditory":
                this.x = 60;
                this.y = 170;
                break;
            case "Visual/Kinesthethic":
                this.x = 60;
                this.y = 120;
                break;
            case "Visual/Reading/Writing":
                this.x = 60;
                this.y = 65;
                break;

            case "Auditory/Kinesthethic":
                this.x = 230;
                this.y = 220;
                break;
            case "Auditory/Reading/Writing":
                this.x = 230;
                this.y = 170;
                break;
            case "Auditory/Visual":
                this.x = 230;
                this.y = 120;
                break;
            case "Auditory":
                this.x = 230;
                this.y = 65;
                break;

            case "Kinesthethic/Auditory":
                this.x = 120;
                this.y = 220;
                break;
            case "Kinesthethic/Reading/Writing":
                this.x = 165;
                this.y = 220;
                break;
            case "Kinesthethic/Visual":
                this.x = 120;
                this.y = 50;
                break;
            case "Kinesthethic":
                this.x = 170;
                this.y = 50;
                break;

            case "Reading/Writing/Auditory":
                this.x = 120;
                this.y = 220;
                break;
            case "Reading/Writing/Kinesthethic":
                this.x = 165;
                this.y = 220;
                break;
            case "Reading/Writing/Visual":
                this.x = 120;
                this.y = 50;
                break;
            case "Reading/Writing":
                this.x = 170;
                this.y = 50;
                break;
        }
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
h5 {
    color: rgb(36, 168, 250);
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

    h2, h3, h4{
        font-size: 1.5rem !important;
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
