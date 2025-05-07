<template>
     <div class="p-4 md:p-6">

    <div class="container mx-auto p-4">
        <h1 class="font-bold mb-4 text-center">
            Detailed Analysis of Your Child’s Style
        </h1>
    </div>
    <div class="style-description p-6 rounded-lg ">
        <div class="flex justify-center items-center">
            <img class="w-96 h-auto object-contain" :src="'/images/reports-svg-images/Page11.svg'" alt="" />
        </div>
    </div>
    <div v-if="style == 'C'" class="style-description p-6  rounded-lg ">

        <h2 class="text-4xl font-bold mb-2">
            Description of the Style
        </h2>
        <h2 class="text-2xl font-bold text-blue-500 mb-4">
            Cautious (C) Style
        </h2>

        <p class="text-lg  mb-4">
            Children with a Cautious (C) style are often seen as thoughtful and detail-oriented individuals who enjoy
            analysing information and solving problems. They are precise, organised, and prefer to think things through
            before acting. Their natural inclination to be thorough and careful makes them excellent problem-solvers and
            planners. Here are some key points about your child’s style:

        </p>

        <div class="strengths mb-6">
            <h2 class="text-3xl text-green-500 mb-2">
                Strengths:
            </h2>
            <ul class="list-none list-inside text-lg ">
                <li>
                    <strong>Detail-Oriented:</strong> Your child pays close
                    attention to details and strives for accuracy in everything
                    they do.
                </li>
                <li>
                    <strong>Analytical:</strong> They enjoy breaking down
                    complex problems and finding logical solutions.
                </li>
                <li>
                    <strong>Organised:</strong> They like to keep their
                    environment tidy and well-ordered, and they plan ahead to
                    ensure everything goes smoothly.
                </li>
            </ul>
        </div>

        <div class="areas-for-growth mb-6">
            <h2 class="text-3xl text-red-500 mb-2">
                Areas for Growth:
            </h2>
            <ul class="list-none list-inside text-lg ">
                <li>
                    <strong>Flexibility:</strong> Sometimes, they may need to
                    work on being more adaptable when things don’t go as
                    planned.
                </li>
                <li>
                    <strong>Social Interaction:</strong> They might benefit from
                    developing more confidence in social situations and group
                    activities.
                </li>
                <li>
                    <strong>Decision-Making Speed:</strong> As they tend to
                    think things through thoroughly, they may need to work on
                    making decisions more quickly when needed.
                </li>
            </ul>
        </div>

        <div class="tips-for-support mb-6">
            <div class="flex justify-center items-center">
                <img class="w-96 h-auto object-contain" :src="'/images/reports-svg-images/Page 11b.svg'" alt="" />
            </div>
            <h2 class="text-3xl text-purple-500 mb-2">
                Tips for Supporting Your Child:
            </h2>
            <ul class="list-none list-inside text-lg ">
                <li>
                    <strong>Encourage Flexibility:</strong> Help them practice
                    adapting to changes and unexpected situations by gradually
                    introducing small changes in routines or activities.
                </li>
                <li>
                    <strong>Promote Social Interaction:</strong> Provide
                    opportunities for them to engage in group activities and
                    build social confidence.
                </li>
                <li>
                    <strong>Support Quick Decision-Making:</strong> Encourage
                    them to make quicker decisions in low-stakes situations to
                    build their confidence in this area.
                </li>
            </ul>
        </div>
    </div>

    <!-- For CD Style Type -->
    <div id="CD" v-if="style == 'CD'">
        <div class="p-6   space-y-6">
            <!-- Title Section -->
            <h2 class="text-4xl font-bold mb-4">Description of the Style
            </h2>

            <h2 class="text-3xl font-bold mb-4">Cautious-Dominant (CD) Style</h2>
            <p class="">
                Children with a Cautious-Dominant (CD) style are careful, precise, and enjoy taking charge. They thrive
                in structured environments and excel at problem-solving and leading others. Here are some key points
                about your child’s style:
            </p>

            <!-- Strengths Section -->
            <div class="space-y-4">
                <h2 class="text-3xl font-bold mb-4 text-green-500">Strengths:</h2>
                <ul class="list-none pl-6  space-y-2">
                    <li><span class="font-semibold">Detail-Oriented:</span> Your child pays close attention to details
                        and strives for accuracy in everything they do.</li>
                    <li><span class="font-semibold">Analytical:</span> They enjoy breaking down complex problems and
                        finding logical solutions.</li>
                    <li><span class="font-semibold">Organised:</span> They like to keep their environment tidy and
                        well-ordered, and they plan ahead to ensure everything goes smoothly.</li>
                </ul>
            </div>

            <!-- Areas for Growth Section -->
            <div class="space-y-4">
                <h2 class="text-3xl font-bold mb-4 text-red-500">Areas for Growth:</h2>
                <ul class="list-none pl-6  space-y-2">
                    <li><span class="font-semibold">Flexibility:</span> Sometimes, {{ childName }} might struggle with
                        unexpected changes. They can benefit from learning to be more adaptable and open to new ideas.
                    </li>
                    <li><span class="font-semibold">Patience:</span> They may become impatient when others do not keep
                        up with their pace. Encouraging them to be patient and understanding can help improve their
                        teamwork skills.</li>
                    <li><span class="font-semibold">Empathy:</span> While {{ childName }} is a strong leader, they can
                        develop better empathy by understanding and considering others’ feelings and perspectives.</li>
                </ul>
            </div>

            <!-- Tips for Supporting Your Child Section -->
            <div class="space-y-4">
                <div class="flex justify-center items-center">
                    <img class="w-96 h-auto object-contain" :src="'/images/reports-svg-images/Page 11b.svg'" alt="" />
                </div>
                <h2 class="text-3xl font-bold mb-4 text-purple-500">Tips for Supporting Your Child:</h2>
                <ul class="list-none pl-6  space-y-2">
                    <li><span class="font-semibold">Encourage Flexibility:</span> Help {{ childName }} become more
                        adaptable by introducing activities that require flexibility and quick thinking.</li>
                    <li><span class="font-semibold">Promote Patience:</span> Engage in activities that require taking
                        turns and waiting, such as board games, to help {{ childName }} practice patience.</li>
                    <li><span class="font-semibold">Promote Empathy:</span> Discuss different perspectives and feelings
                        in various situations to help {{ childName }} develop a deeper understanding of empathy.</li>
                </ul>
            </div>
        </div>

    </div>

    <!-- For CS Style Type -->
    <div id="CS" v-if="style == 'CS'">
        <div class="max-w-4xl ">
            <!-- Style Description -->
            <div>
                <h2 class="text-4xl font-bold mb-4 mb-4">Description of the Style
                </h2>

                <h2 class="text-3xl font-bold mb-4 mb-4">Cautious-Supportive (CS) Style</h2>
                <p class="">
                    Children with a <span class="font-semibold text-blue-600">Cautious-Supportive (CS)</span> style are
                    careful, reliable, and always ready to help others. They are detail-oriented and supportive
                    individuals who thrive in calm environments and enjoy making sure tasks are completed accurately and
                    everyone feels considered. Here are some key points about your child’s style:

                </p>
            </div>

            <!-- Key Points -->
            <div class="space-y-6">
                <!-- Strengths -->
                <div>
                    <h2 class="text-3xl font-semibold mb-2 text-green-500">Strengths:</h2>
                    <ul class="list-none list-inside  space-y-2">
                        <li>
                            <span class="font-semibold">Attention to Detail:</span> {{ childName }} pays close attention
                            to details and ensures everything is done correctly. Their careful nature ensures that tasks
                            are completed accurately.
                        </li>
                        <li>
                            <span class="font-semibold">Reliability:</span> People can count on them to do what they say
                            they will do. Their reliability makes them a trusted friend and team member.
                        </li>
                        <li>
                            <span class="font-semibold">Helpfulness:</span> They enjoy helping others and making sure
                            everyone is okay. Their supportive nature brings comfort and assistance to those around
                            them.
                        </li>
                    </ul>
                </div>

                <!-- Areas for Growth -->
                <div>
                    <h2 class="text-3xl text-orange-600 mb-2 text-red-500">Areas for Growth:</h2>
                    <ul class="list-none list-inside  space-y-2">
                        <li>
                            <span class="font-semibold">Taking Initiative:</span> Sometimes, {{ childName }} might
                            hesitate to take the lead or start new tasks on their own. They can benefit from learning to
                            take initiative and trust their abilities.
                        </li>
                        <li>
                            <span class="font-semibold">Managing Perfectionism:</span> They may struggle with wanting
                            everything to be perfect, which can slow them down. Encouraging them to set realistic goals
                            and understand that mistakes are part of learning can be helpful.
                        </li>
                        <li>
                            <span class="font-semibold">Handling Criticism:</span> Because they are very careful and
                            considerate, {{ childName }} might take criticism personally. Teaching them to view feedback
                            as a way to improve can be beneficial.
                        </li>
                    </ul>
                </div>

                <!-- Tips for Supporting Your Child -->
                <div>
                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain" :src="'/images/reports-svg-images/Page 11b.svg'"
                            alt="" />
                    </div>
                    <h2 class="text-3xl text-blue-600 mb-2 text-purple-500">Tips for Supporting Your Child:</h2>
                    <ul class="list-none list-inside  space-y-2">
                        <li>
                            <span class="font-semibold">Encourage Initiative:</span> Help {{ childName }} develop
                            confidence by praising their efforts when they start new tasks or take on responsibilities.
                        </li>
                        <li>
                            <span class="font-semibold">Address Perfectionism:</span> Guide {{ childName }} to set
                            realistic goals and understand that making mistakes is a normal part of learning and
                            growing.
                        </li>
                        <li>
                            <span class="font-semibold">Teach Positive Response to Criticism:</span> Discuss how
                            feedback can help them improve and grow, and encourage them to see it as a positive tool
                            rather than a personal attack.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <!-- For D Style Type -->
    <div id="D" v-if="style == 'D'">
        <div class="">
            <h2 class="text-3xl font-bold mb-4">Dominant (D) Style</h2>
            <p class="text-lg mb-4">
                Children with a Dominant (D) style are often seen as leaders among their peers. They are assertive and
                not afraid to voice their opinions or make decisions. They thrive in competitive environments and enjoy
                being challenged. Their natural confidence and decisiveness help them to take charge and lead others
                effectively. Here are some key points about your child’s style:
            </p>

            <h2 class="text-3xl mt-6 mb-4 text-green-500">Strengths:</h2>
            <ul class="list-none space-y-2">
                <li><span class="font-bold">Confident:</span> Your child believes in their abilities and is not afraid
                    to take on new challenges.</li>
                <li><span class="font-bold">Decisive:</span> They can make quick decisions and stick to them, which
                    helps in situations requiring prompt action.</li>
                <li><span class="font-bold">Energetic:</span> They have a high level of energy and are always ready to
                    take on new activities or tasks.</li>
            </ul>

            <h2 class="text-3xl mt-6 mb-4 text-red-500">Areas for Growth:</h2>
            <ul class="list-none space-y-2">
                <li><span class="font-bold">Listening Skills:</span> Sometimes, children with a Dominant style may need
                    to work on listening to others' ideas and incorporating them into their plans.</li>
                <li><span class="font-bold">Patience:</span> They may benefit from developing more patience, especially
                    in situations where tasks take longer than expected or require more detailed work.</li>
                <li><span class="font-bold">Teamwork:</span> While they are excellent leaders, it’s also important for
                    them to learn how to be good team players and collaborate effectively with others.</li>
            </ul>

            <div class="flex justify-center items-center">
                <img class="w-96 h-auto object-contain" :src="'/images/reports-svg-images/Page 11b.svg'" alt="" />
            </div>
            <h2 class="text-3xl mt-6 mb-4 text-purple-500">Tips for Supporting Your Child:</h2>
            <ul class="list-none pl-6  mt-2 space-y-2">
                <li><span class="font-bold">Encourage Listening:</span> Practice active listening exercises at home to
                    help your child learn to value and incorporate others' input.</li>
                <li><span class="font-bold">Promote Patience:</span> Engage your child in activities that require
                    patience and persistence, such as puzzles or long-term projects.</li>
                <li><span class="font-bold">Encourage Teamwork:</span> Involve your child in team activities where they
                    can practice both leading and following, helping them to appreciate the value of collaboration.</li>
            </ul>
        </div>

    </div>

    <!-- For DC Style Type -->
    <div id="DC" v-if="style == 'DC'">
        <div class="">
            <h2 class="text-4xl font-bold mb-4">Description of the Style
            </h2>

            <h2 class="text-3xl font-bold mb-4">Dominant-Cautious (DC) Style</h2>

            <p class=" mb-4">
                Children with a Dominant-Cautious (DC) style are natural leaders who are also very careful and
                detail-oriented. They are assertive and not afraid to take charge, but they also like to make sure
                everything is done correctly. They thrive in environments where they can set goals and achieve them with
                precision. Here are some key points about your child’s style:
            </p>

            <h2 class="text-3xl font-bold mb-4 mt-6 text-green-500">Strengths:</h2>
            <ul class="list-none pl-6  mt-2 space-y-2">
                <li><span class="font-bold">Leadership:</span> {{ childName }} is comfortable taking charge and guiding
                    others.</li>
                <li><span class="font-bold">Attention to Detail:</span> They pay close attention to details and strive
                    for accuracy.</li>
                <li><span class="font-bold">Goal-Oriented:</span> They set clear goals and work diligently to achieve
                    them.</li>
            </ul>

            <h2 class="text-3xl font-bold mb-4 mt-6 text-red-500">Areas for Growth:</h2>
            <ul class="list-none pl-6  mt-2 space-y-2">
                <li><span class="font-bold">Flexibility:</span> Sometimes, they might find it challenging to adapt to
                    changes or unexpected situations.</li>
                <li><span class="font-bold">Listening Skills:</span> They may need to work on listening to others' ideas
                    and incorporating them into their plans.</li>
                <li><span class="font-bold">Patience:</span> Developing patience, especially in situations that require
                    waiting or prolonged effort, can be beneficial.</li>
            </ul>

            <div class="flex justify-center items-center">
                <img class="w-96 h-auto object-contain" :src="'/images/reports-svg-images/Page 11b.svg'" alt="" />
            </div>
            <div>
                <h2 class="text-3xl font-bold mb-4 mt-6 text-purple-500">Tips for Supporting Your Child:</h2>
                <ul class="list-none pl-6  mt-2 space-y-2">
                    <li><span class="font-bold">Encourage Flexibility:</span> Introduce activities that require adapting
                        to new rules or changes to help them become more flexible.</li>
                    <li><span class="font-bold">Practice Active Listening:</span> Engage in exercises at home where your
                        child practices listening to others and repeating back what they heard.</li>
                    <li><span class="font-bold">Promote Patience:</span> Involve your child in activities that require
                        patience and persistence, such as puzzles or long-term projects.</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- For DI Style Type -->
    <div id="DI" v-if="style == 'DI'">
        <div class="p-6 space-y-6">
            <!-- Description of the Style -->
            <div>
                <h2 class="text-4xl font-bold mb-4">Description of the Style
                </h2>
                <h2 class="text-3xl font-bold mb-4">Dominant-Influential (DI) Style</h2>
                <p class="">
                    Children with a Dominant-Influential (DI) style are natural leaders who are outgoing and
                    enthusiastic. They are confident, energetic, and enjoy taking charge in social situations. Their
                    sociable nature and ability to make quick decisions help them lead effectively and inspire others.
                    Here are some key points about your child’s style:
                </p>
            </div>

            <!-- Strengths -->
            <div>
                <h2 class="text-3xl font-bold mb-4 text-green-500">Strengths:</h2>
                <ul class="list-none pl-6  space-y-2">
                    <li><strong>Confident:</strong> Your child believes in their abilities and is not afraid to take on
                        new challenges.</li>
                    <li><strong>Energetic:</strong> They have a high level of energy and enjoy being active and busy.
                    </li>
                    <li><strong>Sociable:</strong> They love being around people and making new friends.</li>
                </ul>
            </div>

            <!-- Areas for Growth -->
            <div>
                <h2 class="text-3xl font-bold mb-4 text-red-500">Areas for Growth:</h2>
                <ul class="list-none pl-6  space-y-2">
                    <li><strong>Balancing Leadership with Collaboration:</strong> Sometimes children with a DI style may
                        need to learn how to balance leading with collaborating effectively with others.</li>
                    <li><strong>Managing Excitement:</strong> They may benefit from learning how to manage their high
                        energy and excitement in more structured environments.</li>
                    <li><strong>Listening Skills:</strong> Improving their ability to listen carefully to others can
                        help them become more effective leaders and team members.</li>
                </ul>
            </div>

            <!-- Tips for Supporting Your Child -->
            <div>
                <div class="flex justify-center items-center">
                    <img class="w-96 h-auto object-contain" :src="'/images/reports-svg-images/Page 11b.svg'" alt="" />
                </div>
                <h2 class="text-3xl font-bold mb-4 text-purple-500">Tips for Supporting Your Child:</h2>
                <ul class="list-none pl-6  space-y-2">
                    <li><strong>Encourage Shared Leadership:</strong> Provide opportunities where your child can lead in
                        some instances and collaborate in others. This helps them learn the value of teamwork and shared
                        leadership.</li>
                    <li><strong>Teach Energy Management:</strong> Engage your child in activities that channel their
                        high energy positively, such as sports, dance, or other physical activities, while also teaching
                        them relaxation techniques.</li>
                    <li><strong>Practice Active Listening:</strong> Use games and exercises that focus on listening
                        skills, such as repeating back what someone has said or summarising a story they heard.</li>
                </ul>
            </div>
        </div>

    </div>

    <!-- For I Style Type -->
    <div id="I" v-if="style == 'I'">
        <div class="space-y-6">
            <h2 class="text-3xl font-bold mb-4">Description of the Style</h2>
            <h2 class="text-3xl">Influential (I) Style</h2>
            <p class="text-base">
                Children with an Influential (I) style are often seen as social butterflies among their peers. They are
                outgoing, enthusiastic, and enjoy being around others. They thrive in environments where they can
                interact with people and express themselves freely. Their natural communication skills help them to
                build connections and inspire others. Here are some key points about your child’s style:
            </p>

            <h2 class="text-3xl font-bold mb-4 text-green-500">Strengths:</h2>
            <ul class="list-none pl-6 space-y-2">
                <li><strong>Sociable:</strong> Your child enjoys making new friends and is often the centre of social
                    activities. They are naturally outgoing and comfortable in social settings.</li>
                <li><strong>Enthusiastic:</strong> They bring a lot of energy and excitement to any situation. Their
                    enthusiasm is contagious and can motivate others.</li>
                <li><strong>Persuasive:</strong> They are skilled at communicating their ideas and can be very
                    convincing. This makes them effective at influencing others and rallying support for their ideas.
                </li>
            </ul>

            <h2 class="text-3xl font-bold mb-4 text-red-500">Areas for Growth:</h2>
            <ul class="list-none pl-6 space-y-2">
                <li><strong>Focus:</strong> While their enthusiasm is a strength, they may need help staying focused on
                    tasks that require sustained attention.</li>
                <li><strong>Organisation:</strong> They might struggle with keeping their belongings and activities
                    organised, needing support to develop better organisational habits.</li>
                <li><strong>Listening Skills:</strong> They may need to work on listening more attentively to others, as
                    they can sometimes dominate conversations.</li>
            </ul>

            <div class="flex justify-center items-center">
                <img class="w-96 h-auto object-contain" :src="'/images/reports-svg-images/Page 11b.svg'" alt="" />
            </div>
            <h2 class="text-3xl font-bold mb-4 text-purple-500">Tips for Supporting Your Child:</h2>
            <ul class="list-none space-y-2">
                <li><strong>Encourage Active Listening:</strong> Practice listening exercises at home, such as taking
                    turns to talk and listen during conversations.</li>
                <li><strong>Promote Organisational Skills:</strong> Create simple routines and use visual aids to help
                    your child keep track of their responsibilities and belongings.</li>
                <li><strong>Provide Opportunities for Social Interaction:</strong> Enrol them in group activities where
                    they can interact with peers and practice their social skills in structured environments.</li>
            </ul>
        </div>

    </div>

    <!-- For ID Style Type -->
    <div id="ID" v-if="style == 'ID'">
        <div class="mt-6">
            <h2 class="text-3xl font-bold mb-4">Description of the Style</h2>
            <h2 class="text-2xl font-bold  mt-2"> Influential-Dominant (ID) Style</h2>
            <p class="text-base  mt-2">Children with an Influential-Dominant (ID) style are outgoing,
                enthusiastic, and love to take charge. They are natural leaders who enjoy inspiring and motivating
                others. Here are some key points about your child’s style:</p>
        </div>

        <div class="mt-4">
            <h2 class="text-3xl font-bold mb-4 text-green-500">Strengths:</h2>
            <ul class="list-none pl-5 ">
                <li><strong class="font-bold">Enthusiasm:</strong> {{ childName }} brings energy and excitement to
                    everything they do. Their enthusiasm is contagious and helps to inspire those around them.</li>
                <li><strong class="font-bold">Leadership:</strong> They are confident and enjoy taking charge of
                    activities. They have a natural ability to guide and motivate others to achieve common goals.</li>
                <li><strong class="font-bold">Sociability:</strong> They make friends easily and enjoy being around
                    people. Their friendly nature helps them build strong connections and create a positive atmosphere.
                </li>
            </ul>
        </div>

        <div class="mt-6">
            <h2 class="text-3xl font-bold mb-4 text-red-500">Areas for Growth:</h2>
            <ul class="list-none pl-5 ">
                <li><strong class="font-bold">Patience:</strong> Sometimes, {{ childName }} might want things to happen
                    quickly and can get frustrated if they don’t. They can benefit from learning to be more patient and
                    understanding.</li>
                <li><strong class="font-bold">Listening Skills:</strong> While they love to lead and talk, they might
                    need to work on listening to others’ ideas and feedback.</li>
                <li><strong class="font-bold">Attention to Detail:</strong> In their excitement, they may overlook small
                    details. Helping them focus on the importance of details can be beneficial.</li>
            </ul>
        </div>

        <div class="mt-6">
            <div class="flex justify-center items-center">
                <img class="w-96 h-auto object-contain" :src="'/images/reports-svg-images/Page 11b.svg'" alt="" />
            </div>
            <h2 class="text-3xl font-bold mb-4 text-purple-500">Tips for Supporting Your Child:</h2>
            <ul class="list-none pl-5 ">
                <li><strong class="font-bold">Encourage Patience:</strong> Help {{ childName }} develop patience through
                    activities that require waiting and taking turns, such as board games or collaborative projects.
                </li>
                <li><strong class="font-bold">Improve Listening Skills:</strong> Encourage {{ childName }} to listen to
                    others by practising active listening exercises, such as summarising what they heard.</li>
                <li><strong class="font-bold">Focus on Details:</strong> Provide activities that require attention to
                    detail, such as puzzles, model building, or detailed crafts.</li>
            </ul>
        </div>

    </div>

    <!-- For IS Style Type -->
    <div id="IS" v-if="style == 'IS'">
        <div>
            <h2 class="text-3xl">Description of the Style</h2>
            <h2 class="text-2xl font-medium mt-4">Influential-Supportive (IS) Style</h2>
            <p class="text-md mt-2">Children with an Influential-Supportive (IS) style are friendly, enthusiastic, and
                always ready to help others. They are natural communicators who enjoy social interactions and thrive in
                group settings. Here are some key points about your child’s style:</p>

            <h2 class="text-3xl font-bold mb-4 mt-4 text-green-500">Strengths:</h2>
            <ul class="list-none pl-5 mt-2">
                <li><strong>Friendliness:</strong> {{ childName }} makes friends easily and enjoys being around people.
                </li>
                <li><strong>Enthusiasm:</strong> They bring energy and excitement to everything they do.</li>
                <li><strong>Supportive Nature:</strong> They love to help others and ensure everyone feels included.
                </li>
            </ul>

            <h2 class="text-3xl font-bold mb-4 mt-4 text-red-500">Areas for Growth:</h2>
            <ul class="list-none pl-5 mt-2">
                <li><strong>Focus and Attention:</strong> Sometimes, they may get distracted easily and need help
                    staying on task.</li>
                <li><strong>Assertiveness:</strong> They might struggle with standing up for themselves and need
                    encouragement to express their own needs and opinions.</li>
                <li><strong>Organisation:</strong> They may find it challenging to keep things organised and benefit
                    from guidance in this area.</li>
            </ul>

            <div class="flex justify-center items-center">
                <img class="w-96 h-auto object-contain" :src="'/images/reports-svg-images/Page 11b.svg'" alt="" />
            </div>
            <h2 class="text-3xl font-bold mb-4 mt-4 text-purple-500">Tips for Supporting Your Child:</h2>
            <ul class="list-none pl-5 mt-2">
                <li><strong>Encourage Focus:</strong> Help {{ childName }} develop concentration skills through
                    activities that require sustained attention, like puzzles or reading.</li>
                <li><strong>Boost Assertiveness:</strong> Encourage them to express their thoughts and needs in a
                    respectful manner. Role-playing scenarios can be helpful.</li>
                <li><strong>Teach Organisation:</strong> Provide tools and strategies to help them stay organised, such
                    as checklists, planners, or labelled storage.</li>
            </ul>
        </div>

    </div>

    <!-- For S Style Type -->
    <div id="S" v-if="style == 'S'">
        <div class="p-6 space-y-6">
            <!-- Style Description -->
            <div class="space-y-4">
                <h2 class="text-3xl">Description of the Style</h2>
                <h2 class="text-lg font-semibold">Supportive (S) Style</h2>
                <p>
                    Children with a Supportive (S) style are often seen as the glue that holds groups together. They are
                    calm, patient, and dependable.
                    They enjoy helping others and work best in environments that are cooperative and harmonious. Their
                    natural inclination to support and nurture others makes them invaluable team players. Here are some key points about your child’s style:

                </p>
            </div>

            <!-- Key Points -->
            <div class="space-y-4">
                <!-- <h2 class="text-lg font-medium">Key Points About Your Child’s Style:</h2> -->
                <div>
                    <h2 class="text-3xl font-semibold text-green-500">Strengths:</h2>
                    <ul class="list-none pl-6 space-y-2">
                        <li><strong>Reliable:</strong> Your child is consistent and can always be counted on to be there
                            for others.</li>
                        <li><strong>Patient:</strong> They take their time with tasks and are willing to help others
                            without rushing.</li>
                        <li><strong>Team Player:</strong> They enjoy working with others and making sure everyone feels
                            included.</li>
                    </ul>
                </div>
                <div>
                    <h2 class="text-3xl font-semibold text-red-500">Areas for Growth:</h2>
                    <ul class="list-none pl-6 space-y-2">
                        <li><strong>Assertiveness:</strong> Sometimes, they may need to work on voicing their own needs
                            and opinions more confidently.</li>
                        <li><strong>Initiative:</strong> They might benefit from taking the lead in activities or
                            projects more often.</li>
                        <li><strong>Handling Conflict:</strong> As they tend to avoid conflict, learning to address
                            disagreements constructively can be helpful.</li>
                    </ul>
                </div>
            </div>

            <!-- Tips for Supporting -->
            <div class="space-y-4">
                <div class="flex justify-center items-center">
                    <img class="w-96 h-auto object-contain" :src="'/images/reports-svg-images/Page 11b.svg'" alt="" />
                </div>
                <h2 class="text-3xl font-medium text-purple-500">Tips for Supporting Your Child:</h2>
                <ul class="list-none pl-6 space-y-2">
                    <li><strong>Encourage Assertiveness:</strong> Help them practice expressing their thoughts and needs
                        in a confident manner.</li>
                    <li><strong>Promote Leadership Opportunities:</strong> Provide opportunities for them to take charge
                        of small projects or group activities.</li>
                    <li><strong>Teach Conflict Resolution:</strong> Role-play different scenarios to help them learn how
                        to handle conflicts in a healthy way.</li>
                </ul>
            </div>
        </div>

    </div>

    <!-- For SC Style Type -->
    <div id="SC" v-if="style == 'SC'">
        <div class="p-6">
            <h2 class="text-3xl font-bold mb-4">Description of the Style</h2>

            <h2 class="text-2xl font-semibold mb-4">Supportive-Cautious (SC) Style</h2>
            <p class="mb-6">Children with a Supportive-Cautious (SC) style are thoughtful, reliable, and love to help
                others. They are careful and supportive individuals who thrive in calm environments and enjoy making
                sure everyone feels considered and respected. Here are some key points about your child’s style:</p>

            <h2 class="text-md font-semibold mb-2 text-green-500">Strengths:</h2>
            <ul class="list-none pl-5 mb-6">
                <li><strong>Thoughtfulness:</strong> {{ childName }} always thinks about how their actions affect
                    others. Their careful nature ensures that everyone feels considered and respected.</li>
                <li><strong>Reliability:</strong> People can count on them to do what they say they will do. Their
                    reliability makes them a trusted friend and team member.</li>
                <li><strong>Helpfulness:</strong> They enjoy helping others and making sure everyone is okay. Their
                    supportive nature brings comfort and assistance to those around them.</li>
            </ul>

            <h2 class="text-md font-semibold mb-2 text-red-500">Areas for Growth:</h2>
            <ul class="list-none pl-5 mb-6">
                <li><strong>Confidence:</strong> Sometimes, {{ childName }} might be unsure of their abilities. They can
                    benefit from learning to trust themselves more and take on new challenges with confidence.</li>
                <li><strong>Decision-Making:</strong> They may struggle with making decisions quickly, especially when
                    trying to consider all possible outcomes. Encouraging them to make choices more confidently can help
                    build their decision-making skills.</li>
                <li><strong>Adaptability:</strong> Because they prefer stable and predictable environments, {{ childName
                    }} might find it challenging to adapt to sudden changes. Teaching them flexibility and how to handle
                    unexpected situations can be beneficial.</li>
            </ul>

            <div class="flex justify-center items-center">
                <img class="w-96 h-auto object-contain" :src="'/images/reports-svg-images/Page 11b.svg'" alt="" />
            </div>
            <h2 class="text-md font-semibold mb-2 text-purple-500">Tips for Supporting Your Child:</h2>
            <ul class="list-none pl-5 mb-6">
                <li><strong>Encourage Confidence:</strong> Help {{ childName }} develop confidence by praising their
                    efforts and celebrating their successes, no matter how small.</li>
                <li><strong>Improve Decision-Making Skills:</strong> Give {{ childName }} opportunities to make
                    decisions, starting with small choices and gradually moving to bigger ones.</li>
                <li><strong>Teach Adaptability:</strong> Engage in activities that require flexibility and adapting to
                    new situations, such as games with changing rules or spontaneous family outings.</li>
            </ul>
        </div>

    </div>

    <!-- For SI Style Type -->
    <div id="SI" v-if="style == 'SI'">
        <div class="space-y-6">
            <h2 class="text-3xl font-bold mb-2">Description of the Style</h2>
            <h2 class="text-2xl font-semibold">Supportive-Influential (SI) Style</h2>
            <p class="text-base">Children with a Supportive-Influential (SI) style are kind, friendly, and love to help
                others. They are natural helpers who thrive in social settings and enjoy making sure everyone feels
                included and appreciated. Here are some key points about your child’s style:</p>

            <h2 class="text-3xl font-bold mb-4 text-green-500">Strengths:</h2>
            <ul class="list-none pl-5 space-y-2">
                <li><strong>Kindness:</strong> {{ childName }} is very caring and always thinks about others’ feelings.
                    Their kindness makes everyone feel welcome and appreciated.</li>
                <li><strong>Friendliness:</strong> They make friends easily and enjoy being around people. Their
                    friendly nature helps them create strong bonds with others.</li>
                <li><strong>Helpfulness:</strong> They love to help others and make sure everyone feels included. Their
                    willingness to help makes them great team players.</li>
            </ul>

            <h2 class="text-3xl font-bold mb-4 text-red-500">Areas for Growth:</h2>
            <ul class="list-none pl-5 space-y-2">
                <li><strong>Assertiveness:</strong> Sometimes, {{ childName }} might find it difficult to assert
                    themselves in group settings. They can benefit from learning to express their own needs and opinions
                    more confidently.</li>
                <li><strong>Decision-Making:</strong> They may struggle with making decisions, especially when trying to
                    please everyone. Encouraging them to make choices independently can help build their confidence.
                </li>
                <li><strong>Handling Criticism:</strong> Because they are very sensitive to others’ feelings, {{
                    childName }} might take criticism personally. Teaching them to view feedback as a way to improve can
                    be beneficial.</li>
            </ul>

            <div class="flex justify-center items-center">
                <img class="w-96 h-auto object-contain" :src="'/images/reports-svg-images/Page 11b.svg'" alt="" />
            </div>
            <h2 class="text-3xl font-bold mb-4 text-purple-500">Tips for Supporting Your Child:</h2>
            <ul class="list-none pl-5 space-y-2">
                <li><strong>Encourage Assertiveness:</strong> Help {{ childName }} develop assertiveness by role-playing
                    different scenarios where they need to express their opinions.</li>
                <li><strong>Improve Decision-Making Skills:</strong> Give {{ childName }} opportunities to make
                    decisions, starting with small choices and gradually moving to bigger ones.</li>
                <li><strong>Teach Positive Response to Criticism:</strong> Guide {{ childName }} to see criticism as a
                    tool for growth by discussing how they can use feedback to improve.</li>
            </ul>
        </div>

    </div>
    </div>
</template>

<style>


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

    h2, h3{
        font-size: 1.5rem !important;
    }

    strong{
        font-size: 1rem !important;
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
/* Add styles here */
/* h2, h2, h2, h4 {
    color: rgb(55 48 163 );
    font-weight: bold !important;
} */
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
.p-6>.row>.col-6>h2 {
    color: rgb(55 48 163);
    font-weight: bold !important;
}

p,
ul>li,
.text-base {
    font-size: 1.125rem;
    line-height: 1.75rem;
}

ul>li {
    margin-top: 13px;
}
</style>

<script>
import AssessmentTypes from "@/Layouts/AssessmentTypes.vue";

export default {
    name: "DetailedAnalysis",
    layout: AssessmentTypes,
    props: {
        style: String,
        childName: String,
        image: String,

    },
};
</script>
