<template>
     <div class="p-6">
    <div class="space-y-6 mt-3">
        <h1 class="font-bold mb-4 text-center">
            Decision Making And Motivation
        </h1>
    </div>
    <div class="p-4 md:p-6">


    <!-- For C Style Report -->
    <div v-if="style == 'C'">
        <!-- Content for C -->

        <div class="row">
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">How You Make Decisions</h2>
                <p>
                    With a Cautious (C) style, your decision-making process is
                    often logical and well-considered. Here’s how you approach
                    decisions:
                </p>
                <ul class="list-disc ml-6 mb-6">
                    <li>
                        <strong>Analytical Approach:</strong> You rely on data
                        and evidence to guide your decisions, carefully
                        evaluating all available information before making a
                        choice. This analytical approach ensures that your
                        decisions are well-thought-out and based on sound
                        reasoning.
                    </li>
                    <li>
                        <strong>Thorough Evaluation:</strong> You consider
                        multiple perspectives and potential outcomes, taking the
                        time to weigh the pros and cons of each option. This
                        thorough evaluation helps you make informed decisions
                        that minimise risks.
                    </li>
                    <li>
                        <strong>Preference for Structure:</strong> You prefer
                        making decisions within structured environments where
                        there are clear guidelines and expectations. Having a
                        framework to work within helps you feel more confident
                        in your choices.
                    </li>
                    <li>
                        <strong>Cautious and Careful:</strong> You take a
                        careful and measured approach to decision-making,
                        avoiding impulsive choices and ensuring that all aspects
                        are considered.
                    </li>
                </ul>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img
                        class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Decisionmakingandmotivation/6.png'"
                        alt=""
                    />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img
                        class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Decisionmakingandmotivation/7.png'"
                        alt=""
                    />
                </div>
            </div>
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">What Motivates You</h2>
                <p>
                    Understanding what drives you can help you stay inspired and
                    achieve your goals. Here’s what motivates someone with a
                    Cautious style:
                </p>
                <ul class="list-disc ml-6">
                    <li>
                        <strong>Desire for Accuracy:</strong> You strive for
                        accuracy and precision in your work, finding
                        satisfaction in completing tasks correctly.
                    </li>
                    <li>
                        <strong>Need for Knowledge:</strong> You are motivated
                        by a desire to learn and understand new concepts,
                        seeking out opportunities for intellectual growth.
                    </li>
                    <li>
                        <strong>Preference for Stability:</strong> You feel
                        motivated when working in stable and predictable
                        environments where you know what to expect.
                    </li>
                    <li>
                        <strong>Achievement of High Standards:</strong> You set
                        high standards for yourself and are driven by the desire
                        to meet or exceed those standards.
                    </li>
                </ul>
            </div>
        </div>

        <div class="overflow-x-auto">
            <h2 class="text-xl md:text-3xl mb-4">
                Table of Decision-Making Traits for Cautious Style
            </h2>
            <table class="table-auto border-collapse border w-full text-sm">
                <thead class="">
                    <tr>
                        <th
                            class="border border-gray-300 px-4 py-2 text-left font-semibold"
                        >
                            Trait
                        </th>
                        <th
                            class="border border-gray-300 px-4 py-2 text-left font-semibold"
                        >
                            Descriptive Words
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">
                            Analytical Approach
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Logical, Data-driven, Evidence-based, Rational,
                            Methodical, Systematic, Detailed, Critical,
                            Evaluative, Objective
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">
                            Thorough Evaluation
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Comprehensive, In-depth, Thoughtful, Careful,
                            Balanced, Considerate, Deliberate, Pondering,
                            Insightful, Discerning
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">
                            Preference for Structure
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Organised, Structured, Systematic, Methodical,
                            Consistent, Orderly, Regular, Predictable, Reliable,
                            Routine
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">
                            Cautious and Careful
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Prudent, Conservative, Risk-averse, Thoughtful,
                            Guarded, Wary, Deliberate, Hesitant, Safe, Vigilant
                        </td>
                    </tr>
                </tbody>
            </table>
            <p class="mt-4 text-sm">
                These words capture how you make decisions and what keeps you
                motivated. Use this insight to channel your energy toward
                achieving your personal and academic goals.
            </p>
        </div>
    </div>

    <!-- For CD Style Report -->
    <div v-if="style == 'CD'">
        <div class="row">
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">How You Make Decisions</h2>
                <p class="">
                    With a Cautious-Dominant (CD) style, your decision-making
                    process is a blend of careful analysis and confident action.
                    Here’s how you typically make decisions:
                </p>
                <ul class="list-disc pl-6">
                    <li>
                        <strong>Thorough and Analytical:</strong> You take the
                        time to carefully consider all options, gathering
                        relevant information before making a decision. Your
                        analytical nature ensures that your choices are
                        well-informed and based on logic and evidence.
                    </li>
                    <li>
                        <strong>Decisive and Goal-Oriented:</strong> Once you
                        have analysed the situation, you make decisions quickly
                        and with confidence. You are focused on achieving
                        results and are not afraid to take decisive action to
                        reach your goals.
                    </li>
                    <li>
                        <strong>Independent Decision-Maker:</strong> You prefer
                        to rely on your own judgment when making decisions.
                        While you may seek input from others, you trust your
                        abilities and often make decisions independently.
                    </li>
                    <li>
                        <strong>Focused on Outcomes:</strong> You are driven by
                        the desire to achieve specific outcomes. Your decisions
                        are guided by clear goals, and you work diligently to
                        ensure that your choices lead to successful results.
                    </li>
                </ul>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img
                        class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Decisionmakingandmotivation/6.png'"
                        alt=""
                    />
                </div>
            </div>
        </div>

        <div class="p-6 pt-1 mt-1 row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img
                        class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Decisionmakingandmotivation/7.png'"
                        alt=""
                    />
                </div>
            </div>
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">What Motivates You</h2>
                <p class="">
                    Understanding what drives you can help you stay inspired and
                    achieve your goals. Here’s what motivates someone with a
                    Cautious-Dominant style:
                </p>
                <ul class="list-disc pl-6">
                    <li>
                        <strong>Achieving Success:</strong> You are motivated by
                        the desire to succeed and accomplish your goals. Whether
                        it’s academic achievements, personal milestones, or
                        career aspirations, success is a key driver for you.
                    </li>
                    <li>
                        <strong>Solving Problems:</strong> You thrive on finding
                        solutions to complex problems. The challenge of
                        analysing situations and coming up with effective
                        strategies is highly motivating.
                    </li>
                    <li>
                        <strong>Independence and Autonomy:</strong> You are
                        motivated by the ability to work independently and make
                        decisions on your own. Having control over your tasks
                        and responsibilities empowers you to perform at your
                        best.
                    </li>
                    <li>
                        <strong>Efficiency and Productivity:</strong> You are
                        driven by the need to be efficient and productive.
                        Accomplishing tasks quickly and effectively gives you a
                        sense of satisfaction and fulfilment.
                    </li>
                </ul>
            </div>
        </div>

        <div class="p-6">
            <h2 class="text-xl md:text-3xl mb-4">
                Table of Decision-Making Traits for Cautious-Dominant Style
            </h2>
            <table
                class="table-auto border-collapse border border-gray-300 w-full"
            >
                <thead>
                    <tr class="">
                        <th class="border border-gray-300 px-4 py-2 text-left">
                            Trait
                        </th>
                        <th class="border border-gray-300 px-4 py-2 text-left">
                            Descriptive Words
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Thorough and Analytical
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Logical, Detailed, Methodical, Precise, Systematic,
                            Careful, Rational, Objective, Thoughtful, Structured
                        </td>
                    </tr>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Decisive and Goal-Oriented
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Confident, Determined, Goal-driven, Focused,
                            Assertive, Bold, Decisive, Strategic, Commanding,
                            Direct
                        </td>
                    </tr>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Independent Decision-Maker
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Self-reliant, Autonomous, Independent, Confident,
                            Trusting, Decisive, Strong-willed, Resilient,
                            Assertive, Competent
                        </td>
                    </tr>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Focused on Outcomes
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Result-oriented, Goal-focused, Efficient, Driven,
                            Productive, Determined, Practical, Strategic,
                            Purposeful, Committed
                        </td>
                    </tr>
                </tbody>
            </table>
            <p class="mt-4 font-bold">
                These words capture how you make decisions and what keeps you
                motivated. Use this insight to channel your energy toward
                achieving your personal and academic goals.
            </p>
        </div>
    </div>

    <!-- For CS Style Report -->
    <div v-if="style == 'CS'">
        <div class=" row">
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">How You Make Decisions</h2>
                <p class="">
                    With a Cautious-Supportive (CS) style, your decision-making
                    process combines careful analysis and empathy. Here’s how
                    you typically make decisions: Thoughtful and Analytical: You
                    take the time to carefully consider all options and gather
                    relevant information before making a decision. Your
                    analytical nature ensures that your choices are
                    well-informed and thorough.
                </p>
                <ul class="list-disc pl-6">
                    <li>
                        <strong>Consideration of Others:</strong> You think
                        about how your decisions will impact those around you.
                        Your empathetic nature ensures that you make choices
                        that are considerate and supportive of others.
                    </li>
                    <li>
                        <strong>Consultative:</strong> You value the opinions
                        and perspectives of others and often seek input from
                        friends, family, or mentors before making a decision.
                        This collaborative approach helps you make well-rounded
                        choices.
                    </li>
                    <li>
                        <strong>Seeking Stability:</strong> You prefer making
                        decisions that maintain stability and avoid unnecessary
                        risks. Your supportive attitude ensures that your
                        choices contribute to a secure and harmonious
                        environment.
                    </li>
                </ul>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img
                        class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Decisionmakingandmotivation/6.png'"
                        alt=""
                    />
                </div>
            </div>
        </div>

        <div class="p-6 pb-0 row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img
                        class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Decisionmakingandmotivation/7.png'"
                        alt=""
                    />
                </div>
            </div>
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">What Motivates You</h2>
                <p class="">
                    Understanding what drives you can help you stay inspired and
                    achieve your goals. Here’s what motivates someone with a
                    Cautious-Supportive style:
                </p>
                <ul class="list-disc pl-6">
                    <li>
                        <strong>Helping Others:</strong> You are motivated by
                        opportunities to support and help others. Knowing that
                        your actions make a positive difference in someone’s
                        life is deeply fulfilling for you.
                    </li>
                    <li>
                        <strong>Building Trust:</strong> Developing and
                        maintaining strong, trustworthy relationships is
                        important to you. You are motivated by the connections
                        you make and the trust you build with others.
                    </li>
                    <li>
                        <strong>Achieving Accuracy:</strong> You thrive on
                        achieving accuracy and precision in your work.
                        Completing tasks meticulously and correctly gives you a
                        sense of accomplishment.
                    </li>
                    <li>
                        <strong>Providing Stability:</strong> You are motivated
                        by creating and maintaining a stable and supportive
                        environment. Knowing that your actions contribute to a
                        secure setting is rewarding for you.
                    </li>
                </ul>
            </div>
        </div>

        <div class="p-6">
            <h2 class="text-xl md:text-3xl mb-4">
                Table of Decision-Making Traits for Cautious-Supportive Style
            </h2>
            <table
                class="table-auto border-collapse border border-gray-300 w-full"
            >
                <thead>
                    <tr class="">
                        <th class="border border-gray-300 px-4 py-2 text-left">
                            Trait
                        </th>
                        <th class="border border-gray-300 px-4 py-2 text-left">
                            Descriptive Words
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Thoughtful and Analytical
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Analytical, Detailed, Logical, Methodical, Precise,
                            Careful, Thorough, Systematic, Objective, Rational
                        </td>
                    </tr>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Considerate of Others
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Empathetic, Understanding, Thoughtful, Caring,
                            Supportive, Respectful, Kind, Compassionate,
                            Considerate, Relational
                        </td>
                    </tr>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Consultative
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Collaborative, Inclusive, Open-minded, Respectful,
                            Cooperative, Thoughtful, Seeking Input, Supportive,
                            Trusting, Relational
                        </td>
                    </tr>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Seeking Stability
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Stable, Secure, Predictable, Consistent, Reliable,
                            Safe, Trustworthy, Calm, Steady, Reassuring
                        </td>
                    </tr>
                </tbody>
            </table>
            <p class="mt-4 font-bold">
                These words capture how you make decisions and what keeps you
                motivated. Use this insight to channel your energy toward
                achieving your personal and academic goals.
            </p>
        </div>
    </div>

    <!-- For D Style Report -->
    <div v-if="style == 'D'">
        <div class=" row">
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">How You Make Decisions</h2>
                <p class="">
                    With a Dominant (D) style, your decision-making process is
                    fast and confident. Here’s how you approach decisions:
                </p>
                <ul class="list-disc pl-6">
                    <li>
                        <strong>Quick and Decisive:</strong> You make decisions
                        quickly and don’t hesitate to take action. This helps
                        you stay ahead and keep things moving.
                    </li>
                    <li>
                        <strong>Goal-Oriented:</strong> You focus on what needs
                        to be achieved and decide based on what will get you
                        closer to your goals.
                    </li>
                    <li>
                        <strong>Confident:</strong> You trust your instincts and
                        back your choices, which makes you a natural leader in
                        group situations.
                    </li>
                    <li>
                        <strong>Results-Focused:</strong> You look for outcomes
                        that will have the best impact, often prioritising
                        efficiency and effectiveness.
                    </li>
                </ul>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img
                        class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Decisionmakingandmotivation/6.png'"
                        alt=""
                    />
                </div>
            </div>
        </div>

        <div class="p-6 mt-6 row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img
                        class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Decisionmakingandmotivation/7.png'"
                        alt=""
                    />
                </div>
            </div>
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">What Motivates You</h2>
                <p class="">
                    Understanding what drives you can help you stay inspired and
                    achieve your goals. Here’s what motivates someone with a
                    Dominant style:
                </p>
                <ul class="list-disc pl-6">
                    <li>
                        <strong>Challenges:</strong> You love taking on new
                        challenges and proving that you can succeed. Difficult
                        tasks are exciting for you.
                    </li>
                    <li>
                        <strong>Achievements:</strong> Reaching your goals and
                        seeing results keeps you motivated. You enjoy the
                        feeling of accomplishment when you complete a task.
                    </li>
                    <li>
                        <strong>Leadership Opportunities:</strong> Being in
                        charge and guiding others is something you thrive on.
                        You like having the chance to make decisions and
                        influence outcomes.
                    </li>
                    <li>
                        <strong>Recognition:</strong> Getting recognised for
                        your hard work and successes boosts your motivation and
                        encourages you to keep pushing forward.
                    </li>
                </ul>
            </div>
        </div>

        <div class="p-6">
            <h2 class="text-xl md:text-3xl mb-4">
                Table of Decision-Making Traits for Dominant Style
            </h2>
            <table
                class="table-auto border-collapse border border-gray-300 w-full"
            >
                <thead>
                    <tr class="">
                        <th class="border border-gray-300 px-4 py-2 text-left">
                            Trait
                        </th>
                        <th class="border border-gray-300 px-4 py-2 text-left">
                            Descriptive Words
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Quick and Decisive
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Fast, Assertive, Confident, Decisive, Instant, Bold,
                            Unhesitant, Immediate, Swift, Sure-footed
                        </td>
                    </tr>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Goal-Oriented
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Focused, Determined, Driven, Ambitious, Purposeful,
                            Targeted, Visionary, Single-minded, Intent, Directed
                        </td>
                    </tr>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Confident
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Trusting, Assured, Self-reliant, Bold, Fearless,
                            Positive, Unwavering, Steadfast, Reliable, Secure
                        </td>
                    </tr>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Results-Focused
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Effective, Outcome-driven, Efficient,
                            Result-oriented, Practical, Impactful, Productive,
                            Achieving, Accomplished, Conclusive
                        </td>
                    </tr>
                </tbody>
            </table>
            <p class="mt-4 font-bold">
                These words capture how you make decisions and what keeps you
                motivated. Use this insight to channel your energy toward
                achieving your personal and academic goals.
            </p>
        </div>
    </div>

    <!-- For DC Style Report -->
    <div v-if="style == 'DC'">
        <div class="p-6 pb-0 row">
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">How You Make Decisions</h2>
                <p>
                    With a Dominant-Cautious (DC) style, your decision-making
                    process is both bold and meticulous. Here’s how you approach
                    decisions:
                </p>
                <ul class="list-disc pl-6">
                    <li>
                        <strong>Decisive and Confident:</strong> You make
                        decisions quickly and confidently, relying on your
                        instincts and past experiences. Your assertiveness
                        allows you to take charge and guide others toward
                        achieving goals.
                    </li>
                    <li>
                        <strong>Analytical and Thorough:</strong> You carefully
                        analyse all available information before making a
                        decision. Your attention to detail ensures that your
                        choices are well-informed and thought out.
                    </li>
                    <li>
                        <strong>Strategic Thinking:</strong> You often look at
                        the big picture and consider long-term outcomes. This
                        strategic approach helps you set ambitious objectives
                        and plan effectively to achieve them.
                    </li>
                    <li>
                        <strong>Risk Management:</strong> You are willing to
                        take calculated risks to achieve your goals. Your
                        ability to balance boldness with careful analysis helps
                        you navigate challenges and adapt to changing
                        circumstances.
                    </li>
                </ul>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img
                        class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Decisionmakingandmotivation/6.png'"
                        alt=""
                    />
                </div>
            </div>
        </div>

        <div class="p-6 pb-0 row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img
                        class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Decisionmakingandmotivation/7.png'"
                        alt=""
                    />
                </div>
            </div>
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">What Motivates You</h2>
                <p>
                    Understanding what drives you can help you stay inspired and
                    achieve your goals. Here’s what motivates someone with a
                    Dominant-Cautious style:
                </p>
                <ul class="list-disc pl-6">
                    <li>
                        <strong>Achievement and Success:</strong> You are
                        motivated by achieving goals and reaching new heights.
                        Success drives you to push boundaries and strive for
                        excellence.
                    </li>
                    <li>
                        <strong>Precision and Accuracy:</strong> You take pride
                        in doing things right and ensuring that your work is
                        precise and accurate. This commitment to quality keeps
                        you focused and diligent.
                    </li>
                    <li>
                        <strong>Leadership Opportunities:</strong> You thrive
                        when given the chance to lead and make important
                        decisions. Your leadership skills and confidence inspire
                        others to follow your guidance.
                    </li>
                    <li>
                        <strong>Problem Solving:</strong> You enjoy tackling
                        complex problems and finding effective solutions. This
                        intellectual challenge keeps you engaged and motivated.
                    </li>
                </ul>
            </div>
        </div>

        <div class="p-6">
            <h2 class="text-xl md:text-3xl mb-4">
                Table of Decision-Making Traits for Dominant-Cautious Style
            </h2>
            <table
                class="table-auto border-collapse border border-gray-300 w-full"
            >
                <thead>
                    <tr class="">
                        <th class="border border-gray-300 px-4 py-2 text-left">
                            Trait
                        </th>
                        <th class="border border-gray-300 px-4 py-2 text-left">
                            Descriptive Words
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Decisive and Confident
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Assertive, Bold, Certain, Clear, Self-assured,
                            Commanding, Resolute, Determined, Secure, Conclusive
                        </td>
                    </tr>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Analytical and Thorough
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Detailed, Precise, Meticulous, Careful, Methodical,
                            Logical, Thoughtful, Comprehensive, Systematic,
                            Exacting
                        </td>
                    </tr>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Strategic Thinking
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Ambitious, Forward-thinking, Strategic, Innovative,
                            Big-picture, Pioneering, Imaginative, Creative,
                            Goal-oriented, Visionary
                        </td>
                    </tr>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Risk Management
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Calculated, Cautious, Balanced, Rational, Judicious,
                            Measured, Prudent, Considerate, Evaluative, Sensible
                        </td>
                    </tr>
                </tbody>
            </table>
            <p class="mt-4 font-bold">
                These words capture how you make decisions and what keeps you
                motivated. Use this insight to channel your energy toward
                achieving your personal and academic goals.
            </p>
        </div>
    </div>

    <!-- For DI Style Report -->
    <div v-if="style == 'DI'">
        <div class="row">
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">How You Make Decisions</h2>
                <p>
                    With a Dominant-Influential (DI) style, your decision-making
                    process is often bold and visionary. Here’s how you approach
                    decisions:
                </p>
                <ul class="list-disc pl-6">
                    <li>
                        <strong>Decisive and Confident:</strong> You make
                        decisions quickly and confidently, relying on your
                        instincts and past experiences. Your assertiveness
                        allows you to take charge and guide others toward
                        achieving goals.
                    </li>
                    <li>
                        <strong>Visionary Thinking:</strong> You often look at
                        the big picture, focusing on long-term goals and
                        potential outcomes. This visionary approach helps you
                        set ambitious objectives and inspire others to work
                        toward them.
                    </li>
                    <li>
                        <strong>Persuasive Influence:</strong> You consider how
                        decisions will impact those around you and use your
                        influence to gain support and buy-in from others. Your
                        ability to rally people around a common goal is a key
                        strength in decision-making.
                    </li>
                    <li>
                        <strong>Risk-Taking:</strong> You are willing to take
                        calculated risks to achieve your goals. Your confidence
                        in your abilities and judgment allows you to navigate
                        challenges and adapt to changing circumstances.
                    </li>
                </ul>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img
                        class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Decisionmakingandmotivation/6.png'"
                        alt=""
                    />
                </div>
            </div>
        </div>

        <div class="p-6 pb-0 row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img
                        class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Decisionmakingandmotivation/7.png'"
                        alt=""
                    />
                </div>
            </div>
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">What Motivates You</h2>
                <p>
                    Understanding what drives you can help you stay inspired and
                    achieve your goals. Here’s what motivates someone with a
                    Dominant-Influential style:
                </p>
                <ul class="list-disc pl-6">
                    <li>
                        <strong>Achievement and Success:</strong> You are
                        motivated by achieving goals and reaching new heights.
                        Success drives you to push boundaries and strive for
                        excellence.
                    </li>
                    <li>
                        <strong>Leadership Opportunities:</strong> You thrive
                        when given the chance to lead and inspire others, using
                        your charisma and vision to guide teams toward success.
                    </li>
                    <li>
                        <strong>Recognition and Influence:</strong> You enjoy
                        being recognised for your contributions and influencing
                        others positively. This recognition fuels your passion
                        and dedication.
                    </li>
                    <li>
                        <strong>Challenge and Innovation:</strong> You are
                        motivated by challenges and enjoy finding innovative
                        solutions to complex problems. Your desire for growth
                        keeps you engaged and excited.
                    </li>
                </ul>
            </div>
        </div>

        <div class="p-6">
            <h2 class="text-xl md:text-3xl mb-4">
                Table of Decision-Making Traits for Dominant-Influential Style
            </h2>
            <table
                class="table-auto border-collapse border border-gray-300 w-full"
            >
                <thead>
                    <tr class="">
                        <th class="border border-gray-300 px-4 py-2 text-left">
                            Trait
                        </th>
                        <th class="border border-gray-300 px-4 py-2 text-left">
                            Descriptive Words
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Decisive and Confident
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Assertive, Bold, Certain, Clear, Self-assured,
                            Commanding, Resolute, Determined, Secure, Conclusive
                        </td>
                    </tr>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Visionary Thinking
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Ambitious, Forward-thinking, Strategic, Innovative,
                            Big-picture, Pioneering, Imaginative, Creative,
                            Goal-oriented, Inspirational
                        </td>
                    </tr>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Persuasive Influence
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Influential, Convincing, Charismatic, Engaging,
                            Motivating, Encouraging, Compelling, Supportive,
                            Captivating, Empowering
                        </td>
                    </tr>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Risk-Taking
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Daring, Adventurous, Courageous, Bold, Resilient,
                            Determined, Confident, Fearless, Venturesome,
                            Dynamic
                        </td>
                    </tr>
                </tbody>
            </table>
            <p class="mt-4 font-bold">
                These words capture how you make decisions and what keeps you
                motivated. Use this insight to channel your energy toward
                achieving your personal and academic goals.
            </p>
        </div>
    </div>

    <!-- For I Style Report -->
    <div v-if="style == 'I'">
        <div class="row">
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">How You Make Decisions</h2>
                <p>
                    With an Influential (I) style, your decision-making process
                    is often spontaneous and creative. Here’s how you approach
                    decisions:
                </p>

                <ul class="list-disc pl-6">
                    <li>
                        <strong>Intuitive and Flexible:</strong> You rely on
                        your instincts and are open to changing your mind when
                        new information or ideas come up.
                    </li>
                    <li>
                        <strong>Collaborative:</strong> You enjoy involving
                        others in your decision-making process, seeking input
                        from friends and family to ensure everyone’s on board.
                    </li>
                    <li>
                        <strong>Optimistic:</strong> You tend to focus on the
                        positive outcomes and possibilities when making
                        decisions, which helps you stay motivated and excited
                        about the future.
                    </li>
                    <li>
                        <strong>Creative Problem Solver:</strong> You think
                        outside the box and explore different options before
                        settling on a decision, which often leads to innovative
                        solutions.
                    </li>
                </ul>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img
                        class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Decisionmakingandmotivation/6.png'"
                        alt=""
                    />
                </div>
            </div>
        </div>

        <div class="p-6 pb-0 row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img
                        class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Decisionmakingandmotivation/7.png'"
                        alt=""
                    />
                </div>
            </div>
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">What Motivates You</h2>
                <p>
                    Understanding what drives you can help you stay inspired and
                    achieve your goals. Here’s what motivates someone with an
                    Influential style:
                </p>

                <ul class="list-disc pl-6">
                    <li>
                        <strong>Social Interaction:</strong> Being around
                        friends and engaging in group activities keeps you
                        energised and motivated.
                    </li>
                    <li>
                        <strong>Recognition and Praise:</strong> You thrive on
                        positive feedback and love being recognised for your
                        efforts and achievements.
                    </li>
                    <li>
                        <strong>Opportunities to Inspire:</strong> You feel
                        motivated when you can encourage and uplift others,
                        whether it’s through sharing ideas or leading a team.
                    </li>
                    <li>
                        <strong>Variety and Excitement:</strong> New experiences
                        and challenges keep you interested and eager to explore
                        different paths.
                    </li>
                </ul>
            </div>
        </div>

        <div class="p-6">
            <h2 class="text-xl md:text-3xl mb-4">
                Table of Decision-Making Traits for Influential Style
            </h2>
            <table
                class="table-auto border-collapse border border-gray-300 w-full"
            >
                <thead>
                    <tr class="">
                        <th class="border border-gray-300 px-4 py-2 text-left">
                            Trait
                        </th>
                        <th class="border border-gray-300 px-4 py-2 text-left">
                            Descriptive Words
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Intuitive and Flexible
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Adaptable, Spontaneous, Open-minded, Curious,
                            Versatile, Imaginative, Insightful, Innovative,
                            Unconventional, Exploratory
                        </td>
                    </tr>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Collaborative
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Inclusive, Cooperative, Team-oriented, Engaging,
                            Supportive, Involving, Consultative, Participative,
                            Open, Collective
                        </td>
                    </tr>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Optimistic
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Positive, Hopeful, Confident, Upbeat, Encouraging,
                            Reassuring, Buoyant, Cheerful, Sunny, Inspiring
                        </td>
                    </tr>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Creative Problem Solver
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Innovative, Resourceful, Inventive, Imaginative,
                            Original, Artistic, Clever, Ingenious, Visionary,
                            Creative
                        </td>
                    </tr>
                </tbody>
            </table>
            <p class="mt-4 font-bold">
                These words capture how you make decisions and what keeps you
                motivated. Use this insight to channel your energy toward
                achieving your personal and academic goals.
            </p>
        </div>
    </div>

    <!-- For ID Style Report -->
    <div v-if="style == 'ID'">
        <div class=" row">
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">How You Make Decisions</h2>
                <p class="">
                    With an Influential-Dominant (ID) style, your
                    decision-making process combines social awareness with
                    assertive leadership. Here’s how you typically make
                    decisions:
                </p>
                <ul class="list-disc pl-6">
                    <li>
                        <strong>Confident and Decisive:</strong> You make
                        decisions quickly and confidently. Your assertiveness
                        allows you to take charge and move forward without
                        hesitation.
                    </li>
                    <li>
                        <strong>Influence and Persuasion:</strong> You often
                        seek to persuade others and gain their support for your
                        decisions. Your ability to influence helps you rally
                        others around your ideas.
                    </li>
                    <li>
                        <strong>Goal-Oriented Approach:</strong> Your decisions
                        are driven by clear goals and objectives. You focus on
                        achieving results and ensuring that your actions align
                        with your ambitions.
                    </li>
                    <li>
                        <strong>Social Consideration:</strong> While you are
                        decisive, you also consider how your decisions impact
                        others. You aim to make choices that benefit both
                        yourself and those around you.
                    </li>
                </ul>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img
                        class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Decisionmakingandmotivation/6.png'"
                        alt=""
                    />
                </div>
            </div>
        </div>

        <div class="p-6 pb-0 row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img
                        class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Decisionmakingandmotivation/7.png'"
                        alt=""
                    />
                </div>
            </div>
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">What Motivates You</h2>
                <p class="">
                    Understanding what drives you can help you stay inspired and
                    achieve your goals. Here’s what motivates someone with an
                    Influential-Dominant style:
                </p>
                <ul class="list-disc pl-6">
                    <li>
                        <strong>Social Connections:</strong> You are motivated
                        by building and maintaining relationships. The
                        opportunity to connect with others and work
                        collaboratively energises you.
                    </li>
                    <li>
                        <strong>Helping Others:</strong> You find fulfilment in
                        supporting and helping those around you. Acts of
                        kindness and cooperation are significant motivators for
                        you.
                    </li>
                    <li>
                        <strong>Positive Feedback:</strong> Encouragement and
                        positive reinforcement from others boost your confidence
                        and drive. You thrive on recognition and praise for your
                        efforts.
                    </li>
                    <li>
                        <strong>Team Success:</strong> You are motivated by the
                        success of the group. Achieving goals together and
                        seeing the team thrive brings you great satisfaction.
                    </li>
                </ul>
            </div>
        </div>

        <div class="p-6">
            <h2 class="text-xl md:text-3xl mb-4">
                Table of Decision-Making Traits for Influential-Dominant Style
            </h2>
            <table
                class="table-auto border-collapse border border-gray-300 w-full"
            >
                <thead>
                    <tr class="">
                        <th class="border border-gray-300 px-4 py-2 text-left">
                            Trait
                        </th>
                        <th class="border border-gray-300 px-4 py-2 text-left">
                            Descriptive Words
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Confident and Decisive
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Assertive, Bold, Decisive, Self-assured,
                            Strong-willed, Determined, Commanding, Direct,
                            Authoritative, Unwavering
                        </td>
                    </tr>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Influence and Persuasion
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Persuasive, Compelling, Motivating, Convincing,
                            Inspiring, Charismatic, Influential, Engaging,
                            Enthralling, Captivating
                        </td>
                    </tr>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Goal-Oriented Approach
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Ambitious, Driven, Purposeful, Focused, Strategic,
                            Results-oriented, Intentional, Determined,
                            Motivated, Goal-focused
                        </td>
                    </tr>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Social Consideration
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Empathetic, Considerate, Understanding, Relational,
                            Compassionate, Supportive, Caring, Kind,
                            Cooperative, Respectful
                        </td>
                    </tr>
                </tbody>
            </table>
            <p class="mt-4 font-bold">
                These words capture how you make decisions and what keeps you
                motivated. Use this insight to channel your energy toward
                achieving your personal and academic goals
            </p>
        </div>
    </div>

    <!-- For IS Style Report -->
    <div v-if="style == 'IS'">
        <div class="row">
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">How You Make Decisions</h2>
                <p class="mb-4">
                    With an Influential-Supportive (IS) style, your
                    decision-making process combines social awareness with a
                    collaborative approach. Here’s how you typically make
                    decisions:
                </p>
                <ul class="list-disc pl-6 mb-6">
                    <li>
                        <strong>Collaborative Approach:</strong> You prefer to
                        involve others in the decision-making process. You value
                        input from friends, family, and peers, believing that
                        diverse perspectives lead to better outcomes.
                    </li>
                    <li>
                        <strong>Empathy-Driven Choices:</strong> Your decisions
                        often consider the feelings and needs of others. You aim
                        to make choices that create harmony and support for
                        those involved.
                    </li>
                    <li>
                        <strong>Optimistic Perspective:</strong> You approach
                        decisions with a positive outlook, focusing on potential
                        benefits and opportunities. This optimism helps you stay
                        motivated and encourages others to see the
                        possibilities.
                    </li>
                    <li>
                        <strong>Relationship-Oriented:</strong> Your decisions
                        are often influenced by your desire to build and
                        maintain strong relationships. You prioritise actions
                        that strengthen connections and promote a sense of
                        community.
                    </li>
                </ul>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img
                        class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Decisionmakingandmotivation/6.png'"
                        alt=""
                    />
                </div>
            </div>
        </div>

        <div class="p-6 pb-0 row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img
                        class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Decisionmakingandmotivation/7.png'"
                        alt=""
                    />
                </div>
            </div>
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">What Motivates You</h2>
                <p class="mb-4">
                    Understanding what drives you can help you stay inspired and
                    achieve your goals. Here’s what motivates someone with an
                    Influential-Supportive style:
                </p>
                <ul class="list-disc pl-6">
                    <li>
                        <strong>Social Connections:</strong> You are motivated
                        by building and maintaining relationships. The
                        opportunity to connect with others and work
                        collaboratively energises you.
                    </li>
                    <li>
                        <strong>Helping Others:</strong> You find fulfillment in
                        supporting and helping those around you. Acts of
                        kindness and cooperation are significant motivators for
                        you.
                    </li>
                    <li>
                        <strong>Positive Feedback:</strong> Encouragement and
                        positive reinforcement from others boost your confidence
                        and drive. You thrive on recognition and praise for your
                        efforts.
                    </li>
                    <li>
                        <strong>Team Success:</strong> You are motivated by the
                        success of the group. Achieving goals together and
                        seeing the team thrive brings you great satisfaction.
                    </li>
                </ul>
            </div>
        </div>

        <div class="p-6">
            <h2 class="text-xl md:text-3xl mb-4">
                Table of Decision-Making Traits for Influential-Supportive Style
            </h2>
            <table
                class="table-auto border-collapse border border-gray-300 w-full"
            >
                <thead>
                    <tr class="">
                        <th class="border border-gray-300 px-4 py-2 text-left">
                            Trait
                        </th>
                        <th class="border border-gray-300 px-4 py-2 text-left">
                            Descriptive Words
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Collaborative Approach
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Inclusive, Team-oriented, Cooperative, Open-minded,
                            Considerate, Listening, Participative, Democratic,
                            Harmonious, Engaging
                        </td>
                    </tr>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Empathy-Driven Choices
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Compassionate, Understanding, Caring, Sensitive,
                            Supportive, Thoughtful, Sympathetic, Kind-hearted,
                            Considerate, Gentle
                        </td>
                    </tr>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Optimistic Perspective
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Positive, Hopeful, Upbeat, Encouraging, Confident,
                            Inspirational, Forward-looking, Cheerful,
                            Enthusiastic, Motivating
                        </td>
                    </tr>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Relationship-Oriented
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Social, Friendly, Trustworthy, Loyal, Relational,
                            Connected, Affectionate, Bonding, Networking,
                            Harmonious
                        </td>
                    </tr>
                </tbody>
            </table>
            <p class="mt-4 font-bold">
                These words capture how you make decisions and what keeps you
                motivated. Use this insight to channel your energy toward
                achieving your personal and academic goals.
            </p>
        </div>
    </div>

    <!-- For S Style Report -->
    <div v-if="style == 'S'">
        <!-- Content for S -->

        <div class="row">
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">How You Make Decisions</h2>
                <p class="">
                    With a Supportive (S) style, your decision-making process is
                    often thoughtful and considerate. Here’s how you approach
                    decisions:
                </p>
                <ul class="list-disc pl-6">
                    <li>
                        <strong>Considerate and Thoughtful:</strong> You take
                        the time to weigh options carefully, considering how
                        your decisions might affect others before making a
                        choice.
                    </li>
                    <li>
                        <strong>Collaborative:</strong> You value input from
                        friends and family and often seek their opinions to
                        ensure that your decisions benefit everyone involved.
                    </li>
                    <li>
                        <strong>Harmony-Seeking:</strong> You aim for solutions
                        that maintain peace and harmony, avoiding conflict
                        whenever possible.
                    </li>
                    <li>
                        <strong>Steady and Reliable:</strong> You prefer to
                        stick with tried-and-true methods, making decisions that
                        provide stability and security.
                    </li>
                </ul>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img
                        class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Decisionmakingandmotivation/6.png'"
                        alt=""
                    />
                </div>
            </div>
        </div>

        <div class="p-6 pb-0 row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img
                        class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Decisionmakingandmotivation/7.png'"
                        alt=""
                    />
                </div>
            </div>

            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">What Motivates You</h2>
                <p class="">
                    Understanding what drives you can help you stay inspired and
                    achieve your goals. Here’s what motivates someone with a
                    Supportive style:
                </p>
                <ul class="list-disc pl-6">
                    <li>
                        <strong>Sense of Belonging:</strong> Feeling connected
                        to others and being part of a supportive group motivates
                        you to do your best.
                    </li>
                    <li>
                        <strong>Helping Others:</strong> You find fulfilment in
                        assisting others and making a positive impact in their
                        lives.
                    </li>
                    <li>
                        <strong>Recognition for Effort:</strong> Being
                        appreciated for your contributions encourages you to
                        continue putting in effort.
                    </li>
                    <li>
                        <strong>Consistency and Stability:</strong> Knowing what
                        to expect and having a routine gives you the confidence
                        to pursue your goals.
                    </li>
                </ul>
            </div>
        </div>

        <div class="p-6">
            <h2 class="text-xl md:text-3xl mb-4">
                Table of Decision-Making Traits for Supportive Style
            </h2>
            <table
                class="table-auto border-collapse border border-gray-300 w-full"
            >
                <thead>
                    <tr class="">
                        <th class="border border-gray-300 px-4 py-2 text-left">
                            Trait
                        </th>
                        <th class="border border-gray-300 px-4 py-2 text-left">
                            Descriptive Words
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Considerate and Thoughtful
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Deliberate, Careful, Reflective, Cautious,
                            Thoughtful, Mindful, Reasoned, Balanced, Pondering,
                            Meticulous
                        </td>
                    </tr>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Collaborative
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Inclusive, Team-focused, Cooperative, Open, Sharing,
                            Consultative, Communicative, Supportive, Engaged,
                            Participatory
                        </td>
                    </tr>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Harmony-Seeking
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Peaceful, Conciliatory, Harmonious,
                            Non-confrontational, Balanced, Calm, Tranquil,
                            Gentle, Soothing, Reassuring
                        </td>
                    </tr>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Steady and Reliable
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Consistent, Trustworthy, Dependable, Predictable,
                            Stable, Secure, Faithful, Constant, Reliable, Solid
                        </td>
                    </tr>
                </tbody>
            </table>
            <p class="mt-4 font-bold">
                These words capture how you make decisions and what keeps you
                motivated. Use this insight to channel your energy toward
                achieving your personal and academic goals.
            </p>
        </div>
    </div>

    <!-- For SC Style Report -->
    <div v-if="style == 'SC'">
        <div class=" row">
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">How You Make Decisions</h2>
                <p class="">
                    With a Supportive-Cautious (SC) style, your decision-making
                    process combines careful consideration and empathy. Here’s
                    how you typically make decisions:
                </p>
                <ul class="list-disc pl-6">
                    <li>
                        <strong>Thoughtful and Deliberate:</strong> You take the
                        time to think through your options carefully before
                        making a decision. Your thorough approach ensures that
                        you consider all the details and potential outcomes.
                    </li>
                    <li>
                        <strong>Consultative:</strong> You value the opinions
                        and perspectives of others and often seek input from
                        trusted friends, family, or mentors before making a
                        decision. This collaborative approach helps you make
                        well-rounded choices.
                    </li>
                    <li>
                        <strong>Risk-Averse:</strong> You tend to avoid taking
                        unnecessary risks and prefer to stick with what is known
                        and reliable. This cautious approach helps you make
                        decisions that are safe and well-considered.
                    </li>
                    <li>
                        <strong>Empathetic Consideration:</strong> You think
                        about how your decisions will impact others. Your
                        empathetic nature ensures that you make choices that are
                        considerate and supportive of those around you.
                    </li>
                </ul>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img
                        class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Decisionmakingandmotivation/6.png'"
                        alt=""
                    />
                </div>
            </div>
        </div>

        <div class="p-6 pb-0 row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img
                        class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Decisionmakingandmotivation/7.png'"
                        alt=""
                    />
                </div>
            </div>
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">What Motivates You</h2>
                <p class="">
                    Understanding what drives you can help you stay inspired and
                    achieve your goals. Here’s what motivates someone with a
                    Supportive-Cautious style:
                </p>
                <ul class="list-disc pl-6">
                    <li>
                        <strong>Helping Others:</strong> You are motivated by
                        opportunities to support and help others. Knowing that
                        your actions make a positive difference in someone’s
                        life is deeply fulfilling for you.
                    </li>
                    <li>
                        <strong>Achieving Accuracy:</strong> You take pride in
                        getting things right and achieving high-quality results.
                        Your attention to detail and commitment to accuracy
                        drive you to excel in your tasks.
                    </li>
                    <li>
                        <strong>Building Strong Relationships:</strong>
                        Developing and maintaining strong, supportive
                        relationships is important to you. You are motivated by
                        the connections you make and the trust you build with
                        others.
                    </li>
                    <li>
                        <strong>Stability and Security:</strong> You thrive in
                        environments that offer stability and predictability. A
                        sense of security helps you stay focused and motivated.
                    </li>
                </ul>
            </div>
        </div>

        <div class="p-6">
            <h2 class="text-xl md:text-3xl mb-4">
                Table of Decision-Making Traits for Supportive-Cautious Style
            </h2>
            <table
                class="table-auto border-collapse border border-gray-300 w-full"
            >
                <thead>
                    <tr class="">
                        <th class="border border-gray-300 px-4 py-2 text-left">
                            Trait
                        </th>
                        <th class="border border-gray-300 px-4 py-2 text-left">
                            Descriptive Words
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Thoughtful and Deliberate
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Careful, Considerate, Methodical, Analytical,
                            Detailed, Thorough, Reflective, Contemplative,
                            Cautious, Wise
                        </td>
                    </tr>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Consultative
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Collaborative, Inclusive, Open-minded, Respectful,
                            Cooperative, Thoughtful, Seeking Input, Supportive,
                            Trusting, Relational
                        </td>
                    </tr>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Risk-Averse
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Safe, Cautious, Prudent, Careful, Conservative,
                            Risk-averse, Secure, Protective, Sensible, Guarded
                        </td>
                    </tr>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Empathetic Consideration
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Understanding, Compassionate, Caring, Thoughtful,
                            Considerate, Supportive, Kind, Respectful,
                            Relational, Sensitive
                        </td>
                    </tr>
                </tbody>
            </table>
            <p class="mt-4 font-bold">
                These words capture how you make decisions and what keeps you
                motivated. Use this insight to channel your energy toward
                achieving your personal and academic goals.
            </p>
        </div>
    </div>

    <!-- For SI Style Report -->
    <div v-if="style == 'SI'">
        <div class=" row">
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">How You Make Decisions</h2>
                <p class="">
                    With a Supportive-Influential (SI) style, your
                    decision-making process combines empathy and sociability.
                    Here’s how you typically make decisions:
                </p>
                <ul class="list-disc pl-6">
                    <li>
                        <strong>Consideration of Others:</strong> You think
                        about how your decisions will impact those around you.
                        Your empathetic nature ensures that you make choices
                        that are considerate and supportive of others.
                    </li>
                    <li>
                        <strong>Consultative:</strong> You value the opinions
                        and perspectives of others and often seek input from
                        friends, family, or mentors before making a decision.
                        This collaborative approach helps you make well-rounded
                        choices.
                    </li>
                    <li>
                        <strong>Open to New Ideas:</strong> You are open to
                        exploring new ideas and possibilities. Your social
                        nature allows you to embrace different perspectives and
                        consider various options.
                    </li>
                    <li>
                        <strong>Seeking Harmony:</strong> You aim to make
                        decisions that maintain harmony and positive
                        relationships. Your supportive attitude ensures that
                        your choices contribute to a peaceful and cooperative
                        environment.
                    </li>
                </ul>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img
                        class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Decisionmakingandmotivation/6.png'"
                        alt=""
                    />
                </div>
            </div>
        </div>

        <div class="p-6 pb-0 row">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img
                        class="w-96 h-auto object-contain"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Decisionmakingandmotivation/7.png'"
                        alt=""
                    />
                </div>
            </div>
            <div class="col-6">
                <h2 class="text-xl md:text-3xl mb-4">What Motivates You</h2>
                <p class="">
                    Understanding what drives you can help you stay inspired and
                    achieve your goals. Here’s what motivates someone with a
                    Supportive-Influential style:
                </p>
                <ul class="list-disc pl-6">
                    <li>
                        <strong>Helping Others:</strong> You are motivated by
                        opportunities to support and help others. Knowing that
                        your actions make a positive difference in someone’s
                        life is deeply fulfilling for you.
                    </li>
                    <li>
                        <strong>Building Strong Relationships:</strong>
                        Developing and maintaining strong, supportive
                        relationships is important to you. You are motivated by
                        the connections you make and the trust you build with
                        others.
                    </li>
                    <li>
                        <strong>Social Interaction:</strong> You thrive on
                        social interaction and enjoy engaging with others. Being
                        part of a group and contributing to a collective effort
                        keeps you motivated.
                    </li>
                    <li>
                        <strong>Recognition and Appreciation:</strong> Positive
                        reinforcement and recognition for your efforts and
                        achievements motivate you to continue excelling. You
                        appreciate being acknowledged for your contributions.
                    </li>
                </ul>
            </div>
        </div>

        <div class="p-6">
            <h2 class="text-xl md:text-3xl mb-4">
                Table of Decision-Making Traits for Supportive-Influential Style
            </h2>
            <table
                class="table-auto border-collapse border border-gray-300 w-full"
            >
                <thead>
                    <tr class="">
                        <th class="border border-gray-300 px-4 py-2 text-left">
                            Trait
                        </th>
                        <th class="border border-gray-300 px-4 py-2 text-left">
                            Descriptive Words
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Considerate of Others
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Empathetic, Understanding, Thoughtful, Caring,
                            Supportive, Respectful, Kind, Compassionate,
                            Considerate, Relational
                        </td>
                    </tr>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Consultative
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Collaborative, Inclusive, Open-minded, Respectful,
                            Cooperative, Thoughtful, Seeking Input, Supportive,
                            Trusting, Relational
                        </td>
                    </tr>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Open to New Ideas
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Flexible, Adaptable, Curious, Innovative,
                            Open-minded, Imaginative, Creative, Explorative,
                            Accepting, Dynamic
                        </td>
                    </tr>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Seeking Harmony
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Peaceful, Harmonious, Cooperative, Inclusive,
                            Supportive, Respectful, Relational, Kind,
                            Considerate, Understanding
                        </td>
                    </tr>
                </tbody>
            </table>
            <p class="mt-4 font-bold">
                These words capture how you make decisions and what keeps you
                motivated. Use this insight to channel your energy toward
                achieving your personal and academic goals.
            </p>
        </div>
    </div>
    </div>
    </div>
</template>

<script>
import AssessmentTypes from "@/Layouts/AssessmentTypes.vue";

export default {
    name: "DecisionMaking",
    layout: AssessmentTypes,
    props: {
        style: String,
        childName: String,
        image: String,
    },
};
</script>

<style>
/* Add styles here */
/* h2, h2, h2, h4 {
    color: rgb(55 48 163 );
    font-weight: bold !important;
} */
div.col-6 > h4.font-medium,
li > div > h4,
div.space-y-2 > h4.font-medium {
    color: rgb(36, 168, 250);
    font-weight: bold;
    font-size: 19px;
}

div.col-6 > h4.font-medium,
li > div > h4,
strong,
div.space-y-2 > h4.font-medium {
    color: rgb(36, 168, 250);
    font-weight: bold;
    color: #fa25c4;
    /* font-size: 19px; */
}

h2,
.p-6 > .row > .col-6 > h2 {
    color: rgb(55 48 163);
    font-weight: bold !important;
}

table {
    width: 100%;
    border-collapse: collapse;
    border: 1px solid #ddd;
    border-radius: 8px;
    overflow: hidden;
}

thead {
    background: linear-gradient(to right, #8b5cf6, #ec4899);
    color: white;
}

th,
td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

tbody tr:nth-child(odd) {
    background-color: rgb(254 249 195);
    /* Yellow */
}

tbody tr:nth-child(even) {
    background-color: rgb(220 252 231);
    /* Green */
}

ul > li {
    margin-top: 18px;
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

    /* Adjust image container on mobile */
    .col-6 .flex.justify-center.items-center {
        margin: 1rem 0;
    }

    /* Adjust spacing between sections */
    .row + .row {
        margin-top: 1rem;
    }
    strong{
        font-size: 1rem;
    }

    /* Make text more readable on mobile */
    h2 {
        font-size: 1.5rem !important;
        /* line-height: 2rem; */
    }

    ul.list-disc {
        padding-left: 1rem;
    }
}
</style>
