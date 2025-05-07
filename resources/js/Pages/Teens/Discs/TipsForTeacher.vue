<template>
     <div class="p-6">
    <div class="p-4 md:p-6">
        <div class="">
            <h1 class="font-bold mb-4 text-center">Tips for Teachers Based on Your DISC Style</h1>
        </div>

    <div class="">
        <div class="row">
            <div class="col-6">
                <p class="text">
                As a teacher, your DISC style significantly impacts how you
                interact with your students. Understanding your own style can
                help you communicate more effectively and support your students'
                development. Here’s a brief overview of the four DISC styles:
            </p>
            <ul class="list-disc pl-5 text-gray-700 mb-6">
                <li>
                    <strong>Dominant (D):</strong> Assertive, results-oriented,
                    and confident. You like to take charge and make quick
                    decisions.
                </li>
                <li>
                    <strong>Influential (I):</strong> Outgoing, enthusiastic,
                    and sociable. You enjoy interacting with others and are a
                    natural communicator.
                </li>
                <li>
                    <strong>Supportive (S):</strong> Patient, reliable, and
                    supportive. You value stability and work well in cooperative
                    environments.
                </li>
                <li>
                    <strong>Cautious (C):</strong> Detail-oriented, organised,
                    and analytical. You strive for accuracy and quality in
                    everything you do.
                </li>
            </ul>
            <p class="text-gray-700 mb-6">
                If you have a mixed style, please refer to each section that
                corresponds to your blend.
            </p>



            </div>
            <div class="col-6">
                <div class="flex justify-center items-center"><img class="w-120 h-auto object-contain" src="/images/reports-images/TeensDiscReportStyleImages/ParentalInsights/helpful-tips.png" alt=""></div>

            </div>
        </div>
    </div>
    <!-- For C Style Report -->
    <div v-if="style == 'C'">
        <!-- Content for C -->
        <div class=" ">


            <h2 class="text-xl md:text-3xl mb-4">
                If You Are a Dominant (D) Teacher with a Cautious (C) Student
            </h2>
            <p class="text-gray-700 mb-4">
                As a Dominant teacher, you appreciate assertiveness and
                efficiency. Here’s how you can support your Cautious student:
            </p>
            <ul class="list-disc pl-5 text-gray-700 mb-6">
                <li>
                    <strong>Provide Detailed Expectations:</strong> Clearly
                    outline what is expected of your student, offering detailed
                    instructions to guide their work.
                </li>
                <li>
                    <strong>Value Their Precision:</strong> Recognise and
                    appreciate your student’s attention to detail and how it
                    contributes to the quality of their work.
                </li>
                <li>
                    <strong>Balance Assertiveness with Patience:</strong> While
                    you may prefer quick results, understand that your student
                    benefits from having time to think things through
                    thoroughly.
                </li>
                <li>
                    <strong>Encourage Thorough Analysis:</strong> Allow your
                    student the opportunity to explore subjects in depth,
                    appreciating their analytical approach.
                </li>
            </ul>

            <h2 class="text-xl md:text-3xl mb-4">
                If You Are an Influential (I) Teacher with a Cautious (C)
                Student
            </h2>
            <p class="text-gray-700 mb-4">
                As an Influential teacher, you enjoy social interactions and
                creativity. Here’s how you can support your Cautious student:
            </p>
            <ul class="list-disc pl-5 text-gray-700 mb-6">
                <li>
                    <strong>Encourage Independent Exploration:</strong> Allow
                    your student space to explore their interests at their own
                    pace, respecting their preference for quiet reflection.
                </li>
                <li>
                    <strong>Appreciate Their Detail-Oriented Nature:</strong>
                    Recognise their ability to focus on details and how this
                    contributes to their success.
                </li>
                <li>
                    <strong>Promote Creative Outlets:</strong> Provide
                    opportunities for your students to engage in analytical and
                    creative activities that challenge their critical thinking
                    skills.
                </li>
                <li>
                    <strong>Model Open Communication:</strong> Demonstrate how
                    to express thoughts and ideas openly, encouraging your
                    student to share their insights.
                </li>
            </ul>

            <h2 class="text-xl md:text-3xl mb-4">
                If You Are a Supportive (S) Teacher with a Cautious (C) Student
            </h2>
            <p class="text-gray-700 mb-4">
                As a Supportive teacher, you share an appreciation for stability
                and reliability. Here’s how you can support your Cautious
                student:
            </p>
            <ul class="list-disc pl-5 text-gray-700 mb-6">
                <li>
                    <strong>Provide a Consistent Environment:</strong> Maintain
                    a predictable classroom routine that offers your student a
                    sense of security and stability.
                </li>
                <li>
                    <strong>Encourage Analytical Discussions:</strong> Engage in
                    discussions that challenge your student’s analytical
                    thinking and allow them to explore new ideas.
                </li>
                <li>
                    <strong>Celebrate Their Achievements:</strong> Acknowledge
                    their successes and efforts, reinforcing their confidence
                    and motivation.
                </li>
                <li>
                    <strong>Encourage Communication:</strong> Encourage open and
                    honest conversations about their thoughts and feelings.
                </li>
            </ul>

            <h2 class="text-xl md:text-3xl mb-4">
                If You Are a Cautious (C) Teacher with a Cautious (C) Student
            </h2>
            <p class="text-gray-700 mb-4">
                As a Cautious teacher, you share many traits with your student.
                Here’s how you can support them:
            </p>
            <ul class="list-disc pl-5 text-gray-700 mb-6">
                <li>
                    <strong>Provide Detailed Guidance:</strong> Offer clear and
                    thorough instructions to help your student navigate tasks
                    and responsibilities.
                </li>
                <li>
                    <strong>Encourage Precision and Accuracy:</strong> Support
                    their desire for accuracy and thoroughness in their work.
                </li>
                <li>
                    <strong>Promote Thoughtful Exploration:</strong> Encourage
                    your student to explore new subjects and interests,
                    supporting their curiosity and intellectual growth.
                </li>
                <li>
                    <strong>Model Reflective Decision-Making:</strong>
                    Demonstrate how to make well-considered decisions, showing
                    your student the value of their analytical approach.
                </li>
            </ul>
        </div>
    </div>

    <!-- For CD Style Report -->
    <div v-if="style == 'CD'">


        <div class=" pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                If You Are a Dominant (D) Teacher with a Cautious-Dominant (CD)
                Student
            </h2>
            <p>
                As a Dominant teacher, you value assertiveness and efficiency.
                Here’s how you can support your CD student:
            </p>
            <ul class="list-disc pl-6">
                <li>
                    <strong>Promote Independent Learning:</strong> Encourage
                    your student to take ownership of their tasks and projects.
                    Provide opportunities for them to work independently, which
                    aligns with their preference for autonomy.
                </li>
                <li>
                    <strong>Challenge Their Analytical Skills:</strong>
                    Recognise and encourage your student’s ability to analyse
                    complex problems. Engage them in activities that challenge
                    their logical thinking and decision-making.
                </li>
                <li>
                    <strong>Balance Structure with Flexibility:</strong> While
                    both you and your student value structure, introducing some
                    flexibility can enhance their ability to adapt to new
                    situations and challenges.
                </li>
                <li>
                    <strong>Acknowledge Their Achievements:</strong> Regularly
                    recognise and praise your student’s accomplishments,
                    particularly when they demonstrate strong analytical skills
                    and decisive action.
                </li>
            </ul>
        </div>

        <div class=" pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                If You Are an Influential (I) Teacher with a Cautious-Dominant
                (CD) Student
            </h2>
            <p>
                As an Influential teacher, you enjoy social interactions and
                creativity. Here’s how you can support your CD student:
            </p>
            <ul class="list-disc pl-6">
                <li>
                    <strong>Create a Structured Environment:</strong> While you
                    may thrive in dynamic settings, it’s important to provide a
                    structured and organised environment for your CD student.
                    Clear objectives and expectations will help them excel.
                </li>
                <li>
                    <strong>Appreciate Their Logical Approach:</strong>
                    Acknowledge your student’s preference for logical and
                    analytical thinking. Encourage them to share their reasoning
                    process and support them in refining their ideas.
                </li>
                <li>
                    <strong>Support Independent Work:</strong> While you enjoy
                    collaborative activities, recognise your student’s
                    preference for working independently. Provide them with the
                    space to explore their interests on their own.
                </li>
                <li>
                    <strong>Encourage Flexibility:</strong> Help your student
                    develop flexibility by introducing new experiences and
                    encouraging them to consider alternative approaches to
                    problem-solving.
                </li>
            </ul>
        </div>

        <div class=" pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                If You Are a Supportive (S) Teacher with a Cautious-Dominant
                (CD) Student
            </h2>
            <p>
                As a Supportive teacher, you value stability and cooperation.
                Here’s how you can support your CD student:
            </p>
            <ul class="list-disc pl-6">
                <li>
                    <strong>Maintain Structure and Stability:</strong> Ensure
                    that your classroom provides a stable and predictable
                    environment. Your student will thrive in a well-organised
                    setting with clear goals.
                </li>
                <li>
                    <strong>Encourage Analytical Exploration:</strong> Support
                    your student’s interest in problem-solving by incorporating
                    tasks that challenge their analytical skills. Engage them in
                    discussions that promote logical thinking.
                </li>
                <li>
                    <strong>Balance Support with Independence:</strong> While
                    you naturally offer support, it’s important to give your
                    student the independence they need to excel. Encourage them
                    to take charge of their learning.
                </li>
                <li>
                    <strong>Promote Flexibility:</strong> Help your student
                    develop adaptability by gradually introducing new challenges
                    and encouraging them to step outside their comfort zone.
                </li>
            </ul>
        </div>

        <div class=" pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                If You Are a Cautious (C) Teacher with a Cautious-Dominant (CD)
                Student
            </h2>
            <p>
                As a Cautious teacher, you appreciate precision and careful
                planning. Here’s how you can support your CD student:
            </p>
            <ul class="list-disc pl-6">
                <li>
                    <strong>Encourage Analytical Growth:</strong> Nurture your
                    student’s interest in logical thinking and problem-solving
                    by providing tasks that require careful analysis and
                    attention to detail.
                </li>
                <li>
                    <strong>Support Independent Projects:</strong> Provide
                    opportunities for your student to work on independent
                    projects that align with their interests. This approach will
                    help them build confidence in their abilities.
                </li>
                <li>
                    <strong>Balance Structure with Flexibility:</strong> While
                    both you and your student value structure, it’s important to
                    introduce flexibility. Encourage your student to adapt to
                    new situations and consider alternative approaches.
                </li>
                <li>
                    <strong>Celebrate Achievements:</strong> Regularly
                    acknowledge and celebrate your student’s successes,
                    particularly when they demonstrate their analytical and
                    decision-making skills.
                </li>
            </ul>
        </div>
    </div>

    <!-- For CS Style Report -->
    <div v-if="style == 'CS'">


        <div class=" pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                If You Are a Dominant (D) Teacher with a Cautious-Supportive
                (CS) Student
            </h2>
            <p>
                As a Dominant teacher, you appreciate assertiveness and
                efficiency. Here’s how you can support your CS student:
            </p>
            <ul class="list-disc pl-6">
                <li>
                    <strong>Provide Structure and Routine:</strong> Recognise
                    your student’s need for a stable and predictable
                    environment. Establish clear routines and guidelines to help
                    them feel secure.
                </li>
                <li>
                    <strong>Encourage Detailed Work:</strong> Appreciate and
                    praise your student’s attention to detail. Their
                    thoroughness and precision are valuable traits that can be
                    nurtured.
                </li>
                <li>
                    <strong>Support Collaborative Efforts:</strong> Encourage
                    your student to engage in group activities and teamwork.
                    Your guidance can help them develop their collaborative
                    skills.
                </li>
                <li>
                    <strong>Be Patient and Understanding:</strong> Show patience
                    and understanding towards your student’s need for careful
                    analysis. Give them time to process information and make
                    decisions.
                </li>
            </ul>
        </div>

        <div class=" pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                If You Are an Influential (I) Teacher with a Cautious-Supportive
                (CS) Student
            </h2>
            <p>
                As an Influential teacher, you enjoy social interactions and
                creativity. Here’s how you can support your CS student:
            </p>
            <ul class="list-disc pl-6">
                <li>
                    <strong>Create a Balanced Environment:</strong> Balance your
                    dynamic and energetic approach with the need for structure
                    and routine. Your student thrives in stable and predictable
                    settings.
                </li>
                <li>
                    <strong>Acknowledge Their Efforts:</strong> Regularly
                    acknowledge your student’s detailed and precise work.
                    Positive feedback from you can be especially motivating.
                </li>
                <li>
                    <strong>Encourage Group Participation:</strong> Support
                    activities that involve teamwork and cooperation. Your
                    student will benefit from engaging with others in a
                    supportive setting.
                </li>
                <li>
                    <strong>Provide Reassurance:</strong> Offer reassurance and
                    understanding towards your student’s need for careful
                    analysis. Encourage open discussions about their thoughts
                    and concerns.
                </li>
            </ul>
        </div>

        <div class=" pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                If You Are a Supportive (S) Teacher with a Cautious-Supportive
                (CS) Student
            </h2>
            <p>
                As a Supportive teacher, you value stability and cooperation.
                Here’s how you can support your CS student:
            </p>
            <ul class="list-disc pl-6">
                <li>
                    <strong>Maintain a Structured Environment:</strong> Ensure
                    that your classroom provides a stable and predictable
                    setting. Your student will thrive in a supportive and
                    organised environment.
                </li>
                <li>
                    <strong>Encourage Collaborative Efforts:</strong> Encourage
                    opportunities for your student to work with others. Their
                    cooperative nature makes them a great team player.
                </li>
                <li>
                    <strong>Provide Emotional Support:</strong> Be attentive to
                    your student’s emotional needs. Offer reassurance and
                    comfort when they feel anxious or stressed.
                </li>
                <li>
                    <strong>Celebrate Their Attention to Detail:</strong>
                    Recognise and praise your student’s meticulous and precise
                    work. Their attention to detail is a valuable trait.
                </li>
            </ul>
        </div>

        <div class=" pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                If You Are a Cautious (C) Teacher with a Cautious-Supportive
                (CS) Student
            </h2>
            <p>
                As a Cautious teacher, you appreciate precision and careful
                planning. Here’s how you can support your CS student:
            </p>
            <ul class="list-disc pl-6">
                <li>
                    <strong>Promote Stability and Routine:</strong> Recognise
                    the importance of a structured environment for your student.
                    Establish clear routines and guidelines to help them feel
                    secure.
                </li>
                <li>
                    <strong>Encourage Detailed Work:</strong> Value and praise
                    your student’s attention to detail. Their thoroughness and
                    precision are strengths that can be nurtured.
                </li>
                <li>
                    <strong>Support Collaborative Projects:</strong> Encourage
                    your student to participate in group activities and
                    teamwork. Your shared appreciation for careful analysis can
                    enhance their collaborative efforts.
                </li>
                <li>
                    <strong>Be Patient and Supportive:</strong> Show patience
                    and understanding towards your student’s need for careful
                    analysis. Give them time to process information and make
                    decisions.
                </li>
            </ul>
        </div>
    </div>

    <!-- For D Style Report -->
    <div v-if="style == 'D'">


        <div class=" pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                If You Are a Dominant (D) Teacher with a Dominant (D) Student
            </h2>
            <p>
                As a Dominant teacher, you and your student share a love for
                challenges and leadership. Here’s how you can support your
                Dominant student:
            </p>
            <ul class="list-disc pl-6">
                <li>
                    <strong>Encourage Constructive Competition:</strong> Use
                    your shared competitive nature to drive learning through
                    friendly challenges and competitions.
                </li>
                <li>
                    <strong>Collaborate on Goal-Setting:</strong> Work together
                    to set ambitious academic goals and encourage your student
                    to pursue them.
                </li>
                <li>
                    <strong>Promote Mutual Respect:</strong> Maintain a
                    classroom environment where both of you can express ideas
                    and learn from each other’s perspectives.
                </li>
                <li>
                    <strong>Share Leadership Opportunities:</strong> Provide
                    chances for your student to lead and take responsibility
                    within the classroom.
                </li>
            </ul>
        </div>

        <div class=" pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                If You Are an Influential (I) Teacher with a Dominant (D)
                Student
            </h2>
            <p>
                As an Influential teacher, you bring energy and enthusiasm to
                the classroom. Here’s how you can support your Dominant student:
            </p>
            <ul class="list-disc pl-6">
                <li>
                    <strong>Create an Engaging Environment:</strong> Use your
                    charisma to create a lively classroom atmosphere that
                    encourages participation.
                </li>
                <li>
                    <strong>Inspire Creative Thinking:</strong> Encourage your
                    student to think outside the box and tackle challenges
                    creatively.
                </li>
                <li>
                    <strong>Recognise Their Efforts:</strong> Use your skills in
                    positive reinforcement to celebrate your student’s
                    achievements and progress.
                </li>
                <li>
                    <strong>Promote Group Activities:</strong> Involve your
                    student in activities that allow them to lead and
                    collaborate with peers.
                </li>
            </ul>
        </div>

        <div class=" pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                If You Are a Supportive (S) Teacher with a Dominant (D) Student
            </h2>
            <p>
                As a Supportive teacher, you offer patience and understanding in
                your approach. Here’s how you can support your Dominant student:
            </p>
            <ul class="list-disc pl-6">
                <li>
                    <strong>Provide a Stable Environment:</strong> Create a
                    structured classroom setting that helps your student focus
                    on their goals.
                </li>
                <li>
                    <strong>Encourage Empathy and Teamwork:</strong> Help your
                    student understand the value of teamwork and empathy in
                    group settings.
                </li>
                <li>
                    <strong>Balance Encouragement and Challenge:</strong> While
                    providing encouragement, also introduce tasks that challenge
                    your student to grow.
                </li>
                <li>
                    <strong>Promote Inclusive Participation:</strong> Ensure
                    that all students, including your Dominant student, have a
                    voice in classroom discussions.
                </li>
            </ul>
        </div>

        <div class=" pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                If You Are a Cautious (C) Teacher with a Dominant (D) Student
            </h2>
            <p>
                As a Cautious teacher, you value structure and precision. Here’s
                how you can support your Dominant student:
            </p>
            <ul class="list-disc pl-6">
                <li>
                    <strong>Set Clear Guidelines:</strong> Clearly outline
                    expectations and guidelines to provide a structured learning
                    environment.
                </li>
                <li>
                    <strong>Encourage Thoughtful Analysis:</strong> Challenge
                    your student to think critically and consider all aspects
                    before making decisions.
                </li>
                <li>
                    <strong>Support Leadership Skills:</strong> Provide
                    opportunities for your student to lead and apply their
                    natural abilities.
                </li>
                <li>
                    <strong>Balance Structure with Flexibility:</strong> While
                    maintaining order, allow your student some freedom to
                    explore new ideas.
                </li>
            </ul>
        </div>
    </div>

    <!-- For DC Style Report -->
    <div v-if="style == 'DC'">


        <div class=" pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                If You Are a Dominant (D) Teacher with a Dominant-Cautious (DC) Student

            </h2>
            <p>
                As a Dominant teacher, you appreciate assertiveness and
                efficiency. Here’s how you can support your DC Student:
            </p>
            <ul class="list-disc pl-6">


                <li>
                    <strong>Encourage Shared Leadership:</strong> Allow your
                    student to take on leadership roles and share responsibilities,
                    building mutual respect and teamwork.
                </li>
                <li>
                    <strong>Value Their Analytical Skills:</strong> Recognise
                    their ability to think critically and make informed
                    decisions. Provide opportunities for them to use these
                    skills.
                </li>
                <li>
                    <strong>Balance Assertiveness with Support:</strong> While
                    you both may be assertive; ensure you provide emotional
                    support and understanding.
                </li>
                <li>
                    <strong>Promote Healthy Competition:</strong> Encourage
                    friendly competition in various activities to keep them
                    motivated and engaged.
                </li>
            </ul>
        </div>

        <div class=" pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                If You Are an Influential (I) teacher with a Dominant-Cautious
                (DC) Student
            </h2>
            <p>
                As an Influential teacher, you enjoy social interactions and
                creativity. Here’s how you can support your DC student:
            </p>
            <ul class="list-disc pl-6">
                <li>
                    <strong>Support Their Analytical Initiatives:</strong>
                    Encourage their involvement in activities that require
                    critical thinking and analysis.
                </li>
                <li>
                    <strong>Recognise Their Detail-Oriented Nature:</strong>
                    Appreciate their precision and attention to detail and
                    provide platforms for them to showcase these skills.
                </li>
                <li>
                    <strong>Balance Creativity with Structure:</strong> While
                    you both enjoy different pursuits, help them stay focused on
                    their goals by providing some structure.
                </li>
                <li>
                    <strong>Model Open Communication:</strong> Demonstrate
                    effective communication and active listening, encouraging
                    your student to do the same.
                </li>
            </ul>
        </div>

        <div class=" pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                If You Are a Supportive (S) teacher with a Dominant-Cautious (DC)
                Student
            </h2>
            <p>
                As a Supportive teacher, you value stability and cooperation.
                Here’s how you can support your DC student:
            </p>
            <ul class="list-disc pl-6">
                <li>
                    <strong>Provide a Stable Environment:</strong> Create a
                    consistent and supportive home environment that allows your
                    student to pursue their goals confidently.
                </li>
                <li>
                    <strong>Encourage Analytical Thinking:</strong> Highlight
                    the importance of critical thinking and problem-solving,
                    helping them balance their leadership with analytical
                    skills.
                </li>
                <li>
                    <strong>Celebrate Achievements:</strong> Acknowledge their
                    successes and efforts, reinforcing their confidence and
                    motivation.
                </li>
                <li>
                    <strong>Encourage Open Communication:</strong> Promote
                    honest and open discussions about their goals and
                    aspirations, providing a safe space for them to express
                    their ideas.
                </li>
            </ul>
        </div>

        <div class=" pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                If You Are a Cautious (C) teacher with a Dominant-Cautious (DC)
                Student
            </h2>
            <p>
                As a Cautious teacher, you appreciate precision and careful
                planning. Here’s how you can support your DC student:
            </p>
            <ul class="list-disc pl-6">
                <li>
                    <strong>Encourage Analytical Thinking:</strong> Support your
                    student in developing their analytical skills by discussing the
                    pros and cons of their decisions.
                </li>
                <li>
                    <strong>Support Their Ambitions:</strong> Recognise their
                    drive and ambition and provide detailed guidance to help
                    them achieve their goals.
                </li>
                <li>
                    <strong>Balance Structure with Flexibility:</strong> Offer a
                    structured environment while allowing flexibility for your
                    student to explore new ideas and take risks.
                </li>
                <li>
                    <strong>Provide Constructive Feedback:</strong> Offer
                    specific and constructive feedback to help them refine their
                    skills and approach.
                </li>
            </ul>
        </div>
    </div>

    <!-- For DI Style Report -->
    <div v-if="style == 'DI'">


        <div class=" pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                If You Are a Dominant (D) Teacher with a Dominant-Influential
                (DI) Student
            </h2>
            <p>
                As a Dominant teacher, you appreciate assertiveness and
                efficiency. Here’s how you can support your DI student:
            </p>
            <ul class="list-disc pl-6">
                <li>
                    <strong>Encourage Shared Leadership:</strong> Allow your
                    student to take on leadership roles and share
                    responsibilities, promoting mutual respect and teamwork.
                </li>
                <li>
                    <strong>Value Their Confidence:</strong> Recognise their
                    self-assurance and how it drives their ambition. Provide
                    opportunities for them to set and achieve challenging goals.
                </li>
                <li>
                    <strong>Balance Assertiveness with Support:</strong> While
                    you both may be assertive, ensure you provide emotional
                    support and understanding.
                </li>
                <li>
                    <strong>Promote Healthy Competition:</strong> Encourage
                    friendly competition in various activities to keep them
                    motivated and engaged.
                </li>
            </ul>
        </div>

        <div class=" pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                If You Are an Influential (I) Teacher with a
                Dominant-Influential (DI) Student
            </h2>
            <p>
                As an Influential teacher, you enjoy social interactions and
                creativity. Here’s how you can support your DI student:
            </p>
            <ul class="list-disc pl-6">
                <li>
                    <strong>Support Their Social Initiatives:</strong> Encourage
                    their involvement in social activities and leadership roles
                    where they can shine.
                </li>
                <li>
                    <strong>Recognise Their Charisma:</strong> Appreciate their
                    natural ability to inspire and influence others and provide
                    platforms for them to showcase these skills.
                </li>
                <li>
                    <strong>Balance Creativity with Structure:</strong> While
                    you both enjoy creative pursuits, help them stay focused on
                    their goals by providing some structure.
                </li>
                <li>
                    <strong>Model Open Communication:</strong> Demonstrate
                    effective communication and active listening, encouraging
                    your student to do the same.
                </li>
            </ul>
        </div>

        <div class=" pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                If You Are a Supportive (S) Teacher with a Dominant-Influential
                (DI) Student
            </h2>
            <p>
                As a Supportive teacher, you value stability and cooperation.
                Here’s how you can support your DI student:
            </p>
            <ul class="list-disc pl-6">
                <li>
                    <strong>Provide a Stable Environment:</strong> Create a
                    consistent and supportive classroom environment that allows
                    your student to pursue their goals confidently.
                </li>
                <li>
                    <strong>Encourage Teamwork:</strong> Highlight the
                    importance of collaboration and teamwork, helping them
                    balance their leadership with cooperative skills.
                </li>
                <li>
                    <strong>Celebrate Achievements:</strong> Acknowledge their
                    successes and efforts, reinforcing their confidence and
                    motivation.
                </li>
                <li>
                    <strong>Encourage Open Communication:</strong> Encourage
                    honest and open discussions about their goals and
                    aspirations, providing a safe space for them to express
                    their ideas.
                </li>
            </ul>
        </div>

        <div class=" pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                If You Are a Cautious (C) Teacher with a Dominant-Influential
                (DI) Student
            </h2>
            <p>
                As a Cautious teacher, you appreciate precision and careful
                planning. Here’s how you can support your DI student:
            </p>
            <ul class="list-disc pl-6">
                <li>
                    <strong>Encourage Analytical Thinking:</strong> While your
                    student is naturally confident and assertive, help them
                    develop their analytical skills by discussing the pros and
                    cons of their decisions.
                </li>
                <li>
                    <strong>Support Their Ambitions:</strong> Recognise their
                    drive and ambition and provide detailed guidance to help
                    them achieve their goals.
                </li>
                <li>
                    <strong>Balance Structure with Flexibility:</strong> Offer a
                    structured environment while allowing flexibility for your
                    student to explore new ideas and take risks.
                </li>
                <li>
                    <strong>Provide Constructive Feedback:</strong> Offer
                    specific and constructive feedback to help them refine their
                    skills and approach.
                </li>
            </ul>
        </div>
    </div>

    <!-- For I Style Report -->
    <div v-if="style == 'I'">


        <div class=" pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                If You Are a Dominant (D) Teacher with an Influential (I)
                Student
            </h2>
            <p class="">
                As a Dominant teacher, you appreciate assertiveness and focus.
                Here’s how you can support your Influential student:
            </p>
            <ul class="list-disc pl-6">
                <li>
                    <strong>Encourage Creative Expression:</strong> Allow your
                    student the freedom to explore creative projects and share
                    their ideas with the class.
                </li>
                <li>
                    <strong>Balance Structure and Flexibility:</strong> While
                    you value structure, give your student room to be
                    spontaneous and explore new ideas.
                </li>
                <li>
                    <strong>Recognise Achievements:</strong> Celebrate your
                    student’s successes and encourage them to set ambitious
                    goals.
                </li>
                <li>
                    <strong>Promote Open Communication:</strong> Create an
                    environment where your student feels comfortable expressing
                    their thoughts and ideas.
                </li>
            </ul>
        </div>

        <div class=" pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                If You Are an Influential (I) Teacher with an Influential (I)
                Student
            </h2>
            <p class="">
                As an Influential teacher, you share many traits with your
                student. Here’s how you can support them:
            </p>
            <ul class="list-disc pl-6">
                <li>
                    <strong>Promote Social Connections:</strong> Encourage your
                    student to build friendships and participate in group
                    activities.
                </li>
                <li>
                    <strong>Inspire Through Creativity:</strong> Engage in
                    creative projects together, whether it’s art, music, or
                    other activities you both enjoy.
                </li>
                <li>
                    <strong>Celebrate Together:</strong> Make achievements a
                    classroom affair, celebrating successes in fun and engaging
                    ways.
                </li>
                <li>
                    <strong>Encourage Teamwork:</strong> Teach your student the
                    importance of working with others and being a supportive
                    team player.
                </li>
            </ul>
        </div>

        <div class=" pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                If You Are a Supportive (S) Teacher with an Influential (I)
                Student
            </h2>
            <p class="">
                As a Supportive teacher, you bring patience and understanding.
                Here’s how you can support your Influential student:
            </p>
            <ul class="list-disc pl-6">
                <li>
                    <strong>Provide Stability:</strong> Offer a stable and
                    supportive classroom environment where your student feels
                    safe to express themselves.
                </li>
                <li>
                    <strong>Encourage Empathy:</strong> Help your student
                    understand the importance of considering others’ feelings
                    and perspectives.
                </li>
                <li>
                    <strong>Balance Support and Independence:</strong> While
                    offering guidance, allow your student to take the lead in
                    activities that interest them.
                </li>
                <li>
                    <strong>Promote Social Involvement:</strong> Encourage your
                    student to participate in activities that promote teamwork
                    and cooperation.
                </li>
            </ul>
        </div>

        <div class=" pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                If You Are a Cautious (C) Teacher with an Influential (I)
                Student
            </h2>
            <p class="">
                As a Cautious teacher, you value structure and attention to
                detail. Here’s how you can support your Influential student:
            </p>
            <ul class="list-disc pl-6">
                <li>
                    <strong>Set Clear Expectations:</strong> Clearly outline
                    guidelines and responsibilities, providing a structured
                    environment for your student.
                </li>
                <li>
                    <strong>Encourage Thoughtful Decision-Making:</strong> Guide
                    your student in considering different options before making
                    decisions.
                </li>
                <li>
                    <strong>Support Creative Exploration:</strong> Allow your
                    student to explore their creative interests within a safe
                    and structured framework.
                </li>
                <li>
                    <strong>Balance Routine with Flexibility:</strong> While
                    maintaining routines, allow for flexibility to accommodate
                    your student’s spontaneous nature.
                </li>
            </ul>
        </div>
    </div>

    <!-- For ID Style Report -->
    <div v-if="style == 'ID'">


        <div class=" pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                If You Are a Dominant (D) Teacher with an Influential-Dominant
                (ID) Student
            </h2>
            <p>
                As a Dominant teacher, you appreciate assertiveness and
                efficiency. Here’s how you can support your ID student:
            </p>
            <ul class="list-disc pl-6">
                <li>
                    <strong>Encourage Ambitious Goals:</strong> Help your
                    student set and achieve ambitious academic and personal
                    goals. Your shared drive for success can create a motivating
                    environment.
                </li>
                <li>
                    <strong>Provide Leadership Opportunities:</strong> Support
                    your student in taking on leadership roles. Your guidance
                    can help them refine their leadership skills.
                </li>
                <li>
                    <strong>Balance Structure with Flexibility:</strong> While
                    you value structure, allow some flexibility for your student
                    to explore their social interests and creative pursuits.
                </li>
                <li>
                    <strong>Promote Open Communication:</strong> Encourage open
                    dialogue and active listening to understand their
                    perspectives and build a strong relationship.
                </li>
            </ul>
        </div>

        <div class=" pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                If You Are an Influential (I) Teacher with an
                Influential-Dominant (ID) Student
            </h2>
            <p>
                As an Influential teacher, you enjoy social interactions and
                creativity. Here’s how you can support your ID student:
            </p>
            <ul class="list-disc pl-6">
                <li>
                    <strong>Support Their Social Endeavours:</strong> Encourage
                    their involvement in social activities and creative
                    projects. Your enthusiasm can inspire them to pursue their
                    passions.
                </li>
                <li>
                    <strong>Celebrate Their Achievements:</strong> Regularly
                    celebrate their successes and provide positive reinforcement
                    to keep them motivated.
                </li>
                <li>
                    <strong>Encourage Collaborative Projects:</strong> Engage in
                    activities that allow for teamwork and creativity. Your
                    shared interests can strengthen your bond.
                </li>
                <li>
                    <strong>Model Positive Communication:</strong> Demonstrate
                    effective communication and empathy, encouraging your
                    students to express themselves openly and confidently.
                </li>
            </ul>
        </div>

        <div class=" pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                If You Are a Supportive (S) Teacher with an Influential-Dominant
                (ID) Student
            </h2>
            <p>
                As a Supportive teacher, you value stability and cooperation.
                Here’s how you can support your ID student:
            </p>
            <ul class="list-disc pl-6">
                <li>
                    <strong>Provide a Stable Environment:</strong> Create a
                    consistent and supportive classroom environment that allows
                    your student to pursue their social and leadership interests
                    confidently.
                </li>
                <li>
                    <strong>Encourage Empathy and Understanding:</strong> Help
                    your student develop their empathetic skills by discussing
                    different perspectives and encouraging them to consider
                    others’ feelings.
                </li>
                <li>
                    <strong>Celebrate Their Social Skills:</strong> Acknowledge
                    their ability to build and maintain relationships,
                    reinforcing their confidence and self-esteem.
                </li>
                <li>
                    <strong>Promote Open Communication:</strong> Encourage
                    honest and open discussions about their goals and
                    aspirations, providing a safe space for them to express
                    their ideas.
                </li>
            </ul>
        </div>

        <div class=" pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                If You Are a Cautious (C) Teacher with an Influential-Dominant
                (ID) Student
            </h2>
            <p>
                As a Cautious teacher, you appreciate precision and careful
                planning. Here’s how you can support your ID student:
            </p>
            <ul class="list-disc pl-6">
                <li>
                    <strong>Encourage Social Interaction:</strong> Support your
                    student in engaging with others and participating in social
                    activities. Your guidance can help them balance their social
                    life with other responsibilities.
                </li>
                <li>
                    <strong>Provide Constructive Feedback:</strong> Offer
                    specific and constructive feedback to help them refine their
                    social and leadership skills.
                </li>
                <li>
                    <strong>Balance Structure with Social Activities:</strong>
                    While you value structure, allow some flexibility for your
                    student to explore their social interests and creative
                    pursuits.
                </li>
                <li>
                    <strong>Promote Empathy and Understanding:</strong> Help
                    your student develop their empathetic skills by discussing
                    different perspectives and encouraging them to consider
                    others’ feelings.
                </li>
            </ul>
        </div>
    </div>

    <!-- For IS Style Report -->
    <div v-if="style == 'IS'">

        <div class=" pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                If You Are a Dominant (D) Teacher with an Influential-Supportive
                (IS) Student
            </h2>
            <p class="">
                As a Dominant teacher, you appreciate assertiveness and
                efficiency. Here’s how you can support your IS student:
            </p>
            <ul class="list-disc pl-6">
                <li>
                    <strong>Encourage Social Leadership:</strong> Allow your
                    student to take on leadership roles in social and group
                    settings. Their charisma can inspire and motivate others.
                </li>
                <li>
                    <strong>Provide Positive Feedback:</strong> Regularly
                    acknowledge their efforts and successes to boost their
                    confidence and keep them motivated.
                </li>
                <li>
                    <strong>Balance Structure with Flexibility:</strong> While
                    you value structure, allow some flexibility for your student
                    to explore their social interests and creative pursuits.
                </li>
                <li>
                    <strong>Promote Open Communication:</strong> Encourage open
                    dialogue and active listening to understand their
                    perspectives and build a strong relationship.
                </li>
            </ul>
        </div>

        <div class=" pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                If You Are an Influential (I) Teacher with an
                Influential-Supportive (IS) Student
            </h2>
            <p class="">
                As an Influential teacher, you enjoy social interactions and
                creativity. Here’s how you can support your IS student:
            </p>
            <ul class="list-disc pl-6">
                <li>
                    <strong>Support Their Social Endeavours:</strong> Encourage
                    their involvement in social activities and creative
                    projects. Your enthusiasm can inspire them to pursue their
                    passions.
                </li>
                <li>
                    <strong>Celebrate Their Achievements:</strong> Regularly
                    celebrate their successes and provide positive reinforcement
                    to keep them motivated.
                </li>
                <li>
                    <strong>Promote Collaborative Projects:</strong> Engage in
                    activities that allow for teamwork and creativity. Your
                    shared interests can strengthen your bond.
                </li>
                <li>
                    <strong>Model Positive Communication:</strong> Demonstrate
                    effective communication and empathy, encouraging your
                    students to express themselves openly and confidently.
                </li>
            </ul>
        </div>

        <div class=" pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                If You Are a Supportive (S) Teacher with an
                Influential-Supportive (IS) Student
            </h2>
            <p class="">
                As a Supportive teacher, you value stability and cooperation.
                Here’s how you can support your IS student:
            </p>
            <ul class="list-disc pl-6">
                <li>
                    <strong>Provide a Stable Environment:</strong> Create a
                    consistent and supportive classroom environment that allows
                    your student to pursue their social and creative interests
                    confidently.
                </li>
                <li>
                    <strong>Encourage Empathy and Understanding:</strong> Help
                    your student develop their empathetic skills by discussing
                    different perspectives and encouraging them to consider
                    others’ feelings.
                </li>
                <li>
                    <strong>Celebrate Their Social Skills:</strong> Acknowledge
                    their ability to build and maintain relationships,
                    reinforcing their confidence and self-esteem.
                </li>
                <li>
                    <strong>Promote Open Communication:</strong> Encourage
                    honest and open discussions about their goals and
                    aspirations, providing a safe space for them to express
                    their ideas.
                </li>
            </ul>
        </div>

        <div class=" pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                If You Are a Cautious (C) Teacher with an Influential-Supportive
                (IS) Student
            </h2>
            <p class="">
                As a Cautious teacher, you appreciate precision and careful
                planning. Here’s how you can support your IS student:
            </p>
            <ul class="list-disc pl-6">
                <li>
                    <strong>Encourage Social Interaction:</strong> Support your
                    student in engaging with others and participating in social
                    activities. Your guidance can help them balance their social
                    life with other responsibilities.
                </li>
                <li>
                    <strong>Provide Constructive Feedback:</strong> Offer
                    specific and constructive feedback to help them refine their
                    social and creative skills.
                </li>
                <li>
                    <strong>Balance Structure with Social Activities:</strong>
                    While you value structure, allow some flexibility for your
                    student to explore their social interests and creative
                    pursuits.
                </li>
                <li>
                    <strong>Promote Empathy and Understanding:</strong> Help
                    your student develop their empathetic skills by discussing
                    different perspectives and encouraging them to consider
                    others’ feelings.
                </li>
            </ul>
        </div>
    </div>

    <!-- For S Style Report -->
    <div v-if="style == 'S'">


        <div class=" pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                If You Are a Dominant (D) Teacher with a Supportive (S) Student
            </h2>
            <p>
                As a Dominant teacher, you appreciate assertiveness and
                efficiency. Here’s how you can support your Supportive student:
            </p>
            <ul class="list-disc pl-6">
                <li>
                    <strong>Encourage Open Communication:</strong> Create an
                    environment where your student feels comfortable sharing
                    their thoughts and ideas without feeling rushed.
                </li>
                <li>
                    <strong>Value Their Input:</strong> Show appreciation for
                    their contributions and encourage them to express their
                    opinions and ideas confidently.
                </li>
                <li>
                    <strong>Promote Independence:</strong> Gently encourage your
                    student to take initiative and make decisions, supporting
                    them as they build confidence.
                </li>
                <li>
                    <strong>Balance Goals with Support:</strong> While focusing
                    on achieving objectives, remember to offer encouragement and
                    understanding to maintain a supportive atmosphere.
                </li>
            </ul>
        </div>

        <div class=" pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                If You Are an Influential (I) Teacher with a Supportive (S)
                Student
            </h2>
            <p>
                As an Influential teacher, you enjoy social interactions and
                creativity. Here’s how you can support your Supportive student:
            </p>
            <ul class="list-disc pl-6">
                <li>
                    <strong>Encourage Social Activities:</strong> Support your
                    student in participating in group projects and social events
                    where they can build friendships.
                </li>
                <li>
                    <strong>Value Their Supportive Nature:</strong> Recognise
                    their kindness and reliability, encouraging them to continue
                    being a caring team member.
                </li>
                <li>
                    <strong>Share Creative Experiences:</strong> Engage in
                    creative activities that allow your student to express
                    themselves in a supportive setting.
                </li>
                <li>
                    <strong>Model Open Communication:</strong> Demonstrate how
                    to express thoughts and feelings openly, encouraging your
                    student to do the same.
                </li>
            </ul>
        </div>

        <div class=" pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                If You Are a Supportive (S) Teacher with a Supportive (S)
                Student
            </h2>
            <p>
                As a Supportive teacher, you share many traits with your
                student. Here’s how you can support them:
            </p>
            <ul class="list-disc pl-6">
                <li>
                    <strong>Provide a Stable Environment:</strong> Maintain a
                    consistent classroom routine, offering a sense of security
                    and predictability.
                </li>
                <li>
                    <strong>Encourage Empathy and Understanding:</strong>
                    Nurture your student’s natural empathy by discussing the
                    importance of considering others’ perspectives.
                </li>
                <li>
                    <strong>Celebrate Achievements:</strong> Acknowledge their
                    efforts and successes, reinforcing their confidence and
                    motivation.
                </li>
                <li>
                    <strong>Promote Communication:</strong> Encourage open and
                    honest conversations about feelings and experiences.
                </li>
            </ul>
        </div>

        <div class=" pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                If You Are a Cautious (C) Teacher with a Supportive (S) Student
            </h2>
            <p>
                As a Cautious teacher, you value structure and attention to
                detail. Here’s how you can support your Supportive student:
            </p>
            <ul class="list-disc pl-6">
                <li>
                    <strong>Provide Clear Expectations:</strong> Outline
                    guidelines and responsibilities, ensuring your student
                    understands what is expected of them.
                </li>
                <li>
                    <strong>Encourage Careful Decision-Making:</strong> Guide
                    your student in thinking through their choices, emphasising
                    the importance of considering consequences.
                </li>
                <li>
                    <strong>Support Social Engagement:</strong> Encourage
                    participation in social activities that build teamwork and
                    cooperation.
                </li>
                <li>
                    <strong>Balance Structure with Flexibility:</strong> While
                    maintaining routines, allow for flexibility to accommodate
                    your student’s social and supportive nature.
                </li>
            </ul>
        </div>
    </div>

    <!-- For SC Style Report -->
    <div v-if="style == 'SC'">


        <div class=" pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                If You Are a Dominant (D) Teacher with a Supportive-Cautious
                (SC) Student
            </h2>
            <p>
                As a Dominant teacher, you appreciate assertiveness and
                efficiency. Here’s how you can support your SC student:
            </p>
            <ul class="list-disc pl-6">
                <li>
                    <strong>Encourage Attention to Detail:</strong> Recognise
                    and praise your student’s meticulous nature. Help them find
                    activities that align with their strength in accuracy and
                    detail.
                </li>
                <li>
                    <strong>Provide Stability:</strong> While you may thrive on
                    change and challenges, create a stable environment for your
                    student. Stability will help them feel secure and focused.
                </li>
                <li>
                    <strong>Promote Open Communication:</strong> Create an
                    environment where your student feels comfortable expressing
                    their needs and concerns. Encourage honest and respectful
                    dialogue.
                </li>
                <li>
                    <strong>Support Collaborative Efforts:</strong> Encourage
                    your student to participate in group activities and
                    teamwork. Your guidance can help them develop their
                    collaborative skills.
                </li>
            </ul>
        </div>

        <div class=" pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                If You Are an Influential (I) Teacher with a Supportive-Cautious
                (SC) Student
            </h2>
            <p>
                As an Influential teacher, you enjoy social interactions and
                creativity. Here’s how you can support your SC student:
            </p>
            <ul class="list-disc pl-6">
                <li>
                    <strong>Celebrate Their Detailed Work:</strong> Appreciate
                    your student’s attention to detail and thoroughness. Your
                    enthusiasm can motivate them to continue excelling in their
                    careful approach.
                </li>
                <li>
                    <strong>Provide Structure and Routine:</strong> While you
                    thrive on spontaneity, create a consistent routine for your
                    student. A predictable environment helps them feel more
                    secure.
                </li>
                <li>
                    <strong>Encourage Team Participation:</strong> Promote
                    activities that involve teamwork and cooperation. Your
                    student will benefit from engaging with others in a
                    supportive setting.
                </li>
                <li>
                    <strong>Be Supportive and Understanding:</strong> Show
                    empathy and understanding towards your student’s cautious
                    nature. Encourage open discussions about their feelings and
                    concerns.
                </li>
            </ul>
        </div>

        <div class=" pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                If You Are a Supportive (S) Teacher with a Supportive-Cautious
                (SC) Student
            </h2>
            <p>
                As a Supportive teacher, you value stability and cooperation.
                Here’s how you can support your SC student:
            </p>
            <ul class="list-disc pl-6">
                <li>
                    <strong>Maintain a Stable Environment:</strong> Ensure that
                    your classroom provides a consistent and predictable
                    setting. Your student will thrive in a secure and steady
                    environment.
                </li>
                <li>
                    <strong>Encourage Collaborative Efforts:</strong> Promote
                    opportunities for your student to work with others. Their
                    cooperative nature makes them a great team player.
                </li>
                <li>
                    <strong>Provide Emotional Support:</strong> Be attentive to
                    your student’s emotional needs. Offer reassurance and
                    comfort when they feel anxious or stressed.
                </li>
                <li>
                    <strong>Promote Attention to Detail:</strong> Encourage
                    activities that align with your student’s strength in
                    accuracy and detail. Praise their meticulous work and
                    careful analysis.
                </li>
            </ul>
        </div>

        <div class=" pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                If You Are a Cautious (C) Teacher with a Supportive-Cautious
                (SC) Student
            </h2>
            <p>
                As a Cautious teacher, you appreciate precision and careful
                planning. Here’s how you can support your SC student:
            </p>
            <ul class="list-disc pl-6">
                <li>
                    <strong>Encourage Analytical Thinking:</strong> Support your
                    student’s analytical and detail-oriented approach. Engage in
                    activities that challenge their precision and thoroughness.
                </li>
                <li>
                    <strong>Provide Constructive Feedback:</strong> Offer
                    specific and constructive feedback to help them refine their
                    skills. Your attention to detail can guide their growth.
                </li>
                <li>
                    <strong>Promote Stability:</strong> Create a stable and
                    predictable environment. Your student will feel more secure
                    and focused in a well-structured setting.
                </li>
                <li>
                    <strong>Support Collaborative Projects:</strong> Encourage
                    your student to participate in group activities and
                    teamwork. Your shared attention to detail ensures
                    high-quality results.
                </li>
            </ul>
        </div>
    </div>

    <!-- For SI Style Report -->
    <div v-if="style == 'SI'">


        <div class=" pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                If You Are a Dominant (D) Teacher with a Supportive-Influential
                (SI) Student
            </h2>
            <p>
                As a Dominant teacher, you appreciate assertiveness and
                efficiency. Here’s how you can support your SI student:
            </p>
            <ul class="list-disc pl-6">
                <li>
                    <strong>Encourage Social Interaction:</strong> Recognise and
                    support your student’s need for social engagement. Encourage
                    participation in group activities and social events.
                </li>
                <li>
                    <strong>Provide Positive Feedback:</strong> While you value
                    results, make sure to praise your student’s efforts and
                    achievements. Positive reinforcement boosts their
                    confidence.
                </li>
                <li>
                    <strong>Support Collaborative Efforts:</strong> Encourage
                    your student to engage in group activities and teamwork.
                    Your guidance can help them develop their collaborative
                    skills.
                </li>
                <li>
                    <strong>Be Patient and Understanding:</strong> Show patience
                    and understanding towards your student’s empathetic nature.
                    Create an environment where they feel comfortable expressing
                    their emotions.
                </li>
            </ul>
        </div>

        <div class=" pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                If You Are an Influential (I) Teacher with a
                Supportive-Influential (SI) Student
            </h2>
            <p>
                As an Influential teacher, you enjoy social interactions and
                creativity. Here’s how you can support your SI student:
            </p>
            <ul class="list-disc pl-6">
                <li>
                    <strong>Celebrate Social Engagement:</strong> Appreciate and
                    join your students in social activities. Your shared
                    enthusiasm for socialising can strengthen your bond.
                </li>
                <li>
                    <strong>Provide Encouragement:</strong> Regularly
                    acknowledge your students' efforts and successes. Positive
                    feedback from you can be especially motivating.
                </li>
                <li>
                    <strong>Promote Team Participation:</strong> Encourage
                    activities that involve teamwork and cooperation. Your
                    student will benefit from engaging with others in a
                    supportive setting.
                </li>
                <li>
                    <strong>Be Empathetic and Supportive:</strong> Show empathy
                    and understanding towards your student’s needs. Encourage
                    open discussions about their feelings and concerns.
                </li>
            </ul>
        </div>

        <div class=" pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                If You Are a Supportive (S) Teacher with a
                Supportive-Influential (SI) Student
            </h2>
            <p>
                As a Supportive teacher, you value stability and cooperation.
                Here’s how you can support your SI student:
            </p>
            <ul class="list-disc pl-6">
                <li>
                    <strong>Maintain a Positive Environment:</strong> Ensure
                    that your classroom provides a positive and encouraging
                    setting. Your student will thrive in a supportive and
                    harmonious environment.
                </li>
                <li>
                    <strong>Encourage Collaborative Efforts:</strong> Encourage
                    opportunities for your student to work with others. Their
                    cooperative nature makes them a great team player.
                </li>
                <li>
                    <strong>Provide Emotional Support:</strong> Be attentive to
                    your student’s emotional needs. Offer reassurance and
                    comfort when they feel anxious or stressed.
                </li>
                <li>
                    <strong>Celebrate Their Social Nature:</strong> Encourage
                    your student’s social activities and recognise the
                    importance of their friendships.
                </li>
            </ul>
        </div>

        <div class=" pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                If You Are a Cautious (C) Teacher with a Supportive-Influential
                (SI) Student
            </h2>
            <p>
                As a Cautious teacher, you appreciate precision and careful
                planning. Here’s how you can support your SI student:
            </p>
            <ul class="list-disc pl-6">
                <li>
                    <strong>Encourage Social Interaction:</strong> Recognise the
                    importance of social engagement for your student. Support
                    their participation in social activities and events.
                </li>
                <li>
                    <strong>Provide Constructive Feedback:</strong> Offer
                    specific and constructive feedback to help them refine their
                    social and collaborative skills.
                </li>
                <li>
                    <strong>Promote Stability and Routine:</strong> While you
                    value structure, make sure to allow flexibility for your
                    student’s social activities.
                </li>
                <li>
                    <strong>Support Collaborative Projects:</strong> Encourage
                    your student to participate in group activities and
                    teamwork. Your attention to detail can help guide their
                    collaborative efforts.
                </li>
            </ul>
        </div>
    </div>
    </div>
    </div>
</template>

<script>
import AssessmentTypes from "@/Layouts/AssessmentTypes.vue";

export default {
    name: "TipsForTeacher",
    layout: AssessmentTypes,
    props: {
        style: String,
        childName: String,
        image: String,
    },
};
</script>

<style scoped>
h2 {
    color: rgb(55 48 163);
    font-weight: bold !important;
}


strong {
    color: rgb(36, 168, 250);
    font-weight: bold;
    color: #fa25c4;
}
ul > li {
    margin-top: 13px;
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

    /* Adjust image container on mobile */
    .col-6 .flex.justify-center.items-center {
        margin: 1rem 0;
    }

    /* Adjust spacing between sections */
    .row + .row {
        margin-top: 1rem;
    }

    /* Make text more readable on mobile */
    /* h2 {
        font-size: 1.5rem;
        line-height: 2rem;
    } */

    ul.list-disc {
        padding-left: 1rem;
    }
}
</style>
